<?php 
    include 'con_db.php';
?>
<!DOCTYPE html>
<html>
<head>
	 <style>
        .form-box {
            margin: all;
            margin-top: 2px;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
            border-width: 12px;
        }
        body{
          background-image: url('back1.jpg');
        
        }

        button{
            height: 40px; width: 100px;;
        }
        button.ex2:hover{
            background-color:rgb(123, 255, 47);
        }
    </style>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title></title>
</head>
<body style="background-color: grey;">
 <center>
 	<br><br>
 	<h1 style="color: white;">Donation</h1>
        <div class="form-box" style="width: 600px">
            <form method="post" align="center" enctype="multipart/form-data" style="background-color: rgb(103, 207, 185)">

                <label for="exampleFormControlInput1" class="form-label"> Name </label>
                <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="--Name--">
                <label for="exampleFormControlInput1" class="form-label"> Email address </label>
                <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="--Email--">
               
                <label for="exampleFormControlInput1" class="form-label"> Amount  </label>
                <input type="number" name="amount" class="form-control" id="exampleFormControlInput1" placeholder="--Amount--">
  
            </div>
       <br></br>
    <input type="submit" name="submit" value="Submit" style="height: 50px;width: 80px;">
                <br></br>
            
    </center>

</form></div>



<?php
if(isset ($_POST["submit"]))
{
  $name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];



$q =mysqli_query($con, "select * from help WHERE email = '$email' ");
        $row=mysqli_fetch_array($q);
    
if($row==0){
$sql = mysqli_query($con,"INSERT INTO help VALUES('$name','$email','$amount')");
if($sql)
                    {
                        echo '<script>alert("Donation Done Successfully");window.location="bss.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}
else{
    echo '<script>alert("email already presesnt");window.location="help.php"</script>';

                        
}
}
?>


</body>
</html>