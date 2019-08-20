<!DOCTYPE html>
<html>
<title>Movie Ticket Booking</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/all.css">
<style>
body,h1,h2,h3,h4,h5,h6 {
	font-family: "Lato", sans-serif;
}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-pale-blue w3-card w3-left-align w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="viewtickets.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View tickets</a>
	<a href='dispt.php' class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><span>Display Theatres</span></a>
	<a href='dispm.php' class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><span>Display Movies</span></a>
	<a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right">Sign out</a>
    </div>

</div>

<!-- Header -->
<header class="w3-container w3-pale-blue w3-center" style="padding:100px 18px">
  <h1 class="w3-margin w3-xxlarge">WELCOME TO MOVIE TICKET BOOKING SYSTEM </h1>
  <p class="w3-xlarge w3-left-align">Welcome <?php include('session.php'); echo $login_session?>!</p>
   
 
</header>
<center>
<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
     <?php

 $conn=mysqli_connect("localhost","root","","ticket_booking");
        $msg="";
        $sql="select * from movie";
        if(mysqli_query($conn,$sql))
        {
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($res))
            {       
		            
                    $mname=$row['moviename'];
                    $mid=$row['movieid'];
                    $mlang=$row['movielang'];
                    $mcast=$row['moviecast'];
                    $mdir=$row['moviedirector'];
                    $mrating=$row['movierating'];
                    $mimage=$row['movieimage'];
                  $msg.= '<a href="./moviedetails.php?data='.$mid.'"><img src="data:image/jpeg;base64,'.base64_encode($row['movieimage']). ' "  class="w3-hover-opacity" alt ="name_of_movie" height="250" width="175"style="margin:10px 50px"></a>';
                  
			}	 
            }
        else{
            $msg.="Query failed";
		}
echo $msg;
?>
	 
	 </div>
</div>



<div class="w3-container w3-black w3-center w3-opacity w3-padding-64" >
    <h1 class="w3-margin w3-small ">PROJECT GUIDANCE:<br>
<table border="0" height="50" width="300" align="center">
<tr><td></td><td></td></tr>
<tr><td align="center">Ms. Kusuma</td>
<tr><td align="center">Assistant professor,</td>
<tr><td align="center">Department of CSE,</td>
<tr><td align="center">KSSEM </td>
</h1>
</div>





</body>
</html>
