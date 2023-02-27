<?php
$amount = 100;
$vat_rate = 0.15; 

$vat = $amount * $vat_rate;
echo "The VAT on $" . $amount . " is $" . $vat;
?>
