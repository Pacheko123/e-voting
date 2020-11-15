<?php include("include/static.php");
include"connection.php"; ?>


<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar ">
<!-- Navbar brand -->
<div class="container">
  <a class="navbar-brand" href="">Digital Voter.</a>
    <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class='nav-item'>
          <a class="nav-link" href="view.php">HOME</a>
        </li>
        <li class='nav-item'>
          <a class="nav-link" href="view.php">VIEW RESULTS</a>
        </li>
        <li class='nav-item'>
          <a class="nav-link" href="login.php">CREATE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ASPIRANTS</a>
        </li>
      </ul>

    </div>
    <!-- Collapsible content -->
</div>
</nav>
<?php 
$count = 1;
$result=mysqli_query($con,"SELECT * FROM aspirant WHERE vote>0 "); ?>

<div class="table-responsive text-nowrap">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Admission</th>
          <th scope="col">Political Party</th>  
         <!-- <th scope="col">Phone</th> -->
        <th scope="col">Seat</th>
        <th scope="col">Year of Study</th>
        <th scope="col">Vote</th>
     

      </tr>
    </thead>
    <tbody>
      <tr>
        <!--th scope="row">1</th>-->
         <?php while ($row = mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['asp_name']; ?></td>
             <td><?php echo $row['asp_adm']; ?></td>
              <td><?php echo $row['party']; ?></td>
              <!-- <td><?php echo $row['phone']; ?></td> -->
               <td><?php echo $row['asp_seat']; ?></td>
                <td><?php echo $row['year']; ?></td>
               <!--td><a href="EditCategory.php?edit=<?php echo $row['service_category_id'];?>" class= "edit-btn"> <img src="../public/images/icon_content_small.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>-->
              <td> <?php echo $row['vote']; ?></td>
             </tr>
           <?php }?>
       
       
      </tr>
    
    </tbody>
  </table>

</div>