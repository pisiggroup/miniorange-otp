<?php


use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
if (defined("\x41\102\x53\x50\x41\x54\x48")) {
    goto wU;
}
exit;
wU:
$An = remove_query_arg(array("\163\155\x73"), isset($_SERVER["\x52\105\x51\125\105\x53\124\x5f\x55\122\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\x52\105\x51\125\105\x53\x54\x5f\125\x52\x49"])) : site_url());
$pz = $TI->get_wc_order_failed_notif();
$ar = $pz->page . "\x5f\145\x6e\x61\142\154\x65";
$hG = $pz->page . "\x5f\163\x6d\x73\142\157\x64\171";
$rB = $pz->page . "\137\x72\145\143\151\160\151\145\x6e\164";
$Q2 = $pz->page . "\137\163\145\x74\164\151\x6e\x67\163";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto vF;
}
if (!(!current_user_can("\x6d\141\156\x61\x67\145\x5f\157\x70\164\x69\x6f\156\163") || !check_admin_referer("\155\x6f\x5f\141\x64\155\151\156\x5f\141\143\x74\151\157\x6e\x73"))) {
    goto fr;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
fr:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$dG = isset($_POST[$hG]) ? MoUtility::is_blank(sanitize_text_field(wp_unslash($_POST[$hG]))) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST) : $pz->default_sms_body;
$TI->get_wc_order_failed_notif()->set_is_enabled($fJ);
$TI->get_wc_order_failed_notif()->set_sms_body($dG);
update_wc_option("\156\x6f\164\x69\x66\151\143\x61\164\151\x6f\x6e\137\x73\145\x74\x74\151\156\147\163", $TI);
$pz = $TI->get_wc_order_failed_notif();
vF:
$Ez = $pz->recipient;
$Qk = $pz->is_enabled ? "\143\x68\x65\143\x6b\145\144" : '';
$pz->available_tags = "\x7b\163\151\164\145\x2d\x6e\x61\x6d\x65\175\x2c\x7b\157\162\x64\x65\162\x2d\156\165\155\142\145\x72\175\x2c\173\x75\163\145\162\156\x61\155\x65\175\54\x7b\157\x72\x64\x65\x72\55\x64\x61\164\145\x7d";
$pz->available_tags = apply_filters("\x61\x76\141\x69\154\141\x62\154\145\x5f\x70\162\x65\155\x5f\x74\x61\x67\163", $pz->available_tags, "\x77\143\x5f\x70\162\145\155\151\165\x6d\137\x74\x61\x67\163");
$pz->available_tags = apply_filters("\x6d\x6f\137\x62\151\154\x6c\151\156\x67\x5f\x74\141\x67\x73", $pz->available_tags);
$pz->available_tags = apply_filters("\155\x6f\x5f\x73\150\151\160\160\151\x6e\x67\x5f\x74\141\x67\163", $pz->available_tags);
require MSN_DIR . "\x2f\x76\x69\x65\167\163\57\x73\x6d\163\x6e\157\164\151\146\151\143\x61\164\151\157\x6e\x73\x2f\167\x63\55\x63\x75\x73\x74\157\x6d\145\162\x2d\x73\155\x73\55\164\145\x6d\160\x6c\x61\x74\145\56\160\150\x70";
