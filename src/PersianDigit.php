<?php

namespace Amiros\PersianDigit;

use AppGati;

class PersianDigit
{
    private const array PersianDigits = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
    private const array EnglishDigits = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

    public static function convert(string $text, string $to = 'en'): string
    {
        return match (strtolower($to)) {
            'fa' => self::convertToFa($text),
            default => self::convertToEn($text),
        };
    }

    private static function convertToFa(string $text): string
    {
        return str_replace(self::EnglishDigits, self::PersianDigits, $text);
    }

    private static function convertToEn(string $text): string
    {
        return str_replace(self::PersianDigits, self::EnglishDigits, $text);
    }
}