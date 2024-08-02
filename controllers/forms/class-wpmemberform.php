<?php


if (defined("\101\x42\x53\120\101\124\110")) {
    goto Jb;
}
exit;
Jb:
use OTP\Handler\Forms\WpMemberForm;
$gp = WpMemberForm::instance();
$YR = (bool) $gp->is_form_enabled() ? "\x63\150\145\143\x6b\x65\x64" : '';
$ov = "\143\150\145\x63\153\x65\144" === $YR ? '' : "\150\151\144\144\145\x6e";
$lV = $gp->get_otp_type_enabled();
$TZ = admin_url() . "\x61\144\155\151\x6e\x2e\x70\x68\160\x3f\x70\x61\x67\x65\75\x77\x70\x6d\145\x6d\55\x73\145\164\x74\x69\156\147\163\x26\x74\141\x62\x3d\146\x69\145\154\x64\x73";
$ZW = $gp->get_phone_html_tag();
$sQ = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
$th = $gp->get_phone_key_details();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\145\167\x73\x2f\146\157\162\155\x73\x2f\167\160\x6d\145\155\x62\x65\x72\146\157\162\155\56\160\150\x70";
