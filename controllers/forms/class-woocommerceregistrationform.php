<?php


if (defined("\101\102\123\120\x41\124\x48")) {
    goto VW;
}
exit;
VW:
use OTP\Handler\Forms\WooCommerceRegistrationForm;
use OTP\Helper\MoUtility;
$gp = WooCommerceRegistrationForm::instance();
$yO = (bool) $gp->is_form_enabled() ? "\143\x68\145\143\x6b\145\x64" : '';
$MU = "\143\x68\145\x63\153\145\144" === $yO ? '' : "\x73\x74\171\x6c\145\x3d\x64\151\163\x70\x6c\x61\x79\72\x6e\157\x6e\145";
$hu = $gp->get_otp_type_enabled();
$Em = (bool) $gp->restrict_duplicates() ? "\143\x68\145\143\x6b\x65\144" : '';
$q5 = $gp->get_phone_html_tag();
$j7 = $gp->get_email_html_tag();
$Bs = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
$Ud = $gp->redirectToPage();
$T3 = MoUtility::is_blank($Ud) ? '' : get_posts(array("\164\151\x74\154\145" => $Ud, "\x70\157\163\164\x5f\164\171\x70\x65" => "\x70\x61\147\145"))[0]->ID;
$w6 = $gp->is_ajax_form();
$VB = $w6 ? "\143\150\x65\143\x6b\x65\x64" : '';
$HW = $gp->get_button_text();
$p2 = $gp->isredirectToPageEnabled() ? "\143\x68\145\143\x6b\145\144" : '';
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\151\x65\167\163\x2f\146\x6f\162\155\x73\x2f\x77\x6f\157\143\157\155\155\145\x72\x63\145\162\145\x67\x69\163\164\x72\x61\164\151\157\156\146\157\x72\x6d\56\160\150\x70";
