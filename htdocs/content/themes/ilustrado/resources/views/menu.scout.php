@extends('layouts.main')

@section('main')
@loop
@if ( have_rows('menu') )
	<section id="day-menu" class="menu-grid">
		<div class="container">
			<h1>Menus of the day</h1>
			<div class="clearfix"></div>
	<?php
		$i = 1 ;
		while( have_rows('menu') ) : the_row();

		$name = get_sub_field('name');
		$price = get_sub_field('price');
		$details = get_sub_field('details');
	?>
			<aside>
				<div class="menu-name">{{ $name }}</div>
				<div class="menu-spacer"><hr></div>
				<div class="menu-price">{{ $price }}</div>
				<div class="menu-breadcrumb">{{ $details }}</div>
				<div class="clearfix"></div>
			</aside>
	<?php $i++; endwhile; ?>
			<div class="clearfix"></div>	
		</div>
	</section>
@endif
	<section id="house-special-bg">
		<div class="container-fixed">
			<div class="headline">
				<div class="head">House Special</div>
				<p>Highly Recommended</p>
			</div>
		</div>
	</section>
@if ( have_rows('specials') )
	<section id="house-special" class="menu-grid">
	<?php
		$s = 1 ;
		while( have_rows('specials') ) : the_row();
		$image = get_sub_field('image');
		$name = get_sub_field('name');
		$price = get_sub_field('price');
		$details = get_sub_field('details');
	?>
		<aside>
			<img src="{{ $image['url'] }}">
			<div class="menu-name">{{ $name }}</div>
			<div class="menu-spacer"><hr></div>
			<div class="menu-price">{{ $price }}</div>
			<div class="menu-breadcrumb">{{ $details }}</div>
			<div class="clearfix"></div>
		</aside>
	<?php $s++; endwhile; ?>
		<div class="clearfix"></div>
	</section>
@endif
	<section id="wine-selection-bg">
		<div class="container-fixed">
			<div class="headline">
				<div class="head">House Special</div>
				<p>Highly Recommended</p>
			</div>
		</div>
	</section>
@if ( have_rows('beverages') )
	<section id="beverages" class="menu-grid">
		<div class="container">
			<h1>Alcoholic Beverages</h1>
			<div class="clearfix"></div>
	<?php
		$b = 1 ;
		while( have_rows('beverages') ) : the_row();

		$name = get_sub_field('name');
		$price = get_sub_field('price');
		$details = get_sub_field('details');
	?>
			<aside>
				<div class="menu-name">{{ $name }}</div>
				<div class="menu-spacer"><hr></div>
				<div class="menu-price">{{ $price }}</div>
				<div class="menu-breadcrumb">{{ $details }}</div>
				<div class="clearfix"></div>
			</aside>
	<?php $b++; endwhile; ?>			
			<div class="clearfix"></div>	
		</div>
	</section>
@endif
@endloop
	<?php $demo = get_field('enable_demo'); ?>
		@if ($demo)
			@include('demo.menu')
		@endif
@stop

