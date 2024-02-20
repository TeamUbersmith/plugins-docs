<?php

namespace DemoClientTickets;

use UbersmithSDK\Attribute\Config;
use UbersmithSDK\Attribute\Hook;

use UbersmithSDK\API;
use UbersmithSDK\Error;
use UbersmithSDK\GUI;
use UbersmithSDK\Parameter;

use function UbersmithSDK\Util\FormatDateTime as DT;
use function UbersmithSDK\Util\I18n as I18n;
use function UbersmithSDK\Util\I18nf as I18nf;

// Datasource
require_once 'class.ticket_usage_datasource.php';

/**
 * Config Validation
 */
#[Config('Validate')]
function validate($config) {
	$limit = $config['limit'];
	if (!is_numeric($limit) || $limit <= 0 || $limit > 25) {
		return 'Limit must be numeric and between 1 and 25.';
	}

	return true;
}

/**
 * Client Profile Ticket List
 */
#[Hook('View\Client\Summary')]
function client_ticket_list(Parameter\Source\Client $client, Parameter\Plugin $plugin)
{
	$config = $plugin->config;
	$limit = $_REQUEST['limit'] ?? $config->limit;

	$tickets = API\Support\Ticket_List(array(
		'client_id' => $client->clientid,
		'order_by'  => 'ticket_id',
		'direction' => 'desc',
		'limit'     => $limit,
	));

	if (empty($tickets)) {
		throw new Error\SDKException(I18nf('No %s found', I18n('tickets')));
	}

	$output =
		GUI\FormStart('client_ticket_form', 'GET') . '
		<div style="padding: 5px;">' .
			GUI\Label('limit', I18n('Limit')) . ' ' .
			GUI\InputText('limit', $limit, ['size' => 3, 'style' => 'margin-bottom: 4px;']) . ' ' .
			GUI\InputHidden('clientid', $client->clientid) . ' ' .
			GUI\InputSubmit('client_ticket_submit', 'Submit') . '
		</div>
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
		</table>' .
		GUI\FormEnd();

	return $output;
}
