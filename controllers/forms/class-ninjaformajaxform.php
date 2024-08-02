<?php


if (defined("\x41\x42\x53\120\x41\124\110")) {
    goto AH;
}
exit;
AH:
use OTP\Handler\Forms\NinjaFormAjaxForm;
$gp = NinjaFormAjaxForm::instance();
$Ru = $gp->is_form_enabled() ? "\x63\150\145\143\153\145\144" : '';
$pj = "\143\x68\x65\x63\x6b\x65\144" === $Ru ? '' : "\163\164\171\x6c\x65\x3d\144\x69\163\x70\154\x61\171\x3a\156\x6f\x6e\145";
$Fw = $gp->get_otp_type_enabled();
$rm = admin_url() . "\x61\144\x6d\x69\156\x2e\x70\150\x70\77\x70\141\x67\x65\75\156\x69\156\152\x61\55\146\x6f\162\155\x73";
$cF = $gp->get_form_details();
$aC = $gp->get_phone_html_tag();
$BJ = $gp->get_email_html_tag();
$EJ = $gp->get_button_text();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\x69\145\167\163\x2f\146\x6f\162\155\163\57\x6e\151\156\152\141\146\157\162\155\x61\x6a\141\x78\x66\x6f\x72\x6d\56\x70\x68\x70";
