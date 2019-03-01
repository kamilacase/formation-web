<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>
    <div class="container">

        <header>
            <div class="top">
            <a class="logo" href="<?php bloginfo('url'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/Maquette/ressources/logo_formation_numerique_50x50.png" alt="logo formation numérique">
                    <p>FORMATIONS NUMERIQUE !!</p>
                </a>

                <nav>
                <p id="myBtn" class="burger menu" onclick="myFunction(this)" href=""<?php echo get_permalink(7); ?>">Menu</p>
                    <div id="myBtn1" class="burger" onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>

                    <!-- MODAL -->
                    <div id="myModal" class="modal">
                    
                        <div class="modal-content">
                        <?php wp_nav_menu(); ?>
                            <span class="close">&times;</span>
                            
                        </div>
                    </div>
                    <!-- fin MODAL -->

                    <!-- fin MODAL -->

                </nav>
            </div>

            <div class="backBanner">
                <div class="baneer1">
                    <div class="baneerContent1">
                        <h1>FORMATION<span><br>DÉVELOPPEMENT WEB</span></h1>
                    </div>
                </div>
                <div class="triangle-Bottom"></div>

            </div>

        </header>