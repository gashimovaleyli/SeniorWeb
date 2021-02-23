<?php               


include 'dbConfig.php';

session_start();

// Delete

if (isset($_POST['delete'])) {
    $id = $_SESSION['userID'];

    $query = "DELETE FROM apply1 WHERE id = $id";
    $deleteUser = $db_connect->prepare($query);
    

    if ($deleteUser->execute()) {
        header("Location: ../index.php");
    }
}


// Edit




if(isset($_POST['submitEdit'])){
    
    if(!empty($_POST['changedName']) &&$_POST['changedPoint']){

        $id = $_SESSION['userID'];
    $editedFullname = $_POST['changedName'];
    $editedPoint = $_POST['changedPoint'];



    $queryEdit = "UPDATE apply1 SET full_name = ? , toefl_point = ? WHERE id = ?";

    $editUser = $db_connect->prepare($queryEdit);

    $editUser->bindValue(1,$editedFullname);
    $editUser->bindValue(2,$editedPoint);
    $editUser->bindValue(3,$id);

    if($editUser->execute()){
        header("Location: ../components/profile.php");
    }
}

}


?>