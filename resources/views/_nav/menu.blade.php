<nav class="hidden lg:flex h-full justify-end flex-1">
    <ul class="list-none flex justify-end items-center">
        <li>
            <a href="{{route('home')}}" title="{{ env('APP_NAME') }} - Acasa" class="p-2 text-xl font-serif font-normal  leading-normal hover:text-indigo-500 {{-- {{ $page->isActive('/') ? 'active text-indigo-500' : 'text-indigo-900' }}  --}}">Acasa</a>
        </li>
        <li>
            <a href="{{route('implant-dentar-rapid-o-zi')}}" title="{{ env('APP_NAME') }} - Implant dentar rapid o zi" class="p-2 text-xl font-serif font-normal  leading-normal hover:text-indigo-500{{--  {{ $page->isActive('/implant-dentar-rapid-o-zi') ? 'active text-indigo-500' : 'text-indigo-900' }}  --}}">Implant24h</a>
        </li>
        <li class="xl:ml-3 relative has-dropdown">
            <a href="" title="{{ env('APP_NAME') }} - Servicii" class="flex items-center p-2 text-xl font-serif font-normal  leading-normal hover:text-indigo-700 {{-- {{ $page->isActive('/servicii') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}">Servicii
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-6 h-6 fill-current" role="presentation">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
            </svg>
            </a>
            <ul class="dropdown" id="top-dropdown">

                <li class="dropdown__item">
                    <a href="" title="" class="dropdown__link">menu item</a>
                </li>
                <li class="dropdown__item">
                    <a href="" title="" class="dropdown__link">menu item</a>
                </li>
                <li class="dropdown__item">
                    <a href="" title="" class="dropdown__link">menu item</a>
                </li>
                <li class="dropdown__item">
                    <a href="" title="" class="dropdown__link">menu item</a>
                </li>
                <li class="dropdown__item">
                    <a href="" title="" class="dropdown__link">menu item</a>
                </li>

            </ul>
        </li>
        <li class="xl:ml-3">
            <a href="{{route('tarife')}}" title="{{ env('APP_NAME') }} - Tarife" class="p-2 text-xl font-serif font-normal leading-normal hover:text-indigo-500 {{-- {{ $page->isActive('/tarife') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}">Tarife</a>
        </li>
        <li class="xl:ml-3">
            <a href="{{route('despre-noi')}}" title="{{ env('APP_NAME') }} - Despre Noi" class="p-2 text-xl font-serif font-normal leading-normal hover:text-indigo-500 {{-- {{ $page->isActive('/despre-noi') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}">Despre noi</a>
        </li>
        <li class="xl:ml-3">
            <a href="{{route('galerie')}}" title="{{ env('APP_NAME') }} - Galerie" class="p-2 text-xl font-serif font-normal leading-normal hover:text-indigo-500 {{-- {{ $page->isActive('/galerie') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}">Galerie</a>
        </li>
        <li class="lg:ml-3">
            <a href="{{route('contact')}}" title="{{ env('APP_NAME') }} - Contact" class="p-2 text-xl font-serif font-normal leading-normal hover:text-indigo-500{{--  {{ $page->isActive('/contact') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}">Contact</a>
        </li>
    </ul>
</nav>
