<!--  -->
<section class="bg-image pb-4 pb-lg-0 pt-4" style="background-image: url(.<?php echo get_template_directory_uri(); ?>/assets/image/Group-303-1.png);background-position: top center;min-height: 500px;">
    <div class="container position-relative d-flex align-items-center">
        <div class="col-12 col-lg-11 m-auto p-2 p-lg-4 pt-5">
            <div class="row row-cols-4 element">
                <?php
                get_template_part('template-parts/footer/footer', "col-1");
                get_template_part('template-parts/footer/footer', "col-2");
                get_template_part('template-parts/footer/footer', "col-3");
                get_template_part('template-parts/footer/footer', "col-4");
                ?>
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