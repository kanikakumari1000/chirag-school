
<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | form</title>

  <!-- Font Awesome Icons -->
  <?php include ("layouts/css.php")?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include "layouts/header.php"?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
<?php include "layouts/sidebar.php"?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Form</a></li>
              <li class="breadcrumb-item active">Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 m-auto">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Project Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Project</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Culture</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="number" class="col-sm-2 col-form-label">Total Amount</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="number">
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="number" class="col-sm-2 col-form-label">Paid Amount</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" id="number">
                    </div>
                    <label for="number" class="col-sm-2 col-form-label">Payment type</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" id="number">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="number" class="col-sm-2 col-form-label">Paid Amount</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" id="number">
                    </div>
                    <label for="number" class="col-sm-2 col-form-label">Due Amount</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" id="number">
                    </div>
                    </div>  
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="reset" class="btn btn-danger">reset</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
