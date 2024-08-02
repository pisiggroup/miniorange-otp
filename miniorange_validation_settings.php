<?php
/**
 * Plugin Name: Email Verification / SMS verification / Mobile Verification
 * Plugin URI: http://miniorange.com
 * Description: Email & SMS OTP Verification for all forms. WooCommerce SMS Notification. PasswordLess Login. External Gateway for OTP Verification. 24/7 support.
 * Version: 14.0.0
 * Author: miniOrange
 * Author URI: http://miniorange.com
 * Text Domain: miniorange-otp-verification
 * Domain Path: /lang
 * WC requires at least: 2.0.0
 * WC tested up to: 5.6.0
 * License: MIT/Expat
 * License URI: https://docs.miniorange.com/mit-license
 *
 * @package miniorange-otp-verification
 */


use OTP\MoInit;
if (defined("\x41\102\x53\120\101\124\110")) {
    goto WD6;
}
exit;
WD6:
define("\x4d\x4f\126\x5f\120\114\125\x47\111\x4e\137\116\101\x4d\105", plugin_basename(__FILE__));
$lE = substr(MOV_PLUGIN_NAME, 0, strpos(MOV_PLUGIN_NAME, "\x2f"));
define("\115\x4f\x56\137\116\101\x4d\105", $lE);
require_once "\141\x75\x74\x6f\x6c\157\141\144\56\x70\150\x70";
MoInit::instance();
