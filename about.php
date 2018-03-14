<?php
    require_once "db.php";

    $lang = $_GET["lang"];
    $sql = "SELECT a.*
            FROM about as a
            INNER JOIN language as l ON l.id_lang = a.id_lang
            WHERE l.lang = '$lang' and a.status = 1";

    $stmt = $conn->prepare($sql);
    $stmt->execute(array('l.lang' => $lang));
    $result = $stmt->fetchObject();
    $description_about = $result->description_about;
?>

<section class="about section">
    <div class="section-inner">
        <h2 class="heading"><?php echo $titleAbout; ?></h2>
        <hr class="divider" />
        <div class="content">

            <p><?php echo $description_about; ?></p>

        </div><!--//content-->
    </div><!--//section-inner-->
</section><!--//section-->