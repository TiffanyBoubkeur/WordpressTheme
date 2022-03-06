<footer id="footer">
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

            <article class="col-md-3 col-12">
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
            
            <!-- formulaire -->
            <div class="formulaire col-md-7  col-12">
            <?= do_shortcode('[contact-form-7 id="47" title=""]'); ?>
            </div>
        </section>


        <small class="row flex-column align-items-center justify-content-center">
            <p class="text-center"> Site développé par Tiffany Boubkeur - <a href="<?php echo esc_url(get_page_link(3)); ?>"> Politiques de confidentialité </a></p>
        </small>

    </div>
    <!-- GSAP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
    <!-- script de bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!--POPUP COOKIE-->
    <script type="text/javascript" src="https://cookieconsent.popupsmart.com/src/js/popper.js"></script><script> window.start.init({Palette:"palette4",Mode:"banner bottom",Location:"<?php echo esc_url(get_page_link(3)); ?>",Message:"Ce site utilise des cookies pour optimiser votre visite.",ButtonText:"Ok !",LinkText:"Lire plus",Time:"0",})</script>
</footer>
<?php wp_footer() ?>
</body>

</html>