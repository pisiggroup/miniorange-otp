<?php


if (defined("\101\x42\123\x50\x41\x54\110")) {
    goto YV;
}
exit;
YV:
use OTP\Addons\CustomMessage\Handler\CustomMessages;
$gp = CustomMessages::instance();
$zE = $gp->moAddOnV();
$U5 = !$zE ? "\x64\x69\163\141\142\154\145\x64" : '';
$es = wp_get_current_user();
$d6 = MCM_DIR . "\143\157\156\164\x72\x6f\154\154\145\x72\x73\x2f";
$S_ = isset($_SERVER["\122\105\121\125\x45\123\x54\137\x55\x52\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\122\105\121\x55\x45\123\x54\137\x55\122\x49"])) : '';
$IM = add_query_arg(array("\160\x61\147\x65" => "\x61\144\144\157\156"), remove_query_arg("\141\x64\x64\x6f\156", $S_));
if (!isset($_GET["\141\x64\x64\x6f\x6e"])) {
    goto kY;
}
switch ($_GET["\141\x64\144\x6f\x6e"]) {
    case "\x63\x75\x73\164\157\155":
        include $d6 . "\143\165\163\x74\x6f\155\56\160\x68\x70";
        goto BW;
}
rW:
BW:
kY:
