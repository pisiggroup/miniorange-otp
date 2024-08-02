<?php


if (defined("\101\x42\x53\x50\101\124\110")) {
    goto LA;
}
exit;
LA:
use OTP\Addons\CustomMessage\Handler\CustomMessages;
$U0 = '';
$L0 = "\x63\165\x73\164\157\155\105\155\x61\x69\154\x4d\x73\147\x45\x64\x69\x74\157\162";
$F8 = array("\155\145\144\x69\x61\137\x62\165\x74\164\157\x6e\163" => false, "\x74\145\x78\164\x61\162\x65\x61\x5f\156\x61\x6d\145" => "\x63\157\156\164\x65\156\x74", "\x65\144\151\x74\157\162\x5f\150\x65\151\147\x68\164" => "\x31\67\60\160\170", "\167\160\x61\x75\164\157\x70" => false);
$gp = CustomMessages::instance();
$Ft = $gp->get_nonce_value();
$FQ = admin_post_url();
require MCM_DIR . "\x76\x69\145\167\163\x2f\x63\165\x73\x74\x6f\155\56\160\150\160";
