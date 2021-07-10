<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robo";

     $engine1=$_POST['engine1'];
       $engine2=$_POST['engine2'];
       $engine3=$_POST['engine3'];
       $engine4=$_POST['engine4'];
       $engine5=$_POST['engine5'];
       $engine6=$_POST['engine6'];
       

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//$conn = new mysqli("localhost","root","","robo");

// Check connection

if(isset($_POST['save'])) 

{ 
    
$stmt=$conn->prepare("INSERT INTO engins(engine1,engine2,engine3,engine4,engine5,engine6)
VALUES('$engine1','$engine2','$engine3','$engine4','$engine5','$engine6')");



$stmt->execute();
  
  echo "The data is inserted correctly..";
}
elseif(isset($_POST['run']))
{
$stmt=$conn->prepare("INSERT INTO run (start) values ('1')");
$stmt->execute();
	echo "The data is inserted correctly..";
}
else
 { echo "try again";}


?>