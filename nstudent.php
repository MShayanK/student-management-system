<?php include("header.php");

if(isset($_POST['btn'])){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $class=$_POST['class'];

  $query="INSERT INTO student values('','$name','$email','$class',now())";
  $res=mysqli_query($conn,$query) or die(mysqli_error());
  if ($res) {
            echo "<script>alert('Student added successfully');</script>";
        } else {
            echo "<script>alert('Failed to add student');</script>";
        }
  
}

?>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow p-4">
        <h4>Add New Student</h4>
       <form method="POST">
          <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" required>
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
          </div>
          <div class="mb-3">
            <label>Class</label>
            <select class="form-select" name="class" required>
              <option value="">Select class</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary" name="btn">Add Student</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>