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
			.bg-image-{{ $i }} {
				background: url("{{ $bg['url'] }}") no-repeat center center fixed;
			}
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
					<strong>{{{ $tagline or 'The Ultimate Dining Experience like no other' }}}</strong>
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
@if ( have_rows('statistics') )
<section id="service-statistics">
	<div class="container">
	<?php
		$i = 1 ;
		while( have_rows('statistics') ) : the_row();

		$stats = get_sub_field('stats');
		$details = get_sub_field('details');

	?>
		<aside>
			<div class="stats">{{ $stats }}</div>
			<div class="details">{{ $details }}</div>
		</aside>
	<?php $i++; endwhile; ?>
	</div>
</section>
@endif
<section id="packages-reservation">
	<div class="container-fixed">
		<div class="headline">
			<div class="head">Restaurant</div>
			<p>Branches</p>
		</div>
	</div>
</section>
<section id="download-fillup">
	<div class="container">
		<aside class="fillup">
			<div class="float-right">23,000 have requested a reservation</div>
			<img src="{{ themosis_assets() }}/images/fillup-form.png">
			<div class="clearfix"></div>
		</aside>
		<aside class="download">
			<div class="float-right">23,000 have downloaded this file</div>
			<img src="{{ themosis_assets() }}/images/download-packages.png">
			<div class="clearfix"></div>			
		</aside>
		<div class="clearfix"></div>		
	</div>
</section>
@if ( have_rows('experience') )
	<?php
		while( have_rows('experience') ) : the_row();
		if( get_row_layout() == 'layout') :
			$bg = get_sub_field('background');
			$head = get_sub_field('head');
			$headline = get_sub_field('headline');
			$tagline = get_sub_field('tagline');
			$details = get_sub_field('details');
		endif;

	?>
	@if ($bg)
		<style>
			.bg-image-{{ $i }} {
				background: url("{{ $bg['url'] }}") no-repeat center center fixed;
			}
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
<?php $images = get_field('gallery'); ?>
@if( $images )
	<section class="gallery-grid">
		<div class="container">
		@foreach( $images as $image )
			<aside><img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}"></aside>
		@endforeach
			<div class="clearfix"></div>
		</div>
	</section>
@endif
@endloop
	<?php $demo = get_field('enable_demo'); ?>
		@if ($demo)
			@include('demo.services')
		@endif
@stop

