<?php
echo "<h2>Tekstifailidega töötamine PHP-s</h2>";


echo "<h3>Tekstifailiga ühendamine ja sulgemine</h3>";
echo "Failiga ühendamiseks kasutatakse funktsiooni fopen().<br>";

$faili_nimi = 'test2.txt';
$minu_fail = fopen($faili_nimi, 'w'); // avab või loob faili
echo "Fail '$faili_nimi' on avatud kirjutamiseks.<br>";
fclose($minu_fail);
echo "Fail suletud pärast töö lõpetamist, fclose(fail).<br>";


echo "<h3>Tekstifaili kirjutamine</h3>";
$tekst = "lorem ipsum\n";
file_put_contents($faili_nimi, $tekst);
echo "Tekst kirjutatud faili '$faili_nimi' kasutades file_put_contents()<br>";


$tekst2 = "dolar amerika usa\n";
file_put_contents($faili_nimi, $tekst2, FILE_APPEND);
echo "Tekst lisatud faili lõppu FILE_APPEND abil.<br>";


echo "<h3>Tekstifaili lugemine</h3>";
$faili_sisu = file_get_contents($faili_nimi);
echo "Faili sisu:<br>";
echo nl2br($faili_sisu);


echo "<h3>Lugemine ridade kaupa</h3>";
$minu_fail = fopen($faili_nimi, 'r');
while (!feof($minu_fail)) {
    $rida = fgets($minu_fail);
    echo nl2br($rida);
}
fclose($minu_fail);

echo "<h3>Tekstifaili info</h3>";
$suurus = filesize($faili_nimi);
$viimati_muudetud = date('d.m.Y G:i', filemtime($faili_nimi));
echo "Faili nimi: $faili_nimi<br>";
echo "Faili suurus: $suurus baiti<br>";
echo "Viimati muudetud: $viimati_muudetud<br>";

// --- Faili kustutamine ja ümbernimetamine ---
echo "<h3>Faili kustutamine ja ümbernimetamine</h3>";
//unlink($faili_nimi); // kustutab faili
//rename('vananimi.txt', 'uusnimi.txt'); // ümbernimetamine
echo "Faili saab kustutada unlink() ja ümber nimetada rename() abil.<br>";


echo "<h3>Faili andmete lugemine massiivi</h3>";
$andmed = file($faili_nimi, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo "Faili read massiivis:<br>";
print_r($andmed);
?>
