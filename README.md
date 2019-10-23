# Code Sniffer Rules for Magento 1
This rule based on [Magento Extension Quality Program Coding Standard](https://github.com/magento/marketplace-eqp)

## Installation
Composer create:

```bash
$ composer create-project jakubciszak/mg-codestandards

```
The scripts to set `installed_paths` should be running and write the info:
```$xslt
Config value "installed_paths" added successfully
```


## Basic usage
Select a standard to run with CodeSniffer:

Run CodeSniffer:
Go to project directory:
```
$ cd mg-codestandards
$ vendor/bin/phpcs </path/to/moduleOrFile> --standard=MG1 
```
___

## Setting up PHPSTORM
```
File | Settings | Languages & Frameworks | PHP | Quality Tools
```
`Code sniffer` -> `...` near `Configuration`.
Set "PHP Code Sniffer Path" to:
```/<YOURPATH>/mg-codestandards/vendor/bin/phpcs```

Next go to 
```File | Settings | Editor | Inspections```
Find `PHP Code Sniffer Validation` and select `Condig Standard` to `MG1`
___

## Company standards
You can create your own company standards based on `mg-codestandards`.
To do this, create a `special_paths.cfg` file in project root directory, and add line with absolute path to your standards directory.
Eg. `/home/user/rules`.
Next, run the `bin/setup` script.
