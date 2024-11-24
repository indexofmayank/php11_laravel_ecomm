@extends('layout')
@section('title')
    Home - shopnow
@endsection
@section('keywords')
    Home, About, Contact, Product
@endsection
@section('content')
    @include('components.hero_slider')
    @include('components.homepage_product_listing', ['products' => $products])
    <section>
        <div class="row d-flex justify-content-center m-4" style="background-color: #f8f9fa;">
            <div class="col-md-10 col-xl-8 text-center">
            <h3 class="mb-4">Testimonials</h3>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
              numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
              quisquam eum porro a pariatur veniam.
            </p>
          </div>
        </div>
      
        <div class="row text-center d-flex align-items-stretch m-4" style="background-color: #f8f9fa;" >
          <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
            <div class="card testimonial-card">
              <div class="card-up" style="background-color: #9d789b;"></div>
              <div class="avatar mx-auto bg-white">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                  class="rounded-circle img-fluid" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">Maria Smantha</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
                  consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
            <div class="card testimonial-card">
              <div class="card-up" style="background-color: #7a81a8;"></div>
              <div class="avatar mx-auto bg-white">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                  class="rounded-circle img-fluid" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">Lisa Cudrow</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
                  repudi mollitia architecto.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-0 d-flex align-items-stretch">
            <div class="card testimonial-card">
              <div class="card-up" style="background-color: #6d5b98;"></div>
              <div class="avatar mx-auto bg-white">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                  class="rounded-circle img-fluid" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">John Smith</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
                  aliquam repellat rem unde ducimus.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>   
      <div class="row">

        <!-- Vision Card -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-eye-fill text-success fs-1 mb-3"></i>
                    <h5 class="card-title">Our Vision</h5>
                    <p class="card-text">
                        A world where knowledge has no boundaries, empowering every individual.
                    </p>
                </div>
            </div>
        </div>

        <!-- Values Card -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-heart-fill text-danger fs-1 mb-3"></i>
                    <h5 class="card-title">Our Values</h5>
                    <p class="card-text">
                        We value integrity, inclusivity, and innovation in everything we do.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <!-- Mission Card -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-lightbulb-fill text-warning fs-1 mb-3"></i>
                    <h5 class="card-title">Our Mission</h5>
                    <p class="card-text">
                        To empower individuals with knowledge and skills to transform their lives and communities.
                    </p>
                </div>
            </div>
        </div>

        <!-- Commitment Card -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-people-fill text-primary fs-1 mb-3"></i>
                    <h5 class="card-title">Our Commitment</h5>
                    <p class="card-text">
                        We are committed to providing accessible education to all, with a focus on quality and excellence.
                    </p>
                </div>
            </div>
        </div>

    </div>

      {{-- @include('pages.our_team_page') --}}
      <!-- Team 1 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Our Team</h2>
        <p class="text-secondary mb-5 text-center lead fs-4">We are a group of innovative, experienced, and proficient teams. You will love to collaborate with us.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container overflow-hidden">
    <div class="row gy-4 gy-lg-0 gx-xxl-5">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="https://via.placeholder.com/250x350" alt="Flora Nyra">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Flora Nyra</h4>
                <p class="text-secondary mb-0">Product Manager</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="https://via.placeholder.com/250x350" alt="Evander Mac">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Evander Mac</h4>
                <p class="text-secondary mb-0">Art Director</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="https://via.placeholder.com/250x350" alt="Taytum Elia">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Taytum Elia</h4>
                <p class="text-secondary mb-0">Investment Planner</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="https://via.placeholder.com/250x350" alt="Wylder Elio">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Wylder Elio</h4>
                <p class="text-secondary mb-0">Financial Analyst</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      {{-- @include('pages.contact_page') --}}
      <div class="container mt-5">
        <h2 class="text-center mb-4">Contact Us</h2>

        <!-- Contact Form -->
        <form>
            @csrf

            <div class="row">
                <!-- Name Field -->
                <div class="col-md-6 mb-4">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="col-md-6 mb-4">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <!-- Message Field -->
            <div class="mb-4">
                <label for="message" class="form-label">Your Message</label>
                <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror" rows="4" required>{{ old('message') }}</textarea>
                @error('message')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-3">Send Message</button>
            </div>
        </form>
    </div>

         @endsection

