<?php
function clearVarsExcept($url, $varname)
{
    $url = basename($url);
    if (str_starts_with($url, "?")) {
        return "?$varname=$_REQUEST[$varname]";
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}
echo "<h2>Matemaatilised tehted</h2>";
$arv1= 1.21;
$arv2= 2.54;

echo "Esimene arv on .$arv1, teine arv on .$arv2 ";
echo "<br>";
echo "+ Liitmise tulemus: ".($arv1+$arv2);
echo "<br>";
echo "- Lahutamise tulemus: ".($arv1-$arv2);
echo "<br>";
echo "* Korrutise tulemus: ".($arv1*$arv2);
echo "<br>";
echo "/ Jagatise tulemus: ".($arv1/$arv2);
echo "<br>";
echo "<h3>Matemaatilised funktsioonid</h3>";
echo "Väiksem arv: ";
echo min($arv1,$arv2);
echo "<br>";
echo "Suurem arv: ";
echo max($arv1,$arv2);
echo "<br>";
echo "round(arv) - Ümardamine täisarvani: ";
echo round($arv1);
echo "<br>";
echo "ceil(arv) - Ümardab jargmise arvuni: ";
echo ceil($arv1);
echo "<br>";
echo "floor(arv) - Ümardab allapoole täisarvani: ";
echo floor($arv1);
echo "<br>";
echo "round(arv, 1) - Ümardab ühe komma kohtani: ";
echo round($arv1, 1 );
echo "<br>";

echo rand(1,100);
echo " - juhuslik arv";
echo "<br>";
echo "pow(arv,2) - astendamine: ";
echo pow($arv1,2);
echo "<br>";
echo"sqrt(arv) - ruutjuur: ";
echo sqrt($arv2);
echo "<br>";
echo pi();
echo "<br>";

echo "<h2>Omistamise operaatorid</h2>";
$x = 10;
$y = 20;

echo "Suurendamine ühe võrra: ";
$x ++; // $x = $x+1
echo $x;
echo "<br>";
echo "Vahendamine ühevõrra: ";
$x --;
echo $x;
echo "<br>";
$x*=$y;// x= x*y
echo $x;
echo "<br>";

$x/=$y;// x= x/y
echo $x;

echo "<br>";
$nimi = 'igor';
$perenimi = 'aleksejev';
//$nimi .= $perenimi;
echo $nimi;
echo "<br>";
$format = 'Tere, %s %s, arv x: %d';
printf($format, $perenimi, $nimi,$x);

echo "<br>";
echo "<h2>Arv mõistatus, arva ära 2 arvu (10-30)</h2>";
$secretarv1=22;
$secretarv2=11;
echo "Esimene Arv ruutjuuris = ";
echo sqrt($secretarv1);
echo "<br>";
echo "Teine arv astendamises(2) = ";
echo pow($secretarv1, 2);
echo "<br>";
echo "Esimene arv - Teine arv = ".($secretarv1-$secretarv2);
echo "<br>";
echo "Esimene arv + Teine arv = ".($secretarv1+$secretarv2);
echo "<br>";
echo "Esimene arv - $secretarv2 = Teine arv";
echo "<br>";
?>
<br>
<form method="post">
    <label>Esimene arv:</label>
    <input type="number" name="arv1" required><br><br>

    <label>Teine arv:</label>
    <input type="number" name="arv2" required><br><br>

    <input type="submit" value="Kontrolli">
</form>

<?php
if (isset($_POST['arv1']) && isset($_POST['arv2'])) {

    $arv1 = $_POST['arv1'];
    $arv2 = $_POST['arv2'];

    if ($arv1 == $secretarv1 && $arv2 == $secretarv2) {
        echo "Õige! Sa arvasid mõlemad arvud ära";
    } else {
        echo "Vale! Proovi uuesti.";
    }
}
?>

