<html>
<head>
<title>Movie list</title>
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
<center><h1>List of Movies</h1>
<table>
  <tr>
    <th>Movie ID</th>
    <th>Movie Name</th>
    <th>Movie cast</th>
	<th>Movie Director</th>
  </tr>
<?php

$conn=mysqli_connect("localhost","root","","ticket_booking");

$sql="select * from movie";

 $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($res))
            {       
			 $tid=$row['movieid'];
			 $tname=$row['moviename'];
			 $tloc=$row['moviecast'];
			 $movid=$row['moviedirector'];
			 echo "<tr><td>$tid</tid><td>$tname</tid><td>$tloc</tid><td>$movid</tid></tr>";
			}
?>
