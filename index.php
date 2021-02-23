<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/custom.css">
</head>

<body>


    <div class="alert alert-danger" id="hidden" role="alert">
        Passwords does not match!
    </div>

    <section class="col-sm-6 container mt-5 jumbotron">
        <p class="title_login mb-5">Register</p>

        <form method="POST" action="./db/userRegister.php" enctype="multipart/form-data">

            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="fullName" class="form-control" id="input" required>
            </div>

            <div class="form-group">
                <label for="">Email address</label>
                <input type="email" name="email_register" required class="form-control" id="input" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="pass_register" class="form-control" id="pass" required>
            </div>

            <div class="form-group">
                <label for="">Password Confirm</label>
                <input type="password" name="pass_confirm_register" class="form-control" id="pass_confirm" required>
            </div>

            <div class="form-group">
                <label for="">Age (from/100)</label>
                <input type="number" name="toefl_point" class="form-control" id="input" min="1" max="100" required>
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" id="input" required>
            </div>



            <div class="form-group">
                <label for="exampleFormControlSelect1">Role</label>
                <select class="form-control" name="university_select" id="exampleFormControlSelect1" required>
                    <option>User</option>
                    <option>Customer</option>
                </select>
            </div>

            <div class="form-group">
                <label>apart</label>
                <select class="form-control" name="apart"  required>
                    <option>Resident</option>
                    <option>Apartment Manager</option>
                    <option>Shop</option>
                    </select>   

            </div>

            

            <div class="form-group">
                <label for="exampleFormControlFile1">Upload Profile photo</label>
                <input type="file" name="profile_photo" class="form-control-file" id="exampleFormControlFile1">
            </div>


            <button type="submit" id="registerBTN" class="btn btn-primary w-100">Submit</button>

        </form>
        <div class="link_to_signUp mt-4">
            <a href="./components/login.php">Already sign up? Sign in here!</a>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="./js/script.js"> </script>
</body>

</html>