<?php
$nume = htmlspecialchars($_POST['nume']);
$nota1 = (int)$_POST['nota1'];
$nota2 = (int)$_POST['nota2'];
$nota3 = (int)$_POST['nota3'];
$medie = ($nota1 + $nota2 + $nota3) / 3;
$medie = round($medie, 2);
$situatie = ($medie >= 5) ? "PROMOVAT" : "RESPINS";
$culoare = ($medie >= 5) ? "green" : "red";
echo "<h2>Student: $nume</h2>";
echo "Note: $nota1, $nota2, $nota3<br>";
echo "Medie: <strong>$medie</strong><br>";
echo "<span style='color:$culoare; font-weight:bold;'>$situatie</span>";
?>