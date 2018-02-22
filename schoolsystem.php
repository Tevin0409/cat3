<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/creative.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Grading System</title>
</head>
<body class="system" data-spy="scroll" data-target=".navbar">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="index.php">
                <img src="img/school.jpg" alt="Patch School" height="140px" width="220px">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>

            </ul>
        </div>

    </div>

</nav>
<h2>Grading System</h2>

<form method="get" class="container-fluid">
    <p id="par">english:</p> <br>
    <input type="number" name="eng" class="">
    <br>
    <p id="par">Math:</p> <br>
    <input type="number" name="Math" class="">
    <br>
    <p id="par">Kisw:</p> <br>
    <input type="number" name="Kisw" class="">
    <br>
    <p id="par">Chem:</p> <br>
    <input type="number" name="Chem" class="">
    <br>
    <p id="par">Bio:</p> <br>
    <input type="number" name="Bio" class="">
    <br>
    <p id="par">Phyc:</p> <br>
    <input type="number" name="Phyc" class="">
    <br>
    <p id="par">Geo:</p> <br>
    <input type="number" name="geo" class="">
    <br>
    <p id="par">Comp:</p> <br>
    <input type="number" name="Comp" class="">
    <br>
    <input type="submit" name="submit" value="submit" class="btn btn-success">
</form>


<?php
$total=$_GET['Math']+$_GET['eng']+
    $_GET['Kisw']+$_GET['Chem']+$_GET['Bio']+$_GET['Phyc']+
$_GET['geo']+$_GET['Comp'];
echo "<p id='par'>Total marks =$total</p> <br>";
$avg=$total/800*100;
echo "<p id='par'>Mean=$avg</p> <br>";
?>
<?php

if($avg>=90) {
    echo "<p id=par>Grade</>=A";
} elseif ($avg>=81){
    echo "<p id=par>Grade</>=A-";
} elseif ($avg>=70){
    echo "<p id=par>Grade</>=B+";
} elseif ($avg>=61) {
    # code...
    echo "<p id=par>Grade</>=B";}
  elseif ($avg>=50) {
    # code...
    echo "<p id=par>Grade</>=B-";}
  elseif ($avg>=41) {
    # code...
    echo "<p id=par>Grade</>=C+";}
  elseif ($avg>=61) {
    # code...
    echo "<p id=par>Grade</>=C";}
  elseif ($avg>=61) {
    # code...
    echo "<p id=par>Grade</>=C-";}
    else{
    echo "fail";
    }
?>




</body>
</html>



