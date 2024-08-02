<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\x53\x50\x41\x54\x48")) {
    goto wM;
}
exit;
wM:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
use WP_Error;
if (class_exists("\105\141\163\x79\122\x65\x67\x46\x6f\162\x6d")) {
    goto zF;
}
class EasyRegForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::EASY_REG_FORM;
        $this->type_phone_tag = "\155\x6f\137\145\x61\163\171\x72\x65\x67\x5f\160\x68\x6f\x6e\x65\x5f\x65\x6e\141\142\154\x65";
        $this->type_email_tag = "\155\x6f\137\145\141\163\171\x72\x65\x67\137\145\x6d\x61\x69\x6c\137\145\x6e\x61\x62\x6c\x65";
        $this->form_key = "\105\101\123\131\137\122\x45\x47\x5f\106\117\x52\x4d";
        $this->form_name = mo_("\x45\141\163\171\x20\x52\145\147\x69\163\164\162\141\164\151\x6f\156\40\106\x6f\x72\x6d\163");
        $this->is_form_enabled = get_mo_option("\145\141\163\x79\162\145\x67\137\x65\156\141\142\x6c\x65");
        $this->button_text = get_mo_option("\145\x61\x73\171\x72\145\147\137\142\x75\164\164\157\x6e\137\x74\x65\x78\164");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\x43\x6c\x69\x63\153\40\x48\x65\162\145\40\x74\x6f\40\x73\145\x6e\x64\40\x4f\x54\x50");
        $this->phone_form_id = array();
        $this->generate_otp_action = "\155\x69\156\151\x6f\162\x61\x6e\147\145\x5f\x65\141\163\171\x72\145\147\x5f\x67\x65\156\x65\x72\x61\164\145\137\x6f\x74\x70";
        $this->validate_otp_action = "\155\x69\156\151\x6f\x72\141\x6e\147\145\x5f\x65\x61\163\171\x72\x65\147\137\x76\145\x72\x69\146\x79\137\x6f\x74\160";
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x65\x61\163\x79\x72\x65\x67\137\145\156\x61\x62\x6c\145\137\x74\171\160\x65");
        $this->form_details = maybe_unserialize(get_mo_option("\145\x61\163\171\162\x65\147\x5f\x66\157\162\x6d\163"));
        if (!empty($this->form_details)) {
            goto VV;
        }
        return;
        VV:
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\56\166\145\162\151\146\171\x5f\160\150\157\156\x65");
            Bp:
        }
        WL:
        add_action("\167\x70\x5f\141\x6a\141\x78\x5f{$this->generate_otp_action}", array($this, "\163\164\141\x72\x74\x4f\x74\x70\126\x65\162\x69\x66\x69\x63\141\164\x69\157\156\120\x72\157\x63\145\163\x73"));
        add_action("\167\160\x5f\141\x6a\x61\x78\137\156\157\x70\162\x69\x76\x5f{$this->generate_otp_action}", array($this, "\163\164\141\162\x74\x4f\164\x70\126\x65\x72\x69\146\x69\x63\x61\x74\151\x6f\x6e\x50\x72\157\143\145\163\163"));
        add_action("\145\x72\x66\137\162\x65\x67\x69\x73\164\145\x72\x5f\146\x72\157\156\x74\137\163\x63\x72\x69\160\164\163", array($this, "\x6d\x69\x6e\x69\157\x72\x61\156\x67\x65\137\162\145\x67\151\163\164\145\x72\x5f\x65\141\x73\171\x72\x65\x67\x5f\x73\x63\x72\151\x70\164"));
        if (!(isset($_POST["\x61\x63\x74\x69\157\x6e"]) && $_POST["\x61\x63\164\x69\x6f\156"] === "\x65\x72\146\137\163\165\142\x6d\151\164\137\x66\x6f\162\x6d")) {
            goto rS;
        }
        if (!empty($this->errors)) {
            goto Fw;
        }
        $this->unset_otp_session_variables();
        return false;
        goto ft;
        Fw:
        return true;
        ft:
        rS:
        add_action("\167\x70\137\x61\x6a\141\x78\x5f{$this->validate_otp_action}", array($this, "\x70\x72\x6f\143\145\x73\x73\106\157\x72\155\101\x6e\144\126\141\154\x69\x64\141\x74\145\117\124\x50"));
        add_action("\x77\x70\137\141\152\141\170\137\x6e\157\160\x72\151\166\x5f{$this->validate_otp_action}", array($this, "\160\162\x6f\x63\145\x73\163\x46\x6f\x72\x6d\x41\156\x64\x56\x61\x6c\x69\144\141\164\x65\117\x54\x50"));
    }
    public function processFormAndValidateOTP()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto ZK;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        exit;
        ZK:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->checkIfOTPSent();
        $this->checkIntegrityAndValidateOTP($GX);
    }
    private function checkIfOTPSent()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto D1;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PLEASE_VALIDATE), MoConstants::ERROR_JSON_TYPE));
        D1:
    }
    private function checkIntegrityAndValidateOTP($GX)
    {
        $this->checkIntegrity($GX);
        $this->validate_challenge($this->get_verification_type(), null, $GX["\157\164\160\x5f\164\x6f\x6b\145\x6e"]);
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto bW;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OTP), MoConstants::ERROR_JSON_TYPE));
        goto RS;
        bW:
        if (!($this->get_verification_type() === VerificationType::PHONE)) {
            goto b1;
        }
        SessionUtils::add_phone_submitted($this->form_session_var, $GX["\x75\x73\145\162\137\160\x68\157\x6e\145"]);
        b1:
        if (!($this->get_verification_type() === VerificationType::EMAIL)) {
            goto Ov;
        }
        SessionUtils::add_email_submitted($this->form_session_var, $GX["\165\163\145\162\137\x65\155\x61\151\x6c"]);
        Ov:
        wp_send_json(MoUtility::create_json(MoConstants::SUCCESS_JSON_TYPE, "\163\x75\143\x63\145\163\x73\x31"));
        RS:
    }
    private function checkIntegrity($GX)
    {
        if (!($this->get_verification_type() === VerificationType::PHONE)) {
            goto eC;
        }
        if (SessionUtils::is_phone_verified_match($this->form_session_var, $GX["\165\x73\x65\162\137\160\150\157\x6e\x65"])) {
            goto TY;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        TY:
        eC:
        if (!($this->get_verification_type() === VerificationType::EMAIL)) {
            goto B5;
        }
        if (SessionUtils::is_email_verified_match($this->form_session_var, $GX["\x75\163\145\x72\x5f\x65\x6d\x61\x69\x6c"])) {
            goto tJ;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        tJ:
        B5:
    }
    public function unset_sessionVariable($gL)
    {
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto ld;
        }
        $this->unset_otp_session_variables();
        ld:
        return $gL;
    }
    public function miniorange_register_easyreg_script()
    {
        wp_register_script("\x6d\157\x65\141\x73\171\162\145\147", MOV_URL . "\x69\x6e\x63\x6c\165\x64\x65\163\57\x6a\x73\x2f\x6d\157\145\141\x73\x79\162\145\147\x2e\155\x69\x6e\x2e\152\163", array("\152\161\x75\x65\162\171"), MOV_VERSION, false);
        wp_localize_script("\x6d\x6f\145\x61\x73\x79\x72\145\147", "\x6d\x6f\145\141\163\171\162\x65\x67", array("\163\x69\x74\x65\125\122\x4c" => wp_ajax_url(), "\x6f\164\x70\124\171\160\145" => $this->otp_type, "\x66\x6f\162\x6d\153\145\x79" => strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? "\160\150\x6f\156\145\153\x65\x79" : "\145\x6d\x61\151\154\x6b\145\x79", "\156\x6f\x6e\143\145" => wp_create_nonce($this->_nonce), "\x62\x75\x74\164\157\x6e\x74\x65\x78\x74" => mo_($this->button_text), "\x66\x69\145\x6c\x64\111\104" => $this->otp_type === $this->type_phone_tag ? "\166\x65\x72\151\x66\171\x5f\160\x68\x6f\156\x65" : "\x76\x65\x72\x69\x66\x79\x5f\145\155\141\x69\x6c", "\151\155\147\x55\122\x4c" => MOV_LOADER_URL, "\x66\157\162\155\163" => $this->form_details, "\x67\x65\156\145\162\141\x74\x65\x55\x52\114" => $this->generate_otp_action, "\166\141\143\x74\x69\157\156" => $this->validate_otp_action));
        wp_enqueue_script("\x6d\x6f\x65\141\163\x79\162\x65\x67");
    }
    public function startOtpVerificationProcess()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto LQ;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        exit;
        LQ:
        $GX = MoUtility::mo_sanitize_array($_POST);
        MoUtility::initialize_transaction($this->form_session_var);
        if ($this->otp_type === $this->type_phone_tag) {
            goto gW;
        }
        $this->mo_processEmailAndStartOTPVerificationProcess($GX);
        goto H1;
        gW:
        $this->mo_processPhoneAndStartOTPVerificationProcess($GX);
        H1:
    }
    public function mo_processEmailAndStartOTPVerificationProcess($GX)
    {
        if (!MoUtility::sanitize_check("\x75\163\x65\x72\x5f\x65\x6d\141\151\x6c", $GX)) {
            goto Gs;
        }
        SessionUtils::add_email_verified($this->form_session_var, $GX["\x75\x73\x65\162\x5f\145\155\x61\151\x6c"]);
        $this->send_challenge('', $GX["\x75\x73\x65\162\x5f\145\155\141\151\x6c"], null, null, VerificationType::EMAIL);
        goto dS;
        Gs:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        dS:
    }
    public function mo_processPhoneAndStartOTPVerificationProcess($GX)
    {
        if (!MoUtility::sanitize_check("\165\163\x65\162\x5f\160\150\x6f\156\x65", $GX)) {
            goto gI;
        }
        SessionUtils::add_phone_verified($this->form_session_var, $GX["\x75\x73\x65\x72\137\160\150\x6f\x6e\145"]);
        $this->send_challenge('', null, null, $GX["\165\163\x65\x72\x5f\x70\x68\x6f\156\145"], VerificationType::PHONE);
        goto Rv;
        gI:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        Rv:
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
        SessionUtils::unset_session(array($this->form_session_var, $this->tx_session_id));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto rI;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        rI:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto na;
        }
        return;
        na:
        if (!(!array_key_exists("\x65\141\x73\x79\x72\x65\x67\137\x66\x6f\x72\x6d", $_POST) || !check_admin_referer($this->admin_nonce))) {
            goto eu;
        }
        return;
        eu:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->is_form_enabled = $this->sanitize_form_post("\145\x61\x73\171\x72\145\147\137\145\156\x61\142\154\145");
        $this->otp_type = $this->sanitize_form_post("\x65\141\x73\x79\x72\145\x67\137\x65\x6e\141\x62\154\145\x5f\164\171\x70\145");
        $this->button_text = $this->sanitize_form_post("\x65\141\163\x79\x72\145\x67\x5f\x62\165\164\x74\x6f\x6e\x5f\164\145\x78\164");
        $form = $this->parseFormDetails($GX);
        $this->form_details = !empty($form) ? $form : '';
        update_mo_option("\145\x61\x73\x79\162\145\x67\137\145\156\x61\142\154\x65", $this->is_form_enabled);
        update_mo_option("\145\x61\163\171\x72\145\147\137\145\x6e\141\x62\x6c\x65\137\164\171\160\x65", $this->otp_type);
        update_mo_option("\145\141\163\x79\x72\x65\147\137\142\165\164\164\x6f\x6e\x5f\164\145\170\164", $this->button_text);
        update_mo_option("\145\141\x73\171\x72\145\147\137\x66\157\x72\155\x73", maybe_serialize($this->form_details));
    }
    private function parseFormDetails($GX)
    {
        $form = array();
        foreach (array_filter($GX["\x65\141\x73\x79\x72\x65\x67\137\146\157\162\155"]["\x66\x6f\x72\x6d"]) as $a6 => $bh) {
            $form[$bh] = array("\145\155\141\151\154\x6b\145\x79" => $GX["\145\141\163\171\x72\x65\147\137\x66\x6f\x72\155"]["\x65\x6d\x61\x69\154\153\x65\171"][$a6], "\x70\x68\x6f\x6e\145\153\x65\x79" => $GX["\x65\x61\x73\171\x72\145\147\137\x66\157\162\155"]["\x70\x68\157\x6e\x65\x6b\145\171"][$a6], "\166\x65\x72\151\x66\171\113\145\x79" => $GX["\x65\x61\163\x79\x72\x65\x67\137\146\x6f\x72\155"]["\166\x65\x72\x69\146\x79\x4b\x65\171"][$a6], "\160\150\157\x6e\x65\x5f\163\x68\157\x77" => $GX["\x65\x61\x73\x79\x72\x65\x67\137\146\x6f\162\x6d"]["\x70\x68\157\x6e\145\x6b\x65\171"][$a6], "\x65\155\x61\x69\154\137\163\150\x6f\167" => $GX["\x65\141\163\171\162\x65\147\x5f\146\x6f\x72\155"]["\x65\155\x61\151\154\153\x65\x79"][$a6], "\x76\145\x72\x69\x66\x79\x5f\x73\150\x6f\x77" => $GX["\145\141\x73\171\x72\145\147\137\x66\x6f\162\x6d"]["\166\145\162\x69\146\171\x4b\x65\171"][$a6]);
            Ve:
        }
        Pl:
        return $form;
    }
}
zF:
