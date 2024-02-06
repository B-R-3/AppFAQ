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
            <h1>AppFAQ</h1>
        </div>
        <ul>
            <li>home</li>
            <li>contact</li>
            <li>connecter</li>
        </ul>
    </nav>

    <br>
    <h1>M2L</h1>
    <h2>Connexion</h2>
    <form id="formulaire" action="contact.php">
        <label for="pseudo">pseudo</label> <br>
        <input type="text" id="pseudo"> <br>


        <label for="Mot de passe">Mot de passe</label> <br>
        <input type="password" id="Mot de passe"> <br><br><br>


        <a href="add.php"><input type="button" id="v" value="Valide"></a>




        <a href="index.php"><input type="button" id="f" value="Annule"> <br></a>
    </form>

    <p></p>

</body>

</html>