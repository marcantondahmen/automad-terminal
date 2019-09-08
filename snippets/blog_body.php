<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<main>
	<@ newPagelist { 
		excludeCurrent: true,
		template: @{ templateFilter }, 
		filter: @{ ?filter }, 
		search: @{ ?search },
		sort: 'date desc',
		limit: @{ itemsPerPage | def(10) },
		page: @{ ?page | def(1) } 
	} @>
	<section>
		<header>
			<br>
			@{ textTeaser | markdown }
			<@ if not @{ checkboxHideSearch } @>	
				<form action="" class="form-group">
					<input 
					type="search" 
					name="search" 
					placeholder="@{ placeholderSearch | def ('Search') }"
					value="@{ ?search }"
					>
				</form>
			<@ end @>
			<@ if not @{ checkboxHideFilters } @>
				<@ if not @{ ?filter } @>
					<a href="@{ url }"><strong>@{ labelShowAll | def ('Show all') }</strong></a>
				<@ else @>
					<a href="@{ url }">@{ labelShowAll | def ('Show all') }</a>
				<@ end @>
				|
				<@ foreach in filters @>
					<a 
					href="?<@ queryStringMerge { filter: @{ :filter } } @>"
					><@ if @{ ?filter } = @{ :filter} @>
						<strong>#@{ :filter }</strong>
					<@ else @>
						#@{ :filter }
					<@ end @></a>
				<@ end @>
				<br>
			<@ end @>
			<@ if not @{ checkboxHideFilters } or not @{ checkboxHideSearch } @>
				<br><br>
			<@ end @>
		</header>
	</section>
	<section>
		<@ foreach in pagelist @>
			<@ if @{ :i } > 1 @>
				<hr>	
			<@ end @>
			<a href="@{ url }"><h2>@{ title }</h2></a>
			<p>
				<@ date.php @>
				<@ if @{ tags } @>
					|
					<@ foreach in tags @>
						<a href="?filter=@{ :tag }">#@{ :tag }</a>
					<@ end @>
				<@ end @>
			</p>
			@{ textTeaser | markdown }
			<a href="@{ url }">
				@{ labelMore | def ('More &gt;') }
			</a>
		<@ end @>
	</section>
	<section>
		<br>
		<br>
		<br>
		<@ set { :page: @{ ?page | def (1) } } @>
		<@ if @{ :page } > 1 @>
			<a href="?<@ queryStringMerge { page: @{ :page | -1 } } @>">&lt;</a>
		<@ end @>
		<@ if @{ :paginationCount } > 1 @>
			<@ for @{ :page | -3 } to @{ :page | +3 } @>
				<@ if @{ :i } > 0 and @{ :i } <= @{ :paginationCount } @>
					<@ if @{ :i } = @{ :page } @>
						@{ :i }
					<@ else @>
						<a href="?<@ queryStringMerge { page: @{ :i } } @>">@{ :i }</a>
					<@ end @>
				<@ end @>
			<@ end @>
		<@ end @>
		<@ if @{ :page } < @{ :paginationCount } @>
			<a href="?<@ queryStringMerge { page: @{ :page | +1 } } @>">&gt;</a>
		<@ end @>
	</section>
</main>