# Monolog Mattermost Handler
![Travis](https://travis-ci.org/viniciuswebdev/monolog-mattermost.svg?branch=master)
![Scrutinizer](https://scrutinizer-ci.com/g/viniciuswebdev/monolog-mattermost/badges/quality-score.png?b=master)

This Handler may be useful if you need send log messages to Mattermost channels, it's very easy to setup and integrate in your application if you are using [Monolog](https://github.com/Seldaek/monolog).

## Instalation

```
composer require "viniciuswebdev/monolog-mattermost:1.0.0"
```

## Code example

```php
use Monolog\Logger;

$logger = new Logger('application');
$logger->pushHandler(new MattermostHandler('https://mattermost.my-company.net.br/hooks/xxx'));

$logger->info('Your message here!');
```

## How to get my Webhook url?

Just follow these few steps:

* Go to Integrations item on main menu
* Incoming Webhook
* Add Incoming Webhook
* Chose a name, description and the desired channel to publish
* Get the URL to use in the Handler constructor
