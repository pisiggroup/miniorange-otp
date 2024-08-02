<?php


if (defined("\x41\102\x53\120\101\124\110")) {
    goto TX;
}
exit;
TX:
use OTP\Addons\PasswordReset\Handler\UMPasswordResetHandler;
use OTP\Handler\MoActionHandlerHandler;
$gp = UMPasswordResetHandler::instance();
$TG = MoActionHandlerHandler::instance();
$jQ = $gp->is_form_enabled() ? "\x63\150\145\x63\x6b\145\144" : '';
$pB = "\143\x68\x65\x63\153\145\144" === $jQ ? '' : "\x68\x69\x64\x64\145\x6e";
$mh = $gp->get_otp_type_enabled();
$d3 = $gp->get_phone_html_tag();
$pU = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
$s9 = $gp->get_button_text();
$Ft = $TG->get_nonce_value();
$us = $gp->get_form_option();
$pn = $gp->get_phone_key_details();
$zM = $gp->getIsOnlyPhoneReset() ? "\143\150\145\x63\x6b\145\144" : '';
require UMPR_DIR . "\166\151\145\167\x73\x2f\x75\155\x70\x61\x73\163\x77\157\x72\x64\162\x65\x73\x65\164\56\x70\150\160";
