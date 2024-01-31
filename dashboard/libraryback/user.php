<?php
     // REGISTER
     function register( $name , $email , $password )
     {
          $host = "localhost";
          $user = "root";
          $pass = "";
          $db_name = "protfolio_full";
          $con = mysqli_connect($host , $user , $pass , $db_name);
          $sql = "insert into user (name,email,password) values ('$name','$email','$password')";
          $query = mysqli_query($con , $sql);
          $res = mysqli_affected_rows($con);
          if ($res == 1) {
               return true;
          } else {
               return false;
          }
     }
     
     // LOGIN
     function login( $email , $password )
     {
          $host = "localhost";
          $user = "root";
          $pass = "";
          $db_name = "protfolio_full";
          $con = mysqli_connect($host , $user , $pass , $db_name);
          $sql = "select * from user where email='$email'&& password='$password' ";
          $query = mysqli_query($con , $sql);
          $res = mysqli_fetch_assoc($query);
          return $res;
     }
     