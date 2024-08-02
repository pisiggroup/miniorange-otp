<?php


use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
if (defined("\101\102\123\x50\101\124\110")) {
    goto M6;
}
exit;
M6:
$An = remove_query_arg(array("\x73\x6d\163"), isset($_SERVER["\x52\x45\121\125\x45\123\x54\137\x55\122\111"]) ? esc_url_raw(wp_unslash($_SERVER["\x52\105\x51\125\x45\x53\124\137\x55\x52\111"])) : site_url());
$pz = $TI->get_wc_order_processing_notif();
$ar = $pz->page . "\137\145\156\x61\142\x6c\145";
$hG = $pz->page . "\137\163\x6d\x73\x62\x6f\144\x79";
$rB = $pz->page . "\137\x72\145\143\151\x70\x69\145\156\x74";
$Q2 = $pz->page . "\x5f\163\145\x74\164\x69\x6e\x67\163";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto Qx;
}
if (!(!current_user_can("\x6d\141\156\141\147\145\x5f\157\160\164\x69\x6f\156\x73") || !check_admin_referer("\155\x6f\x5f\141\x64\x6d\x69\x6e\137\x61\x63\x74\x69\157\156\163"))) {
    goto z5;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
z5:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$dG = isset($_POST[$hG]) ? MoUtility::is_blank(sanitize_text_field(wp_unslash($_POST[$hG]))) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST) : $pz->default_sms_body;
$TI->get_wc_order_processing_notif()->set_is_enabled($fJ);
$TI->get_wc_order_processing_notif()->set_sms_body($dG);
update_wc_option("\156\157\164\x69\x66\151\143\x61\x74\x69\x6f\x6e\x5f\163\145\x74\164\x69\156\147\163", $TI);
$pz = $TI->get_wc_order_processing_notif();
Qx:
$Ez = $pz->recipient;
$Qk = $pz->is_enabled ? "\x63\150\145\x63\153\145\144" : '';
$pz->available_tags = "\x7b\163\151\x74\145\55\x6e\141\155\x65\175\54\173\x6f\x72\144\x65\x72\x2d\156\165\155\142\145\162\x7d\x2c\173\x75\163\x65\162\156\x61\155\145\175\54\x7b\157\162\x64\x65\x72\x2d\144\x61\164\x65\x7d";
$pz->available_tags = apply_filters("\141\x76\x61\151\x6c\x61\142\x6c\x65\137\160\x72\x65\155\x5f\x74\x61\147\x73", $pz->available_tags, "\167\143\137\x70\x72\145\x6d\151\x75\x6d\x5f\x74\141\147\163");
$pz->available_tags = apply_filters("\x6d\157\x5f\x62\x69\x6c\154\x69\156\147\137\164\x61\x67\x73", $pz->available_tags);
$pz->available_tags = apply_filters("\155\157\x5f\x73\150\151\x70\x70\151\156\x67\x5f\x74\x61\x67\x73", $pz->available_tags);
require MSN_DIR . "\57\166\151\145\167\x73\57\163\155\163\x6e\157\164\151\146\x69\143\x61\x74\x69\157\156\163\57\167\x63\55\143\165\163\164\x6f\x6d\x65\162\x2d\163\x6d\163\x2d\x74\145\155\160\x6c\141\x74\x65\56\x70\150\160";
