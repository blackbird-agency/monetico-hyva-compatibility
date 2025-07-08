# Blackbird Monetico Hÿva Compatibility

[![Latest Stable Version](https://img.shields.io/packagist/v/blackbird/module-hyva-monetico.svg?style=flat-square)](https://packagist.org/packages/blackbird/module-hyva-monetico)
[![License: MIT](https://img.shields.io/github/license/blackbird-agency/monetico-hyva-compatibility.svg?style=flat-square)](./LICENSE)

Compat module for Blackbird Monetico on Magento 2 using Hyvä Checkout. This requires:
- A [Hyvä Checkout](https://www.hyva.io/) key
- A License to [Blackbird Monetico](https://store.bird.eu/en/extension-payment-monetico-credit-mutuel-cic-magento-2.html)
- A contract with [Monetico Paiement](https://www.monetico-paiement.fr/fr/installer/installation-e-paiement.html)

Please note that this module is only compatible with redirection mode. Iframe mode is not supported and should be
disabled in the Monetico configuration.
```
    bin/magento config:set "payment/monetico_multitime/use_iframe" 0
    bin/magento config:set "payment/monetico_onetime/use_iframe" 0
```

## Requirements

* PHP > 7.4
* Hÿva Checkout : ^1.1
* Blackbird Monetico version: ^100.3.38

## Setup

Get the package

Composer Package:
```composer require blackbird/monetico-hyva-compatibility```

Zip Package:
Unzip the package in app/code/Blackbird/MoneticoHyvaCompatibility, from the root of your Magento instance.


## Install the module

Go to your Magento root directory and run the following magento command:

```
php bin/magento setup:upgrade
```

## Support

- If you have any issue with this code, feel free to [open an issue](https://github.com/blackbird-agency/monetico-hyva-compatibility/issues/new).
- If you want to contribute to this project, feel free to [create a pull request](https://github.com/blackbird-agency/monetico-hyva-compatibility/compare).

## Contact

For further information, contact us:

- by email: support@bird.eu
- or by form: [https://black.bird.eu/en/contacts/](https://black.bird.eu/contacts/)

## Authors

- [**Blackbird Team**](https://github.com/blackbird-agency) - *Maintainer* -

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

***That's all folks!***
