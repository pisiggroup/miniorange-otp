<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\x53\120\101\x54\110")) {
    goto kG;
}
exit;
kG:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\BaseMessages;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
use WPCF7_FormTag;
use WPCF7_Validation;
if (class_exists("\103\157\x6e\x74\x61\143\x74\x46\x6f\162\155\x37")) {
    goto gv;
}
class ContactForm7 extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::CF7_FORMS;
        $this->type_phone_tag = "\155\157\137\143\x66\67\137\143\157\x6e\164\141\x63\164\x5f\160\150\157\x6e\145\x5f\x65\156\141\x62\x6c\145";
        $this->type_email_tag = "\155\157\x5f\143\x66\67\137\143\x6f\156\x74\x61\x63\x74\137\145\155\x61\x69\x6c\x5f\x65\156\x61\x62\x6c\145";
        $this->form_key = "\x43\x46\67\137\106\117\x52\x4d";
        $this->form_name = mo_("\103\x6f\156\164\x61\x63\x74\40\x46\x6f\162\155\x20\x37\x20\55\40\x43\x6f\x6e\x74\141\143\164\40\106\x6f\x72\x6d");
        $this->is_form_enabled = get_mo_option("\143\146\67\137\x63\x6f\x6e\x74\x61\143\x74\x5f\145\156\x61\142\154\x65");
        $this->generate_otp_action = "\155\151\x6e\151\157\162\141\x6e\x67\x65\55\143\x66\67\55\143\x6f\x6e\164\141\x63\164";
        $this->form_documents = MoFormDocs::CF7_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\143\146\67\x5f\143\157\x6e\x74\x61\143\164\137\164\171\x70\x65");
        $this->email_key = get_mo_option("\143\146\x37\137\145\x6d\141\151\154\137\153\x65\171");
        $this->phone_key = "\x6d\x6f\x5f\x70\150\157\156\145";
        $this->phone_form_id = array("\x2e\143\x6c\141\x73\x73\x5f" . $this->phone_key, "\x69\x6e\x70\x75\164\133\156\141\x6d\x65\x3d" . $this->phone_key . "\135");
        add_filter("\167\x70\143\146\x37\137\x76\x61\154\151\144\141\x74\x65\137\164\145\x78\164\52", array($this, "\166\x61\154\x69\x64\141\164\145\106\157\x72\155\x50\157\163\x74"), 1, 2);
        add_filter("\167\160\143\x66\x37\137\166\x61\x6c\151\144\141\x74\145\137\145\x6d\x61\x69\x6c\52", array($this, "\166\x61\x6c\x69\144\x61\x74\x65\x46\157\x72\155\x50\x6f\x73\x74"), 1, 2);
        add_filter("\x77\160\143\x66\67\137\x76\141\154\151\144\x61\x74\x65\x5f\145\155\x61\151\x6c", array($this, "\166\141\154\151\144\x61\164\145\106\157\x72\x6d\x50\157\163\x74"), 1, 2);
        add_filter("\x77\x70\x63\x66\x37\x5f\166\x61\x6c\x69\144\141\x74\x65\137\x74\145\154\x2a", array($this, "\166\141\154\x69\144\x61\164\145\106\157\162\155\x50\x6f\163\164"), 1, 2);
        add_action("\x77\x70\x63\x66\67\x5f\x62\x65\146\x6f\162\x65\x5f\x73\145\156\x64\137\155\x61\151\x6c", array($this, "\x75\x6e\x73\x65\x74\x5f\x73\145\163\163\x69\x6f\156"), 1, 1);
        add_shortcode("\x6d\157\137\x76\x65\x72\151\146\171\x5f\x65\x6d\141\x69\154", array($this, "\143\146\67\x5f\163\x68\157\x72\x74\143\x6f\144\145"));
        add_shortcode("\x6d\157\x5f\166\145\x72\x69\x66\x79\137\160\x68\x6f\156\x65", array($this, "\x63\x66\x37\137\x73\x68\x6f\162\x74\x63\x6f\144\145"));
        add_action("\167\160\x5f\145\156\x71\x75\145\165\x65\x5f\x73\143\162\x69\160\164\x73", array($this, "\155\x69\156\x69\x6f\x72\x61\x6e\147\145\137\143\146\67\x5f\163\143\162\x69\160\x74"));
        add_action("\x77\x70\137\x61\152\x61\170\137\156\157\160\162\151\166\x5f{$this->generate_otp_action}", array($this, "\x68\141\x6e\x64\x6c\x65\137\x63\146\67\137\143\x6f\156\164\x61\x63\164\137\x66\x6f\x72\x6d"));
        add_action("\x77\x70\137\141\x6a\x61\x78\x5f{$this->generate_otp_action}", array($this, "\x68\141\x6e\x64\x6c\x65\x5f\143\x66\x37\137\x63\157\x6e\x74\x61\x63\164\x5f\146\x6f\162\x6d"));
    }
    public function handle_cf7_contact_form()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto S2;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        exit;
        S2:
        $GX = $_POST;
        MoUtility::initialize_transaction($this->form_session_var);
        $Wb = isset($_POST["\165\x73\145\162\137\x65\x6d\141\x69\x6c"]) ? sanitize_email(wp_unslash($_POST["\165\x73\x65\162\x5f\145\x6d\141\x69\x6c"])) : '';
        $GJ = isset($_POST["\x75\x73\x65\162\137\160\150\x6f\156\145"]) ? sanitize_text_field(wp_unslash($_POST["\165\163\x65\162\x5f\x70\x68\157\x6e\x65"])) : '';
        if ($Wb) {
            goto Wb;
        }
        if ($GJ) {
            goto Bf;
        }
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto Db;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        goto KU;
        Db:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        KU:
        goto lS;
        Wb:
        SessionUtils::add_email_verified($this->form_session_var, $Wb);
        $this->send_challenge("\164\145\x73\164", $Wb, null, $Wb, VerificationType::EMAIL);
        goto lS;
        Bf:
        SessionUtils::add_phone_verified($this->form_session_var, trim($GJ));
        $this->send_challenge("\164\x65\x73\164", '', null, trim($GJ), VerificationType::PHONE);
        lS:
    }
    public function validateFormPost($xD, $S4)
    {
        $S4 = new WPCF7_FormTag($S4);
        $Vk = $S4->name;
        $bh = isset($_POST[$Vk]) ? trim(wp_unslash(strtr((string) sanitize_text_field(wp_unslash($_POST[$Vk])), "\xa", "\40"))) : '';
        if (!("\x65\x6d\141\151\x6c" === $S4->basetype && $Vk === $this->email_key && strcasecmp($this->otp_type, $this->type_email_tag) === 0)) {
            goto vq;
        }
        SessionUtils::add_email_submitted($this->form_session_var, $bh);
        vq:
        if (!("\x74\145\x6c" === $S4->basetype && $Vk === $this->phone_key && strcasecmp($this->otp_type, $this->type_phone_tag) === 0)) {
            goto V8;
        }
        SessionUtils::add_phone_submitted($this->form_session_var, $bh);
        V8:
        if (!("\x74\x65\x78\x74" === $S4->basetype && "\145\x6d\x61\151\154\x5f\166\145\x72\x69\146\x79" === $Vk || "\164\x65\170\164" === $S4->basetype && "\x70\150\x6f\x6e\145\137\166\145\162\151\x66\171" === $Vk)) {
            goto CA;
        }
        $this->checkIfVerificationCodeNotEntered($Vk, $xD, $S4);
        $this->checkIfVerificationNotStarted($xD, $S4);
        if (!(strcasecmp($this->otp_type, $this->type_email_tag) === 0)) {
            goto pl;
        }
        $this->processEmail($xD, $S4);
        pl:
        if (!(strcasecmp($this->otp_type, $this->type_phone_tag) === 0)) {
            goto IM;
        }
        $this->process_phone_number($xD, $S4);
        IM:
        if (!empty($xD->get_invalid_fields())) {
            goto Ai;
        }
        if ($this->processOTPEntered($Vk)) {
            goto pO;
        }
        $xD->invalidate($S4, MoUtility::get_invalid_otp_method());
        pO:
        Ai:
        CA:
        return $xD;
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    private function processOTPEntered($Vk)
    {
        $Bo = $this->get_verification_type();
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto Yk;
        }
        $this->validate_challenge($Bo, $Vk, null);
        Yk:
        return SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo);
    }
    private function processEmail(&$xD, $S4)
    {
        if (SessionUtils::is_email_submitted_and_verified_match($this->form_session_var)) {
            goto xg;
        }
        $xD->invalidate($S4, mo_(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH)));
        xg:
    }
    private function process_phone_number(&$xD, $S4)
    {
        if (Sessionutils::is_phone_submitted_and_verified_match($this->form_session_var)) {
            goto E_;
        }
        $xD->invalidate($S4, mo_(MoMessages::showMessage(MoMessages::PHONE_MISMATCH)));
        E_:
    }
    private function checkIfVerificationNotStarted(&$xD, $S4)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto KX;
        }
        $xD->invalidate($S4, mo_(MoMessages::showMessage(MoMessages::PLEASE_VALIDATE)));
        KX:
    }
    private function checkIfVerificationCodeNotEntered($Vk, &$xD, $S4)
    {
        if (MoUtility::sanitize_check($Vk, $_REQUEST)) {
            goto W4;
        }
        $xD->invalidate($S4, wpcf7_get_message("\151\156\x76\x61\x6c\x69\x64\x5f\x72\145\161\x75\151\162\x65\x64"));
        W4:
    }
    public function cf7_shortcode($oF)
    {
        return;
    }
    public function miniorange_cf7_script()
    {
        wp_register_script("\155\157\x63\x66\x37", MOV_URL . "\x69\156\143\154\165\x64\145\163\57\x6a\x73\57\x6d\x6f\143\x66\x37\x2e\x6d\x69\156\56\152\163", array("\152\161\x75\x65\x72\171"), MOV_VERSION, true);
        wp_localize_script("\x6d\x6f\x63\x66\x37", "\x6d\157\x63\x66\67", array("\x73\x69\x74\x65\x55\122\x4c" => wp_ajax_url(), "\x6f\x74\160\124\x79\160\145" => $this->otp_type, "\x6e\x6f\156\x63\x65" => wp_create_nonce($this->nonce), "\x66\151\x65\154\x64" => $this->otp_type === $this->type_phone_tag ? "\155\157\137\160\x68\x6f\x6e\x65" : $this->email_key, "\x69\155\147\125\122\114" => MOV_LOADER_URL, "\147\x61\143\x74\151\157\x6e" => $this->generate_otp_action));
        wp_enqueue_script("\155\x6f\143\146\x37");
    }
    public function unset_session($xD)
    {
        $this->unset_otp_session_variables();
        return $xD;
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled && $this->otp_type === $this->type_phone_tag)) {
            goto mm;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        mm:
        return $MI;
    }
    private function emailKeyValidationCheck()
    {
        if (!($this->otp_type === $this->type_email_tag && MoUtility::is_blank($this->email_key))) {
            goto ZD;
        }
        do_action("\155\157\137\x72\x65\x67\x69\x73\164\x72\141\x74\x69\157\x6e\x5f\x73\x68\157\167\x5f\155\145\163\163\x61\147\x65", MoMessages::showMessage(BaseMessages::CF7_PROVIDE_EMAIL_KEY), MoConstants::ERROR);
        return false;
        ZD:
        return true;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto fF;
        }
        return;
        fF:
        $this->is_form_enabled = $this->sanitize_form_post("\143\146\67\x5f\143\x6f\x6e\164\x61\143\164\x5f\x65\x6e\141\142\x6c\x65");
        $this->otp_type = $this->sanitize_form_post("\143\x66\67\x5f\143\157\x6e\164\141\x63\164\137\164\x79\160\145");
        $this->email_key = $this->sanitize_form_post("\x63\146\x37\x5f\x65\155\x61\151\x6c\x5f\x66\151\x65\x6c\x64\137\153\145\x79");
        if (!($this->basic_validation_check(BaseMessages::CF7_CHOOSE) && $this->emailKeyValidationCheck())) {
            goto r_;
        }
        update_mo_option("\x63\146\67\137\x63\157\156\x74\141\x63\x74\137\145\x6e\141\x62\x6c\x65", $this->is_form_enabled);
        update_mo_option("\143\146\x37\x5f\x63\x6f\x6e\x74\x61\143\164\137\164\x79\x70\145", $this->otp_type);
        update_mo_option("\x63\x66\67\137\x65\155\x61\x69\x6c\137\153\145\x79", $this->email_key);
        r_:
    }
}
gv:
