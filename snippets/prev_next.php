<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<br>
<@ newPagelist { type: 'siblings' } @>
<@ with prev @>
	<a href="@{ url }"><<< @{ title }</a>
<@ end @>
|
<@ with next @>
	<a href="@{ url }">@{ title } >>></a>
<@ end @>