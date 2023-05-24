<header class="bg-dark text-center py-4">
    @include('partials.logo')
    <nav class="nav justify-content-center mt-4">
        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-danger text-white' : '' }}   " href="{{ route('home')}}" aria-current="page">Home</a>
        <a class="nav-link {{ Route::currentRouteName() === 'lightsabers' ? 'bg-danger text-white' : '' }} " href="{{ route('lightsabers')}}">Spade</a>
        <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'bg-danger text-white' : '' }} " href="{{ route('contacts')}}">Contacts</a>
    </nav>
</header>