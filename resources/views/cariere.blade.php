@extends('_layouts.app')


@push('head-scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>
@endpush

@section('content')

    <section class="relative">
        <div class="mx-auto max-w-7xl w-full pt-12 pb-12 lg:pb-20 text-center lg:py-48 lg:text-left">
            <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
                <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                    Vino în echipa
                    <br>
                    <span class="text-indigo-700">DC dental</span>
                </h2>
                <p class="mt-3 max-w-md mx-auto text-lg text-gray-800 sm:text-xl md:mt-5 md:max-w-3xl">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi architecto deserunt dignissimos eveniet excepturi fugiat, molestias mollitia natus odio perferendis quae quidem sed unde ut vero
                </p>
                <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="mailto:office@dcdental.ro" target="_blank" title="Trimite cv-ul la office@dcdental.ro"
                           class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-700 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            Trimite CV
                        </a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="tel:00754242441" title="Suna la 0754242441" target="_blank" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-white  border-indigo-700 focus:outline-none hover:border-ingigo-500 focus:border-indigo-500 focus:shadow-outline-indigo hover:border-indigo-500 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">

                                </path>
                            </svg>
                            (+40) 754 242 241
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
            <img class="absolute inset-0 w-full h-full object-cover rounded-l-xl" src="{{asset('images/dc-dental-locatii-1.jpeg')}}" alt="Woman on her phone">
        </div>
    </section>

    <section class="bg-indigo-800 mt-12 lg:mt-16" x-data="{ openPanel: 1}">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-white sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl text-center">
                    Oportunități
                </h2>
                <p class="mt-3 max-w-md mx-auto text-lg text-gray-100 sm:text-xl md:mt-5 md:max-w-3xl text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aperiam architecto assumenda atque ducimus, maxime natus necessitatibus perferendis, quisquam recusandae repellendus sapiente sit! Aliquid
                </p>
                <div class="mt-12 border-t border-gray-200 pt-6">
                    <dl>
                        <div>
                            <dt class="text-2xl leading-7">
                                <!-- Expand/collapse question button -->
                                <button x-on:click="openPanel = (openPanel === 1 ? null : 1)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900">
                                    <span class="font-medium text-white">
                                        Medic stomatolog
                                    </span>
                                    <span class="ml-6 h-7 flex items-center">
                                        <svg class="h-6 w-6 transform rotate-0" x-state:on="Open" x-state:off="Closed" x-bind:class="{ '-rotate-180': openPanel === 2, 'rotate-0': !(openPanel === 2) }"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12" x-show="openPanel === 1">
                                <p class="text-base leading-6 text-gray-200">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias assumenda dicta eligendi eos, ipsa iusto libero maxime mollitia officia provident quasi, repellendus reprehenderit saepe sit, totam ullam ut.
                                </p>
                            </dd>
                        </div>
                        <div class="mt-6 border-t border-gray-200 pt-6">
                            <div>
                                <dt class="text-2xl leading-7">
                                    <!-- Expand/collapse question button -->
                                    <button x-on:click = "openPanel = (openPanel === 2 ? null : 2)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900">
                                        <span class="font-medium text-white">
                                          Doctor stomatolog pediatru
                                        </span>
                                        <span class="ml-6 h-7 flex items-center">
                                            <svg class="h-6 w-6 transform rotate-0" x-state:on="Open" x-state:off="Closed" x-bind:class="{ '-rotate-180': openPanel === 2, 'rotate-0': !(openPanel === 2) }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12" x-show="openPanel === 2">
                                    <p class="text-base leading-6 text-gray-200">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda culpa, deleniti doloremque ea hic illo incidunt ipsa ratione saepe. Asperiores autem corporis cumque dolor est fuga nesciunt perspiciatis voluptatibus?
                                    </p>
                                </dd>
                            </div>
                        </div>
                        <div class="mt-6 border-t border-gray-500 pt-6">
                            <div>
                                <dt class="text-2xl leading-7">
                                    <!-- Expand/collapse question button -->
                                    <button x-on:click = "openPanel = (openPanel === 3 ? null : 3)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900">
                                        <span class="font-medium text-white">
                                          Medic specialist implantologie
                                        </span>
                                        <span class="ml-6 h-7 flex items-center">
                                            <svg class="h-6 w-6 transform rotate-0" x-state:on="Open" x-state:off="Closed" x-bind:class="{ '-rotate-180': openPanel === 3, 'rotate-0': !(openPanel === 3) }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12" x-show="openPanel === 3">
                                    <p class="text-base leading-6 text-gray-200">
                                        You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aut tempora vitae odio inventore fuga aliquam nostrum quod porro.
                                        Delectus quia facere id sequi expedita natus.
                                    </p>
                                </dd>
                            </div>
                        </div>
                        <div class="mt-6 border-t border-gray-500 pt-6">
                            <div>
                                <dt class="text-2xl leading-7">
                                    <!-- Expand/collapse question button -->
                                    <button x-on:click = "openPanel = (openPanel === 4 ? null : 4)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900">
                                        <span class="font-medium text-white">
                                          Medic specialist ortodont
                                        </span>
                                        <span class="ml-6 h-7 flex items-center">
                                            <svg class="h-6 w-6 transform rotate-0" x-state:on="Open" x-state:off="Closed" x-bind:class="{ '-rotate-180': openPanel === 4, 'rotate-0': !(openPanel === 4) }"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12" x-show="openPanel === 4">
                                    <p class="text-base leading-6 text-gray-200">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dolorem maxime natus numquam optio placeat, quos ratione totam. Dolore eum incidunt maiores minima sit suscipit, voluptas voluptatibus. Dolorem, nostrum!
                                    </p>
                                </dd>
                            </div>
                        </div>
                        <div class="mt-6 border-t border-gray-200 pt-6">
                            <div>
                                <dt class="text-2xl leading-7">
                                    <!-- Expand/collapse question button -->
                                    <button x-on:click = "openPanel = (openPanel === 5 ? null : 5)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900">
                                        <span class="font-medium text-white">
                                          Asistent stomatologie
                                        </span>
                                        <span class="ml-6 h-7 flex items-center">
                                            <svg class="h-6 w-6 transform rotate-0" x-state:on="Open" x-state:off="Closed" x-bind:class="{ '-rotate-180': openPanel === 5, 'rotate-0': !(openPanel === 5) }"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12" x-show="openPanel === 5">
                                    <p class="text-base leading-6 text-gray-200">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dolorem maxime natus numquam optio placeat, quos ratione totam. Dolore eum incidunt maiores minima sit suscipit, voluptas voluptatibus. Dolorem, nostrum!
                                    </p>
                                </dd>
                            </div>
                        </div>
                    </dl>
                </div>
                <div class="bg-indigo-800">
                    <div class="max-w-2xl mx-auto text-center py-12 px-4 sm:pt-20 sm:px-6 lg:px-8">
                        <h2 class="text-3xl leading-9 font-extrabold text-white sm:text-4xl sm:leading-10">
                            <span class="block">Boost your career.</span>
                            <span class="block">Aplica pentru o cariera la DC Dental</span>
                        </h2>
                        <p class="mt-4 text-lg leading-6 text-indigo-200">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
                        <div class="mt-8 rounded-md shadow max-w-xs mx-auto">
                            <a href="mailto:office@dcdental.ro" target="_blank" title="Trimite cv-ul la office@dcdental.ro"
                               class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-white hover:shadow-xl focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Trimite CV
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-8 md:py-12">
        <div class="container mx-auto px-3 lg:px-5">
            <h2 class="text-center"> Clinicile DC Dental</h2>
            <div class="-mx-3 lg:-mx-5 mt-12 md:flex">
                <div class="px-3 lg:px-5 w-full md:w-1/2">
                    <div class=" max-w-lg mx-auto xl:mr-0 shadow rounded-lg">
                        <eimage image_url="{{asset('images/dc-dental-cabinet-5.jpg')}}" aspect_ratio="pb-wide" alt="dc dental clinic"></eimage>
                        <div class="p-5 md:p-8 bg-gray-100" id="#iasi">
                            <h4 class="text-2xl text-black font-perpetua font-semibold">Iasi - Tg. Cucu</h4>
                            <p class="mt-5 text-black font-body ">Suntem chiar in centru...</p>
                            <div class="mt-5 -mx-3 flex flex-start">
                                <div class="mx-3 w-1/2">
                                    <p class="font-semibold">Adresa</p>
                                    <p class="mt-5 font-light text-base">
                                        Strada Sărărie nr. 6 <br>bloc UJCM, parter <br>cod postal 700079
                                    </p>
                                </div>
                                <div class="mx-3 w-1/2">
                                    <p class="font-semibold">Program</p>
                                    <p class="mt-5 font-light text-base">
                                        <span class="block">Luni-Vineri: 11.00 - 19.00</span>
                                        <span class="block">Sambata: inchis</span>
                                        <span class="block">Duminica: inchis</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('locatii.iasi')}}" title="{{ config('settings.site_name') }} Botosani"
                           class="w-full block text-sm font-bold text-center px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 rounded-b-lg uppercase md:tracking-wider hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white transform-colors duration-200 ease-in">detalii</a>
                    </div>
                </div>
                <div class="mt-12 md:mt-0 px-3 lg:px-5 w-full md:w-1/2">
                    <div class="mt-6 md:mt-0 max-w-lg mx-auto xl:ml-0 md:h-full flex flex-col justify-between shadow rounded-lg">
                        <eimage image_url="{{asset('images/dc-dental-botosani.jpeg')}}" aspect_ratio="pb-wide" alt="Clinica DC Dental"></eimage>
                        <div class="p-5 md:p-8 bg-gray-100 rounded-b-lg flex-1" id="#botosani">
                            <h4 class="text-2xl text-black font-perpetua font-semibold">Botosani</h4>
                            <p class="mt-5 text-black font-body ">Suntem aproape de tine ...</p>
                            <div class="mt-5 -mx-3 flex flex-start">
                                <div class="mx-3 w-1/2">
                                    <p class="font-semibold">Adresa</p>
                                    <p class="mt-5 font-light text-base">
                                        Str. Primaverii nr.5,
                                        <br>bloc P11, sc. A, ap.1</p>
                                </div>
                                <div class="mx-3 w-1/2">
                                    <p class="font-semibold">Program</p>
                                    <p class="mt-5 font-light text-base">
                                        <span class="block">Luni-Vineri: 09.00 - 18.00</span>
                                        <span class="block">Sambata: inchis</span>
                                        <span class="block">Duminica: inchis</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('locatii.botosani')}}" title="{{ config('settings.site_name') }} Botosani"
                           class="w-full block text-sm font-bold text-center px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 rounded-b-lg uppercase md:tracking-wider hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white transform-colors duration-200 ease-in">detalii</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
