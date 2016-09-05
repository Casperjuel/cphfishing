<?php
/**
 * Template Name: Spots
 * @package cphfish_theme
 */


get_header(); ?>


<main class="Guides">
	<?php the_title(); ?>
	<div class="inner">


	<?php the_content();?>
  </div>

<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDFQPaqei7o7mp46RC4ba8WEcZpxuSNXJ8&extension=.js'></script> 
 
<script> 
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(55.650958,12.589244),
            zoom: 12,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            },
            scaleControl: true,
            scrollwheel: false,
            panControl: false,
            streetViewControl: false,
            draggable : true,
            overviewMapControl: false,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.SATELLITE,
            styles: [
  {
    "elementType": "labels.text",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "landscape.natural",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#f5f5f2" },
      { "visibility": "on" }
    ]
  },{
    "featureType": "administrative",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "transit",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi.attraction",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "landscape.man_made",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#ffffff" },
      { "visibility": "on" }
    ]
  },{
    "featureType": "poi.business",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi.medical",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi.place_of_worship",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi.school",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi.sports_complex",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      { "color": "#ffffff" },
      { "visibility": "simplified" }
    ]
  },{
    "featureType": "road.arterial",
    "stylers": [
      { "visibility": "simplified" },
      { "color": "#ffffff" }
    ]
  },{
    "featureType": "road.highway",
    "elementType": "labels.icon",
    "stylers": [
      { "color": "#ffffff" },
      { "visibility": "off" }
    ]
  },{
    "featureType": "road.highway",
    "elementType": "labels.icon",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road.arterial",
    "stylers": [
      { "color": "#ffffff" }
    ]
  },{
    "featureType": "road.local",
    "stylers": [
      { "color": "#ffffff" }
    ]
  },{
    "featureType": "poi.park",
    "elementType": "labels.icon",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi",
    "elementType": "labels.icon",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "water",
    "stylers": [
      { "color": "#71c8d4" }
    ]
  },{
    "featureType": "landscape",
    "stylers": [
      { "color": "#e5e8e7" }
    ]
  },{
    "featureType": "poi.park",
    "stylers": [
      { "color": "#8ba129" }
    ]
  },{
    "featureType": "road",
    "stylers": [
      { "color": "#ffffff" }
    ]
  },{
    "featureType": "poi.sports_complex",
    "elementType": "geometry",
    "stylers": [
      { "color": "#c7c7c7" },
      { "visibility": "off" }
    ]
  },{
    "featureType": "water",
    "stylers": [
      { "color": "#a0d3d3" }
    ]
  },{
    "featureType": "poi.park",
    "stylers": [
      { "color": "#91b65d" }
    ]
  },{
    "featureType": "poi.park",
    "stylers": [
      { "gamma": 1.51 }
    ]
  },{
    "featureType": "road.local",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road.local",
    "elementType": "geometry",
    "stylers": [
      { "visibility": "on" }
    ]
  },{
    "featureType": "poi.government",
    "elementType": "geometry",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "landscape",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road",
    "elementType": "labels",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      { "visibility": "simplified" }
    ]
  },{
    "featureType": "road.local",
    "stylers": [
      { "visibility": "simplified" }
    ]
  },{
    "featureType": "road"  },{
    "featureType": "road"  },{
  },{
    "featureType": "road.highway"  }
],
        }
        var mapElement = document.getElementById('fishingspotsmap');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [

        ];
        for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';     }

}
</script>
<style>
#fishingspotswrapper{
  float: left;
  width: 50%;
  height: auto;
  overflow: hidden;
}
.fishingspots {
  float:left;
  width: 50%;
}
    #fishingspotsmap {
      float: left;
        height:80vh;
        width:100%;
    }
    .gm-style-iw * {
        display: block;
        width: 100%;
    }
    .gm-style-iw h4, .gm-style-iw p {
        margin: 0;
        padding: 0;
    }
    .gm-style-iw a {
        color: #4272db;
    }
</style>
<div id="fishingspotswrapper">
    <div id='fishingspotsmap'></div>
</div>
    <div class="fishingspots">
      <div class="teaser-wrapper">
        <?php
        $args = array( 'posts_per_page' => -1, 'category' => 16 );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
          <a href="<?php the_permalink(); ?>" class="post-teaser" style="background-image: url('<?php echo $image[0]; ?>')">
            <div class="label">Fiskespot</div>
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
        
          </a>
        <?php endforeach; wp_reset_postdata();?>

      </div>

    </div>
<?php get_footer();
