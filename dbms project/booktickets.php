<html>
<head>
<title>book tickets</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/all.css">
<style>
a:link, a:visited {
    background-color: #008CBA;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: #f44336;
}
table,th,td,tr,h1,h2,h3,h5{
	color:white;
}
br{
color:white;
}
</style>
</head>


</head>
<body style="background-image:url('images/jp.jpg')">
<center>
<h2 style="background-color:white;color:black">Select theatre and timings</h2>
<?php
$conn=mysqli_connect("localhost","root","","ticket_booking");
   session_start();
   $data="";
    if(isset($_GET["data"]))
    {
        $data = $_GET["data"];
     }
	 ?>
	 
   
	<form action="" method="post">

</form>

<table border="1"  width="500"height="50" ><b>
<form action="" method="post">
	<tr>
    <td align="center"><input type="radio" name="date1" value="dec 4">Dec 4</td>
	<td align="center"><input type="radio" name="date1" value="dec 5">Dec 5</td>
	<td align="center"><input type="radio" name="date1" value="dec 6">Dec 6</td>
	<td align="center"><input type="radio" name="date1" value="dec 7">Dec 7</td>
	<td align="center"><input type="radio" name="date1" value="dec 8">Dec 8</td></tr></table></b>
<?php
	$d1="";
if (isset($_POST['submit'])) {
if(isset($_POST['date1']))
{
	$d1=$_POST['date1'];
	echo "<br><br><h5>Date :".$_POST['date1'];
}
}
	
	$msg2="";
	$msg3="";
	$tid="";
	$movid="";
	$stm="";
	$ttid="";
	$sql="select * from theatre where movie_id='$data'";
	if(mysqli_query($conn,$sql))
        {   
	      
   
	
	
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($res))
            {       
		     $tid=$row['theatreid'];
			 $tname=$row['theatrename'];
			 $tloc=$row['location'];
			 $movid=$row['movie_id'];
			 
			 $msg2="<h2><input type = 'radio' name='theatre' value=".$tid."><b> $tname </b> ($tid)  $tloc</h2>";
			 echo $msg2;
			 $msg3='<h3><input type = "radio" name="showtime" value="9:30"> 9:30 <input type = "radio" name="showtime" value="1:30"> 1:30 <input type = "radio" name="showtime" value="4:30"> 4:30 <input type = "radio" name="showtime" value="7:30"> 7:30 </h3>';
			 echo $msg3;
			}
			if($msg2=="")
			{
				echo "<br><br>no theatres added for this film yet<br>";
			}
			
		}
		
		echo '<br><br><input type="submit" name="submit" value="submit" />';
   

if (isset($_POST['submit'])) {
if(isset($_POST['showtime']))
{
	
	$stm=$_POST['showtime'];
echo "<br><br><h3>show time:".$_POST['showtime'];  
}
}
if (isset($_POST['submit'])) {
if(isset($_POST['theatre']))
{ $ttid=$_POST['theatre'];
echo "<br>theatre:".$_POST['theatre']; 
echo "</h3>"; 
}
}

echo "</form>";
if(isset($_POST['showtime'])&&isset($_POST['date1'])&&isset($_POST['theatre']))
{
echo '<br><a href="selectseats.php?data='.$d1.'&data1='.$stm.'&data2='.$ttid.'&data3='.$data.'">select seats</a>';
}
?>


</center>
 </body>
</html>
