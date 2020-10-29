<?php

include "config.php";
include_once "header.php";
if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_password']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            session_start();
            $_SESSION['uname'] = $uname;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<html>
<head>
    <title>Create simple login page with PHP and MySQL</title>
</head>
<body>
<div class="container">
    <form method="post" action="">
        <div id="div_login">
            <section class="register-section classes-page spad">
                <div class="container">
                    <div class="classes-page-text">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="register-text">
                                    <div class="section-title">
                                        <h2>Login</h2>
                                        <div class="col-lg-6">
                                            <label for="txt_uname">User Name</label>
                                            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="txt_uname">Password</label>
                                            <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                                        </div>
                                        <div>
                                            <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
</div>
<footer class="footer-section">
    <?php include_once("footer.php"); ?>
</footer>
</body>
</html>

