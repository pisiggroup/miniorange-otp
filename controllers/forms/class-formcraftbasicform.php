<?php


if (defined("\x41\x42\x53\x50\101\x54\x48")) {
    goto AK;
}
exit;
AK:
use OTP\Handler\Forms\FormCraftBasicForm;
$gp = FormCraftBasicForm::instance();
$P1 = $gp->is_form_enabled() ? "\143\150\x65\143\x6b\x65\144" : '';
$pk = "\143\x68\145\143\x6b\145\144" === $P1 ? '' : "\x68\x69\144\x64\x65\x6e";
$OH = $gp->get_otp_type_enabled();
$RT = admin_url() . "\x61\x64\x6d\151\156\56\x70\150\x70\77\x70\141\147\x65\75\x66\x6f\162\x6d\143\x72\141\146\164\137\142\x61\163\x69\x63\137\144\141\163\150\x62\157\x61\x72\144";
$wc = $gp->get_form_details();
$YM = $gp->get_phone_html_tag();
$Ms = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\145\x77\163\57\x66\157\162\155\x73\x2f\x66\157\x72\x6d\143\162\141\x66\164\142\x61\x73\x69\143\x66\157\162\155\x2e\x70\150\x70";
