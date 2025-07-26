<?php include("header.php"); ?>
<div class="container mt-4">
  <h3>Welcome to the Student Management Dashboard</h3>
  <div class="row mt-4">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5>Total Students</h5>
          <h3><?php
            $query="SELECT * from student";
            $res=mysqli_query($conn,$query) or die(mysqli_error());
            $student=mysqli_num_rows($res);
            echo "$student";
            ?>
          </h3>
        </div>
      </div>
    </div>
  </div>

   <div class="row mt-5">
    <div class="col-md-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="mb-3">Recent Student Admission</h5>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Admission On</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query1 = "SELECT * FROM student ORDER BY id DESC LIMIT 5";
              $res1=mysqli_query($conn,$query1) or die(mysqli_error());
              while($row=mysqli_fetch_array($res1)){
                ?>
                <tr>
                  <td><?php echo $row['0'] ;?></td>
                  <td><?php echo $row['1'] ;?></td>
                  <td><?php echo $row['2'] ;?></td>
                  <td><?php echo $row['3'] ;?></td>
                  <td><?php echo $row['4'] ;?></td>
                </tr>
                      <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include("footer.php"); ?>