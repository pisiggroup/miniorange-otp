<?php


if (defined("\x41\x42\123\x50\x41\x54\x48")) {
    goto gF;
}
exit;
gF:
use OTP\Handler\Forms\TutorLmsStudentReg;
use OTP\Helper\MoUtility;
$gp = TutorLmsStudentReg::instance();
$T6 = (bool) $gp->is_form_enabled() ? "\143\x68\x65\143\x6b\145\x64" : '';
$vP = "\x63\150\145\143\153\145\144" === $T6 ? '' : "\x73\164\171\x6c\x65\x3d\x64\x69\x73\160\154\141\171\72\x6e\x6f\x6e\145";
$ZY = (bool) $gp->restrict_duplicates() ? "\x63\150\145\143\x6b\145\144" : '';
$IF = $gp->get_otp_type_enabled();
$cx = $gp->get_form_details();
$B8 = admin_url() . "\145\x64\151\164\56\160\150\160\x3f\x70\157\x73\x74\x5f\x74\x79\160\x65\x3d\160\x61\147\x65";
$QV = $gp->get_phone_html_tag();
$mg = $gp->get_email_html_tag();
$CW = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
$w6 = $gp->is_ajax_form();
$VB = $w6 ? "\x63\150\x65\143\153\145\144" : '';
$TR = $gp->get_button_text();
get_plugin_form_link($gp->get_form_documents());
require MOV_DIR . "\166\151\145\x77\x73\57\146\x6f\x72\155\163\x2f\164\165\164\x6f\x72\x6c\155\x73\x73\x74\165\144\145\x6e\x74\162\x65\147\56\160\x68\x70";
