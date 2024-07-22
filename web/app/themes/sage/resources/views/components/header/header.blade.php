<header class="Header">
	<div class="Header__Wrapper">
		@if (!empty($logo))
			{{ $logo }}
		@endif
		@if (!empty($navigation))
			<div class="Header__Navigation">
				{{ $navigation }}
			</div>
		@endif
		{{-- @if (!empty($hamburger))
			<div class="Header__Hamburger">
				{{ $hamburger }}
			</div>
		@endif --}}
	</div>
</header>
