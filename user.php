

<html>
<head>
    <title>login</title>
    <style type="text/css">
        p {
color:white;
font-size:50px;
position: absolute;
top: 20%;
left: 40%;
transform: translate(-50%, -50%);
}
    </style>

</head>
<body style="background-color: black;color: yellow;">
    <center>
<br><br>

<h1>User Login</h1>
        <form method="POST" action="bss.php" >
    <table border="1" style="height: 280px;width: 350px;">
        <tr>
            <th colspan="2"><h2> Login </h2></th>
        </tr>
        <tr>
            <th><h2>Username </h2></th><th><input type="text" name="username"></th>
        </tr>
        <tr>
            <th><h2>Password</h2></th><th><input type="password" name="password"></th>
        </tr>        
        <tr hidden="">
            <th>count</th><th><input type="number" name="count"></th>
        </tr>
        <tr>
            <th colspan="2"><h2><input type="submit" name="login1" value="Login" style="height: 50px;width: 80px;font-size: 20px"  > &nbsp;&nbsp;&nbsp;&nbsp;</h2></th>
        </tr> 
    </table>
</form>
<br><br><br><br>
<a href="adlog.php" class="btn btn-dark text-white" style="color: white;font-size: 30px;">Back</a>
    </center>




</body>
</html>