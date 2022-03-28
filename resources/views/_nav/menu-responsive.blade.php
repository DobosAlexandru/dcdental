<nav id="js-nav-menu" class="nav-menu lg:hidden">
    <div class="nav-menu__inner">
        <ul class="nav-menu__list list-none">
            <li class="nav-menu__item">
                <a
                        title="{{ env('APP_NAME') }} Acasa"
                        href="{{route('home')}}"
                        class="nav-menu__link {{-- {{ $page->isActive('/') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}"
                >Acasa</a>
            </li>
            <li class="nav-menu__item">
                <a
                    title="{{ env('APP_NAME') }} Implant dentar rapid o zi"
                    href="{{route('implant-dentar-rapid-o-zi')}}"
                    class="nav-menu__link {{-- {{ $page->isActive('/implant-dentar-rapid-o-zi') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}"
                >Implant24h</a>
            </li>
            <li class="nav-menu__item relative">
                <a
                    title="{{ env('APP_NAME') }} Servicii"
                    href=""
                    class="nav-menu__link {{-- {{ $page->isActive('/servicii') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}"
                >Servicii</a>
                <button class="accordion__trigger outline-none" aria-controls="services-accordion" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-8 h-8 fill-current" role="presentation">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </button>
                <div class="accordion__content" id="services-accordion" aria-hidden="true">
                    <ul class="accordion__list">

                        <li class="accordion__item">
                            <a href="" title="" class="accordion__link">menu item</a>
                        </li>
                        <li class="accordion__item">
                            <a href="" title="" class="accordion__link">menu item</a>
                        </li>
                        <li class="accordion__item">
                            <a href="" title="" class="accordion__link">menu item</a>
                        </li>
                        <li class="accordion__item">
                            <a href="" title="" class="accordion__link">menu item</a>
                        </li>
                        <li class="accordion__item">
                            <a href="" title="" class="accordion__link">menu item</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-menu__item">
                <a
                    title="{{ env('APP_NAME') }} Tarife"
                    href="{{route('tarife')}}"
                    class="nav-menu__link {{-- {{ $page->isActive('/tarife') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}"
                >Tarife</a>
            </li>
            <li class="nav-menu__item">
                <a
                    title="{{ env('APP_NAME') }} Despre noi"
                    href="{{route('despre-noi')}}"
                    class="nav-menu__link {{-- {{ $page->isActive('/despre-noi') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}"
                >Despre noi</a>
            </li>
            <li class="nav-menu__item">
                <a
                        title="{{ env('APP_NAME') }} Galerie"
                        href="{{route('galerie')}}"
                        class="nav-menu__link {{-- {{ $page->isActive('/galerie') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}"
                >Galerie</a>
            </li>
            <li class="nav-menu__item">
                <a
                    title="{{ env('APP_NAME') }} Contact"
                    href="{{route('contact')}}"
                    class="nav-menu__link {{-- {{ $page->isActive('/contact') ? 'active text-indigo-500' : 'text-indigo-900' }} --}}"
                >Contact</a>
            </li>
        </ul>
    </div>
</nav>
