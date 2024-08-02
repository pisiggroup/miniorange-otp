<?php


if (defined("\101\102\123\120\x41\124\x48")) {
    goto Zi;
}
exit;
Zi:
use OTP\Handler\Forms\WPFormsPlugin;
$gp = WPFormsPlugin::instance();
$dt = (bool) $gp->is_form_enabled() ? "\x63\x68\145\143\153\x65\x64" : '';
$Hl = "\x63\150\145\x63\153\145\x64" === $dt ? '' : "\x73\164\x79\x6c\145\x3d\x22\144\x69\x73\160\154\x61\171\72\156\157\156\145\x3b\42";
$Xf = $gp->get_otp_type_enabled();
$Gs = $gp->get_form_details();
$AZ = admin_url() . "\x61\144\155\x69\156\56\x70\150\160\77\x70\141\147\x65\75\167\x70\x66\x6f\x72\155\x73\55\x6f\x76\145\x72\x76\151\145\x77";
$EJ = $gp->get_button_text();
$EL = $gp->get_phone_html_tag();
$Y2 = $gp->get_email_html_tag();
$hT = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\x69\x65\x77\163\57\146\x6f\x72\155\x73\57\x77\x70\146\x6f\162\155\163\x70\154\165\x67\x69\x6e\x2e\x70\150\160";
