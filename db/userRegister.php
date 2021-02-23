<?php 

  include('./dbConfig.php');
  
        $fullName = $_POST['fullName']; 
        $emailRegister = $_POST['email_register'];
        $passRegister = $_POST['pass_register'];
        $point = $_POST['toefl_point'];
        $uniSelect = $_POST['university_select'];
        $address = $_POST['address'];
        $apart = $_POST['apart'];
        
        

        $imageFile  = $_FILES["profile_photo"]["name"];
        $temp = $_FILES["profile_photo"]["tmp_name"];

        $path = "../upload/" . basename($imageFile);

        if(move_uploaded_file($temp,$path)){
          $msg = "upload successfully";
        }else{
          $msg = "Error";
        }


        $prepared_statement = $db_connect->prepare("INSERT INTO apply1 (full_name,email,password,toefl_point,university,image,address,apart)
        values (?, ?, ?, ?, ?, ?, ?, ?)");

        $prepared_statement->bindParam(1,$fullName);
        $prepared_statement->bindParam(2,$emailRegister);
        $prepared_statement->bindParam(3,$passRegister);
        $prepared_statement->bindParam(4,$point);
        $prepared_statement->bindParam(5,$uniSelect); 
        $prepared_statement->bindParam(6,$imageFile);
        $prepared_statement->bindParam(7,$address);
        $prepared_statement->bindParam(8,$apart);


        $email_check = $db_connect->prepare("SELECT email  FROM apply1 WHERE email = :email ");
        $email_check->bindValue(':email',$emailRegister);
        $email_check->execute();
 

        if ($email_check->rowCount() > 0){
          echo "Email Already exists!";
        }else{
            if ($prepared_statement->execute()) {
              header('Location: ../components/profile.php');
            }
        }

      

 

?>