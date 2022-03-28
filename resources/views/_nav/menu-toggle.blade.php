<button class="menu-button focus:outline-none md:ml-auto" onclick="navMenu.toggle()" role="button" aria-label="open navigation menu">
    <span class="menu-button__bar"></span>
    <span class="menu-button__bar"></span>
    <span class="menu-button__bar"></span>
</button>

@push('scripts')
<script>
    const navMenu = {
        toggle() {
            const menu = document.getElementById('js-nav-menu');
            const menuInner = document.querySelector('.nav-menu__inner');
            const menuButton = document.querySelector('.menu-button');
            document.body.classList.toggle('nav-menu--active');
            menu.classList.toggle('is-visible');
            menuInner.classList.toggle('is-visible');
            menuButton.classList.toggle('is-active');
        },
    }
</script>
@endpush
