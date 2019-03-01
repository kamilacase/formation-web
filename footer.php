 <footer>
            <section class="section5">

                <div class="bottomGrid">
                    <div class="address">
                    <img src="<?php echo get_template_directory_uri(); ?>/Maquette/ressources/logo_formation_numerique_500x500.png" alt="logo formation numérique">
                        <div class="addressContent">
                            <h4>FORMATIONS NUMERIQUE</h4>
                            <P>PAR AFA-MULTIMEDIA <br>24 Avenue de la République <br>48200 Bourgs-sur-Colagne</P>
                        </div>
                    </div>

                    <div class="formations">
                        <h4>TOUTES NOS FORMATIONS</h4>
                        <a class="btn btn1" href="<?php echo get_permalink(11); ?>">développement web <i class="fas fa-chevron-right"></i></a>
                        <a class="btn btn2" href="<?php echo get_permalink(13); ?>">graphisme & PAO <i class="fas fa-chevron-right"></i></a>
                        <a class="btn btn3" href="<?php echo get_permalink(15); ?>">photo & vidéo <i class="fas fa-chevron-right"></i></a>
                    </div>

                    <div class="contact">
                        <h4>NOUS CONTACTER</h4>
                        <a class="btn" href="<?php echo get_permalink(19); ?>">contact <i class="fas fa-chevron-right"></i></a>
                        <hr>
                        <div class="phone">
                            <i class="fas fa-phone"></i>
                            <p>04 66 32 37 27</p>
                        </div>
                        <hr>
                        <div class="mail">
                            <i class="far fa-envelope"></i><br>
                            <a href="mailto:contact@formation-numérique.com">contact@formation-numérique.com</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section6">
                <div class="mentions">
                    <p>2019 - Tous droits réservés à AFA-MULTIMEDIA | <a href="#">Mentions légales</a> | <a href="#">Politique
                            de confidentialité</a></p>
                </div>
            </section>

        </footer>
    </div>

    
    <?php wp_footer(); ?>
</body>

</html>