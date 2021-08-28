<?php
if(isset ($_POST["login"]))
{

if(($_POST['username']!="admin")&&($_POST['password']!="admin"))
{
echo '<script> alert("Fraud! You are not an admin");window.location="login.php"</script>';
}
        session_start();
        
if(($_SESSION["user_name"]==$_POST['username']) && ($_SESSION["password"]=$_POST['password']) && ($_SESSION["count"]>=1))
{
$_SESSION['count'] += 1;
echo "Welcome back "
.$_SESSION["user_name"]. " <br> You have logged in ".$_SESSION['count'] ." times" ;
}
else 
{

$_SESSION["user_name"]=$_POST['username'];
$_SESSION["password"]=$_POST['password'];
echo "Hello ".$_SESSION["user_name"];
$_SESSION['count'] = 1;
echo '<script> alert("This is your first visit");</script>';
} 
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: Yellow;"> 
	<center>
		<br><br>

<div align="right"> 
  <form  method="post" >
  <input type="submit" name="logout" value="Logout" style="height: 40px;width: 65px;font-size: 16px">
</form>
</div>	<h1>----** @dmin **----</h1>
<br>
<form method="post" >
<a role="button" class="btn btn-dark" href="registrationdisplay.php" style="font-size: 25px;color:Red;"> View Registration</a> &nbsp;&nbsp;&nbsp;
&nbsp;<br><br>
<a role="button" class="btn btn-dark" href="bill2.php" style="font-size: 25px;color:green;"> View Order </a>  &nbsp;&nbsp;&nbsp;<br><br>
<a role="button" class="btn btn-dark" href="helpdisplay.php" style="font-size: 25px;color:red;"> View Donation</a>&nbsp;&nbsp;&nbsp;<br><br>
<a role="button" class="btn btn-dark" href="feedbackdisplay.php" style="font-size: 25px;color:green;"> View Feedback </a>  &nbsp;&nbsp;&nbsp;<br><br>
<a role="button" class="btn btn-dark" href="logindisplay.php" style="font-size: 25px;color:green;"> View Login </a>  &nbsp;&nbsp;&nbsp;<br>
</form>
<br><br><br><br>


</body>
</html>
<?php
if(isset ($_POST['logout'])){
$_SESSION['count'] = 0;
echo $_SESSION["user_name"]=$_POST['username']; 
echo '<script>alert("logout");window.location="login.php"</script>';
SESSION_unset();

}
?>