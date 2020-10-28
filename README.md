# Magento 2 Module - Region Filter

![https://www.augustash.com](http://augustash.s3.amazonaws.com/logos/ash-inline-color-500.png)

**This is a private module and is not currently aimed at public consumption.**

## Overview

The `Augustash_RegionFilter` module allows administrators to remove the US territories and army bases from the region dropdown. This prevents people from using addresses in these regions when a merchant doesn't ship or bill there.

## Installation

### Via Composer

Install the extension using Composer using our development package repository:

```bash
composer config repositories.augustash composer https://augustash.repo.repman.io
composer require augustash/module-region-filter:~1.0.0
bin/magento module:enable --clear-static-content Augustash_RegionFilter
bin/magento setup:upgrade
bin/magento cache:flush
```

## Uninstall

After all dependent modules have also been disabled or uninstalled, you can finally remove this module:

```bash
bin/magento module:disable --clear-static-content Augustash_RegionFilter
rm -rf app/code/Augustash/RegionFilter/
composer remove augustash/module-region-filter
bin/magento setup:upgrade
bin/magento cache:flush
```

## Structure

[Typical file structure for a Magento 2 module](http://devdocs.magento.com/guides/v2.3/extension-dev-guide/build/module-file-structure.html).
