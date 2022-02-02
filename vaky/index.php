<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>Vaky</title>
</head>
<body>
    
    <div class="container">

     <?php if(!isset($_COOKIE['user'])): ?>

        <header>
            <p><a href="pages/kirjaudu.php">Kirjaudu</a></p>
            <p><a href="pages/rekisteroidy.php">Rekisteröidy</a></p>
        </header>

     <?php else: ?>

         <header>
             <p>Tervetuloa, <?= $_COOKIE['user']?> <a href="functions/logout.php" id="red">Kirjaudu ulos</a></p>
             <p><a href="pages/kysy.php">Jotain mielessä? Kysy!</a></p>
         </header>

     <?php endif; ?>

    <div id="logo">
        <h1>VaKy</h1>
        <h2>Vastaa ja kysy!</h2>
    </div>

    <?php include "includes/topbar.php" ?>

    <main id="etusivu-main">
        <h2>Viimeiset kysymykset</h2>

        <div id="kysymykset">

            <?php include "includes/questions.php"?>

        </div>

    </main>
    </div>
</body>
</html>