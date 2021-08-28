<?php 
    include 'con_db.php';
?>
<html>
<head>
    <title></title>
    </style>
</head>
<body style="background-color: black;color: yellow;">
    <br><br>
    <center>
        <form method="post">
    <table border="1" style="text-align:left">
        <tr>
            <th colspan="2" style="text-align:center">Bill</th>
        </tr>
        <tr>
            <th>Name</th><th><input type="text" name="name"></th>
        </tr>
      <tr>
            <th>Email</th><th><input type="text" name="email"></th>
        </tr>
        <tr>
            <th>Function type</th><th><input type="radio" name="don" value="birthday">Birthday<input type="radio" 
                name="don" value="marriage">Marriage<input type="radio" name="don" value="engagement">Engagement</th>
        </tr> 
  
        <tr>
            <th colspan="2" style="text-align:center"><input type="submit" name="submit" value="submit"></th>
        </tr> 
    </table>
    </form>
    </center>
    <?php
if(isset ($_POST["submit"]))
{
  $name = $_POST['name'];
   $email=$_POST['email'];
$gen = $_POST['don'];


$sql = mysqli_query($con,"INSERT INTO orders VALUES('$name','$email','$gen')");
if($sql)
                    {
                        echo '<script>alert("order placed Successfully");window.location="bss.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}

                        
?>

</body>
</html>