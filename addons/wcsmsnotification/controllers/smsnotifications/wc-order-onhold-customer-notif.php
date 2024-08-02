<?php


use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
if (defined("\101\x42\123\120\101\124\x48")) {
    goto qB;
}
exit;
qB:
$An = remove_query_arg(array("\x73\x6d\x73"), isset($_SERVER["\x52\105\121\x55\x45\123\124\x5f\125\122\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\122\x45\121\125\x45\123\124\137\125\x52\x49"])) : site_url());
$pz = $TI->get_wc_order_on_hold_notif();
$ar = $pz->page . "\x5f\x65\156\141\142\x6c\145";
$hG = $pz->page . "\137\163\155\x73\x62\157\x64\x79";
$rB = $pz->page . "\137\162\145\143\151\x70\151\145\156\164";
$Q2 = $pz->page . "\137\163\145\x74\164\151\x6e\x67\x73";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto e_;
}
if (!(!current_user_can("\x6d\x61\x6e\141\147\145\x5f\157\x70\x74\151\157\156\163") || !check_admin_referer("\x6d\157\137\x61\x64\x6d\151\x6e\x5f\141\143\x74\151\157\156\x73"))) {
    goto L8;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
L8:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$dG = isset($_POST[$hG]) ? MoUtility::is_blank(sanitize_text_field(wp_unslash($_POST[$hG]))) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST) : $pz->default_sms_body;
$TI->get_wc_order_on_hold_notif()->set_is_enabled($fJ);
$TI->get_wc_order_on_hold_notif()->set_sms_body($dG);
update_wc_option("\x6e\x6f\x74\x69\x66\x69\x63\141\164\x69\x6f\156\137\163\x65\x74\x74\x69\x6e\x67\163", $TI);
$pz = $TI->get_wc_order_on_hold_notif();
e_:
$Ez = $pz->recipient;
$Qk = $pz->is_enabled ? "\143\x68\x65\143\153\x65\144" : '';
$pz->available_tags = "\173\x73\151\164\145\55\156\141\155\145\175\54\173\157\x72\144\x65\x72\x2d\156\165\155\x62\145\x72\175\54\x7b\x75\163\x65\162\x6e\x61\155\145\175\54\173\157\x72\x64\145\162\55\x64\x61\164\145\x7d";
$pz->available_tags = apply_filters("\141\x76\x61\x69\154\141\x62\x6c\145\x5f\160\162\145\x6d\137\164\141\x67\x73", $pz->available_tags, "\x77\143\137\160\162\x65\155\151\x75\155\x5f\x74\x61\x67\163");
$pz->available_tags = apply_filters("\x6d\x6f\x5f\142\x69\x6c\x6c\151\x6e\x67\x5f\164\141\147\x73", $pz->available_tags);
$pz->available_tags = apply_filters("\x6d\x6f\x5f\x73\150\151\160\x70\151\x6e\x67\x5f\x74\x61\147\x73", $pz->available_tags);
require MSN_DIR . "\57\166\151\x65\167\163\57\163\155\163\156\157\164\151\x66\151\143\x61\164\x69\157\156\x73\x2f\167\143\55\143\x75\163\164\157\x6d\145\162\x2d\163\155\163\x2d\164\x65\155\160\x6c\x61\x74\145\56\x70\x68\160";
