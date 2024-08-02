<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\x53\x50\101\124\x48")) {
    goto UN;
}
exit;
UN:
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
if (class_exists("\103\141\154\144\145\162\141\106\157\162\155\163")) {
    goto AT;
}
class CalderaForms extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::CALDERA;
        $this->type_phone_tag = "\155\x6f\137\x63\141\154\144\x65\162\141\x5f\x70\x68\x6f\x6e\x65\x5f\145\x6e\141\142\x6c\x65";
        $this->type_email_tag = "\155\x6f\137\x63\x61\154\x64\x65\162\x61\137\x65\x6d\x61\151\x6c\137\x65\x6e\141\142\154\x65";
        $this->form_key = "\x43\101\x4c\104\x45\122\101";
        $this->form_name = mo_("\x43\x61\x6c\x64\145\x72\141\40\x46\157\162\x6d\x73");
        $this->is_form_enabled = get_mo_option("\143\x61\154\x64\x65\x72\x61\137\x65\x6e\x61\x62\x6c\145");
        $this->button_text = get_mo_option("\x63\x61\154\x64\145\x72\x61\137\x62\x75\x74\164\x6f\x6e\137\x74\145\x78\164");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\103\x6c\151\x63\x6b\40\x48\145\x72\145\40\x74\157\40\163\x65\156\144\x20\117\x54\120");
        $this->phone_form_id = array();
        $this->form_documents = MoFormDocs::CALDERA_FORMS_LINK;
        $this->generate_otp_action = "\155\151\x6e\151\x6f\x72\x61\156\x67\145\137\143\141\154\144\145\162\x61\137\147\145\156\x65\x72\141\164\x65\x5f\157\164\160";
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\143\x61\154\x64\145\162\141\x5f\x65\x6e\141\142\x6c\145\137\x74\x79\x70\x65");
        $this->form_details = maybe_unserialize(get_mo_option("\143\x61\154\144\x65\162\141\x5f\146\157\x72\x6d\163"));
        if (!empty($this->form_details)) {
            goto WA;
        }
        return;
        WA:
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\x69\x6e\160\165\164\133\x6e\x61\155\x65\x3d" . $bh["\160\x68\157\x6e\145\153\x65\171"]);
            add_filter("\x63\141\154\x64\x65\x72\x61\137\146\157\162\x6d\x73\137\166\141\x6c\151\x64\x61\x74\x65\137\146\151\145\x6c\144\x5f" . $bh["\160\x68\157\156\x65\153\145\171"], array($this, "\x76\x61\154\x69\144\x61\164\145\106\157\162\x6d"), 99, 3);
            add_filter("\143\141\x6c\144\x65\x72\x61\x5f\x66\157\162\x6d\163\x5f\x76\141\x6c\151\144\x61\x74\145\x5f\x66\x69\x65\154\x64\137" . $bh["\145\x6d\141\151\154\153\x65\x79"], array($this, "\x76\x61\x6c\x69\144\141\164\145\x46\157\162\x6d"), 99, 3);
            add_filter("\143\141\x6c\x64\x65\x72\x61\x5f\x66\157\x72\155\163\137\166\x61\x6c\x69\x64\x61\x74\x65\137\x66\x69\x65\154\x64\x5f" . $bh["\166\145\162\x69\146\x79\x4b\145\x79"], array($this, "\166\141\154\x69\144\141\x74\x65\106\x6f\162\155"), 99, 3);
            add_action("\x63\141\154\144\145\x72\141\x5f\x66\x6f\x72\x6d\x73\x5f\163\165\142\x6d\x69\x74\137\143\x6f\155\160\154\x65\x74\145", array($this, "\x75\x6e\x73\x65\x74\x5f\x6f\164\x70\x5f\x73\145\163\x73\x69\x6f\x6e\x5f\166\141\x72\x69\x61\x62\x6c\x65\x73"), 99);
            DK:
        }
        XG:
        add_action("\167\x70\137\x61\x6a\141\170\137{$this->generate_otp_action}", array($this, "\155\x6f\137\163\x65\156\144\x5f\x6f\164\160"));
        add_action("\167\x70\x5f\141\152\141\170\137\x6e\157\x70\x72\x69\166\137{$this->generate_otp_action}", array($this, "\155\157\137\x73\x65\x6e\x64\137\157\164\x70"));
        add_action("\x77\160\x5f\x65\156\161\165\145\x75\145\x5f\163\x63\x72\151\160\x74\163", array($this, "\x6d\x69\156\151\157\x72\141\x6e\147\145\x5f\162\145\147\x69\x73\x74\145\162\137\143\x61\x6c\144\x65\162\x61\x5f\x73\143\x72\151\160\x74"));
    }
    public function unset_sessionVariable()
    {
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto sG;
        }
        $this->unset_otp_session_variables();
        sG:
    }
    public function miniorange_register_caldera_script()
    {
        wp_register_script("\x6d\x6f\x63\x61\x6c\144\x65\162\141", MOV_URL . "\x69\156\143\154\x75\144\145\163\57\152\163\x2f\143\x61\154\x64\x65\162\x61\56\x6d\151\x6e\x2e\x6a\163", array("\x6a\161\165\145\162\x79"), MOV_VERSION, true);
        wp_localize_script("\155\157\143\141\154\144\145\x72\x61", "\x6d\x6f\x63\141\x6c\x64\x65\162\141", array("\163\x69\x74\x65\125\122\114" => wp_ajax_url(), "\x6f\x74\160\x54\x79\x70\145" => $this->otp_type, "\146\x6f\162\155\153\x65\171" => strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? "\160\x68\x6f\156\145\x6b\x65\171" : "\x65\155\x61\151\154\153\x65\171", "\x6e\x6f\156\x63\x65" => wp_create_nonce($this->nonce), "\x62\x75\164\164\157\156\164\145\x78\x74" => mo_($this->button_text), "\151\x6d\147\x55\122\x4c" => MOV_LOADER_URL, "\146\x6f\x72\x6d\163" => $this->form_details, "\x67\x65\156\x65\162\x61\x74\145\125\x52\114" => $this->generate_otp_action));
        wp_enqueue_script("\x6d\157\x63\x61\154\144\145\162\141");
    }
    public function mo_send_otp()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto fG;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        exit;
        fG:
        $GX = MoUtility::mo_sanitize_array($_POST);
        MoUtility::initialize_transaction($this->form_session_var);
        if ($this->otp_type === $this->type_phone_tag) {
            goto J4;
        }
        $this->mo_processEmailAndStartOTPVerificationProcess($GX);
        goto ye;
        J4:
        $this->mo_processPhoneAndStartOTPVerificationProcess($GX);
        ye:
    }
    private function mo_processEmailAndStartOTPVerificationProcess($GX)
    {
        if (!MoUtility::sanitize_check("\165\x73\x65\162\137\x65\x6d\x61\x69\154", $GX)) {
            goto zq;
        }
        $this->setSessionAndStartOTPVerification($GX["\x75\x73\145\x72\x5f\x65\155\141\x69\x6c"], $GX["\165\163\145\x72\137\x65\155\x61\x69\x6c"], null, VerificationType::EMAIL);
        goto Jm;
        zq:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        Jm:
    }
    private function mo_processPhoneAndStartOTPVerificationProcess($GX)
    {
        if (!MoUtility::sanitize_check("\x75\163\x65\x72\x5f\x70\150\157\x6e\145", $GX)) {
            goto gc;
        }
        $this->setSessionAndStartOTPVerification(trim($GX["\165\163\145\x72\x5f\x70\x68\x6f\156\x65"]), null, trim($GX["\165\163\x65\162\x5f\x70\x68\157\156\x65"]), VerificationType::PHONE);
        goto KR;
        gc:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        KR:
    }
    private function setSessionAndStartOTPVerification($Pl, $Wb, $bV, $I2)
    {
        SessionUtils::add_email_or_phone_verified($this->form_session_var, $Pl, $I2);
        $this->send_challenge('', $Wb, null, $bV, $I2);
    }
    public function validateForm($nR, $Jw, $form)
    {
        if (!is_wp_error($nR)) {
            goto QK;
        }
        return $nR;
        QK:
        $FL = $form["\x49\x44"];
        if (array_key_exists($FL, $this->form_details)) {
            goto Z6;
        }
        return $nR;
        Z6:
        $iG = $this->form_details[$FL];
        $nR = $this->checkIfOtpVerificationStarted($nR);
        if (!is_wp_error($nR)) {
            goto uz;
        }
        return $nR;
        uz:
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0 && strcasecmp($Jw["\111\104"], $iG["\x65\x6d\x61\x69\154\153\145\x79"]) === 0) {
            goto nc;
        }
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0 && strcasecmp($Jw["\x49\x44"], $iG["\x70\x68\x6f\x6e\145\x6b\x65\x79"]) === 0) {
            goto uL;
        }
        if (strcasecmp($Jw["\111\104"], $iG["\166\145\162\151\146\x79\x4b\x65\171"]) === 0) {
            goto G7;
        }
        goto d1;
        nc:
        $nR = $this->processEmail($nR);
        goto d1;
        uL:
        $nR = $this->processPhone($nR);
        goto d1;
        G7:
        $nR = $this->processOTPEntered($nR);
        d1:
        return $nR;
    }
    private function processOTPEntered($nR)
    {
        $Bo = $this->get_verification_type();
        $this->validate_challenge($Bo, null, $nR);
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto rA;
        }
        $nR = new WP_Error("\x49\116\x56\101\114\x49\104\137\117\124\x50", MoUtility::get_invalid_otp_method());
        rA:
        return $nR;
    }
    private function checkIfOtpVerificationStarted($nR)
    {
        return SessionUtils::is_otp_initialized($this->form_session_var) ? $nR : new WP_Error("\x45\x4e\x54\x45\x52\x5f\x56\105\122\x49\106\131\x5f\103\x4f\104\105", MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE));
    }
    private function processEmail($nR)
    {
        return SessionUtils::is_email_verified_match($this->form_session_var, $nR) ? $nR : new WP_Error("\x45\115\101\111\x4c\137\115\111\x53\115\x41\124\x43\110", MoMessages::showMessage(MoMessages::EMAIL_MISMATCH));
    }
    protected function processPhone($nR)
    {
        return SessionUtils::is_phone_verified_match($this->form_session_var, $nR) ? $nR : new WP_Error("\x50\x48\117\116\x45\137\115\x49\x53\x4d\x41\x54\103\110", MoMessages::showMessage(MoMessages::PHONE_MISMATCH));
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
            goto Ej;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        Ej:
        return $MI;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\x6d\x61\156\x61\x67\x65\137\157\160\164\x69\x6f\156\163") || !check_admin_referer($this->admin_nonce))) {
            goto Uu;
        }
        return;
        Uu:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->is_form_enabled = $this->sanitize_form_post("\143\x61\154\x64\145\x72\x61\137\x65\156\x61\x62\x6c\x65");
        $this->otp_type = $this->sanitize_form_post("\143\x61\x6c\x64\145\x72\141\137\x65\x6e\141\142\154\145\137\x74\x79\x70\x65");
        $this->button_text = $this->sanitize_form_post("\143\141\x6c\x64\145\x72\141\x5f\x62\x75\164\x74\x6f\156\137\x74\145\170\164");
        $form = $this->parseFormDetails($GX);
        $this->form_details = !empty($form) ? $form : '';
        update_mo_option("\143\x61\154\144\145\162\x61\137\x65\x6e\x61\x62\154\145", $this->is_form_enabled);
        update_mo_option("\143\141\154\x64\145\x72\x61\137\145\x6e\x61\142\154\x65\137\x74\x79\x70\x65", $this->otp_type);
        update_mo_option("\x63\141\x6c\x64\x65\x72\x61\x5f\142\165\x74\x74\x6f\x6e\137\x74\145\x78\164", $this->button_text);
        update_mo_option("\x63\x61\x6c\x64\x65\162\x61\x5f\146\157\162\155\x73", maybe_serialize($this->form_details));
    }
    protected function parseFormDetails($GX)
    {
        $form = array();
        if (!(!array_key_exists("\143\x61\x6c\144\145\162\x61\137\x66\157\x72\x6d", $GX) || !$this->is_form_enabled)) {
            goto bU;
        }
        return $form;
        bU:
        foreach (array_filter($GX["\x63\x61\154\x64\x65\162\x61\x5f\146\x6f\x72\x6d"]["\x66\157\162\x6d"]) as $a6 => $bh) {
            $a6 = sanitize_text_field($a6);
            $form[sanitize_text_field($bh)] = array("\145\x6d\x61\151\x6c\153\145\x79" => sanitize_text_field($GX["\143\x61\x6c\144\x65\x72\141\x5f\146\x6f\162\155"]["\145\155\141\151\x6c\x6b\x65\171"][$a6]), "\x70\150\157\156\145\x6b\x65\171" => sanitize_text_field($GX["\x63\141\154\144\x65\x72\x61\x5f\146\x6f\x72\x6d"]["\x70\x68\x6f\x6e\145\x6b\x65\x79"][$a6]), "\x76\x65\x72\151\x66\171\113\145\x79" => sanitize_text_field($GX["\x63\141\154\144\145\x72\x61\137\x66\x6f\162\155"]["\x76\145\162\151\x66\171\x4b\x65\171"][$a6]), "\x70\150\157\x6e\145\x5f\x73\x68\x6f\x77" => sanitize_text_field($GX["\143\x61\154\x64\x65\x72\141\x5f\x66\157\x72\155"]["\x70\x68\x6f\156\x65\153\145\171"][$a6]), "\145\x6d\x61\x69\x6c\x5f\x73\150\x6f\167" => sanitize_text_field($GX["\x63\x61\154\144\x65\162\141\x5f\146\157\x72\x6d"]["\x65\155\141\x69\x6c\x6b\x65\x79"][$a6]), "\x76\x65\x72\151\x66\x79\137\x73\x68\x6f\167" => sanitize_text_field($GX["\x63\141\x6c\144\145\x72\x61\x5f\x66\x6f\x72\x6d"]["\166\x65\x72\151\146\171\113\x65\171"][$a6]));
            yj:
        }
        xO:
        return $form;
    }
}
AT:
