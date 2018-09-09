<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #FFCCCC;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background:#D8BFD8;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 100%;
    background-color: #FAF0E6;
    height: 300px; /* only for demonstration, should be removed */
    text-align: center;
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #FFCC99;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
 
  <article>
    </html>

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "MyDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set Charset
mysqli_set_charset($conn, "utf8");


// define variables and set to empty values
$firstname = $lastname = $gender = $age = $email = $Tel=$address=$run=$size=$disease="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $gender = test_input($_POST["gender"]);
  $age = test_input($_POST["age"]);
  $email = test_input($_POST["email"]);
  $Tel = test_input($_POST["Tel"]);
  $address = test_input($_POST["address"]);
  $run = test_input($_POST["run"]);
  $size = test_input($_POST["size"]);
  $disease = test_input($_POST["disease"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


echo "<h2>ข้อมูลสมาชิก Run For ตุ๊ดตู่:</h2>";
echo "Name: ";
echo $firstname;
echo "&nbsp &nbsp";
echo $lastname;
echo "<br>";
echo "Gender: ";
echo $gender;
echo "&nbsp &nbsp";
echo "Age: ";
echo $age;
echo "<br>";
echo "E-mail: ";
echo $email;
echo "&nbsp &nbsp";
echo "Tel. ";
echo $Tel;
echo "<br>";
echo "Address: ";
echo $address;
echo "<br>";
echo "ระยะทางวิ่ง: ";
echo $run;
echo "<br>";
echo "size: ";
echo $size;
echo "<br>";
echo "โรคประจำตัว";
echo $disease;
echo "<br>";




//insert data
$sql = "INSERT INTO profsleuser (firstname,lastname,gender,age,email,Tel,address,run,size,disease) 
VALUES ('$firstname','$lastname','$gender','$age','$email','$Tel','$address','$run','$size','$disease')";

//echo $sql."<br>";

//คำสั่ง query 
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?>
 
 <br><a href="report.php" >ดูรายชื่อผู้สมัคร</a>


  </article>
</section>
      
   
           

     




<footer>
  <p>Footer</p>
</footer>

    </body>
</html>