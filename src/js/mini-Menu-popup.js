//Wine Pop up
		document.getElementsByClassName("winelink")[0].click();

		function wineCity(evt, cityName) {
 			 var i, x, tablinks;
 			 x = document.getElementsByClassName("winecity");
  				for (i = 0; i < x.length; i++) {
  					  x[i].style.display = "none";
  				}
 			 tablinks = document.getElementsByClassName("winelink");
 				 for (i = 0; i < x.length; i++) {
				    tablinks[i].classList.remove("w3-light-grey");
				  }
			 document.getElementById(cityName).style.display = "block";
  			 evt.currentTarget.classList.add("w3-light-grey");
		}


		//Meat Pop up
		document.getElementsByClassName("meatlink")[0].click();

		function meatCity(evt, cityName) {
 			 var i, x, tablinks;
 			 x = document.getElementsByClassName("meatcity");
  				for (i = 0; i < x.length; i++) {
  					  x[i].style.display = "none";
  				}
 			 tablinks = document.getElementsByClassName("meatlink");
 				 for (i = 0; i < x.length; i++) {
				    tablinks[i].classList.remove("w3-light-grey");
				  }
			 document.getElementById(cityName).style.display = "block";
  			 evt.currentTarget.classList.add("w3-light-grey");
		}


	// Friut Popup
		document.getElementsByClassName("friutlink")[0].click();

		function friutCity(evt, cityName) {
 			 var i, x, tablinks;
 			 x = document.getElementsByClassName("friutcity");
  				for (i = 0; i < x.length; i++) {
  					  x[i].style.display = "none";
  				}
 			 tablinks = document.getElementsByClassName("friutlink");
 				 for (i = 0; i < x.length; i++) {
				    tablinks[i].classList.remove("w3-light-grey");
				  }
			 document.getElementById(cityName).style.display = "block";
  			 evt.currentTarget.classList.add("w3-light-grey");
		}


// Cake Pop up
	
		document.getElementsByClassName("cakelink")[0].click();

		function cakeCity(evt, cityName) {
 			 var i, x, tablinks;
 			 x = document.getElementsByClassName("cakecity");
  				for (i = 0; i < x.length; i++) {
  					  x[i].style.display = "none";
  				}
 			 tablinks = document.getElementsByClassName("cakelink");
 				 for (i = 0; i < x.length; i++) {
				    tablinks[i].classList.remove("w3-light-grey");
				  }
			 document.getElementById(cityName).style.display = "block";
  			 evt.currentTarget.classList.add("w3-light-grey");
		}

