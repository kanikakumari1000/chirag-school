<?php 
session_start();
include "../connection.php";
$msg='';
if(isset($_SESSION['msg'])){
 $msg=$_SESSION['msg'];
 unset($_SESSION['msg']);
}
include "layouts/js.php";
if($msg!=""){
   echo "<script> alert('$msg')</script>";
}
?>


<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/css/reg.css">


  <title>student_registration</title>

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
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
    <header>Registration</header>

    <form action="../action.php" method="post" enctype="multipart/form-data">
        <div class="first form">
            <div class="details personal">
                <span class="title">Personal Details</span>

                <div class="fields">
                  <div class="input-field">
                    <label>Full Name</label>
                    <input type="text" name="stdname" placeholder="Enter Your Name">
                 </div>
                 <div class="input-field">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" placeholder="Enter birth date">
                 </div>
                 <div class="input-field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email">
                 </div>
                 <div class="input-field">
                    <label>Roll No</label>
                    <input type="text" name="rollno" placeholder="Enter Your Roll No">
                 </div>
                 <div class="input-field">
                    <label>Class</label>
                    <input type="text" name="class" placeholder="Enter your class">
                 </div>
                 <div class="input-field">
                    <label>Section</label>
                    <input type="text" name="section" placeholder="Enter Your Section">
                 </div>


                 <div class="input-field">
                    <label>Phone No</label>
                    <input type="text" name="phoneno" placeholder="Enter Your phonenumber">
                 </div>
                 <div class="input-field">
                    <label>Address</label>
                    <input type="textarea" name="address" placeholder="Enter Your address">
                 </div>
                 <div class="input-field">
                    <label>Gender</label>
                    
                    <select class="form-control" name="gender">
                        <option>..Select..</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                 </div>

                 <div class="input-field">
                    <label>Caste</label>
                    <select class="form-control" name="caste">
                        <option>..Select..</option>
                        <option>ST</option>
                        <option>SC</option>
                        <option>OBC</option>
                    </select>
                 </div>
                 <div class="input-field">
                    <label>Mother Tongue</label>
                    <input type="text" name="language" placeholder="Enter your Language">
                 </div>
                 <div class="input-field">
                    <label>Previous Class</label>
                    <input type="text" name="previousclass" placeholder="Enter Your PreClass">
                 </div>
                </div> 
            </div>  
            <div class="details personal">
                <span class="title">Personal ID Details</span>

                <div class="input-field">
                    <label>ID type</label>
                    <select class="form-control" name="idtype"  style="width:20%">
                        <option>..Select..</option>
                        <option>Addhar Card</option>
                        <option>PAN</option>
                        <option>Other</option>
                    </select>
                </div>
                 <div class="input-field">
                    <label>ID Number</label>
                    <input type="text" name="idnumber" placeholder="Enter ID number">
                 </div>
                 <div class="input-field">
                    <label>Admission_No.</label>
                    <input type="text" name="admission_no" placeholder="Enter ID number">
                 </div>

            </div> 
              
          <!-- <button class="nxtbtn">
            <span class="btnText">Next</span>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          </button>   -->

            
        </div>       

        <div class="first second">
            <div class="details address">
                <span class="title">Address Details</span>

                <div class="fields">
                  <div class="input-field">
                    <label>PAddress</label>
                    <input type="text" name="paddress" placeholder="Enter Your Address">
                 </div>
                 <div class="input-field">
                    <label>Nationality</label>
                    <input type="text" name="nationality" placeholder="Enter Nationality">
                 </div>
                 <div class="input-field">
                    <label>State</label>
                    <input type="text" name="state" placeholder="Enter Your State">
                 </div>

                 <div class="input-field">
                    <label>Distict</label>
                    <input type="text" name="distict" placeholder="Enter Your distict">
                 </div>
                 <div class="input-field">
                    <label>Block</label>
                    <input type="textarea" name="block" placeholder="Enter Your Block">
                 </div>
                 

                 
                 <div class="input-field">
                    <label>PIN Number</label>
                    <input type="text" name="pinnumber" placeholder="Enter your PIN">
                 </div>
                 
            </div>  
            <div class="details family">
                <span class="title">Family Details</span>

                <div class="fields">
                  <div class="input-field">
                    <label>Fathers Name</label>
                    <input type="text" name="fname" placeholder="Enter Your fathers Name">
                 </div>
                 <div class="input-field">
                    <label>Occupation</label>
                    <input type="text" name="foccupation" placeholder="Enter Occcupation">
                 </div>
                 <div class="input-field">
                    <label>Phone Number</label>
                    <input type="text" name="fphone" placeholder="Enter Fathers phone no">
                 </div>

                 <div class="input-field">
                    <label>Mothers Name</label>
                    <input type="text" name="mname" placeholder="Enter Your mothers name">
                 </div>
                 <div class="input-field">
                    <label>Occupation</label>
                    <input type="text" name="moccupation" placeholder="Enter mothers occupation">
                 </div>
                 <div class="input-field">
                    <label>Phone Number</label>
                    <input type="text" name="mphone" placeholder="Enter mothers phone no">
                 </div>

            </div> 
            <div class="details Image">
                <span class="title">Image Details</span>

                <div class="fields">
                  <div class="input-field">
                    <label>Image</label>
                    <input type="file" name="image" placeholder="Enter Your fathers Name">
                 </div>
                 <div class="input-field">
                    <label>Sigature</label>
                    <input type="file" name="signature" placeholder="Enter Occcupation">
                 </div>
             </div>
         
            </div>       

        <center><button type="submit" name="insert" class="button">Submit</button></center>

    </form>
     
   </div>
   
    <!--     /.content -->
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
