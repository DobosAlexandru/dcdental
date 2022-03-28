@extends('_layouts.base')

@section('head')
	@include('_partials.meta')
@endsection

@section('app:before')
	@include('_partials.outdated-browser')
@endsection

@section('app')

	@include('_partials.header')

	@include('_nav.menu-responsive')

    <main role="main" class="flex-auto w-full">
        @yield('content')
    </main>

	@include('_partials.footer')

@endsection
