<?php

require __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->writeHTML('<h1>Hello World!</h1>');
$mpdf->Output();



