# Developing a payment gateway plugin

A payment gateway plugin uses a similar format to a standard plugin and therefore you should first be familiar with the process of a developing a standard plugin, [see Developing a plugin](DEVELOPMENT.md).

## Template
You can download a full template payment gateway plugin [here](../example/payment_gateway_template.zip) or view the source [here](../example/payment_gateway_template).

## Files
Like a standard plugin, a payment gateway plugin also requires a `manifest.json` and `bootstrap.php` file.

## Manifest file
It's recommended that an instance limit of `1` is set for the payment gateway plugin to prevent additional instances (which will cause the payment gateway plugin to show as an option multiple times when applying a payment).

```json
{
	"instance_limit": 1
}
```

## Bootstrap file
The bootstrap file will need to at least require the payment type classes discussed in the next section, but can also have standard plugin hook annotations.

```php
<?php

namespace PaymentGatewayTemplate;

require_once 'transaction/class.credit_card.php';
require_once 'transaction/class.ach.php';
require_once 'transaction/class.ipn.php';
```

## Payment type classes
When developing a payment gateway plugin you will need to decide which payment types the payment gateway plugin will be able to receive. Each payment type will require a class with a matching annotation and an implementation of the matching interface.

### Credit Card
<details>
<summary>Class template</summary>

```php
<?php

namespace PaymentGatewayTemplate;

use UbersmithSDK\Payment\Transaction;
use UbersmithSDK\Payment\Detail;

/**
 * Payment Gateway Template credit card class.
 */
#[\UbersmithSDK\Attribute\Payment\Gateway\CreditCard]
class CreditCard implements Transaction\CreditCard
{
	/**
	 * Adds a credit card to the payment gateway and returns the corresponding token.
	 *
	 * @param Detail\CreditCard $credit_card Credit card details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Token Token details to store.
	 */
	public function create(Detail\CreditCard $credit_card, Detail\Client $client): Detail\Token
	{

	}

	/**
	 * Updates a credit card in the payment gateway and returns the corresponding token.
	 *
	 * @param Detail\Token $token Token details.
	 * @param Detail\CreditCard $credit_card Credit card details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Token Token details to store.
	 */
	public function update(Detail\Token $token, Detail\CreditCard $credit_card, Detail\Client $client): Detail\Token
	{

	}

	/**
	 * Removes a token from the payment gateway.
	 *
	 * @param Detail\Token $token Token details.
	 * @return bool Whether the delete succeeded.
	 */
	public function delete(Detail\Token $token): bool
	{

	}

	/**
	 * Applies an authorize to the payment gateway.
	 *
	 * @param Detail\Payment $payment Payment details.
	 * @param Detail\Token $token Token details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function authorize(Detail\Payment $payment, Detail\Token $token, Detail\Client $client): Detail\Transaction
	{

	}

	/**
	 * Applies a capture to the payment gateway.
	 *
	 * @param Detail\Payment $payment Payment details.
	 * @param Detail\Token $token Token details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function capture(Detail\Payment $payment, Detail\Token $token, Detail\Client $client): Detail\Transaction
	{

	}

	/**
	 * Applies an authorize and capture to the payment gateway.
	 *
	 * @param Detail\Payment $payment Payment details.
	 * @param Detail\Token $token Token details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function authorize_capture(Detail\Payment $payment, Detail\Token $token, Detail\Client $client): Detail\Transaction
	{

	}

	/**
	 * Applies a void refund to the payment gateway.
	 *
	 * @param Detail\Refund $refund Refund details.
	 * @param Detail\Token $token Token details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function void(Detail\Refund $refund, Detail\Token $token, Detail\Client $client): Detail\Transaction
	{

	}

	/**
	 * Applies a credit refund to the payment gateway.
	 *
	 * @param Detail\Refund $refund Refund details.
	 * @param Detail\Token $token Token details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function credit(Detail\Refund $refund, Detail\Token $token, Detail\Client $client): Detail\Transaction
	{

	}
}
```

</details>

### Electronic Funds Transfer (ACH)
<details>
<summary>Class template</summary>

```php
<?php

namespace PaymentGatewayTemplate;

use UbersmithSDK\Payment\Transaction;
use UbersmithSDK\Payment\Detail;

/**
 * Payment Gateway Template ACH class.
 */
#[\UbersmithSDK\Attribute\Payment\Gateway\ACH]
class ACH implements Transaction\ACH
{
	/**
	 * Applies an authorize to the payment gateway.
	 *
	 * @param Detail\Payment $payment Payment details.
	 * @param Detail\BankAccount $bank_account Bank account details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function authorize(Detail\Payment $payment, Detail\BankAccount $bank_account, Detail\Client $client): Detail\Transaction
	{

	}

	/**
	 * Applies a capture to the payment gateway.
	 *
	 * @param Detail\Payment $payment Payment details.
	 * @param Detail\BankAccount $bank_account Bank account details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function capture(Detail\Payment $payment, Detail\BankAccount $bank_account, Detail\Client $client): Detail\Transaction
	{

	}

	/**
	 * Applies an authorize and capture to the payment gateway.
	 *
	 * @param Detail\Payment $payment Payment details.
	 * @param Detail\BankAccount $bank_account Bank account details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function authorize_capture(Detail\Payment $payment, Detail\BankAccount $bank_account, Detail\Client $client): Detail\Transaction
	{

	}

	/**
	 * Applies a void refund to the payment gateway.
	 *
	 * @param Detail\Refund $refund Refund details.
	 * @param Detail\BankAccount $bank_account Bank account details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function void(Detail\Refund $refund, Detail\BankAccount $bank_account, Detail\Client $client): Detail\Transaction
	{

	}

	/**
	 * Applies a void refund to the payment gateway.
	 *
	 * @param Detail\Refund $refund Refund details.
	 * @param Detail\BankAccount $bank_account Bank account details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function credit(Detail\Refund $refund, Detail\BankAccount $bank_account, Detail\Client $client): Detail\Transaction
	{

	}
}
```

</details>

### Instant Payment Notification (IPN)
<details>
<summary>Class template</summary>

```php
<?php

namespace PaymentGatewayTemplate;

use UbersmithSDK\Payment\Transaction;
use UbersmithSDK\Payment\Detail;

/**
 * Payment Gateway Template IPN class.
 *
 * @Payment\Gateway\IPN
 */
#[\UbersmithSDK\Attribute\Payment\Gateway\IPN]
class MyIPN implements Transaction\IPN
{
	/**
	 * URL to send IPN requests to.
	 *
	 * @return string IPN URL.
	 */
	public function url(): string
	{

	}

	/**
	 * Gateway config description to display under Settings -> Payment Processing Options.
	 *
	 * @return string IPN config description.
	 */
	public function config_description(): string
	{

	}

	/**
	 * Fields to send during an IPN request.
	 *
	 * @param Detail\Payment $payment Payment details.
	 * @return array IPN request fields.
	 */
	public function request_fields(Detail\Payment $payment): array
	{

	}

	/**
	 * Applies a payment from an IPN response.
	 *
	 * @param array $response IPN response.
	 * @return Detail\IPNTransaction IPN transaction details.
	 */
	public function payment(array $response): Detail\IPNTransaction
	{

	}

	/**
	 * Process a successful payment and returns the transaction details.
	 *
	 * @param Detail\IPNTransaction $response IPN success response.
	 * @return Detail\IPNTransaction IPN transaction details.
	 */
	public function process_success(Detail\IPNTransaction $transaction): Detail\IPNTransaction
	{

	}

	/**
	 * Verifies whether the payment went through successfully with the payment gateway.
	 *
	 * @param Detail\Payment $payment Payment details.
	 * @return bool
	 */
	public function verify(Detail\Payment $payment): bool
	{

	}

	/**
	 * Check whether the transaction id is valid.
	 *
	 * @param Detail\IPNTransaction $transaction Transaction details.
	 * @return bool
	 */
	public function check_txn_id(Detail\IPNTransaction $transaction): bool
	{

	}

	/**
	 * Applies a refund to the payment gateway.
	 *
	 * @param Detail\Refund $refund Refund details.
	 * @return Detail\IPNTransaction IPN transaction details.
	 */
	public function refund(Detail\Refund $refund): Detail\IPNTransaction
	{

	}
}
```

</details>

## Details
When adding a credit card / ACH account, applying a payment, etc. to a payment gateway you will need access to certain details such as the credit card token, client details, etc. This can be achieved by using the `UbersmithSDK\Payment\Detail` classes.

```php
use UbersmithSDK\Payment\Detail;

public function create(Detail\CreditCard $credit_card, Detail\Client $client): Detail\Token
{
	// get client ID
	$id = $client->get_id();

	// get client address
	$address = $client->get_address();

	// create credit card token
	$token = new Detail\Token(rand());
}

public function authorize(Detail\Payment $payment, Detail\Token $token, Detail\Client $client): Detail\Transaction
{
	// get credit card token
	$token = $token->get_token();
}
```

The following details can be used when dealing with credit card, ACH, or IPN transactions:

### Address
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\Address $address;

$address->get_street();
$address->get_city();
$address->get_state();
$address->get_zip();
$address->get_country();
```

</details>

### Bank Account
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\BankAccount $bank_account;

$bank_account->get_num();
$bank_account->get_aba_rtn();
$bank_account->get_type();
$bank_account->get_bank();
```

</details>

### Client
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\Client $client;

$client->get_id();
$client->get_first();
$client->get_last();
$client->get_company();
$client->get_address();
$client->get_email();
$client->get_phone();
```

</details>

### Credit Card
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\CreditCard $credit_card;

$credit_card->get_num();
$credit_card->get_exp_date();
$credit_card->get_cvv2();
```

</details>

### Credit Card Expiry Date
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\CreditCardExpiryDate $credit_card_expiry_date;

$credit_card_expiry_date->get_month();
$credit_card_expiry_date->get_year();
```

</details>

### IPN Transaction
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\IPNTransaction $ipn_transaction;

$ipn_transaction->get_txn_id();
$ipn_transaction->get_inv_num();
$ipn_transaction->get_amount();
$ipn_transaction->get_pay_date();
```

</details>

### Payment
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\Payment $payment;

$payment->get_inv_num();
$payment->get_txn_type();
$payment->get_desc();
$payment->get_amount();
$payment->get_tax_amount();
$payment->get_services();
$payment->get_taxes();
```

</details>

### Refund
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\Refund $refund;

$refund->get_inv_num();
$refund->get_txn_type();
$refund->get_txn_id();
$refund->get_amount();
$refund->get_original_amount();
$refund->get_original_ts();
```

</details>

### Service
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\Service $service;

$service->get_id();
$service->get_desc();
$service->get_amount();
$service->get_qty();
```

</details>

### Tax
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\Tax $tax;

$tax->get_id();
$tax->get_desc();
$tax->get_amount();
```

</details>

### Token
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\Token $token;

$token->get_token();
```

</details>

### Transaction
<details>
<summary>Available functions</summary>

```php
UbersmithSDK\Payment\Detail\Transaction $transaction;

$transaction->get_resp_code();
$transaction->get_txn_id();
$transaction->get_auth_num();
$transaction->get_avs_code();
```

</details>

## Successful transaction
If a payment gateway transaction is successful, you can notify the system by returning a `UbersmithSDK\Payment\Detail\Transaction` or `UbersmithSDK\Payment\Detail\IPNTransaction` transaction:

```php
use UbersmithSDK\Payment\Detail;

$txn_id = rand();
$avs_code = rand();
$auth_num = rand();
$resp_code = 100;
$inv_num = 1;
$amount = 100;

// credit card
return new Detail\Transaction($txn_id, $avs_code, $auth_num, $resp_code);

// ACH
return new Detail\Transaction($txn_id, $avs_code, $auth_num);

// IPN
return new Detail\IPNTransaction($txn_id, $inv_num, $amount);
```

## Failed transaction
If a payment gateway transaction fails, you can notify the system by using the `UbersmithSDK\Payment\Error` function:

```php
use function UbersmithSDK\Util\I18n as I18n;
use function UbersmithSDK\Util\I18nf as I18nf;
use function UbersmithSDK\Payment\Error as Error;

// error
Error($this->plugin, I18n('authorize'), I18nf('%s declined', I18n('Authorize')));
```

## Logging
It's recommended that the payment gateway plugin has logging implemented for requests and responses from the payment gateway.

This can be achieved using the `UbersmithSDK\Payment\Log` function:

```php
use function UbersmithSDK\Util\I18n as I18n;
use function UbersmithSDK\Payment\Log as Log;

// log request
Log($this->plugin, I18n('authorize'), I18n('request'), [
	'payment'      => $payment,
	'bank_account' => $bank_account,
	'client'       => $client,
]);

// log response
Log($this->plugin, I18n('authorize'), I18n('response'), $transaction);
```
