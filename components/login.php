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


    <section class="col-sm-6 container mt-5 jumbotron">



        <p class="title_login mb-5">
            <picture>
                <source media="(min-width:650px)" srcset="Logo.png">
                <source media="(min-width:465px)" srcset="Logo.png">
                <img src="../Logo.png" alt="Flowers" style="width:500px;" height="500">
            </picture>
        </p>
        <form method="POST" action="../db/userLogin.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email_login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pass_login" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
        <div>
            <?php
            // unset($_SESSION['error']);
            echo isset($_SESSION['error']) 
            ? "<div style='color:red;'>" . $_SESSION['error'] . "</div"  
            : '';
            ?>
        </div>
        <div class="link_to_signUp mt-4">
            <a href="../index.php">Sign up here!</a>
        </div>
        <div class="link_to_signUp mt-4">
            <a href="../index.php">Forgot Password?</a>
        </div>
        
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>