<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: purple;">
	<br><br><br><br><br><br><br>
<center>
 <form method="POST">
<input type="submit" name="user" value="USER" style="height: 100px;width: 200px;font-size: 25px"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="admin" value="ADMIN" style="height: 100px;width: 200px;font-size: 25px"  >
</form>
</center>
</body>
</html>

<?php
if(isset($_POST['user']))
{
echo '<script> alert("welcome User");window.location="loginn.php"</script>';
}
if (isset($_POST['admin']))
{
echo '<script> alert("Admin");window.location="login.php"</script>';
}
?>

