<html>
<head>
<title>theatre list</title>
<style>
body{
background-color:black;
color:white;
}
h1 {
    font-family:'Exo', sans-serif;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;
color:black;}
</style>
</head>
<body>
<center><h1>List of Theatres</h1>
<table>
  <tr>
    <th>Theatre ID</th>
    <th>Theatre Name</th>
    <th>Location</th>
	<th>Movie </th>
  </tr>
<?php

$conn=mysqli_connect("localhost","root","","ticket_booking");

$sql="select * from theatre";

 $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($res))
            {       
			 $tid=$row['theatreid'];
			 $tname=$row['theatrename'];
			 $tloc=$row['location'];
			 $movid=$row['movie_id'];
			 echo "<tr><td>$tid</tid><td>$tname</tid><td>$tloc</tid><td>$movid</tid></tr>";
			}
?>
