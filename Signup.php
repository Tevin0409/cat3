<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>School Grading System</title>
</head>
<body class="don">
<div class=""  >

    <br><br>
    <div class="container">
        <form class="container-fluid" action="schoolsystem.php" method="get" >
        <br>
        <p id="par">Name:</p> <br>
        <input type="text" name="user" class="form-control" required>

        <br>
        <p id="par"> Class</p> <br>
        <input type="text" name="" class="form-control" required>
        <p id="par">Password</p>  <br>
        <input type="password" name="password" class="form-control" required>
        <?php
        if (strlen($_GET['password'])<=2){
            echo "<label> too short</label>";
        }
        else{
            echo "";
        }
        if (is_string($_GET['password'])){
            echo "add characters and numbers";
        }
        else{
            echo "";
        }
        ?>
        <br>
        <p id="par">Confirm Password:</p>  <br>
        <input type="password" name="pass" class="form-control" required>
        <?php
        if ($_GET['pass']!=$_GET['password']){
                     echo "<h3 style='color:#F91C06;'>error: passwords mismatch</h3>";
                 }
                 else {
                     echo "";
                 }
        ?>
        <strong><i><p>please input your admission number as password</p></i></strong>
        <br>
        <button type="reset" class="btn btn-lg btn-info">Reset</button>
        <button type="submit" class="btn btn-lg btn-success">Submit</button>


    </form>
    </div>

</div>


</body>
</html>





