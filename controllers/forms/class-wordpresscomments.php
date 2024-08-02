<?php


if (defined("\101\102\123\120\x41\124\x48")) {
    goto gG;
}
exit;
gG:
use OTP\Handler\Forms\WordPressComments;
$gp = WordPressComments::instance();
$dW = (bool) $gp->is_form_enabled() ? "\143\x68\145\143\153\145\x64" : '';
$gm = "\x63\x68\x65\143\153\x65\x64" === $dW ? '' : "\x68\x69\x64\x64\145\156";
$o8 = $gp->get_otp_type_enabled();
$yr = $gp->bypass_for_logged_in_users() ? "\x63\x68\x65\x63\x6b\x65\x64" : '';
$St = $gp->get_phone_html_tag();
$L3 = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\145\x77\x73\57\x66\157\162\155\163\57\x77\x6f\162\144\x70\162\x65\x73\163\x63\157\x6d\x6d\x65\156\164\x73\56\x70\150\160";
