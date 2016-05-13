/* Author: Gábor Szabó

*/

var local_map;
var helyszin_map;
function initialize() {

 var placem = new google.maps.LatLng(46.51682324644097, 17.510147094726562);
   var mapOptions = {
     zoom: 9,
     center: placem,
     mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  helyszin_map = new google.maps.Map(document.getElementById('helyszin_map'), mapOptions);

  var image = new google.maps.MarkerImage('http://casarustica.hu/wp-content/themes/casarustica/assets/images/zaszlo.png',
          new google.maps.Size(73, 69), new google.maps.Point(0,0), new google.maps.Point(20, 65));

  var shadow = new google.maps.MarkerImage('http://casarustica.hu/wp-content/themes/casarustica/assets/images/zaszlo_arnyek.png',
          new google.maps.Size(73, 69), new google.maps.Point(0,0), new google.maps.Point(20, 65));

         var markerm = new google.maps.Marker({
           position: placem,
           map: helyszin_map,
           title:"Casa Rustica",
           icon:image,
           shadow:shadow
         });





}




//google.maps.event.addDomListener(window, 'load', initialize);



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

    $('.kiskep-carousel').owlCarousel({
        items : 5,
        itemsDesktop      : [1440,4],
        itemsDesktopSmall     : [1024,3],
        itemsTablet       : [768,3],
        itemsMobile       : [480,2],
        navigation : false,
        // navigationText: ['<i class="icon icon--chevron-circle-left"></i>','<i class="icon icon--chevron-circle-right"></i>'],
        pagination: false,
        paginationSpeed : 400,
    });

    $('.gallery').magnificPopup({
      delegate: 'a.thumbnail', // the container for each your gallery items
      type: 'image',
      gallery:{enabled:true}
    });

    $(".video").fitVids();

    $('.ujbonyi').collapse({
      toggle: true
    })

    //$('.kivagyunk').append('<a class="klikkelo">A lebonyolítás részletei <i class=" icon-plus"></i></a>');

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
        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top-40
    }, 500);
    return false;
});



