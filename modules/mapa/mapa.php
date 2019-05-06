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

  var image = new google.maps.MarkerImage("http://localhost:8888/mayo/wp-content/uploads/2019/03/mapa.png", new google.maps.Size(47, 77));
  var marker;
      var map;
      var marker;
      var image = new google.maps.MarkerImage("http://localhost:8888/mayo/wp-content/uploads/2019/03/mapa.png", new google.maps.Size(47, 77));
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