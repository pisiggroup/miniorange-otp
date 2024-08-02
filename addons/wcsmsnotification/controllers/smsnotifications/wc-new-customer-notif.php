<?php


use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
if (defined("\x41\x42\123\x50\x41\x54\x48")) {
    goto Ju;
}
exit;
Ju:
$An = remove_query_arg(array("\163\155\163"), isset($_SERVER["\x52\x45\x51\x55\x45\123\124\137\125\122\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\122\105\x51\x55\x45\x53\124\x5f\x55\x52\111"])) : site_url());
$pz = $TI->get_wc_new_customer_notif();
$ar = $pz->page . "\x5f\x65\x6e\141\x62\x6c\x65";
$hG = $pz->page . "\137\163\x6d\x73\142\x6f\x64\171";
$rB = $pz->page . "\x5f\162\x65\x63\x69\160\151\145\x6e\164";
$Q2 = $pz->page . "\x5f\x73\145\x74\164\x69\156\x67\163";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto C9;
}
if (!(!current_user_can("\155\x61\156\x61\147\x65\x5f\x6f\x70\164\151\x6f\x6e\x73") || !check_admin_referer("\155\x6f\x5f\141\x64\155\x69\x6e\137\141\143\x74\151\157\x6e\x73"))) {
    goto Ii;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
Ii:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$dG = isset($_POST[$hG]) ? MoUtility::is_blank(sanitize_text_field(wp_unslash($_POST[$hG]))) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST) : $pz->default_sms_body;
$TI->get_wc_new_customer_notif()->set_is_enabled($fJ);
$TI->get_wc_new_customer_notif()->set_sms_body($dG);
update_wc_option("\x6e\157\x74\151\x66\x69\143\141\164\151\x6f\156\x5f\163\145\164\x74\151\156\x67\163", $TI);
$pz = $TI->get_wc_new_customer_notif();
C9:
$Ez = $pz->recipient;
$Qk = $pz->is_enabled ? "\x63\150\x65\143\x6b\145\144" : '';
$pz->available_tags = "\173\x73\151\x74\145\x2d\156\141\x6d\145\x7d\x2c\x7b\x75\163\145\x72\156\x61\x6d\145\x7d\54\173\141\x63\143\157\165\156\164\x70\141\x67\x65\x2d\165\x72\154\175";
$pz->available_tags = apply_filters("\141\x76\x61\151\154\141\142\154\x65\137\160\x72\145\x6d\137\x74\x61\147\163", $pz->available_tags, "\167\x63\137\156\145\167\x5f\x63\x75\163\x74\x6f\155\145\162\x5f\x6e\x6f\164\151\146");
require MSN_DIR . "\x2f\166\x69\145\x77\x73\x2f\163\155\x73\156\x6f\x74\151\x66\151\x63\141\x74\151\x6f\156\163\57\167\x63\55\x63\x75\x73\164\x6f\155\x65\162\55\163\x6d\163\55\164\145\x6d\x70\154\141\164\145\56\x70\150\160";
