<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    #navbar{

        background-color: #fff;
        padding: 4px 12px;
        font-family: 'Bona Nova', serif;
        height: 50px;
    }
    #navbar li{
        list-style: none;
    }
    #navbar ul li a {
        text-decoration:none ;
        padding: 12px 20px;
        color:#0A043C;
        font-weight: bolder;
        font-size: 20px;
        text-align: center;
        float: left;

    }
    #navbar a:hover{
        color: rgb(83, 78, 78);
    }
    #navbar ul {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }
    </style>
  </head>
  <body>
        <nav id="navbar" class="top">
            <ul>
                  <li><a href='index.php'>HOME</a></li>
                  <li><a href='customers.php'>CUSTOMER</a></li>
                 <li><a href='history.php'>TRANSFER HISTORY</a></li>
            </ul>
        </nav>
  </body>
</html>
