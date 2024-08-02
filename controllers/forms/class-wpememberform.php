<?php


if (defined("\x41\x42\x53\120\101\x54\x48")) {
    goto xS;
}
exit;
xS:
use OTP\Handler\Forms\WpEmemberForm;
$gp = WpEmemberForm::instance();
$ch = $gp->is_form_enabled() ? "\x63\150\x65\143\x6b\x65\144" : '';
$kK = "\x63\x68\x65\143\153\145\x64" === $ch ? '' : "\150\x69\144\144\x65\x6e";
$fH = $gp->get_otp_type_enabled();
$ep = admin_url() . "\x61\x64\x6d\x69\x6e\56\160\x68\160\77\x70\141\x67\x65\75\x65\115\x65\155\x62\x65\x72\x5f\163\145\x74\164\151\156\x67\x73\137\x6d\145\156\x75\x26\x74\141\x62\75\64";
$Kx = $gp->get_phone_html_tag();
$BZ = $gp->get_email_html_tag();
$U7 = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\x69\x65\x77\x73\x2f\146\x6f\x72\x6d\163\57\167\x70\x65\x6d\145\x6d\x62\x65\162\x66\157\162\155\56\160\150\x70";
