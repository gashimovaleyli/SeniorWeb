<?php

session_start();

if (!isset($_SESSION['userID'])) {
    header('Location: login.php');
}

if (array_key_exists('exit', $_POST)) {
    session_destroy();
    header('Location: login.php');
}

?>


<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <!------ Include the above in your HEAD tag ---------->
</head>


<body>

    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="
                                <?php
                                echo "../upload/" . $_SESSION['image'];
                                ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle mt-3">
                                        <!-- Button trigger modal -->
                                        <form action="../db/crud.php" method="POST">
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                                Edit Page
                                            </button>
                                            <button type="submit" class="btn btn-danger btn-sm" name="delete" value="<?= $_SESSION['userID'] ?>">
                                                Delete
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Make Changes</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="exampleInputName">Change Name</label>
                                                                <input type="text" class="form-control" name="changedName" id="exampleInputName" aria-describedby="emailHelp">
                                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Change Age</label>
                                                                <input type="number" class="form-control" name="changedPoint" id="exampleInputPassword1" min="1" max="100" placeholder="min:1 ; max:100">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" name="submitEdit" value="<?= $_SESSION['userID'] ?>" class="btn btn-success">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">
                                            <?php
                                            echo $_SESSION['userFullName'];
                                            ?>

                                        </a></h2>
                                    <h6 class="d-block"><a href="javascript:void(0)">
                                            <?php
                                            echo $_SESSION['university'];
                                            ?>
                                        </a></h6>
                                    <h6 class="d-block"><a href="javascript:void(0)">
                                            <?php
                                            echo $_SESSION['point'];
                                            ?>
                                        </a> Age</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php
                                                echo $_SESSION['userFullName'];
                                                ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php
                                                echo $_SESSION['email'];
                                                ?>
                                            </div>

                                        </div>
                                        <hr />
                                        <form action="" method="POST">
                                            <input type="submit" name="exit" class="btn btn-danger btn-sm" value="Exit" />
                                        </form>

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                        Facebook, Google, Twitter Account that are connected to this account
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>