<?php


if (defined("\101\102\123\120\x41\x54\110")) {
    goto qG;
}
exit;
qG:
use OTP\Handler\Forms\MemberPressSingleCheckoutForm;
$gp = MemberPressSingleCheckoutForm::instance();
$bw = $gp->is_form_enabled() ? "\x63\150\x65\x63\153\x65\x64" : '';
$os = "\143\x68\x65\x63\x6b\145\144" === $bw ? '' : "\163\164\x79\x6c\x65\x3d\144\x69\163\160\154\x61\x79\x3a\156\x6f\156\x65";
$TK = $gp->get_otp_type_enabled();
$Hb = $gp->get_phone_key_details();
$V2 = admin_url() . "\x61\x64\x6d\151\x6e\x2e\x70\150\160\77\x70\x61\147\x65\75\155\145\155\142\x65\x72\160\x72\145\x73\x73\55\x6f\x70\164\x69\x6f\156\x73\x23\155\145\x70\x72\x2d\146\x69\145\154\x64\x73";
$xa = $gp->get_phone_html_tag();
$YE = $gp->get_email_html_tag();
$v9 = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
$wS = $gp->bypass_for_logged_in_users() ? "\143\x68\x65\143\153\x65\x64" : '';
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\x65\x77\x73\57\146\157\x72\x6d\163\57\155\x65\155\142\x65\x72\x70\162\x65\x73\163\x73\151\156\147\x6c\x65\x63\x68\x65\143\x6b\x6f\165\164\x66\157\x72\x6d\56\160\x68\x70";
