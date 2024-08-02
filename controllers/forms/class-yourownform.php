<?php


if (defined("\x41\x42\x53\120\x41\x54\110")) {
    goto Tq;
}
exit;
Tq:
use OTP\Handler\Forms\YourOwnForm;
$gp = YourOwnForm::instance();
$Qq = (bool) $gp->is_form_enabled() ? "\x63\150\145\x63\153\x65\144" : '';
$xd = "\143\150\145\x63\x6b\x65\x64" === $Qq ? '' : "\x68\x69\x64\x64\x65\156";
$my = $gp->get_otp_type_enabled();
$nu = admin_url() . "\141\x64\155\x69\156\x2e\160\150\160\x3f\160\x61\x67\145\x3d\143\165\x73\164\157\x6d\137\146\157\162\155";
$eG = $gp->get_email_key_details();
$uq = $gp->get_phone_html_tag();
$aO = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
$EJ = $gp->get_button_text();
$Ss = $gp->getSubmitKeyDetails();
$MF = $gp->getFieldKeyDetails();
require_once MOV_DIR . "\x76\x69\145\167\x73\x2f\x66\157\162\x6d\x73\57\x79\x6f\165\162\x6f\x77\156\146\x6f\x72\x6d\56\x70\x68\160";
