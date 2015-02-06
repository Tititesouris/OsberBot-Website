@extends('templates.starter')
@section('content')
<article>
	<h1><span class="title">Welcome</span></h1>
	<ul>{{--
		@foreach($users as $user)
			<li>{{ $user->id ." ". $user->username }}</li>
		@endforeach--}}
    </ul>
</article>
@stop