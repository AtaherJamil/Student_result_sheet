<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Home page</title>
	 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
  		const searchInput = document.getElementById('search-input');
  		const tableRows = document.querySelectorAll('#table_content tr');

  		searchInput.addEventListener('input', () => {
    		const searchValue = searchInput.value.toLowerCase();
    		tableRows.forEach((row) => {
      		const rowText = row.textContent.toLowerCase();
      		if (rowText.includes(searchValue)) {
        		row.style.display = '';
      		} 
      		else {
        		row.style.display = 'none';
      		}
    		});
  		});
	</script>
 </head>
 <body>
 <marquee behavior="alternate" direction="right" vspace="0.5" id="slide">Cumilla Polytechnic Institute | Department of Computer Science & Technology </marquee>
 <h1 id="main_title">Student Result Sheet || Session: 2022-23</h1>
<div class="box1">
<h3>Group: A-B</h3>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal" data-bs-whatever="@mdo">Add New Student</button>
</div>

<div class="image">
        <img src="logo.JPG" alt="Logo" height="500px" width="500px">
</div> 

    
<div class="container">