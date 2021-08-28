<?php 
    include 'con_db.php';
?>
<html>
    <head>
        <title> Birthday Registration</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="shortcut icon" type="image/png" href="icon.png">
    </head>
    <body>

   <form method="post" align="center" enctype="multipart/form-data">
 <section class="birthday_register">
        <h1 class="title"> <b>Birthday Registration</b></h1>
         <div class="container">
        <div class="birthday-form row">
             <div class="form-field col-lg-6">
              <input id="name" class="input-text" type="text" name="name">
            <label for="name" class="label">name</label>
            </div>
              <div class="form-field col-lg-6">
              <input id="email" class="input-text" type="email" name="email">
            <label for="email" class="label">Email</label>
            </div>
              <div class="form-field col-lg-6">
              <input id="Address" class="input-text" type="text" name="address">
            <label for="address" class="label">Address</label>
            </div>
             <div class="form-field col-lg-6">
              <input id="phone" class="input-text" type="text" name="no">
            <label for="phone" class="label">Contact Number</label>
            </div>
              <div class="form-field col-lg-6">
              <input id="date" class="input-text" type="date" name="date">
            <label for="date" class="label">Date</label>
            </div>
            <div class="form-field col-lg-6">
              <input id="prg" class="input-text" type="text" name="prg">
            <label for="prodet" class="label">Program Details</label>
            </div>
            <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="submit" name="submit">
            </div>
            
             </div></div>
        
        
        </section></form>

<?php
if(isset ($_POST["submit"]))
{
  $name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$number = $_POST['no'];
$date = $_POST['date'];
$program = $_POST['prg'];


$q =mysqli_query($con, "select * from registration WHERE email = '$email' ");
        $row=mysqli_fetch_array($q);
    
if($row==0){
$sql = mysqli_query($con,"INSERT INTO registration VALUES('$name','$email','$address','$number','$date','$program')");
if($sql)
                    {
                        echo '<script>alert("Registration Done Successfully");window.location="bss.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}
else{
    echo '<script>alert("email already presesnt");window.location="bbt.php"</script>';

                        
}
}
?>



  </body>
    
</html>