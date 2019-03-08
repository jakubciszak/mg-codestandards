# Code Sniffer Rules for Magento 1
This rule based on [ECG Magento Code Sniffer Coding Standard](https://github.com/magento-ecg/coding-standard)

## Installation
Before starting using our coding standard install PHP_CodeSniffer.

The recommended installation method for PHPCS is globally with Composer:

```bash
$ composer global require "squizlabs/php_codesniffer=*"
```

Make sure Composer's bin directory (defaulted to ` ~/.composer/vendor/bin/`) is in your PATH.

### How to add the ` ~/.composer/vendor/bin/` to your PATH?
#### Linux console
* Open`~/.bashrc` file.
* Add the following code:
```bash
export PATH=~/.composer/vendor/bin:$PATH
```
* Save and close
* Use `source` command for reload `.bashrc` file.
```bash
$ source ~/.bashrc
```

Clone or download this repo somewhere on your computer or install it with Composer:

```bash
$ composer require jakubciszak/mg-codestandards
```

You can add package to global composer require.

```bash
$ composer global require jakubciszak/mg-codestandards
```

Set `installed_paths` for PHPCS from **magento-ecg**

```bash
$ ~/.composer/vendor/bin/phpcs --config-set installed_paths ~/.composer/vendor/magento-ecg/coding-standard


```
## Usage
Select a standard to run with CodeSniffer:

Run CodeSniffer:
```
$ phpcs --standard=./vendor/jakubciszak/mg-codestandards/mg1 /path/to/code
```
