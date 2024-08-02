<?php


if (defined("\x41\x42\123\x50\x41\x54\x48")) {
    goto QR;
}
exit;
QR:
use OTP\Handler\Forms\Edumalog;
$gp = Edumalog::instance();
$tf = $gp->is_form_enabled() ? "\143\x68\145\143\153\145\x64" : '';
$QM = "\143\x68\145\143\x6b\145\x64" === $tf ? '' : "\x68\151\x64\x64\145\x6e";
$kt = $gp->get_otp_type_enabled();
$cJ = $gp->get_phone_html_tag();
$N8 = $gp->get_email_html_tag();
$bs = $gp->get_phone_key_details();
$p1 = $gp->get_form_name();
$j5 = $gp->byPassCheckForAdmins() ? "\x63\150\x65\x63\153\x65\144" : '';
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\x65\167\163\x2f\x66\x6f\x72\x6d\163\x2f\x65\144\165\x6d\x61\154\157\x67\x2e\160\x68\x70";
