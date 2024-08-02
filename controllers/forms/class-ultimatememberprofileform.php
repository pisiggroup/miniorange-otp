<?php


if (defined("\x41\x42\123\120\101\124\110")) {
    goto eb;
}
exit;
eb:
use OTP\Handler\Forms\UltimateMemberProfileForm;
$gp = UltimateMemberProfileForm::instance();
$i0 = $gp->is_form_enabled() ? "\143\150\145\x63\153\145\x64" : '';
$DU = "\143\x68\145\x63\x6b\x65\144" === $i0 ? '' : "\x68\x69\x64\144\x65\x6e";
$qZ = $gp->get_otp_type_enabled();
$bY = $gp->get_phone_key_details();
$dg = admin_url() . "\x65\x64\151\x74\56\160\150\160\x3f\160\157\163\x74\137\164\x79\x70\145\x3d\165\x6d\137\x66\x6f\x72\x6d";
$t_ = $gp->get_phone_html_tag();
$Op = $gp->get_email_html_tag();
$Ma = $gp->get_both_html_tag();
$L9 = $gp->restrict_duplicates() ? "\143\x68\145\x63\x6b\x65\x64" : '';
$p1 = $gp->get_form_name();
$qp = $gp->get_button_text();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\x69\x65\167\163\x2f\146\157\162\155\163\x2f\165\x6c\164\151\155\x61\x74\x65\x6d\x65\x6d\142\145\162\160\x72\x6f\x66\151\x6c\x65\146\157\162\155\x2e\160\150\160";
