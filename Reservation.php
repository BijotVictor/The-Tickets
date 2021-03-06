<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>The Tickets</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style4.css">
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
    <form class="credit-card">
        <div class="form-header">
            <h4 class="title">Credit card detail</h4>
        </div>
        <div class="form-body">
            <!-- Card Number -->
            <input type="text" class="card-number" placeholder="Card Number">
            <!-- Date Field -->
            <div class="date-field">
                <div class="month">
                    <select name="Month">
                <option value="january">January</option>
                <option value="february">February</option>
                <option value="march">March</option>
                <option value="april">April</option>
                <option value="may">May</option>
                <option value="june">June</option>
                <option value="july">July</option>
                <option value="august">August</option>
                <option value="september">September</option>
                <option value="october">October</option>
                <option value="november">November</option>
                <option value="december">December</option>
              </select>
                </div>
                <div class="year">
                    <select name="Year">
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
              </select>
                </div>
            </div>
            <!-- Card Verification Field -->
            <div class="card-verification">
                <div class="cvv-input">
                    <input type="text" placeholder="CVV">
                </div>
                <div class="cvv-details">
                    <p> les 3 ou 4 chiffres <br>situé derrière votre carte</p>
                </div>
            </div>
        </div>
    </form>
    <br><br>
    <form class="row g-3 container mx-auto">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nom/Prenom</label>
            <input type="name" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Ville</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Departement</label>
            <select id="inputState" class="form-select">
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
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <a class="btn btn-primary" href="achatterminer.php" role="button">Reserver</a>
        </div>

    </form>
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
                    <li><a class="text-muted" href="#">Victor Bijot</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>