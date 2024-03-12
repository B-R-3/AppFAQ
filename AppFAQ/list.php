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

// Liste des utilisateurs
$sql = "select * from faq";
try {
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
    die("Erreur lors de la requête SQL : " . $ex->getMessage());
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

    </div>
    <div class="question-table">
        <table>
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Réponse</th>
                <th>datequestion</th>
                <th>dateréponse</th>
                <th>iduser</th>
            </tr>
            <?php
            foreach ($rows as $row) {
                echo "<tr><td>" . $row['idfaq'] . '</td><td>' . $row['question'] . '</td><td>' . $row['reponse'] . '</td><td>' . $row['datequestion'] . '</td><td>' . $row['datereponse'] . '</td><td>' . $row['iduser'] . '</td></tr>';
            }
            ?>
        </table>



        <!-- Ajoutez autant de lignes de données que nécessaire -->
    </div>



    </select>

    </form>

</body>

</html>