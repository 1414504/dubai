<html>

<head>

    <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <title>My First Project</title>

</head>

<body>

<div class="container">
    <div class="row" style="background-color: "lightgreay";>
        <div class="col-md-3" style="height: 140px; background-color:"lightgray ">
            <img src="image/rose.jpg" style="height: 140px">
        </div>
        <div class="col-lg-9" style="height: 140px">
            <h2>I Love Pakistan</h2>
            <h3>I Love my country very much</h3>
        </div>

    </div>

    <div class="row" style="margin-top: 10px">
        <div class="col-md-4" style="min-height: 400px">
            <br>
            <a href="showallbugs.php?cat=windows" style="text-align: left; margin-bottom: 10px"; class="btn btn-default form-control">Windows</a>
            <a href="?cat=android" style="text-align: left; ; margin-bottom: 10px" class="btn btn-default form-control">Android</a>
            <a href="?cat=ios" style="text-align: left" class="btn btn-default form-control">IOS</a>

        </div>


        <div class="col-md-8" style="min-height: 400px"</div>
<?php include "form.php"; ?><br>
<div class="row" style="margin-bottom: 10px">
    <div class="col-md-12"></div>
<?php include "showallbugs.php"; ?>
<?php include "insertbug.php"; ?>
<?php include "bugcategory.php"; ?>
    </div>

</div>

</body>

</html>