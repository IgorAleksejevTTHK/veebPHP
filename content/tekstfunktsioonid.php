<?php
echo "<h2>tekst funktsioonid</h2>";
$tekst='PHP on skriptikeel serveripoolne';
echo $tekst;
echo "teksti pikkus -strlen()= ".strlen($tekst). " tähemärgi";
echo "<br>";
echo "Esimesed 6 tähte -subtr()= ".substr($tekst, 0, 6);
echo "<br>";
echo "Alates 6 tähest =".substr($tekst, 6);
echo "<br>";
echo "Sõnade arv lauses -str_word_count() = ".str_word_count($tekst). " sõna lauses";
echo "<br>";
echo "Kõik tähed on suured - ".strtoupper($tekst);
echo "<br>";
echo "Kõik tähed on väikesed - ".strtolower($tekst);
echo "<br>";
echo "Iga sõna algab suure tähega - ".ucwords($tekst);
echo "<br>";
echo ucwords(strtolower($tekst));
$tekst2='      PHP on skriptikeel serveripoolne:         ';
//trim, ltrim, rtrim
echo "<br>";
echo "|".$tekst2."|";
echo "trim() - eemaldab tekstist tühijuid paremalt ja vasakult: ".trim($tekst2);
echo "<br>";
echo "ltrim() - eemaldab tekstist tühijuid vasakult: ".ltrim($tekst2);
echo "<br>";
echo "rtrim() - eemaldab tekstist tühijuid paremalt: ".rtrim($tekst2);
echo "<br>";
echo "<h3>Tekst kui massiiv</h3>";
echo "1. täht massivist - ".$tekst[0];
echo "<br>";
echo "5. täht massivist - ".$tekst[4];
echo "<br>";
print_r(str_word_count($tekst,1)); //Array ( [0] => PHP [1] => on [2] => skriptikeel [3] => serveripoolne )
$syna=str_word_count($tekst,1);
echo "<br>";
echo $syna[2];
echo "<br>";
echo "massivist 2 sõna - ".$syna[2];
echo "<br>";
// määrab mis sümbool on iga sõna alguses
print_r(str_word_count($tekst,2)); //Array ( [0] => PHP [4] => on [7] => skriptikeel [19] => serveripoolne )
echo "<br>";
echo "<h2>Teksti asendamine -replace<h2>";
$asendus='JavaScript';
echo substr_replace($tekst,$asendus, 0,3);
//ise vaheta serveripoolne - kliendipoolne
echo "<br>";
$otsi=array('PHP','serveripoolne');
$asendav=array('JavaScript','kliendiipoolne');

echo str_replace($otsi,$asendav,$tekst);

echo "<br>";

$linn = "Parnu"; // kui ei ole postitatud midagi

$asendus2 = 'Pärnu';
$linn2 = 'Tartu';
$tekst3 = ' on suvi pealinn';

if (isset($_POST["linn"]) && !empty($_POST["linn"])) {
    $linn = $_POST["linn"]; // asendame kasutaja sisuga
}

echo "<br>";
echo "<h2>Mõistatus. Arva ära Eesti linnanimi</h2>";
echo "<ol>";
echo "<li>Esimene täht on: ".$linn[0]."</li>";
echo "<li>Viimane täht on: ".$linn[strlen($linn)-1]."</li>";
echo "<li>Sõnas on kokku ".strlen($linn)." tähte.</li>";
echo "<li>Teine täht on: ".$linn[1]."</li>";
echo "<li>Viimased 2 tähte on: ".substr($linn, -2)."</li>";
echo "<li>Linna nimi on muudetud: ".substr_replace($tekst3, $linn2, 0, 0)."</li>";
echo "</ol>";
?>

<form name="tekstkontroll" action="tekstfunktsioonid.php" method="post">
    <label for="linn">Sisesta linnanimi:</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="kontrolli">
</form>

<?php
if (isset($_POST["linn"])) {
    if ($_POST["linn"] == "Parnu") {
        echo $_POST["linn"] . " on õige";
    } else {
        echo $_POST["linn"] . " ei ole õige";
    }
}
?>
