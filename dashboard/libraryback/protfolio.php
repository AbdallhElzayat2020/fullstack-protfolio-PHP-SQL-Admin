<?php
     
     // Protfolio Section Functions
     
     // insert new Project in db
     function AddNewPro( $img , $desc , $user_id )
     {
          $host = "localhost";
          $user = "root";
          $pass = "";
          $db_name = "protfolio_full";
          $con = mysqli_connect($host , $user , $pass , $db_name);
          $sql = "insert into protfolio (img,description,user_id) values ('$img','$desc','$user_id')";
          mysqli_query($con , $sql);
          $res = mysqli_affected_rows($con);
          if ($res == true) {
               return true;
          } else {
               return false;
          }
     }
     
     // Get All Protfolios from db
     function GetAllPro()
     {
          $host = "localhost";
          $user = "root";
          $pass = "";
          $db_name = "protfolio_full";
          $con = mysqli_connect($host , $user , $pass , $db_name);
          $sql = "SELECT * FROM userprotfolio";
          $query = mysqli_query($con , $sql);
          $projects = [];
          while ($res = mysqli_fetch_assoc($query)) {
               $projects[] = $res;
          }
          return $projects;
     }
     
     //     delete projects from db
     function DeletePro( $user_id )
     {
          $host = "localhost";
          $user = "root";
          $pass = "";
          $db_name = "protfolio_full";
          $con = mysqli_connect($host , $user , $pass , $db_name);
          $sql = "delete from protfolio where id='$user_id'";
          mysqli_query($con , $sql);
          $res = mysqli_affected_rows($con);
          if ($res == true) {
               return true;
          } else {
               return false;
          }
     }
     
     //     Get Protfiolio by Id  from db
     function GetProtfiolio_Id( $id )
     {
          $host = "localhost";
          $user = "root";
          $pass = "";
          $db_name = "protfolio_full";
          $con = mysqli_connect($host , $user , $pass , $db_name);
          $sql = "select * from userprotfolio where id= '$id'";
          $query = mysqli_query($con , $sql);
          $res = mysqli_fetch_assoc($query);
          return $res;
     }
     
//   Update projects from db
     function updatePro( $id , $desc , $img )
     {
          $host = "localhost";
          $user = "root";
          $pass = "";
          $db_name = "protfolio_full";
          $con = mysqli_connect($host , $user , $pass , $db_name);
          $sql = "";
          mysqli_query($con , $sql);
          $res = mysqli_affected_rows($con);
          if ($res == true) {
               return true;
          } else {
               return false;
          }
     }