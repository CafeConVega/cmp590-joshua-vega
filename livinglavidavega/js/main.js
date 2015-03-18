$(document).ready(function () {
    var churchMap = new GMaps({
        div: '#church_map',
        lat: 25.776188,
        lng: -80.140025
    });

    churchMap.addMarker({
        lat: 25.776188,
        lng: -80.140025,
        title: 'St. Francis De Sales Catholic Church',
        infoWindow: {
            content: '<p>St. Francis De Sales Catholic Church<br>600 Lenox Ave <br>Miami Beach, FL 33139</p>'
        }
    });

    var receptionMap = new GMaps({
        div: '#reception_map',
        lat: 25.762746,
        lng: -80.190484
    });

    receptionMap.addMarker({
        lat: 25.762746,
        lng: -80.190484,
        title: 'Sabadell Financial Center - Lobby',
        infoWindow: {
            content: '<p>Sabadell Financial Center - Lobby<br>1111 Brickell Ave<br>Miami, FL 33131</p>'
        }
    });
//$('.navigation').horizontalNav();
    
     var navigation = responsiveNav(".nav-collapse", {
        animate: true,                    // Boolean: Use CSS3 transitions, true or false
        transition: 284,                  // Integer: Speed of the transition, in milliseconds
        label: "Menu",                    // String: Label for the navigation toggle
        insert: "after",                  // String: Insert the toggle before or after the navigation
        customToggle: "",                 // Selector: Specify the ID of a custom toggle
        closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
        openPos: "relative",              // String: Position of the opened nav, relative or static
        navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
        navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
        jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
        init: function(){},               // Function: Init callback
        open: function(){},               // Function: Open callback
        close: function(){}               // Function: Close callback
      });

});