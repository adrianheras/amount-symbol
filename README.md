# Amount Symbol Twig extension

This is a Twig extension for Symfony2 Framework where you can easily add symbol to amounts like currencies and percentages.

For example

```twig
{{ merkat.cash|amount_symbol("EUR") }}
```

Outputs __70.95 €__

# Installation for Symfony2

1) Update your composer.json

```json
"require": {
	"adrianheras/amount-symbol": "1.*"
}
```

or use composer's require command:

	composer require adrianheras/amount-symbol:1.*

2) Register an Extension as a Service

Now you must let the Service Container know about your newly created Twig Extension:

YAML:

```yaml
# app/config/config.yml
services:
	adrianheras.twig.amount_symbol:
		class: AdrianHeras\Twig\Extension\AmountSymbolExtension
		tags:
		- { name: twig.extension }
```

XML:

```xml
# or into your bundle src\Acme\AcmeBundle\Resources\config\services.xml
<service id="adrianheras.twig.amount_symbol" class="AdrianHeras\Twig\Extension\AmountSymbolExtension">
	<tag name="twig.extension" />
	<argument type="service" id="translator" />
</service>
```
