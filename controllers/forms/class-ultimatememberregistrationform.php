<?php


if (defined("\x41\x42\x53\120\x41\x54\110")) {
    goto T5;
}
exit;
T5:
use OTP\Handler\Forms\UltimateMemberRegistrationForm;
$gp = UltimateMemberRegistrationForm::instance();
$h1 = $gp->is_form_enabled() ? "\143\x68\145\143\x6b\x65\144" : '';
$JP = "\143\150\x65\143\153\x65\144" === $h1 ? '' : "\x73\x74\x79\154\145\75\144\151\163\160\154\x61\171\72\156\157\x6e\x65";
$a8 = $gp->get_otp_type_enabled();
$ah = admin_url() . "\x65\144\x69\164\56\160\x68\x70\x3f\x70\x6f\163\x74\137\164\171\x70\145\75\x75\155\x5f\x66\x6f\x72\155";
$cZ = $gp->get_phone_html_tag();
$Sh = $gp->get_email_html_tag();
$fc = $gp->get_both_html_tag();
$ll = $gp->restrict_duplicates() ? "\x63\150\145\x63\153\145\144" : '';
$p1 = $gp->get_form_name();
$u6 = $gp->get_button_text();
$w6 = $gp->is_ajax_form();
$VB = $w6 ? "\143\150\x65\x63\153\x65\144" : '';
$Q0 = $gp->get_verify_field_key();
$Ry = $gp->get_phone_key_details();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\x69\145\167\163\x2f\x66\157\x72\x6d\x73\57\x75\154\x74\x69\155\141\x74\x65\155\x65\x6d\x62\x65\162\x72\x65\x67\x69\x73\164\162\141\164\x69\157\156\x66\x6f\162\155\56\160\150\160";
