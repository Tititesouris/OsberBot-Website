@extends('templates.starter')
@section('content')
<article>
	<h1>Welcome</h1>
	<h1>Welcome</h1>
	<p>Welcome to OsberBot. Lorem ipsum and shit.</p>
	<ul>{{--
		@foreach($users as $user)
			<li>{{ $user->id ." ". $user->username }}</li>
		@endforeach--}}
    </ul>
</article>
@stop