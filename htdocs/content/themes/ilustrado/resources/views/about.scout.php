@extends('layouts.main')

@section('main')
@loop
@if ( have_rows('sections') )
	<?php
		$i = 1 ;
		while( have_rows('sections') ) : the_row();

		$bg = get_sub_field('background');
		$head = get_sub_field('head');
		$headline = get_sub_field('headline');
		$tagline = get_sub_field('tagline');
		$details = get_sub_field('details');
	?>
	@if ($bg)
		<style>
			background: url("{{ $bg['url'] }}") no-repeat center center fixed;
		</style>
	@endif
	<section class="section-grid">
		<div class="container">
			<div class="bg-image-{{ $i }}">
				<div class="content-frame">
					<div class="headline">
						<div class="head">{{{ $head or 'discover' }}}</div>
						<p>{{{ $headline or 'Our Story' }}}</p>
					</div>
					<strong>{{{ $taglin or 'The Ultimate Dining Experience like no other' }}}</strong>
					<p>{{{ $details or 'lustrado, the name, refers to the educated, well-travelled Filipinos from the “enlightened” elite class during the Spanish era. Today, Ilustrado, the restaurant, caters to clientele of enlightened tastes. Clients whose palates are conversant in savoring the exotic, cosmopolitan and neo-classic flavors of international and Filipino cuisine. For over 19 years, it has established a name for itself as a fine dining restaurant and favorite wedding venue.' }}}</p>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<?php $i++; endwhile; ?>

@endif
	@include('testimonial')
@if ( have_rows('branches') )
	<section id="branches">
		<div class="container-fixed">
			<div class="headline">
				<div class="head">Restaurant</div>
				<p>Branches</p>
			</div>
		</div>
		<div class="container">
	<?php
		$i = 1 ;
		while( have_rows('branches') ) : the_row();

		$name = get_sub_field('name');
		$address = get_sub_field('address');
		$phone = get_sub_field('phone');
		$mobile = get_sub_field('mobile');
		$fax = get_sub_field('fax');
		$map = get_sub_field('map');
	?>
			<aside class="branches">
				<div class="branch-name">{{ $name }}</div>
				<div class="address">{{ $address }}</div>
				<div class="phone-fax">
					@if( $phone )
						Phone: {{ $phone }} &nbsp;
					@endif
					@if( $fax )
						Fax: {{ $fax }} &nbsp;
					@endif

				</div>
				@if( $mobile )
					<div class="mobile">
						Mobile: {{ $mobile }} &nbsp;
					</div>
				@endif
				@if( $map )
				<div class="directions">
					<i class="fa fa-map" data-map="{{ $map }}"></i> Get Directions
				</div>
				@endif
			</aside>		
	<?php endwhile; ?>
		</div>
		<div class="clearfix"></div>
	</section>

@endif
@endloop

	<section id="make-reservations">
		<div class="container-fixed">
			<div class="headline">
				<div class="head">Make</div>
				<p>Reservation</p>
			</div>
		</div>
	</section>
	<?php $demo = get_field('enable_demo'); ?>
		@if ($demo)
			@include('demo.about')
		@endif
	@include('reservation')
@stop

