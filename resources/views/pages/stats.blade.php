@extends('templates.starter')
@section('content')
<article>
	<h1><span class="title">Statistics</span></h1>
	<div class="row">
	<section class="col 4 s4">
		<h2><i class="fa fa-database"></i>Data</h2>
		<ul>
			<li><i class="fa fa-twitch"></i>7 OsberBot users</li>
			<li><i class="fa fa-newspaper-o"></i>128 news</li>
			<li><i class="fa fa-exclamation"></i>178 custom commands</li>
			<li><i class="fa fa-quote-left"></i>653 quotes</li>
			<li><i class="fa fa-camera"></i>65 highlights</li>
			<li><i class="fa fa-plus"></i>17 counters</li>
		</ul>
	</section>
	<section class="col 4 s4">
		<h2><i class="fa fa-line-chart"></i>Activity</h2>
		<ul>
			<li><i class="fa fa-twitch"></i>7 new users per week</li>
			<li><i class="fa fa-newspaper-o"></i>128 news per day</li>
			<li><i class="fa fa-exclamation"></i>178 custom commands per day</li>
			<li><i class="fa fa-quote-left"></i>653 quotes per day</li>
			<li><i class="fa fa-camera"></i>65 highlights per day</li>
			<li><i class="fa fa-plus"></i>17 counters per day</li>
		</ul>
	</section>
	<section class="col 4 s4">
		<h2><i class="fa fa-heartbeat"></i>Performance</h2>
		<ul>
			<li><i class="fa fa-bolt"></i>98.7% uptime</li>
			<li><i class="fa fa-server"></i>124h current uptime</li>
			<li><i class="fa fa-check-square-o"></i>124h since last update</li>
			<li><i class="fa fa-tasks"></i>365 queries per hour</li>
			<li><i class="fa fa-bug"></i>2 bug fixes per week</li>
			<li><i class="fa fa-code"></i>27 lines of code per day</li>
		</ul>
	</section>
		</div>
</article>
@stop