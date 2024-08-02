<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\x53\x50\x41\x54\x48")) {
    goto QY;
}
exit;
QY:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\BaseMessages;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationLogic;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
if (class_exists("\115\x65\x6d\142\145\x72\x50\162\x65\x73\163\x53\151\x6e\x67\154\x65\x43\150\145\x63\153\x6f\x75\x74\x46\x6f\x72\155")) {
    goto CT;
}
class MemberPressSingleCheckoutForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::MEMBERPRESS_SINGLE_REG;
        $this->type_phone_tag = "\x6d\x6f\137\155\x72\x70\137\x73\151\x6e\147\x6c\x65\137\160\150\157\156\145\137\x65\x6e\x61\x62\x6c\145";
        $this->type_email_tag = "\x6d\x6f\137\155\x72\x70\x5f\x73\x69\156\x67\154\x65\x5f\x65\155\141\151\154\137\145\156\x61\x62\154\145";
        $this->type_both_tag = "\x6d\157\137\155\162\160\x5f\163\x69\156\x67\154\x65\137\x62\x6f\x74\x68\137\145\156\x61\x62\x6c\145";
        $this->form_name = mo_("\x4d\x65\155\x62\x65\162\x50\162\145\x73\163\x20\123\151\156\147\x6c\x65\x20\x43\x68\x65\x63\153\x6f\x75\164\40\122\145\147\x69\x73\164\162\x61\164\x69\x6f\156\40\106\157\x72\155");
        $this->form_key = "\115\105\x4d\x42\x45\122\x50\x52\105\x53\x53\x53\111\116\x47\x4c\x45\x43\110\105\x43\113\x4f\125\124";
        $this->is_form_enabled = get_mo_option("\155\x72\160\137\x73\x69\x6e\147\x6c\x65\137\x64\x65\x66\141\x75\154\164\137\x65\x6e\x61\142\x6c\145");
        $this->form_documents = MoFormDocs::MRP_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->by_pass_login = get_mo_option("\x6d\162\x70\137\x73\x69\156\147\154\x65\137\x61\x6e\157\156\x5f\157\x6e\x6c\x79");
        $this->phone_key = get_mo_option("\155\162\x70\x5f\163\151\x6e\x67\x6c\x65\x5f\x70\x68\x6f\156\x65\x5f\153\145\x79");
        $this->otp_type = get_mo_option("\155\162\160\137\x73\151\x6e\x67\x6c\145\x5f\145\x6e\x61\x62\x6c\145\137\164\x79\160\x65");
        $this->phone_form_id = "\151\156\x70\165\x74\x5b\156\x61\155\x65\75" . $this->phone_key . "\135";
        $user = wp_get_current_user();
        if (!$user->exists()) {
            goto e4;
        }
        return;
        e4:
        add_action("\x77\160\x5f\141\x6a\x61\x78\137\155\x6f\x6d\x72\160\x5f\163\151\156\x67\154\145\x5f\x73\145\x6e\144\x5f\157\164\160", array($this, "\x6d\x6f\137\x73\x65\x6e\x64\137\157\164\160"));
        add_action("\167\x70\137\x61\152\141\x78\137\156\x6f\160\x72\x69\x76\x5f\x6d\157\x6d\x72\160\137\163\151\156\x67\x6c\x65\137\x73\145\x6e\144\x5f\157\x74\x70", array($this, "\x6d\157\x5f\163\x65\156\x64\137\157\x74\160"));
        add_filter("\x6d\145\x70\x72\55\x76\x61\x6c\x69\x64\141\164\145\x2d\x73\x69\x67\156\165\x70", array($this, "\x6d\151\156\x69\157\162\x61\x6e\147\145\137\x73\x69\x74\x65\137\162\x65\x67\x69\163\x74\x65\162\137\146\157\x72\x6d"), 99, 1);
        add_action("\167\x70\137\x65\x6e\161\165\145\x75\x65\137\163\x63\162\151\x70\164\163", array($this, "\155\151\156\x69\x6f\162\141\x6e\147\145\137\x73\151\156\147\x6c\145\x5f\x63\150\145\x63\x6b\x6f\165\x74\137\162\145\x67\151\x73\164\145\162\x5f\163\x63\x72\151\x70\x74"));
        add_action("\x75\x73\145\162\137\162\145\147\x69\x73\x74\145\162", array($this, "\165\x6e\x73\145\164\155\x65\160\162\163\x69\156\x67\154\x65\x63\x68\145\143\x6b\x6f\165\164\123\x65\x73\163\151\x6f\156\126\141\162\x69\141\x62\154\145\163"), 99, 2);
    }
    public function mo_send_otp()
    {
        $Tb = wp_create_nonce("\x6d\x65\x6d\x62\x65\x72\160\162\x65\163\x73\137\x6e\157\x6e\143\x65");
        if (wp_verify_nonce($Tb, "\x6d\145\155\142\145\x72\x70\162\x65\x73\x73\137\156\x6f\x6e\143\x65")) {
            goto rc;
        }
        return;
        rc:
        $GX = MoUtility::mo_sanitize_array($_POST);
        MoUtility::initialize_transaction($this->form_session_var);
        if ($this->otp_type === $this->type_phone_tag) {
            goto Kq;
        }
        $this->mo_processEmailAndStartOTPVerificationProcess($GX);
        goto bo;
        Kq:
        $this->mo_processPhoneAndStartOTPVerificationProcess($GX);
        bo:
    }
    private function mo_processPhoneAndStartOTPVerificationProcess($GX)
    {
        if (!MoUtility::sanitize_check("\x75\x73\145\162\137\x70\150\157\x6e\145", $GX)) {
            goto Fk;
        }
        $this->setSessionAndStartOTPVerification(trim($GX["\x75\x73\x65\x72\x5f\x70\150\x6f\x6e\145"]), null, trim($GX["\165\163\145\162\x5f\x70\x68\157\x6e\145"]), VerificationType::PHONE);
        goto WE;
        Fk:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        WE:
    }
    private function mo_processEmailAndStartOTPVerificationProcess($GX)
    {
        if (!MoUtility::sanitize_check("\165\163\x65\x72\137\145\155\x61\151\154", $GX)) {
            goto WG;
        }
        $this->setSessionAndStartOTPVerification($GX["\165\163\x65\x72\x5f\x65\155\x61\x69\154"], $GX["\x75\163\145\x72\137\x65\x6d\x61\151\154"], null, VerificationType::EMAIL);
        goto xe;
        WG:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        xe:
    }
    private function setSessionAndStartOTPVerification($Pl, $Wb, $bV, $I2)
    {
        SessionUtils::add_email_or_phone_verified($this->form_session_var, $Pl, $I2);
        $this->send_challenge('', $Wb, null, $bV, $I2);
    }
    public function miniorange_single_checkout_register_script()
    {
        wp_register_script("\x6d\x6f\155\x72\160\x73\x69\156\x67\154\x65", MOV_URL . "\x69\156\x63\x6c\x75\144\145\163\57\x6a\163\57\155\x6f\155\x72\x70\x73\x69\x6e\x67\x6c\145\x2e\x6d\151\x6e\x2e\152\x73", array("\x6a\161\x75\145\x72\x79"), MOV_VERSION, true);
        wp_localize_script("\x6d\157\x6d\162\x70\163\151\x6e\x67\154\145", "\x6d\x6f\x6d\x72\x70\x73\151\156\x67\154\x65", array("\x73\151\x74\x65\x55\122\114" => wp_ajax_url(), "\157\164\160\x54\171\x70\145" => $this->otp_type, "\x66\157\x72\x6d\153\145\171" => strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? $this->phone_key : "\165\163\145\162\x5f\x65\155\x61\x69\x6c", "\156\157\156\143\145" => wp_create_nonce($this->nonce), "\x62\165\164\x74\x6f\156\164\x65\170\164" => mo_("\x43\154\151\143\153\x20\110\145\162\145\x20\164\x6f\40\163\x65\x6e\x64\x20\x4f\124\x50"), "\x69\155\x67\x55\122\114" => MOV_LOADER_URL));
        wp_enqueue_script("\155\x6f\x6d\x72\160\x73\151\156\147\x6c\145");
    }
    public function miniorange_site_register_form($errors)
    {
        if (!$errors) {
            goto HL;
        }
        return $errors;
        HL:
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto om;
        }
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto rB;
        }
        $errors["\165\163\x65\x72\137\145\155\x61\151\x6c"] = MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE);
        goto me;
        rB:
        $errors[$this->phone_key] = MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE);
        me:
        om:
        if (!$errors) {
            goto b8;
        }
        return $errors;
        b8:
        $ZG = isset($_POST["\165\163\x65\162\x5f\x65\x6d\x61\151\154"]) ? sanitize_email(wp_unslash($_POST["\165\x73\145\x72\x5f\x65\155\x61\x69\x6c"])) : '';
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto Ny;
        }
        if (!SessionUtils::is_email_verified_match($this->form_session_var, $ZG)) {
            goto Jw;
        }
        goto IS;
        Ny:
        $jF = isset($_POST[$this->phone_key]) ? sanitize_text_field(wp_unslash($_POST[$this->phone_key])) : '';
        if (SessionUtils::is_phone_verified_match($this->form_session_var, $jF)) {
            goto u7;
        }
        $errors[$this->phone_key] = MoMessages::showMessage(MoMessages::PHONE_MISMATCH);
        u7:
        goto IS;
        Jw:
        $errors["\165\163\x65\x72\137\145\x6d\141\x69\154"] = MoMessages::showMessage(MoMessages::EMAIL_MISMATCH);
        IS:
        if (!$errors) {
            goto O_;
        }
        return $errors;
        O_:
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto pt;
        }
        $I2 = "\145\x6d\141\x69\x6c";
        goto Yp;
        pt:
        $I2 = "\x70\x68\157\156\145";
        Yp:
        $Vi = isset($_POST["\x6d\157\137\166\x65\x72\151\x66\171\x5f\x6f\164\x70\x5f\x66\151\145\154\144"]) ? sanitize_text_field(wp_unslash($_POST["\155\x6f\x5f\166\145\162\x69\146\171\x5f\157\x74\160\x5f\x66\151\145\154\x64"])) : '';
        if (!$Vi) {
            goto ut;
        }
        $this->validate_challenge($I2, null, $Vi);
        ut:
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $I2)) {
            goto eh;
        }
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto SN;
        }
        $errors["\x75\163\145\162\137\145\x6d\x61\x69\x6c"] = MoMessages::showMessage(MoMessages::INVALID_OTP);
        goto KI;
        SN:
        $errors[$this->phone_key] = MoMessages::showMessage(MoMessages::INVALID_OTP);
        KI:
        eh:
        return $errors;
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
    }
    public function get_phone_number_selector($MI)
    {
        if (!(self::is_form_enabled() && $this->isPhoneVerificationEnabled())) {
            goto Qs;
        }
        array_push($MI, $this->phone_form_id);
        Qs:
        return $MI;
    }
    private function isPhoneVerificationEnabled()
    {
        $I2 = $this->get_verification_type();
        return VerificationType::PHONE === $I2 || VerificationType::BOTH === $I2;
    }
    public function unsetmeprsinglecheckoutSessionVariables($Uv, $TF)
    {
        $this->unset_otp_session_variables();
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto j8;
        }
        return;
        j8:
        $this->is_form_enabled = $this->sanitize_form_post("\x6d\x72\x70\137\163\x69\x6e\147\154\x65\x5f\144\x65\x66\141\165\154\164\x5f\145\156\x61\142\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\155\x72\x70\x5f\163\x69\x6e\x67\x6c\x65\x5f\145\x6e\x61\x62\154\x65\x5f\x74\171\x70\x65");
        $this->phone_key = $this->sanitize_form_post("\155\162\160\137\163\151\x6e\x67\x6c\x65\137\160\x68\x6f\x6e\x65\x5f\x66\x69\x65\154\144\137\x6b\145\x79");
        $this->by_pass_login = $this->sanitize_form_post("\x6d\x70\162\x5f\163\x69\x6e\x67\154\x65\x5f\141\x6e\x6f\x6e\x5f\157\x6e\x6c\171");
        if (!$this->basic_validation_check(BaseMessages::MEMBERPRESS_CHOOSE)) {
            goto Y4;
        }
        update_mo_option("\155\x72\160\x5f\163\151\156\x67\154\x65\x5f\x64\145\146\141\x75\154\x74\137\145\x6e\141\142\154\x65", $this->is_form_enabled);
        update_mo_option("\x6d\162\x70\x5f\x73\x69\x6e\147\154\145\137\145\156\141\142\x6c\145\137\x74\x79\x70\145", $this->otp_type);
        update_mo_option("\x6d\x72\160\137\x73\x69\156\147\x6c\x65\x5f\160\150\157\156\145\137\x6b\145\171", $this->phone_key);
        update_mo_option("\x6d\x72\160\x5f\x73\x69\x6e\147\x6c\x65\x5f\x61\x6e\157\x6e\x5f\157\x6e\x6c\171", $this->by_pass_login);
        Y4:
    }
}
CT:
