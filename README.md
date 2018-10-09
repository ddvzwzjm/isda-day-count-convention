# ISDA Day Count Convention for PHP
Calculate dates difference according to ISDA specification 
https://www.isda.org/a/aqMDE/2000-ISDA-Definitions-and-Annex.pdf

# Usage

Install it from packagist
```
composer install ddvzwzjm/isda-day-count-convention
```

Use it in your code
```
$beginDate = new \DateTime('2007-02-28');
$endDate = new \DateTime('2007-03-31');

print ISDA::dateDiff30360($beginDate, $endDate); // 33 days
print ISDA::dateDiff30E360($beginDate, $endDate); // 30 days
print ISDA::dateDiff30E360Eurobond($beginDate, $endDate); // 32 days
print ISDA::dateDiffActual360($beginDate, $endDate); // 31 days

```
