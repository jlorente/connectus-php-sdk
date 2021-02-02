Connectus PHP SDK
===============
A PHP package to access the [Connectus API](https://web.connectus.cl/api_v2.html) by a comprehensive way.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

With Composer installed, you can then install the extension using the following commands:

```bash
$ php composer.phar require jlorente/connectus-php-sdk
```

or add 

```json
...
    "require": {
        "jlorente/connectus-php-sdk": "*"
    }
```

to the ```require``` section of your `composer.json` file.

## Configuration

You can set the api keys as environment variables or add them later on Connectus 
class instantiation.

The name of the environment variables are CONNECTUS_API_KEY and CONNECTUS_ACCOUNT_ID.

## Usage

Endpoints calls must done through the Connectus class.

If you haven't set the environment variables previously, remember to provide 
them on instantiation.

```php
$connectus = new \Jlorente\Connectus\Connectus($apiKey, $apiSecret);
$connectus->api()->checkSmsBalance();
```

All the API methods are well documented in the Jlorente\Connectus\Api class.

## License 
Copyright &copy; 2021 José Lorente Martín <jose.lorente.martin@gmail.com>.

Licensed under the BSD 3-Clause License. See LICENSE.txt for details.
