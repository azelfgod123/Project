
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order Product</title>
  <link rel="shortcut icon" type="image/png" href="MainIcon/accusoft-brands.png">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!---------style---------------------------------->

<link rel="stylesheet" href="landingpagestyle.css">

<link rel="stylesheet" type="text/css" href="Product_css/product_info.css">

<script src="https://kit.fontawesome.com/ab7a215c3c.js" crossorigin="anonymous"></script>

<!----------------------------------------------->
<style>
     .hr{
    border: 1px solid grey;
    margin-bottom: 3rem;
  }
  .drop0{
  position: relative;
}
.drop1, .drop2, .drop3, .drop4{
  display: inline-block;
  margin: 10px;
}
.drop1{
  font-size: 16px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.drop2{
  margin-left: 20px;
  border: 2px solid;
  
}
.drop3{
  margin-left: 10px;
}
.drop-down{
    width: 70px;
    font-weight: 600;
    border: 1px solid;

}
.quan{
    font-weight: 600;
    text-transform: uppercase;
}
.form-select{
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.btn10{
  border: 2px solid white;
  border-radius: 5px;
  padding: 10px 10px;
  color: white;
  background: #141414;
  outline: none;
  font-weight: 700;
  letter-spacing: 1px;
  font-size: smaller;
  text-transform: uppercase;
}
.btn10:hover{
  border: 2px solid black;
  border-radius: 5px;
  padding: 10px 10px;
  color: black;
  background: white;
  outline: none;
  font-weight: 700;
  letter-spacing: 1px;
  font-size: smaller;
  text-transform: uppercase;
}
.ex100 {
   display: flex;
    position: relative;
    
    
}
.box-drop{
  width: 170px;
  font-size: x-small;
}

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

<br>

<div class="container">

  <div class="product_container">
 
  <div class="p-3 mt-4 bg-light fw-bold text-black text-uppercase"><i class="fas fa-info-circle mr-1"></i> Product</div> 

  <?php 
  include 'connection.php';





   ?>
<form method="POST">
  <div class="container mt-4 mb-2 drop0">

<div class="drop1"><label class="labels">New Order*</label></div>

<div class="drop2">
<select class="form-select form-control box-drop" name="" >
 <option   value=''>-- SELECT PRODUCT --</option>
 <?php  

 $select_sql = "SELECT * FROM product_tbl";
 $result = mysqli_query($db,$select_sql);
  if($result->num_rows>0){
 while ($row=$result->fetch_assoc()) {

  $Pname = $row['ProductName'];
  $Desc = $row['Description'];

   echo "<option  value='$Pname'>$Pname</option>";
 }
}

 ?>
 
 
 </select>
</div>

<div class="drop3">

    <label class="labels card-text quan">Quantity</label>


</div>
<div class="drop4">
<input type="number" min = "1" aria-label="" class="form-control drop-text drop-down" name = "" required>
</div>



</div>

<div class="mt-2  col-md-12"><label class="labels">Product Price:</label><input type="text" class="form-control" name=""  value=""></div>

<div class="mt-2  col-md-12"><label class="labels">Product Category:</label><input type="text" class="form-control" name=""  value=""></div>


<div class="mt-2 mb-2  col-md-12"><label class="labels">Product Status:</label><input type="text" class="form-control" name=""  value=""></div>


<span class="text  text-black" style="font-size: 13px;">Description <i class="fas fa-asterisk text-info" style="font-size: 10px;"></i></span>
    <div class="input-group">
     
      <textarea class="form-control mt-1" name= "Description" placeholder="Description" aria-label="With textarea"></textarea>
  </div>



  
                  <div class="p-3 mt-4 bg-light fw-bold text-black text-uppercase"><i class="fas fa-info-circle mr-1"></i> Fill the Requirement</div>       

                  <div class="mt-2 col-md-12"><label class="labels">Customer Name:</label><input type="text" class="form-control" name="" placeholder="enter full name" value=""></div>

                  <div class="mt-2 col-md-12"><label class="labels">Customer Mobile #:</label><input type="text" class="form-control" name="" placeholder="enter mobile #" value=""></div>

                
                  <div class="mt-2 col-md-12"><label class="labels">Customer Address House# brgy:</label><input type="text" class="form-control" name="" placeholder="enter full address" value=""></div>

                  <div class="mt-2 col-md-12"><label class="labels">Customer Address City | Municipality:</label><input type="text" class="form-control" name="" placeholder="enter full address" value=""></div>

                  <div class="mt-2 col-md-12"><label class="labels">Customer Address Province:</label><input type="text" class="form-control" name="" placeholder="enter full address" value=""></div>



                <div class="ex100">

                <span class="icon-input-btn mt-4 btnnnn ">
                    <button class="btn10 "> New Order </button>
                  </span>

                  </form>
                  

                </div>  

                <div class="clear"></div>

   <div style="margin-top: 30px;">
  <center> <a class="navbar-brand fw-bold text-info mt-4" style="font-size: 15px;">FURNITURE HUB <i class="fab fa-accusoft"></i></a></center>
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