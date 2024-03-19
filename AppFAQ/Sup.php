<?php
include "fonction.inc.php";
session_start();

// Connexion à la base de données
$dbh = connexion();

$message = "";

// Récupère le contenu du formulaire
$reponse = isset($_POST['reponse']) ? $_POST['reponse'] : '';
$question = isset($_POST['question']) ? $_POST['question'] : '';
$submit = isset($_POST['submit']);

// Vérifie le user
if ($submit) {
    $sql = "delete from faq where question=:question and reponse=:reponse";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(
            ':question'=>$question,
            ':reponse'=>$reponse
    ));
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
}
?>







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
            <li><a href="deco.php">Déconnexion</a></li>
        </ul>
    </nav>

    <br>
    <h1>M2L</h1>

    <form id="formulaire" action="contact.php">
        <label for="question">Question</label> <br>
        <textarea name="question" id="question" cols="50" rows="10"> Est ce que le ballon est rond ?</textarea>


    </form>


    <form id="formulaire" action="contact.php">
        <label for="reponse">Réponse</label> <br>
        <textarea name="reponse" id="reponse" cols="50" rows="10"> Bien sur que oui</textarea>


    </form>
    <div class="button">
        <p><input type="submit" id="v" name="submit" value="Supprimer" />
        <a href="list.php"><input type="button" id="f" value="Annuler"> <br></a></p>



</body>

</html>