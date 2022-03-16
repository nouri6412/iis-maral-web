<!--  -->
<section class="bg-image pb-4 pb-lg-0 <?php echo (pll_current_language() == 'fa') ? '' :'pt-4'  ?>" style="background-image: url(.<?php echo get_template_directory_uri(); ?>/assets/image/Group-303-1.png);background-position: top center;min-height: 500px;">
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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/share.js"></script>

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
    // select all accordion items
    const accItems = document.querySelectorAll(".accordion__item");

    // add a click event for all items
    accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

    function toggleAcc() {
        // remove active class from all items exept the current item (this)
        accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null);

        // toggle active class on current item
        if (this.classList != "accordion__item--active") {
            this.classList.toggle("accordion__item--active");
        }
    }

    function next_form_step(this_page, next_page) {
        $('#form-step-' + this_page).css('display', 'none');
        $('#form-step-' + next_page).css('display', 'block');
    }

    function back_form_step(this_page, back_page) {
        $('#form-step-' + this_page).css('display', 'none');
        $('#form-step-' + back_page).css('display', 'block');
    }

    function submit_form_step(button,element_error,element_done) {
        var data = {
            'action': 'mbm_initial_assessment_form'
        };

        $('#initial_assessment_form input').each(function() {
            data[$(this).attr('id')] = $(this).val();
        });
       // console.log(data);
   
        custom_theme_mbm_base_ajax(data, function(result) {
console.log(result);
            if (result.state == 1) {
                element_done.html(result.message);
                button.remove();

            } else {
                element_error.html(result.message);
            }

        });
    }
</script>
<?php wp_footer(); ?>
</body>

</html>
<!-- JAVASCRIPT FILES ========================================= -->