# Developing a plugin

A plugin is a collection of files, functions, hooks, SDK methods and calls, and Datasources. Plugins reside in a subdirectory under the `plugins/` directory on the Ubersmith server.

To illustrate abilities, we will develop an example plugin. The plugin is called **Client Tickets** and it will add a new section to the Client Profile page to display a list of the client's most recent tickets. You can download the full plugin [here](../example/client_tickets.zip).

## Files
A plugin requires a `manifest.json` and `bootstrap.php` file.

### Optional
* Additional PHP files that the bootstrap file includes.
* Datasource classes.
* JavaScript files.
* CSS files.
* Any additional files the plugin needs (for example, images).

## Manifest file
The manifest file, `manifest.json`, is a JSON file that specifies details about the plugin such as name, version, and other configuration details. For more information about the manifest file, [see Manifest file]().

Below is our example plugin manifest file:
```json
{
	"sdk_version": 1,
	"name": "Client Tickets",
	"namespace": "Docs\\ClientTickets",
	"description": "Display a list of a client's most recent tickets on the client profile page.",
	"version": "1.0",
	"modules": {
		"client_tickets_brands": {
			"component": "brands",
			"label": "Client Tickets Brands",
			"description": "Brands permitted to execute plugin."
		},
		"client_tickets_usage_datasource": {
			"component": "datasources",
			"label": "Client Tickets Usage Datasource",
			"description": "Usage plans permitted to use this datasource."
		}
	},
	"config_items": {
		"limit": {
			"scope": ["module", "entity"],
			"modules": ["client_tickets_brands"],
			"label": "Limit",
			"type": "text",
			"default": 10
		},
		"usage": {
			"scope": ["module", "entity"],
			"modules": ["client_tickets_usage_datasource"],
			"label": "Usage",
			"type": "text",
			"default": 0
		}
	}
}
```

For more information about the manifest file, see [Manifest file](manifest/MANIFEST.md).

## Bootstrap file
The bootstrap file, `bootstrap.php`, is a PHP file the plugin executes first. This file contains functions that implement defined hooks throughout Ubersmith. The bootstrap can also include other PHP files, to divide the code into multiple PHP files.  For more info, [see Bootstrap]().

The bootstrap file requires a namespace:
```php
namespace Docs\ClientTickets;
```

## SDK Functions
Various Ubersmith SDK functions are available, such as formatting a number in a currency format.  For more information about the functions available to use, [see Functions](functions/FUNCTIONS.md).
```php
UbersmithSDK\Util\FormatCurrency(100);
```

In PHP it is not necessary to specify the entire namespace if you use the `use` operator:
```php
use UbersmithSDK\Util;

Util\FormatCurrency(100);
```

This can be simplified even further by using `use function A as B` to alias an individual function:
```php
use function UbersmithSDK\Util\FormatCurrency as C;

C(100);
```

For our example we will be utilizing the **API**, **Error**, **GUI**, **Parameter**, and **Util** functions as well as using aliases for a few commonly used functions:
```php
use UbersmithSDK\API;
use UbersmithSDK\Error;
use UbersmithSDK\GUI;
use UbersmithSDK\Parameter;
use UbersmithSDK\Util;

use function UbersmithSDK\Util\FormatDateTime as DT;
use function UbersmithSDK\Util\I18n as I18n;
use function UbersmithSDK\Util\I18nf as I18nf;
```

## SDK API
The Ubersmith Plugin SDK also wraps the Ubersmith API endpoints to transact with Ubersmith. An API endpoint addressable by URL query parameter `method=section.some_action` is accessible through the SDK as a function in the form of `API\Section\Some_Action()`. API parameters are passed to the SDK API via an associative array where the keys are the API parameters.  SDK API functions are executed internally without going through a full HTTP stack call.  For more information about using the Ubersmith API, see [Using the Ubersmith API](https://docs.ubersmith.com/display/UbersmithDocumentation/Using+the+Ubersmith+API).

For our example, we want to use the `API\Support\Ticket_List` function to list the client’s most recent tickets in descending order. We also want to display an error if no tickets are found.
```php
$config = $plugin->config;

$tickets = API\Support\Ticket_List(array(
	'client_id' => $client->clientid,
	'order_by'  => 'ticket_id',
	'direction' => 'desc',
	'limit'     => $config->limit,
));

if (empty($tickets)) {
	Error\Exception(I18nf('No %s found', I18n('tickets')));
}
```

## Hooks
Various hooks are defined in areas where Ubersmith functionality can be extended. A hook requires a function with an annotation describing the hook you want to implement. For more information about the hooks available for use, see [Hooks](hooks/HOOKS.md).

For our example, we use the `View\Client\Summary` hook to display a new section on the Client Profile page. This is done by using the `client_ticket_list` function with an annotation above it refering to the hook. 

Parameters for additional details are also available, such as the respective source (`$client` in this case) and the respective `$plugin`:
```php
/**
 * Client Profile Ticket List
 *
 * @Hook View\Client\Summary
 */
function client_ticket_list(Parameter\Source\Client $client, Parameter\Plugin $plugin)
{

}
```

A validation hook is added to validate config items. This hook is executed when saving config values on the configuration page. In this case we will ensure the limit is numeric and between 1 and 25.:
```php
/**
 * Config Validation
 *
 * @Config Validate
 */
function validate($config) {
	$limit = $config['limit'];
	if (!is_numeric($limit) || $limit <= 0 || $limit > 25) {
		return 'Limit must be numeric and between 1 and 25.';
	}

	return true;
}
```

The final step is to format and return the output for the `client_ticket_list` function.
```php
// HTML for Client tickets table
$output = '
	<table class="table-body" style="width: 100%;">
		<thead>
			<tr class="header">
				<th>Ticket #</th>
				<th>Subject</th>
				<th>Opened</th>
				<th>Department</th>
			</tr>
		</thead>
		<tbody>';
// Recent tickets returned from API\Support\Ticket_List()
foreach ($tickets as $ticket) {
	$output .= '
			<tr class="' . GUI\OddEven() . '">
				<td>' . $ticket['ticket_id'] . '</td>
				<td>' . $ticket['subject'] . '</td>
				<td>' . DT($ticket['timestamp']) . '</td>
				<td>' . $ticket['q_name'] . '</td>
			</tr>';
}
$output .= '
		</tbody>
	</table>';

return $output;
```

## Datasource
A datasource is a specialized plugin module whose purpose is to collect usage metrics for defined resources.  Any entity or device can be considered a resource of a datasource.  The definition and it's manner of data retrieval is left entirely up to the author of the plugin.  For example, a datasource can define switch ports as a resource to collect bandwidth bits -OR- an SMTP server as a resource to tally outbound emails.  Usage metrics collected are used by an assigned Service Plan allowing relevant Services to calculate a billable cost.

A datasource requires a class implementing the `UbersmithSDK\Usage\Data\Source` interface as well as some annotations. For more information about the functions available to use, [see Datasources](). 

To implement a datasource you need to set a namespace and use Ubersmith SDK packages `Usage` and `Parameter`:
```php
namespace Docs\ClientTickets;

use UbersmithSDK\Usage;
use UbersmithSDK\Parameter;
```

We will setup the class with the  `@UsageDatasource` annotation, which means implementing a datasource with a certain name and `@label` to be displayed in Plugin Settings UI.  The datasource class is required to implement `Usage\Data\Source`.
```php
/**
 * @UsageDatasource client_tickets_usage_datasource
 * @label Client Tickets Usage Datasource
 */
class UsageDatasource implements Usage\Data\Source
{

}
```

Datasources also require a few methods to be implemented in order to return relevant information.

The `get_supported_resources` method specifies what resources the datasource uses and the units of measure. In this case we have a resource for ticket time with the units `minutes` and `hours`.
```php
public function get_supported_resources()
{
	return array(
		new Usage\DefaultResource('ticket_time', 'Ticket Time', array(
			'min' => 'minutes',
			'hr'  => 'hours',
		)),
	);
}
```

The `convert_amount` method specifies how units should be converted. For example, want to specify that 60 minutes should convert to 1 hour.
```php
public function convert_amount($amount, Usage\Resource $resource, $to_unit)
{
	if ($to_unit == 'hr') {
		$amount = $amount / 60;
	}

	return $amount;
}
```

The `fetch` method returns usage data. For example, you may do a cURL request to an external resource to get usage data. In this example we will always return 100 minutes of ticket time.
```php
public function fetch(Parameter\Source\Service $service, $resources, $startdate, $enddate)
{
	$usage = array();
	foreach ($resources as $resource) {
		$usage[] = new Usage\Data($resource, 100);
	}

	return $usage;
}
```

The `set_plugin` method is used when access to the plugin object is required elsewhere in the datasource class.
```php
private $plugin;

public function set_plugin(Parameter\Plugin $plugin)
{
	$this->plugin = $plugin;
}
```

Finally, the datasource class will need to be included in the bootstrap file:
```php
// Datasource
require_once 'class.usage_datasource.php';
```

[Go back](../README.md)
