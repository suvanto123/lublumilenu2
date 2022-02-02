<?php

$login = filter_var(trim($_POST['kirjaudu-ktunnus']),
    FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['kirjaudu-salasana']),
    FILTER_SANITIZE_STRING);

$pass = md5($pass."ajkfahas657");

include "../includes/db.php";

$kirjauduHakusql = "SELECT * FROM users WHERE login = '$login' AND password = '$pass'";

$result = $yhteys->query($kirjauduHakusql);

$user2 = $result -> fetch_assoc();

if($user2 == null){
    echo "Käyttäjää ei löydy";
    exit();
}

setcookie('user', $user2['login'], time() + 3600, '/');

$yhteys->close();

header('Location: ../index.php');

?>

