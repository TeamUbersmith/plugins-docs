# Routes

The following is a list of routes that have been defined throughout Ubersmith:

> [!IMPORTANT]
> A route function is only discovered if it is declared inside your plugin's own namespace (the same `namespace` your plugin's other code uses) and is reachable from your `bootstrap.php` file's own `require`/`include` chain. A function left in the global namespace, or defined in a file `bootstrap.php` never loads, will never be found, regardless of which attribute is applied to it. See [Routes](../DEVELOPMENT.md#routes) for a complete example.

## View routes

### View

Executed when viewing the view plugin page.

> [!IMPORTANT]
> This route requires a `"component": "brands"` module in your `manifest.json` (see the [example manifest](../DEVELOPMENT.md#manifest-file)), with an instance of that module created and attached to the brand under `Settings -> Plugins`. The plugin view page looks up plugins by brand, so without that module instance your plugin is never found for this page, and `#[Route('View')]` never runs.

**Parameters:**

| Parameter | Description |
| --- | --- |
| `object $plugin` | Plugin details. |

[Go back](../DEVELOPMENT.md)
