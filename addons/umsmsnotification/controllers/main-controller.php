<?php


use OTP\Addons\UmSMSNotification\Handler\UltimateMemberSMSNotificationsHandler;
if (defined("\x41\x42\123\120\101\124\x48")) {
    goto Fv;
}
exit;
Fv:
$gp = UltimateMemberSMSNotificationsHandler::instance();
$zE = $gp->moAddOnV();
$U5 = !$zE ? "\x64\x69\163\x61\x62\154\145\144" : '';
$UW = wp_get_current_user();
$d6 = UMSN_DIR . "\x63\x6f\156\164\162\157\154\x6c\145\x72\163\57";
$IM = add_query_arg(array("\x70\141\147\x65" => "\x61\144\144\157\156"), remove_query_arg("\x61\144\144\157\156", isset($_SERVER["\122\x45\x51\125\105\x53\x54\137\x55\122\111"]) ? esc_url_raw(wp_unslash($_SERVER["\x52\105\x51\x55\x45\123\x54\x5f\x55\x52\111"])) : ''));
if (!isset($_GET["\141\144\x64\157\156"])) {
    goto iA;
}
switch ($_GET["\x61\144\144\157\156"]) {
    case "\x75\x6d\137\156\157\164\x69\146":
        include $d6 . "\165\155\x2d\163\x6d\x73\x2d\x6e\x6f\164\151\x66\151\143\141\164\151\157\156\x2e\160\x68\160";
        goto zo;
}
eJ:
zo:
iA:
