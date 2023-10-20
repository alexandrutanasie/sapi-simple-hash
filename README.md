## Installation

To install SimpleHash run the command:

    composer require talex/simple-hash

```php
use  Talex\SimpleHash\Str;

$number = 111;
$encoderDecoder = new Str();

$encoderDecoder->encode($number);

echo "Encoded: {$encoderDecoder->getEncodedString()}\n";

$encoderDecoder->decode();
echo "Decoded: {$encoderDecoder->getDecodedString()}\n";

```