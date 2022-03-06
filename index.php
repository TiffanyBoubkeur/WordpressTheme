<?php get_header() ?>

<main class="container">

    <section class="presta">
        <h2> TITRE </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero a earum quos qui placeat tempore hic, aspernatur aperiam eius adipisci facilis nihil neque ipsum pariatur enim est dicta ex!</p>
        
        <div class="layoutImages">
            <!--lien http-->
            <a href="<?php echo esc_url(get_page_link(29)); ?>" target="_blank">
                <img class="img1" src="wp-content/uploads/2021/10/ordi1.jpg" alt="creation de site internet">
                <h3> Titre </h3>
                <p> Lorem ipsum dolor sit amet. </p>
            </a>

            <div class="layoutImages1">
                <a href="<?php echo esc_url(get_page_link(33)); ?>">
                    <img src="wp-content/uploads/2021/10/portrait1.jpg" alt="">
                    <h3>Titre</h3>
                    <p> Lorem, ipsum dolor. <br> Lorem, ipsum dolor.</p>
                </a>
            </div>

        </div>

        <div class="layoutImages2">
            <img src="wp-content/uploads/2021/10/branding3.JPG" alt="">
        </div>
    </section>


    <!-- Client opinions CAROUSEL
    
    <section>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-interval="2500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <i class="fas fa-quote-right"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sint iure eum ex quasi et
                        reprehenderit recusandae, ad odit, quos pariatur vel. Et, quidem repudiandae animi molestiae
                        doloremque cumque velit!</p>
                    <h4>NOM</h4>
                </div>
                <div class="carousel-item">
                    <i class="fas fa-quote-right"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sint iure eum ex quasi et
                        reprehenderit recusandae, ad odit, quos pariatur vel. Et, quidem repudiandae animi molestiae
                        doloremque cumque velit!</p>
                    <h4>NOM</h4>
                </div>
                <div class="carousel-item">
                    <i class="fas fa-quote-right"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sint iure eum ex quasi et
                        reprehenderit recusandae, ad odit, quos pariatur vel. Et, quidem repudiandae animi molestiae
                        doloremque cumque velit!</p>
                    <h4>NOM</h4>
                </div>
            </div>
        </div>
    </section>-->

</main>

<?php get_footer() ?>