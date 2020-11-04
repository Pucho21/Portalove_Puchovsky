<?php
include_once("class/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "portalove", 3306);
$blogItems = $db->getBlogEntry();
?>



<div class="row">
    <?php
    foreach ($blogItems as $key => $blogItem) {
    ?>
    <div class="col-lg-3">
        <div class="ba-pic">
            <?php if($blogItem['img_path'] != NULL){?>
                <img src=<?php echo $blogItem['img_path']?>>
            <?php } else { ?>
                <img src="img/anonym.jpg">
            <?php } ?>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="ba-text">
            <h5><?php echo $blogItem['cele_meno'] ?> </h5>
            <p><?php echo $blogItem['prispevok'] ?> </p>
            <div class="bt-social">
                <?php if(isset($_SESSION['uname'])){
                if($blogItem['id_user'] == $_SESSION['user_id']) {?>

                    <?php echo "<a href='edit_blogEntry.php?id=".$blogItem['id']."'"; ?><i class='fa fa-edit'</i></a>
                    <?php echo "<a href='delete_blogEntry.php?id=".$blogItem['id']."'"; ?><i class='fa fa-remove'</i></a>

                <?php }
                }?>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>
