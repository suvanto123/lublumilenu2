<?php

if (isset($_COOKIE['user'])):

require "../includes/db.php";

$title = filter_var(trim($_POST['kysymyksen-otsikko']),
    FILTER_SANITIZE_STRING);

$text = filter_var(trim($_POST['kysymyksen-teksti']),
        FILTER_SANITIZE_STRING);

$categorie = $_POST['select_categorie'];

$id = $_GET['id'];

$author = $_COOKIE['user'];

$datetime = date_create()->format('Y-m-d H:i:s');


    $lisayskysymys = "INSERT INTO questions (title, text, q_categorie_id, pubdate, author) VALUES ('$title', '$text', '$categorie','$datetime', '$author')";

    $yhteys->query($lisayskysymys);

    $yhteys->close();

    header("Location: ../pages/kategoria.php?id=" . $categorie);

    else:

    header("Location: ../pages/kirjaudu.php");

    endif;

