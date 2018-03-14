<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
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
            <div class="primary col-md-8 col-sm-10 col-xs-10">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading"><?php echo $titleContact; ?></h2>
                        <hr class="divider" />
                        <div class="content">
                            <div id="form-messages"></div>
                            <form id="ajax-contact" class="form-horizontal" method="POST" action="sendMail.php">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"><?php echo $titleName; ?></label>
                                    <div class="col-sm-6">
                                        <input type="name" name="name" class="form-control" id="name" placeholder="<?php echo $titleContact; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"><?php echo $titleMail; ?></label>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="<?php echo $titleMail; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"><?php echo $titleSubject; ?></label>
                                    <div class="col-sm-6">
                                        <input type="subject" name="subject" class="form-control" id="subject" placeholder="<?php echo $titleSubject; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"><?php echo $titleMessage; ?></label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="message" id="message" placeholder="<?php echo $titleMessage; ?>" rows="4" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-send"></i> <?php echo $titleSend; ?></button>
                                    </div>
                                </div>
                            </form>
                        </div><!--//content-->
                    </div><!--//section-inner-->                     
                </section><!--//section-->            
            </div><!--//primary-->

            <div class="secondary col-md-4 col-sm-12 col-xs-12">
<?php include_once "information.php"; ?>

           
            </div><!--//secondary-->    
        </div><!--//row-->
        <div class="col-sm-offset-4 col-sm-12">
            <a href="javascript:history.go(-1)" class="btn btn-default"><i class="fa fa-undo"></i> <?php echo $buttonBack; ?></a>
        </div>
    </div><!--//masonry-->
    <script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html> 

