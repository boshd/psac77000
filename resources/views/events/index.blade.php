@extends('layouts.master')

@section('content')

<!-- Banner -->
<!-- Note: The "styleN" class below should match that of the header element. -->
<section id="banner" class="style2">
	<div class="inner">
		<span class="image">
			<img src="../c.jpg" alt="" />
		</span>
		<header class="major">
			<h1 style="color: #E63946">Events</h1>
		</header>
		<div class="content">
			<h4 style="color: #fff">Catch up with our latest events.</h4>
		</div>
	</div>
</section>

<!-- Main -->
<div id="main">


	<!-- Two -->
		<section id="two" class="spotlights">
			@if(count($events) > 0)
				@foreach($events as $event)
					<section>
						<a href="generic.html" class="image">
							<img style="width: 100%; height: 100%;" src="/storage/cal.png" alt="" data-position="center center" />
						</a>
						<div class="content">
							<div class="inner">
								<header class="major">
									<h1 style="color: #fff">{{ $event->title }}</h1>
									<br>
									<h2 style="color: #fff">{{ $event->location }} - {{ $event->time }}</h2>
								</header>
								<p style="color: #fff;">{!! str_limit($event->body, 250) !!}</p>
								<br>
								<ul class="actions">
									<li><a style=" box-shadow: inset 0 0 0 2px #fff; color: #fff;" href="/events/{{$event->id}}" class="button">Learn more</a></li>
								</ul>
							</div>
						</div>
					</section>
				@endforeach
				{{$events->links()}}	

			@else
				<!-- CTA -->
			    <section id="cta2">
			      <h2>There are no events at this time.</h2>
			    </section>				
			@endif					
		</section>

</div>


@endsection