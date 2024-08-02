<?php


if (defined("\x41\x42\123\x50\x41\x54\110")) {
    goto xj;
}
exit;
xj:
use OTP\Handler\Forms\VisualFormBuilder;
$gp = VisualFormBuilder::instance();
$pw = $gp->is_form_enabled() ? "\143\x68\145\x63\153\x65\x64" : '';
$iO = "\143\150\x65\x63\153\x65\x64" === $pw ? '' : "\x68\x69\x64\x64\145\156";
$F4 = $gp->get_otp_type_enabled();
$h5 = admin_url() . "\141\x64\155\151\x6e\x2e\160\150\160\x3f\160\141\x67\145\x3d\166\151\x73\x75\x61\x6c\55\x66\x6f\x72\155\55\142\165\151\x6c\x64\x65\162";
$al = $gp->get_form_details();
$Au = $gp->get_phone_html_tag();
$Qd = $gp->get_email_html_tag();
$EJ = $gp->get_button_text();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\x69\145\x77\163\57\x66\157\x72\x6d\x73\57\x76\151\x73\x75\141\154\x66\x6f\162\x6d\x62\x75\x69\154\144\x65\x72\x2e\x70\x68\160";
