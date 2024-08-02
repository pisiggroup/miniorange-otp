<?php


namespace OTP\Handler\Forms;

use OTP\Helper\FormSessionVars;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
use WP_Error;
if (class_exists("\x44\x65\x66\141\x75\154\x74\x57\x6f\162\x64\120\x72\x65\x73\163\122\145\147\151\163\164\x72\141\x74\151\x6f\156\106\157\162\155")) {
    goto ed;
}
class DefaultWordPressRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::WP_DEFAULT_REG;
        $this->phone_key = "\x74\145\x6c\145\160\x68\x6f\156\x65";
        $this->phone_form_id = "\x23\x70\x68\157\x6e\x65\x5f\156\x75\x6d\142\145\162\137\x6d\x6f";
        $this->form_key = "\x57\x50\137\104\105\x46\x41\125\114\x54";
        $this->type_phone_tag = "\155\157\x5f\x77\x70\137\144\145\146\x61\165\x6c\x74\x5f\160\150\x6f\156\x65\x5f\145\156\x61\142\154\145";
        $this->type_email_tag = "\x6d\157\137\x77\x70\x5f\x64\x65\146\141\x75\154\x74\x5f\145\155\141\151\154\137\145\156\x61\x62\x6c\145";
        $this->type_both_tag = "\x6d\157\137\167\160\x5f\x64\x65\146\x61\x75\x6c\x74\x5f\x62\x6f\x74\150\x5f\145\x6e\x61\x62\154\x65";
        $this->form_name = mo_("\x57\x6f\x72\144\120\x72\x65\163\x73\40\104\x65\146\141\165\x6c\x74\40\x2f\40\x54\x4d\x4c\40\122\145\147\x69\163\164\162\141\164\151\157\x6e\x20\x46\x6f\x72\x6d");
        $this->is_form_enabled = get_mo_option("\x77\160\x5f\144\x65\x66\141\x75\154\x74\x5f\x65\156\141\142\154\145");
        $this->form_documents = MoFormDocs::WP_DEFAULT_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x77\160\137\x64\145\146\x61\165\x6c\x74\x5f\x65\x6e\x61\142\x6c\x65\x5f\x74\171\x70\x65");
        $this->disable_auto_activate = get_mo_option("\167\x70\137\162\145\147\137\141\165\164\x6f\x5f\141\x63\x74\151\166\141\x74\145") ? false : true;
        $this->restrict_duplicates = get_mo_option("\167\160\x5f\x72\145\x67\137\x72\145\163\164\162\x69\143\x74\137\x64\165\160\x6c\151\x63\141\164\x65\163");
        add_action("\x72\x65\x67\x69\163\x74\145\162\x5f\x66\x6f\162\155", array($this, "\155\151\x6e\x69\x6f\162\x61\x6e\x67\x65\137\x73\x69\x74\x65\x5f\x72\x65\147\x69\x73\x74\145\x72\x5f\x66\x6f\x72\155"));
        add_filter("\x72\145\x67\x69\x73\164\x72\x61\x74\151\157\x6e\x5f\x65\x72\x72\157\162\x73", array($this, "\x6d\x69\156\x69\x6f\x72\141\156\x67\145\137\163\x69\x74\145\137\x72\x65\x67\x69\x73\x74\162\141\164\x69\157\156\x5f\145\162\x72\x6f\162\x73"), 99, 3);
        add_action("\x61\144\155\x69\x6e\137\160\x6f\163\x74\137\x6e\157\160\162\151\x76\137\x76\x61\154\151\x64\141\164\x69\157\156\x5f\x67\157\102\141\143\153", array($this, "\x5f\150\141\156\x64\154\x65\x5f\166\x61\x6c\x69\x64\x61\164\x69\157\156\x5f\147\157\102\141\x63\153\137\x61\143\x74\151\157\156"));
        add_action("\x75\x73\x65\162\x5f\162\x65\x67\151\163\164\145\x72", array($this, "\155\151\156\151\157\162\141\x6e\x67\145\x5f\x72\145\x67\151\163\x74\x72\x61\x74\151\x6f\x6e\137\x73\141\x76\145"), 10, 1);
        add_filter("\x77\160\137\x6c\157\147\151\x6e\x5f\x65\162\x72\157\162\163", array($this, "\155\x69\156\151\157\162\x61\156\x67\x65\137\143\x75\163\x74\x6f\155\137\x72\145\x67\x5f\x6d\x65\163\163\141\147\x65"), 10, 2);
        if ($this->disable_auto_activate) {
            goto vi;
        }
        remove_action("\x72\145\x67\151\163\164\145\162\x5f\156\145\167\137\165\163\x65\162", "\167\160\137\x73\145\156\144\137\x6e\145\x77\137\165\163\145\162\137\156\x6f\x74\151\146\x69\143\141\164\151\157\x6e\x73");
        vi:
    }
    private function isPhoneVerificationEnabled()
    {
        $I2 = $this->get_verification_type();
        return VerificationType::PHONE === $I2 || VerificationType::BOTH === $I2;
    }
    public function miniorange_custom_reg_message(WP_Error $errors, $Ug)
    {
        if ($this->disable_auto_activate) {
            goto sC;
        }
        if (!in_array("\x72\145\x67\x69\x73\164\x65\x72\x65\144", $errors->get_error_codes(), true)) {
            goto Oy;
        }
        $errors->remove("\x72\145\147\x69\163\164\145\x72\x65\x64");
        $errors->add("\162\x65\x67\x69\x73\x74\145\162\145\144", mo_("\x52\x65\147\151\x73\164\x72\141\x74\151\157\156\40\103\157\155\160\x6c\x65\164\145\56"), "\155\145\x73\163\x61\x67\145");
        Oy:
        sC:
        return $errors;
    }
    public function miniorange_site_register_form()
    {
        echo "\x3c\151\156\x70\x75\164\40\164\171\x70\x65\75\x22\x68\151\x64\x64\145\x6e\x22\40\x6e\141\x6d\145\75\42\x72\145\147\x69\x73\x74\x65\162\137\x6e\x6f\x6e\143\x65\x22\x20\x76\x61\154\165\x65\x3d\42\x72\145\147\x69\x73\164\145\162\x5f\x6e\x6f\x6e\143\x65\x22\x2f\76";
        if (!$this->isPhoneVerificationEnabled()) {
            goto dD;
        }
        echo "\74\154\141\x62\x65\154\40\x66\157\162\x3d\x22\x70\x68\157\x6e\145\x5f\x6e\165\155\x62\x65\162\x5f\155\x6f\x22\x3e" . esc_html(mo_("\120\150\x6f\156\145\x20\x4e\165\x6d\x62\x65\162")) . "\x3c\142\162\x20\x2f\76\15\12\40\40\40\x20\40\40\40\x20\40\x20\40\40\40\x20\40\x20\x3c\x69\x6e\x70\x75\x74\x20\164\x79\x70\145\75\42\x74\145\x78\164\42\40\x6e\x61\x6d\x65\75\42\160\150\157\x6e\145\x5f\156\165\x6d\142\x65\162\x5f\x6d\x6f\42\x20\151\x64\75\42\x70\150\x6f\156\x65\137\x6e\x75\155\142\x65\x72\x5f\x6d\157\42\40\143\x6c\x61\163\163\x3d\x22\151\x6e\x70\165\164\x22\40\166\x61\x6c\x75\145\75\x22\42\x20\163\x74\x79\x6c\145\75\42\42\x2f\76\x3c\57\154\141\142\x65\x6c\x3e";
        dD:
        if ($this->disable_auto_activate) {
            goto YL;
        }
        echo "\x3c\154\141\x62\145\x6c\x20\146\157\162\75\x22\160\x61\163\163\x77\x6f\162\144\x5f\155\x6f\42\76" . esc_html(mo_("\x50\141\163\x73\167\x6f\x72\x64")) . "\x3c\142\162\x20\57\x3e\xd\12\40\40\x20\40\x20\40\40\x20\40\40\x20\x20\x20\40\x20\x20\74\151\156\160\x75\164\40\x74\x79\160\x65\75\42\160\141\x73\163\167\157\162\144\x22\40\x6e\x61\155\145\x3d\42\x70\141\163\x73\x77\157\x72\x64\x5f\155\x6f\42\40\x69\x64\x3d\x22\x70\x61\163\163\167\157\162\144\137\155\x6f\x22\x20\x63\x6c\141\x73\163\x3d\x22\151\156\160\x75\164\42\x20\166\x61\154\165\x65\x3d\x22\42\x20\163\164\171\x6c\x65\75\x22\42\x2f\76\74\57\x6c\x61\x62\145\154\76";
        echo "\x3c\154\x61\x62\145\154\40\146\157\162\75\x22\143\157\156\x66\x69\x72\x6d\x5f\160\141\x73\163\167\x6f\162\x64\137\155\157\x22\x3e" . esc_html(mo_("\x43\157\x6e\146\x69\x72\x6d\40\120\141\x73\163\167\x6f\162\x64")) . "\x3c\x62\x72\40\x2f\x3e\xd\xa\x20\x20\40\x20\x20\40\x20\40\40\40\x20\x20\40\40\x20\40\x3c\x69\x6e\x70\165\164\x20\x74\171\160\x65\x3d\x22\160\141\x73\x73\x77\157\x72\144\x22\x20\x6e\x61\155\145\75\42\143\x6f\x6e\146\x69\x72\155\x5f\160\141\x73\163\x77\157\162\x64\x5f\x6d\157\42\40\x69\x64\75\x22\143\157\156\x66\x69\162\155\137\160\x61\163\x73\167\157\162\x64\137\155\x6f\42\40\143\x6c\141\163\163\x3d\42\x69\x6e\x70\165\164\x22\40\166\x61\154\165\x65\x3d\42\x22\40\x73\164\x79\154\145\75\42\x22\57\x3e\74\x2f\x6c\141\x62\145\154\76";
        echo "\x3c\163\x63\x72\151\160\x74\x3e\x77\151\156\144\x6f\x77\x2e\157\156\154\x6f\141\x64\x3d\146\165\156\143\164\x69\157\156\50\x29\x7b\40\144\x6f\143\165\155\x65\x6e\x74\x2e\147\x65\x74\x45\154\145\155\145\x6e\164\102\171\111\x64\50\x22\162\x65\x67\x5f\160\x61\x73\x73\x6d\141\x69\x6c\42\x29\x2e\162\145\x6d\x6f\x76\x65\x28\x29\73\x20\x7d\74\57\163\143\x72\x69\160\x74\76";
        YL:
    }
    public function miniorange_registration_save($Uv)
    {
        $GX = MoUtility::mo_sanitize_array($_POST);
        $bV = MoPHPSessions::get_session_var("\x70\x68\157\x6e\x65\137\x6e\x75\x6d\x62\x65\162\x5f\x6d\x6f");
        if (!$bV) {
            goto nX;
        }
        add_user_meta($Uv, $this->phone_key, $bV);
        nX:
        if ($this->disable_auto_activate) {
            goto nQ;
        }
        wp_set_password(isset($GX["\160\x61\163\163\167\157\162\x64\137\155\157"]) ? sanitize_text_field(wp_unslash($GX["\x70\141\x73\x73\x77\157\162\x64\x5f\x6d\x6f"])) : '', $Uv);
        update_user_option($Uv, "\x64\145\146\x61\165\x6c\164\137\160\x61\x73\x73\x77\157\x72\144\137\156\141\x67", false, true);
        nQ:
    }
    public function miniorange_site_registration_errors(WP_Error $errors, $Db, $Wb)
    {
        $GX = MoUtility::mo_sanitize_array($_POST);
        $bV = isset($GX["\160\150\x6f\x6e\145\x5f\x6e\x75\x6d\142\145\162\137\x6d\x6f"]) ? sanitize_text_field($GX["\x70\150\157\156\x65\137\156\x75\155\x62\x65\162\137\155\157"]) : null;
        $L8 = isset($GX["\160\x61\x73\x73\167\x6f\162\x64\137\x6d\x6f"]) ? sanitize_text_field($GX["\x70\x61\x73\163\x77\x6f\x72\144\137\x6d\x6f"]) : null;
        $e9 = isset($GX["\143\x6f\156\x66\151\x72\155\x5f\160\x61\163\x73\x77\x6f\162\144\x5f\155\157"]) ? sanitize_text_field($GX["\143\x6f\x6e\146\x69\162\x6d\x5f\160\141\x73\163\x77\x6f\162\144\x5f\x6d\x6f"]) : null;
        $this->checkIfPhoneNumberUnique($errors, $bV);
        $this->validatePasswords($errors, $L8, $e9);
        if (empty($errors->errors)) {
            goto AE;
        }
        return $errors;
        AE:
        if ($this->otp_type) {
            goto Gd;
        }
        return $errors;
        Gd:
        return $this->startOTPTransaction($Db, $Wb, $errors, $bV, $GX);
    }
    private function validatePasswords(WP_Error &$kS, $L8, $e9)
    {
        if (!$this->disable_auto_activate) {
            goto xi;
        }
        return;
        xi:
        if (!(strcasecmp($L8, $e9) !== 0)) {
            goto Ab;
        }
        $kS->add("\x70\x61\x73\x73\167\157\162\x64\137\x6d\x69\x73\155\141\x74\143\150", MoMessages::showMessage(MoMessages::PASS_MISMATCH));
        Ab:
    }
    private function checkIfPhoneNumberUnique(WP_Error &$errors, $bV)
    {
        if (!(strcasecmp($this->otp_type, $this->type_email_tag) === 0)) {
            goto oM;
        }
        return;
        oM:
        if (MoUtility::is_blank($bV) || !MoUtility::validate_phone_number($bV)) {
            goto YH;
        }
        if ($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse(trim($bV), $this->phone_key)) {
            goto Mk;
        }
        goto bz;
        YH:
        $errors->add("\x69\x6e\x76\x61\154\151\x64\137\160\x68\157\156\x65", MoMessages::showMessage(MoMessages::ENTER_PHONE_DEFAULT));
        goto bz;
        Mk:
        $errors->add("\151\156\x76\141\154\151\x64\137\x70\150\157\156\145", MoMessages::showMessage(MoMessages::PHONE_EXISTS));
        bz:
    }
    private function startOTPTransaction($Db, $Wb, $errors, $bV, $GX)
    {
        if (!(!MoUtility::is_blank(array_filter($errors->errors)) || !isset($GX["\162\x65\x67\151\x73\x74\x65\162\137\x6e\x6f\x6e\143\x65"]))) {
            goto Iw;
        }
        return $errors;
        Iw:
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto c8;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto pL;
        }
        $this->send_challenge($Db, $Wb, $errors, $bV, VerificationType::EMAIL);
        goto Up;
        c8:
        $this->send_challenge($Db, $Wb, $errors, $bV, VerificationType::PHONE);
        goto Up;
        pL:
        $this->send_challenge($Db, $Wb, $errors, $bV, VerificationType::BOTH);
        Up:
        return $errors;
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        $Bo = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Bo ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Bo, $Df);
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        $this->unset_otp_session_variables();
    }
    private function isPhoneNumberAlreadyInUse($M9, $a6)
    {
        global $wpdb;
        $M9 = MoUtility::process_phone_number($M9);
        $lR = $wpdb->get_row($wpdb->prepare("\123\105\x4c\x45\x43\124\40\140\x75\163\x65\162\137\x69\144\x60\x20\x46\x52\x4f\115\x20\140{$wpdb->prefix}\165\x73\145\162\155\x65\x74\141\x60\x20\127\x48\105\x52\105\40\x60\155\x65\164\141\137\x6b\145\171\x60\40\x3d\40\45\x73\40\101\116\104\40\140\155\x65\x74\x61\x5f\166\x61\x6c\165\145\x60\40\x3d\x20\x20\45\x73", array($a6, $M9)));
        return !MoUtility::is_blank($lR);
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->isPhoneVerificationEnabled())) {
            goto J3;
        }
        array_push($MI, $this->phone_form_id);
        J3:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto FM;
        }
        return;
        FM:
        $this->is_form_enabled = $this->sanitize_form_post("\167\x70\137\x64\145\146\141\165\154\164\x5f\145\x6e\141\x62\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\167\x70\137\x64\145\146\x61\x75\x6c\164\x5f\145\x6e\141\x62\154\x65\x5f\164\171\x70\x65");
        $this->restrict_duplicates = $this->sanitize_form_post("\x77\x70\x5f\162\x65\147\137\x72\145\163\x74\162\x69\x63\164\x5f\x64\x75\x70\x6c\151\x63\141\164\x65\x73");
        $this->disable_auto_activate = $this->sanitize_form_post("\x77\160\x5f\162\x65\x67\x5f\x61\x75\164\x6f\137\141\143\x74\x69\x76\x61\x74\x65") ? false : true;
        update_mo_option("\x77\x70\137\x64\145\x66\141\x75\x6c\x74\137\x65\x6e\x61\142\154\145", $this->is_form_enabled);
        update_mo_option("\167\x70\137\x64\145\x66\x61\165\x6c\164\x5f\x65\x6e\x61\142\x6c\145\x5f\164\x79\160\145", $this->otp_type);
        update_mo_option("\167\x70\137\162\145\x67\137\162\x65\x73\x74\x72\x69\x63\164\137\144\x75\x70\154\151\143\x61\164\145\163", $this->restrict_duplicates);
        update_mo_option("\167\160\x5f\x72\145\x67\x5f\x61\165\164\157\137\141\143\x74\151\166\x61\x74\145", $this->disable_auto_activate ? false : true);
    }
}
ed:
