<div class="container" id="contact">
  <div class="row">
    <div class="col-lg-6">
      <h4>{{ __('Contact Us') }}</h4>
      <h3>{{ __('Get In Touch') }}</h3>
      <form action="" method="post">
        @csrf
        <div class="row">
          <div class="col-lg-6">
            <input type="text" name="first_name" placeholder="First Name" />
          </div>
          <div class="col-lg-6">
            <input type="text" name="last_name" placeholder="Last Name" />
          </div>
          <div class="col-12">
            <input type="email" name="last_name" placeholder="Email Address" />
          </div>
          <div class="col-12">
            <input type="tel" name="last_name" placeholder="Phone Number" />
          </div>
          <div class="col-12">
            <textarea name="message" cols="30" rows="15" placeholder="message"></textarea>
          </div>
        </div>
        <div class="col">
          <button type="submit">{{ __('Submit') }}</button>
        </div>
      </form>
    </div>
    <div class="col-lg-6">
      <img src="{{ asset('assets/contact.png') }}" alt="contact image" />
    </div>
  </div>
</div>