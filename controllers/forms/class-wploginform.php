<?php


if (defined("\x41\x42\123\x50\x41\x54\110")) {
    goto QI;
}
exit;
QI:
use OTP\Handler\Forms\WPLoginForm;
use OTP\Helper\MoUtility;
$gp = WPLoginForm::instance();
$Cc = (bool) $gp->is_form_enabled() ? "\x63\150\x65\143\153\145\144" : '';
$Bg = "\x63\150\x65\x63\153\145\144" === $Cc ? '' : "\163\x74\171\154\x65\x3d\144\151\x73\160\154\x61\x79\x3a\156\x6f\156\145";
$D_ = (bool) $gp->savePhoneNumbers() ? "\143\x68\x65\x63\x6b\145\x64" : '';
$PV = $gp->get_phone_key_details();
$Yi = (bool) $gp->byPassCheckForAdmins() ? "\x63\x68\145\x63\153\x65\x64" : '';
$Az = (bool) $gp->allowLoginThroughPhone() ? "\143\x68\x65\x63\153\145\144" : '';
$ao = (bool) $gp->restrict_duplicates() ? "\x63\x68\x65\x63\153\145\x64" : '';
$fN = $gp->get_otp_type_enabled();
$QC = $gp->get_phone_html_tag();
$UV = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
$WJ = $gp->getSkipPasswordCheck() ? "\x63\150\145\143\153\145\x64" : '';
$P9 = $gp->getSkipPasswordCheck() ? "\x62\x6c\157\143\x6b" : "\x68\x69\x64\x64\145\156";
$Na = $gp->getSkipPasswordCheckFallback() ? "\143\150\145\143\153\145\144" : '';
$zL = $gp->getUserLabel();
$uz = $gp->isDelayOtp() ? "\x63\x68\145\143\153\145\x64" : '';
$bI = $gp->isDelayOtp() ? "\x62\154\157\x63\x6b" : "\x68\x69\144\144\145\156";
$oV = $gp->getDelayOtpInterval();
$Ud = $gp->redirectToPage();
$T3 = MoUtility::is_blank($Ud) ? '' : get_posts(array("\x74\x69\x74\x6c\145" => $Ud, "\x70\157\x73\x74\137\x74\171\x70\145" => "\x70\x61\x67\145"))[0]->ID;
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\145\167\163\x2f\146\x6f\162\x6d\x73\x2f\167\x70\154\157\x67\x69\x6e\146\x6f\162\x6d\56\x70\150\x70";
