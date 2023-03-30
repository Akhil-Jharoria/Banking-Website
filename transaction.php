<?php
$servername ="localhost";
$username ="root";                                                                                                                                                                                                                                                                                                                                                                                                             
$password = "";
$database ="sparkbank";

$conn=mysqli_connect($servername,$username,$password,$database);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View all customer|| The spark bank</title>
  
    <style>
        
        body{
            
            font-family:'Times New Roman', Times, serif;
            display: flex;
            align-items: center;
            height: 650px;
            flex-direction: column;
            background-color: black;
            color: white;
            margin: 0px;
            padding : 0px;
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

        body br{
            display: none;
        }
        a {
            text-decoration: none;
            padding: 3px;
            margin: 3px;
            color: white;
            border: 2px solid black;
            background-color: blue;
            border-radius: 10px;
            font-size: large;

        }
        a:hover{
            background-color:rgb(33, 33, 251);
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
        th{
            padding: 70px;
            padding-top: 20px;
            padding-bottom: 0px;
           margin-top: 30px;
           
           border-bottom:1px solid rgb(230, 222, 222) ;
            font-size: 24px;

        }
        table{
            border: 1px solid rgb(208, 208, 208);
            background-color: 
            rgb(30, 28, 28);
            color: rgb(250, 246, 246);
            font-family: 'Times New Roman', Times, serif;
            border-radius: 15px;
            box-shadow: 8px 8px white;

        /* height: 500px;        } */
        }
        td{
            border-right: 1px solid rgb(236, 227, 227);
            padding: 5px;
            font-size: larger;
            text-align: center;
            font-weight: bold;
        }
        td:hover{
            background-color: rgb(166, 166, 166);
        }
       
       
    </style>
</head>
<body>
    
   

   <h1>Transactions</h1>
    <table>
        <thead>
            <tr>
        <th scope="col">Sender</th>
        <th>Receiver</th>
        <th>Amount</th>
        <th>Status</th>
        
       </tr>
        </thead>
     <tbody>
        
    <?php
    
$sql="SELECT * FROM `Transactions`";

$result=mysqli_query($conn,$sql);


while($row  = mysqli_fetch_assoc($result))
{
 
   echo    '
            <tr>
              <td>'.$row['sender'].'</td>
              <td>'.$row['receiver'].'</td>
              <td>'.$row['amount'].'</td>
              <td>'.$row['status'].'</td>
            </tr>';

   echo "<br>";
}

?>
<tr>

</tr>



</tbody>
    </table>

    
   
</body>
</html>