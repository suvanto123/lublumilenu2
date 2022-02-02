<!DOCTYPE html>
<html>
<head>
    <?php include "../includes/head.php" ?>
    <title>Luo uusi kysymys</title>
</head>
<body>
<div class="container">

    <h1 id="kysy">Luo uusi kysymys</h1>

    <?php include "../includes/sidebar.php" ?>

    <main id="kysy-main">
        <form action="../functions/skysymys.php" method="post">
            <h3>Otsikko:</h3>
            <textarea rows="3" cols="70" name="kysymyksen-otsikko" id="kysymyksen-otsikko" required="required"></textarea>
            
            <br>

            <h3>Teksti:</h3>
            <textarea rows="5" cols="70" name="kysymyksen-teksti" id="kysymyksen-teksti" required="required"></textarea>

            <br> 

            <h3>Valitse kategoria:</h3>
            <select name="select_categorie" required="required" id="select_categorie" >
                <option value="1">Ohjelmointi</option>
                <option value="2">Urheilu</option>
                <option value="3">Ruoka</option>
                <option value="4">Terveys</option>
                <option value="5">Pelit</option>
                <option value="6">Lemmikit</option>
            </select>

            <br>

            <input type="submit" value="Julkaise" id="julkaise-kysymys">
        </form>

    </main>
    <div class="clear"></div>
</div>
</body>
</html>