<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">NGHBRbood <span class="sr-only">(current)</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <form method="POST" action="../db/userLogin.php"><a class="nav-link" href="#">Profile </a></form>  
      </li>
    </ul>
  </div>
</nav>

    <section class="col-sm-6 container mt-5 jumbotron">



        <p class="title_login mb-5">
            <picture>
                <source media="(min-width:650px)" srcset="Logo.png">
                <source media="(min-width:465px)" srcset="Logo.png">
                <img src="../Logo.png" alt="Flowers" style="width:500px;" height="500">
            </picture>
        </p>
        <form method="POST" action="../userChat.php">
            <div class="card" style="float:left; width: 17rem;">
                <div class="card-body">
                    <h5 class="card-title">NGHBR chat</h5>
                    <p class="card-text">By clicking here you can enter chat with your neighbors</p>
                    <button type="submit" class="btn btn-primary w-100">UserChat</button>
                </div>
            </div>
        </form>
        <form method="POST" action="../billview.php">
            <div class="card" style="float:left; width: 17rem;">
                <div class="card-body">
                    <h5 class="card-title">Bills</h5>
                    <p class="card-text">By clicking here you can view your bills or add new bills</p>
                    <button type="submit" class="btn btn-primary w-100">View Bills</button>
                </div>
            </div>            
        </form>
        <form method="POST" action="../expandedCard.php">
            <div class="card" style="float:left; width: 17rem;">
                <div class="card-body">
                    <h5 class="card-title">Market chat</h5>
                    <p class="card-text">By clicking here you can list markets to start chat</p>
                    <button type="submit" class="btn btn-primary w-100">Chat with Market</button>
                </div>
            </div>   
        </form>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>