<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>The Tickets</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <section>
        <div class="leftBox">
            <div class="content">
                <h1>Evenement</h1>
                <p>BIENVENUE. The Tickets est une billetterie en ligne qui vous permet d'organiser simplement des évènements qui vous correspondent. Créez vous-même des moments et des évènements inoubliables pour tisser des liens forts avec votre public.
                    Une vraie solution pour tous les types d'évènements: Concert, spectacle, séminaire etc...</p>
                <p>ICI, TU PEUX CREER ET PERSONNALISER TA BILLETERIE EN LIGNE ET LA GERER FACILEMENT!</p>
            </div>
        </div>
        <div class="events">
            <ul>
                <li>
                    <div class="time">
                        <h2>06<br><span>Mars</span></h2>
                    </div>
                    <div class="details">
                        <h3>Vald en concert!!</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt eligendi id aliquam corrupti explicabo doloribus doloremque!</p>
                        <p class="text-capitalize" id="restantes">Place restantes : 12</p>
                        <a href="Vald.php"><button type="button" class="btn btn-outline-primary">Plus D'info</button></a>
                    </div>
                    <div style="clear: both;"></div>
                </li>
                <li>
                    <div class="time">
                        <h2>04<br><span>Janvier</span></h2>
                    </div>
                    <div class="details">
                        <h3>Freeze Corleone en concert!!</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt eligendi id aliquam corrupti explicabo doloribus doloremque!
                        </p>
                        <p class="text-capitalize" id="restantes">Place restantes : 17</p>
                        <a href="freeze.php"><button type="button" class="btn btn-outline-primary">Plus D'info</button></a>
                    </div>
                    <div style="clear: both;"></div>
                </li>
                <li>
                    <div class="time">
                        <h2>17<br><span>Avril</span></h2>
                    </div>
                    <div class="details">
                        <h3>Lyonzon en concert!!</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt eligendi id aliquam corrupti explicabo doloribus doloremque!</p>
                        <p class="text-capitalize" id="restantes">Place restantes : 7</p>
                        <a href="lyonzon.php"><button type="button" class="btn btn-outline-primary">Plus D'info</button></a>
                    </div>
                    <div style="clear: both;"></div>
                </li>
            </ul>
        </div>
    </section>
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