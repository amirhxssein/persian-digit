<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PersianDigitTest extends TestCase
{
    public function testOnlyNumbersCanConvertToEnglish(): void
    {
        $text = '۰۱۲۳۴۵۶۷۸۹';

        $convertedText = \Amiros\PersianDigit\PersianDigit::convert($text);

        $this->assertSame("0123456789", $convertedText);
    }

    public function testOnlyNumbersCanConvertToPersian(): void
    {
        $text = '0123456789';

        $convertedText = \Amiros\PersianDigit\PersianDigit::convert($text, "fa");

        $this->assertSame("۰۱۲۳۴۵۶۷۸۹", $convertedText);
    }
}