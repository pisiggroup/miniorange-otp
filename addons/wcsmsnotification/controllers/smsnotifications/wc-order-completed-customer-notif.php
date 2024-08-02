<?php


use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
if (defined("\x41\102\x53\x50\101\124\x48")) {
    goto x6;
}
exit;
x6:
$An = remove_query_arg(array("\x73\155\163"), isset($_SERVER["\x52\x45\121\125\x45\123\124\137\x55\122\111"]) ? esc_url_raw(wp_unslash($_SERVER["\122\x45\x51\x55\x45\x53\x54\137\x55\122\x49"])) : site_url());
$pz = $TI->get_wc_order_completed_notif();
$ar = $pz->page . "\x5f\145\156\x61\142\x6c\145";
$hG = $pz->page . "\137\x73\x6d\163\142\x6f\x64\x79";
$rB = $pz->page . "\x5f\162\145\143\151\160\x69\x65\x6e\164";
$Q2 = $pz->page . "\x5f\x73\x65\x74\164\x69\156\x67\x73";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto T4;
}
if (!(!current_user_can("\155\141\x6e\141\147\145\137\x6f\x70\x74\x69\157\156\x73") || !check_admin_referer("\155\157\x5f\141\x64\155\151\156\x5f\x61\x63\x74\151\x6f\156\163"))) {
    goto wV;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
wV:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$dG = isset($_POST[$hG]) ? MoUtility::is_blank(sanitize_text_field(wp_unslash($_POST[$hG]))) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST) : $pz->default_sms_body;
$TI->get_wc_order_completed_notif()->set_is_enabled($fJ);
$TI->get_wc_order_completed_notif()->set_sms_body($dG);
update_wc_option("\x6e\157\164\x69\x66\151\143\141\164\x69\x6f\156\x5f\x73\x65\x74\x74\151\x6e\147\163", $TI);
$pz = $TI->get_wc_order_completed_notif();
T4:
$Ez = $pz->recipient;
$Qk = $pz->is_enabled ? "\143\x68\x65\x63\x6b\145\x64" : '';
$pz->available_tags = "\173\163\x69\x74\x65\x2d\x6e\x61\155\145\x7d\x2c\173\157\162\144\x65\x72\x2d\x6e\165\x6d\x62\x65\x72\x7d\x2c\173\165\163\x65\162\x6e\141\155\145\x7d\54\173\157\x72\144\145\162\55\x64\x61\x74\x65\175";
$pz->available_tags = apply_filters("\x61\x76\x61\151\x6c\141\x62\154\x65\137\160\162\145\x6d\x5f\164\x61\x67\x73", $pz->available_tags, "\x77\143\x5f\160\162\x65\x6d\x69\x75\x6d\x5f\x74\141\147\x73");
$pz->available_tags = apply_filters("\x6d\x6f\137\x62\151\154\x6c\x69\156\147\x5f\164\x61\x67\x73", $pz->available_tags);
$pz->available_tags = apply_filters("\x6d\157\137\163\x68\151\x70\x70\151\156\147\x5f\x74\x61\147\x73", $pz->available_tags);
require MSN_DIR . "\57\166\151\145\167\163\x2f\x73\155\x73\x6e\157\x74\x69\146\151\143\x61\164\151\x6f\x6e\x73\x2f\x77\x63\x2d\143\x75\x73\164\x6f\x6d\x65\x72\x2d\163\x6d\163\55\x74\145\x6d\x70\x6c\x61\164\x65\56\x70\x68\x70";
