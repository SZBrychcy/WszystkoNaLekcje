<?php

$text = $_POST['textarea'];

// uchwyt pliku, otwarcie do dopisania 
if ($fp = @fopen("plik.txt","a")) {

// blokada pliku do zapisu 
flock($fp, 2);

// zapisanie danych do pliku 
fwrite($fp, $text);

// odblokowanie pliku
flock($fp, 3);

//zamknięcie pliku
fclose($fp);
echo "Zapisano poprawnie"."<br>";
}
else echo "Wystapił błąd w zapisie pliku!"."<br>";




$wyrazy = explode(" ", $text);
// wyświetli ilość wyrazów w zmiennej $text
echo "Ilość wyrazów: ".count($wyrazy)."<br>";
//wyśwuetli ilość wierszy w zmiennej $text
echo "Ilość wierszy : ".count(file('plik.txt'))."<br>";


$tekst=$text; 
$liczba=str_word_count($tekst);

?>

