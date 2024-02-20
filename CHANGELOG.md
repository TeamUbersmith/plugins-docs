# Release notes

# 5.0
> [!WARNING]
> The plugin system have backward incompatible changes with Ubersmith version `4.x.x`

## Breaking Changes
- PHP `Resource` is a soft reserved word which was used to defined an Interface in the plugin system.
It has been remove in this major version.

`UbersmithSDK\Usage\Resource` has been rename to `UbersmithSDK\Usage\UsageResource`.

**Affected Plugins:**\
Any custom plugins implementing a `UsageDataSource`.

**Action Required:**\
In your plugin code, references to `UbersmithSDK\Usage\Resource` should be replaced with `UbersmithSDK\Usage\UsageResource`.

Typical usage would be in the `convert_amount` method implemented by your Datasource Class
```php
//Before
public function convert_amount($amount, \UbersmithSDK\Usage\Resource $resource, $to_unit)
{
	// ...
}

// After
public function convert_amount($amount, \UbersmithSDK\Usage\UsageResource $resource, $to_unit)
{
	// ...
}
```

## Deprecated Changes
- View Hook name `View\General\Execute` has been renamed to `View`. Using `View\General\Execute` is now deprecated and will be removed in a future version.

## New Features
- PHP Attributes are now supported and are the encouraged way to use the Plugin System annotations.
	- See the [Attributes Transition Guide](docs/Guide-Attributes-Transition.md) to learn how to update your plugins.
## New View Hooks
### Contacts
- `View\Contact\Summary`

## New Event Hooks
### Services
- `Event\Service\AfterCreateSetupFee`
- `Event\Service\AfterPricingCreate`
- `Event\Service\AfterPricingDelete`
- `Event\Service\AfterPricingEdit`

### Service Plan Upgrades
- `Event\ServicePlanUpgrade\BeforeAssign`
- `Event\ServicePlanUpgrade\AfterAssign`
- `Event\ServicePlanUpgrade\BeforeCreate`
- `Event\ServicePlanUpgrade\AfterCreate`
- `Event\ServicePlanUpgrade\BeforeEdit`
- `Event\ServicePlanUpgrade\AfterEdit`
- `Event\ServicePlanUpgrade\BeforeOptionAssign`
- `Event\ServicePlanUpgrade\AfterOptionAssign`
- `Event\ServicePlanUpgrade\BeforeOptionCreate`
- `Event\ServicePlanUpgrade\AfterOptionCreate`
- `Event\ServicePlanUpgrade\BeforeOptionEdit`
- `Event\ServicePlanUpgrade\AfterOptionEdit`

### Contacts
- `Event\Contact\BeforeCreate`
- `Event\Contact\AfterCreate`
- `Event\Contact\BeforeDeactivate`
- `Event\Contact\AfterDeactivate`
- `Event\Contact\BeforeReactivate`
- `Event\Contact\AfterReactivate`
- `Event\Contact\BeforeEdit`
- `Event\Contact\AfterEdit`

### Orders
- `Event\Order\BeforeActionSkip`
- `Event\Order\AfterActionSkip`
- `Event\Order\BeforeActionUndoSkip`
- `Event\Order\AfterActionUndoSkip`
- `Event\Order\BeforeCancel`
- `Event\Order\AfterCancel`
- `Event\Order\BeforeCreate`
- `Event\Order\AfterCreate`
- `Event\Order\BeforeEdit`
- `Event\Order\AfterEdit`
- `Event\Order\BeforeSubmit`
- `Event\Order\AfterSubmit`

### Devices
- `Event\Device\AfterConnectionCreate`
- `Event\Device\AfterConnectionEdit`
- `Event\Device\AfterConnectionDelete`
- `Event\Device\AfterInterfaceCreate`
- `Event\Device\AfterInterfaceEdit`
- `Event\Device\AfterInterfaceDelete`
- `Event\Order\BeforeActionProcess`
- `Event\Order\AfterActionProcess`

## New UbersmithSDK functions
GUI
- `UbersmithSDK\GUI\InputDateTime`

Mail
- `UbersmithSDK\Mail\ParseEmailAddress`

Payment
- `UbersmithSDK\Payment\GetAccountCreditPaymentTypes`
- `UbersmithSDK\Payment\GetCustomPaymentTypes`
- `UbersmithSDK\Payment\GetGatewayPaymentTypes`
- `UbersmithSDK\Payment\GetReceivedPaymentTypes`

User
- `UbersmithSDK\User\AccessDenied`
- `UbersmithSDK\User\HasBrandAccess`
- `UbersmithSDK\User\HasClientManagerAccess`
- `UbersmithSDK\User\HasDeviceManagerAccess`
- `UbersmithSDK\User\HasPermission`
- `UbersmithSDK\User\HasReportManagerAccess`
- `UbersmithSDK\User\HasSalesManagerAccess`

Util
- `UbersmithSDK\Util\GetPercentageColor`
- `UbersmithSDK\Util\GetStripedBgColor`
- `UbersmithSDK\Util\StringDateToTimestamp`

# 4.2
Plugin System initial realease.
