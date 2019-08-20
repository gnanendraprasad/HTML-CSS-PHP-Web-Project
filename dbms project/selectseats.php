<html>
<head>
<title>select seats</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/all.css">
<style>
table, th, td {
color: white;
}

h2, h1, h3 {
color:white;
}

.button {
    background-color:w3-teal; /* Green */
    border: none;
    color: w3-teal;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button2 {
    background-color:008CBA; 
    color: white; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}
b{
color: white;
}
</style>
</head>
<body style="background-image:url('images/jp.jpg')">
<h1> <center>Please select your Seats!</h1>
<center>
<?php
include('session.php');
 $conn=mysqli_connect("localhost","root","","ticket_booking");
  $msg="";
  $data="";
  
    if(isset($_GET['data']))
    {
        $data = $_GET['data'];
     }

   $data2="";
    if(isset($_GET['data1']))
    {
        $data1= $_GET['data1'];
     }$data3="";
	  if(isset($_GET['data2']))
    {
        $data2= $_GET['data2'];
     }
	  if(isset($_GET['data3']))
    {
        $data3= $_GET['data3'];
     }
	 echo "<b>movie id :$data3</b><br>";
	 echo "<b>date:$data</b><br>";
  echo "<b>show time :$data1</b><br>";
  echo "<b>theatre id :$data2</b>";
  echo "<br><br>";
  
  
		$ticks1="";
		$sql="select * from tickets where tid='$data2' and date1='$data' and time1='$data1' ";
        if(mysqli_query($conn,$sql))
        {
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($res))
            {       
		            
                    
                    $ticks1.=$row['seats']." ";
                  
			}
	if($ticks1!=""){
     echo "<div id=`id01`class=`w3-modal`>";
    echo '<div class="w3-modal-content w3-animate-bottom w3-card-4">';
    echo '<header class="w3-container w3-teal">';
     echo '<span onclick="this.parentElement.style.display=`none`"class="w3-button w3-large w3-display-topright">&times;</span>';

	 echo   '<h3>seats ->'.$ticks1.' <- are already booked. please book other seats</h3>';
     echo  '</header>';
     echo '</div></div></div>';			
            }
		}
        else{
            $msg.="Query failed";
		}
		
		
		echo '<div class="w3-container">';

    
      

?>



<table border="0" width="370" height="500">
<tr><th>A</th><th>B</th><th>C</th><th>D</th><th>E</th><th>F</th><th>G</th><th>H</th><th>I</th></tr>
<form action="" method="post">
<label class="heading"></label>
<tr>
<td><input type="checkbox" name="seats[]" value="1a"><label> 1</label></td>
<td><input type="checkbox" name="seats[]" value="1b"><label> 1</label></td>
<td><input type="checkbox" name="seats[]" value="1c"><label> 1</label></td>
<td><input type="checkbox" name="seats[]" value="1d"><label> 1</label></td>
<td><input type="checkbox" name="seats[]" value="1e"><label> 1</label></td>
<td><input type="checkbox" name="seats[]" value="1f"><label> 1</label></td>
<td><input type="checkbox" name="seats[]" value="1g"><label> 1</label></td>
<td><input type="checkbox" name="seats[]" value="1h"><label> 1</label></td>
<td><input type="checkbox" name="seats[]" value="1i"><label> 1</label></td>
</tr>

<tr>
<td><input type="checkbox" name="seats[]" value="2a"><label> 2</label></td>
<td><input type="checkbox" name="seats[]" value="2b"><label> 2</label></td>
<td><input type="checkbox" name="seats[]" value="2c"><label> 2</label></td>
<td><input type="checkbox" name="seats[]" value="2d"><label> 2</label></td>
<td><input type="checkbox" name="seats[]" value="2e"><label> 2</label></td>
<td><input type="checkbox" name="seats[]" value="2f"><label> 2</label></td>
<td><input type="checkbox" name="seats[]" value="2g"><label> 2</label></td>
<td><input type="checkbox" name="seats[]" value="2h"><label> 2</label></td>
<td><input type="checkbox" name="seats[]" value="2i"><label> 2</label></td>
</tr>

<tr>
<td><input type="checkbox" name="seats[]" value="3a"><label> 3</label></td>
<td><input type="checkbox" name="seats[]" value="3b"><label> 3</label></td>
<td><input type="checkbox" name="seats[]" value="3c"><label> 3</label></td>
<td><input type="checkbox" name="seats[]" value="3d"><label> 3</label></td>
<td><input type="checkbox" name="seats[]" value="3e"><label> 3</label></td>
<td><input type="checkbox" name="seats[]" value="3f"><label> 3</label></td>
<td><input type="checkbox" name="seats[]" value="3g"><label> 3</label></td>
<td><input type="checkbox" name="seats[]" value="3h"><label> 3</label></td>
<td><input type="checkbox" name="seats[]" value="3i"><label> 3</label></td>
</tr>

<tr>
<td><input type="checkbox" name="seats[]" value="4a"><label> 4</label></td>
<td><input type="checkbox" name="seats[]" value="4b"><label> 4</label></td>
<td><input type="checkbox" name="seats[]" value="4c"><label> 4</label></td>
<td><input type="checkbox" name="seats[]" value="4d"><label> 4</label></td>
<td><input type="checkbox" name="seats[]" value="4e"><label> 4</label></td>
<td><input type="checkbox" name="seats[]" value="4f"><label> 4</label></td>
<td><input type="checkbox" name="seats[]" value="4g"><label> 4</label></td>
<td><input type="checkbox" name="seats[]" value="4h"><label> 4</label></td>
<td><input type="checkbox" name="seats[]" value="4i"><label> 4</label></td>
</tr>

<tr>
<td><input type="checkbox" name="seats[]" value="5a"><label> 5</label></td>
<td><input type="checkbox" name="seats[]" value="5b"><label> 5</label></td>
<td><input type="checkbox" name="seats[]" value="5c"><label> 5</label></td>
<td><input type="checkbox" name="seats[]" value="5d"><label> 5</label></td>
<td><input type="checkbox" name="seats[]" value="5e"><label> 5</label></td>
<td><input type="checkbox" name="seats[]" value="5f"><label> 5</label></td>
<td><input type="checkbox" name="seats[]" value="5g"><label> 5</label></td>
<td><input type="checkbox" name="seats[]" value="2h"><label> 5</label></td>
<td><input type="checkbox" name="seats[]" value="5i"><label> 5</label></td>
</tr>

<tr>
<td><input type="checkbox" name="seats[]" value="6a"><label> 6</label></td>
<td><input type="checkbox" name="seats[]" value="6b"><label> 6</label></td>
<td><input type="checkbox" name="seats[]" value="6c"><label> 6</label></td>
<td><input type="checkbox" name="seats[]" value="6d"><label> 6</label></td>
<td><input type="checkbox" name="seats[]" value="6e"><label> 6</label></td>
<td><input type="checkbox" name="seats[]" value="6f"><label> 6</label></td>
<td><input type="checkbox" name="seats[]" value="6g"><label> 6</label></td>
<td><input type="checkbox" name="seats[]" value="6h"><label> 6</label></td>
<td><input type="checkbox" name="seats[]" value="6i"><label> 6</label></td>
</tr>

<tr>
<td><input type="checkbox" name="seats[]" value="7a"><label> 7</label></td>
<td><input type="checkbox" name="seats[]" value="7b"><label> 7</label></td>
<td><input type="checkbox" name="seats[]" value="7c"><label> 7</label></td>
<td><input type="checkbox" name="seats[]" value="7d"><label> 7</label></td>
<td><input type="checkbox" name="seats[]" value="7e"><label> 7</label></td>
<td><input type="checkbox" name="seats[]" value="7f"><label> 7</label></td>
<td><input type="checkbox" name="seats[]" value="7g"><label> 7</label></td>
<td><input type="checkbox" name="seats[]" value="7h"><label> 7</label></td>
<td><input type="checkbox" name="seats[]" value="7i"><label> 7</label></td>
</tr>

<tr>
<td><input type="checkbox" name="seats[]" value="8a"><label> 8</label></td>
<td><input type="checkbox" name="seats[]" value="8b"><label> 8</label></td>
<td><input type="checkbox" name="seats[]" value="8c"><label> 8</label></td>
<td><input type="checkbox" name="seats[]" value="8d"><label> 8</label></td>
<td><input type="checkbox" name="seats[]" value="8e"><label> 8</label></td>
<td><input type="checkbox" name="seats[]" value="8f"><label> 8</label></td>
<td><input type="checkbox" name="seats[]" value="8g"><label> 8</label></td>
<td><input type="checkbox" name="seats[]" value="8h"><label> 8</label></td>
<td><input type="checkbox" name="seats[]" value="8i"><label> 8</label></td>
</tr>

<tr>
<td><input type="checkbox" name="seats[]" value="9a"><label> 9</label></td>
<td><input type="checkbox" name="seats[]" value="9b"><label> 9</label></td>
<td><input type="checkbox" name="seats[]" value="9c"><label> 9</label></td>
<td><input type="checkbox" name="seats[]" value="9d"><label> 9</label></td>
<td><input type="checkbox" name="seats[]" value="9e"><label> 9</label></td>
<td><input type="checkbox" name="seats[]" value="9f"><label> 9</label></td>
<td><input type="checkbox" name="seats[]" value="9g"><label> 9</label></td>
<td><input type="checkbox" name="seats[]" value="9h"><label> 9</label></td>
<td><input type="checkbox" name="seats[]" value="9i"><label> 9</label></td>
</tr>
</table>
<br>
<br>
<input type="submit" name="submit" Value="Submit"/>
<br>
<?php 
 $conn = new mysqli("localhost","root","","ticket_booking") or die("Connect failed: %s\n". $conn -> error);

if(isset($_POST['submit'])){
if(!empty($_POST['seats'])) {

$checked_count = count($_POST['seats']);
echo "<b>You have selected following ".$checked_count." seat(s): </b><br><br>";
$seats2="";
foreach($_POST['seats'] as $selected) 
{
	$seats2.=$selected;
echo "<b> ".$selected ." </b> ";
}

$flag=1;
$ss1 = implode(" ",$_POST['seats']);
$ss2 = explode(" ",$ss1);
$bs1=  explode(" ",$ticks1);
for($a=0;$a<count($ss2);$a++)
{
for($b=0;$b<count($bs1);$b++)
{
	if($ss2[$a]==$bs1[$b])
	{
		$flag=0;
	}
}
}
if($flag==1)
{
echo "<br><br><b>Note :</b> <span><b>If You are sure then click confirm </b></span>";

echo"<br>";
$data11 = implode(" ",$_POST['seats']); 
echo "<br><a href='confirm.php?data=$data11&data2=$data&data3=$data1&data4=$data2&data5=$data3'class='button button2'><span>confirm</span></a><br>";
}
}
else{
echo "<b>Please Select Atleast One Seat.</b>";
}
}
?>
<br><br><br>
 </form> 
 </body>
 </html>

	