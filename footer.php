<!--  -->
<section class="bg-image pb-4 pb-lg-0 pt-4" style="background-image: url(.<?php echo get_template_directory_uri(); ?>/assets/image/Group-303-1.png);background-position: top center;min-height: 500px;">
    <div class="container position-relative d-flex align-items-center">
        <div class="col-12 col-lg-11 m-auto p-2 p-lg-4 pt-5">
            <div class="row row-cols-4 element">
                <div class="col-12 col-md-3 pe-md-3">
                    <a href="" class="d-flex justify-content-center"><img src=".<?php echo get_template_directory_uri(); ?>/assets/image/Rectangle-109.jpg" alt=""></a>
                    <div>
                        <p class=" p-2 fs-6">“>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Pulvinar bibendum viverra laoreet elit consequat montes.

                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-3 ps-md-4">
                    <div class="">
                        <h5 class="border-blue font-bold">Services
                        </h5>
                    </div>
                    <ul class="p-0 links">
                        <li><a href="">Study visa</a></li>
                        <li><a href="">Work visa</a></li>
                        <li><a href="">Investment visa</a></li>
                        <li><a href="">Startup visa</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <div class="">
                        <h5 class="border-blue font-bold">Quick access
                        </h5>
                    </div>
                    <ul class="p-0 links">
                        <li><a href="">Evaluation form</a></li>
                        <li><a href="">Contact us</a></li>
                        <li><a href="">Consultation time</a></li>
                        <li><a href="">Received licenses</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3">
                    <div>
                        <ul class="p-0 d-flex media-item-circle justify-content-center justify-content-md-end pe-4">
                            <li><a href=""><span><i class="fas fa-phone-alt"></i></span></a></li>
                            <li><a href=""><span><i class="fab fa-instagram"></i></span></a></li>
                            <li><a href=""><span><i class="fab fa-telegram"></i></span></a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="links p-0">
                            <li><a href=""><i aria-hidden="true" class="far fa-envelope m-1"></i>Email</a></li>
                            <li><a href=""><i aria-hidden="true" class="fas fa-address-card m-1"></i>Address</a>
                            </li>
                            <li><a href=""><i aria-hidden="true" class="fas fa-location-arrow m-1"></i>Location</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- script -->
<!-- scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugin/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugin/slick-animation.js"></script>

<script>
    $('.single-item').slick({
        <?php
        if (pll_current_language() == 'fa') {
            echo 'rtl:true,';
        }
        ?>
        dots: true,
        arrows: true,
    });

    document.querySelector('.navbar-toggler').addEventListener('click', () => {
        document.querySelector('.navbar-toggler-icon').classList.toggle('navbar-toggler-icon2')
    })
</script>
<?php wp_footer(); ?>
</body>

</html>
<!-- JAVASCRIPT FILES ========================================= -->