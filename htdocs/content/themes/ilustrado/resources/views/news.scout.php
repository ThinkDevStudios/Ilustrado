@extends('layouts.main')

@section('main')
	<section id="news-grid">
		<div class="container">
		@query(['post_type' => 'post', 'posts_per_page' => 12])
		<?php $categories = get_the_category( Loop::id() ); $count = count($categories); $i = 0; ?>
			<aside class="news">
				<div class="title"><a href="{{ the_permalink() }}"> {{ Loop::title() }} </a></div>
				<div class="details">{{ Loop::date() }} 
					<?php if ($categories) : ?> IN <strong>
						<?php foreach( $categories as $category ) :
								$i++;
							    echo $category->name;
							    if ($i != $count ) echo ', ';
							endforeach; 
					endif; ?>	
				| <span class="highlight"><a href="{{ the_permalink() }}">READ MORE</a></span></strong></div>
				<img class="responsive" src="{{ themosis_assets() }}/images/sample-post.png">
				{{ Loop::content() }}
				<div class="clearfix"></div>
			</aside>
		@endquery
			
			<div class="clearfix"></div>
		</div>
	</section>
	<?php $demo = get_field('enable_demo'); ?>
		@if ($demo)
			@include('demo.news')
		@endif
@stop

