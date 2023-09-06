<?php  
session_start();
include('../connection.php');
$msg='';
if(isset($_SESSION['msg'])){
  $msg=$_SESSION['msg'];
  unset($_SESSION['msg']);
  
}
include "layouts/js.php";
if($msg!=""){
  echo "<script> alert('$msg') </script>";
}
?>




<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <title>dashboard</title>
  <style>
    table tr{height:5px;}
  </style>

  <!-- Font Awesome Icons -->
  <?php include ("layouts/css.php")?>
 </head>
<body class="hold-transition sidebar-mini"  >
<div class="wrapper">

  <!-- Navbar -->
  <?php include "layouts/header.php"?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include ("layouts/sidebar.php")?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background:url(dist/img/bg.jpg);" >
    <!-- Content Header (Page header) -->
   
  
    <!-- /.content-header -->

    <!-- Main content -->
     <br><br><br>
    <table class="table table-responsive" id="myTable">
            <thead>
                <tr style="background-color:orange;box-shadow:1px 2px 10px black;">
                    <th scope="col">Sr. no.</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Class</th>
                    <th scope="col">Section</th>
                    <th scope="col">Roll NO</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Caste</th>
                    <th scope="col">Mother Tongue</th>
                    <th scope="col">Previous Class</th>
                    <th scope="col">admission_no</th>
                    <th scope="col">Action</th>
                   
                </tr>
            </thead>
        <tbody id="reglist">
        <?php
      $sql= "select * from sregistration where status=1 ";
      $res=mysqli_query($conn, $sql);
      $sn=0;
      while($row = mysqli_fetch_assoc($res)) { $sn++;
    ?>
    <tr>
      <td><?= $sn; ?></td>
      <td><?= $row['stdname']; ?> </td>
      <td><?= $row['dob']; ?> </td>
      <td><?= $row['class']; ?> </td>
      <td><?= $row['section']; ?> </td>
      <td><?= $row['rollno']; ?> </td>
      <td><?= $row['email']; ?> </td>
      <td><?= $row['phoneno']; ?> </td>
      <td><?= $row['address']; ?> </td>
      <td><?= $row['gender']; ?> </td>
      <td><?= $row['caste']; ?> </td>
      <td><?= $row['language']; ?> </td>
      <td><?= $row['previousclass']; ?> </td>
      <td><?= $row['admission_no']; ?> </td>
      <td> <button class="btn btn-sm btn-danger delete_btn"><a href="../action.php?delete_id=<?php echo $row['id']; ?>" <i class="fa-solid fa-trash"></i> </a></button> 
      <button type="button" name="" class="btn btn-success"><a href="reglistupdate.php?id=<?php echo $row['id'];?>" <i class="fa-solid fa-pen-to-square"></i></a></button></td>
      
      
    </tr>
      <?php } ?>
    
  </tbody>



        </table>

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 <?php include "layouts/footer.php";?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<?php include "layouts/js.php";?>

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} ); 
  </script>


</body>
</html>
