<?php


if (defined("\101\102\123\x50\x41\x54\x48")) {
    goto rl;
}
exit;
rl:
use OTP\Handler\Forms\FluentForm;
$gp = FluentForm::instance();
$ql = (bool) $gp->is_form_enabled() ? "\x63\150\145\143\153\x65\x64" : '';
$h2 = "\x63\150\x65\x63\153\145\144" === $ql ? '' : "\163\164\171\x6c\x65\x3d\x64\151\163\160\x6c\141\171\x3a\156\157\156\x65\73";
$u7 = $gp->get_otp_type_enabled();
$aE = $gp->get_form_details();
$zs = admin_url() . "\x61\x64\155\x69\156\56\x70\x68\160\77\160\x61\147\x65\75\x66\x6c\165\145\156\x74\x5f\x66\x6f\x72\x6d\x73";
$EJ = $gp->get_button_text();
$xM = $gp->get_phone_html_tag();
$yu = $gp->get_email_html_tag();
$VM = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\x69\x65\x77\163\57\146\x6f\162\x6d\x73\57\x66\x6c\x75\145\156\164\x66\x6f\x72\x6d\x2e\160\150\x70";
