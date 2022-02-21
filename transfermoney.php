
<?php

include 'config.php';
include 'navbar.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>

    <style>
        .container {
            background: black;
            height: 90vh;
            width: 100%;
            color: #fff;
            border-radius: 30px;
            border: 2px solid orangered;
        }
      table {
          background-color: rgb(184, 176, 173);
          border:9px solid red;
         text-align: center;
      }
       .btn{
           background: red;
           color: #fff;
           border: 2px solid white;
       }
       h2{
           letter-spacing: 6px;
       }

    </style>
    
</head>
<body>
    

<div class="container">
       <i> <h2 class="text-center pt-4">Transfer Money</h2></i>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php 
                                include 'config.php';
                                $res = "SELECT * FROM users";
                                $result=mysqli_query($conn,$res);
                                    while($rows=mysqli_fetch_assoc($result)){
                                ?>
                                    <tr>
                                        <td class="py-2"><?php echo $rows['sno']; ?></td>
                                        <td class="py-2"><?php echo $rows['name']; ?></td>
                                        <td class="py-2"><?php echo $rows['email']; ?></td>
                                        <td class="py-2"><?php echo $rows['balance']; ?></td>
                                        <td><a href="selecteduserdetail.php?sno= <?php echo $rows['sno'] ;?>"> 
                                        <button type="button" class="btn">Transact</button></a></td> 
                                    </tr>
                                <?php
                                    }
                                ?>
                
                            </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 


</body>
</html>