<?php


if (defined("\x41\x42\x53\120\x41\x54\x48")) {
    goto r7;
}
exit;
r7:
use OTP\Handler\Forms\Edumareg;
$gp = Edumareg::instance();
$tv = $gp->is_form_enabled() ? "\143\150\x65\x63\x6b\145\x64" : '';
$WS = "\143\150\x65\x63\153\x65\144" === $tv ? '' : "\x68\151\x64\x64\145\x6e";
$LC = $gp->get_otp_type_enabled();
$hB = $gp->get_phone_html_tag();
$c_ = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\x69\145\x77\163\57\146\157\162\155\x73\57\145\x64\165\155\x61\x72\145\x67\x2e\160\x68\x70";
