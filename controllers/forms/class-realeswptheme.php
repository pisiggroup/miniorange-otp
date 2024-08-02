<?php


if (defined("\x41\102\123\120\x41\124\110")) {
    goto tP;
}
exit;
tP:
use OTP\Handler\Forms\RealesWPTheme;
$gp = RealesWPTheme::instance();
$Ho = $gp->is_form_enabled() ? "\143\150\x65\143\x6b\145\144" : '';
$TD = "\143\150\145\143\x6b\x65\144" === $Ho ? '' : "\x68\x69\x64\x64\145\156";
$vo = $gp->get_otp_type_enabled();
$cQ = $gp->get_phone_html_tag();
$sk = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\x69\145\167\163\57\146\157\162\x6d\x73\x2f\x72\145\x61\x6c\x65\163\x77\x70\164\x68\x65\x6d\x65\56\x70\x68\160";
