<?php include('header.php');?>
<?php include('database.php');?>

<table class="table table-hover table-bordered table-strped">
 		<thead>
 			<tr>
 				<th>Roll No</th>
 				<th>Full Name</th>
 				<th>1st Semister</th>
 				<th>2nd Semister</th>
 				<th>3rd Semister</th>
 				<th>4th Semister</th>
 				<th>5th Semister</th>
 				<th>6th Semister</th>
 				<th>7th Semister</th>
 				<th>8th Semister</th>
 				<th>Overall CGPA</th>
 			</tr>
			<tbody id="table_content">
				<?php
				
				$query = "SELECT * FROM `result_sheet`";

				$result = mysqli_query(mysql: $connection,query: $query);

				if (!$result){
					die("query Failed".mysqli_error( ));
				}

				else{
					while($row = mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td><?php echo $row['Roll No']; ?></td>
						<td><?php echo $row['Full Name']; ?></td>
						<td><?php echo $row['1st Semister']; ?></td>
						<td><?php echo $row['2nd Semister']; ?></td>
						<td><?php echo $row['3rd Semister']; ?></td>
						<td><?php echo $row['4th Semister']; ?></td>
						<td><?php echo $row['5th Semister']; ?></td>
						<td><?php echo $row['6th Semister']; ?></td>
						<td><?php echo $row['7th Semister']; ?></td>
						<td><?php echo $row['8th semister']; ?></td>
						<td><?php echo $row['Overall CGPA']; ?></td>
				</tr>

				<?php
				}
					}




				
				?>
				
				
			</tbody>
 			
 		</thead>
 	</table>
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php');?>`P