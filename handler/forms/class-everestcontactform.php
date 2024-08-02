<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\x53\120\x41\124\110")) {
    goto n7;
}
exit;
n7:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Objects\BaseMessages;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
use WP_Error;
if (class_exists("\x45\166\145\162\145\163\x74\103\x6f\x6e\x74\x61\143\164\x46\x6f\x72\x6d")) {
    goto EM;
}
class EverestContactForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::EVEREST_CONTACT;
        $this->type_phone_tag = "\155\157\137\x65\166\145\x72\145\x73\164\137\143\x6f\156\164\141\x63\x74\137\x70\x68\x6f\156\145\x5f\145\x6e\141\142\x6c\145";
        $this->type_email_tag = "\155\x6f\137\x65\166\x65\162\145\x73\164\x5f\x63\x6f\x6e\x74\141\143\164\x5f\x65\x6d\141\151\x6c\137\x65\x6e\x61\x62\154\x65";
        $this->form_key = "\105\x56\105\122\x45\123\124\137\x43\x4f\x4e\124\x41\103\124";
        $this->form_name = mo_("\x45\x76\x65\x72\145\x73\x74\40\x43\157\x6e\164\x61\x63\164\40\106\157\x72\x6d");
        $this->is_form_enabled = get_mo_option("\x65\x76\x65\162\145\163\164\137\x63\157\156\164\x61\143\x74\x5f\145\156\141\142\154\x65");
        $this->phone_form_id = array();
        $this->form_documents = MoFormDocs::EVEREST_CONTACT_FORM_LINK;
        $this->generate_otp_action = "\155\x69\x6e\151\x6f\x72\141\x6e\147\x65\137\145\166\x65\162\145\163\x74\x5f\x63\x6f\x6e\x74\x61\143\x74\137\147\145\156\x65\162\141\x74\x65\137\x6f\164\160";
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\x43\154\x69\x63\x6b\40\x48\145\162\x65\x20\164\x6f\40\163\145\x6e\144\40\117\124\120");
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\145\166\x65\x72\145\x73\x74\137\x63\x6f\156\x74\x61\x63\x74\x5f\x65\x6e\141\142\x6c\145\137\x74\x79\160\145");
        $this->form_details = maybe_unserialize(get_mo_option("\x65\x76\x65\162\145\x73\x74\137\143\x6f\156\x74\141\143\x74\x5f\x66\x6f\x72\x6d\x73"));
        $this->button_text = get_mo_option("\x65\166\x65\x72\x65\163\x74\x5f\143\157\156\164\x61\143\x74\x5f\x62\x75\164\164\x6f\x6e\x5f\x74\145\170\x74");
        if (!empty($this->form_details)) {
            goto cU;
        }
        return;
        cU:
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\x23\145\166\x66\x2d" . $a6 . "\55\146\151\x65\154\144\137" . $bh["\160\x68\x6f\x6e\x65\x6b\145\171"]);
            Ey:
        }
        tC:
        add_filter("\145\166\x65\x72\x65\163\164\x5f\146\157\162\155\163\137\x70\162\157\143\145\x73\163\x5f\x69\156\x69\x74\x69\x61\154\x5f\x65\x72\162\157\x72\163", array($this, "\x76\x61\154\151\144\x61\x74\145\x46\157\x72\x6d"), 99, 2);
        add_filter("\x65\166\145\x72\x65\x73\164\x5f\x66\x6f\162\155\163\137\x70\x72\x6f\143\145\x73\x73\137\141\146\164\145\x72\137\x66\151\154\x74\145\x72", array($this, "\x75\x6e\x73\x65\164\x5f\x73\x65\x73\x73\x69\157\x6e\126\x61\162\151\x61\x62\x6c\145"), 99, 3);
        add_action("\x77\160\137\141\x6a\141\170\x5f{$this->generate_otp_action}", array($this, "\163\x65\156\x64\137\157\x74\160"));
        add_action("\x77\160\x5f\141\x6a\x61\170\137\x6e\x6f\160\x72\151\166\137{$this->generate_otp_action}", array($this, "\x73\x65\156\144\137\157\164\x70"));
        add_action("\167\x70\137\x65\156\x71\x75\145\165\145\x5f\163\143\162\151\160\164\163", array($this, "\x6d\x69\x6e\151\x6f\162\141\x6e\x67\145\137\x72\x65\x67\151\163\164\145\162\x5f\x65\x76\145\162\145\163\164\x5f\143\157\156\164\141\143\164\x5f\x73\x63\162\x69\160\x74"));
    }
    public function unset_sessionVariable($tR, $nR, $iG)
    {
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto n8;
        }
        $this->unset_otp_session_variables();
        n8:
        return $tR;
    }
    public function miniorange_register_everest_contact_script()
    {
        wp_register_script("\155\157\x65\x76\x65\162\x65\163\x74\143\157\156\x74\141\143\164", MOV_URL . "\x69\156\143\154\x75\144\x65\x73\x2f\152\x73\57\155\157\145\x76\x65\162\145\163\164\143\157\156\164\141\143\164\x2e\x6d\x69\156\56\x6a\x73", array("\152\x71\165\145\x72\x79"), MOV_VERSION, true);
        wp_localize_script("\155\157\145\x76\145\x72\145\163\164\143\157\x6e\x74\141\x63\164", "\x6d\x6f\x65\166\145\162\145\163\x74\143\157\x6e\x74\x61\x63\164", array("\163\151\x74\145\x55\122\x4c" => wp_ajax_url(), "\x6f\164\160\x54\x79\160\x65" => $this->otp_type, "\x66\157\x72\x6d\x6b\x65\x79" => strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? "\x70\150\x6f\x6e\145\153\145\171" : "\145\155\141\x69\154\x6b\145\171", "\x6e\157\x6e\x63\x65" => wp_create_nonce($this->nonce), "\142\x75\x74\164\157\x6e\164\x65\170\x74" => mo_($this->button_text), "\x69\x6d\x67\125\x52\114" => MOV_LOADER_URL, "\146\x6f\x72\x6d\x73" => $this->form_details, "\147\x65\x6e\145\x72\141\164\x65\x55\x52\x4c" => $this->generate_otp_action));
        wp_enqueue_script("\x6d\x6f\x65\166\145\x72\145\x73\x74\x63\x6f\x6e\164\x61\x63\x74");
    }
    public function send_otp()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto US;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        exit;
        US:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->validate_ajax_request();
        MoUtility::initialize_transaction($this->form_session_var);
        if ($this->otp_type === $this->type_phone_tag) {
            goto nv;
        }
        $this->process_email_and_start_otp_verification_process($GX);
        goto gT;
        nv:
        $this->process_phone_and_start_otp_verification_process($GX);
        gT:
    }
    private function process_email_and_start_otp_verification_process($GX)
    {
        if (!MoUtility::sanitize_check("\x75\x73\145\162\x5f\x65\155\x61\151\154", $GX)) {
            goto Mb;
        }
        $this->setSessionAndStartOTPVerification(sanitize_email($GX["\x75\163\145\162\137\x65\x6d\141\x69\x6c"]), sanitize_email($GX["\165\163\145\x72\x5f\x65\x6d\141\151\154"]), null, VerificationType::EMAIL);
        goto A1;
        Mb:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        A1:
    }
    private function process_phone_and_start_otp_verification_process($GX)
    {
        if (!MoUtility::sanitize_check("\x75\x73\x65\x72\x5f\x70\150\x6f\x6e\x65", $GX)) {
            goto wB;
        }
        $this->setSessionAndStartOTPVerification(trim(sanitize_text_field($GX["\165\x73\x65\162\x5f\x70\150\x6f\x6e\x65"])), null, trim(sanitize_text_field($GX["\165\x73\x65\x72\137\160\x68\157\156\x65"])), VerificationType::PHONE);
        goto Dd;
        wB:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        Dd:
    }
    private function setSessionAndStartOTPVerification($Pl, $Wb, $bV, $I2)
    {
        SessionUtils::add_email_or_phone_verified($this->form_session_var, $Pl, $I2);
        $this->send_challenge('', $Wb, null, $bV, $I2);
    }
    public function validateForm($errors, $iG)
    {
        $FL = $iG["\x69\x64"];
        if (empty($errors[$FL]["\150\145\x61\144\145\x72"])) {
            goto l5;
        }
        return $errors;
        l5:
        if (!(isset($this->form_details) && !array_key_exists($FL, $this->form_details))) {
            goto OQ;
        }
        return $errors;
        OQ:
        $iG = $this->form_details[$FL];
        if (isset($_POST["\137\167\x70\156\x6f\x6e\x63\x65" . $FL])) {
            goto WH;
        }
        $errors[$FL]["\150\145\141\144\145\x72"] = MoMessages::showMessage(BaseMessages::INVALID_OP);
        WH:
        if (sanitize_key(wp_unslash($_POST["\137\167\160\156\x6f\156\x63\145" . $FL]), "\x65\166\145\x72\145\x73\x74\x2d\146\157\x72\x6d\x73\x5f\x70\x72\x6f\143\145\163\x73\137\x73\x75\142\155\151\x74")) {
            goto Xe;
        }
        $errors[$FL]["\x68\x65\x61\144\145\x72"] = MoMessages::showMessage(BaseMessages::INVALID_OP);
        Xe:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $errors = $this->checkIfOtpVerificationStarted($errors, $GX);
        if (empty($errors[$FL]["\150\x65\141\x64\x65\162"])) {
            goto X2;
        }
        return $errors;
        X2:
        if (isset($iG) && strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto Gk;
        }
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto Ek;
        }
        goto Zp;
        Gk:
        $errors = $this->processEmail($GX, $errors, $iG);
        goto Zp;
        Ek:
        $errors = $this->processPhone($GX, $errors, $iG);
        Zp:
        if (!is_wp_error($errors)) {
            goto bu;
        }
        return $errors;
        bu:
        if (!(isset($iG) && empty($errors))) {
            goto AB;
        }
        $errors = $this->processOTPEntered($GX, $errors, $iG);
        AB:
        return $errors;
    }
    private function processOTPEntered($GX, $errors, $iG)
    {
        $FL = $GX["\x65\x76\145\x72\x65\163\x74\137\x66\157\x72\155\x73"]["\x69\144"];
        $Bo = $this->get_verification_type();
        $this->validate_challenge($Bo, null, $GX["\145\x76\145\x72\x65\163\x74\137\146\157\162\x6d\163"]["\x66\157\x72\155\137\x66\151\x65\154\144\163"][$iG["\166\145\x72\x69\x66\x79\x4b\x65\171"]]);
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto Cm;
        }
        $errors[$FL]["\150\x65\141\144\x65\x72"] = MoUtility::get_invalid_otp_method();
        Cm:
        return $errors;
    }
    private function checkIfOtpVerificationStarted($errors, $GX)
    {
        $FL = $GX["\145\166\145\162\145\x73\x74\x5f\x66\157\162\x6d\x73"]["\151\144"];
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto xM;
        }
        $errors[$FL]["\x68\145\141\144\x65\x72"] = MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE);
        xM:
        return $errors;
    }
    private function processEmail($GX, $errors, $iG)
    {
        $FL = sanitize_text_field($GX["\145\166\145\x72\145\163\x74\x5f\146\157\x72\155\x73"]["\x69\144"]);
        if (SessionUtils::is_email_verified_match($this->form_session_var, $GX["\145\x76\x65\162\145\x73\164\x5f\x66\x6f\x72\155\163"]["\146\x6f\x72\x6d\x5f\x66\x69\x65\154\x64\x73"][$iG["\145\x6d\141\x69\154\153\x65\x79"]])) {
            goto Pf;
        }
        $errors[$FL]["\150\x65\141\x64\145\x72"] = MoMessages::showMessage(MoMessages::EMAIL_MISMATCH);
        Pf:
        return $errors;
    }
    private function processPhone($GX, $errors, $iG)
    {
        $FL = sanitize_text_field($GX["\145\166\145\x72\145\x73\164\x5f\x66\x6f\x72\x6d\163"]["\x69\x64"]);
        if (SessionUtils::is_phone_verified_match($this->form_session_var, $GX["\145\x76\145\x72\145\x73\164\x5f\x66\x6f\162\x6d\x73"]["\x66\x6f\x72\x6d\x5f\x66\151\x65\154\144\x73"][$iG["\x70\x68\157\156\x65\x6b\x65\x79"]])) {
            goto Qh;
        }
        $errors[$FL]["\150\x65\x61\144\145\x72"] = MoMessages::showMessage(MoMessages::PHONE_MISMATCH);
        Qh:
        return $errors;
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
            goto HW;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        HW:
        return $MI;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\155\x61\156\141\147\145\x5f\157\160\164\151\157\x6e\x73") || !check_admin_referer($this->admin_nonce))) {
            goto dH;
        }
        return;
        dH:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->is_form_enabled = $this->sanitize_form_post("\145\x76\145\x72\145\x73\164\x5f\x63\157\x6e\164\x61\x63\x74\x5f\145\x6e\141\142\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\145\166\145\162\x65\163\x74\137\143\157\156\x74\141\143\x74\137\x65\x6e\141\142\154\145\137\164\171\x70\x65");
        $this->button_text = $this->sanitize_form_post("\x65\x76\145\162\x65\163\164\x5f\143\x6f\x6e\x74\x61\x63\x74\x5f\x62\165\x74\x74\x6f\156\137\164\145\170\x74");
        $form = $this->parseFormDetails($GX);
        $this->form_details = !empty($form) ? $form : '';
        update_mo_option("\145\166\x65\162\x65\163\x74\x5f\x63\x6f\x6e\x74\x61\x63\x74\x5f\145\156\141\x62\154\x65", $this->is_form_enabled);
        update_mo_option("\145\166\145\x72\x65\x73\164\137\x63\157\x6e\x74\141\x63\164\137\x65\x6e\x61\142\x6c\145\137\x74\x79\x70\x65", $this->otp_type);
        update_mo_option("\x65\166\145\162\145\x73\164\x5f\143\157\x6e\164\141\143\x74\137\x62\165\164\x74\x6f\x6e\x5f\x74\x65\x78\x74", $this->button_text);
        update_mo_option("\145\166\145\162\x65\x73\164\x5f\x63\157\x6e\x74\141\143\164\x5f\x66\x6f\x72\x6d\x73", maybe_serialize($this->form_details));
    }
    public function parseFormDetails($GX)
    {
        $form = array();
        if (!(!array_key_exists("\x65\x76\x65\x72\x65\163\164\x5f\143\x6f\156\164\x61\143\x74\x5f\146\x6f\162\x6d", $GX) || !$this->is_form_enabled)) {
            goto Zj;
        }
        return $form;
        Zj:
        $uI = isset($GX["\x65\166\x65\x72\145\163\164\137\143\157\x6e\x74\141\x63\164\137\146\x6f\162\x6d"]["\x66\x6f\x72\x6d"]) ? MoUtility::mo_sanitize_array(wp_unslash($GX["\145\x76\x65\x72\145\x73\164\x5f\143\x6f\x6e\x74\141\x63\164\x5f\x66\x6f\x72\x6d"]["\x66\157\x72\x6d"])) : '';
        foreach (array_filter($uI) as $a6 => $bh) {
            $form[sanitize_text_field($bh)] = array("\x65\155\141\x69\x6c\153\145\x79" => isset($GX["\145\x76\x65\162\145\163\x74\137\x63\157\x6e\164\141\143\164\137\x66\x6f\x72\x6d"]["\x65\155\x61\151\154\153\x65\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\145\x76\x65\162\x65\163\x74\137\x63\157\x6e\x74\x61\x63\x74\137\x66\x6f\x72\x6d"]["\x65\155\141\x69\x6c\x6b\x65\x79"][$a6])) : '', "\x70\x68\157\x6e\145\x6b\145\x79" => isset($GX["\x65\x76\x65\x72\145\x73\x74\x5f\143\157\x6e\x74\x61\143\x74\x5f\146\157\x72\x6d"]["\x70\x68\x6f\156\145\x6b\x65\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\145\166\x65\x72\145\x73\x74\x5f\x63\x6f\156\164\x61\143\x74\137\146\x6f\162\155"]["\x70\150\157\x6e\145\153\x65\x79"][$a6])) : '', "\166\145\x72\x69\146\171\x4b\145\171" => isset($GX["\145\166\145\x72\x65\x73\164\137\143\157\x6e\164\141\x63\164\x5f\146\157\x72\155"]["\166\145\x72\x69\146\x79\x4b\145\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x65\166\145\162\145\163\164\x5f\143\157\x6e\x74\141\x63\x74\137\x66\157\x72\155"]["\166\x65\162\151\x66\x79\113\x65\x79"][$a6])) : '', "\x70\x68\157\x6e\145\137\x73\150\157\167" => isset($GX["\145\166\x65\162\x65\163\x74\x5f\143\x6f\x6e\164\141\x63\164\137\146\x6f\162\x6d"]["\x70\150\157\156\145\153\145\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x65\166\x65\x72\145\x73\164\137\x63\157\x6e\x74\141\143\x74\137\146\x6f\x72\155"]["\x70\150\x6f\156\x65\153\x65\171"][$a6])) : '', "\145\x6d\141\x69\x6c\x5f\x73\150\x6f\x77" => isset($GX["\x65\166\x65\162\145\x73\x74\137\x63\x6f\156\164\x61\143\x74\x5f\x66\157\162\155"]["\145\x6d\x61\151\x6c\153\x65\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x65\166\x65\x72\145\x73\x74\x5f\x63\157\156\x74\141\143\x74\137\x66\x6f\162\x6d"]["\x65\x6d\x61\x69\x6c\x6b\145\x79"][$a6])) : '', "\x76\145\x72\x69\x66\171\x5f\x73\x68\157\167" => isset($GX["\145\x76\x65\162\x65\x73\164\x5f\143\x6f\156\164\141\x63\x74\137\x66\x6f\162\155"]["\x76\x65\162\x69\x66\171\113\x65\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\145\166\x65\x72\x65\x73\x74\137\143\157\x6e\x74\x61\x63\x74\x5f\146\157\162\x6d"]["\x76\x65\162\151\146\x79\x4b\x65\171"][$a6])) : '');
            XL:
        }
        pZ:
        return $form;
    }
}
EM:
