<?php


if (defined("\x41\x42\123\x50\101\x54\110")) {
    goto H3;
}
exit;
H3:
use OTP\Handler\Forms\ForminatorForm;
$gp = ForminatorForm::instance();
$j0 = (bool) $gp->is_form_enabled() ? "\x63\150\145\143\x6b\145\x64" : '';
$GK = "\143\150\145\143\153\145\x64" === $j0 ? '' : "\x68\x69\144\144\x65\156";
$ja = $gp->get_otp_type_enabled();
$v4 = $gp->get_form_details();
$d9 = admin_url() . "\x61\144\x6d\151\156\56\x70\x68\160\x3f\160\141\x67\145\x3d\x66\157\x72\155\x69\156\x61\x74\157\x72\x2d\x63\146\157\x72\x6d";
$EJ = $gp->get_button_text();
$ra = $gp->get_phone_html_tag();
$Gr = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\x69\x65\x77\163\57\146\157\x72\x6d\x73\x2f\146\157\x72\x6d\x69\156\141\x74\157\x72\146\x6f\x72\x6d\x2e\160\x68\160";
