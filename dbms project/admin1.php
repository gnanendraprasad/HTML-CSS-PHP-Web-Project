<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login Form</title>
  
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(css/banner2.png);
	background-size: cover;

	z-index: 0;
}

.grad{
	position: absolute;
	top: 0px;
	left: 0px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.form{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.form input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.form input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.form input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.form input[type=submit]:hover{
	opacity: 0.8;
}

.form input[type=submit]:active{
	opacity: 0.6;
}

.form input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.form input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.form input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}

	
	
	.button {
  display: inline-block;
  border-radius: 0px;
 background-color: rgba(192,192,192,0.3);
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 20px;
  width: 120px;
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
}
.hvr-icon-back {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    position: relative;
    padding-left: 2.2em;
    -webkit-transition-duration: 0.1s;
    transition-duration: 0.1s;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>


  <div class="body"></div>
  a:link{
	  text-decoration: none;
  }
 		<div class="grad"><h1><a href="index.php" style="color:white"><< back</a></h1></div>
		
		<div class="header">
			
			<div>Admin <span> Login</span></div>
		</div>
		<br><br>
		<div class="form">
		<form action = "" method ="post">
				<input type="text" placeholder="Admin ID" name="adminname"><br>
				<input type="password" placeholder="Password" name="password"><br>
			<input type="submit" name="submit" value="Login" style="color:black">
			</form>
		
  <script src='js/js1.js'></script>
	
  
</body>
</html>
<?php
	
   $db = new mysqli("localhost","root","","ticket_booking") or die("Connect failed: %s\n". $db -> error);
	$hhhh=0;
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['adminname'])&&!empty($_POST['password']))
		{
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['adminname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "select adminid from admin where adminid = '".$myusername."' and apassword = '".$mypassword."'";
      $result = mysqli_query($db,$sql);
      
      $numrows=mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($numrows == 1) {
		 $hhhh=1;
        
      }
		else{
		
		echo '<br>YOUR NAME OR PASSWORD IS INVALID.';
		
     
		}
		}
	  else {
		
		echo '<br>ALL FIELDS ARE MANDATORY.';
	
		  
	}
	}
	echo "<br><br>";
	if($hhhh==1)
	{ 
		echo "<a href='addmovie1.php' class='button'><span>Add movie</span> </a>  <a href='addtheatre1.php'class='button'><span> Add theatre</span></a>";
		echo "<br><a href='dispt.php' class='button'><span>Display Theatres</span></a> </a><a href='dispm.php' class='button'><span>Display Movies</span></a><a href='dispu.php' class='button'><span>Display Users</span></a>";
		echo "<br><a href='deltheatre.php'class='button'><span> Delete theatre</span></a><a href='delmovie.php' class='button'><span>Delete movie</span></div>";
		
		
	}
	
?>

	  