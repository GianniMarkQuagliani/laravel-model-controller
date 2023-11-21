<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Laravel Movie</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">I miei film</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{route('contacts')}}">Contatti</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
