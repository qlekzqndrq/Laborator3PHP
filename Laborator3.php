<!DOCTYPE html>
<html lang="ro">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Laborator PHP - Concepte de Bază</title>

 <style>
 body { font-family: Arial, sans-serif; line-height: 1.6; padding:
20px; }
 .rezultat { background-color: #f4f4f4; padding: 10px; margin-top:
10px; }
 </style>

</head>
<body>

 <h1>Laborator PHP - Concepte de Bază</h1>

 <?php
 // 1. Variabile
 $nume = "Alexandra";
 $varsta = 21;
 $inaltime = 1.67;
 $greutate = 41;

 // 2. Constante
 define("CURS_EURO", 5.09);

 // 3. Afișare variabile
 echo "<h2>Variabile și Afișare</h2>";
 echo "Nume: $nume <br>";
 echo "Vârsta: $varsta ani <br>";
 echo "Înălțime: $inaltime m <br>";
 echo "Greutate: $greutate kg <br>";

 // 4. Utilizare constantă
 echo "<h2>Constante</h2>";
 echo "Cursul EURO este: " . CURS_EURO . " RON <br>";

 // 5. Operații aritmetice
 echo "<h2>Operații Aritmetice</h2>";
 $suma = 100;
 $suma_euro = $suma / CURS_EURO;
 echo "$suma RON = $suma_euro EURO <br>";

 $indice_de_masa_corporala = $greutate / $inaltime ** 2;
 echo "IMC = $indice_de_masa_corporala <br>";

 // 6. Structuri condiționale
 echo "<h2>Structuri Condiționale</h2>";
 if ($varsta >=18 && $varsta <=65) {    // && inseamna and in php
 echo "$nume are vârsta cuprinsă între 18 și 65 de ani. <br>";
 } else {
 echo "$nume nu are vârsta cuprinsă între 18 și 65 de ani. <br>";
 }

 // 7. Structuri repetitive
 echo "<h2>Structuri Repetitive</h2>";
 echo "Numărătoare: ";
 for ($i = 1; $i <= 10; $i++) {
 echo "$i ";
 }
 echo "<br>";

 // 8. Array-uri
 echo "<h2>Array-uri</h2>";
 $fructe = array("măr", "banană", "portocală", "căpșună", "persică", "afină", "zmeură");
 echo "Fructe: ";
 foreach ($fructe as $fruct) {
 echo "$fruct ";
 }
 echo "<br>";

 // 9. Funcții
 function salut($nume) {
 return "Salut, $nume!";
 }

 function aduna($inaltime, $greutate): string {
 $rezultat = $inaltime + $greutate;
 return "Suma dintre înălțimea și greutatea ta este $rezultat.";  
 }

 echo "<h2>Funcții</h2>";
 echo salut($nume);
 echo "<br>";
 echo aduna($inaltime, $greutate);
 ?>

 <h2>Formular PHP</h2>
 <form method="post" action="">
 <label for="numeInput">Nume:</label><br>
 <input type="text" id="numeInput" name="numeInput"><br>
 <label for="varstaInput">Vârsta:</label><br>
 <input type="number" id="varstaInput" name="varstaInput"><br>
 <input type="submit" value="Trimite">
 </form>
 <?php

 // 10. Procesare formular
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $numeInput = $_POST['numeInput'];
 $varstaInput = $_POST['varstaInput'];
 echo "<div class='rezultat'>";
 echo "Numele introdus: " . htmlspecialchars($numeInput) . "<br>";
 echo "Varsta introdusa: " . htmlspecialchars($varstaInput);
 echo "</div>";
 }