 <!DOCTYPE html>
<html>
<head>
    <?php include "../includes/head.php" ?>
    <title>Kysymys</title>
</head>
<body>
<div class="container">

    <div id="single-sidebar">

    <?php include "../includes/sidebar.php" ?>

    </div>

    <main id="single-main">

    <?php
    include "../includes/db.php";

    $id = $_GET['id'];

    $questionsql = "select * from questions where question_id = '$id'";

    $tulos = $yhteys->query($questionsql);

    ?>

    <?php

    while ($q = $tulos -> fetch_assoc()){ ?>

    <div id="kysymys-postaus">

        <p> <?php echo $q['author'] ?> || <span class="gray"><?php echo $q['pubdate'] ?></span></p>

        <h3><?php echo $q['title'] ?></h3>

        <p><?php echo $q['text'] ?></p>

    </div>

<?php } ?>

        <div id="vastaa-linkki">
            <p><a href="vastaus.php?id=<?php echo $id; ?>">Vastaa</a></p>
        </div>

        <?php $numsql = "select count(*) from comments inner join questions on questions_id = question_id where questions_id = '$id' ";

        $all = $yhteys->query($numsql);

        $num = $all->fetch_assoc()
        ?>

        <div id="vastauksien-maara">
            <p>Vastauksien määrä: <?php echo $num['count(*)'] ?></p>
        </div>

        <?php
        $commentsql ="select * from comments inner join questions on questions_id = question_id where questions_id = '$id' ORDER BY qpubdate desc";

        $tulos = $yhteys->query($commentsql);

        if ($tulos->num_rows > 0) {
        while ($rivi = $tulos->fetch_assoc()) { ?>

        <div class="vastaus">

            <p> <?php echo $rivi['qauthor'] ?> || <span class="gray"><?php echo $rivi['qpubdate'] ?></span></p>
            <p> <?php echo $rivi['qtext'] ?></p>

        </div>

        <?php }} else { ?>
            <div class="vastaus">

                <h3>Vastauksia ei vielä ole!</h3>

            </div>
        <?php
        }
        ?>

    </main>
    <div class="clear"></div>
</div>
</body>
 </html>


