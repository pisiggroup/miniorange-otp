<?php


if (defined("\x41\x42\123\120\101\124\x48")) {
    goto Za;
}
exit;
Za:
define("\x55\115\123\x4e\137\104\x49\122", plugin_dir_path(__FILE__));
define("\125\115\x53\x4e\x5f\x55\122\114", plugin_dir_url(__FILE__));
define("\125\x4d\123\x4e\x5f\x56\105\122\x53\111\x4f\116", "\61\x2e\60\56\x30");
define("\125\115\123\116\137\x43\x53\x53\x5f\x55\122\x4c", UMSN_URL . "\151\156\143\154\x75\144\145\163\57\x63\163\x73\x2f\x73\x65\164\164\x69\x6e\147\x73\56\x6d\x69\x6e\x2e\x63\163\x73\x3f\x76\x65\162\163\x69\157\x6e\x3d" . UMSN_VERSION);
function get_umsn_option($f2, $tG = null)
{
    $f2 = (null === $tG ? "\x6d\x6f\x5f\165\155\137\163\155\x73\137" : $tG) . $f2;
    return get_mo_option($f2, '');
}
function update_umsn_option($T5, $bh, $tG = null)
{
    $T5 = (null === $tG ? "\x6d\157\x5f\x75\x6d\x5f\163\155\163\137" : $tG) . $T5;
    update_mo_option($T5, $bh, '');
}
