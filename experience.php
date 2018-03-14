<?php
    require_once "db.php";

    $lang = $_GET["lang"];
    $sql = "SELECT j.*
            FROM jobs as j
            INNER JOIN language as l ON l.id_lang = j.id_lang
            WHERE l.lang = '$lang' AND j.status = 1
            ORDER BY j.volunteer, j.period_ini DESC";


    $stmt = $conn->prepare($sql);
    $stmt->execute(array('l.lang' => $lang));
    $result = $stmt->fetchAll();
    $firstVolunteer = 0;
?>
                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading"><?php echo $titleWork; ?></h2>
                        <hr class="divider" />
                        <div class="content">

                            <?php
                                foreach($result as $row) {
                                    $companyLogo = $row['company_logo'];
                                    $companyName = $row['company_name'];
                                    $companyLink = $row['company_link'];
                                    $date_ini = strtotime($row['period_ini']);
                                    $period_ini = date("m/Y", $date_ini);
                                    if ($row['period_end'] == '0000-00-00') {
                                        $period_end = 'Até o momento';
                                    }else{
                                        $date_end = strtotime($row['period_end']);
                                        $period_end = date("m/Y", $date_end);
                                    }
                                    $descriptionJob = $row['description_job'];
                                    $volunteer = $row['volunteer'];
                                    if($volunteer == false){
                            ?>
                            <div class="item">
                                <h3 class="title">
<!--                                    <img width="150" style="vertical-align: middle;" src="<?php echo $companyLogo; ?>"></img> -->
                                    <?php echo $row['title_job']; ?>
                                    - <span class="place"><a target="_blank" href="<?php echo $companyLink; ?>"><?php echo $companyName; ?></a></span>
                                    <span class="year">(<?php echo $period_ini." - ".$period_end; ?>)</span>
                                </h3>
                                <p>
                                    <?php echo $descriptionJob; ?>
                                </p>
                            </div><!--//item-->
                            <hr class="divider" />
                            <?php
                                }else{
                                    if($firstVolunteer == 0){

                            ?>
                                <h2 class="heading"><?php echo $titleVolunteer; ?></h2>
                                <hr class="divider" />
                                <div class="content">
                                <?php $firstVolunteer++; } ?>
                                    <div class="item">
                                    <h3 class="title">
    <!--                                    <img width="150" style="vertical-align: middle;" src="<?php echo $companyLogo; ?>"></img> -->
                                        <?php echo $row['title_job']; ?>
                                        - <span class="place"><a target="_blank" href="<?php echo $companyLink; ?>"><?php echo $companyName; ?></a></span>
                                        <span class="year">(<?php echo $period_ini." - ".$period_end; ?>)</span>
                                    </h3>
                                    <p>
                                        <?php echo $descriptionJob; ?>
                                    </p>
                                </div><!--//item-->
                                <hr class="divider" />
                            <?php
                                    } //endif
                                } //endforeach
                            ?>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->