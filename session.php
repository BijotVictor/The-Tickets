<?php
	session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:login.php");
		exit();
	}
?>
<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
	<nav class="navbar navbar-dark bg-dark position fixed-top">
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
		<h1>
		<?php 
			echo (date("H")<18)?("Bonjour"):("Bonsoir");
		?>
		<span>
		<?=$_SESSION["nomPrenom"]?>
		</span>
		</h1>
		<footer class="position fixed-bottom container py-3 bg-light">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                <small class="d-block mb-3 text-muted">&copy; equipe dev web The Tickets : 2020-2021</small>
                <p>L'equipe de dévelopeur</p>
            </div>
            <div class="col-6 col-md">
                <br>
                <h5>DEV </h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Alice Petitjean</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <br>
                <h5>DEV</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Leandre Gaden</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <br>
                <h5>DEV</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://github.com/BijotVictor">Victor Bijot</a></li>
                </ul>
            </div>
        </div>
    </footer>
	</body>
</html>