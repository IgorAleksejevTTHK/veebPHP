<?php

function clearVarsExcept($url,$varname){
    $url=basename($url);
    if(str_starts_with($url,"?")){
        return "?$varname=".$_REQUEST[$varname];

    }
    return strtok($url,"?")."?$varname=".$_REQUEST[$varname];
}



echo "<h2>Tekst funktsioonid</h2>";
?>

<div class="container">


    <div class="block">
        <h3>Teksti analüüs</h3>
        <?php
        $tekst='PHP on skriptikeel serveripoolne';

        echo "Algne tekst: $tekst<br>";
        echo "Teksti pikkus: " . strlen($tekst) . "<br>";
        echo "Esimesed 6 tähte: " . substr($tekst, 0, 6) . "<br>";
        echo "Alates 6. tähest: " . substr($tekst, 6) . "<br>";
        echo "Sõnade arv: " . str_word_count($tekst) . "<br>";
        echo "Suured tähed: " . strtoupper($tekst) . "<br>";
        echo "Väikesed tähed: " . strtolower($tekst) . "<br>";
        echo "Iga sõna algab suure tähega: " . ucwords($tekst) . "<br>";
        ?>
    </div>

    <!-- BLOKK 2 — Trim funktsioonid -->
    <div class="block">
        <h3>Trim funktsioonid</h3>
        <?php
        $tekst2='      PHP on skriptikeel serveripoolne:         ';

        echo "|" . $tekst2 . "|<br>";
        echo "trim(): |" . trim($tekst2) . "|<br>";
        echo "ltrim(): |" . ltrim($tekst2) . "|<br>";
        echo "rtrim(): |" . rtrim($tekst2) . "|<br>";
        ?>
    </div>

    <!-- BLOKK 3 — Tekst kui massiiv -->
    <div class="block">
        <h3>Tekst kui massiiv</h3>
        <?php
        echo "1. täht: ".$tekst[0]."<br>";
        echo "5. täht: ".$tekst[4]."<br>";

        $sona = str_word_count($tekst,1);
        echo "2. sõna: ".$sona[2]."<br>";
        ?>
    </div>

    <!-- BLOKK 4 — Asendamine -->
    <div class="block">
        <h3>Teksti asendamine</h3>
        <?php
        $asendus='JavaScript';
        echo substr_replace($tekst, $asendus, 0, 3) . "<br>";

        $otsi=['PHP', 'serveripoolne'];
        $asenda=['JavaScript','kliendipoolne'];
        echo str_replace($otsi, $asenda, $tekst);
        ?>
    </div>

    <!-- BLOKK 5 — Mõistatus -->
    <div class="block wide">
        <h3>Mõistatus — arva ära Eesti linn</h3>

        <?php
        $linn = "Parnu";

        if (isset($_REQUEST["linn"]) && $_REQUEST["linn"] !== "") {
            $linn = $_REQUEST["linn"];
        }

        echo "<ol>";
        echo "<li>Esimene täht: " . $linn[0] . "</li>";
        echo "<li>Kokku " . strlen($linn) . " tähte</li>";
        echo "<li>Teine täht: " . $linn[1] . "</li>";
        echo "<li>Viimased 2 tähte: " . substr($linn, -2) . "</li>";
        echo "<li>Muudetud nimi: " . substr_replace(" on suvi pealinn", "Tartu", 0, 0) . "</li>";
        echo "</ol>";
        ?>

        <form class="form" method="post">
            <label for="linn">Sisesta linnanimi:</label>
            <input type="text" id="linn" name="linn">
            <button type="submit">Kontrolli</button>
        </form>

        <?php
        if (isset($_REQUEST["linn"])) {
            if (strcasecmp($_REQUEST["linn"], "Parnu") === 0) {
                echo "<p class='success'>{$_REQUEST['linn']} on õige</p>";
            } else {
                echo "<p class='error'>{$_REQUEST['linn']} ei ole õige</p>";
            }
        }
        ?>


</div>

</div>
</html>

