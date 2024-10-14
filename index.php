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
					die("query Failed");
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
	 <?php include('addStudentModel.php');?>
	 

<?php include('footer.php');?>`P