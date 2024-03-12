<?php
include "fonction.inc.php";
session_start();

// Connexion à la base de données
$dbh = connexion();

$message = "";

// Récupère le contenu du formulaire
$pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : '';
$mdp = isset($_POST['mdp']) ? $_POST['mdp'] : '';
$submit = isset($_POST['submit']);

// Vérifie le user
if ($submit) {
    $sql = "select * from user where pseudo=:pseudo and mdp=:mdp";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(
            ':pseudo' => $pseudo,
            ':mdp' => $mdp
        ));
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
    if (count($rows) == 1) {
        $_SESSION['pseudo'] = $pseudo;
        header("Location: list.php");
        exit();
    } else {
        $message = "pseudo et/ou mdp invalide";
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
            <form id="formulaire" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="cont">
                    <h1>Connexion</h1>
                    <label for="pseudo">Identifiant</label> <br>
                    <input type="text" id="pseudo" name="pseudo" placeholder="identifiant"> <br>


                    <label for="mdp">mot de passe</label> <br>
                    <input type="password" id="mdp" name="mdp" placeholder="password"> <br><br><br>

                    <div class="button">
                    <p><input type="submit" id="v" name="submit" value="Connexion" /></p>
                        <a href="index.php"><input type="button" id="f" value="Annuler"> <br></a>
                    </div>
                </div>
        </div>
    </div>
    </form>

    <p></p>

</body>

</html>