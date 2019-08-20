<!DOCTYPE html>
<html>
<head><title>add theatre</title>
<style>
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
h2{
    font-family:'Exo', sans-serif;
}
</style>
</head>
<body>
<center>
<h2>Add a Theatre</h2>
</center>
<h3><a href="admin1.php" style="color:black">back</a></h3>
<div>
 <form  method= post enctype="multipart/form-data">

    <label for="fname">Theatre Name</label>
    <input type="text" id="fname" name="tname" placeholder="Theatre name..">

<label for="fname">Theatre ID</label>
    <input type="text" id="fname" name="tid" placeholder="Theatre ID..">

<label for="fname">Location</label>
    <input type="text" id="fname" name="tloc" placeholder="Location..">

    <label for="lname">Movie ID</label>
    <input type="text" id="lname" name="mid" placeholder="Movie ID..">

  
    <input type="submit" name="submit1"value="Submit">
  </form>
</div>

</body>
</html>

<?php
 $conn = new mysqli("localhost","root","","ticket_booking") or die("Connect failed: %s\n". $conn -> error);
 $numrows=0;
 if(isset($_POST['submit1']))
  { 
    if(!empty($_POST['tid']) && !empty($_POST['tname']) && !empty($_POST['tloc']) && !empty($_POST['mid']))
   {  
    
    $tid =$_POST['tid'];  
    $tname=$_POST['tname'];  
    $tloc =$_POST['tloc']; 
    $mid =$_POST['mid']; 
	
	$query=mysqli_query($conn,"select * from theatre where theatreid='".$tid."'");
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
		  {  
    

     $sql="INSERT INTO theatre(theatreid,theatrename,location,movie_id) VALUES('$tid','$tname','$tloc','$mid')";  
  
     $result=mysqli_query($conn,$sql);  
     if($result)
     {  
      echo "theatre successfully added";  
     }
     else 
     {  
      echo "Failure!";  
     }  
  
    } 
	else
     {  
     echo "The theatre already exists! Please try again with another.";  
     }  
  
   } 
   else
    {  
    echo "All fields are required!";  
    }  
	}  
?>

