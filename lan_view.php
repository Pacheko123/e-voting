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
