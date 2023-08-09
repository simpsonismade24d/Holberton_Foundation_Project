<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}

?>

<?php
$executed = 0;
$client = 0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connection.php';
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql = "select * from feedback where name = '$name'"; 
   $result=mysqli_query($con,$sql);
   if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      $client = 1;
    }else{
       $sql="insert into feedback(name,phone,email,message)values('$name','$phone','$email','$message')";
       $result=mysqli_query($con,$sql); 
       if($result){
          $executed = 1;
          }
          else{
           die(mysqli_error($con));
    }
    }
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Song Recommendation System</title>
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
</head>
<!-- body -->

<body class="main-layout">
    
    <div class="alert alert-success" role="alert">
    <h1>
    <strong>Welcome
    <?php 
    echo $_SESSION['username']; 
    ?>!</strong>
    </h1>
  </div>

<?php
if($executed){
    echo '<div class="alert alert-success" role="alert">
    <strong> Your message is sent, thanks for contacting us!</strong>
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
                                    <a href="homepage.php"><img src="images/logo.jpg" alt="logo"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="homepage.php">Home</a> </li>
                                        <li> <a href="about.html">about</a> </li>
                                        <li> <a href="album.html"> Albums</a> </li>
                                        <li> <a href="blog.html">Blog</a> </li>
                                        <li> <a href="articles.html">Love Articles</a> </li>
                                        <li> <a href="contactus.php">Contact Us</a> </li>
                                        <li><a href="logout.php">Log out</a> </li>
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
            
            <!-- end header -->
    </header>
    
    <section class="banner_section">
        <div class="banner-main">
            <img src="images/banner2.jpg" />
            <div class="container">
                <div class="text-bg relative">
                    <h1><span class="Perfect">Songs Recommender</span>
                    <br> Click on the Albums to enjoy our array of songs!
                    <br>Welcome to a world of Songs</h1>
                    <p>Great songs are food for the soul, body and spirit.
                        <br> They can be perfect relief from stress and pressure! You can dowload to enjoy offline</p>
                </div>

            </div>
        </div>

    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
                
                </div>
            </div>
        </div>
    </div>

    <div id="screenshot" class="Lastestnews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="images/1.jpg" alt="img" /></figure>
                        <h3>Live With Music</h3>
                        <p>Great song can improve your health performace</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="images/2.jpg" alt="img" /></figure>
                        <h3>Best Music</h3>
                        <p>Life is busy and engaged, take a moment to enjoy good music</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="images/3.jpg" alt="img" /></figure>
                        <h3>Live With Music</h3>
                        <p>Listen more and think less, life keeps moving </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 padding-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- username :  if0_34550582! -->

    <!--  footer -->
    <footer id="footer_with_contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Contact Us</h3>
                            <ul class="locarion_icon">
                                <li><img src="icon/1.png" alt="icon" />1, B.Alabi Avenue,Lagos</li>
                                <li><img src="icon/2.png" alt="icon" />(+234 8023662399)</li>
                                <li><img src="icon/3.png" alt="icon" />iseoluwasimpson@gmail.com</li>

                            </ul>
                            <ul class="contant_icon">
                                <li><a href="https://www.facebook.com/Simpsoniseoluwailuyomade"><img src="icon/fb.png" alt="icon" /></a> </li>
                                <li><a href="https://www.twitter.com/simpsonismade"><img src="icon/tw.png" alt="icon" /></a></li>
                                <li><a href="https://www.linkedin.com/in/simpsoniseoluwa-iluyomade-01b05931"><img src="icon/lin(2).png" alt="icon" /></a></li>
                                <li><a href ="https://instagram.com/simpson_made?igshid=MzNlNGNkZWQ4Mg=="><img src="icon/instagram.png" alt="icon" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Get In Touch with Us</h3>
                            <form action ="homepage.php" method = "post">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Name" type="text" name="name">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Phone" type="tel" name="phone">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Email" type="email" name="email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="message"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>New Updates </h3>
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
</body>

</html>