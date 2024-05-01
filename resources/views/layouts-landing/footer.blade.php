<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3 style="font-weight: 900">TEPI DANAU BISTRO</h3>
                        <p>
                            Jl. Pemandian No.1, Sangkar Nihuta, <br> Kec. Balige, Toba, <br> Sumatera Utara
                            22312<br><br>
                            <strong>Phone:</strong> 0812-9996-9695<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/tepidanaubistro/" target="_blank" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#menu">Menu</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Galery</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">Testimonials</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Hour Open</h4>
                    <ul>
                        @foreach ($jambuka as $jb)
                            <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $jb->hari }}, {{ $jb->jam_buka }}
                                    - {{ $jb->jam_tutup }}</a></li>
                        @endforeach

                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <img src="fe/assets/img/TepiDanauBistro_Logo_-removebg.png" alt="" style="max-width: 100px"
                         class="img-fluid">
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>TEPI DANAU BISTRO</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="/">TEPI DANAU BISTRO</a>
        </div>
    </div>
</footer>
