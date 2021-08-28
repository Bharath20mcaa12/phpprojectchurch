<?php 
    include 'con_db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: Red;">
  <center>
            <h1>Registration</h1>
        <form method="post" enctype="multipart/form-data">
    <table border="2" style="text-align:left;height: 150px;">
        <thead>
                                            <tr>
                                                    <th>Sl.no</th>
                                                 <th>Name</th>
                                                <th>Email</th>
                                                   <th>Address</th>
                                                  <th>Number</th>
                                              <th>Date</th>
                                                <th>Program Details</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"SELECT * FROM registration ORDER BY email ASC");
                                            while($row=mysqli_fetch_array($sql))
                                            {
                                          ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $i++;  ?></td>
                                                <td ><?php echo $row['name'];  ?></td>
                                                <td ><?php echo $row['email'];  ?></td>
                                                   <td ><?php echo $row['address'];  ?></td>
                                                <td><?php echo $row['number'];  ?></td>
                                                <td ><?php echo $row['date'];  ?></td>
                                               <td ><?php echo $row['program'];  ?></td>

                                                
                                            </tr>
                                           <?php } ?> 
                                        </tbody>
    </table>
</form>
<a href="admin.php" class="btn btn-dark text-white">Back</a>
    </center>
</body>
</html>