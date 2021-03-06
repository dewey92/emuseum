<header class="header-bg" id="musnas">
	<div class="header-bg-text">
		<div class="container">
			<h1>MUSEUM NASIONAL</h1>
			<!-- <div class="wrap-museum-rating">
				4.2&nbsp;
				<div class="please-rate">
					<span class="star"></span>
					<span class="star"></span>
					<span class="star"></span>
					<span class="star"></span>
					<span class="star"></span>
				</div>
				of 854 reviews
			</div> -->
			<p>
				<blockquote>The National Museum of Indonesia, is an archeological, historical, ethnological, and geographical museum
					located in Jalan Medan Merdeka Barat, Central Jakarta, right on the west side of Merdeka Square
				</blockquote>
			</p>
		</div>
	</div>
</header>
<div class="mini-bar">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Museums List</a></li>
			<li class="active">Museum Nasional</li>
		</ol>
	</div>
</div>

<div class="container">
	<!-- DESCRIPTION -->
	<!-- <div class="row">
		<div class="col-xs-12">
			<h2><small>
				<blockquote>The National Museum of Indonesia, is an archeological, historical, ethnological, and geographical museum
					located in Jalan Medan Merdeka Barat, Central Jakarta, right on the west side of Merdeka Square
				</blockquote>
			</small></h2>
		</div>
	</div> -->

	<!-- INFO -->
	<div class="row flex">
		<div class="col-xs-12 col-md-4">
			<div class="row">
				<div class="col-md-12">
					<div id="museum-address">
						<h3 class="text-center">ADDRESS</h3>
						<address>
							<span class="fa fa-fw fa-lg fa-map-marker"></span>&nbsp; <?php echo $profile->alamat_museum; ?><br>
							<span class="fa fa-fw fa-lg fa-phone"></span>&nbsp; <?php echo $profile->telp_museum; ?><br>
							<span class="fa fa-fw fa-lg fa-fax"></span>&nbsp; <?php echo $profile->fax_museum; ?><br>
							<span class="fa fa-fw fa-lg fa-twitter"></span>&nbsp; <a href="http://twitter.com/<?php echo $profile->twitter_museum; ?>">@<?php echo $profile->twitter_museum; ?></a> <br>
							<span class="fa fa-fw fa-lg fa-link"></span>&nbsp; <a href="http://www.<?php echo $profile->url_museum; ?>">www.<?php echo $profile->url_museum; ?></a><br>
							<span class="fa fa-fw fa-lg fa-envelope"></span>&nbsp; <a href="mailto:<?php echo $profile->email_museum; ?>"><?php echo $profile->email_museum; ?></a>
						</address>
					</div>
				</div>
				<div class="col-md-12">
					<div id="museum-ticket">
						<h3 class="text-center">HOUR & TICKETING</h3>
						Tuesday-Thursday, Saturday - 10am-6pm <br>
						Friday - 10am-8pm<br>
						Sunday - 11am-5pm<br>
						Monday - CLOSED<br><br>
						
						Admission: Free
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-8 flex flex-column">
			<h3 class="text-center">ACCESS</h3>
			<div id="map-canvas"></div>
		</div>
	</div>

	<!-- EVENTS ETC -->
	<div class="row additional-info">
		<div class="col-md-4 events-highlight">
			<h3 class="text-center">EVENTS</h3>
			<div class="news-item">
				<div class="row">
					<div class="col-xs-3" style="padding-right:0">
						<div class="news-left">
							<div>03 Jan -</div>
							<div>06 Jan</div>
						</div>
					</div>
					<div class="col-xs-9 news-right">
						<a href="<?php echo site_url(); ?>page/events/1">New Artifact Found a Singosari</a>
						<div><span class="label label-default">exhibition</span></div>
					</div>
				</div>
			</div>
			<div class="news-item">
				<div class="row">
					<div class="col-xs-3" style="padding-right:0">
						<div class="news-left">
							<div>Tuesday</div>
							<div>13 Jan</div>
						</div>
					</div>
					<div class="col-xs-9 news-right">
						<a href="<?php echo site_url(); ?>page/events/1">Train Protitype Test</a>
						<div><span class="label label-default">seminar</span></div>
					</div>
				</div>
			</div>
			<div class="news-item">
				<div class="row">
					<div class="col-xs-3" style="padding-right:0">
						<div class="news-left">
							<div>Thursday</div>
							<div>15 Jan</div>
						</div>
					</div>
					<div class="col-xs-9 news-right">
						<a href="<?php echo site_url(); ?>page/events/1">Kids Museum Tour</a>
						<div><span class="label label-default">kids only</span></div>
					</div>
				</div>
			</div>
			<h3 class="more-info"><small>MORE EVENTS &rarr;</small></h3>
		</div>
		<div class="col-md-4 news-highlight">
			<h3 class="text-center">NEWS</h3>
			<div class="news-item">
				<div class="row">
					<div class="col-xs-3" style="padding-right:0">
						<div class="news-left">
							<div>Sunday</div>
							<div>06 Jan</div>
						</div>
					</div>
					<div class="col-xs-9 news-right">
						<a href="<?php echo site_url(); ?>page/news/1">Hari Anti-korupsi</a>
						<div>by Museum Nasional</div>
					</div>
				</div>
			</div>
			<div class="news-item">
				<div class="row">
					<div class="col-xs-3" style="padding-right:0">
						<div class="news-left">
							<div>Tuesday</div>
							<div>13 Jan</div>
						</div>
					</div>
					<div class="col-xs-9 news-right">
						<a href="<?php echo site_url(); ?>page/news/1">Ajang Apresiasi film PIALA MAYA 2014</a>
						<div>by Museum Nasional</div>
					</div>
				</div>
			</div>
			<div class="news-item">
				<div class="row">
					<div class="col-xs-3" style="padding-right:0">
						<div class="news-left">
							<div>Thursday</div>
							<div>15 Jan</div>
						</div>
					</div>
					<div class="col-xs-9 news-right">
						<a href="<?php echo site_url(); ?>page/news/1">Penghargaan Museum Lover</a>
						<div>by Museum Nasional</div>
					</div>
				</div>
			</div>
			<h3 class="more-info"><small>MORE NEWS &rarr;</small></h3>
		</div>
		<div class="col-md-4">
			<h3 class="text-center">COLLECTIONS</h3>
		</div>
	</div>

	<!-- REVIEWS -->
	<div class="row box">
		<div class="col-sm-9">
			<h3>Reviews</h3>
			<div class="reviews">
				<span class="average-rating">4.2&nbsp;</span>
				<div class="score">
					<span class="score-stars-active"></span>
					<span class="score-stars-active"></span>
					<span class="score-stars-active"></span>
					<span class="score-stars-active"></span>
					<span class="score-stars"></span>
				</div>
				<small>of 823 reviews</small>
				<div class="pull-right">
					<burron class="btn btn-primary"><span class="fa fa-fw fa-pencil"></span>&nbsp;Write a review</burron>
				</div>
			</div>
			<hr>
			<div class="wrap-media">
				<div class="media">
					<div class="media-left">
						<a href="#">
							<img class="media-object img img-circle" src="<?php echo base_url()?>img/blogs/kitten.jpg" alt="Image" width="50" height="50">
						</a>
					</div>
					<div class="media-body" style="padding-left: 10px">
						<h4 class="media-heading" style="margin:0">Abdurrahaman Maududi</h4>
						<p class="text-muted">3 months ago</p>
						<p>
							<div class="score">
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
								<span class="score-stars"></span>
							</div>
							<span>Good museum, rich of collections and I enjoyed them very much</span>
						</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<a href="#">
							<img class="media-object img img-circle" src="<?php echo base_url()?>img/blogs/kitten.jpg" alt="Image" width="50" height="50">
						</a>
					</div>
					<div class="media-body" style="padding-left: 10px">
						<h4 class="media-heading" style="margin:0">Puspita Awalina</h4>
						<p class="text-muted">3 months ago</p>
						<p>
							<div class="score">
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
							</div>
							<span>Each guide for foreigners possesses a very fluent English speaking skill. Helped me a lot</span>
						</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<a href="#">
							<img class="media-object img img-circle" src="<?php echo base_url()?>img/blogs/kitten.jpg" alt="Image" width="50" height="50">
						</a>
					</div>
					<div class="media-body" style="padding-left: 10px">
						<h4 class="media-heading" style="margin:0">Haq Faruqi</h4>
						<p class="text-muted">4 months ago</p>
						<p>
							<div class="score">
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
								<span class="score-stars"></span>
							</div>
							<span>As an archelogist, this museum provides so many data I needed, and it's easy for me to get. Open-armed!</span>
						</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<a href="#">
							<img class="media-object img img-circle" src="<?php echo base_url()?>img/blogs/kitten.jpg" alt="Image" width="50" height="50">
						</a>
					</div>
					<div class="media-body" style="padding-left: 10px">
						<h4 class="media-heading" style="margin:0">Dedi Arief</h4>
						<p class="text-muted">6 months ago</p>
						<p>
							<div class="score">
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
								<span class="score-stars-active"></span>
								<span class="score-stars"></span>
								<span class="score-stars"></span>
							</div>
							<span>Rancakbana lah</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">
	var map;

	function initialize() {
		var loc = new google.maps.LatLng(-6.176402,106.82159);
		var mapOptions = {
			center: loc,
			zoom: 16,
			scrollwheel:false,
			zoomControl : false,
			panControl : false,
			streetViewControl : false,
			mapTypeControl: false,
			overviewMapControl: false,
			clickable: false,
			/*styles: [
				{
					"featureType": "road",
					"stylers": [
					{ "color": "#b4b4b4" }
					]
				},{
					"featureType": "water",
					"stylers": [
					{ "color": "#d8d8d8" }
					]
				},{
					"featureType": "landscape",
					"stylers": [
					{ "color": "#f1f1f1" }
					]
				},{
					"elementType": "labels.text.fill",
					"stylers": [
					{ "color": "#000000" }
					]
				},{
					"featureType": "poi",
					"stylers": [
					{ "color": "#d9d9d9" }
					]
				},{
					"elementType": "labels.text",
					"stylers": [
					{ "saturation": 1 },
					{ "weight": 0.1 },
					{ "color": "#000000" }
					]
				}
			],*/
			/* styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}] */		};

		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		var marker = new google.maps.Marker({
			position: loc,
			map: map,
			title: 'Museum Nasional'
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>