<?php
// On démarre une session
session_start();

if($_POST){
    if(isset($_POST['inputEmail4']) && !empty($_POST['inputEmail4'])
    && isset($_POST['inputPassword4']) && !empty($_POST['inputPassword4'])
    && isset($_POST['inputAddress']) && !empty($_POST['inputAddress'])
    && isset($_POST['inputCity']) && !empty($_POST['inputCity'])
    && isset($_POST['inputState']) && !empty($_POST['inputState'])
    && isset($_POST['inputZip']) && !empty($_POST['inputZip'])){
        // On inclut la connexion à la base
        require_once('connect.php');

        // On nettoie les données envoyées
        $email = strip_tags($_POST['inputEmail4']);
        $password = strip_tags($_POST['inputPassword4']);
        $address = strip_tags($_POST['inputAddress']);
        $city = strip_tags($_POST['inputCity']);
        $state = strip_tags($_POST['inputState']);
        $zip= strip_tags($_POST['inputZip']);

        $sql = 'INSERT INTO `evenement` (`email`, `password`, `address`,`city`,`state`,`zip`) VALUES (:email, :password, :address , :city , :state , :zip);';

        $query = $db->prepare($sql);

        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':password', $password, PDO::PARAM_STR);
        $query->bindValue(':address', $address, PDO::PARAM_STR);
        $query->bindValue(':city', $city, PDO::PARAM_STR);
        $query->bindValue(':state', $state, PDO::PARAM_STR);
        $query->bindValue(':zip', $zip, PDO::PARAM_STR);

        $query->execute();

        $_SESSION['message'] = "Evenement ajouté";
        require_once('close.php');

        header('Location: accueil.php');
    }else{
        $_SESSION['erreur'] = "Le formulaire est incomplet";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>The Tickets</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style4.css">
    <title>Creer un evenement</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark position ">
        <a class="navbar-brand " href="accueil.php">
            <img src="logoVICTOR.png" width="115 " height="80 " alt="logo de The Tickets  ">
        </a>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="accueil.php" id="Home">ACCUEIL</a>
            </li>
            <li class="nav-item" id="NavCenter">
                <a class="nav-link" href="cree.php" id="Home">CREER VOTRE EVENEMENT</a>
            </li>
            <a href="inscription.php"> <button id="login"> S'inscrire </button ></a>
            <a href="login.php"><button id="login"> Se connecter </button></a>
        </ul>
    </nav>
    <main class="container">
        <div class="row">
                <?php
                    if(!empty($_SESSION['erreur'])){
                        echo '<div class="alert alert-danger" role="alert">
                                '. $_SESSION['erreur'].'
                            </div>';
                        $_SESSION['erreur'] = "";
                    }
                ?>
                <h1>Ajouter un Evenement</h1>
                  <form method="post" class="row g-3 container mx-auto">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email de contact</label>
            <input type="email" class="form-control" id="inputEmail4" name="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Code secret de l'évenement</label>
            <input type="password" class="form-control" id="inputPassword4" name="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Adresse de l'évenement</label>
            <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Ville de l'événement</label>
            <input type="text" class="form-control" id="inputCity" name="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Departement de l'évenement</label>
            <select id="inputState" name="inputState" class="form-select">
            <option selected>Choosis...</option>
            <option>01 - Ain - Bourg-en-bresse</option>
            <option>02 - Aisne - Laon</option>
            <option>03 - Allier - Moulins</option>
            <option>04 - Alpes-de-Haute-Provence - Digne-les-bains</option>
            <option>05 - Hautes-alpes - Gap</option>

          </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Code postal</label>
            <input type="text" class="form-control" id="inputZip" name="inputZip">
        </div>
        <div class="col-12">
            <a class="btn btn-primary" href="creationterminer.html" role="button">Créer l'évenement</a>
        </div>

    </form>
        </div>
    </main>
</body>
</html>