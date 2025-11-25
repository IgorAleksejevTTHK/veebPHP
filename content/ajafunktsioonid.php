<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Igor PHP ajafunktsioonid</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<h3>PHP Ajafunktsioonid</h3>

<div class="container">

    <div class="block">
        <h2>Ajafunktsioon</h2>
        <?php
        date_default_timezone_set('Europe/Tallinn');

        echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezone list </a><br>";
        echo "time() - aeg sekundides: " . time() . "<br>";
        echo "date(): " . date("d-m-Y H:i:s") . "<br>";

        echo "<pre> 
d - päev 01...31
m - kuu 01...12
Y - aasta - nelja kohane arv
G - 24h formaat
i - minutid 0...59
s - sekundid 0...59
</pre>";
        ?>
    </div>

    <div class="block">
        <h2>Tehtud kuupäevaga</h2>
        <?php
        echo "+1 min: " . date("d-m-Y H:i:s", time() + 60) . "<br>";
        echo "+1 tund: " . date("d-m-Y H:i:s", time() + 3600) . "<br>";
        echo "+1 päev: " . date("d-m-Y H:i:s", time() + 86400) . "<br>";
        ?>
    </div>

    <div class="block">
        <h2>Kuupäeva genereerimine</h2>
        <?php
        $synd = mktime(5, 12, 5, 3, 17, 2007);
        echo "Minu sünnipäev: " . date("d-m-Y G:i:s", $synd) . "<br><br>";
        ?>
    </div>

    <div class="block">
        <h2>Kuu nimega</h2>
        <?php
        $kuud = array(
            1 => 'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni',
            'juuli', 'august', 'september', 'oktoober', 'november', 'detsember'
        );

        $paev = date("d");
        $kuu = $kuud[date("m")];
        $aasta = date("Y");

        echo "Täna on: $paev $kuu $aasta a.";
        ?>
    </div>

</div>

</body>
</html>
