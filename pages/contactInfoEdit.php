
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Address Book</title>

    <!-- Bootstrap core CSS -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/starter-template.css" rel="stylesheet">
    <link href="../css/addContactStyle.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">  
      
      <div class="navbar-header">
            
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      </div>
      
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav pull-right">
          <li><a href="addContact.php">Add Contact</a></li>
          <li><a href="importContact.php">Import Contact</a></li>
          <li><a href="exportContact.php">Export Contact</a></li>
          <li><a href="logOut.php">Log Out</a></li>
        </ul>
      </div>
    </div>
    


    <div class="container">

      <div class="starter-template">

      <?php

        include '../php/db_function.php';

        $id = $_GET['id'];

        $result = getSingleContactInfo($id);

      ?>
        

        <div class="container">
              <div class="row main">
                <div class="main-login main-center">
                <h5>Contact's Info</h5>
                  <form class="" method="post" action="contactInfoEditing.php?id=<?php echo $id ?>">
                    
                    <div class="form-group">
                      <label for="name" class="cols-sm-2 control-label">Name</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                          <input type="text" class="form-control" name="name" id="name"  value="<?php echo $result['name'] ?>" required />
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="address" class="cols-sm-2 control-label">Address</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                          <input type="text" class="form-control" name="address" id="address"  value="<?php echo $result['address'] ?>" required />
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="cols-sm-2 control-label">Email</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                          <input type="email" class="form-control" name="email" id="email"  value="<?php echo $result['email'] ?>" required />
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="phoneNo" class="cols-sm-2 control-label">Phone No</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                          <input type="text" class="form-control" name="phoneNo" id="phoneNo"  value="<?php echo $result['phoneNo'] ?>" required />
                        </div>
                      </div>
                    </div>

                    

                    <div class="form-group ">
                      <input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">

                      <!--<a href="http://deepak646.blogspot.in" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Add Contact Info</a>-->
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
