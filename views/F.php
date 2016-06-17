<?php

$name = $_POST['fullname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$collegename = $_POST['collegename'];
$program = $_POST['program'];
$location = $_POST['location'];
$cgpa = $_POST['cgpa'];
$courses = $_POST['courses'];
$duration_of_btech = $_POST['duration'];

$project_title = $_POST['ptitle1'];
$project_duration = $_POST['duration1'];
$pdescription = $_POST['description1'];

?>

<html>
<head>
    <title>
        <?php echo $name ?>
        's Resume
    </title>
    <link rel="stylesheet" type="text/css" href="deco.css">
</head>
<body>
    <div id="ALLCONTENT">
        <div id="ADDRESS">
        <?php echo $address ?>
        </div>

        <div id="FULLNAME">
        <?php echo $name ?>
        </div>

        <div id="CONTACT">
        <?php echo $mobile ?> <br>
        <?php echo $email ?>
        </div>
        
        <br><br>
        
        <div id="box">
        <p id="CATEGORIES">EDUCATION</p>
        </div>
        
        <div id="FIRST">
        <?php echo $location ?>
        </div>
        
        <div id="SECOND">
        <?php echo $collegename ?>
        </div>
        
        <div id="THIRD">
        <?php echo $duration_of_btech ?>
        </div>
        
        <div id="INNER">
        <?php echo $program." (CGPA: ".$cgpa.")" ?> <br>
        <?php echo $courses ?>
        </div>
        
        <br> <br>
        
        <div id="box">
        <p id="CATEGORIES">TECHNICAL EXPERIENCE</p>
        </div>
        
        <div id="INNER">
        <div id="TITLE">
            <?php echo $project_title." [".$project_duration."]" ?>
        </div>
        <br>
        <?php echo $pdescription ?>
        </div>
        
    </div>
</body>
</html>