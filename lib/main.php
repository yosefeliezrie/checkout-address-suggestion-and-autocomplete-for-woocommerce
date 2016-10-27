<?php

class rp_checkout_address_suggestion {

    private static $plugin_url;
    private static $plugin_dir;
    
    public function __construct() {
        global $rpaddress_plugin_dir, $rpaddress_plugin_url;

        /* plugin url and directory variable */
        self::$plugin_dir = $rpaddress_plugin_dir;
        self::$plugin_url = $rpaddress_plugin_url;
        add_action("wp_head", array($this, "wp_head"));
        add_action("wp_footer", array($this, "wp_footer"));
    }

    public function wp_footer() {
        ?>
        <!-- Autocomplete script by magerips.com -->
        <?php 
        if(!is_checkout())
            return;
        wp_enqueue_script('rp-autocomplete', self::$plugin_url . "assets/js/autocomplete.js");
    }

    

    public function wp_head() {
        if(!is_checkout())
            return;

        wp_enqueue_script('google-autocomplete', "https://maps.googleapis.com/maps/api/js?key=AIzaSyB8sFPEEAD_7dKG2rEs2NqOL1AlPDfWk2I&libraries=places");
    }

}
/* load plugin if woocommerce plugin is activated */
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    new rp_checkout_address_suggestion();
}