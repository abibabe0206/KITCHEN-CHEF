<!-- 18/04/2019 -->
<!-- Author Abiola ONABANJI -->


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>
			Kitchen Chef
		</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/w3.css" />
		<link rel="shortcut icon" href="assets/img/rlog.jpg" type="image/jpg" />
		<link rel="stylesheet" type="text/css" href="assets/css/popupTest.css" />
		<script type="text/javascript" src="../src/js/jquery-3.3.1.min.js"></script>		
	</head>
	<body>
		
		<div class="container">
			<div class="menuBar">
				<ul>
          			<li><a href = "#"><img src="assets/img/rlog.jpg" alt="logo"/></a></li>
          			<li style="float:left"><a href="#"><h2><b><em>KITCHEN CHEF</em></b></h2></a></li>
          			<li style="float:right"><a href="contactUs/contactUs.php"><h4><b><em>Contact Us</em></b></h4></a></li>
          			<li style="float:right"><a href="menu/menu.php"><h4><b><em>Menu</em></b></h4></a></li>
          			<li style="float:right"><a href="about/about.php"><h4><b><em>About</em></b></h4></a></li>
        		</ul>
     		</div>
     		
			<div class="body">
				<table >
					<tr >
						<td >
							<div>
								<img alt="pic" src="assets/img/MP1.jpg"  class="movingPics" name="slide"/>
							</div>
							
						</td>
						
						<td class="tdr">
							<div>
								<h1 style="color: blue;"><b><i>Satisfy your cravings</i></b> </h1>
								<p><em>Experience a world of food, with your favorite restaurants at your fingertips.</em></p>
								<p><em><strong style="color: blue;">click</strong> on our food images below to see our different dish and wines, for any time and occasion.</em> </p>
							</div>
							<div class="foodBar">
								<ul>
          							<li><button onclick="document.getElementById('id01').style.display='block'" ><img alt="pic" src="assets/img/wineglass.jpg"  class="drink"/></button></li>
          							
          								<div id="id01" class="w3-modal">
 											<div class="w3-modal-content w3-card-4 w3-animate-zoom">
  												<header class="w3-container w3-blue"> 
   													<span onclick="document.getElementById('id01').style.display='none'" 
   														class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
  													 <h2>Wines</h2>
 												 </header>

 												 <div class="w3-bar w3-border-bottom">
  													 <button class="winelink w3-bar-item w3-button" onclick="wineCity(event, 'WhiteWines')">White Wines</button>
  													 <button class="winelink w3-bar-item w3-button" onclick="wineCity(event, 'Champagne')">Champagne</button>
  													 <button class="winelink w3-bar-item w3-button" onclick="wineCity(event, 'RedWines')">Red Wines</button>
 												 </div>

  												 <div id="WhiteWines" class="w3-container winecity">
   													 <h1>White Wines</h1>
  													 <img alt="pic" src="assets/img/wine.jpg"  class="drink"/>
  													 <p><i>White Wines is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</i></p>
  													 <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</i></p>
  												 </div>

 												 <div id="Champagne" class="w3-container winecity">
  													 <h1>Champagne</h1>
  													 <img alt="pic" src="assets/img/capwine.jpg"  class="drink"/>
  													 <p><i>Champagne is the capital of France.</i></p>
  													 <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</i></p>
 												 </div>

 												 <div id="RedWines" class="w3-container winecity">
												     <h1>Red Wines</h1>
												     <img alt="pic" src="assets/img/redwine.jpg"  class="drink"/>
   													 <p><i>Red Wines is the capital of Japan.</i></p><br>
 												 </div>

 												 <div class="w3-container w3-light-grey w3-padding">
 													  <button class="w3-button w3-right w3-white w3-border" 
 															  onclick="document.getElementById('id01').style.display='none'">Close</button>
 												 </div>
 											</div>
										</div>
          							
          							
          							<li><button onclick="document.getElementById('id02').style.display='block'" ><img alt="pic" src="assets/img/meat.jpg"  class="meat"/></button></li>
          							
          								<div id="id02" class="w3-modal">
 											<div class="w3-modal-content w3-card-4 w3-animate-zoom">
  												<header class="w3-container w3-blue"> 
   													<span onclick="document.getElementById('id02').style.display='none'" 
   														class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
  													 <h2>Meats</h2>
 												 </header>

 												 <div class="w3-bar w3-border-bottom">
  													 <button class="meatlink w3-bar-item w3-button" onclick="meatCity(event, 'GrilledSteack')">Grilled Steack</button>
  													 <button class="meatlink w3-bar-item w3-button" onclick="meatCity(event, 'GingerSauceMeat')">Ginger Sauce Meat</button>
  													 <button class="meatlink w3-bar-item w3-button" onclick="meatCity(event, 'FriedMeat')">Fried Meat</button>
 												 </div>

  												 <div id="GrilledSteack" class="w3-container meatcity">
   													 <h1>Grilled Steack</h1>
  													 <img alt="pic" src="assets/img/meat3.jpg"  class="drink"/>
  													 <p><i>Grilled Steack is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</i></p>
  													 <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</i></p>
  												 </div>

 												 <div id="GingerSauceMeat" class="w3-container meatcity">
  													 <h1>Ginger Sauce Meat</h1>
  													 <img alt="pic" src="assets/img/meat2.jpg"  class="drink"/>
  													 <p><i>Ginger Sauce Meat is the capital of France.</i></p>
  													 <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</i></p>
 												 </div>

 												 <div id="FriedMeat" class="w3-container meatcity">
												     <h1>Fried Meat</h1>
												     <img alt="pic" src="assets/img/meat1.jpg"  class="drink"/>
   													 <p><i>Fried Meat is the capital of Japan.</i></p><br>
 												 </div>

 												 <div class="w3-container w3-light-grey w3-padding">
 													  <button class="w3-button w3-right w3-white w3-border" 
 															  onclick="document.getElementById('id02').style.display='none'">Close</button>
 												 </div>
 											</div>
										</div>
          							
          							
          							<li><button onclick="document.getElementById('id03').style.display='block'" ><img alt="pic" src="assets/img/friut.jpg"  class="mixfriut"/></button></li>
          								
          								<div id="id03" class="w3-modal">
 											<div class="w3-modal-content w3-card-4 w3-animate-zoom">
  												<header class="w3-container w3-blue"> 
   													<span onclick="document.getElementById('id03').style.display='none'" 
   														class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
  													 <h2>Wines</h2>
 												 </header>

 												 <div class="w3-bar w3-border-bottom">
  													 <button class="friutlink w3-bar-item w3-button" onclick="friutCity(event, 'MixFruits')">Mix Fruits</button>
  													 <button class="friutlink w3-bar-item w3-button" onclick="friutCity(event, 'FruitDesign')">Fruit Design</button>
  													 <button class="friutlink w3-bar-item w3-button" onclick="friutCity(event, 'Others')">Others</button>
 												 </div>

  												 <div id="MixFruits" class="w3-container friutcity">
   													 <h1>Mix Fruits</h1>
  													 <img alt="pic" src="assets/img/f1.jpg"  class="drink"/>
  													 <p><i>Mix Fruits is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</i></p>
  													 <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</i></p>
  												 </div>

 												 <div id="FruitDesign" class="w3-container friutcity">
  													 <h1>Fruit Design</h1>
  													 <img alt="pic" src="assets/img/f2.jpg"  class="drink"/>
  													 <p><i>Fruit Design is the capital of France.</i></p>
  													 <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</i></p>
 												 </div>

 												 <div id="Others" class="w3-container friutcity">
												     <h1>Others</h1>
												     <img alt="pic" src="assets/img/f3.jpg"  class="drink"/>
   													 <p><i>Others is the capital of Japan.</i></p><br>
 												 </div>

 												 <div class="w3-container w3-light-grey w3-padding">
 													  <button class="w3-button w3-right w3-white w3-border" 
 															  onclick="document.getElementById('id03').style.display='none'">Close</button>
 												 </div>
 											</div>
										</div>
          							
          							
          							
          							<li><button onclick="document.getElementById('id04').style.display='block'" ><img alt="pic" src="assets/img/cake.jpg"  class="cake"/></button></li>
        						
        							<div id="id04" class="w3-modal">
 											<div class="w3-modal-content w3-card-4 w3-animate-zoom">
  												<header class="w3-container w3-blue"> 
   													<span onclick="document.getElementById('id04').style.display='none'" 
   														class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
  													 <h2>Wines</h2>
 												 </header>

 												 <div class="w3-bar w3-border-bottom">
  													 <button class="cakelink w3-bar-item w3-button" onclick="cakeCity(event, 'BirthdayCakes')">Birthday Cakes</button>
  													 <button class="cakelink w3-bar-item w3-button" onclick="cakeCity(event, 'AnniversaryCakes')">Anniversary Cakes</button>
  													 <button class="cakelink w3-bar-item w3-button" onclick="cakeCity(event, 'FruitCakes')">Fruit Cakes</button>
 												 </div>

  												 <div id="BirthdayCakes" class="w3-container cakecity">
   													 <h1>Birthday Cakes</h1>
  													 <img alt="pic" src="assets/img/brithdaycake.jpg"  class="drink"/>
  													 <p><i>Birthday Cakes is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</i></p>
  													 <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</i></p>
  												 </div>

 												 <div id="AnniversaryCakes" class="w3-container cakecity">
  													 <h1>Anniversary Cakes</h1>
  													 <img alt="pic" src="assets/img/anivcake.jpg"  class="drink"/>
  													 <p><i>Anniversary Cakes is the capital of France.</i></p>
  													 <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</i></p>
 												 </div>

 												 <div id="FruitCakes" class="w3-container cakecity">
												     <h1>Fruit Cakes</h1>
												     <img alt="pic" src="assets/img/friutcake.jpg"  class="drink"/>
   													 <p><i>Fruit Cakes is the capital of Japan.</i></p><br>
 												 </div>

 												 <div class="w3-container w3-light-grey w3-padding">
 													  <button class="w3-button w3-right w3-white w3-border" 
 															  onclick="document.getElementById('id04').style.display='none'">Close</button>
 												 </div>
 											</div>
										</div>
        						
        						
        						</ul>
							</div>
							
						</td>
					
					</tr>
				</table>
				<div class="tffr">
					<h1 style="color: #8000ff;"><b><i>Anywhere you are</i></b> </h1>
						<p><em>A family picnic in the park. Your date night at home.That late-night study session.
							Spend more time doing the things that matter to you most, we will take care of the rest.
							<strong style="color: blue;">contact us today</strong> and experience a nice time.</em></p>
				</div>
				<div id="boxes">
 					<div id="dialog" class="window">
 						<div><img src="assets/img/rlog.jpg" alt="logo" class="logo"/></div>
 						<div>
							<table >
								<tr >
									<td class="tf">
										<div class="ffr">
											<h1 style="color: #8000ff;"><b><i>O&ugrave; que vous soyez</i></b> </h1>
											<p><em>Nous <strong style="color: blue;">d&eacute;nichons</strong>
												aupr&egrave;s des commerces de bouche des produits <strong style="color: blue;">responsables</strong> et en 
												<strong style="color: blue;">circuit court.</strong> En une seule livraison, tous vos commerces dans le m&ecirc;me panier !
											</em></p>
										</div>
										<div><p><em>Le <strong style="color: blue;">m&ecirc;me prix</strong> qu&#39;en boutique ! Nous vous livrons <strong style="color: blue;">7j/7</strong> de <strong style="color: blue;">9h &agrave; 22h</strong>* :</em></p></div>
										<div class="bike">
											<ul>
												<li>
													<img alt="pic" src="assets/img/devi.PNG"  class="devi" hspace="30"/>
													<span><p><em>libert&eacute; <br>3,50&euro;</em></p></span>
												</li>
									
												<li>
													<img alt="pic" src="assets/img/devi.PNG"  class="devi" hspace="30" />
													<span><p><em>jour m&ecirc;me <br>4,50&euro;</em></p></span>
												</li>
												<li>
													<img alt="pic" src="assets/img/devi.PNG"  class="devi" hspace="30"/>
													<span><p><em>expr&egrave;s <br>7,50&euro;</em></p></span>
												</li>
											</ul>
								
										</div>
										<div class="fb">
											<ul>
												<li>
													<img alt="pic" src="assets/img/wineglass.jpg"  class="devi" hspace="20" />
													<span><p><em>vin</em></p></span>										
												</li>
												<li>
													<img alt="pic" src="assets/img/meat.jpg"  class="devi" hspace="20" />
													<span><p><em>viande</em></p></span>										
												</li>
												<li>
													<img alt="pic" src="assets/img/friut.jpg"  class="devi" hspace="20" />
													<span><p><em>friuts</em></p></span>										
												</li>
												<li>
													<img alt="pic" src="assets/img/cake.jpg"  class="devi" hspace="20" />
													<span><p><em>g&acirc;teau</em></p></span>										
												</li>
												<li>
													<img alt="pic" src="assets/img/formage.PNG"  class="devi" hspace="20" />
													<span><p><em>formage</em></p></span>										
												</li>
										</ul>
									</div>
									<div >
										<p><em>Nous travaillons activement pour compl&eacute;ter notre offre sur Rennes :</em></p>
										<p><em><a href="#" style="color: blue">Nous conseiller un commerce ou partager votre avis ? [Par ici]</a></em></p>
									</div>
							
								</td>
						
								<td>
									<div>
										<h1 style="color: blue;"><b><i>Satisfaire vos envies de fumer</i></b> </h1>
										<p><em><b>Vivez l&#39;exp&eacute;rience d&#39;un monde de nourriture, avec vos restaurants pr&eacute;f&eacute;r&eacute;s &agrave; port&eacute;e de main.</b></em></p>
										<p><em><b><strong style="color: blue;">aller &agrave;</strong> notre site pour voir nos diff&eacute;rents plats et vins, pour toute heure et occasion.</b></em> </p>
									</div>
								<div >
								
								</div>
							
							  </td>
					
						</tr>
					</table>
							
					</div>
 		  		
 				</div>
 					<div id="mask"></div>
				</div>
			</div>
			
		</div>
		<script type="text/javascript" src="../src/js/app.js"></script>
		<script type="text/javascript" src="../src/js/mini-Menu-popup.js"></script>
		<script type="text/javascript" src="../src/js/onLoadPopup.js"></script>
		<script type="text/javascript" src="../src/js/jquery.js"></script>

	</body>
</html>