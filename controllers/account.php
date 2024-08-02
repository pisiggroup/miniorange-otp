<?php


if (defined("\101\x42\x53\x50\101\124\110")) {
    goto n1;
}
exit;
n1:
use OTP\Handler\MoRegistrationHandler;
use OTP\Helper\MoConstants;
use OTP\Helper\MoUtility;
$XF = MoConstants::HOSTNAME . "\x2f\155\157\x61\x73\x2f\x6c\x6f\x67\151\x6e\x3f\162\145\x64\x69\x72\x65\143\x74\125\162\154\75" . MoConstants::HOSTNAME . "\57\155\x6f\141\x73\57\166\151\145\x77\154\151\143\x65\156\x73\x65\153\x65\x79\163";
$gp = MoRegistrationHandler::instance();
if (get_mo_option("\162\145\147\151\163\164\162\x61\x74\151\x6f\156\137\x73\x74\x61\164\165\163") === "\x4d\x4f\x5f\x4f\124\120\x5f\104\x45\x4c\111\126\x45\x52\x45\x44\x5f\123\125\x43\x43\105\x53\123" || get_mo_option("\162\x65\x67\151\x73\164\x72\141\x74\x69\x6f\x6e\137\163\164\x61\164\x75\163") === "\x4d\117\137\x4f\x54\120\x5f\x56\x41\x4c\111\104\101\124\x49\117\x4e\x5f\106\x41\x49\114\x55\122\105" || get_mo_option("\x72\145\147\151\163\x74\162\x61\x74\151\x6f\x6e\x5f\163\x74\x61\164\x75\163") === "\115\x4f\137\117\x54\x50\x5f\x44\105\x4c\111\x56\x45\x52\105\104\x5f\106\x41\111\x4c\x55\x52\105") {
    goto tz;
}
if (get_mo_option("\166\145\162\x69\x66\x79\137\x63\165\x73\164\157\x6d\145\162")) {
    goto Xa;
}
if (!MoUtility::micr()) {
    goto Xw;
}
if (MoUtility::micr() && !MoUtility::mclv()) {
    goto vf;
}
$F_ = get_mo_option("\141\144\x6d\x69\156\137\x63\165\163\x74\157\155\x65\x72\x5f\153\x65\171");
$o1 = get_mo_option("\x61\144\x6d\151\156\137\141\x70\151\x5f\x6b\x65\x79");
$iv = get_mo_option("\143\x75\163\x74\x6f\155\x65\162\x5f\164\157\x6b\x65\156");
$j2 = MoUtility::mclv() && !MoUtility::is_mg();
$Ft = $TG->get_nonce_value();
$GN = $gp->get_nonce_value();
require_once MOV_DIR . "\166\x69\145\167\163\x2f\x61\143\x63\157\x75\156\164\x2f\160\x72\x6f\146\151\x6c\145\x2e\160\150\x70";
goto bj;
tz:
$wF = get_mo_option("\x61\144\x6d\151\x6e\137\160\x68\x6f\x6e\x65") ? get_mo_option("\141\x64\x6d\151\x6e\137\x70\x68\x6f\156\145") : '';
$Ft = $gp->get_nonce_value();
require_once MOV_DIR . "\166\x69\x65\x77\163\x2f\x61\x63\x63\x6f\x75\156\164\x2f\x76\145\x72\151\146\171\x2e\160\x68\x70";
goto bj;
Xa:
$rn = get_mo_option("\x61\x64\155\151\x6e\x5f\145\x6d\141\151\x6c") ? get_mo_option("\x61\144\x6d\x69\x6e\x5f\145\x6d\x61\151\154") : '';
$Ft = $gp->get_nonce_value();
require_once MOV_DIR . "\x76\151\145\x77\163\57\141\x63\x63\157\x75\x6e\164\x2f\x6c\157\x67\x69\x6e\x2e\160\150\x70";
goto bj;
Xw:
$UW = wp_get_current_user();
$wF = get_mo_option("\141\144\155\x69\156\137\160\x68\x6f\156\145") ? get_mo_option("\141\x64\x6d\151\156\x5f\160\150\x6f\156\145") : '';
$Ft = $gp->get_nonce_value();
delete_site_option("\160\141\x73\x73\x77\157\162\144\x5f\x6d\x69\x73\155\x61\164\x63\x68");
update_mo_option("\156\x65\x77\137\162\x65\x67\x69\x73\164\162\141\164\151\157\156", "\x74\x72\165\145");
require_once MOV_DIR . "\x76\151\x65\167\x73\x2f\141\143\x63\x6f\165\x6e\164\x2f\x72\145\147\151\x73\x74\x65\162\x2e\x70\150\x70";
goto bj;
vf:
$Ft = $gp->get_nonce_value();
require_once MOV_DIR . "\166\151\145\x77\163\x2f\141\x63\143\x6f\165\156\164\57\x76\x65\162\x69\146\x79\x2d\154\x6b\x2e\x70\150\x70";
bj:
