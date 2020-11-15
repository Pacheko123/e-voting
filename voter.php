<?php
if(!isset($_SESSION)) {
session_start();
  }
    include "auth.php";
    include "header_voter.php";
    include('include/static.php');
    include('connection.php');

    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-8" >
          Welcome <b><?php echo $_SESSION['SESS_NAME']; ?></a>

     </div>
   </div>



<!-- </div> -->
<!-- </div> -->
<!-- <div class="container-fluid"> -->

<?php
$count = 1;
$result=mysqli_query($con,"SELECT * FROM aspirant WHERE asp_seat='chairperson'  "); ?>

<div class="container">
 <form>
  <div class="row display-asp">
 <?php while ($row=mysqli_fetch_array($result)){
          ?>

    <div class="card border-success mb-3 col-md-4" style="max-width: 20rem;">
      <div class="card-header"><?php echo $row['asp_name']; ?></div>
      <div class="card-body text-success">
        <h5 class="card-title"><?php echo $row['asp_seat']; ?></h5>
        <p class="card-text"><?php echo $row['party']; ?></p>

        <!-- <input type="radio" name="1" value="1"> -->
        <input type="radio" name="2" value="<?php echo $row['asp_id']; ?>">
      </div>

    </div>

    <?php }?>
  </div>
  </form>
</div>

<div class="text-right">
  <a href='cast.php?asp_id=<?php echo $row['asp_id']; ?>' class="btn btn-dark"> CAST</a>

</div>



<!-- Application for a position modal -->
<form method="post">
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Submit your application</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="fname">
          <label data-error="wrong" data-success="right" for="orangeForm-name"  >Full name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" id="orangeForm-email" class="form-control validate" name="phone" >
          <label data-error="wrong" data-success="right" for="orangeForm-email" >Phone Number</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" id="orangeForm-pass" class="form-control validate" name="adm">
          <label data-error="wrong" data-success="right" for="orangeForm-pass" >Admission Number</label>
        </div>
        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" id="orangeForm-pass" class="form-control validate" name="year">
          <label data-error="wrong" data-success="right" for="orangeForm-pass" >Year Of study</label>
        </div>
        <select class="browser-default custom-select custom-select-lg mb-3" name="seat">
          <option selected>Select a seat to contest</option>
          <option value="chairperson">Chairperson</option>
          <option value="Secretary general">Secretary General</option>
          <option value="Academics">Academics</option>
          <option value="Entertainment">Entertainment</option>
    </select>
    <select class="browser-default custom-select custom-select-lg mb-3" name="party">
          <option selected>Select a political party</option>
          <option value="Jubilee">Jubilee</option>
          <option value="Alliance">Alliance</option>
          <option value="Big Fish">Big Fish</option>
          <option value="Democrats">Democrats</option>
    </select>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success" name="send">Submit Application</button>
      </div>
    </div>
  </div>
</div>
</form>

<?php
  if (isset($_POST['send'])) {
    $name = $_POST['fname'];
    $phone = $_POST['phone'];
    $adm = $_POST['adm'];
    $seat = $_POST['seat'];
      $party = $_POST['party'];
        $year = $_POST['year'];

    $query = "INSERT INTO aspirant (asp_name,phone,asp_adm,asp_seat,party,year) VALUES('$name','$phone','$adm','$seat' ,'$party', '$year')";
    $result = mysqli_query($con,$query);

    if($result){
      
echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hello!</strong> Your application has received. Thank you we will keep in touch.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

    }
  }
 ?>



<!-- scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript">// Animations init
  new WOW().init();
</script>


    <!-- <h3>Make a Vote </h3>
    <form action="submit_vote.php" name="vote" method="post" id="myform" >
    <center><font size='6'> What is your favorite political party? <BR>
    <input type="radio" name="lan" value="BJP">  BJP<BR>
    <input type="radio" name="lan" value="CONGRESS">CONGRESS<BR>
    <input type="radio" name="lan" value="AAP">   AAP<BR>
    <input type="radio" name="lan" value="NOTA">  TMC<BR>
    <input type="radio" name="lan" value="NIRDLIY">  NIRDLIY<BR>
    </font></center><br>
    <?php global $msg; echo $msg; ?>
    <?php global $error; echo $error; ?>
    <center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
    </form> -->
