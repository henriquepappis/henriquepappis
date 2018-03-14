<?php 

    $host = $_SERVER['HTTP_HOST'];
    $script = $_SERVER['SCRIPT_NAME'];
    $link = "http://".$host.$script;
?>
    <header class="header">
        <div class="container">

<!--             <div class="col-md-1 col-md-offset-11">
                <a href=<?php //echo $link."?lang=pt"; ?>><img src="assets/images/flag_br.png" width="30px"/></a>
                <a href=<?php //echo $link."?lang=en"; ?>><img src="assets/images/flag_uk.png" width="30px"/></a>
            </div> -->
    
            <img class="profile-image img-responsive pull-left" src="assets/images/profile2.png" alt="Henrique Pappis" />
            <div class="profile-content pull-left">
                <h1 class="name">Henrique Pappis</h1>
                <h2 class="desc"><?php echo $titleJob; ?></h2>
<!--                 <ul class="social list-inline">
                    <li><a href=<?php //echo "index.php?lang=$_GET[lang]"; ?>><i class="fa fa-home"></i></a></li>
                    <li><a href=<?php //echo "contact.php?lang=$_GET[lang]"; ?>><i class="fa fa-envelope"></i></a></li>
                   <li><a href="HenriquePappis-WebCv-En.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/henriquepappis" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/henriquepappis" target="_blank"><i class="fa fa-github"></i></a></li>
                </ul>  -->
            </div><!--//profile-->
        </div><!--//container-->
    </header><!--//header-->




