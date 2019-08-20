<html>
<head>
<title>movie details</title>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  border: none;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/all.css"></head>
<body >
<center>
<h2>Movie details</h2>
<hr>

<?php
 
 $conn=mysqli_connect("localhost","root","","ticket_booking");
   session_start();
   $data="";
    if(isset($_GET["data"]))
    {
        $data = $_GET["data"];
     }

  
 $sql="select * from movie where movieid='$data'";
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
		 $msg='<img src="data:image/jpeg;base64,'.base64_encode($row['movieimage']). ' "';
		 $msg2="<br><div class='w3-container'> <div class='w3-panel w3-blue w3-padding-48 w3-card-4 w3-round-large'><h3>Movie name: $mname<br>Movie id: $mid<br>Movie language: $mlang<br>Movie cast: $mcast<br>Movie director: $mdir<br>Movie rating: $mrating</h3></div></div>";
    	    }
        }
       
?>
<?php
 echo $msg.'style="width:25%;cursor:zoom-in"onclick="document.getElementById(`modal01`).style.display=`block`">';
 echo '<div id="modal01" class="w3-modal" onclick="this.style.display=`none`">';
   
   echo  '<div class="w3-modal-content w3-animate-zoom">';
   echo   $msg.'style="width:70%" >';
   echo  '</div></div>';
   echo '<br><br>';
 echo $msg2;
?>
<br>
<br><div >
<form action="moviedetails.php" method="post"  enctype="multipart/form-data">
 <?php
 $msg1="";
 $msg1= '<b><a href="./booktickets.php?data='.$mid.'"class=button><span>book tickets</span></a><br><br>';
 echo $msg1;
 ?>
 
  </table>
</body>
</html>
