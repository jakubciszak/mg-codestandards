# Code Sniffer Rules for Magento 1
This rule based on [ECG Magento Code Sniffer Coding Standard](https://github.com/magento-ecg/coding-standard)

## Installation
Before starting using our coding standard install PHP_CodeSniffer.

The recommended installation method for PHPCS is globally with Composer:

```
$ composer global require "squizlabs/php_codesniffer=*"
```

Make sure Composer's bin directory (defaulted to` ~/.composer/vendor/bin/`) is in your PATH.

Clone or download this repo somewhere on your computer or install it with Composer:

```
$ composer require jakubciszak/mg-codestandards
```

## Usage
Select a standard to run with CodeSniffer:

Run CodeSniffer:
```
$ phpcs --standard=./vendor/jakubciszak/mg-codestandards/mg1 /path/to/code
```
