<?php


if (defined("\101\102\123\x50\x41\x54\x48")) {
    goto s9;
}
exit;
s9:
use OTP\Handler\Forms\ProfileBuilderRegistrationForm;
$gp = ProfileBuilderRegistrationForm::instance();
$cg = $gp->is_form_enabled() ? "\143\x68\145\x63\x6b\145\x64" : '';
$Jj = "\x63\150\x65\x63\x6b\x65\144" === $cg ? '' : "\x68\x69\144\144\145\156";
$v0 = $gp->get_otp_type_enabled();
$ae = $gp->get_phone_key_details();
$Ai = admin_url() . "\x61\x64\x6d\151\156\56\x70\150\x70\77\x70\x61\147\x65\75\155\x61\156\141\x67\145\55\146\x69\145\x6c\x64\163";
$gR = $gp->get_phone_html_tag();
$yq = $gp->get_email_html_tag();
$pp = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\145\167\x73\x2f\146\157\x72\155\163\x2f\160\162\x6f\x66\151\154\145\142\x75\x69\x6c\x64\x65\162\x72\145\x67\151\163\164\162\141\x74\x69\x6f\x6e\x66\x6f\x72\x6d\56\160\x68\160";
