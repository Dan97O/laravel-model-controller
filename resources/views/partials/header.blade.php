<header>

    <nav class="nav justify-content-center py-5">
        <a class="nav-link {{ Route::currentRouteName() === 'welcome' ? 'bg-danger text-white' : '' }}"
            href="/">Home</a>
        <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'bg-danger text-white' : '' }}"
            href="/movies">Movies</a>
    </nav>

</header>
