<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html> <!--<![endif]-->
<head>
    <title>Henrique Pappis</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Henrique Pappis Web Developer CV">
    <meta name="author" content="Henrique Pappis">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- ******HEADER****** -->
<?php
    include_once "lang.php";
    include_once "header.php";
 ?>

    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <?php
                    include_once "about.php";
                    include_once "experience.php";
                ?>
            </div>
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                <?php
                    include_once "information.php";
                    include_once "education.php";
                    include_once "skills.php";
                    include_once "languages.php"
                ?>
            </div><!--//secondary-->
        </div><!--//row-->
    </div><!--//masonry-->

    <!-- Javascript -->
    <script type="text/javascript" src="assets/plugins/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html> 