<?php


if (defined("\x41\x42\x53\x50\x41\x54\110")) {
    goto fk;
}
exit;
fk:
use OTP\Handler\Forms\WooCommerceSocialLoginForm;
$gp = WooCommerceSocialLoginForm::instance();
$Bc = (bool) $gp->is_form_enabled() ? "\x63\150\145\143\153\145\x64" : '';
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\x69\145\167\x73\57\x66\x6f\162\x6d\x73\57\x77\157\x6f\x63\157\155\x6d\x65\162\x63\145\163\157\x63\151\141\154\x6c\x6f\147\151\x6e\146\157\162\x6d\56\160\150\x70";
