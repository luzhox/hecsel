<?php 

$location =  get_sub_field('location');

if( !empty($location) ):
?>
<section data-aos="fade-up" data-aos-offset="100"  id="map" class="hero-map" data-x="<?php  echo $location['lat']; ?>" data-y="<?php  echo $location['lng']; ?>">
    
</section>
<?php endif; ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2opgncJgWQkvibe4bVFb0AWAI2I7MSXw">
</script>
<script>

    var map;

  var longitud = document.getElementById('map').getAttribute('data-x')
  var latitud = document.getElementById('map').getAttribute('data-y')

  var image = new google.maps.MarkerImage("data:image/svg+xml,%3Csvg width='47' height='77' viewBox='0 0 47 77' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M38.5244 51.3478C43.2548 47.1151 46.2319 40.9632 46.2319 34.1159C46.2319 21.3494 35.8825 11 23.1159 11C10.3494 11 0 21.3494 0 34.1159C0 40.9632 2.97711 47.1151 7.70753 51.3478H7.56522L23.1159 69L38.6667 51.3478H38.5244Z' fill='%23F54C41'/%3E%3Ccircle cx='23.5359' cy='32.855' r='7.56522' fill='white'/%3E%3C/svg%3E%0A", new google.maps.Size(47, 77));
  var marker;
      var map;
      var marker;
      var image = new google.maps.MarkerImage("data:image/svg+xml,%3Csvg width='47' height='77' viewBox='0 0 47 77' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M38.5244 51.3478C43.2548 47.1151 46.2319 40.9632 46.2319 34.1159C46.2319 21.3494 35.8825 11 23.1159 11C10.3494 11 0 21.3494 0 34.1159C0 40.9632 2.97711 47.1151 7.70753 51.3478H7.56522L23.1159 69L38.6667 51.3478H38.5244Z' fill='%23F54C41'/%3E%3Ccircle cx='23.5359' cy='32.855' r='7.56522' fill='white'/%3E%3C/svg%3E%0A", new google.maps.Size(47, 77));
      var mapOptions = {
          center: new google.maps.LatLng(longitud, latitud),
          zoom: 17,    
          mapTypeId: google.maps.MapTypeId.ROADMAP,
           styles:[
   {
     "elementType": "geometry",
     "stylers": [
       {
         "color": "#f5f5f5"
       }
     ]
   },
   {
     "elementType": "labels.icon",
     "stylers": [
       {
         "visibility": "off"
       }
     ]
   },
   {
     "elementType": "labels.text.fill",
     "stylers": [
       {
         "color": "#616161"
       }
     ]
   },
   {
     "elementType": "labels.text.stroke",
     "stylers": [
       {
         "color": "#f5f5f5"
       }
     ]
   },
   {
     "featureType": "administrative.country",
     "stylers": [
       {
         "color": "#ffc575"
       }
     ]
   },
   {
     "featureType": "administrative.land_parcel",
     "elementType": "labels.text.fill",
     "stylers": [
       {
         "color": "#bdbdbd"
       }
     ]
   },
   {
     "featureType": "poi",
     "elementType": "geometry",
     "stylers": [
       {
         "color": "#eeeeee"
       }
     ]
   },
   {
     "featureType": "poi",
     "elementType": "labels.text.fill",
     "stylers": [
       {
         "color": "#757575"
       }
     ]
   },
   {
     "featureType": "poi.park",
     "elementType": "geometry",
     "stylers": [
       {
         "visibility": "simplified"
       }
     ]
   },
   {
     "featureType": "poi.park",
     "elementType": "labels.icon",
     "stylers": [
       {
         "color": "#ff9300"
       },
       {
         "visibility": "simplified"
       }
     ]
   },
   {
     "featureType": "poi.park",
     "elementType": "labels.text.fill",
     "stylers": [
       {
         "color": "#9e9e9e"
       }
     ]
   },
   {
     "featureType": "road",
     "elementType": "geometry",
     "stylers": [
       {
         "color": "#ffffff"
       }
     ]
   },
   {
     "featureType": "road.arterial",
     "elementType": "labels.text.fill",
     "stylers": [
       {
         "color": "#757575"
       }
     ]
   },
   {
     "featureType": "road.highway",
     "elementType": "geometry",
     "stylers": [
       {
         "color": "#dadada"
       }
     ]
   },
   {
     "featureType": "road.highway",
     "elementType": "labels.text.fill",
     "stylers": [
       {
         "color": "#616161"
       }
     ]
   },
   {
     "featureType": "road.local",
     "elementType": "labels.text.fill",
     "stylers": [
       {
         "color": "#9e9e9e"
       }
     ]
   },
   {
     "featureType": "transit.line",
     "elementType": "geometry",
     "stylers": [
       {
         "color": "#e5e5e5"
       }
     ]
   },
   {
     "featureType": "transit.station",
     "elementType": "geometry",
     "stylers": [
       {
         "color": "#eeeeee"
       }
     ]
   },
   {
     "featureType": "water",
     "elementType": "geometry",
     "stylers": [
       {
         "color": "#c9c9c9"
       }
     ]
   },
   {
     "featureType": "water",
     "elementType": "labels.text.fill",
     "stylers": [
       {
         "color": "#9e9e9e"
       }
     ]
   }
  ]
      }
      map = new google.maps.Map(document.getElementById('map'), mapOptions);
      var place = new google.maps.LatLng(longitud, latitud);
      marker = new google.maps.Marker({
          position: place,
          title: "Mayo",
          map: map,
          icon: image
      });



    </script>