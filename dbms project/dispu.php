<html>
<head>
<title>users list</title>
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
<center><h1 >Registered Users</h1>
<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>User ID</th>
	<th>Age </th>
  </tr>
<?php

$conn=mysqli_connect("localhost","root","","ticket_booking");

$sql="select * from register";

 $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($res))
            {       
			 $tid=$row['fname'];
			 $tname=$row['lname'];
			 $tloc=$row['uid'];
			 $movid=$row['age'];
			 echo "<tr><td>$tid</tid><td>$tname</tid><td>$tloc</tid><td>$movid</tid></tr>";
			}
?>
