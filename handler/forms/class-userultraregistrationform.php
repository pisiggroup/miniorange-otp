<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\123\120\101\124\x48")) {
    goto AVw;
}
exit;
AVw:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
use XooUserRegister;
use XooUserRegisterLite;
if (class_exists("\125\163\x65\x72\125\x6c\x74\x72\x61\122\x65\147\x69\163\x74\162\x61\x74\151\x6f\x6e\106\157\162\x6d")) {
    goto hpa;
}
class UserUltraRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::UULTRA_REG;
        $this->type_phone_tag = "\x6d\157\137\x75\165\x6c\164\162\141\137\160\x68\157\x6e\x65\137\145\x6e\x61\x62\154\x65";
        $this->type_email_tag = "\155\x6f\137\x75\x75\154\164\x72\141\x5f\x65\x6d\x61\x69\x6c\137\145\156\141\142\x6c\145";
        $this->type_both_tag = "\x6d\157\x5f\165\165\x6c\164\162\141\137\142\157\164\x68\137\145\156\x61\142\x6c\x65";
        $this->form_key = "\x55\x55\x4c\124\122\x41\x5f\x46\x4f\122\115";
        $this->form_name = mo_("\125\x73\x65\162\x20\x55\154\164\162\x61\x20\122\x65\147\x69\163\164\162\x61\x74\x69\157\x6e\x20\106\x6f\x72\x6d");
        $this->is_form_enabled = get_mo_option("\x75\165\x6c\x74\x72\x61\x5f\144\145\146\141\165\154\164\137\145\156\x61\142\x6c\x65");
        $this->form_documents = MoFormDocs::UULTRA_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $GX = MoUtility::mo_sanitize_array($_POST);
        if (MoUtility::sanitize_check("\170\157\x6f\x75\x73\145\x72\165\154\x74\x72\x61\55\162\145\147\151\163\x74\x65\162\55\x66\x6f\x72\x6d", $GX)) {
            goto VU6;
        }
        return;
        VU6:
        $this->phone_key = get_mo_option("\x75\165\x6c\x74\x72\x61\x5f\x70\150\157\156\x65\x5f\153\145\x79");
        $this->otp_type = get_mo_option("\165\165\x6c\x74\162\141\x5f\x65\156\141\x62\x6c\145\x5f\x74\171\160\x65");
        $this->phone_form_id = "\151\156\x70\165\x74\x5b\x6e\x61\155\x65\x3d" . $this->phone_key . "\135";
        $Bo = $this->get_verification_type();
        $M9 = $this->isPhoneVerificationEnabled() ? sanitize_text_field($GX[$this->phone_key]) : null;
        $this->mo_handle_uultra_form_submit(sanitize_text_field($GX["\165\163\x65\162\137\154\157\147\x69\156"]), sanitize_email($GX["\x75\163\x65\x72\137\145\155\x61\x69\154"]), $M9, $GX);
    }
    public function isPhoneVerificationEnabled()
    {
        $Bo = $this->get_verification_type();
        return VerificationType::PHONE === $Bo || VerificationType::BOTH === $Bo;
    }
    public function mo_handle_uultra_form_submit($Ir, $Wb, $M9, $GX)
    {
        $Rx = class_exists("\x58\157\157\125\163\x65\x72\122\145\147\x69\x73\164\145\162\x4c\x69\x74\x65") ? new XooUserRegisterLite() : new XooUserRegister();
        if (!SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto WOS;
        }
        return;
        WOS:
        $Rx->uultra_prepare_request($GX);
        $Rx->uultra_handle_errors();
        if (!MoUtility::is_blank($Rx->errors)) {
            goto DUg;
        }
        $GX["\156\x6f\137\143\141\160\x74\143\150\141"] = "\x79\x65\163";
        $this->mo_handle_otp_verification_uultra($Ir, $Wb, null, $M9);
        DUg:
    }
    public function mo_handle_otp_verification_uultra($Ir, $Wb, $errors, $M9)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto w8q;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto ULS;
        }
        $this->send_challenge($Ir, $Wb, $errors, $M9, VerificationType::EMAIL);
        goto JHM;
        w8q:
        $this->send_challenge($Ir, $Wb, $errors, $M9, VerificationType::PHONE);
        goto JHM;
        ULS:
        $this->send_challenge($Ir, $Wb, $errors, $M9, VerificationType::BOTH);
        JHM:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        $Bo = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Bo ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Bo, $Df);
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
            goto N3u;
        }
        array_push($MI, $this->phone_form_id);
        N3u:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto R6P;
        }
        return;
        R6P:
        $this->is_form_enabled = $this->sanitize_form_post("\165\165\x6c\x74\x72\x61\x5f\144\x65\x66\x61\165\x6c\164\137\x65\156\141\x62\x6c\x65");
        $this->otp_type = $this->sanitize_form_post("\x75\165\154\164\x72\x61\137\145\x6e\x61\142\x6c\145\x5f\x74\171\160\145");
        $this->phone_key = $this->sanitize_form_post("\x75\165\154\x74\x72\141\137\160\150\x6f\156\x65\x5f\x66\151\145\154\144\137\x6b\145\x79");
        update_mo_option("\x75\x75\x6c\x74\162\x61\x5f\x64\x65\146\141\x75\154\164\137\x65\156\x61\142\154\145", $this->is_form_enabled);
        update_mo_option("\165\x75\154\x74\162\141\x5f\x65\x6e\141\142\154\145\x5f\x74\171\160\145", $this->otp_type);
        update_mo_option("\x75\165\154\x74\162\x61\x5f\160\150\157\x6e\145\x5f\x6b\x65\171", $this->phone_key);
    }
}
hpa:
