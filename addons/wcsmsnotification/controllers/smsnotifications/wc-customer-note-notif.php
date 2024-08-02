<?php


use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
if (defined("\101\x42\123\120\x41\x54\110")) {
    goto zg;
}
exit;
zg:
$An = remove_query_arg(array("\x73\155\x73"), isset($_SERVER["\122\105\x51\x55\105\x53\x54\x5f\x55\122\111"]) ? esc_url_raw(wp_unslash($_SERVER["\122\x45\x51\x55\105\123\124\x5f\x55\x52\111"])) : site_url());
$pz = $TI->get_wc_customer_note_notif();
$ar = $pz->page . "\137\145\156\x61\142\154\145";
$hG = $pz->page . "\137\163\x6d\163\142\157\x64\171";
$rB = $pz->page . "\x5f\x72\x65\x63\x69\x70\x69\145\x6e\x74";
$Q2 = $pz->page . "\137\x73\x65\164\164\x69\156\x67\x73";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto DV;
}
if (!(!current_user_can("\x6d\141\x6e\141\x67\145\x5f\157\x70\164\151\x6f\156\163") || !check_admin_referer("\x6d\157\137\x61\x64\x6d\151\x6e\x5f\x61\143\x74\151\157\156\163"))) {
    goto EQ;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
EQ:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$dG = isset($_POST[$hG]) ? MoUtility::is_blank(sanitize_text_field(wp_unslash($_POST[$hG]))) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST) : $pz->default_sms_body;
$TI->get_wc_customer_note_notif()->set_is_enabled($fJ);
$TI->get_wc_customer_note_notif()->set_sms_body($dG);
update_wc_option("\156\x6f\164\151\x66\x69\x63\x61\164\x69\157\156\x5f\163\145\164\164\151\x6e\x67\x73", $TI);
$pz = $TI->get_wc_customer_note_notif();
DV:
$Ez = $pz->recipient;
$Qk = $pz->is_enabled ? "\x63\x68\145\x63\153\x65\x64" : '';
$pz->available_tags = "\x7b\163\x69\x74\145\x2d\156\141\x6d\x65\x7d\x2c\x7b\x6f\x72\144\x65\162\55\x6e\165\x6d\142\x65\x72\175\54\x7b\165\163\145\162\156\141\x6d\145\175\54\173\x6f\x72\144\x65\x72\55\144\x61\164\x65\x7d";
$pz->available_tags = apply_filters("\141\166\x61\151\x6c\141\x62\154\x65\x5f\160\x72\145\x6d\x5f\x74\x61\147\x73", $pz->available_tags, "\x77\143\x5f\x70\162\x65\155\151\165\x6d\x5f\x74\141\x67\163");
$pz->available_tags = apply_filters("\x6d\157\x5f\142\151\x6c\154\x69\156\x67\x5f\164\x61\x67\163", $pz->available_tags);
$pz->available_tags = apply_filters("\155\x6f\x5f\x73\150\151\160\x70\x69\156\147\x5f\164\x61\147\163", $pz->available_tags);
require MSN_DIR . "\57\x76\151\145\x77\163\x2f\x73\x6d\x73\156\157\x74\x69\x66\x69\x63\141\164\151\157\156\x73\x2f\167\x63\x2d\143\x75\x73\x74\x6f\x6d\x65\162\55\163\x6d\x73\55\164\x65\155\x70\x6c\141\x74\x65\x2e\160\150\160";
