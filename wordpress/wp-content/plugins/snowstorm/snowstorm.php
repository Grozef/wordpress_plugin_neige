<?php 
/*
Plugin name: Snowstorm
Plugin URI: https://dekpo.com
description: This plugin will make snow fall like dollars on your bank account, but on your wordpress
Author: Me myself and I
Version: 1.0
*/

//Adding JS snow storm script to the head
//protocole, les fonctions doivent commencer par le nom du plugin en wp

function snowstorm_loading_js_script(){
    wp_enqueue_script('snowstorm_script', plugin_dir_url(__FILE__).'snowstorm.js');
}
add_action('wp_enqueue_scripts', 'snowstorm_loading_js_script', 5);

//adding an admin option to the Wordpress admin page

function snowstorm_adding_options_page(){
    //fonction prédéfinie WP
    add_options_page(
        'Snowstorm Settings',
        'Snowstorm Settings',
        'manage_options',
        'my-snowstorm-settings',//slug de la page
        'snowstorm_settings_rendering_function' //callback
    );
}

add_action('admin_menu','snowstorm_adding_options_page'); // hook = admin_menu

//Admin page rendering function
function snowstorm_settings_rendering_function(){
    ?>
    <form action="options.php" method="post">
            <?php 
            // slug de la page en param / fonctions pour les champs du form
                settings_fields('my-snowstorm-settings');
                do_settings_sections('my-snowstorm-settings');
            ?>
        <input type="submit" name="Save" value="Save" class="button button-primary">
    </form> 
    <?php
}

//Givin' some settings to be registred
function snowstorm_register_settings_fields(){
    register_setting(
        'my-snowstorm-settings', // slug / identifiant de la page
        'my_snowstorm_color' // champ
    );
    //Second
    register_setting(
        'my-snowstorm-settings',
        'my_snowstorm_character',
);
    //add section
    add_settings_section(
        'my_snowstorm_settings_section',
        'My Snowstorm Settings Section',
        'snowstorm_settings_section_callback', //callback à effectuer en dessous
        'my-snowstorm-settings'
    );
    //rattacher le champs 
    add_settings_field(
        'my_snowstorm_color',  //nom du champ / id
        'Snowflakes Color Hex',  //label / titre
        'snowstorm_color_input_html',  //callback
        'my-snowstorm-settings', // slug / identifiant de la page
        'my_snowstorm_settings_section' //section
    );

    //Second Setting
    add_settings_field(
        'my_snowstorm_character',
        'Snowflakes Character String',
        'snowstorm_character_input_html',
        'my-snowstorm-settings',
        'my_snowstorm_settings_section',
);
}   
    add_action('admin_init', 'snowstorm_register_settings_fields');

    //HTML section to be rendered / callbck du dessus qui devait etre effectué
    function snowstorm_settings_section_callback(){
        echo"<p> Please enter settings for your snowstorm below</p>";
    }

    //fonction de rendu html pour l'input color / HTML input callback to render color field
function snowstorm_color_input_html(){
    ?>
        <input type="text" id="my_snowstorm_color" name="my_snowstorm_color" value="<?php echo get_option("my_snowstorm_color", "#FFFFFF"); ?>">
    <?php
}
//Second setting html form
function snowstorm_character_input_html(){
    ?>
    <input type="text" id="my_snowstorm_character" name="my_snowstorm_character" value="<?php echo get_option('my_snowstorm_character','&#x2745'); ?>">
    <?php
}
// Giving some settings to the snowstorm
function snowstorm_giving_some_settings(){
    ?> 
        <script type="text/javascript">
                snowStorm.snowColor = '<?php echo get_option('my_snowstorm_color','6fa6ff'); ?>'
                snowStorm.flakesMaxActive = 96;  // show more snow on screen at once
                snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
                this.snowCharacter ='<?php echo get_option('my_snowstorm_character','&#x2745'); ?>'
                snowStorm.flakeWidth = 30;            // Max pixel width reserved for snow element
                snowStorm.flakeHeight = 30;           // Max pixel height reserved for snow element
        </script>
    <?php   
}
//l'entier à la fin du add_action définit l'ordre de priorité = charger d'abord la fonction avant les settings
add_action('wp_head', 'snowstorm_giving_some_settings', 10);