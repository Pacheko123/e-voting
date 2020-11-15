<<<<<<< HEAD
<?php 
$count = 1;
$result=mysqli_query($con,"SELECT *FROM aspirant WHERE vote>0 "); ?>

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
         <?php while ($row=mysqli_fetch_array($result)){
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
=======
<?php
if(!isset($_SESSION)) {
session_start();
}
include('include/static.php');
include "auth.php";
include "header_voter.php";
?>
<center><h3> Preliminary results</h3></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM languages' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
echo'	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Aspirant</th>
      <th scope="col">Political Party</th>
			<th scope="col">Tally</th>';

			while($row = mysqli_fetch_assoc($member)) {
				// $id=$row->lan_id;
				// $name=$row->fullname;
				// $party=$row->about;
				// $vote=$row->votecount;

    echo'</tr>
  </thead>
  <tbody>
    <tr>';
      echo'<td>'.$row['lan_id'].'</td>';
			echo'<td>'.$row['fullname'].'</td>';
			echo'<td>'.$row['about'].'</td>';
			echo'<td>'.$row['votecount'].'</td>';
    echo'</tr>';
	}
  echo'</tbody>
</table>';

}
?>
>>>>>>> 577552013fa8cfd54354f05695ac72a6775473a4
