<?php
/*
 * mobillimalliKonspekt.php
 * Õppematerjali moodi ülevaade mobiilisõbraliku veebilehe loomisest
 */
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mobiilimalli konspekt</title>
    <link rel="stylesheet" href="style/konspekt.css">
</head>
<body>
<div class="container">

    <div class="section" id="intro">
        <h1>Mobiilisõbraliku veebilehe loomise konspekt</h1>

        <h2>1. Sissejuhatus</h2>
        <div class="content-box">
            <p>
                Ülesanded: Luua mobiilisõbralik veebileht anekdootide näitamiseks.
                Kasutatud tehnoloogiad: HTML5, CSS3, PHP, meta viewport.
            </p>
        </div>
    </div>

    <div class="section" id="code">
        <h2>2. Failide lugemine PHP-ga</h2>

        <div class="content-box">
            <h3>Mida teeb: Loeb tekstifailidest sisu ja kuvab lehel.</h3>
            <pre>
                echo nl2br(file_get_contents("teade.txt"));
                echo file_get_contents("autor.txt");
                </pre>
        </div>


            <h2>3. Mobiilne Meta Tag</h2>
            <pre>
meta name="viewport" content="width=device-width, initial-scale=1.0"
        </pre>
        Leht kohandub seadme ekraani laiusega.
        </div>

        <div class="content-box">
            <h2>Meediapäringud (responsive disain)</h2>
            <pre>
@media (min-width: 480px) {
    #menu ul li {
        display: inline-block;
        margin: 0 8px;
    }
    #menu ul li a {
        font-size: 16px;
        padding: 10px 15px;
    }
}
        </pre>
        </div>

        <div class="content-box">
            <h3>PHP päise ja jaluse kaasamiseks</h3>

            <pre>require("pais.php");</pre>
            <pre>require("jalus.php");</pre>

        </div>
    </div>

    <div class="section" id="mobile-view">
        <h2> Mobiilne Vaade</h2>

        <div class="content-box">
            <p><strong>
                    <img src="image/anekdoot.png" alt="anekdoot" style="width: 100%; max-width: 600px; height: auto; ">
                </strong></p>
        </div>
    </div>

</div>
</body>
</html>
