<?php get_header() ?>

<main>
        <section class="presta">
            <h2>Titre</h2>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, rerum.</p>
        </section>

        <!-- DIAPO MARQUEE STYLE 
        <section> 
        <div class="diapo">
            <div class="picsMove">
                <img src="./assets/images/ordi1.jpg" class="pic"></img>
                <img src="./assets/images/ordi1.jpg" class="pic"></img>
                <img src="./assets/images/ordi1.jpg" class="pic"></img>
                <img src="./assets/images/ordi1.jpg" class="pic"></img>
                <img src="./assets/images/ordi1.jpg" class="pic"></img>
            
            </div>
    </section> -->

        <section class="row  siteChoices">
            <img src="../wp-content/uploads/2021/10/bureau.jpg" class="col-12" alt="">

            <div class="list">
                <div class="dimensionList">
                    <div class="positionList">
                        <div class="contentList">
                            <h6> Titre</h6>
                            <h3>sous-titre</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>

                    <div class="positionList">
                        <div class="contentList">
                            <h6>Titre</h6>
                            <h3>sous-titre</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>

                    <div class="positionList">
                        <div class="contentList">
                            <h6>Titre</h6>
                            <h3>sous-titre</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--PAGE ID-->
        <div class="meContacter pages"> <a href="<?php echo esc_url( get_page_link(31) ); ?>"><span>Bouton</span> </a></div>
    </main>

<?php get_footer()?>