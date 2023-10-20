## Installation

To install SimpleHash run the command:

    composer require sapi/simple-hash

```php
use  Sapi\SimpleHash\Str;

$number = 111;
$encoderDecoder = new Str();

$encoderDecoder->encode($number);

echo "Encoded: {$encoderDecoder->getEncodedString()}\n";

$encoderDecoder->decode();
echo "Decoded: {$encoderDecoder->getDecodedString()}\n";

```