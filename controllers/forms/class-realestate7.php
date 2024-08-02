<?php


if (defined("\101\102\123\x50\101\x54\110")) {
    goto SC;
}
exit;
SC:
use OTP\Handler\Forms\RealEstate7;
$gp = RealEstate7::instance();
$Ar = $gp->is_form_enabled() ? "\x63\150\x65\x63\x6b\x65\x64" : '';
$aG = "\143\150\145\x63\153\145\x64" === $Ar ? '' : "\150\x69\x64\144\145\156";
$ew = $gp->get_otp_type_enabled();
$c7 = $gp->get_phone_html_tag();
$gq = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\x69\x65\167\163\x2f\146\x6f\162\155\163\x2f\162\x65\x61\x6c\145\x73\164\141\164\145\x37\x2e\160\150\160";
