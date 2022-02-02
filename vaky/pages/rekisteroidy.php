<!DOCTYPE html>
<html>
<head>
    <?php include "../includes/head.php" ?>
    <title>Rekisteröidy</title>
</head>
<body>

    <div class="container">

        <h1 id="rekisteroidy-name">Rekisteröidy</h1>

        <?php include "../includes/sidebar.php" ?>

        <main id="rekisteroidy-main">

            <form action="../functions/check.php" method="post">

                <h2>Keksi käyttäjätunnus:</h2>
                <input type="text" name="rekisteroidy-ktunnus" id="rekisteroidy-ktunnus">

                <br>

                <h2>Keksi salasana:</h2>
                <input type=password name="rekisteroidy-salasana" id="rekisteroidy-salasana">

                <br>

                <h2>Sähköposti:</h2>
                <input type="text" name="rekisteroidy-sposti" id="rekisteroidy-sposti">

                <br>

                <input type="submit" value="Rekisteröidy" name="rekisteroidy-button" id="rekisteroidy-button">

            </form>

        </main>

    </div>
    
</body>
</html>