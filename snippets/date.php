<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@{ date | dateFormat (@{ formatDate | def ('l, F jS Y') }) }