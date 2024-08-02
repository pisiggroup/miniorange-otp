<?php


if (defined("\101\102\x53\120\x41\x54\110")) {
    goto lz;
}
exit;
lz:
use OTP\Handler\Forms\TutorLMSInstructor;
use OTP\Helper\MoUtility;
$gp = TutorLMSInstructor::instance();
$q3 = (bool) $gp->is_form_enabled() ? "\143\x68\145\x63\153\x65\x64" : '';
$Tl = "\x63\x68\x65\x63\x6b\145\144" === $q3 ? '' : "\163\164\171\154\145\x3d\42\x64\x69\x73\x70\x6c\x61\x79\72\156\157\x6e\x65\x22";
$IK = (bool) $gp->restrict_duplicates() ? "\143\150\145\x63\x6b\145\x64" : '';
$rS = $gp->get_otp_type_enabled();
$of = $gp->get_form_details();
$v6 = $gp->get_phone_html_tag();
$wM = $gp->get_email_html_tag();
$ol = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
$w6 = $gp->is_ajax_form();
$VB = $w6 ? "\143\x68\x65\x63\x6b\145\x64" : '';
$Sj = $gp->get_button_text();
get_plugin_form_link($gp->get_form_documents());
require MOV_DIR . "\166\x69\145\x77\163\x2f\x66\x6f\x72\155\163\57\164\x75\x74\x6f\x72\x6c\155\x73\151\156\x73\164\x72\x75\x63\x74\x6f\162\x2e\160\x68\x70";
