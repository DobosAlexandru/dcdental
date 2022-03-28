@extends('_layouts.app')


@section('content')
<h1 class="vh">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>

@include('_components/top-bar')
<section class="pt-12 pb-16">
    <div class="container mx-auto">
        <div class="lg:flex lg:flex-row lg:items-center">
            <div class="pl-3 md:px-5 xl:pl-5p w-full">
                <div class="max-w-xl mx-auto">
                    <h2 class="text-center">
                        DC dental - Tratament personalizat în echipă
                    </h2>
                </div>
            </div>
        </div>
        <div class="px-3 mt-16 demo-gallery grid gap-4 grid-cols-12">
            <div class="col-span-12 md:col-span-4 md:h-40 lg:h-72">
                <a href="{{asset('images/dc-dental-cabinet-19@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-19@sm.jpg')}}" data-med-size="1600x1200"
                    data-size="2000x1500" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-19@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-4 md:h-40 lg:h-72">
                <a href="{{asset('images/dc-dental-cabinet-20@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-20@sm.jpg')}}" data-med-size="1600x1200"
                    data-size="2000x1500" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-20@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-4 md:h-40 lg:h-72">
                <a href="{{asset('images/dc-dental-cabinet-21@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-21@sm.jpg')}}" data-med-size="1600x1200"
                    data-size="2000x1500" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-21@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-7 md:h-56 lg:h-88">
                <a href="{{asset('images/dc-dental-cabinet-18@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-18@sm.jpg')}}" data-med-size="1200x675"
                    data-size="2000x1125" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-18@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-5 md:h-56 lg:h-88">
                <a href="{{asset('images/dc-dental-cabinet-5@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-5@sm.jpg')}}" data-med-size="750x662"
                    data-size="1583x1397" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-5@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-4 md:h-56 lg:h-88">
                <a href="{{asset('images/dc-dental-cabinet-6@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-6@sm.jpg')}}" data-med-size="750x662"
                    data-size="1586x1400" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-6@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-4 md:h-56 lg:h-88">
                <a href="{{asset('images/dc-dental-cabinet-7@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-7@sm.jpg')}}" data-med-size="750x662"
                    data-size="1500x1324" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-7@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-4 md:h-56 lg:h-88">
                <a href="{{asset('images/dc-dental-cabinet-8@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-8@sm.jpg')}}" data-med-size="750x662"
                    data-size="1500x1324" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-8@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-4 md:h-56 lg:h-88">
                <a href="{{asset('images/dc-dental-cabinet-9@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-9@sm.jpg')}}" data-med-size="750x662"
                    data-size="1500x1324" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-9@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-8 md:h-56 lg:h-88">
                <a href="{{asset('images/dc-dental-cabinet-16@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-16@sm.jpg')}}" data-med-size="1200x675"
                    data-size="1500x844" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-16@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-8 md:h-56 lg:h-88">
                <a href="{{asset('images/dc-dental-cabinet-25@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-25@sm.jpg')}}" data-med-size="1200x675"
                    data-size="1500x844" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-25@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-4 md:h-56 lg:h-88">
                <a href="{{asset('images/dc-dental-cabinet-10@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-10@sm.jpg')}}" data-med-size="750x662"
                    data-size="1500x1324" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-10@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-4 md:h-56 lg:h-88">
                <a href="{{asset('images/dc-dental-cabinet-14@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-14@sm.jpg')}}" data-med-size="750x662"
                    data-size="1500x1324" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-14@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-8 md:h-56 lg:h-88">
                <a href="{{asset('images/dc-dental-cabinet-15@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-15@sm.jpg')}}" data-med-size="1200x675"
                    data-size="1500x844" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-15@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-4 md:h-40 lg:h-72">
                <a href="{{asset('images/dc-dental-cabinet-22@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-22@sm.jpg')}}" data-med-size="1500x1125"
                    data-size="2000x1500" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-22@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-4 md:h-40 lg:h-72">
                <a href="{{asset('images/dc-dental-cabinet-26@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-26@sm.jpg')}}" data-med-size="1500x1125"
                    data-size="2000x1500" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-26@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
            <div class="col-span-12 md:col-span-4 md:h-40 lg:h-72">
                <a href="{{asset('images/dc-dental-cabinet-24@lg.jpg')}}" class="gallery-image h-full"
                    data-med="{{asset('images/dc-dental-cabinet-24@sm.jpg')}}" data-med-size="1500x1125"
                    data-size="2000x1500" data-location="DC dental Iasi">
                    <img src="{{asset('images/dc-dental-cabinet-24@sm.jpg')}}" alt="Clinica DC dental">
                </a>
            </div>
        </div>
    </div>
</section>

<div class="mb-16 max-w-2xl mx-auto text-center ">
    <h4 class="text-3xl font-body font-bold text-black">Zâmbește cu DC dental</h4>
    <div class="mt-5">
        <a href="{{route('programari')}}" title="{{ config('setting.site_name') }} Programari"
            class="inline-flex text-sm font-bold px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 rounded-full uppercase md:tracking-wide hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white">programează
            o consultație</a>
    </div>
</div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
	         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
	            PhotoSwipe keeps only 3 of them in the DOM to save memory.
	            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>


@endsection

@push('scripts')
<script src="{{ mix('js/gallery.js','build') }}"></script>
{{-- Core JS file --}}
<script src="{{ mix('js/photoswipe.min.js','build') }}"></script>

{{-- UI JS file --}}
<script src="{{ mix('js/photoswipe-ui-default.min.js','build') }}"></script>
@endpush
