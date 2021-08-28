  
<?php
    if($_POST)
    {
        $name = $_POST['name'];
        $don = $_POST['don'];
        $amount = $_POST['amount'];
    }
?>

<html>
<head>
    <title>Cookies</title>
</head>
<body style="background-color: black;color: yellow;">

<div id="second"  style="text-align:center">
    <h1>------Event Bill-----</h1>
    <BR>
   <h2 style="color: green"> Thankyou for booking through our Sight.<br><br></h2>
    <h2>The cookie values are :</h2><br>
    <p style="color: white;font-size: x-large;">
    <?php
        
echo "Name: ".$_COOKIE['name'];
echo '<br>';
echo "Event Type: ".$_COOKIE['don'];
echo '<br>';
echo "Amount: ".$_COOKIE['amount'];
?>
</p>
<br><br><br>
 <button type="button" class="ex2"   ><a href="bss.php" class="btn btn-dark text-white">Back</a></button>
</div>
</body>
</html>