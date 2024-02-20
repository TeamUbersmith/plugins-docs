<?php

namespace PaymentGatewayTemplate;

use UbersmithSDK\Payment\Transaction;
use UbersmithSDK\Payment\Detail;

use function UbersmithSDK\Util\I18n as I18n;
use function UbersmithSDK\Util\I18nf as I18nf;
use function UbersmithSDK\Payment\Log as Log;
use function UbersmithSDK\Payment\Error as Error;

/**
 * Payment Gateway Template ACH class.
 */
#[\UbersmithSDK\Attribute\Payment\Gateway\ACH]
class ACH implements Transaction\ACH
{
	private $plugin;
	private $mode;

	public function __construct($plugin)
	{
		$this->plugin = $plugin;
		$this->mode = $this->plugin->config->get_value('mode');
	}

	/**
	 * Applies an authorize to the payment gateway.
	 *
	 * @param Detail\Payment $payment Payment details.
	 * @param Detail\BankAccount $bank_account Bank account details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function authorize(Detail\Payment $payment, Detail\BankAccount $bank_account, Detail\Client $client): Detail\Transaction
	{
		// log request
		Log($this->plugin, I18n('authorize'), I18n('request'), [
			'payment'      => $payment,
			'bank_account' => $bank_account,
			'client'       => $client,
		]);

		if ($this->mode === 'pass') {
			// get response
			$txn_id = rand();
			$avs_code = rand();
			$auth_num = rand();
			$resp_code = 100;
			$transaction = new Detail\Transaction($txn_id, $avs_code, $auth_num, $resp_code);

			// log response
			Log($this->plugin, I18n('authorize'), I18n('response'), $transaction);

			// return response
			return $transaction;
		} else {
			// error
			Error($this->plugin, I18n('authorize'), I18nf('%s declined', I18n('Authorize')));
		}
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
		// log request
		Log($this->plugin, I18n('capture'), I18n('request'), [
			'payment'      => $payment,
			'bank_account' => $bank_account,
			'client'       => $client,
		]);

		if ($this->mode === 'pass') {
			// get response
			$txn_id = rand();
			$avs_code = rand();
			$auth_num = rand();
			$resp_code = 100;
			$transaction = new Detail\Transaction($txn_id, $avs_code, $auth_num, $resp_code);

			// log response
			Log($this->plugin, I18n('capture'), I18n('response'), $transaction);

			// return response
			return $transaction;
		} else {
			// error
			Error($this->plugin, I18n('capture'), I18nf('%s declined', I18n('Capture')));
		}
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
		// log request
		Log($this->plugin, I18n('authorize and capture'), I18n('request'), [
			'payment'      => $payment,
			'bank_account' => $bank_account,
			'client'       => $client,
		]);

		if ($this->mode === 'pass') {
			// get response
			$txn_id = rand();
			$avs_code = rand();
			$auth_num = rand();
			$resp_code = 100;
			$transaction = new Detail\Transaction($txn_id, $avs_code, $auth_num, $resp_code);

			// log response
			Log($this->plugin, I18n('authorize and capture'), I18n('response'), $transaction);

			// return response
			return $transaction;
		} else {
			// error
			Error($this->plugin, I18n('authorize and capture'), I18nf('%s declined', I18n('Authorize and capture')));
		}
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
		// log request
		Log($this->plugin, I18n('void refund'), I18n('request'), [
			'refund'       => $refund,
			'bank_account' => $bank_account,
			'client'       => $client,
		]);

		if ($this->mode === 'pass') {
			// get response
			$resp_code = 100;
			$txn_id = rand();
			$auth_num = rand();
			$transaction = new Detail\Transaction($resp_code, $txn_id, $auth_num);

			// log response
			Log($this->plugin, I18n('void refund'), I18n('response'), $transaction);

			// return response
			return $transaction;
		} else {
			// error
			Error($this->plugin, I18n('void refund'), I18nf('%s declined', I18n('Refund')));
		}
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
		// log request
		Log($this->plugin, I18n('credit refund'), I18n('request'), [
			'refund'       => $refund,
			'bank_account' => $bank_account,
			'client'       => $client,
		]);

		if ($this->mode === 'pass') {
			// get response
			$resp_code = 100;
			$txn_id = rand();
			$auth_num = rand();
			$transaction = new Detail\Transaction($resp_code, $txn_id, $auth_num);

			// log response
			Log($this->plugin, I18n('credit refund'), I18n('response'), $transaction);

			// return response
			return $transaction;
		} else {
			// error
			Error($this->plugin, I18n('credit refund'), I18nf('%s declined', I18n('Refund')));
		}
	}
}
