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
            <li><a href="login.php">Se connecter</a></li>
        </ul>
    </nav>

    <br>

    <div class="text">
        <h1>M2L</h1>
        <h2>Inscription</h2><br>
    </div>
    <div class="container">
        <form id="formulaire" action="contact.php">
            <label for="nom">Nom</label> <br>
            <input type="text" id="nom"> <br>


            <label for="prenom">Prenom</label> <br>
            <input type="text" id="prenom"> <br>


            <label for="password">Mot de passe</label> <br>
            <input type="password" id="password"> <br>

            <label for="nom">E-mail</label> <br>
            <input type="email" id="e-mail"> <br>

            <label for="pseudo">Pseudo</label> <br>
            <input type="text" id="pseudo"> <br>

            <h3> choisissez une ligue</h3>
            <select name="ligue">
                <option selected="yes">Football</option>
                <option>Volley</option>
                <option>Basket-ball</option>
                <option>Toutes les ligues</option>

            </select><br><br>
            <div class="button">
                <a href="list.php"><input type="button" id="v" value="Enregistrer"></a>
                <a href="index.php"><input type="button" id="f" value="Annuler"> <br></a>
            </div>
        </form>
    </div>

</body>

</html>