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

    <title>gallery_section</title>
</head>
<style>
    img:hover {
  transform: scale(1.5);
    }
</style>

<body>
    <?php 
    include('attachment/header.php');
    ?>
    <div class="section" style="background-color:lightyellow;width:100%;">
        <div class="container container-fluid py-5">
            <div class="row">
                <?php
                 $sql= " SELECT * FROM  `gallery_cms` WHERE status='1' ";
                 $query= mysqli_query($conn,$sql);
                 while ($row= mysqli_fetch_assoc($query)){
                    $variable[] = $row;
                 }
                 foreach ($variable as $key => $value){
                ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="admin/uploads/<?php echo $value['image'];?>" alt="" class="img-fluid img-thumbnail" style="height:200px;width:300px;margin:5px;">
                </div>
                <?php }?>
                
               
            </div>
            <!-- <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="attachment/images/gallery4.jpg" alt="" class="img-fluid img-thumbnail" style="height:200px;width:300px;margin:5px;">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="attachment/images/gallery5.jpg" alt="" class="img-fluid img-thumbnail" style="height:200px;width:300px;margin:5px;">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="attachment/images/gallery9.jpg" alt="" class="img-fluid img-thumbnail" style="height:200px;width:300px;margin:5px;">
                </div>
               
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="attachment/images/gallery6.jpg" alt="" class="img-fluid img-thumbnail" style="height:200px;width:300px;margin:5px;">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="attachment/images/gallery7.jpg" alt="" class="img-fluid img-thumbnail" style="height:200px;width:300px;margin:5px;">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="attachment/images/gallery8.jpg" alt="" class="img-fluid img-thumbnail" style="height:200px;width:300px;margin:5px;">
                </div>
               
            </div> -->
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
<?php  include ('attachment/footer.php');?>
</body>

</html>