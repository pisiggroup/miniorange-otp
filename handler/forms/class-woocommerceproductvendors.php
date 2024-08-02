<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\123\120\101\x54\x48")) {
    goto F9O;
}
exit;
F9O:
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
if (class_exists("\127\x6f\157\103\x6f\x6d\155\145\162\x63\x65\120\162\x6f\x64\x75\143\x74\126\145\156\x64\x6f\162\x73")) {
    goto LZI;
}
class WooCommerceProductVendors extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->form_session_var = FormSessionVars::WC_PRODUCT_VENDOR;
        $this->is_ajax_form = true;
        $this->type_phone_tag = "\155\157\x5f\x77\x63\x5f\160\x76\137\160\150\157\x6e\145\137\145\x6e\141\x62\x6c\x65";
        $this->type_email_tag = "\x6d\157\137\167\x63\x5f\x70\x76\x5f\x65\x6d\x61\x69\154\x5f\145\x6e\x61\x62\x6c\x65";
        $this->phone_form_id = "\x23\x72\145\x67\x5f\142\x69\154\x6c\x69\156\147\137\160\150\157\156\x65";
        $this->form_key = "\127\x43\137\x50\x56\137\x52\105\x47\137\106\117\x52\115";
        $this->form_name = mo_("\x57\157\157\x63\x6f\155\x6d\x65\x72\143\x65\40\120\162\157\x64\x75\143\x74\40\126\145\156\144\x6f\x72\40\122\145\147\151\163\164\162\x61\164\151\157\x6e\x20\x46\x6f\x72\155");
        $this->is_form_enabled = get_mo_option("\x77\x63\137\x70\x76\x5f\x64\x65\x66\141\x75\x6c\x74\137\x65\156\x61\142\x6c\145");
        $this->button_text = get_mo_option("\x77\143\137\x70\x76\137\x62\165\164\x74\157\156\x5f\x74\145\170\x74");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\x43\154\x69\x63\153\x20\x48\145\x72\x65\40\x74\157\x20\x73\x65\x6e\x64\x20\117\x54\x50");
        $this->form_documents = MoFormDocs::WC_PRODUCT_VENDOR;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x77\143\x5f\160\x76\137\145\x6e\x61\x62\x6c\x65\x5f\164\171\160\145");
        $this->restrict_duplicates = get_mo_option("\167\143\x5f\x70\x76\137\162\145\163\x74\162\x69\143\164\x5f\144\x75\x70\x6c\151\x63\141\164\x65\163");
        add_action("\x77\x63\160\x76\137\x72\x65\x67\x69\163\x74\x72\141\164\151\157\156\137\146\x6f\162\155", array($this, "\155\x6f\137\x61\x64\x64\x5f\160\x68\x6f\x6e\x65\x5f\146\x69\145\x6c\144"), 1);
        add_action("\x77\x70\x5f\141\152\x61\170\137\156\157\x70\162\x69\166\x5f\155\151\156\151\x6f\162\141\156\147\x65\137\167\143\x5f\x76\x70\137\162\145\147\x5f\x76\x65\162\x69\x66\171", array($this, "\163\145\156\144\101\152\141\x78\x4f\124\x50\122\145\x71\165\145\x73\x74"));
        add_filter("\x77\143\160\166\x5f\163\150\x6f\x72\x74\x63\x6f\x64\x65\137\x72\x65\147\x69\x73\164\x72\141\164\x69\157\156\137\x66\x6f\162\155\137\166\x61\154\x69\144\x61\x74\x69\x6f\156\x5f\x65\x72\x72\x6f\x72\x73", array($this, "\162\x65\x67\137\x66\x69\145\154\x64\163\137\x65\162\x72\x6f\x72\x73"), 1, 2);
        add_action("\167\160\x5f\145\x6e\x71\165\145\x75\x65\x5f\x73\143\x72\x69\160\164\163", array($this, "\155\151\x6e\x69\157\x72\x61\156\147\x65\x5f\162\145\x67\x69\x73\164\145\162\137\167\143\x5f\163\143\x72\x69\160\164"));
    }
    public function sendAjaxOTPRequest()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto kbp;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        exit;
        kbp:
        $GX = MoUtility::mo_sanitize_array($_POST);
        MoUtility::initialize_transaction($this->form_session_var);
        $WB = MoUtility::sanitize_check("\165\163\x65\162\x5f\160\x68\x6f\156\145", $GX);
        $Wb = MoUtility::sanitize_check("\x75\163\145\x72\x5f\x65\155\x61\x69\x6c", $GX);
        if ($this->otp_type === $this->type_phone_tag) {
            goto HIj;
        }
        SessionUtils::add_email_verified($this->form_session_var, $Wb);
        goto H5O;
        HIj:
        SessionUtils::add_phone_verified($this->form_session_var, MoUtility::process_phone_number($WB));
        H5O:
        $kS = $this->processFormFields(null, $Wb, new WP_Error(), null, $WB);
        if (!$kS->get_error_code()) {
            goto NlI;
        }
        wp_send_json(MoUtility::create_json($kS->get_error_message(), MoConstants::ERROR_JSON_TYPE));
        NlI:
    }
    public function reg_fields_errors($errors, $Mr)
    {
        if (empty($errors)) {
            goto nt4;
        }
        return $errors;
        nt4:
        $this->assertOTPField($errors, $Mr);
        $this->checkIfOTPWasSent($errors);
        return $this->checkIntegrityAndValidateOTP($Mr, $errors);
    }
    private function assertOTPField(&$errors, $Mr)
    {
        if (MoUtility::sanitize_check("\x6d\x6f\166\145\x72\x69\x66\x79", $Mr)) {
            goto b0w;
        }
        $errors[] = MoMessages::showMessage(MoMessages::REQUIRED_OTP);
        b0w:
    }
    private function checkIfOTPWasSent(&$errors)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto uQS;
        }
        $errors[] = MoMessages::showMessage(MoMessages::PLEASE_VALIDATE);
        uQS:
    }
    private function checkIntegrityAndValidateOTP($GX, array $errors)
    {
        if (empty($errors)) {
            goto oEb;
        }
        return $errors;
        oEb:
        $GX["\x62\x69\154\154\x69\x6e\x67\x5f\x70\150\x6f\x6e\x65"] = MoUtility::process_phone_number($GX["\142\x69\154\154\151\x6e\147\137\160\150\157\156\x65"]);
        $errors = $this->checkIntegrity($GX, $errors);
        if (empty($errors->errors)) {
            goto Bcd;
        }
        return $errors;
        Bcd:
        $Bo = $this->get_verification_type();
        $this->validate_challenge($Bo, null, sanitize_text_field($GX["\155\157\166\145\162\x69\x66\x79"]));
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto Bht;
        }
        $this->unset_otp_session_variables();
        goto GFS;
        Bht:
        $errors[] = MoUtility::get_invalid_otp_method();
        GFS:
        return $errors;
    }
    private function checkIntegrity($GX, array $errors)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto Neh;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto ouw;
        }
        goto azx;
        Neh:
        if (SessionUtils::is_phone_verified_match($this->form_session_var, MoUtility::process_phone_number($GX["\x62\x69\x6c\154\151\156\x67\x5f\160\150\157\x6e\x65"]))) {
            goto vox;
        }
        $errors[] = MoMessages::showMessage(MoMessages::PHONE_MISMATCH);
        vox:
        goto azx;
        ouw:
        if (SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX["\145\155\x61\x69\154"]))) {
            goto AMb;
        }
        $errors[] = MoMessages::showMessage(MoMessages::EMAIL_MISMATCH);
        AMb:
        azx:
        return $errors;
    }
    public function processFormFields($JG, $ZG, $errors, $L8, $M9)
    {
        global $Hg;
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto ieR;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto whA;
        }
        goto KI2;
        ieR:
        if (!isset($M9) || !MoUtility::validate_phone_number($M9)) {
            goto vl0;
        }
        if ($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse($M9, "\142\x69\154\x6c\x69\156\147\x5f\x70\150\x6f\156\x65")) {
            goto XA5;
        }
        goto YrP;
        vl0:
        return new WP_Error("\142\151\x6c\x6c\x69\x6e\147\137\x70\150\x6f\x6e\x65\x5f\145\x72\162\x6f\162", str_replace("\43\43\160\150\157\156\145\x23\43", $M9, $Hg->get_otp_invalid_format_message()));
        goto YrP;
        XA5:
        return new WP_Error("\x62\151\x6c\x6c\x69\156\147\x5f\x70\x68\x6f\156\x65\137\x65\162\162\x6f\x72", MoMessages::showMessage(MoMessages::PHONE_EXISTS));
        YrP:
        $this->send_challenge($JG, $ZG, $errors, $M9, VerificationType::PHONE, $L8);
        goto KI2;
        whA:
        $M9 = isset($M9) ? $M9 : '';
        $this->send_challenge($JG, $ZG, $errors, $M9, VerificationType::EMAIL, $L8);
        KI2:
        return $errors;
    }
    public function isPhoneNumberAlreadyInUse($M9, $a6)
    {
        global $wpdb;
        $M9 = MoUtility::process_phone_number($M9);
        $lR = $wpdb->get_row($wpdb->prepare("\123\x45\114\x45\x43\124\40\140\165\163\x65\x72\x5f\x69\x64\140\40\x46\x52\x4f\x4d\x20\140{$wpdb->prefix}\165\x73\145\x72\155\145\164\x61\x60\x20\x57\x48\105\122\x45\40\x60\x6d\145\x74\141\x5f\x6b\x65\171\140\40\x3d\40\45\x73\40\101\x4e\104\x20\x60\x6d\145\x74\x61\137\166\141\x6c\165\145\x60\40\x3d\x20\45\163", array($a6, $M9)));
        return !MoUtility::is_blank($lR);
    }
    public function miniorange_register_wc_script()
    {
        wp_register_script("\155\x6f\x77\143\x70\x76\x72\x65\x67", MOV_URL . "\x69\156\143\154\x75\144\145\x73\x2f\x6a\163\x2f\167\x63\x70\166\x72\145\147\56\155\151\156\x2e\152\x73", array("\x6a\x71\x75\x65\162\x79"), MOV_VERSION, true);
        wp_localize_script("\x6d\x6f\167\x63\160\x76\162\x65\x67", "\155\x6f\x77\143\x70\x76\162\145\147", array("\163\x69\164\x65\x55\x52\x4c" => wp_ajax_url(), "\x6f\164\160\124\x79\x70\145" => $this->otp_type, "\x6e\157\x6e\143\145" => wp_create_nonce($this->nonce), "\x62\x75\x74\164\x6f\x6e\164\145\170\x74" => mo_($this->button_text), "\146\151\145\x6c\144" => $this->otp_type === $this->type_phone_tag ? "\162\x65\x67\x5f\166\x70\x5f\142\151\154\x6c\151\x6e\147\x5f\x70\x68\157\156\x65" : "\x77\x63\160\x76\55\143\157\x6e\146\x69\162\x6d\x2d\145\x6d\141\x69\x6c", "\x69\x6d\x67\x55\x52\x4c" => MOV_LOADER_URL, "\x63\x6f\x64\x65\114\x61\x62\145\x6c" => mo_("\x45\156\164\145\x72\40\x56\145\162\x69\x66\x69\143\x61\164\x69\x6f\156\40\103\157\144\x65")));
        wp_enqueue_script("\x6d\157\x77\x63\160\166\x72\x65\147");
    }
    public function mo_add_phone_field()
    {
        $GX = MoUtility::mo_sanitize_array($_POST);
        echo "\74\x70\x20\x63\x6c\x61\x73\x73\75\x22\x66\157\x72\x6d\x2d\x72\x6f\x77\x20\146\157\x72\x6d\x2d\162\157\167\55\167\x69\144\x65\42\x3e\15\12\x9\11\x9\11\x9\x3c\154\x61\142\145\x6c\x20\146\x6f\x72\75\42\162\145\147\x5f\x76\160\137\142\151\154\154\151\x6e\147\137\160\150\157\156\145\42\76\15\12\x9\11\11\x9\11\40\x20\40\40" . esc_html(mo_("\x50\150\x6f\x6e\x65")) . "\15\xa\x9\x9\11\11\11\40\x20\40\40\74\x73\x70\x61\156\x20\143\x6c\x61\163\163\75\x22\x72\x65\x71\165\151\162\x65\144\42\76\52\74\x2f\163\160\141\156\x3e\15\xa\x20\40\x20\x20\40\40\x20\40\40\40\40\40\40\x20\40\40\x20\40\x20\x20\74\57\x6c\141\142\145\x6c\76\15\12\11\11\11\11\x9\x3c\x69\x6e\160\x75\164\x20\164\x79\160\x65\x3d\x22\164\x65\170\164\42\x20\x63\x6c\x61\163\x73\x3d\x22\x69\x6e\x70\165\x74\55\x74\145\170\x74\42\x20\15\xa\x9\x9\x9\11\x9\x20\40\x20\40\40\x20\40\40\156\141\155\x65\x3d\x22\142\x69\x6c\x6c\x69\156\x67\137\x70\x68\157\156\x65\x22\40\x69\144\75\42\x72\145\147\137\x76\160\x5f\x62\151\154\154\x69\x6e\147\x5f\160\150\x6f\x6e\x65\x22\40\xd\12\x9\11\11\x9\11\x20\x20\x20\x20\40\x20\40\x20\x76\141\x6c\165\145\x3d\x22" . (!empty(sanitize_text_field($GX["\142\x69\x6c\154\x69\x6e\147\137\x70\150\x6f\156\x65"])) ? esc_attr(sanitize_text_field($GX["\142\151\x6c\x6c\x69\x6e\147\x5f\x70\x68\157\x6e\145"])) : '') . "\42\x20\x2f\x3e\x9\xd\12\x9\x9\x9\40\x20\11\x20\40\x3c\x2f\160\x3e";
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
    }
    public function get_phone_number_selector($MI)
    {
        if (!$this->is_form_enabled()) {
            goto tUe;
        }
        array_push($MI, $this->phone_form_id);
        tUe:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto YCZ;
        }
        return;
        YCZ:
        $this->is_form_enabled = $this->sanitize_form_post("\x77\143\x5f\x70\x76\137\144\145\x66\x61\165\x6c\164\x5f\x65\156\141\x62\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\x77\x63\x5f\x70\166\137\145\x6e\141\142\154\x65\x5f\x74\171\160\x65");
        $this->restrict_duplicates = $this->sanitize_form_post("\x77\x63\x5f\160\x76\x5f\162\145\163\x74\162\x69\143\x74\137\x64\x75\x70\154\151\143\141\164\x65\163");
        $this->button_text = $this->sanitize_form_post("\167\143\x5f\160\x76\137\x62\x75\x74\x74\x6f\x6e\137\x74\x65\x78\164");
        update_mo_option("\167\x63\x5f\160\x76\x5f\144\x65\146\x61\165\x6c\x74\137\145\156\141\142\154\x65", $this->is_form_enabled);
        update_mo_option("\x77\x63\137\160\166\x5f\x65\156\x61\x62\x6c\145\137\164\x79\160\145", $this->otp_type);
        update_mo_option("\167\143\x5f\160\166\x5f\162\x65\x73\x74\x72\151\x63\x74\x5f\144\165\x70\x6c\x69\143\141\164\x65\163", $this->restrict_duplicates);
        update_mo_option("\x77\x63\x5f\160\166\x5f\142\165\164\164\157\156\137\x74\145\x78\x74", $this->button_text);
    }
}
LZI:
