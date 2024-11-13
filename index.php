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

        <img id="img" src="<?=$img?>" />
        <form action="" method="POST" enctype="multipart/form-data">
            <input id="img_btn" type="file" name="img_session" required>
            <button type="submit" name="load">Charger l'image</button>
        </form>

        <form action="" method="POST">

            <button type="submit" name="reset">Reset</button>
            <button type="submit" name="refresh">Recharger la page</button>
        </form>
    </section>


</body>

</html>