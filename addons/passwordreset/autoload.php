<?php


if (defined("\x41\x42\x53\120\101\x54\110")) {
    goto jt;
}
exit;
jt:
define("\x55\x4d\x50\x52\x5f\104\x49\x52", plugin_dir_path(__FILE__));
define("\125\x4d\x50\122\x5f\125\122\114", plugin_dir_url(__FILE__));
define("\x55\x4d\120\x52\x5f\126\105\x52\x53\111\x4f\116", "\x31\56\60\x2e\60");
define("\x55\115\x50\x52\x5f\103\x53\x53\x5f\x55\122\114", UMPR_URL . "\151\156\x63\154\x75\144\x65\x73\x2f\x63\x73\163\57\163\x65\164\x74\151\x6e\x67\x73\56\x6d\151\156\x2e\143\x73\x73\77\x76\x65\x72\163\x69\x6f\x6e\75" . UMPR_VERSION);
function get_umpr_option($f2, $tG = null)
{
    $f2 = (null === $tG ? "\155\157\137\165\155\137\160\x72\137" : $tG) . $f2;
    return get_mo_option($f2, '');
}
function update_umpr_option($T5, $bh, $tG = null)
{
    $T5 = (null === $tG ? "\155\157\x5f\165\x6d\137\160\162\137" : $tG) . $T5;
    update_mo_option($T5, $bh, '');
}
