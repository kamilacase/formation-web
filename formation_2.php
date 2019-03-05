<?php
/*
Template Name: formation graphique
*/
?>

<?php get_header(); ?>

<main>
            <div class="lineBottom">
                <div class="verticalLine"></div>
                <div class="point"></div>
            </div>
            <section class="section7">
                <div class="resumeContent">
                    <h2><?php echo get_field('section7-1_title');?><br><?php echo get_field('section7-1_title_br');?></h2>
                    <p><?php echo get_field('section7-1_paragraphe');?></p>
                </div>
                <div class="galery">
                    <div class="cube1"></div>
                    <div class="cube2"></div>
                    <div class="cube3"></div>
                    <div class="cube4"></div>
                </div>
                <div class="clear"></div>
            </section>

            <div class="lineTop1">
                <div class="verticalLine"></div>
                <div class="point"></div>
            </div>
            <section class="section8">
                <div class="triangleTop"></div>
                <div class="backGrid">
                    <div class="entitled">
                        <h2><?php echo get_field('section8-1_title');?><br><?php echo get_field('section8-1_title_br');?></h2>
                        <p><?php echo get_field('section8-1_paragraphe');?></p>
                    </div>
                    <div class="formation-card">
                        <aside>
                            <div class="rectangle"></div>
                            <div class="legend">
                                <p>INTERESSÉ PAR<br><span>LA FORMATION</span></p>
                                <div class="vertical"></div>
                                <a class="btn" href="#">Nous contacter <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </aside>
                        <div class="description">
                            <h2><?php echo get_field('number-1'); _e('.'); ?></h2>
                            <h3 class="formation-title"><?php echo get_field('title-1');?></h3>
                            <p><?php echo get_field('paragraphe-1');?></p>
                        </div>
                    </div>

                    <div class="formation-card formation-card2">
                        <aside>
                            <div class="rectangle"></div>
                            <div class="legend">
                                <p>INTERESSÉ PAR<br><span>LA FORMATION</span></p>
                                <div class="vertical"></div>
                                <a class="btn" href="#">Nous contacter <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </aside>
                        <div class="description">
                            <h2><?php echo get_field('number-1');_e('.'); ?></h2>
                            <h3 class="formation-title"><?php echo get_field('title-1');?></h3>
                            <p><?php echo get_field('paragraphe-1');?></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section4 section4-1">
                <H2>L'UNE DE CES FORMATIONS VOUS INTÉRESSE ?<br>ALORS CONTACTEZ-NOUS DÈS MAINTENANT !</H2>
                <hr>
                <a class="btn-1" href="<?php bloginfo('url'); ?>/index.php/contact/">Nous contacter <i class="fas fa-chevron-right"></i></a>
            </section>





        </main>

<?php get_footer(); ?>