<?php


namespace OTP\Handler\Forms;

if (defined("\101\x42\123\120\101\124\x48")) {
    goto KcW;
}
exit;
KcW:
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
if (class_exists("\x57\120\x43\154\x69\145\156\164\x52\145\147\151\163\164\x72\x61\x74\151\x6f\x6e")) {
    goto MvW;
}
class WPClientRegistration extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::WP_CLIENT_REG;
        $this->phone_key = "\167\x70\x5f\x63\x6f\x6e\x74\141\143\164\137\160\150\157\x6e\x65";
        $this->phone_form_id = "\x23\x77\160\143\137\x63\157\x6e\164\141\143\x74\137\x70\150\157\156\x65";
        $this->form_key = "\x57\120\x5f\x43\x4c\x49\105\116\124\137\122\x45\x47";
        $this->type_phone_tag = "\155\157\x5f\x77\160\137\143\x6c\x69\x65\x6e\164\x5f\x70\x68\157\x6e\x65\x5f\x65\x6e\x61\142\x6c\x65";
        $this->type_email_tag = "\155\x6f\137\167\x70\137\x63\154\x69\145\156\164\137\145\x6d\141\x69\154\x5f\x65\156\x61\142\x6c\145";
        $this->type_both_tag = "\x6d\157\x5f\x77\x70\137\x63\154\151\x65\156\x74\137\142\157\x74\x68\x5f\x65\x6e\x61\x62\154\145";
        $this->form_name = mo_("\127\x50\40\103\x6c\x69\x65\156\164\40\x52\145\x67\151\163\164\162\141\x74\x69\x6f\156\40\x46\x6f\162\x6d");
        $this->is_form_enabled = get_mo_option("\167\160\137\143\154\151\x65\x6e\164\x5f\x65\156\x61\142\x6c\145");
        $this->form_documents = MoFormDocs::WP_CLIENT_FORM;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x77\160\x5f\143\154\x69\145\x6e\x74\137\145\x6e\141\x62\x6c\145\x5f\164\x79\160\145");
        $this->restrict_duplicates = get_mo_option("\x77\x70\x5f\x63\154\x69\145\x6e\x74\x5f\162\145\163\164\162\151\143\x74\x5f\x64\165\x70\154\151\x63\x61\x74\x65\163");
        add_filter("\167\x70\x63\137\x63\154\151\x65\x6e\164\x5f\x72\x65\147\151\163\164\x72\141\x74\151\157\x6e\137\146\x6f\162\x6d\137\166\141\154\x69\x64\x61\164\151\x6f\156", array($this, "\155\151\156\x69\157\x72\141\x6e\x67\x65\x5f\143\154\x69\145\x6e\x74\137\x72\145\x67\151\163\x74\162\x61\x74\x69\157\156\137\166\145\x72\151\146\x79"), 99, 1);
    }
    private function isPhoneVerificationEnabled()
    {
        $I2 = $this->get_verification_type();
        return VerificationType::PHONE === $I2 || VerificationType::BOTH === $I2;
    }
    public function miniorange_client_registration_verify($errors)
    {
        $Jr = wp_create_nonce("\167\x70\137\143\x6c\x69\145\x6e\x74\x5f\162\145\x67\137\156\x6f\x6e\143\145");
        if (wp_verify_nonce($Jr, "\x77\x70\137\x63\154\151\145\156\x74\137\x72\145\147\x5f\156\157\156\143\145")) {
            goto Fa4;
        }
        return;
        Fa4:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        $I2 = $this->get_verification_type();
        $bV = MoUtility::sanitize_check("\143\x6f\x6e\x74\x61\143\164\137\x70\150\157\156\145", $w3);
        $Wb = MoUtility::sanitize_check("\143\x6f\x6e\164\141\x63\x74\137\145\x6d\x61\x69\154", $w3);
        $Db = MoUtility::sanitize_check("\143\157\156\x74\141\143\x74\x5f\x75\x73\145\162\156\141\x6d\145", $w3);
        if (!($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse($bV, $this->phone_key))) {
            goto RRB;
        }
        $errors .= mo_("\x50\150\157\x6e\x65\40\156\x75\155\142\x65\162\40\x61\x6c\x72\145\x61\144\x79\x20\x69\x6e\40\165\163\145\56\x20\x50\x6c\145\141\x73\145\x20\x45\x6e\164\x65\x72\x20\x61\x20\x64\x69\x66\x66\x65\162\145\x6e\164\x20\x50\150\157\156\x65\40\x6e\x75\155\x62\x65\x72\56");
        RRB:
        if (MoUtility::is_blank($errors)) {
            goto nn2;
        }
        return $errors;
        nn2:
        if (!SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto rNo;
        }
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $I2)) {
            goto uZ5;
        }
        goto oZ2;
        rNo:
        MoUtility::initialize_transaction($this->form_session_var);
        goto oZ2;
        uZ5:
        $this->unset_otp_session_variables();
        return $errors;
        oZ2:
        return $this->startOTPTransaction($Db, $Wb, $errors, $bV);
    }
    private function startOTPTransaction($Db, $Wb, $errors, $bV)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto dd4;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto Xmp;
        }
        $this->send_challenge($Db, $Wb, $errors, $bV, VerificationType::EMAIL);
        goto tzF;
        dd4:
        $this->send_challenge($Db, $Wb, $errors, $bV, VerificationType::PHONE);
        goto tzF;
        Xmp:
        $this->send_challenge($Db, $Wb, $errors, $bV, VerificationType::BOTH);
        tzF:
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
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    private function isPhoneNumberAlreadyInUse($M9, $a6)
    {
        global $wpdb;
        $M9 = MoUtility::process_phone_number($M9);
        $lR = $wpdb->get_row($wpdb->prepare("\x53\x45\114\105\x43\124\x20\x60\165\163\x65\x72\137\151\x64\140\40\x46\122\117\x4d\x20\140{$wpdb->prefix}\x75\163\x65\162\x6d\145\164\141\140\x20\x57\110\105\122\105\40\x60\155\x65\164\x61\x5f\153\x65\x79\140\x20\x3d\40\x25\x73\x20\x41\116\104\x20\140\155\x65\164\141\x5f\166\x61\x6c\x75\x65\140\x20\x3d\x20\40\45\163", array($a6, $M9)));
        return !MoUtility::is_blank($lR);
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->isPhoneVerificationEnabled())) {
            goto cWA;
        }
        array_push($MI, $this->phone_form_id);
        cWA:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto ZT5;
        }
        return;
        ZT5:
        $this->is_form_enabled = $this->sanitize_form_post("\167\160\137\143\x6c\x69\x65\x6e\164\137\x65\156\x61\142\154\145");
        $this->otp_type = $this->sanitize_form_post("\x77\160\x5f\143\154\x69\x65\156\x74\137\x65\x6e\141\142\x6c\x65\x5f\x74\171\x70\x65");
        $this->restrict_duplicates = $this->get_verification_type() === VerificationType::PHONE ? $this->sanitize_form_post("\x77\x70\137\143\154\151\x65\156\x74\x5f\x72\x65\163\x74\162\x69\143\x74\x5f\x64\x75\x70\154\151\143\x61\164\145\x73") : false;
        update_mo_option("\x77\x70\137\143\154\151\x65\x6e\164\137\x65\156\x61\x62\154\145", $this->is_form_enabled);
        update_mo_option("\167\160\137\143\x6c\x69\145\x6e\x74\137\x65\x6e\x61\142\x6c\x65\137\x74\x79\160\145", $this->otp_type);
        update_mo_option("\x77\x70\137\143\154\151\x65\156\164\137\162\x65\x73\x74\x72\x69\143\164\137\144\165\x70\x6c\x69\x63\x61\x74\145\x73", $this->restrict_duplicates);
    }
}
MvW:
