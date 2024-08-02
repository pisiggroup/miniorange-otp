<?php


if (defined("\x41\102\x53\x50\101\x54\x48")) {
    goto zp;
}
exit;
zp:
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Objects\Tabs;
use OTP\Helper\MoUtility;
$K3 = isset($_SERVER["\122\105\121\125\x45\x53\124\137\x55\x52\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\122\105\x51\125\105\x53\x54\x5f\125\122\111"])) : null;
$Q6 = remove_query_arg(array("\x61\144\144\157\x6e", "\146\157\162\x6d", "\163\x75\142\x70\x61\x67\145"), $K3);
$Q9 = add_query_arg(array("\x70\141\147\x65" => $W1->tab_details[Tabs::ACCOUNT]->menu_slug), $Q6);
$xP = MoConstants::FAQ_URL;
$ab = MoMessages::showMessage(MoMessages::REGISTER_WITH_US, array("\165\162\154" => $Q9));
$Cv = MoMessages::showMessage(MoMessages::ACTIVATE_PLUGIN, array("\x75\x72\x6c" => $Q9));
$x5 = add_query_arg(array("\160\141\147\145" => $W1->tab_details[Tabs::SMS_EMAIL_CONFIG]->menu_slug), $Q6);
$f3 = MoMessages::showMessage(MoMessages::CONFIG_GATEWAY, array("\165\x72\154" => $x5));
$OR = isset($_GET["\x70\141\147\145"]) ? sanitize_text_field(wp_unslash($_GET["\x70\141\147\145"])) : '';
$d7 = add_query_arg(array("\160\141\x67\x65" => $W1->tab_details[Tabs::PRICING]->menu_slug), $Q6);
$Ft = $TG->get_nonce_value();
$Nc = MoUtility::micr();
$WL = strcmp(MOV_TYPE, "\115\151\x6e\x69\x4f\x72\x61\x6e\x67\x65\x47\141\164\x65\167\x61\x79") === 0;
$ie = get_mo_option("\x63\x75\x73\x74\x6f\x6d\x65\x5f\x67\x61\x74\x65\x77\x61\x79\x5f\164\x79\160\145");
$bl = get_mo_option("\155\157\137\x68\x69\x64\x65\137\163\x6d\x73\137\156\x6f\x74\151\x63\x65");
$Dr = get_mo_option("\x6d\x6f\x5f\x74\162\x61\x6e\163\x61\x63\164\151\x6f\x6e\x5f\x6e\x6f\164\151\143\x65");
$no = get_mo_option("\x65\155\141\151\154\137\164\x72\x61\x6e\x73\x61\x63\x74\x69\x6f\x6e\x73\x5f\162\x65\155\141\x69\x6e\151\156\147");
$sT = get_mo_option("\160\x68\x6f\156\x65\137\164\x72\141\156\163\141\x63\164\151\x6f\156\x73\137\x72\145\155\x61\151\156\151\x6e\147");
require_once MOV_DIR . "\x76\151\x65\x77\x73\57\156\141\166\x62\x61\162\56\x70\150\x70";
