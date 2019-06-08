<?php
include('session.php'); 
if(!isset($_SESSION['login_user']) || !isset($_SESSION['login_password'])){
  echo "Error Invalid password or username";
  header("location: Loginform.html"); // Redirecting To Home Page 
}
?>
<!DOCTYPE html>
<html>
	<head>
	<style>

		body
{
    background-color: lightblue;
    
}
a
{
    color: yellow;
    font-family:Tahoma, Geneva, sans-serif;
    margin-left: 30px;
}
.congs
{
    background: rgba(44,62,80,0.7);
    height:auto;
    width: 100%;
}

.signup
{
    background:rgba(44, 62, 80, 0.7);
    padding:40px;
    width:270px;
    margin:auto;
    margin-top:80px;
    height:auto;
    min-height:430px;
    margin-left:180px;
    margin:0 auto;
    margin-top:90px;
}
form
{
    width: 240px;
    text-align: center;
}
input
{
    
    width: 240px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-family: 'Play', sans-serif;
    font-size: 16px;
    font-weight: 200px;
    padding: 10px 0;
    transition: border 0.5s;
    outline: none;
    color: #fff;
}
#accept
{
    border: none;
    width: 190px;
    background: white;
    color: #000;
    font-size: 16px;
    line-height: 25px;
    padding: 10px 0;
    border-radius: 15px;
}
	</style>

	 <title>Home</title>
	 <!--<link href="profile.css" rel="stylesheet" type="text/css" />-->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-	  ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		 <div class="congs">
		 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">Dashboard</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">

				      <li class="nav-item active">
				        <a class="nav-link" href="#">Order  <span class="sr-only">(current)</span></a>
				      </li>

				      <li class="nav-item active">
				        <a class="nav-link" href="#">Welcome <?php echo $login_sessions;?></a>
				      </li>

				      <li class="nav-item active">
				        <a class="nav-link" href="logout.php">Logout  <span class="sr-only">(current)</span></a>
				      </li>
				     
				      </li>
				      
				    </ul>
				  </div>
			</nav>
		 </div>

		 <div class="signup">
				<form action="store_values.php" method="POST">
			    <h2 style="color: #fff;">Sign Up</h2>
			    <input type="text" name="first_name" placeholder="First name" required><br><br>
			    <input type="text" name="last_name" placeholder="Last name" required><br><br>
			    <input type="email" name="email" placeholder="Email"required><br><br>
			    <input type="text" name="Username" placeholder="Username" required><br><br>
			    <input type="password" name="password" placeholder="Password" required><br><br> 
				<label for="gender" id="label">Gender	</label>
				<input type="radio" class="data" name="gender" value="male" required="true" checked="true"/>Male
				<input type="radio" class="data" name="gender" value="female" required="true"/>Female</br></br>
			    <label for="role" id="label">Role   </label>
			    <input type="radio" class="data" name="role" value="student" required="true" checked="true"/>Student
			    <input type="radio" class="data" name="role" value="staff" required="true"/>Staff</br></br>

				</br>
				<label for="dob" id="label">Date of Birth	</label>
				<input type="date" class="data" name="dobtime" required="true"/></br></br>

			    <input type="password" name="secret_word" placeholder="Secret Word" required><br><br>   
			    
			    <input type="submit" id="accept" value="Register" /><!--onclick=""--><br><br>
			        
			        Already have account?<a href="Loginform.html" style="text-decoration: none; font-family: 'Play', sans-serif; color: yellow;">&nbsp;Log In</a>
			    </form>
    
    </div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>