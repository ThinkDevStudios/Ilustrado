<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kristi|Lato:100,300,400" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body>
<?php
$menu_name = 'slider-nav'; //menu slug
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
$menu_list = '<nav id="nav-slide">' ."\n";
$menu_list .= '<div class="items">Menu <div class="close">Close <i class="fa fa-close"></i></div></div>' ."\n";
foreach ( (array) $menu_items as $key => $menu_item ) {
        $title = $menu_item->title;
        $url = $menu_item->url;
        $menu_list .= '<div class="items"><a href="' . $url . '">' . $title . '</a></div>' ."\n";
    }
$menu_list .= '</nav>' . "\n";
echo $menu_list;
?>

@loop
<?php 
	$sliderBg = get_field('slider_background', Loop::id());
	$sliderHead = get_field('slider_head', Loop::id());
	$sliderHeadline = get_field('slider_headline', Loop::id());
	$sliderTagline = get_field('slider_tagline', Loop::id());
?>

@if($sliderBg)
	<style>
		header#header { background: url("{{ $sliderBg['url'] }}") no-repeat center center fixed }
	</style>
@endif

@endloop


	<header id="header">
		<nav id="top-nav">
			<div class="container">
				<div id="logo"><img src="{{ themosis_assets() }}/images/ilustrado-restaurant-logo.png"></div>
				<div id="menu" class="box-shadow-menu">MENU</div>
			</div>
		</nav>
		<div class="container">
			<div class="headline">
				<div class="head">{{{ isset($sliderHead) ? $sliderHead : 'Welcome to' }}}</div>
				
					@if($sliderHeadline)
						<h1>{{ $sliderHeadline }}</h1>
					@else
						<h1>ILUSTRADO <b>RESTAURANT</b></h1>
					@endif

			</div>
			<div class="tagline">
				@if($sliderTagline)
					{{ $sliderTagline }}
				@else
					Making the delicious premium food since 1980's<br/>
					Book Online or Call (+632) 123 4567
				@endif
			</div>
		</div>
	</header>