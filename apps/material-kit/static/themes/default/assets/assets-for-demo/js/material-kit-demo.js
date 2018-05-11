/*! =========================================================
 *
 * Material Kit PRO Plugins Initialisation Examples - v2.0.2
 *
 * =========================================================
 *
 * Product Page: https://www.creative-tim.com/product/material-kit-pro
 * Available with purchase of license from http://www.creative-tim.com/product/material-kit-pro
 * Copyright 2017 Creative Tim (https://www.creative-tim.com)
 * License Creative Tim (https://www.creative-tim.com/license)
 *
 * ========================================================= */

 materialKitDemo = {

     initContactUsMap: function(){
         var myLatlng = new google.maps.LatLng(44.433530, 26.093928);
         var mapOptions = {
           zoom: 14,
           center: myLatlng,
           styles:
 [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}],
           scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
        };
         var map = new google.maps.Map(document.getElementById("contactUsMap"), mapOptions);

         var marker = new google.maps.Marker({
             position: myLatlng,
             title:"Hello World!"
         });
         marker.setMap(map);
     },

     initContactUs2Map: function(){
         var lat = 44.433530;
         var long = 26.093928;

         var centerLong = long - 0.025;

         var myLatlng = new google.maps.LatLng(lat,long);
         var centerPosition = new google.maps.LatLng(lat, centerLong);

         var mapOptions = {
           zoom: 14,
           center: centerPosition,
           styles:
 [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}],
           scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
        };
         var map = new google.maps.Map(document.getElementById("contactUs2Map"), mapOptions);

         var marker = new google.maps.Marker({
             position: myLatlng,
             title:"Hello World!"
         });
         marker.setMap(map);
     },

     presentationAnimations: function(){
         $(function() {

           var $window           = $(window),
               isTouch           = Modernizr.touch;

           if (isTouch) { $('.add-animation').addClass('animated'); }

           $window.on('scroll', revealAnimation);

           function revealAnimation() {
             // Showed...
             $(".add-animation:not(.animated)").each(function () {
               var $this     = $(this),
                   offsetTop = $this.offset().top,
                   scrolled = $window.scrollTop(),
                   win_height_padded = $window.height();
               if (scrolled + win_height_padded > offsetTop) {
                   $this.addClass('animated');
               }
             });
             // Hidden...
            $(".add-animation.animated").each(function (index) {
               var $this     = $(this),
                   offsetTop = $this.offset().top;
                   scrolled = $window.scrollTop(),
                   windowHeight = $window.height();

                   win_height_padded = windowHeight * 0.8;
               if (scrolled + win_height_padded < offsetTop) {
                 $(this).removeClass('animated')
               }
             });
           }

           revealAnimation();
         });

     }
};
