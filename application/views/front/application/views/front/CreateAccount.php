<div>
    <?php include 'Header.php';?>
</div>


<div>
    <?php include 'CheeseFinder.php';?>
</div>


<div id="menuleft" class="ui container">
    <div class="ui divider"> <br> </div>
    <h1 class="ui centered header" id="header-size40"> Create An Account </h1>

<h5 style='color:red'> <?php echo validation_errors();?></h5>
  <form class="ui form" method="post" action="<?php echo base_url()?>customer-registration">
        <div class="field">
            <div class="two fields">
                <div class="field">
                    <label id="login_titles">First Name</label>
                    <input name="cus_name" value="<?php echo set_value('cus_name'); ?>" style="border-radius:1px; height:30px;"type="text" >
                </div>
                <div class="field">
                    <label id="login_titles">Last Name</label>
                    <input style="border-radius:1px; height:30px;" type="text" >
                </div>
            </div>
        </div>
        <div class="field">
                        <div class="two fields">
                <div class="field">
                    <label id="login_titles">Email</label>
                    <input name="cus_email" value="<?php echo set_value('cus_email'); ?>"style="border-radius:1px; height:30px;" type="text" >
                </div>
                <div class="field">
                    <label id="login_titles">Phone Number</label>
                    <input  pattern=".{10}" title="Only 10 numbers"  name="cus_mobile" value="<?php echo set_value('cus_mobile'); ?>" style="border-radius:1px; height:30px;" type="text" >
                </div>
            </div>
        </div>

        <div class="field">
            <div class="two fields">
                <div class="field">
                    <label id="login_titles">Password </label>
                    <input style="border-radius:1px; height:30px;" name="cus_password" value="<?php echo set_value('cus_password'); ?>"  type="password" >
                </div>
                <div class="field">
                    <label id="login_titles">Confirm Password</label>
                    <input style="border-radius:1px; height:30px;" name="con_pass"  type="password">
                </div>
            </div>
        </div>
       
       
     <!--     <div class="field">
            <label>  Please type the letters below</label>
            <div class="fields">
                <div class="sixteen wide field">
                    <input type="text" placeholder="" id="cpatchaTextBox"/>
                </div>
            </div>
        </div> -->

 
        <!--             
    <div id="captcha">    </div>
    <button type="submit">Submit</button> -->

      <input type="submit" value="Submit" class="css_button4">
     <!-- <div class="css_button4">Submit</div> -->


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


  #login_titles{
        font-family: 'Josefin Sans',
            sans-serif;
                font-size: 15px;
        font-weight: 700;
    }



    @media (max-width: 601px) {
        .css_button4 {
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
        .css_button4 {
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