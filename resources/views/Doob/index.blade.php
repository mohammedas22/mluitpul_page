   @extends('Doob.masters')
   @section('content')

    <!-- HERO SECTION -->
    <div class="container-fluid hero">
        <img src="{{asset('Doob/images/hero.svg')}}" alt="">
        <div class="container">
          <!-- Hero Title -->
          <h1>The Spirit of<br>Digital Agency.</h1>
          <!-- Hero Title Info -->
          <p>Vestibulum ac diam sit amet quam vehicula elementum<br> amet est on dui. Nulla porttitor accumsan tincidunt.</p>
          <div class="hero-btns">
            <!-- Hero Btn First -->
            <a data-scroll href="#about-us">More About us</a>
            <!-- Hero Btn Second -->
            <a data-scroll href="#contact-us">Get in Touch.</a>
          </div>
        </div>
      </div>
    </header>
 
    @endsection
