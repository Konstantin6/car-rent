@extends('layouts.layout')
@section('hometitle')
Contacts
@endsection


@section('content')

<div class="container col-xl-10 col-md-6 col-lg-10 col-sm-12">
    <section class="my-5 m-0">
      <!-- Section heading -->
     
      <div class="row">
        <!-- Grid column -->
        <div class="col-lg-6 mb-lg-0 mb-4">
          <!-- Form with header -->
          <div class="card">
            <div class="card-body">
              <!-- Header -->
              <div class="form-header blue accent-1">
                <h3 class="mt-2 text-dark font-weight-bold text-center"><i class="fas fa-envelope fa-2x text-dark"></i> Write to us:</h3>
              </div>
              <p class="text-secondary text-center">We'll write rarely, but only the best content.</p>
              <div>
              <!-- Body -->

              @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


              <form action="{{route('contactUs.store')}}" method="POST" name="contact-form">
              <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                <div class="input-group-prepend">
                    <i class="fas fa-instagram "></i>
                </div>
                <input type="text" id="name" name="name" required="required" class="form-control text-secondary" placeholder="Numele"required>
              </div>
              @error('name')
                 <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
              <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                <div class="input-group-prepend">
                    <i class="fa fa-envelope prefix text-white"></i>
                </div>
                <input type="text" id="email" name="email" required="required" class="form-control text-secondary" placeholder="Your email" required="required">
              </div>
              @error('email')
             <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                <div class="input-group-prepend">
                    <i class="fa fa-tag prefix text-white"></i>
                </div>
                <input type="text" id="subject" required="required" name="subject" class="form-control text-secondary" placeholder="Subject"required>
              </div>
              @error('subject')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                <div class="input-group-prepend">
                    <i class="fas fa-pencil-alt prefix text-white"></i>
                </div>
                <textarea id="text" name="text" required="required"class="form-control md-textarea text-secondary" rows="3" required="required"placeholder="Write message"></textarea>
              </div>
              @error('text')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <label class="md-form input-group flex-nowrap mb-3 shadow-sm" required="required" for="cars">Choose a car:</label>
             <select id="cars" name="department" class="required">
            <option selected=""disabled="disabled" value=""> Please Select </option>
           <option value="authentification">I have some problems with authentification</option>
           <option value="connection">Problems with Connection</option>
           <option value="contability">Contability</option>
            <option value="administration">Administration</option>
            <option value="technique">Technical Department</option>
            <option value="other">Other</option>
            </select>
           @error('department')
           <div class="alert alert-danger">{{ $message }}</div>
            @enderror
           <div class="form-check">
             <input class="form-check-input" required="required" type="checkbox" value="1" name="readTerms" id="readTerms">
             <label class="form-check-label text-secondary" for="defaultCheck1">I have read the rules </label>
                </div>
                @error('readTerms')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

              <div class="text-center">
                  @csrf
                <button class="btn btn-dark">Submit</button>
              </div>
            </div>
            </form>
          </div><!-- Form with header -->
        </div>
<!-- Grid column -->
        <div class="col-lg-6"><!--Google map-->
          <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2720.3731687696168!2d28.846072615610048!3d47.01327967914982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97d63c1de9def%3A0xeb9c997a538fbe17!2sInchiriere%20auto%20Chisinau%20Arenda%20masini%20Moldova!5e0!3m2!1sen!2s!4v1628855268493!5m2!1sen!2s" width="600" height="486" style="border:0;" allowfullscreen="" loading="lazy"></iframe>          </div>
          <!-- Buttons-->
          
          </div>
        </div><!-- Grid column -->
      </div><!-- Grid row -->
    </section><!-- Section: Contact v.1 -->
    </div>
    <hr />
@endsection