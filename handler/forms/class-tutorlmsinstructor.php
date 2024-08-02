<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\x53\120\101\x54\x48")) {
    goto hmx;
}
exit;
hmx:
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
if (class_exists("\x54\165\164\x6f\162\114\x4d\123\x49\156\x73\164\162\x75\143\x74\x6f\x72")) {
    goto mw8;
}
class TutorLMSInstructor extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->form_session_var = FormSessionVars::TUTOR_LMS_INSTRUCTOR_REG_FORM;
        $this->type_phone_tag = "\x6d\x6f\137\x74\x75\164\x6f\x72\137\154\x6d\163\137\160\150\157\x6e\145\x5f\145\x6e\141\142\154\x65";
        $this->type_email_tag = "\155\x6f\x5f\x74\165\x74\157\162\x5f\x6c\x6d\163\x5f\145\155\141\151\154\137\145\156\x61\142\154\145";
        $this->type_both_tag = "\x6d\x6f\x5f\x74\x75\164\x6f\x72\137\154\x6d\163\137\x62\157\x74\x68\137\145\156\141\x62\x6c\x65";
        $this->phone_form_id = "\151\156\x70\x75\x74\133\156\x61\155\x65\75\x75\x73\x65\162\x5f\x70\150\x6f\156\x65\x5d";
        $this->form_key = "\x54\x55\124\x4f\x52\x5f\x4c\x4d\123\137\x49\116\123\x54\x52\125\x43\124\117\x52\x5f\x52\x45\x47\137\x46\117\x52\115";
        $this->form_name = mo_("\x54\165\164\157\x72\40\114\115\x53\40\111\156\163\x74\162\165\x63\x74\157\162\x20\122\x65\147\x69\163\164\x72\141\x74\x69\x6f\156\x20\x46\157\x72\155");
        $this->is_form_enabled = get_mo_option("\164\165\164\x6f\x72\x5f\x6c\155\x73\x5f\x64\145\x66\x61\165\x6c\164\x5f\145\x6e\x61\142\x6c\x65");
        $this->button_text = get_mo_option("\x74\x75\x74\157\x72\137\x6c\155\x73\x5f\x62\x75\x74\x74\157\156\x5f\x74\x65\x78\164");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\103\154\151\143\x6b\40\x48\145\162\145\40\x74\x6f\x20\x73\145\156\144\x20\x4f\124\x50");
        $this->form_documents = MoFormDocs::TUTOR_LMS_FORM_LINK;
        $this->generate_otp_action = "\x6d\x6f\x5f\x74\x75\164\x6f\162\137\163\145\156\x64\x5f\x6f\164\160\x5f\x61\143\164\x69\x6f\156";
        $this->is_ajax_form = true;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->is_ajax_form = get_mo_option("\x74\165\164\157\162\137\x6c\x6d\163\137\x69\163\137\x61\x6a\141\170\137\x66\157\x72\155");
        $this->otp_type = get_mo_option("\x74\165\164\157\162\x5f\154\155\163\x5f\145\x6e\x61\142\x6c\145\137\x74\x79\x70\x65");
        $this->restrict_duplicates = get_mo_option("\164\165\x74\157\x72\137\154\x6d\x73\x5f\162\x65\163\x74\x72\x69\x63\164\x5f\x64\165\160\154\151\143\141\x74\x65\x73");
        if (!$this->is_form_enabled) {
            goto jp_;
        }
        if (!($this->otp_type === $this->type_phone_tag || $this->otp_type === $this->type_both_tag)) {
            goto QG1;
        }
        add_action("\x74\165\164\157\x72\x5f\151\156\x73\164\x72\165\143\164\x6f\x72\137\162\x65\147\x5f\x66\x6f\x72\x6d\137\x6d\x69\144\x64\x6c\x65", array($this, "\x6d\157\x5f\141\x64\x64\x5f\160\150\x6f\x6e\x65\x5f\x66\x69\145\x6c\144"), 10);
        QG1:
        if (!($this->is_ajax_form && $this->otp_type !== $this->type_both_tag)) {
            goto mJq;
        }
        add_action("\x74\165\x74\157\x72\x5f\151\156\163\x74\162\x75\x63\x74\x6f\162\x5f\x72\145\147\137\x66\x6f\162\155\x5f\155\x69\x64\144\x6c\145", array($this, "\x6d\157\x5f\x61\x64\x64\137\x76\x65\x72\151\146\151\143\141\x74\151\x6f\x6e\137\x66\x69\145\x6c\x64"), 10);
        add_action("\x77\160\137\145\x6e\161\x75\145\x75\145\137\163\143\x72\151\x70\164\163", array($this, "\155\x69\156\x69\x6f\x72\141\x6e\x67\x65\137\x72\x65\147\x69\163\x74\145\x72\x5f\x74\x75\x74\x6f\162\x5f\x6c\155\163\137\x73\x63\x72\151\x70\164"));
        add_action("\x77\x70\x5f\141\x6a\x61\170\137{$this->generate_otp_action}", array($this, "\163\x65\x6e\144\x41\x6a\x61\170\117\124\120\x52\145\x71\165\x65\x73\164"));
        add_action("\167\160\x5f\141\152\141\170\x5f\x6e\157\x70\162\151\166\137{$this->generate_otp_action}", array($this, "\163\x65\156\x64\101\152\141\x78\117\x54\x50\x52\145\x71\x75\x65\163\164"));
        mJq:
        if (!(isset($_POST["\x74\x75\x74\157\x72\137\141\143\x74\151\157\x6e"]) && "\x74\x75\164\x6f\x72\x5f\x72\145\x67\x69\x73\164\145\x72\137\x69\156\163\164\x72\165\x63\164\157\x72" === $_POST["\164\x75\x74\x6f\162\137\141\x63\x74\151\x6f\156"])) {
            goto p0A;
        }
        add_filter("\x72\145\147\151\x73\164\x72\141\x74\151\x6f\x6e\137\145\x72\x72\x6f\x72\163", array($this, "\164\165\164\x6f\x72\x5f\x6c\x6d\163\x5f\163\x69\164\145\137\x72\x65\x67\151\163\164\162\141\x74\151\x6f\x6e\x5f\x65\162\x72\157\x72\163"), 99, 1);
        add_action("\x74\x75\x74\157\x72\137\x6e\x65\x77\x5f\151\x6e\163\x74\x72\x75\x63\x74\157\162\137\141\146\164\145\162", array($this, "\162\x65\147\151\163\164\145\x72\x5f\164\165\x74\157\x72\137\154\x6d\163\137\165\163\145\x72"), 99, 1);
        p0A:
        jp_:
    }
    public function sendAjaxOTPRequest($GX)
    {
        if (check_ajax_referer($this->nonce, "\x73\145\x63\x75\162\151\x74\171", false)) {
            goto gMP;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        gMP:
        $GX = MoUtility::mo_sanitize_array($_POST);
        MoUtility::initialize_transaction($this->form_session_var);
        $WB = MoUtility::sanitize_check("\165\x73\145\x72\137\160\150\x6f\x6e\145", $GX);
        $Wb = MoUtility::sanitize_check("\x65\x6d\141\x69\x6c", $GX);
        $JG = MoUtility::sanitize_check("\165\163\145\162\137\x6c\x6f\147\x69\156", $GX);
        if ($this->otp_type === $this->type_phone_tag) {
            goto FGu;
        }
        SessionUtils::add_email_verified($this->form_session_var, $Wb);
        goto ttk;
        FGu:
        SessionUtils::add_phone_verified($this->form_session_var, MoUtility::process_phone_number($WB));
        ttk:
        $kS = $this->processFormFields(new WP_Error(), $GX);
        if (!$kS->get_error_code()) {
            goto Yi7;
        }
        wp_send_json(MoUtility::create_json($kS->get_error_message(), MoConstants::ERROR_JSON_TYPE));
        Yi7:
    }
    public function miniorange_register_tutor_lms_script()
    {
        wp_register_script("\155\157\x74\x75\x74\157\162\137\154\x6d\163\137\162\x65\147", MOV_URL . "\x69\x6e\143\154\165\144\145\x73\57\152\163\57\164\165\164\x6f\x72\154\x6d\x73\151\156\x73\x74\162\165\143\x74\157\x72\56\x6d\151\156\56\152\x73", array("\152\x71\x75\x65\x72\171"), MOV_VERSION, true);
        wp_localize_script("\155\157\x74\165\x74\x6f\x72\137\x6c\155\x73\137\162\145\x67", "\x6d\x6f\x74\x75\164\157\x72\137\x6c\x6d\x73\x5f\162\x65\x67", array("\x73\151\x74\145\125\122\114" => wp_ajax_url(), "\x6f\x74\x70\137\x74\x79\x70\x65" => $this->otp_type, "\x6e\x6f\x6e\x63\x65" => wp_create_nonce($this->nonce), "\x62\165\164\164\157\x6e\x74\x65\170\164" => mo_($this->button_text), "\146\x69\145\154\144" => $this->otp_type === $this->type_phone_tag ? "\165\163\145\x72\137\x70\150\x6f\156\x65" : "\145\155\x61\x69\x6c", "\x69\x6d\x67\125\122\114" => MOV_LOADER_URL, "\x67\141\x63\x74\x69\157\x6e" => $this->generate_otp_action));
        wp_enqueue_script("\x6d\157\164\x75\x74\x6f\x72\137\x6c\x6d\163\x5f\162\x65\x67");
    }
    public function tutor_lms_site_registration_errors($errors)
    {
        if (MoUtility::is_blank(array_filter($errors->errors))) {
            goto o5k;
        }
        return $errors;
        o5k:
        if ($this->is_ajax_form) {
            goto P3o;
        }
        return $this->processFormAndSendOTP($errors);
        goto fOA;
        P3o:
        $errors = $this->assertOTPField($errors, $_POST);
        $errors = $this->checkIfOTPWasSent($errors);
        return $this->checkIntegrityAndValidateOTP($_POST, $errors);
        fOA:
    }
    private function assertOTPField($errors, $Mr)
    {
        if (MoUtility::sanitize_check("\x6d\x6f\166\145\162\x69\146\171", $Mr)) {
            goto s3x;
        }
        $errors = new WP_Error("\162\145\147\151\163\164\162\141\x74\x69\x6f\156\55\x65\162\162\157\x72\55\157\164\x70\55\x6e\145\145\144\145\x64", MoMessages::showMessage(MoMessages::REQUIRED_OTP));
        s3x:
        return $errors;
    }
    private function checkIfOTPWasSent($errors)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto STF;
        }
        $errors = new WP_Error("\162\145\x67\x69\163\x74\x72\141\164\x69\157\x6e\55\145\162\x72\x6f\162\55\x6e\145\145\144\x2d\166\141\x6c\x69\144\x61\x74\151\157\x6e", MoMessages::showMessage(MoMessages::PLEASE_VALIDATE));
        STF:
        return $errors;
    }
    private function checkIntegrityAndValidateOTP($GX, WP_Error $errors)
    {
        if (empty($errors->errors)) {
            goto r_U;
        }
        return $errors;
        r_U:
        if (!isset($GX["\165\x73\x65\x72\x5f\160\150\157\156\x65"])) {
            goto MlP;
        }
        $GX["\165\x73\145\162\137\160\150\157\156\145"] = MoUtility::process_phone_number($GX["\165\x73\x65\x72\x5f\x70\x68\157\x6e\x65"]);
        MlP:
        $errors = $this->checkIntegrity($GX, $errors);
        if (empty($errors->errors)) {
            goto NYA;
        }
        return $errors;
        NYA:
        $Bo = $this->get_verification_type();
        $this->validate_challenge($Bo, null, sanitize_text_field($GX["\x6d\x6f\x76\x65\162\x69\x66\x79"]));
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto vYi;
        }
        return new WP_Error("\x72\x65\147\x69\163\164\x72\x61\x74\151\157\156\55\x65\162\162\157\162\x2d\151\156\166\x61\154\151\x64\55\157\x74\160", MoUtility::get_invalid_otp_method());
        goto En9;
        vYi:
        $this->unset_otp_session_variables();
        En9:
        return $errors;
    }
    private function checkIntegrity($GX, WP_Error $errors)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto ZMq;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto Jtl;
        }
        goto X6j;
        ZMq:
        if (Sessionutils::is_phone_verified_match($this->form_session_var, sanitize_text_field($GX["\x75\x73\145\162\x5f\x70\x68\x6f\x6e\x65"]))) {
            goto IA_;
        }
        return new WP_Error("\142\151\154\154\151\156\x67\137\160\x68\x6f\x6e\145\x5f\145\162\x72\157\x72", MoMessages::showMessage(MoMessages::PHONE_MISMATCH));
        IA_:
        goto X6j;
        Jtl:
        if (SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX["\x65\155\141\151\154"]))) {
            goto qjy;
        }
        return new WP_Error("\162\x65\147\x69\x73\x74\162\141\x74\151\x6f\x6e\x2d\x65\x72\x72\157\162\x2d\151\156\166\141\x6c\151\x64\x2d\145\155\141\151\154", MoMessages::showMessage(MoMessages::EMAIL_MISMATCH));
        qjy:
        X6j:
        return $errors;
    }
    private function processFormAndSendOTP(WP_Error $errors)
    {
        $GX = MoUtility::mo_sanitize_array($_POST);
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto lTv;
        }
        $this->unset_otp_session_variables();
        return $errors;
        lTv:
        MoUtility::initialize_transaction($this->form_session_var);
        try {
            $this->assertEmail($GX["\x65\x6d\141\151\154"]);
        } catch (MoException $rZ) {
            return new WP_Error($rZ->getmo_code(), $rZ->getMessage());
        }
        return $errors->get_error_code() ? $errors : $this->processFormFields($errors, $GX);
    }
    private function assertEmail($ZG)
    {
        if (!email_exists($ZG)) {
            goto VUT;
        }
        throw new MoException("\162\145\147\x69\x73\x74\x72\x61\x74\x69\157\156\55\145\x72\x72\157\162\x2d\145\155\141\151\154\x2d\x65\170\151\163\164\163", mo_("\101\156\40\x61\x63\x63\x6f\165\156\164\40\151\x73\40\141\154\x72\x65\x61\144\171\x20\162\145\x67\x69\x73\164\145\162\x65\x64\40\x77\x69\x74\150\x20\x79\157\x75\x72\x20\x65\155\141\151\154\40\141\x64\x64\x72\145\163\x73\x2e\40\x50\x6c\145\x61\x73\145\40\154\157\x67\151\x6e\56"), 203);
        VUT:
    }
    private function processFormFields($errors, $GX)
    {
        global $Hg;
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto nFy;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto YX9;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto ajX;
        }
        goto XiX;
        nFy:
        if (!isset($GX["\x75\x73\x65\162\x5f\x70\150\157\156\x65"]) || !MoUtility::validate_phone_number($GX["\165\163\145\x72\137\x70\x68\x6f\x6e\x65"])) {
            goto Owz;
        }
        if ($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse($GX["\x75\163\145\162\137\x70\x68\157\156\145"], "\x75\163\145\162\x5f\x70\x68\x6f\156\x65")) {
            goto M6G;
        }
        goto L0Z;
        Owz:
        return new WP_Error("\142\x69\x6c\154\x69\x6e\147\137\x70\x68\x6f\x6e\x65\x5f\x65\162\162\x6f\162", str_replace("\x23\43\160\150\157\x6e\x65\43\43", $GX["\165\x73\145\x72\137\x70\150\157\x6e\x65"], $Hg->get_otp_invalid_format_message()));
        goto L0Z;
        M6G:
        return new WP_Error("\x62\151\x6c\154\151\x6e\147\x5f\160\x68\157\156\x65\137\145\162\162\157\x72", MoMessages::showMessage(MoMessages::PHONE_EXISTS));
        L0Z:
        $this->send_challenge(null, null, $errors, $GX["\165\x73\145\162\137\x70\x68\157\x6e\x65"], VerificationType::PHONE);
        goto XiX;
        YX9:
        $this->send_challenge(null, $GX["\x65\x6d\141\151\154"], $errors, null, VerificationType::EMAIL);
        goto XiX;
        ajX:
        if (!isset($GX["\x75\163\145\x72\137\x70\150\x6f\x6e\x65"]) || !MoUtility::validate_phone_number($GX["\165\x73\145\162\x5f\160\x68\157\x6e\x65"])) {
            goto ROd;
        }
        if ($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse($GX["\165\163\x65\162\x5f\x70\x68\x6f\x6e\145"], "\x75\163\145\162\x5f\x70\150\157\156\145")) {
            goto ze1;
        }
        goto ElB;
        ROd:
        return new WP_Error("\142\151\x6c\x6c\x69\156\147\137\160\x68\x6f\x6e\x65\x5f\145\162\x72\157\162", str_replace("\x23\43\160\x68\157\156\145\x23\x23", sanitize_text_field($GX["\165\163\x65\x72\x5f\160\x68\157\156\x65"]), $Hg->get_otp_invalid_format_message()));
        goto ElB;
        ze1:
        return new WP_Error("\x62\151\x6c\154\151\x6e\x67\x5f\160\150\x6f\x6e\x65\137\x65\x72\x72\157\162", MoMessages::showMessage(MoMessages::PHONE_EXISTS));
        ElB:
        $this->send_challenge($GX["\165\163\145\x72\x5f\x6c\x6f\x67\x69\x6e"], $GX["\x65\155\141\x69\154"], $errors, $GX["\x75\x73\145\162\x5f\x70\x68\157\156\x65"], VerificationType::BOTH);
        XiX:
        return $errors;
    }
    public function register_tutor_lms_user($Uv)
    {
        global $wpdb;
        if (!isset($_POST["\165\163\x65\x72\137\160\150\x6f\156\145"])) {
            goto UzC;
        }
        $M9 = MoUtility::sanitize_check("\165\x73\145\162\x5f\x70\150\157\x6e\145", $_POST);
        update_user_meta($Uv, "\165\163\x65\x72\137\160\x68\x6f\x6e\x65", MoUtility::process_phone_number($M9));
        UzC:
    }
    public function mo_add_verification_field()
    {
        echo "\74\x64\x69\x76\x20\x63\x6c\141\163\x73\75\42\x74\165\x74\x6f\162\x2d\146\x6f\162\155\x2d\x72\157\x77\x22\x3e\15\12\x9\11\x9\11\11\74\x64\151\166\x20\143\x6c\x61\x73\x73\x3d\x22\164\x75\x74\157\x72\x2d\x66\157\162\x6d\55\x63\157\154\55\x36\42\76\15\xa\x9\x9\x9\x9\x9\x9\74\x64\x69\x76\x20\143\154\141\x73\163\75\x22\164\x75\x74\157\x72\55\146\x6f\x72\155\x2d\147\162\157\x75\x70\42\76\xd\xa\11\11\x9\11\x9\11\11\74\x6c\141\142\145\154\x20\146\157\162\x3d\42\155\157\137\151\156\x73\x5f\x72\x65\147\x5f\x76\145\162\x69\146\x69\143\x61\x74\x69\x6f\x6e\137\146\x69\145\154\x64\42\x3e\15\12\x9\11\11\11\x9\x9\11\11" . esc_html(mo_("\x45\x6e\x74\145\x72\x20\103\x6f\144\x65")) . "\xd\xa\11\x9\x9\x9\11\11\x9\11\x3c\163\x70\x61\x6e\x20\143\154\x61\x73\x73\75\x22\x72\145\x71\x75\151\162\x65\x64\42\76\52\x3c\57\163\160\141\x6e\x3e\xd\12\11\11\x9\x9\11\11\11\x3c\57\154\141\142\145\154\76\xd\xa\11\x9\x9\11\x9\11\x9\x3c\151\x6e\160\165\164\x20\164\171\160\x65\75\x22\164\x65\x78\x74\x22\x20\x63\154\141\163\x73\x3d\42\x69\x6e\160\165\164\x2d\164\145\x78\164\x22\x20\x6e\141\155\145\x3d\x22\155\x6f\166\x65\x72\x69\x66\171\x22\40\xd\12\x9\x9\11\11\x9\11\11\x9\11\x69\x64\x3d\x22\x6d\x6f\x5f\x69\156\x73\x5f\162\145\x67\x5f\166\145\162\151\146\151\143\141\x74\151\157\156\137\x66\151\x65\x6c\144\x22\40\15\12\x9\11\x9\x9\11\11\11\x9\x9\166\141\x6c\165\145\x3d\42\x22\x20\x2f\x3e\15\12\x9\x9\x9\11\x9\11\74\x2f\x64\151\166\76\15\xa\x9\x9\11\x9\11\74\57\x64\151\x76\76\15\12\11\11\x9\x9\x3c\57\144\151\166\76";
    }
    public function mo_add_phone_field()
    {
        echo "\74\144\x69\166\x20\143\x6c\141\x73\163\x3d\42\164\165\164\x6f\x72\55\x66\x6f\x72\155\55\162\157\x77\x22\x3e\15\12\x9\11\11\x9\x9\x3c\x64\x69\166\40\x63\154\x61\163\x73\x3d\42\x74\165\x74\x6f\162\55\x66\x6f\x72\x6d\x2d\x63\157\154\x2d\66\42\x3e\xd\xa\x9\11\11\11\x9\x9\x3c\x64\x69\166\x20\x63\x6c\141\x73\x73\75\x22\x74\165\x74\157\x72\55\146\157\x72\x6d\x2d\143\x6f\x6c\x2d\66\x22\x3e\15\12\x9\11\11\x9\11\11\x9\74\154\x61\x62\145\154\76" . esc_html(mo_("\120\150\x6f\x6e\x65\40\x4e\x75\155\x62\x65\x72")) . "\x3c\x2f\154\x61\x62\x65\x6c\76\x20\15\xa\11\11\11\11\x9\11\x9\74\x69\x6e\160\165\164\x20\164\x79\160\145\75\x22\x74\145\x78\x74\x22\x20\156\x61\x6d\145\75\x22\x75\163\145\x72\x5f\160\x68\157\x6e\145\42\x20\166\141\x6c\165\x65\75\x22\42\40\151\x64\x3d\x22\137\155\x6f\160\x68\157\156\x65\x66\x69\x65\154\x64\42\x20\76\15\xa\x9\x9\11\x9\11\x9\74\57\x64\151\x76\76\15\xa\11\11\x9\x9\x9\x3c\x2f\144\x69\x76\x3e\xd\xa\11\11\40\40\40\x3c\x2f\x64\151\x76\76";
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if ($this->is_ajax_form) {
            goto vWy;
        }
        $Bo = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Bo ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Bo, $Df);
        goto dMr;
        vWy:
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
        dMr:
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
            goto AyK;
        }
        array_push($MI, $this->phone_form_id);
        AyK:
        return $MI;
    }
    private function isPhoneNumberAlreadyInUse($M9, $a6)
    {
        global $wpdb;
        MoUtility::process_phone_number($M9);
        $lR = $wpdb->get_row($wpdb->prepare("\x53\x45\114\105\103\124\40\140\x75\163\145\x72\137\151\x64\140\40\106\122\x4f\x4d\x20\140{$wpdb->prefix}\165\x73\145\x72\155\145\164\x61\x60\40\127\110\x45\x52\x45\40\140\155\x65\164\x61\137\x6b\x65\171\x60\40\75\40\x25\x73\x20\x41\116\x44\x20\140\x6d\145\164\x61\137\166\141\154\x75\x65\x60\x20\x3d\40\x20\x25\163", array($a6, $M9)));
        return !MoUtility::is_blank($lR);
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto yW2;
        }
        return;
        yW2:
        $this->is_form_enabled = $this->sanitize_form_post("\x74\165\164\157\162\137\154\155\163\x5f\144\x65\x66\x61\165\x6c\164\137\145\156\x61\142\x6c\x65");
        $this->otp_type = $this->sanitize_form_post("\164\165\x74\x6f\162\x5f\x6c\x6d\x73\x5f\145\156\x61\142\x6c\x65\x5f\x74\171\160\145");
        $this->restrict_duplicates = $this->sanitize_form_post("\x74\x75\164\x6f\x72\137\x6c\x6d\163\137\x72\x65\x73\164\x72\151\x63\164\x5f\144\165\x70\x6c\151\x63\x61\164\x65\x73");
        $this->is_ajax_form = $this->sanitize_form_post("\x74\x75\164\157\x72\x5f\x6c\x6d\x73\137\151\163\x5f\x61\x6a\x61\170\137\146\x6f\162\155");
        $this->button_text = $this->sanitize_form_post("\164\165\x74\x6f\162\137\154\155\163\137\142\165\x74\x74\157\156\x5f\x74\145\x78\164");
        update_mo_option("\164\x75\164\157\x72\137\154\155\163\137\144\x65\x66\141\165\x6c\164\137\x65\x6e\x61\142\x6c\145", $this->is_form_enabled);
        update_mo_option("\x74\165\x74\157\x72\x5f\154\155\163\x5f\145\156\x61\142\154\145\x5f\x74\171\x70\145", $this->otp_type);
        update_mo_option("\164\165\164\x6f\162\x5f\154\x6d\163\x5f\x72\x65\x73\164\162\x69\143\164\x5f\144\165\160\x6c\151\x63\141\x74\x65\163", $this->restrict_duplicates);
        update_mo_option("\164\165\x74\x6f\x72\137\x6c\x6d\163\137\151\x73\137\141\152\x61\170\137\146\x6f\162\155", $this->is_ajax_form);
        update_mo_option("\x74\x75\x74\x6f\162\x5f\x6c\x6d\x73\137\142\165\x74\164\x6f\156\x5f\x74\x65\x78\164", $this->button_text);
    }
}
mw8:
