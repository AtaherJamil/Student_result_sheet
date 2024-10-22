<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insert_data.php" method="post">
          <?php
          /**
           * The form elements for adding a new student
           */
          ?>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Roll:</label>
            <input type="number" class="form-control" id="roll" name="roll">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Full Name:</label>
            <input type="text" class="form-control" id="fullName" name="fullName">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Shift</label>
            <input type="text" name="shift" id="shift" class="form-control">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 1st Semester CGPA:</label>
            <input type="float" id="1stS" class="form-control" name="1st">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" name="2nd"> 2nd Semester CGPA:</label>
            <input type="float" id="2ndS" class="form-control" name="2nd">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 3rd Semester CGPA:</label>
            <input type="float" id="3rdS" class="form-control" name="3rd">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 4th Semester CGPA:</label>
            <input type="float" id="4thS" class="form-control" name="4th">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 5th Semester CGPA:</label>
            <input type="float" id="5thS" class="form-control" name="5th">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 6th Semester CGPA:</label>
            <input type="float" id="6thS" class="form-control" name="6th">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 7th Semester CGPA:</label>
            <input type="float" id="7thS" class="form-control" name="7th">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> 8th Semester CGPA:</label>
            <input type="float" id="8thS" class="form-control" name="8th">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Overall CGPA:</label>
            <button class="btn btn-success"> Overall CGPA Would auto Canculate </button>
          </div>
          
          <?php
          /**
           * The buttons to submit the form and close the modal
           */
          ?>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" name="add_student" class="btn btn-success" value="ADD">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
