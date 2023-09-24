<div id="bannerTop">

  <div id="banner" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
     
      
            
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/mainslider1.jpg" alt="image">
        <div id="text-blockSlide" class="slideup1">
          <div id="cheeseAlignBanner" style="    padding: 0px 92px;">About Us </div>
          <div id="banner-button" class="ui inverted big button">SHOP</div>
        </div>
      </div>
      
      </div>
      

      



    </div>
   

  </div>
</div>


<style scoped>
  .carousel-indicators li {
    width: 15px;
    height: 15px;
    border-radius: 100%;
    background-color: #9ebbd2;
  }

  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 380px;
    object-fit: cover;
  }
 
  #bannerTop {
    margin-top: 100px;
    display: block;
  }


  @media only screen and (max-width: 600px) {
    #banner-button {
      margin-left: 5%;
      margin-top: 10%;
    }
  }


  @media only screen and (min-width: 601px) {
    #banner-button {
      margin-left: 35%;
      margin-top: 10%;
            color: #0d5690;


    }
  }

  #text-blockSlide {
    color: #0d5690;
    position: absolute;
    font-family: 'Cormorant Garamond',
      serif;
      background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, #fff 140%),
        linear-gradient(to top, rgba(255, 255, 255, 0) 0, #fff 140%);
    padding:40px;  
    margin: 2px -60px;
      
  }

  @media only screen and (max-width: 600px) {
    #text-blockSlide {
      font-size: 80px;
      word-wrap: break-word;
      bottom: 20%;
      margin: 40;
      line-height: 56px;
      left: 10%;
    }
  }


  @media only screen and (min-width: 601px) {
    #text-blockSlide {
      font-size: 80px;
      left: 35%;
      bottom: 30%;

    }
  }

  .slideup1 {
    /* animation: movingCheese 5s;
        -webkit-animation: movingCheese 5s; */
    animation-iteration-count: 1;

    -webkit-animation-name: movingCheese;
    -moz-animation-name: movingCheese;
    -ms-animation-name: movingCheese;
    -o-animation-name: movingCheese;
    animation-name: movingCheese;
    -webkit-animation-duration: .7s;
    -moz-animation-duration: .7s;
    -ms-animation-duration: .7s;
    -o-animation-duration: .7s;
    animation-duration: .7s;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    /* -webkit-animation-delay: .9s;
    -moz-animation-delay: .9s;
    -ms-animation-delay: .9s;
    -o-animation-delay: .9s;
    animation-delay: .9s; */
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    -ms-animation-fill-mode: both;
    -o-animation-fill-mode: both;
    animation-fill-mode: both
  }

  @keyframes movingCheese {
    0% {
      opacity: 0;
      -webkit-transform: translateY(80px)
    }

    100% {
      opacity: 1;
      -webkit-transform: translateY(0)
    }
  }

  .carousel-control-prev-icon-banner,
  .carousel-control-next-icon-banner {
    height: 15px;
    width: 15px;
    background-image: none;
    padding-right: 150px;
  }

  .carousel-control-next-icon-banner:after {
    content: '>';
    font-size: 60px;
    background: #fff;
    background: rgba(255, 255, 255, .3);
    margin: 20px;
    top: 60%;
    width: 30px;
    padding: 10px 13px;
    box-sizing: content-box;
    position: absolute;
  }

  .carousel-control-prev-icon-banner:after {
    content: '<';
    position: absolute;
    font-size: 60px;
    margin: 20px;
    top: 60%;
    width: 30px;
    padding: 10px 13px;
    background: #fff;
    background: rgba(255, 255, 255, .3);
    box-sizing: content-box;
  }

  /* Fixed right Icons ONLY Computer */

  @media only screen and (max-width: 600px) {
    .icon-bar {
      display: none ! important;

    }
  }
</style>