<?php


use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
if (defined("\x41\x42\123\120\x41\x54\110")) {
    goto qv;
}
exit;
qv:
$An = remove_query_arg(array("\x73\x6d\163"), isset($_SERVER["\122\105\x51\x55\105\x53\x54\137\x55\122\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\122\x45\121\x55\105\x53\124\x5f\x55\x52\111"])) : site_url());
$pz = $TI->get_wc_admin_order_status_notif();
$ar = $pz->page . "\x5f\x65\x6e\141\x62\x6c\x65";
$hG = $pz->page . "\137\163\155\163\x62\157\144\x79";
$rB = $pz->page . "\137\162\x65\x63\151\x70\x69\x65\x6e\x74";
$Q2 = $pz->page . "\137\x73\145\164\x74\x69\x6e\x67\163";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto Gq;
}
if (!(!current_user_can("\x6d\x61\156\141\x67\145\x5f\x6f\x70\x74\x69\x6f\156\x73") || !check_admin_referer("\155\x6f\137\x61\x64\x6d\151\156\137\x61\x63\164\151\x6f\x6e\163"))) {
    goto k2;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
k2:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$Ez = maybe_serialize(explode("\x3b", MoUtility::sanitize_check($rB, $_POST)));
$dG = isset($_POST[$hG]) ? MoUtility::is_blank(sanitize_text_field(wp_unslash($_POST[$hG]))) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST) : $pz->default_sms_body;
$TI->get_wc_admin_order_status_notif()->set_is_enabled($fJ);
$TI->get_wc_admin_order_status_notif()->set_recipient($Ez);
$TI->get_wc_admin_order_status_notif()->set_sms_body($dG);
update_wc_option("\x6e\x6f\164\x69\x66\x69\x63\x61\x74\x69\x6f\x6e\137\163\x65\x74\x74\151\x6e\147\163", $TI);
$pz = $TI->get_wc_admin_order_status_notif();
Gq:
$Ez = maybe_unserialize($pz->recipient);
$Ez = is_array($Ez) ? implode("\73", $Ez) : $Ez;
$Qk = $pz->is_enabled ? "\143\x68\145\143\x6b\x65\x64" : '';
$pz->available_tags = "\x7b\163\x69\164\145\55\156\x61\x6d\145\175\x2c\173\x6f\x72\x64\x65\162\55\x6e\x75\155\x62\x65\162\x7d\54\173\165\163\x65\x72\156\141\155\x65\175\54\173\x6f\162\x64\x65\162\55\x64\141\x74\145\175\54\173\157\162\x64\x65\162\x2d\x73\164\x61\164\165\163\x7d";
$pz->available_tags = apply_filters("\x6d\157\x5f\x62\151\x6c\154\x69\x6e\x67\x5f\x74\141\147\x73", $pz->available_tags);
$pz->available_tags = apply_filters("\x6d\x6f\x5f\163\150\151\x70\x70\151\156\147\137\164\x61\147\x73", $pz->available_tags);
require MSN_DIR . "\57\x76\x69\x65\x77\x73\57\163\155\163\x6e\x6f\164\x69\x66\x69\x63\141\x74\x69\x6f\156\x73\57\167\x63\55\x61\144\155\151\156\x2d\x73\155\x73\x2d\x74\145\x6d\x70\154\x61\x74\x65\x2e\160\x68\160";
