<!DOCTYPE html>
<html>
<head>
    <?php include "../includes/head.php" ?>
    <title>Kirjaudu sisään</title>
</head>
<body>
    <div class="container">

        <h1 id="kirjaudu-h1">Kirjaudu sisään</h1>

        <?php include "../includes/sidebar.php" ?>

            <main id="kirjaudu-main">

                <form action="../functions/auth.php" method="post">

                    <h2>Käyttäjätunnus:</h2>
                    <input type="text" name="kirjaudu-ktunnus" id="kirjaudu-ktunnus">

                    <br>

                    <h2>Salasana:</h2>
                    <input type=password name="kirjaudu-salasana" id="kirjaudu-salasana">

                    <br>

                    <p><a href="rekisteroidy.php" id="k-rekisteroidy">Ei käyttäjätunnusta? Rekisteröidy käyttäjäksi!</a></p>

                    <br>

                    <input type="submit" value="Kirjaudu sisään" id="kirjaudu-button">

                </form>

            </main>
            <div class="clear"></div>
    </div>
</body>
</html>

