<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cheese n More</title>

    <!-- Jquery -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/homepage.css">
    <link rel="stylesheet" href="assets/css/Headercss.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
     <link rel="stylesheet" href="assets/css/Productpage.css">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap-4/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
 

    <!-- Semantic ui -->
    <link rel="stylesheet" href="assets/css/Semantic-UI-2.4/semantic.min.css">
    <script src="assets/css/Semantic-UI-2.4/semantic.min.js"></script>

    <!-- Font awesome icons -->
    <link rel="stylesheet" href="assets/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Raleway" rel="stylesheet">
</head>
<body>
    
<div>
<!-- header nav bar -->
	<div class="topnav" id="myTopnav">
    <div class="ui center aligned grid container">
        <div class="ui secondary menu">
            <a href="Home.php" class="item"  id="gold_color"> HOME</a>
            <a href="productpage.php" class="item"  id="gold_color">OUR CHEESE</a>
            <a href="productpage.php" class="item"  id="gold_color">OUR MEAT</a>
            <img class="logonav" src="assets/images/logo.jpg" alt="logo">
            <div class="ui simple dropdown item"  id="gold_color">
                SHOP <br> by category
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a href="productpage.php" class="item">Butter</a>
                    <a href="productpage.php" class="item">Dry Fruits</a>
                    <a href="productpage.php" class="item">Chocolates</a>
                    <a href="productpage.php" class="item">Whipping Cream</a>
                </div>
            </div>
            <a href="aboutus.php" class="item"  id="gold_color"> ABOUT US</a>
            <a href="myaccount.php" class="item"  id="gold_color"> MY ACCOUNT</a>
		 <a class="icon1" onclick="mobileView()">
    <i class="bars icon"></i> </a>
        </div>
		</div>
        </div>
</div>
</body>
</html>


<script>
    $(window).scroll(function () {
        if ($(this).scrollTop() > 120) {
            $(".topnav").addClass("sticky");
        } else {
            $('.topnav').removeClass("sticky");
        }
    });

    $(window).on("scroll", function () {
        var s = 82 - Math.min(50, $(document).scrollTop());
        $(".logonav").width(s).height(s);
    });

</script>

<script> 
    // Semantic Ui dropdowns 
    $('.ui.dropdown').dropdown();
    $('#select').dropdown();
    $('#hybrid select').dropdown({on: 'hover'});
    $('#multi-select').dropdown();
</script>