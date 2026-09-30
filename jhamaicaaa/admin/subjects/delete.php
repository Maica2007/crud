<?php
session_start();
 include "../../config/database.php";
 
 //only admin and access this page.
 if(!isset($_SESSION["role"])  || $_SESSION["role"] != "admin"){
         header("location: ../../index.php");
         exit;
 }
 $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

 //delete SQL
 mysqli_query($conn, "DELETE FROM users WHERE id=$id and role='subject'");
 header('location: index.php');
 exit;


?>