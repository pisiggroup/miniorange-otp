<?php


if (defined("\101\102\123\120\101\x54\x48")) {
    goto VH;
}
exit;
VH:
use OTP\Handler\Forms\WooCommerceBilling;
$gp = WooCommerceBilling::instance();
$pK = (bool) $gp->is_form_enabled() ? "\143\x68\x65\x63\153\x65\144" : '';
$lT = "\143\x68\x65\143\x6b\x65\144" === $pK ? '' : "\150\151\144\144\145\x6e";
$cf = $gp->get_otp_type_enabled();
$Qn = $gp->get_phone_html_tag();
$Up = $gp->get_email_html_tag();
$Em = (bool) $gp->restrict_duplicates() ? "\x63\x68\145\143\153\x65\x64" : '';
$EJ = $gp->get_button_text();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\x69\145\167\163\57\146\157\162\155\163\x2f\167\x6f\x6f\x63\157\x6d\x6d\145\162\x63\x65\142\x69\154\x6c\x69\156\x67\x2e\x70\x68\x70";
