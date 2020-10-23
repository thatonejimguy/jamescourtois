<nav id="js-nav-menu" class="hidden nav-menu">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Websites Archive"
                href="/websites"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/websites') ? 'active text-blue' : '' }}"
            >Websites</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Artwork Archive"
                href="/artwork"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/artwork') ? 'active text-blue' : '' }}"
            >Artwork</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"
            >Contact</a>
       
    </ul>
</nav>
