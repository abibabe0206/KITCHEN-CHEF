<!-- 18/04/2019 -->
<!-- AUTHOR BY ONABANJI ABIOLA -->



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>
			Kitchen Chef
		</title>
		<?php include ('Cus.php');?>
		<link rel="stylesheet" type="text/css" href="../assets/css/contactUs.css" />
		<link rel="shortcut icon" href="../assets/img/rlog.jpg" type="image/jpg" />
		<script type="text/javascript" src="../../src/js/jquery-3.3.1.min.js"></script>		
	</head>
	<body>
		<div class="container">
			<div class="menuBar">
				<ul>
          			<li><a href = "../index.php"><img src="../assets/img/rlog.jpg" alt="logo"/></a></li>
          			<li style="float:left"><a href="../index.php"><h2><b><em>KITCHEN CHEF</em></b></h2></a></li>
          			<li style="float:right"><a href="#"><h4><b><em>Contact Us</em></b></h4></a></li>
          			<li style="float:right"><a href="../menu/menu.php"><h4><b><em>Menu</em></b></h4></a></li>
          			<li style="float:right"><a href="../about/about.php"><h4><b><em>About</em></b></h4></a></li>
        		</ul>
     		</div>
			<div class="body">
				<table class="tdr">
					<tr>
						<td >
							<table>
								<tr>
									<td> <h3> Phone Number: </h3> <p> +33 (0)2-99-57-63-17 </p> </td>
								</tr>
								<tr>
									<td> <h3> Email: </h3> <p> project@gmail.com </p> </td>
								</tr>
								<tr>
									<td> <h3> Address: </h3> <p>  4 rue du Coteau,<br> 35230 ORGERES </p> </td>
								</tr>
							</table>
							<div id="map">
							 	<script async defer
   									 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmoWqw9M1zN63leL-tLN4rMYLxkras5OY&callback=initMap">
   								 </script>
   								<script type="text/javascript" src="../../src/js/app.js"></script>
							</div>
						</td>
						<td>
							<div class="cu">
								<form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
									<h3> Contactez nous </h3>
									
										<label class="rq" for="nom"><b>Nom: </b></label>
  										<input type="text" placeholder="Votre Nom" id="nom" name="nom" value="<?= $nom ?>"><br>
  										<span class="error"> <?= $nom_error ?></span><br>
  										
  										<label class="rq" for="prenom"><b>Prenom: </b></label>
  										<input type="text" placeholder="Votre Prenom" id="pnom" name="pnom" value="<?= $pnom ?>"><br>
  										<span class="error"> <?= $pnom_error ?></span><br>
  										
  										<label class="rq" for="phoneNumber"><b> Num&eacute;ro: </b></label>
  										<input type="tel" placeholder="Votre Num&eacute;ro" id="phn" name="phn" value="<?= $phn ?>"><br>
  										<span class="error"> <?= $phn_error ?></span><br>
  										
  										<label class="rq" for="email"><b> Email: </b></label>
  										<input type="email" placeholder="Votre Email" id="em" name="em" value="<?= $em ?>"><br>
  										<span class="error"> <?= $em_error ?></span><br>
  										
  										<label class="rq" for="message"><b> Message: </b></label>
  										<textarea type="text" placeholder="Votre Message......."  id="message" name="message" value="<?= $message?>"></textarea><br>
  										
  										<div class="success"><?= $success; ?></div>
  										<div id="lower">
  											<input type="submit" value=" Submit"><br>
  										</div>
  										
								</form>
								
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
	</body>
</html>
