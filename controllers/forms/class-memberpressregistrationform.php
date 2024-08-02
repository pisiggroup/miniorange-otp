<?php


if (defined("\101\x42\x53\120\101\124\110")) {
    goto zH;
}
exit;
zH:
use OTP\Handler\Forms\MemberPressRegistrationForm;
$gp = MemberPressRegistrationForm::instance();
$MH = $gp->is_form_enabled() ? "\x63\x68\x65\x63\x6b\145\144" : '';
$X9 = "\143\x68\145\143\x6b\145\144" === $MH ? '' : "\x68\151\144\x64\145\156";
$e2 = $gp->get_otp_type_enabled();
$w9 = $gp->get_phone_key_details();
$H0 = admin_url() . "\x61\144\155\x69\x6e\x2e\160\150\x70\x3f\160\x61\147\145\x3d\155\x65\x6d\x62\x65\162\x70\x72\x65\x73\163\55\x6f\160\x74\x69\157\x6e\x73\x23\155\145\x70\162\x2d\146\151\145\x6c\x64\x73";
$kE = $gp->get_phone_html_tag();
$qO = $gp->get_email_html_tag();
$QQ = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
$h8 = $gp->bypass_for_logged_in_users() ? "\143\x68\x65\143\153\145\x64" : '';
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\145\x77\163\57\146\157\162\x6d\x73\x2f\x6d\x65\155\x62\145\162\x70\162\145\163\163\162\145\147\151\163\x74\162\x61\164\151\157\x6e\x66\157\162\155\56\160\150\160";
