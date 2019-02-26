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
                <a class="logo" href="#">
                    <img src="Maquette/ressources/logo_formation_numerique_50x50.png" alt="logo formation numérique">
                    <p>FORMATIONS NUMERIQUE !!</p>
                </a>

                <nav>
                    <p id="myBtn" class="burger menu" onClick="myFunction(this)">Menu</p>
                    <div id="myBtn1" class=" burger" onClick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>

                    <!-- MODAL -->
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2 class="modal-title-1"><a href="#">LES FORMATIONS</a></h2>
                            <ul>
                                <li>
                                    <a class="blue" href="#">Dévéloppement Web</a>
                                </li>
                                <li>
                                    <a class="yellow" href="#">Graphisme & PAO</a>
                                </li>
                                <li>
                                    <a class="brown" href="#">Photo & Vidéo</a>
                                </li>
                            </ul>
                            <h2 class="modal-title-2"><a href="#">NOUS CONTACTER</a></h2>
                        </div>
                    </div>
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