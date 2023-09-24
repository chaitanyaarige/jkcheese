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
    <h1 class="ui header" id="header-size40"> Forgot Your Password ? </h1>
    <p class="forgot_fontH">Retrieve your password here</p>
   <p class="forgot_font"> Please enter your email address below. You will receive a link to reset your password.</p>

    <form class="ui form" method = "post" action="<?php echo base_url()?>postpass">
        
        <div class="field">
            <label id="login_titles">Email</label>
            <div class="fields">
                <div class="sixteen wide field">
                    <input style="border-radius:1px; height:30px;" type="text" name="email" placeholder="Enter Email">
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

<script>
    var code;

    function createCaptcha() {
        //clear the contents of captcha div first 
        document.getElementById('captcha').innerHTML = "";
        var charsArray =
            "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
        var lengthOtp = 6;
        var captcha = [];
        for (var i = 0; i < lengthOtp; i++) {
            //below code will not allow Repetition of Characters
            var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
            if (captcha.indexOf(charsArray[index]) == -1)
                captcha.push(charsArray[index]);
            else i--;
        }
        var canv = document.createElement("canvas");
        canv.id = "captcha";
        canv.width = 100;
        canv.height = 50;
        var ctx = canv.getContext("2d");
        ctx.font = "25px Georgia";
        ctx.strokeText(captcha.join(""), 0, 30);
        //storing captcha so that can validate you can save it somewhere else according to your specific requirements
        code = captcha.join("");
        document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
    }

    function validateCaptcha() {
        event.preventDefault();
        debugger
        if (document.getElementById("cpatchaTextBox").value == code) {
            alert("Valid Captcha")
        } else {
            alert("Invalid Captcha. try Again");
            createCaptcha();
        }
    }
</script>