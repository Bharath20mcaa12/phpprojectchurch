<html>
<body style="background-color: black;color: green;">

    <center>
<br><br>

<h1>Admin Login</h1>
        <form method="POST" action="admin.php" >
    <table border="1" style="height: 280px;width: 350px;">
        <tr>
            <th colspan="2"><h2> Login Session</h2></th>
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
            <th colspan="2"><h2><input type="submit" name="login" value="Login" style="height: 50px;width: 80px;font-size: 20px"  > &nbsp;&nbsp;&nbsp;&nbsp;</h2></th>
        </tr> 
    </table>
</form>
<br><br><br><br>
<a href="adlog.php" class="btn btn-dark text-white" style="color: white;font-size: 30px;">Back</a>
    </center>


</body>
</html>