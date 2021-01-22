<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style4.css">
    <title>The Tickets</title>
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
            <!-- Buttons -->
            <button type="submit" class="proceed-btn"><a href="achatterminer.html">Carte Bancaire</a></button>
            <button type="submit" class="proceed-btn"><a href="achatterminer.html">PayPal</a></button>
        </div>
    </form>

</body>

</html>