<?php


if (defined("\101\x42\x53\120\x41\x54\110")) {
    goto Ah;
}
exit;
Ah:
use OTP\Handler\Forms\ClassifyRegistrationForm;
$gp = ClassifyRegistrationForm::instance();
$Pv = $gp->is_form_enabled() ? "\143\x68\x65\143\x6b\145\144" : '';
$e1 = "\x63\150\145\x63\x6b\x65\x64" === $Pv ? '' : "\x68\151\144\x64\145\156";
$vr = $gp->get_otp_type_enabled();
$dM = $gp->get_phone_html_tag();
$Jp = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\x65\x77\163\x2f\x66\x6f\x72\155\x73\57\143\154\x61\163\163\x69\146\x79\x72\x65\147\x69\163\x74\x72\141\x74\151\157\x6e\146\x6f\x72\x6d\56\x70\x68\160";
