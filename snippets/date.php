<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@{ date | def (@{ :mtime }) | dateFormat (@{ formatDate | def ('F jS Y') }) }