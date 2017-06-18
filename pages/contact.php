
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
    <link href="../css/style.css" rel="stylesheet">

    <!-- font  -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">

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
        <a class="navbar-brand" href="contact.php">Online Address Book</a>
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
        

        <div class="container">
          <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
              <form method="post" action="searchResult.php">
                <input id="search" type="text" name="search" placeholder="Search..">
                <!--<span><i class="fa fa-search" aria-hidden="true"></i></span>-->
              </form>
            </div>
          </div>
          <div class="row">
            
                <div class="col-md-12">
                <h2>Contact's Info</h2>
                <div class="table-responsive">
 
                      <table id="mytable" class="table table-bordred table-striped">
                           
                           <thead>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Edit</th>
                            <th>Delete</th>
                           </thead>
                      <tbody>

                          <?php
                            session_start();
                            include '../php/db_function.php';

                            $result = getContactInfo($_SESSION['email']);

                            while ($row = $result->fetch_assoc()) {
                              
                              $id = $row['id'];

                              echo '<tr>';

                              echo '<td>'.$row['name'].'</td>';
                              echo '<td>'.$row['address'].'</td>';
                              echo '<td>'.$row['email'].'</td>';
                              echo '<td>'.$row['phoneNo'].'</td>';


                              

                              echo '<td><a href="contactInfoEdit.php?id='.$id.'"><button class="btn btn-primary btn-xs" data-title="Edit"><span class="glyphicon glyphicon-pencil"></span></button></span></button></a></td>';

                              echo '<td><a href="contactInfoDelete.php?id='.$id.'"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span></button></a></td>';

                              echo '</tr>';

                            }
                          ?>                
                      </tbody>
                
        </table>

        <div class="clearfix"></div>
        

    </div><!-- /.container -->


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
