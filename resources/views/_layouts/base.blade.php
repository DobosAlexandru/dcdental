<!DOCTYPE html>
<html lang="ro">
    <head>
        @yield('head')
    </head>

    <body>

        @yield('app:before')

        <div id="app" v-cloak>
            @yield('app')
        </div>

        @section('app:after')

        <script src="https://cdn.polyfill.io/v2/polyfill.js?features=Array.from,Array.prototype.find,Element.prototype.classList,Element.prototype.matches,IntersectionObserver,Promise"></script>
        <script src="https://unpkg.com/vee-validate"></script>

        <script src="{{asset('js/manifest.js')}}"></script>
        <script src="{{asset('js/vendor.js')}}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
        <script>
            window.cookieconsent.initialise({
              "palette": {
                "popup": {
                  "background": "#CBD5E0"
                },
                "button": {
                  "background": "#5000b7",
                  "text": "#ffffff"
                }
              },
              "theme": "classic",
              "content": {
                "message": "Acest site foloseste cookie-uri pentru a va asigura cea mai buna experienta web.",
                "dismiss": "Am inteles!",
                "link": "Mai multe detalii",
                "href": "https://dcdental.ro/termeni-si-conditii"
              }
            });
        </script>
        @stack('scripts')

    </body>
</html>
