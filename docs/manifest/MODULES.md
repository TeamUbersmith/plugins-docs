# Modules

`modules` is an array that identifies the modules the plugin uses.

Each module requires:

`component` The component of the module. Accepted values: `brands`, `datasources`, `device_types`, `order_queues`, `service_plans`.

`label` The label of the module.

`description` The description of the module.

## Required
Yes

## Accepted values
`array`

## Usage
```
"modules": {
	"client_module": {
		"component": "brands",
		"label": "Client module",
		"description": "Client module description"
	},
	"device_module": {
		"component": "device_types",
		"label": "Device module",
		"description": "Device module description"
	}
}
```

[Go back](MANIFEST.md)
