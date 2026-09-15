<nav class="navbar">
  <div class="container nav-inner">
    <a class="brand" href="{{ route('home') }}">
      <img src="{{ asset('images/robotrac-logo.jpg') }}" alt="ROBOTRAC">
    </a>
    <button class="menu-toggle" aria-label="Toggle navigation">☰</button>
    <div class="nav-links" id="navLinks">
      <a href="{{ route('home') }}">Home</a>
      <a href="{{ route('products') }}">Solutions</a>
      <a href="{{ route('about') }}">About</a>
      <a href="{{ route('contact') }}">Contact</a>
      <a class="nav-cta" href="tel:+919881510419">Call Now</a>
    </div>
  </div>
</nav>
