<?php


use OTP\Addons\UmSMSNotification\Helper\UltimateMemberNotificationsList;
use OTP\Addons\UmSMSNotification\Helper\UltimateMemberSMSNotificationMessages;
if (defined("\x41\102\123\x50\101\124\110")) {
    goto AA;
}
exit;
AA:
$TI = maybe_unserialize(get_umsn_option("\x6e\x6f\x74\x69\146\151\x63\x61\x74\151\x6f\x6e\x5f\163\x65\164\164\x69\x6e\x67\163"));
$TI = $TI ? $TI : UltimateMemberNotificationsList::instance();
$dG = '';
if (isset($_GET["\163\155\163"])) {
    goto Cb;
}
include UMSN_DIR . "\x2f\x76\151\145\x77\163\x2f\165\x6d\55\163\x6d\x73\x2d\156\x6f\x74\151\x66\151\x63\141\164\151\157\x6e\56\x70\150\x70";
goto Lt;
Cb:
$dG = sanitize_text_field(wp_unslash($_GET["\x73\155\x73"]));
$BF = $d6 . "\x2f\163\155\163\x6e\x6f\164\x69\146\151\143\141\x74\151\157\156\163\x2f";
switch ($_GET["\163\155\163"]) {
    case "\165\155\137\156\145\x77\x5f\143\165\163\x74\x6f\155\145\162\x5f\156\157\x74\151\x66":
        include $BF . "\x75\x6d\x2d\x6e\145\x77\x2d\x63\165\163\164\x6f\155\x65\162\x2d\156\x6f\164\x69\x66\56\160\150\160";
        goto ab;
    case "\x75\x6d\137\156\145\x77\137\143\165\163\x74\157\x6d\145\162\x5f\x61\144\155\x69\156\137\156\157\164\x69\x66":
        include $BF . "\x75\x6d\x2d\x6e\145\167\x2d\143\x75\163\164\157\x6d\145\x72\x2d\141\144\155\x69\156\55\x6e\157\164\x69\x66\x2e\x70\150\x70";
        goto ab;
}
lK:
ab:
Lt:
function show_notifications_table(UltimateMemberNotificationsList $Mn)
{
    foreach ($Mn as $W6 => $O4) {
        $XF = add_query_arg(array("\x73\x6d\x73" => $O4->page), isset($_SERVER["\122\x45\x51\x55\105\123\x54\137\x55\x52\111"]) ? esc_url_raw(wp_unslash($_SERVER["\122\105\121\125\x45\123\x54\137\125\122\111"])) : '');
        echo "\11\74\x74\162\76\xd\12\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\40\40\x20\40\x20\x3c\164\x64\40\143\154\x61\163\x73\x3d\42\165\155\x73\x6e\x2d\164\141\142\x6c\145\55\x6c\151\x73\164\x2d\163\x74\x61\164\x75\163\x22\76\xd\xa\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\x20\x20\40\40\40\x20\x20\x20\x20\x20\x20\x3c\x73\160\141\156\x20\143\x6c\x61\163\x73\x3d\x22" . ($O4->is_enabled ? "\x73\x74\x61\164\x75\163\55\x65\x6e\x61\x62\x6c\x65\x64" : '') . "\42\76\x3c\x2f\163\160\x61\156\x3e\xd\12\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\40\40\40\x20\x20\40\x3c\57\164\x64\76\15\12\40\x20\x20\40\x20\x20\x20\x20\x20\x20\40\40\x20\40\40\x20\x20\x20\40\40\74\x74\x64\40\143\154\141\163\x73\75\42\165\x6d\163\x6e\x2d\164\141\x62\x6c\145\x2d\x6c\x69\x73\x74\55\x6e\141\155\x65\x22\x3e\15\12\40\x20\40\40\40\40\x20\x20\x20\x20\40\40\40\x20\40\40\40\x20\x20\40\40\x20\x20\40\74\x61\x20\x68\162\x65\146\x3d\42" . esc_url($XF) . "\x22\x3e" . esc_attr($O4->title) . "\74\x2f\x61\76";
        mo_draw_tooltip(UltimateMemberSMSNotificationMessages::showMessage($O4->tool_tip_header), UltimateMemberSMSNotificationMessages::showMessage($O4->tool_tip_body));
        echo "\11\11\74\57\x74\x64\76\xd\xa\x20\x20\40\40\40\x20\x20\x20\40\40\40\40\x20\x20\x20\x20\40\x20\x20\x20\x3c\x74\144\40\x63\154\x61\x73\x73\x3d\42\165\155\x73\x6e\x2d\x74\x61\142\154\145\x2d\154\x69\x73\164\x2d\x72\145\143\151\160\x69\145\x6e\164\42\40\163\164\x79\154\x65\x3d\x22\x77\x6f\162\x64\x2d\x77\x72\141\160\72\x20\x62\x72\145\141\153\x2d\x77\x6f\x72\x64\x3b\42\76\xd\12\x20\40\x20\x20\40\40\40\x20\40\40\40\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\40\x20" . esc_html($O4->notification_type) . "\15\xa\40\40\x20\x20\40\40\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\40\x20\40\74\57\164\x64\x3e\xd\12\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\x3c\x74\x64\x20\143\154\141\163\x73\75\42\x75\x6d\163\x6e\x2d\x74\141\x62\x6c\x65\55\154\151\x73\x74\x2d\x73\x74\141\x74\x75\163\55\141\143\164\151\x6f\x6e\x73\x22\76\xd\12\x20\x20\40\x20\40\40\x20\40\40\40\x20\40\40\40\40\x20\x20\x20\40\x20\x20\40\x20\x20\x3c\141\x20\143\x6c\x61\x73\163\75\x22\142\x75\x74\164\157\x6e\x20\x61\154\151\x67\x6e\162\x69\147\150\164\x20\164\x69\160\163\x22\40\150\x72\145\x66\75\42" . esc_url($XF) . "\x22\76\x43\x6f\156\x66\151\x67\x75\x72\x65\74\57\141\x3e\15\12\40\40\40\40\40\x20\x20\x20\40\x20\40\x20\40\40\x20\40\40\40\x20\x20\74\x2f\x74\144\x3e\15\xa\x20\40\x20\x20\40\40\x20\40\x20\40\40\x20\40\40\40\40\x3c\x2f\164\x72\x3e";
        oI:
    }
    xF:
}
