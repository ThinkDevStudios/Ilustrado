@extends('layouts.main')

@section('main')
@loop
<?php 
	$intro = get_field('intro', Loop::id());
	$founder = get_field('founder', Loop::id());
	$signature = get_field('signature', Loop::id());
?>
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
		@if ( $i == 1 ) 
		<div class="container-fixed">
			<div class="intro">{{{ $intro or 'Until I discovered cooking i was never really interested in anything'}}}</div>
			<div class="founder">Our Founder {{{ $founder or 'Beatrice Pimentel' }}}</div>
			<div class="signature">{{{ $signature or 'Beatrice Pimentel'}}}</div>
		</div>
		@endif
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
@endloop
	<?php $demo = get_field('enable_demo'); ?>
		@if ($demo)
			@include('demo.home')
		@endif
	@include('testimonial')
	@include('reservation')
@stop

