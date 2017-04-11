# bing-webmaster-api

Bing webmaster api client
## Instalation
   ```
   composer require webjeyros/bing-webmaster-api
   ```
## Example usage:

```php
use bingWebmaster\actions\GetUserSites;

require_once __DIR__.'/../vendor/autoload.php';
$client = new GuzzleHttp\Client();
$webmaster = new \bingWebmaster\client('__API-KEY-HERE__',$client);


$sites=$webmaster->request(new GetUserSites());
foreach ($sites as $site) {
    if (!$site->IsVerified)
        printf("Site %s is not verified. Authentication code is %s".PHP_EOL,$site->Url,$site->AuthenticationCode);
}
```
