<?php


if (defined("\x41\x42\x53\120\101\x54\x48")) {
    goto Fo;
}
exit;
Fo:
use OTP\Helper\MoConstants;
use OTP\Helper\MoUtility;
use OTP\Objects\Tabs;
$sh = admin_url() . "\x65\144\x69\164\56\x70\x68\160\77\x70\x6f\163\x74\137\164\171\160\x65\75\160\141\x67\145";
$i9 = MoUtility::micv() ? "\x77\160\x5f\157\164\x70\x5f\x76\145\162\151\x66\151\143\141\164\x69\157\156\x5f\x75\x70\147\162\x61\x64\145\x5f\160\154\141\156" : "\x77\x70\137\157\164\160\137\166\145\162\x69\x66\x69\143\141\164\151\157\156\x5f\x62\141\163\x69\x63\x5f\x70\154\141\156";
$Ft = $TG->get_nonce_value();
$Ie = add_query_arg(array("\x70\141\147\x65" => $W1->tab_details[Tabs::FORMS]->menu_slug, "\x66\x6f\x72\x6d" => "\x63\157\x6e\146\x69\147\x75\x72\145\x64\x5f\146\157\x72\x6d\163\43\143\x6f\x6e\146\x69\x67\x75\x72\x65\x64\x5f\x66\157\162\x6d\x73"));
$gV = add_query_arg("\160\141\x67\x65", $W1->tab_details[Tabs::FORMS]->menu_slug . "\x23\x66\x6f\x72\155\x5f\x73\x65\141\x72\x63\150", remove_query_arg(array("\x66\x6f\162\155")));
$p1 = isset($_GET["\146\157\x72\x6d"]) ? sanitize_text_field(wp_unslash($_GET["\146\x6f\162\x6d"])) : false;
$pM = "\x63\x6f\156\146\151\x67\165\x72\145\x64\x5f\x66\x6f\x72\155\163" === $p1;
$Ij = $W1->tab_details[Tabs::OTP_SETTINGS];
$u9 = $Ij->url;
$D0 = $W1->tab_details[Tabs::SMS_EMAIL_CONFIG];
$y2 = $D0->url;
$DZ = $W1->tab_details[Tabs::DESIGN];
$H4 = $DZ->url;
$EG = $W1->tab_details[Tabs::ADD_ONS];
$IM = $EG->url;
$oP = $W1->tab_details[Tabs::CONTACT_US];
$hO = $oP->url;
$B2 = MoConstants::FEEDBACK_EMAIL;
require_once MOV_DIR . "\166\x69\145\167\163\57\x73\145\164\x74\151\156\x67\x73\x2e\160\150\160";
require_once MOV_DIR . "\166\151\x65\167\x73\x2f\151\156\x73\164\162\165\143\x74\x69\157\156\x73\56\160\x68\160";
