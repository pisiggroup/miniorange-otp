<?php


use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\WooCommerceNotificationsList;
if (defined("\x41\102\123\120\101\124\110")) {
    goto K0;
}
exit;
K0:
$TI = get_wc_option("\156\x6f\164\x69\x66\151\x63\141\x74\x69\x6f\x6e\137\163\145\x74\164\151\x6e\147\x73");
$TI = $TI ? maybe_unserialize($TI) : WooCommerceNotificationsList::instance();
$dG = '';
if (isset($_GET["\163\155\163"])) {
    goto Rh;
}
include MSN_DIR . "\x2f\x76\151\x65\167\x73\x2f\x77\143\x2d\x73\x6d\x73\55\156\157\164\151\x66\x69\x63\141\164\151\x6f\x6e\x2e\160\150\x70";
goto Sk;
Rh:
$dG = sanitize_text_field(wp_unslash($_GET["\x73\155\163"]));
$BF = $d6 . "\57\163\x6d\163\156\x6f\x74\x69\146\x69\x63\x61\164\x69\x6f\x6e\163\57";
switch ($_GET["\163\x6d\x73"]) {
    case "\x77\143\137\156\145\167\x5f\x63\x75\163\x74\x6f\155\x65\162\x5f\x6e\157\164\x69\x66":
        include $BF . "\167\143\x2d\156\145\x77\55\143\x75\163\164\157\155\145\x72\55\156\x6f\x74\x69\x66\x2e\x70\150\160";
        goto yD;
    case "\167\x63\x5f\x63\x75\x73\x74\x6f\155\x65\162\137\x6e\157\164\x65\x5f\x6e\157\164\151\x66":
        include $BF . "\x77\x63\x2d\143\165\x73\x74\x6f\x6d\x65\x72\55\x6e\x6f\x74\x65\55\156\x6f\x74\151\146\x2e\x70\150\160";
        goto yD;
    case "\167\143\137\157\162\x64\x65\x72\137\x63\x61\x6e\x63\x65\154\x6c\145\144\x5f\156\x6f\164\x69\x66":
        include $BF . "\x77\143\x2d\x6f\x72\x64\145\x72\55\143\x61\156\143\145\154\x6c\145\144\55\x63\x75\x73\x74\x6f\155\x65\x72\x2d\x6e\157\x74\151\146\x2e\160\150\160";
        goto yD;
    case "\167\x63\x5f\x6f\x72\x64\x65\162\x5f\143\157\155\160\154\x65\x74\145\x64\x5f\x6e\x6f\x74\151\146":
        include $BF . "\x77\x63\55\x6f\162\x64\x65\x72\55\x63\x6f\x6d\160\x6c\x65\164\x65\x64\x2d\x63\165\163\x74\157\x6d\145\x72\55\x6e\x6f\164\151\146\56\x70\x68\x70";
        goto yD;
    case "\x77\x63\137\x6f\162\144\145\x72\137\x66\141\x69\154\145\x64\137\x6e\157\164\151\146":
        include $BF . "\167\143\55\157\162\144\145\x72\x2d\x66\x61\x69\x6c\145\x64\x2d\x63\x75\x73\x74\157\155\x65\162\x2d\156\x6f\164\x69\146\x2e\160\x68\160";
        goto yD;
    case "\x77\x63\x5f\x6f\162\x64\x65\x72\137\x6f\156\x5f\x68\x6f\154\144\137\156\157\164\x69\146":
        include $BF . "\x77\143\x2d\x6f\162\x64\145\x72\x2d\x6f\x6e\x68\157\154\x64\55\143\165\x73\164\x6f\155\x65\162\55\156\x6f\x74\151\146\56\x70\150\x70";
        goto yD;
    case "\167\x63\137\x6f\162\144\x65\162\137\x70\x72\x6f\x63\145\x73\163\151\156\147\x5f\x6e\x6f\164\151\146":
        include $BF . "\x77\x63\55\x6f\x72\144\145\x72\x2d\160\162\x6f\x63\145\x73\x73\151\x6e\147\x2d\x63\165\x73\164\x6f\155\x65\x72\55\x6e\x6f\164\x69\x66\x2e\160\x68\x70";
        goto yD;
    case "\167\143\137\157\162\144\x65\162\137\x72\145\146\165\156\x64\x65\144\x5f\x6e\x6f\x74\x69\146":
        include $BF . "\x77\x63\x2d\x6f\x72\x64\x65\162\x2d\x72\145\x66\165\156\x64\x65\x64\55\143\165\163\164\157\x6d\x65\x72\55\x6e\x6f\164\x69\x66\x2e\x70\150\160";
        goto yD;
    case "\x77\x63\137\141\x64\155\x69\156\137\x6f\162\x64\x65\x72\x5f\x73\164\141\164\165\x73\x5f\x6e\x6f\164\151\x66":
        include $BF . "\167\x63\x2d\157\x72\144\145\162\55\163\164\x61\x74\165\x73\55\141\x64\x6d\151\156\55\156\x6f\x74\x69\146\56\x70\150\160";
        goto yD;
    case "\167\143\x5f\x6f\x72\x64\x65\x72\137\x70\145\x6e\144\151\156\x67\x5f\x6e\x6f\164\151\146":
        include $BF . "\x77\x63\x2d\x6f\162\144\x65\x72\55\160\x65\156\144\x69\156\x67\55\143\x75\x73\164\157\155\145\x72\55\x6e\157\164\151\x66\56\x70\x68\160";
        goto yD;
}
di:
yD:
Sk:
function show_notifications_table(WooCommerceNotificationsList $Mn)
{
    foreach ($Mn as $W6 => $O4) {
        $XF = add_query_arg(array("\x73\155\163" => $O4->page), isset($_SERVER["\122\x45\121\x55\105\x53\x54\137\x55\122\111"]) ? esc_url_raw(wp_unslash($_SERVER["\x52\105\x51\125\x45\123\124\x5f\125\122\111"])) : site_url());
        echo "\11\x3c\x74\x72\76\15\12\40\x20\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\x20\x20\40\x20\x3c\164\144\x20\143\x6c\141\x73\163\75\x22\x6d\163\x6e\55\x74\141\x62\154\145\x2d\x6c\151\163\x74\x2d\x73\164\x61\x74\165\x73\x22\76\xd\xa\x20\40\40\40\40\40\40\x20\40\40\40\40\40\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\74\163\160\x61\156\40\x63\154\141\163\x73\x3d\42" . ($O4->is_enabled ? "\x73\x74\141\164\x75\x73\x2d\x65\156\x61\x62\154\x65\x64" : '') . "\42\76\74\57\163\x70\x61\156\x3e\xd\xa\x20\40\x20\40\x20\x20\40\40\40\x20\40\x20\x20\x20\x20\40\40\40\x20\40\74\x2f\x74\144\x3e\xd\12\40\40\x20\40\40\x20\40\x20\40\40\40\x20\x20\x20\40\x20\x20\40\x20\x20\x3c\x74\x64\x20\x63\154\x61\x73\163\x3d\42\155\x73\156\x2d\x74\x61\142\154\x65\x2d\154\151\163\164\x2d\x6e\x61\155\x65\x22\x3e\xd\xa\x20\x20\40\40\40\x20\x20\x20\x20\40\x20\40\40\x20\40\40\x20\40\x20\x20\x20\40\x20\40\74\x61\40\150\x72\x65\146\75\x22" . esc_url($XF) . "\42\76" . esc_attr($O4->title) . "\74\x2f\141\76";
        mo_draw_tooltip(MoWcAddOnMessages::showMessage($O4->tool_tip_header), MoWcAddOnMessages::showMessage($O4->tool_tip_body));
        echo "\x9\11\74\57\x74\x64\x3e\xd\xa\x20\40\x20\40\40\40\40\40\x20\40\x20\40\40\x20\x20\40\x20\40\x20\x20\x3c\x74\144\x20\x63\x6c\141\x73\x73\75\x22\155\163\156\55\x74\x61\x62\x6c\145\55\154\x69\x73\164\55\x72\145\143\151\x70\x69\x65\156\x74\42\x20\x73\164\171\x6c\145\x3d\x22\x77\157\162\x64\x2d\167\162\141\x70\72\40\x62\162\145\x61\x6b\55\167\157\162\144\x3b\x22\76\xd\12\40\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\40\40\40\40\40\x20\40\40\x20\x20\x20\x20" . esc_html($O4->notification_type) . "\15\12\x20\x20\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\40\40\40\40\40\40\40\74\x2f\x74\x64\x3e\xd\12\x20\x20\x20\40\x20\40\x20\x20\x20\40\40\40\40\x20\x20\40\40\40\40\40\74\x74\144\x20\x63\154\x61\x73\x73\75\42\155\163\156\55\164\141\x62\154\x65\x2d\x6c\151\x73\164\55\x73\x74\141\x74\165\163\55\141\x63\x74\x69\x6f\156\x73\x22\x3e\15\xa\40\40\40\x20\40\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\40\40\40\40\x3c\141\x20\143\x6c\141\163\163\75\x22\x62\165\164\164\157\156\40\141\x6c\x69\147\156\x72\151\x67\150\x74\x20\164\x69\160\163\42\40\x68\x72\x65\146\x3d\42" . esc_url($XF) . "\42\76\x43\157\x6e\146\151\147\x75\x72\145\74\57\141\x3e\xd\12\x20\x20\40\40\x20\x20\40\x20\x20\40\40\40\40\40\x20\40\40\40\40\x20\x3c\57\164\144\x3e\xd\xa\40\x20\x20\x20\x20\40\x20\40\x20\x20\x20\x20\40\x20\40\x20\x3c\57\164\162\x3e";
        br:
    }
    ui:
}
