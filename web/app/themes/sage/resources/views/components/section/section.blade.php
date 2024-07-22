<section id="{{ $id ? $id : false }}" {{ $attributes->class(['Section']) }}>
	<div class="Section__Wrapper">
		{{ $slot }}
	</div>
</section>
