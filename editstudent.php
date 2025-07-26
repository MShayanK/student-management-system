<?php include("header.php"); 

 if(isset($_GET['sid'])){
        $sid=$_GET['sid'];
      $query="SELECT * FROM student Where id='$sid'";
      $res=mysqli_query($conn,$query) or die(mysqli_error());
      $row=mysqli_fetch_array($res);

  if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $class=$_POST['class'];
    $query1="UPDATE student set name='$name', email='$email', class='$class' Where id='$sid'";
    $res1=mysqli_query($conn,$query1) or die(mysqli_error());
     if ($res1){
            echo " <script> 
            document.location='student.php';
            </script>";
           
        }else{
            echo " <script> 
            alert('Your data row has not been updated')
            document.location='student.php';
            </script>";
  }
 }
}
      ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow p-4">
        <h4>Edit Student Details</h4>
        <form method="POST">
          <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $row['1'] ?>" class="form-control" placeholder="Enter name" required>
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $row['2'] ?>" class="form-control" placeholder="Enter email" required>
          </div>
          <div class="mb-3">
            <label>Class</label>
            <select class="form-select" name="class" required>
              <option value="">Select class</option>
              <option value="9" <?php if( $row['3'] == '9' ) echo 'selected'; ?>>9</option>
              <option value="10" <?php if( $row['3'] == '10') echo 'selected'; ?>>10</option>
              <option value="11" <?php if( $row['3'] == '11') echo 'selected'; ?>>11</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary" name="btn"> Update </button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>