<?php include('header.php');?>
<?php include('database.php');?>


<?php
 		if(isset($_GET['message'])){
 			echo "<h6>".$_GET['message']."</h6>";

 		}
 	?>
 	<?php
 		if(isset($_GET['insert_msg'])){
 			echo "<h6>".$_GET['insert_msg']."</h6>";

 		}
 	?>
 	 	<?php
 		if(isset($_GET['update_msg'])){
 			echo "<h6>".$_GET['update_msg']."</h6>";

 		}
 	?>
 	<?php
 		if(isset($_GET['delete_msg'])){
 			echo "<h6>".$_GET['delete_msg']."</h6>";

 		}
 	?>
<table class="table table-hover table-bordered" style="background-color: transparent;">
 		<thead>
 			<tr>
 				<th>Roll No</th>
 				<th>Full Name</th>
				 <th>Shift</th>
 				<th>1st Semister</th>
 				<th>2nd Semister</th>
 				<th>3rd Semister</th>
 				<th>4th Semister</th>
 				<th>5th Semister</th>
 				<th>6th Semister</th>
 				<th>7th Semister</th>
 				<th>8th Semister</th>
 				<th>Overall CGPA</th>
 				<th>Update</th>
 				<th>Delete</th>
 			</tr>
			<tbody id="table_content">
				<?php
				
				$query = "select * from `result_sheet`";

				$result = mysqli_query($connection, $query);

				if(!$result){
					die ("query failed".mysqli_error());
				}
				else{

					while($row = mysqli_fetch_assoc($result)){



						$overallCGPA = (
            				$row['1st Semister'] * 0.05 +
            				$row['2nd Semister'] * 0.05 +
            				$row['3rd Semister'] * 0.10 +
            				$row['4th Semister'] * 0.10 +
            				$row['5th Semister'] * 0.20 +
            				$row['6th Semister'] * 0.20 +
            				$row['7th Semister'] * 0.20 +
            				$row['8th semister'] * 0.10
        				);

        				// Update the Overall CGPA in the database
        				$updateQuery = "UPDATE `result_sheet` SET `Overall CGPA` = " . number_format($overallCGPA, 4) . " WHERE `Roll No` = '" . $row['Roll No'] . "'";
        				mysqli_query($connection, $updateQuery);

						?>
				<tr>
					<td><?php echo $row['Roll No']; ?></td>
					<td><?php echo $row['Full Name']; ?></td>
					<td><?php echo $row['Shift']; ?></td>
					<td><?php echo $row['1st Semister']; ?></td>
					<td><?php echo $row['2nd Semister']; ?></td>
					<td><?php echo $row['3rd Semister']; ?></td>
					<td><?php echo $row['4th Semister']; ?></td>
					<td><?php echo $row['5th Semister']; ?></td>
					<td><?php echo $row['6th Semister']; ?></td>
					<td><?php echo $row['7th Semister']; ?></td>
					<td><?php echo $row['8th semister']; ?></td>
					<td><?php echo number_format($overallCGPA, 4); ?></td>
					<td><a href="update_table.php?roll=<?php echo $row['Roll No']; ?>" class="btn btn-success">Update</td>
					<td><a href="delete_table.php?roll=<?php echo $row['Roll No']; ?>" class="btn btn-danger">Delete</td>

				</tr>

						
						<?php

					}
				}

				?>


			</tbody>
 			
 		</thead>
 	</table>
 	
 	
 	
 	


	<!-- Modal -->
	 <?php include('addStudentModel.php');?>
	 

<?php include('footer.php');?>