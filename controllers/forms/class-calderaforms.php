<?php


if (defined("\x41\102\123\x50\x41\124\110")) {
    goto Cz;
}
exit;
Cz:
use OTP\Handler\Forms\CalderaForms;
$gp = CalderaForms::instance();
$Zw = (bool) $gp->is_form_enabled() ? "\143\150\145\x63\153\x65\x64" : '';
$Vv = "\x63\150\x65\143\153\x65\x64" === $Zw ? '' : "\x68\x69\144\144\x65\156";
$FW = $gp->get_otp_type_enabled();
$Rr = $gp->get_form_details();
$fD = admin_url() . "\141\x64\x6d\151\156\x2e\160\x68\x70\x3f\160\x61\147\145\75\x63\141\154\x64\x65\x72\x61\x2d\146\x6f\x72\155\x73";
$EJ = $gp->get_button_text();
$D5 = $gp->get_phone_html_tag();
$YU = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\x65\x77\x73\x2f\x66\157\162\x6d\163\57\143\x61\154\144\145\x72\141\x66\157\162\x6d\163\x2e\x70\150\x70";
