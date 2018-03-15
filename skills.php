<?php
    require_once "db.php";

    $sql = "SELECT *
            FROM skills
            WHERE status = 1
            ORDER BY id_group_skill ASC";

    $stmt = $conn->prepare($sql);
    $stmt->execute( );
    $result = $stmt->fetchAll();

?>

                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading"><?php echo $titleSkills; ?></h2>
                        <hr class="divider" />
                        <div class="content">
                            <div class="skillset">

                            <?php
                                $id_group_skill_old = 1;
                                foreach($result as $row) {
                                    $id_group_skill = $row['id_group_skill'];
                                    $skillName = $row['skill_name'];
                                    $skillPercent = $row['skill_percent'];

                                    if($skillPercent <= 33){
                                        $skillLevel = $skillLevel1;
                                    }elseif ($skillPercent > 33 && $skillPercent <= 66) {
                                        $skillLevel = $skillLevel2;
                                    }else{
                                        $skillLevel = $skillLevel3;
                                    }
                                   if($id_group_skill_old != $id_group_skill){
                                        echo "<hr class='divider' />\n";
                                    }
                            ?>
                                <div class="item">
                                    <h3 class="level-title"><?php echo $skillName; ?><span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title=""><?php echo $skillLevel; ?></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="<?php echo $skillPercent; ?>%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                            <?php 
                                $id_group_skill_old = $id_group_skill;
                                } 
                            ?>
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->