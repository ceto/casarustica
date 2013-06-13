/* Author: Gábor Szabó

*/

var helyszin_map;
function initialize() {
  var mapOptions = {
    zoom: 9,
    center: new google.maps.LatLng(46.51682324644097, 17.510147094726562),
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

$('#alap').each(function() { // the containers for all your galleries shoudl ahve the class gallery
    $(this).magnificPopup({
        delegate: 'a', // the container for each your gallery items
        type: 'image',
        gallery:{enabled:true},
       
    });
});  

$('.ajax-popup-link').magnificPopup({
  type: 'ajax',
  callbacks: {
      parseAjax: function(jqXHR) {
        console.log('Loading of ajax content finished. Object:', jqXHR);
        // You can modify value of jqXHR.responseText here. It's used as a content for popup.
        
        // For example, to show just #some-element:
        jqXHR.responseText = $(jqXHR.responseText).find('.ujbonyi').removeClass('aspan6 aoffset3').css({'padding-bottom':'4em','background':'white'});
      }
  }
});

$(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".video").fitVids();
    
    $('.ujbonyi').collapse({
      toggle: true
    })

    $('.kivagyunk').append('<a class="klikkelo"><i class=" icon-info"></i> Hogyan működik</a>');

    $('.kivagyunk .klikkelo').click(function() {
      $('.ujbonyi').collapse('toggle');
    })

    $('a[href="#ujbonyi"]').click(function() {
      $('.ujbonyi').collapse('show');
    })


    $('#mc_signup_submit').addClass('btn btn-warning');
    $('.mc_input').attr('placeholder','E-mail');

    $('.mc_input').attr('placeholder',function() {
      //return $('label[for="mc_mv_EMAIL"]').text();
      return $('label[for="'+$(this).attr('id')+'"]').text();
      //return 'geco';
    });

});


$('.carousel').carousel({
  interval: 4000
})


var $root = $('html, body');
$('a').click(function() {
    $root.animate({
        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
    }, 500);
    return false;
});



