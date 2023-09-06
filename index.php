<?php
include 'admin/connection.php';

$sql="select * from banner where status='1' ";
$query= mysqli_query($conn,$sql);

// print_r($row);die;
while($row= mysqli_fetch_assoc($query)){
    $banner[] =$row;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="attachment/css/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>ChiragPublicSchoolFrontEnd</title>
   
</head>
<style>
    .card{
        border:2px solid aqua;
        box-shadow:2px 2px 10px aqua;
    }
    
</style>
<body>
  <?php include 'attachment/header.php'?>

    
    <div class="section-slider">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                if(!empty($banner)){
                    foreach ($banner as $key => $value) {
                       if($key==1){
                        ?>
                        <div class="carousel-item active">
                          <img src="admin/uploads/<?php echo $value['image'];?>" class="d-block w-100" alt="..." style="height:500px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Chirag Public School</h5>
                                <p></p>
                            </div>
                         </div>
                        
                        
                        <?php
                        
                       } else{
                        ?>
                        <div class="carousel-item">
                          <img src="admin/uploads/<?php echo $value['image'];?>" class="d-block w-100"  style="height:500px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Chirag Public School</h5>
                                <p></p>
                            </div>
                        </div>
                        
                        <?php

                       }
                    }
                }
                
                
                
                ?>
                <!-- <div class="carousel-item active">
                    <img src="attachment/images/slider1.jpg" class="d-block w-100" alt="..." style="height:500px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Chirag Public School</h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="attachment/images/slider2.jpg" class="d-block w-100"  style="height:500px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Chirag Public School</h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="attachment/images/slider3.jpg" class="d-block w-100" alt="..." style="height:500px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Chirag Public School</h5>
                        <p></p>
                    </div>
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
    <div class="section">
        <marquee style="background-color:black;color:white;height:30px;" behavior="" direction="right">। हर घर शिक्षा ।। हर घर शिक्षा ।। हर घर शिक्षा ।</marquee>
    </div>
    <div class="container message py-5">
        <div class="row">
            <?php 
               $sql="select * from `homemsgimage` where status='1' ";
               $query= mysqli_query($conn,$sql);
               $row= mysqli_fetch_assoc($query);
            //    print_r($row);die;
            //    while($row= mysqli_fetch_assoc($query)){
            //     print_r($query);die;
            //        $msg1[] =$row;
            //        $msg1[] =$row;
            //    }
            
            ?>
            <div class="col-md-7">
                <div class="text-section">
                    <h3 style="text-align:center;">Messages</h3><br>
                    <div class="card bg-primary">
                        <!-- <div class="card-body">To Provide quality Education to the Children.</div> -->
                        <div class="card-body"><?php echo $row['msg1'];?></div>
                    </div>
                    <div class="card bg-danger">
                        <!-- <div class="card-body">To imbibe Leadership Quality amongst the students.</div> -->
                        <div class="card-body"><?php echo $row['msg2']?></div>
                    </div>
                    <div class="card bg-success">
                        <!-- <div class="card-body">To strengthen the moral values and invigorate cultural ethoes.</div> -->
                        <div class="card-body"><?php echo $row['msg3']?></div>
                    </div>
                    <div class="card bg-warning">
                        <!-- <div class="card-body">To mould character, inculcate discipline and spirit of unity amongst the students.</div> -->
                        <div class="card-body"><?php echo $row['msg4']?></div>
                    </div>
                    <div class="card bg-info">
                        <!-- <div class="card-body">Work hard,be kind,and amazing things will happen.</div> -->
                        <div class="card-body"><?php echo $row['msg5']?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img src="attachment/images/about1.jpg" alt="" style="height:400px;width:300px;">
            </div>
        </div>
    </div>
    <div class="container people py-5">
        <div class="row">
            <?php
        $sql = "select * from homepeople where status = '1' ";
      // debugger;
      // print_r($sql);die;
     $res = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($res)) {
        $variable[]=$row;
      }
        foreach ($variable as $key => $value){
                  

?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="admin/uploads/<?php echo $value['image'];?>" class="card-img-top" style="height:200px;width:17.8rem;">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center;"><?php echo $value['name'];?></h5>
                        <p class="card-text" style="text-align:center;"><?php echo $value['details'];?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="attachment/images/card3.jpg" class="card-img-top" style="height:200px;width:17.8rem;">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center;">Vice Principle</h5>
                        <p class="card-text" style="text-align:center;">prof. Rekha kumari</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width:18rem;">
                    <img src="attachment/images/card1.jpg" class="card-img-top" style="height:200px;width:17.8rem;">
                    <div class="card-body">
                        <h5 class="card-title"style="text-align:center;">Director</h5>
                        <p class="card-text" style="text-align:center;">Prof. Kanika Kumari</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="container address py-5">
        <h3 align="center"><u>Contact Us</u></h3>
        <div class="row">
            <div class="col-md-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35974374.92190956!2d79.92225582688472!3d25.384132356852792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f44b9d0160dac1%3A0xb153b88d5de041bc!2sMuri%2C%20Jharkhand%20835101!5e0!3m2!1sen!2sin!4v1656164147187!5m2!1sen!2sin" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-md-7">
                <input type="text" name="name" placeholder="Enter Name" style="width:100%;margin:5px;"><br>
                <input type="email" name="email" placeholder="Enter Email" style="width:100%;margin:5px;"><br>
                <input type="text" name="subject" placeholder="Enter Subject" style="width:100%;margin:5px;"><br>
                <textarea name="message" placeholder="Message" cols="30" rows="6" style="width:100%;margin:5px;"></textarea><br>
                <center> <button name="button" class="btn btn-success">Send Message</button></center>
            </div>
        </div>
    </div>
    <!-- <div class="section footer py-5" style="background-color:black;width:100%;height:50%; margin-top:0px;">
       <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3" style="color:white;">
           <h5>Quick Access</h5>
           <a href="">Home</a><br>
           <a href="#">about</a><br>
           <a href="#">Gallery</a><br>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3" style="color:white;">
          <h5>Address</h5>
          <p >Chirag Public School,Jharkhand More Muri</p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3" style="color:white;">
          <h5>FollowUs On</h5>
          <i class="fa-brands fa-facebook"><span>Facebook</span></i><br>
          <i class="fa-brands fa-instagram">Instagram</i><br>
        </div>
       </div>
    </div> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    <?php
     include 'attachment/footer.php';
    ?>
</body>

</html>