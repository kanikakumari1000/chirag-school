<?php 
session_start();
// print_r($_SESSION); die;
include '../connection.php';
// date_default_timezone_set('Asia/Kolkata');
// $date= date('d-m-y h:i:s');
// echo $date;

$id= $_SESSION['last_id'];
$query ="select * from `spayment` where `id` = '$id'";
$sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($sql);
// print_r($row);die;

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

<body class="hold-transition sidebar-mini" onload="window.print()">
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
                            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol> -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->

            <div class="row">
                <din class="col-md-5">
                    <div class="para">
                        <p style="text-align:center; margin:0px">Chirag Public School</p>
                    </div>
                </din>
                <div class="col-md-2"></div>
                <din class="col-md-5">
                    <div class="para">
                        <p style="text-align:center; margin:0px">Chirag Public School</p>
                    </div>
                </din>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="box" style="border:2px solid black">

                        <div class="content">
                            <h1 class="text-center">Chirag Public <span style="color:orange"> School</span> </h1>
                            <p class="text-center"><span style="color:orange">Best</span> For Schooling</p>
                        </div>

                        <div class="address">
                            <h4 style="text-align:center; color:olive">JHARKHAND MORE, MURI</h4>
                            <P style="text-align:center;color:teal;text-decoration:underline"><b>+91-9709125426</b></P>
                        </div>
                        <div class="row">
                            <div class="col md-3">
                                <label>Receipt No.</label>
                                <span><?php echo $row['receipt_no'];?></span>
                            </div>
                            <div class="col md-3">
                                <label>Admission No.</label>
                                <span> <?php echo $row['admission_no'];?> </span>
                            </div>
                            <div class="col md-3">
                                <label>Name</label>
                                <span> <?php echo $row['stdname'];?> </span>
                            </div>
                            <div class="col md-3">
                                <label>Roll No.</label>
                                <span><?php echo $row['rollno'];?> </span>
                            </div>
                            <div class="col md-3">
                                <label>Date</label>
                                <span> <?php echo date('d-m-Y',strtotime($row['added_on']));?> </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col md-3">
                                <label>Class</label>
                                <span> <?php echo $row['class'];?> </span>
                            </div>
                            <div class="col md-3">
                                <label>Section</label>
                                <span> <?php echo $row['section'];?> </span>
                            </div>
                            <div class="col md-3">
                                <label>Month</label>
                                <span> <?php echo $row['months'];?> </span>
                            </div>
                            <div class="col md-3">
                                <label>Total Fee</label>
                                <span> <?php echo $row['total'];?> </span>
                            </div>
                            <div class="col md-3">
                                <label>PayMode</label>
                                <span> <?php echo $row['pmode'];?> </span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-6">
                                <table>
                                    <thead style="">
                                        <tr>
                                            <th scope="column">Serial No.</th>
                                            <th scope="column">Particulates</th>
                                            <th scope="column ">Amount Rs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">01</th>
                                            <td scope="row">Tution Fee</td>
                                            <td>
                                                <p> <?php echo $row['fee'];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">02</th>
                                            <td scope="row">Late Fine</td>
                                            <td>
                                                <p> <?php echo $row['fine'];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">03</th>
                                            <td scope="row">Examination Fee</td>
                                            <td>
                                                <p> <?php echo $row['xmfees'];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">04</th>
                                            <td scope="row">Game/Sports Fee</td>
                                            <td>
                                                <p><?php echo $row['game'];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">05</th>
                                            <td scope="row">Books and Stationary</td>;
                                            <td>
                                                <p> <?php echo $row['books'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">06</th>
                                            <td scope="row">Library Charge</td>
                                            <td>
                                                <p> <?php echo $row['lib'];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">07</th>
                                            <td scope="row">Transport Fee</td>
                                            <td>
                                                <p> <?php echo $row['trans'];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">08</th>
                                            <td scope="row">Computer Fee</td>
                                            <td>
                                                <p> <?php echo $row['comp'];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">09</th>
                                            <td scope="row">Annual Charge</td>
                                            <td>
                                                <p><?php echo $row['annfee'];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td scope="row">Other Charge</td>
                                            <td>
                                                <p><?php echo $row['otherfees'];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center">Total:</td>
                                            <td>
                                                <p><?php echo $row['total'];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center">Paid:</td>
                                            <td>
                                                <p><?php echo $row['paid'];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center">Due:</td>
                                            <td>
                                                <p><?php echo $row['due'];?></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  <!-- <div class="col-md-1"></div> -->
                 
                  
                                 

                </div>



                <hr style="border-top: dotted 2px; transform:rotate(90deg);margin-top: 0;">
                
                <div class="col-md-5">
                <div class="box" style="border:2px solid black">

                    
                        <div class="content">
                            <h1 class="text-center">Chirag Public <span style="color:orange"> School</span> </h1>
                            <p class="text-center"><span style="color:orange">Best</span> For Schooling</p>
                        </div>

                        <div class="address">
                            <h4 style="text-align:center; color:olive">JHARKHAND MORE, MURI</h4>
                            <P style="text-align:center;color:teal;text-decoration:underline"><b>+91-9709125426</b>
                            </P>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Receipt No.</label>
                                <span><?php echo $row['receipt_no'];?></span>
                            </div>
                            <div class="col md-3">
                                <label>Admission No.</label>
                                <span><?php echo $row['admission_no'];?></span>
                            </div>
                            <div class="col md-3">
                                <label>Name</label>
                                <span> <?php echo $row['stdname'];?></span>
                            </div>
                            <div class="col md-3">
                                <label>Roll No.</label>
                                <span> <?php echo $row['rollno'];?></span>
                            </div>
                            <div class="col md-3">
                                <label>Date</label>
                                <span> <?php echo date('d-m-Y',strtotime($row['added_on']));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col md-3">
                                <label>Class</label>
                                <span> <?php echo $row['class'];?></span>
                            </div>
                            <div class="col md-3">
                                <label>Section</label>
                                <span> <?php echo $row['section'];?></span>
                            </div>
                            <div class="col md-3">
                                <label>Month</label>
                                <span> <?php echo $row['months'];?></span>
                            </div>
                            <div class="col md-3">
                                <label>Total Fee</label>
                                <span> <?php echo $row['total'];?></span>
                            </div>
                            <div class="col md-3">
                                <label>PayMode</label>
                                <span> <?php echo $row['pmode'];?></span>
                            </div>
                        </div>

                        <!-- secont table -->


                        <hr>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-6">
                                <table>
                                    <thead style="">
                                        <tr>
                                            <th scope="column">Serial No.</th>
                                            <th scope="column">Particulates</th>
                                            <th scope="column ">Amount Rs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">01</th>
                                            <td scope="row">Tution Fee</td>
                                            <td>
                                                <p> <?php echo $row['fee'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">02</th>
                                            <td scope="row">Late Fine</td>
                                            <td>
                                                <p> <?php echo $row['fine'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">03</th>
                                            <td scope="row">Examination Fee</td>
                                            <td>
                                                <p><?php echo $row['xmfees'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">04</th>
                                            <td scope="row">Game/Sports Fee</td>
                                            <td>
                                                <p> <?php echo $row['game'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">05</th>
                                            <td scope="row">Books and Stationary</td>
                                            <td>
                                                <p><?php echo $row['books'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">06</th>
                                            <td scope="row">Library Charge</td>
                                            <td>
                                                <p> <?php echo $row['lib'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">07</th>
                                            <td scope="row">Transport Fee</td>
                                            <td>
                                                <p> <?php echo $row['trans'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">08</th>
                                            <td scope="row">Computer Fee</td>
                                            <td>
                                                <p> <?php echo $row['comp'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">09</th>
                                            <td scope="row">Annual Charge</td>
                                            <td>
                                                <p> <?php echo $row['annfee'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td scope="row">Other Charge</td>
                                            <td>
                                                <p> <?php echo $row['otherfees'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center">Total:</td>
                                            <td>
                                                <p><?php echo $row['total'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center">Paid:</td>
                                            <td>
                                                <p><?php echo $row['paid'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center">Due:</td>
                                            <td>
                                                <p><?php echo $row['due'];?> </p>
                                            </td>
                                        </tr>
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
                    <h5></h5>
                    <p></p>
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