<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Supplier list</title>
  <link rel="shortcut icon" type="image/png" href="MainIcon/accusoft-brands.png">

</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!---------style---------------------------------->

<link rel="stylesheet" href="orderstyle/orderstyle.css">

<script src="https://kit.fontawesome.com/ab7a215c3c.js" crossorigin="anonymous"></script>

<!----------------------------------------------->

<style>
table .lock{
    cursor: not-allowed;
  }

  table tr:hover{
    cursor: pointer;
    background: #BBC4C2;

  }
  table thead{
    background: #D91100;
  }
  table thead tr th{
    color: white;
    pointer-events: none;
  }
  .color tr:nth-child(even){background-color: #ededed;}
  .color td, .color th {
    
    padding: 8px;
  }

  #table-wrapper {
  position:relative;
  }
  #table-scroll {
    height:500px;
    overflow-y:auto;
    overflow-x: hidden;
    width: auto; 

  }
  #table-wrapper table {
    width:100%;


  }

  #table-wrapper table thead th .text {
    position:absolute;   
    top:-20px;
    z-index:2;
    height:20px;
    width:35%;
    border:1px solid red;
  }

.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  }

.button:hover {
  background-color: #40B5BC;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}
/* The side navigation menu */
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
  margin-top: 85px;
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

@media (hover: hover) {
  #creditcard {
    /*  set start position */
    transform: translateY(110px);
    transition: transform 0.1s ease-in-out;
    /*  set transition for mouse enter & exit */
  }

  #money {
    /*  set start position */
    transform: translateY(180px);
    transition: transform 0.1s ease-in-out;
    /*  set transition for mouse enter & exit */
  }

  button:hover #creditcard {
    transform: translateY(0px);
    transition: transform 0.2s ease-in-out;
    /*  overide transition for mouse enter */
  }

  button:hover #money {
    transform: translateY(0px);
    transition: transform 0.3s ease-in-out;
    /*  overide transition for mouse enter */
  }
}

@keyframes bounce {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-0.25rem);
  }
  100% {
    transform: translateY(0);
  }
}

.button1:hover .button__text span {
  transform: translateY(-0.25rem);
  transition: transform .2s ease-in-out;
}

/* styling */

@import url("https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap");

.button1 {
  border: none;
  outline: none;
  background-color: purple;
  padding: 5px 60px .5rem 1rem;
  position: relative;
  border-radius: 8px;
  letter-spacing: 0.7px;
  background-color: #171717;
  color: #fff;
  font-size: 15px;
  font-family: "Lato", sans-serif;
  cursor: pointer;
  box-shadow: rgba(0, 9, 61, 0.2) 0px 4px 8px 0px;
}

.button:active {
  transform: translateY(1px);
}

.button__svg {
  position: absolute;
  overflow: visible;
  bottom: 6px;
  right: 0.2rem;
  height: 140%;
}



</style>

<script>
  
  $(document).ready(function(){
  $('table tr').click(function(){
    var id = $(this).attr('row_id');
    var id2 = $(this).attr('row_id2');
    window.open("http://localhost/project/productupdate.php?id=" + id + "&Acc_ID=" + id2);
  });
}); 


  function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("whole").style.marginLeft = "250px";

}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("whole").style.marginLeft = "0";
}

</script>

<body>

	<!----------------Header----------------------------------------------------->

<nav class="navbar navbar-light  fixed-top " style="background: rgb(126,224,255);
background: linear-gradient(90deg, rgba(126,224,255,1) 0%, rgba(66,224,233,1) 50%, rgba(105,255,203,1) 100%);">

  <div class="container-fluid" >

  	<a class="navbar-brand fw-bold text-white" href="#">FURNITURE HUB <i class="fab fa-accusoft"></i></a>

  	<ul class="my-auto ">
       
       <a class="navbar-brand fs-6 text-white active">HOMEPAGE</a>
       <a class="navbar-brand fs-6 text-white" href="#">ABOUT</a>
       <a class="navbar-brand fs-6 text-white" href="#">SERVICES</a>
   </ul>
   
  
 

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dashboard 

          <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/nocovwne.json"
                trigger="loop"
                colors="primary:#121331,secondary:#08a88a"
                style="width:40px;height:40px">
            </lord-icon>

        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
          	 <div class="d-flex flex-column align-items-center text-center p-1 py-1"><img class="rounded-circle " width="80px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold fs-5">ADMIN NAME</span><span class="fs-6">ADMIN</span></div>

          	 <hr / style="color:#08f26e">

            <a class="nav-link active fw-bold mt-4" aria-current="page" href="#">GRAPH 

              <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
              <lord-icon
                  src="https://cdn.lordicon.com/fgkmrslx.json"
                  trigger="hover"
                  colors="primary:#121331,secondary:#08a88a"
                  style="width:40px;height:40px">
              </lord-icon>

            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link text-black"  href="#">ORDER LIST 

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
            <a class="nav-link text-black" href="#">CUSTOMER LIST

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
            <a  class="nav-link text-black" href="#">SUPPLIER LIST 

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
            <a  class="nav-link text-black" href="#">PRODUCT LIST 

             <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/wxnxiano.json"
                    trigger="hover"
                    colors="primary:#121331,secondary:#08a88a"
                    style="width:40px;height:40px">
                </lord-icon>


            </a>
          </li>
             <li class="nav-item">
            <a  class="nav-link text-black" href="#">EMPLOYEE LIST 

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
          	<a class="nav-link text-black" href="#">LOGOUT <i class="fas fa-sign-out-alt ms-2" id="dashicon"></i></a>
          </li>
          
        </ul>
       
      </div>
    </div>
  </div>
</nav>

<!------------------------------------------------------------------------------>


<!-------------------------------Body/ Middle---------------------------------->

<br><br><br>

<div class="container">
  
  <div class="p-3 mb-2 bg-light fw-bold"><i class="fas fa-info-circle mr-1"></i> SUPPLIER TABLE</div>

</div>


<div class="container">

      
      

<div class="d-flex " style="border: 0px solid black; ">

  <div class="me-auto mx-3">
  <nav >
   <input type="search" id = "search" class="firstname text text-box">
          <button onclick ="search()" onkeyup="search()" onchange="search()" class="btn btn-primary">Search</button>
</nav>
    </div>
      <div class="mx-3">
        <a href="#" style="text-decoration: none;"><div class="wrap"><button class="button">ADD SUPPLIER</button></div>
          </a>
      </div>

  </div>

  <div class=" shadow-lg">

      <!------------table---------------------------------------------->
  <div id="table-wrapper ">
      <div id="table-scroll">
  <table   class="table table-hover my-1 caption-top table-borderless">
  <thead class="table-dark">
    <tr >
      <th class="fw-light">RecordID</th>
      <th class="fw-light">SupplierName</th>
      <th class="fw-light">Address</th>
      <th class="fw-light">ContactPerson</th>
      <th class="fw-light">ContactNos</th>
      <th class="fw-light">EmailAddress</th>
      <th class="fw-light">Remarks</th>
      <th class="fw-light"></th>
    
      
    </tr>
  </thead>
      <tbody class="color">


               <?php
        
        include 'connection.php';
       
       
        $sql = "SELECT * FROM suppliers_tbl";

        $result = $db->query($sql);
        
        if($result->num_rows>0){

          // output data of each row

         while($row=$result->fetch_assoc()){

          $order_id = $row["RecordID"];
          $customer_id = $row["SupplierName"];
          $orderdetails_id =$row["Address"];
          $order_amt = $row["ContactPerson"];
          $order_stat = $row["ContactNos"];
          $encoder_id = $row["EmailAddress"];
          $remarks = $row["Remarks"];

           echo 
          "<tr row_id='$order_id'>
            <td>$order_id</td>" 
          ."<td>$customer_id</td>" 
          ."<td>$orderdetails_id</td>"
          ."<td>$order_amt</td>"
          ."<td>$order_stat</td>"
          ."<td>$encoder_id</td>"
          ."<td>$remarks</td>"
           . "<td><button type='button' class='btn btn-dark'>Click</button></td>
           </tr>";

          }
          echo "</table>";
          }else{
         echo "0 results";}
           $db->close();
        ?>
         </tbody>
        </table>
      </div>
    </div>
  </div>

        <!---------------------------------------action button update and delete-------------------------------------------------------->

          




        <!-----------------add product------------------------------------------------------->
      

      <!-- Large modal -->
      
        


  </div><!--endtag ng container-->



<!---------------------------------------------------------------------->



<!--------------------------- Site footer -------------------------------------->
<br>

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


<script>
  function search(){
          var inputs, filter, table, table_row, i, table_data, data_value;
          input = document.getElementById('search');
          filter = input.value.toUpperCase();
          table = document.getElementById('log_table');
          table_row = document.getElementsByTagName('tr');

          
          for (i = 0; i < table_row.length; i++){
             table_data = table_row[i].getElementsByTagName('td')[0];
             if (table_data){
             data_value = table_data.textContent || table_data.innerText;
              if (data_value.toUpperCase().indexOf(filter) > -1){
                table_row[i].style.display = "";
              }
              else{
                table_row[i].style.display = "none";
              }
            }
          }


          
        }
  </script>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>