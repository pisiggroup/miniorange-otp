<?php


if (defined("\101\x42\123\120\x41\124\x48")) {
    goto Z0;
}
exit;
Z0:
use OTP\Handler\Forms\UserProfileMadeEasyRegistrationForm;
$gp = UserProfileMadeEasyRegistrationForm::instance();
$Oc = $gp->is_form_enabled() ? "\x63\150\145\x63\x6b\145\x64" : '';
$Lo = "\x63\150\145\143\153\145\x64" === $Oc ? '' : "\x68\x69\x64\x64\145\x6e";
$un = $gp->get_otp_type_enabled();
$eH = admin_url() . "\x61\144\x6d\x69\x6e\56\x70\150\x70\x3f\x70\141\x67\x65\75\165\x70\155\x65\x2d\x66\151\x65\x6c\x64\55\x63\x75\x73\x74\157\155\x69\x7a\145\x72";
$O3 = $gp->get_phone_key_details();
$L5 = $gp->get_phone_html_tag();
$lt = $gp->get_email_html_tag();
$VD = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\145\167\x73\57\146\157\162\x6d\163\x2f\x75\x73\x65\x72\160\x72\x6f\x66\151\x6c\145\x6d\141\x64\145\145\x61\163\171\x72\x65\147\151\163\164\162\x61\x74\x69\157\156\x66\157\162\155\56\x70\x68\x70";
