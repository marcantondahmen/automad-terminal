<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<!DOCTYPE html>
<html>
<head lang="en">
	<?php if (substr(AM_VERSION, 0, 1) == '1') { ?>
		<@ set {
			metaTitle: "@{ sitename } / @{ title | def ('404') }"
		} @>
		<title>@{ metaTitle | stripTags }</title>
		<@ Automad/MetaTags {
			description: @{ textTeaser | stripTags },
			ogTitle: @{ metaTitle | stripTags },
			ogDescription: @{ textTeaser | stripTags },
			ogImage: @{ ogImage },
			twitterCard: 'summary_large_image'
		} @>
	<?php } ?>
	<@ with @{ favicon } @><link href="@{ :file }" rel="shortcut icon" type="image/x-icon" /><@ end @>
	<@ with @{ appleTouchIcon } @><link href="@{ :file }" rel="apple-touch-icon" /><@ end @>
	<link rel="stylesheet" href="/packages/@{ theme }/dist/normalize/normalize.css">
	<link rel="stylesheet" href="/packages/@{ theme }/dist/terminal/terminal.min.css">
	<link rel="stylesheet" href="/packages/@{ theme }/dist/terminal/terminal.grid.css">
	<@ if @{ checkboxDarkTheme } @>
		<link rel="stylesheet" href="/packages/@{ theme }/dist/terminal/terminal.dark.css">
	<@ end @>
	<link rel="stylesheet" href="/packages/automad/lightbox/dist/lightbox.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="/packages/automad/lightbox/dist/lightbox.min.js"></script>
	@{ itemsHeader }
</head>
<body class="terminal">
	<div class="container">
		<div class="terminal-nav">
			<header class="terminal-logo">
				<div class="logo terminal-prompt">
					<a href="/" class="no-style">@{ sitename }</a>
				</div>
			</header>
			<nav class="terminal-menu">
				<ul>
					<@ newPagelist { type: false, excludeHidden: false } @>
					<@ foreach in pagelist @>
						<@ if @{ checkboxShowInNavbar } @>
							<li>
								<a href="@{ url }" class="menu-item<@ if @{ :current } @> active<@ end @>">
									@{ title }
								</a>
							</li>
						<@ end @>
					<@ end @>
				</ul>
			</nav>
		</div>
		<br>
		
