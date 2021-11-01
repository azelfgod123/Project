<?php 
  include 'connection.php';
  if(isset($_POST['save'])){
      $FirstName=$_POST['FirstName']; 
      $MidName=$_POST['MidName']; 
      $LastName=$_POST['LastName']; 
      $BirthDate=$_POST['BirthDate'];
      $Gender=$_POST['Gender']; 
      $Address=$_POST['Address'];
      $ContactNos=$_POST['ContactNos'];
      $EmailAddress=$_POST['EmailAddress'];
      $BloodType=$_POST['BloodType'];
      
      $employee_insert="INSERT INTO employee_tbl (FirstName, MidName, LastName, BirthDate, Gender, Address, ContactNos, EmailAddress, BloodType) VALUES ('$FirstName', '$MidName', '$LastName', '$BirthDate', '$Gender', '$Address', '$ContactNos', '$EmailAddress', '$BloodType')"; 
      $insert_employee= mysqli_query($db, $employee_insert); 
      if($insert_employee){ 
        header('Location: employeetable.php');
        Echo"<script>alert('Product has been inserted!')</script>";     
      }
    } 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adding New Employee</title>
  <link rel="shortcut icon" type="image/png" href="MainIcon/accusoft-brands.png">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!---------style----------------ahhahha------------------>

<link rel="stylesheet" href="landingpagestyle.css">

<link rel="stylesheet" type="text/css" href="Product_css/product_info.css">

<link rel="stylesheet" type="text/css" href="Employee_css/Employee.css">



<script src="https://kit.fontawesome.com/ab7a215c3c.js" crossorigin="anonymous"></script>

<!----------------------------------------------->
<style>
    .icon-input-btn{
        display: inline-block;
        position: relative;
    }
    .icon-input-btn input[type="submit"]{
        padding-left: 2em;
    }
    .icon-input-btn .fas{
        display: inline-block;
        position: absolute;
        left: 0.65em;
        top: 30%;
    }

</style>

<body>

<!----------------Header----------------------------------------------------->
<form method="post"  enctype="multipart/form-data" >


<nav class="navbar navbar-light  fixed-top " style="background: rgb(126,224,255);
background: linear-gradient(90deg, rgba(126,224,255,1) 0%, rgba(66,224,233,1) 50%, rgba(105,255,203,1) 100%);">
  <div class="container-fluid" >

  	<a class="navbar-brand fw-bold text-white" href="homepage.php">FURNITURE HUB <i class="fab fa-accusoft"></i></a>

  	
   
  
 

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">FURNITURE HUB <i class="fab fa-accusoft"></i>

        

        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
          	 <div class="d-flex flex-column align-items-center text-center p-1 py-1"><img class="rounded-circle " width="80px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold fs-5">ADMIN NAME</span><span class="fs-6">ADMIN</span></div>

          	 <hr / style="color:#08f26e">

            

          </li>
          <li class="nav-item">
            <a class="nav-link text-black"  href="orderlisttable.php">ORDER LIST 

              <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/iltqorsz.json"
                    trigger="hover"
                    colors="primary:#121331,secondary:#08a88a"
                    style="width:40px;height:40px">
                </lord-icon>

            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link text-black" href="customertable.php">CUSTOMER LIST

                <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/dxjqoygy.json"
                    trigger="hover"
                    colors="primary:#121331,secondary:#08a88a"
                    style="width:40px;height:40px">
                </lord-icon>


            </a>
          </li>
           <li class="nav-item">
            <a  class="nav-link text-black" href="supplierlisttable.php">SUPPLIER LIST 

              <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                  <lord-icon
                      src="https://cdn.lordicon.com/jvucoldz.json"
                      trigger="hover"
                      colors="primary:#121331,secondary:#08a88a"
                      style="width:40px;height:40px">
                  </lord-icon>


            </a>
          </li>
           <li class="nav-item">
            <a  class="nav-link text-black" href="Producttable.php">PRODUCT LIST 

            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/nocovwne.json"
                trigger="loop"
                colors="primary:#121331,secondary:#08a88a"
                style="width:40px;height:40px">
            </lord-icon>


            </a>
          </li>
             <li class="nav-item">
            <a  class="nav-link text-black" href="employeetable.php">EMPLOYEE LIST 

           <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/eszyyflr.json"
                  trigger="hover"
                  colors="primary:#121331,secondary:#08a88a"
                  style="width:40px;height:40px">
              </lord-icon>


            </a>
          </li>

         <hr class="mt-2" style="color:#08f26e">
          <li class="nav-item">
          	<a class="nav-link text-black" href="Login.php">LOGOUT <i class="fas fa-sign-out-alt ms-2" id="dashicon"></i></a>
          </li>
          
        </ul>
       
      </div>
    </div>
  </div>
</nav>

<!------------------------------------------------------------------------------>









<!-----------------------BODY / background--------------------------------------->

<br><br>

<div class="container container1">

  


  <div class="container container1 bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-sm-4 col border-right" style="background: background: rgb(126,224,255);
background: linear-gradient(90deg, rgba(126,224,255,1) 0%, rgba(66,224,233,1) 50%, rgba(105,255,203,1) 100%);">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col col border-right">

              <div class="closer mt-2">
                   <a href="employeetable.php"><i class="material-icons">close</i></a>
               </div>


            <div class="p-3 py-4">

                    
                    <div class="p-3 bg-light fw-bold text-black"><i class="fas fa-info-circle mr-1"></i> INSERTING NEW EMPLOYEE</div>

              
                <div class="row mt-2">

                <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" name="" placeholder="Username" value=""></div>

                <div class="col-md-6"><label class="labels">Password</label><input type="password" class="form-control" name="" placeholder="Password" value=""></div>

                <div class="col-md-6"><label class="labels">User type</label>

                        <select class="form-select form-control" name="" >
                        <option value=''>-- select one --</option>
                        <option value="Admin">Admin</option>
                        <option value="Employee">Employee</option>
                        </select>

                  </div>


                <hr  class="mt-3">

                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" name="FirstName" placeholder="first name" value=""></div>

                    <div class="col-md-6"><label class="labels">Middle Name</label><input type="text" class="form-control" name="MidName" value="" placeholder="middle name"></div>

                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" name="LastName" value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    
                    <div class="col-md-12"><label class="labels">Contact Number</label><input type="text" name="ContactNos" class="form-control" placeholder="enter contact number" value=""></div>
                    
                    <div class="col-md-12"><label class="labels">Address </label><input type="text" class="form-control" name="Address" placeholder="enter address line " value=""></div>
                    
                    <div class="col-md-12"><label class="labels">Blood type</label><input type="text" class="form-control" name="BloodType" placeholder="enter blood type" value=""></div>
                    
                   
                    
                    <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control" name="EmailAddress" placeholder="enter email id" value=""></div>

                    
                </div>
                <div class="row mt-3">

                    <div class="col-md-6"><label class="labels">Birth Date</label><input type="date" name="BirthDate" class="form-control"  value=""></div>

                    <div class="col-md-6"><label class="labels">Gender</label>

                      <select class="form-select form-control" name="Gender" >
                       <option value=''>-- select one --</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                       </select>

                      


                    </div>
                </div>

                <center>
                  <span class="icon-input-btn mt-5">
                    <i class="fas fa-file-upload text-white"></i> 
                    <input type="submit" name="save" class="btn btn1  text-white " value="SAVE">
                  </span>
                </center>
                
            </div>

            <div style="margin-top: 10px; margin-bottom: 15PX;">
          <center> <a class="navbar-brand fw-bold text-info mt-4" style="font-size: 15px;">FURNITURE HUB <i class="fab fa-accusoft"></i></a></center>
        </div>


        </div>

       
    </div>
</div>
</div>
</div>




  
</div>











<!------------------------------------------------------------------------------>




<!--------------------------- Site footer -------------------------------------->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

<!--------------------------------------------------------------------------------------->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</form>
</body>
</html>