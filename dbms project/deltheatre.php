<!DOCTYPE html>
<html>
<head><title>delete theatre</title>
<style>
h2{
    font-family: "Comic Sans MS", cursive, sans-serif;
}
input[type=text], select {
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
	 width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<center>
<h2>delete a theatre </h2>
</center>
<h3><a href="admin1.php">back</a></h3>
<div>
  <form action="" method= post enctype="multipart/form-data">
<label for="fname">Theatre ID</label>
    <input type="text" id="fname" name="thid" placeholder="theatre id..">

    <input type="submit"  name ="submit2" value="Submit">
  </form>
</div>

</body>
</html>
<?php

     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass="";
     $db = "ticket_booking";

     $conn = new mysqli($dbhost, $dbuser,$dbpass ,$db) or die("Connect failed: %s\n". $conn -> error);


if(isset($_POST['submit2']))
  {  	   
    $thid=$_POST['thid'];  
    $query=mysqli_query($conn,"delete from theatre where theatreid='".$thid."'"); 
     if($query)
     {  
      echo "theatre successfully deleted";  
     }
     else
     {  
      echo "Failure!";  
     }  
  
 }  
?>