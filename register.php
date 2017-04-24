<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script type="text/javascript" src="assets/js/validate_registration.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
   <link rel="stylesheet" type="text/css" href="assets/css/register.css">
</head>
<body>

<div class="container">
    <div class="illustration"><i class="icon ion-compose"></i></div>
			<div class="col-sm-12">
				<form class="form-horizontal" action="register.php" method="POST" onsubmit="return check_form();">
            <div class="form-group">
    <div class="row">
      <div class="col-sm-12">
<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require ('../connect_db.php');
    $errors = array();

    if(isset($_POST['submitted'])) {
    // First name
    if (empty($_POST['first_name'])) {
      $errors[] = 'Enter your first name.';}
      else
        {$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));}
    // Last name
    if (empty($_POST['last_name'])) {
      $errors[] = 'Enter your last name.';}
      else
        {$ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));}
    // Email
    if (empty($_POST['email'])) {
      $errors[] = 'Enter your email address.';}
      else
        {$e = mysqli_real_escape_string($dbc, trim($_POST['email']));}
    //Password
    if (!empty($_POST['pass1'])) {
      if ($_POST['pass1'] != $_POST['pass2']) {
        $errors[] = 'Passwords do not match.';}
        else
          {$p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));}
      }
    else {$errors[] = 'Enter your password.';}
    //Email registered
    if(empty($errors))
    {
      $q = "SELECT user_id FROM users WHERE email='$e'";
      $r = mysqli_query($dbc , $q);
      if (mysqli_num_rows($r) != 0) {
        $errors[] = 'Email address already registered. <a href="login.php">Login</a>';
      }
    }
    //Store the user data in the database table, display confirmation when registration succeeds,
    //Close the database connection.
    if (empty($errors)) {
      $q = "INSERT INTO users (first_name, last_name, email, pass, reg_date) VALUES('$fn', '$ln', '$e', SHA1('$p'), NOW())";
      $r = mysqli_query($dbc, $q);

      if ($r) {
        echo '<h1>Registered!</h1>
        <p>You are now registered.</p>
        <p><a href="login.php">Login</a></p>';
      }
      mysqli_close($dbc);
      exit();
    }
    else {
      echo '<h1>Error!</h1>
      <p id="err_msg">The following error(s) occured:<br>';
      foreach ($errors as $msg) {
        echo "- $msg<br>";
      }
      echo '<p>Please try again.</p>';
      mysqli_close($dbc);
    }
}
  }
?>
</div>
</div>
</div>
					<div class="form-group">
      					<label class="control-label col-sm-3" for="fname">First name:</label>
      						<div class="col-sm-9">          
        						<input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter your first name" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>" onblur="check_first_name();">
      						  <br>
                    <span class='error_text' id='first_name_error'></span>
                  </div>
    					</div>
					<div class="form-group">
      					<label class="control-label col-sm-3" for="lname">Last name:</label>
      						<div class="col-sm-9">          
        						<input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter your last name" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>" onblur="check_last_name();">
      						  <br>
                    <span class='error_text' id='last_name_error'></span>
                  </div>
    					</div>
    				<div class="form-group">
     					 <label class="control-label col-sm-3" for="email">Email:</label>
      						<div class="col-sm-9">
        						<input type="text" name="email" class="form-control" id="email" placeholder="Enter your email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" onblur="check_email();">
      						  <br>
                    <span class='error_text' id='email_error'></span>
                  </div>
    					</div>
    				<div class="form-group">
     					 <label class="control-label col-sm-3" for="pwd">Password:</label>
     						<div class="col-sm-9">          
       							<input type="password" name="pass1" class="form-control" id="pass1" placeholder="Enter password" value="<?php if(isset($_POST['pass1'])) echo $_POST['pass1']; ?>" onblur="check_pass1();">
      						  <br>
                    <span class='error_text' id='pass1_error'></span>
                  </div>
    					</div>
    				<div class="form-group">
     					 <label class="control-label col-sm-3" for="pwd">Reapeat password:</label>
     						<div class="col-sm-9">          
       							<input type="password" name="pass2" class="form-control" id="pass2" placeholder="Repeat password" value="<?php if(isset($_POST['pass2'])) echo $_POST['pass2']; ?>" onblur="check_pass2();">
      						  <br>
                    <span class='error_text' id='pass2_error'></span>
                  </div>
    					</div>
    					<div class="form-group">        
     						<div class="col-sm-12">
        						<button type="submit" value="Register" action="register.php" name="submitted" class="btn btn-primary">Register</button>
      						</div>
    					</div>
  					</form>
            <img class="img-responsive" src="assets/img/background2.gif">
			</div>
		</div>
</body>
</html>