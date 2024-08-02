<?php


if (defined("\x41\102\123\x50\x41\124\110")) {
    goto sf;
}
exit;
sf:
use OTP\Handler\Forms\WooCommerceCheckOutForm;
$gp = WooCommerceCheckOutForm::instance();
$rJ = $gp->is_form_enabled() ? "\143\x68\145\x63\x6b\145\144" : '';
$gr = "\143\x68\x65\x63\153\145\144" === $rJ ? '' : "\x73\x74\171\154\145\x3d\x64\x69\x73\160\154\x61\x79\x3a\156\157\156\x65";
$Sp = $gp->get_otp_type_enabled();
$JI = $gp->isGuestCheckoutOnlyEnabled() ? "\x63\150\145\x63\153\145\x64" : '';
$wi = $gp->showButtonInstead() ? "\143\x68\145\x63\x6b\145\x64" : '';
$od = $gp->isPopUpEnabled() ? "\x63\150\145\143\153\145\144" : '';
$Gd = $gp->getPaymentMethods();
$yk = $gp->isSelectivePaymentEnabled() ? "\143\x68\145\x63\x6b\x65\x64" : '';
$Pg = "\143\150\x65\143\153\145\144" === $yk ? '' : "\150\x69\144\144\145\156";
$NL = $gp->get_phone_html_tag();
$FI = $gp->get_email_html_tag();
$EJ = $gp->get_button_text();
$p1 = $gp->get_form_name();
$JY = $gp->isAutoLoginDisabled() ? "\x63\x68\x65\x63\x6b\145\144" : '';
$c8 = $gp->restrict_duplicates() ? "\143\x68\145\143\153\x65\x64" : '';
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\145\167\x73\x2f\x66\157\162\155\163\57\167\x6f\x6f\x63\x6f\155\155\x65\162\143\145\143\150\145\143\153\x6f\x75\164\146\157\162\155\56\160\150\160";
