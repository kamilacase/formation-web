

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    
    <title>formation web</title>
    <script src="node_modules/jquery/dist/jquery.js"></script>

    <?php wp_head(); ?>
</head>

<body>
    <div class="container">

        <header>
            <div class="top">
            <a class="logo" href="<?php bloginfo('url'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/Maquette/ressources/logo_formation_numerique_50x50.png" alt="logo formation numérique">
                    <p>FORMATIONS NUMERIQUE</p>
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

                </nav>
            </div>

            <div class="backBanner">
                <div class="baneer">
                    <div class="baneerContent">
                    <img src="<?php echo get_template_directory_uri(); ?>/Maquette/ressources/logo_formation_numerique_500x500.png" alt="logo formation numérique">
                        <h1><span>FORMATIONS</span><br> NUMERIQUE</h1>
                        <p>PAR <span>AFA MULTIMEDIA</span></p>
                    </div>
                </div>
                <div class="triangleBottom"></div>

            </div>



        </header>
        