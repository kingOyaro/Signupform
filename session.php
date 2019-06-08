<?php
// mysqli_connect() function opens a new connection to the MySQL server. 
$conn = mysqli_connect("localhost", "root", "", "webregistration"); 
session_start();// Starting Session 
// Storing Session 
$user_check = $_SESSION['login_user']; 
// SQL Query To Fetch Complete Information Of User 
$query = "SELECT * from registerform where Username = '".$user_check."'"; 
$ses_sql = mysqli_query($conn, $query); 
$row = mysqli_fetch_assoc($ses_sql); 
$login_session = "First_Name: " . $row["First_Name"]. "\n Last_Name: " . $row["Last_ Name"]."\n Email: " . $row["Email"]."\n Username: " . $row["Username"]."\n Gender: " . $row["Gender"]."\n DateOfBirth: " . $row["DOB"]."<br/>";

$login_sessions =  $row["First_Name"]."<br/>";

?>
