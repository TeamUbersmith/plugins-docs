<?php

namespace UbersmithPlugin\PaymentGatewayTemplate;

use UbersmithSDK\Payment\Transaction;
use UbersmithSDK\Payment\Detail;

use function UbersmithSDK\Util\I18n as I18n;
use function UbersmithSDK\Util\I18nf as I18nf;
use function UbersmithSDK\Payment\Log as Log;
use function UbersmithSDK\Payment\Error as Error;

/**
 * Payment Gateway Template IPN class.
 *
 * @Payment\Gateway\IPN
 */
class IPN implements Transaction\IPN
{
	private $plugin;
	private $mode;

	public function __construct($plugin)
	{
		$this->plugin = $plugin;
		$this->mode = $this->plugin->config->get_value('mode');
	}

	/**
	 * URL to send IPN requests to.
	 *
	 * @return string IPN URL.
	 */
	public function url(): string
	{
		return $_SESSION['serverurl'] . '/ipn/template_request';
	}

	/**
	 * Gateway config description to display under Settings -> Payment Processing Options.
	 *
	 * @return string IPN config description.
	 */
	public function config_description(): string
	{
		return '';
	}

	/**
	 * Fields to send during an IPN request.
	 *
	 * @param Detail\Payment $payment Payment details.
	 * @return array IPN request fields.
	 */
	public function request_fields(Detail\Payment $payment): array
	{
		return [
			'inv_num'           => $payment->get_inv_num(),
			'amount'            => $payment->get_amount(),
			'return_url'        => $_SESSION['serverurl'] . '/client/gw_success.php',
			'cancel_return_url' => $_SESSION['serverurl'] . '/client/gw_cancel.php',
		];
	}

	/**
	 * Applies a payment from an IPN response.
	 *
	 * @param array $response IPN response.
	 * @return Detail\IPNTransaction IPN transaction details.
	 */
	public function payment(array $response): Detail\IPNTransaction
	{
		if ($this->mode === 'pass') {
			// get response
			$transaction = new Detail\IPNTransaction($response['txn_id'], $response['inv_num'], $response['amount']);

			// log response
			Log($this->plugin, I18n('IPN apply payment'), I18n('response'), $response);

			// return response
			return $transaction;
		} else {
			// error
			Error($this->plugin, I18n('IPN apply payment'), I18nf('%s declined', I18n('IPN payment')));
		}
	}

	/**
	 * Process a successful payment and returns the transaction details.
	 *
	 * @param Detail\IPNTransaction $response IPN success response.
	 * @return Detail\IPNTransaction IPN transaction details.
	 */
	public function process_success(Detail\IPNTransaction $transaction): Detail\IPNTransaction
	{
		return new Detail\IPNTransaction($transaction->get_txn_id(), $transaction->get_inv_num(), $transaction->get_amount(), $transaction->get_pay_date());
	}

	/**
	 * Verifies whether the payment went through successfully with the payment gateway.
	 *
	 * @param Detail\Payment $payment Payment details.
	 * @return bool
	 */
	public function verify(Detail\Payment $payment): bool
	{
		return true;
	}

	/**
	 * Check whether the transaction id is valid.
	 *
	 * @param Detail\IPNTransaction $transaction Transaction details.
	 * @return bool
	 */
	public function check_txn_id(Detail\IPNTransaction $transaction): bool
	{
		return true;
	}

	/**
	 * Applies a refund to the payment gateway.
	 *
	 * @param Detail\Refund $refund Refund details.
	 * @return Detail\IPNTransaction IPN transaction details.
	 */
	public function refund(Detail\Refund $refund): Detail\IPNTransaction
	{
		// log request
		Log($this->plugin, I18n('IPN apply refund'), I18n('request'), $refund);

		if ($this->mode === 'pass') {
			// get response
			$txn_id = rand();
			$transaction = new Detail\IPNTransaction($txn_id);

			// log response
			Log($this->plugin, I18n('IPN apply refund'), I18n('response'), $transaction);

			// return response
			return $transaction;
		} else {
			// error
			Error($this->plugin, I18n('IPN apply refund'), I18nf('%s declined', I18n('IPN refund')));
		}
	}
}
