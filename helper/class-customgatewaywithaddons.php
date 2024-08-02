<?php


namespace OTP\Helper;

if (defined("\101\x42\123\120\x41\x54\x48")) {
    goto OyL;
}
exit;
OyL:
use OTP\Addons\CustomMessage\MiniOrangeCustomMessage;
use OTP\Addons\PasswordResetwc\WooCommercePasswordReset;
use OTP\Addons\WpSMSNotification\WordPressSmsNotification;
use OTP\Addons\regwithphone\RegisterWithPhoneOnly;
use OTP\Addons\PasswordReset\UltimateMemberPasswordReset;
use OTP\Addons\UmSMSNotification\UltimateMemberSmsNotification;
use OTP\Addons\WcSMSNotification\WooCommerceSmsNotification;
use OTP\Addons\WcfmSmsNotification\WCFMSmsNotification;
use OTP\Addons\CountryCode\SelectedCountryCode;
use OTP\Addons\passwordresetwp\WordPressPasswordReset;
use OTP\Addons\ipbasedropdown\EnableIpBaseCountryCode;
use OTP\Addons\APIVerification\APIAddon;
use OTP\Addons\ResendControl\MiniOrangeOTPControl;
use OTP\Addons\PasscodeOverCalltwilio\VerifyOverCallAddon;
use OTP\Addons\MoBulkSMS\MoBulkSMSInit;
use OTP\Addons\CountryCodeDropdown\CountryCodeDropdownInit;
use OTP\Objects\BaseAddOnHandler;
use OTP\Objects\IGatewayFunctions;
use OTP\Traits\Instance;
if (class_exists("\x43\165\163\x74\157\155\107\x61\164\x65\x77\141\x79\127\x69\164\150\101\144\x64\x6f\x6e\163")) {
    goto P4Z;
}
class CustomGatewayWithAddons extends CustomGateway implements IGatewayFunctions
{
    use Instance;
    protected $application_name = "\x77\160\137\x65\155\141\151\x6c\137\166\x65\x72\151\x66\151\x63\141\164\x69\x6f\156\137\151\156\164\x72\141\x6e\x65\x74";
    public function register_addons()
    {
        $EX = MOV_DIR . "\x61\144\144\157\x6e\x73\57\143\165\x73\164\x6f\x6d\155\x65\163\163\141\x67\x65";
        if (!file_exists($EX)) {
            goto iwQ;
        }
        MiniOrangeCustomMessage::instance();
        iwQ:
        $Aw = MOV_DIR . "\x61\x64\x64\157\x6e\x73\x2f\x70\141\163\163\x77\x6f\162\144\x72\x65\163\145\164";
        if (!file_exists($Aw)) {
            goto lkx;
        }
        UltimateMemberPasswordReset::instance();
        lkx:
        $Pj = MOV_DIR . "\141\144\144\157\156\163\57\x75\x6d\163\x6d\x73\x6e\157\x74\151\x66\x69\x63\141\164\x69\157\156";
        if (!file_exists($Pj)) {
            goto Nn2;
        }
        UltimateMemberSmsNotification::instance();
        Nn2:
        $CA = MOV_DIR . "\141\144\x64\157\156\163\x2f\x77\x63\x73\x6d\x73\x6e\157\164\x69\146\151\143\x61\x74\x69\157\156";
        if (!file_exists($CA)) {
            goto Nl3;
        }
        WooCommerceSmsNotification::instance();
        Nl3:
        $Uq = MOV_DIR . "\141\x64\144\x6f\x6e\x73\x2f\x70\x61\163\163\167\x6f\162\x64\162\145\163\x65\x74\x77\143";
        if (!file_exists($Uq)) {
            goto YTF;
        }
        WooCommercePasswordReset::instance();
        YTF:
        $ck = MOV_DIR . "\141\144\x64\157\156\163\57\160\141\x73\x73\167\157\162\x64\x72\x65\163\145\x74\167\x70";
        if (!file_exists($ck)) {
            goto pFT;
        }
        WordPressPasswordReset::instance();
        pFT:
        $pZ = MOV_DIR . "\x61\x64\x64\157\156\x73\57\162\145\147\x77\151\164\x68\160\x68\157\x6e\145";
        if (!file_exists($pZ)) {
            goto DM0;
        }
        RegisterWithPhoneOnly::instance();
        DM0:
        $rO = MOV_DIR . "\x61\144\144\x6f\x6e\163\x2f\x77\x70\163\x6d\163\156\157\x74\151\x66\x69\143\141\164\x69\157\156";
        if (!file_exists($rO)) {
            goto oON;
        }
        WordPressSmsNotification::instance();
        oON:
        if (!file_exists(MOV_DIR . "\141\x64\144\x6f\156\163\x2f\x61\160\x69\x76\x65\162\x69\146\151\x63\141\x74\x69\157\x6e")) {
            goto eIO;
        }
        APIAddon::instance();
        eIO:
        if (!file_exists(MOV_DIR . "\x61\144\x64\157\156\163\57\x72\145\163\x65\156\x64\143\x6f\x6e\x74\162\157\x6c")) {
            goto srk;
        }
        MiniOrangeOTPControl::instance();
        srk:
        if (!file_exists(MOV_DIR . "\x61\144\144\157\x6e\163\57\143\x6f\x75\x6e\164\162\x79\143\x6f\x64\145")) {
            goto Tkj;
        }
        SelectedCountryCode::instance();
        Tkj:
        if (!file_exists(MOV_DIR . "\x61\x64\x64\x6f\x6e\163\x2f\160\141\163\163\143\x6f\144\x65\x6f\166\x65\x72\143\x61\154\x6c\164\167\x69\x6c\151\x6f")) {
            goto Kpu;
        }
        VerifyOverCallAddon::instance();
        Kpu:
        if (!file_exists(MOV_DIR . "\x61\144\x64\157\156\163\x2f\155\x6f\142\165\x6c\x6b\x73\155\163")) {
            goto If0;
        }
        MoBulkSMSInit::instance();
        If0:
        if (!file_exists(MOV_DIR . "\141\144\144\157\x6e\x73\x2f\x63\x6f\165\x6e\164\162\171\143\x6f\144\x65\144\x72\157\160\144\157\167\156")) {
            goto ce_;
        }
        CountryCodeDropdownInit::instance();
        ce_:
        if (!file_exists(MOV_DIR . "\x61\x64\144\157\x6e\163\x2f\151\160\x62\141\163\145\144\162\x6f\160\x64\x6f\167\156")) {
            goto htc;
        }
        EnableIpBaseCountryCode::instance();
        htc:
        if (!file_exists(MOV_DIR . "\x61\x64\144\157\156\163\57\x77\x63\146\x6d\x73\155\x73\x6e\x6f\x74\151\146\151\x63\x61\x74\x69\x6f\156")) {
            goto Rh9;
        }
        WCFMSmsNotification::instance();
        Rh9:
    }
    public function show_addon_list()
    {
        $nG = AddOnList::instance();
        $nG = $nG->get_list();
        foreach ($nG as $IM) {
            echo "\x3c\x74\x72\76\xd\12\x20\40\x20\x20\40\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\x3c\164\x64\40\143\x6c\141\163\x73\75\x22\141\x64\x64\x6f\156\55\164\141\x62\x6c\145\55\x6c\x69\163\164\x2d\x73\164\141\164\165\x73\x22\x3e\xd\xa\40\40\40\40\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\40\40\x20\x20\x20\x20\40\40" . esc_attr($IM->get_add_on_name()) . "\xd\12\40\x20\40\40\40\40\x20\40\x20\40\40\40\40\x20\40\x20\x20\x20\x20\x20\x3c\57\164\144\76\15\xa\40\40\x20\40\x20\x20\x20\40\x20\x20\40\40\40\40\x20\x20\x20\x20\40\x20\74\x74\144\40\x63\154\x61\x73\163\75\42\x61\144\144\x6f\x6e\55\x74\141\142\154\145\55\154\151\163\164\x2d\156\141\155\145\x22\76\15\12\x20\x20\x20\40\x20\40\40\x20\40\40\40\40\x20\x20\x20\x20\x20\40\x20\40\x20\40\40\x20\74\x69\x3e\15\12\40\x20\40\40\40\x20\x20\40\40\x20\40\40\x20\x20\40\40\x20\40\40\40\40\x20\40\40\x20\40\x20\40" . esc_attr($IM->getAddOnDesc()) . "\xd\xa\40\40\40\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\74\x2f\x69\76\15\12\x20\40\x20\x20\x20\x20\40\40\40\40\x20\x20\x20\40\40\x20\40\40\x20\x20\74\x2f\x74\144\x3e\15\12\40\40\x20\x20\40\40\40\40\40\x20\40\40\x20\40\40\x20\40\40\40\40\74\x74\x64\x20\143\x6c\141\x73\x73\75\x22\141\x64\x64\x6f\x6e\x2d\x74\141\142\154\x65\55\x6c\x69\163\x74\x2d\141\x63\164\151\x6f\x6e\x73\42\76\xd\xa\x20\40\x20\40\40\40\x20\40\x20\x20\40\x20\x20\40\40\40\40\x20\40\40\40\x20\40\x20\74\141\40\x20\x63\154\141\163\163\75\42\142\x75\164\164\x6f\x6e\x2d\160\162\151\155\141\162\x79\x20\142\165\164\164\157\x6e\x20\164\151\x70\163\x22\40\15\xa\x20\x20\40\40\x20\x20\40\40\40\x20\40\40\40\40\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\40\40\40\150\x72\145\x66\x3d\42" . esc_attr($IM->getSettingsUrl()) . "\42\x3e\15\12\40\40\40\40\40\x20\x20\40\x20\40\40\x20\x20\40\40\40\40\x20\40\x20\x20\40\40\x20\40\x20\x20\x20" . esc_html(mo_("\123\x65\x74\164\151\x6e\x67\x73")) . "\15\12\40\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\40\40\40\x20\x20\40\40\x20\x3c\57\x61\x3e\15\xa\40\40\40\40\40\x20\40\x20\x20\40\40\x20\x20\x20\40\x20\x20\40\x20\40\x3c\x2f\164\x64\76";
            echo "\xd\12\40\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\x20\x20\x20\74\57\164\x72\x3e";
            XRr:
        }
        F2F:
    }
    public function get_config_page_pointers()
    {
        return array();
    }
}
P4Z:
