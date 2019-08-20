<!DOCTYPE html>
<html>
<head><title>add movie</title>
<style>
h2{
    font-family:'Exo', sans-serif;
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
<h2>Add a movie </h2>
</center>
<h3><a href="admin1.php">back</a></h3>
<div>
  <form action="" method= post enctype="multipart/form-data">
    <label for="fname">Movie Name</label>
    <input type="text" id="fname" name="movname" placeholder="movie name..">

<label for="fname">Movie ID</label>
    <input type="text" id="fname" name="movid" placeholder="movie id..">
	

<label for="fname">Language</label>
    <input type="text" id="fname" name="movlang" placeholder="language..">
	
	<label for="fname">Cast</label>
    <input type="text" id="fname" name="movcast" placeholder="cast..">
	
	<label for="fname">Director</label>
    <input type="text" id="fname" name="movdir" placeholder="director..">

    <label for="lname">Rating</label>
    <input type="number" id="lname" name="movrat" placeholder="rating.."><br><br>
	
	<input name="image" id="image" accept="image/JPEG" type="file">

    <input type="submit"  name ="submit2"value="Submit">
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

   if(!empty($_POST['movname']) && !empty($_POST['movid']) && !empty($_POST['movlang']) && !empty($_POST['movcast']) && !empty($_POST['movdir'])  && !empty($_POST['movrat']))
   {  if(isset($_FILES['image'])) {
		$fp = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	}
    
    $movname =$_POST['movname'];  
    $movid=$_POST['movid'];  
    $movlang =$_POST['movlang']; 
    $movcast =$_POST['movcast']; 
    $movdir=$_POST['movdir']; 
    $movrat=$_POST['movrat']; 
	
    $query=mysqli_query($conn,"select * from movie where movieid='".$movid."'");
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    

     $sql="INSERT INTO movie(moviename,movieid,movielang,moviecast,moviedirector,movierating,movieimage) VALUES('$movname','$movid','$movlang','$movcast',' $movdir', '$movrat','$fp')";  
  
     $result=mysqli_query($conn,$sql);  
     if($result)
     {  
      echo "movie successfully added";  
     }
     else 
     {  
      echo "Failure!";  
     }  
  
    } 
	else
     {  
     echo "The movie id already exists! Please try again with another.";  
     }  
  
   } 
   else
    {  
    echo "All fields are required!";  
    }  
 }  
?>




