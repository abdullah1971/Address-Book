<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Address Book</title>

    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="lib/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/new-age.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <?php
      session_start();
      
     ?>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>Online Address Book. This is a convenient way to store your contacts. Feel free to store your contacts or download it when necessary.</h1>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">
                        
                        <div class="form">
                              
                              <ul class="tab-group">
                                <li class="tab active"><a href="#signup">Sign Up</a></li>
                                <li class="tab"><a href="#login">Log In</a></li>
                              </ul>
                              
                              <div class="tab-content">
                                <div id="signup">   
                                  <h1>Sign Up for Free</h1>
                                  
                                  <form action="pages/signUp.php" method="post">
                                  
                                  <div class="top-row">
                                    <div class="field-wrap">
                                      <label>
                                        First Name<span class="req">*</span>
                                      </label>
                                      <input type="text" required autocomplete="off" name="firstName" />
                                    </div>
                                
                                    <div class="field-wrap">
                                      <label>
                                        Last Name<span class="req">*</span>
                                      </label>
                                      <input type="text"required autocomplete="off" name="lastName" />
                                    </div>
                                  </div>

                                  <div class="field-wrap">
                                    <label>
                                      Email Address<span class="req">*</span>
                                    </label>
                                    <input type="email"required autocomplete="off" name="email" />
                                  </div>
                                  
                                  <div class="field-wrap">
                                    <label>
                                      Set A Password<span class="req">*</span>
                                    </label>
                                    <input type="password"required autocomplete="off" name="password" />
                                  </div>

                                  <div id="signUp-error" class="field-wrap">
                                    <?php
                                      //session_start();
                                      if(isset($_SESSION['signUpError']))
                                      {
                                        $error = $_SESSION['signUpError'];

                                        if($error)
                                        {
                                          if(isset($error['email']))
                                            echo $error['email'];

                                          if(isset($error['password']))
                                            echo $error['password'];
                                        }

                                        unset($_SESSION['signUpError']);
                                      }

                                      

                                    ?>
                                  </div>
                                  
                                  <button type="submit" class="button button-block"/>Get Started</button>
                                  
                                  </form>

                                </div>
                                
                                <div id="login">   
                                  <h1>Welcome Back!</h1>
                                  
                                  <form action="pages/logIn.php" method="post">
                                  
                                    <div class="field-wrap">
                                    <label>
                                      Email Address<span class="req">*</span>
                                    </label>
                                    <input type="email"required autocomplete="off" name="email" />
                                  </div>
                                  
                                  <div class="field-wrap">
                                    <label>
                                      Password<span class="req">*</span>
                                    </label>
                                    <input type="password"required autocomplete="off" name="password" />
                                  </div>

                                  <div id="logIn-error" class="field-wrap">
                                    <?php
                                      //session_start();

                                      if(isset($_SESSION['logInError']))
                                      {
                                        $error = $_SESSION['logInError'];

                                        if($error)
                                        {
                                          if(isset($error['email']))
                                            echo $error['email'];

                                          if(isset($error['password']))
                                            echo $error['password'];

                                          if(isset($error['login']))
                                            echo $error['login'];
                                        }

                                        unset($_SESSION['logInError']);
                                      }

                                    ?>
                                  </div>
                                  
                                  <!--<p class="forgot"><a href="#">Forgot Password?</a></p>-->
                                  
                                  <button class="button button-block"/>Log In</button>
                                  
                                  </form>

                                </div>
                                
                              </div><!-- tab-content -->
                              
                        </div> <!-- /form -->


                    </div>
                </div>
            </div>
        </div>
    </header>

    

    

    <!-- jQuery -->
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>

</body>

</html>
