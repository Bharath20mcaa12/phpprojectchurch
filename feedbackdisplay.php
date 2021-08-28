<?php 
    include 'con_db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: ORANGE;">
<center>
            <h1>Feedback </h1>
        <form method="post" enctype="multipart/form-data">
    <table border="2" style="text-align:left;">
        <thead>
                                            <tr>
                                                <th>Sl.no</th>
                                                <th>Email</th>
                                                <th>Description</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"SELECT * FROM feedback ");
                                            while($row=mysqli_fetch_array($sql))
                                            {
                                          ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $i++;  ?></td>
                                                
                                                <td ><?php echo $row['email'];  ?></td>
                                                <td><?php echo $row['description'];  ?></td>
                                                
                                               
                                            </tr>
                                           <?php } ?> 
                                        </tbody>
    </table>
</form>
<a href="admin.php" class="btn btn-dark text-white">Back</a>
    </center>
</body>
</html>