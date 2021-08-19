<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Padauk&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="icon" href="img/favicon.ico">

    <style>
      body{
         background-color: #fff;
        }
        .text{
            position: absolute;
            bottom:1rem;
            left:50%;
            transform:translateX(-50%);
        }
        tr:nth-child(odd){
            background-color: #FFF6DA;
        }
        tr:nth-child(even){
            background-color: #FFF6DA;
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
        #footer1 .footer-content1{
            height: 20px;
            color: white;
            background: black;
            text-align: center;
            margin-top: 900px;
        }
    </style>
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
        <h2>Transaction History</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered" style="border:1px solid #333; font-size: 18px;">

            <tr style="color : #fff; background-color: #05004E;">
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date</th>
            </tr>

    <tbody>
        <?php

            include 'connection.php';

            $sql ="SELECT * FROM transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

<footer id="footer1">
        <div class="footer-content1">

            <p>| Copyright to @ 2021 TSFBank.com | All Rights Reserverd </p>

        </div>
 </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
