<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Padauk&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="icon" href="img/favicon.ico">

    <style type="text/css">


        .btn:hover{
            background-color:#2aa389;
            color: white;
        }
        h2{
          color: #05004E;
          margin-top: 100px;
          font-size: 42px;
          font-weight: bold;
          margin-left: 250;
          margin-right: auto;
          font-family: 'Abril Fatface', cursive;
          text-align: center;
        }
        .transact{
            text-align:center;
        }
        tr:nth-child(odd){
            background-color: #FFF3E6;

        }
        tr:nth-child(even){
            background-color: #FFF3E6;

        }
        .text{
            position: absolute;
            left:50%;
            transform:translateX(-50%);
            bottom:zero;

        }
        #last-footer .footer-content1{
            height: 20px;
            color: white;
            background: black;
            text-align: center;
            margin-top: 900px;
        }


    </style>
</head>

<body style="background-color : #fff;">
<?php
    include 'navbar.php';
    include 'connection.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn,$sql);
?>
<div class="container">
        <h2>TRANSFER MONEY</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border:1px solid #0A043C; font-size: 24px;">

                            <tr style="background-color: #05004E; color: #fff;" >
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">Email</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>

                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black; font-size: 18px; ">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td class="transact"><a href="userdetails.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="font-size: 1.5rem; border: 1px solid rgb(87 49 49);">Transfer</button></a></td>
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
    <footer id="last-footer">
        <div class="footer-content1">

            <p>| Copyright to @ 2021 TSFBank.com | All Rights Reserverd </p>

        </div>
    </footer>

         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
