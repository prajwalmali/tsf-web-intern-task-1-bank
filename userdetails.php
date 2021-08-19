<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);




    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }




    else if($amount > $sql1['balance'])
    {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';
        echo '</script>';
    }




    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {


                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE customers set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);



                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE customers set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);

                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='history.php';
                           </script>";

                }

                $newbalance= 0;
                $amount =0;
        }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="icon" href="img/favicon.ico">
    <style type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">

        button{
          -webkit-border-radius: 0;
          -moz-border-radius: 0;
          border-radius: 0px;
          text-shadow: 1px 1px 3px #0d0d94;
         -webkit-box-shadow: 8px 6px 7px #07128c;
         -moz-box-shadow: 8px 6px 7px #07128c;
          box-shadow: 8px 6px 7px #07128c;
          font-family: Courier New;
         color: #ffffff;
         font-size: 20px;
         background: #0f0d82;
         padding: 10px 20px 10px 20px;
         border: solid #063b5c 2px;
      text-decoration: none;
        }
        button:hover{
          background: #071887;
          text-decoration: none;
          color: #fff;
        }
        .form-control{
            width: max-width;
            font-size: 14px;
        }
        .btn{
            position: absolute;
            left:650px;
            font-size: 1.5rem;
            -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0px;
  -webkit-box-shadow: 8px 6px 7px #07128c;
  -moz-box-shadow: 8px 6px 7px #07128c;
  box-shadow: 8px 6px 7px #07128c;
  font-family: Courier New;
  color: #000000;
  font-size: 20px;
  background: #f5f5f5;
  padding: 10px 20px 10px 20px;
  border: solid #063b5c 2px;
  text-decoration: none;
        }
        tr{
            border:1px solid black;
        }
        tr:nth-child(even){
            background-color:#fff;
        }
        .text{
            position: absolute;
            right:2rem;
            margin-top:9%;
        }
        h2{
          color: #05004E;
          margin-top: 100px;
          font-size: 42px;
          font-weight: bold;
          margin-left: 250;
          margin-right: auto;
          font-family: 'Playfair Display', serif;
          text-align: center;
        }
        b{
          font-family: 'Courier New', sans-serif;
          color: #05004E;
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

    <div class="container">
        <h2 style="text-transform:uppercase; letter-spacing:2px; margin-top:5rem; font-size: 42px;">Transaction</h2>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customers where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered" style="border:1px solid rgb(186 128 128); font-size: 22px;">
                <tr style="color : #fff; background-color: #05004E;">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr style="color : black;">
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label style="color : black;letter-spacing:2px; font-size: 1.5rem;"><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected >Choose</option>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customers where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >

                    <?php echo $rows['name'] ;?> (Balance:
                    <?php echo $rows['balance'] ;?> )

                </option>
            <?php
                }
            ?>
            <div>
        </select>
        <br>
        <br>
            <label style="color : #05004E; letter-spacing:2px; font-size: 1.5rem;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>
            <br><br>
                <div class="text-center" >
            <button class="btn" name="submit" type="submit" id="myBtn" >Transfer</button>
            </div>
        </form>
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
