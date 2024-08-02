<?php


if (defined("\101\102\x53\120\101\x54\110")) {
    goto Ay;
}
exit;
Ay:
use OTP\Handler\CustomForm;
$Ft = $TG->get_nonce_value();
$gp = CustomForm::instance();
$Ss = $gp->getSubmitKeyDetails();
$Qq = '' !== $Ss || empty($Ss);
$Qe = get_mo_option("\x63\146\x5f\145\x6e\141\x62\x6c\145\x5f\164\x79\x70\x65", "\155\157\x5f\157\x74\x70\x5f");
$MF = $gp->get_field_key_details();
$uq = $gp->get_phone_html_tag();
$aO = $gp->get_email_html_tag();
$EJ = $gp->get_button_text();
require_once MOV_DIR . "\x76\x69\x65\167\x73\x2f\143\165\x73\164\x6f\x6d\x66\157\162\155\x2e\x70\x68\160";
