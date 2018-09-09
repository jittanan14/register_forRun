<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {

    box-sizing: border-box;

}
input[type=text]{
	font-size: 20px;
}
input[type=submit]{
	font-size: 500px;
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
    height: 100% ;
    text-align: center;


    /* only for demonstration, should be removed */
   	
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
  <h2>Register For Run</h2>
</header>

<section >
  <article >
	
   		<form method="post" action="output_register.php">
 		 First name:
  		<input type="text" name="firstname">
  		

  		&nbsp &nbsp Last name:
  		<input type="text" name="lastname">
  		<br><br>

  		 Gender:
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female<br>
 
 <br>

  		Age:
  		<input type="text" name="age">
  		

  		&nbsp &nbsp E-mail:
  		<input type="text" name="email">
  		<br><br>

  		Tel. :
  		<input type="text" name="Tel">
  		<br><br>

  		Address :
  		<textarea type="text" name="address" style="width: 500px; height: 100px; font-size: 20px"></textarea> 
  		<br><br>

	ประเภทการวิ่ง :
  		<select name="run" style="width: 60px; height: 25px">
    <option >5 KM</option>
    <option >10 KM</option>
    <option >15 KM</option>
    <option >20 KM</option>
  </select><br><br>

  		
  		
  			Size:
  <input type="radio" name="size" value="S" checked>S
  <input type="radio" name="size" value="M">M
 <input type="radio" name="size" value="L">L
  <input type="radio" name="size" value="XL">XL

  		<br><br>โรคประจำตัว : *ถ้ามีโปรดระบุชื่อโรค ถ้าไม่มี - *<br>
  		<textarea type="text" name="disease" style="padding: 10px" size="20px"> </textarea>  
  		<br>
  		 

  		<br><br>
  		<button type="submit" value="Submit" style="font-size: 20px">SUBMIT</button> 
</form> 
		</article>
			</section>
      
   
           

     






    </body>
</html>