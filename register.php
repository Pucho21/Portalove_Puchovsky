<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $name = mysqli_real_escape_string($con,$_POST['txt_name']);
    $surname = mysqli_real_escape_string($con,$_POST['txt_surname']);
    $email = mysqli_real_escape_string($con,$_POST['txt_email']);
    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != "" && $name != "" && $surname != "" && $email != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$uname."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];

        if($count == 0) {
            $sql_query = "INSERT INTO `user` (`iduser`, `meno`, `priezvisko`, `username`, `password`, `email`) 
                      VALUES (NULL, '".$name."','".$surname."','".$uname."','".$password."','".$email."')";
            $result = mysqli_query($con,$sql_query);
            header('Location: login.php');
        }else{
            echo "Username is already taken";
        }
    }
}
?>
<html>
<head>
    <?php include_once "header.php"; ?>
</head>
<body>

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
                                        <h2>Register Now</h2>
                                        <p>The First 7 Day Trial Is Completely Free With The Teacher</p>
                                    </div>
                                    <form action="#" class="register-form">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="name">First Name</label>
                                                <input type="text" class="textbox" id="txt_name" name="txt_name" placeholder="Name" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="email">Your email address</label>
                                                <input type="text" class="textbox" id="txt_email" name="txt_email" placeholder="E-mail" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="last-name">Last Name</label>
                                                <input type="text" class="textbox" id="txt_surname" name="txt_surname" placeholder="Surname" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="txt_uname">User Name</label>
                                                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="txt_uname">Password</label>
                                                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="register-pic">
                                    <img src="img/register-pic.jpg" alt="">
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
</body>
</html>




