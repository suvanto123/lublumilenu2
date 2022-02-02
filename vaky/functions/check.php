<?php

    $login = filter_var(trim($_POST['rekisteroidy-ktunnus']),
        FILTER_SANITIZE_STRING);

    $email = filter_var(trim($_POST['rekisteroidy-sposti']),
        FILTER_SANITIZE_STRING);

    $pass = filter_var(trim($_POST['rekisteroidy-salasana']),
        FILTER_SANITIZE_STRING);

    if (mb_strlen($login) < 5 || mb_strlen($login) > 20) {
        echo 'Kättäjätunnus ei käy';
        exit();
    } else if (strpos($email, '@') == false) {
        echo 'Puuttuu "@"';
        exit();
    } elseif (mb_strlen($pass) < 5 || mb_strlen($pass) > 20) {
        echo 'Salasana ei käy';
        exit();
    }

$pass = md5($pass."ajkfahas657");


include "../includes/db.php";

    $lisayssql = "INSERT INTO users (login, email, password) VALUES ('$login', '$email', '$pass')";

    $tulos = $yhteys->query($lisayssql);

    $yhteys->close();

    header('Location: ../index.php');

?>