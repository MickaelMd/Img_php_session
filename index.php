<?php require "script.php";?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <section id="main_section">

        <img style="display:none;" id="img" src="<?=$img?>" />

        <canvas id="myCanvas" style="border:1px solid grey;">
            Sorry, your browser does not support canvas.
        </canvas>

        <script>
        const canvas = document.getElementById("myCanvas");
        const ctx = canvas.getContext("2d");
        const image = document.getElementById("img");

        image.addEventListener("load", (e) => {
            ctx.drawImage(image, 0, 0);
        });
        </script>

        <form action="" method="POST" enctype="multipart/form-data">
            <input id="img_btn" type="file" name="img_session" required>
            <button type="submit" name="load">Charger l'image</button>
        </form>

        <form action="" method="POST">

            <button type="submit" name="reset">Reset</button>
            <button type="submit" name="refresh">Recharger la page</button>
        </form>
    </section>

    <section id="info">

        <p>$inactive = 256; </br>
            ini_set('session.gc_maxlifetime', $inactive);</br> </br>

            <span class="comment"> Définis un temps en secondes </span> </br> </br>

            session_start();</br>

            if (isset($_SESSION['time_session']) && (time() - $_SESSION['time_session'] > $inactive)) {</br> </br>
            <span class="comment"> Regarde l'heure de la dernière requête et si c'est plus que $inactive, alors on
                détruit
                la session </span> </br> </br>
            session_unset(); </br>
            session_destroy();
            }</br>
            $_SESSION['time_session'] = time();
        </p>

    </section>


</body>

</html>