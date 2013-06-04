/* Author: Gábor Szabó

*/

var helyszin_map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(-34.397, 150.644),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  helszin_map = new google.maps.Map(document.getElementById('helyszin_map'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);



$('.ngg-galleryoverview').each(function() { // the containers for all your galleries shoudl ahve the class gallery
    $(this).magnificPopup({
        delegate: 'a', // the container for each your gallery items
        type: 'image',
        gallery:{enabled:true}
    });
}); 


$('.ngg-widget').each(function() { // the containers for all your galleries shoudl ahve the class gallery
    $(this).magnificPopup({
        delegate: 'a', // the container for each your gallery items
        type: 'image',
        gallery:{enabled:true}
    });
}); 

$('.ajax-popup-link').magnificPopup({
  type: 'ajax',
  callbacks: {
      parseAjax: function(jqXHR) {
        console.log('Loading of ajax content finished. Object:', jqXHR);
        // You can modify value of jqXHR.responseText here. It's used as a content for popup.
        
        // For example, to show just #some-element:
        jqXHR.responseText = $(jqXHR.responseText).find('.main').removeClass('span6 offset3').css({'padding':'1em 2em','background':'white'});
      }
  }
});

$(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".video").fitVids();
});


$('.carousel').carousel({
  interval: 4000
})