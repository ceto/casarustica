
        // var map;
        // function initialize() {
        //   var latlng = new google.maps.LatLng(47.99826640666682, 21.87454640865326);
        // var centerlatlng = new google.maps.LatLng(47.99826640666682, 21.87454640865326);
        // var myOptions = {
        //   zoom: 10,
        //   center: centerlatlng,
        //   disableDefaultUI: true,
        //   mapTypeId: google.maps.MapTypeId.ROADMAP,
        // styles:[
        //   {
        //   stylers: [
        //     { hue: "#ff9900" },
        //     { saturation: -57 }
        //   ]
        //   },{
        //   featureType: "road.arterial",
        //   stylers: [
        //     { saturation: -68 }
        //   ]
        //   }
        // ]
        // };
        // var map = new google.maps.Map(document.getElementById('map_canvas'),  myOptions);
        
        // var image = new google.maps.MarkerImage('http://carnifex.hu/wp-content/themes/carnifex/images/flag.png',
        // new google.maps.Size(140, 79), new google.maps.Point(0,0), new google.maps.Point(70, 69));
        // var shadow = new google.maps.MarkerImage('http://carnifex.hu/wp-content/themes/carnifex/images/flag_shadow.png',
        // new google.maps.Size(140, 79), new google.maps.Point(0,0), new google.maps.Point(70, 69));
        
        // var marker = new google.maps.Marker({
        //   position: latlng, 
        //   map: map, 
        //   title:"Carnifex Kft.",
        //   icon:image,
        //   shadow:shadow 
        // });
        //  }

        //  google.maps.event.addDomListener(window, 'load', initialize);



/* Author: Gábor Szabó

*/

var local_map;
var helyszin_map;
function initialize() {
  // var place = new google.maps.LatLng(north, south);
  // var mapLocalOptions = {
  //   zoom: 9,
  //   center:  place,
  //   mapTypeId: google.maps.MapTypeId.ROADMAP
  // };
  // local_map = new google.maps.Map(document.getElementById('local_map'), mapLocalOptions);

  // var image = new google.maps.MarkerImage('http://ceto.no-ip.org/casarustica/wp-content/themes/casarustica/assets/images/zaszlo.png',
  //         new google.maps.Size(73, 69), new google.maps.Point(0,0), new google.maps.Point(20, 65));
  
  // var shadow = new google.maps.MarkerImage('http://ceto.no-ip.org/casarustica/wp-content/themes/casarustica/assets/images/zaszlo_arnyek.png',
  //         new google.maps.Size(73, 69), new google.maps.Point(0,0), new google.maps.Point(20, 65));
        
  //        var marker = new google.maps.Marker({
  //          position: place, 
  //          map: local_map, 
  //          title:"Casa Rustica",
  //          icon:image,
  //          shadow:shadow 
  //        });





 var placem = new google.maps.LatLng(46.51682324644097, 17.510147094726562);
   var mapOptions = {
     zoom: 9,
     center: placem,
     mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  helyszin_map = new google.maps.Map(document.getElementById('helyszin_map'), mapOptions);

  var image = new google.maps.MarkerImage('http://ceto.no-ip.org/casarustica/wp-content/themes/casarustica/assets/images/zaszlo.png',
          new google.maps.Size(73, 69), new google.maps.Point(0,0), new google.maps.Point(20, 65));
  
  var shadow = new google.maps.MarkerImage('http://ceto.no-ip.org/casarustica/wp-content/themes/casarustica/assets/images/zaszlo_arnyek.png',
          new google.maps.Size(73, 69), new google.maps.Point(0,0), new google.maps.Point(20, 65));
        
         var markerm = new google.maps.Marker({
           position: placem, 
           map: helyszin_map, 
           title:"Casa Rustica",
           icon:image,
           shadow:shadow 
         });





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

    $('.kivagyunk').append('<a class="klikkelo">A lebonyolítás részletei <i class=" icon-plus"></i></a>');

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



