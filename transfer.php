<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        body{
            
            font-family:'Times New Roman', Times, serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 650px;
            flex-direction: column;
            background-color: black;
            color: white;
        }
        header {

background-color: black;
display: flex;
border-bottom: 1px solid white;
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

        .transfer{

            display: flex;
            justify-content: center;
            align-items: center;
            /* background-color:white; */
            border: 2px solid rgb(253, 252, 252);
            height: 400px;
            width: 400px;
            border-radius: 45px;
            box-shadow: 3px 3px white;
        }
        input{
            margin: 8px;
            margin-top: 0%;
            padding: 5px;
            border-radius: 7px;
        }
       
        input[type="submit"]
        {
            margin-top: 40px;
           font-size: larger;
            padding: 10px;
           border: 2px solid white;
           width: 100px;
           font-weight: bold;

        }
        input[type="submit"]:hover{

            background-color: rgb(174, 169, 169);
        }
        

        label{
            font-size: larger;
        }
    </style>
</head>
<body>
<!-- <header>
        <div class="heading">
            <h1 style="color: white;">The Spark Bank</h1>
        </div>
        <nav class="navigation">
            <ul class="ultag">
                <li> <a class="atag" href="structure.php">Home</a> </li>
                <li> <a class="atag" href="view.php">View all customer</a> </li>
                <li> <a class="atag" href="transfer.php">Tranfer Money</a> </li>
                <li> <a class="atag" href="transaction.php">Transactions</a> </li>
                <li> <a class="atag" href="contactus.php">Contact us</a> </li>
                <li> <a class="atag" href="aboutus.php">About us</a> </li>
            </ul>
        </nav>
    </header> -->
    <div class="homecontent">
        <h1>Transfer money</h1>
    </div>
    <div class="transfer">
        <form action="transfer.php" method="POST">
            <label for="accno1">Enter your account number</label>
            <br>
            <input type="number" name="accno1" class="formin form-control" id=""
             value="<?php if(isset($_GET['reads'])){echo $_GET['reads'];} ?>">
            <br>
            <label for="accno2">Enter account number you want to tranfer</label>
            <br>            <input type="number" class="formin form-control" name="accno2" id="">
            <br>
            <label for="money">Enter money</label>
            <br>
            <input type="number" id="money" class="formin form-control" name="amount" pattern="[0-9]+">
            <br>
            <input type="submit" value="Transfer">
        </form>
    </div>
    <?php 
$servername ="localhost";
$username ="root";                                                                                                                                                                                                                                                                                                                                                                                                             
$password = "";
$database ="sparkbank";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){

    
    $sender = $_POST['accno1'];
    $amount = $_POST['amount'];
    $reciever = $_POST['accno2'];
    $checkblcquery = "SELECT * FROM `customer` Where `Account number`='$reciever'";
    $checkblc1 = mysqli_query($conn, $checkblcquery);
   
   
    
    $checkblcquery = "SELECT * FROM `customer` Where `Account number`='$sender'";
    $checkblc = mysqli_query($conn, $checkblcquery);
    
    if(mysqli_num_rows($checkblc) == 0 )
    {
        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
        your account number not found !!</h2></div>
        </div>
      </div>';

    }
    else if(mysqli_num_rows($checkblc1) == 0 )
    {
        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
        Receiver account number not found !!</h2></div>
        </div>
      </div>';
    }
    else{
    $ava_blc = mysqli_fetch_assoc($checkblc)['Balance'];

    if($ava_blc >= $amount){
    $sql1 = "UPDATE customer SET Balance= Balance-$amount WHERE  `Account number` = '$sender'";
    $sql2 = "UPDATE customer SET Balance= Balance+$amount WHERE `Account number` = '$reciever'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    if($result1 && $result2){
        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
          Amount Transfered Successfully!</h2></div>
        </div>
      </div>';

      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'succeed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops! Something went wrong!
        </div>
      </div>';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }
}else{
    echo '<div class="alert alert-danger align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-times-circle"></i>
        Not Sufficient Balance in Account!</h2></div>
        </div>
      </div>
      ';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
}
}
}
}
?>
   <div> <h4> if you want to check your balance click  <a href="checkbalance.php">Here</a></div></h4>
   
</body>
</html>