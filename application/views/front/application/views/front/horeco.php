<div>
    <?php include 'Header.php';?>
</div>

<hr style="background-color:#0b4f93; padding-top:108px;">

<!-- contact us -->
<div class="parallax_horeco">
    <div id="contactus-padding" class="ui stackable grid container">
        <!-- first column -->
        <div id="align_leftC" class="eight wide column">
            <h2 id="horecojose">CONTACT US</h2>
            <br>
            <p id="real_josefin">Our customer services department is available to answer any queries you may have. </p>

            <b id="horecojose">Tel: </b> <span id="real_josefin"> +91-9841131008 / 9043449203 </span>
            <br>
            <b id="horecojose">Email: </b> <span id="josefin">  hello@jkcheese.com</span>
            <br> <br>
            <b id="horecojose"> Customer Services: </b> <span id="josefin"> Monday - Friday (8am-4pm) </span>
            <p id="real_josefin">We endeavour to respond to your enquiry as soon as possible.</p>


            <h3 id="horecojose"> Address:</h3>
            <p id="josefin">  ​New No.38, Old No.11, <br>
                    Ponnangipuram 1st Street, <br>
                    Nungambakkam Chennai-600034 <br>
                    Contact - 044-42025934 <br>
                    +91 9841131008 / 9043449203 
                <br>
                <h3 id="horecojose"> Bangalore: </h3>
                <p id="josefin">  67, 7th Cross, <br>
                        Vasanth Nagar, <br>
                        Bangalore 560001 </p>
            </p>

            <a href="https://www.google.com/maps/d/u/0/viewer?mid=1izzScvA0Fp9ckwSFtclYzFeOFJPje18Z&ll=13.062248200000006%2C80.24463609999998&z=17" target="_blank">view map</a>
        </div>
        <!-- wide -->
        <div id="cement_box" class="seven wide column wrapper">
            <div id="horecojose" class="ui dividing header">Alternately-send an email to our customer services
                team:
            </div>
<?php echo $this->session->flashdata("flash_msg");?>
                        <div class="status alert alert-success" style="display: none"></div>
            <div class="container">
                <form method="post" action="<?php echo base_url()?>contact-form">
                    <div class="row">
                        <div class="col-25">
                            <label id="horecojose14" class="required">Name</label>
                        </div>
                        <div class="col-75">
                             <input type="text" name="contact_name" placeholder="Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label id="horecojose14" class="required">Telephone Number: </label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="contact_number" placeholder="Telephone Number">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-25">
                            <label id="horecojose14" class="required">Email</label> </div>
                        <div class="col-75">
                            <input type="text" name="contact_email" placeholder="Email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label id="horecojose14" class="required">Order Number (if applicable):</label> </div>
                        <div class="col-75">
                            <input type="text" placeholder="order no" name="order_number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label id="horecojose14" class="required">Reason for enquiry:</label>
                        </div>
                        <div class="col-75">
                            <select id="horecojose14" name="reason">
                                <option id="horecojose14" value="Wholesale">Wholesale</option>
                                <option id="horecojose14" value="Retail">Retail</option>
                                <option id="horecojose14" value="General Enquiry">General Enquiry</option>
                                <option id="horecojose14" value="New Business">New Business</option>
                                <option id="horecojose14" value="Delivery">Delivery</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label id="horecojose14" class="required">Subject</label>
                        </div>
                        <div class="col-75">
                            <textarea id="horecojose14" style="height:200px"></textarea>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-25">
                            <label></label>
                        </div>
                        <div class="col-75">
                            <input id="horecaSubmit" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="horeca_footer">
            <h2 class="ui centered huge dividing header">Our Location On Map</h2> <br>
            <div class="ui centered grid">
                <iframe width="1200px" height="450" src="https://www.google.com/maps/d/embed?mid=1izzScvA0Fp9ckwSFtclYzFeOFJPje18Z"></iframe>
            </div>

        </div>


    </div>
</div>



<style scoped>
    #real_josefin {
        font-family: 'Josefin Sans',
            sans-serif;
        font-size: 16px;
        font-weight: 700;
        /* font-style:italic; */
    }

.required:after{ 
    content:" *";
    color:#CB6A68;
    }

    #josefin {
        font-family: 'Fjalla One', sans-serif;
        font-size: 17px;
        color: #7e6c48;
    }

    #horecojose14 {
        font-family: 'Fjalla One', sans-serif;
        font-size: 14px;
        font-weight: 400;
    }


    #horecojose {
        font-family: 'Fjalla One', sans-serif;
        color: #0d5690;
        font-size: 17px;
        font-weight: 400;
    }

    #cement_box {
        /* background-color: #D4D0C7; */
        width: 100%;
        background-image: url(assets/images/cement.jpg);
        background-repeat: repeat;
        background-position: left top;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    .col-25 {
        float: left;
        width: 30%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 70%;
        margin-top: 6px;
    }


    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    @media screen and (min-width: 600px) {
        #align_leftC {
            margin-left: 31px;
        }
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

        .col-25,
        .col-75,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }



    .horeca_footer {
        margin-bottom: 100px;
        width: 100%;
        padding-top: 80px;
    }

    #contactus-padding {
        padding-top: 2px;
        background: white;
        font: justify;

    }


    #horecaSubmit {
        background-color: #0d5690;
        color: white;
        font-family: 'Josefin Sans',
            sans-serif;
        width: 100%;
    }

    .parallax_horeco {
        /* The image used */
        background-image: url("<?php echo base_url()?>assets/images/horeco.jpg");
        /* background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat; */
        background-size: cover;
        position: relative;
    }

    @media only screen and (max-width: 600px) {
        .parallax_horeco {
            /* Set a specific height */
            min-height: 700px;
            /* Create the parallax scrolling effect */
        }
    }

    /* computer */
    @media only screen and (min-width: 601px) {
        .parallax_horeco {
            /* Set a specific height */
            min-height: 550px;
            /* Create the parallax scrolling effect */
        }
    }
</style>