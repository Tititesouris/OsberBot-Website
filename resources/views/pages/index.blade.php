@extends('templates.starter')
@section('content')
<article>
	<section>
		<h1>What is OsberBot?</h1>
		<div class="content">
			<p>
				OsberBot is a Twitch chat bot. It can do moderation tasks as well as many other things!<br />
				Its most popular functionalities are the following.
			</p>
			<ul>
				<li>
					<span class="element">Highlights</span>The viewers notify the bot every time something they judge worth saving happens on stream. Afterwards, you can review the most popular moments of your streams, and decide whether or not to highlight them.
				</li>
				<li>
					<span class="element">Quotes</span>OsberBot stores funny or inspiring quotes and you can fetch one back in chat at any time. Good for out of context jokes and remembering the good old times.
				</li>
			</ul>
		</div>
	</section>
	<section>
		<h1>How to use OsberBot?</h1>
		<div class="content">
			<p>
				If you want to start using OsberBot, the very first step is to make it join your Twitch chat. In order to do that, you must first log in by pressing the 'Log in' button on the top right.<br />
				This will redirect you to Twitch, and ask you a few permissions that are necessary for OsberBot to work correctly in your chat.<br />
				You will then be redirected here. You can now go to your dashboard by pressing the 'Dashboard' button at the top of this page.<br />
				If you do not have OsberBot in your chat already, a message will tell you to press the 'Join my chat' button.
				Once this is done, the bot will join your chat within the minute and you can start customizing it to fit the needs of your channel.
			</p>
		</div>
	</section>
</article>
@stop