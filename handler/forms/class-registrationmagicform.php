<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\123\120\101\124\110")) {
    goto RmM;
}
exit;
RmM:
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
if (class_exists("\122\145\147\151\163\x74\x72\141\x74\x69\x6f\156\x4d\141\147\151\x63\106\x6f\162\x6d")) {
    goto y4d;
}
class RegistrationMagicForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::CRF_DEFAULT_REG;
        $this->type_phone_tag = "\x6d\x6f\x5f\x63\x72\146\x5f\160\x68\x6f\x6e\x65\137\145\156\141\142\154\145";
        $this->type_email_tag = "\x6d\x6f\x5f\143\x72\146\137\x65\155\141\x69\154\137\145\x6e\141\142\154\x65";
        $this->type_both_tag = "\x6d\x6f\x5f\x63\162\x66\x5f\x62\x6f\164\150\x5f\145\x6e\141\142\154\145";
        $this->form_key = "\103\122\106\137\x46\x4f\122\x4d";
        $this->form_name = mo_("\103\165\163\164\x6f\155\x20\125\163\x65\162\x20\122\145\x67\151\x73\164\x72\141\x74\151\157\x6e\40\x46\x6f\x72\155\40\x42\x75\x69\x6c\144\x65\x72\x20\x28\122\x65\147\151\x73\164\162\141\x74\151\x6f\156\x20\115\141\147\151\x63\x29");
        $this->is_form_enabled = get_mo_option("\143\162\x66\x5f\x64\145\146\141\x75\x6c\164\137\145\156\x61\x62\x6c\x65");
        $this->phone_form_id = array();
        $this->form_documents = MoFormDocs::CRF_FORM_ENABLE;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\143\162\146\x5f\145\156\141\x62\154\145\x5f\164\x79\160\145");
        $this->restrict_duplicates = get_mo_option("\x63\x72\x66\137\162\x65\163\x74\162\x69\143\x74\137\144\165\x70\x6c\x69\143\141\164\x65\163");
        $this->form_details = maybe_unserialize(get_mo_option("\143\x72\146\x5f\157\x74\160\137\x65\x6e\x61\142\x6c\x65\x64"));
        if (!empty($this->form_details)) {
            goto Avn;
        }
        return;
        Avn:
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\x69\156\160\165\164\133\x6e\x61\155\145\75" . $this->getFieldID($bh["\160\150\157\x6e\x65\x6b\145\171"], $a6) . "\135");
            Cf1:
        }
        Pn6:
        if ($this->checkIfPromptForOTP()) {
            goto mTU;
        }
        return;
        mTU:
        $this->handle_crf_form_submit($_REQUEST);
    }
    private function checkIfPromptForOTP()
    {
        if (!(array_key_exists("\157\160\164\151\157\156", $_POST) || !array_key_exists("\x72\x6d\x5f\146\157\x72\x6d\137\163\x75\142\137\x69\144", $_POST))) {
            goto HXq;
        }
        return false;
        HXq:
        foreach ($this->form_details as $a6 => $bh) {
            if (!(strpos(sanitize_text_field(wp_unslash($_POST["\x72\x6d\x5f\x66\x6f\x72\155\x5f\163\165\x62\137\x69\x64"])), "\x66\157\162\155\x5f" . $a6 . "\137") !== false)) {
                goto oNd;
            }
            MoUtility::initialize_transaction($this->form_session_var);
            SessionUtils::set_form_or_field_id($this->form_session_var, $a6);
            return true;
            oNd:
            OHY:
        }
        JCS:
        return false;
    }
    private function isPhoneVerificationEnabled()
    {
        $Bo = $this->get_verification_type();
        return VerificationType::PHONE === $Bo || VerificationType::BOTH === $Bo;
    }
    private function isEmailVerificationEnabled()
    {
        $Bo = $this->get_verification_type();
        return VerificationType::EMAIL === $Bo || VerificationType::BOTH === $Bo;
    }
    private function handle_crf_form_submit($t5)
    {
        $ZG = $this->isEmailVerificationEnabled() ? $this->getCRFEmailFromRequest($t5) : '';
        $M9 = $this->isPhoneVerificationEnabled() ? $this->getCRFPhoneFromRequest($t5) : '';
        $this->miniorange_crf_user($ZG, isset($t5["\x75\163\145\162\137\x6e\141\155\x65"]) ? sanitize_text_field($t5["\165\163\145\162\x5f\156\x61\155\145"]) : null, $M9);
        $this->checkIfValidated();
    }
    private function checkIfValidated()
    {
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto zX0;
        }
        $this->unset_otp_session_variables();
        zX0:
    }
    private function getCRFEmailFromRequest($t5)
    {
        $Nb = SessionUtils::get_form_or_field_id($this->form_session_var);
        $y6 = $this->form_details[$Nb]["\145\155\141\x69\154\153\x65\x79"];
        return $this->getFormPostSubmittedValue($this->getFieldID($y6, $Nb), $t5);
    }
    private function getCRFPhoneFromRequest($t5)
    {
        $Nb = SessionUtils::get_form_or_field_id($this->form_session_var);
        $AA = $this->form_details[$Nb]["\160\x68\x6f\156\145\153\x65\171"];
        return $this->getFormPostSubmittedValue($this->getFieldID($AA, $Nb), $t5);
    }
    private function getFormPostSubmittedValue($f9, $t5)
    {
        return isset($t5[$f9]) ? $t5[$f9] : '';
    }
    private function getFieldID($a6, $Nb)
    {
        global $wpdb;
        $J6 = $wpdb->get_row($wpdb->prepare("\123\x45\114\x45\x43\124\40\x2a\40\x46\x52\117\x4d\x20\140{$wpdb->prefix}\162\x6d\x5f\146\x69\145\x6c\144\x73\x60\x20\167\150\145\162\145\x20\x60\x66\157\x72\x6d\x5f\x69\x64\140\x20\75\x20\x25\163\40\141\x6e\x64\x20\140\x66\151\145\x6c\x64\x5f\x6c\141\x62\145\x6c\x60\x20\x3d\45\163", array($Nb, $a6)));
        return isset($J6) ? ("\x4d\x6f\142\x69\x6c\x65" === $J6->field_type ? $J6->field_type : "\x54\x65\170\164\x62\157\170") . "\x5f" . $J6->field_id : "\156\x75\x6c\x6c";
    }
    private function miniorange_crf_user($Wb, $Ir, $bV)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        $errors = new WP_Error();
        if (!$this->isPhoneNumberAlreadyInUse($bV)) {
            goto bdW;
        }
        miniorange_site_otp_validation_form('', '', '', "\x50\x68\x6f\x6e\145\x20\x6e\x75\x6d\142\x65\162\40\x61\154\x72\x65\x61\x64\171\x20\151\156\x20\165\x73\145\56\x20\120\x6c\x65\141\163\145\40\105\156\x74\x65\x72\40\141\x20\x64\x69\x66\146\x65\x72\x65\156\x74\40\x50\150\157\x6e\145\x20\156\x75\155\142\145\x72\56", '', '');
        bdW:
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto Amc;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto pfj;
        }
        $this->send_challenge($Ir, $Wb, $errors, $bV, VerificationType::EMAIL);
        goto J5I;
        Amc:
        $this->send_challenge($Ir, $Wb, $errors, $bV, VerificationType::PHONE);
        goto J5I;
        pfj:
        $this->send_challenge($Ir, $Wb, $errors, $bV, VerificationType::BOTH);
        J5I:
    }
    private function isPhoneNumberAlreadyInUse($M9)
    {
        if (!$this->restrict_duplicates) {
            goto ZfF;
        }
        global $wpdb;
        $M9 = MoUtility::process_phone_number($M9);
        $lR = $wpdb->get_row($wpdb->prepare("\123\105\114\105\x43\124\x20\x60\x75\163\x65\162\137\x69\144\x60\40\x46\x52\117\115\40\140{$wpdb->prefix}\165\163\145\162\x6d\x65\x74\x61\x60\x20\127\110\105\122\x45\x20\x60\155\x65\x74\x61\x5f\x76\x61\x6c\x75\145\x60\x20\75\40\45\163", $M9));
        return !MoUtility::is_blank($lR);
        ZfF:
        return false;
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto i01;
        }
        return;
        i01:
        $Bo = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Bo ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Bo, $Df);
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
            goto bax;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        bax:
        return $MI;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\155\141\x6e\141\147\x65\137\157\x70\x74\151\x6f\x6e\163") || !check_admin_referer($this->admin_nonce))) {
            goto ehJ;
        }
        return;
        ehJ:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $form = $this->parseFormDetails($GX);
        $this->form_details = !empty($form) ? $form : '';
        $this->is_form_enabled = $this->sanitize_form_post("\x63\x72\x66\x5f\x64\145\146\141\165\x6c\x74\137\x65\156\x61\142\154\145");
        $this->otp_type = $this->sanitize_form_post("\x63\162\x66\x5f\145\156\x61\142\x6c\x65\137\x74\171\160\145");
        $this->restrict_duplicates = $this->sanitize_form_post("\143\162\146\x5f\162\x65\x73\x74\x72\x69\x63\x74\x5f\x64\165\160\x6c\x69\x63\x61\164\145\163");
        update_mo_option("\x63\162\x66\x5f\144\145\146\x61\165\x6c\x74\137\x65\156\141\x62\154\145", $this->is_form_enabled);
        update_mo_option("\143\x72\146\137\x65\156\141\x62\154\x65\x5f\164\x79\160\145", $this->otp_type);
        update_mo_option("\x63\162\146\137\x6f\164\160\137\145\x6e\141\142\154\145\144", maybe_serialize($this->form_details));
        update_mo_option("\x63\x72\146\137\162\x65\x73\164\162\151\143\x74\137\x64\165\160\x6c\x69\x63\x61\164\145\163", $this->restrict_duplicates);
    }
    private function parseFormDetails($GX)
    {
        $form = array();
        if (!(!array_key_exists("\143\162\x66\x5f\x66\157\x72\155", $GX) && empty($GX["\143\x72\146\137\146\157\x72\155"]["\x66\x6f\162\155"]))) {
            goto S3X;
        }
        return $form;
        S3X:
        foreach (array_filter($GX["\x63\162\146\137\146\x6f\162\x6d"]["\x66\157\x72\155"]) as $a6 => $bh) {
            $form[sanitize_text_field($bh)] = array("\x65\x6d\x61\151\x6c\x6b\145\x79" => sanitize_text_field($GX["\143\162\x66\137\146\x6f\x72\x6d"]["\145\x6d\141\151\x6c\153\145\171"][$a6]), "\x70\150\x6f\x6e\x65\x6b\145\x79" => sanitize_text_field($GX["\143\x72\x66\x5f\x66\157\162\x6d"]["\160\x68\x6f\x6e\145\153\x65\x79"][$a6]), "\145\155\141\x69\x6c\137\x73\150\157\x77" => sanitize_text_field($GX["\143\x72\146\137\x66\157\162\x6d"]["\145\155\x61\151\154\153\x65\171"][$a6]), "\160\150\157\156\145\x5f\163\x68\157\167" => sanitize_text_field($GX["\x63\x72\146\137\146\x6f\162\x6d"]["\160\x68\157\156\x65\x6b\x65\x79"][$a6]));
            W39:
        }
        FCu:
        return $form;
    }
}
y4d:
