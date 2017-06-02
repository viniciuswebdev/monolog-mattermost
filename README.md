# monolog-mattermost
![Travis](https://travis-ci.org/viniciuswebdev/monolog-mattermost.svg?branch=master)
![Scrutinizer](https://scrutinizer-ci.com/g/viniciuswebdev/monolog-mattermost/badges/quality-score.png?b=master)

```php
use Monolog\Logger;

$logger = new Logger('olar');
$logger->pushHandler(new MattermostHandler('https://chat.easytaxi.net.br/hooks/x'));

$logger->info('Hello!');
```
