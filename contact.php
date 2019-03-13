<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>
  <main>
            <div id="haut" class="lineBottom">
                <div class="verticalLine"></div>
                <div class="point"></div>
            </div>
            <section class="contactSection1">
                <div class="resumeContent">
                    <H2>RENSEIGNEMENTS, DEVIS, INSCRIPTION...</H2>
                    <P>Good, I'll see you tonight. Don't forget, now, 1:15 a.m., Twin Pines Mall. Don't tell me. Uh,
                        you want me to buy a
                        subscription to the Saturday Evening Post? Ahh. Huh? Good. Have a good trip Einstein, watch
                        your head.</P>
                    <p class="tel"> TEL 04 66 32 37 27</p>
                </div>
            </section>

            <section class="contactForm">
            <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]'); ?>
               
                <p class="clause">Les champs dotés d'une * sont requis.<p>
            </section>

            <section>
                <div id="googleMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.885819736913!2d3.2525857140771395!3d44.51457151542589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b36e757ad2f89b%3A0x5eac9408b59f3ea3!2sAFA-Multimedia+S.A.R.L.!5e1!3m2!1sfr!2sfr!4v1548759118515"
                        width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </section>
            <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>  
        </main>

        <?php get_footer(); ?>