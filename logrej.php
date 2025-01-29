<?php
    setcookie('nick', $_REQUEST['nick']);
    setcookie('pass', $_REQUEST['pass']);

    $nick = $_COOKIE['nick'];
    $pass = $_COOKIE['pass'];

    if($nick == "" || $pass == "") {

        include 'index.php';
        echo '<script src="js/not_set_form.js"> </script>';
        echo '<h1 style="background-color: red; color: white; margin-left: 30%;"> PODAJ DANE </h1>';

    } else {

        include 'index.php';
        $sql = new mysqli('localhost', 'root', '', 'di');

        $query = $sql->prepare('SELECT * FROM users WHERE nick = ?');
        $query->bind_param('s', $nick);

        if($nick = $query){

            include 'zalogowany.php';

        } else {

            echo 'Logowanie nie powiodło się';

        }

    }

?>