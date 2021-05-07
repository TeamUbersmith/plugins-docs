# Hooks

The following is a list of hooks that have been defined throughout Ubersmith:

## Event hooks

### Event\Billing\AfterCreditApplied

Executed after a credit is applied.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $credit` | Credit details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Billing\AfterCreditCreate

Executed after a credit is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $credit` | Credit details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Billing\AfterInvoiceCreate

Executed after an invoice is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $invoice` | Invoice details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Billing\AfterPaymentCreate

Executed after a payment is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $payment` | Payment details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Billing\AfterRefundCreate

Executed after a refund is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $refund` | Refund details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Client\AfterCreate

Executed after a client is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $client` | Client details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Client\AfterDeactivate

Executed after a client is deactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $client` | Client details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Client\AfterEdit

Executed after a client is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $client` | Client details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Client\AfterReactivate

Executed after a client is reactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $client` | Client details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Client\BeforeCreate

Executed before a client is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $client` | Client details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Client\BeforeDeactivate

Executed before a client is deactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $client` | Client details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Client\BeforeEdit

Executed before a client is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $client` | Client details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Client\BeforeReactivate

Executed before a client is reactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $client` | Client details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Config\AfterServicePlanCreate

Executed after a service plan is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service_plan` | Service plan details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Config\AfterServicePlanEdit

Executed after a service plan is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service_plan` | Service plan details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Config\AfterTaxRateCreate

Executed after a tax rate is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $tax_rate` | Tax rate details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Config\AfterTaxRateEdit

Executed after a tax rate is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $tax_rate` | Tax rate details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Device\AfterCreate

Executed after a device is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Device\AfterDelete

Executed after a device is deleted.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Device\AfterEdit

Executed after a device is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Device\AfterIPAssignmentAdded

Executed after an IP assignment is added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Device\AfterIPAssignmentEdited

Executed after an IP assignment is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Device\AfterIPAssignmentJoined

Executed after an IP assignment is joined.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Device\AfterIPAssignmentRemoved

Executed after an IP assignment is removed.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Device\AfterIPAssignmentSplit

Executed after an IP assignment is split.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Device\BeforeCreate

Executed before a device is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Device\BeforeDelete

Executed before a device is deleted.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Device\BeforeEdit

Executed before a device is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\General\Cron

Executed during Ubersmith's main cron job.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\AfterCancel

Executed after a service is canceled.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\AfterCreate

Executed after a service is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\AfterDeactivate

Executed after a service is deactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\AfterEdit

Executed after a service is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\AfterInvoice

Executed after a service is invoiced.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\AfterPayment

Executed after a payment is applied.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\AfterRenew

Executed after a service is renewed.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\AfterSuspend

Executed after a service is suspended.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\AfterUncancel

Executed after a service is uncanceled.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\AfterUnsuspend

Executed after a service is unsuspended.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\BeforeCancel

Executed before a service is canceled.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\BeforeCreate

Executed before a service is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\BeforeDeactivate

Executed before a service is deactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\BeforeEdit

Executed before a service is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\BeforeRenew

Executed before a service is renewed.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\BeforeSuspend

Executed before a service is suspended.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\BeforeUncancel

Executed before a service is uncanceled.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\BeforeUnsuspend

Executed before a service is unsuspended.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\NightlyCron

Executed during the nightly cron.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\Provision

Executed when a service is provisioned.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### Event\Service\Start

Executed when a service is started.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

## View hooks

### View\Client\DashboardMenuItems

Executed when displaying the client dashboard menu items, allowing custom menu items to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $brand` | Brand details. |
| `object $plugin` | Plugin details. |

### View\Client\Summary

Executed on the client profile page, allowing additional boxes to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $client` | Client details. |
| `object $plugin` | Plugin details. |

### View\Device\Actions

Executed on the view device page, allowing additional boxes to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |

### View\Device\Summary

Executed on the view device page, allowing additional boxes to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $device` | Device details. |
| `object $plugin` | Plugin details. |

### View\General\Execute

Executed when viewing the view plugin page.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $plugin` | Plugin details. |

### View\Order\Action

Allows a new order action to be added to an order queue.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $order` | Order details. |
| `object $plugin` | Plugin details. |

### View\Order\Summary

Executed on the view order page, allowing additional boxes to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $order` | Order details. |
| `object $plugin` | Plugin details. |

### View\Sales\DashboardMenuItems

Executed when displaying the client dashboard menu items, allowing custom menu items to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $brand` | Brand details. |
| `object $plugin` | Plugin details. |

### View\Service\InvoicePdfSummary

Executed when generating an invoice PDF, allowing additional details to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### View\Service\InvoiceSummary

Executed when generating an invoice, allowing additional details to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |
| `object $detail` | Additional details. |

### View\Service\Summary

Executed on the service details page, allowing additional boxes to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $service` | Service details. |
| `object $plugin` | Plugin details. |

[Go back](../DEVELOPMENT.md)
