<?php


namespace OTP\Handler\Forms;

if (defined("\101\x42\x53\120\x41\x54\110")) {
    goto Qx_;
}
exit;
Qx_:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
if (class_exists("\x50\x69\x65\x52\145\147\x69\163\x74\162\141\164\151\x6f\x6e\106\x6f\x72\x6d")) {
    goto ltc;
}
class PieRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::PIE_REG;
        $this->type_phone_tag = "\155\157\x5f\x70\151\x65\137\160\x68\157\x6e\145\137\x65\x6e\x61\142\x6c\x65";
        $this->type_email_tag = "\155\157\137\x70\x69\x65\x5f\x65\155\141\151\x6c\137\x65\156\141\142\x6c\x65";
        $this->type_both_tag = "\x6d\157\137\160\151\145\137\142\157\164\150\x5f\x65\156\141\x62\x6c\x65";
        $this->form_key = "\x50\111\105\x5f\x46\117\x52\115";
        $this->form_name = mo_("\120\111\105\40\122\x65\x67\x69\163\164\x72\x61\x74\x69\x6f\x6e\40\106\157\162\155");
        $this->is_form_enabled = get_mo_option("\x70\151\x65\137\144\145\x66\x61\165\x6c\164\x5f\145\x6e\x61\142\154\145");
        $this->form_documents = MoFormDocs::PIE_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\160\x69\x65\137\x65\156\x61\x62\154\145\x5f\164\x79\160\145");
        $this->phone_key = get_mo_option("\x70\x69\x65\x5f\x70\x68\x6f\156\x65\x5f\x6b\x65\171");
        $this->phone_form_id = $this->getPhoneFieldKey();
        add_action("\160\151\x65\x72\145\147\151\x73\164\145\162\x5f\x72\x65\147\151\163\164\x72\x61\x74\x69\x6f\x6e\x5f\166\141\x6c\151\x64\141\x74\151\x6f\x6e\137\142\x65\x66\x6f\162\x65", array($this, "\155\x69\156\x69\x6f\162\141\x6e\147\x65\137\x70\x69\x65\137\x75\163\x65\x72\137\162\145\x67\151\x73\x74\162\141\164\x69\x6f\x6e"), 99, 1);
    }
    private function isPhoneVerificationEnabled()
    {
        $Vw = $this->get_verification_type();
        return VerificationType::PHONE === $Vw || VerificationType::BOTH === $Vw;
    }
    public function miniorange_pie_user_registration()
    {
        global $errors;
        if (empty($errors->errors)) {
            goto HZF;
        }
        return;
        HZF:
        if (!$this->checkIfVerificationIsComplete()) {
            goto qHc;
        }
        return;
        qHc:
        if (!(empty($_POST[$this->phone_form_id]) && $this->isPhoneVerificationEnabled())) {
            goto Xns;
        }
        $errors->add("\155\157\137\x6f\x74\160\x5f\166\x65\x72\x69\146\171", MoMessages::showMessage(MoMessages::ENTER_PHONE_DEFAULT));
        return;
        Xns:
        $this->startTheOTPVerificationProcess(isset($_POST["\145\137\x6d\x61\151\154"]) ? sanitize_email(wp_unslash($_POST["\145\137\x6d\141\x69\154"])) : '', sanitize_text_field(wp_unslash($_POST[$this->phone_form_id])));
        if ($this->checkIfVerificationIsComplete()) {
            goto CEi;
        }
        $errors->add("\x6d\157\137\x6f\164\x70\x5f\166\x65\x72\151\x66\171", MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE));
        CEi:
    }
    private function checkIfVerificationIsComplete()
    {
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto Z_I;
        }
        $this->unset_otp_session_variables();
        return true;
        Z_I:
        return false;
    }
    private function startTheOTPVerificationProcess($Wb, $M9)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto eJf;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto Nqh;
        }
        $this->send_challenge('', $Wb, null, $M9, VerificationType::EMAIL);
        goto v7g;
        eJf:
        $this->send_challenge('', $Wb, null, $M9, VerificationType::PHONE);
        goto v7g;
        Nqh:
        $this->send_challenge('', $Wb, null, $M9, VerificationType::BOTH);
        v7g:
    }
    private function getPhoneFieldKey()
    {
        $BX = get_option("\x70\151\145\x5f\x66\x69\145\x6c\x64\x73");
        if (!(empty($BX) || !(strcasecmp($this->otp_type, $this->type_both_tag) === 0))) {
            goto cvs;
        }
        return '';
        cvs:
        $Z3 = maybe_unserialize($BX);
        foreach ($Z3 as $a6) {
            if (!(strcasecmp(trim($a6["\154\x61\x62\x65\154"]), $this->phone_key) === 0)) {
                goto Bch;
            }
            return str_replace("\x2d", "\x5f", sanitize_title($a6["\x74\x79\x70\145"] . "\x5f" . (isset($a6["\x69\144"]) ? $a6["\151\x64"] : '')));
            Bch:
            Svm:
        }
        vh0:
        return '';
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        $Vw = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Vw ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Vw, $Df);
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
        if (!($this->is_form_enabled() && $this->isPhoneVerificationEnabled())) {
            goto Xkz;
        }
        array_push($MI, "\x69\x6e\160\x75\164\43" . $this->phone_form_id);
        Xkz:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto TU8;
        }
        return;
        TU8:
        $this->is_form_enabled = $this->sanitize_form_post("\x70\x69\x65\137\144\x65\x66\141\165\154\164\x5f\145\x6e\141\142\x6c\x65");
        $this->otp_type = $this->sanitize_form_post("\x70\x69\x65\137\x65\x6e\x61\x62\x6c\145\x5f\164\171\x70\x65");
        $this->phone_key = $this->sanitize_form_post("\160\151\x65\137\160\x68\157\156\x65\137\146\151\x65\154\144\x5f\153\145\171");
        update_mo_option("\160\x69\145\x5f\144\145\x66\141\x75\x6c\x74\137\x65\156\x61\142\x6c\145", $this->is_form_enabled);
        update_mo_option("\x70\151\x65\x5f\145\156\x61\x62\154\x65\x5f\164\x79\x70\x65", $this->otp_type);
        update_mo_option("\160\151\145\137\160\x68\x6f\x6e\x65\x5f\x6b\x65\x79", $this->phone_key);
    }
}
ltc:
