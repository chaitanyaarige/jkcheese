<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cheese n More</title>

    <!-- Jquery -->
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Headercss.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/homepage.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/carousel.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Productpage.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Footer.css');?>">


     <link rel="shortcut icon" href="<?php echo base_url('favicon.ico');?>"  type="image/x-icon" />

    <!-- icomoon -->
    <link rel="stylesheet"  href="<?php echo  base_url('assets/css/icomoon/icomoon.css');?>"> 

    <!--icomoon bag icon -->
    <!--     <link rel="stylesheet" href="https://i.icomoon.io/public/temp/e2d3099b28/longerminus/style.css"> -->


    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-4/bootstrap.min.css');?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js');?>"></script>


    <!-- Semantic ui -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Semantic-UI-2.4/semantic.min.css');?>">
    <script src="<?php echo base_url('assets/css/Semantic-UI-2.4/semantic.min.js');?>"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Adobe Fonts -->
    <link href="https://use.typekit.net/goa2jku.css" rel="stylesheet">


    <link
        href="https://fonts.googleapis.com/css?family=Nunito|Dancing+Script:400,700|Oswald|Fjalla+One|Josefin+Sans:300|Cormorant+Garamond:500|Raleway:400,100,200,300"
        rel="stylesheet">


</head>

<body>

    <div class="myBagNav">
        <div id="offnav20" class="ui centered  grid" style="padding: 2px;
    margin: -17px 0px -30px;">
            <div class="left aligned four wide column" style="margin: 8px 7px 16px -20px;">
                <a href="<?php echo base_url()?>my-login" style="color:white">Login </a> &emsp;<a
                    href="<?php echo base_url()?>my-registration" style="color:white"> Create Account</a>
            </div>

            <div class="four wide column" id="tablet_blue_menu">
            </div>



            <form class="ui icon input" action="<?php echo base_url()?>search" method="post">
                <div>
                    <div class="ui action input">
                        <input
                            style="border-top:16px solid #0d5690;border-bottom:16px solid #0d5690; border-left:3px solid #0d5690;"
                            name="search" type="text" placeholder="Search...">
                        <button style="background:none; margin-left: -28px; border: none;" type="submit"> <i
                                style="color:#0b4f93" class="fa fa-search"></i> </button>
                    </div>
                </div>
            </form>

            <div id="tablet_myaccount" style="padding-top:22px" class="three wide column">
                <div class="ui compact text menu" style="margin: -4px 64px;">
                    <a class="item">
                        <i style="font-size:20px;color:white;    padding: 3px 4px 10px;" class="icon-user"> </i>
                        <?php $customer_id = $this->session->userdata('cus_name');?>
                                <?php
                if($customer_id){?>
                          <p id="offnav20" style="color:white;"> <?php echo $customer_id ?>  </p>

                       <?php }else{ ?>

                        <p id="offnav20" style="color:white;">My Account</p>
                        <?php }?>

                       
                    </a>
                    <div class="ui flowing  popup" style="border-radius:0px;">
                        <div class="ui grid">
                            <div class="left aligned column">
                                <h4 id="gold_color" class="ui header">My Account</h4>
                                <?php $customer_id = $this->session->userdata('cus_id');?>
                                <?php
                if($customer_id){?>
                                <div class="ui link list">
                                    <a class="item" href="<?php echo base_url()?>my-orders">
                                        <div class="ui fluid button"
                                            style="border:1px solid;background:none;border-radius:0px;color:black">
                                            My Orders
                                        </div>
                                    </a> <br>
                                    <a class="item" href="<?php echo base_url()?>logout">
                                        <div class="ui fluid button"
                                            style="border:1px solid;background:none;border-radius:0px;color:black">
                                            Log Out
                                        </div>
                                    </a> <br>
                                </div>
                                <?php }else{ ?>
                                <div class="ui link list">
                                    <a class="item" href="<?php echo base_url()?>my-login">
                                        <div class="ui fluid button"
                                            style="border:1px solid;background:none;border-radius:0px;color:black">
                                            Sign
                                            In </div>
                                    </a> <br>
                                    <a class="item" href="<?php echo base_url()?>my-registration">
                                        <div class="ui fluid button"
                                            style="border:1px solid;background:none;border-radius:0px;color:black">
                                            Create Account </div>
                                    </a>
                                </div>
                                <?php }?>

                            </div>
                        </div>
                    </div>
                    <a class="item" href="<?php echo base_url()?>show-cart">
                        <i href="<?php echo base_url()?>show-cart"
                            style="font-size:20px;color:white; padding: 3px 4px 10px;" class="icon-shopping-bag"> </i>
                        <?php $cart_items =  $this->cart->total_items();?>
                              <p style="color:white;">
                            Cart  <span style="font-size:large">(<?php echo $cart_items;?>)</span> </p>
                    </a>
                </div>
            </div>

  



        </div>
    </div>


    <!-- Following Menu for Computer -->
    <div class="topnav" id="myTopnav">
        <div class="ui main text menu">

            <div id="mainheader-block" class="ui text center aligned container">
                <!--  -->
                <a href="<?php echo base_url()?>" class="item" id="gold_color" style=" margin-left: 36px;"> HOME</a>

                <a class="item" id="gold_color">OUR CHEESE</a>



                <div id="finecheese_color" class="ui fluid flowing popup">
                    <div class="ui three column relaxed grid">
                        <div class="left aligned column">
                            <div style="background-color:white" class="ridge">
                                <h4 id="hover_menu_align_header" class="ui header">

                                    <a href="<?php echo base_url()?>imported-cheese"> IMPORTED CHEESE </a>

                                </h4>

                                <div class="ui link list" style="margin-bottom:10px;">
                                    <?php $all_category = $this->CategoryModel->get_sub_cat_imported();?>
                                    <?php foreach ($all_category as  $maincat) {?>




                                    <a id="hover_menu_align_text"
                                        href="<?php echo base_url()?>cheese/<?php echo strtolower(str_replace(" ","-", $maincat->sub_category_name));?>"
                                        class="item"> <?php echo $maincat->sub_category_name?></a>


                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <div class="left aligned column">
                            <div style="background-color:white" class="ridge">
                                <h4 id="hover_menu_align_header" class="ui header">
                                    <a href="<?php echo base_url()?>indian-cheese">INDIAN CHEESE </a> </h4>
                                <div class="ui link list" style="margin-bottom:10px;">
                                    <?php $all_category = $this->CategoryModel->get_sub_cat_indian();?>
                                    <?php foreach ($all_category as  $maincat) {?>

                                    <a id="hover_menu_align_text"
                                        href="<?php echo base_url()?>cheese/<?php echo strtolower(str_replace(" ","-", $maincat->sub_category_name));?>"
                                        class="item"> <?php echo $maincat->sub_category_name?></a>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <div class="left aligned column">
                            <div style="background-color:white" class="ridge">
                                <h4 id="hover_menu_align_header" class="ui header">
                                    <a href="<?php echo base_url()?>cheese-by-weight"> CHEESE BY WEIGHT </a> </h4>
                                <div class="ui link list" style="margin-bottom:10px;">

                                    <a id="hover_menu_align_text" href="<?php echo base_url()?>cheese-by-weight"
                                        class="item">CHEESE</a>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="item" id="gold_color">OUR MEAT</a>
                <div id="finecheese_color" class="ui fluid flowing popup">
                    <div class="ui three column relaxed grid">
                        <div class="left aligned column">
                            <div style="background-color:white" class="ridge">
                                <h4 id="hover_menu_align_header" class="ui header"><a
                                        href="<?php echo base_url()?>cold-cuts">COLD CUTS</a></h4>
                                <div class="ui link list" style="margin-bottom:10px;">
                                    <?php $all_category = $this->CategoryModel->get_sub_cat_coldcuts();?>
                                    <?php foreach ($all_category as  $maincat) {?>
                                    <a id="hover_menu_align_text"
                                        href="<?php echo base_url()?>meat/<?php echo strtolower(str_replace(" ","-", $maincat->sub_category_name));?>"
                                        class="item"> <?php echo $maincat->sub_category_name?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="left aligned column">
                            <div style="background-color:white" class="ridge">
                                <h4 id="hover_menu_align_header" class="ui header"><a
                                        href="<?php echo base_url()?>canned-meat">CANNED MEAT</a></h4>
                                <div class="ui link list" style="margin-bottom:10px;">
                                    <?php $all_category = $this->CategoryModel->get_sub_cat_cannedpork();?>
                                    <?php foreach ($all_category as  $maincat) {?>

                                    <a id="hover_menu_align_text"
                                        href="<?php echo base_url()?>meat/<?php echo strtolower(str_replace(" ","-", $maincat->sub_category_name));?>"
                                        class="item"> <?php echo $maincat->sub_category_name?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="left aligned column">
                            <div style="background-color:white" class="ridge">
                                <h4 id="hover_menu_align_header" class="ui header">
                                    <a href="<?php echo base_url()?>meat-by-weight"> MEAT BY WEIGHT </a> </h4>
                                <div class="ui link list" style="margin-bottom:10px;">
                                    <a class="item" id="hover_menu_align_text"
                                        href="<?php echo base_url()?>meat-by-weight" class="item"
                                        id="hover_menu_align_text">MEAT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="header item">
                    <a href="index.php"> <img class="logonav" src="<?php echo base_url()?>assets/images/logo.png"
                            alt="logo"></a>
                </div>
                <a class="item" id="gold_color">MORE</a>
                <div id="finecheese_color" class="ui fluid flowing popup">
                    <div id="finecheese_colorM" class="ui three column very relaxed grid">
                        <?php $all_category = $this->CategoryModel->get_all_category();?>
                        <?php $all_sub_category = $this->CategoryModel->get_all_sub_category();?>
                        <?php foreach ($all_category as  $maincat) {?>
                       
                            <div class="left aligned column">
                            <div style="background-color:white" class="ridge">
                                <h4 id="hover_menu_align_header" class="ui header">
                                    <a
                                        href="<?php echo base_url()?><?php echo strtolower(str_replace(" ","-", $maincat->category_name));?>">
                                        <?php echo $maincat->category_name?>
                                    </a>
                                </h4>
                                <div class="ui link list" style="margin-bottom:10px;">
                                    <?php foreach ($all_sub_category as  $subcat) {?>
                                    <?php if($subcat->category_sub_id == $maincat->category_id){?>
                                   
                                        <a id="hover_menu_align_text" href="<?php echo base_url()?>more/<?php echo strtolower(str_replace(" ","-", $subcat->sub_category_name));?>"
                                        class="item"> <?php echo $subcat->sub_category_name?></a>
                                    <?php }?>
                                    <?php }?>
                                </div>

                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
  


                <a class="item" id="gold_color">HORECA</a>
                <div id="finecheese_color" class="ui fluid flowing popup">
                    <div id="finecheese_colorM" class="ui four column grid">
                        <div class="left aligned column">
                            <div style="background-color:white" class="ridge">
                                <h4 id="hover_menu_align_header" class="ui header">
                                    <a href="<?php echo base_url()?>horeca/indian-products"> INDIAN PRODUCTS</a></h4>
                                <div class="ui link list">
                                    <a href="<?php echo base_url()?>horeca/indian-products/cheese"
                                        id="hover_menu_align_text" class="item">CHEESE</a>
                                    <a href="<?php echo base_url()?>horeca/indian-products/butter"
                                        id="hover_menu_align_text" class="item">BUTTER</a>
                                    <a href="<?php echo base_url()?>horeca/indian-products/cream"
                                        id="hover_menu_align_text" class="item">CREAM</a>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="left aligned column">
                            <div style="background-color:white" class="ridge">
                                <h4 id="hover_menu_align_header" class="ui header">
                                    <a href="<?php echo base_url()?>horeca/imported-products">IMPORTED PRODUCTS</a></h4>
                                <div class="ui link list">
                                    <a href="<?php echo base_url()?>horeca/imported-products/cheese"
                                        id="hover_menu_align_text" class="item">CHEESE</a>
                                    <a href="<?php echo base_url()?>horeca/imported-products/butter"
                                        id="hover_menu_align_text" class="item">BUTTER</a>
                                    <a href="<?php echo base_url()?>horeca/imported-products/cream"
                                        id="hover_menu_align_text" class="item">CREAM</a>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="left aligned column">
                            <div style="background-color:white" class="ridge">
                                <h4 id="hover_menu_align_header" class="ui header">
                                    <a href="<?php echo base_url()?>horeca/meat-products">
                                        MEAT PRODUCTS</a></h4>
                                <div class="ui link list">
                                    <a href="<?php echo base_url()?>horeca/meat-products/meat"
                                        id="hover_menu_align_text" class="item">MEAT</a>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="left aligned column">
                            <div style="background-color:white" class="ridge">
                                <h4 id="hover_menu_align_header" class="ui header">
                                    <a href="<?php echo base_url()?>horeca/ambient-products">
                                        AMBIENT PRODUCTS</a></h4>
                                <div class="ui link list">
                                    <a href="<?php echo base_url()?>horeca/ambient-products/ambient"
                                        id="hover_menu_align_text" class="item">AMBIENT</a>
                                    <br>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <a href="<?php echo base_url()?>about-us" class="item" id="gold_color">ABOUT US </a>

            </div>
        </div>


        <div class="ui container fixed secondary menu">
            <div class="ui text container">
                <a class="toc item">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="item" style="padding:0;">
                    <a href="<?php echo base_url()?>"> <img class="logonav"
                            src="<?php echo base_url()?>assets/images/logo.png" alt="logo">
                    </a>

                    <a style="color:#0d5690" class="item" id="nav-icon"><i style="font-size: 16px;"
                            class="icon-user"></i> </a>
                    <?php $customer_id = $this->session->userdata('cus_id');?>
                    <?php
                if($customer_id){?>
                    <div class="ui flowing  popup">
                        <div class="ui grid">
                            <div class="left aligned column">
                                <h4 id="gold_color" class="ui header">My Account</h4>
                                <div class="ui link list">
                                    <a class="item" href="<?php echo base_url()?>my-orders"> 
									<div class="ui fluid basic button"> My Orders </div>
									</a> <br>
                                    <a href="<?php echo base_url()?>logout" class="item">
                                        <div class="ui fluid basic button"> Log Out</div>
                                    </a> <br>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="ui flowing  popup">
                        <div class="ui grid">
                            <div class="left aligned column">
                                <h4 id="gold_color" class="ui header">My Account</h4>
                                <div class="ui link list">
                                    <a href="<?php echo base_url()?>my-account" class="item">
                                        <div class="ui fluid basic button"> Sign In </div>
                                    </a> <br>
                                    <a href="<?php echo base_url()?>my-registration" class="item">
                                        <div class="ui fluid basic button"> Create Account</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>


                    <a href="<?php echo base_url()?>show-cart" class="item" id="nav-icon"><i style="font-size: 16px; "
                            class="icon-shopping-bag"></i><?php $cart_items =  $this->cart->total_items();
                                        if($cart_items>0){
                                    ?>
                        <small style="font-size:12px;margin-bottom:10px;">(<?php echo $cart_items;?>)</small>
                        <?php }else{?>

                        <?php } ?> </a>

                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar Menu for Mobile -->
    <div class="ui vertical sidebar menu">
        <a href="<?php echo base_url()?>" class="item" id="gold_color"> HOME</a>
        <div href="#ourcheese" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle item"
            id="gold_color">OUR CHEESE</div>
        <div id="ourcheese" class="collapse">
            <div id="ui menu">
                <a class="item" id="gold_color" href="<?php echo base_url()?>imported-cheese">IMPORTED CHEESE</a>
                <?php $all_category = $this->CategoryModel->get_sub_cat_imported();?>
                <?php foreach ($all_category as  $maincat) {?>
                <div class="menu">
                    <a href="<?php echo base_url()?>cheese/<?php echo strtolower(str_replace(" ","-", $maincat->sub_category_name));?>"
                        class="item"> <?php echo $maincat->sub_category_name?></a>
                </div>
                <?php } ?>
                <a class="item" id="gold_color">INDIAN CHEESE</a>
                <?php $all_category = $this->CategoryModel->get_sub_cat_indian();?>
                <?php foreach ($all_category as  $maincat) {?>
                <div class="menu">
                    <a href="<?php echo base_url()?>cheese/<?php echo strtolower(str_replace(" ","-", $maincat->sub_category_name));?>"
                        class="item"> <?php echo $maincat->sub_category_name?></a>
                </div>
                <?php } ?>
                <a class="item" id="gold_color">CHEESE BY WEIGHT</a>
                <div class="menu">
                    <a href="<?php echo base_url()?>cheese-by-weight" class="item">CHEESE</a>
                </div>
            </div>
        </div>
        <div href="#ourmeat" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle item" id="gold_color">
            OUR MEAT</div>
        <div id="ourmeat" class="collapse">
            <div id="ui menu">
                <a href="<?php echo base_url()?>cold-cuts" class="item" id="gold_color">COLD CUTS</a>
                <?php $all_category = $this->CategoryModel->get_sub_cat_coldcuts();?>
                <?php foreach ($all_category as  $maincat) {?>
                <div class="menu">
                    <a href="<?php echo base_url()?>meat/<?php echo strtolower(str_replace(" ","-", $maincat->sub_category_name));?>"
                        class="item"> <?php echo $maincat->sub_category_name?></a>
                </div>
                <?php } ?>
                <a class="item" href="<?php echo base_url()?>canned-meat" id="gold_color">CANNED MEAT</a>
                <?php $all_category = $this->CategoryModel->get_sub_cat_cannedpork();?>
                <?php foreach ($all_category as  $maincat) {?>
                <div class="menu">
                    <a href="<?php echo base_url()?>meat/<?php echo strtolower(str_replace(" ","-", $maincat->sub_category_name));?>"
                        class="item"> <?php echo $maincat->sub_category_name?></a>
                </div>
                <?php } ?>
                <a class="item" id="gold_color">MEAT BY WEIGHT</a>
                <div class="menu">
                    <a href="<?php echo base_url()?>meat-by-weight" class="item">MEAT</a>
                </div>
            </div>
        </div>
        <div href="#more" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle item" id="gold_color">
            MORE
        </div>
        <?php $all_category = $this->CategoryModel->get_all_category();?>
        <?php $all_sub_category = $this->CategoryModel->get_all_sub_category();?>
        <div id="more" class="collapse">
            <div id="ui menu">
                <?php foreach ($all_category as  $maincat) {?>

                <a class="item"
                    href="<?php echo base_url()?><?php echo strtolower(str_replace(" ","-", $maincat->category_name));?>"
                    id="gold_color"> <?php echo $maincat->category_name?></a>

                <div class="menu">
                    <?php foreach ($all_sub_category as  $subcat) {?>
                    <?php if($subcat->category_sub_id == $maincat->category_id){?>
                    <a href="<?php echo base_url()?>more/<?php echo strtolower(str_replace(" ","-", $subcat->sub_category_name));?>"
                        class="item"><?php echo $subcat->sub_category_name?></a>
                    <?php }?>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <div href="#horeco" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle item" id="gold_color">
            HORECA
        </div>
        <div id="horeco" class="collapse">
            <div id="ui menu">
                <a class="item" href="<?php echo base_url()?>horeca/indian-products" id="gold_color"> INDIAN
                    PRODUCTS</a>
                <div class="menu">
                    <a href="<?php echo base_url()?>horeca/indian-products/cheese" class="item">CHEESE</a>
                    <a href="<?php echo base_url()?>horeca/indian-products/butter" class="item">BUTTER</a>
                    <a href="<?php echo base_url()?>horeca/indian-products/cream" class="item">CREAM</a>
                </div>
            </div>
            <div id="ui menu">
                <a class="item" href="<?php echo base_url()?>horeca/imported-products" id="gold_color"> IMPORTED
                    PRODUCTS </a>
                <div class="menu">
                    <a href="<?php echo base_url()?>horeca/imported-products/cheese" class="item">CHEESE</a>
                    <a href="<?php echo base_url()?>horeca/imported-products/butter" class="item">BUTTER</a>
                    <a href="<?php echo base_url()?>horeca/imported-products/cream" class="item">CREAM</a>
                </div>
            </div>
            <div id="ui menu">
                <a class="item" href="<?php echo base_url()?>horeca/meat-products" id="gold_color"> MEAT PRODUCTS </a>
                <div class="menu">
                    <a href="<?php echo base_url()?>horeca/meat-products/meat" class="item">MEAT</a>
                </div>
            </div>
            <div id="ui menu">
                <a class="item" href="<?php echo base_url()?>horeca/ambient-products" id="gold_color"> AMBIENT PRODUCTS
                </a>
                <div class="menu">
                    <a href="<?php echo base_url()?>horeca/meat-products/ambient" class="item">AMBIENT</a>
                </div>
            </div>
        </div>

        <a href="<?php echo base_url()?>about-us" class="item" id="gold_color"> ABOUT US</a>
        <a href="<?php echo base_url()?>my-account" class="item" id="gold_color"> MY ACCOUNT</a>
        <?php $customer_id = $this->session->userdata('cus_id');?>
    </div>
    <!-- Sidebar Menu for Mobile -->

</body>

</html>

<style>
    .checkout_submit {
        background: none !important;
        margin-left: -28px;
        border: none;
    }


    @media only screen and (min-width : 768px) and (max-width : 1024px) {
        #tablet_blue_menu {
            display: none !important;
        }
    }

    @media only screen and (min-width : 768px) and (max-width : 1024px) {
        #tablet_myaccount {
            left: -60px;
        }
    }
</style>
<script>
    $(window).on('beforeunload', function () {
        $(window).scrollTop(0);
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 120) {
            $(".topnav").addClass("sticky");
        } else {
            $('.topnav').removeClass("sticky");
        }
    });

    $(window).on("scroll", function () {
        var s = 82 - Math.min(25, $(document).scrollTop());
        $(".logonav").width(s).height(s);
    });


    $(document)
        .ready(function () {

            // fix main menu to page on passing
            $('.main.menu').visibility({
                type: 'fixed'
            });

            // create sidebar and attach to menu open
            $('.ui.sidebar')
                .sidebar('attach events', '.toc.item');

            // dropdown side bar
            $('#hybrid select')
                .dropdown({
                    on: 'hover'
                });


            $('.ui.dropdown').dropdown();
            $('#select').dropdown();
            $('#multi-select').dropdown();
            $('.menu .item').popup({
                on: 'click',
                // inline: true,
                hoverable: true,
                position: 'bottom center',
                variation: 'wide',
                // delay: {
                //   show: 300,
                //   hide: 800
                // }
            });
        });
</script>

<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet"
    src="https://static.zdassets.com/ekr/snippet.js?key=e67be81c-ad2d-46fb-8fcd-b72c9e20437a"> </script>
<!-- End of  Zendesk Widget script -->