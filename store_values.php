
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webregistration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$yourFirstName = $conn->real_escape_string($_POST['first_name']);
$yourEmail = $conn->real_escape_string($_POST['email']);
$yourLastName = $conn->real_escape_string($_POST['last_name']);
$yourPassword = $conn->real_escape_string($_POST['password']);
$yourUsername = $conn->real_escape_string($_POST['Username']);
$yourDateOfBirth = $conn->real_escape_string($_POST['dobtime']);
$yourSecretword = $conn->real_escape_string($_POST['secret_word']);
$yourGender = $conn->real_escape_string($_POST['gender']);
#$sql = "INSERT INTO trial1 (Name, Email) VALUES ('".$yourFirstName."', '".$yourEmail."')";
$sql = "INSERT INTO `registerform`(`First_Name`, `Last_ Name`, `Email`, `Username`, `Password`, `Gender`, `DOB`, `Secret_word`) VALUES ('".$yourFirstName."', '".$yourLastName."','".$yourEmail."', '".$yourUsername."','".$yourPassword."', '".$yourGender."','".$yourDateOfBirth."', '".$yourSecretword."')";

if ($conn->query($sql) === TRUE) {
    #echo "Registration Complete";
	header("Location: message.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--<div id="msg" name="message">Congratulations You Sign Up successfully!!</div>-->
