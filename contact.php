<?php
include 'admin/connection.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>about_section</title>
</head>

<body>
    <?php 
    include('attachment/header.php');
    ?>
    <div class="section" style="background-color:lightyellow;width:100%;height:500px">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-7">
                <?php
                       $sql="select * from `contact_cms` where status='1' ";
                       $res=mysqli_query($conn,$sql);
                       $row=mysqli_fetch_assoc($res);
                    
                      
                       ?>
                <div class="box" style="width:100%;height:300px;border:2px solid yellow;box-shadow:1px 2px 10px black;">
                    <h4 style="text-align:center;text-decoration:underline">Contact Information</h4>
                    <div class="info-field" style="text-align:center;margin-bottom:10px;">
                        <!-- <span>Contact Number:<b>+91-9709125416</b></span><br> -->
                        <span>Contact Number:<b><?php echo $row['phonenumber'];?></b></span><br>
                        <span>Email Address:<b><?php echo $row['email'];?></b></span><br>
                        <span>Address:<b><?php echo $row['address'];?></b></span><br>
                    </div>
                </div>
                </div>
                <div class="col-md-5">

                </div>
            </div>
        </div>
    </div>


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
   include('attachment/footer.php');
   ?>
</body>

</html>