<nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom border-light border-1">
    <div class="container ">
      <a class="navbar-brand thuziak" href="#">Logo vel omse tah hian</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end thuziak " id="navbarNav">
        <ul class="navbar-nav ">
          <li class="border-start border-light border-3"></li>
          <li class="nav-item border-end border-light border-3">
            <a class="nav-link active thuziak mx-2 " aria-current="page" href="/"><i class="fas fa-home mx-1"></i>Home</a>
          </li>
          @auth
          <li class="nav-item border-end border-light border-3">
            <a class="nav-link active thuziak mx-2" aria-current="page" href="{{route('logout')}}"><i class="fas fa-sign-in-alt mx-1"></i>Logout</a>
          </li>
          @endauth
          @guest
          <li class="nav-item border-end border-light border-3">
            <a class="nav-link active thuziak mx-2" aria-current="page" href="{{ route('register') }}"><i class="fas fa-door-open mx-1"></i>Register</a>
          </li>
          <li class="nav-item border-end border-light border-3">
            <a class="nav-link active thuziak mx-2" aria-current="page" href="{{ route('login') }}"><i class="fas fa-sign-in-alt mx-1"></i>Login</a>
          </li>
          @endguest
         
        </ul>
      </div>
    </div>
  </nav>
            
            
          
        