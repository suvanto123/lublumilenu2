<!DOCTYPE html>
<html>
<head>
    <?php include "../includes/head.php" ?>
    <title>Kirjoita vastaus</title>
</head>
<body>

    <?php if(isset($_COOKIE['user'])): ?>

    <div class="container">

        <h1 id="vastaus-name">Kirjoita vastaus</h1>

        <?php
        include "../includes/db.php";

        $id = $_GET['id'];

        $questionsql = "select * from questions where question_id = '$id'";

        $tulos = $yhteys->query($questionsql);

        ?>

        <?php

        while ($q = $tulos -> fetch_assoc()){ ?>

            <div id="v-kysymys">

                <p> <?php echo $q['author'] ?> || <span class="gray"><?php echo $q['pubdate'] ?></span></p>

                <h3><?php echo $q['title'] ?></h3>

                <p><?php echo $q['title'] ?></p>

            </div>

        <?php } ?>

        <div id="vastaus-sidebar">

        <?php include "../includes/sidebar.php" ?>

        </div>

            <main id="vastaus-main">

                <form action="../functions/svastaus.php?id=<?php echo $id ?>" method="post">
                    <h2>Teksti:</h2>
                    <textarea rows="15" cols="80" name="vastauksen-teksti" id="vastauksen-teksti"></textarea>

                    <br>

                    <input type="submit" value="Julkaise" name="julkaise-vastaus">
                </form>

            </main> 
            <div class="clear"></div>   
    </div>

    <?php else:

     header("Location: ../pages/kirjaudu.php");

     endif; ?>
</body>
</html>