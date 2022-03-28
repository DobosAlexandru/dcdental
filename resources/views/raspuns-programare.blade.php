@extends('_layouts.app')


@section('content')
    <h1 class="vh">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>
    <section class="py-12">
        <div class="container px-3 md:px-0 mx-auto">
            <h2 class="text-center"> Vă mulțumim pentru mesaj.</h2>
            <p class="mt-5 max-w-2xl mx-auto mt-2 text-center text-lg">Vom lua legatura cu dumneavoastră în cel mai scurt timp posibil. <br>Pentru urgențe vă rugăm sa contactați clinica DC dental cea mai aproape de dumneavoastră.</p>
            <div class="-mx-3 lg:-mx-5 mt-12 md:flex">
                <div class="px-3 lg:px-5 w-full md:w-1/2" id="iasi">
                    <div class="max-w-lg mx-auto xl:mr-0 shadow rounded-lg">
                        <eimage image_url="{{asset('images/dc-dental-cabinet-5.jpg')}}" aspect_ratio="pb-wide" alt="Clinica DC dental" ></eimage>
                        <div class="p-5 md:p-8 bg-white" id="#botosani">
                            <h4 class="text-2xl text-black font-perpetua font-semibold">Iasi - Tg. Cucu</h4>
                            <p class="mt-5 text-black font-body ">Suntem chiar in centru...</p>
                            <div class="mt-5 md:-mx-3 flex flex-wrap">
                                <div class="px-1 md:px-3 w-1/2">
                                    <p class="font-semibold">Adresa</p>
                                    <p class="mt-5 font-light text-base">
                                        Strada Sărărie nr. 6 <br>bloc UJCM, parter <br>cod postal 700079
                                    </p>
                                </div>
                                <div class="px-1 md:px-3 w-1/2">
                                    <p class="font-semibold">Program</p>
                                    <p class="mt-5 font-light text-base">
                                        <span class="block">Luni-Vineri: 11.00 - 19.00</span>
                                        <span class="block">Sambata: inchis</span>
                                        <span class="block">Duminica: inchis</span>
                                    </p>
                                </div>
                                <div class="mt-5 px-1 md:px-3 w-1/2">
                                    <p class="font-semibold">Telefon</p>
                                    <a href="tel:0754242241" class="mt-2 font-light text-base block hover:text-indigo-500" title="Contacteaza-ne la 0754 242 241">0754 242 241</a>
                                </div>
                                <div class="mt-5 px-1 md:px-3 w-1/2">
                                    <p class="font-semibold">Email</p>
                                    <a href="mailto:office@dcdental.ro" class="mt-2 font-light text-base block hover:text-indigo-500" title="Scrie-ne la office@dcdental.ro">office@dcdental.ro</a>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('locatii.iasi')}}" title="{{ config('settings.site_name') }} Iasi" class="w-full block text-sm font-bold text-center px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 rounded-b-lg uppercase md:tracking-wider hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white transform-colors duration-200 ease-in">detalii</a>
                    </div>
                </div id>
                <div class="mt-12 md:mt-0 px-3 lg:px-5 w-full md:w-1/2" id="botosani">
                    <div class="mt-6 md:mt-0 max-w-lg mx-auto xl:ml-0 md:h-full flex flex-col justify-between shadow rounded-lg">
                        <eimage image_url="{{asset('images/dc-dental-botosani.jpeg')}}" aspect_ratio="pb-wide" alt="Clinica DC dental" ></eimage>
                        <div class="p-3 md:p-8 bg-white rounded-b-lg flex-1" id="#botosani">
                            <h4 class="text-2xl text-black font-perpetua font-semibold">Botosani</h4>
                            <p class="mt-5 text-black font-body ">Suntem aproape de tine ...</p>
                            <div class="mt-5 md:-mx-3 flex flex-wrap">
                                <div class="px-1 md:px-3 w-1/2">
                                    <p class="font-semibold">Adresa</p>
                                    <p class="mt-2 font-light text-base">
                                        Str. Primaverii nr.5,
                                        <br>bloc P11, sc. A, ap.1</p>
                                </div>
                                <div class="px-1 md:px-3 w-1/2">
                                    <p class="font-semibold">Program</p>
                                    <p class="mt-2 font-light text-base">
                                        <span class="block">Luni-Vineri: 09.00 - 18.00</span>
                                        <span class="block">Sambata: inchis</span>
                                        <span class="block">Duminica: inchis</span>
                                    </p>
                                </div>
                                <div class="mt-5 px-1 md:px-3 w-1/2">
                                    <p class="font-semibold">Telefon</p>
                                    <a href="tel:0787695411" class="mt-2 font-light text-base block hover:text-indigo-500" title="Contacteaza-ne la 0787 695 411">0787 695 411</a>
                                </div>
                                <div class="mt-5 px-1 md:px-3 w-1/2">
                                    <p class="font-semibold">Email</p>
                                    <a href="mailto:office@dcdental.ro" class="mt-2 font-light text-base block hover:text-indigo-500" title="Scrie-ne la office@dcdental.ro">office@dcdental.ro</a>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('locatii.botosani')}}" title="{{ config('settings.site_name') }} Botosani" class="w-full block text-sm font-bold text-center px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 rounded-b-lg uppercase md:tracking-wider hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white transform-colors duration-200 ease-in">detalii</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
