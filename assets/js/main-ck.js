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

*/function initialize(){var e=new google.maps.LatLng(46.51682324644097,17.510147094726562),t={zoom:9,center:e,mapTypeId:google.maps.MapTypeId.ROADMAP};helyszin_map=new google.maps.Map(document.getElementById("helyszin_map"),t);var n=new google.maps.MarkerImage("http://casarustica.hu/wp-content/themes/casarustica/assets/images/zaszlo.png",new google.maps.Size(73,69),new google.maps.Point(0,0),new google.maps.Point(20,65)),r=new google.maps.MarkerImage("http://casarustica.hu/wp-content/themes/casarustica/assets/images/zaszlo_arnyek.png",new google.maps.Size(73,69),new google.maps.Point(0,0),new google.maps.Point(20,65)),i=new google.maps.Marker({position:e,map:helyszin_map,title:"Casa Rustica",icon:n,shadow:r})}var local_map,helyszin_map;google.maps.event.addDomListener(window,"load",initialize);$(".ngg-galleryoverview").each(function(){$(this).magnificPopup({delegate:"a",type:"image",gallery:{enabled:!0}})});$(".ngg-widget").each(function(){$(this).magnificPopup({delegate:"a",type:"image",gallery:{enabled:!0}})});$("#alap").each(function(){$(this).magnificPopup({delegate:"a",type:"image",gallery:{enabled:!0}})});$(".ajax-popup-link").magnificPopup({type:"ajax",callbacks:{parseAjax:function(e){console.log("Loading of ajax content finished. Object:",e);e.responseText=$(e.responseText).find(".ujbonyi").removeClass("aspan6 aoffset3").css({"padding-bottom":"4em",background:"white"})}}});$(document).ready(function(){$(".video").fitVids();$(".ujbonyi").collapse({toggle:!0});$(".kivagyunk .klikkelo").click(function(){$(".ujbonyi").collapse("toggle")});$('a[href="#ujbonyi"]').click(function(){$(".ujbonyi").collapse("show")});$("#mc_signup_submit").addClass("btn btn-warning");$(".mc_input").attr("placeholder","E-mail");$(".mc_input").attr("placeholder",function(){return $('label[for="'+$(this).attr("id")+'"]').text()})});$(".carousel").carousel({interval:4e3});var $root=$("html, body");$("a").click(function(){$root.animate({scrollTop:$('[name="'+$.attr(this,"href").substr(1)+'"]').offset().top-40},500);return!1});