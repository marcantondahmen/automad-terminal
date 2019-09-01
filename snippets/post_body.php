<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<main>
	<section>
		<header>
			<h1>@{ title }</h1>
			<p>
				<@ date.php @>
				|
				<@ tags.php @>
			</p>
		</header>
		@{ textTeaser | markdown }
		@{ text | markdown }
		<@ prev_next.php @>
	</section>
</main>