<?php
if(!isset($_SESSION)) {
session_start();
}
include('include/static.php');
include "auth.php";
include "header_voter.php";
?>
<br>
<br>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4>
<?php global $error; echo $error;?>




<div class="container">
  <div class="row">
    <div class="col-md-5 offset-md-4">
    <!-- Change password form-->
    <form class="text-center border border-light p-5" action="change_pass_action.php" method="post">
      <p class="h4 mb-4">Change Password</p>
      <input type="password" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Current password" name="cpassword">
      <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="New Password" name="npassword">
      <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Confirm new password" name="cnpassword">
      <button class="btn btn-info btn-block my-4" type="submit" name="cpass">UPDATE</button>
    </form>
  </div>
</div>
<!-- Default form login -->
</div>





<script type="text/javascript">
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("cpassword","req","Please enter Current Password");
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password");
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password");
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>
