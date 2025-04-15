@extends('Doob.masters')
@section('content')
 <!-- CONTACT SECTION -->
 <section id="contact-us" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h5>CONTACT US</h5>
          <h2>Get in Touch</h2>
        </div>
      </div>
     <form action="{{ route('postcontact') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-lg-6 email">
              <input placeholder="Your email" name="email" type="email" id="email"  size="30" required>
            </div>
            <div class="col-12 col-lg-6 email">
              <input placeholder="Subject" name="subject" type="subject" id="subject" size="30" required>
            </div>
          </div>
          <div class="row">
            <div class="col-12 message">
              <textarea id="message" name="message" rows="5" cols="1">Message here...</textarea>
            </div>
            <div class="col-12">
              <div class="hero-btns contact-btn">
                <!-- Send Message Btn -->
                <button type="submit">Send Message</button>

              </div>
            </div>
          </div>
     </form>
    </div>
  </section>

  @endsection








