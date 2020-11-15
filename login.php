	<?php include "header.php";
		if(!isset($_SESSION)) {
		session_start();
		}
		if (isset($_SESSION['SESS_NAME'])!="") {
			header("Location: admin.php");
		}
	?>
	<br>
	<center>
	<legend> <h3>Login for Voting </h3></legend>
	<br>
	</center>
	<?php global $nam; echo $nam; ?>
	<?php global $error; echo $error; ?>
	<br>


		<div class="container">
			<div class="row">
				<div class="col-md-5 offset-md-4">
				<!-- Default form login -->
				<form class="text-center border border-light p-5" action="login_action.php" method="post">

    			<p class="h4 mb-4">Sign in</p>

    			<!-- Email -->
    			<input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="username" required>

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password" required>

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
    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit" name="login">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="register.php">Register</a>
    </p>

</form>
</div>
</div>
<!-- Default form login -->
</div>
