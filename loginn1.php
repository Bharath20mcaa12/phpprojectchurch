<?php
    if($_POST)
    {
        $username = $_POST['username'];
        $password = $_POST['password']; 
    }
?>

<html>
<head>
    <title></title>
</head>
<body style="background-color: black;color: yellow;">
    <center>
        <div id="main">
        <form method="post" action="loginn2.php">
    <table border="1" style="text-align:left">
        <tr>
            <th colspan="2" style="text-align:center"> Login </th>
        </tr>
        <tr>
            <th>Name</th><th><input type="text" name="username" value=<?php echo $username?> ></th>
        </tr>
        <tr>
            <th>Password</th><th><input type="text" name="password" value=<?php echo $password?> ></th>
        </tr>
        <tr>
            <th colspan="2" style="text-align:center"><input type="submit" name="submit" value="Submit" disabled=""></th>
        </tr> 
    </table>
<?php
date_default_timezone_set('Asia/Calcutta'); 
 
//Calculate 60 days in the future
//seconds * minutes * hours * days + current time
 
$inTwoMonths = 60 * 60  + time();
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
 
{
$visit = $_COOKIE['lastVisit'];
echo "Your last visit was - ". $visit;
setcookie('username',$username, $inTwoMonths);
setcookie('password',$password, $inTwoMonths);
}
else
echo "Cookie Has Been Set!!";
setcookie('username',$username, $inTwoMonths);
setcookie('password',$password, $inTwoMonths);
?>
<p>Press <input type="submit" name="submit" value="Go">to view the contents</p>
</div>

    </form>
    </center>
</body>
</html>