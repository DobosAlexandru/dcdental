<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ $page['title'] . ' | ' . config('settings.site_name') }}</title>

<link rel="home" href="">
<link rel="icon" type="image/png" href="{{asset('static/images/meta/favicon-32.png')}}">


<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

<!-- Styles -->

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet">



<!-- Scripts -->
<script>
    document.createElement( "picture" );
</script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdn.polyfill.io/v2/polyfill.js?features=Array.from,Array.prototype.find,Element.prototype.classList,Element.prototype.matches,IntersectionObserver,Promise"></script>
<script src="https://cdn.jsdelivr.net/npm/vee-validate@<3.0.0/dist/vee-validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.3/picturefill.min.js" async></script>
@stack('meta')
@stack('head-scripts')

@include('_partials.tracking')
