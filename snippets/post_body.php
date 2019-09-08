<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<main>
	<section>
		<header>
			<h1>@{ title }</h1>
			<@ if not @{ checkboxHideDateAndTags } @>
				<p>
					<@ date.php @>
					|
					<@ tags.php @>
				</p>
			<@ end @>
		</header>
		@{ textTeaser | markdown }
		@{ text | markdown }
		<@ prev_next.php @>
	</section>
</main>