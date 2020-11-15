 
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


      }
      .success{
        color: #90ee90;
      }
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
    
    