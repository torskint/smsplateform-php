"smsplateform.com Composer Library"

## Include composer autoload class before.
```php
require_once 'vendor/autoload.php';
```


## Send new sms

```php
use Smsplateform\Client\Auth;
use Smsplateform\Client\Request;

Auth::Init('<YOUR_USERNAME>', '<YOUR_PASSWORD>');
$sms = new Request([
	"sender" 		=> '<SENDER>',
	"msisdn" 		=> '<PHONE>',
	"message" 		=> '<MESSAGE>',

	'webhook_url' 	=> 'https://your-site/script.php'
]);

$result = $sms->Send();
$data = $result->getResponse();

var_dump($data);
```

## Retrieve the list of sms sent
```php
use Smsplateform\Client\Auth;
use Smsplateform\Client\Request;

Auth::Init('<YOUR_USERNAME>', '<YOUR_PASSWORD>');
$sms = new Request([]);

$result = $sms->List();
$data = $result->getResponse();

var_dump($data);
```


## User Profile informations
```php
use Smsplateform\Client\Auth;
use Smsplateform\Client\Request;

Auth::Init('<YOUR_USERNAME>', '<YOUR_PASSWORD>');
$sms = new Request([]);

$result = $sms->Profile();
$data = $result->getResponse();

var_dump($data);
```


## Retrieve information about a given message id
```php
use Smsplateform\Client\Auth;
use Smsplateform\Client\Request;

Auth::Init('<YOUR_USERNAME>', '<YOUR_PASSWORD>');
$sms = new Request([
	"message_id" 	=> '<SMS_ID>'
]);

$result = $sms->View();
$data = $result->getResponse();

var_dump($data);
```