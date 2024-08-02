<?php


if (defined("\101\102\x53\120\x41\124\110")) {
    goto Vi;
}
exit;
Vi:
use OTP\Handler\Forms\UserUltraRegistrationForm;
$gp = UserUltraRegistrationForm::instance();
$aA = $gp->is_form_enabled() ? "\143\150\x65\x63\153\145\144" : '';
$Q7 = "\x63\x68\x65\143\x6b\145\144" === $aA ? '' : "\150\x69\x64\x64\145\156";
$Vj = $gp->get_otp_type_enabled();
$tx = admin_url() . "\x61\x64\155\151\x6e\x2e\x70\x68\x70\77\160\141\147\x65\x3d\x75\163\x65\162\x75\154\x74\162\x61\x26\x74\141\142\x3d\x66\x69\145\154\144\x73";
$lg = $gp->get_phone_key_details();
$dN = $gp->get_phone_html_tag();
$Ci = $gp->get_email_html_tag();
$TC = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\x69\145\167\x73\57\x66\x6f\162\x6d\163\57\165\163\145\x72\165\154\164\x72\x61\x72\x65\x67\x69\163\x74\x72\141\164\x69\157\156\x66\157\x72\x6d\56\x70\150\x70";
