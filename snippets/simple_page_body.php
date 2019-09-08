<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<main>
	<section>
		<header>
			<h1>@{ title }</h1>
		</header>
		@{ textTeaser | markdown }
		@{ text | markdown }
	</section>
</main>