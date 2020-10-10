"# smsplateform-php" 

```php
require_once 'vendor/autoload.php';

use Smsplateform\Client\Auth;
use Smsplateform\Client\Request;

Auth::Init('<YOUR_USERNAME>', '<YOUR_PASSWORD>');
$sms = new Request([
	"sender" 		=> '<SENDER>',
	"msisdn" 		=> '<PHONE>',
	"message" 		=> '<MESSAGE>',

	'webhook_url' 	=> 'https://your-site/script.php'
]);

$result = $sms->Send()->getResponse();

var_dump($result);
```
