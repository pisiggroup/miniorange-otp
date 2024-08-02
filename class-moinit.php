<?php


namespace OTP;

use OTP\Handler\EmailVerificationLogic;
use OTP\Handler\FormActionHandler;
use OTP\Handler\MoActionHandlerHandler;
use OTP\Handler\MoRegistrationHandler;
use OTP\Handler\PhoneVerificationLogic;
use OTP\Helper\CountryList;
use OTP\Helper\GatewayFunctions;
use OTP\Helper\MenuItems;
use OTP\Helper\MoConstants;
use OTP\Helper\MoDisplayMessages;
use OTP\Helper\MoMessages;
use OTP\Helper\MoUtility;
use OTP\Helper\MOVisualTour;
use OTP\Helper\PolyLangStrings;
use OTP\Helper\Templates\DefaultPopup;
use OTP\Helper\Templates\ErrorPopup;
use OTP\Helper\Templates\ExternalPopup;
use OTP\Helper\Templates\UserChoicePopup;
use OTP\Objects\PluginPageDetails;
use OTP\Objects\TabDetails;
use OTP\Objects\Tabs;
use OTP\Traits\Instance;
use OTP\Helper\MoAddonListContent;
use OTP\Helper\MoOffer;
use OTP\Handler\CustomForm;
use OTP\Helper\MocURLCall;
use OTP\Objects\BaseMessages;
use OTP\Helper\MoVersionUpdate;
use OTP\Helper\MoAlphaNumeric;
use OTP\Helper\MoSMSBackupGateway;
use OTP\Helper\MoGloballyBannedPhone;
use OTP\Helper\MoWhatsApp;
use OTP\Helper\MoMasterCode;
use OTP\Helper\MoReporting;
use OTP\Helper\TransactionCost;
if (defined("\x41\102\x53\120\x41\x54\x48")) {
    goto u2;
}
exit;
u2:
if (class_exists("\x4d\157\x49\x6e\151\164")) {
    goto FR;
}
final class MoInit
{
    use Instance;
    private function __construct()
    {
        $this->initialize_hooks();
        $this->initialize_globals();
        $this->initialize_helpers();
        $this->initialize_handlers();
        $this->register_polylang_strings();
        $this->register_addons();
    }
    private function initialize_hooks()
    {
        add_action("\160\x6c\165\x67\151\x6e\163\x5f\154\x6f\x61\x64\145\144", array($this, "\x6f\x74\x70\x5f\154\157\x61\x64\x5f\x74\x65\x78\164\144\157\x6d\141\x69\x6e"));
        add_action("\141\144\x6d\151\156\x5f\x6d\x65\x6e\165", array($this, "\155\151\156\151\157\x72\141\156\x67\x65\137\143\165\x73\x74\x6f\155\145\x72\x5f\166\141\x6c\151\x64\141\x74\x69\x6f\156\x5f\x6d\x65\156\165"));
        add_action("\141\x64\155\x69\156\x5f\x65\x6e\161\x75\x65\165\x65\x5f\x73\143\x72\151\x70\x74\163", array($this, "\x6d\x6f\137\162\x65\x67\x69\x73\164\162\141\x74\151\157\156\x5f\160\154\165\147\x69\156\x5f\163\145\164\x74\x69\x6e\x67\163\x5f\163\x74\x79\x6c\x65"));
        add_action("\141\144\155\x69\156\137\145\156\x71\x75\x65\x75\x65\x5f\163\143\162\x69\160\164\x73", array($this, "\x6d\x6f\137\x72\145\147\151\163\x74\x72\141\164\x69\157\156\137\160\154\x75\147\151\156\x5f\x73\x65\164\x74\151\x6e\x67\163\137\163\x63\162\151\x70\164"));
        add_action("\167\160\137\145\156\x71\165\x65\x75\x65\x5f\163\143\x72\151\x70\164\x73", array($this, "\155\x6f\x5f\162\x65\147\151\163\164\162\x61\164\x69\x6f\156\x5f\160\x6c\x75\147\x69\x6e\137\146\162\157\x6e\x74\145\x6e\x64\x5f\163\143\162\151\x70\x74\163"), 99);
        add_action("\154\x6f\x67\151\156\x5f\145\x6e\x71\x75\x65\165\145\137\163\143\162\x69\160\164\163", array($this, "\x6d\157\137\162\x65\x67\151\163\164\x72\141\x74\x69\x6f\x6e\x5f\160\154\x75\147\x69\x6e\x5f\x66\x72\x6f\156\x74\x65\x6e\x64\x5f\x73\x63\x72\151\160\x74\163"), 99);
        add_action("\x6d\157\137\162\145\x67\151\x73\x74\162\x61\x74\x69\157\x6e\137\x73\x68\157\x77\x5f\x6d\x65\x73\163\141\x67\145", array($this, "\x6d\x6f\137\163\150\157\167\137\157\x74\x70\137\x6d\145\x73\x73\x61\x67\x65"), 1, 2);
        add_action("\150\x6f\165\162\154\x79\137\163\x79\x6e\x63", array($this, "\x68\157\165\x72\154\171\x5f\163\171\156\143"));
        add_action("\141\144\155\x69\156\x5f\146\157\x6f\x74\x65\162", array($this, "\146\145\145\144\142\141\143\x6b\137\162\x65\161\x75\145\163\164"));
        add_filter("\167\x70\x5f\x6d\x61\x69\154\137\146\162\x6f\x6d\137\156\141\155\145", array($this, "\x63\x75\163\164\157\x6d\137\x77\160\x5f\155\x61\x69\x6c\137\146\x72\157\155\137\156\x61\x6d\145"));
        add_filter("\160\154\x75\x67\x69\156\137\x72\x6f\167\137\x6d\145\x74\x61", array($this, "\155\157\x5f\155\145\164\x61\x5f\x6c\151\x6e\153\x73"), 10, 2);
        add_action("\167\160\137\145\x6e\161\x75\x65\x75\145\x5f\x73\143\162\x69\160\x74\x73", array($this, "\x6c\157\141\x64\137\152\161\165\145\162\x79\137\x6f\x6e\137\x66\x6f\x72\155\x73"));
        add_action("\160\154\x75\x67\x69\156\137\x61\143\x74\151\157\156\137\154\x69\x6e\153\163\137" . MOV_PLUGIN_NAME, array($this, "\160\x6c\x75\147\151\x6e\x5f\x61\x63\x74\x69\157\156\137\x6c\151\x6e\x6b\x73"), 10, 1);
    }
    public function load_jquery_on_forms()
    {
        if (wp_script_is("\152\x71\165\145\162\x79", "\x65\x6e\161\165\145\x75\145\144")) {
            goto Qt;
        }
        wp_enqueue_script("\152\161\x75\x65\162\x79");
        Qt:
    }
    private function initialize_helpers()
    {
        MoMessages::instance();
        MoAddonListContent::instance();
        MoOffer::instance();
        PolyLangStrings::instance();
        MOVisualTour::instance();
        TransactionCost::instance();
        if (!file_exists(MOV_DIR . "\x68\x65\154\x70\x65\x72\x2f\143\x6c\141\163\x73\55\x6d\x6f\x76\x65\x72\x73\x69\157\x6e\x75\160\144\141\164\x65\56\x70\150\x70")) {
            goto qn;
        }
        MoVersionUpdate::instance();
        qn:
        if (!file_exists(MOV_DIR . "\x68\145\x6c\x70\145\x72\57\143\x6c\x61\163\163\55\155\157\141\154\x70\x68\x61\156\165\x6d\x65\162\151\x63\56\160\150\x70")) {
            goto Hv;
        }
        MoAlphaNumeric::instance();
        Hv:
        if (!file_exists(MOV_DIR . "\x68\x65\x6c\160\x65\162\57\x63\x6c\x61\x73\163\x2d\155\x6f\x73\155\163\x62\x61\143\153\165\x70\x67\141\164\x65\x77\x61\x79\x2e\x70\150\x70")) {
            goto i3;
        }
        MoSMSBackupGateway::instance();
        i3:
        if (!file_exists(MOV_DIR . "\150\145\x6c\160\145\x72\57\143\154\141\x73\163\55\155\157\x67\154\x6f\142\141\154\154\171\142\x61\x6e\156\x65\144\160\x68\157\x6e\145\56\160\x68\x70")) {
            goto ho;
        }
        MoGloballyBannedPhone::instance();
        ho:
        if (!file_exists(MOV_DIR . "\150\145\x6c\x70\145\162\x2f\143\x6c\141\163\163\x2d\155\157\x77\x68\x61\164\x73\141\160\160\56\160\x68\x70")) {
            goto Ba;
        }
        MoWhatsApp::instance();
        Ba:
        if (!file_exists(MOV_DIR . "\x68\145\x6c\x70\x65\162\x2f\x63\154\x61\163\163\x2d\115\157\x4d\x61\x73\164\x65\x72\x43\x6f\x64\145\56\x70\x68\160")) {
            goto PF;
        }
        MoMasterCode::instance();
        PF:
        if (!file_exists(MOV_DIR . "\x68\x65\154\x70\145\x72\57\143\154\141\163\163\55\155\157\162\x65\x70\x6f\x72\x74\x69\x6e\147\56\160\x68\x70")) {
            goto Pg;
        }
        MoReporting::instance();
        Pg:
    }
    private function initialize_handlers()
    {
        FormActionHandler::instance();
        MoActionHandlerHandler::instance();
        DefaultPopup::instance();
        ErrorPopup::instance();
        ExternalPopup::instance();
        UserChoicePopup::instance();
        MoRegistrationHandler::instance();
        CustomForm::instance();
    }
    private function initialize_globals()
    {
        global $Hg, $pt;
        $Hg = PhoneVerificationLogic::instance();
        $pt = EmailVerificationLogic::instance();
    }
    public function miniorange_customer_validation_menu()
    {
        MenuItems::instance();
    }
    public function mo_customer_validation_options()
    {
        include MOV_DIR . "\x63\x6f\x6e\x74\x72\x6f\154\x6c\145\162\x73\57\x6d\141\151\x6e\x2d\143\157\156\164\162\157\x6c\x6c\x65\162\x2e\x70\150\160";
    }
    public function mo_registration_plugin_settings_style()
    {
        wp_enqueue_style("\155\x6f\137\143\165\x73\x74\157\155\x65\x72\x5f\x76\141\154\151\144\141\164\151\157\156\x5f\141\x64\155\x69\x6e\137\x73\x65\164\164\151\x6e\x67\163\137\163\x74\x79\x6c\x65", MOV_CSS_URL, array(), MOV_VERSION);
        wp_enqueue_style("\x6d\157\137\143\165\163\164\157\155\145\162\137\166\141\x6c\x69\144\141\x74\x69\x6f\156\137\151\x6e\164\x74\x65\154\151\x6e\160\x75\x74\x5f\163\164\x79\154\145", MO_INTTELINPUT_CSS, array(), MOV_VERSION);
        wp_enqueue_style("\155\157\x5f\155\x61\151\156\x5f\x73\x74\171\154\145", MOV_MAIN_CSS, array(), MOV_VERSION);
    }
    public function mo_registration_plugin_settings_script()
    {
        $ZS = array();
        wp_enqueue_script("\x6d\x6f\x5f\x63\x75\x73\164\157\x6d\x65\162\x5f\166\x61\154\x69\144\x61\164\151\x6f\x6e\x5f\x61\144\155\151\x6e\137\x73\145\164\x74\151\x6e\x67\x73\x5f\163\143\x72\x69\160\x74", MOV_JS_URL, array("\x6a\161\165\145\162\x79"), MOV_VERSION, false);
        wp_enqueue_script("\155\x6f\x5f\143\x75\163\x74\157\x6d\x65\x72\x5f\166\141\154\x69\144\x61\x74\x69\157\x6e\137\146\157\162\155\137\166\x61\x6c\x69\144\x61\x74\x69\157\156\x5f\x73\143\x72\x69\x70\164", VALIDATION_JS_URL, array("\x6a\161\x75\145\162\171"), MOV_VERSION, false);
        wp_register_script("\x6d\157\137\143\x75\163\164\x6f\x6d\145\162\137\166\141\x6c\x69\144\x61\164\x69\157\x6e\137\151\156\x74\x74\145\154\x69\156\x70\x75\x74\x5f\163\143\x72\151\160\164", MO_INTTELINPUT_JS, array("\152\161\x75\x65\162\171"), MOV_VERSION, false);
        $q6 = CountryList::get_countrycode_list();
        $q6 = apply_filters("\163\x65\x6c\145\143\164\145\x64\x5f\143\x6f\165\156\164\x72\x69\145\163", $q6);
        foreach ($q6 as $a6 => $bh) {
            array_push($ZS, $bh);
            X0:
        }
        lT:
        wp_localize_script("\x6d\157\x5f\143\165\163\x74\157\155\x65\x72\x5f\x76\x61\154\x69\x64\141\x74\x69\x6f\156\x5f\151\x6e\x74\x74\145\x6c\151\156\x70\165\x74\x5f\163\x63\x72\x69\x70\x74", "\x6d\157\163\145\x6c\145\x63\x74\x65\144\x64\x72\157\160\144\x6f\167\x6e", array("\x73\x65\x6c\x65\143\x74\x65\x64\144\x72\157\x70\x64\157\167\x6e" => $ZS));
        wp_enqueue_script("\155\x6f\x5f\x63\165\x73\164\157\155\145\162\x5f\166\x61\154\x69\144\x61\x74\x69\x6f\x6e\137\151\x6e\x74\164\145\x6c\x69\x6e\160\165\x74\x5f\163\x63\162\x69\x70\x74");
    }
    public function mo_registration_plugin_frontend_scripts()
    {
        $ZS = array();
        if (get_mo_option("\x73\150\157\167\x5f\x64\x72\x6f\x70\x64\157\x77\156\137\x6f\x6e\x5f\146\x6f\x72\x6d")) {
            goto BT;
        }
        return;
        BT:
        $MI = apply_filters("\x6d\157\137\x70\150\x6f\x6e\x65\x5f\x64\x72\x6f\x70\x64\157\x77\156\137\163\x65\x6c\x65\143\164\x6f\162", array());
        if (!MoUtility::is_blank($MI)) {
            goto Nm;
        }
        return;
        Nm:
        $MI = array_unique($MI);
        $q6 = CountryList::get_countrycode_list();
        $q6 = apply_filters("\163\145\x6c\145\x63\x74\145\x64\137\x63\157\x75\156\164\x72\151\145\x73", $q6);
        foreach ($q6 as $a6 => $bh) {
            array_push($ZS, $bh);
            PZ:
        }
        Zf:
        $Lr = CountryList::get_default_country_iso_code();
        $ps = apply_filters("\155\157\137\x67\x65\x74\x5f\x64\x65\x66\141\165\154\164\x5f\x63\157\165\156\164\x72\171", $Lr);
        wp_register_script("\x6d\157\x5f\143\x75\x73\x74\157\x6d\x65\x72\x5f\166\141\x6c\x69\x64\x61\164\151\x6f\x6e\x5f\151\x6e\x74\x74\145\154\x69\x6e\x70\x75\164\137\163\143\162\151\x70\x74", MO_INTTELINPUT_JS, array("\152\x71\x75\x65\x72\x79"), MOV_VERSION, false);
        wp_localize_script("\x6d\x6f\137\143\165\163\x74\x6f\x6d\x65\x72\x5f\x76\x61\154\x69\144\141\x74\x69\157\156\x5f\x69\156\x74\x74\145\x6c\151\x6e\x70\165\164\x5f\163\143\162\151\x70\164", "\x6d\x6f\163\x65\x6c\x65\x63\164\x65\x64\144\x72\x6f\x70\144\157\x77\156", array("\163\145\154\x65\x63\164\x65\144\144\162\x6f\x70\x64\157\167\x6e" => $ZS));
        wp_enqueue_script("\x6d\x6f\x5f\143\165\163\164\157\155\145\162\x5f\x76\x61\154\151\144\141\x74\x69\x6f\156\137\x69\x6e\164\x74\145\154\x69\x6e\x70\x75\164\x5f\163\143\x72\x69\160\164");
        wp_enqueue_style("\155\157\x5f\x63\165\163\x74\x6f\155\145\162\x5f\166\141\x6c\x69\144\x61\164\x69\157\x6e\137\x69\156\164\x74\145\x6c\x69\156\x70\165\164\137\x73\x74\171\154\145", MO_INTTELINPUT_CSS, array(), MOV_VERSION);
        wp_register_script("\155\x6f\137\143\165\x73\164\x6f\x6d\x65\162\x5f\166\x61\x6c\151\x64\x61\164\x69\157\156\137\144\162\x6f\160\x64\x6f\167\156\137\163\143\162\151\160\164", MO_DROPDOWN_JS, array("\152\x71\x75\x65\162\x79"), MOV_VERSION, true);
        wp_localize_script("\x6d\157\x5f\x63\165\x73\164\x6f\155\x65\162\137\x76\x61\x6c\x69\144\141\164\x69\x6f\x6e\137\144\x72\157\160\x64\157\167\x6e\x5f\x73\143\x72\151\x70\164", "\155\x6f\144\x72\157\160\144\157\167\156\x76\141\x72\x73", array("\163\145\x6c\145\143\x74\157\x72" => wp_json_encode($MI), "\144\145\146\x61\165\x6c\164\x43\x6f\165\x6e\x74\162\x79" => $ps, "\157\156\154\171\x43\157\x75\156\x74\x72\x69\145\163" => CountryList::get_only_country_list()));
        wp_enqueue_script("\155\157\137\x63\165\x73\164\x6f\x6d\145\162\x5f\x76\x61\154\151\x64\141\x74\x69\x6f\x6e\x5f\x64\162\x6f\x70\x64\157\x77\156\137\163\143\x72\151\x70\164");
    }
    public function mo_show_otp_message($U0, $R7)
    {
        new MoDisplayMessages($U0, $R7);
    }
    public function otp_load_textdomain()
    {
        load_plugin_textdomain("\155\x69\156\151\x6f\162\141\156\x67\145\55\x6f\x74\x70\x2d\166\x65\162\x69\x66\x69\x63\x61\x74\x69\x6f\156", false, dirname(plugin_basename(__FILE__)) . "\x2f\154\141\156\147\x2f");
        do_action("\155\157\137\x6f\164\x70\137\x76\x65\162\151\x66\x69\x63\141\x74\x69\x6f\x6e\x5f\141\144\144\x5f\157\156\x5f\x6c\x61\x6e\x67\x5f\x66\x69\154\145\x73");
    }
    private function register_polylang_strings()
    {
        if (MoUtility::is_polylang_installed()) {
            goto oW;
        }
        return;
        oW:
        foreach (maybe_unserialize(MO_POLY_STRINGS) as $a6 => $bh) {
            pll_register_string($a6, $bh, "\155\x69\156\151\157\x72\x61\x6e\x67\145\x2d\157\x74\160\55\x76\x65\162\151\146\x69\143\x61\x74\x69\157\x6e");
            p7:
        }
        Tm:
    }
    private function register_addons()
    {
        $k7 = GatewayFunctions::instance();
        $k7->register_addons();
    }
    public function feedback_request()
    {
        include MOV_DIR . "\143\x6f\x6e\x74\x72\x6f\154\154\x65\162\x73\x2f\146\145\x65\x64\142\x61\143\153\56\160\150\160";
    }
    public function mo_meta_links($Hi, $G3)
    {
        if (!(MOV_PLUGIN_NAME === $G3)) {
            goto ml;
        }
        $Hi[] = "\x3c\163\x70\141\156\x20\143\x6c\x61\163\163\75\x27\x64\x61\163\x68\x69\x63\x6f\x6e\163\40\144\x61\163\150\x69\x63\x6f\x6e\163\x2d\x73\x74\x69\x63\153\171\47\76\74\x2f\163\160\141\x6e\76\xd\xa\40\x20\40\40\40\x20\x20\40\40\40\40\40\74\141\40\150\x72\145\x66\75\47" . MoConstants::FAQ_URL . "\x27\40\164\x61\x72\x67\x65\x74\x3d\47\137\142\154\141\x6e\153\x27\76" . mo_("\x46\x41\x51\x73") . "\x3c\x2f\x61\76";
        ml:
        return $Hi;
    }
    public function plugin_action_links($ul)
    {
        $W1 = TabDetails::instance();
        $fw = $W1->tab_details[Tabs::FORMS];
        if (!is_plugin_active(MOV_PLUGIN_NAME)) {
            goto cG;
        }
        $ul = array_merge(array("\x3c\141\x20\150\x72\x65\x66\x3d\42" . esc_url(admin_url("\141\x64\x6d\151\x6e\56\x70\150\x70\x3f\160\141\147\x65\x3d" . $fw->menu_slug)) . "\x22\76" . mo_("\123\145\x74\x74\x69\156\x67\163") . "\74\57\x61\76"), $ul);
        cG:
        return $ul;
    }
    public function hourly_sync()
    {
        $k7 = GatewayFunctions::instance();
        $k7->hourly_sync();
    }
    public function custom_wp_mail_from_name($f0)
    {
        $k7 = GatewayFunctions::instance();
        return $k7->custom_wp_mail_from_name($f0);
    }
}
FR:
