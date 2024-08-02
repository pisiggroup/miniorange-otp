<?php


if (defined("\x41\x42\123\x50\x41\124\x48")) {
    goto Ge;
}
exit;
Ge:
use OTP\Handler\Forms\GravityForm;
$gp = GravityForm::instance();
$wg = $gp->is_form_enabled() ? "\143\150\145\x63\x6b\145\x64" : '';
$Bh = "\143\x68\145\143\x6b\145\x64" === $wg ? '' : "\x73\164\171\154\x65\x3d\144\151\x73\160\x6c\141\x79\x3a\x6e\x6f\156\145";
$V3 = $gp->get_otp_type_enabled();
$RW = admin_url() . "\141\144\x6d\151\x6e\x2e\x70\150\x70\x3f\x70\141\x67\145\75\x67\146\x5f\x65\x64\x69\164\x5f\146\x6f\162\x6d\163";
$rG = $gp->get_form_details();
$CC = $gp->get_email_html_tag();
$Bx = $gp->get_phone_html_tag();
$p1 = $gp->get_form_name();
$LH = $gp->get_button_text();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\x69\145\167\163\57\146\x6f\x72\x6d\163\57\x67\x72\141\x76\x69\x74\171\146\157\162\x6d\x2e\160\150\160";
