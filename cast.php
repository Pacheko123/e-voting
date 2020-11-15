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
          Welcome <b><?php echo $_SESSION['SESS_NAME']; ?></b>



     </div>
   </div>
<?php

include ('connection.php');

       //$id = $_REQUEST['asp_id'];

//getting userid of the data from url



$id = $_GET['asp_id']; 
$sess=$_SESSION['SESS_NAME'];
//$sql=mysqli_query($con,'SELECT * FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status="voted"');




	
if(isset($_POST['cast'])){
	
      $check= mysqli_query($con, "SELECT * FROM voters WHERE username= '$sess' AND status='voted'");
      if(mysqli_num_rows($check)>0){
    echo" You have already voted ";
  exit();
}
        

	$vote=mysqli_query( $con,"UPDATE aspirant SET vote=vote+1 WHERE asp_id='$id'");

  $user=mysqli_query( $con,"UPDATE voters SET status='voted' WHERE username= '$sess'");

   if ($vote) {
   
   echo "<div class='alert alert-success tex-center'>You voted Successfully.<img src='images/icon_success1.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;' style='align-text:center;'></div>
                <a href='../components/addServices.php'>Home</a>";
}
else{
    echo "Error: ".$vote."<br />". $con->error;
    }

        }
else{
            $aspirant = "select * from aspirant where asp_id='$id'";
            $results = $con->query("$aspirant");
            $vote = $results->fetch_assoc();
            $asp_name= $vote['asp_name'];
            $asp_id = $vote['asp_id'];

                echo "
            <form method='post'>

      
     
    
                <div class='text-center' >
                    You have resolved to vote for <br>Aspirant: <b>$asp_name</b>,<br> Registration N0.  :<tt class='font-italic font-weight-bold'>$asp_id</tt>.<br> Are you sure?
                    <div class='text-center mt-2'>
                    
                        <a href='voter.php' class='btn btn-success'>Cancel</a>
                        <input type='submit' name='cast' id='delete' value='cast'  class='btn btn-danger'/> 
                    </div>
                </div>
            </form> ";
        }
?>
<?php
include 'footer.php';
?>
<!DOCTYPE html>
<html>
<head>
  <style>
      .error{
        color: #ff726f;
      }
      .success{
        color: #90ee90;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <title></title>
</head>
<body>

</body>
</html>