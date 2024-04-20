<?php declare(strict_types=1);

use Amiros\PersianDigit\PersianDigit;
use PHPUnit\Framework\TestCase;

final class PersianDigitTest extends TestCase
{
    public function testOnlyNumbersCanConvertToEnglish(): void
    {
        $text = '۰۱۲۳۴۵۶۷۸۹';

        $convertedText = PersianDigit::convert($text);

        $this->assertSame("0123456789", $convertedText);
    }

    public function testOnlyNumbersCanConvertToPersian(): void
    {
        $text = '0123456789';

        $convertedText = PersianDigit::convert($text, "fa");

        $this->assertSame("۰۱۲۳۴۵۶۷۸۹", $convertedText);
    }
}