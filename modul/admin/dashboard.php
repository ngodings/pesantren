<?php
// mengaktifkan session php
session_start();
if(!isset($_SESSION['email'])) {
   header('location:index.php'); 
} else { 
   $email = $_SESSION['email']; 

}
?>
ini admin