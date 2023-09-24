
    <!-- Simple icons start -->
    <div id="trigger1" class="icon-bar1 icon-barBG">
      <div id="link-menu">
      <a>  <i class="fa fa-search fa-fogslide">
          <p class="icon-barFont"> Products </p>
        </i> </a>
      </div>
    </div>

    <div id="trigger2" class="icon-bar2 icon-barBG">
      <div id="link-menu">
      <a><i class="fa fa-car fa-fogslide">
          <p class="icon-barFont"> Delivery </p>
        </i></a> </div></div>

    <div id="" class="icon-bar3 icon-barBG">
      <div id="link-menu">
      <a href="https://www.instagram.com/jk_chennai" style="color:white" target="_blank"><i class="fa fa-instagram fa-fogslide">
          <p class="icon-barFont"> Instagram </p>
        </i></a>
      </div>
    </div>

    

    <div id="" class="icon-bar4 icon-barBG" >
      <div id="link-menu">
      <a href="https://www.facebook.com/jkenterpriseschennai/" style="color:white" target="_blank"><i class="fa fa-facebook fa-fogslide">
          <p class="icon-barFont"> Facebook </p>
        </i></a>
      </div>
    </div>


    <!-- Modals -->
    <div class="ui info event-modal modal" data-object="trigger1">
      <div id="fontModal" class="ui centered teal header">
        Product Finder
      </div>
      <div class="ui content">
          
          <!--<form class="ui icon input" action="<?php echo base_url()?>search" method="post">-->
          <!--      <input  style="border:16px solid #0d5690;" name="search" type="text" placeholder="Search..."> -->
          <!--      <i style="padding-left:100px;color:#0b4f93;" class="search link icon"></i>-->
          <!--      <button type="submit" class="checkout_submit">-->
                
          <!--    </button>-->
          <!--    </form>-->
        <form class="ui form" action="<?php echo base_url()?>search" method="post">
               <h6  id="fontModal">  Product Name </h6>
          <input type="text" name="search" class="ui fluid field" placeholder="Product  Name"> <br> <br>
		   <!--   
<h6  id="fontModal">  Country of Origin </h6>
<select class="ui fluid search dropdown" >
  <option >India</option>
  <option >Italy</option>
  <option >France</option>
</select> <br> 
<h6  id="fontModal"> Style of Cheese  </h6> 
<select class="ui fluid search dropdown" >
  <option >Hard Cheese</option>
  <option >Soft Cheese</option>
  <option >Blue Cheese</option>
  <option >Hard Cheese</option>
  <option >Soft Cheese</option>
  <option >Blue Cheese</option>
</select> <br> <br> -->
<input type="submit" class="checkout_submit" style="margin-left:45%" id="fontModal" value="Search">  
           <br> <br>
        </form>
      </div>
      <!-- <div class="actions">
        <div class="ui deny black button">Close</div>
      </div> -->
    </div>


    <div class="ui info event-modal modal" data-object="trigger2">
      <div id="fontModal" class="ui centered teal header">
        Delivery Details
      </div>
      <div id="fontModal" class="content">
        <p>All our exotic and domestic food goods are ready to order! Depending on the day you purchase or you
place your order, it may seem like it may take a little while because your order will be placed into the
following day’s shipment, moreover we assure you that you receive the fresh product at your doorstep.
But you can always request your order to bumped up early by contacting us and we will do our best to
ship your product as early as possible.</p>
      </div>
    </div>

    <div class="ui info event-modal modal" data-object="trigger3">
      <div id="fontModal" class="ui centered teal header">
        About Us
      </div>
      <div id="fontModal" class="content">
        <p>Founded in August 2010, JK Enterprises existed to create a world where anyone can belong
anywhere, providing as one of the best cheese suppliers rapidly expanding its broad range of
products of cheese including frozen meats and cold cuts, seafood, syrups, pasta, chocolates,
and other special provisions. Our uniquely leverages technology has economically increase
millions of people around the world to unlock and monetize their spaces, passions and their
likes for Cheese, meat and other food products.</p>
      </div>
    </div>

    <div class="ui info event-modal modal" data-object="trigger4">
      <div class="header">
        Share and Follow our Page
      </div>
      <div class="content">
        <a href="https://www.facebook.com/alakopdigital" target="_blank"> <i class="big black facebook icon"></i> </a>
        <a href="https://www.facebook.com/alakopdigital" target="_blank"> <i class="big black instagram icon"></i> </a>
      </div>
    </div>



    <script>
  $('.event-modal').modal({
    allowMultiple: true
  }).height('auto').width('40%');

  $('.event-modal.info').each(function (idx, elem) {
    $(elem).modal('attach events', '#' + $(elem).attr('data-object'));
  });
</script>

<style scoped>
  .event-modal {
    left: 30%;
    top: 20%;
  }



  /* Fixed right Icons ONLY Computer */

  @media only screen and (max-width: 600px) {
    .icon-bar {
      display: none ! important;

    }
  }

  .icon-barFont {
    font-size: 12px;
    font-family: gill-sans-nova, sans-serif;
    font-weight: 400;
  }

  @media only screen and (max-width: 600px) {
    .icon-barFont {
    font-size: 10px;
    font-family: gill-sans-nova, sans-serif;
    font-weight: 400;
  }
  }

  @media only screen and (max-width: 600px) {
    .icon-bar1 a {
      height: 40px;
    width: 40px;
  }
  }

  @media only screen and (max-width: 600px) {
    .icon-bar2 a {
      height: 40px;
    width: 40px;
  }
  }
  
  @media only screen and (max-width: 600px) {
    .icon-bar3 a {
      height: 40px;
    width: 40px;
  }
  }

  @media only screen and (max-width: 600px) {
    .icon-bar4 a {
      height: 40px;
    width: 40px;
  }
  }

  #fontModal{
     font-family: 'Cormorant Garamond',
    serif;
    font-size: 18px;
    line-height: 1.8;
  }

  .fa-fogslide {
    margin-top: 25%;
	font-size: large;
  }


  .icon-bar1,
  .icon-bar2,
  .icon-bar3,
  .icon-bar4 {
    position: absolute;
    right: 0;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index: 2;
  box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.2);
  }

  .icon-bar1 {
    top: 220px;
  }

  .icon-bar2 {
    top: 290px;
  }

  .icon-bar3 {
    top: 360px;
  }


  .icon-bar4 {
    top: 430px;
  }


  .icon-bar1 a {
    display: block;
    text-align: center;
    height: 60px;
    width: 60px;
    transition: all 0.3s ease;
    color: #0d5690;
    font-size: 15px;
  }


  .icon-bar2 a {
    display: block;
    text-align: center;
    height: 60px;
    width: 60px;
    transition: all 0.3s ease;
    color: #0d5690;
    font-size: 15px;
  }

  .icon-bar3 a {
    display: block;
    text-align: center;
    height: 60px;
    width: 60px;
    transition: all 0.3s ease;
    color: #0d5690;
    font-size: 15px;
  }

  .icon-bar4 a {
    display: block;
    text-align: center;
    height: 60px;
    width: 60px;
    transition: all 0.3s ease;
    color: #0d5690;
    font-size: 15px;
  }

  .icon-bar1 a:hover {
    background-color: white;
  }

  .icon-bar2 a:hover {
    background-color: white;
  }

    .icon-bar3 a:hover {
    background-color: white;
  }

    .icon-bar4 a:hover {
    background-color: white;

  }


  .icon-barBG {
    background: #0b4f93;
    color:  white;
  }

    #link-menu a:hover {
    background: white;
    color: black;
}
  </style>
