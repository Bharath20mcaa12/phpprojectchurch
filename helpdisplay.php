<?php 
    include 'con_db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: black;color: yellow;">
    <br>
    <br><br>

    <center>
            <h1>Donation/Help</h1>
        <form method="post" enctype="multipart/form-data">
    <table border="1" style="text-align:left;">
        <thead>
                                            <tr>
                                                <th>Sl.no</th>
                                                 <th>Name</th>
                                                <th>Email</th> 
                                                <th>Amount</th>
                                                 <th>GST(6%)</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"SELECT * FROM help");

                                            while($row=mysqli_fetch_array($sql))
                                            {
                                          ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $i++;  ?></td>
                                                
                                                <td ><?php echo $row['name'];  ?></td>
                                                <td><?php echo $row['email'];  ?></td>
                                                  <td ><?php echo $row['amount'];  ?></td>
                                                    <td ><?php echo ($row['amount']*0.6/100);  ?></td>


                                               
                                            </tr>  
                                            

                                           <?php  }?> 
                                        </tbody>
    </table>
</form>
<a href="admin.php" class="btn btn-dark text-white">Back</a>
    </center>
</body>
</html>