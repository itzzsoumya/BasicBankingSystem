<?php

include 'config.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Sparks Bank</title>
    <link rel="stylesheet" href="index.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    


</head>
<body>
 
    <div class="container mt-3">
        <div class="card card1 p-2">
            <div class="innercard p-2">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid"><img src="logo_small.png" height="50px" width="50px" /> <a class="navbar-brand name" href="#">The Sparks<span class="go">Bank</span></a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item"> <a class="nav-link " aria-current="page" href="index.php">Home</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="createuser.php">Create User</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="transfermoney.php">Transfer Money</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="transactionhistory">Transaction History</a> </li>
                                
                            </ul>
                            
                        </div>
                    </div>
                </nav>
                
                <!-- <div class="d-flex justify-content-center"> <span class="text">Welcome to</span> </div> -->
                <div class="mt-3 d-flex justify-content-center"> <span class="heading">Welcome to Sparks Bank</span> </div>
                 <p class="text1" style="text-align: center; font-size:130%">Smart Banking for Good Life . Simpler, Faster, Friendlier.</p>
                <div class=" mt-3 d-flex justify-content-center gap-3">
                    <!-- <div class="btn btn-success">Get Started</div>
                    <div class="btn1">
                        <div class="d-flex flex-row align-items-center justify-content-center gap-1 buttonitems"><i class="fa fa-play-circle-o fs-3 mt-1"></i>Play Video</div>
                    </div> -->
                    <img src="bank.png" height="180px" width="300px">
                </div>
                <div class="row mt-3 p-2 g-3 d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="card2 p-2 py-3">
                            <div class="text-center d-flex flex-column align-items-center">
                                <div> <img src="user1.png" height="100px" width="100px" /> </div> <span class="stellar"></span> <span class="bb"></span> <span class="price mt-2"><span class="small">Create User</span></span> <span class="year">Make It Easy</span> <a href="createuser.php"> <button class="btn2 btn-success mt-2" >Get Started</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card2 p-2 py-3">
                            <div class="text-center d-flex flex-column align-items-center">
                                <div> <img src="mtransfer.png" height="100px" width="150px" /> </div> <span class="stellar"> </span> <span class="bb"></span> <span class="price mt-2"><span class="small">Transfer Money</span></span> <span class="year">Fast & Secure</span> <a href="transfermoney.php"> <button class="btn2 btn-success mt-2" >Get Started</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card2 p-2 py-3">
                            <div class="text-center d-flex flex-column align-items-center">
                                <div> <img src="history.png" height="100px" width="100px" /> </div> <span class="stellar"></span> <span class="bb"></span> <span class="price mt-2"><span class="small">Transaction History</span></span> <span class="year">Check Payment History</span> <a href="transactionhistory.php"> <button class="btn2 btn-success mt-2" >Get Started</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <p style="text-align: center;">&#169; Copyright 2022 By The SparksBank,All Rights Reserved | Developed by Soumya Mondal</p>
            </div>
</div>


    </div>



       
</body>
</html>