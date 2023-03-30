<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Spark bank || Home</title>
    <style>
       
        body {
            margin: 0px;
            padding: 0px;
        }
        header {
            background-color: black;
            display: flex;
        }
        .navigation {
            
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom-left-radius: 15px;
            margin-top: 40px;
            margin-left: 40px;
          
        }
        .atag {
            text-decoration: none;
            padding: 5px;
            margin: 3px;
            color: white;
            border-radius: 10px;
            font-size: 19px;
        }
        .atag:hover {
            background-color: white;
            color: black;
        }
        .ultag {
            display: flex;
            /* border: 2px solid black;    */
            list-style-type: none;
        }
        .heading {
            border-right: 1px solid white;
            border-bottom-right-radius: 65px;
            width: 400px;
            justify-content: center;
            align-items: center;
            display: flex;
        }
        .home {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            background-color: rgb(0, 0, 0);
            color: white;
            border-top: 0.7px solid white;
        }
        .homecontent {
            /* border: 2px solid white; */
            font-size: xx-large;
            font-family: 'Times New Roman', Times, serif;
            text-shadow: 1px 1px 8px white;
        }
        .secondhead {
            /* background-color: black ;
         color: white;  */
            margin: 0%;
            text-align: center;
            font-size: xx-large;
            font-family: 'Times New Roman', Times, serif;
            padding-top: 50px;
        }
        .facilities {
            height: 500px;
            display: flex;
            /* background-color: black; */
            justify-content: center;
            align-items: center;
            margin: 0%;
        }
        .view {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 345px;
            width: 250px;
            border: 1px solid black;
            margin: 70px;
        }
        .transfer {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 345px;
            width: 250px;
            border: 1px solid black;
            font-family: 'Times New Roman', Times, serif;
            margin: 70px;
        }
        .checkbalance {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 345px;
            width: 250px;
            border: 1px solid black;
            font-family: 'Times New Roman', Times, serif;
            margin: 70px;
        }
       
       #but:hover{
            background-color: rgb(216, 210, 210);
            
        }
        img {
            border-radius: 41px;
        }
        #but{
            background-color: white;
border: 2px solid black;
color: black;
border-radius: 50px;
font-size:20px;
padding: 10px;
margin-top: 5px;
        }
    </style>
</head>
<body>
    <header>
        <div class="heading">
            <h1 style="color: white;">The Spark Bank</h1>
        </div>
        <nav class="navigation">
            <ul class="ultag">
                <li> <a  class="atag"  href="structure.php">Home</a> </li>
                <li> <a class="atag" href="view.php">View all customer</a> </li>
                <li> <a  class="atag"  href="transfer.php" >Tranfer Money</a> </li>
                <li> <a  class="atag" href="transaction.php" >Transactions</a> </li>
                <li> <a   class="atag" href="contactus.php">Contact us</a> </li>
                <li> <a class="atag" href="aboutus.php">About us</a> </li>
            </ul>
        </nav>
    </header>
    <section class="home">
        <div class="homecontent">
            <h1>Welcome To The Spark Bank</h1>
        </div>
        <div><img src="img/h2m.png" alt="" style="background-color: black;"></div>
    </section>
    <h1 class="secondhead">Our Facilities</h1>
    <section class="facilities">
        <div class="view">
            <div><img src="img/customer1.jpg" width="200px" alt=""> </div>
             <!-- <input type="button" id="but"
                value="Tap to all view customer"> -->
                <a class="atag" href="view.php"  id="but">Tap to all view customer</a>
            <h4 style="text-align: center;">Here,you can see detail of every customer of the bank</h4>
        </div>
        <div class="transfer">
            <div><img src="img/money1.png" width="200px" height="200px" alt=""></div>
             <!-- <input type="button"
                value="tranfer money"  onclick="window.location transfer.html" id="but"> -->
                <a class="atag" href="transfer.php"  id="but">Tranfer money</a>
            <h4 style="text-align: center;">Here,you can send money from your bank </h4>
        </div>
        <div class="checkbalance">
            <div><img src="img/ch.png" width="200px" height="200px" alt=""></div>
             <!-- <input type="button" value="Check balance"
                id="but"> -->
                <a class="atag" href="checkbalance.php"  id="but">Check balance</a>
            <h4 style="text-align: center;">Here you can check the balance of your account</h4>
        </div>
    </section>
</body>
</html>