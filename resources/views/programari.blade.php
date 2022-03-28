@extends('_layouts.app')

@push('head-scripts')
	<script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer></script>
@endpush

@section('content')
<h1 class="vh">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>

@include('_components/top-bar')

<section class="py-12">
	<div class="max-w-2xl mx-auto">
		<div class="mt-12">
			<div class="v-cloak-block">
				<div class="relative pb-portrait block overflow-hidden"></div>
			</div>
		</div>
	</div>
	<contact_modal></contact_modal>
</section>

@endsection
