<?php
include 'connection.php';


if(isset($_POST["login-btn"]))
{
$username = $_POST["uname"];
$password = $_POST["pw"];

$sql = "SELECT * FROM employee_tbl WHERE username = '$username' AND Password = '$password'";
$result = $db->query($sql);
if ($result->num_rows > 0)
  {
    while ($row = $result->fetch_assoc())
    {
      if($row["user_type"] == 'admin')
      {
        echo "<script> window.location.href='http://localhost/PROJECT/Project/1stproject/homepage.php' </script>  ";
        header("Location: {$url}");
        exit;
      }
      else
      {
        echo "Invalid user account. Contact your Administrator!";
        exit;
      }
    }
  $db->close();
  }

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Furniture Hub</title>
  <link rel="shortcut icon" type="image/png" href="MainIcon/accusoft-brands.png">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!---------style---------------------------------->

<link rel="stylesheet" href="landingpagestyle.css">

<link rel="stylesheet" href="logincss.css">

<script src="https://kit.fontawesome.com/ab7a215c3c.js" crossorigin="anonymous"></script>

<!----------------------------------------------->

<body>

<!----------------Header----------------------------------------------------->

<nav class="navbar navbar-light  fixed-top " style="background: rgb(126,224,255);
background: linear-gradient(90deg, rgba(126,224,255,1) 0%, rgba(66,224,233,1) 50%, rgba(105,255,203,1) 100%);">
  <div class="container-fluid" >

  	<a class="navbar-brand fw-bold text-white" href="#">FURNITURE HUB <i class="fab fa-accusoft"></i></a>


   
  
 

   
  </div>
</nav>

<!------------------------------------------------------------------------------>





<!-----------------------BODY / background--------------------------------------->




<div class="container contain-ss">
    
	<div class="d-flex justify-content-end h-100 mb-5 " style="margin-top: 100px;">
		<div class="card ">
			
			<div class="card-body shadow-sm ">
				<div class="font-weight-light mb-4"><p>SIGN IN</p></div>

				<!----------------------------------------------------------------------------------------form------------------------------------->

				<form method="post">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text justify-content-center"><i class="fas fa-user "></i></span>
						</div>
						<input type="text" name = "uname" class="form-control mb-4" placeholder="username"  required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text justify-content-center"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name = "pw" class="form-control mb-5" placeholder="password"  required>
					</div>
				
					<div class="form-group">
						<div class="d-flex justify-content-center mt-3 login_container">
						<input type="submit" name = "login-btn" value="Login" class="btnn float-right login_btnn">
						</div>
					</div>

				</form>

			<!--------------------------------------------------------------------------------------------------------------------------->
				
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center  links text-dark">
					Don't have an account?<a href="regis.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
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
</body>
</html>