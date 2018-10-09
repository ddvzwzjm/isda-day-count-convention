<?php
namespace ISDA;

class ISDA
{
    public static function dateDiff30360(\DateTime $beginDate, \DateTime $endDate)
    {
        $dayBegin = (int)$beginDate->format('d');
        $d1 = $dayBegin === 31 ? 30 : $dayBegin;

        $dayEnd = (int)$endDate->format('d');
        $d2 = ($dayEnd === 31 && ($dayBegin === 31 or $dayBegin === 30)) ? 30 : min($dayEnd, 31);

        return
            ((int)$endDate->format('Y') - (int)$beginDate->format('Y'))*360
            + ((int)$endDate->format('m') - (int)$beginDate->format('m'))*30
            + ($d2 - $d1);
    }
}