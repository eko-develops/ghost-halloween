<?php
/**
* Plugin Name: Ghost-Halloween
* Description: Add a cute ghost to your site. Original code found here: https://codepen.io/anthonysimone/details/JmRKzz
* Version: 1.0
* Author: ekoret
**/

/**Load the scripts and styles */
function ghost_assets(){
    $ghost_css_version  = filemtime( plugin_dir_path( __FILE__ ) . 'assets/ghost-styles.css' );
    $ghost_js_version  = filemtime( plugin_dir_path( __FILE__ ) . 'assets/ghost-script.js' );

    wp_enqueue_style( 'ghost-styles-css', plugin_dir_URL( __FILE__ ) . 'assets/ghost-styles.css', array(), $ghost_css_version);
    wp_enqueue_script( 'ghost-script-js', plugin_dir_URL( __FILE__ ) . 'assets/ghost-script.js', array(), $ghost_js_version, true );    //load the script in the footer
}
add_action('wp_enqueue_scripts', 'ghost_assets');


function ghost_html(){

    echo '<div class="scene-container stars-out" tabindex="1">
      <div class="ghost-container">
        <div class="ghost">
          <div class="ghost-head">
            <div class="ghost-face">
              <div class="eyes-row">
                <div class="eye left"></div>
                <div class="eye right"></div>
              </div>
              <div class="mouth-row">
                <div class="cheek left"></div>
                <div class="mouth">
                  <div class="mouth-top"></div>
                  <div class="mouth-bottom"></div>
                </div>
                <div class="cheek right"></div>
              </div>
            </div>
          </div>
          <div class="ghost-body">
            <div class="ghost-hand hand-left"></div>
            <div class="ghost-hand hand-right"></div>
            <div class="ghost-skirt">
              <div class="pleat down"></div>
              <div class="pleat up"></div>
              <div class="pleat down"></div>
              <div class="pleat up"></div>
              <div class="pleat down"></div>
            </div>
          </div>
        </div>
        <div class="stars">
          <div class="star orange pointy star-1"><div class="star-element"></div></div>
          <div class="star orange pointy star-2"><div class="star-element"></div></div>
          <div class="star yellow pointy star-3"><div class="star-element"></div></div>
          <div class="star yellow pointy star-4"><div class="star-element"></div></div>
          <div class="star blue round star-5"><div class="star-element"></div></div>
          <div class="star blue round star-6"><div class="star-element"></div></div>
        </div>
      </div>
      <div class="shadow-container">
        <div class="shadow"></div>
        <div class="shadow-bottom"></div>
      </div>
    </div>';

}
add_action('wp_body_open', 'ghost_html');  //output the html in the footer