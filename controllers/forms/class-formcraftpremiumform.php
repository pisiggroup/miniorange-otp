<?php


if (defined("\101\x42\123\x50\x41\x54\x48")) {
    goto N3;
}
exit;
N3:
use OTP\Handler\Forms\FormCraftPremiumForm;
$gp = FormCraftPremiumForm::instance();
$uG = $gp->is_form_enabled() ? "\x63\x68\x65\143\153\145\x64" : '';
$RO = "\143\x68\145\143\x6b\x65\x64" === $uG ? '' : "\150\151\x64\x64\145\x6e";
$YW = $gp->get_otp_type_enabled();
$lu = admin_url() . "\x61\x64\155\x69\156\56\160\x68\x70\x3f\160\141\147\x65\75\146\x6f\162\155\x63\162\x61\146\x74\55\x64\141\163\150\142\157\x61\x72\x64";
$CQ = $gp->get_form_details();
$W2 = $gp->get_phone_html_tag();
$rs = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\x65\167\163\57\x66\157\x72\x6d\x73\57\146\x6f\x72\x6d\x63\x72\141\146\x74\160\162\x65\x6d\151\x75\x6d\x66\157\162\155\x2e\160\150\x70";
