$(document).ready(function() {
   var churchMap =  new GMaps({
  div: '#church_map',
 lat: 25.776188,
    lng: -80.140025
});
    
    churchMap.addMarker({
  lat: 25.776188,
    lng: -80.140025,
  title: 'St. Francis De Sales Catholic Church',
        infoWindow: {
  content: '<p>St. Francis De Sales Catholic Church</p>'
}
});
    
});
