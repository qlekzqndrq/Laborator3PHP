<?php
define("TVA_STANDARD", 0.19);
$pret = floatval($_POST['pret']);
$cotaTVA = intval($_POST['cota_tva']) / 100;
$tva = $pret * $cotaTVA;
$pretCuTVA = $pret + $tva;
echo "<h3>Rezultat:</h3>";
echo "Preț fără TVA: " . number_format($pret, 2) . " RON<br>";
echo "TVA ($cotaTVA%): " . number_format($tva, 2) . " RON<br>";
echo "<strong>Preț cu TVA: " . number_format($pretCuTVA, 2) . "
RON</strong>";
?>
