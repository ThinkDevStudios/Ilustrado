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
	<section  class="branch-grid">
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
@if ( have_rows('schedules') )
<section id="opening-hours">
	<div class="container-fixed">
		<h1>Opening Hours</h1>
		<p>Vulputate mi dui suscipit, molestie vulputate libero fusce iaculis suscipit. Sapien pede libero. 
Maecenas lacus aliquet et nisl nunc, per sed sed maecenas.Lectus tincidunt pellentesque augue urna sit sed.</p>

		<table>
			<thead>
				<tr>
					<td></td>
					<td>Noon</td>
					<td>Evening</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$s = 1 ;
					while( have_rows('schedules') ) : the_row();

					$day = get_sub_field('day');
					$open = get_sub_field('open');
					$close = get_sub_field('close');
				?>
				<tr>
					<td>{{ $day }}</td>
					<td>{{ $open }}</td>
					<td>{{ $close}}</td>
				</tr>
				<?php $s++; endwhile; ?>
			</tbody>
		</table>	
	</div>
</section>
@endif
@endloop
	<?php $demo = get_field('enable_demo'); ?>
		@if ($demo)
			@include('demo.contact')
		@endif
<section id="make-reservations">
	<div class="container-fixed">
		<div class="headline">
			<div class="head">Make</div>
			<p>Reservation</p>
		</div>
	</div>
</section>

	@include('reservation')
@stop

