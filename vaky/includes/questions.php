<?php
include "db.php";

$questionssql = "SELECT * FROM questions  INNER JOIN questions_categories on q_categorie_id = categorie_id ORDER BY question_id DESC LIMIT 10";


$tulos = $yhteys->query($questionssql);

if($tulos -> num_rows > 0){

while ($questions = $tulos -> fetch_assoc()){

    ?>

    <div class="kysymys">
        <h4><a href="pages/single.php?id=<?php echo $questions['question_id']; ?>" class="otsikko-linkki"><?php echo $questions['title'];?></a></h4>

        <p><?php echo mb_substr($questions['text'], 0, 50, 'utf-8') . "...";?></p>

        <p><?php echo $questions['author']. ", ". $questions['pubdate'] . ", " . $questions['categorie_name'];?></p>

    </div>

    <?php
    }}else{
    ?>

        <div class="kysymys">
            <h4>Kysymyksiä ei löydy!</h4>
        </div>

        <?php
}
?>