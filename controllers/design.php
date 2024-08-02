<?php


if (defined("\101\x42\123\x50\101\124\110")) {
    goto rv;
}
exit;
rv:
use OTP\Helper\Templates\DefaultPopup;
use OTP\Helper\Templates\ErrorPopup;
use OTP\Helper\Templates\ExternalPopup;
use OTP\Helper\Templates\UserChoicePopup;
use OTP\Objects\Template;
$vI = DefaultPopup::instance();
$oD = UserChoicePopup::instance();
$Ta = ExternalPopup::instance();
$OO = ErrorPopup::instance();
$Ft = $vI->get_nonce_value();
$y3 = $vI->get_template_key();
$D6 = $oD->get_template_key();
$hK = $Ta->get_template_key();
$Ch = $OO->get_template_key();
$oi = maybe_unserialize(get_mo_option("\x63\x75\163\164\x6f\155\137\160\x6f\x70\x75\x70\x73"));
$qF = $oi[$vI->get_template_key()];
$PD = $oi[$Ta->get_template_key()];
$xV = $oi[$oD->get_template_key()];
$gK = $oi[$OO->get_template_key()];
$rg = Template::$template_editor;
$L0 = $vI->get_template_editor_id();
$F8 = array_merge($rg, array("\x74\145\x78\x74\141\162\145\141\137\156\141\x6d\x65" => $L0, "\145\144\x69\164\x6f\162\137\150\x65\151\x67\x68\164" => 400));
$UH = $oD->get_template_editor_id();
$oT = array_merge($rg, array("\164\145\170\x74\141\162\x65\x61\137\x6e\141\155\145" => $UH, "\x65\x64\x69\164\x6f\162\137\x68\145\x69\147\x68\164" => 400));
$WI = $Ta->get_template_editor_id();
$Ql = array_merge($rg, array("\164\145\x78\164\x61\x72\145\x61\137\x6e\x61\155\x65" => $WI, "\145\x64\151\x74\157\162\137\150\145\x69\x67\x68\x74" => 400));
$iD = $OO->get_template_editor_id();
$A3 = array_merge($rg, array("\x74\x65\170\x74\141\x72\x65\x61\137\156\x61\x6d\145" => $iD, "\x65\144\151\x74\x6f\x72\x5f\150\145\x69\147\x68\x74" => 400));
$Pp = str_replace("\173\x7b\103\117\116\x54\105\116\x54\175\175", "\x3c\151\x6d\x67\x20\163\x72\143\75\x27" . MOV_LOADER_URL . "\47\76", $vI->pane_content);
$e8 = "\x3c\163\160\141\x6e\40\163\x74\171\154\x65\75\x27\146\x6f\156\164\55\x73\151\172\x65\72\x20\x31\x2e\63\x65\155\x3b\47\76" . "\x50\x52\x45\x56\x49\x45\x57\x20\120\101\x4e\x45\x3c\x62\x72\57\76\74\142\x72\57\76" . "\74\57\163\x70\141\156\x3e" . "\74\163\160\141\156\x3e" . "\x43\x6c\151\143\x6b\x20\x6f\x6e\40\x74\150\x65\40\x50\162\x65\166\x69\x65\167\40\142\165\164\164\x6f\x6e\x20\141\142\x6f\166\145\x20\164\157\40\143\150\x65\143\153\40\x68\157\x77\x20\x79\157\165\162\x20\x70\x6f\160\165\160\x20\167\x6f\165\x6c\144\x20\154\157\x6f\153\x20\154\151\x6b\145\x2e" . "\74\x2f\x73\x70\141\x6e\x3e";
$e8 = str_replace("\x7b\173\115\105\123\x53\101\x47\x45\x7d\x7d", $e8, $vI->message_div);
$WZ = str_replace("\173\x7b\103\117\x4e\x54\x45\116\124\x7d\x7d", $e8, $vI->pane_content);
require_once MOV_DIR . "\166\151\x65\x77\163\x2f\x64\145\163\x69\x67\x6e\x2e\x70\150\x70";
