<?php
include_once("class/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "portalove", 3306);
$coachItems = $db->getTrainers();
?>
<section class="trainer-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>EXPERT TRAINERS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($coachItems as $key => $coachItem) {
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-trainer-item">
                    <img src="<?php echo $coachItem['image']; ?>" alt="IMG not loaded">
                    <h5><?php echo $coachItem['meno']; ?></h5>
                    <span><?php echo $coachItem['povolanie']; ?></span>
                    <p><?php echo $coachItem['popis']; ?></p>
                    <div class="trainer-social">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                    </img>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>