<?php


use OTP\Addons\WcSMSNotification\Handler\WooCommerceNotifications;
if (defined("\101\102\x53\120\x41\x54\x48")) {
    goto i6;
}
exit;
i6:
$zE = WooCommerceNotifications::instance()->moAddOnV();
$U5 = !$zE ? "\144\x69\163\x61\x62\154\145\x64" : '';
$UW = wp_get_current_user();
$d6 = MSN_DIR . "\143\x6f\x6e\x74\x72\x6f\x6c\154\x65\162\163\x2f";
$XF = isset($_SERVER["\x52\x45\x51\125\105\123\124\x5f\x55\122\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\x52\x45\121\x55\105\123\124\137\125\x52\111"])) : '';
$IM = add_query_arg(array("\160\x61\x67\145" => "\x61\x64\x64\157\x6e"), remove_query_arg("\141\x64\144\157\156", $XF));
if (!isset($_GET["\x61\x64\x64\157\156"])) {
    goto Fr;
}
switch ($_GET["\141\x64\144\x6f\x6e"]) {
    case "\x77\x6f\157\143\x6f\x6d\155\x65\x72\x63\x65\137\156\x6f\164\151\146":
        include $d6 . "\167\x63\55\163\155\163\55\x6e\157\x74\151\x66\151\143\x61\x74\x69\x6f\156\x2e\x70\x68\x70";
        goto tB;
}
Fe:
tB:
Fr:
