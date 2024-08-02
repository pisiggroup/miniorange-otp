<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\123\x50\x41\x54\110")) {
    goto Zdu;
}
exit;
Zdu:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoException;
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
if (class_exists("\127\157\x6f\103\x6f\x6d\x6d\145\162\143\x65\122\145\x67\x69\x73\x74\162\x61\x74\x69\x6f\156\106\157\162\x6d")) {
    goto IWu;
}
class WooCommerceRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    private $redirect_to_page;
    private $redirect_after_registration;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->form_session_var = FormSessionVars::WC_DEFAULT_REG;
        $this->type_phone_tag = "\x6d\x6f\137\167\143\137\160\x68\157\156\x65\137\x65\156\141\x62\x6c\145";
        $this->type_email_tag = "\155\157\137\167\x63\x5f\x65\155\141\151\x6c\137\145\x6e\141\x62\154\x65";
        $this->type_both_tag = "\x6d\157\137\x77\x63\x5f\x62\x6f\164\x68\137\145\156\141\x62\154\145";
        $this->phone_form_id = "\43\162\x65\147\x5f\x62\151\x6c\x6c\151\x6e\147\137\x70\150\157\156\145";
        $this->form_key = "\x57\x43\x5f\x52\105\x47\x5f\106\117\122\115";
        $this->form_name = mo_("\x57\x6f\157\143\x6f\155\x6d\145\x72\x63\x65\40\x52\x65\x67\151\x73\164\x72\x61\x74\x69\x6f\x6e\x20\106\157\x72\x6d");
        $this->is_form_enabled = get_mo_option("\167\x63\x5f\x64\145\x66\x61\165\154\x74\x5f\x65\156\141\x62\154\145");
        $this->button_text = get_mo_option("\x77\x63\x5f\x62\165\x74\164\157\156\137\164\x65\x78\164");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\x43\154\x69\x63\153\40\110\145\162\145\x20\164\157\40\163\145\156\x64\40\117\124\120");
        $this->form_documents = MoFormDocs::WC_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->is_ajax_form = get_mo_option("\x77\143\x5f\x69\x73\137\x61\x6a\x61\x78\137\146\157\162\x6d");
        $this->otp_type = get_mo_option("\x77\x63\137\x65\x6e\141\142\x6c\x65\137\164\171\160\x65");
        $this->redirect_to_page = get_mo_option("\167\143\137\162\x65\144\x69\x72\x65\143\164");
        $this->redirect_after_registration = get_mo_option("\167\143\162\145\147\137\x72\x65\x64\x69\x72\145\143\x74\x5f\x61\146\164\x65\162\x5f\162\x65\147\151\163\164\162\141\x74\x69\x6f\156");
        $this->restrict_duplicates = get_mo_option("\167\x63\x5f\x72\x65\x73\x74\x72\151\143\164\x5f\x64\165\x70\154\151\x63\141\x74\x65\163");
        add_filter("\167\157\157\x63\x6f\155\x6d\145\x72\x63\x65\137\x70\x72\x6f\143\145\163\x73\x5f\x72\145\x67\x69\x73\x74\x72\x61\x74\151\x6f\x6e\x5f\x65\x72\162\157\x72\163", array($this, "\167\157\x6f\143\x6f\x6d\155\145\x72\x63\145\137\163\x69\x74\145\137\x72\145\147\151\163\x74\x72\141\x74\151\157\x6e\x5f\x65\162\162\157\162\163"), 99, 4);
        add_action("\x77\x6f\157\143\157\155\155\145\162\x63\x65\x5f\x63\x72\145\x61\x74\145\144\x5f\x63\165\x73\164\157\x6d\145\162", array($this, "\x72\145\147\x69\x73\x74\145\x72\137\167\x6f\157\143\157\155\x6d\x65\162\x63\x65\x5f\x75\x73\145\x72"), 1, 3);
        add_filter("\x77\x6f\157\143\157\155\x6d\145\x72\143\145\x5f\162\145\147\x69\163\x74\x72\x61\164\151\x6f\x6e\137\x72\145\144\151\162\145\x63\x74", array($this, "\x63\x75\x73\164\157\x6d\137\162\x65\147\x69\x73\164\x72\x61\x74\x69\157\x6e\137\162\145\144\x69\162\145\x63\164"), 99, 1);
        if (!$this->isPhoneVerificationEnabled()) {
            goto jaY;
        }
        add_action("\167\157\x6f\x63\157\155\155\145\x72\143\x65\137\x72\145\147\x69\x73\164\145\162\137\x66\x6f\x72\155", array($this, "\155\x6f\137\141\144\x64\x5f\x70\x68\157\x6e\x65\137\146\x69\145\154\144"), 1);
        add_action("\x77\143\x6d\160\x5f\166\x65\156\x64\x6f\162\137\x72\x65\147\151\x73\164\145\162\137\x66\x6f\162\155", array($this, "\155\x6f\137\x61\144\x64\137\160\150\x6f\x6e\145\x5f\x66\151\x65\x6c\x64"), 1);
        jaY:
        if (!($this->is_ajax_form && $this->otp_type !== $this->type_both_tag)) {
            goto jQp;
        }
        add_action("\167\157\157\143\x6f\155\x6d\145\x72\x63\x65\137\162\145\147\x69\163\164\x65\162\137\146\x6f\x72\155", array($this, "\155\157\x5f\x61\x64\144\x5f\166\x65\x72\x69\x66\151\143\141\164\151\x6f\156\137\x66\x69\145\154\144"), 1);
        add_action("\x77\143\155\x70\x5f\166\x65\x6e\144\x6f\162\x5f\x72\x65\147\x69\163\164\x65\x72\137\146\157\162\155", array($this, "\155\157\x5f\x61\x64\x64\137\166\145\162\151\x66\x69\x63\141\164\151\157\156\x5f\146\151\145\x6c\x64"), 1);
        add_action("\167\x70\x5f\145\156\161\165\x65\x75\145\x5f\x73\x63\162\x69\160\164\163", array($this, "\155\151\x6e\151\x6f\x72\141\156\x67\145\x5f\x72\x65\147\151\x73\164\x65\162\x5f\x77\x63\x5f\x73\x63\162\x69\x70\x74"));
        $this->routeData();
        jQp:
    }
    private function routeData()
    {
        if (array_key_exists("\x6d\x6f\x5f\x77\x63\x72\145\147\x5f\157\x70\164\151\157\x6e", $_GET)) {
            goto T7Q;
        }
        return;
        T7Q:
        if (check_ajax_referer($this->nonce, "\163\145\143\165\x72\151\x74\x79", false)) {
            goto h8j;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        h8j:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $xq = isset($_GET["\155\157\137\167\143\x72\x65\x67\137\157\160\164\151\x6f\156"]) ? sanitize_text_field(wp_unslash($_GET["\155\x6f\x5f\167\x63\x72\145\x67\x5f\x6f\x70\164\x69\157\156"])) : '';
        switch (trim($xq)) {
            case "\155\151\156\151\157\x72\141\x6e\147\145\x2d\167\x63\x2d\162\145\147\55\166\145\x72\151\146\171":
                $this->sendAjaxOTPRequest($GX);
                goto O4o;
        }
        g2t:
        O4o:
    }
    private function sendAjaxOTPRequest($GX)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        $WB = MoUtility::sanitize_check("\165\x73\145\162\137\160\150\157\156\145", $GX);
        $Wb = MoUtility::sanitize_check("\165\x73\x65\162\137\x65\155\141\151\x6c", $GX);
        if ($this->otp_type === $this->type_phone_tag) {
            goto fHq;
        }
        SessionUtils::add_email_verified($this->form_session_var, $Wb);
        goto liE;
        fHq:
        SessionUtils::add_phone_verified($this->form_session_var, MoUtility::process_phone_number($WB));
        liE:
        $kS = $this->processFormFields(null, $Wb, new WP_Error(), null, $WB, $GX);
        if (!$kS->get_error_code()) {
            goto Hzj;
        }
        wp_send_json(MoUtility::create_json($kS->get_error_message(), MoConstants::ERROR_JSON_TYPE));
        Hzj:
    }
    public function miniorange_register_wc_script()
    {
        wp_register_script("\155\157\x77\143\x72\x65\x67", MOV_URL . "\x69\x6e\143\x6c\x75\144\x65\163\x2f\x6a\x73\57\167\143\162\145\147\x2e\155\x69\x6e\x2e\x6a\163", array("\152\161\x75\145\162\x79"), MOV_VERSION, true);
        wp_localize_script("\155\x6f\167\x63\x72\x65\147", "\x6d\157\x77\143\x72\x65\x67", array("\x73\x69\x74\145\x55\x52\114" => site_url(), "\157\x74\x70\x54\171\160\145" => $this->otp_type, "\x6e\x6f\x6e\143\x65" => wp_create_nonce($this->nonce), "\142\x75\164\164\x6f\x6e\x74\x65\x78\164" => mo_($this->button_text), "\x66\x69\145\x6c\144" => $this->otp_type === $this->type_phone_tag ? "\x72\145\x67\137\142\x69\154\x6c\151\x6e\147\x5f\x70\x68\x6f\x6e\145" : "\x72\145\x67\x5f\145\x6d\141\151\154", "\151\155\x67\x55\x52\x4c" => MOV_LOADER_URL));
        wp_enqueue_script("\x6d\157\167\x63\x72\145\147");
    }
    public function custom_registration_redirect($eQ)
    {
        if (!($this->redirect_after_registration && get_mo_option("\167\143\x5f\144\145\146\141\165\154\x74\x5f\145\x6e\141\x62\x6c\x65"))) {
            goto UQu;
        }
        return get_permalink(get_posts(array("\164\x69\x74\154\x65" => $this->redirect_to_page, "\x70\157\x73\x74\x5f\x74\171\160\145" => "\160\x61\147\145"))[0]->ID);
        UQu:
        return $eQ;
    }
    private function isPhoneVerificationEnabled()
    {
        $Vw = $this->get_verification_type();
        return VerificationType::BOTH === $Vw || VerificationType::PHONE === $Vw;
    }
    public function woocommerce_site_registration_errors(WP_Error $errors, $JG, $L8, $ZG)
    {
        if (MoUtility::is_blank(array_filter($errors->errors))) {
            goto jov;
        }
        return $errors;
        jov:
        if ($this->is_ajax_form) {
            goto tPB;
        }
        return $this->processFormAndSendOTP($JG, $L8, $ZG, $errors);
        goto UlW;
        tPB:
        $this->assertOTPField($errors, $_POST);
        $this->checkIfOTPWasSent($errors);
        return $this->checkIntegrityAndValidateOTP($_POST, $errors);
        UlW:
    }
    private function assertOTPField(&$errors, $Mr)
    {
        if (MoUtility::sanitize_check("\x6d\157\x76\145\x72\151\146\171", $Mr)) {
            goto thU;
        }
        $errors = new WP_Error("\x72\145\147\x69\x73\x74\162\141\x74\151\157\x6e\x2d\x65\162\x72\157\x72\x2d\x6f\x74\160\55\x6e\x65\145\x64\x65\x64", MoMessages::showMessage(MoMessages::REQUIRED_OTP));
        thU:
    }
    private function checkIfOTPWasSent(&$errors)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto Cqn;
        }
        $errors = new WP_Error("\x72\145\x67\151\x73\x74\x72\x61\164\x69\157\156\55\x65\162\162\157\x72\x2d\x6e\x65\145\144\55\x76\141\x6c\x69\144\141\164\x69\x6f\x6e", MoMessages::showMessage(MoMessages::PLEASE_VALIDATE));
        Cqn:
    }
    private function checkIntegrityAndValidateOTP($GX, WP_Error $errors)
    {
        if (empty($errors->errors)) {
            goto yxF;
        }
        return $errors;
        yxF:
        if (!isset($GX["\x62\x69\154\x6c\151\156\147\137\160\x68\157\x6e\145"])) {
            goto yR9;
        }
        $GX["\x62\x69\x6c\154\x69\x6e\x67\137\160\150\x6f\156\x65"] = MoUtility::process_phone_number($GX["\142\x69\x6c\x6c\x69\156\147\137\160\x68\x6f\x6e\145"]);
        yR9:
        $errors = $this->checkIntegrity($GX, $errors);
        if (empty($errors->errors)) {
            goto yKx;
        }
        return $errors;
        yKx:
        $Vw = $this->get_verification_type();
        $this->validate_challenge($Vw, null, sanitize_text_field($GX["\x6d\x6f\166\145\x72\151\x66\x79"]));
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Vw)) {
            goto NIN;
        }
        return new WP_Error("\x72\145\147\x69\x73\164\x72\141\x74\151\x6f\156\x2d\x65\162\162\157\x72\x2d\x69\x6e\166\141\154\151\144\55\157\164\160", MoUtility::get_invalid_otp_method());
        goto r6T;
        NIN:
        $this->unset_otp_session_variables();
        r6T:
        return $errors;
    }
    private function checkIntegrity($GX, WP_Error $errors)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto QKe;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto etT;
        }
        goto qhZ;
        QKe:
        if (Sessionutils::is_phone_verified_match($this->form_session_var, sanitize_text_field($GX["\142\x69\154\x6c\x69\156\147\137\x70\150\157\x6e\145"]))) {
            goto YUH;
        }
        return new WP_Error("\x62\x69\154\154\x69\156\147\137\160\150\x6f\156\145\137\145\x72\x72\157\x72", MoMessages::showMessage(MoMessages::PHONE_MISMATCH));
        YUH:
        goto qhZ;
        etT:
        if (SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX["\x65\x6d\141\151\154"]))) {
            goto VpR;
        }
        return new WP_Error("\162\145\147\x69\x73\x74\x72\141\x74\151\157\156\55\x65\x72\162\x6f\162\55\151\x6e\166\x61\154\x69\x64\x2d\x65\155\141\151\x6c", MoMessages::showMessage(MoMessages::EMAIL_MISMATCH));
        VpR:
        qhZ:
        return $errors;
    }
    private function processFormAndSendOTP($JG, $L8, $ZG, WP_Error $errors)
    {
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto H7N;
        }
        $this->unset_otp_session_variables();
        return $errors;
        H7N:
        $bV = isset($_POST["\x62\151\154\154\151\156\x67\137\x70\x68\157\156\145"]) ? sanitize_text_field(wp_unslash($_POST["\142\x69\x6c\x6c\151\x6e\147\137\160\x68\x6f\156\145"])) : '';
        MoUtility::initialize_transaction($this->form_session_var);
        try {
            $this->assertUserName($JG);
            $this->assertPassword($L8);
            $this->assertEmail($ZG);
        } catch (MoException $rZ) {
            return new WP_Error($rZ->getmo_code(), $rZ->getMessage());
        }
        do_action("\x77\157\x6f\143\157\155\x6d\145\x72\x63\x65\x5f\x72\x65\x67\x69\x73\x74\x65\162\137\160\157\x73\164", $JG, $ZG, $errors);
        $GX = MoUtility::mo_sanitize_array($_POST);
        return $errors->get_error_code() ? $errors : $this->processFormFields($JG, $ZG, $errors, $L8, $bV, $GX);
    }
    private function assertPassword($L8)
    {
        if (!(get_mo_option("\167\157\157\x63\x6f\155\x6d\145\162\x63\x65\137\162\x65\147\151\163\164\162\x61\x74\151\157\156\137\147\x65\x6e\x65\x72\141\164\x65\x5f\160\x61\163\x73\x77\x6f\x72\x64", '') === "\x6e\157")) {
            goto J19;
        }
        if (!MoUtility::is_blank($L8)) {
            goto zJ5;
        }
        throw new MoException("\162\145\147\151\163\x74\162\x61\164\x69\x6f\156\x2d\x65\x72\162\157\x72\x2d\x69\156\x76\x61\154\151\x64\x2d\x70\141\x73\x73\167\x6f\162\144", mo_("\120\154\145\141\x73\x65\x20\x65\156\164\x65\x72\40\141\x20\166\x61\x6c\151\144\40\x61\x63\x63\x6f\x75\x6e\x74\x20\160\x61\x73\163\167\x6f\x72\x64\56"), 204);
        zJ5:
        J19:
    }
    private function assertEmail($ZG)
    {
        if (!(MoUtility::is_blank($ZG) || !is_email($ZG))) {
            goto u5y;
        }
        throw new MoException("\x72\145\147\151\x73\x74\162\141\164\x69\157\156\x2d\x65\162\162\157\x72\x2d\x69\156\166\141\x6c\151\x64\x2d\x65\155\141\x69\154", mo_("\120\x6c\x65\141\163\x65\40\145\156\x74\145\162\40\x61\x20\166\x61\x6c\x69\x64\x20\x65\155\x61\x69\154\x20\x61\144\x64\x72\x65\x73\163\56"), 202);
        u5y:
        if (!email_exists($ZG)) {
            goto IKr;
        }
        throw new MoException("\162\x65\147\x69\163\164\x72\141\x74\151\x6f\x6e\x2d\x65\x72\162\157\162\55\145\155\x61\x69\x6c\x2d\x65\x78\151\163\164\163", mo_("\101\x6e\40\x61\143\x63\x6f\165\x6e\164\40\x69\x73\x20\141\x6c\162\x65\x61\144\x79\x20\x72\x65\x67\151\163\164\x65\162\x65\x64\x20\167\151\164\x68\40\x79\157\x75\162\x20\x65\155\141\x69\x6c\40\141\x64\144\162\145\x73\163\x2e\40\120\154\145\x61\x73\145\40\154\157\x67\x69\156\x2e"), 203);
        IKr:
    }
    private function assertUserName($JG)
    {
        if (!(get_mo_option("\167\x6f\x6f\x63\x6f\x6d\x6d\145\x72\x63\145\x5f\162\x65\147\x69\163\x74\x72\x61\x74\x69\157\x6e\137\147\x65\156\x65\162\x61\164\145\137\165\163\145\x72\x6e\x61\x6d\145", '') === "\x6e\157")) {
            goto lGp;
        }
        if (!(MoUtility::is_blank($JG) || !validate_username($JG))) {
            goto weZ;
        }
        throw new MoException("\x72\x65\147\151\x73\164\x72\141\164\x69\157\x6e\55\x65\x72\162\157\162\55\151\x6e\166\x61\154\151\x64\55\165\x73\x65\x72\x6e\141\x6d\x65", mo_("\120\154\145\141\163\x65\40\145\x6e\x74\145\x72\x20\x61\x20\x76\141\154\151\x64\x20\x61\x63\143\x6f\165\x6e\164\40\165\x73\x65\162\156\x61\x6d\x65\56"), 200);
        weZ:
        if (!username_exists($JG)) {
            goto YAL;
        }
        throw new MoException("\162\145\x67\151\163\x74\x72\x61\x74\151\157\x6e\x2d\x65\x72\162\x6f\x72\55\x75\163\145\x72\x6e\x61\155\145\55\x65\170\151\163\164\x73", mo_("\101\156\40\x61\143\143\157\165\x6e\x74\x20\151\163\40\x61\154\162\145\x61\144\x79\40\162\145\147\151\163\164\145\162\x65\x64\x20\x77\151\164\150\x20\x74\150\141\164\x20\x75\163\145\162\x6e\141\x6d\145\56\40\120\154\145\x61\163\145\40\x63\150\x6f\157\x73\x65\40\141\156\x6f\x74\150\145\162\x2e"), 201);
        YAL:
        lGp:
    }
    private function processFormFields($JG, $ZG, $errors, $L8, $M9, $GX)
    {
        global $Hg;
        $bV = isset($GX["\x62\x69\x6c\154\x69\x6e\x67\x5f\160\x68\x6f\156\145"]) ? sanitize_text_field(wp_unslash($GX["\x62\151\154\x6c\x69\x6e\147\137\x70\x68\157\x6e\x65"])) : '';
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto qV_;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto eA8;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto C_M;
        }
        goto kGA;
        qV_:
        if (!isset($M9) || !MoUtility::validate_phone_number($M9)) {
            goto Etp;
        }
        if ($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse($M9, "\142\x69\154\154\x69\x6e\x67\137\x70\150\x6f\156\x65")) {
            goto Fiy;
        }
        goto ftR;
        Etp:
        return new WP_Error("\142\151\154\x6c\151\156\147\x5f\x70\150\x6f\156\x65\x5f\x65\162\x72\157\162", str_replace("\x23\x23\160\x68\157\156\x65\43\x23", $M9, $Hg->get_otp_invalid_format_message()));
        goto ftR;
        Fiy:
        return new WP_Error("\142\x69\154\154\151\x6e\147\137\160\150\x6f\156\x65\137\x65\x72\x72\157\162", MoMessages::showMessage(MoMessages::PHONE_EXISTS));
        ftR:
        $this->send_challenge($JG, $ZG, $errors, $M9, VerificationType::PHONE, $L8);
        goto kGA;
        eA8:
        $M9 = isset($M9) ? $M9 : '';
        $this->send_challenge($JG, $ZG, $errors, $M9, VerificationType::EMAIL, $L8);
        goto kGA;
        C_M:
        if (!isset($M9) || !MoUtility::validate_phone_number($M9)) {
            goto CIG;
        }
        if ($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse($M9, "\x62\x69\154\154\x69\x6e\147\137\x70\150\157\156\x65")) {
            goto uQE;
        }
        goto Kii;
        CIG:
        return new WP_Error("\142\x69\x6c\154\x69\x6e\x67\x5f\x70\x68\x6f\x6e\145\x5f\145\162\162\157\162", str_replace("\43\43\160\150\x6f\156\x65\x23\43", $bV, $Hg->get_otp_invalid_format_message()));
        goto Kii;
        uQE:
        return new WP_Error("\142\x69\x6c\154\151\x6e\x67\x5f\160\150\x6f\x6e\145\x5f\x65\x72\x72\x6f\x72", MoMessages::showMessage(MoMessages::PHONE_EXISTS));
        Kii:
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::BOTH, $L8);
        kGA:
        return $errors;
    }
    public function register_woocommerce_user($F_, $hh, $i2)
    {
        if (!isset($_POST["\142\151\x6c\x6c\x69\156\147\x5f\160\150\157\156\145"])) {
            goto YDr;
        }
        $M9 = MoUtility::sanitize_check("\x62\x69\x6c\154\151\156\x67\137\160\150\x6f\x6e\x65", $_POST);
        update_user_meta($F_, "\142\x69\154\x6c\x69\x6e\x67\137\160\150\157\156\x65", MoUtility::process_phone_number($M9));
        YDr:
    }
    public function mo_add_phone_field()
    {
        if (!(!did_action("\x77\157\x6f\143\157\155\x6d\x65\x72\143\x65\x5f\x72\145\x67\x69\x73\164\145\162\137\x66\157\162\x6d") || !did_action("\x77\143\155\160\137\x76\145\x6e\x64\157\x72\x5f\162\145\x67\x69\163\x74\x65\x72\137\x66\x6f\162\155"))) {
            goto Izs;
        }
        echo "\x3c\160\x20\143\154\141\163\x73\x3d\42\x66\157\162\155\x2d\x72\157\x77\40\146\157\x72\x6d\55\162\x6f\167\55\x77\151\144\x65\x22\x3e\15\xa\40\x20\40\x20\x20\40\40\40\40\40\x20\40\40\x20\40\40\x3c\154\x61\x62\x65\154\x20\x66\157\x72\x3d\42\x72\145\147\x5f\x62\151\154\154\151\x6e\147\x5f\x70\x68\x6f\156\x65\x22\x3e\15\xa\x20\40\40\40\40\40\40\40\40\x20\x20\x20\40\40\x20\40\40\40\40\x20" . esc_html(mo_("\120\x68\x6f\156\145")) . "\xd\xa\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\x20\x20\40\x20\40\40\40\40\74\163\x70\x61\156\40\143\x6c\x61\163\163\75\42\162\145\x71\x75\x69\162\x65\x64\42\76\x2a\74\57\x73\x70\x61\x6e\x3e\xd\xa\x20\40\x20\x20\x20\40\40\x20\40\40\40\40\40\40\x20\x20\x3c\x2f\x6c\x61\142\x65\x6c\x3e\15\12\40\x20\40\40\x20\40\40\40\x20\40\x20\x20\x20\40\40\x20\x3c\151\x6e\x70\165\164\x20\x74\171\x70\145\x3d\42\164\145\x78\164\x22\40\x63\x6c\x61\x73\163\x3d\x22\151\156\x70\165\164\55\x74\x65\x78\x74\42\x20\xd\xa\40\x20\40\40\40\40\x20\x20\x20\x20\40\x20\x20\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\x6e\x61\x6d\x65\75\42\x62\x69\154\x6c\x69\156\x67\x5f\160\150\x6f\156\145\42\40\151\144\75\x22\162\145\x67\137\x62\151\x6c\x6c\151\156\147\137\160\x68\x6f\156\x65\42\x20\15\12\x20\40\x20\40\x20\x20\40\40\x20\x20\40\40\40\40\40\40\40\40\x20\x20\x20\40\40\40\166\141\x6c\x75\145\75\42" . (isset($_POST["\x62\x69\154\x6c\151\156\x67\137\x70\x68\157\x6e\x65"]) ? esc_attr(sanitize_text_field(wp_unslash($_POST["\x62\x69\154\x6c\x69\156\147\137\160\150\x6f\x6e\145"]))) : '') . "\42\x20\x2f\76\74\57\x70\x3e";
        Izs:
    }
    public function mo_add_verification_field()
    {
        if (!(!did_action("\167\x6f\x6f\143\157\155\155\x65\x72\143\x65\x5f\x72\145\x67\x69\163\x74\145\162\x5f\x66\x6f\x72\x6d") || !did_action("\x77\x63\x6d\x70\x5f\x76\145\x6e\x64\157\x72\137\x72\145\147\x69\x73\164\145\162\x5f\x66\x6f\162\x6d"))) {
            goto sbx;
        }
        echo "\74\160\40\143\x6c\141\x73\x73\75\42\146\157\x72\x6d\55\162\x6f\x77\40\x66\157\162\x6d\x2d\162\157\x77\x2d\167\151\x64\x65\42\x3e\15\12\x20\x20\40\x20\x20\x20\40\x20\40\40\40\x20\x20\x20\40\x20\74\x6c\x61\x62\145\x6c\40\x66\157\x72\x3d\x22\162\x65\147\x5f\166\145\162\x69\x66\x69\x63\x61\164\x69\157\156\x5f\160\x68\157\156\145\x22\76\xd\xa\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\x20\40\40\x20" . esc_html(mo_("\x45\x6e\x74\145\162\x20\x43\157\144\x65")) . "\xd\xa\x20\40\40\x20\40\40\x20\x20\x20\x20\40\40\40\x20\x20\40\40\x20\40\40\74\x73\x70\141\156\40\143\154\x61\163\163\x3d\42\162\145\x71\165\x69\162\x65\144\42\76\52\74\57\163\x70\141\x6e\x3e\15\12\x20\x20\40\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\x20\40\x3c\x2f\154\141\x62\x65\154\x3e\15\xa\40\40\x20\40\40\40\40\40\40\40\x20\x20\x20\x20\40\x20\74\x69\x6e\160\165\x74\40\x74\171\x70\145\x3d\x22\164\145\170\x74\42\x20\x63\154\x61\163\163\75\x22\151\156\x70\x75\164\x2d\164\x65\x78\x74\42\40\156\141\x6d\x65\x3d\x22\155\157\x76\x65\x72\x69\146\171\42\x20\15\12\x20\40\x20\x20\40\x20\40\40\x20\40\40\40\40\40\x20\x20\40\x20\40\x20\x20\40\x20\40\151\x64\75\42\162\x65\147\137\x76\x65\162\151\x66\151\x63\141\164\x69\x6f\156\x5f\x66\151\145\154\144\x22\40\xd\12\40\x20\40\40\40\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\x20\40\x20\40\40\x76\141\x6c\x75\x65\75\42\42\40\57\76\xd\xa\40\40\40\x20\x20\40\40\x20\40\40\40\x20\40\40\x3c\x2f\160\x3e";
        sbx:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if ($this->is_ajax_form) {
            goto aJI;
        }
        $Vw = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Vw ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Vw, $Df);
        goto RvQ;
        aJI:
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
        RvQ:
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
            goto pQm;
        }
        array_push($MI, $this->phone_form_id);
        pQm:
        return $MI;
    }
    private function isPhoneNumberAlreadyInUse($M9, $a6)
    {
        global $wpdb;
        $M9 = MoUtility::process_phone_number($M9);
        $lR = $wpdb->get_row($wpdb->prepare("\x53\105\x4c\105\x43\x54\x20\x60\165\163\x65\162\137\151\144\140\x20\106\122\x4f\x4d\40\x60{$wpdb->prefix}\x75\x73\x65\x72\155\x65\164\141\x60\40\127\x48\x45\x52\105\x20\x60\155\x65\164\141\137\x6b\x65\x79\140\x20\75\40\x25\x73\x20\101\x4e\104\40\x60\155\x65\x74\141\137\x76\141\154\165\145\140\40\x3d\x20\x20\x25\163", array($a6, $M9)));
        return !MoUtility::is_blank($lR);
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto hgp;
        }
        return;
        hgp:
        if (!(!current_user_can("\155\x61\156\141\147\145\x5f\157\160\164\x69\x6f\x6e\x73") || !check_admin_referer($this->admin_nonce))) {
            goto nBy;
        }
        return;
        nBy:
        $this->is_form_enabled = $this->sanitize_form_post("\x77\x63\x5f\144\145\146\x61\165\x6c\164\x5f\x65\156\x61\x62\x6c\x65");
        $this->otp_type = $this->sanitize_form_post("\x77\x63\x5f\145\x6e\x61\142\154\x65\137\x74\x79\x70\x65");
        $this->restrict_duplicates = $this->sanitize_form_post("\x77\143\x5f\162\x65\163\x74\x72\151\x63\x74\x5f\x64\165\160\x6c\151\143\x61\164\145\163");
        $this->redirect_to_page = isset($_POST["\x70\141\x67\x65\x5f\x69\144"]) ? get_the_title(sanitize_text_field(wp_unslash($_POST["\160\141\x67\x65\x5f\x69\x64"]))) : "\115\x79\x20\101\143\x63\157\165\x6e\x74";
        $this->is_ajax_form = $this->sanitize_form_post("\167\143\137\151\163\137\141\x6a\141\x78\x5f\x66\157\162\x6d");
        $this->button_text = $this->sanitize_form_post("\x77\143\x5f\142\165\164\164\157\x6e\x5f\x74\145\x78\164");
        $this->redirect_after_registration = $this->sanitize_form_post("\167\x63\x72\145\x67\137\162\x65\x64\151\x72\x65\143\164\x5f\141\146\x74\145\162\137\162\145\x67\x69\x73\164\162\141\x74\151\x6f\156");
        update_mo_option("\x77\x63\x72\145\x67\x5f\162\x65\x64\151\x72\145\143\164\x5f\141\146\164\145\x72\x5f\x72\x65\x67\x69\163\164\162\141\164\x69\157\x6e", $this->redirect_after_registration);
        update_mo_option("\167\143\x5f\144\145\146\x61\165\x6c\164\x5f\x65\x6e\x61\142\154\145", $this->is_form_enabled);
        update_mo_option("\x77\143\137\145\x6e\141\x62\154\x65\137\164\x79\x70\x65", $this->otp_type);
        update_mo_option("\x77\x63\x5f\x72\x65\163\x74\162\x69\143\164\x5f\144\x75\x70\154\151\x63\141\x74\x65\163", $this->restrict_duplicates);
        update_mo_option("\x77\143\137\162\x65\144\x69\162\x65\143\x74", $this->redirect_to_page);
        update_mo_option("\x77\143\137\x69\x73\x5f\141\152\141\170\x5f\146\x6f\x72\155", $this->is_ajax_form);
        update_mo_option("\x77\143\137\x62\x75\164\164\157\x6e\137\164\x65\170\164", $this->button_text);
    }
    public function redirectToPage()
    {
        return $this->redirect_to_page;
    }
    public function isredirectToPageEnabled()
    {
        return $this->redirect_after_registration;
    }
}
IWu:
