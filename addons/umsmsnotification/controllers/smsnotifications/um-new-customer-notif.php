<?php


if (defined("\x41\x42\123\x50\x41\124\x48")) {
    goto pU;
}
exit;
pU:
use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
$An = remove_query_arg(array("\x73\155\x73"), isset($_SERVER["\x52\x45\121\x55\105\123\x54\x5f\x55\x52\111"]) ? esc_url_raw(wp_unslash($_SERVER["\122\x45\121\x55\105\x53\x54\137\x55\122\x49"])) : '');
$pz = $TI->get_um_new_customer_notif();
$ar = $pz->page . "\137\x65\x6e\x61\x62\154\145";
$hG = $pz->page . "\137\x73\155\x73\x62\157\x64\x79";
$rB = $pz->page . "\137\162\x65\143\151\x70\x69\x65\x6e\164";
$Q2 = $pz->page . "\x5f\x73\145\164\x74\151\156\147\x73";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto tO;
}
if (!(!current_user_can("\155\141\156\x61\x67\x65\x5f\157\160\x74\x69\x6f\x6e\163") || !check_admin_referer("\x6d\x6f\x5f\x61\144\x6d\x69\x6e\137\x61\143\x74\151\157\x6e\x73"))) {
    goto I0;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
I0:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$Ez = MoUtility::sanitize_check($rB, $_POST);
$RA = isset($_POST[$hG]) ? sanitize_textarea_field(wp_unslash($_POST[$hG])) : null;
$dG = MoUtility::is_blank($RA) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST);
$TI->get_um_new_customer_notif()->set_is_enabled($fJ);
$TI->get_um_new_customer_notif()->set_recipient($Ez);
$TI->get_um_new_customer_notif()->set_sms_body($dG);
update_umsn_option("\156\x6f\x74\151\x66\x69\x63\141\x74\151\x6f\156\x5f\163\145\164\164\151\x6e\147\163", $TI);
$pz = $TI->get_um_new_customer_notif();
tO:
$Ez = maybe_unserialize($pz->recipient);
$Ez = MoUtility::is_blank($Ez) ? "\155\157\142\151\x6c\x65\137\x6e\165\x6d\x62\x65\x72" : $Ez;
$Qk = $pz->is_enabled ? "\x63\150\145\143\153\145\x64" : '';
require UMSN_DIR . "\x2f\x76\151\x65\167\x73\x2f\x73\155\x73\156\x6f\x74\151\146\151\x63\141\164\151\x6f\x6e\163\x2f\x75\x6d\x2d\x63\165\x73\x74\157\155\145\x72\55\x73\155\163\x2d\x74\x65\155\x70\154\x61\164\145\56\x70\150\x70";
