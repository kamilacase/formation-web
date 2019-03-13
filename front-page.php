<?php
/*
template name: front-page
*/
?>

<?php get_header('home'); ?>
<main>
            <div  class="lineBottom">
                <div class="verticalLine"></div>
                <div class="point"></div>
            </div>

            <section class="section1">
                <div class="resumeImg">
                <img src="<?php echo get_template_directory_uri(); ?>/Maquette/ressources/logo_ecran_300x300.png" alt="logo écran">
                </div>

                <div class="resumeContent">

                    <h3><?php echo get_field('home_section1_titre1');?></h3>
                    <H2><?php echo get_field('home_section1_titre2');?></H2>
                    <hr>
                    <P><?php echo get_field('home_section1_paragraphe');?></P>
                    <a class="btn" href="<?php bloginfo('url'); ?>/index.php/contact/">en savoir plus <i class="fas fa-chevron-right"></i></a>
                </div>

            </section>

            <div class="lineTop">
                <div class="verticalLine"></div>
                <div class="point"></div>
            </div>
            <section class="section2">
                <div class="triangleTop"></div>
                <div class="backGrid">
                    <div class="entitled">
                        <h2><?php echo get_field('home_section2_titre1');?></h2>
                        <hr>
                        <p><?php echo get_field('home_section1_paragraphe');?></p>
                    </div>
                    <div class="cardGrid">

                        <div class="card cardBlue">
                            <div class="cardTitle">
                                <h3><?php _e('FORMATIONS'); ?><br><span><?php echo get_field('card1_title'); ?></span></h3>
                            </div>
                            <div class="number">
                                <p><?php _e('.'); echo get_field('card1_number'); ?></p>
                            </div>
                            <div class="content content1">
                            <?php 
                                $image = get_field('card1_picto');
                                    if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                <p><?php echo get_field('card1_paragraphe'); ?></p>
                            </div>
                            <a class="btn btnBlue" href="<?php echo get_permalink(11); ?>">En savoir plus ... <i class="fas fa-chevron-right"></i></a>
                        </div>

                        <div class="card cardYellow">
                            <div class="cardTitle">
                                <h3>FORMATIONS<br><span><?php echo get_field('card2_title'); ?></span></h3>
                            </div>
                            <div class="number">
                                <p><?php _e('.'); echo get_field('card2_number'); ?></p>
                            </div>
                            <div class="content content2">
                            <?php 
                            $image = get_field('card2_picto');
                                    if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                <p><?php echo get_field('card2_paragraphe'); ?></p>
                            </div>
                            <a class="btn btnYellow" href="<?php echo get_permalink(13); ?>">En savoir plus... <i class="fas fa-chevron-right"></i></a>
                        </div>

                        <div class="card cardBrown">
                            <div class="cardTitle">
                                <h3>FORMATIONS<br><span><?php echo get_field('card3_title'); ?></span></h3>
                            </div>
                            <div class="number">
                            <p><?php _e('.'); echo get_field('card3_number'); ?></p>
                            </div>
                            <div class="content content3">
                            <?php 
                            $image = get_field('card3_picto');
                                    if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                <p><?php echo get_field('card3_paragraphe'); ?></p>
                            </div>
                            <a class="btn btnBrown" href="<?php echo get_permalink(15); ?>">En savoir plus... <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section3">

                <div class="backContent">
                    <div class="section3Content">
                    <img src="<?php echo get_template_directory_uri(); ?>/Maquette/ressources/picto_hand_300X300.png" alt="logo handshake">
                        <div class="resume">
                            <h3>PARTENAIRES & INSTITUTIONS</h3>
                            <H2>ILS NOUS FONT CONFIANCE</H2>
                            <hr>
                            <P>Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. Don't tell
                                me.
                                Uh,
                                you want me to buy a
                                subscription to the Saturday Evening Post? Ahh. Huh? Good. Have a good trip Einstein,
                                watch
                                your head.</P>
                        </div>
                    </div>

                    <div class="logoPartners">
                        
                                 <a class="logo1" href="#"><?php 
                            $image = get_field('partenaire_logo');
                                    if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?></a>
                                    <a class="logo2" href="#"><?php 
                            $image = get_field('partenaire_logo1');
                                    if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?></a>
                                    <a class="logo3" href="#"><?php 
                            $image = get_field('partenaire_logo2');
                                    if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?></a>
                                    <a class="logo4" href="#"><?php 
                            $image = get_field('partenaire_logo3');
                                    if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?></a>
                    </div>
                </div>
                <div class="triangleBottom2"></div>
            </section>
            <div class="lineBottom2">
                <div class="verticalLine2"></div>
                <div class="point"></div>
            </div>
            <section class="section4">
                <H2>POUR TOUS RENSEIGNEMENTS, N'HÉSITEZ PAS A NOUS CONTACTER</H2>
                <hr>
                <a class="btn" href="<?php bloginfo('url'); ?>/index.php/contact/">Nous contacter <i class="fas fa-chevron-right"></i></a>
            </section>

            <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

        </main>
        <?php get_footer(); ?>