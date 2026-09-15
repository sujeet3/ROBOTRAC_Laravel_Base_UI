@extends('layouts.app')
@section('title','ROBOTRAC | Electric • Robotic • Autonomous')
@section('description','ROBOTRAC Tractor India Private Limited — Electric, Robotic and Autonomous mobility solutions.')

@section('content')
<section class="hero" id="home">
  <div class="container hero-grid">
    <div class="hero-copy reveal">
      <div class="eyebrow">ROBOTRAC TRACTOR INDIA PRIVATE LIMITED</div>
      <h1>Mobility for a <span>smarter</span> future.</h1>
      <p>Electric, robotic and autonomous mobility solutions designed for the changing needs of agriculture, transport and modern Indian businesses.</p>
      <div class="actions">
        <x-button href="{{ route('contact') }}" variant="primary">Request Enquiry →</x-button>
        <x-button href="{{ $website }}" variant="dark" target="_blank">Explore ROBOTRAC</x-button>
      </div>
    </div>
    <div class="hero-image reveal"><img src="{{ asset('images/vehicle-1.jpg') }}" alt="ROBOTRAC electric utility vehicle"></div>
  </div>
</section>

<section id="solutions">
  <div class="container">
    <x-section-heading eyebrow="CORE PLATFORM" title="One brand. Three technology pillars." text="A scalable base UI for ROBOTRAC's electric, robotic and autonomous product ecosystem."/>
    <div class="cards three">
      <article class="card reveal"><span class="number">01 / ELECTRIC</span><h3>Electric Mobility</h3><p>Modern electric platforms for passenger, utility and commercial applications.</p></article>
      <article class="card reveal"><span class="number">02 / ROBOTIC</span><h3>Robotic Systems</h3><p>Technology-led systems designed around automation and intelligent operation.</p></article>
      <article class="card reveal"><span class="number">03 / AUTONOMOUS</span><h3>Autonomous Future</h3><p>A foundation for connected and increasingly autonomous mobility solutions.</p></article>
    </div>
  </div>
</section>

<section class="soft">
  <div class="container">
    <x-section-heading eyebrow="FEATURED VEHICLES" title="Designed to move people and goods." text="Reusable product gallery UI ready for dynamic Laravel data."/>
    <div class="gallery">
      <div><img src="{{ asset('images/vehicle-2.jpg') }}" alt="ROBOTRAC vehicle"></div>
      <div class="gallery-stack"><img src="{{ asset('images/vehicle-3.jpg') }}" alt="ROBOTRAC cargo vehicle"><img src="{{ asset('images/vehicle-4.jpg') }}" alt="ROBOTRAC yellow vehicle"></div>
    </div>
  </div>
</section>

<section class="dark-section">
  <div class="container about-grid">
    <x-section-heading eyebrow="ABOUT ROBOTRAC" title="Building the next generation of Indian mobility."/>
    <div class="dark-copy reveal"><p>ROBOTRAC Tractor India Private Limited is a Paithan, Maharashtra-based company focused on modern mobility and agricultural technology.</p><p>Our brand vision is expressed through <strong>Electric</strong>, <strong>Robotic</strong> and <strong>Autonomous</strong> technology.</p></div>
  </div>
</section>

<section>
  <div class="container">
    <x-section-heading eyebrow="LEADERSHIP" title="A team built around execution."/>
    <div class="cards four">
      <article class="card reveal"><span class="number">MANAGING DIRECTOR</span><h3>Ashok Janardhan Argade</h3><p>Strategic leadership and business growth.</p></article>
      <article class="card reveal"><span class="number">SERVICE DIRECTOR</span><h3>Vijay Vishnupant Gaikwad</h3><p>Service operations and customer support.</p></article>
      <article class="card reveal"><span class="number">SALES DIRECTOR</span><h3>Raju Tulshiram Bhagaywant</h3><p>Sales development and market expansion.</p></article>
      <article class="card reveal"><span class="number">MARKETING DIRECTOR</span><h3>Ramdhan Bhauvsing Kawal</h3><p>Brand development and market engagement.</p></article>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container cta reveal"><div><div class="eyebrow">START A CONVERSATION</div><h2>Ready for smarter mobility?</h2><p>Products, dealership, service and business enquiries.</p></div><div class="actions"><x-button href="tel:+919881510419" variant="primary">{{ $phone }}</x-button><x-button href="mailto:ceo@robotrac.co.in" variant="light">Email CEO</x-button></div></div>
</section>
@endsection
