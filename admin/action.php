<?php
session_start();
 include 'connection.php';
if(isset($_POST['login'])){
      //echo "<pre>";
 //print_r($_POST);

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql="select * from admin_login where password = '$password' and username= '$username'";
    $res = mysqli_query($conn,$sql);
    $numrows = mysqli_num_rows($res);
    if($numrows==1){
     echo "login successfully";
     $_SESSION['username'] = trim($_POST['username']);
     header('Location:admin-dashboard/');
    }
    else{
        $_SESSION['msg']="invalid username or password";
        header("Location:index.php");die;
    }
 
 }
if(isset($_POST['changepassword'])){
    
    $username= $_POST['username'];
    // print_r($_POST['username']); die;
    $sql= "select * from `admin_login` where `username`='$username' ";
    // print_r($sql);die;
    $query= mysqli_query($conn,$sql);
   
    $row= mysqli_fetch_assoc($query);
    // print_r($row); die;
    if(!empty($row['id'])){
        $_SESSION['id']=$row['id'];
       header("Location:changepassword.php");
    }
    else{
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}
if(isset($_POST['change_password'])){
//    print_r($_POST);die;
    $username= $_POST['username'];
    
    $newpassword = $_POST['newpassword'];
   
    $confirmpassword = $_POST['confirmpassword'];
  $sql= "update `admin_login` set 	`password` ='$newpassword' where status='1'";
    // print_r($sql);die;
  $query= mysqli_query($conn,$sql);
   
//   $row= mysqli_fetch_assoc($query);
    if($query==true){
        echo " password change successfully";
    }
}

 function Imageupload($dir, $inputname, $allext, $pass_width, $pass_height, $pass_size, $newname)
 {
     $error = "";
     if (file_exists($_FILES["$inputname"]["tmp_name"])) {
         //do this contain any file check
         $file_extension = strtolower(pathinfo($_FILES["$inputname"]["name"], PATHINFO_EXTENSION));
         
         if (in_array($file_extension, $allext)) {
             //file extension check
             list($width, $height, $type, $attr) = getimagesize($_FILES["$inputname"]["tmp_name"]);
             $image_weight = $_FILES["$inputname"]["size"];
             if ($width <= "$pass_width" && $height <= "$pass_height" && $image_weight <= "$pass_size") {
                 //dimension check
                 $tmp = $_FILES["$inputname"]["tmp_name"];
                 $extension[1] = "jpg";
                 //$extension = explode(".", $_FILES["$inputname"]["name"]);
                 $name = $newname . "." . $extension[1];
                 //$extension[1] ="jpg";
                 if (move_uploaded_file($tmp, "$dir" . $newname . "." . $extension[1])) {
                     return true;
                     //echo "$dir $newname.$extension[1]";
                 }
             } else {
                 $error .= "Please upload photo size of $pass_width X $pass_height";
                 //echo $error;
             }
         } else {
             $error .= "Please Upload an Image";
             //echo $error;
         }
     } else {
         //print_r($_FILES);
         $error .= "Please Select an Image";
         // $error;
     }
     return $error;
 }









if(isset($_POST['insert'])){
	// $heading = $_POST['heading'];
    // echo "<pre>";
//    print_r($_POST);die;
//     print_r($_FILES);die;
	$image =  $_FILES['image']['name'];
    
	$photo = explode('.', $image);
	$image =  $photo[0];

	$dir = "uploads/";
	$allext = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp", "WEBP");
	$check = Imageupload($dir, 'image', $allext, "1920", "700", '10000000', $image);
	$image .= ".jpg";
    // print_r($image);die;

    $signature =  $_FILES['signature']['name'];
    
	$photo1 = explode('.', $signature);
	$image1 =  $photo1[0];

	$dir = "uploads/";
	$allext = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp", "WEBP");
	$check = Imageupload($dir, 'signature', $allext, "1920", "700", '10000000', $image1);
	$image1 .= ".jpg";
	
	$stdname = $_POST['stdname'];
	// $price = $_POST['price'];
	$dob = $_POST['dob'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $rollno = $_POST['rollno'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $caste = $_POST['caste'];
    $language = $_POST['language'];
    $previousclass = $_POST['previousclass'];
    $idtype = $_POST['idtype'];
    $idnumber = $_POST['idnumber'];
    $admission_no = $_POST['admission_no'];
    $paddress = $_POST['paddress'];
    $nationality = $_POST['nationality'];
    $state = $_POST['state'];
    $distict = $_POST['distict'];
    $block = $_POST['block'];
    $pinnumber = $_POST['pinnumber'];
    $fname = $_POST['fname'];
    $foccupation = $_POST['foccupation'];
    $fphone = $_POST['fphone'];
    $mname = $_POST['mname'];
    $moccupation = $_POST['moccupation'];
    $mphone = $_POST['mphone'];
    // $image = $_POST['image'];
    // $signature = $_POST['signature'];
   
     $q = "INSERT INTO `sregistration`(`stdname`, `dob`, `class`,`section`,`rollno`, `email`, `phoneno`, `address`, `gender`, `caste`, `language`, `previousclass`, `idtype`, `idnumber`, `admission_no`, `paddress`, `nationality`, `state`, `distict`, `block`, `pinnumber`, `fname`, `foccupation`, `fphone`, `mname`, `moccupation`, `mphone`,`image`, `signature` )
      VALUES ( '$stdname', '$dob','$class','$section','$rollno','$email','$phoneno','$address','$gender','$caste','$language','$previousclass','$idtype','$idnumber','$admission_no','$paddress','$nationality','$state','$distict','$block','$pinnumber','$fname','$foccupation','$fphone','$mname','$moccupation','$mphone','$image', '$signature')";
//    print_r($q);die;
	$query = mysqli_query($conn,$q);
	if($query==1){
        $_SESSION['msg']="information added successfully";
		header('location:admin-dashboard/payment.php');
        
	}
   }

//delete registration details:---
if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
        // print_r($id);
    $sql= "update `sregistration` set status='0' WHERE `id`='$id'";
    
    $qry=mysqli_query($conn,$sql);
    if($qry==true){
        // echo"delete successfully";
        $_SESSION['msg']="deleted successfully";
        header("Location:".$_SERVER['HTTP_REFERER']);
    }
    else {
        // echo"something error";
        $_SESSION['msg']="Something Error";
        header("Location:".$_SERVER['HTTP_REFERER']);
    }
}
//update registration details:----
if(isset($_POST['update'])){
    // print_r($_POST);die;
    $id= $_POST['id'];
    $stdname= $_POST['stdname'];
    $class= $_POST['class'];
    $rollno= $_POST['rollno'];
    $dob= $_POST['dob'];
    $section= $_POST['section'];
    // $email= $_POST['email'];
    $phonenumber= $_POST['phoneno'];
    $sql= "UPDATE `sregistration` SET  `stdname`='$stdname', `class`='$class', `rollno`='$rollno', `dob`='$dob', `section`='$section', `phoneno`='$phonenumber' WHERE `id`='$id'";
    // print_r($sql);
    // die;
    $qry= mysqli_query($conn, $sql);
    if($qry==true){
        // echo'updated';
        $_SESSION['msg']="update Successfully";
        header ('Location:admin-dashboard/reglist.php');
    }
    else{
        echo"not updated";
    }

    // print_r($qry);
    echo $qry;
}



//    insert payment details:-

if(isset($_POST['save'])){

    $admission_no = $_POST['admission_no'];
    $receipt_no = $_POST['receipt_no'];
    $rollno = $_POST['rollno'];
    $class	 = $_POST['class'];
    $section = $_POST['section'];
    $stdname = $_POST['stdname'];
    $fname	= $_POST['fname'];
    $regno = $_POST['regno'];
    $paymentdate = $_POST['paymentdate'];
    $months = $_POST['months'];
    $pmode = $_POST['pmode'];
    $fee = $_POST['fee'];
    $fine = $_POST['fine'];
    $xmfees = $_POST['xmfees'];
    $game = $_POST['game'];
    $books = $_POST['books'];
    $lib = $_POST['lib'];
    $trans = $_POST['trans'];
    $comp = $_POST['comp'];
    $annfee = $_POST['annfee'];
    $otherfees = $_POST['otherfees'];
    $total = $_POST['total'];
    $paid = $_POST['paid'];
    $due = $_POST['due'];
    $added_on = date('Y-m-d');
    
    $q=" INSERT INTO `spayment`(`admission_no`,`receipt_no`,`rollno`,`class`,`section`,`stdname`,`fname`,`regno`,`paymentdate`,`months`,`pmode`,`fee`,`fine`,`xmfees`,`game`,`books`,`lib`,`trans`,`comp`,`annfee`,`otherfees`,`total`,`paid`,`due`,`added_on`)
     VALUES('$admission_no','$receipt_no','$rollno','$class','$section','$stdname','$fname','$regno','$paymentdate','$months','$pmode','$fee','$fine','$xmfees','$game','$books','$lib','$trans','$comp','$annfee','$otherfees','$total','$paid','$due','$added_on')";
    $query= mysqli_query($conn,$q);
    if($query==1){
        $last_id = $conn->insert_id;
        $_SESSION['last_id']= $last_id;
        // $id = `id`;
        // $_SESSION['id']= $id;
        // header('location: admin-dashboard/payReceipt.php');
    }
}

// payment listing admission number wise:-----
if(isset($_POST['listbtn'])){
    if (!empty($_POST['admsearch'])) {
        $admsearch = $_POST['admsearch'];
   
    $sql= "SELECT * FROM `spayment` WHERE `admission_no`= $admsearch";
    $query= mysqli_query($conn,$sql);
    $num_row= mysqli_num_rows($query);
    if($num_row >0 ){
        $i=0;
    
    while($row = mysqli_fetch_assoc($query)){
        $i++;
      $html = '<tr>';
      $html .= '<td>'.$i.'</td>';
      $html .= '<td>'.$row['receipt_no'].'</td>';
      $html .= '<td>'.$row['admission_no'].'</td>';
      $html .= '<td>'.$row['rollno'].'</td>';
      $html .= '<td>'.$row['class'].'</td>';
      $html .= '<td>'.$row['section'].'</td>';
      $html .= '<td>'.$row['stdname'].'</td>';
      $html .= '<td>'.$row['fname'].'</td>';
      $html .= '<td>'.$row['total'].'</td>';
      $html .= '<td>'.$row['paid'].'</td>';
      $html .= '<td>'.$row['due'].'</td>';
      


    //   $html.= '<td> <a href="" class="btn btn-sm btn-danger">Delete</a></td>';
      $html .= '</tr>';
      
    }
    echo $html;
}
else{
    $html = '<tr>';
    $html .= '<td colspan="9">No Record </td>';
    $html .= '</tr>';
    echo $html;
}
}
}
// payment listing class wise:----
if(isset($_POST['listclass'])){
    
    if(!empty($_POST['class_search'])){
        $class_search=$_POST['class_search'];
        
        $sql= "SELECT * FROM `spayment` WHERE `class`='$class_search'";
        // print_r($sql); die;
        $query = mysqli_query($conn,$sql);
        $num_row = mysqli_num_rows($query);
        if($num_row > 0){
            $i=0;
            while($row = mysqli_fetch_assoc($query)){
                $i++;
              $html = '<tr>';
              $html .= '<td>'.$i.'</td>';
              $html .= '<td>'.$row['receipt_no'].'</td>';
              $html .= '<td>'.$row['admission_no'].'</td>';
              $html .= '<td>'.$row['rollno'].'</td>';
              $html .= '<td>'.$row['class'].'</td>';
              $html .= '<td>'.$row['section'].'</td>';
              $html .= '<td>'.$row['stdname'].'</td>';
              $html .= '<td>'.$row['fname'].'</td>';
              $html .= '<td>'.$row['total'].'</td>';
              $html .= '<td>'.$row['paid'].'</td>';
              $html .= '<td>'.$row['due'].'</td>';
              $html .= '</tr>';
              echo $html;
            }
           
        }
        else{
            $html = '<tr>';
            $html .= '<td colspan="9">No Record </td>';
            $html .= '</tr>';
            echo $html;
        }
    }
}

// TOday payment Search:-----
if(isset($_POST['td_payment'])){
    
    if(!empty($_POST['tdy_search'])){
        $tdy_search=$_POST['tdy_search'];
        
        $sql= "SELECT * FROM `spayment` WHERE `added_on`='$tdy_search'";
        // print_r($sql); die;
        $query = mysqli_query($conn,$sql);
        $num_row = mysqli_num_rows($query);
        if($num_row > 0){
            $i=0;
            while($row = mysqli_fetch_assoc($query)){
                $i++;
              $html = '<tr>';
              $html .= '<td>'.$i.'</td>';
              $html .= '<td>'.$row['receipt_no'].'</td>';
              $html .= '<td>'.$row['admission_no'].'</td>';
              $html .= '<td>'.$row['rollno'].'</td>';
              $html .= '<td>'.$row['class'].'</td>';
              $html .= '<td>'.$row['section'].'</td>';
              $html .= '<td>'.$row['stdname'].'</td>';
              $html .= '<td>'.$row['fname'].'</td>';
              $html .= '<td>'.$row['total'].'</td>';
              $html .= '<td>'.$row['paid'].'</td>';
              $html .= '<td>'.$row['due'].'</td>';
              $html .= '</tr>';
              echo $html;
            }
           
        }
        else{
            $html = '<tr>';
            $html .= '<td colspan="9">No Record </td>';
            $html .= '</tr>';
            echo $html;
        }
    }
}

//TOday payment Search End:-----
//retrive data for payment:-
if(isset($_POST['payments'])){
    if (!empty($_POST['admwise'])) {
        $admwise = $_POST['admwise'];
   
    $sql= "SELECT * FROM `sregistration` WHERE `admission_no`= $admwise";
    $query= mysqli_query($conn,$sql);
    $num_row= mysqli_num_rows($query);
    if($num_row >0 ){
     
        $row = mysqli_fetch_assoc($query);

    $val= json_encode($row);
    echo $val;
}

}
}



?>