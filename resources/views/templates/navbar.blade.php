<ul id="dropdown-menu" class="dropdown-content">
	<li>
		<a href="/profile">
			<i class="fa fa-user"></i>Profile
		</a>
	</li>
	<li>
		<a href="/profile">
			<i class="fa fa-sign-out"></i>Logout
		</a>
	</li>
</ul>
<nav>
	<ul id="nav-mobile" class="side-nav left">
		<a href="/" class="brand-logo left">OsberBot</a>
		<li {{ (Request::is('/') ? 'class="active"' : '') }}>
			<a href="/">
				<i class="fa fa-home"></i>Home
			</a>
		</li>
		<li {{ (Request::is('dashboard') ? 'class="active"' : '') }}>
			<a href="/dashboard">
				<i class="fa fa-th-large"></i>Dashboard
			</a>
		</li>
		<li {{ (Request::is('doc') ? 'class="active"' : '') }}>
			<a href="/doc">
				<i class="fa fa-book"></i>Documentation
			</a>
		</li>
		<li {{ (Request::is('stats') ? 'class="active"' : '') }}>
			<a href="/stats">
				<i class="fa fa-bar-chart"></i>Statistics
			</a>
		</li>
	</ul>
	<ul id="nav-mobile2" class="side-nav right">
		<li>
			<a class="dropdown-button" href="" data-activates="dropdown-menu">
				<i class="fa fa-user"></i>Tititesouris<i class="mdi-navigation-arrow-drop-down right"></i>
			</a>
		</li>
		<li {{ (Request::is('settings') ? 'class="active"' : '') }}>
			<a href="/settings">
				<i class="fa fa-cog"></i>Settings
			</a>
		</li>
	</ul>
</nav>