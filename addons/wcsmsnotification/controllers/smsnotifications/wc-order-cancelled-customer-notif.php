<?php


use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
if (defined("\101\x42\123\120\x41\124\110")) {
    goto Yb;
}
exit;
Yb:
$An = remove_query_arg(array("\x73\x6d\163"), isset($_SERVER["\122\105\121\125\105\x53\x54\137\x55\x52\111"]) ? esc_url_raw(wp_unslash($_SERVER["\122\x45\x51\125\x45\x53\x54\137\x55\122\111"])) : site_url());
$pz = $TI->get_wc_order_cancelled_notif();
$ar = $pz->page . "\137\145\156\141\142\x6c\x65";
$hG = $pz->page . "\x5f\x73\x6d\x73\142\x6f\x64\x79";
$rB = $pz->page . "\x5f\162\145\x63\151\160\x69\145\x6e\164";
$Q2 = $pz->page . "\x5f\x73\145\164\x74\151\156\x67\163";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto tr;
}
if (!(!current_user_can("\x6d\141\156\x61\x67\145\137\157\x70\164\151\157\x6e\x73") || !check_admin_referer("\x6d\x6f\x5f\x61\144\x6d\151\156\x5f\141\143\x74\x69\x6f\x6e\163"))) {
    goto Eh;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
Eh:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$dG = isset($_POST[$hG]) ? MoUtility::is_blank(sanitize_text_field(wp_unslash($_POST[$hG]))) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST) : $pz->default_sms_body;
$TI->get_wc_order_cancelled_notif()->set_is_enabled($fJ);
$TI->get_wc_order_cancelled_notif()->set_sms_body($dG);
update_wc_option("\x6e\x6f\x74\151\x66\151\143\141\x74\x69\x6f\156\x5f\163\145\164\164\151\x6e\x67\x73", $TI);
$pz = $TI->get_wc_order_cancelled_notif();
tr:
$Ez = $pz->recipient;
$Qk = $pz->is_enabled ? "\143\150\x65\x63\153\x65\144" : '';
$pz->available_tags = "\x7b\163\151\164\145\x2d\156\x61\155\145\175\54\x7b\157\162\x64\145\x72\55\156\x75\155\142\x65\x72\175\x2c\173\165\x73\x65\x72\x6e\x61\155\x65\x7d\x2c\x7b\x6f\162\144\145\162\x2d\x64\141\x74\x65\175";
$pz->available_tags = apply_filters("\141\166\141\151\154\141\x62\154\145\x5f\160\x72\x65\x6d\x5f\164\x61\x67\163", $pz->available_tags, "\x77\x63\x5f\x70\162\145\155\151\x75\x6d\x5f\164\x61\147\x73");
$pz->available_tags = apply_filters("\155\x6f\x5f\x62\x69\x6c\x6c\151\156\x67\x5f\x74\141\147\163", $pz->available_tags);
$pz->available_tags = apply_filters("\x6d\157\x5f\163\150\151\160\x70\151\156\147\137\x74\x61\x67\x73", $pz->available_tags);
require MSN_DIR . "\57\x76\151\x65\x77\163\57\x73\x6d\x73\x6e\157\164\151\146\x69\x63\x61\164\151\157\156\x73\x2f\167\143\55\x63\x75\x73\x74\157\x6d\145\x72\55\x73\x6d\x73\55\x74\145\155\160\x6c\141\164\145\x2e\x70\x68\x70";
