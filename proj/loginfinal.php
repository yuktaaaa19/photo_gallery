<?php
if(!isset($_POST['submit']))
{ 
$username=$_POST['username'];
$password=$_POST['password'];

$conn=new mysqli('localhost','root','','photos');
if($conn -> connect_error)
{
 die('connection failed:'.$conn->connect_error);
}
$sql="select * from login where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)===1)
{
  $row=mysqli_fetch_assoc($result);
  if($row['username']===$username && $row['password']===$password)
  {
	  header("Location: 1page.php");
   // echo "<h1><i>LOGGED IN SUCCESSFULLY.....</i></h1>";
	return 0;
  }
  
}
else
{
echo "<h1><i>LOGGED NOT IN....</i></h1>";
}
$conn->close();
}


?>