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
            <h1><a href="index.php">AppFAQ</a></h1>
        </div>
        <ul>
            <li><a href="register.php">s'inscrire</a></li>
        </ul>
    </nav>

    <br>
    <div class="contaiiner">

    
    <div class="container">
        <form id="formulaire" action="contact.php">
            <div class="cont">
                <h1>Connexion</h1>
                <label for="pseudo">Identifiant</label> <br>
                <input type="text" id="pseudo" placeholder="identifiant"> <br>


                <label for="Mot de passe">Mot de passe</label> <br>
                <input type="password" id="Mot de passe" placeholder="password"> <br><br><br>

                <div class="button">
                    <a href="list.php"><input type="button" id="v" value="Enregistrer"></a>
                    <a href="index.php"><input type="button" id="f" value="Annuler"> <br></a>
                </div>
            </div>
    </div>
    </div>
    </form>

    <p></p>

</body>

</html>