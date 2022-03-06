<?php get_header() ?>
<main id="contact" class="container">
    <section class="presta">
        <h2>Me contacter</h2>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, ipsam.</p>
    </section>
    <!-- CONTACT FORM 7--> 
    <?= do_shortcode('[contact-form-7 id="48" title=" "]'); ?>
</main>


<footer>
    <div class='container container-sm'>
        <section class='social-media row'>
            <article class="col-md-3 col-12">
                <h2>Me suivre</h2>
                <section class="contact">
                    <div class='d-flex align-items-center'>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <span></span>
                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </section>
            </article>

            <article class="col-md-3  col-12">
                <nav>
                    <ul>
                        <?php wp_nav_menu([
                            'theme_location' => 'footer',
                            'container'      => false,
                            'menu_class'     => 'nav_menu'
                        ]); ?>

                    </ul>
                </nav>
            </article>
        </section>

        <small class="row flex-column align-items-center justify-content-center">
            <p class="text-center"> Site développé par Tiffany Boubkeur </p>
        </small>

    </div>
    <!-- GSAP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
    <!-- script de bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</footer>
</body>

</html>