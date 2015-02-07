<nav class="navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="/">OsberBot</a>
		</div>

		<div class="collapse navbar-collapse" id="top-navbar">
			<ul class="nav navbar-nav">
				<li{{ (Request::is('/') ? ' class=active' : '') }}>
					<a href="/">
						<i class="fa fa-home"></i>Home
					</a>
				</li>
				<li{{ (Request::is('dashboard') ? ' class=active' : '') }}>
					<a href="/dashboard">
						<i class="fa fa-th-large"></i>Dashboard
					</a>
				</li>
				<li{{ (Request::is('doc') ? ' class=active' : '') }}>
					<a href="/doc">
						<i class="fa fa-book"></i>Documentation
					</a>
				</li>
				<li{{ (Request::is('stats') ? ' class=active' : '') }}>
					<a href="/stats">
						<i class="fa fa-bar-chart"></i>Statistics
					</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown{{ (Request::is('profile') ? ' active' : '') }}">
					<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						<i class="fa fa-user"></i>Tititesouris<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="/">
								<i class="fa fa-user"></i>Profile
							</a>
						</li>
						<li>
							<a href="/">
								<i class="fa fa-sign-out"></i>Logout
							</a>
						</li>
					</ul>
				</li>
				<li{{ (Request::is('settings') ? ' class=active' : '') }}>
					<a href="/settings">
						<i class="fa fa-cog"></i>Settings
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>