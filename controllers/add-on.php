<?php


if (defined("\101\102\123\x50\101\x54\x48")) {
    goto zP;
}
exit;
zP:
$Ke = isset($_SERVER["\x52\x45\x51\125\105\123\124\x5f\x55\x52\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\x52\105\121\x55\x45\123\124\x5f\125\x52\111"])) : '';
$RF = add_query_arg(array("\x61\x64\x64\x6f\156" => "\167\x6f\157\143\157\x6d\155\x65\162\143\x65\137\156\157\164\151\146"), $Ke);
$ip = add_query_arg(array("\x61\x64\144\x6f\x6e" => "\x63\165\x73\x74\157\155"), $Ke);
$az = add_query_arg(array("\x61\144\x64\x6f\x6e" => "\165\155\x5f\x6e\157\164\151\x66"), $Ke);
$hF = add_query_arg(array("\x61\x64\144\157\x6e" => "\x75\155\160\162\137\156\x6f\164\151\x66"), $Ke);
$r3 = add_query_arg(array("\x61\x64\144\x6f\x6e" => "\167\143\x70\x72\137\156\157\164\151\x66"), $Ke);
if (!isset($_GET["\x61\144\144\x6f\156"])) {
    goto tE;
}
return;
tE:
require_once MOV_DIR . "\x76\x69\145\167\x73\x2f\x61\144\144\x2d\157\x6e\56\160\150\x70";
