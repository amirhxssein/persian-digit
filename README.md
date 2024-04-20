# Persian-Digit

## Description
This PHP package allows you to convert Persian digits to English digits and vice versa. It's a handy tool for developers working with Persian and English digit representations.

## Installation
You can install the package via Composer. Run the following command in your terminal:

```bash
composer require amirhxssein/persian-digit
```

## Usage

```php
use Amiros\PersianDigit\PersianDigit;

// Persian To English
$text = '۰۱۲۳۴۵۶۷۸۹';
$convertedText = PersianDigit::convert($text);

// English to Persian
 $text = '0123456789';
 $convertedText = PersianDigit::convert($text, "fa");
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).