<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check balance || The spark bank</title>
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
            height: 325px;
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
        .s{
            font-size: large;
             padding: 10px;
        }
    </style>
</head>
<body>

       
    <div class="homecontent">
        <h1>Check balance</h1>
    </div>
    <div class="transfer">
        <form action="checkbalance.php" method ="POST">
            <label for="select">Enter your account number</label>
            <br>
            <input type="number" name="accno1" id="select">
           
            <br>
            <input type="submit" value="proceed">
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


    $Accountno = $_POST['accno1'];
    $sql="SELECT * FROM `customer` WHERE `Account number`='$Accountno'";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query) == 0)
    {
        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
        your account number not found !!</h2></div>
        </div>
      </div>';
    }
    else{
        // $select=mysqli_fetch_assoc($query)['Balance'];
       
        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
       your current balance :</h2></div>
        </div>
      </div>';
     
        echo '<div class="alert alert-success align-items-center text-center" style="width:25%;" role="alert">
         <h2> <i class="fas fa-rupee-sign" aria-hidden="true"></i>'.mysqli_fetch_assoc($query)['Balance'].'</h2></div>';
       
    }
}
}
?>
   <div> <h4> if you want to view all customer of the bank click  <a href="view.php">Here</a></div></h4>
   
</body>
</html>