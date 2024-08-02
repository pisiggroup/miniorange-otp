<?php


if (defined("\101\102\x53\x50\101\x54\x48")) {
    goto B1;
}
exit;
B1:
use OTP\Handler\Forms\SimplrRegistrationForm;
$gp = SimplrRegistrationForm::instance();
$D2 = $gp->is_form_enabled() ? "\x63\150\x65\143\153\x65\x64" : '';
$yS = "\143\x68\x65\143\x6b\x65\x64" === $D2 ? '' : "\x68\x69\x64\x64\145\x6e";
$U1 = $gp->get_otp_type_enabled();
$Wt = admin_url() . "\x6f\x70\x74\151\x6f\x6e\163\x2d\147\x65\x6e\145\162\x61\154\56\160\x68\160\x3f\160\141\x67\x65\x3d\163\151\155\x70\x6c\x72\x5f\x72\145\x67\x5f\163\x65\164\x26\162\145\x67\166\x69\x65\x77\75\x66\151\x65\154\x64\x73\x26\x6f\x72\144\x65\x72\x62\171\75\156\x61\x6d\145\46\157\162\144\145\x72\75\144\x65\163\x63";
$Uh = $gp->get_phone_key_details();
$tC = $gp->get_phone_html_tag();
$gi = $gp->get_email_html_tag();
$xK = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\x69\x65\167\163\x2f\146\x6f\x72\x6d\x73\x2f\x73\x69\x6d\160\154\x72\162\145\147\151\x73\x74\162\141\x74\x69\157\156\x66\x6f\162\x6d\56\160\x68\160";
