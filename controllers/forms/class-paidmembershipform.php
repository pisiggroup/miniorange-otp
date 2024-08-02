<?php


if (defined("\x41\x42\123\120\x41\x54\x48")) {
    goto NP;
}
exit;
NP:
use OTP\Handler\Forms\PaidMembershipForm;
$gp = PaidMembershipForm::instance();
$Qm = $gp->is_form_enabled() ? "\x63\150\145\143\153\x65\x64" : '';
$sM = "\143\x68\145\143\153\145\144" === $Qm ? '' : "\x68\151\x64\144\x65\x6e";
$Y0 = $gp->get_otp_type_enabled();
$mO = $gp->get_phone_html_tag();
$T8 = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\145\167\163\x2f\x66\x6f\x72\155\x73\x2f\x70\x61\x69\144\155\145\x6d\142\x65\x72\x73\150\151\x70\x66\x6f\x72\155\56\160\x68\160";
