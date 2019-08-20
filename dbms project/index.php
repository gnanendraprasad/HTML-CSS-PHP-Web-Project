<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8"name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <title>Login form</title>

  
      <link rel="stylesheet" href="css/style.css">

  
</head>


<body>
<div class="w3">
<h1 style="background-color:white"><center>LOGIN</h2><center>
<a href="admin1.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right" style="color:white">Admin Login >></a>
    </div>



<div class="login-page">
<div class="form">
    <form class="register-form" action="index.php" method="post">
	  <input type="text" name="fnme" placeholder="first name"/>
      <input type="text" name="lnme" placeholder="last name"/>
	  <input type="text" name="uid" placeholder="user id"/>
	  <input type="password" name="pswd" placeholder="password"/>
      <input type="number" name="age" placeholder="Age"/>
      <input type="submit" name="submit" value="REGISTER" />
	   <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="" method="post">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="submit" name="login"/>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>

 

  <script src='js/js1.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
<?php  
	
      $myusername = "";
	  $mypassword = "";
    $conn = new mysqli("localhost","root","","ticket_booking") or die("Connect failed: %s\n". $conn -> error);

  if(isset($_POST["submit"]))
  {  
   if(!empty($_POST['fnme']) && !empty($_POST['lnme']) && !empty($_POST['uid']) && !empty($_POST['pswd']) && !empty($_POST['age']))
   {  
    $firstname =$_POST['fnme'];  
    $lastname=$_POST['lnme'];  
    $userid =$_POST['uid']; 
    $password =$_POST['pswd']; 
    $uage=$_POST['age']; 

    $query=mysqli_query($conn,"select * from register where uid='".$userid."'");
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
     $sql="INSERT INTO register(fname,lname,uid,passwd,age) VALUES('$firstname','$lastname','$userid','$password','$uage')";  
  
     $result=mysqli_query($conn,$sql);  
     if($result)
     {  
	echo '<div class="w3-container">';

    
    echo "<div id=`id01`class=`w3-modal`>";
    echo '<div class="w3-modal-content w3-animate-bottom w3-card-4">';
    echo '<header class="w3-container w3-teal">';
     echo '<span onclick="this.parentElement.style.display=`none`"class="w3-button w3-large w3-display-topright">&times;</span>';

	 echo   '<h3>Registered Successfully !</h3>';
     echo  '</header>';
     echo '</div></div></div>';  
     }
     else 
     {  
      echo "Failure!";  
     }  
  
    }
	else{
		echo '<div class="w3-container">';
        echo '<div class="w3-panel w3-red w3-display-container w3-card-4">';

		echo '<span onclick="this.parentElement.style.display=`none`"class="w3-button w3-red w3-large w3-display-topright">&times;</span>';

		echo '<h3>Unsuccessful</h3>';
		echo '<p>account alreay exists.please try again with another</p>';
		echo '</div></div>';
	}
  
   } 
   else
  {  
    echo '<div class="w3-container">';
        echo '<div class="w3-panel w3-red w3-display-container w3-card-4">';

		echo '<span onclick="this.parentElement.style.display=`none`"class="w3-button w3-red w3-large w3-display-topright">&times;</span>';

		echo '<h3>Unsuccessful</h3>';
		echo '<p>ALL FIELDS ARE MANDATORY.</p>';
		echo '</div></div>';
  }  
 }  
 

  session_start();
if(isset($_POST['login']))
	{
		if(!empty($_POST['username'])&&!empty($_POST['password']))
		{
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT uid FROM register WHERE uid = '$myusername' and passwd = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         echo "successful";
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
      }
		else{
		echo '<div class="w3-container">';
        echo '<div class="w3-panel w3-red w3-display-container w3-card-4">';

		echo '<span onclick="this.parentElement.style.display=`none`"class="w3-button w3-red w3-large w3-display-topright">&times;</span>';

		echo '<h3>Unsuccessful</h3>';
		echo '<p>your user name or password is invalid.</p>';
		echo '</div></div>';
     
		}
		}
	  else {
		  echo '<div class="w3-container">';
        echo '<div class="w3-panel w3-red w3-display-container w3-card-4">';

		echo '<span onclick="this.parentElement.style.display=`none`"class="w3-button w3-red w3-large w3-display-topright">&times;</span>';

		echo '<h3>Unsuccessful</h3>';
		echo '<p>ALL FIELDS ARE MANDATORY.</p>';
		echo '</div></div>';
		  
	}
	}
	  ?>
   
