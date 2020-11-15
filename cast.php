<<<<<<< HEAD
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
=======
 
<?php
include ('connection.php');

       $id = $_REQUEST['asp_id'];

//getting userid of the data from url
  
$id = $_GET['asp_id']; 
	$asp_id = $_POST['asp_id'];

if(isset($_POST[''])){
	
       
        

	$vote=mysqli_query( $con,"UPDATE aspirant SET vote='' WHERE email='$email'");

   if ($user){
    header("Location:../admin/home.php");
   }
   else{
   	echo"failed to execute";
   }
 }

?>
<head>
     <link rel="stylesheet" href="./css/mountains.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Update Product</title>
    <style>
      .error{
        color: #ff726f;
        margin-left: 40%;
        padding: none;
        border-bottom: none;
        border-top: none;
        border-left: 1px solid red;
        border-right: 1px solid red;
        font-size: 10px;
        text-align: center;


>>>>>>> 577552013fa8cfd54354f05695ac72a6775473a4
      }
      .success{
        color: #90ee90;
      }
<<<<<<< HEAD
    </style>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <title></title>
</head>
<body>

</body>
</html>
=======
      .Error{
        color: #ff726f;
        background: white;
        border-radius: ;
        width: 30%;
       padding: 5px;
       align-items: center;
        border-bottom: none;
        border-top: none;
        border-left: 1px solid red;
        border-right: 1px solid red;
      
      }
      
    </style>
  </head>

<?php
        if(isset($Err)){
          echo "<div class='Error'> <a href='../admin/home.php'><img src='../public/images/back.png' alt='image' class='photo' style='width: 15px; height: 15px;border-radius: 300px; margin-top: 3%; '></a><br><h style='font-size: 10px;color:red; '><br>
          <img src='../public/images/icon_error1.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;margin-left:2%;'><br>
         $Err
          
          Failed Update.Please Go back and correct:
          </div>";

         
        
        }


      ?>
<?php
 if(isset($errfname)){
          echo "<div class='error'>$errfname</div>";
        }
        ?>
        <?php
     if(isset($errlname)){
          echo "<div class='error'>$errlname</div>";
        }
        ?>
        <?php
        if(isset($errphone)){
          echo "<div class='error'>$errphone</div>";
        }
        ?>
        <?php
         if(isset($errpass)){
          echo "<div class='error'>$errpass</div>";
        }
        ?>
        <?php
         if(isset($errusername)){
          echo "<div class='error'>$errusername</div>";
        }
        ?>
    
    
>>>>>>> 577552013fa8cfd54354f05695ac72a6775473a4
