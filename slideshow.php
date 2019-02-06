<div class='slider'>

  <div class='slide1'>
    <div class="text-blockSlide slide-up1"> Hello <br> 
    <button class="ui inverted button">Secondary</button>    </div>  
  </div>

  <div class='slide2'>
  <div class="text-blockSlide slide-up2"> Hello   <br>
  <!-- <div href="www.google.com" class="ui large flat primary basic button"> Hello2</div> -->
   </div>
  </div>

  <div class='slide3'>
  <div class="text-blockSlide slide-up3"> Hello  <br>
    <!-- <div href="www.google.com" class="ui large flat primary basic button"> Hello2</div> -->
    </div>
  </div>

  <div class='slide4'>
  <div class="text-blockSlide slide-up4"> Hello  <br>
    <!-- <div href="www.google.com" class="ui large flat primary basic button"> Hello2</div> -->
    </div>
  </div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
   <span class="dot"></span> 
</div>


<style>
.slider {
  max-width: 2000px;
  height: 450px;
  margin: auto;
  position: relative;
  padding-top: 130px;
  z-index: 0;
}
.slide1,.slide2,.slide3,.slide4,.slide5 {
  position: absolute;
  width: 100%;
  height: 100%;
}

.slide1 {
    background: url(images/cheeseTransform.jpg)no-repeat center;
      background-size: cover;
    animation:fade3 8s infinite;
-webkit-animation:fade3 8s infinite;
}
.slide2 {
    background: url(images/cheese_shop.jpg)no-repeat center;
      background-size: cover;
    animation:fade3 8s infinite;
-webkit-animation:fade3 8s infinite;
}

.slide3 {
  background: url(images/meat_cut.jpg)no-repeat center;
      background-size: cover;
    animation:fade2 8s infinite;
-webkit-animation:fade2 8s infinite;
}

.slide4 {
  background: url(images/beef_closeup.jpg)no-repeat center;
      background-size: cover;
    animation:fade 8s infinite;
-webkit-animation:fade 8s infinite;
} 


@keyframes fade
{
  0%   {opacity:1}
  33.333% { opacity: 0}
  66.666% { opacity: 0}
  100% { opacity: 1}
}
@keyframes fade2
{
  0%   {opacity:0}
  33.333% { opacity: 1}
  66.666% { opacity: 0 }
  100% { opacity: 0}
}
@keyframes fade3
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}

/* text block on the Slideshow */
/* .text-blockSlide {
  position: absolute;
  top: 35%;
  left: 10px;
  color: #ffffff;
  font-size: 64px;
  padding-left: 40%;
  padding-right: 35%;
} */

/* text block slide up */
.slide-up1, .slide-up2,.slide-up3,.slide-up4 {
  position: absolute;
  top: 35%;
  left: 10px;
  color: #ffffff;
  font-size: 64px;
  padding-left: 40%;
  padding-right: 35%;
  
  height:100%;
  animation: 1s slide-up;
}

@keyframes slide-up {
  from {
    margin-top: 100%;
    height: 300%; 
  }

  to {
    margin-top: 0%;
    height: 100%;
  }
}


</style>

