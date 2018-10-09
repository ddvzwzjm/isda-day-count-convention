<?php
namespace ISDA;

class DateDifferenceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider provider30360
     */
    public function test30360($beginDate, $endDate, $daysExpected)
    {
        $daysBetween = ISDA::dateDiff30360(new \DateTime($beginDate), new \DateTime($endDate));
        self::assertEquals($daysExpected, $daysBetween, "Date tested are {$beginDate} to {$endDate}");

    }

    public function provider30360()
    {
        // beginDate, endDate, daysExpected
        return [
            ['2007-01-15','2007-01-31',16],
            ['2007-01-31','2007-02-28',28],
            ['2007-02-28','2007-03-31',33],
            ['2006-08-31','2007-02-28',178],
            ['2007-02-28','2007-08-31',183],
            ['2007-02-14','2007-02-28',14],
            ['2007-02-26','2008-02-29',363]
        ];
    }

    public function testReadmeSample()
    {
        $beginDate = new \DateTime('2007-02-28');
        $endDate = new \DateTime('2007-03-31');

        self::assertEquals(33, ISDA::dateDiff30360($beginDate, $endDate));
//        self::assertEquals(30, ISDA::dateDiff30E360($beginDate, $endDate));
//        self::assertEquals(32, ISDA::dateDiff30E360Eurobond($beginDate, $endDate));
//        self::assertEquals(31, ISDA::dateDiffActual360($beginDate, $endDate));
    }
}