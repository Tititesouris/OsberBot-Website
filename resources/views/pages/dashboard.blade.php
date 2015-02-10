@extends('templates.starter')
@section('content')
<article>
	<section>
		<h1><span class="title">Commands</span></h1>
		<ul>
			@foreach($commands as $command)
				<li>{{ $command->id ." ". $command->name ." ". $command->content }}</li>
			@endforeach
		</ul>
	</section>
	<section>
		<h1><span class="title">Counters</span></h1>
		<ul>
			@foreach($counters as $counter)
				<li>{{ $counter->id ." ". $counter->name ." ". $counter->value }}</li>
			@endforeach
		</ul>
	</section>
	<section>
		<h1><span class="title">News</span></h1>
		<ul>
			@foreach($news as $new)
				<li>{{ $new->id ." ". $new->content }}</li>
			@endforeach
		</ul>
	</section>
</article>
@stop