<?php

require "../includes/db.php";

$kommentti = filter_var(trim($_POST['vastauksen-teksti']),
    FILTER_SANITIZE_STRING);

if($kommentti != ''){

    $author = $_COOKIE['user'];

    $text = $_POST['vastauksen-teksti'];

    $questionId = $_GET['id'];

    $datetime = date_create()->format('Y-m-d H:i:s');


    $lisayskommentti = "INSERT INTO comments (qauthor, qtext, qpubdate, questions_id) VALUES ('$author', '$text', '$datetime','$questionId')";

    $yhteys->query($lisayskommentti);

    $yhteys->close();

    header("Location: ../pages/single.php?id=" . $questionId);

}