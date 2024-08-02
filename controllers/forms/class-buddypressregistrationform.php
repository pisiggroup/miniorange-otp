<?php


if (defined("\x41\102\x53\x50\101\124\110")) {
    goto gK;
}
exit;
gK:
use OTP\Handler\Forms\BuddyPressRegistrationForm;
$gp = BuddyPressRegistrationForm::instance();
$wG = $gp->is_form_enabled() ? "\143\150\145\143\153\145\x64" : '';
$MN = "\x63\x68\x65\143\x6b\145\x64" === $wG ? '' : "\150\x69\x64\x64\145\x6e";
$Wk = $gp->get_otp_type_enabled();
$jL = admin_url() . "\x75\x73\145\162\163\x2e\x70\150\160\77\x70\141\147\145\x3d\142\x70\55\x70\162\157\x66\x69\x6c\145\x2d\x73\145\x74\x75\x70";
$RG = $gp->get_phone_key_details();
$jd = $gp->disable_auto_activation() ? "\143\150\x65\x63\x6b\145\144" : '';
$cw = $gp->get_phone_html_tag();
$Xq = $gp->get_email_html_tag();
$jR = $gp->get_both_html_tag();
$p1 = $gp->get_form_name();
$c8 = $gp->restrict_duplicates() ? "\143\x68\145\x63\x6b\x65\x64" : '';
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\166\151\x65\x77\163\57\146\157\162\155\163\x2f\x62\165\144\x64\x79\160\162\145\x73\163\x72\x65\147\x69\x73\164\x72\141\164\151\157\156\x66\x6f\x72\x6d\56\160\150\x70";
