@extends('_layouts.app')

@section('content')

<section class="relative">
    <div class="hero-carousel"
        data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false, "prevNextButtons": false, "autoplay" :true }'>
        <div class="carousel-cell w-full">
            <div class="relative w-full">
                <responsive_image img_sm="{{ asset('images/dc-dental-6@sm.jpg') }}"
                    img_md="{{ asset('images/dc-dental-6@md.jpg')}}" img_xl="{{ asset('images/dc-dental-6@xl.jpg')}}"
                    img_lg="{{ asset('images/dc-dental-6@lg.jpg')}}" src="{{ asset('images/dc-dental-6@xl.jpg')}}"
                    aspect_ratio="pb-hero-mobile md:pb-hero" class="z-10" alt="Clinica DC dental">
                </responsive_image>
                <div class="hero-bg-color"></div>
                <div class="hero-content">
                    <div class="hero-content__inner">
                        <h2 class="hero-heading ">Centrul de implantologie</h2>
                        <div class="mt-5 md:mt-0 text-center">
                            <a href="{{route('despre-noi')}}" title="{{env('APP_NAME')}} Centrul de implantologie"
                                class="hero-button">află mai multe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-cell w-full">
            <div class="relative w-full">
                <responsive_image img_sm="{{ asset('images/dc-dental-7@sm.jpg')}}"
                    img_md="{{ asset('images/dc-dental-7@md.jpg')}}" img_lg="{{ asset('images/dc-dental-7@lg.jpg')}}"
                    img_xl="{{ asset('images/dc-dental-7@xl.jpg')}}" src="{{ asset('images/dc-dental-7@xl.jpg')}}"
                    aspect_ratio="pb-hero-mobile md:pb-hero" class="z-10" alt="Clinica DC dental">
                </responsive_image>
                <div class="hero-bg-color"></div>
                <div class="hero-content">
                    <div class="hero-content__inner">
                        <h2 class="hero-heading normal-case">DC dental - Fast & Fixed</h2>
                        <div class="mt-5 md:mt-0 text-center">
                            <a href="{{route('implant-dentar-rapid-o-zi')}}" title="{{env('APP_NAME')}} Implant 24h" class="hero-button">află mai
                                multe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-cell w-full">
            <div class="relative w-full">
                <responsive_image img_sm="{{asset('images/dc-dental-5@sm.jpg')}}"
                    img_md="{{asset('images/dc-dental-5@md.jpg')}}" img_lg="{{asset('images/dc-dental-5@lg.jpg')}}"
                    img_xl="{{asset('images/dc-dental-5@xl.jpg')}}" src="{{ asset('images/dc-dental-5@xl.jpg')}}"
                    aspect_ratio="pb-hero-mobile md:pb-hero" class="z-10" alt="Clinica DC dental">
                </responsive_image>
                <div class="hero-bg-color"></div>
                <div class="hero-content">
                    <div class="hero-content__inner">
                        <h2 class="hero-heading ">Chirurgie oro-maxilo-facială</h2>
                        <div class="mt-5 md:mt-0 text-center">
                            <a href="{{route('programari')}}" title="{{env('APP_NAME')}} Programare" class="hero-button">programează
                                o consultație</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-8 md:pt-12">
    <div class="xl:w-5/6 mx-auto">
        <div class="md:flex md:flex-row md:justify-center md:items-center">
            <div class="px-5 w-full md:w-3/5">
                <div class="relative block pb-wide shadow-md">
                    <iframe
                        src="https://www.youtube.com/embed/hhrCpjvU28Y?iv_load_policy=3&amp;enablejsapi=0&amp;wmode=opaque&amp;feature=player_embedded&amp;autoplay=0&amp;loop=1&amp;controls=1&amp;modestbranding=1&amp;autohide=1&amp;showinfo=0&amp;rel=0"
                        allowfullscreen="true" id="ytplayer"
                        style="position: absolute;width: 100%; height: 100%; top: 0; left: 0; z-index: 20"></iframe>
                </div>
            </div>
            <div class="mt-10 text-center md:mt-0 px-5 xl:px-8 w-full md:w-2/5">
                <div class="flex flex-col items-center md:items-end  md:text-right">
                    <h2>Clinica <br />DC dental</h2>
                    <p class="mt-8 text-indigo-400 text-lg leading-normal font-normal max-w-xl ml-auto">Centrul de
                        implantologie DC dental oferă tratamente la cele mai înalte standarde, într-un ambient placut,
                        steril, dotat cu echipamente de ultimă generație.</p>
                    <div class="mt-6">
                        <a href="{{route('implant-dentar-rapid-o-zi')}}" title="{{ env('APP_NAME') }} Implant24h"
                            class="px-3 md:px-0 inline-flex text-base lg:text-sm font-semibold leading-snug text-indigo-600 hover:text-indigo-500 tracking-wide uppercase">află
                            mai multe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-12">
    <div class="main-carousel"
        data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false, "prevNextButtons": false, "autoPlay": 2500, "pauseAutoPlayOnHover": true, "freeScroll": true }'>
        <div class="carousel-cell w-full xl:w-1/4 max-w-xl">
            <div class=" block relative overflow-hidden leading-none overflow-hidden pb-wide">
                <img src="{{ asset('images/dc-dental-cabinet-7.jpg')}}"
                    class="absolute absolute-center object-center min-h-full" alt="Clinica DC dental">
            </div>
        </div>
        <div class="carousel-cell w-full xl:w-1/4 max-w-xl">
            <div class=" block relative overflow-hidden leading-none overflow-hidden pb-wide">
                <img src="{{asset('images/dc-dental-cabinet-11.jpg')}}"
                    class="absolute absolute-center object-center min-h-full" alt="Clinica DC dental">
            </div>
        </div>
        <div class="carousel-cell w-full xl:w-1/4 max-w-xl">
            <div class=" block relative overflow-hidden leading-none overflow-hidden pb-wide">
                <img src="{{ asset('images/dc-dental-cabinet-5.jpg')}}"
                    class="absolute absolute-center object-center min-h-full" alt="Clinica DC dental">
            </div>
        </div>
        <div class="carousel-cell w-full xl:w-1/4 max-w-xl">
            <div class=" block relative overflow-hidden leading-none overflow-hidden pb-wide">
                <img src="{{ asset('images/dc-dental-cabinet-8.jpg')}}"
                    class="absolute absolute-center object-center min-h-full" alt="Clinica DC dental">
            </div>
        </div>
        <div class="carousel-cell w-full xl:w-1/4 max-w-xl">
            <div class=" block relative overflow-hidden leading-none overflow-hidden pb-wide">
                <img src="{{ asset('images/dc-dental-cabinet-2.jpg')}}"
                    class="absolute absolute-center object-center min-h-full" alt="Clinica DC dental">
            </div>
        </div>
        <div class="carousel-cell w-full xl:w-1/4 max-w-xl">
            <div class=" block relative overflow-hidden leading-none overflow-hidden pb-wide">
                <img src="{{ asset('images/dc-dental-cabinet-6.jpg')}}"
                    class="absolute absolute-center object-center min-h-full" alt="Clinica DC dental">
            </div>
        </div>
        <div class="carousel-cell w-full xl:w-1/4 max-w-xl">
            <div class=" block relative overflow-hidden leading-none overflow-hidden pb-wide">
                <img src="{{ asset('images/dc-dental-cabinet-3.jpg')}}"
                    class="absolute absolute-center object-center min-h-full" alt="Clinica DC dental">
            </div>
        </div>
        <div class="carousel-cell w-full xl:w-1/4 max-w-xl">
            <div class=" block relative overflow-hidden leading-none overflow-hidden pb-wide">
                <img src="{{asset('images/dc-dental-cabinet-10.jpg')}}"
                    class="absolute absolute-center object-center min-h-full" alt="Clinica DC dental">
            </div>
        </div>
    </div>
</section>

<section class="pt-12">
    <div class="xl:w-5/6 mx-auto">
        <div class="md:flex md:flex-row md:justify-center md:items-center">
            <div class="px-5 xl:px-8 w-full md:w-3/5 text-center ">
                <h2>Implanturi și dinți ficsi <br />în aceeași zi</h2>
                <p class="mt-8 text-indigo-400 text-lg leading-normal font-normal max-w-xl mx-auto">Specialiștii în
                    implantologie și chirurgie Oro-Maxilo-Faciala vă oferă cele mai sigure și performante servicii.</p>
                <div class="mt-6">
                    <a href="/implant24h" title="{{ env('APP_NAME') }} Implant24h"
                        class="px-3 md:px-0 inline-flex text-base lg:text-sm font-semibold leading-snug text-indigo-600 hover:text-indigo-500 tracking-wide uppercase">află
                        mai multe</a>
                </div>
            </div>
            <div class="px-5 w-full md:w-2/5">
                <video-component src="{{asset('video/implant.mp4')}}" background="" aspect_ratio="pb-square">
                </video-component>
            </div>
        </div>
    </div>
</section>

<section class="relative bg-blue-50 pb-10 md:pb-0">
    <div class="md:flex md:flex-row-reverse md:justify-center md:items-center">
        <div class="ml-auto w-full md:w-2/5">
            <eimage image_url="{{asset('images/dcdental-cristian-drochioi.jpg')}}" alt="Dr. Drochioi Cristian"
                aspect_ratio="pb-landscape"></eimage>
        </div>
    </div>
    <div class="w-full md:mt-0 md:absolute top-0 h-full">
        <div class="w-full xl:w-5/6 mx-auto h-full">
            <div class="flex flex-col justify-center h-full">
                <div class="mt-10 md:mt-0 px-5 w-full md:w-3/5 text-center md:text-left">
                    <h2>Dr. Drochioi Cristian</h2>
                    <p class="mt-8 md:mt-5 lg:mt-8 text-indigo-400 text-lg leading-normal font-normal max-w-xl mr-auto">
                        Asistent Univ. Dr. Drochioi Cristian coordonează <span class="font-bold">Clinica DC dental
                        </span> unde efectuează consultații și o gamă variată de intervenții chirurgicale în sfera
                        oro-maxilo-facială.</p>
                    <div class="mt-5 md:mt-3">
                        <a href="/despre-noi" title="{{ env('APP_NAME') }} - Afla mai multe DC dental"
                            class="px-3 md:px-0 inline-flex text-base lg:text-sm font-semibold leading-snug text-indigo-600 hover:text-indigo-500 tracking-wide uppercase">află
                            mai multe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div id="app">
        <example-component></example-component>
    </div>
</section>
@endsection
