<?php


use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
if (defined("\101\102\123\x50\101\124\110")) {
    goto bC;
}
exit;
bC:
$An = remove_query_arg(array("\x73\155\163"), isset($_SERVER["\122\x45\x51\125\x45\123\124\137\x55\122\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\122\105\x51\x55\105\x53\124\x5f\125\x52\111"])) : site_url());
$pz = $TI->get_wc_order_pending_notif();
$ar = $pz->page . "\x5f\x65\156\141\142\154\x65";
$hG = $pz->page . "\x5f\163\155\x73\x62\x6f\144\171";
$rB = $pz->page . "\x5f\x72\x65\143\x69\x70\x69\x65\x6e\x74";
$Q2 = $pz->page . "\x5f\163\145\164\x74\x69\156\147\163";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto YC;
}
if (!(!current_user_can("\x6d\x61\x6e\141\x67\145\137\157\x70\164\151\x6f\x6e\x73") || !check_admin_referer("\x6d\x6f\x5f\141\144\x6d\151\156\137\x61\x63\164\151\x6f\156\x73"))) {
    goto rj;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
rj:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$dG = isset($_POST[$hG]) ? MoUtility::is_blank(sanitize_text_field(wp_unslash($_POST[$hG]))) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST) : $pz->default_sms_body;
$TI->get_wc_order_pending_notif()->set_is_enabled($fJ);
$TI->get_wc_order_pending_notif()->set_sms_body($dG);
update_wc_option("\x6e\x6f\164\151\146\151\x63\x61\x74\151\157\156\137\x73\145\164\x74\151\x6e\147\x73", $TI);
$pz = $TI->get_wc_order_pending_notif();
YC:
$Ez = $pz->recipient;
$Qk = $pz->is_enabled ? "\x63\150\x65\143\x6b\x65\x64" : '';
$pz->available_tags = "\x7b\163\x69\x74\145\x2d\x6e\141\155\145\x7d\x2c\173\157\162\144\145\162\55\156\165\155\142\x65\162\175\x2c\173\x75\x73\145\x72\156\x61\155\145\175\x2c\x7b\x6f\x72\144\145\x72\x2d\144\x61\164\x65\x7d";
$pz->available_tags = apply_filters("\x61\x76\x61\151\x6c\141\142\x6c\x65\x5f\160\x72\x65\x6d\137\x74\141\x67\x73", $pz->available_tags, "\167\x63\137\160\x72\145\155\151\165\x6d\137\164\x61\147\x73");
$pz->available_tags = apply_filters("\155\x6f\x5f\142\151\x6c\x6c\x69\156\x67\x5f\164\x61\147\x73", $pz->available_tags);
$pz->available_tags = apply_filters("\x6d\x6f\137\x73\x68\x69\x70\160\x69\156\147\x5f\164\141\147\163", $pz->available_tags);
require MSN_DIR . "\57\x76\151\x65\x77\163\57\x73\x6d\x73\156\x6f\164\151\146\x69\143\141\x74\x69\157\156\x73\x2f\167\x63\55\x63\165\x73\x74\157\x6d\145\x72\x2d\x73\x6d\163\55\x74\145\155\160\154\141\164\x65\x2e\160\150\x70";
