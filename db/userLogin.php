<?php

    include('./dbConfig.php');

    $stmt = $db_connect->prepare("SELECT * FROM apply1 WHERE email = ?");

    $stmt->execute([$_POST['email_login']]);
    $user = $stmt->fetch();

session_start();

    if($user && $_POST['pass_login'] == $user['password']){
   
        $_SESSION['university'] = $user['university'];
       if($_SESSION['university'] == "Customer"){
        header('Location: ../components/profile.php');
       }else if($_SESSION['university'] == "User"){
        header('Location: ../components/userPage.php');
       }
       //Setting Sessions 
        $_SESSION['userID'] = $user['id'];
        $_SESSION['userFullName'] = $user['full_name'];
        $_SESSION['apart'] = $user['apart'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['image'] = $user['image'];

        unset($_SESSION['error']);

        
    }else{
       $_SESSION['error'] = "Email or Password is incorrect";
       header('Location: ../components/login.php');
       
    }


?>