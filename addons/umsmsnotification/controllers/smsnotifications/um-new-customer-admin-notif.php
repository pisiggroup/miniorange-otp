<?php


if (defined("\x41\x42\x53\x50\x41\x54\x48")) {
    goto Yl;
}
exit;
Yl:
use OTP\Helper\MoUtility;
use OTP\Helper\MoMessages;
$An = remove_query_arg(array("\163\155\x73"), isset($_SERVER["\x52\x45\x51\125\105\x53\x54\x5f\x55\x52\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\122\x45\x51\x55\x45\123\124\137\x55\122\x49"])) : '');
$pz = $TI->get_um_new_user_admin_notif();
$ar = $pz->page . "\x5f\145\x6e\x61\x62\154\x65";
$hG = $pz->page . "\137\x73\155\163\142\x6f\144\x79";
$rB = $pz->page . "\x5f\x72\145\x63\151\x70\x69\x65\156\x74";
$Q2 = $pz->page . "\x5f\x73\x65\164\x74\x69\156\x67\163";
if (!MoUtility::are_form_options_being_saved($Q2)) {
    goto cc;
}
if (!(!current_user_can("\155\x61\x6e\x61\147\x65\137\157\x70\x74\151\157\156\163") || !check_admin_referer("\155\157\137\x61\144\x6d\151\156\x5f\x61\143\x74\x69\x6f\156\163"))) {
    goto ta;
}
wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
ta:
$fJ = array_key_exists($ar, $_POST) ? true : false;
$Ez = maybe_unserialize(explode("\73", MoUtility::sanitize_check($rB, $_POST)));
$RA = isset($_POST[$hG]) ? sanitize_textarea_field(wp_unslash($_POST[$hG])) : null;
$dG = MoUtility::is_blank($RA) ? $pz->default_sms_body : MoUtility::sanitize_check($hG, $_POST);
$TI->get_um_new_user_admin_notif()->set_is_enabled($fJ);
$TI->get_um_new_user_admin_notif()->set_recipient($Ez);
$TI->get_um_new_user_admin_notif()->set_sms_body($dG);
update_umsn_option("\x6e\157\x74\151\x66\x69\143\x61\164\x69\x6f\x6e\x5f\163\145\x74\164\151\156\147\163", $TI);
$pz = $TI->get_um_new_user_admin_notif();
cc:
$Ez = maybe_unserialize($pz->recipient);
$Ez = is_array($Ez) ? implode("\73", $Ez) : $Ez;
$Qk = $pz->is_enabled ? "\x63\x68\145\x63\x6b\145\144" : '';
require UMSN_DIR . "\57\x76\x69\x65\x77\x73\57\163\155\x73\156\x6f\164\151\146\151\143\x61\164\151\157\x6e\163\x2f\165\155\x2d\141\x64\155\151\x6e\55\x73\155\163\x2d\164\x65\x6d\160\154\x61\x74\145\x2e\x70\150\160";
