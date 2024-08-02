<?php


if (defined("\101\x42\123\x50\x41\124\x48")) {
    goto EG;
}
exit;
EG:
use OTP\Handler\Forms\FormidableForm;
$gp = FormidableForm::instance();
$mS = $gp->is_form_enabled() ? "\143\x68\145\x63\x6b\145\144" : '';
$z8 = "\x63\150\x65\143\153\x65\x64" === $mS ? '' : "\x68\151\144\144\x65\156";
$Gy = $gp->get_otp_type_enabled();
$fs = admin_url() . "\x61\x64\x6d\151\156\56\160\x68\160\77\160\x61\x67\x65\x3d\146\157\x72\155\151\144\141\x62\x6c\145";
$Z7 = $gp->get_form_details();
$fv = $gp->get_phone_html_tag();
$nF = $gp->get_email_html_tag();
$EJ = $gp->get_button_text();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\145\167\163\x2f\146\x6f\x72\155\x73\57\x66\x6f\162\x6d\151\x64\x61\142\x6c\145\x66\157\162\x6d\56\160\150\160";
