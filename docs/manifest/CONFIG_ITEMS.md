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
