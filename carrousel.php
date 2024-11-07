<?php

/*
plugin name: Carrousel
description: Carrousel permettant d'afficher le contenu d'une galerie
author: Sylviane Paré
author uri: https://www.gftnth00.mywhc.ca/31w09
*/

/*
    Étape de développement d'un carrousel:
        -Une fenêtre modale qui s'affichera par-dessus le contenu du site. (HTML et CSS)
        -Créer un bouton qui permettra d'ouvrir la boite modale
        -Créer une feuille de style pour la boite modale
        -Script permettant d'ouvrir et fermer la boite modale

*/

function enfile_css_script(){

    $version_css = filemtime(plugin_dir_path(__FILE__). "/style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) . "js/carrousel.js");

    wp_enqueue_style(
        "carrousel",        
        plugin_dir_url(__FILE__) . "/style.css",
        array(),
        $version_css
    ) ;  

    wp_enqueue_script( //ici, pas de s à la fin de wp_enqueue_script
        "carrousel",       
        plugin_dir_url(__FILE__) . "/js/carrousel.js",
        array(),
        $version_js,
        true
    )  ; 
}

add_action("wp_enqueue_scripts", "enfile_css_script"); //ne pas oublier le s à la fin de wp_enqueue_scripts

function generer_carrousel(){
    $chaine = '
                <button id="carrouel__bouton" class="carrousel__bouton">Ouvrir</button>
                <div class="carrousel">
                    <button class="carrousel__x">X</button>
                    <button class="carrousel__gauche">Gauche</button>
                    <button class="carrousel__droit">Droite</button>
                    <figure class="carrousel__figure"></figure>
                    <form class="carrousel__form"></form>
                </div>
              ';
    return $chaine;
}

add_shortcode("carrousel", "generer_carrousel");