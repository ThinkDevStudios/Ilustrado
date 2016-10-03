@extends('layouts.main')

@section('main')
<section id="page">
	<div class="container">
	@loop
		<div class="headline">
			<div class="head">{{ Loop::title() }}</div>
			<p>Philosophy</p>
		</div>
		<p>
	        {{ Loop::content() }}
	    </p>
	@endloop
	</div>
</section>
@stop

