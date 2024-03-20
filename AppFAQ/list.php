<?php
include "fonction.inc.php";
session_start();

// Redirige vers la page de connexion si on n'est pas connecté
if (!isset($_SESSION['pseudo'])) {
    header("Location: index.php");
    exit();
}


// Connexion à la base de données
$dbh = connexion();

$idusertype = isset($_SESSION['user']['idusertype']) ? $_SESSION['user']['idusertype'] : '';
$idligue = isset($_SESSION['user']['idligue']) ? $_SESSION['user']['idligue'] : '';


if ($idusertype == 1 || $idusertype == 2 ){
    $sql = "select idfaq,pseudo,question,reponse,datequestion, datereponse  from faq as F, user as U where F.iduser = U.iduser and idligue = :idligue;";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(
            ":idligue" => $idligue));
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
    
} else {
    // Liste des utilisateurs
    $sql = "select idfaq,pseudo,question,reponse,datequestion, datereponse  from faq as F, user as U where F.iduser = U.iduser";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

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
            <h1><a href="list.php">AppFAQ</a></h1>
        </div>
        <ul>
            <li><a href="deco.php">Déconnexion</a></li>

        </ul>
    </nav>

    <br>
    <h1 id="list"> Liste des messages</h1><br>

    <div class="question-table">
        <div class="header">Auteur</div>
        <div class="header">Question</div>
        <div class="header">Réponse</div>
        <div class="header">Date Reponse</div>
        <div class="header">Date question</div>
        <div class="header">Actions</div>

        <?php
        // Affiche les données récupérées dans la table
        
        foreach ($rows as $row) {
            echo '<div class="data">' . $row["pseudo"] . '</div>';
            echo '<div class="data">' . $row["question"] . '</div>';
            echo '<div class="data">' . $row["reponse"] . '</div>';
            echo '<div class="data">' . $row["datequestion"] . '</div>';
            echo '<div class="data">' . $row["datereponse"] . '</div>';
            echo '<div class="data"> <a href="edit.php?id_faq='.$row['idfaq'].'">MODIFIER</a>  <a href="Sup.php?id_faq='.$row['idfaq'].'">SUPPRIMER</a></div>';
        }


        ?>

        <div class="button">
        <a href="add.php"><input type="button" id="v" value="Ajouter"> <br></a>

    </div>



    </select>

    </form>

</body>

</html>