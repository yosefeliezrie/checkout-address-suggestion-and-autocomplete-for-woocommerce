<?php
/*
  Plugin Name: Checkout Address Suggestion And Autocomplete For Woocommerce
  Description: Allows your customers to Autocomplete billing and shipping address in checkout page with google places API, props to Magerips for original plugin
  Author: yosefeliezrie, Magerips
  Author URI: https://github.com/yosefeliezrie
  Plugin URI: https://github.com/yosefeliezrie/checkout-address-suggestion-and-autocomplete-for-woocommerce
  Version: 1.4.1
  Requires at least: 3.0.0
  Tested up to: 4.7.4
 */

global $ye_address_plugin_url, $ye_address_plugin_dir, $ye__gm_apikey;

$ye_address_plugin_dir = dirname(__FILE__) . "/";
$ye_address_plugin_url = plugins_url()."/" . basename($ye_address_plugin_dir) . "/";
$ye_gm_apikey= 'AIzaSyB8sFPEEAD_7dKG2rEs2NqOL1AlPDfWk2I';
include_once $ye_address_plugin_dir.'lib/main.php';
