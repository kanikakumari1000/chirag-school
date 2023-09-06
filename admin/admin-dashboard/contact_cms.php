<?php
include '../connection.php';
?>
<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>contact_cms</title>

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
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="aaction.php" method="post">
                    <label>Phone Number:</label>
                    <input type="text" name="phonenumber">
                    <label>Email:</label>
                    <input type="email" name="email"><br>
                    <label>Address:</label><br>
                    <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
                    <!-- <span>Upload Map:</span><input type="file" name="image"> <br><br> -->
                    <button class="btn btn-success"type="submit" name="insertcontact">Submit</button><br><br>
                </form>
            </div>
            <div class="col-md-7">
                <table class="table table-stripted" border="2px solid black" align="center">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       $sql="select * from `contact_cms` where status='1' ";
                       $res=mysqli_query($conn,$sql);
                       $sn=0;
                      while( $row=mysqli_fetch_assoc($res)){
                        $sn++;
                      
                       ?>
                       <tr>
                        <td><?=$sn; ?></td>
                        <td><?php echo $row['phonenumber'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['address'];?></td>
                       
                        <td><a class="btn btn-danger btn-sm" href="aaction.php?id=<?php echo $row['id']; ?>">
                        <i class="fas fa-trash"></i></a></td>
                       </tr>
                       <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
</body>
</html>
