@extends('layouts.main')

@section('main')
	<section class="gallery-grid">
		<div class="container">
			<aside><img src="{{ themosis_assets() }}/images/menu-bg.png"></aside>
			<aside><img src="{{ themosis_assets() }}/images/menu-bg.png"></aside>
			<aside><img src="{{ themosis_assets() }}/images/menu-bg.png"></aside>
			<aside><img src="{{ themosis_assets() }}/images/menu-bg.png"></aside>
			<aside><img src="{{ themosis_assets() }}/images/menu-bg.png"></aside>
			<aside><img src="{{ themosis_assets() }}/images/menu-bg.png"></aside>
			<aside><img src="{{ themosis_assets() }}/images/menu-bg.png"></aside>
			<aside><img src="{{ themosis_assets() }}/images/menu-bg.png"></aside>
			<div class="clearfix"></div>
		</div>
	</section>
	<?php $demo = get_field('enable_demo'); ?>
		@if ($demo)
			@include('demo.gallery')
		@endif
@stop

