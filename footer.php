
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