<?php
   $db=mysqli_connect("localhost","root","","ticket_booking");
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select uid from register where uid ='$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['uid'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>