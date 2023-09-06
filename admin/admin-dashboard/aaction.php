<?php
session_start();
include '../connection.php';

// banner uploads:----
function BannerImageupload($dir, $inputname, $allext, $pass_width, $pass_height, $pass_size, $newname)
{
	if (file_exists($_FILES["$inputname"]["tmp_name"])) {
		//do this contain any file check
		$file_extension = strtolower(pathinfo($_FILES["$inputname"]["name"], PATHINFO_EXTENSION));
		$error = "";
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
		}
	} 
	return $error;
}

if (isset($_POST['banner_upload'])) {
   
	$photo = $_FILES['image']['name'];
    
	$photo = explode('.', $photo);
	$banner = time() . $photo[0];
	$dir = "../uploads/";
    // print_r($dir);die;
	$allext = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp", "WEBP");
	$check = BannerImageupload($dir, 'image', $allext, "192000", "70000", '100000000', $banner);
    // print_r($check);die;
	if ($check === true) {
		$banner .= ".jpg";

		if ($stmt = $conn->prepare("insert into banner set image=?")) {
			$stmt->bind_param('s', $banner);
			$stmt->execute();
			if ($stmt->affected_rows == 1) {
				$_SESSION['msg'] = "Banner Added Successfully !!!";
				header("Location: " . $_SERVER["HTTP_REFERER"]);
			} else {
				$_SESSION['msg'] = "User Not Added !!!";
				header("Location: " . $_SERVER["HTTP_REFERER"]);
			}
		} else {
			$_SESSION['msg'] = "User Not Added !!!";
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	} else {
		$_SESSION['msg'] = $check;
		header("Location: " . $_SERVER["HTTP_REFERER"]);
	}
}



//for Uploading Image:------

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


 if(isset($_POST['inserts'])){
	// $heading = $_POST['heading'];
    // echo "<pre>";
//    print_r($_POST);die;
    // print_r($_FILES);die;
	$image =  $_FILES['image']['name'];
    // print_r($_FILES);die;
	$photo = explode('.', $image);
	$image =  $photo[0];

	$dir = "../uploads/";
	$allext = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp", "WEBP");
	$check = Imageupload($dir, 'image', $allext, "19200", "7000", '10000000', $image);
	$image .= ".jpg";
	$msg1 = $_POST['msg1'];
	$msg2 = $_POST['msg2'];
	$msg3 = $_POST['msg3'];
	$msg4 = $_POST['msg4'];
	$msg5 = $_POST['msg5'];
	$q = "INSERT INTO `homemsgimage`( `msg1`,`msg2`,`msg3`,`msg4`,`msg5`,`image` ) VALUES ( '$msg1','$msg2','$msg3','$msg4','$msg5','$image')";
//    print_r($q);die;
  $query = mysqli_query($conn,$q);
  if($query==1){
	  $_SESSION['msg']="information added successfully";
    header("Location: " . $_SERVER["HTTP_REFERER"]);
	  
  }
 }
//  delete msg section
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($id==""){
        header('location:home_cms.php');
    }
    $sql= "delete from homemsgimage where id='$id'";
    if(mysqli_query($conn,$sql)===true){
        $_SESSION['msg']= ' Delete Successfully';
    }
    else{
        $_SESSION['msg']=' Not Delete Successfully';
    }
    header('location:home_cms.php');
}

//Insert People Section:-------
if(isset($_POST['inertpeople'])){
	//  print_r($_POST);die;
	$image =  $_FILES['image']['name'];
    
	$photo = explode('.', $image);
	$image =  $photo[0];

	$dir = "../uploads/";
	$allext = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp", "WEBP");
	$check = Imageupload($dir, 'image', $allext, "192000", "700000", '100000000', $image);
	$image .= ".jpg";
	$name = $_POST['name'];
	$details = $_POST['details'];
	
	$q = "INSERT INTO `homepeople`(`name`, `details`,`image` ) VALUES ('$name', '$details','$image')";
//    print_r($q);die;
  $query = mysqli_query($conn,$q);
  if($query==1){
	  $_SESSION['msg']="information added successfully";
    header("Location: " . $_SERVER["HTTP_REFERER"]);
	  
  }
}



//About section CMS:-------
if(isset($_POST['insertabout'])){
	//  print_r($_POST);die;
	$image =  $_FILES['image']['name'];
    
	$photo = explode('.', $image);
	$image =  $photo[0];

	$dir = "../uploads/";
	$allext = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp", "WEBP");
	$check = Imageupload($dir, 'image', $allext, "192000", "700000", '100000000', $image);
	$image .= ".jpg";
	$description = $_POST['description'];
	
	$q = "INSERT INTO `about_cms`( `description`,`image` ) VALUES ( '$description','$image')";
//    print_r($q);die;
  $query = mysqli_query($conn,$q);
  if($query==1){
	  $_SESSION['msg']="information added successfully";
    header("Location: " . $_SERVER["HTTP_REFERER"]);
	  
  }
}
// Delete About:----
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($id==""){
        header('location:aboutus_cms.php');
    }
    $sql= "delete from about_cms where id='$id'";
    if(mysqli_query($conn,$sql)===true){
        $_SESSION['msg']= ' Delete Successfully';
    }
    else{
        $_SESSION['msg']=' Not Delete Successfully';
    }
    header('location:aboutus_cms.php');
}
 //contact section CMS:------
 if(isset($_POST['insertcontact'])){
	
	
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	$q = "INSERT INTO `contact_cms`(`phonenumber`,`email`,`address` ) VALUES ('$phonenumber','$email','$address')";
	// print_r($q);die;
  $query = mysqli_query($conn,$q);

  if($query==1){
	  $_SESSION['msg']="information added successfully";
    header("Location: " . $_SERVER["HTTP_REFERER"]);
	  
  }
}
//delete contact section:---
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($id==""){
        header('location:contact_cms.php');
    }
    $sql= "update contact_cms set status='0' where id='$id'";
    if(mysqli_query($conn,$sql)===true){
        $_SESSION['msg']= ' Delete Successfully';
    }
    else{
        $_SESSION['msg']=' Not Delete Successfully';
    }
    header('location:contact_cms.php');
}
// Gallery Section CMS:-----
if(isset($_POST['insertgallery'])){
	$image =  $_FILES['image']['name'];
    
	$photo = explode('.', $image);
	$image =  $photo[0];

	$dir = "../uploads/";
	$allext = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp", "WEBP");
	$check = Imageupload($dir, 'image', $allext, "192000", "700000", '100000000', $image);
	$image .= ".jpg";

	$sql ="INSERT INTO `gallery_cms` (`image`) VALUES('$image')";
	$query = mysqli_query($conn,$sql);
	
	if($query==true){
		$_SESSION['msg']="Photo Added Successfully";
		header("Location: ". $_SERVER['HTTP_REFERER']);
	}
}

//delete gallery images:------
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($id==""){
        header('location:gallery_cms.php');
    }
    $sql= "update gallery_cms set status='0' where id='$id'";
    if(mysqli_query($conn,$sql)===true){
        $_SESSION['msg']= ' Delete Successfully';
    }
    else{
        $_SESSION['msg']=' Not Delete Successfully';
    }
    header('location:gallery_cms.php');
}
?>