<?php
session_start();
include('../connection.php');
$msg= "";
    if(isset($_SESSION['msg'])){
       $msg=$_SESSION['msg'];
       unset($_SESSION['msg']);
   }
   if($msg!=''){
     echo "<script> alert('$msg')</script>";
   }


?>
<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>dashboard</title>

  <!-- Font Awesome Icons -->
  <?php include ("layouts/css.php")?>
 </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include "layouts/header.php"?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include ("layouts/sidebar.php")?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="box" style="border:2px solid black;">
   <form action="../action.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
       <?php
 
   $id= $_GET['id'];
    //  print_r('id');
   $sql="select * from sregistration where `id`='$id'";
   $query = mysqli_query($conn,$sql); 
   $row = mysqli_fetch_assoc($query); ?>

          <div class="col">
            <input type="hidden" value="<?php echo $row['id']?>"  name="id">
            <label>Name:</label>
            <span><input style="margin:20px;" type="text" name="stdname" value="<?php echo $row['stdname']?>" class="form-control" placeholder="Re Enter Name"></span>
          </div>
          <div class="col">
            <label>Class:</label>
            <span><input style="margin:20px;" type="text" name="class" value="<?php echo $row['class']?>" class="form-control" placeholder="Re Enter class"></span>
          </div>
          <div class="col">
            <label>Roll No.:</label>
            <span><input style="margin:20px;" type="text" name="rollno" value="<?php echo $row['rollno']?>" class="form-control" placeholder="Re Enter rollno"></span>
          </div>
        </div>
        <div class="row">
        <div class="col">
            <label>DOB:</label>
            <span><input style="margin:20px;" type="text" name="dob" value="<?php echo $row['dob']?>" class="form-control" placeholder="Re Enter DOB"></span>
          </div>
          <div class="col">
            <label>Section:</label>
            <span><input style="margin:20px;" type="text" name="section" value="<?php echo $row['section']?>" class="form-control" placeholder="Re Enter section"></span>
          </div>
          <div class="col">
            <label>Phone No:</label>
            <span><input style="margin:20px;" type="text" name="phoneno" value="<?php echo $row['phoneno']?>" class="form-control" placeholder="Re Enter phonenumber"></span>
          </div>
        </div>
    </div>
    <center><button type="submit" name="update" class="btn btn-success" style="margin: 15px;padding:10px;border-radius:5px;">Save</button></center>
   </form>
  </div>



    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
   
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 <?php include "layouts/footer.php";?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<?php include "layouts/js.php";?>




<script>
     function updReg(){
        var upd_id= $('#upd_id').val();
        var upd_name= $('#upd_name').val();
        var upd_class= $('#upd_class').val();
        var upd_rollno= $('#upd_rollno').val(); 
        var upd_dob= $('#upd_dob').val();  
        var upd_section= $('#upd_section').val();  
        var upd_phonenumber= $('#upd_phonenumber').val();  
        $.ajax({
            url: '../action.php',
            type: 'POST',
            data:{upd_name:upd_name,upd_class:upd_class,upd_rollno:upd_rollno,upd_dob:upd_dob,upd_section:upd_section,upd_phonenumber:upd_phonenumber},
            success:function(result){
               window.location.href="reglist.php";
               alert(result);
            }
            
        });
     }



</script>
</body>
</html>
