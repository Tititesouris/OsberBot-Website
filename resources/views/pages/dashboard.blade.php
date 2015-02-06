@extends('templates.starter')
@section('content')
<article>
	<h1><span class="title">Dashboard</span></h1>
	<ul>
		@foreach($news as $new)
			<li>{{ $new->id ." ". $new->content }}</li>
		@endforeach
    </ul>
	<ul>
		@foreach($commands as $command)
			<li>{{ $command->id ." ". $command->name ." ". $command->content }}</li>
		@endforeach
    </ul>
	<ul>
		@foreach($counters as $counter)
			<li>{{ $counter->id ." ". $counter->name ." ". $counter->value }}</li>
		@endforeach
    </ul>
</article>
@stop