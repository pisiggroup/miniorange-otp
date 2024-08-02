<?php


if (defined("\x41\x42\123\x50\101\x54\110")) {
    goto OW;
}
exit;
OW:
define("\x4d\123\116\137\x44\x49\x52", plugin_dir_path(__FILE__));
define("\115\123\x4e\137\x55\x52\x4c", plugin_dir_url(__FILE__));
define("\115\x53\x4e\137\126\105\122\123\x49\x4f\x4e", "\x31\56\x30\56\60");
define("\115\x53\x4e\x5f\103\123\123\137\x55\122\114", MSN_URL . "\151\156\143\x6c\165\144\145\x73\57\143\163\x73\x2f\x73\145\164\164\x69\x6e\147\x73\x2e\155\x69\156\x2e\x63\x73\x73\x3f\166\145\x72\163\x69\157\x6e\75" . MSN_VERSION);
define("\115\x53\116\x5f\112\123\137\125\122\114", MSN_URL . "\151\156\143\x6c\165\144\x65\163\57\x6a\x73\x2f\x73\x65\x74\164\x69\x6e\x67\x73\x2e\x6d\x69\x6e\x2e\152\x73\77\166\x65\x72\x73\151\157\x6e\x3d" . MSN_VERSION);
function get_wc_option($f2, $tG = null)
{
    $f2 = (null === $tG ? "\155\157\137\167\143\x5f\163\x6d\x73\137" : $tG) . $f2;
    return get_mo_option($f2, '');
}
function update_wc_option($T5, $bh, $tG = null)
{
    $T5 = (null === $tG ? "\155\157\137\x77\143\x5f\x73\155\x73\137" : $tG) . $T5;
    update_mo_option($T5, $bh, '');
}
