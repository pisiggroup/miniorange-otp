<?php


namespace OTP\Handler\Forms;

if (defined("\101\x42\123\120\x41\x54\x48")) {
    goto hB;
}
exit;
hB:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoMessages;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use WP_Error;
if (class_exists("\105\x64\165\x6d\x61\162\x65\x67")) {
    goto l8;
}
class Edumareg extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::EDUMAREG;
        $this->type_phone_tag = "\x6d\157\x5f\145\x64\x75\x6d\x61\162\145\x67\137\x70\150\157\156\x65\137\x65\156\x61\142\154\x65";
        $this->type_email_tag = "\155\x6f\x5f\145\144\x75\155\141\x72\x65\147\x5f\x65\x6d\x61\x69\154\137\x65\156\141\142\x6c\x65";
        $this->phone_key = "\x74\145\154\x65\160\150\x6f\x6e\145";
        $this->form_key = "\x45\x44\x55\x4d\x41\x52\105\107\x5f\x54\x48\x45\115\x45";
        $this->form_name = mo_("\105\x64\x75\x6d\x61\x20\124\150\145\x6d\145\40\122\145\x67\151\x73\164\162\141\164\151\x6f\156\x20\106\157\x72\x6d");
        $this->is_form_enabled = get_mo_option("\145\144\x75\x6d\x61\162\145\147\x5f\x65\x6e\141\x62\154\x65");
        $this->phone_form_id = "\x23\160\150\x6f\156\145\137\x6e\x75\155\142\145\x72\137\x6d\157";
        $this->form_documents = MoFormDocs::EDUMA_REG;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x65\144\x75\155\141\162\x65\147\137\x65\x6e\x61\142\x6c\145\x5f\164\171\160\x65");
        add_action("\x72\x65\147\151\x73\164\145\162\x5f\146\x6f\162\155", array($this, "\x6d\x69\156\151\157\x72\x61\x6e\x67\x65\x5f\141\x64\144\137\x70\150\x6f\156\x65\146\x69\145\154\144"));
        add_action("\165\163\x65\162\x5f\162\x65\x67\x69\x73\164\x65\x72", array($this, "\x6d\151\156\151\157\162\x61\156\147\145\137\162\x65\x67\x69\163\x74\162\141\164\151\x6f\x6e\x5f\x73\141\166\145"), 10, 1);
        add_filter("\x72\145\147\151\163\x74\162\141\164\151\157\156\137\x65\x72\162\x6f\x72\x73", array($this, "\155\x69\156\151\x6f\x72\141\x6e\147\145\x5f\x73\x69\x74\x65\x5f\x72\145\x67\x69\x73\164\162\x61\164\x69\x6f\x6e\137\145\x72\162\x6f\162\163"), 99, 3);
    }
    public function miniorange_add_phonefield()
    {
        echo "\74\151\x6e\160\165\164\40\x74\171\x70\145\75\x22\150\x69\x64\x64\x65\156\x22\x20\156\x61\155\145\x3d\x22\x72\145\147\151\x73\x74\145\162\x5f\156\157\x6e\143\x65\42\40\166\141\154\x75\x65\x3d\42\162\x65\147\151\x73\x74\x65\162\137\x6e\157\x6e\143\x65\x22\57\x3e";
        if (!($this->otp_type === $this->type_phone_tag)) {
            goto Kc;
        }
        echo "\74\160\76\x3c\x69\156\x70\165\x74\x20\164\x79\x70\145\x3d\x22\164\x65\x78\x74\42\40\x6e\141\x6d\145\75\x22\x70\x68\157\156\x65\x5f\x6e\x75\x6d\x62\145\x72\x5f\x6d\x6f\x22\40\x69\x64\x3d\42\160\x68\157\156\x65\x5f\156\165\x6d\142\x65\x72\137\155\x6f\42\x20\143\x6c\141\x73\x73\x3d\x22\151\156\160\x75\164\x20\162\x65\161\x75\151\x72\x65\x64\x22\40\166\141\154\x75\145\75\x22\42\40\160\x6c\141\143\x65\x68\x6f\154\x64\x65\162\75\42\x50\150\157\x6e\145\x20\116\x75\155\x62\x65\162\x22\x20\163\164\171\154\x65\75\x22\42\57\x3e\x3c\57\x70\x3e";
        Kc:
    }
    public function miniorange_registration_save($Uv)
    {
        $bV = MoPHPSessions::get_session_var("\160\150\x6f\x6e\x65\x5f\x6e\165\155\x62\145\x72\137\155\x6f");
        if (!$bV) {
            goto wI;
        }
        add_user_meta($Uv, $this->phone_key, $bV);
        wI:
    }
    public function miniorange_site_registration_errors(WP_Error $errors, $Db, $Wb)
    {
        $GX = MoUtility::mo_sanitize_array($_POST);
        $bV = isset($GX["\160\150\x6f\156\145\x5f\156\165\155\142\x65\162\x5f\x6d\x6f"]) ? sanitize_text_field($GX["\x70\150\157\x6e\x65\137\156\x75\155\x62\145\x72\x5f\x6d\x6f"]) : null;
        $this->checkIfPhoneNumberUnique($errors, $bV);
        if (empty($errors->errors)) {
            goto tR;
        }
        return $errors;
        tR:
        if ($this->otp_type) {
            goto iO;
        }
        return $errors;
        iO:
        return $this->startOTPTransaction($GX, $Db, $Wb, $errors, $bV);
    }
    public function checkIfPhoneNumberUnique(WP_Error &$errors, $bV)
    {
        if (!(strcasecmp($this->otp_type, $this->type_email_tag) === 0)) {
            goto ws;
        }
        return;
        ws:
        if (!(MoUtility::is_blank($bV) || !MoUtility::validate_phone_number($bV))) {
            goto tW;
        }
        $errors->add("\x69\156\166\141\154\x69\144\x5f\160\150\157\156\145", MoMessages::showMessage(MoMessages::ENTER_PHONE_DEFAULT));
        tW:
    }
    public function isPhoneNumberAlreadyInUse($M9, $a6)
    {
        global $wpdb;
        $M9 = MoUtility::process_phone_number($M9);
        $lR = $wpdb->get_row($wpdb->prepare("\123\105\x4c\105\103\124\x20\140\x75\163\x65\x72\x5f\x69\144\140\40\x46\x52\x4f\x4d\40\140{$wpdb->prefix}\165\163\x65\162\x6d\x65\x74\141\140\x20\127\x48\105\x52\105\40\140\x6d\145\164\141\137\x6b\x65\171\x60\40\75\x20\45\163\40\101\x4e\x44\40\x60\x6d\x65\164\141\x5f\166\x61\x6c\x75\145\x60\40\75\40\x20\x25\x73", array($a6, $M9)));
        return !MoUtility::is_blank($lR);
    }
    private function startOTPTransaction($GX, $Db, $Wb, $errors, $bV)
    {
        if (!(!MoUtility::is_blank(array_filter($errors->errors)) || !isset($GX["\162\145\x67\151\163\x74\x65\x72\x5f\156\157\x6e\143\145"]))) {
            goto Fc;
        }
        return $errors;
        Fc:
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto QQ;
        }
        $this->send_challenge($Db, $Wb, $errors, $bV, VerificationType::EMAIL);
        goto OO;
        QQ:
        $this->send_challenge($Db, $Wb, $errors, $bV, VerificationType::PHONE);
        OO:
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
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto I4;
        }
        array_push($MI, $this->phone_form_id);
        I4:
        return $MI;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\155\x61\156\141\147\145\x5f\x6f\160\x74\x69\x6f\156\x73") || !check_admin_referer($this->admin_nonce))) {
            goto Ne;
        }
        return;
        Ne:
        $this->otp_type = $this->sanitize_form_post("\x65\144\x75\x6d\141\x72\x65\147\x5f\145\156\x61\142\154\145\137\x74\171\160\x65");
        $this->is_form_enabled = $this->sanitize_form_post("\145\144\x75\x6d\x61\x72\145\147\x5f\145\x6e\x61\x62\154\145");
        update_mo_option("\x65\144\165\x6d\x61\162\145\x67\137\145\x6e\141\x62\x6c\145", $this->is_form_enabled);
        update_mo_option("\145\144\165\155\141\162\x65\x67\137\x65\156\141\x62\154\x65\x5f\x74\171\160\145", $this->otp_type);
    }
}
l8:
