<?php 

$server="localhost";
$username="root";
$password="";
$db="sparks_bank";

// if(!$con = mysqli_connect($server,$username,$password,$db))
// {

//     die("failed to connect!");
// }

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>


