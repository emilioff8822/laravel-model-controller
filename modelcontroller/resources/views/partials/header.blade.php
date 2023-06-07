<header class="p-3">
    <div class="container">
        <ul class="nav nav-tabs">

            <li class="nav-item active">
                <a href="{{ route('home') }}"
                    class="nav-link active {{ Route::currentRouteName() == 'home' ? 'active' : '' }} " aria-current="page"
                    href="#">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('movies') }}"
                    class="nav-link {{ Route::currentRouteName() == 'movies' ? 'active' : '' }}" href="#">Elenco
                    Film</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contacts') }}"
                    class="nav-link {{ Route::currentRouteName() == 'contacts' ? 'active' : '' }}"
                    href="#">Contatti</a>
            </li>

        </ul>

    </div>



</header>
