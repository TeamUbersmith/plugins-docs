# Hooks

The following is a list of hooks that have been defined throughout Ubersmith.

All functions using a hook can be defined with the parameter `\UbersmithSDK\Parameter\Plugin`.

Functions may define other parameters that are specific to each hook. See their respective parameters to know which one are available.

## Event hooks

### Event\Billing\AfterCreditApplied

Executed after a credit is applied.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $credit Credit details. |

### Event\Billing\AfterCreditCreate

Executed after a credit is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $credit Credit details. |

### Event\Billing\AfterInvoiceCreate

Executed after an invoice is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $invoice Invoice details. |

### Event\Billing\AfterPaymentCreate

Executed after a payment is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $payment Payment details. |

### Event\Billing\AfterRefundCreate

Executed after a refund is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $refund Refund details. |

### Event\Client\AfterCreate

Executed after a client is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $client Client details. |

### Event\Client\AfterDeactivate

Executed after a client is deactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $client Client details. |

### Event\Client\AfterEdit

Executed after a client is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $client Client details. |

### Event\Client\AfterReactivate

Executed after a client is reactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $client Client details. |

### Event\Client\BeforeCreate

Executed before a client is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $client Client details. |

### Event\Client\BeforeDeactivate

Executed before a client is deactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $client Client details. |

### Event\Client\BeforeEdit

Executed before a client is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $client Client details. |

### Event\Client\BeforeReactivate

Executed before a client is reactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $client Client details. |

### Event\Config\AfterServicePlanCreate

Executed after a service plan is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service_plan Service plan details. |

### Event\Config\AfterServicePlanEdit

Executed after a service plan is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service_plan Service plan details. |

### Event\Config\AfterTaxRateCreate

Executed after a tax rate is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $tax_rate Tax rate details. |

### Event\Config\AfterTaxRateEdit

Executed after a tax rate is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $tax_rate Tax rate details. |

### Event\Contact\AfterCreate

Executed after a contact is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $contact Contact details. |

### Event\Contact\AfterDeactivate

Executed after a contact is deactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $contact Contact details. |

### Event\Contact\AfterEdit

Executed after a contact is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $contact Contact details. |

### Event\Contact\AfterReactivate

Executed after a contact is reactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $contact Contact details. |

### Event\Contact\BeforeCreate

Executed before a contact is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $contact Contact details. |

### Event\Contact\BeforeDeactivate

Executed before a contact is deactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $contact Contact details. |

### Event\Contact\BeforeEdit

Executed before a contact is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $contact Contact details. |

### Event\Contact\BeforeReactivate

Executed before a contact is reactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $contact Contact details. |

### Event\Device\AfterConnectionCreate

Executed after a connection is careted.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterConnectionDelete

Executed after a connection is deleted.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterConnectionEdit

Executed after a connection is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterCreate

Executed after a device is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterDelete

Executed after a device is deleted.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterEdit

Executed after a device is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterIPAssignmentAdded

Executed after an IP assignment is added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterIPAssignmentEdited

Executed after an IP assignment is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterIPAssignmentJoined

Executed after an IP assignment is joined.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterIPAssignmentRemoved

Executed after an IP assignment is removed.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterIPAssignmentSplit

Executed after an IP assignment is split.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterInterfaceCreate

Executed after a interface is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterInterfaceDelete

Executed after a interface is deleted.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\AfterInterfaceEdit

Executed after a interface is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\BeforeCreate

Executed before a device is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\BeforeDelete

Executed before a device is deleted.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\Device\BeforeEdit

Executed before a device is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### Event\General\Cron

Executed during Ubersmith's main cron job.

### Event\Order\AfterActionProcess

Executed after an order action is processed.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\AfterActionSkip

Executed after an order action is skipped.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\AfterActionUndoSkip

Executed after an order action is revert skipped status.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\AfterCancel

Executed after an order is canceled.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\AfterCreate

Executed after an order is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\AfterEdit

Executed after an order is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\AfterSubmit

Executed after an order is submitted.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\BeforeActionProcess

Executed before an order action is processed.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\BeforeActionSkip

Executed before an order action is skipped.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\BeforeActionUndoSkip

Executed before an order action is revert skipped status.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\BeforeCancel

Executed before an order is canceled.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\BeforeCreate

Executed before an order is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\BeforeEdit

Executed before an order is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Order\BeforeSubmit

Executed before an order is submitted.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### Event\Service\AfterCancel

Executed after a service is canceled.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\AfterCreate

Executed after a service is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\AfterCreateSetupFee

Executed after a setup fee service is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\AfterDeactivate

Executed after a service is deactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\AfterEdit

Executed after a service is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\AfterInvoice

Executed after a service is invoiced.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\AfterPayment

Executed after a payment is applied.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\AfterPricingCreate

Executed after a Service Pricing is added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `UbersmithSDK\Parameter\Source\ServicePricing` | $servicePricing See API method `client.service_price_changes_list` response for the available data. |

### Event\Service\AfterPricingDelete

Executed after a Service Pricing is deleted.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `UbersmithSDK\Parameter\Source\ServicePricing` | $servicePricing See API method `client.service_price_changes_list` response for the available data. |

### Event\Service\AfterPricingEdit

Executed after a Service Pricing is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `UbersmithSDK\Parameter\Source\ServicePricing` | $servicePricing See API method `client.service_price_changes_list` response for the available data. |

### Event\Service\AfterRenew

Executed after a service is renewed.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\AfterSuspend

Executed after a service is suspended.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\AfterUncancel

Executed after a service is uncanceled.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\AfterUnsuspend

Executed after a service is unsuspended.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\BeforeCancel

Executed before a service is canceled.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\BeforeCreate

Executed before a service is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\BeforeDeactivate

Executed before a service is deactivated.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\BeforeEdit

Executed before a service is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\BeforeRenew

Executed before a service is renewed.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\BeforeSuspend

Executed before a service is suspended.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\BeforeUncancel

Executed before a service is uncanceled.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\BeforeUnsuspend

Executed before a service is unsuspended.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\NightlyCron

Executed during the nightly cron.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\Provision

Executed when a service is provisioned.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\Service\Start

Executed when a service is started.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### Event\ServicePlanUpgrade\AfterAssign

Executed after a Service Plan Upgrade is assigned.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_upgrade Upgrade details. |

### Event\ServicePlanUpgrade\AfterCreate

Executed after a Service Plan Upgrade is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_upgrade Upgrade details. |

### Event\ServicePlanUpgrade\AfterEdit

Executed after a Service Plan Upgrade is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_upgrade Upgrade details. |

### Event\ServicePlanUpgrade\AfterOptionAssign

Executed after a Service Plan Upgrade Option is assigned.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_option Upgrade details. |

### Event\ServicePlanUpgrade\AfterOptionCreate

Executed after a Service Plan Upgrade Option is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_option Upgrade Option details. |

### Event\ServicePlanUpgrade\AfterOptionEdit

Executed after a Service Plan Upgrade Option is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_option Upgrade details. |

### Event\ServicePlanUpgrade\BeforeAssign

Executed before a Service Plan Upgrade is assigned.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_upgrade Upgrade details. |

### Event\ServicePlanUpgrade\BeforeCreate

Executed before a Service Plan Upgrade is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_upgrade Upgrade details. |

### Event\ServicePlanUpgrade\BeforeEdit

Executed before a Service Plan Upgrade is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_upgrade Upgrade details. |

### Event\ServicePlanUpgrade\BeforeOptionAssign

Executed before a Service Plan Upgrade Option is assigned.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_option Upgrade details. |

### Event\ServicePlanUpgrade\BeforeOptionCreate

Executed before a Service Plan Upgrade Option is created.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_option Upgrade Option details. |

### Event\ServicePlanUpgrade\BeforeOptionEdit

Executed before a Service Plan Upgrade Option is edited.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $upgrade_option Upgrade details. |

## View hooks

### View\Client\DashboardMenuItems

Executed when displaying the client dashboard menu items, allowing custom menu items to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $brand Brand details. |

### View\Client\Summary

Executed on the client profile page, allowing additional boxes to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $client Client details. |

### View\Contact\Summary

Executed on the contact profile page, allowing additional boxes to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $contact Contact details. |

### View\Device\Actions

Executed on the view device page, allowing additional boxes to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### View\Device\Summary

Executed on the view device page, allowing additional boxes to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $device Device details. |

### View

Executed when viewing the view plugin page.

### View\Order\Action

Allows a new order action to be added to an order queue.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### View\Order\Summary

Executed on the view order page, allowing additional boxes to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $order Order details. |

### View\Sales\DashboardMenuItems

Executed when displaying the client dashboard menu items, allowing custom menu items to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $brand Brand details. |

### View\Service\InvoicePdfSummary

Executed when generating an invoice PDF, allowing additional details to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### View\Service\InvoiceSummary

Executed when generating an invoice, allowing additional details to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

### View\Service\Summary

Executed on the service details page, allowing additional boxes to be added.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object` | $service Service details. |

[Go back](../DEVELOPMENT.md)
