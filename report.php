<!DOCTYPE html>
<html lang="th">
<head>
  <title>BIB ตุ๊ดตู่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class ="container">
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "MyDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM profsleuser";
$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0){
   echo "<table   class='table table-striped'>

 
   <tr>
        <th style = 'width: 1%'>No.</th>
        <th style = 'width: 3%'>Firstname</th>
        <th style = 'width: 3%'>Lastname</th>
        <th style = 'width: 2%'>Gender</th>
        <th style = 'width: 1%'>Age</th>
        <th style = 'width: 5%'>E-mail</th>
        <th style = 'width: 1%'>Tel.</th>

    </tr>";
 

    	$i=1;

        while($row = mysqli_fetch_assoc($result)) {
           
            echo  
            "<tr>
                <td >".$i."</td>
                <td >".$row["firstname"]."</td>
                <td >".$row["lastname"]."</td>
                <td >".$row["gender"]."</td>
                <td >".$row["age"]."</td>
                <td >".$row["email"]."</td>
                <td >".$row["Tel"]."</td>

              </tr>";

$i++;
        }
        echo "</table>";

}
			

    mysqli_close($conn);
    

    ?>
</div>
</body>
</html>






