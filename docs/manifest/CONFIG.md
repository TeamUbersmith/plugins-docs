<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Config items](#config-items)
  - [Required](#required)
  - [Accepted values](#accepted-values)
  - [Usage](#usage)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

# Config items

`config_items` is an array that identifies the config items the plugin uses.

Each config item requires:

`scope` The scope of the config item. Accepted values: `module`, `entity`.

`modules` The module the field is associated with.

`label` The label of the field.

`type` The type of the field. Accepted values: `checkbox`, `password`, `select`, `text`, `textarea`.

`options` Optional. The selectable options when using the type `select`.

`default` Optional. The default value for the field.

## Required
No

## Accepted values
`array`

## Usage
```
"config_items": {
	"value": {
		"scope": ["module", "entity"],
		"modules": ["brand_module"],
		"label": "Value",
		"type": "text"
	},
	"option": {
		"scope": ["module", "entity"],
		"modules": ["brand_module"],
		"label": "Option",
		"type": "select",
		"options": [1, 2, 3, 4, 5],
		"default": 1
	}
}
```

[Go back](MANIFEST.md)
