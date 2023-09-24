<div>
    <?php include 'Header.php';?>
</div>


<div id="menuleft">
    <div class="ui divider"> <br> </div>
    <div class="ui hidden divider"> <br> </div>
    <div class="ui stackable grid container">
        <!-- first column -->
        <div class="two wide column">
        </div>
        <!-- Second column -->
        <div class="four wide column">
            <form class="ui form" method="post" action="<?php echo base_url()?>customer-login">
                <div class="ui middle aligned center aligned grid">
                    <div class="column">
                        <h2 class="ui header">
                            <div class="content">
                                Log-in to your account
                            </div>
                        </h2>
                        <form class="ui large form">
                            <div class="ui stacked segment">
                                <div class="field">
                                    <div class="ui left icon input">
                                        <i class="mail icon"></i>
                                        <input type="text" name="cus_email" placeholder="E-mail address" required>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="ui left icon input">
                                        <i class="lock icon"></i>
                                        <input type="password" name="cus_password" placeholder="Password" required>
                                    </div>
                                </div>
                                       <input class="ui fluid basic  primary submit button" type = "submit">
                            </div>
                        </form>
                    </div>
                </div>
            </form>
        </div>


        <!-- Second of Second column -->
        <div class="two wide column">
            <!-- empty space between -->
        </div>
        <div class="four wide column">
            <form class="ui form" method="post" action="<?php echo base_url()?>customer-registration">
                <div class="ui middle aligned center aligned grid">
                    <div class="column">
                        <h2 class="ui header">
                            <div class="content">
                               New to us Signup!
                            </div>
                        </h2>
                        <h5 style='color:red'> <?php echo validation_errors();?></h5>
         <form class="ui large form" >
                            <div class="ui stacked segment">

                                <div class="field">
                                    <div class="ui left icon input">
                                        <i class="user icon"></i>
                                        <input type="text" placeholder="Name" name="cus_name" value="<?php echo set_value('cus_name'); ?>" required>
                                    </div>
                                </div>
                                
                                
                                <div class="field">
                                    <div class="ui left icon input">
                                        <i class="mail icon"></i>
                                        <input type="text" placeholder="E-mail address"  name="cus_email" value="<?php echo set_value('cus_email'); ?>" required>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="ui left icon input">
                                        <i class="lock icon"></i>
                                        <input type="password"  placeholder="Password"  name="cus_password" required>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="ui left icon input">
                                        <i class="lock icon"></i>
                                        <input type="password"  placeholder="Confirm Password"  name="con_pass" required>
                                    </div>
                                </div>                                

                                  <input class="ui fluid basic  primary submit button" type = "submit">
                            </div>
                        </form>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<br>


<div>
    <?php include 'Footer.php';?>
</div>