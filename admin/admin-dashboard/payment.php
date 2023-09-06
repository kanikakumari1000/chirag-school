
<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/css/reg.css">

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
    <header>Std_Payment</header>
    <form action="../action.php" method="post">
        <div class="first-form">
            <div class="personal details">
               <span class="title">Admission Details</span>
               <div class="fields">
               <div class="input-field">
                    <label>Admission_no</label>
                    <input type="text" name="admission_no" onkeyup="paymenttt()" id="admwise" placeholder="Enter Admission_no" style="box-shadow:10px 10px black;">
                 </div>
                 <div class="input-field">
                    <label>Receipt_No</label>
                    <input type="text" name="receipt_no" value="<?php echo (rand(10, 100000));  ?>" placeholder="Enter Receipt No">
                 </div>
               </div> 
               <hr>
            </div>
            <div class="personal details">
               <span class="title">Student Details</span>
               <div class="fields">
               <div class="input-field">
                    <label>Roll No</label>
                    <input type="text" name="rollno" id="rollno" readonly placeholder="Enter roll_no">
                 </div>
                 <div class="input-field">
                    <label>Class</label>
                    <input type="text" name="class" id="class" readonly placeholder="Enter class">
                 </div>
                 <div class="input-field">
                    <label>Section</label>
                    <input type="text" name="section" id="section" readonly placeholder="Enter section">
                 </div>
                 <div class="input-field">
                    <label>Student Name</label>
                    <input type="text" name="stdname" id="stdname" readonly placeholder="Enter student name">
                 </div>
                 <div class="input-field">
                    <label>Father Name</label>
                    <input type="text" name="fname" id="fname" readonly placeholder="Enter father name">
                 </div>
                 <div class="input-field">
                    <label>Registration NO</label>
                    <input type="text" name="regno" placeholder="Enter Registration no">
                 </div>
               </div> 
               <hr>
            </div>
            <div class="personal details">
               <span class="title">Payment Details</span>
               <div class="fields">
               <div class="input-field">
                    <label>Payment Date</label>
                    <input type="date" name="paymentdate" id="paymentdate" placeholder="Enter payment date">
                </div>
                <div class="input-field">
                    <label>No Of Months</label>
                    <input type="number" name="months" id="months" placeholder="Enter no of months">
                 </div>
                <div class="input-field">
                    <label>Payment Mode</label>
                    
                    <select class="form-control" name="pmode">
                        <option>..Select..</option>
                        <option>CASH</option>
                        <option>Cards</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="input-field">
                    <label>Total Amount</label>
                    <input type="text" name="amount" placeholder="Enter amount">
                 </div>
               </div> 
               <hr>
            </div>
        
            <div class="row">
        <div class="col">
        <table class="table table-striped" border="3px">
            <thead>
                <tr>
                  <th scope="col">Serial no</th>
                  <th scope="col">Payment </th>
                  <th scope="col">Payment Rs</th>
                </tr>
            </thead>

         <tbody>
          <tr>
            <th scope="row">01</th>
            <td>Tution Fee</td>
            <td><input type="text" id="fee" onkeyup="find_total()" name="fee"></td>
          </tr>
          <tr>
            <th scope="row">02</th>
            <td>Late Fine</td>
            <td><input type="text" id="fine" onkeyup="find_total()" name="fine"></td>
          </tr>
          <tr>
            <th scope="row">03</th>
            <td>Examination Fee</td>
            <td><input type="text" id="xmfees" onkeyup="find_total()" name="xmfees"></td>
          </tr>
          <tr>
            <th scope="row">04</th>
            <td>Game/Sports Fee</td>
            <td><input type="text" id="game" onkeyup="find_total()" name="game"></td>
          </tr>
          <tr>
            <th scope="row">05</th>
            <td>Books and Stationary</td>
            <td><input type="text" id="books" onkeyup="find_total()" name="books"></td>
          </tr>
          <tr>
            <th scope="row">06</th>
            <td>Library Charge</td>
            <td><input type="text" id="lib" onkeyup="find_total()" name="lib"></td>
          </tr>
          <tr>
            <th scope="row">07</th>
            <td>Transport Fee</td>
            <td><input type="text" id="trans" onkeyup="find_total()" name="trans"></td>
          </tr>
          <tr>
            <th scope="row">08</th>
            <td>Computer Fee</td>
            <td><input type="text" id="comp" onkeyup="find_total()" name="comp"></td>
          </tr>
          <tr>
            <th scope="row">09</th>
            <td>Annual Charge</td>
            <td><input type="text" id="annfee" onkeyup="find_total()" name="annfee"></td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Other Charge</td>
            <td><input type="text" id="otherfees" onkeyup="find_total()" name="otherfees"></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:right">Total:</td>
            <td><input type="text" id="total" onkeyup="due_details()" name="total"></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:right">Paid:</td>
            <td><input type="text" id="paid" onkeyup="due_details()" name="paid"></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:right">Due:</td>
            <td width="35px"><input type="text" id="due" name="due"></td>
          </tr>
         </tbody>
       </table>
      </div>
    </div>
    <div class="row">
      <div class="col ">
        <button type="submit" name="save" class="button">Submit</button>
        </div>
        </div>
    </form>
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <script>
    
 function paymenttt(){
    debugger;
    var admwise= $('#admwise').val();
  $.ajax({
    type : 'POST',
    url : '../action.php',
    data: {admwise:admwise, payments:'payments'},
    dataType: 'JSON',
    success: function(result){
        $('#rollno').val(result.rollno)
        $('#stdname').val(result.stdname)
        $('#class').val(result.class)
        $('#section').val(result.section)
        $('#fname').val(result.fname)
        
        alert(result);
        // console.log(result);
        // $('#months').val(result.months)
    }

  });
}
 //find total:-------
function find_total(){
  var fee = $('#fee').val();
  var fine = $('#fine').val();
  var xmfees = $('#xmfees').val();
  var game = $('#game').val();
  var books = $('#books').val();
  var lib = $('#lib').val();
  var trans = $('#trans').val();
  var comp = $('#comp').val();
  var annfee = $('#annfee').val();
  var otherfees = $('#otherfees').val();
if (fee == "")
 var fee= 0;
 if (fine=="")
 var fine= 0;
 if(xmfees=="")
 var xmfees= 0;
 if(game=="")
 var game= 0;
 if(books=="")
 var books= 0;
 if(lib=="")
 var lib= 0;
 if(trans=="")
 var trans= 0;
 if(comp=="")
 var comp= 0;
 if(annfee=="")
 var annfee= 0;
 if(otherfees=="")
 var otherfees= 0;

 var Total =(parseFloat(fee) + parseFloat(fine) + parseFloat(xmfees) + parseFloat(game) + parseFloat(books)
 + parseFloat(lib) + parseFloat(trans) + parseFloat(comp) + parseFloat(annfee) + parseFloat(otherfees));
 var Final = parseFloat(Total);
 $('#total').val(Final);

}

function due_details(){
  var total = $('#total').val();
  var paid = $('#paid').val();
  var due = (parseFloat(total)-parseFloat(paid));
  $('#due').val(due);
}




  </script>




  <!-- Main Footer -->

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<?php include "layouts/js.php";?>


</body>
</html>
