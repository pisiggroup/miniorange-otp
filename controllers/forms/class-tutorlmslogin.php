<?php


if (defined("\101\x42\123\x50\101\x54\110")) {
    goto rD;
}
exit;
rD:
use OTP\Handler\Forms\TutorLMSLogin;
$gp = TutorLMSLogin::instance();
$KB = $gp->is_form_enabled() ? "\143\x68\x65\143\153\x65\x64" : '';
$Kc = "\x63\150\x65\143\153\145\x64" === $KB ? '' : "\163\164\x79\154\145\x3d\x64\151\163\160\x6c\x61\x79\72\x6e\x6f\x6e\x65\73";
$V1 = $gp->get_otp_type_enabled();
$jV = $gp->get_email_html_tag();
$lI = $gp->get_phone_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\x65\x77\x73\57\146\x6f\162\155\x73\57\164\x75\164\x6f\162\x6c\155\163\x6c\157\x67\151\156\56\x70\x68\160";
