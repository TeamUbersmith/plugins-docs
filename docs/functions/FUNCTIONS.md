# Functions

The following is a list of functions that have been defined throughout Ubersmith:

## Debug functions
### UbersmithSDK\Debug\Log

Logs to the plugin logger for debugging purposes.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$message` | A message for the log. |
| `array` \| `object` \| `string` | `$logItem` | A context array of mixed data type/object/string for the log. |

**Return value:** `void` 


## Error functions
### UbersmithSDK\Error\IsError

Returns whether a result is an error.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$result` | Result. |

**Return value:** `bool` 


## GUI functions
### UbersmithSDK\GUI\ConfirmInputButton

Generate a button with a confirmation message.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$url` | URL where the browser will be forwarded upon confirmation. |
| `string` | `$name` | Button name. |
| `string` | `$label` | Button label. |
| `mixed` | `$message` | The confirmation message to display. |
| `array` | `$attributes` | Additional button attributes. |
| `string` | `$id` | Button ID. |

**Return value:** `string` Button.

### UbersmithSDK\GUI\ConfirmInputButtonJS

Generate a button with a confirmation message that will execute JavaScript after confirmation.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$javascript` | JavaScript that will be executed after confirmation. |
| `string` | `$name` | Button name. |
| `string` | `$label` | Button label. |
| `mixed` | `$message` | The confirmation message to display. |
| `array` | `$attributes` | Additional button attributes. |
| `string` | `$id` | Button ID. |

**Return value:** `string` Button.

### UbersmithSDK\GUI\ConfirmLink

Generate a link with a confirmation message.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$url` | URL where the browser will be forwarded upon confirmation. |
| `string` | `$text` | Link text. |
| `string` | `$message` | The confirmation message to display. |
| `array` | `$attributes` | Additional link attributes. |
| `string` | `$id` | Link ID. |

**Return value:** `string` Confirm link.

### UbersmithSDK\GUI\ConfirmLinkJS

Generate a link with a confirmation message that will execute JavaScript after confirmation.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$javascript` | JavaScript that will be executed after confirmation. |
| `string` | `$text` | Link text. |
| `string` | `$message` | The confirmation message to display. |
| `array` | `$attributes` | Additional link attributes. |
| `string` | `$id` | Link ID. |

**Return value:** `string` Confirm link.

### UbersmithSDK\GUI\FormEnd

Generate a form end tag.

**Return value:** `string` Form end tag.

### UbersmithSDK\GUI\FormStart

Generate a form start tag.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Form name. |
| `string` | `$method` | Form method. |
| `string` | `$action` | Form action. |
| `array` | `$attributes` | Form attributes. |
| `bool` | `$csrf` | Add cross-site request forgery (CSRF) token to form. |
| `string` | `$id` | Form ID. |

**Return value:** `string` Form start tag.

### UbersmithSDK\GUI\Icon

Generate a CSS icon.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Icon name. |
| `string` | `$width` | Icon width. |
| `string` | `$height` | Icon height. |
| `array` | `$attributes` | Additional icon attributes. |
| `string` | `$id` | Icon ID. |

**Return value:** `string` CSS icon.

### UbersmithSDK\GUI\Image

Generate an image HTML element.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$src` | Image URL. |
| `string` | `$width` | Image width. |
| `string` | `$height` | Image height. |
| `array` | `$attributes` | Additional image attributes. |
| `string` | `$id` | Image ID. |

**Return value:** `string` HTML.

### UbersmithSDK\GUI\InputAutocomplete

Generate an autocomplete input field.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$value` | Field value. |
| `string` | `$label` | Field label. |
| `string` | `$ajax_url` | Ajax URL. |
| `array` | `$attributes` | Additional field attributes. |
| `array` | `$attributes_hidden_value_field` | Additional field attributes for hidden value field. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Autocomplete input field.

### UbersmithSDK\GUI\InputButton

Generate an input button HTML element.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Button name. |
| `string` | `$label` | Button label. |
| `array` | `$attributes` | Additional button attributes. |
| `string` | `$id` | Button ID. |

**Return value:** `string` HTML.

### UbersmithSDK\GUI\InputCancelClose

Generate a button that closes the current window.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Button name. |
| `string` | `$label` | Button label. |
| `array` | `$attributes` | Additional button attributes. |
| `string` | `$id` | Button ID. |

**Return value:** `string` Button that closes the current window.

### UbersmithSDK\GUI\InputCheckAll

Generate a check all / uncheck all checkbox.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Check all / uncheck all checkbox.

### UbersmithSDK\GUI\InputCheckbox

Generate an input checkbox HTML element.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$value` | Field value. |
| `string` | `$selected` | Whether checkbox is selected. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` HTML.

### UbersmithSDK\GUI\InputDate

Generate a date selector input field.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$value` | Selected value. |
| `string` | `$title` | Field Title. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Date selector input field.

### UbersmithSDK\GUI\InputDateTime

Generate a date selector input field.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$value` | Selected value. |
| `string` | `$title` | Field Title. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Date selector input field.

### UbersmithSDK\GUI\InputFile

Generate a file upload input field.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` File upload input field.

### UbersmithSDK\GUI\InputHidden

Generate a hidden input field.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$value` | Field value. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Hidden input field.

### UbersmithSDK\GUI\InputImage

Generate an image input field.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$value` | Field value. |
| `string` | `$img_class` | class defining the image. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Image input field.

### UbersmithSDK\GUI\InputImageButton

Generate an image button.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Button name. |
| `string` | `$value` | Button label. |
| `string` | `$img_class` | class defining the image. |
| `array` | `$attributes` | Additional button attributes. |
| `string` | `$id` | Button ID. |

**Return value:** `string` Image button.

### UbersmithSDK\GUI\InputPassword

Generate a password input field.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$value` | Field value. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Password input field.

### UbersmithSDK\GUI\InputRadio

Generate a radio button.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$value` | Field value. |
| `string` | `$selected` | Whether radio button is selected. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Radio button.

### UbersmithSDK\GUI\InputSelect

Generate a select box.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `array` | `$options` | Indexed array of options. |
| `string` | `$selected` | Value of selected option. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Select box.

### UbersmithSDK\GUI\InputSelectGrouped

Generate a grouped select box.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `array` | `$options` | Indexed array of options. |
| `string` | `$selected` | Value of selected option. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Grouped select box.

### UbersmithSDK\GUI\InputSelectMultipleCheckbox

Generate a select box with checkboxes.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `array` | `$options` | Indexed array of options. |
| `array` | `$selected` | Values of selected options. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |
| `bool` | `$enable_search` | Whether to show search input field. |

**Return value:** `string` Select box with checkboxes.

### UbersmithSDK\GUI\InputSubmit

Generate a submit form button.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$value` | Field value. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Submit form button.

### UbersmithSDK\GUI\InputText

Generate a text input field.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$value` | Field value. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Text input field.

### UbersmithSDK\GUI\InputTextarea

Generate a textarea input field.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$value` | Field value. |
| `int` | `$rows` | Number of rows. |
| `int` | `$columns` | Number of columns. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Textarea.

### UbersmithSDK\GUI\InputYesNo

Generate yes / no radio buttons.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$name` | Field name. |
| `string` | `$selected` | Selected value. |
| `array` | `$attributes` | Additional field attributes. |
| `string` | `$id` | Field ID. |

**Return value:** `string` Yes / no radio buttons.

### UbersmithSDK\GUI\Label

Generate a label HTML element.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$field_id` | Field ID. |
| `string` | `$label` | Label text. |
| `array` | `$attributes` | Additional label attributes. |
| `string` | `$id` | Label ID. |
| `string` | `$separator` | Separator appended to label text. |

**Return value:** `string` HTML.

### UbersmithSDK\GUI\Link

Generate a link HTML element.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$url` | Link URL. |
| `string` | `$text` | Link text. |
| `array` | `$attributes` | Additional link attributes. |
| `string` | `$id` | Link ID. |

**Return value:** `string` HTML.

### UbersmithSDK\GUI\MessageBox

Generate a message box.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$type` | Message type of 'error' (default), 'notice', or 'success'. |
| `string` | `$message` | Message. |
| `string` | `$is_html` | Whether the message is HTML. |

**Return value:** `string` Message box.

### UbersmithSDK\GUI\OddEven

Generate an odd / even class name based on whether a table row is odd or even.

**Return value:** `string` Odd / even class name.

### UbersmithSDK\GUI\PluginPopupLink

Generate a popup link to another plugin file.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `\UbersmithSDK\Parameter\Plugin` | `$plugin` | Plugin. |
| `string` | `$url` | Popup link URL. |
| `string` | `$text` | Popup link text. |
| `string` | `$title` | Popup link title. |
| `string` | `$target` | Target window name. |
| `mixed` | `$details` | Details of popup window. |
| `array` | `$attributes` | Additional popup link attributes. |
| `string` | `$id` | Popup link ID. |

**Return value:** `string` Popup link.

### UbersmithSDK\GUI\PopupLink

Generate a popup link.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$url` | Popup link URL. |
| `string` | `$text` | Popup link text. |
| `string` | `$target` | Target window name. |
| `mixed` | `$details` | Details of popup window. |
| `array` | `$attributes` | Additional popup link attributes. |
| `string` | `$id` | Popup link ID. |

**Return value:** `string` Popup link.


## Mail functions
### UbersmithSDK\Mail\EnforceAutoSubmitted

Returns whether the system enforces RFC 3834 compliance.

**Return value:** `bool` Whether the system enforces RFC 3834 compliance.

### UbersmithSDK\Mail\ParseEmailAddress

Parse an email address to get it's parts.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$email_address` | Email Address to parse. |

**Return value:** `array` Email parts.

### UbersmithSDK\Mail\SendAuditedMail

Send an audited email. All contacts with 'Audit Account' enabled will receive a copy.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `int` | `$client_id` | Client ID. |
| `string` | `$recipient` | Email recipient. |
| `string` | `$subject` | Email subject. |
| `string` | `$body` | Email body. |
| `array` | `$headers` | Email headers. |
| `array` | `$attach` | Email attachments. |
| `bool` | `$auto_footer` | Add auto-footer to email. |

**Return value:** `array|bool` Send email result - array(subject, body) on success or false on error.

### UbersmithSDK\Mail\SendMail

Send an email. This email will not be added to the mail log. See "Store*" email version for this. I.E. `StoreAuditedMail`

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$recipient` | Email recipient. |
| `string` | `$subject` | Email subject. |
| `string` | `$body` | Email body. |
| `array` | `$headers` | Email headers. |
| `array` | `$attach` | Email attachments. |
| `bool` | `$auto_footer` | Add auto-footer to email. |

**Return value:** `bool` Send email result - array(subject, body) on success or false on error.

### UbersmithSDK\Mail\StoreAuditedMail

Send and store an audited email.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `int` | `$client_id` | Client ID. |
| `string` | `$recipient` | Email recipient. |
| `string` | `$subject` | Email subject. |
| `string` | `$body` | Email body. |
| `array` | `$headers` | Email headers. |
| `array` | `$attach` | Email attachments. |
| `bool` | `$auto_footer` | Add auto-footer to email. |

**Return value:** `bool` Send email result - array(subject, body) on success or false on error.


## Payment functions
### UbersmithSDK\Payment\Error

Logs an error and throws an SDKException.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `object` | `$plugin` | Plugin. |
| `string` | `$type` | Type. |
| `mixed` | `$error` | Error. |

**Return value:** `void` 

### UbersmithSDK\Payment\GetAccountCreditPaymentTypes

Return the list of types that can be used to create an account credit.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `array` \| `null` | `$options` | Available (bool) options are<br>- collapse: to return types without coupon<br>- nocoupon: to return types without parent grouping |
| `string` \| `null` | `$brand_id` | Brand Id used for custom payment types |
| `string` \| `null` | `$lang_locale` | Language locale used for custom payment type labels |

**Return value:** `array` 

### UbersmithSDK\Payment\GetCustomPaymentTypes

Return the list of custom payment types.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `bool` | `$only_active` | Whether to return only the active types |
| `string` \| `null` | `$brand_id` | Brand Id |
| `string` \| `null` | `$lang_locale` | Language locale used for labels |

**Return value:** `array` 

### UbersmithSDK\Payment\GetGatewayPaymentTypes

Return the list of available payment types from payment gateways.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `bool` | `$only_active` | Whether to return only the active types |

**Return value:** `array` 

### UbersmithSDK\Payment\GetReceivedPaymentTypes

Return the list of available payment methods that can be used to mark a 'Received Payment' on an invoice.
This includes:
- Ubersmith core types: e.g. 'check', 'wire' and 'cash'.
- Payment Gateways: e.g. 'paypal'
- Custom Payment Types

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `bool` | `$only_active` | Whether to return only the active types |
| `string` \| `null` | `$brand_id` | Brand Id used for custom payment types |
| `string` \| `null` | `$lang_locale` | Language locale used for custom payment type labels |

**Return value:** `array` 

### UbersmithSDK\Payment\Log

Logs a message with details.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `object` | `$plugin` | Plugin. |
| `string` | `$type` | Type. |
| `string` | `$message` | Message. |
| `mixed` | `$details` | Details. |

**Return value:** `void` 

### UbersmithSDK\Payment\MakeInvoiceIdUnique

Makes an invoice ID unique based on previous payments.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `int` | `$invoice_id` | Invoice ID. |
| `string` | `$payment_gateway_name` | Payment gateway name. |

**Return value:** `string` Unique invoice ID.


## User functions
### UbersmithSDK\User\AccessDenied

Returns action denying user access to requested resource

**Return value:** `void` 

### UbersmithSDK\User\GetClassId

Returns the user's class ID.

**Return value:** `int` Class ID.

### UbersmithSDK\User\GetClientId

Returns the user's client ID.

**Return value:** `int` Client ID.

### UbersmithSDK\User\GetContactId

Returns the user's contact ID.

**Return value:** `int` Contact ID.

### UbersmithSDK\User\GetEmail

Returns the user's email.

**Return value:** `string` Email.

### UbersmithSDK\User\GetFullName

Returns the user's full name.

**Return value:** `string` Full name.

### UbersmithSDK\User\GetLastLogin

Returns the user's last login.

**Return value:** `int` Last login.

### UbersmithSDK\User\GetUserId

Returns the user's ID.

**Return value:** `int` User ID.

### UbersmithSDK\User\GetUsername

Returns the user's username.

**Return value:** `string` Username.

### UbersmithSDK\User\HasBrandAccess

Returns whether the user has access to the Brand Id passed as parameter.
If Null, check against the current Brand in the Users's session.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$brandId` |  |

**Return value:** `bool|\PEAR` 

### UbersmithSDK\User\HasClientManagerAccess

Returns whether the user has some access to the Clients acl

**Return value:** `bool|\PEAR` 

### UbersmithSDK\User\HasDeviceManagerAccess

Returns whether the user has some access to the Devices acl

**Return value:** `bool|\PEAR` 

### UbersmithSDK\User\HasPermission

Returns whether the user has the requested acl resource / action combination

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| mixed | `$resource` |  |
| mixed | `$action` |  |

**Return value:** `bool|\PEAR` 

### UbersmithSDK\User\HasReportManagerAccess

Returns whether the user has some access to the Reports acl

**Return value:** `bool|\PEAR` 

### UbersmithSDK\User\HasSalesManagerAccess

Returns whether the user has some access to the Sales acl

**Return value:** `bool|\PEAR` 

### UbersmithSDK\User\IsAdmin

Returns whether the user is an admin.

**Return value:** `bool` 

### UbersmithSDK\User\IsClient

Returns whether the user is a client.

**Return value:** `bool` 

### UbersmithSDK\User\IsLead

Returns whether the user is a lead.

**Return value:** `bool` 

### UbersmithSDK\User\IsLoggedIn

Returns whether the user is logged in.

**Return value:** `bool` 


## Util functions
### UbersmithSDK\Util\CSVParse

Parse a block of CSV data.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$csv_string` | CSV string to parse. |
| `string` | `$field_delimiter` | Field delimiter. |
| `bool` | `$row_delimiter` | Row delimiter. |
| `string` | `$quote_character` | Quote character. |

**Return value:** `array` 2-dimensional array of rows and items.

### UbersmithSDK\Util\CSVRow

Generate a CSV formatted string.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `array` | `$csv_data` | Array of CSV data. |

**Return value:** `string` CSV formatted string.

### UbersmithSDK\Util\CSVSplit

Parse a single line of CSV data.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$csv_string` | CSV string to parse. |
| `string` | `$field_delimiter` | Field delimiter. |
| `bool` | `$remove_quotes` | Whether to remove quotes. |
| `string` | `$quote_character` | Quote character. |

**Return value:** `array` Array of items.

### UbersmithSDK\Util\DateDifference

Check date difference between a timestamp and the current time.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$timestamp` | Unix timestamp. |

**Return value:** `array` Difference in years, months, and days.

### UbersmithSDK\Util\DateFormat

Return the system's date format.

**Return value:** `string` System's date format.

### UbersmithSDK\Util\DateInterval

Generate a timestamp based on a timestamp and an interval.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$timestamp` | Unix timestamp. |
| `string` | `$interval` | Interval. |

**Return value:** `int` Generated Unix timestamp.

### UbersmithSDK\Util\FormatArrayResponse

Adds 'success' bool and error msg to the response.
If $error_msg is empty, success = true is used.
If $error_msg is NOT empty, success = false is used and the message is added under the key 'error_msg'.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `array` | `$response` |  |
| `string` | `$error_msg` |  |

**Return value:** `array` 

### UbersmithSDK\Util\FormatCurrency

Format a number into a currency format with a currency symbol.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `float` | `$amount` | Amount. |
| `string` | `$symbol` | Currency symbol. |
| `int` | `$precision` | Precision. |

**Return value:** `string` Formatted currency.

### UbersmithSDK\Util\FormatCurrencyRaw

Format a number into a currency format without a currency symbol.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `float` | `$amount` | Amount. |
| `int` | `$precision` | Precision. |

**Return value:** `string` Formatted currency.

### UbersmithSDK\Util\FormatDate

Format a timestamp to string representation of the date.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$timestamp` | (optional) Unix timestamp. If the timestamp is null and $empty_now is true, now() will be use. Default: null |
| `string` | `$format` | (optional) Date format supported by PHP date function. Default: Ubersmith configured date format. |
| `string` | `$empty_now` | (optional) Has effect when $timestamp is null. Default: true.<br>true: use now() as the $timestamp.<br>false: return an empty string. |

**Return value:** `string` Formatted date.

### UbersmithSDK\Util\FormatDateTime

Format a timestamp to a date and time as a string.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$timestamp` | Unix timestamp. |
| `string` | `$format` | Date format. |
| `string` | `$empty_now` | Set value to now if $timestamp is null. Pass false to return empty string instead. |

**Return value:** `string` Formatted date and time.

### UbersmithSDK\Util\FormatTime

Format a timestamp to its time as a string.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$timestamp` | Unix timestamp. |
| `string` | `$format` | PHP Date format. Default: 'g:i:s A' |
| `string` | `$empty_now` | Set value to now if $timestamp is null. Pass false to return empty string instead. |

**Return value:** `string` Formatted time.

### UbersmithSDK\Util\GetPercentageColor

Get a color based on a percentage, ae: high ~ red, mid ~yellow .

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `int` | `$score` |  |
| `int` | `$total` |  |

**Return value:** `string` The color

### UbersmithSDK\Util\GetStripedBgColor

Get a background color for a striped table, alternating between two.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `bool` | `$` | |null  $start_with_color1 |
| `string` \| `null` | `$color1` |  |
| `string` \| `null` | `$color2` |  |

**Return value:** `string` The background color

### UbersmithSDK\Util\HTMLEncode

HTML encode a string.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$string` | String to HTML encode. |
| `mixed` | `$quote_style` | Quote style. |

**Return value:** `string` HTML encoded string.

### UbersmithSDK\Util\I18n

Translate a string using the default locale.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$string` | String to translate. |
| `string` | `$context` | Context. |
| `string` | `$locale` | Locale. |

**Return value:** `string` Translated string.

### UbersmithSDK\Util\I18nf

Translate a string containing substitutions using the default locale.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$string` | String to translate. |
| `mixed` | `$substitutions` | variadic parameter of Substitutions. |

**Return value:** `string` Translated string.

### UbersmithSDK\Util\ParseEmailAddress

Parse an email address to get it's parts.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$email_address` | Email Address to parse. |

**Return value:** `array` Email parts.

### UbersmithSDK\Util\Pluck

Returns a new array containing only the specified keys.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `array` | `$array` |  |
| `string` | `$keys` |  |

**Return value:** `array` Array containing only the specified keys.

### UbersmithSDK\Util\SecondsToTime

Convert seconds to time.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$seconds` | Seconds to convert. |

**Return value:** `string` Time.

### UbersmithSDK\Util\StringDateToTimestamp

Convert string representing a date to a timestamp.
Can be used to convert inputs from UbersmithSDK\GUI\InputDate and UbersmithSDK\GUI\InputDateTime
back to a timestamp.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$str` |  |

**Return value:** `int|false` false on failure

### UbersmithSDK\Util\TimeAgo

Based on a timestamp, determine how long ago it was and return that as a formatted string.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$timestamp` | Unix timestamp. |
| `bool` | `$short` | Shortened version of the time notation (e.g.: hours -> hrs). |

**Return value:** `string` Time ago.

### UbersmithSDK\Util\Tip

Generate a tip icon.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$text` | Tip text. |
| `string` | `$title` | Tip title. |

**Return value:** `string` Tip icon.

### UbersmithSDK\Util\URLEncode

URL encode a string.

**Parameters:**
| Type | Name | Description |
| --- | --- | --- |
| `string` | `$string` | String to URL encode. |

**Return value:** `string` URL encoded string.


[Go back](../DEVELOPMENT.md)
