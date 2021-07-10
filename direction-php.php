<?php
$conn= new mysqli("localhost","root","","direction");


if(isset($_POST['r'])){
	 $stmt=$conn->prepare("insert into dir(dir) values('r')");
	 $stmt->execute();
	 echo "r";
 }
 elseif(isset($_POST['l'])){
	 	 $stmt=$conn->prepare("insert into dir(dir) values('l')");
	 $stmt->execute();
	 echo"l";
 }
 elseif(isset($_POST['f'])){
	 	 $stmt=$conn->prepare("insert into dir(dir) values('f')");
	 $stmt->execute();
     echo"f";
 }
 elseif (isset($_POST['b'])){
	 	 $stmt=$conn->prepare("insert into dir(dir) values('b')");
	 $stmt->execute();
     echo "b";
 }
 elseif(isset($_POST['s'])){
	 	 $stmt=$conn->prepare("insert into dir(dir) values('s')");
	 $stmt->execute();
	 echo "s";
 }
 else{ echo"There are problem, please try again";}
?>
