	<?php include('header.php');?>
	<?php include('database.php');?>



	<?php

	if(isset($_GET['roll'])){
		$roll = $_GET['roll'];
		
		
		$query = "select * from `result_sheet` where `Roll No` = '$roll' ";

		$result = mysqli_query($connection, $query);

		if(!$result){
			die ("query failed".mysqli_error());
		}
		else{

			$row = mysqli_fetch_assoc($result);
		}
	}

	?>





		<?php

			if(isset($_POST['update_result_sheet'])){
				if(isset($_GET['roll_new'])){
					$rollnew = $_GET['roll_new'];
				}
				$roll = $_POST['roll'];
    			$fullName = $_POST['fullName'];
    			$shift = $_POST['shift'];
    			$s1 = $_POST['1st'];
    			$s2 = $_POST['2nd'];
    			$s3 = $_POST['3rd'];
    			$s4 = $_POST['4th'];
    			$s5 = $_POST['5th'];
    			$s6 = $_POST['6th'];
    			$s7 = $_POST['7th'];
    			$s8 = $_POST['8th'];
    			$overall = $_POST['Overall_CGPA'];

    			$query = "UPDATE `result_sheet` SET `Roll No` = '$roll', `Full Name` = '$fullName', 
        		`Shift` = '$shift', 
        		`1st Semister` = '$s1', 
        		`2nd Semister` = '$s2', 
        		`3rd Semister` = '$s3', 
        		`4th Semister` = '$s4', 
        		`5th Semister` = '$s5', 
        		`6th Semister` = '$s6', 
        		`7th Semister` = '$s7', 
        		`8th Semister` = '$s8', 
        		`Overall CGPA` = '$overall' 
        		WHERE `Roll No` = '$rollnew'";


    			$result = mysqli_query($connection, $query);

				if(!$result){
					die("query failed".mysqli_error());
				}

				else{

					header('Location:index.php?update_msg=You have successfully updated data');
				}
	}

		?>




		<form action="update_table.php?roll_new=<?php echo $roll; ?>" method="post">
		<div class="mb-3">
            <label for="recipient-name" class="col-form-label">Roll:</label>
            <input type="number" class="form-control" id="roll" name="roll"  value="<?php echo $row['Roll No'] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Full Name:</label>
            <input type="text" class="form-control" id="fullName" name="fullName"  value="<?php echo $row['Full Name'] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Shift</label>
            <input type="text" name="shift" id="shift" class="form-control"  value="<?php echo $row['Shift'] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 1st Semester CGPA:</label>
            <input type="float" id="1stS" class="form-control" name="1st"  value="<?php echo $row['1st Semister'] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" name="2nd"> 2nd Semester CGPA:</label>
            <input type="float" id="2ndS" class="form-control" name="2nd"  value="<?php echo $row['2nd Semister'] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 3rd Semester CGPA:</label>
            <input type="float" id="3rdS" class="form-control" name="3rd"  value="<?php echo $row['3rd Semister'] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 4th Semester CGPA:</label>
            <input type="float" id="4thS" class="form-control" name="4th"  value="<?php echo $row['4th Semister'] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 5th Semester CGPA:</label>
            <input type="float" id="5thS" class="form-control" name="5th"  value="<?php echo $row['5th Semister'] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 6th Semester CGPA:</label>
            <input type="float" id="6thS" class="form-control" name="6th"  value="<?php echo $row['6th Semister'] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 7th Semester CGPA:</label>
            <input type="float" id="7thS" class="form-control" name="7th"  value="<?php echo $row['7th Semister'] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 8th Semester CGPA:</label>
            <input type="float" id="8thS" class="form-control" name="8th"  value="<?php echo $row['8th semister'] ?>">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Overall CGPA:</label>
            <input type="text" class="form-control" id="Overall" name="Overall_CGPA"  value="<?php echo $row['Overall CGPA'] ?>">
          </div>



          <input type="submit" name="update_result_sheet" class="btn btn-success" value="UPDATE">



          
          


          </form>

          
          








	<?php include('footer.php');?>