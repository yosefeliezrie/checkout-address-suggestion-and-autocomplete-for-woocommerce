<?php

class ye_checkout_address_suggestion {

    private static $plugin_url;
    private static $plugin_dir;
    private static $ye_gm_apikey;

    public function __construct() {
        global $ye_address_plugin_dir, $ye_address_plugin_url, $ye_gm_apikey;

        /* plugin url and directory variable */
        self::$plugin_dir = $ye_address_plugin_dir;
        self::$plugin_url = $ye_address_plugin_url;
        add_action("wp_head", array($this, "wp_head"));
        add_action("wp_footer", array($this, "wp_footer"));
    }

    public function wp_footer() {
        ?>
        <!-- Autocomplete script by magerips.com -->
        <?php
        if(!is_checkout())
            return;
        wp_enqueue_script('ye-autocomplete', self::$plugin_url . "assets/js/autocomplete.js");
    }



    public function wp_head() {
        if(!is_checkout())
            return;

        wp_enqueue_script('google-autocomplete', 'https://maps.googleapis.com/maps/api/js?key=' . $ye_gm_apikey . '&libraries=places');
    }

}
/* load plugin if woocommerce plugin is activated */
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    new ye_checkout_address_suggestion();
}
