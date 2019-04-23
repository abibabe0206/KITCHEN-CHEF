// Author Abiola
// 18/04/2019

// function for moving picture
var image1=new Image()
image1.src="assets/img/MP1.jpg"
	
var image2=new Image()
image2.src="assets/img/MP2.jpg"
	
var image3=new Image()
image3.src="assets/img/MP3.jpg"

var image4=new Image()
image4.src="assets/img/MP4.jpg"

var image5=new Image()
image5.src="assets/img/MP5.jpg"

var image6=new Image()
image6.src="assets/img/MP6.jpg"

var image7=new Image()
image7.src="assets/img/MP7.jpg"

var image8=new Image()
image8.src="assets/img/MP8.jpg"

var image9=new Image()
image9.src="assets/img/MP9.jpg"

var image10=new Image()
image10.src="assets/img/MP10.jpg"

var step=1
function slideit() {
	document.images.slide.src=eval("image"+step+".src")
	if (step<10)
		step++
		else
			step=1
			setTimeout("slideit()",2500)
}
slideit()





// Function for the Google map

// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 48.118, lng: -1.643};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}

