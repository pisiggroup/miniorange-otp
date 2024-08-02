<?php


if (defined("\x41\102\x53\120\x41\124\x48")) {
    goto GJ;
}
exit;
GJ:
use OTP\Handler\Forms\UltimateProRegistrationForm;
$gp = UltimateProRegistrationForm::instance();
$Mz = (bool) $gp->is_form_enabled() ? "\x63\x68\x65\143\153\x65\144" : '';
$hY = "\143\x68\145\143\x6b\x65\x64" === $Mz ? '' : "\150\151\x64\x64\x65\x6e";
$ic = $gp->get_otp_type_enabled();
$nZ = admin_url() . "\141\x64\155\151\x6e\56\x70\x68\160\77\x70\141\147\145\x3d\151\x68\143\x5f\155\141\x6e\x61\147\145\x26\164\x61\x62\x3d\162\145\147\x69\x73\164\145\x72\x26\x73\x75\x62\164\x61\x62\75\143\165\163\164\x6f\x6d\137\x66\151\145\x6c\144\x73";
$pc = $gp->get_phone_html_tag();
$SH = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\x69\145\x77\163\x2f\146\x6f\x72\155\163\x2f\x75\x6c\x74\x69\155\141\x74\x65\160\x72\x6f\162\x65\x67\151\163\x74\x72\x61\164\151\157\x6e\x66\157\x72\155\x2e\x70\150\160";
