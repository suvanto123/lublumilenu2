<?php
include "db.php";

$topbarsql = "SELECT * FROM questions_categories";

$tulos = $yhteys->query($topbarsql);

?>

<nav id="ylanav">
        <ul>
            <li><a href="index.php">Etusivu</a></li>
            <?php
            while ($qu = $tulos -> fetch_assoc()){
                ?>
                <li><a href="pages/kategoria.php?id=<?php echo $qu['categorie_id']; ?>"><?php echo $qu['categorie_name']?></a></li>
                <?php
            }
            ?>
        </ul>
    </nav>