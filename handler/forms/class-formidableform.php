<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\x53\120\x41\124\x48")) {
    goto Jk;
}
exit;
Jk:
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
if (class_exists("\x46\157\162\x6d\151\144\141\142\154\145\106\157\162\x6d")) {
    goto hV;
}
class FormidableForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::FORMIDABLE_FORM;
        $this->type_phone_tag = "\x6d\157\137\x66\162\155\x5f\146\x6f\x72\x6d\x5f\x70\x68\x6f\x6e\x65\137\145\156\x61\142\154\145";
        $this->type_email_tag = "\x6d\x6f\137\146\x72\155\137\146\157\x72\x6d\137\145\x6d\x61\151\x6c\x5f\145\156\x61\x62\154\x65";
        $this->form_key = "\x46\x4f\122\115\111\x44\101\102\114\105\x5f\106\117\x52\115";
        $this->form_name = mo_("\x46\x6f\162\155\151\x64\141\x62\x6c\145\40\106\157\x72\155\x73");
        $this->is_form_enabled = get_mo_option("\146\162\x6d\x5f\146\157\x72\x6d\x5f\145\x6e\141\142\x6c\x65");
        $this->button_text = get_mo_option("\146\162\155\137\x62\165\x74\164\157\156\137\164\x65\x78\164");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\x43\x6c\x69\143\153\40\110\145\162\x65\40\x74\x6f\x20\x73\x65\156\x64\40\x4f\124\120");
        $this->generate_otp_action = "\x6d\x69\x6e\151\x6f\162\141\x6e\147\145\x5f\x66\x72\155\x5f\147\145\x6e\x65\162\x61\164\x65\137\x6f\x74\x70";
        $this->form_documents = MoFormDocs::FORMIDABLE_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x66\x72\155\x5f\x66\157\162\x6d\137\145\156\141\x62\x6c\x65\x5f\x74\171\x70\145");
        $this->form_details = maybe_unserialize(get_mo_option("\146\x72\155\x5f\x66\157\x72\x6d\x5f\x6f\164\160\x5f\145\156\141\142\154\145\144"));
        $this->phone_form_id = array();
        if (!(empty($this->form_details) || !$this->is_form_enabled)) {
            goto tL;
        }
        return;
        tL:
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\x23" . $bh["\160\150\x6f\x6e\x65\153\x65\x79"] . "\40\x69\156\x70\x75\x74");
            SH:
        }
        hu:
        add_filter("\x66\162\155\137\x76\x61\154\x69\144\x61\164\145\137\146\x69\145\154\144\x5f\x65\x6e\x74\162\171", array($this, "\155\x69\x6e\151\x6f\x72\x61\x6e\x67\145\x5f\157\x74\160\x5f\166\x61\x6c\x69\x64\x61\x74\151\x6f\x6e"), 11, 4);
        add_action("\x77\160\137\x61\152\141\170\x5f{$this->generate_otp_action}", array($this, "\x73\145\x6e\x64\137\157\x74\x70\137\x66\x72\x6d\137\141\152\141\170"));
        add_action("\x77\x70\137\x61\x6a\141\170\137\x6e\x6f\x70\162\151\x76\x5f{$this->generate_otp_action}", array($this, "\x73\x65\156\144\x5f\x6f\164\x70\x5f\x66\x72\155\x5f\x61\152\141\x78"));
        add_action("\167\160\137\145\156\x71\165\145\165\145\x5f\x73\x63\162\x69\x70\x74\163", array($this, "\x6d\x69\x6e\151\x6f\x72\141\x6e\x67\x65\137\x72\x65\x67\x69\163\x74\145\162\137\146\x6f\162\x6d\x69\x64\x61\142\154\145\137\163\143\162\x69\160\164"));
    }
    public function miniorange_register_formidable_script()
    {
        wp_register_script("\x6d\x6f\146\157\x72\155\151\144\x61\142\x6c\145", MOV_URL . "\x69\x6e\x63\154\x75\144\145\163\x2f\x6a\163\x2f\146\x6f\162\155\x69\144\x61\142\x6c\x65\x2e\x6d\151\x6e\56\152\x73", array("\x6a\161\165\145\162\x79"), MOV_VERSION, true);
        wp_localize_script("\155\x6f\x66\157\162\x6d\x69\144\x61\142\154\145", "\x6d\x6f\146\x6f\x72\x6d\151\x64\x61\142\154\x65", array("\x73\x69\x74\x65\125\x52\114" => wp_ajax_url(), "\157\164\160\x54\x79\160\x65" => $this->otp_type, "\x66\x6f\x72\x6d\x6b\x65\x79" => strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? "\160\x68\157\x6e\x65\153\x65\171" : "\145\x6d\x61\x69\154\x6b\x65\x79", "\x6e\157\x6e\x63\145" => wp_create_nonce($this->nonce), "\x62\165\x74\x74\x6f\x6e\x74\x65\170\x74" => mo_($this->button_text), "\x69\155\147\x55\122\114" => MOV_LOADER_URL, "\146\x6f\x72\x6d\163" => $this->form_details, "\x67\145\x6e\x65\x72\x61\164\145\x55\x52\x4c" => $this->generate_otp_action));
        wp_enqueue_script("\155\x6f\146\157\x72\155\151\x64\x61\x62\154\x65");
    }
    public function send_otp_frm_ajax()
    {
        if (check_ajax_referer($this->nonce, "\x73\145\x63\165\162\x69\164\171", false)) {
            goto De;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        De:
        $GX = MoUtility::mo_sanitize_array($_POST);
        if ($this->otp_type === $this->type_phone_tag) {
            goto oS;
        }
        $this->send_frm_otp_to_email($GX);
        goto Jf;
        oS:
        $this->send_frm_otp_to_phone($GX);
        Jf:
    }
    public function send_frm_otp_to_phone($GX)
    {
        if (!MoUtility::sanitize_check("\165\163\x65\x72\137\160\150\x6f\x6e\x65", $GX)) {
            goto vX;
        }
        $this->sendOTP(trim($GX["\x75\163\145\162\x5f\160\x68\157\156\x65"]), null, trim($GX["\x75\x73\x65\x72\137\160\150\x6f\156\x65"]), VerificationType::PHONE);
        goto Da;
        vX:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        Da:
    }
    private function send_frm_otp_to_email($GX)
    {
        if (!MoUtility::sanitize_check("\x75\x73\145\162\x5f\145\x6d\141\x69\x6c", $GX)) {
            goto S8;
        }
        $this->sendOTP(sanitize_email($GX["\165\x73\x65\x72\x5f\145\x6d\x61\x69\154"]), sanitize_email($GX["\x75\163\145\x72\x5f\145\155\x61\x69\x6c"]), null, VerificationType::EMAIL);
        goto Uz;
        S8:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        Uz:
    }
    private function sendOTP($Pl, $Wb, $bV, $I2)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (VerificationType::PHONE === $I2) {
            goto z0;
        }
        SessionUtils::add_email_verified($this->form_session_var, $Pl);
        goto NS;
        z0:
        SessionUtils::add_phone_verified($this->form_session_var, $Pl);
        NS:
        $this->send_challenge('', $Wb, null, $bV, $I2);
    }
    public function miniorange_otp_validation($errors, $Jw, $bh, $rp)
    {
        if (!($this->getFieldId("\166\145\x72\151\x66\171\137\163\150\157\x77", $Jw) !== $Jw->id)) {
            goto JQ;
        }
        return $errors;
        JQ:
        if (MoUtility::is_blank($errors)) {
            goto Rr;
        }
        return $errors;
        Rr:
        if ($this->hasOTPBeenSent($errors, $Jw)) {
            goto bN;
        }
        return $errors;
        bN:
        if (!$this->isMisMatchEmailOrPhone($errors, $Jw)) {
            goto R9;
        }
        return $errors;
        R9:
        if ($this->isValidOTP($bh, $Jw, $errors)) {
            goto Mr;
        }
        return $errors;
        Mr:
        return $errors;
    }
    private function hasOTPBeenSent(&$errors, $Jw)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto HF;
        }
        $WZ = MoMessages::showMessage(BaseMessages::ENTER_VERIFY_CODE);
        if ($this->isPhoneVerificationEnabled()) {
            goto mk;
        }
        $errors["\146\151\x65\x6c\144" . $this->getFieldId("\x65\x6d\141\151\154\x5f\x73\150\x6f\x77", $Jw)] = $WZ;
        goto lF;
        mk:
        $errors["\x66\x69\x65\x6c\144" . $this->getFieldId("\x70\x68\x6f\x6e\145\137\x73\x68\157\x77", $Jw)] = $WZ;
        lF:
        return false;
        HF:
        return true;
    }
    private function isMisMatchEmailOrPhone(&$errors, $Jw)
    {
        $Y7 = $this->getFieldId($this->isPhoneVerificationEnabled() ? "\x70\x68\x6f\156\x65\x5f\x73\150\x6f\167" : "\x65\x6d\x61\x69\154\137\x73\150\157\167", $Jw);
        $R3 = isset($_POST["\x69\164\145\155\137\155\x65\164\141"][$Y7]) ? sanitize_text_field(wp_unslash($_POST["\x69\164\x65\155\x5f\155\x65\x74\x61"][$Y7])) : '';
        if ($this->checkPhoneOrEmailIntegrity($R3)) {
            goto ra;
        }
        if ($this->isPhoneVerificationEnabled()) {
            goto Ng;
        }
        $errors["\146\151\145\x6c\144" . $this->getFieldId("\145\155\141\151\x6c\x5f\163\150\x6f\167", $Jw)] = MoMessages::showMessage(BaseMessages::EMAIL_MISMATCH);
        goto IP;
        Ng:
        $errors["\x66\x69\x65\154\x64" . $this->getFieldId("\x70\x68\157\x6e\145\x5f\163\150\x6f\x77", $Jw)] = MoMessages::showMessage(BaseMessages::PHONE_MISMATCH);
        IP:
        return true;
        ra:
        return false;
    }
    private function isValidOTP($bh, $Jw, &$errors)
    {
        $I2 = $this->get_verification_type();
        $this->validate_challenge($I2, null, $bh);
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $I2)) {
            goto SR;
        }
        $errors["\x66\x69\145\x6c\x64" . $this->getFieldId("\166\145\162\x69\146\171\137\163\x68\157\167", $Jw)] = MoUtility::get_invalid_otp_method();
        return false;
        goto Kd;
        SR:
        $this->unset_otp_session_variables();
        return true;
        Kd:
    }
    private function checkPhoneOrEmailIntegrity($R3)
    {
        if ($this->isPhoneVerificationEnabled()) {
            goto Vc;
        }
        return SessionUtils::is_email_verified_match($this->form_session_var, $R3);
        goto MU;
        Vc:
        return SessionUtils::is_phone_verified_match($this->form_session_var, $R3);
        MU:
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
        if (!($this->is_form_enabled && $this->isPhoneVerificationEnabled())) {
            goto Yx;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        Yx:
        return $MI;
    }
    public function isPhoneVerificationEnabled()
    {
        return $this->get_verification_type() === VerificationType::PHONE;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\x6d\x61\x6e\x61\x67\145\137\x6f\160\164\x69\157\156\x73") || !check_admin_referer($this->admin_nonce))) {
            goto iv;
        }
        return;
        iv:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $form = $this->parseFormDetails($GX);
        $this->is_form_enabled = $this->sanitize_form_post("\x66\162\x6d\x5f\x66\157\x72\x6d\x5f\145\x6e\141\142\154\145");
        $this->otp_type = $this->sanitize_form_post("\x66\x72\155\x5f\x66\x6f\x72\x6d\137\145\156\141\x62\154\x65\x5f\164\171\160\x65");
        $this->form_details = !empty($form) ? $form : '';
        $this->button_text = $this->sanitize_form_post("\x66\x72\x6d\137\142\x75\164\x74\x6f\156\137\164\145\170\x74");
        if (!$this->basic_validation_check(BaseMessages::FORMIDABLE_CHOOSE)) {
            goto CS;
        }
        update_mo_option("\x66\162\x6d\137\142\x75\164\x74\157\x6e\137\x74\145\x78\164", $this->button_text);
        update_mo_option("\x66\162\x6d\x5f\x66\157\x72\x6d\137\145\156\x61\142\154\x65", $this->is_form_enabled);
        update_mo_option("\x66\162\155\x5f\x66\157\x72\155\137\145\x6e\141\x62\154\145\x5f\164\x79\160\145", $this->otp_type);
        update_mo_option("\146\162\x6d\137\146\157\x72\x6d\x5f\x6f\x74\160\137\145\156\141\x62\x6c\145\144", maybe_serialize($this->form_details));
        CS:
    }
    private function parseFormDetails($GX)
    {
        $form = array();
        if (array_key_exists("\x66\162\x6d\137\146\x6f\162\155", $GX)) {
            goto im;
        }
        return array();
        im:
        $Gn = isset($GX["\x66\162\x6d\137\146\x6f\x72\x6d"]["\146\157\162\x6d"]) ? MoUtility::mo_sanitize_array(wp_unslash($GX["\x66\162\155\137\x66\157\x72\155"]["\146\x6f\162\155"])) : '';
        foreach (array_filter($Gn) as $a6 => $bh) {
            $a6 = sanitize_text_field($a6);
            $form[sanitize_text_field($bh)] = array("\145\x6d\x61\x69\x6c\153\x65\x79" => isset($GX["\x66\x72\x6d\137\x66\157\x72\x6d"]["\x65\155\141\151\154\x6b\145\x79"][$a6]) ? "\x66\162\155\x5f\x66\x69\145\x6c\144\137" . sanitize_text_field(wp_unslash($GX["\146\x72\x6d\x5f\x66\x6f\162\x6d"]["\x65\155\x61\x69\154\153\145\171"][$a6])) . "\x5f\143\x6f\x6e\x74\141\x69\x6e\x65\x72" : '', "\x70\x68\157\156\145\153\x65\x79" => isset($GX["\146\162\x6d\137\x66\157\162\x6d"]["\160\x68\x6f\156\145\x6b\x65\x79"][$a6]) ? "\x66\162\155\137\x66\x69\x65\x6c\144\x5f" . sanitize_text_field(wp_unslash($GX["\146\162\155\x5f\x66\157\162\155"]["\160\x68\x6f\156\x65\x6b\x65\171"][$a6])) . "\x5f\143\x6f\x6e\164\x61\x69\156\x65\162" : '', "\x76\x65\x72\151\x66\171\x4b\145\x79" => isset($GX["\x66\x72\155\137\146\157\162\x6d"]["\166\x65\162\x69\x66\x79\113\x65\171"][$a6]) ? "\x66\x72\x6d\137\146\x69\x65\154\144\137" . sanitize_text_field(wp_unslash($GX["\x66\x72\155\137\x66\157\x72\x6d"]["\166\145\x72\x69\x66\x79\x4b\x65\171"][$a6])) . "\137\x63\157\156\x74\x61\151\x6e\x65\x72" : '', "\160\150\157\x6e\145\x5f\163\x68\x6f\x77" => isset($GX["\x66\162\155\x5f\x66\x6f\162\x6d"]["\x70\x68\157\x6e\x65\x6b\145\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x66\x72\155\137\x66\157\x72\x6d"]["\160\x68\157\x6e\145\153\145\x79"][$a6])) : '', "\x65\155\x61\x69\x6c\x5f\x73\x68\x6f\167" => isset($GX["\146\162\x6d\137\146\157\162\x6d"]["\145\x6d\141\151\x6c\153\x65\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x66\x72\x6d\x5f\146\x6f\162\x6d"]["\x65\155\x61\x69\154\153\145\x79"][$a6])) : '', "\166\145\162\151\x66\x79\137\163\150\157\x77" => isset($GX["\146\x72\155\x5f\x66\157\162\155"]["\x76\145\162\151\146\171\x4b\145\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x66\162\155\137\x66\157\162\155"]["\x76\x65\x72\x69\146\171\x4b\x65\171"][$a6])) : '');
            LT:
        }
        Tt:
        return $form;
    }
    private function getFieldId($a6, $Jw)
    {
        return $this->form_details[$Jw->form_id][$a6];
    }
}
hV:
