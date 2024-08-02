<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\x53\x50\x41\x54\x48")) {
    goto WxT;
}
exit;
WxT:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoException;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Helper\MoPHPSessions;
use OTP\Objects\VerificationLogic;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
use WP_Error;
if (class_exists("\124\165\164\157\162\x4c\155\163\x53\164\165\x64\145\x6e\164\x52\145\x67")) {
    goto xVf;
}
class TutorLmsStudentReg extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->form_session_var = FormSessionVars::TUTOR_LMS_STUDENT_REG_FORM;
        $this->type_phone_tag = "\155\157\137\164\x75\164\157\x72\x5f\154\155\x73\x5f\x73\x74\165\144\145\x6e\x74\x5f\160\x68\157\156\x65\x5f\x65\156\x61\142\154\145";
        $this->type_email_tag = "\155\157\137\164\165\164\157\x72\137\154\155\x73\x5f\163\x74\x75\144\x65\x6e\164\137\x65\x6d\141\151\154\137\x65\156\x61\142\154\145";
        $this->type_both_tag = "\x6d\157\137\x74\165\x74\157\162\137\154\x6d\x73\x5f\x73\164\165\x64\145\156\164\x5f\x62\157\x74\150\x5f\145\x6e\x61\x62\154\145";
        $this->phone_form_id = "\x69\156\x70\x75\x74\x5b\x6e\x61\155\145\x3d\165\163\145\162\137\x70\x68\x6f\156\x65\135";
        $this->form_key = "\x54\125\124\117\122\x5f\114\x4d\x53\137\x53\124\125\x44\105\116\124\137\122\105\x47\137\106\x4f\x52\x4d";
        $this->form_name = mo_("\x54\165\x74\157\x72\x20\114\115\x53\x20\x53\164\165\144\x65\156\x74\x20\x52\145\x67\151\x73\x74\x72\141\x74\151\x6f\x6e\40\x46\x6f\162\155");
        $this->is_form_enabled = get_mo_option("\164\165\164\157\162\137\154\155\163\x5f\x73\x74\x75\x64\145\156\164\x5f\144\x65\146\x61\165\154\164\137\145\156\x61\x62\x6c\145");
        $this->button_text = get_mo_option("\164\x75\x74\x6f\162\137\x6c\x6d\x73\137\163\164\165\144\x65\156\164\x5f\142\165\164\x74\157\156\137\164\145\170\x74");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\103\154\151\x63\153\x20\x48\x65\x72\x65\x20\x74\x6f\40\x73\145\x6e\144\x20\117\124\120");
        $this->form_documents = MoFormDocs::TUTOR_LMS_FORM_LINK;
        $this->is_ajax_form = true;
        $this->generate_otp_action = "\155\157\x6f\x74\x70\x73\x65\156\144\141\x63\x74\x69\x6f\x6e";
        $this->validate_otp_action = "\155\x6f\157\164\x70\x76\141\154\151\x64\x61\x74\145\x61\x63\x74\x69\x6f\x6e";
        parent::__construct();
    }
    public function handle_form()
    {
        $this->is_ajax_form = get_mo_option("\164\165\164\x6f\162\137\154\155\x73\x5f\x73\x74\165\x64\x65\156\164\x5f\151\163\137\x61\152\x61\170\x5f\x66\x6f\x72\155");
        $this->otp_type = get_mo_option("\x74\165\164\157\x72\137\x6c\x6d\163\137\x73\164\165\x64\145\x6e\x74\x5f\145\x6e\141\142\154\145\137\x74\171\160\145");
        $this->restrict_duplicates = get_mo_option("\x74\165\x74\x6f\162\137\x6c\155\x73\x5f\163\x74\165\x64\145\156\164\137\x72\145\x73\x74\x72\x69\143\x74\137\144\165\x70\154\151\143\141\164\x65\x73");
        if (!$this->is_form_enabled) {
            goto zWz;
        }
        if (!($this->otp_type === $this->type_phone_tag || $this->otp_type === $this->type_both_tag)) {
            goto n3b;
        }
        add_action("\x74\165\164\x6f\x72\x5f\x73\164\x75\x64\x65\x6e\164\x5f\162\x65\x67\x5f\x66\x6f\x72\x6d\137\155\151\144\144\154\x65", array($this, "\155\157\x5f\x61\x64\x64\x5f\160\150\157\x6e\x65\x5f\146\151\x65\x6c\x64"), 1);
        n3b:
        if (!($this->is_ajax_form && $this->otp_type !== $this->type_both_tag)) {
            goto BJN;
        }
        add_action("\x74\165\x74\x6f\x72\x5f\163\x74\x75\x64\x65\156\164\137\x72\x65\147\137\x66\x6f\162\155\x5f\x6d\151\x64\x64\x6c\x65", array($this, "\x6d\x6f\137\x61\x64\x64\x5f\166\x65\162\151\146\151\143\x61\164\151\157\156\x5f\146\x69\145\154\x64"), 1);
        add_action("\167\x70\x5f\145\x6e\161\x75\x65\x75\x65\x5f\x73\143\x72\151\160\164\x73", array($this, "\x6d\x69\156\x69\157\x72\x61\156\x67\145\137\x72\x65\147\x69\163\164\x65\162\x5f\x74\x75\164\x6f\x72\137\154\x6d\x73\137\x73\164\x75\144\145\156\164\x5f\163\x63\x72\x69\160\164"));
        add_action("\167\160\137\x61\152\x61\x78\137{$this->generate_otp_action}", array($this, "\x73\x65\156\x64\101\152\x61\170\x4f\124\x50\x52\x65\x71\165\145\163\164"));
        add_action("\x77\x70\137\x61\152\x61\170\137\156\x6f\x70\162\x69\166\x5f{$this->generate_otp_action}", array($this, "\163\145\156\144\x41\x6a\x61\170\117\124\x50\122\x65\x71\x75\145\163\164"));
        BJN:
        if (!(isset($_POST["\164\165\x74\157\x72\x5f\x61\x63\164\x69\x6f\156"]) && "\164\165\x74\157\162\137\x72\145\x67\151\x73\164\x65\x72\137\x73\164\x75\144\145\x6e\164" === $_POST["\164\165\x74\x6f\x72\x5f\141\143\x74\151\x6f\x6e"])) {
            goto mKV;
        }
        add_filter("\162\145\x67\151\163\164\162\141\164\151\x6f\x6e\x5f\145\162\x72\157\x72\163", array($this, "\164\165\164\x6f\162\x5f\154\155\x73\x5f\x73\x74\x75\x64\145\156\164\x5f\163\151\164\x65\137\x72\x65\x67\x69\163\164\x72\141\x74\x69\x6f\156\137\145\162\162\x6f\162\163"), 100);
        add_action("\164\165\164\x6f\x72\x5f\141\146\x74\x65\x72\137\163\164\165\144\x65\x6e\164\x5f\x73\151\x67\156\x75\160", array($this, "\162\145\147\x69\x73\x74\x65\x72\x5f\x74\x75\164\157\x72\137\154\x6d\163\x5f\x73\x74\x75\144\145\156\x74\137\x75\163\x65\162"), 99, 1);
        mKV:
        zWz:
    }
    public function sendAjaxOTPRequest()
    {
        if (check_ajax_referer($this->nonce, "\163\145\143\x75\x72\151\x74\x79", false)) {
            goto YnL;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        YnL:
        $GX = MoUtility::mo_sanitize_array($_POST);
        MoUtility::initialize_transaction($this->form_session_var);
        $WB = MoUtility::sanitize_check("\x75\x73\x65\x72\137\x70\x68\157\x6e\145", $GX);
        $Wb = MoUtility::sanitize_check("\145\155\141\x69\154", $GX);
        $JG = MoUtility::sanitize_check("\165\x73\145\x72\137\154\157\x67\x69\156", $GX);
        if ($this->otp_type === $this->type_phone_tag) {
            goto ZNM;
        }
        SessionUtils::add_email_verified($this->form_session_var, $Wb);
        goto JEe;
        ZNM:
        SessionUtils::add_phone_verified($this->form_session_var, MoUtility::process_phone_number($WB));
        JEe:
        $kS = $this->processFormFields(new WP_Error(), $GX);
        if (!$kS->get_error_code()) {
            goto raV;
        }
        wp_send_json(MoUtility::create_json($kS->get_error_message(), MoConstants::ERROR_JSON_TYPE));
        raV:
    }
    public function miniorange_register_tutor_lms_student_script()
    {
        wp_register_script("\x6d\157\164\x75\164\157\x72\137\154\155\163\137\163\x74\165\x64\145\x6e\164\x5f\162\145\147", MOV_URL . "\151\156\143\x6c\x75\144\145\x73\x2f\x6a\163\57\164\x75\x74\157\162\154\155\163\x73\164\165\144\x65\156\164\x2e\155\x69\x6e\x2e\x6a\x73", array("\152\x71\165\145\162\x79"), MOV_VERSION, true);
        wp_localize_script("\155\x6f\164\165\x74\x6f\162\x5f\154\155\163\137\x73\x74\165\x64\x65\156\x74\137\162\145\x67", "\155\157\x74\165\x74\157\x72\x5f\154\155\163\137\163\x74\x75\144\x65\156\x74\137\x72\145\147", array("\x73\151\x74\145\125\122\x4c" => wp_ajax_url(), "\x6f\x74\160\137\x74\x79\x70\145" => $this->otp_type, "\147\156\157\x6e\x63\x65" => wp_create_nonce($this->nonce), "\142\165\164\164\157\156\164\x65\170\x74" => mo_($this->button_text), "\x66\x69\x65\x6c\x64" => $this->otp_type === $this->type_phone_tag ? "\165\163\x65\162\137\x70\150\x6f\x6e\145" : "\145\x6d\141\x69\154", "\x69\x6d\x67\125\x52\x4c" => MOV_LOADER_URL, "\x67\x61\143\164\151\157\x6e" => $this->generate_otp_action));
        wp_enqueue_script("\x6d\x6f\x74\165\164\x6f\x72\137\x6c\x6d\x73\137\163\164\x75\144\x65\156\164\x5f\x72\x65\147");
    }
    public function tutor_lms_student_site_registration_errors($errors)
    {
        if (MoUtility::is_blank(array_filter($errors->errors))) {
            goto NVU;
        }
        return $errors;
        NVU:
        if ($this->is_ajax_form) {
            goto aKY;
        }
        return $this->processFormAndSendOTP($errors);
        goto B24;
        aKY:
        $errors = $this->assertOTPField($errors, $_POST);
        $errors = $this->checkIfOTPWasSent($errors);
        return $this->checkIntegrityAndValidateOTP($_POST, $errors);
        B24:
    }
    private function assertOTPField($errors, $Mr)
    {
        if (MoUtility::sanitize_check("\155\x6f\166\x65\x72\151\146\x79", $Mr)) {
            goto n9g;
        }
        $errors = new WP_Error("\x72\x65\x67\151\163\164\162\141\x74\151\157\x6e\55\145\x72\162\157\x72\55\157\x74\160\x2d\x6e\x65\145\144\145\x64", MoMessages::showMessage(MoMessages::REQUIRED_OTP));
        n9g:
        return $errors;
    }
    private function checkIfOTPWasSent(&$errors)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto kSf;
        }
        $errors = new WP_Error("\x72\x65\x67\x69\163\x74\x72\141\164\x69\x6f\156\x2d\145\162\162\x6f\162\x2d\156\145\x65\144\55\166\141\x6c\x69\x64\141\x74\x69\x6f\156", MoMessages::showMessage(MoMessages::PLEASE_VALIDATE));
        kSf:
        return $errors;
    }
    private function checkIntegrityAndValidateOTP($GX, WP_Error $errors)
    {
        if (empty($errors->errors)) {
            goto chH;
        }
        return $errors;
        chH:
        if (!isset($GX["\165\163\145\x72\x5f\160\150\x6f\x6e\145"])) {
            goto Rbr;
        }
        $GX["\165\x73\145\x72\x5f\160\150\157\x6e\x65"] = MoUtility::process_phone_number($GX["\x75\163\x65\162\x5f\160\150\157\x6e\145"]);
        Rbr:
        $errors = $this->checkIntegrity($GX, $errors);
        if (empty($errors->errors)) {
            goto yw2;
        }
        return $errors;
        yw2:
        $Bo = $this->get_verification_type();
        $this->validate_challenge($Bo, null, sanitize_text_field($GX["\x6d\x6f\166\145\x72\151\146\171"]));
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto jIG;
        }
        return new WP_Error("\162\145\147\x69\163\x74\x72\141\x74\x69\x6f\156\x2d\x65\162\x72\157\162\x2d\x69\x6e\x76\141\154\151\144\x2d\x6f\164\x70", MoUtility::get_invalid_otp_method());
        goto EVZ;
        jIG:
        $this->unset_otp_session_variables();
        EVZ:
        return $errors;
    }
    private function checkIntegrity($GX, WP_Error $errors)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto vbO;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto Xz3;
        }
        goto O9w;
        vbO:
        if (Sessionutils::is_phone_verified_match($this->form_session_var, sanitize_text_field($GX["\165\163\145\162\x5f\160\150\x6f\156\x65"]))) {
            goto poA;
        }
        return new WP_Error("\142\151\154\x6c\x69\156\x67\137\x70\x68\x6f\156\145\x5f\145\x72\x72\157\162", MoMessages::showMessage(MoMessages::PHONE_MISMATCH));
        poA:
        goto O9w;
        Xz3:
        if (SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX["\145\155\141\151\154"]))) {
            goto cc7;
        }
        return new WP_Error("\162\x65\147\x69\x73\x74\x72\141\x74\151\157\x6e\x2d\x65\162\x72\x6f\x72\x2d\151\156\166\x61\154\x69\x64\x2d\145\155\x61\x69\x6c", MoMessages::showMessage(MoMessages::EMAIL_MISMATCH));
        cc7:
        O9w:
        return $errors;
    }
    private function processFormAndSendOTP(WP_Error $errors)
    {
        $GX = MoUtility::mo_sanitize_array($_POST);
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto NR2;
        }
        $this->unset_otp_session_variables();
        return $errors;
        NR2:
        MoUtility::initialize_transaction($this->form_session_var);
        try {
            $this->assertUserName($GX["\x75\163\x65\162\137\154\157\x67\x69\x6e"]);
            $this->assertEmail($GX["\145\155\x61\x69\154"]);
        } catch (MoException $rZ) {
            return new WP_Error($rZ->getmo_code(), $rZ->getMessage());
        }
        return $errors->get_error_code() ? $errors : $this->processFormFields($errors, $GX);
    }
    private function assertEmail($ZG)
    {
        if (!email_exists($ZG)) {
            goto u2A;
        }
        throw new MoException("\x72\x65\147\x69\163\x74\162\141\x74\x69\x6f\x6e\55\145\162\162\157\x72\55\x65\155\141\151\154\55\x65\170\x69\163\x74\163", mo_("\x41\x6e\40\141\143\x63\157\165\156\x74\x20\151\x73\x20\141\x6c\162\145\x61\144\x79\40\162\x65\x67\151\163\x74\145\x72\x65\x64\x20\x77\151\164\x68\40\171\157\x75\x72\x20\x65\155\x61\151\x6c\x20\141\144\x64\162\145\x73\163\x2e\x20\120\154\145\x61\x73\145\x20\x6c\157\147\151\x6e\x2e"), 203);
        u2A:
    }
    private function assertUserName($JG)
    {
        if (!(get_mo_option("\x74\x75\x74\x6f\x72\137\154\x6d\163\x5f\x73\x74\165\x64\x65\156\164\x5f\x72\x65\147\x69\x73\x74\x72\x61\164\x69\157\156\x5f\x67\145\x6e\x65\162\x61\164\145\137\x75\163\145\x72\156\x61\x6d\x65", '') === "\x6e\157")) {
            goto n0c;
        }
        if (!(MoUtility::is_blank($JG) || !validate_username($JG))) {
            goto A0S;
        }
        throw new MoException("\x72\145\x67\151\163\164\x72\141\164\x69\157\156\55\145\162\162\157\162\x2d\x69\x6e\166\141\154\151\x64\55\x75\163\145\x72\x6e\x61\155\145", mo_("\x50\x6c\145\141\x73\x65\40\145\156\x74\145\x72\x20\x61\40\166\x61\154\151\x64\40\141\x63\x63\157\165\156\x74\x20\x75\x73\145\x72\x6e\x61\x6d\145\56"), 200);
        A0S:
        if (!username_exists($JG)) {
            goto Mv9;
        }
        throw new MoException("\162\145\x67\151\x73\164\162\x61\x74\151\x6f\x6e\55\145\x72\x72\x6f\x72\x2d\165\x73\x65\162\x6e\x61\155\145\x2d\145\170\x69\163\164\x73", mo_("\101\156\40\141\143\x63\x6f\x75\156\x74\40\151\163\40\141\154\x72\145\141\144\x79\x20\x72\x65\x67\x69\163\x74\x65\162\x65\144\40\167\151\164\150\40\164\150\x61\164\40\165\x73\145\162\156\141\x6d\x65\x2e\40\x50\x6c\x65\141\163\145\40\x63\x68\157\x6f\x73\145\40\x61\156\157\x74\150\145\162\56"), 201);
        Mv9:
        n0c:
    }
    private function processFormFields($errors, $GX)
    {
        global $Hg;
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto dcc;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto NkK;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto Eb3;
        }
        goto jS2;
        dcc:
        if (!isset($GX["\x75\x73\x65\x72\137\160\150\157\x6e\145"]) || !MoUtility::validate_phone_number($GX["\x75\163\145\162\x5f\x70\x68\x6f\156\145"])) {
            goto WqF;
        }
        if ($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse($GX["\x75\x73\x65\x72\x5f\x70\150\157\x6e\145"], "\165\163\145\162\137\160\x68\x6f\156\x65")) {
            goto uxW;
        }
        goto aJP;
        WqF:
        return new WP_Error("\x62\151\154\x6c\x69\x6e\x67\137\160\x68\157\156\x65\137\145\x72\162\157\x72", str_replace("\43\x23\x70\x68\x6f\156\145\43\43", $GX["\165\163\145\x72\x5f\x70\x68\157\156\145"], $Hg->get_otp_invalid_format_message()));
        goto aJP;
        uxW:
        return new WP_Error("\x62\x69\154\x6c\x69\x6e\x67\x5f\x70\150\157\x6e\x65\x5f\x65\162\x72\x6f\162", MoMessages::showMessage(MoMessages::PHONE_EXISTS));
        aJP:
        $this->send_challenge(null, null, $errors, $GX["\165\x73\145\x72\x5f\160\150\x6f\x6e\145"], VerificationType::PHONE);
        goto jS2;
        NkK:
        $this->send_challenge(null, $GX["\x65\155\141\x69\x6c"], $errors, null, VerificationType::EMAIL);
        goto jS2;
        Eb3:
        if (!isset($GX["\x75\x73\x65\x72\137\160\x68\x6f\156\145"]) || !MoUtility::validate_phone_number($GX["\x75\163\145\162\x5f\x70\x68\x6f\x6e\x65"])) {
            goto DdO;
        }
        if ($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse($GX["\x75\x73\145\x72\137\160\150\157\156\x65"], "\x75\163\145\x72\137\160\150\x6f\x6e\145")) {
            goto Dml;
        }
        goto PsN;
        DdO:
        return new WP_Error("\x62\x69\154\154\x69\x6e\x67\x5f\x70\x68\157\156\145\x5f\145\162\x72\157\x72", str_replace("\43\43\x70\x68\157\x6e\x65\43\43", sanitize_text_field($GX["\165\163\145\x72\137\160\150\157\x6e\x65"]), $Hg->get_otp_invalid_format_message()));
        goto PsN;
        Dml:
        return new WP_Error("\x62\151\154\x6c\x69\x6e\147\137\x70\x68\x6f\156\145\x5f\145\x72\x72\x6f\162", MoMessages::showMessage(MoMessages::PHONE_EXISTS));
        PsN:
        $this->send_challenge($GX["\165\163\145\162\137\154\157\x67\x69\x6e"], $GX["\x65\x6d\141\x69\x6c"], $errors, $GX["\x75\163\145\162\x5f\x70\150\x6f\x6e\x65"], VerificationType::BOTH);
        jS2:
        return $errors;
    }
    public function register_tutor_lms_student_user($Uv)
    {
        if (!isset($_POST["\x75\x73\x65\x72\137\160\x68\x6f\156\x65"])) {
            goto f1v;
        }
        $M9 = MoUtility::sanitize_check("\x75\x73\145\x72\137\160\x68\x6f\x6e\x65", $_POST);
        update_user_meta($Uv, "\x75\163\145\162\137\160\x68\157\x6e\145", MoUtility::process_phone_number($M9));
        f1v:
    }
    public function mo_add_verification_field()
    {
        echo "\x3c\x64\x69\x76\x20\143\x6c\x61\163\x73\x3d\42\164\165\x74\157\x72\x2d\x66\157\x72\x6d\55\x72\x6f\167\42\76\15\xa\11\x9\11\11\x9\74\144\x69\166\x20\x63\154\x61\x73\163\x3d\42\164\165\164\157\162\x2d\x66\157\162\x6d\x2d\143\x6f\x6c\x2d\66\42\x3e\15\xa\11\11\x9\x9\x9\11\x3c\144\x69\166\x20\x63\x6c\141\163\163\75\42\x74\x75\164\x6f\x72\x2d\x66\x6f\x72\x6d\55\147\x72\x6f\165\160\x22\76\xd\xa\x9\x9\x9\11\11\11\11\x3c\x6c\x61\x62\145\154\40\x66\x6f\162\x3d\x22\x72\x65\147\x5f\166\145\162\x69\x66\151\x63\x61\164\x69\x6f\x6e\137\x70\150\x6f\156\x65\42\x3e\xd\12\x9\11\x9\x9\x9\x9\x9\11" . esc_html(mo_("\105\x6e\164\145\162\x20\103\157\x64\x65")) . "\15\12\11\x9\x9\11\x9\11\x9\x9\x3c\x73\x70\x61\156\40\x63\154\141\x73\163\x3d\x22\162\x65\161\x75\x69\162\x65\144\42\76\52\x3c\x2f\163\x70\x61\x6e\x3e\xd\xa\x9\x9\11\x9\x9\11\x9\74\57\x6c\141\x62\145\154\76\xd\12\11\11\11\11\x9\x9\x9\x3c\x69\156\160\165\164\x20\x74\171\160\145\75\42\164\145\170\164\x22\40\143\154\141\163\x73\75\42\x69\x6e\160\x75\164\55\x74\145\x78\x74\x22\40\x6e\141\x6d\x65\x3d\42\155\x6f\x76\x65\x72\x69\x66\x79\42\40\xd\12\x9\11\11\x9\11\x9\11\11\x9\151\x64\x3d\42\155\x6f\137\162\145\147\x5f\x76\x65\x72\151\x66\x69\143\141\164\151\x6f\156\x5f\x66\x69\145\x6c\144\x22\x20\xd\12\11\11\x9\11\11\x9\x9\11\x9\166\x61\154\165\x65\x3d\x22\42\x20\57\x3e\15\12\x9\11\x9\11\11\x9\74\x2f\144\x69\x76\x3e\xd\xa\x9\11\x9\11\x9\x3c\x2f\144\x69\x76\x3e\xd\12\11\11\11\11\x3c\x2f\x64\151\x76\76";
    }
    public function mo_add_phone_field()
    {
        echo "\74\x64\151\166\40\143\154\141\163\x73\75\42\x74\x75\164\x6f\x72\x2d\x66\x6f\162\155\55\x72\x6f\x77\x22\76\xd\xa\x9\11\11\x9\11\x3c\x64\x69\166\40\143\x6c\x61\x73\x73\x3d\42\164\x75\164\157\x72\55\x66\x6f\x72\155\x2d\x63\x6f\154\x2d\x36\42\x3e\15\12\x9\11\x9\11\11\x9\74\x64\x69\x76\40\143\x6c\x61\x73\x73\x3d\x22\x74\165\164\x6f\x72\55\146\157\162\x6d\x2d\x63\157\x6c\x2d\66\x22\76\xd\12\x9\x9\11\x9\x9\x9\x9\x3c\x6c\141\x62\x65\x6c\76" . esc_html(mo_("\120\150\157\x6e\x65\x20\116\x75\155\x62\145\162")) . "\x3c\57\x6c\x61\142\x65\x6c\76\40\15\12\x9\x9\x9\x9\11\x9\x9\74\151\x6e\x70\x75\164\40\x74\171\160\x65\75\x22\164\145\x78\x74\x22\40\156\x61\155\145\75\42\165\163\x65\x72\x5f\x70\150\157\156\145\x22\x20\166\141\154\x75\x65\75\42\42\40\151\144\75\x22\137\155\157\x70\150\157\x6e\145\x66\151\x65\154\x64\42\40\x3e\15\xa\x9\11\x9\x9\x9\11\x3c\x2f\144\x69\x76\76\15\12\x9\x9\11\11\x9\74\57\x64\151\166\76\xd\xa\11\11\11\x9\74\57\144\151\x76\x3e";
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if ($this->is_ajax_form) {
            goto XRK;
        }
        $Bo = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Bo ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Bo, $Df);
        goto kaN;
        XRK:
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
        kaN:
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
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto sXP;
        }
        array_push($MI, $this->phone_form_id);
        sXP:
        return $MI;
    }
    private function isPhoneNumberAlreadyInUse($M9, $a6)
    {
        global $wpdb;
        MoUtility::process_phone_number($M9);
        $lR = $wpdb->get_row($wpdb->prepare("\x53\x45\114\x45\x43\x54\x20\x60\165\x73\x65\x72\x5f\151\144\140\40\x46\x52\117\115\40\x60{$wpdb->prefix}\165\x73\x65\162\155\145\x74\141\140\40\127\110\105\122\x45\x20\x60\155\x65\x74\141\137\153\145\171\x60\40\x3d\40\x25\163\x20\101\116\104\x20\140\x6d\145\x74\141\137\166\x61\154\x75\x65\140\40\75\40\40\x25\x73", array($a6, $M9)));
        return !MoUtility::is_blank($lR);
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto pgB;
        }
        return;
        pgB:
        $this->is_form_enabled = $this->sanitize_form_post("\x74\165\164\x6f\x72\137\154\x6d\163\137\163\x74\x75\x64\145\x6e\x74\x5f\x64\x65\146\x61\165\x6c\x74\137\x65\156\141\142\154\x65");
        $this->otp_type = $this->sanitize_form_post("\164\165\164\157\162\x5f\154\x6d\163\x5f\x73\164\165\144\145\156\164\137\x65\x6e\141\142\x6c\x65\137\164\171\x70\145");
        $this->restrict_duplicates = $this->sanitize_form_post("\164\165\x74\157\162\x5f\154\155\x73\x5f\163\x74\x75\x64\x65\156\x74\x5f\x72\x65\163\164\x72\151\x63\164\137\x64\x75\x70\x6c\x69\x63\141\x74\145\x73");
        $this->is_ajax_form = $this->sanitize_form_post("\164\x75\164\157\162\137\154\x6d\163\137\x73\x74\165\144\x65\x6e\164\x5f\151\163\137\x61\x6a\141\x78\137\146\x6f\x72\x6d");
        $this->button_text = $this->sanitize_form_post("\164\165\164\x6f\x72\137\x6c\155\163\137\x73\x74\165\144\145\156\x74\x5f\x62\x75\x74\164\x6f\156\x5f\x74\x65\x78\x74");
        update_mo_option("\x74\165\x74\157\x72\137\x6c\155\x73\x5f\x73\164\x75\x64\145\156\164\x5f\x64\x65\x66\141\165\x6c\164\x5f\145\x6e\x61\x62\154\x65", $this->is_form_enabled);
        update_mo_option("\164\165\164\x6f\162\x5f\154\x6d\163\137\163\x74\x75\x64\145\156\x74\137\x65\x6e\x61\x62\154\145\137\x74\171\x70\x65", $this->otp_type);
        update_mo_option("\164\x75\164\157\x72\137\154\x6d\x73\137\x73\x74\165\144\x65\x6e\x74\x5f\162\145\163\x74\x72\x69\143\164\137\144\x75\160\154\151\143\141\164\145\x73", $this->restrict_duplicates);
        update_mo_option("\x74\165\164\x6f\162\137\154\155\163\x5f\163\164\x75\144\x65\156\164\x5f\151\163\137\x61\x6a\x61\x78\x5f\x66\157\x72\155", $this->is_ajax_form);
        update_mo_option("\x74\x75\164\x6f\x72\x5f\x6c\x6d\163\137\x73\164\165\x64\x65\156\164\x5f\x62\x75\x74\164\x6f\156\x5f\x74\x65\170\x74", $this->button_text);
    }
}
xVf:
