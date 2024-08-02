<?php


if (defined("\101\102\x53\x50\x41\124\x48")) {
    goto Vq;
}
exit;
Vq:
use OTP\Helper\MoConstants;
$Ft = $TG->get_nonce_value();
$ZG = get_mo_option("\141\x64\x6d\151\156\x5f\145\x6d\141\151\154");
$M9 = get_mo_option("\141\x64\155\x69\x6e\x5f\x70\x68\x6f\x6e\x65");
$M9 = $M9 ? $M9 : '';
$B2 = MoConstants::FEEDBACK_EMAIL;
require_once MOV_DIR . "\166\151\145\x77\x73\x2f\x73\165\160\x70\157\162\x74\x2e\x70\150\160";
