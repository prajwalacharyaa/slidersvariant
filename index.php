<!DOCTYPE html>
<html lang="en">
<!--css and js included from-->
<link rel="stylesheet" href="include/css/style.css">
<script type="text/javascript" src="include/js/javascript.js"></script>
<!-- i have included icons on site from unicons-->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="include/css/style.css" />
    <link rel="icon" type="image/x-icon" href="image/logo/icon.jpg">
    <title>Pure Everest</title>
    <style>
        body {
            background-color: #f0f2f5;
        }

        .products{
            margin-top: 8px;
            margin-left: 5%;
        }

    </style>
</head>

<body>
    <!--the top menu which displays phone number email and user logged in status section-->
    <?php 
    include('include/topmenu.html');
    include('include/slider.html');
    include('include/cardview.html');
    include('include/infosection.html');
    include('include/recentsection.html');    
    include('include/collections.html');    
    include('include/homepageinfo.html');
    include('include/footer.html');
    ?>

</body>

</html>
