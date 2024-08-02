<?php


if (defined("\101\102\x53\120\101\x54\110")) {
    goto si;
}
exit;
si:
use OTP\Handler\Forms\PieRegistrationForm;
$gp = PieRegistrationForm::instance();
$V9 = $gp->is_form_enabled() ? "\x63\150\145\x63\153\x65\144" : '';
$y5 = "\x63\150\145\143\153\x65\x64" === $V9 ? '' : "\x68\151\144\x64\145\156";
$BN = $gp->get_otp_type_enabled();
$kx = $gp->get_phone_key_details();
$Om = $gp->get_phone_html_tag();
$vT = $gp->get_email_html_tag();
$Hq = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\x65\167\x73\57\146\x6f\x72\155\x73\x2f\x70\x69\x65\x72\x65\x67\151\x73\x74\x72\141\x74\x69\x6f\x6e\x66\x6f\162\155\x2e\x70\x68\x70";
