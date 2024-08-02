<?php


namespace OTP\Handler\Forms;

if (defined("\101\x42\123\x50\x41\124\110")) {
    goto DZ;
}
exit;
DZ:
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
if (class_exists("\x46\157\x72\155\x69\x6e\x61\x74\157\x72\106\x6f\x72\155")) {
    goto HD;
}
class ForminatorForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::FORMINATOR;
        $this->type_phone_tag = "\x6d\157\137\146\x6f\x72\155\x69\156\x61\x74\157\x72\137\160\x68\157\x6e\145\137\x65\x6e\x61\142\154\x65";
        $this->type_email_tag = "\x6d\x6f\137\x66\x6f\162\x6d\151\x6e\141\x74\x6f\x72\137\145\x6d\141\x69\x6c\137\x65\156\141\x62\154\x65";
        $this->form_key = "\x46\117\x52\x4d\x49\x4e\x41\124\117\x52";
        $this->form_name = mo_("\106\157\162\155\x69\156\141\x74\x6f\162\x20\106\157\x72\x6d\163");
        $this->is_form_enabled = get_mo_option("\x66\x6f\162\x6d\x69\x6e\x61\x74\157\162\x5f\x65\156\x61\x62\x6c\145");
        $this->button_text = get_mo_option("\x66\x6f\x72\x6d\151\156\141\x74\157\162\x5f\x62\x75\x74\x74\157\156\137\x74\145\x78\x74");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\103\154\x69\x63\x6b\40\110\x65\x72\145\40\x74\x6f\40\163\145\x6e\144\40\x4f\124\x50");
        $this->phone_form_id = array();
        $this->form_documents = MoFormDocs::FORMINATOR_FORM_LINK;
        $this->generate_otp_action = "\155\151\x6e\151\x6f\x72\141\x6e\147\x65\137\146\157\162\x6d\x69\156\141\x74\157\162\137\147\x65\156\145\x72\x61\164\x65\x5f\x6f\164\x70";
        $this->validate_otp_action = "\x6d\x69\156\151\x6f\162\x61\x6e\147\x65\137\146\157\162\155\x69\156\x61\x74\157\162\137\x76\x61\x6c\151\x64\141\164\x65\x5f\x6f\164\160";
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x66\x6f\162\x6d\x69\x6e\141\164\x6f\x72\137\145\x6e\x61\142\x6c\x65\x5f\x74\x79\x70\145");
        $this->form_details = maybe_unserialize(get_mo_option("\x66\157\162\155\x69\156\x61\164\157\x72\137\146\157\x72\x6d\x73"));
        if (!empty($this->form_details)) {
            goto gM;
        }
        return;
        gM:
        add_action("\167\x70\137\141\152\141\x78\x5f{$this->generate_otp_action}", array($this, "\155\x6f\x5f\x73\145\156\144\137\157\164\160"));
        add_action("\167\160\x5f\x61\152\141\170\x5f\x6e\157\160\x72\151\166\x5f{$this->generate_otp_action}", array($this, "\155\x6f\x5f\163\x65\156\144\x5f\157\x74\160"));
        add_action("\x77\x70\137\145\x6e\x71\165\145\165\145\137\x73\143\x72\x69\x70\164\163", array($this, "\155\x69\x6e\151\x6f\162\141\156\x67\145\x5f\x72\x65\x67\151\x73\164\145\162\x5f\146\157\x72\155\x69\156\141\164\x6f\162\x5f\163\143\162\x69\x70\164"));
        add_action("\167\x70\137\141\x6a\x61\170\x5f{$this->validate_otp_action}", array($this, "\160\162\157\143\145\x73\x73\106\157\x72\155\x41\156\x64\126\141\x6c\151\144\x61\164\x65\x4f\x54\x50"));
        add_action("\167\160\137\x61\152\141\x78\x5f\156\157\x70\162\x69\x76\137{$this->validate_otp_action}", array($this, "\160\x72\x6f\x63\x65\163\x73\x46\x6f\162\155\101\156\144\x56\x61\154\151\144\x61\x74\145\x4f\124\120"));
        add_filter("\146\x6f\x72\x6d\x69\x6e\141\164\157\x72\137\x63\165\x73\x74\x6f\x6d\x5f\146\x6f\162\x6d\137\163\x75\x62\155\x69\x74\x5f\x65\x72\x72\157\162\x73", array($this, "\x66\157\162\155\x69\x6e\x61\164\x6f\x72\x5f\x63\165\x73\x74\157\155\x5f\x66\157\x72\x6d\137\163\165\142\x6d\x69\164\x5f\145\x72\162\x6f\x72\x73"), 1, 3);
        add_filter("\x66\x6f\x72\155\x69\156\141\164\x6f\162\137\146\157\162\155\x5f\141\x6a\141\170\137\163\x75\142\155\x69\164\x5f\162\145\163\x70\157\x6e\163\145", array($this, "\146\157\x72\x6d\x69\156\x61\x74\157\x72\137\146\157\x72\x6d\x5f\x61\x6a\141\170\137\163\x75\142\155\151\164\137\x72\145\163\x70\x6f\156\x73\x65"), 1, 2);
    }
    public function forminator_form_ajax_submit_response($zk, $Nb)
    {
        if (!(!$zk["\x73\165\143\143\145\163\163"] && array_key_exists($Nb, $this->form_details))) {
            goto ma;
        }
        $zk["\155\x65\x73\163\141\147\145"] = $zk["\x65\162\162\157\x72\163"][0];
        ma:
        if (!$zk["\x73\x75\x63\x63\x65\x73\x73"]) {
            goto ds;
        }
        $this->unset_otp_session_variables();
        ds:
        return $zk;
    }
    public function forminator_custom_form_submit_errors($UY, $Nb, $rf)
    {
        $Z2 = $this->moValidationChecks($UY, $Nb, $rf);
        if (!$Z2) {
            goto F5;
        }
        array_push($UY, $Z2);
        F5:
        return $UY;
    }
    public function moValidationChecks($UY, $Nb, $rf = '')
    {
        $Z2 = '';
        if (!SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto NL;
        }
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto fZ;
        }
        $Y7 = $this->form_details[$Nb][$this->get_verification_type() . "\x6b\x65\171"];
        $R3 = '';
        foreach ($rf as $a6 => $bh) {
            if (!($bh["\x6e\141\155\x65"] === $Y7)) {
                goto k7;
            }
            $R3 = $bh["\166\x61\154\x75\145"];
            k7:
            wj:
        }
        y1:
        if (array_key_exists($Nb, $this->form_details) && $this->get_verification_type() === "\160\150\x6f\x6e\145") {
            goto bw;
        }
        if (!SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($R3))) {
            goto jh;
        }
        goto QX;
        bw:
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($R3))) {
            goto x5;
        }
        $Z2 = MoMessages::showMessage(MoMessages::PHONE_MISMATCH);
        x5:
        goto QX;
        jh:
        $Z2 = MoMessages::showMessage(MoMessages::EMAIL_MISMATCH);
        QX:
        goto VB;
        NL:
        $Z2 = MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE);
        goto VB;
        fZ:
        $Z2 = MoMessages::showMessage(MoMessages::INVALID_OTP);
        VB:
        return $Z2;
    }
    public function unset_sessionVariable($gL)
    {
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto D2;
        }
        $this->unset_otp_session_variables();
        D2:
        return $gL;
    }
    public function processFormAndValidateOTP()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto ID;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        exit;
        ID:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->checkIfOTPSent();
        $this->checkIntegrityAndValidateOTP($GX);
    }
    private function checkIfOTPSent()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto fY;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE), MoConstants::ERROR_JSON_TYPE));
        fY:
    }
    private function checkIntegrityAndValidateOTP($GX)
    {
        $this->checkIntegrity($GX);
        $this->validate_challenge(sanitize_text_field($GX["\157\164\x70\124\x79\x70\x65"]), null, sanitize_text_field($GX["\x6f\164\x70\137\x74\x6f\153\145\x6e"]));
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, sanitize_text_field($GX["\157\164\160\124\x79\160\x65"]))) {
            goto qk;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OTP), MoConstants::ERROR_JSON_TYPE));
        goto OX;
        qk:
        wp_send_json(MoUtility::create_json(MoConstants::SUCCESS_JSON_TYPE, MoConstants::SUCCESS_JSON_TYPE));
        OX:
    }
    private function checkIntegrity($GX)
    {
        if ("\160\x68\157\x6e\x65" === $GX["\157\164\160\x54\x79\160\x65"]) {
            goto yF;
        }
        if (!SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX["\165\163\x65\162\x5f\x65\155\141\x69\154"]))) {
            goto Q6;
        }
        goto CF;
        yF:
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($GX["\165\163\145\162\137\x70\x68\x6f\x6e\145"]))) {
            goto zd;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        zd:
        goto CF;
        Q6:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        CF:
    }
    public function miniorange_register_forminator_script()
    {
        wp_register_script("\x6d\x6f\x66\x6f\x72\155\x69\x6e\141\164\157\162", MOV_URL . "\151\x6e\x63\x6c\165\144\x65\x73\x2f\152\163\x2f\155\157\x66\x6f\162\155\151\x6e\x61\x74\157\x72\56\x6d\x69\156\56\152\163", array("\152\x71\x75\145\162\171"), MOV_VERSION, false);
        wp_localize_script("\155\157\x66\x6f\x72\155\x69\x6e\141\x74\x6f\162", "\155\157\146\x6f\162\x6d\151\x6e\x61\x74\x6f\x72", array("\163\x69\x74\145\x55\x52\114" => wp_ajax_url(), "\157\x74\160\x54\x79\160\x65" => $this->ajax_processing_fields(), "\147\x6e\x6f\x6e\143\x65" => wp_create_nonce($this->nonce), "\156\157\156\x63\x65\113\x65\171" => wp_create_nonce($this->nonce_key), "\x76\x6e\x6f\156\143\x65" => wp_create_nonce($this->nonce), "\142\165\164\x74\x6f\x6e\164\x65\x78\164" => mo_($this->button_text), "\151\x6d\x67\125\x52\114" => MOV_LOADER_URL, "\x66\x6f\162\x6d\x44\x65\x74\141\151\x6c\x73" => $this->form_details, "\x66\151\x65\x6c\x64\124\x65\170\164" => mo_("\105\x6e\x74\145\x72\40\117\124\120\40\150\x65\162\145"), "\166\141\x6c\151\144\x61\164\x65\144" => $this->getSessionDetails(), "\x67\141\x63\x74\x69\x6f\156" => $this->generate_otp_action, "\166\x61\143\x74\151\x6f\156" => $this->validate_otp_action));
        wp_enqueue_script("\x6d\x6f\146\157\162\155\x69\x6e\x61\164\157\x72");
    }
    private function getSessionDetails()
    {
        return array(VerificationType::EMAIL => SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, VerificationType::EMAIL), VerificationType::PHONE => SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, VerificationType::PHONE));
    }
    public function mo_send_otp()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto KJ;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        exit;
        KJ:
        $GX = MoUtility::mo_sanitize_array($_POST);
        if ($this->otp_type === $this->type_phone_tag) {
            goto sQ;
        }
        $this->mo_processEmailAndStartOTPVerificationProcess($GX);
        goto IK;
        sQ:
        $this->mo_processPhoneAndStartOTPVerificationProcess($GX);
        IK:
    }
    private function mo_processEmailAndStartOTPVerificationProcess($GX)
    {
        if (!MoUtility::sanitize_check("\165\x73\x65\x72\x5f\x65\155\141\x69\x6c", $GX)) {
            goto g_;
        }
        MoUtility::initialize_transaction($this->form_session_var);
        $this->setSessionAndStartOTPVerification($GX["\x75\x73\145\162\137\x65\155\141\x69\x6c"], $GX["\165\163\145\x72\137\145\x6d\x61\x69\x6c"], null, VerificationType::EMAIL);
        goto aa;
        g_:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        aa:
    }
    private function mo_processPhoneAndStartOTPVerificationProcess($GX)
    {
        if (!MoUtility::sanitize_check("\165\163\x65\x72\x5f\x70\x68\157\x6e\x65", $GX)) {
            goto lP;
        }
        MoUtility::initialize_transaction($this->form_session_var);
        $this->setSessionAndStartOTPVerification(trim($GX["\x75\163\x65\x72\x5f\160\x68\x6f\x6e\x65"]), null, trim($GX["\165\x73\145\162\137\x70\x68\x6f\156\x65"]), VerificationType::PHONE);
        goto E9;
        lP:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        E9:
    }
    private function setSessionAndStartOTPVerification($Pl, $Wb, $bV, $I2)
    {
        SessionUtils::add_email_or_phone_verified($this->form_session_var, $Pl, $I2);
        $this->send_challenge('', $Wb, null, $bV, $I2);
    }
    private function processOTPEntered($nR)
    {
        $Bo = $this->get_verification_type();
        $this->validate_challenge($Bo, null, $nR);
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto Br;
        }
        $nR = new WP_Error("\x49\116\x56\x41\x4c\111\x44\x5f\117\x54\120", MoUtility::get_invalid_otp_method());
        Br:
        return $nR;
    }
    private function checkIfOtpVerificationStarted($nR)
    {
        return SessionUtils::is_otp_initialized($this->form_session_var) ? $nR : new WP_Error("\105\x4e\x54\x45\122\137\x56\105\122\111\106\x59\137\103\x4f\104\x45", MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE));
    }
    private function processEmail($nR)
    {
        return SessionUtils::is_email_verified_match($this->form_session_var, $nR) ? $nR : new WP_Error("\105\x4d\101\111\x4c\x5f\115\111\x53\x4d\x41\x54\103\110", MoMessages::showMessage(MoMessages::EMAIL_MISMATCH));
    }
    private function processPhone($nR)
    {
        return SessionUtils::is_phone_verified_match($this->form_session_var, $nR) ? $nR : new WP_Error("\x50\110\x4f\116\x45\x5f\115\111\123\x4d\x41\124\x43\x48", MoMessages::showMessage(MoMessages::PHONE_MISMATCH));
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
        if (!($this->is_form_enabled && $this->otp_type === $this->type_phone_tag)) {
            goto On;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        On:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto z8;
        }
        return;
        z8:
        if (!(!array_key_exists("\146\157\162\155\x69\x6e\141\x74\157\x72\x5f\146\157\x72\x6d", $_POST) || !check_admin_referer($this->admin_nonce))) {
            goto TQ;
        }
        return;
        TQ:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->is_form_enabled = $this->sanitize_form_post("\x66\157\162\x6d\x69\x6e\x61\164\157\162\x5f\x65\156\x61\142\154\x65");
        $this->otp_type = $this->sanitize_form_post("\x66\x6f\x72\155\x69\x6e\141\164\x6f\162\x5f\145\156\141\x62\x6c\145\137\164\x79\160\x65");
        $this->button_text = $this->sanitize_form_post("\146\x6f\162\x6d\x69\156\141\x74\157\162\137\142\x75\164\x74\157\156\137\164\145\170\164");
        $form = $this->parseFormDetails($GX);
        $this->form_details = !empty($form) ? $form : '';
        update_mo_option("\x66\x6f\162\155\x69\156\141\x74\157\x72\x5f\145\x6e\141\142\154\145", $this->is_form_enabled);
        update_mo_option("\x66\157\162\155\x69\x6e\x61\164\157\x72\137\x65\156\x61\142\154\x65\137\x74\171\160\x65", $this->otp_type);
        update_mo_option("\146\x6f\x72\x6d\x69\156\x61\164\157\x72\137\x62\165\164\164\157\156\137\x74\x65\x78\x74", $this->button_text);
        update_mo_option("\x66\x6f\162\155\x69\156\x61\x74\x6f\162\x5f\146\x6f\x72\x6d\x73", maybe_serialize($this->form_details));
    }
    private function parseFormDetails($GX)
    {
        $form = array();
        foreach (array_filter($GX["\146\x6f\162\155\151\x6e\141\164\x6f\162\x5f\146\157\x72\x6d"]["\x66\x6f\x72\x6d"]) as $a6 => $bh) {
            $a6 = sanitize_text_field($a6);
            $form[sanitize_text_field($bh)] = array("\x65\155\141\151\154\x6b\145\x79" => sanitize_text_field($GX["\x66\x6f\x72\155\151\x6e\141\x74\x6f\x72\137\146\157\162\155"]["\x65\x6d\141\151\154\153\145\171"][$a6]), "\160\x68\x6f\156\x65\153\x65\171" => sanitize_text_field($GX["\x66\x6f\x72\155\151\x6e\x61\x74\157\162\x5f\x66\157\x72\x6d"]["\x70\x68\157\156\145\x6b\145\x79"][$a6]), "\x70\150\157\156\x65\x5f\163\150\157\x77" => sanitize_text_field($GX["\x66\x6f\x72\x6d\151\x6e\x61\164\157\162\x5f\x66\x6f\x72\x6d"]["\160\150\x6f\156\145\x6b\x65\x79"][$a6]), "\x65\x6d\x61\x69\x6c\137\163\x68\157\167" => sanitize_text_field($GX["\146\x6f\x72\x6d\151\156\x61\x74\157\162\137\x66\157\162\155"]["\145\155\141\x69\x6c\153\145\x79"][$a6]));
            hU:
        }
        TG:
        return $form;
    }
}
HD:
