<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\123\x50\x41\x54\x48")) {
    goto qt5;
}
exit;
qt5:
use OTP\Helper\FormSessionVars;
use OTP\Objects\BaseMessages;
use OTP\Helper\MoMessages;
use OTP\Helper\MoConstants;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
if (class_exists("\x55\x6c\x74\x69\155\141\164\145\120\x72\x6f\x52\145\x67\x69\x73\x74\x72\141\164\x69\157\x6e\x46\x6f\x72\x6d")) {
    goto GHv;
}
class UltimateProRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::ULTIMATE_PRO;
        $this->phone_form_id = "\151\156\x70\165\164\133\156\x61\x6d\x65\75\160\x68\x6f\x6e\x65\135";
        $this->form_key = "\x55\114\x54\x49\x4d\101\124\105\x5f\x4d\x45\115\x5f\x50\122\x4f";
        $this->type_phone_tag = "\155\x6f\137\x75\x6c\164\151\x70\x72\157\137\160\150\157\x6e\x65\x5f\x65\x6e\141\142\x6c\145";
        $this->type_email_tag = "\x6d\157\137\x75\x6c\x74\151\x70\162\x6f\x5f\x65\155\141\x69\154\x5f\x65\x6e\141\x62\x6c\x65";
        $this->form_name = mo_("\125\154\x74\151\155\141\164\x65\x20\x4d\x65\155\x62\145\x72\163\150\x69\160\40\120\x72\x6f\40\x46\x6f\x72\x6d");
        $this->is_form_enabled = get_mo_option("\x75\x6c\164\151\160\162\x6f\x5f\x65\156\141\x62\154\145");
        $this->form_documents = MoFormDocs::UM_PRO_LINK;
        $this->validate_otp_action = "\x6d\x69\156\151\x6f\162\x61\156\147\x65\55\x75\x6c\164\151\x2d\155\x65\x6d\x62\x65\x72\x73\x68\151\160\x2d\x70\162\157\x2d\x76\x65\162\x69\146\171\x2d\143\x6f\144\x65";
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\165\154\x74\151\160\162\x6f\x5f\164\171\160\145");
        if (!$this->is_form_enabled) {
            goto mvg;
        }
        add_action("\x77\160\x5f\145\156\161\x75\x65\x75\145\137\163\x63\x72\x69\x70\164\163", array($this, "\x72\x65\x67\x69\163\x74\x65\162\137\x75\154\164\151\x5f\166\145\162\x69\x66\171\x5f\x73\143\x72\151\x70\164"));
        mvg:
        add_action("\x77\160\137\x61\152\141\170\x5f{$this->validate_otp_action}", array($this, "\160\x72\x6f\143\x65\163\x73\x46\x6f\x72\x6d\x41\156\144\126\141\x6c\x69\x64\x61\x74\145\117\124\x50"));
        add_action("\167\160\137\141\152\x61\170\x5f\x6e\x6f\x70\x72\151\x76\137{$this->validate_otp_action}", array($this, "\160\x72\157\x63\x65\x73\x73\106\157\162\x6d\x41\156\x64\126\x61\x6c\151\x64\x61\164\145\x4f\124\x50"));
        if (!(strcasecmp($this->otp_type, $this->type_phone_tag) === 0)) {
            goto IQy;
        }
        add_shortcode("\x6d\x6f\x5f\160\150\157\x6e\145", array($this, "\160\x68\x6f\156\145\x5f\163\x68\x6f\162\164\x63\157\144\x65"));
        IQy:
        if (!(strcasecmp($this->otp_type, $this->type_email_tag) === 0)) {
            goto z8g;
        }
        add_shortcode("\155\x6f\137\145\x6d\x61\151\x6c", array($this, "\x65\x6d\x61\151\x6c\x5f\x73\x68\157\162\x74\x63\x6f\x64\145"));
        z8g:
        $this->routeData();
    }
    private function routeData()
    {
        if (array_key_exists("\157\160\164\x69\157\156", $_GET)) {
            goto SkQ;
        }
        return;
        SkQ:
        switch (trim(sanitize_text_field(wp_unslash($_GET["\x6f\160\164\151\x6f\x6e"])))) {
            case "\155\x69\156\x69\x6f\162\x61\x6e\x67\145\55\x75\154\164\x69":
                if (check_ajax_referer($this->nonce, $this->nonce_key)) {
                    goto jIu;
                }
                wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
                exit;
                jIu:
                $this->handle_ulti_form(MoUtility::mo_sanitize_array($_POST));
                goto XHx;
        }
        wIu:
        XHx:
    }
    public function phone_shortcode()
    {
        $b3 = "\74\144\x69\166\x20\163\x74\x79\154\145\x3d\47\144\151\x73\x70\154\x61\x79\72\164\141\x62\x6c\x65\73\164\145\170\164\x2d\x61\154\151\x67\x6e\72\143\x65\156\164\x65\162\x3b\47\76\x3c\x69\x6d\x67\x20\163\162\143\75\47" . MOV_URL . "\x69\156\x63\154\x75\144\x65\x73\x2f\x69\155\x61\147\x65\163\57\x6c\157\x61\x64\x65\x72\x2e\x67\151\x66\x27\76\74\x2f\144\x69\x76\x3e";
        $Tr = "\74\144\x69\166\40\163\164\x79\154\x65\x3d\47\155\141\x72\147\151\156\x2d\164\x6f\160\x3a\x20\x32\45\73\47\x3e\74\x62\165\x74\x74\157\156\x20\x74\171\x70\x65\x3d\47\x62\165\164\164\157\156\x27\x20\x63\x6c\x61\163\163\75\47\142\165\x74\x74\157\156\40\x61\x6c\164\47\40\x73\164\x79\154\145\x3d\47\167\151\144\164\150\x3a\61\x30\x30\x25\73\150\x65\x69\x67\150\164\72\63\x30\x70\x78\73";
        $Tr .= "\146\157\156\x74\55\146\141\x6d\151\x6c\x79\72\40\122\157\x62\157\164\157\73\x66\x6f\x6e\164\x2d\x73\x69\172\x65\72\40\61\62\160\x78\40\x21\151\155\x70\157\162\164\141\156\x74\73\47\x20\x69\x64\75\x27\x6d\151\156\x69\157\x72\141\156\147\x65\x5f\x6f\x74\x70\x5f\164\x6f\x6b\x65\x6e\137\x73\x75\142\155\x69\164\47\x20\x74\151\x74\x6c\145\x3d\47\x50\x6c\145\141\163\145\40\105\x6e\x74\145\x72\x20\141\x6e\x20\x70\150\x6f\x6e\145\40\x74\x6f\40\145\156\x61\x62\154\145\x20\x74\x68\x69\163\56\x27\76";
        $Tr .= "\x43\154\x69\143\153\x20\x48\145\162\x65\x20\164\x6f\x20\126\x65\162\151\146\171\x20\x50\x68\157\156\x65\74\x2f\x62\x75\x74\x74\x6f\x6e\x3e\x3c\x2f\x64\x69\x76\76\74\144\x69\166\40\x73\164\x79\154\145\75\x27\x6d\x61\x72\x67\151\x6e\x2d\x74\x6f\160\72\x32\x25\47\76\x3c\144\151\x76\40\151\144\x3d\47\155\157\137\155\x65\x73\x73\141\147\x65\x27\x20\x68\151\x64\x64\145\156\x3d\47\x27\x20";
        $Tr .= "\x73\164\171\154\x65\75\47\x62\x61\143\x6b\x67\x72\x6f\x75\156\x64\55\143\x6f\154\x6f\x72\72\40\x23\146\x37\146\66\x66\67\x3b\x70\x61\x64\144\x69\x6e\x67\x3a\x20\x31\145\x6d\x20\x32\x65\x6d\40\x31\145\155\40\63\x2e\x35\x65\155\73\x27\x27\x3e\x3c\x2f\144\151\x76\x3e\x3c\x2f\144\151\x76\76";
        $qW = "\x3c\x73\143\x72\151\x70\164\x3e\152\121\x75\145\162\171\50\x64\x6f\143\165\155\x65\156\x74\x29\56\162\x65\141\144\171\x28\146\x75\156\143\164\151\x6f\x6e\50\51\x7b\x24\x6d\x6f\75\152\x51\x75\145\162\x79\73\x20\x76\141\162\x20\x64\x69\166\105\x6c\x65\x6d\145\x6e\x74\x20\x3d\x20\42" . $Tr . "\x22\73\40";
        $qW .= "\44\x6d\157\50\42\151\x6e\160\165\164\x5b\156\x61\x6d\145\x3d\x70\x68\x6f\156\x65\135\x22\x29\x2e\143\x68\141\x6e\147\x65\x28\x66\x75\x6e\x63\x74\x69\x6f\156\50\x29\x7b\40\x69\x66\x28\x21\x24\x6d\157\x28\x74\150\151\x73\x29\x2e\x76\x61\x6c\x28\x29\51\x7b\x20\x24\155\x6f\x28\42\x23\x6d\x69\x6e\x69\157\x72\x61\156\147\x65\x5f\157\x74\160\x5f\164\x6f\153\145\x6e\137\163\x75\x62\x6d\x69\x74\x22\51\56\160\162\x6f\x70\x28\42\144\151\x73\x61\x62\154\145\144\42\x2c\164\162\x75\x65\51\73";
        $qW .= "\x20\175\x65\x6c\163\x65\x7b\x20\x24\155\157\50\x22\43\x6d\151\x6e\151\157\x72\141\156\147\145\137\x6f\164\160\x5f\164\x6f\153\145\x6e\x5f\x73\165\x62\x6d\151\164\42\51\x2e\160\162\x6f\x70\x28\42\x64\151\163\141\142\154\x65\x64\42\54\x66\141\x6c\163\145\51\73\40\x7d\x20\175\x29\x3b";
        $qW .= "\x20\44\155\x6f\50\144\151\166\105\154\x65\x6d\x65\156\164\x29\56\x69\156\163\x65\162\x74\101\x66\164\x65\162\x28\x24\155\157\50\40\42\151\x6e\x70\x75\x74\x5b\x6e\141\x6d\145\75\x70\x68\x6f\156\145\135\x22\x29\51\73\x20\x24\155\x6f\x28\42\43\x6d\x69\156\151\157\162\141\x6e\147\x65\137\157\x74\x70\137\x74\x6f\153\145\x6e\x5f\163\x75\x62\x6d\x69\x74\x22\51\x2e\x63\154\x69\x63\153\50\146\165\156\143\164\151\157\156\50\157\x29\x7b\40";
        $qW .= "\x76\141\162\x20\x65\x3d\44\x6d\x6f\x28\x22\151\156\160\165\164\x5b\x6e\141\x6d\145\75\x70\x68\x6f\156\x65\135\42\51\x2e\x76\141\154\x28\51\x3b\x20\44\155\157\x28\42\43\155\x6f\137\155\145\163\x73\141\x67\x65\x22\x29\x2e\145\x6d\160\x74\x79\50\x29\x2c\44\x6d\157\x28\42\x23\155\x6f\x5f\x6d\x65\163\x73\141\147\x65\42\x29\56\x61\160\160\145\156\144\x28\42" . $b3 . "\42\x29\54";
        $qW .= "\x24\155\157\x28\x22\x23\155\157\137\x6d\x65\x73\163\141\x67\145\x22\51\56\x73\150\x6f\167\50\x29\54\x24\x6d\157\x2e\141\152\141\x78\x28\173\x75\162\x6c\x3a\42" . site_url() . "\x2f\x3f\x6f\x70\x74\x69\157\x6e\75\155\x69\x6e\151\x6f\x72\x61\156\x67\145\55\165\154\x74\151\42\54\x74\171\160\145\x3a\x22\120\117\x53\124\42\54";
        $qW .= "\x64\x61\x74\141\72\173\x73\x65\143\165\162\x69\x74\171\72\42" . wp_create_nonce($this->nonce) . "\x22\54\x20\x75\x73\145\162\137\x70\150\157\x6e\145\72\x65\175\54\x63\x72\157\163\x73\104\x6f\155\141\151\156\x3a\41\60\54\144\x61\x74\141\x54\171\160\145\72\42\152\x73\157\156\42\x2c\163\165\143\x63\145\x73\x73\72\146\165\x6e\x63\164\151\x6f\x6e\x28\x6f\x29\173\x20\151\146\x28\x6f\x2e\162\x65\x73\x75\154\x74\75\75\x22\x73\165\143\143\145\x73\x73\x22\x29\x7b\x24\x6d\x6f\50\x22\x23\155\157\137\155\x65\163\x73\141\147\x65\42\51\x2e\145\x6d\160\164\x79\50\x29\54";
        $qW .= "\x24\x6d\x6f\50\x22\43\x6d\157\137\155\x65\x73\x73\x61\x67\145\x22\51\x2e\x61\x70\x70\145\x6e\144\50\x6f\56\x6d\x65\163\x73\x61\x67\145\x29\54\44\x6d\157\x28\x22\x23\x6d\x6f\137\155\x65\x73\x73\x61\x67\x65\x22\x29\56\143\163\163\50\42\142\x6f\162\x64\145\x72\x2d\x74\157\x70\x22\x2c\x22\63\160\x78\x20\163\157\154\151\144\40\x67\x72\145\145\156\x22\51\54";
        $qW .= "\44\155\x6f\x28\x22\151\156\160\x75\164\133\156\141\155\x65\75\x65\x6d\141\x69\x6c\137\x76\x65\x72\x69\x66\171\135\x22\51\x2e\x66\157\x63\165\x73\x28\51\x7d\x65\154\163\x65\x7b\44\x6d\157\50\42\x23\x6d\x6f\137\x6d\x65\x73\163\x61\147\145\42\51\x2e\x65\x6d\160\x74\171\x28\x29\54\44\x6d\x6f\x28\42\43\155\x6f\x5f\155\x65\x73\x73\x61\147\x65\42\51\56\141\160\x70\145\156\144\50\x6f\56\155\x65\163\163\141\x67\x65\x29\54";
        $qW .= "\44\155\157\x28\42\43\x6d\x6f\x5f\x6d\145\163\x73\141\x67\145\x22\51\x2e\x63\163\x73\x28\42\142\x6f\x72\144\145\162\x2d\164\x6f\x70\x22\54\42\x33\160\170\x20\x73\157\x6c\151\x64\x20\162\145\144\42\51\54\44\155\157\50\42\x69\x6e\160\165\x74\133\x6e\141\x6d\x65\x3d\x70\x68\x6f\156\x65\137\166\145\162\151\146\x79\135\42\51\x2e\146\x6f\x63\x75\163\x28\x29\x7d\40\x3b\x7d\x2c";
        $qW .= "\x65\162\162\157\x72\x3a\146\x75\x6e\x63\x74\x69\157\x6e\50\157\54\x65\54\x6e\x29\173\175\x7d\x29\x7d\x29\x3b\175\x29\x3b\74\x2f\x73\x63\x72\x69\x70\x74\76";
        return $qW;
    }
    public function email_shortcode()
    {
        $b3 = "\x3c\144\x69\166\40\x73\164\x79\x6c\145\75\47\144\151\x73\160\154\141\171\x3a\164\x61\142\x6c\145\73\164\145\x78\164\x2d\x61\x6c\151\x67\x6e\x3a\x63\x65\156\164\145\x72\73\47\76\74\151\155\x67\x20\x73\x72\143\75\x27" . MOV_URL . "\151\x6e\x63\154\165\144\x65\163\57\151\x6d\141\x67\145\x73\x2f\x6c\157\x61\x64\x65\162\x2e\x67\x69\x66\47\x3e\74\x2f\144\151\x76\x3e";
        $Tr = "\74\144\151\166\40\163\x74\x79\154\x65\x3d\47\155\141\162\x67\x69\156\x2d\x74\157\x70\72\40\x32\x25\x3b\47\76\74\x62\x75\164\x74\x6f\156\x20\x74\171\x70\145\75\47\142\165\164\x74\157\x6e\x27\x20\144\151\163\x61\x62\154\x65\x64\x3d\47\144\151\163\x61\142\154\x65\x64\x27\x20\x63\154\x61\163\x73\75\47\x62\165\x74\164\x6f\156\40\141\x6c\x74\47\40";
        $Tr .= "\163\x74\171\154\x65\x3d\47\x77\151\x64\x74\150\72\x31\60\60\x25\73\150\145\x69\x67\150\x74\x3a\63\x30\160\170\x3b\146\157\156\x74\x2d\146\x61\155\x69\154\x79\72\40\122\157\x62\157\x74\x6f\73\146\x6f\x6e\164\x2d\x73\x69\172\145\72\x20\x31\x32\160\170\x20\41\151\155\160\x6f\162\164\x61\x6e\x74\x3b\x27\40\x69\144\75\x27\x6d\151\156\x69\157\162\x61\x6e\147\x65\137\157\164\160\x5f\164\157\153\x65\156\x5f\x73\x75\x62\155\x69\x74\47\x20";
        $Tr .= "\x74\x69\x74\154\145\x3d\47\x50\154\x65\x61\x73\145\40\105\156\164\145\x72\x20\x61\156\x20\145\155\x61\x69\x6c\40\164\x6f\40\145\156\141\142\154\145\40\x74\x68\151\x73\x2e\x27\x3e\103\x6c\x69\x63\153\40\x48\x65\162\145\40\164\157\40\126\x65\162\x69\x66\x79\x20\x79\x6f\x75\x72\40\145\155\x61\151\154\74\x2f\x62\165\x74\x74\157\156\76\74\57\x64\151\166\x3e\x3c\x64\151\x76\x20\x73\164\171\x6c\145\75\47\155\141\162\x67\151\x6e\x2d\x74\157\160\x3a\x32\45\x27\x3e";
        $Tr .= "\74\x64\151\166\40\x69\144\x3d\47\x6d\157\x5f\x6d\x65\163\163\x61\x67\x65\x27\x20\150\x69\144\144\x65\156\x3d\47\47\40\x73\164\171\x6c\145\x3d\47\142\141\143\x6b\147\162\x6f\x75\x6e\x64\55\143\157\154\157\x72\x3a\x20\43\146\67\x66\x36\x66\x37\x3b\160\x61\x64\x64\151\x6e\147\72\x20\61\145\x6d\x20\x32\x65\155\40\x31\145\x6d\40\63\56\x35\145\155\x3b\x27\47\76\x3c\x2f\144\x69\x76\x3e\x3c\57\x64\x69\166\76";
        $qW = "\x3c\163\143\162\x69\x70\x74\x3e\152\x51\x75\145\x72\171\x28\x64\x6f\x63\165\x6d\145\156\164\x29\x2e\x72\145\141\x64\171\x28\146\x75\x6e\143\x74\x69\x6f\156\50\51\173\x24\x6d\157\75\152\121\x75\x65\x72\x79\x3b\x20\166\141\162\x20\144\151\x76\x45\x6c\x65\x6d\145\x6e\164\40\75\40\x22" . $Tr . "\42\x3b\40";
        $qW .= "\x24\155\157\x28\42\151\x6e\160\165\164\133\x6e\141\155\x65\75\x75\x73\x65\162\x5f\145\155\141\x69\154\x5d\42\51\x2e\x63\150\141\156\x67\145\x28\x66\x75\156\x63\164\151\157\x6e\50\x29\173\40\151\146\50\41\44\x6d\x6f\x28\164\x68\151\163\51\x2e\x76\x61\154\x28\x29\51\173\40";
        $qW .= "\x24\x6d\x6f\x28\x22\x23\155\x69\x6e\151\157\162\x61\156\x67\x65\137\157\164\x70\137\164\x6f\x6b\x65\156\137\x73\x75\x62\155\x69\164\42\x29\x2e\160\162\x6f\x70\50\x22\x64\151\163\141\142\x6c\145\x64\x22\x2c\x74\x72\x75\x65\x29\x3b\40\175\145\x6c\163\145\173\x20";
        $qW .= "\x24\x6d\x6f\x28\x22\x23\155\x69\x6e\151\x6f\x72\x61\156\147\145\x5f\x6f\164\x70\137\x74\x6f\153\x65\x6e\137\163\165\142\155\x69\164\42\x29\x2e\x70\x72\x6f\x70\x28\x22\144\151\x73\141\142\154\145\x64\42\54\x66\141\154\x73\x65\x29\x3b\40\x7d\40\175\51\x3b\40";
        $qW .= "\44\x6d\157\50\144\x69\x76\x45\x6c\145\155\145\x6e\x74\51\56\151\156\x73\x65\162\164\x41\146\164\145\162\50\x24\x6d\x6f\50\x20\x22\151\156\x70\165\164\133\156\141\x6d\145\x3d\165\163\145\162\137\x65\x6d\141\x69\x6c\135\42\51\x29\x3b\x20\44\155\157\x28\x22\43\x6d\x69\x6e\151\157\x72\141\156\x67\145\137\x6f\164\160\x5f\x74\x6f\153\x65\x6e\x5f\163\x75\142\155\151\164\42\51\56\143\154\x69\x63\153\50\146\x75\x6e\143\164\151\157\156\x28\157\51\173\x20";
        $qW .= "\x76\141\x72\x20\x65\75\x24\x6d\x6f\x28\x22\x69\156\x70\x75\164\x5b\x6e\141\155\x65\75\165\x73\145\x72\x5f\x65\x6d\141\151\x6c\x5d\42\51\56\166\141\154\x28\x29\73\40\x24\155\157\50\x22\43\x6d\x6f\x5f\155\145\x73\x73\141\147\145\x22\x29\56\x65\x6d\160\x74\x79\50\51\54\x24\155\157\50\x22\x23\155\x6f\x5f\155\x65\x73\x73\141\x67\x65\42\51\x2e\x61\160\x70\x65\156\144\x28\42" . $b3 . "\42\x29\x2c";
        $qW .= "\44\155\157\50\x22\43\x6d\157\x5f\x6d\x65\163\163\x61\147\145\x22\x29\56\163\150\x6f\167\x28\x29\54\x24\155\157\x2e\x61\152\x61\170\x28\x7b\x75\x72\154\72\x22" . site_url() . "\x2f\x3f\157\160\164\x69\x6f\x6e\x3d\x6d\151\x6e\x69\x6f\162\141\156\147\145\x2d\165\154\164\x69\x22\x2c\164\x79\x70\145\x3a\x22\x50\x4f\x53\x54\42\x2c\144\141\164\141\72\x7b\163\x65\143\x75\x72\x69\x74\171\x3a\x22" . wp_create_nonce($this->nonce) . "\42\x2c\40\x75\163\145\162\x5f\145\155\x61\x69\154\72\145\x7d\54\x63\x72\x6f\163\x73\x44\157\155\x61\x69\x6e\72\x21\60\x2c\144\x61\164\141\124\x79\x70\145\72\x22\152\163\x6f\156\x22\x2c\163\x75\143\143\145\163\163\x3a\146\165\156\x63\164\x69\x6f\156\50\x6f\x29\x7b\x20\151\x66\x28\x6f\56\162\145\x73\165\x6c\x74\x3d\x3d\x22\163\x75\143\143\145\x73\x73\x22\51\x7b\x24\155\x6f\x28\x22\43\x6d\x6f\137\x6d\145\x73\163\x61\x67\145\42\x29\x2e\145\155\160\x74\171\x28\51\54\44\x6d\x6f\x28\x22\43\x6d\x6f\x5f\x6d\145\163\163\x61\147\x65\42\51\56\x61\160\x70\145\x6e\x64\50\x6f\56\x6d\x65\163\x73\x61\x67\x65\51\x2c\x24\x6d\x6f\50\x22\43\155\157\137\155\145\163\x73\141\147\145\42\51\x2e\143\163\163\x28\42\142\157\162\x64\145\x72\55\x74\x6f\x70\x22\54\x22\x33\x70\170\x20\x73\157\x6c\x69\144\40\x67\162\x65\x65\156\x22\x29\54\44\x6d\x6f\x28\42\x69\156\160\165\164\x5b\x6e\x61\155\145\x3d\145\x6d\x61\151\x6c\137\x76\145\x72\151\x66\171\135\x22\x29\x2e\146\157\x63\165\x73\50\51\175\145\x6c\163\x65\x7b\x24\155\x6f\50\x22\43\x6d\x6f\x5f\x6d\145\163\x73\141\x67\145\42\x29\x2e\145\x6d\x70\x74\171\x28\51\54\44\155\157\50\x22\x23\155\157\137\x6d\x65\x73\x73\x61\147\145\x22\51\x2e\141\160\160\145\156\144\x28\157\x2e\x6d\x65\x73\x73\x61\147\x65\51\x2c\44\155\157\x28\x22\x23\155\x6f\137\x6d\145\x73\163\x61\x67\x65\x22\51\56\143\163\163\50\x22\x62\x6f\x72\x64\x65\x72\x2d\164\157\x70\42\x2c\42\63\160\170\40\163\x6f\x6c\151\144\40\162\145\x64\x22\51\54\44\155\157\50\x22\x69\x6e\x70\165\164\133\x6e\x61\x6d\x65\x3d\160\x68\157\156\x65\x5f\166\145\x72\x69\x66\171\135\x22\x29\x2e\x66\x6f\x63\165\163\50\51\x7d\x20\73\x7d\54\x65\x72\162\157\162\72\146\x75\x6e\143\164\x69\x6f\156\50\157\54\x65\54\x6e\51\x7b\175\175\x29\175\51\x3b\x7d\x29\x3b\x3c\57\163\143\162\151\160\164\x3e";
        return $qW;
    }
    private function handle_ulti_form($GX)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto y9v;
        }
        SessionUtils::add_email_verified($this->form_session_var, $GX["\x75\163\145\162\137\145\x6d\141\151\x6c"]);
        $this->send_challenge('', $GX["\165\163\x65\162\137\145\x6d\141\151\x6c"], null, null, VerificationType::EMAIL);
        goto FTo;
        y9v:
        SessionUtils::add_phone_verified($this->form_session_var, $GX["\x75\x73\145\x72\137\x70\x68\x6f\156\x65"]);
        $this->send_challenge('', null, null, $GX["\x75\163\x65\x72\x5f\160\x68\157\x6e\x65"], VerificationType::PHONE);
        FTo:
    }
    public function processFormAndValidateOTP()
    {
        if (check_ajax_referer($this->nonce, "\x73\145\143\165\162\x69\x74\171", false)) {
            goto bWV;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        bWV:
        MoPHPSessions::check_session();
        $this->checkIfOTPSent();
        $this->checkIntegrityAndValidateOTP($_POST);
    }
    private function checkIntegrityAndValidateOTP($GX)
    {
        MoPHPSessions::check_session();
        $GX["\x6f\x74\x70\x54\x79\x70\145"] = strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? "\160\150\157\x6e\x65" : "\145\155\141\151\x6c";
        $this->checkIntegrity($GX);
        $this->validate_challenge(sanitize_text_field($GX["\157\164\x70\124\171\160\145"]), null, sanitize_text_field($GX["\157\x74\x70\x5f\x74\x6f\x6b\145\x6e"]));
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $GX["\x6f\164\160\124\x79\160\x65"])) {
            goto Y2p;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OTP), MoConstants::ERROR_JSON_TYPE));
        goto wsx;
        Y2p:
        if (!(VerificationType::PHONE === $GX["\x6f\x74\x70\x54\171\160\145"])) {
            goto m4b;
        }
        SessionUtils::add_phone_submitted($this->form_session_var, sanitize_text_field($GX["\x75\x73\x65\162\x5f\160\150\157\156\x65"]));
        m4b:
        if (!(VerificationType::EMAIL === $GX["\x6f\x74\x70\x54\x79\160\145"])) {
            goto ycB;
        }
        SessionUtils::add_email_submitted($this->form_session_var, sanitize_email($GX["\x75\x73\x65\x72\x5f\145\155\x61\151\154"]));
        ycB:
        $this->unset_otp_session_variables();
        wp_send_json(MoUtility::create_json(MoConstants::SUCCESS_JSON_TYPE, MoConstants::SUCCESS_JSON_TYPE));
        wsx:
    }
    private function checkIfOTPSent()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto hxb;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE), MoConstants::ERROR_JSON_TYPE));
        hxb:
    }
    private function checkIntegrity($GX)
    {
        if (!(VerificationType::PHONE === $GX["\x6f\x74\160\x54\x79\x70\145"])) {
            goto DO2;
        }
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($GX["\x75\x73\145\x72\137\x70\150\157\x6e\145"]))) {
            goto QHK;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        QHK:
        DO2:
        if (!(VerificationType::EMAIL === $GX["\157\x74\160\x54\171\x70\x65"])) {
            goto bde;
        }
        if (SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX["\165\x73\145\162\137\145\155\x61\151\154"]))) {
            goto qb3;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        qb3:
        bde:
    }
    public function register_ulti_verify_script()
    {
        wp_register_script("\165\x6c\164\151\x6f\x74\x70\x62\165\x74\x74\x6f\156\x73\143\x72\x69\160\x74", MOV_URL . "\x69\x6e\143\x6c\165\x64\x65\x73\x2f\152\163\x2f\155\157\165\154\164\151\160\x72\157\56\x6d\151\156\56\x6a\x73", array("\152\161\165\145\162\x79"), MOV_VERSION, false);
        wp_localize_script("\165\154\164\151\157\164\160\142\165\x74\164\157\x6e\x73\143\x72\151\160\x74", "\155\157\165\154\x74\151\x76\x61\162", array("\x73\151\x74\x65\125\122\x4c" => wp_ajax_url(), "\x6e\157\x6e\x63\145" => wp_create_nonce($this->nonce), "\157\164\160\x54\171\160\x65" => $this->otp_type, "\166\141\143\x74\x69\x6f\156" => $this->validate_otp_action, "\x66\x6f\162\x6d\x44\145\x74\141\x69\154\x73" => $this->form_details, "\142\165\164\164\x6f\156\x74\x65\x78\x74" => mo_($this->button_text), "\151\x6d\147\125\x52\114" => MOV_URL . "\x69\156\143\154\x75\144\145\163\x2f\x69\x6d\141\147\145\x73\x2f\154\x6f\141\144\x65\162\56\147\x69\x66"));
        wp_enqueue_script("\165\x6c\x74\x69\x6f\164\x70\142\165\164\164\x6f\x6e\x73\x63\x72\x69\160\x74");
    }
    private function validateAndProcessOTP(&$SL, $R7, $Ns)
    {
        $Bo = $this->get_verification_type();
        $this->validate_challenge($Bo, null, $Ns);
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto bIk;
        }
        $this->unset_otp_session_variables();
        $SL = array("\x74\x79\x70\145" => $R7, "\166\141\x6c\165\145" => 1);
        goto Mfu;
        bIk:
        $SL = array("\164\x79\x70\145" => $R7, "\166\141\x6c\x75\145" => MoUtility::get_invalid_otp_method());
        Mfu:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto pkN;
        }
        array_push($MI, $this->phone_form_id);
        pkN:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto QQ0;
        }
        return;
        QQ0:
        $this->is_form_enabled = $this->sanitize_form_post("\x75\x6c\x74\151\160\162\x6f\137\145\156\x61\x62\154\x65");
        $this->otp_type = $this->sanitize_form_post("\165\154\164\151\x70\162\x6f\x5f\x74\x79\160\x65");
        update_mo_option("\x75\x6c\x74\x69\x70\162\157\x5f\145\x6e\141\x62\154\145", $this->is_form_enabled);
        update_mo_option("\165\x6c\164\151\x70\162\157\x5f\x74\171\160\145", $this->otp_type);
    }
}
GHv:
