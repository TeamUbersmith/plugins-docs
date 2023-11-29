<?php

namespace PaymentGatewayTemplate;

use UbersmithSDK\Payment\Transaction;
use UbersmithSDK\Payment\Detail;

use function UbersmithSDK\Util\I18n as I18n;
use function UbersmithSDK\Util\I18nf as I18nf;
use function UbersmithSDK\Payment\Log as Log;
use function UbersmithSDK\Payment\Error as Error;

/**
 * Payment Gateway Template credit card class.
 */
#[\UbersmithSDK\Attribute\Payment\Gateway\CreditCard]
class CreditCard implements Transaction\CreditCard
{
	private $plugin;
	private $mode;

	public function __construct($plugin)
	{
		$this->plugin = $plugin;
		$this->mode = $this->plugin->config->get_value('mode');
	}

	/**
	 * Adds a credit card to the payment gateway and returns the corresponding token.
	 *
	 * @param Detail\CreditCard $credit_card Credit card details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Token Token details to store.
	 */
	public function create(Detail\CreditCard $credit_card, Detail\Client $client): Detail\Token
	{
		// log request
		Log($this->plugin, I18n('token create'), I18n('request'), [
			'credit_card' => $credit_card,
			'client'      => $client,
		]);

		if ($this->mode === 'pass') {
			// get response
			$token = rand();
			$token = new Detail\Token($token);

			// log response
			Log($this->plugin, I18n('token create'), I18n('response'), $token);

			// return response
			return $token;
		} else {
			// error
			Error($this->plugin, I18n('token create'), I18nf('Could not %s %s in payment gateway', I18n('store'), I18n('credit card token')));
		}
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
		// log request
		Log($this->plugin, I18n('token update'), I18n('request'), [
			'token'       => $token,
			'credit_card' => $credit_card,
			'client'      => $client,
		]);

		if ($this->mode === 'pass') {
			// get response
			$token = rand();
			$token = new Detail\Token($token);

			// log response
			Log($this->plugin, I18n('token update'), I18n('response'), $token);

			// return response
			return $token;
		} else {
			// error
			Error($this->plugin, I18n('token update'), I18nf('Could not %s %s in payment gateway', I18n('store'), I18n('credit card token')));
		}
	}

	/**
	 * Removes a token from the payment gateway.
	 *
	 * @param Detail\Token $token Token details.
	 * @return bool Whether the delete succeeded.
	 */
	public function delete(Detail\Token $token): bool
	{
		// log request
		Log($this->plugin, I18n('token delete'), I18n('request'), $token);

		if ($this->mode === 'pass') {
			// get response
			$response = true;

			// log response
			Log($this->plugin, I18n('token delete'), I18n('response'), $response);

			// return response
			return $response;
		} else {
			// error
			Error($this->plugin, I18n('token delete'), I18nf('Could not %s %s from payment gateway', I18n('delete'), I18n('credit card token')));
		}
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
		// log request
		Log($this->plugin, I18n('authorize'), I18n('request'), [
			'payment' => $payment,
			'token'   => $token,
			'client'  => $client,
		]);

		if ($this->mode === 'pass') {
			// get response
			$resp_code = 100;
			$txn_id = rand();
			$auth_num = rand();
			$avs_code = rand();
			$transaction = new Detail\Transaction($resp_code, $txn_id, $auth_num, $avs_code);

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
	 * @param Detail\Token $token Token details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function capture(Detail\Payment $payment, Detail\Token $token, Detail\Client $client): Detail\Transaction
	{
		// log request
		Log($this->plugin, I18n('capture'), I18n('request'), [
			'payment' => $payment,
			'token'   => $token,
			'client'  => $client,
		]);

		if ($this->mode === 'pass') {
			// get response
			$resp_code = 100;
			$txn_id = rand();
			$auth_num = rand();
			$avs_code = rand();
			$transaction = new Detail\Transaction($resp_code, $txn_id, $auth_num, $avs_code);

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
	 * @param Detail\Token $token Token details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function authorize_capture(Detail\Payment $payment, Detail\Token $token, Detail\Client $client): Detail\Transaction
	{
		// log request
		Log($this->plugin, I18n('authorize and capture'), I18n('request'), [
			'payment' => $payment,
			'token'   => $token,
			'client'  => $client,
		]);

		if ($this->mode === 'pass') {
			// get response
			$resp_code = 100;
			$txn_id = rand();
			$auth_num = rand();
			$avs_code = rand();
			$transaction = new Detail\Transaction($resp_code, $txn_id, $auth_num, $avs_code);

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
	 * @param Detail\Token $token Token details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function void(Detail\Refund $refund, Detail\Token $token, Detail\Client $client): Detail\Transaction
	{
		// log request
		Log($this->plugin, I18n('void refund'), I18n('request'), [
			'refund' => $refund,
			'token'  => $token,
			'client' => $client,
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
	 * Applies a credit refund to the payment gateway.
	 *
	 * @param Detail\Refund $refund Refund details.
	 * @param Detail\Token $token Token details.
	 * @param Detail\Client $client Client details.
	 * @return Detail\Transaction Transaction details.
	 */
	public function credit(Detail\Refund $refund, Detail\Token $token, Detail\Client $client): Detail\Transaction
	{
		// log request
		Log($this->plugin, I18n('credit refund'), I18n('request'), [
			'refund' => $refund,
			'token'  => $token,
			'client' => $client,
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
