<?php
  // Message Vars
  $msg = '';
  $msgClass = '';

  // Check For Submit
  if(filter_has_var(INPUT_POST, 'submit')){
    // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check Required Fields
    if(!empty($email) && !empty($name) && !empty($message)){
      // Passed
      // Check Email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // Failed
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      } else {
        // Passed
        $toEmail = 'ceejayinside@gmail.com';
        $subject = 'Contact Request From '.$name;
        $body = '<h2>Contact Request</h2>
          <h4>Name</h4><p>'.$name.'</p>
          <h4>Email</h4><p>'.$email.'</p>
          <h4>Message</h4><p>'.$message.'</p>
        ';

        // Email Headers
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

        // Additional Headers
        $headers .= "From: " .$name. "<".$email.">". "\r\n";

        if(mail($toEmail, $subject, $body, $headers)){
          // Email Sent
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        } else {
          // Failed
          $msg = 'Your email was not sent';
          $msgClass = 'alert-danger';
        }
      }
    } else {
      // Failed
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Homepage | Portfolio Site</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jessie Tayabas">
    <meta name="description" content="I'm Jessie a Front-end web developer from Davao City, Come check out my portfolio and hire me for your online projects.">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/hexagons.css">
    <link href="style.css" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon.png">
  </head>
  <body>
    <!-- NAVIGATION -->
    <div class="page-wrap">
      <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
          <div class="row col-lg">
            <a class="navbar-brand" href="index.html"><img src="img/logo-white.png" class="logo-white active"></a>
            <a class="navbar-brand" href="index.html"><img src="img/logo-black.png" class="logo-black"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="
          navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link scroll" href="#about"><span>About<span class="border"></span></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link scroll" href="#services"><span>Services<span class="border"></span></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link scroll" href="#portfolio"><span>Portfolio<span class="border"></span></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link scroll" href="#contact"><span>Contact<span class="border"></span></span></a>
                </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- HERO SECTION -->
      <section id="top" class="hero text-center text-white">
          <div class="container">
            <div class="row">
              <div class="col-md-12 banner-content">
                  <div class="grid-item color">
                    <a class="link name" href="index.html" data-letters="THIS IS JESSIE">THIS IS JESSIE</a>
                  </div>
                   <div class="text-center relative">
                    <span class="square-line-separator"></span>
                    <span class="square-separator"></span>
                   </div>
                  <h5 class="text-uppercase">Junior front-end web developer</h5>
                  <a class="btn btn-info  mr-1 mt-4" href="#about">About me</a>
                  <a class="btn btn-outline-secondary ml-1 mt-4" href="#contact">Get in touch</a>
                </div>
            </div>
          </div>
      </section>

      <!-- ABOUT SECTION -->
      <section id="about" class="about pt-5 py-1">
        <div class="container">
          <h2 class="text-center font-weight-bold text-uppercase">About</h2>
            <div class="separator-container">
              <div class="separator line-separator">
                <i class="fa fa-gg" aria-hidden="true"></i>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 text-center">
                <div class="container">
                  <img class="img-fluid img-thumbnail" src="img/profile.jpg" alt="My Profile">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="container pt-4">
                  <p>Hi I'm Jessie Tayabas, a freelance web design, developer from Philippines.
I specialized in creating beatiful, usable, professional websites using best practice
accessibility and the latest web standards guidelines.</p> 
<p>For building websites, 
i use <span>HTML 5, CSS 3, JAVASCRIPT/JQUERY, BOOTSTRAP</span> <br>
most of my design and knowledge are selft taught. I just simply love to create new project as I get it,
I'm glad to hear from you if you have an exciting project in mind.</p>
                </div>
                <br>
                  <div class="container pb-5">
                    <div class="progress-box">
                      <h5>HTML 5 <span class="color-heading pull-right">75%</span></h5>
                      <div class="progress">
                        <div class="bar-inner" data-percent="75%"></div>
                      </div>
                    </div>
                    <div class="progress-box">
                      <h5>CSS 3 <span class="color-heading pull-right">80%</span></h5>
                      <div class="progress">
                        <div class="bar-inner" data-percent="80%"</div>
                      </div>
                    </div>
                    <div class="progress-box">
                      <h5>Bootstrap <span class="color-heading pull-right">70%</span></h5>
                      <div class="progress">
                        <div class="bar-inner" data-percent="70%"></div>
                     </div>
                   </div>
                   <div class="progress-box">
                      <h5>JavaScript / jQuery <span class="color-heading pull-right">45%</span></h5>
                      <div class="progress">
                        <div class="bar-inner" data-percent="45%"></div>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>    
          </div>
          <ul>
           <li></li>
           <li></li>
          </ul>
        </div>  
      </section>

      <!-- SERVICES SECTION -->
      <section id="services" class="services text-center py-3">
        <div class="container">
          <h2 class="text-center font-weight-bold text-uppercase">Services</h2>
            <div class="separator-container">
              <div class="separator line-separator">
                <i class="fa fa-gg" aria-hidden="true"></i>
              </div>
            </div>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card card-border-0 main-point py-3">
                <i class="fa fa-desktop" aria-hidden="true"></i>
                <div class="card-title">
                   <h3>Design & Develop</h3>
                   <p class="card-text">Design and develop on variety of projects 
requiring offering skills and strategies.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-border-0 main-point py-3">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <div class="card-title">
                   <h3>Fully Responsive</h3>
                   <p class="card-text">Built using HTML5/CSS3 and jQuery, and built using one of the world's most powerful CSS frameworks available, Bootstrap.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-border-0 main-point py-3">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <div class="card-title">
                   <h3>Custom Website</h3>
                   <p class="card-text">Customize fully functional, creative, details and usability oriented 
websites.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PORTFOLIO SECTION -->
      <section id="portfolio" class="portfolio text-center py-5">
        <div class="container">
            <h2 class="font-weight-bold text-uppercase">Portfolio</h2>
            <div class="separator-container pb-4">
              <div class="separator line-separator">
                <i class="fa fa-gg" aria-hidden="true"></i>
              </div>
            </div>
            <div class="row grid style">
                <div class="col-md-6 col-lg-4">
                  <figure class="effect-apollo">
                    <div>
                      <img class="img-fluid" src="portfolios/image_1.jpg" alt="Portfolio">
                    </div>
                    <figcaption>
                    <!-- <h2>Omni<span>Food</span></h2> -->
                    <p>Click the image to visit the website.</p>
                    <a href="#">View more</a>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-md-6 col-lg-4">
                  <figure class="effect-apollo">
                    <div>
                      <img class="img-fluid" src="portfolios/2.jpg" alt="Portfolio">
                    </div>
                    <figcaption>
                      <h2>Sample<span>Image</span></h2>
                      <p>Lorem ipsum dolor sit amet.</p>
                      <a href="#">View more</a>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-md-6 col-lg-4">
                  <figure class="effect-apollo">
                    <div>
                      <img class="img-fluid" src="portfolios/3.jpg" alt="Portfolio">
                    </div>
                    <figcaption>
                    <h2>Sample <span>Image</span></h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#">View more</a>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-md-6 col-lg-4">
                  <figure class="effect-apollo">
                    <div>
                      <img class="img-fluid" src="portfolios/4.jpg" alt="Portfolio">
                    </div>
                    <figcaption>
                    <h2>Sample <span>Image</span></h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#">View more</a>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-md-6 col-lg-4">
                  <figure class="effect-apollo">
                    <div>
                      <img class="img-fluid" src="portfolios/5.jpg" alt="Portfolio">
                    </div>
                    <figcaption>
                    <h2>Sample <span>Image</span></h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#">View more</a>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-md-6 col-lg-4">
                  <figure class="effect-apollo">
                    <div>
                      <img class="img-fluid" src="portfolios/6.jpg" alt="Portfolio">
                    </div>
                    <figcaption>
                    <h2>Sample <span>Image</span></h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#">View more</a>
                    </figcaption>
                  </figure>
                </div>  
              </div>
            </div>
        </div>
      </section>

      <!-- CONTACT SECTION -->
      <section id="contact" class="contact py-5">
        <div class="container">
          <h2 class="text-center font-weight-bold text-uppercase">Contact</h2>
            <div class="separator-container">
              <div class="separator line-separator">
                <i class="fa fa-gg" aria-hidden="true"></i>
              </div>
            </div>
          <div class="row">
            <div class="col-md-8">
                <?php if($msg != ''): ?>
                  <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                <?php endif; ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="text-center">
                  <div class="form-group row">
                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="email" class="form-control" placeholder="Your Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                    </div>
                  </div>
                  <div class="form-group pb-5">
                    <div class="col-12">
                      <textarea name="message" class="form-control" placeholder="Your Message" rows="8"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                    </div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-submit">Inbox Me</button>
                </form>
            </div>
          </div>
        </div>
      </section>
      
      <!-- BACK TO TOP -->
      <div class="container">
        <a href="#" class="back-to-top text-muted"></a>
      </div>
      
      <!-- FOOTER -->
      <footer class="text-muted footer-sub text-center">
        <div class="container">
          <div class="row">
            <div class="col">
              <p>Copyright &copy; 2017 All rights reserved | By Jessie </p>
              <a href="https://www.facebook.com/Jessie-Tayabas-1951920165055928/"><span class="hb hb-xs"><i class="fa fa-facebook"></i></span></a>
              <a href="https://www.linkedin.com/in/jessie-tayabas-aa75a6130/"><span class="hb hb-xs"><i class="fa fa-linkedin-square"></i></span></a>
              <a href="https://plus.google.com/u/0/110193682649510756760"><span class="hb hb-xs"><i class="fa fa-google-plus"></i></span></a>
              <a href="https://github.com/ceejayinside"><span class="hb hb-xs"><i class="fa fa-github-square"></i></span></a>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="js/scrolling.js" type="text/javascript"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
  </body>
</html>