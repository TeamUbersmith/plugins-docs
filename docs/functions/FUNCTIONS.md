# Functions

The following is a list of functions that have been defined throughout Ubersmith:

## Debug functions

### UbersmithSDK\Debug\Log

Logs to ExecutionLogger for debugging purposes.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $message` | A message for the log. |

**Return value:** `void`

## Error functions

### UbersmithSDK\Error\IsError

Returns whether a result is an error.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $result` | Result. |

**Return value:** `bool`

## GUI functions

### UbersmithSDK\GUI\ConfirmInputButton

Generate a button with a confirmation message.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $url` | URL where the browser will be forwarded upon confirmation. |
| `string $name` | Button name. |
| `string $label` | Button label. |
| `mixed $message` | The confirmation message to display. |
| `array $attributes` | Additional button attributes. |
| `string $id` | Button ID. |

**Return value:** `string Button.`

### UbersmithSDK\GUI\ConfirmInputButtonJS

Generate a button with a confirmation message that will execute JavaScript after confirmation.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $javascript` | JavaScript that will be executed after confirmation. |
| `string $name` | Button name. |
| `string $label` | Button label. |
| `mixed $message` | The confirmation message to display. |
| `array $attributes` | Additional button attributes. |
| `string $id` | Button ID. |

**Return value:** `string Button.`

### UbersmithSDK\GUI\ConfirmLink

Generate a link with a confirmation message.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $url` | URL where the browser will be forwarded upon confirmation. |
| `string $text` | Link text. |
| `string $message` | The confirmation message to display. |
| `array $attributes` | Additional link attributes. |
| `string $id` | Link ID. |

**Return value:** `string Confirm link.`

### UbersmithSDK\GUI\ConfirmLinkJS

Generate a link with a confirmation message that will execute JavaScript after confirmation.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $javascript` | JavaScript that will be executed after confirmation. |
| `string $text` | Link text. |
| `string $message` | The confirmation message to display. |
| `array $attributes` | Additional link attributes. |
| `string $id` | Link ID. |

**Return value:** `string Confirm link.`

### UbersmithSDK\GUI\FormEnd

Generate a form end tag.

**Return value:** `string Form end tag.`

### UbersmithSDK\GUI\FormStart

Generate a form start tag.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Form name. |
| `string $method` | Form method. |
| `string $action` | Form action. |
| `array $attributes` | Form attributes. |
| `bool $csrf` | Add cross-site request forgery (CSRF) token to form. |
| `string $id` | Form ID. |

**Return value:** `string Form start tag.`

### UbersmithSDK\GUI\Icon

Generate a CSS icon.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Icon name. |
| `string $width` | Icon width. |
| `string $height` | Icon height. |
| `array $attributes` | Additional icon attributes. |
| `string $id` | Icon ID. |

**Return value:** `string CSS icon.`

### UbersmithSDK\GUI\Image

Generate an image.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $src` | Image URL. |
| `string $width` | Image width. |
| `string $height` | Image height. |
| `array $attributes` | Additional image attributes. |
| `string $id` | Image ID. |

**Return value:** `string Image.`

### UbersmithSDK\GUI\InputAutocomplete

Generate an autocomplete input field.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `string $value` | Field value. |
| `string $label` | Field label. |
| `string $ajax_url` | Ajax URL. |
| `array $attributes` | Additional field attributes. |
| `array $attributes_hidden_value_field` | Additional field attributes for hidden value field. |
| `string $id` | Field ID. |

**Return value:** `string Autocomplete input field.`

### UbersmithSDK\GUI\InputButton

Generate a button.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Button name. |
| `string $label` | Button label. |
| `array $attributes` | Additional button attributes. |
| `string $id` | Button ID. |

**Return value:** `string Button.`

### UbersmithSDK\GUI\InputCancelClose

Generate a button that closes the current window.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Button name. |
| `string $label` | Button label. |
| `array $attributes` | Additional button attributes. |
| `string $id` | Button ID. |

**Return value:** `string Button that closes the current window.`

### UbersmithSDK\GUI\InputCheckAll

Generate a check all / uncheck all checkbox.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Check all / uncheck all checkbox.`

### UbersmithSDK\GUI\InputCheckbox

Generate a checkbox.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `string $value` | Field value. |
| `string $selected` | Whether checkbox is selected. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Checkbox.`

### UbersmithSDK\GUI\InputDate

Generate a date selector input field.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `string $value` | Selected value. |
| `string $title` | Field Title. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Date selector input field.`

### UbersmithSDK\GUI\InputFile

Generate a file upload input field.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string File upload input field.`

### UbersmithSDK\GUI\InputHidden

Generate a hidden input field.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `string $value` | Field value. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Hidden input field.`

### UbersmithSDK\GUI\InputImage

Generate an image input field.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `string $value` | Field value. |
| `string $img_class` | class defining the image. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Image input field.`

### UbersmithSDK\GUI\InputImageButton

Generate an image button.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Button name. |
| `string $value` | Button label. |
| `string $img_class` | class defining the image. |
| `array $attributes` | Additional button attributes. |
| `string $id` | Button ID. |

**Return value:** `string Image button.`

### UbersmithSDK\GUI\InputPassword

Generate a password input field.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `string $value` | Field value. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Password input field.`

### UbersmithSDK\GUI\InputRadio

Generate a radio button.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `string $value` | Field value. |
| `string $selected` | Whether radio button is selected. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Radio button.`

### UbersmithSDK\GUI\InputSelect

Generate a select box.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `array $options` | Indexed array of options. |
| `string $selected` | Value of selected option. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Select box.`

### UbersmithSDK\GUI\InputSelectGrouped

Generate a grouped select box.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `array $options` | Indexed array of options. |
| `string $selected` | Value of selected option. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Grouped select box.`

### UbersmithSDK\GUI\InputSelectMultipleCheckbox

Generate a select box with checkboxes.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `array $options` | Indexed array of options. |
| `array $selected` | Values of selected options. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |
| `bool $enable_search` | Whether to show search input field. |

**Return value:** `string Select box with checkboxes.`

### UbersmithSDK\GUI\InputSubmit

Generate a submit form button.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `string $value` | Field value. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Submit form button.`

### UbersmithSDK\GUI\InputText

Generate a text input field.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `string $value` | Field value. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Text input field.`

### UbersmithSDK\GUI\InputTextarea

Generate a textarea input field.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `string $value` | Field value. |
| `int $rows` | Number of rows. |
| `int $columns` | Number of columns. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Textarea.`

### UbersmithSDK\GUI\InputYesNo

Generate yes / no radio buttons.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $name` | Field name. |
| `string $selected` | Selected value. |
| `array $attributes` | Additional field attributes. |
| `string $id` | Field ID. |

**Return value:** `string Yes / no radio buttons.`

### UbersmithSDK\GUI\Label

Generate a label.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $field_id` | Field ID. |
| `string $label` | Label text. |
| `array $attributes` | Additional label attributes. |
| `string $id` | Label ID. |
| `string $separator` | Separator appended to label text. |

**Return value:** `string Label.`

### UbersmithSDK\GUI\Link

Generate a link.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $url` | Link URL. |
| `string $text` | Link text. |
| `array $attributes` | Additional link attributes. |
| `string $id` | Link ID. |

**Return value:** `string Link.`

### UbersmithSDK\GUI\MessageBox

Generate a message box.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $type` | Message type of 'error' (default), 'notice', or 'success'. |
| `string $message` | Message. |
| `string $is_html` | Whether the message is HTML. |

**Return value:** `string Message box.`

### UbersmithSDK\GUI\OddEven

Generate an odd / even class name based on whether a table row is odd or even.

**Return value:** `string Odd / even class name.`

### UbersmithSDK\GUI\PluginPopupLink

Generate a popup link to another plugin file.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $plugin` | Plugin. |
| `string $url` | Popup link URL. |
| `string $text` | Popup link text. |
| `string $title` | Popup link title. |
| `string $target` | Target window name. |
| `string $details` | Details of popup window. |
| `array $attributes` | Additional popup link attributes. |
| `string $id` | Popup link ID. |

**Return value:** `string Popup link.`

### UbersmithSDK\GUI\PopupLink

Generate a popup link.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $url` | Popup link URL. |
| `string $text` | Popup link text. |
| `string $target` | Target window name. |
| `string $details` | Details of popup window. |
| `array $attributes` | Additional popup link attributes. |
| `string $id` | Popup link ID. |

**Return value:** `string Popup link.`

## Mail functions

### UbersmithSDK\Mail\EnforceAutoSubmitted

Returns whether the system enforces RFC 3834 compliance.

**Return value:** `bool Whether the system enforces RFC 3834 compliance.`

### UbersmithSDK\Mail\SendAuditedMail

Send an audited email.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `int $client_id` | Client ID. |
| `string $recipient` | Email recipient. |
| `string $subject` | Email subject. |
| `string $body` | Email body. |
| `array $headers` | Email headers. |
| `array $attach` | Email attachments. |
| `bool $auto_footer` | Add auto-footer to email. |

**Return value:** `array|bool Send email result - array(subject, body) on success or false on error.`

### UbersmithSDK\Mail\SendMail

Send an email.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $recipient` | Email recipient. |
| `string $subject` | Email subject. |
| `string $body` | Email body. |
| `array $headers` | Email headers. |
| `array $attach` | Email attachments. |
| `bool $auto_footer` | Add auto-footer to email. |

**Return value:** `bool Send email result - array(subject, body) on success or false on error.`

### UbersmithSDK\Mail\StoreAuditedMail

Send and store an audited email.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `int $client_id` | Client ID. |
| `string $recipient` | Email recipient. |
| `string $subject` | Email subject. |
| `string $body` | Email body. |
| `array $headers` | Email headers. |
| `array $attach` | Email attachments. |
| `bool $auto_footer` | Add auto-footer to email. |

**Return value:** `bool Send email result - array(subject, body) on success or false on error.`

## Payment functions

### UbersmithSDK\Payment\Error

Logs an error and throws an SDKException.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $plugin` | Plugin. |
| `string $type` | Type. |
| `any $error` | Error. |

**Return value:** `void`

### UbersmithSDK\Payment\Log

Logs a message with details.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $plugin` | Plugin. |
| `string $type` | Type. |
| `string $message` | Message. |
| `any $details` | Details. |

**Return value:** `void`

### UbersmithSDK\Payment\MakeInvoiceIdUnique

Makes an invoice ID unique based on previous payments.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `int $invoice_id` | Invoice ID. |
| `string $payment_gateway_name` | Payment gateway name. |

**Return value:** `string Unique invoice ID.`

## User functions

### UbersmithSDK\User\GetClassId

Returns the user's class ID.

**Return value:** `int Class ID.`

### UbersmithSDK\User\GetClientId

Returns the user's client ID.

**Return value:** `int Client ID.`

### UbersmithSDK\User\GetContactId

Returns the user's contact ID.

**Return value:** `int Contact ID.`

### UbersmithSDK\User\GetEmail

Returns the user's email.

**Return value:** `string Email.`

### UbersmithSDK\User\GetFullName

Returns the user's full name.

**Return value:** `string Full name.`

### UbersmithSDK\User\GetLastLogin

Returns the user's last login.

**Return value:** `int Last login.`

### UbersmithSDK\User\GetUserId

Returns the user's ID.

**Return value:** `int User ID.`

### UbersmithSDK\User\GetUsername

Returns the user's username.

**Return value:** `string Username.`

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

| Parameter | Description |
| --- | --- |
| `string $csv_string` | CSV string to parse. |
| `string $field_delimiter` | Field delimiter. |
| `bool $row_delimiter` | Row delimiter. |
| `string $quote_character` | Quote character. |

**Return value:** `array 2-dimensional array of rows and items.`

### UbersmithSDK\Util\CSVRow

Generate a CSV formatted string.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `array $csv_data` | Array of CSV data. |

**Return value:** `string CSV formatted string.`

### UbersmithSDK\Util\CSVSplit

Parse a single line of CSV data.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $csv_string` | CSV string to parse. |
| `string $field_delimiter` | Field delimiter. |
| `bool $remove_quotes` | Whether to remove quotes. |
| `string $quote_character` | Quote character. |

**Return value:** `array Array of items.`

### UbersmithSDK\Util\DateDifference

Check date difference between a timestamp and the current time.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $timestamp` | Unix timestamp. |

**Return value:** `array Difference in years, months, and days.`

### UbersmithSDK\Util\DateFormat

Return the system's date format.

**Return value:** `string System's date format.`

### UbersmithSDK\Util\DateInterval

Generate a timestamp based on a timestamp and an interval.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $timestamp` | Unix timestamp. |
| `string $interval` | Interval. |

**Return value:** `int Generated Unix timestamp.`

### UbersmithSDK\Util\FormatCurrency

Format a number into a currency format with a currency symbol.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `float $amount` | Amount. |
| `string $symbol` | Currency symbol. |
| `int $precision` | Precision. |

**Return value:** `string Formatted currency.`

### UbersmithSDK\Util\FormatCurrencyRaw

Format a number into a currency format without a currency symbol.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `float $amount` | Amount. |
| `int $precision` | Precision. |

**Return value:** `string Formatted currency.`

### UbersmithSDK\Util\FormatDate

Format a date.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $timestamp` | Unix timestamp. |
| `string $format` | Date format. |
| `string $empty_now` | Set value to now if $timestamp is null. Pass false to return empty string instead. |

**Return value:** `string Formatted date.`

### UbersmithSDK\Util\FormatDateTime

Format a date and time.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $timestamp` | Unix timestamp. |
| `string $format` | Date format. |
| `string $empty_now` | Set value to now if $timestamp is null. Pass false to return empty string instead. |

**Return value:** `string Formatted date and time.`

### UbersmithSDK\Util\FormatTime

Format a time.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $timestamp` | Unix timestamp. |
| `string $format` | Date format. |
| `string $empty_now` | Set value to now if $timestamp is null. Pass false to return empty string instead. |

**Return value:** `string Formatted time.`

### UbersmithSDK\Util\HTMLEncode

HTML encode a string.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $string` | String to HTML encode. |
| `mixed $quote_style` | Quote style. |

**Return value:** `string HTML encoded string.`

### UbersmithSDK\Util\I18n

Translate a string using the default locale.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $string` | String to translate. |
| `string $context` | Context. |
| `string $locale` | Locale. |

**Return value:** `string Translated string.`

### UbersmithSDK\Util\I18nf

Translate a string containing substitutions using the default locale.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $string` | String to translate. |

**Return value:** `string Translated string.`

### UbersmithSDK\Util\Pluck

Returns a new array containing only the specified keys.

**Return value:** `array Array containing only the specified keys.`

### UbersmithSDK\Util\SecondsToTime

Convert seconds to time.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $seconds` | Seconds to convert. |

**Return value:** `string Time.`

### UbersmithSDK\Util\TimeAgo

Based on a timestamp, determine how long ago it was and return that as a formatted string.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $timestamp` | Unix timestamp. |
| `boolean $short` | Shortened version of the time notation (e.g.: hours -> hrs). |

**Return value:** `string Time ago.`

### UbersmithSDK\Util\Tip

Generate a tip icon.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $text` | Tip text. |
| `string $title` | Tip title. |

**Return value:** `string Tip icon.`

### UbersmithSDK\Util\URLEncode

URL encode a string.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `string $string` | String to URL encode. |

**Return value:** `string URL encoded string.`

[Go back](../DEVELOPMENT.md)