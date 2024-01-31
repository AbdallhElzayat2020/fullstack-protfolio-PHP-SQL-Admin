<?php
     session_start();
     require_once "./libraryback/protfolio.php";
     $res = DeletePro($proid = $_GET["proid"]);
     if ($res == 1) {
          header("location:allprotfolio.php");
     } else {
     
     }