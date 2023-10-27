
<?php
$user_Name =$_POST['name'];
$user_Email=$_POST['email'];
$user_Phone=$_POST['phone'];

$serverName ='localhost';
$userName='root';
$password='';
$dbName='saff_db';

$conn=mysqli_connect($serverName ,$userName ,$password ,$dbName);

if(!$conn){
    die('Connection failed'.mysqli_connect_error());
}

$sql_insert = "INSERT INTO user_info (user_name, user_email, user_phone)
VALUES ('$user_Name' ,'$user_Email', '$user_Phone')";
mysqli_query($conn, $sql_insert);


$sql_select = "SELECT * FROM user_info";
$result = mysqli_query($conn, $sql_select);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>User Details</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
  <div class="contact-form">
  <div class="container">
  <div class="content">

  <section >
        <h2>Details</h2>
        <div class="table-styles">
        <table>
            <tr>
               <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <?php 
                while($rows=mysqli_fetch_assoc($result))
                {
            ?>
            <tr>
            <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['user_name'];?></td>
                <td><?php echo $rows['user_email'];?></td>
                <td><?php echo $rows['user_phone'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        </div>
    </section>
    </div>
    </div>
  </div>
  </body>
</html>





