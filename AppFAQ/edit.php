<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AppFAQ</title>
</head>

<body>
    <nav>
        <div class="logo">
            <h1>AppFAQ (admin)</h1>
        </div>
        <ul>
            <li><a href="deco.php">Déconnexion</a></li>

        </ul>
    </nav>

    <br>
    <div class="contaiiner">

    <div class="container">
        <h1 id="tail">Formulaire de message</h1>
        <form action="#" method="post">
            <input type="text" name="nom" placeholder="Votre nom">
            <textarea name="message" placeholder="Votre message"></textarea>

            <div class="button-container">
                <button type="submit"><a href="list.php">envoyer</a></button>
                <button type="button"><a href="list.php">Retour</a></button>
            </div>
        </form>
    </div>
    </div>


</body>

</html>