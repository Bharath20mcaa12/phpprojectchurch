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

        button{
            height: 40px; width: 100px;;
        }
        button.ex2:hover{
            background-color:greenyellow;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<title></title>
</head>
<body style="background-color: sandybrown;">
	<center>
<h1>Feedback</h1>

 <div class="form-box" style="width: 600px">
            <form  method="post" align="center" enctype="multipart/form-data" style="background-color: rgb(103, 207, 185)">

                <label for="exampleFormControlInput1" class="form-label"> Email address </label>
                <input type="email" name="email"  class="form-control" id="exampleFormControlInput1" placeholder="email">
        </div>
        <div class="form-box" style="width: 600px">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="description"></textarea>
        </div><br></br>
        <input type="submit" name="submit" value="submit">
    
                <br></br>
              </form>
            </div>
        </center>
        <?php
if(isset ($_POST["submit"]))
{
$email = $_POST['email'];
$description = $_POST['description'];




$q =mysqli_query($con, "select * from feedback WHERE email = '$email' ");
        $row=mysqli_fetch_array($q);
    
if($row==0){
$sql = mysqli_query($con,"INSERT INTO feedback VALUES('$email','$description')");
if($sql)
                    {
                        echo '<script>alert("Data Added Successfully");window.location="bss.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}
else{
    echo '<script>alert("email already presesnt");window.location="contact.php"</script>';

                        
}
}
?>


</body>
</html>
