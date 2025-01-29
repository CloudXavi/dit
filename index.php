<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Strona Główna </title>
    <link rel="stylesheet" href="css/style.css">

    

</head>
<body>
<?php

setcookie('nick', '');
setcookie('pass', '');

?>

<script src="menu-rozwin.js"></script>    

    <div id="container"> <!-- kontener przechowujący całą stronę --> 
    <div id="logo"> <img src="" alt="logo"> </div> <!-- logo strony -->

        <nav id="menu">
    <ul style="list-style-type:none;">
        <li onclick="rozwinSklep()">Sklep</li>
        <li onclick="rozwinCzat()">Czat</li>
        <li onclick="rozwinKom()">Komentarze</li>
        <li onclick="rozwinNauka()">Nauka</li>
        <li onclick="rozwinMaterialy()">Materiały</li>
        <li onclick="rozwinOnas()">O Nas</li>
        <li onclick="rozwinKontakt()">Kontakt</li>
    </ul>
        </nav>


        <nav id="menu-rozwin">



        </nav>
<?php
if(isset($_COOKIE['nick']) && isset($_COOKIE['pass'])){

    echo "<main id='news'>
            <?php
            include 'nowe_wyswietl.php';
            ?>
        </main> ";

} else {

    include 'logrej_form.html';

}
        
?>
    </div>

</body>

</html>