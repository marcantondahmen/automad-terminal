<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<main>
	<section>
		<header>
			<h1>@{ title }</h1>
		</header>
		@{ textTeaser | Automad/Lightbox | markdown }
		@{ text | Automad/Lightbox | markdown }
	</section>
</main>