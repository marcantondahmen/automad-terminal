<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippet nav @>
	<@ if @{ :pagelistCount } @>
		<ul>
			<@ foreach in pagelist @>
				<li>
					<@ if @{ :current } @>
						<a href="@{ url }"><strong>@{ title }</strong></a>
					<@ else @>
						<a href="@{ url }">@{ title }</a>
					<@ end @>
					<@ if @{ :currentPath } @>
						<@ nav @>
					<@ end @>
				</li>
			<@ end @>
		</ul>
	<@ end @>
<@ end @>
<hr class="hidden-large">
<nav>
	<@ newPagelist { type: 'children' } @>
	<@ with '/' @>
		<@ nav @>
	<@ end @>
</nav>