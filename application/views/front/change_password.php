<div>
    <?php include 'Header.php';?>
</div>

<div>
    <?php include 'CheeseFinder.php';?>
</div>

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" /> 

<div id="menuleft">
    <div class="ui divider"> <br> </div>
    <h1 class="ui centered header" id="header-size40"> Change Password </h1>
    <hr>
<?php $id = $this->uri->segment(2);

?>

    <div class="ui stackable grid container">
        <!-- first column -->
        <div class="two wide column">
        </div>
        <!-- Second column -->
        <div class="four wide column">
            <div class="ui middle aligned center aligned grid">
                <div class="column">
                    <h2 class="ui left floated header">
                       
                    </h2>
                   <form class="ui form" method = "post" action="<?php echo base_url()?>change-pass/<?php echo $id?>">
                        <div>
                            <div class="field">
                                <label id="login_titles" class="ui left floated header required">New Password </label>
                                <div class="ui left icon input">
                                    <i class="mail icon"></i>
                                    <input style="border-radius:1px;height:30px;" type="text" name="cus_password" placeholder="New Password" required>
                                </div>
                            </div>

                            <div class="field">
                                <label id="login_titles"  class="ui left floated header required"> Confirm Password</label>
                                <div class="ui left icon input">
                                    <i class="lock icon"></i>
                                    <input style="border-radius:1px; height:30px;" type="password" name="confirm_password" placeholder="Confirm Password" required>
                                </div>
                            </div>

                           
                            <input type="submit" class="css_button2" value="Change">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr class="loginpage">

        <!-- Second of Second column -->
        


    </div>
</div>



<br>
<br>


<div>
    <?php $this->?load->view('front/Footer.php');?>
</div>

<style>

    #login_titles{
        font-family: 'Josefin Sans',
            sans-serif;
                font-size: 15px;
        font-weight: 700;
    }


    #login_header {
        font-family: 'Cormorant Garamond',
            serif;
        font-size: 20px;
        font-weight: 500;
        line-height: 68px;
        color: #333333;
    }


    @media (min-width: 600px) {
        hr.loginpage {
            border: none;
            border-left: 1px solid lightgrey;
            height: 300px;
            width: 0.5px;
        }
    }

    .required:after {
        content: " *";
        color: #CB6A68;
    }

    .forgot_login {
        color: black;
        background: none !important;
        border: none;
        font-size: 17px;
        font-family: 'Josefin Sans',
            sans-serif;
        line-height: 1.2;
        text-decoration: underline;
        text-align: left;
    }

    .css_button2 {
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        background-color: black;
        font-family: 'Josefin Sans',
            sans-serif;
        font-weight: 400;
        margin-left: -170px;
        padding: 10px 24px;
    }

        @media (max-width: 601px) {
        .css_button2 {
            border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px; 
        cursor: pointer;
        background-color: black;
        font-family: 'Josefin Sans',
            sans-serif;
        font-weight: 400;
        padding: 10px 24px;
          margin-left: -255px;
        }
    }





    /* Create account  */
    #login_header2 {
        font-family: 'Cormorant Garamond',
            serif;
        color: #333333;
        font-weight: 500;
        font-size: 20px;
    }

    @media (min-width: 601px) {
        #login_header2 {
            font-family: 'Cormorant Garamond',
                serif;
            font-weight: 500;
            font-size: 20px;
            /* line-height: 68px; */
            color: #333333;
            margin-left: -165px;
            margin-top: 33px;
        }
    }


    @media (max-width: 601px) {
        .css_button3 {
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            background-color: black;
            font-family: 'Josefin Sans',
                sans-serif;
            font-weight: 400;
            padding: 10px 24px;
        }
    }


    @media (min-width: 601px) {
        .css_button3 {
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            background-color: black;
            font-family: 'Josefin Sans',
                sans-serif;
            font-weight: 400;
            margin-left: -163px;
            padding: 10px 24px;
        }
    }
</style>