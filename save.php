<?php
echo $name=$_POST['Name'];
echo $phone=$_POST['Phone'];
echo $city=$_POST['City'];

$conn=mysqli_connect("localhost","root","","intrenship") or die("404");
$result=mysqli_query($conn,"INSERT INTO regn(ID,NAME,PHONE,CITY) VALUES ('UUID()','{$name}','{$phone}','{$city}')");
header("Location: http://localhost/Internship/index.php");
?>