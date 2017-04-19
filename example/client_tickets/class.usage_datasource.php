<?php

namespace Docs\ClientTickets;

use UbersmithSDK\Usage;
use UbersmithSDK\Parameter;

/**
 * @UsageDatasource client_tickets_usage_datasource
 * @label Client Tickets Usage Datasource
 */
class UsageDatasource implements Usage\Data\Source
{
	private $plugin;

	public function fetch(Parameter\Source\Service $service, $resources, $startdate, $enddate)
	{
		$usage = array();
		foreach ($resources as $resource) {
			$usage[] = new Usage\Data($resource, 100);
		}

		return $usage;
	}

	public function get_supported_resources()
	{
		return array(
			new Usage\DefaultResource('ticket_time', 'Ticket Time', array(
				'min' => 'minutes',
				'hr'  => 'hours',
			)),
		);
	}

	public function convert_amount($amount, Usage\Resource $resource, $to_unit)
	{
		if ($to_unit == 'hr') {
			$amount = $amount / 60;
		}

		return $amount;
	}

	public function set_plugin(Parameter\Plugin $plugin)
	{
		$this->plugin = $plugin;
	}
}
