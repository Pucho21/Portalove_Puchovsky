<?php
include_once('header.php');
include_once('config.php');
include_once("class/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "portalove", 3306);
$blogItems = $db->editBlogEntry($_GET['id']);

if(isset($_POST['blog_send'])) {

    $entry = mysqli_real_escape_string($con, $_POST['message']);
    if($entry != ""){
        $sql_query = "UPDATE `blog_prispevok` SET prispevok = '".$entry."'";
        $result = mysqli_query($con,$sql_query);

        header('Location: blog-details.php');
    }
}

?>

<html>
<head>

</head>
<body>
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="bd-text">
                    <div class="leave-comment">
                        <div class="blog-author"></div>
                        <h3>Edit Comment</h3>
                        <form method="post" action="">
                            <div class="row">
                                <?php if(!isset($_SESSION['uname'])) { ?>
                                    <h4>Please login to edit your entry</h4>
                                <?php } else { ?>
                                    <div class="col-lg-6">
                                        <h5>Name: </h5>
                                        <p> <?php echo $_SESSION['full_name'];?> </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Email: </h5>
                                        <p> <?php echo $_SESSION['email'];?> </p>
                                    </div>
                                    <br><br>
                                    <div class="col-lg-12">
                                        <?php
                                        foreach ($blogItems as $key => $blogItem) { ?>
                                            <textarea name="message" id="message"> <?php echo $blogItem['prispevok'];?> </textarea>
                                        <?php } ?>

                                        <button type="submit" name="blog_send" id="blog_send">Confirm Edit</button>
                                    </div>
                                <?php } ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <?php include_once('footer.php'); ?>
</footer>
</body>
</html>