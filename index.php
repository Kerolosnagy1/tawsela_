<?php
$firstname=$_REQUEST['firstname'];
$secondname=$_REQUEST['secondname'];
$address =$ REQUEST['address '];

if (isset($_POST['btntest']))

$host="localhost";
$user -"root";
$password="" ;
$db="tawsela";
$conn - mysqli_connect ($host, $user, $password, $db);

$insert- "insert into studentsbisinfo values('$firstname’ ,'$secondname’ ,‘$adress')”;
mysqli_query ($conn, $insert);
if ($conn){
echo (“<h1 style=color:green;’>Your Registration is Done!</h1>';

}else
echo'<h1 style= color:red;'>Your Registration is Failed!</h1>';
     }

}
?>