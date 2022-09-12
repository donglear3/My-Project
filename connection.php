<?php
  $hostname = "sql209.epizy.com";
  $username = "epiz_1234567";
  $password = "acc_deteails_pass";
  $dbname = "Databse Name_testDB";
  
  $conn = mysqli_connect($hostname,$username,$password,$dbname);
  
  if($conn)
  {
    echo "Connection Access";
  }
  else
  {
    echo "Connection Faild";
  }
?>
