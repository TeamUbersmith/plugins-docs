# Routes

The following is a list of routes that have been defined throughout Ubersmith:

> [!IMPORTANT]
> A route function is only discovered if it is declared inside your plugin's own namespace (the same `namespace` your plugin's other code uses) and is reachable from your `bootstrap.php` file's own `require`/`include` chain. A function left in the global namespace, or defined in a file `bootstrap.php` never loads, will never be found, regardless of which attribute is applied to it. See [Routes](../DEVELOPMENT.md#routes) for a complete example.

## View routes

### View

Executed when viewing the view plugin page.

> [!IMPORTANT]
> Namespace and reachability aren't the only requirement — the plugin also needs an active module instance for this page before the route will ever run. Add a module with `"component": "brands"` to your `manifest.json` (see the [example manifest](../DEVELOPMENT.md#manifest-file)), then go to `Settings -> Plugins`, edit the plugin, and create an instance of that module attached to the brand you're testing with. Without that, the plugin is never even found when the view page is loaded, regardless of which attribute is applied or how correctly the function is namespaced.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $plugin` | Plugin details. |

[Go back](../DEVELOPMENT.md)
