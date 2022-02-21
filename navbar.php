<?php

include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
        .nav-link:hover {
            background: lightcyan;
            border-radius: 5px;
        }
        .nav-item {
            padding: 5px 12px;
        }
       
    </style>

</head>
<body>
    

                <nav class="navbar navbar-expand-lg navbar-light navbar-bg-primary">
                    <div class="container-fluid"><img src="logo_small.png" height="50px" width="50px" /> <a class="navbar-brand name" href="#">The Sparks<span class="go">Bank</span></a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item"> <a class="nav-link"  href="index.php"><span class="home">Home</span></a> </li>
                                <li class="nav-item"> <a class="nav-link " aria-current="page" href="createuser.php">Create User</a> </li>
                                <li class="nav-item"> <a class="nav-link  " href="transfermoney.php">Transfer Money</a> </li>
                                <li class="nav-item"> <a class="nav-link  " href="transactionhistory.php">Transaction History</a> </li>
                                <!-- <li class="nav-item"> <a class="nav-link" href="#">Sign in</a> </li> -->
                            </ul>
                            <!-- <div class="btn btn-dark">Sign up </div> -->
                        </div>
                    </div>
                </nav>

</body>
</html>