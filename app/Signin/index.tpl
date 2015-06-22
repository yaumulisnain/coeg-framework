<?php
/*
 *	Content : Sign-in View
 *	Author	: Yusuf
 *	Version	: 2.0.0
*/
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="bin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bin/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bin/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Sign in content -->
    <div class="container">

      <form class="form-signin" action="" method="POST">
        <center><h2 class="form-signin-heading">Masuk Ke POS</h2></center>
        <hr>

        <?php 
          /*if($error)
          {
            echo "<div id='cannotlogin' class='alert alert-danger alert-dismissible' role='alert'>
                    <!--<a href='#'' class='close' data-dismiss='alert'>&times;</a>-->
                    <center>Email or password incorrect.</center>
                  </div>";
          }*/
        ?>

        <label for="username" class="sr-only">Nama Pengguna</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Nama Pengguna" required autofocus>
        <label for="inputPassword" class="sr-only">Kata Sandi</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Kata Sandi" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>

      </form>

    </div>
	
    <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bin/js/ie10-viewport-bug-workaround.js"></script>

    <!-- jQuery -->
    <script src="bin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bin/js/bootstrap.min.js"></script>
  </body>
</html>
