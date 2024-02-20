# Transition from DocBlock annotations to PHP attribtues
Starting with Ubersmith version 5.0.0, the plugin system will transition from DocBlock annotations to PHP attributes.

Existing plugin annotations before version 5.0.0 will still be supported but new annotations will only be added as PHP attributes.

> [!IMPORTANT]
> Mixed usage of UbersmithSDK annotations declared using DocBlock and Attributes on the same function is not supported. Only attributes will be recognized.

Transition should be simple as only the DocBlock part needs to be replaced and none of the actual code logic.

## `@Config`
Before
```php
/**
 * @Config my_config_field
 */
function myFunction()
{
	// ...
}
```

After
```php
use \UbersmithSDK\Attribute\Config;

#[Config('my_config_field')]
function myFunction()
{
	// ...
}
```

## `@Config Validate`
Before
```php
/**
 * @Config Validate
 */
function myFunction()
{
	// ...
}
```

After
```php
use \UbersmithSDK\Attribute\Config;

#[Config('Validate')]
function myFunction()
{
	// ...
}
```

## `@Schedule`
Before
```php
/**
 * @Schedule * * * * *
 */
function myFunction()
{
	// ...
}
```

After
```php
use \UbersmithSDK\Attribute\CronSchedule;

#[CronSchedule('* * * * *')]
function myFunction()
{
	// ...
}
```

## `@Hook`
Before
```php
/**
 * @Hook View\Service\Summary
 */
function myFunction()
{
	// ...
}
```

After
```php
use \UbersmithSDK\Attribute\Hook;

#[Hook('View\Service\Summary')]
function myFunction()
{
	// ...
}
```


## `@Label`
Before
```php
/**
 * @Label My Label
 */
function myFunction()
{
	// ...
}
```

After
```php
use \UbersmithSDK\Attribute\Label;

#[Label('My Label Home Page')]
function myFunction()
{
	// ...
}
```

## `@Property Interactive`
Before
```php
/**
 * @Property Interactive = true
 */
function myFunction()
{
	// ...
}
```

After
```php
use \UbersmithSDK\Attribute\Order\Action\Interactive;

#[Interactive(true)]
function myFunction()
{
	// ...
}
```

## `@Property Reprocess`
Before
```php
/**
 * @Property Reprocess = true
 */
function myFunction()
{
	// ...
}
```

After
```php
use \UbersmithSDK\Attribute\Order\Action\Reprocess;

#[Reprocess(true)]
function myFunction()
{
	// ...
}
```

## `@Payment\Gateway\ACH`
Before
```php
/**
 * @Payment\Gateway\ACH
 */
class MyACH implements \UbersmithSDK\Payment\Transaction\ACH
{
	// ...
}
```

After
```php
use UbersmithSDK\Attribute\Payment\Gateway\ACH;

#[ACH]
class MyACH implements \UbersmithSDK\Payment\Transaction\ACH
{
	// ...
}
```

## `@Payment\Gateway\CreditCard`
Before
```php
/**
 * @Payment\Gateway\CreditCard
 */
class MyCreditCard implements \UbersmithSDK\Payment\Transaction\CreditCard
{
	// ...
}
```

After
```php
use UbersmithSDK\Attribute\Payment\Gateway\CreditCard;

#[CreditCard]
class MyCreditCard implements \UbersmithSDK\Payment\Transaction\CreditCard
{
	// ...
}
```

## `@Payment\Gateway\IPN`
Before
```php
/**
 * @Payment\Gateway\IPN
 */
class MyIPN implements \UbersmithSDK\Payment\Transaction\IPN
{
	// ...
}
```

After
```php
use UbersmithSDK\Attribute\Payment\Gateway\IPN;

#[IPN]
class MyIPN implements \UbersmithSDK\Payment\Transaction\IPN
{
	// ...
}
```

## `@Route`
Before
```php
/**
 * @Route View
 */
function myFunction()
{
	// ...
}
```

After
```php
use \UbersmithSDK\Attribute\Route;

#[Route('View')]
function myFunction()
{
	// ...
}
```

## `@UsageDatasource`
Before
```php
/**
 * @UsageDatasource my_usage_datasource
 */
class MyUsageDatasource implements \UbersmithSDK\Usage\Data\Source
{
	// ...
}
```

After
```php
use UbersmithSDK\Attribute\UsageDataSource;

#[UsageDataSource('my_usage_datasource')]
class MyUsageDatasource implements \UbersmithSDK\Usage\Data\Source
{
	// ...
}
```
