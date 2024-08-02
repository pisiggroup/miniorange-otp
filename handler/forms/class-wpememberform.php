<?php


namespace OTP\Handler\Forms;

if (defined("\101\x42\123\x50\101\x54\x48")) {
    goto w5G;
}
exit;
w5G:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
use WP_Error;
if (class_exists("\x57\160\x45\155\145\155\x62\x65\x72\106\157\162\155")) {
    goto hrS;
}
class WpEmemberForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::EMEMBER;
        $this->type_phone_tag = "\155\157\137\145\x6d\145\x6d\x62\x65\162\137\160\150\157\156\x65\x5f\x65\x6e\x61\142\154\x65";
        $this->type_email_tag = "\x6d\157\137\x65\155\145\155\142\x65\x72\137\x65\155\141\151\x6c\137\145\156\141\x62\154\x65";
        $this->type_both_tag = "\155\x6f\x5f\145\155\x65\x6d\142\145\x72\x5f\x62\157\164\150\137\145\156\x61\x62\154\145";
        $this->form_key = "\127\120\x5f\x45\115\x45\115\x42\x45\x52";
        $this->form_name = mo_("\x57\x50\x20\145\x4d\x65\155\x62\x65\162");
        $this->is_form_enabled = get_mo_option("\x65\x6d\145\x6d\x62\x65\162\137\x64\x65\x66\141\165\x6c\164\137\x65\156\x61\x62\154\x65");
        $this->phone_key = "\167\x70\137\x65\155\145\x6d\x62\x65\162\137\x70\x68\157\x6e\145";
        $this->phone_form_id = "\x69\156\160\165\164\133\x6e\141\x6d\145\75" . $this->phone_key . "\x5d";
        $this->form_documents = MoFormDocs::EMEMBER_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x65\155\x65\x6d\142\145\162\137\x65\x6e\x61\142\x6c\145\x5f\x74\171\160\145");
        if (isset($_POST["\x5f\x77\160\x6e\x6f\x6e\x63\145"])) {
            goto jdj;
        }
        return;
        jdj:
        if (wp_verify_nonce(sanitize_key($_POST["\x5f\167\160\156\157\x6e\143\x65"]), "\145\155\145\x6d\142\145\162\x2d\x70\x6c\x61\151\156\55\x72\145\147\151\x73\x74\x72\x61\x74\151\x6f\156\x2d\x6e\157\x6e\x63\x65")) {
            goto VrR;
        }
        return;
        VrR:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        if (!(array_key_exists("\x65\x6d\145\155\142\x65\162\137\144\x73\143\x5f\156\x6f\156\143\x65", $w3) && !array_key_exists("\x6f\160\x74\151\x6f\156", $w3))) {
            goto ZxX;
        }
        $this->miniorange_emember_user_registration($w3);
        ZxX:
    }
    private function isPhoneVerificationEnabled()
    {
        $I2 = $this->get_verification_type();
        return VerificationType::PHONE === $I2 || VerificationType::BOTH === $I2;
    }
    private function miniorange_emember_user_registration($w3)
    {
        if (!$this->validatePostFields($w3)) {
            goto Hhv;
        }
        $M9 = array_key_exists($this->phone_key, $w3) ? sanitize_text_field($w3[$this->phone_key]) : null;
        $this->startTheOTPVerificationProcess(sanitize_text_field($w3["\167\160\x5f\x65\155\145\155\142\145\x72\137\165\x73\x65\162\x5f\156\x61\x6d\145"]), sanitize_email($w3["\167\x70\137\145\155\145\x6d\x62\145\162\x5f\x65\155\x61\x69\154"]), $M9);
        Hhv:
    }
    private function startTheOTPVerificationProcess($JG, $Wb, $M9)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        $errors = new WP_Error();
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto DHO;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto YOq;
        }
        $this->send_challenge($JG, $Wb, $errors, $M9, VerificationType::EMAIL);
        goto BFN;
        DHO:
        $this->send_challenge($JG, $Wb, $errors, $M9, VerificationType::PHONE);
        goto BFN;
        YOq:
        $this->send_challenge($JG, $Wb, $errors, $M9, VerificationType::BOTH);
        BFN:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        $Bo = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Bo ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Bo, $Df);
    }
    private function validatePostFields($w3)
    {
        if (!is_blocked_ip(get_real_ip_addr())) {
            goto zzy;
        }
        return false;
        zzy:
        if (!(emember_wp_username_exists(sanitize_text_field($w3["\x77\160\x5f\145\x6d\145\155\142\x65\162\137\x75\163\x65\162\x5f\x6e\141\x6d\145"])) || emember_username_exists(sanitize_text_field($w3["\167\160\x5f\145\155\x65\x6d\142\x65\162\137\x75\x73\x65\162\137\156\x61\x6d\145"])))) {
            goto isN;
        }
        return false;
        isN:
        if (!(is_blocked_email(sanitize_text_field($w3["\x77\160\137\145\x6d\145\x6d\x62\x65\162\x5f\145\155\141\x69\x6c"])) || emember_registered_email_exists(sanitize_text_field($w3["\167\x70\137\x65\x6d\145\x6d\x62\145\x72\x5f\x65\155\x61\x69\154"])) || emember_wp_email_exists(sanitize_text_field($w3["\x77\160\137\145\x6d\145\155\x62\x65\162\x5f\x65\x6d\141\x69\x6c"])))) {
            goto UJr;
        }
        return false;
        UJr:
        if (!(isset($w3["\145\x4d\x65\155\142\x65\162\137\x52\145\147\x69\x73\164\145\x72"]) && array_key_exists("\167\160\x5f\145\x6d\x65\155\x62\145\x72\x5f\160\x77\x64\x5f\x72\x65", $w3) && sanitize_text_field($w3["\x77\160\137\145\x6d\145\155\142\145\162\x5f\x70\167\144"]) !== sanitize_text_field($w3["\x77\x70\137\145\155\145\x6d\142\145\x72\x5f\160\x77\144\137\162\145"]))) {
            goto FmF;
        }
        return false;
        FmF:
        return true;
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        $this->unset_otp_session_variables();
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->isPhoneVerificationEnabled())) {
            goto AtG;
        }
        array_push($MI, $this->phone_form_id);
        AtG:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto Tjo;
        }
        return;
        Tjo:
        $this->is_form_enabled = $this->sanitize_form_post("\145\x6d\145\x6d\x62\145\x72\137\x64\145\146\x61\165\154\164\137\x65\156\141\142\154\x65");
        $this->otp_type = $this->sanitize_form_post("\145\x6d\x65\155\142\145\162\x5f\145\156\x61\x62\x6c\x65\137\164\171\x70\x65");
        update_mo_option("\145\x6d\145\x6d\142\x65\162\x5f\144\x65\146\141\x75\x6c\164\137\x65\x6e\141\x62\x6c\x65", $this->is_form_enabled);
        update_mo_option("\x65\x6d\145\x6d\142\145\162\x5f\145\x6e\x61\x62\154\x65\137\x74\x79\160\145", $this->otp_type);
    }
}
hrS:
