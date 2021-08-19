<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark Union Bank</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico">
</head>
<body>
    <nav id="navbar" class="top">
        <ul>
              <li><a href='index.php'>Home</a></li>
              <li><a href='customers.php'>Customer</a></li>
             <li><a href='history.php'>Transfer History</a></li>
        </ul>
    </nav>
    <section id="introsection">
      <div class="logo">
        <img src="img/logo1.png" alt="" />
    </section>
    <div id=subsection>
            <div class="middle">
              <div class="middle-text">
                <marquee><h1>Welcome to TSF Bank</h1></marquee>
                <marquee><h3>--- most secure bank in the world ---</h3></marquee>
              </div>
            <div class="middle-row">
                <div class="middle-col">
                  <img src="https://images.pexels.com/photos/5632397/pexels-photo-5632397.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                  <div class="btn">
                      <button id="btn" type="button">New Transaction</button>
                  </div>
                </div>
                <div class="middle-col">
                  <div class="center-col">
                    <img src="https://images.pexels.com/photos/730547/pexels-photo-730547.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
                  </div>

                  <h4>Don't Worry Your Money Is Safe And Secure.</h4>
                </div>
                <div class="middle-col">
                  <img src="https://images.pexels.com/photos/4968631/pexels-photo-4968631.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                  <div class="btn">
                   <button id="btn1" type="button">Transaction History</button>
                 </div>

                </div>
              </div>
         </div>

        </div>

    <footer id="footer">
        <div class="container">
          <div class="image-footer">
            <img src="img/footer1.jpg" alt="">
          </div>
          <div class="top-text">
            We are here for you.
          </div>
            <div class="row">
                <div class="col-footer1">
                    <h4 style="font-weight: bolder">COMPANY</h4>
                    <p style="font-weight: bold; text-decoration: underline;">Spark Foundation</p>
                    <p>Made By: Prajwal Vijaykumar Mali</p>
                    <p>GripAugust2021 Internship program</p>
                </div>
                <div class="col-footer2">
                    <h4>About Us</h4>
                    <p>This is an online platform which helps you to perform Digital Money Transaction in a secure way.</p>
                </div>
                <div class="col-footer3">
                    <h4>Contact Us</h4>
                    <p>Email us on:<a href="mailto:contact@tsfbank.com">contact@tsfbank.com</a></p>
                    <p>Visit us : tsfbank,sundar nagri, 2nd floor, sector - 1, navi mumbai, 410206</p>
                    <p>Call on 9821969555</p>
                </div>
                <div class="col-footer4">
                    <h4>Follow Us</h4>
                    <div class="social-sites">
                        <a href="#"><img src="https://img.icons8.com/ios/50/000000/facebook-circled--v1.png" alt="" class="socialMedia"></a>
                        <a href="https://www.instagram.com/theprajwalmali/"><img src="https://img.icons8.com/ios/50/000000/instagram-new--v1.png" alt="" class="socialMedia"></a>
                        <a href="https://twitter.com/theprajwalmali"><img src="https://img.icons8.com/ios/50/000000/twitter-circled--v1.png" alt="" class="socialMedia"></a>
                        <a href="https://www.linkedin.com/in/prajwalmali/"><img src="https://img.icons8.com/ios/50/000000/linkedin-circled--v1.png" alt="" class="socialMedia"></a>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <footer id="last-footer">
        <div class="footer-content1">

            <p>| Copyright to @ 2021 TSFBank.com | All Rights Reserverd </p>

        </div>
    </footer>
   <script src="index.js"></script>
   <script type="text/javascript">
    document.getElementById("btn").onclick = function () {
        location.href = "customers.php";
    };
</script>
<script type="text/javascript">
    document.getElementById("btn1").onclick = function () {
        location.href = "history.php";
    };
</script>

</body>
</html>
