<html>
<head><title>view tickets</title>
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
<center>
<h1> Your list of Tickets:</h1><hr>
<?php
include('session.php');
$conn=mysqli_connect("localhost","root","","ticket_booking");

$sql="select * from tickets where uid='$login_session'";
$res=mysqli_query($conn,$sql);

 while($row=mysqli_fetch_array($res))
            {
				 $uid=$row['uid'];
				 $mid=$row['mid'];
				 $tid=$row['tid'];
				 $date1=$row['date1'];
				 $time1=$row['time1'];
				 $seats=$row['seats'];
				 $ticketno=$row['ticketno'];
		$sql2="select * from movie where movieid='$mid'";
	$mname="yy";
	if(mysqli_query($conn,$sql2))
        {
            $res2=mysqli_query($conn,$sql2);
			while($row2=mysqli_fetch_array($res2))
			{
				$mname=$row2['moviename'];
			}
			
		}
	$sql3="select * from theatre where theatreid='$tid'";
	$tname="zz";
	if(mysqli_query($conn,$sql3))
        {
            $res3=mysqli_query($conn,$sql3);
			while($row3=mysqli_fetch_array($res3))
			{
				$tname=$row3['theatrename'];
			}
		}

		
		echo "<div class='w3-container' >";
	echo "<div class='w3-card-4 'style='width:50%' >";
    echo "<header class='w3-container w3-blue'>";
      echo "<h1>Your Tickets are</h1>";
    echo "</header>";

    echo "<div class='w3-container'>";
	
	echo "<h3><b> user name:$login_session</b></h3>";
	echo "<h3> seats: $seats</h3>";
	echo "<h3>date: $date1</h3>";
	echo "<h3>time: $time1</h3>";
	echo "<h3>theatre: $tname</h3>";
	echo "<h3>movie: $mname</h3>";
	 echo "</div>";

    echo "<footer class='w3-container w3-blue'>";
    echo "<h5>Thank you</h5>";
    echo "</footer>";
  echo "</div>";
echo "</div>";
	echo " <br><br>";
				
			}	 
?>
	 <br><br>
	 <section class="container" >
  <a href="welcome.php" type="button"><button data-hover="To Home!"><div>Back</div></button></a>
   </section>
 </body>
 </html>