<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Igor PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/muusikaStyle.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="style/konspekt.css">

</head>
<body>
<?php
//päis
include("header.php");
?>

<?php
//navigeerimismenüü
include("nav.php");
?>
<div class="flex-container">
    <div>
        <?php
        if(isset($_GET["link"])){
            include('content/'.$_GET["link"]);
        } else {
            include('content/avaleht.php');
        }
        ?>
    </div>
    <div>
        <img src="image/nerd.png" alt="pilt vabal valikul">
    </div>
</div>

<?php
//jalus
include("footer.php");
?>

<script src="js/muusikaScript.js"></script>
</body>
</html>