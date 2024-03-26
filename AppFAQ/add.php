<?php

include 'fonction.inc.php';
// Connexion à la base
session_start();

if (!isset($_SESSION['user'])) {
  header("Location: index.php");
  exit();
}
$dbh = connexion();

// Lecture du formulaire
$question = isset($_POST['question']) ? $_POST['question'] : ''; // obligatoire
$iduser = isset($_SESSION['user']['iduser']) ? $_SESSION['user']['iduser'] : '';


$submit = isset($_POST['submit']);

// Ajout dans la base
if ($submit) {
  $sql = "INSERT INTO faq(question,iduser) VALUES (:question,:iduser) ";
  try {
    $sth = $dbh->prepare($sql);
    $sth->execute(array(
        ":question" => $question,
        ":iduser"=> $iduser
      ));
    $nb = $sth->rowcount();
  } catch (PDOException $ex) {
    die("<p>Erreur lors de la requête SQL : " . $ex->getMessage() . "</p>");
  }
  $message = "$nb question(s) posée";
} else {
  $message = "Veuillez saisir un message SVP";
}
// Affichage
?>



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
            <li><a href="deco.php">Déconnexion</a></li>

        </ul>
    </nav>

    <br>
    <h1>M2L</h1>
    <h2>Ajouter une question</h2>
    <div class="bigcontainer">
    <form id="formulaire" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
        <label for="question">message</label> <br>
        <input type="text" id="text" name="question" placeholder="Poser votre question"> <br>

<div class="button">
        <br><p><a href="list.php"><input type="submit" name="submit" id="v" value="Enregistrer"/></p>
        <a href="list.php"><input type="button" id="f" value="Annuler"> <br></a>
    </div>

    </form>
  
    </div>
    <br>
    
   

</body>

</html>