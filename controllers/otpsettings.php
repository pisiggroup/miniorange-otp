<?php


if (defined("\x41\x42\123\120\101\x54\x48")) {
    goto ZL;
}
exit;
ZL:
use OTP\Helper\MoUtility;
$rY = get_mo_option("\142\x6c\157\143\153\x65\x64\x5f\x64\157\155\x61\x69\156\163");
$TA = get_mo_option("\x62\x6c\x6f\x63\x6b\x65\x64\137\160\x68\x6f\x6e\x65\x5f\156\165\x6d\x62\x65\x72\x73");
$aI = get_mo_option("\x73\x68\157\167\x5f\162\x65\x6d\141\x69\x6e\x69\156\147\137\x74\162\x61\156\x73") ? "\143\x68\x65\x63\x6b\x65\x64" : '';
$X4 = get_mo_option("\x73\x68\x6f\167\137\144\162\157\x70\144\157\x77\156\x5f\157\x6e\x5f\146\x6f\x72\x6d") ? "\x63\150\145\x63\x6b\x65\144" : '';
$gb = get_mo_option("\157\164\x70\137\154\145\156\147\x74\150") ? get_mo_option("\x6f\x74\x70\x5f\154\145\x6e\147\x74\x68") : 5;
$pv = get_mo_option("\157\x74\x70\x5f\166\141\154\x69\x64\x69\x74\x79") ? get_mo_option("\x6f\164\160\137\x76\141\x6c\151\x64\151\164\x79") : 5;
$uh = MoUtility::is_mg();
$Ft = $TG->get_nonce_value();
$jT = apply_filters("\x73\145\164\137\143\x6c\x61\163\163\x5f\x65\170\151\163\164\x73\137\141\160\154\x68\141\x6e\165\x6d\x65\162\151\143", false) & "\144\x69\163\x61\x62\x6c\145\144" !== $U5 ? '' : "\x64\151\163\x61\142\154\x65\x64";
$u4 = apply_filters("\x73\x65\164\137\x63\154\x61\163\163\x5f\145\x78\151\163\x74\163\137\x67\x6c\x6f\x62\141\x6c\154\x79\142\x61\x6e\156\145\x64", false) && "\144\151\163\x61\x62\154\x65\x64" !== $U5 ? '' : "\144\x69\163\x61\142\x6c\x65\x64";
$er = apply_filters("\163\x65\x74\x5f\143\x6c\141\x73\x73\137\x65\170\x69\163\x74\x73\137\x6d\x61\x73\164\145\162\157\x74\160", false) && "\144\x69\x73\141\142\154\145\144" !== $U5 ? '' : "\x64\x69\x73\141\142\x6c\x65\144";
require_once MOV_DIR . "\x76\x69\145\x77\x73\x2f\157\164\x70\163\x65\x74\164\151\x6e\147\x73\56\x70\x68\x70";