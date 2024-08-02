<?php


if (defined("\x41\x42\123\120\101\124\110")) {
    goto Lm;
}
exit;
Lm:
use OTP\Handler\Forms\EverestContactForm;
$gp = EverestContactForm::instance();
$p0 = (bool) $gp->is_form_enabled() ? "\143\x68\145\x63\153\145\144" : '';
$zv = "\x63\x68\145\143\x6b\x65\x64" === $p0 ? '' : "\150\151\144\144\x65\x6e";
$BD = $gp->get_otp_type_enabled();
$Jy = $gp->get_form_details();
$d4 = admin_url() . "\141\144\x6d\x69\x6e\56\x70\x68\160\x3f\x70\x61\x67\145\x3d\145\x76\x66\x2d\x62\x75\151\x6c\144\145\162";
$EJ = $gp->get_button_text();
$sO = $gp->get_phone_html_tag();
$CX = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\145\167\163\x2f\x66\157\x72\155\163\x2f\145\x76\x65\x72\145\x73\x74\x63\x6f\156\x74\x61\x63\x74\x66\x6f\162\155\56\160\x68\x70";
