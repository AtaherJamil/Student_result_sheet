<?php include('database.php');?>


<?php

	if(isset($_GET['roll'])){
		$roll = $_GET['roll'];
	

	$query = "delete from `result_sheet` where `Roll No` = '$roll'";


	$result = mysqli_query($connection, $query);

	if(!$result){
		die("Query Failed".mysqli_error());
	}

	else{
		header('Location:index.php?delete_msg=You have deleted the record.');
	}
}





?>