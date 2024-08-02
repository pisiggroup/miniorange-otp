<?php


if (defined("\x41\x42\x53\120\101\x54\110")) {
    goto W0;
}
exit;
W0:
use OTP\Handler\Forms\MultiSiteFormRegistration;
$gp = MultiSiteFormRegistration::instance();
$k4 = $gp->is_form_enabled() ? "\x63\x68\145\143\153\145\144" : '';
$OI = "\143\150\x65\143\x6b\145\144" === $k4 ? '' : "\x68\x69\x64\144\145\x6e";
$up = $gp->get_otp_type_enabled();
$If = $gp->get_phone_html_tag();
$L4 = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\x69\x65\x77\163\x2f\146\157\162\155\163\x2f\x6d\x75\x6c\164\x69\163\x69\x74\145\x66\157\x72\x6d\x72\x65\147\x69\x73\164\x72\x61\x74\151\157\x6e\x2e\x70\150\x70";
