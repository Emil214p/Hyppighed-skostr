<?php
    $servername='localhost';
    $username='aemk01_skp-dp_sd';
    $password='q452zp4z';
    $dbname = "aemk01_skp_dp_sde_dk";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }