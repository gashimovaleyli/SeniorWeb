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


<form method="POST" action="../billInfo.php" enctype="multipart/form-data">

<section class="col-sm-6 container mt-5">

<div class="container w-50 mt-5">
<div id="accordion">




  <div class="card">
    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <h5 class="mb-0">
       <p class="text text-dark" style="font-size:25px;font-weight:bold;">
            Water BIll
       </p>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       Due to 21.01.2021
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <h5 class="mb-0">
       <p class="text text-dark" style="font-size:25px;font-weight:bold;">
            Gas Bill
       </p>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      Due to 21.01.2021
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
      <h5 class="mb-0">
       <p class="text text-dark" style="font-size:25px;font-weight:bold;">
            Electricity bill
       </p>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      Due to 21.01.2021
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
      <h5 class="mb-0">
       <p class="text text-dark" style="font-size:25px;font-weight:bold;">
            Internet bill
       </p>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
      Due to 21.01.2021
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
      <h5 class="mb-0">
       <p class="text text-dark" style="font-size:25px;font-weight:bold;">
            Dues
       </p>
      </h5>
    </div>
    <div id="collapseFive" class="collapse " aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
      Due to 21.01.2021
      </div>
    </div>
  </div>
  
</div>
</div>


<button type="submit" id="registerBTN" class="btn btn-primary w-100 mb-3">Add</button>
</form>

</section>








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>