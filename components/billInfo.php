<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css">
</head>

<body>


<form method="POST" action="../db/userRegister.php" enctype="multipart/form-data">

<section class="col-sm-6 container mt-5">


<div class="form-group">
        <label for="exampleFormControlSelect1">Type of the Bill</label>
        <select class="form-control" name="type_bill" id="exampleFormControlSelect1" required>
            <option>Mastercard</option>
            <option>Visa</option>
            <option>Amex</option>
        </select>
            </div>

<div class="form-group">
    <label for="">Name of the Bill</label>
    <input type="text" name="name_bill" class="form-control" id="input" required>
</div>

<div class="form-group">
    <label for="">Bill Number</label>
    <input type="number" name="number_bill" class="form-control" id="input" maxlength="16" required >
</div>

<button type="submit" id="registerBTN" class="btn btn-primary w-100 mb-3">Add</button>
<button type="submit" id="registerBTN" class="btn btn-link w-100">Cancel</button>

</form>

</section>








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>