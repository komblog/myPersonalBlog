<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="  #navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    Menu

      <i class="fa fa-bars"></i>

    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav ml-auto">

        <li class="nav-item">

          <a class="nav-link" href="{{ route('home') }}">Home</a>

        </li>
        
        <li class="nav-item">

          <a class="nav-link" href="about.html">About</a>

        </li>
    
        <li class="nav-item">

          <a class="nav-link" href="contact.html">Contact</a>

        </li>

        @if(Auth::check())

          <li class="nav-item">

            <a class="nav-link ml-auto" href="contact.html">{{ Auth::user()->name }}</a>

          </li>

        @endif
      
      </ul>

    </div>

  </div>

</nav>

