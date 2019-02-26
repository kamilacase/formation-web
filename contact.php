<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>
  <main>
            <div class="lineBottom">
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
                <form action="" method="post">
                    <div class="nom form">
                        <label for="nom">Nom</label>
                        <input class="input1" type="text">
                    </div>
                    <div class="prenom form">
                        <label for="prenom">Prénom</label>
                        <input class="input2" type="text">
                    </div>
                    <div class="nom-entreprise form">
                        <label for="nom-entreprise">Nom de l'entreprise</label>
                        <input class="input3" type="text">
                    </div>
                    <div class="telephone form">
                        <label for="telephone">Téléphone</label>
                        <input class="input4" type="tel" name="telephone" id="tel">
                    </div>
                    <div class="email form">
                        <label for="mail">Mail</label>
                        <input class="input5" type="email" name="mail" id="mail">
                    </div>
                    <div class="sujet form">
                        <label for="sujet">Sujet</label>
                        <input class="input6" type="text">
                    </div>
                    <div class="message">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="135" rows="15"></textarea>
                    </div>
                    <button class="btn" type="submit">Envoyer <i class="fas fa-chevron-right"></i></button>
                </form>
            </section>

            <section>
                <div id="googleMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.885819736913!2d3.2525857140771395!3d44.51457151542589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b36e757ad2f89b%3A0x5eac9408b59f3ea3!2sAFA-Multimedia+S.A.R.L.!5e1!3m2!1sfr!2sfr!4v1548759118515"
                        width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </section>

        </main>

        <?php get_footer(); ?>