<?php


if (defined("\x41\102\x53\120\x41\x54\x48")) {
    goto Vg;
}
exit;
Vg:
use OTP\Handler\Forms\DocDirectThemeRegistration;
$gp = DocDirectThemeRegistration::instance();
$s0 = $gp->is_form_enabled() ? "\143\150\x65\143\x6b\x65\144" : '';
$tp = "\x63\x68\145\143\153\x65\x64" === $s0 ? '' : "\x68\x69\144\x64\x65\x6e";
$IQ = $gp->get_otp_type_enabled();
$m7 = $gp->get_phone_html_tag();
$fU = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\145\167\163\57\x66\157\x72\x6d\x73\x2f\x64\x6f\143\144\151\162\x65\143\x74\164\x68\145\155\x65\x72\x65\147\x69\x73\164\x72\141\164\x69\x6f\156\x2e\x70\x68\x70";
