<?php get_header() ?>


<main>
    <section class="presta">
        <h2>Titre</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis, harum!</p>
    </section>
    <!--Galery-->
    <article class="container portfolio">
        <section class="row galerie">
            <div class="col-4">
                <figure>
                    <img src="../wp-content/uploads/2021/10/portrait2.JPG" alt="">
                </figure>
                <figure>
                    <img src="../wp-content/uploads/2021/10/valencia2.JPG" alt="">
                </figure>
                <figure>
                    <img src="../wp-content/uploads/2021/10/portrait3.JPG" alt="">
                </figure>
            </div>

            <div class="col-4">
                <figure>
                    <img src="../wp-content/uploads/2021/10/valencia.JPG" alt="">
                </figure>
                <figure>
                    <img src="../wp-content/uploads/2021/10/branding.JPG" alt="">
                </figure>
                <figure>
                    <img src="../wp-content/uploads/2021/10/flower.JPG" alt="">
                </figure>
            </div>

            <div class="col-4">
                <figure>
                    <img src="../wp-content/uploads/2021/10/portrait5.JPG" alt="">
                </figure>
                <figure>
                    <img src="../wp-content/uploads/2021/10/branding3.JPG" alt="">
                </figure>
                <figure>
                    <img src="../wp-content/uploads/2021/10/portrait4.JPG" alt="">
                </figure>
            </div>
        </section>
    </article>

<!--PAGE ID -->
    <div class="meContacter pages"> <a href="<?php echo esc_url(get_page_link(31)); ?>"><span>Bouton</span> </a></div>
    <?php get_footer() ?>