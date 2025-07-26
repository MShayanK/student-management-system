<?php include("header.php");

?>
<div class="container mt-4">
  <h3>Students List</h3>
  <form action="" method="post">

  <div class=" input-group mb-3">
  <input type="search" placeholder="Search students.." name="search" id="" class=" form-control">

  <div class=" input-group-append">
  <input type="submit"  Value="Search" name="btn"  class="btn btn-outline-dark">
  </div>

  <div class=" input-group-append">
  <button name="btn1" class="btn btn-outline-dark" type="reset" onclick="window.location.href='student.php'">Clear</button>
  </div> 

  </div>
  </form>

  <table class="table table-striped shadow-sm">
    <thead class="table-primary">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Class</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
     
      <?php 
      
      if(isset($_POST['btn'])){
      $search=$_POST['search'];

       $query2="select * from student where name LIKE '%$search%'";
      $res2=mysqli_query($conn,$query2) or die(mysqli_error());
      while($row2=mysqli_fetch_array($res2)){?>
    
      <td><?php echo $row2['0'] ;?></td>
      <td><?php echo $row2['1'] ;?></td>
      <td><?php echo $row2['2'] ;?></td>
      <td><?php echo $row2['3'] ;?></td>
      <td>
        <a href="editstudent.php?sid=<?php echo $row2['0']?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="delete.php?sid=<?php echo $row2['0']?>" class="btn btn-danger btn-sm">Delete</a>
      </td>
      </tr>
      <?php
      }
      }else{
        $query="SELECT * FROM student";
        $res=mysqli_query($conn,$query) or die(mysqli_error());
        while($row=mysqli_fetch_array($res)){
        ?>
      <tr>
        <td><?php echo $row['0'] ;?></td>
        <td><?php echo $row['1'] ;?></td>
        <td><?php echo $row['2'] ;?></td>
        <td><?php echo $row['3'] ;?></td>
        <td>
          <a href="editstudent.php?sid=<?php echo $row['0']?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="delete.php?sid=<?php echo $row['0']?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      <?php   } 
      }
     ?>

      
    </tbody>
  </table>
</div>
 
      
 
<?php include("footer.php"); ?>