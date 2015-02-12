
 <div id="map_canvas" style="width:100%; height:400px"></div>


	
	<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>
var map;
//var src = 'https://developers.google.com/maps/tutorials/kml/westcampus.kml';
//var src = 'http://pages.towson.edu/mmcguire/csn4se/sites.kml';
var src = 'http://yuting.a2hosted.com/KMLPHOTO.kml';

/**
 * Initializes the map and calls the function that creates polylines.
 */
function initialize() {
  map = new google.maps.Map(document.getElementById('map_canvas'), {
    center: new google.maps.LatLng(-19.257753, 146.823688),
    zoom: 2,
    mapTypeId: google.maps.MapTypeId.TERRAIN
  });
 // loadKmlLayer(src, map);
}

/**
 * Adds a KMLLayer based on the URL passed. Clicking on a marker
 * results in the balloon content being loaded into the right-hand div.
 * @param {string} src A URL for a KML file.
 */
/* function loadKmlLayer(src, map) {

  var kmlLayer = new google.maps.KmlLayer(src, {
    suppressInfoWindows: true,
    preserveViewport: false,
    map: map
	
  });
  google.maps.event.addListener(kmlLayer, 'click', function(event)
  {
    var content = event.featureData.infoWindowHtml;
    var testimonial = document.getElementById('capture');
    testimonial.innerHTML = content;

  });

}
*/
google.maps.event.addDomListener(window, 'load', initialize); 

</script>
	
	
	
