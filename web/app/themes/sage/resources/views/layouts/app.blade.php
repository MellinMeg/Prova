<x-header>
	<x-slot:logo>
		<h5>Meg Supernova</h5>
	</x-slot:logo>

	<x-slot:hamburger>
		{{-- <x-hamburger></x-hamburger> --}}
	</x-slot:hamburger>

	<x-slot:navigation>
		{{-- <a href="mailto:gregoriferrimargherita@gmail.com">gregoriferrimargherita@gmail.com</a> --}}
	</x-slot:navigation>

</x-header>

<main id="main" class="main">
	@yield('content')
</main>

@include('sections.footer')
