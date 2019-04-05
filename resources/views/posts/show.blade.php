@extends('layouts.master')

@section('content')

<!-- Main -->
<div id="main" class="alt">

	<!-- One -->
		<section style="background-color: #fff;" class="article" id="one">
			<div style="background-color: #fff;" class="inner">
				<header class="major">
					<h1 style="color: #000;" >{{$post->title}}</h1>
					<h3>Written on {{$post->created_at}}</h3>
					<img style=" position: center; float: center; width: 1000px; height: 500px; background-position: 50% 50%; background-repeat: no-repeat; background-size: cover;" src="/storage/cover_images/{{$post->cover_image}}" alt="" data-position="center center" />
				</header>
				<p>{!!$post->body!!}</p>
				@if(!Auth::guest())
					@if(Auth::user()->id == $post->user_id)
						<div class="inner">
							<a style="color: #000;" href="/posts/{{$post->id}}/edit" class="button">Edit</a>
			        		{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
			            		{{Form::hidden('_method', 'DELETE')}}
			            		{{Form::submit('Delete', ['class' => 'button'])}}
			        		{!!Form::close()!!}
			        	</div>
        			@endif
        		@endif
			</div>
		</section>
@endsection