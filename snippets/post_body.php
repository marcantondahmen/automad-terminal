<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<main>
	<section>
		<header>
			<h1>@{ title }</h1>
			<p>
				<@ date.php @>
				<@ if @{ tags } @>|<@ end @>
				<@ tags.php @>
			</p>
		</header>
		@{ textTeaser | Automad/Lightbox | markdown }
		@{ text | Automad/Lightbox | markdown }
		<@ prev_next.php @>
	</section>
</main>