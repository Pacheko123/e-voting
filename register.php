<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<br>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>

<div class="container">
	<div class="row">
		<div class="col-md-5 offset-md-4">
		<!-- Default form login -->
		<form class="text-center border border-light p-5" action="reg_action.php" method="post">

			<p class="h4 mb-4">Create Account</p>

			<!-- Email -->
			<input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="username">
			<input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Firstname" name="firstname">
			<input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Lastname" name="lastname">

<!-- Password -->
<input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">
<input type="password" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Confirm password" name="c_password">

<div class="d-flex justify-content-around">
		<div>
				<!-- Remember me -->
				<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
						<label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
				</div>
		</div>
		<div>
				<!-- Forgot password -->
				<a href="">Forgot password?</a>
		</div>
</div>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div>
<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit" name="submit">REGISTER</button>

<!-- Register -->
<p>Have account?
		<a href="login.php">Log In</a>
</p>

</form>
</div>
</div>
<!-- Default form login -->
</div>








<script type= "text/javascript" >
 var frmvalidator = new Validator("myform");
 frmvalidator.addValidation("firstname","req","Please enter student firstname");
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname");
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username");
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password");
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>
