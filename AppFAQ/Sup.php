<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Supprimer</title>
</head>

<body>
    <nav>
        <div class="logo">
            <h1>AppFAQ (admin)</h1>    
        </div>
        <ul>
            <li><a href="deco.php">déconnection</a></li>
        </ul>
    </nav>

    <br>
    <h1>M2L</h1>

    <form id="formulaire" action="contact.php">
        <label for="message">Question</label> <br>
        <textarea name="message" id="message" cols="50" rows="10"> Est ce que le ballon est rond ?</textarea>


    </form>


    <form id="formulaire" action="contact.php">
        <label for="message">Réponse</label> <br>
        <textarea name="message" id="message" cols="50" rows="10"> Bien sur que oui</textarea>


    </form>
    <div class="button">
        <a href="list.php"><input type="button" id="v" value="Supprimer"></a>
        <a href="list.php"><input type="button" id="f" value="Annuler"> <br></a>



</body>

</html>