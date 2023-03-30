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
        body {

            font-family: 'Times New Roman', Times, serif;
            display: flex;
            align-items: center;
            height: 650px;
            flex-direction: column;
            background-color: black;
            color: white;
            margin: 0px;
            padding: 0px;
        }

       

        body br {
            display: none;
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

       

      
        a{
            text-decoration: none;
            padding: 3px;
            margin: 3px;
            color: white;
            border: 2px solid black;
            background-color: blue;
            border-radius: 10px;
            font-size: large;

        }

        a:hover {
            background-color: rgb(33, 33, 251);
        }

        input {
            margin: 8px;
            margin-top: 0%;
            padding: 5px;
            border-radius: 7px;
        }

        input[type="submit"] {
            margin-top: 40px;
            font-size: larger;
            padding: 10px;
            border: 2px solid white;
            width: 100px;
            font-weight: bold;

        }

        input[type="submit"]:hover {

            background-color: rgb(174, 169, 169);
        }


        label {
            font-size: larger;
        }

        th {
            padding: 70px;
            padding-top: 20px;
            padding-bottom: 0px;
            margin-top: 30px;

            border-bottom: 1px solid rgb(230, 222, 222);
            font-size: 24px;

        }

        table {
            border: 1px solid rgb(208, 208, 208);
            background-color:
                rgb(30, 28, 28);
            color: rgb(250, 246, 246);
            font-family: 'Times New Roman', Times, serif;
            border-radius: 15px;
            box-shadow: 8px 8px white;

            /* height: 500px;        } */
        }

        td {
            border-right: 1px solid rgb(236, 227, 227);
            padding: 5px;
            font-size: larger;
            text-align: center;
            font-weight: bold;
        }

        td:hover {
            background-color: rgb(166, 166, 166);
        }
    </style>
</head>

<body>
   

    <h1> All Customer</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th>Email</th>
                <th>Account no</th>
                <th>Balance</th>
                <th>Send money</th>
            </tr>
        </thead>
        <tbody>

            <?php
    
$sql="SELECT * FROM `customer`";

$result=mysqli_query($conn,$sql);


while($row  = mysqli_fetch_assoc($result))
{
 
   echo    '
            <tr>
              <td>'.$row['Name'].'</td>
              <td>'.$row['Email'].'</td>
              <td>'.$row['Account number'].'</td>
              <td>'.$row['Balance'].'</td>
              <td style="padding:10px 10px 10px 10px">
              <a href="transfer.php?reads='.$row['Account number'].'"
              <button type="button" class="btn mybtn btn-outline-light">Send Money</button>
              </a>
              </td>
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