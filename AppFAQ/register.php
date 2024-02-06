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

            <li><a href="login.php">se connecter</a></li>
        </ul>
    </nav>

    <br>
    <h1>M2L</h1>
    <h2>inscription</h2><br>
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

            <option>Football </option>
            <option selected="yes">Football</option>
            <option>Volley</option>
            <option>Basket-ball</option>
            <option>Toutes les ligues</option>

        </select><br><br>
        <input type="button" id="v" value="Valide">


        <input type="button" id="f" value="Annule"> <br>

    </form>

</body>

</html>