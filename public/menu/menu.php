<!-- 18/04/2019 -->
<!-- AUTHOR BY ONABANJI ABIOLA -->


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>
			Kitchen Chef
		</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/menu.css" />
		<link rel="shortcut icon" href="../assets/img/rlog.jpg" type="image/jpg" />
		<script type="text/javascript" src="../../src/js/jquery-3.3.1.min.js"></script>		
	</head>
	<body>
		<div class="container">
			<div class="menuBar">
				<ul>
          			<li><a href = "../index.php"><img src="../assets/img/rlog.jpg" alt="logo"/></a></li>
          			<li style="float:left"><a href="../index.php"><h2><b><em>KITCHEN CHEF</em></b></h2></a></li>
          			<li style="float:right"><a href="../contactUs/contactUs.php"><h4><b><em>Contact Us</em></b></h4></a></li>
          			<li style="float:right"><a href="#"><h4><b><em>Menu</em></b></h4></a></li>
          			<li style="float:right"><a href="../about/about.php"><h4><b><em>About</em></b></h4></a></li>
        		</ul>
     		</div>
			<div class="body">
				
				<div id="modal01" class="modal" onclick="this.style.display='none'">
  					<span "style="float: left"" class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
 					 <div class="modal-content">
  						  <img id="img01" style="max-width:100%">
 					 </div>
				</div>					
					<img alt="pic" src="../assets/img/foodmenu.png"  class="food" onclick="onClick(this)"/>
				
				<p>BLA BLA BLA</p>
				<p>BLA BLA BLA</p>
				<p>BLA BLA BLA</p>
				
				
					<img alt="pic" src="../assets/img/soupmenu.PNG"  class="soup" onclick="onClick(this)" />
				
				<p>BLA BLA BLA</p>
				<p>BLA BLA BLA</p>
				<p>BLA BLA BLA</p>
				
				
				<img alt="pic" src="../assets/img/destmenu.jpg"  class="dest" onclick="onClick(this)"/>
				
				<p>BLA BLA BLA</p>
				<p>BLA BLA BLA</p>
				<p>BLA BLA BLA</p>
				
				
					<img alt="pic" src="../assets/img/drinkmenu.jpg"  class="drinks" onclick="onClick(this)"/>
				
				<p>BLA BLA BLA</p>
				<p>BLA BLA BLA</p>
				<p>BLA BLA BLA</p>
				
				
				
			</div>
			
		</div>
		<script type="text/javascript">
			function onClick(element) {
			  document.getElementById("img01").src = element.src;
			  document.getElementById("modal01").style.display = "block";
			}

		</script>
		
	</body>
</html>
