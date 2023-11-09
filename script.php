

<?php

const EURO = [50, 20, 10, 5, 2, 1];
const CENT = [50, 20, 10, 5];

$bedrag = $argv[1];
$bedrag = round($bedrag += 0.02, 2, PHP_ROUND_HALF_UP);
$restbedrag = $bedrag;
$euro = intval($bedrag);
$cent = intval(round(($bedrag - $euro) * 100));

if (count($argv) !== 2) {
    exit("Geen wisselgeld" . PHP_EOL);
}

foreach (EURO as $geldeenheid) {
    if ($restbedrag >= $geldeenheid) {
        $aantalrestbedrag = floor($restbedrag / $geldeenheid);
        $restbedrag %= $geldeenheid;
        echo "$aantalrestbedrag x $geldeenheid euro" . PHP_EOL;
    }
}

foreach (CENT as $geldeenheid) {
    if ($cent >= $geldeenheid) {
        $aantalrestbedrag = floor($cent / $geldeenheid);
        $cent %= $geldeenheid;
        echo "$aantalrestbedrag x $geldeenheid cent" . PHP_EOL;
    }
}