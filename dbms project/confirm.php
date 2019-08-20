<html>
<head><title>confirm</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/all.css">
<style>

*, *:before, *:after{
  box-sizing: border-box;
  padding: 0; margin: 0;
  font: 300 1em/1.5 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
  text-decoration: none;
  color: #111;
}



  section.container{
    min-width: 500px;
    margin: 5% auto;
    text-align: center;
  }
    a:hover{border-bottom: 1px solid #111;} 
    h1{font-size: 2em; padding: 20px 0;}
    p{
      font-size: .75em;
      text-transform: uppercase;
      letter-spacing: 2px;
      padding: 20px 0;
    }

    button:hover{cursor: pointer}
    button {
      background: transparent; outline: none;
      position: relative;
      border: 1px solid #111;
      padding: 15px 50px;
      overflow: hidden;
    }

    /*button:before (attr data-hover)*/
    button:hover:before{opacity: 1; transform: translate(0,0);}
    button:before{
      content: attr(data-hover);
      position: absolute;
      top: 1.1em; left: 0;
      width: 100%;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-weight: 800;
      font-size: .8em;
      opacity: 0;
      transform: translate(-100%,0);
      transition: all .3s ease-in-out;
    }
      /*button div (button text before hover)*/
      button:hover div{opacity: 0; transform: translate(100%,0)}
      button div{
        text-transform: uppercase;
        letter-spacing: 3px;
        font-weight: 800;
        font-size: .8em;
        transition: all .3s ease-in-out;
     }
	 </style>
</head>
<body>
<center><h2>successfull</h2><hr>
<br>
<?php
include('session.php');
$conn=mysqli_connect("localhost","root","","ticket_booking");
     if(isset($_GET["data"]))
    {
       $array1 = $_GET["data"];
     }
	 $i=0;
	  
	  
	   if(isset($_GET["data2"]))
    {
       $date = $_GET["data2"];
     }
	 $i=0;
	  
	  
	   if(isset($_GET["data3"]))
    {
       $time = $_GET["data3"];
     }
	 $i=0;
	  
	  
	   if(isset($_GET["data4"]))
    {
       $theatreid= $_GET["data4"];
     }
	 $i=0;
	  
	   if(isset($_GET["data5"]))
    {
       $movieid = $_GET["data5"];
     }
	 
	
	
	
	
	$seats11= explode(" ",$array1); 
	$count1=count($seats11);
    $totalprice=$count1*150;	
	$sql1="insert into tickets(seats,date1,time1,price,tid,mid,uid,noticket) values ('$array1','$date','$time','$totalprice','$theatreid','$movieid','$login_session','$count1')";
	$query=mysqli_query($conn,$sql1);

	$seats11= explode(" ",$array1); 
	
	$sql="select * from movie where movieid='$movieid'";
	if(mysqli_query($conn,$sql))
        {
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($res))
			{
		 $mimage=$row['movieimage'];
		 $msg='<img src="data:image/jpeg;base64,'.base64_encode($row['movieimage']). '" style="width:220px;height:320px;" align="left" />';
			}
			
		}
	$sql2="select * from movie where movieid='$movieid'";
	$mname="yy";
	if(mysqli_query($conn,$sql2))
        {
            $res2=mysqli_query($conn,$sql2);
			while($row2=mysqli_fetch_array($res2))
			{
				$mname=$row2['moviename'];
			}
			
		}
	$sql3="select * from theatre where theatreid='$theatreid'";
	$tname="zz";
	if(mysqli_query($conn,$sql3))
        {
            $res3=mysqli_query($conn,$sql3);
			while($row3=mysqli_fetch_array($res3))
			{
				$tname=$row3['theatrename'];
			}
			
		}
		



		
	 ?>
	<div class="w3-container">
	<div class="w3-card-4 "style="width:50%" >
    <header class="w3-container w3-blue">
      <h1>Your Tickets </h1>
    </header>

    <div class="w3-container">
	<p><?php echo "$msg"; ?></p>
	<h3><b><?php echo "User name:$login_session"; ?></b></h3>
	<h3><?php echo "Movie: $mname"; ?></h3>
	<h3><?php echo  "Theatre: $tname"; ?></h3>
   <h3><?php echo  "Seats :$array1"; ?></h3>
   <h3><?php echo  "Price :$totalprice"; ?></h3>
	<h3><?php echo  "Date:$date"; ?></h3>
	<h3><?php echo  "Time:$time"; ?></h3>
	
	
	 </div>
	 

    <footer class="w3-container w3-blue">
      <h5>Thank You !</h5>
    </footer>
  </div>
</div>
	 <br><br>
	 <section class="container" >
 <a href="welcome.php" type="button"><button data-hover="To Home!"><div>Back</div></button></a>
  
  
  </section>
 </body>
 </html>