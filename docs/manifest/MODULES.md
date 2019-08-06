<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Modules](#modules)
  - [Required](#required)
  - [Accepted values](#accepted-values)
  - [Usage](#usage)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

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
