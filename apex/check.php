<?php
include "include.php";

/*if($_POST)
	echo "exists";*/
	$pass=sha1($_POST["Password"]);
//$sel="SELECT * FROM `user` where Username='".$_POST["Username"]."' and Password='".$_POST["Password"]."'";
$sel="SELECT * FROM `user` where Username='".$_POST["Username"]."' and Password='$pass'";

$result=mysqli_query($connec,$sel) or die(mysqli_error($connec));

if(mysqli_num_rows($result) == 0)
{
	session_start();
	$_SESSION['error'] = '<p style="color:black;">Invalid username or password</p>';
  	header('Location: login.php');
	//echo "<h3>Invalid username and password combination<br>Go to <a href='index.php'>homepage</a></h3>";
}

//else
	//echo "welcome"
else
{
	//echo "welcome";
	session_start();
	$_SESSION['user']=$_POST["Username"];
echo '<script language="javascript">document.location.href="loggedin.php"</script>';
}

?>
