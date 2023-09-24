<!-- <form method = "post" action="<?php echo base_url()?>postpass">
<input type="text" name="email" placeholder="enter email">
<input type = "submit">
</form> -->


<div>
    <?php include 'Header.php';?>
</div>



<div>
    <?php include 'CheeseFinder.php';?>
</div>


<div id="menuleft" class="ui container">
    <div class="ui divider"> <br> </div>
    <h1 class="ui header" id="header-size40"> Change Your Password. </h1>
    </p>

    <form class="ui form" method = "post" action="<?php echo base_url()?>change_password">
        <div class="field">
            <label id="login_titles">Code</label>
            <div class="fields">
                <div class="sixteen wide field">
                    <input style="border-radius:1px; height:30px;" type="text" name="code" placeholder="Enter Code">
                </div>
            </div>
        </div>
        <div class="field">
            <label id="login_titles">Enter your new password</label>
            <div class="fields">
                <div class="sixteen wide field">
                    <input style="border-radius:1px; height:30px;" type="text" name="password" placeholder="Enter Code">
                </div>
            </div>
        </div>
<input type = "submit" class="css_button5" value="Submit">
     <!-- <div class="css_button5">Submit</div> -->


    </form>

</div>




<br>
<br>


<div>
    <?php $this->load->view('front/Footer.php');?>
</div>

<style>
    /* canvas{
  pointer-events:none;
} */

.forgot_font{
      font-family: 'adobe caslon',
            sans-serif;
                font-size: 14px;
                 font-weight: 400;
}

.forgot_fontH{
      font-family: 'Cormorant Garamond', serif;
                font-size: 20px;
                 font-weight: 400;
}

  #login_titles{
        font-family: 'Josefin Sans',
            sans-serif;
                font-size: 15px;
        font-weight: 700;
    }



    @media (max-width: 601px) {
        .css_button5 {
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
        .css_button5 {
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
            /* margin-left: -163px; */
            padding: 10px 24px;
        }
    }
</style>
