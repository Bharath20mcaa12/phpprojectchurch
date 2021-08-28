  
<?php
    if($_POST)
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
?>

<html>
<head>
    <title>Cookies</title>
</head>
<body style="background-color: black;color: yellow;">

<div id="second"  style="text-align:center">
    <h1>------Login details-----</h1>
    <BR>
    <h2>The cookie values are :</h2><br>
    <p style="color: white;font-size: x-large;">
    <?php
        
echo "Username: ".$_COOKIE['username'];
echo '<br>';
echo "Password: ".$_COOKIE['password'];
?>
</p>
<br><br><br>
 <button type="button" class="ex2"   ><a href="bss.php" class="btn btn-dark text-white">Continue</a></button>
</div>
</body>
</html>