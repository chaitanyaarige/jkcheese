<div>
    <?php include 'Header.php';?>
</div>

<div class="ui container" id="menuleft">
<div class="ui vertical menu sidenav">
  <div class="item">
    <div class="ui centered small grey header">CATEGORIES</div>
  </div>
  <div class="item">
    <div class="ui dividing tiny grey header">Dairy Products</div>
    <div class="menu">
      <a href="#ab" class="active item"> Cheese</a>
      <a href="#ab" class="active item">Butter</a>
      <a href="#dab" class="active item">Whipping Cream</a>
      <a href="#ab" class="active item">Chocolates</a>
    </div>
  </div>

  <div class="item">
    <div class="ui dividing tiny grey header">Meat Products</div>
    <div class="menu">
      <a href="#ab" class="active item">Frozen Meat</a>
      <a href="#ab" class="active item">Sea Foods</a>
      <a href="#ab" class="active item">Sausages</a>
      <a href="#ab" class="active item">Chilled Cold Cuts</a>
    </div>
  </div>

  <div class="item">
    <div class="ui dividing tiny grey header">Meat Products</div>
    <div class="menu">
      <a href="#ab" class="active item">Frozen Fruits & Puree</a>
      <a href="#ab" class="active item">Syrup</a>
      <a href="#ab" class="active item">Pasta</a>
      <a href="#ab" class="active item">Olives & Olive Oil</a>
      <a href="#ab" class="active item">Dry Fruits & Nuts</a>
      <a href="#ab" class="active item">Fresh Fruits & Berries</a>
    </div>
  </div>

</div>  <!-- vertical menu end -->
</div>  <!-- container end -->

<div class="ui container" id="product_align">
    <div class="main">
        <!-- Product List One -->
        <div id="slideProducts" class="carousel slide" data-ride="carousel">
            <div class="container carousel-inner ">
                <div class="carousel-item active">
                    <div class="ui three column doubling stackable grid container">
                        <div class="column">
                            <a href="new">
                                <img class="ui medium image centered radius_15" src="assets/images/almondBrazil.jpg"
                                    alt="About us" style="width:200px;height:200px">
                                <h4 class="ui centered header">Meat 1</h4>
                            </a>
                        </div>

                        <div class="column">
                            <a href="new">
                                <img class="ui medium image centered radius_15" src="assets/images/almondBrazil.jpg"
                                    alt="About us" style="width:200px;height:200px">
                                <h4 class="ui centered header">Meat 1</h4>
                            </a>
                        </div>
                        <div class="column">
                            <a href="new">
                                <img class="ui medium image centered radius_15" src="assets/images/almondBrazil.jpg"
                                    alt="About us" style="width:200px;height:200px">
                                <h4 class="ui centered header">Meat 1</h4>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="carousel-item">
                    <div class="ui three column doubling stackable grid container">
                        <div class="column">
                            <a href="new">
                                <img class="ui medium image centered radius_15" src="assets/images/almondBrazil.jpg"
                                    alt="About us" style="width:200px;height:200px">
                                <h4 class="ui centered header">Meat 1</h4>
                            </a>
                        </div>

                        <div class="column">
                            <a href="new">
                                <img class="ui medium image centered radius_15" src="assets/images/almondBrazil.jpg"
                                    alt="About us" style="width:200px;height:200px">
                                <h4 class="ui centered header">Meat 1</h4>
                            </a>
                        </div>
                        <div class="column">
                            <a href="new">
                                <img class="ui medium image centered radius_15" src="assets/images/almondBrazil.jpg"
                                    alt="About us" style="width:200px;height:200px">
                                <h4 class="ui centered header">Meat 1</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slideProducts" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slideProducts" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <!-- End of product listing one -->


        
<div class="ui pointing vertical menu">
  <a class="item">
    Site Title
  </a>
  <div class="item">
    <b>Grouped Section</b>
    <div class="menu">
      <a class="item">Subsection 1</a>
      <a class="active item">Subsection 1</a>
      <a class="item">Subsection 1</a>
    </div>
  </div>
  <div class="ui dropdown item">
    Dropdown <i class="dropdown icon"></i>
    <div class="menu">
      <div class="item">Choice 1</div>
      <div class="item">Choice 2</div>
      <div class="item">Choice 3</div>
    </div>
  </div>
</div>

    </div>
</div>


<style>
#menuleft {
  padding-top: 120px;
}

body {
	 font-family: 'Raleway', sans-serif;
}

.sidenav {
	width: 130px;
	position: fixed;
	z-index: 1;

	left: 10px;
	overflow-x: hidden;

}

.sidenav a {
	padding: 6px 8px 6px 16px;
	text-decoration: none;
	font-size: 25px;
	color: #2196F3;
	display: block;
}

.sidenav a:hover {
	color: #064579;
}

.main {
	margin-left: 140px;
	/* Same width as the sidebar + left position in px */
  padding: 0px 10px;
   height: 100%;
}

@media screen and (max-height: 450px) {
	.sidenav {
		padding-top: 15px;
	}

	.sidenav a {
		font-size: 18px;
	}
}
</style>
