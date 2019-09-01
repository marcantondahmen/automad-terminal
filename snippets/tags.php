<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ foreach in tags @>
	<a 
	href="@{ urlTagLinkTarget | def (@{ :parent }) }?filter=@{ :tag }"
	>#@{ :tag }</a>
<@ end @>