<?php


if (defined("\x41\102\123\120\101\124\x48")) {
    goto EU;
}
exit;
EU:
use OTP\Handler\Forms\WPClientRegistration;
$gp = WPClientRegistration::instance();
$E7 = $gp->is_form_enabled() ? "\x63\x68\145\x63\x6b\145\144" : '';
$Vh = "\x63\150\x65\143\153\x65\x64" === $E7 ? '' : "\x68\151\144\x64\x65\x6e";
$d_ = $gp->get_otp_type_enabled();
$Bf = $gp->get_phone_html_tag();
$M3 = $gp->get_email_html_tag();
$Fy = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
$c8 = $gp->restrict_duplicates() ? "\x63\x68\145\x63\x6b\145\144" : '';
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\x69\145\x77\x73\57\x66\157\x72\x6d\x73\57\167\160\143\x6c\x69\145\156\164\x72\145\147\151\x73\164\x72\x61\164\x69\x6f\x6e\56\x70\x68\160";
