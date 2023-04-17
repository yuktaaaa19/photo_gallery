<?php
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password);//create connection
//check connection
if($conn->connect_error)
{
die("connection failed: ".$connn->connect_error);
}
echo "connected successfully";
mysqli_select_db($conn,'photos');
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$query="insert into details(name,email,number) values ('$name','$email','$number')";
mysqli_query($conn,$query);
header('location:1page.php#contact');

 

?>