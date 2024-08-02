<?php


if (defined("\x41\102\x53\120\101\124\110")) {
    goto Cr;
}
exit;
Cr:
use OTP\Handler\Forms\WooCommerceProductVendors;
$gp = WooCommerceProductVendors::instance();
$lX = (bool) $gp->is_form_enabled() ? "\x63\150\x65\x63\153\145\x64" : '';
$MJ = "\143\150\x65\x63\153\145\x64" === $lX ? '' : "\x68\x69\144\144\x65\156";
$vE = $gp->get_otp_type_enabled();
$pI = (bool) $gp->restrict_duplicates() ? "\143\x68\145\143\x6b\145\x64" : '';
$wR = $gp->get_phone_html_tag();
$tr = $gp->get_email_html_tag();
$vZ = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
$w6 = $gp->is_ajax_form();
$VB = $w6 ? "\143\x68\x65\x63\153\145\144" : '';
$Ue = $gp->get_button_text();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\x65\167\163\x2f\146\x6f\x72\155\163\57\167\157\157\143\157\155\x6d\145\x72\143\x65\160\x72\157\144\x75\143\x74\x76\x65\156\x64\157\x72\163\56\x70\150\x70";
