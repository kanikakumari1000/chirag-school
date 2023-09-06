<?php
session_start();
include ("../connection.php");
$msg='';
if(isset($_SESSION['msg'])){
  $msg=$_SESSION['msg'];
  unset($_SESSION['msg']);
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
            <!-- <div class="container py-5">
                <h3 style="text-align:center;">Banner</h3>
                <div class="row">
                    <div class="col-md-4">
                        <form action="aaction.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="image" accept="image/*">
                            <button class="btn btn-success" type="submit" name="banner_upload">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <table classs="table table-striped" style="border:2px solid black; width:100%">
                            <thead>
                                <tr style="text-align:center">
                                    <th>Sr. No</th>
                                    <th>Banner</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                               $sql = "select * from banner where status= '1' ";
                               $res = mysqli_query($conn, $sql);
                               $sn = 0;
                                while ($row = mysqli_fetch_assoc($res)) {
                                $sn++;
                                
                                ?>
                                <tr>
                                    <td><?= $sn; ?></td>
                                    <td><img src="../uploads/<?= $row['image']; ?>" width="100" height="100"></td>
                                    <td><a class="btn btn-danger btn-sm"
                                            href="aaction.php?bannerid=<?php echo $row['id']; ?>">
                                            <i class="fas fa-trash">Delete</i></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->


            <section class="imageupl">
                <div class="container">
                    <h3 align="center"><u>Banner</u></h3>
                    <div class="row">
                        <div class="col-md-4">
                            <form action="aaction.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="image" accept="image/*" id="fileToUpload"
                                    required=""></br></br>
                                <button class="btn btn-success btn-sm" type="submit"
                                    name="banner_upload">Submit</button>
                            </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table table-striped" border="2px solid black">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Banner</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

              $sql = "select * from banner where status = '1' ";
              // debugger;
              // print_r($sql);die;
              $res = mysqli_query($conn, $sql);
                
              $sn = 0;
              while ($row = mysqli_fetch_assoc($res)) {
                // print_r($row);die;
                $sn++;
              ?>
                                    <tr>
                                        <td><?= $sn; ?></td>
                                        <td><img src="../uploads/<?= $row['image']; ?>" width="100" height="100"></td>
                                        <td><a class="btn btn-danger btn-sm"
                                                href="aaction.php?bannerid=<?php echo $row['id']; ?>">
                                                <i class="fas fa-trash">Delete</i></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>

            <!-- message section images cms -->
            <section class="messegesection">
                <div class="container">
                    <h3 align="center"><u>Message Section</u></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="aaction.php" method="post" enctype="multipart/form-data">
                                <input type="text" name="msg1" placeholder="Enter MSG1">
                                <input type="text" name="msg2" placeholder="Enter MSG2">
                                <input type="text" name="msg3" placeholder="Enter MSG3"><br><br>
                                <input type="text" name="msg4" placeholder="Enter MSG4">
                                <input type="text" name="msg5" placeholder="Enter MSG5">
                                <input type="file" name="image"><br><br>
                                <button class="btn btn-success" name="inserts">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-striped" border="2 solid black">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Message1</th>
                                        <th>Message2</th>
                                        <th>Message3</th>
                                        <th>Message4</th>
                                        <th>Message5</th>
                                        <th>Image</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

         $sql = "select * from homemsgimage where status = '1' ";
        // debugger;
        // print_r($sql);die;
          $res = mysqli_query($conn, $sql);
  
        $sn = 0;
        while ($row = mysqli_fetch_assoc($res)) {
       // print_r($row);die;
       $sn++;
         ?>
                                    <tr>
                                        <td><?= $sn; ?></td>
                                        <td> <?php echo $row['msg1']; ?></td>
                                        <td> <?php echo $row['msg2']; ?></td>
                                        <td> <?php echo $row['msg3']; ?></td>
                                        <td> <?php echo $row['msg4']; ?></td>
                                        <td> <?php echo $row['msg5']; ?></td>
                                        <td><img src="../uploads/<?= $row['image']; ?>" width="100" height="100"></td>
                                        <td><a class="btn btn-danger btn-sm"
                                                href="aaction.php?id=<?php echo $row['id']; ?>">
                                                <i class="fas fa-trash">Delete</i></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <div class="section">
                <div class="container">
                    <h3 style="text-align:center"><u style="text-shadow:2px 2px 10px black;">People</u></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="aaction.php" method="post" enctype="multipart/form-data">
                                <label>Name</label>
                                <input type="text" name="name">
                                <label>Details</label>
                                <input type="text" name="details">
                                <label>Upload People</label>
                                <input type="file" name="image"><br><br>
                               <center> <button class="btn btn-success" name="inertpeople" type="submit">Submit</button></center><br><br>
                            </form>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped" border="2 solid black">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Name</th>
                                        <th>Details</th>
                                        <th>Image</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

       $sql = "select * from homepeople where status = '1' ";
      // debugger;
      // print_r($sql);die;
     $res = mysqli_query($conn, $sql);

       $sn = 0;
      while ($row = mysqli_fetch_assoc($res)) {
            // print_r($row);die;
$sn++;
?>
                                    <tr>
                                        <td><?= $sn; ?></td>
                                        <td> <?php echo $row['name']; ?></td>
                                        <td> <?php echo $row['details']; ?></td>
                                        <td><img src="../uploads/<?= $row['image']; ?>" width="100" height="100"></td>
                                        <td><a class="btn btn-danger btn-sm"
                                                href="aaction.php?id=<?php echo $row['id']; ?>">
                                                <i class="fas fa-trash"></i></a></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
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

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <?php include "layouts/js.php";?>
</body>

</html>