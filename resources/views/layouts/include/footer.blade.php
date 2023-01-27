<!--=============================================
 =            Footer         =
 =============================================-->

<footer>
    <?
        $info = App\Models\Information::first();
        ?>
    <!--=======  social contact section  =======-->

    <div class="social-contact-section pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-2 order-md-2 order-sm-2 order-lg-1">
                    <!--=======  social media links  =======-->

                    <div class="social-media-section">
                        <h2>Bizni kuzatib boring</h2>
                        <div class="social-links">
                            <a class="facebook" href="http://www.facebook.com" data-tooltip="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                            <a class="twitter" href="http://www.twitter.com" data-tooltip="Twitter"><i
                                    class="fa fa-twitter"></i></a>
                            <a class="instagram" href="http://www.instagram.com" data-tooltip="Instagram"><i
                                    class="fa fa-instagram"></i></a>
                            <a class="linkedin" href="http://www.linkedin.com" data-tooltip="Linkedin"><i
                                    class="fa fa-linkedin"></i></a>
                            <a class="rss" href="http://www.rss.com" data-tooltip="RSS"><i class="fa fa-rss"></i></a>
                        </div>
                    </div>

                    <!--=======  End of social media links  =======-->

                </div>
                <div class="col-lg-8 col-md-12 order-1 order-md-1 order-sm-1 order-lg-2  mb-sm-50 mb-xs-50">
                    <!--=======  contact summery  =======-->

                    <div class="contact-summery">
                        <h2>Bog'lanish</h2>

                        <!--=======  contact segments  =======-->

                        <div class="contact-segments d-flex justify-content-between flex-wrap flex-lg-nowrap">
                            <!--=======  single contact  =======-->

                            <div class="single-contact d-flex mb-xs-20">
                                <div class="icon">
                                    <span class="icon_pin_alt"></span>
                                </div>
                                <div class="contact-info">
                                    <p>Manzil: <span>{{ $info->address_ru }}</span></p>
                                </div>
                            </div>

                            <!--=======  End of single contact  =======-->
                            <!--=======  single contact  =======-->

                            <div class="single-contact d-flex mb-xs-20">
                                <div class="icon">
                                    <span class="icon_mobile"></span>
                                </div>
                                <div class="contact-info">
                                    <p>Tel: <span>{{ $info->phone }}</span></p>
                                </div>
                            </div>

                            <!--=======  End of single contact  =======-->
                            <!--=======  single contact  =======-->

                            <div class="single-contact d-flex">
                                <div class="icon">
                                    <span class="icon_mail_alt"></span>
                                </div>
                                <div class="contact-info">
                                    <p>Email: <span>{{ $info->email }}</span></p>
                                </div>
                            </div>

                            <!--=======  End of single contact  =======-->
                        </div>

                        <!--=======  End of contact segments  =======-->



                    </div>

                    <!--=======  End of contact summery  =======-->

                </div>
            </div>
        </div>
    </div>

    <!--=======  End of social contact section  =======-->

    <!--=======  footer navigation  =======-->

    <div class="footer-navigation-section pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-xs-30">
                    <!--=======  single navigation section  =======-->

                    <div class="single-navigation-section">
                        <h3 class="nav-section-title">Ma'lumot</h3>
                        <ul>
                            <li> <a href="#">Biz haqimizda</a></li>
                            <li> <a href="#">Yetkazib berish haqida ma'lumot</a></li>
                            <li> <a href="#">Maxfiylik siyosati</a></li>
                            <li> <a href="#">Foydalanish shartlari</a></li>
                        </ul>
                    </div>

                    <!--=======  End of single navigation section  =======-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-xs-30">
                    <!--=======  single navigation section  =======-->

                    <div class="single-navigation-section">
                        <h3 class="nav-section-title">MENING SAHIFAM</h3>
                        <ul>
                            <li> <a href="{{ route('account') }}">Mening akkauntim</a></li>
                            <li> <a href="{{ route('wishes.index') }}">Saralangan</a></li>
                            <li> <a href="{{ route('cart') }}">Savat</a></li>
                        </ul>
                    </div>

                    <!--=======  End of single navigation section  =======-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-xs-30">
                    <!--=======  single navigation section  =======-->

                    <div class="single-navigation-section">
                        <h3 class="nav-section-title">Mijozlar xizmati</h3>
                        <ul>
                            <li> <a href="{{ route('contact') }}">Bog'lanish</a></li>
                        </ul>
                    </div>

                    <!--=======  End of single navigation section  =======-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                    <!--=======  End of single navigation section  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of footer navigation  =======-->


    <!--=======  copyright section  =======-->

    <div class="copyright-section pt-35 pb-35">
        <div class="container">
            <div class="row align-items-md-center align-items-sm-center">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 text-center text-md-left">
                    <!--=======  copyright text	  =======-->

                    <div class="copyright-segment">
                        <p>
                            <a href="#">Maxfiylik siyosati</a>
                            <span class="separator">|</span>
                            <a href="#">Foydalanish shartlari</a>
                        </p>

                    </div>

                    <!--=======  End of copyright text	  =======-->

                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                    <!--=======  payment info  =======-->

                    <div class="payment-info text-center text-md-right">
                        <p class="copyright-text">&copy; 2022 <a href="/">Halal.uz</a>. Barcha huquqlar
                            himoyalangan
                        </p>
                    </div>

                    <!--=======  End of payment info  =======-->

                </div>
            </div>
        </div>
    </div>

    <!--=======  End of copyright section  =======-->
</footer>

<!--=====  End of Footer  ======-->


<!-- scroll to top  -->
<a href="#" class="scroll-top"></a>
<!-- end of scroll to top -->

<!-- JS

============================================ -->
<!-- jQuery JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/vendor/jquery.min.js"></script>

<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>
