@extends('layouts.main')

@section('main')
<section id="page">
	<div class="container">
	@loop
		<div class="headline">
			<div class="head">{{ Loop::title() }}</div>
			<p>Philosophy</p>
		</div>
	{{ Loop::content() }}

	@endloop
	</div>
</section>
@stop

