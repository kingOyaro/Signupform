<?php
session_start(); 
if(session_destroy()) // Destroying All Sessions 
{ 
  header("Location: Loginform.html"); // Redirecting To Home Page 
}
?>