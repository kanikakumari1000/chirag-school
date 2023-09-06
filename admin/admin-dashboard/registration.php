




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="dist/css/reg.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">



    



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>registrationform</title>
  </head>
  <body>

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
   
   


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>



