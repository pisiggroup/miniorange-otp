<?php


if (defined("\x41\102\x53\x50\x41\124\x48")) {
    goto r4;
}
exit;
r4:
use OTP\Handler\Forms\RegistrationMagicForm;
$gp = RegistrationMagicForm::instance();
$gS = $gp->is_form_enabled() ? "\x63\150\145\x63\153\x65\144" : '';
$TO = "\x63\x68\x65\x63\x6b\145\x64" === $gS ? '' : "\x68\151\144\x64\145\x6e";
$df = $gp->get_otp_type_enabled();
$g2 = admin_url() . "\141\144\x6d\x69\156\x2e\160\x68\x70\77\x70\141\147\145\x3d\162\x6d\x5f\146\157\162\155\x5f\155\141\x6e\141\147\x65";
$fQ = $gp->get_form_details();
$Lv = $gp->get_phone_html_tag();
$YK = $gp->get_email_html_tag();
$DF = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
$c8 = $gp->restrict_duplicates() ? "\143\150\x65\x63\x6b\x65\x64" : '';
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\x65\x77\163\57\x66\x6f\162\155\x73\x2f\x72\x65\147\x69\x73\164\162\141\164\151\x6f\156\x6d\141\x67\x69\143\x66\157\162\155\56\160\150\160";
