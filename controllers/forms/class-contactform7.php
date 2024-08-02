<?php


if (defined("\x41\102\x53\x50\x41\124\110")) {
    goto R1;
}
exit;
R1:
use OTP\Handler\Forms\ContactForm7;
$gp = ContactForm7::instance();
$HL = (bool) $gp->is_form_enabled() ? "\143\x68\145\143\x6b\x65\144" : '';
$aM = "\x63\150\145\x63\x6b\145\144" === $HL ? '' : "\150\x69\x64\x64\145\156";
$xH = $gp->get_otp_type_enabled();
$Ye = admin_url() . "\141\x64\155\x69\x6e\x2e\x70\x68\160\77\160\x61\x67\x65\x3d\167\x70\x63\146\x37";
$dQ = $gp->get_email_key_details();
$xN = $gp->get_phone_html_tag();
$yn = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\145\x77\x73\x2f\x66\x6f\162\x6d\163\57\x63\x6f\156\164\x61\143\x74\x66\x6f\x72\x6d\67\56\160\150\160";
