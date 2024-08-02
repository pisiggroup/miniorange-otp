<?php


if (defined("\101\x42\x53\120\101\x54\x48")) {
    goto RN;
}
exit;
RN:
use OTP\Handler\Forms\WcProfileForm;
$gp = WcProfileForm::instance();
$FU = $gp->is_form_enabled() ? "\x63\150\145\x63\x6b\x65\144" : '';
$Fq = "\x63\x68\x65\x63\x6b\145\x64" === $FU ? '' : "\150\x69\x64\x64\x65\156";
$KU = $gp->get_otp_type_enabled();
$Yk = $gp->get_phone_key_details();
$kJ = admin_url() . "\x6d\171\55\x61\143\x63\157\165\x6e\164\57\x65\144\x69\164\x2d\x61\143\143\157\x75\156\164\57";
$yl = $gp->get_phone_html_tag();
$FE = $gp->get_email_html_tag();
$Cu = $gp->restrict_duplicates() ? "\143\x68\x65\x63\153\x65\144" : '';
$p1 = $gp->get_form_name();
$qB = $gp->get_button_text();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\x69\x65\x77\163\57\146\157\162\155\163\x2f\x77\x63\160\x72\x6f\x66\151\x6c\x65\146\x6f\162\x6d\x2e\160\x68\x70";
