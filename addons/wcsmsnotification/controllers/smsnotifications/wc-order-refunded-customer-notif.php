<?php


use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
if (defined("\101\x42\123\120\x41\124\110")) {
    goto o3;
}
exit;
o3:
$An = remove_query_arg(array("\x73\155\163"), isset($_SERVER["\x52\x45\x51\x55\x45\123\x54\x5f\125\122\111"]) ? esc_url_raw(wp_unslash($_SERVER["\x52\105\x51\x55\105\123\124\137\125\x52\111"])) : site_url());
$pz = $TI->get_wc_order_refunded_notif();
$ar = $pz->page . "\x5f\145\156\x61\x62\x6c\145";
$hG = $pz->page . "\137\163\155\x73\142\x6f\144\171";
$rB = $pz->page . "\137\162\x65\143\151\x70\151\x65\x6e\164";
$Q2 = $pz->page . "\137\163\x65\164\164\x69\x6e\147\163";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto u5;
}
if (!(!current_user_can("\155\141\x6e\x61\x67\145\x5f\157\160\164\151\x6f\156\163") || !check_admin_referer("\155\x6f\x5f\x61\x64\155\151\156\x5f\x61\x63\164\x69\157\x6e\163"))) {
    goto SD;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
SD:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$dG = isset($_POST[$hG]) ? MoUtility::is_blank(sanitize_text_field(wp_unslash($_POST[$hG]))) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST) : $pz->default_sms_body;
$TI->get_wc_order_refunded_notif()->set_is_enabled($fJ);
$TI->get_wc_order_refunded_notif()->set_sms_body($dG);
update_wc_option("\x6e\157\164\151\146\151\x63\x61\164\x69\157\x6e\x5f\163\x65\x74\164\151\x6e\x67\163", $TI);
$pz = $TI->get_wc_order_refunded_notif();
u5:
$Ez = $pz->recipient;
$Qk = $pz->is_enabled ? "\x63\150\145\143\x6b\145\x64" : '';
$pz->available_tags = "\173\163\x69\164\145\x2d\x6e\141\155\x65\x7d\54\x7b\x6f\162\144\x65\162\x2d\156\165\x6d\142\x65\x72\x7d\54\x7b\165\163\x65\162\x6e\x61\155\x65\x7d\x2c\173\x6f\x72\144\145\x72\55\144\x61\x74\145\175";
$pz->available_tags = apply_filters("\141\x76\x61\151\154\x61\x62\154\145\137\x70\x72\x65\x6d\137\x74\141\147\x73", $pz->available_tags, "\x77\143\x5f\x70\162\145\x6d\151\x75\x6d\x5f\164\x61\147\163");
$pz->available_tags = apply_filters("\155\157\x5f\142\x69\154\x6c\x69\x6e\x67\137\x74\x61\147\163", $pz->available_tags);
$pz->available_tags = apply_filters("\x6d\x6f\137\163\150\151\x70\160\151\x6e\147\137\x74\141\x67\x73", $pz->available_tags);
require MSN_DIR . "\x2f\166\151\x65\167\163\57\x73\155\163\156\x6f\x74\151\x66\151\x63\x61\x74\151\x6f\x6e\x73\x2f\167\143\55\143\x75\x73\164\x6f\155\145\x72\x2d\x73\x6d\x73\55\x74\145\x6d\x70\x6c\141\164\x65\56\x70\x68\160";
