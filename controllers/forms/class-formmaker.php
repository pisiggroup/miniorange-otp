<?php


if (defined("\101\102\x53\120\101\x54\110")) {
    goto u1;
}
exit;
u1:
use OTP\Handler\Forms\FormMaker;
$gp = FormMaker::instance();
$bo = (bool) $gp->is_form_enabled() ? "\143\x68\145\x63\x6b\145\x64" : '';
$BG = "\x63\150\145\x63\x6b\145\x64" === $bo ? '' : "\x68\x69\144\x64\145\x6e";
$pN = admin_url() . "\141\x64\x6d\x69\x6e\56\x70\x68\x70\x3f\160\141\147\145\x3d\x6d\x61\156\x61\147\145\x5f\x66\x6d";
$uv = $gp->get_otp_type_enabled();
$GI = $gp->get_email_html_tag();
$k0 = $gp->get_phone_html_tag();
$tZ = $gp->get_form_details();
$p1 = $gp->get_form_name();
$EJ = $gp->get_button_text();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\x65\167\x73\57\146\x6f\x72\x6d\x73\x2f\146\157\162\x6d\155\x61\153\x65\162\56\160\150\160";
