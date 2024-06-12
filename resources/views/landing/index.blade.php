@extends('layouts-landing.app')

@section('style-fe')
<style>
.btn-book-a-table {
    background: #ffa434;
    border: 0;
    padding: 10px 35px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
}

.alert-success{
    background: green
}
</style>
@endsection

@section('content')

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="about-img">
                    @if ($about != null)
                    <img src="{{ asset('assets/img/about/'.$about->image ?? '') }}" alt="">
                    @else
                    <img src="fe/assets/img/387267164_330437016173237_6284306943357525740_n.jpg" alt="">
                    @endif
                </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                @if ($about != null)
                {!! $about->content !!}
                @else
                No Content
                @endif

            </div>
        </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Why Us</h2>
            <p>Why Choose Our Tepi Danau Bistro</p>
        </div>

        <div class="row">

            <div class="col-lg-4">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <span>01</span>
                    <h4>Stunning Lakeside Views</h4>
                    <p>Enjoy your meal with breathtaking views of the serene lake, creating a perfect backdrop for any occasion.</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="200">
                    <span>02</span>
                    <h4>Diverse Menu Options</h4>
                    <p>Our menu features a wide range of dishes, from traditional Indonesian cuisine to international favorites, ensuring there's something for everyone.</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                    <span>03</span>
                    <h4>Fresh, Locally Sourced Ingredients</h4>
                    <p>We use only the freshest, locally sourced ingredients, supporting local farmers and guaranteeing the highest quality in every dish.</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                    <span>04</span>
                    <h4>Exceptional Customer Service</h4>
                    <p>Our friendly and attentive staff are dedicated to providing you with a memorable dining experience, from the moment you arrive until the moment you leave.</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                    <span>05</span>
                    <h4>Elegant and Relaxed Ambiance</h4>
                    <p>The bistro offers a relaxed yet elegant atmosphere, perfect for casual meals, romantic dinners, and special celebrations alike.</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                    <span>06</span>
                    <h4>Accommodations for Dietary Needs</h4>
                    <p>We cater to various dietary restrictions and preferences, offering a range of vegetarian, vegan, and gluten-free options.</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                    <span>07</span>
                    <h4>Extensive Beverage Selection</h4>
                    <p>Choose from a curated selection of wines, craft beers, cocktails, and non-alcoholic beverages to complement your meal perfectly.</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                    <span>08</span>
                    <h4>Family-Friendly Environment</h4>
                    <p>Our bistro is welcoming to families, with a special kids' menu and a comfortable setting for guests of all ages.</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                    <span>09</span>
                    <h4>Perfect Venue for Events</h4>
                    <p>Whether it’s a birthday party, anniversary, or corporate event, Tepi Danau Bistro offers customizable menus and event planning services to make your occasion special.</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Why Us Section -->

<!-- ======= Menu Section ======= -->
<section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Menu</h2>
            <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach ($category as $c)
                    <li data-filter=".filter-{{ $c->kategori }}">{{ $c->kategori }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">


            @foreach ($menu as $m)
            @php
            $cat = \App\Models\Category::where('id',$m->id_category)->first();
            @endphp
            <div class="col-lg-6 menu-item filter-{{ $cat->kategori }}">
                <img src="{{ asset('assets/img/menu/'.$m->foto) }}" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{$m->nama}}</a>
                </div>
                <div class="menu-ingredients">
                    {{ $m->desc }}
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section><!-- End Menu Section -->


<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Reservation</h2>
            <p>Book a Table</p>
        </div>

        @if($errors->any())
            <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                <span class="alert-text text-white">
                {{$errors->first()}}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <i class="fa fa-close" aria-hidden="true"></i>
                </button>
            </div>
        @endif
        @if(session('success'))
            <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                <span class="alert-text text-white">
                {{ session('success')}}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <i class="fa fa-close" aria-hidden="true"></i>
                </button>
            </div>
        @endif
        @if(session('failed'))
            <div class="m-3  alert alert-danger alert-dismissible fade show" id="alert-danger" role="alert">
                <span class="alert-text text-white">
                {{ session('failed') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <i class="fa fa-close" aria-hidden="true"></i>
                </button>
            </div>
        @endif

        <div class="row">
            @foreach ($table as $item)
                <div class="col-lg-3">
                        <div class="card" style="background: black;border: 1px solid gold;">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/table-img.png') }}" class="card-img-top reserved" alt="Table Image">
                                <div class="card-body">
                                    <h5 class="card-title text-center text-bold" style="color: white;font-weight: 800;">{{ $item->name }}</h5>
                                    <center>
                                        @php
                                            $reserve = \App\Models\Reservation::where('id_table',$item->id)->whereDate('date',date('Y-m-d'))->where('status',1)->first()
                                        @endphp
                                        @if ($reserve != null)
                                            <button type="button" class="btn btn-book-a-table">Full</button>
                                        @else
                                            <button type="button" class="btn btn-book-a-table" data-bs-toggle="modal" data-bs-target="#bookTableModal{{ $item->id }}">Book a Table</button>
                                        @endif
                                    </center>

                                </div>
                            </div>
                        </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="bookTableModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content" style="background: black;">
                        <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel" style="    color: #ffa434;">Book Table</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('book-table') }}" method="get" role="form" class="php-email-form-v2" data-aos="fade-up" data-aos-delay="100">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 form-group">
                                        <input type="hidden" name="id_table" value="{{ $item->id }}">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Table" value="{{ $item->name }}" readonly>
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
                                        <input type="text" class="form-control" name="no_tlp" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 form-group mt-3">
                                        <input type="datetime-local" name="datetime" class="form-control" id="datetime-local" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 form-group mt-3">
                                        <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                                        <div class="validate"></div>
                                    </div>
                                </div>
                               
                              
                                <div class="text-center">
                                    <button type="submit" type="submit">Book a Table</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>
</section>
<!-- End Book A Table Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Testimonials</h2>
            <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                @foreach ($testimoni as $item)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $item->testimoni }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ asset('assets/img/testimoni/'.$item->foto) }}" class="testimonial-img" alt="">
                        <h3>{{ $item->nama }}</h3>
                    </div>
                </div><!-- End testimonial item -->
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Gallery</h2>
            <p>Some photos from Our Tepi Danau Bistro</p>
        </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

            @foreach ($galery as $g)
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/galery/'.$g->img) }}" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="{{ asset('assets/img/galery/'.$g->img) }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Gallery Section -->

<!-- ======= Chefs Section ======= -->
<section id="team" class="chefs">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Teams</h2>
            <p>Our Professional Team</p>
        </div>

        <div class="row">

            @foreach ($team as $tm)
            <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('assets/img/team/'.$tm->foto) }}" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>{{ $tm->nama }}</h4>
                            <span>{{ $tm->posisi }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Chefs Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>
    </div>

    <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1072.5138029372895!2d99.05637513405325!3d2.3343521486342818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e051111b888f7%3A0x7b92db9623ce4f01!2sTepi%20Danau%20Bistro!5e0!3m2!1sid!2sid!4v1714011010601!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-4">
                <div class="info">
                    <div class="email">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Jl. Pemandian No.1, Sangkar Nihuta, Kec. Balige, Toba, Sumatera Utara 22312
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info">
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info">
                    <div class="phone">
                        <i class="bi bi-telephone"></i>
                        <h4>Call:</h4>
                        <p>0812-9996-9695</p>
                    </div>
                </div>
            </div>
            {{--
                                <div class="col-lg-8 mt-5 mt-lg-0">

                                  <form action="forms/contact.php" method="post" role="form" class="php-email-form-v2">
                                    <div class="row">
                                      <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                      </div>
                                      <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                      </div>
                                    </div>
                                    <div class="form-group mt-3">
                                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group mt-3">
                                      <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="my-3">
                                      <div class="loading">Loading</div>
                                      <div class="error-message"></div>
                                      <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Message</button></div>
                                  </form>

                                </div> --}}

        </div>

    </div>

    <script>
        $('#reservationModal').on('show.bs.modal', function(event) {
            $.get('/api/table-availability', function(data) {
                var tableContainer = $('#tableContainer');
                tableContainer.empty();
                for (var tableId in data) {
                    var tableIcon = $('<i class="bi bi-table table-icon"></i>');
                    tableIcon.data('table-id', tableId);
                    if (data[tableId]) {
                        tableIcon.addClass('text-success');
                    } else {
                        tableIcon.addClass('text-danger');
                    }
                    tableContainer.append(tableIcon);
                }
            });
        });

        $(document).ready(function() {
            // Assuming you have an API endpoint that returns the availability of tables
            $.get('/api/table-availability', function(data) {
                $('.table-icon').each(function() {
                    var tableId = $(this).data('table-id');
                    if (data[tableId]) {
                        // If the table is available, color the icon green
                        $(this).css('color', 'green');
                    } else {
                        // If the table is not available, color the icon red
                        $(this).css('color', 'red');
                    }
                });
            });
        });
    </script>
</section><!-- End Contact Section -->

@endsection

@section('script-fe')

@endsection