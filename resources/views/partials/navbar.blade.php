<nav class="navbar navbar-expand-lg bg-body-tertiary">
  

  <div class="container-fluid">
    <a class="navbar-brand" href="/home">OMDB Film</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      @unless($title == 'Register' || $title == 'Login')
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "My Favorite Films") ? 'active' : '' }}" href="/favFilms">My Favorite Film</a>
        </li>
      </ul>
      @endunless
      @auth
      <ul class="navbar-nav ml-auto">
        <span class="navbar-text">
          Welcome {{ auth()->user()->username }}
        </span>
        <form action="/logout" method="post">
          @csrf
          <button type="submit"  class="btn btn-link">Logout</button>
        </form>
      </ul>
      @else
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
      </ul>
      @endauth
    </div>
  </div>
  
   
</nav>