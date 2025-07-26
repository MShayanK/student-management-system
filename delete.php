<?php include("header.php"); 
if(isset($_GET['sid'])){
    $sid=$_GET['sid'];
    $query="DELETE from student where id='$sid'"; 
    $sid2=mysqli_query($conn,$query) or die (mysqli_error());

if ($sid2){
    echo " <script> 
    document.location='student.php';
    </script>";
   
}else{
    echo " <script> 
    alert('Your data row has not been deleted')
    document.location='student.php';
    </script>";
}

}
?>