<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>

	<?php

//----------------------------------------------------------------------------------------------------------	
//filemtime	 wyświetli np. jakisplik.txt został ostatnio zmodyfikowny 
$filename = 'jakisplik.txt';
if (file_exists($filename)) {
 echo "$filename został ostatnio zmodyfikowny : " . date ("F-d-Y  H:i:s." , filemtime($filename));
}

echo "<br>";
echo "<br>";
echo "<br>"; 

//----------------------------------------------------------------------------------------------------------

//filesize
// wyświetli np. jakisplik.txt: 1024 bajtów
$filename = 'jakisplik.txt';
echo $filename . ': ' . filesize($filename) . ' bajtów';

echo "<br>";
echo "<br>";
echo "<br>";

//----------------------------------------------------------------------------------------------------------

//is_dir Mówi czy nazwa_pliku jest katalogiem
var_dump(is_dir('jakisplik.txt'));
var_dump(is_dir('nieistniejacy_katalog/abc'));

echo "<br>";
echo "<br>";
echo "<br>";
//----------------------------------------------------------------------------------------------------------

//is_executable Mówi czy plik jest wykonywalny
$file = 'style.css';

if (is_executable($file)) {
  echo $file.' jest wykonywalny';
} else {
  echo $file.' nie jest wykonywalny';
}

echo "<br>";
echo "<br>";
echo "<br>";

//----------------------------------------------------------------------------------------------------------

//is_file Mówi czy nazwa_pliku jest zwykłym plikiem
var_dump(is_file('jakisplik.txt')) . "\n";
var_dump(is_file('style.css')) . "\n";

echo "<br>";
echo "<br>";
echo "<br>";

//----------------------------------------------------------------------------------------------------------

//is_link  Mówi czy nazwa_pliku jest dowiązaniem symbolicznym

//----------------------------------------------------------------------------------------------------------

//is_readable Określa, czy plik istnieje i czy można go odczytać
$filename = 'jakisplik.txt';
if (is_readable($filename)) {
    echo 'ten plik istnieje';
} else {
    echo 'ten plik nie istnieje';
}

echo "<br>";
echo "<br>";
echo "<br>";

//----------------------------------------------------------------------------------------------------------

//is_writable  Określa, czy nazwa pliku jest zapisywalna

$filename = 'jakisplik.txt';
if (is_writable($filename)) {
    echo 'ten plik jest zapisywalny';
} else {
    echo 'ten plik nie jest zapisywalny';
}

echo "<br>";
echo "<br>";
echo "<br>";

//----------------------------------------------------------------------------------------------------------
//copy
$file = 'jakisplik.txt';
$newfile = 'pliczek12.txt';

if (!copy($file, $newfile)) {
      echo "kopiowanie pliku $file ";
}    else {
     		"nie powiodło się\n";
}

echo "<br>";
echo "<br>";
echo "<br>";

//----------------------------------------------------------------------------------------------------------
//rename
rename ("pliczek12.txt", "nowyplik.txt");

echo "<br>";
echo "<br>";
echo "<br>";

//----------------------------------------------------------------------------------------------------------
//chmod Zmienia prawa dostępu do pliku
// Odczyt i zapis dla właściciela, żadnych praw dla innych
chmod("nowyplik.txt", 0600);

// Odczyt i zapis dla właściciela, odczyt dla wszystkich
chmod("nowyplik.txt", 0644);

// Wszystkie prawa dla właściciela, odczyt i wykonanie dla innych
chmod("nowyplik.txt", 0755);

// Wszystkie prawa dla właściciela, odczyt i wykonanie dla grupy właściciela
chmod("nowyplik.txt", 0750);

echo "<br>";
echo "<br>";
echo "<br>";

//----------------------------------------------------------------------------------------------------------


?>

</body>
</html>
