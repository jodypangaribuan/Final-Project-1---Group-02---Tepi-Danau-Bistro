<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts-landing.head')
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-telephone d-flex align-items-center"><span>0812-9996-9695</span></i>
        {{-- <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i> --}}
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">Id</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  @include('layouts-landing.navbar')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Tepi Danau Bistro</span></h1>
          <h2>Presenting Luxurious Comfort in Every Meal, Embraced by the Beauty of the Lake</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://youtu.be/wMs1YhwG1C8?si=jJSOyWKqWToLLUnT" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    @yield('content')

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts-landing.footer')

  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts-landing.foot')

</body>

</html>
