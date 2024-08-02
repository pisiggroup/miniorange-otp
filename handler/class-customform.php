<?php


namespace OTP\Handler;

if (defined("\x41\x42\123\x50\101\x54\110")) {
    goto op;
}
exit;
op:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
if (class_exists("\x43\165\163\164\157\155\106\157\162\155")) {
    goto v6;
}
class CustomForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected $check_validated_on_submit;
    protected $validated;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->is_add_on_form = true;
        $this->form_session_var = FormSessionVars::CUSTOMFORM;
        $this->type_phone_tag = "\x6d\x6f\137\143\x75\163\164\157\155\106\x6f\x72\x6d\x5f\x70\150\157\x6e\x65\137\x65\x6e\141\x62\x6c\x65";
        $this->type_email_tag = "\155\x6f\137\x63\x75\163\x74\x6f\x6d\x46\157\162\155\137\145\x6d\x61\151\x6c\x5f\145\156\141\142\154\145";
        $this->is_form_enabled = get_mo_option("\x63\x66\137\163\x75\142\155\x69\164\x5f\x69\x64", "\155\x6f\137\157\164\x70\x5f") ? true : false;
        $this->phone_form_id = stripslashes(get_mo_option("\x63\146\137\x66\x69\145\x6c\x64\137\151\144", "\x6d\157\137\x6f\164\160\137"));
        $this->generate_otp_action = "\155\x69\x6e\x69\x6f\x72\141\x6e\x67\145\55\x63\x75\x73\x74\157\155\106\x6f\x72\x6d\x2d\163\145\156\144\55\157\x74\160";
        $this->validate_otp_action = "\155\151\156\151\x6f\162\141\x6e\147\x65\55\x63\165\163\x74\x6f\155\106\x6f\162\x6d\55\166\x65\162\151\146\x79\x2d\x63\157\144\145";
        $this->check_validated_on_submit = "\x6d\151\x6e\151\x6f\x72\x61\x6e\147\145\55\x63\165\163\164\x6f\155\x46\157\x72\155\55\x76\x65\x72\151\146\x79\55\x73\165\x62\155\151\164";
        $this->otp_type = get_mo_option("\143\x66\137\x65\156\x61\142\154\145\137\164\171\x70\x65", "\155\x6f\137\x6f\164\160\x5f");
        $this->button_text = get_mo_option("\x63\x66\137\x62\x75\x74\x74\157\x6e\137\x74\145\170\164", "\x6d\x6f\x5f\157\x74\x70\x5f");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\103\154\151\143\153\x20\110\x65\x72\x65\x20\164\157\40\163\x65\x6e\144\40\x4f\x54\x50");
        $this->validated = false;
        parent::__construct();
        $this->handle_form();
    }
    public function handle_form()
    {
        MoPHPSessions::check_session();
        if ($this->is_form_enabled) {
            goto BL;
        }
        return;
        BL:
        add_action("\167\x70\137\145\156\x71\x75\145\x75\145\137\x73\143\x72\x69\x70\x74\163", array($this, "\x6d\157\x5f\x65\156\161\165\145\165\145\137\146\157\x72\155\137\x73\143\x72\151\160\164"));
        add_action("\154\157\x67\151\x6e\x5f\145\x6e\x71\165\x65\165\x65\x5f\163\x63\162\x69\x70\164\163", array($this, "\155\157\x5f\x65\156\161\x75\x65\x75\x65\x5f\146\x6f\x72\x6d\x5f\163\x63\162\x69\160\x74"));
        add_action("\167\160\x5f\141\x6a\x61\170\x5f{$this->generate_otp_action}", array($this, "\155\157\137\x73\145\x6e\x64\137\157\164\x70"));
        add_action("\x77\160\137\x61\x6a\141\x78\137\156\157\160\162\151\x76\x5f{$this->generate_otp_action}", array($this, "\155\x6f\x5f\163\x65\x6e\144\137\157\x74\160"));
        add_action("\167\x70\x5f\x61\152\x61\x78\x5f{$this->validate_otp_action}", array($this, "\x70\x72\157\143\x65\x73\163\106\157\162\x6d\101\x6e\144\x56\x61\154\151\144\141\164\x65\117\124\x50"));
        add_action("\167\x70\137\x61\152\x61\170\137\156\x6f\x70\162\x69\166\x5f{$this->validate_otp_action}", array($this, "\160\x72\157\143\x65\163\163\106\x6f\x72\x6d\101\x6e\144\126\x61\x6c\151\144\141\x74\145\x4f\x54\120"));
        add_action("\x77\160\137\141\152\141\x78\137{$this->check_validated_on_submit}", array($this, "\155\157\137\x63\x68\145\x63\x6b\x5f\x76\x61\x6c\x69\144\x61\x74\145\144\137\157\x6e\137\x73\165\x62\x6d\x69\x74"));
        add_action("\x77\x70\137\x61\152\x61\170\137\x6e\157\x70\162\x69\166\137{$this->check_validated_on_submit}", array($this, "\x6d\x6f\137\x63\x68\x65\x63\x6b\x5f\166\x61\x6c\151\144\x61\x74\145\x64\x5f\x6f\x6e\x5f\163\x75\142\155\x69\x74"));
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto bD;
        }
        $this->validated = true;
        $this->unset_otp_session_variables();
        return;
        bD:
    }
    public function mo_enqueue_form_script()
    {
        wp_register_script($this->form_session_var, MOV_URL . "\x69\156\x63\154\x75\144\x65\x73\x2f\152\163\57" . $this->form_session_var . "\56\x6d\x69\156\56\152\x73", array("\152\x71\x75\x65\162\x79"), MOV_VERSION, true);
        wp_localize_script($this->form_session_var, $this->form_session_var, array("\x73\x69\x74\x65\x55\x52\x4c" => wp_ajax_url(), "\x6f\x74\160\124\171\x70\145" => $this->get_verification_type(), "\x66\157\x72\155\104\x65\x74\141\151\154\x73" => $this->form_details, "\142\x75\164\x74\x6f\156\x74\x65\170\x74" => $this->button_text, "\151\155\147\125\x52\114" => MOV_LOADER_URL, "\x66\x69\145\x6c\x64\x54\x65\x78\164" => mo_("\x45\x6e\164\x65\x72\40\117\x54\120\x20\150\145\162\x65"), "\x67\156\157\x6e\x63\145" => wp_create_nonce($this->nonce), "\156\157\x6e\143\x65\x4b\145\171" => wp_create_nonce($this->nonce_key), "\x76\x6e\157\156\x63\x65" => wp_create_nonce($this->nonce), "\x67\141\143\164\151\x6f\x6e" => $this->generate_otp_action, "\x76\141\143\x74\x69\x6f\156" => $this->validate_otp_action, "\146\151\145\154\144\123\x65\154\145\143\x74\157\x72" => stripcslashes(get_mo_option("\143\x66\137\146\x69\x65\x6c\144\137\x69\144", "\x6d\157\137\157\164\x70\x5f")), "\163\x75\142\155\x69\x74\x53\x65\154\145\x63\x74\157\162" => stripcslashes(get_mo_option("\143\x66\137\163\x75\142\x6d\151\x74\137\x69\144", "\x6d\157\137\157\164\x70\x5f")), "\x73\151\164\x65\x55\x52\114" => wp_ajax_url(), "\x73\141\x63\164\151\x6f\x6e" => $this->check_validated_on_submit));
        wp_enqueue_script($this->form_session_var);
        wp_enqueue_style("\155\157\x5f\146\157\162\x6d\163\137\143\163\x73", MOV_FORM_CSS, MOV_VERSION, true);
    }
    public function mo_send_otp()
    {
        if (check_ajax_referer($this->nonce, "\141\x63\x74\x69\157\156", false)) {
            goto bf;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        exit;
        bf:
        $GX = MoUtility::mo_sanitize_array($_POST);
        MoPHPSessions::check_session();
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto d4;
        }
        MoUtility::initialize_transaction($this->form_session_var);
        d4:
        if (!(MoUtility::sanitize_check("\157\x74\x70\x54\x79\160\x65", $GX) === VerificationType::PHONE)) {
            goto VC;
        }
        $this->mo_processPhoneAndSendOTP($GX);
        VC:
        if (!(MoUtility::sanitize_check("\157\x74\x70\x54\171\160\145", $GX) === VerificationType::EMAIL)) {
            goto WC;
        }
        $this->mo_processEmailAndSendOTP($GX);
        WC:
    }
    public function mo_check_validated_on_submit()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var) || $this->validated) {
            goto qp;
        }
        if (!SessionUtils::is_otp_initialized($this->form_session_var) && !$this->validated) {
            goto LF;
        }
        goto H2;
        qp:
        wp_send_json(MoUtility::create_json(self::VALIDATED, MoConstants::SUCCESS_JSON_TYPE));
        goto H2;
        LF:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PLEASE_VALIDATE), MoConstants::ERROR_JSON_TYPE));
        H2:
    }
    private function mo_processEmailAndSendOTP($GX)
    {
        MoPHPSessions::check_session();
        if (!MoUtility::sanitize_check("\x75\163\145\x72\x5f\145\155\141\151\154", $GX)) {
            goto Zg;
        }
        SessionUtils::add_email_verified($this->form_session_var, sanitize_email($GX["\165\163\x65\162\137\x65\155\x61\151\154"]));
        $this->send_challenge('', sanitize_email($GX["\x75\x73\x65\x72\137\x65\155\141\151\x6c"]), null, null, VerificationType::EMAIL);
        goto E0;
        Zg:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        E0:
    }
    private function mo_processPhoneAndSendOTP($GX)
    {
        if (!MoUtility::sanitize_check("\165\163\145\x72\137\160\x68\x6f\156\x65", $GX)) {
            goto tD;
        }
        SessionUtils::add_phone_verified($this->form_session_var, sanitize_text_field($GX["\x75\x73\x65\162\137\x70\150\157\x6e\145"]));
        $this->send_challenge('', null, null, sanitize_text_field($GX["\165\163\145\162\137\x70\150\157\x6e\x65"]), VerificationType::PHONE);
        goto Z_;
        tD:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        Z_:
    }
    public function processFormAndValidateOTP()
    {
        if (check_ajax_referer($this->nonce, "\141\x63\164\151\x6f\x6e", false)) {
            goto We;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        exit;
        We:
        $GX = MoUtility::mo_sanitize_array($_POST);
        MoPHPSessions::check_session();
        $this->checkIfOTPSent();
        $this->checkIntegrityAndValidateOTP($GX);
    }
    private function checkIfOTPSent()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto Y0;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE), MoConstants::ERROR_JSON_TYPE));
        Y0:
    }
    private function checkIntegrityAndValidateOTP($GX)
    {
        MoPHPSessions::check_session();
        $this->checkIntegrity($GX);
        $this->validate_challenge(sanitize_text_field($GX["\x6f\164\x70\x54\x79\x70\x65"]), null, sanitize_text_field($GX["\x6f\164\160\137\x74\157\153\x65\156"]));
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, sanitize_text_field($GX["\x6f\164\160\124\171\160\145"]))) {
            goto Jh;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::CUSTOM_FORM_MESSAGE), MoConstants::ERROR_JSON_TYPE));
        goto xP;
        Jh:
        if (!(VerificationType::PHONE === $GX["\x6f\x74\160\124\x79\160\x65"])) {
            goto Wn;
        }
        SessionUtils::add_phone_submitted($this->form_session_var, sanitize_text_field($GX["\165\x73\145\x72\137\160\150\x6f\x6e\145"]));
        Wn:
        if (!(VerificationType::EMAIL === $GX["\x6f\164\160\124\171\x70\145"])) {
            goto pu;
        }
        SessionUtils::add_email_submitted($this->form_session_var, sanitize_email($GX["\x75\163\x65\162\x5f\145\x6d\x61\x69\154"]));
        pu:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::CUSTOM_FORM_MESSAGE), MoConstants::ERROR_JSON_TYPE));
        xP:
    }
    private function checkIntegrity($GX)
    {
        if (!(VerificationType::PHONE === $GX["\x6f\x74\x70\124\171\x70\145"])) {
            goto Vj;
        }
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($GX["\165\163\145\162\x5f\x70\150\x6f\x6e\145"]))) {
            goto L_;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        L_:
        Vj:
        if (!(VerificationType::EMAIL === $GX["\x6f\164\x70\124\x79\160\x65"])) {
            goto S5;
        }
        if (SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX["\x75\x73\x65\162\x5f\x65\155\x61\151\x6c"]))) {
            goto uQ;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        uQ:
        S5:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        MoPHPSessions::check_session();
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto RR;
        }
        return;
        RR:
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        MoPHPSessions::check_session();
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto Ze;
        }
        return;
        Ze:
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function unset_otp_session_variables()
    {
        MoPHPSessions::check_session();
        SessionUtils::unset_session(array($this->form_session_var, $this->tx_session_id));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->isPhoneEnabled())) {
            goto D0;
        }
        array_push($MI, $this->phone_form_id);
        D0:
        return $MI;
    }
    private function isPhoneEnabled()
    {
        return $this->get_verification_type() === VerificationType::PHONE ? true : false;
    }
    public function handle_form_options()
    {
    }
    public function getSubmitKeyDetails()
    {
        return stripcslashes(get_mo_option("\x63\x66\137\x73\165\x62\155\x69\x74\x5f\x69\x64", "\155\x6f\x5f\x6f\x74\x70\x5f"));
    }
    public function get_field_key_details()
    {
        return stripcslashes(get_mo_option("\143\x66\137\146\151\145\154\144\137\151\144", "\155\x6f\x5f\157\x74\x70\137"));
    }
}
v6:
