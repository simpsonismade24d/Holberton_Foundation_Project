
<?php
 $user = 0;
 $success = 0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connection.php';
    $username=$_POST['username'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $password=$_POST['password'];
    
   $sql = "select * from portfolio where username = '$username'"; 
   $result=mysqli_query($con,$sql);
   if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      $user = 1;
    }else{
       $hashed_password = password_hash($password,PASSWORD_DEFAULT);
       $sql="insert into portfolio(username,email,country,password)values('$username','$email','$country','$hashed_password')";
       $result=mysqli_query($con,$sql); 

       if($result){
          $success = 1;
          header('location:login.php');
          echo "Registration successful, you can now log in";
          }else{
           die(mysqli_error($con));
    }
    }
   }
}
?>

<!DOCTYPE html>
<html>
    <head>
         <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <title>sign Up</title>
    </head>   
  <!-- body -->
 
<body class="main-layout">
<?php
if($user){
    echo '<div class="alert alert-danger" role="alert">
    <strong>Oop! sorry.. that username already exists, try to user another one.</strong>
   </div>';
  }
  ?> 


    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.jpg" alt="logo"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.html">Home</a> </li>
                                        <li> <a href="about.html">about </a> </li>
                                        <li> <a href="album.html"> Albums</a> </li>
                                        <li> <a href="blog.html">Blog</a> </li>
                                        <li> <a href="contact.html">Contact Us</a> </li>
                                        <li> <a href="register.html">Sign Up</a> </li>
                                        <li> <a href="login.php">Login</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <form class="search">
                            <input class="form-control" type="text" placeholder="Search">
                            <button><img src="images/search_icon.png"></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->
    <!--  footer -->
    <footer id="footer_with_contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Fill and submit the form below</h3>
                            <form action="signup.php" method ="post">
                                <div class="row">
                                    
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="username" type="text" name="username">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="email" type="text" name="email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="country" type="text" name="country"></input>
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Enter your Password" type="password" name="password"></input>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary" type="submit">Sign up</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Latest Updates </h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music1.png" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music2.jpg" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music3.jpg" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music4.jpg" /></figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>© 2023 All Rights Reserved | Sim-Technologies</p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });

        // Front-end code for user signup 

const signupForm = document.getElementById('signup-form');

signupForm.addEventListener('submit', async (e) => {
  e.preventDefault();

  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  const formData = { email, password };

  try {
    const response = await fetch('/signup', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formData),
    });

    if (response.ok) {
      // User signup successful
      const data = await response.json();
      console.log(data.message);
    } else {
      // User signup failed
      const errorData = await response.json();
      console.log(errorData.message);
    }
  } catch (error) {
    console.error('Error:', error);
  }
});

    </script>
  </body> 
  
</html>