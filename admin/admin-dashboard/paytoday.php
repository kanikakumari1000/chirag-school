<?php
include('../connection.php');
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
  <div class="content-wrapper" style="background:url(dist/img/bg.jpg);" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="container">
        <div class="search" >
          <div class="row">
            <div class="col md-4">
           <div> <lable>Date</lable></div>
            <div><input type="date" value="<?php echo date('Y-m-d');?>" style="width:20%; box-shadow:1px 2px 10px orange;" class="form-control" onkeyup="today_payment()" id="tdy_search" ></div>
            </div>
       <!-- <div class="col md-4"></div>
            <div class="col md-4">
           <div> <lable>class_wise</lable></div>
            <div><input type="text" name="class" class="form-control" onkeyup="search_class()" id="class_search" ></div>
            </div>
          </div> -->
          </div>
        <br>
        <table class="table">
            <thead>
                <tr style="background-color:orange;box-shadow:1px 2px 10px black;">
                    <th scope="col">Sr. No</th>
                    <th scope="col">Receipt_No</th>
                    <th scope="col">Admission_No</th>
                    <th scope="col">Roll No</th>
                    <th scope="col">Class</th>
                    <th scope="col">Section</th>
                    <!-- <th scope="col">Roll No</th> -->
                    <th scope="col">Student Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Total</th>
                    <th scope="col">Paid</th>
                    <th scope="col">Due</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
            </thead>
            <thead id="todaypay">
            </thead>
            
        </table>
        
    </section>






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

<script>
  function today_payment(){
  // debugger;
  // $('#paylist').empty();
  var tdy_search= $('#tdy_search').val();
  $.ajax({
    type : 'POST',
    url : '../action.php',
    data: {tdy_search:tdy_search,td_payment:'td_payment'},
    success: function(result){
      alert(result);
      $('#todaypay').html(result);
    }
  })
 }
 
</script>



</body>
</html>
