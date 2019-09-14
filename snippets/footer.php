<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
		
		<hr>
		<footer>
			<@ if @{ :level } > 1 @>		
				<p>
					<@ newPagelist { type: 'breadcrumbs' } @>
					<@ foreach in pagelist @>
						<@ if @{ :i } > 1 @>
							>
						<@ end @>
						<a href="@{ url }">@{ title }</a>
					<@ end @>
				</p>
			<@ end @>
			<nav>
				<ul>
					<@ newPagelist { type: false, excludeHidden: false } @>
					<@ foreach in pagelist @>
						<@ if @{ checkboxShowInFooter } @>
							<li>
								<a href="@{ url }">@{ title }</a>
							</li>
						<@ end @>
					<@ end @>	
				</ul>
			</nav>
			<p>
				&copy; @{ :now | dateFormat('Y') } @{ sitename }
				<br>
				<br>
			</p>
		</footer>
	</div>
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
	@{ itemsFooter }
</body>
</html>