<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login </title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="container-fluid">
        <div class="animate form login_form">
            <section class="login_content">
                <form style="float: left;">
                    <div class="col-lg-6 col-lg-offset-3">
                            <h1 style="text-align: center;">Login Form</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required /> <br>
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required name="password " /><br>
                            <?php
                            if (strlen($_GET['password'])<=2){
                             echo "<label> too short</label>";
                                     }
                             else {
                                 echo "";
                             }
                            ?>
                        </div>
                        <div>
                            <a class="btn btn-info btn-lg submit" href="schoolsystem.php">Log in</a><br>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>
                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="Signup.php" class="to_register"> Create Account </a>
                            </p>


                            <br>


                        </div>
                    </div>
                </form>
            </section>
        </div>


    </div>
</div>
</body>
</html>


