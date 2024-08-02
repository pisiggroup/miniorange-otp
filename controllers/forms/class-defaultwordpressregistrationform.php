<?php


if (defined("\x41\102\x53\120\101\124\110")) {
    goto p0;
}
exit;
p0:
use OTP\Handler\Forms\DefaultWordPressRegistrationForm;
$gp = DefaultWordPressRegistrationForm::instance();
$B5 = (bool) $gp->is_form_enabled() ? "\143\x68\145\x63\x6b\x65\144" : '';
$dA = "\x63\150\145\143\153\x65\144" === $B5 ? '' : "\x73\164\171\x6c\145\75\144\151\163\160\x6c\141\171\x3a\x6e\157\x6e\x65";
$DQ = $gp->get_otp_type_enabled();
$bK = (bool) $gp->restrict_duplicates() ? "\x63\150\x65\143\x6b\x65\x64" : '';
$jw = $gp->get_phone_html_tag();
$is = $gp->get_email_html_tag();
$YY = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
$uY = $gp->disable_auto_activation() ? '' : "\x63\150\145\143\153\x65\x64";
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\145\167\163\57\146\157\x72\x6d\163\x2f\144\x65\146\141\x75\x6c\164\167\x6f\162\x64\x70\162\145\x73\x73\162\x65\x67\x69\163\164\162\141\164\x69\157\156\x66\x6f\x72\155\x2e\160\150\x70";
