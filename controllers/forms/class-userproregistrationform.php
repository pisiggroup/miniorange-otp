<?php


if (defined("\x41\x42\x53\120\101\124\x48")) {
    goto j0;
}
exit;
j0:
use OTP\Handler\Forms\UserProRegistrationForm;
$gp = UserProRegistrationForm::instance();
$GG = $gp->is_form_enabled() ? "\143\x68\x65\143\x6b\145\x64" : '';
$FV = "\x63\x68\145\143\153\145\144" === $GG ? '' : "\150\151\x64\144\145\x6e";
$EZ = $gp->get_otp_type_enabled();
$qI = admin_url() . "\x61\x64\x6d\151\x6e\x2e\160\150\x70\x3f\x70\x61\x67\145\75\x75\163\x65\x72\160\x72\157\x26\x74\141\x62\75\x66\x69\145\x6c\144\163";
$bb = $gp->disable_auto_activation() ? "\143\150\x65\x63\153\145\x64" : '';
$KQ = $gp->get_phone_html_tag();
$y8 = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\145\x77\163\x2f\x66\x6f\x72\155\x73\57\165\163\x65\x72\x70\162\x6f\x72\x65\147\x69\x73\164\x72\141\164\x69\x6f\x6e\x66\157\x72\x6d\56\x70\x68\160";
