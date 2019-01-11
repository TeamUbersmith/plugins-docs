# Hooks

The following is a list of hooks that have been defined throughout Ubersmith:

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
<!-- https://github.com/thlorenz/doctoc use this tool to update -->
**Table of Contents**

- [Event hooks](#event-hooks)
  - [Event\Client\AfterCreate](#eventclientaftercreate)
  - [Event\Client\AfterDeactivate](#eventclientafterdeactivate)
  - [Event\Client\AfterEdit](#eventclientafteredit)
  - [Event\Client\AfterReactivate](#eventclientafterreactivate)
  - [Event\Client\BeforeCreate](#eventclientbeforecreate)
  - [Event\Client\BeforeDeactivate](#eventclientbeforedeactivate)
  - [Event\Client\BeforeEdit](#eventclientbeforeedit)
  - [Event\Client\BeforeReactivate](#eventclientbeforereactivate)
  - [Event\Device\AfterCreate](#eventdeviceaftercreate)
  - [Event\Device\AfterDelete](#eventdeviceafterdelete)
  - [Event\Device\AfterEdit](#eventdeviceafteredit)
  - [Event\Device\AfterIPAssignmentAdded](#eventdeviceafteripassignmentadded)
  - [Event\Device\AfterIPAssignmentEdited](#eventdeviceafteripassignmentedited)
  - [Event\Device\AfterIPAssignmentJoined](#eventdeviceafteripassignmentjoined)
  - [Event\Device\AfterIPAssignmentRemoved](#eventdeviceafteripassignmentremoved)
  - [Event\Device\AfterIPAssignmentSplit](#eventdeviceafteripassignmentsplit)
  - [Event\Device\BeforeCreate](#eventdevicebeforecreate)
  - [Event\Device\BeforeDelete](#eventdevicebeforedelete)
  - [Event\Device\BeforeEdit](#eventdevicebeforeedit)
  - [Event\Service\AfterCancel](#eventserviceaftercancel)
  - [Event\Service\AfterCreate](#eventserviceaftercreate)
  - [Event\Service\AfterDeactivate](#eventserviceafterdeactivate)
  - [Event\Service\AfterEdit](#eventserviceafteredit)
  - [Event\Service\AfterInvoice](#eventserviceafterinvoice)
  - [Event\Service\AfterPayment](#eventserviceafterpayment)
  - [Event\Service\AfterRenew](#eventserviceafterrenew)
  - [Event\Service\AfterSuspend](#eventserviceaftersuspend)
  - [Event\Service\AfterUncancel](#eventserviceafteruncancel)
  - [Event\Service\AfterUnsuspend](#eventserviceafterunsuspend)
  - [Event\Service\BeforeCancel](#eventservicebeforecancel)
  - [Event\Service\BeforeCreate](#eventservicebeforecreate)
  - [Event\Service\BeforeDeactivate](#eventservicebeforedeactivate)
  - [Event\Service\BeforeEdit](#eventservicebeforeedit)
  - [Event\Service\BeforeRenew](#eventservicebeforerenew)
  - [Event\Service\BeforeSuspend](#eventservicebeforesuspend)
  - [Event\Service\BeforeUncancel](#eventservicebeforeuncancel)
  - [Event\Service\BeforeUnsuspend](#eventservicebeforeunsuspend)
  - [Event\Service\Provision](#eventserviceprovision)
  - [Event\Service\Start](#eventservicestart)
- [View hooks](#view-hooks)
  - [View\Client\DashboardMenuItems](#viewclientdashboardmenuitems)
  - [View\Client\Summary](#viewclientsummary)
  - [View\Device\Actions](#viewdeviceactions)
  - [View\Device\Summary](#viewdevicesummary)
  - [View\Order\Summary](#viewordersummary)
  - [View\Sales\DashboardMenuItems](#viewsalesdashboardmenuitems)
  - [View\Service\InvoicePdfSummary](#viewserviceinvoicepdfsummary)
  - [View\Service\InvoiceSummary](#viewserviceinvoicesummary)
  - [View\Service\Summary](#viewservicesummary)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Event hooks

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
