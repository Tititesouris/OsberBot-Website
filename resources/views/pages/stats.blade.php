@extends('templates.starter')
@section('content')
<article>
	<section>
		<h1><i class="fa fa-database"></i>Data</h1>
		<ul>
			<li><i class="fa fa-twitch"></i>{{ $nbUsers }} OsberBot users</li>
			<li><i class="fa fa-newspaper-o"></i>{{ $nbNews }} news</li>
			<li><i class="fa fa-exclamation"></i>{{ $nbCommands }} custom commands</li>
			<li><i class="fa fa-quote-left"></i>{{ $nbQuotes }} quotes</li>
			<li><i class="fa fa-camera"></i>{{ $nbHighlights }} highlights</li>
			<li><i class="fa fa-plus"></i>{{ $nbCounters }} counters</li>
		</ul>
	</section>
	<section>
		<h1><i class="fa fa-line-chart"></i>Activity</h1>
		<ul>
			<li><i class="fa fa-twitch"></i>{{ $usersWeek }} new users this week</li>
			<li><i class="fa fa-newspaper-o"></i>- news per day</li>
			<li><i class="fa fa-exclamation"></i>- custom commands per day</li>
			<li><i class="fa fa-quote-left"></i>- quotes per day</li>
			<li><i class="fa fa-camera"></i>- highlights per day</li>
			<li><i class="fa fa-plus"></i>- counters per day</li>
		</ul>
	</section>
	<section>
		<h1><i class="fa fa-heartbeat"></i>Performance</h1>
		<ul>
			<li><i class="fa fa-bolt"></i>{{ $totalUptime }}% uptime</li>
			<li><i class="fa fa-check-square-o"></i>{{ $uptime }} current uptime</li>
		</ul>
	</section>
		</div>
</article>
@stop