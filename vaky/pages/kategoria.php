<?php
include "../includes/db.php";

$id = $_GET['id'];

$categorysql = "select * from questions_categories where categorie_id = '$id'";

$tulos2 = $yhteys->query($categorysql);

while ($q2 = $tulos2 -> fetch_assoc()){ ?>

<!DOCTYPE html>
<html>
<head>
    <?php include "../includes/head.php" ?>
    <title><?php echo $q2['categorie_name'] ?></title>
</head>
<body>
<div class="container">

        <h1 id="kategorian-nimi"><?php echo $q2['categorie_name'] ?></h1>

    <?php } ?>

    <?php include "../includes/sidebar.php" ?>

    <main id="kategoria-main">

        <?php

        $questionsql = "select * from questions inner join questions_categories on categorie_id = q_categorie_id where q_categorie_id = '$id' ORDER BY pubdate desc ";

        $tulos = $yhteys->query($questionsql);

        if ($tulos->num_rows > 0) {
        while ($rivi = $tulos->fetch_assoc()) { ?>

        <div id="kysymykset">

            <div class="kysymys">

                <p> <?php echo $rivi['author'] ?> || <span class="gray"><?php echo $rivi['pubdate'] ?></span></p>

                <h3><a href="single.php?id=<?php echo $rivi['question_id'];?>" class="linkit"><?php echo $rivi['title'] ?></a></h3>

                <p><?php echo mb_substr($rivi['text'], 0, 50, 'utf-8') . "...";?></p>
            </div>


        </div>

        <?php }} else { ?>

            <div id="kysymykset">

                <div class="kysymys">

                    <h3>Kysymyksiä ei löydy!</h3>

                </div>

            </div>



    <?php
    }
        ?>
    </main>
    <div class="clear"></div>
</div>
</div>
</body>
</html>