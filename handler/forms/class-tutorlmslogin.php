<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\123\120\x41\x54\110")) {
    goto q_T;
}
exit;
q_T:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use WP_Error;
use WP_User;
if (class_exists("\x54\165\164\157\x72\114\115\x53\114\x6f\147\151\156")) {
    goto xfL;
}
class TutorLMSLogin extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::TUTOR_LMS_LOGIN;
        $this->type_phone_tag = "\x6d\157\x5f\164\x75\x74\157\x72\137\x6c\155\x73\137\x6c\x6f\x67\x69\x6e\137\160\150\x6f\x6e\145\137\x65\156\141\x62\x6c\x65";
        $this->type_email_tag = "\155\157\137\164\165\164\157\x72\x5f\154\x6d\163\137\x6c\157\147\151\156\x5f\x65\155\x61\151\x6c\x5f\x65\156\141\x62\154\145";
        $this->form_key = "\124\x55\x54\x4f\x52\x5f\x4c\x4d\x53\137\x4c\117\x47\111\116";
        $this->form_name = mo_("\x54\x75\164\157\x72\x20\x4c\x4d\x53\40\x4c\x6f\147\151\156\x20\x46\157\x72\155");
        $this->is_form_enabled = get_mo_option("\164\x75\164\157\162\137\154\155\163\x5f\x6c\x6f\x67\x69\156\137\x65\x6e\x61\142\x6c\x65");
        $this->form_documents = MoFormDocs::TUTOR_LMS_LOGIN_FORM_LINK;
        $this->generate_otp_action = "\155\157\137\164\x75\x74\157\162\137\154\x6d\163\x5f\154\157\147\x69\156\x5f\x73\x65\x6e\144\x5f\157\x74\x70";
        $this->validate_otp_action = "\x6d\157\x5f\x74\x75\164\x6f\x72\137\x6c\x6d\163\x5f\x76\141\154\x69\x64\x61\164\x65\x5f\157\x74\x70";
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\164\165\164\157\162\x5f\x6c\x6d\163\137\x6c\x6f\x67\151\x6e\x5f\145\x6e\x61\142\x6c\145\x5f\x74\171\x70\x65");
        add_action("\x6c\x6f\x67\151\156\x5f\x65\156\x71\165\145\x75\x65\137\163\x63\x72\151\160\x74\x73", array($this, "\155\x69\156\x69\157\x72\x61\x6e\147\145\x5f\162\145\147\x69\163\x74\145\162\x5f\154\157\147\151\x6e\137\x73\143\162\x69\x70\164"));
        add_action("\167\x70\x5f\145\x6e\161\165\x65\165\x65\137\x73\143\x72\x69\160\x74\163", array($this, "\x6d\x69\156\151\157\x72\141\x6e\x67\x65\x5f\162\x65\147\151\163\x74\145\x72\x5f\x6c\157\x67\151\156\137\163\x63\x72\151\160\164"));
        add_action("\x77\x70\137\x61\x6a\x61\170\137\156\157\x70\162\151\166\x5f" . $this->generate_otp_action, array($this, "\155\157\137\164\x75\164\x6f\162\137\154\x6d\163\x5f\154\x6f\147\151\x6e\x5f\163\145\156\x64\137\x6f\x74\160"));
        add_action("\x77\x70\x5f\x61\152\x61\x78\x5f" . $this->generate_otp_action, array($this, "\155\x6f\x5f\164\x75\164\x6f\162\x5f\154\x6d\x73\137\x6c\157\x67\x69\156\x5f\163\145\x6e\x64\137\x6f\164\160"));
        add_action("\167\160\137\141\x6a\x61\170\x5f\x6e\157\x70\x72\151\166\x5f" . $this->validate_otp_action, array($this, "\155\157\x5f\150\x61\x6e\144\x6c\145\137\164\x75\x74\157\162\137\x6c\155\163\x5f\x6c\157\147\x69\156"));
        add_action("\x77\160\x5f\141\152\x61\x78\137" . $this->validate_otp_action, array($this, "\x6d\157\137\x68\141\156\x64\x6c\x65\137\x74\165\164\157\162\137\154\155\163\137\x6c\157\147\x69\156"));
    }
    public function miniorange_register_login_script()
    {
        wp_register_script("\x6d\x6f\x74\x75\x74\x6f\162\137\154\155\163\137\154\x6f\x67\x69\x6e", MOV_URL . "\x69\x6e\x63\154\x75\144\145\x73\x2f\152\163\57\155\x6f\x74\x75\x74\157\162\x6c\x6d\163\154\x6f\147\151\156\56\155\151\156\x2e\x6a\163", array("\152\161\x75\x65\x72\x79"), MOV_VERSION, true);
        wp_localize_script("\155\x6f\x74\x75\x74\x6f\x72\x5f\154\155\x73\x5f\x6c\x6f\147\x69\156", "\155\x6f\164\165\164\x6f\162\x5f\154\x6d\x73\137\154\x6f\x67\151\x6e", array("\146\x69\x65\154\x64" => strcasecmp($this->otp_type, $this->type_email_tag) === 0 ? "\x69\x6e\160\165\x74\x5b\x6e\141\155\145\x3d\x20\x55\x73\145\162\x6e\x61\155\x65\135" : "\151\156\x70\x75\x74\x5b\156\x61\155\145\75\120\141\x73\163\167\157\x72\144\x5d", "\x73\151\164\145\125\x52\114" => wp_ajax_url(), "\157\x74\160\x74\171\x70\x65" => $this->ajax_processing_fields(), "\151\x6d\x67\125\122\114" => MOV_LOADER_URL, "\x6e\x6f\x6e\143\x65" => wp_create_nonce($this->nonce), "\147\x61\x63\x74\x69\x6f\x6e" => $this->generate_otp_action, "\166\x61\143\x74\151\157\x6e" => $this->validate_otp_action));
        wp_enqueue_script("\155\x6f\x74\x75\164\157\162\137\154\x6d\x73\x5f\154\x6f\x67\151\156");
    }
    public function mo_tutor_lms_login_send_otp()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto KrA;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        exit;
        KrA:
        $GX = MoUtility::mo_sanitize_array($_POST);
        if (array_key_exists("\145\x6d\x61\x69\x6c", $GX) && !MoUtility::is_blank($GX["\x65\155\x61\151\x6c"])) {
            goto NdQ;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_USERNAME), MoConstants::ERROR_JSON_TYPE));
        goto gCd;
        NdQ:
        $user = sanitize_text_field($GX["\x65\155\141\x69\154"]);
        $L8 = sanitize_text_field($GX["\x75\163\145\162\x5f\x70\141\163\163"]);
        $Pd = $this->getUser($user, $L8);
        $bV = get_user_meta($Pd->data->ID, "\x75\163\x65\x72\x5f\x70\150\157\156\145", true);
        $g3 = wp_authenticate($user, $L8);
        if (is_wp_error($g3)) {
            goto NBb;
        }
        MoUtility::initialize_transaction($this->form_session_var);
        if (!(strcasecmp($this->otp_type, $this->type_email_tag) === 0)) {
            goto f4K;
        }
        $this->process_email_verification($Pd);
        f4K:
        if (!(strcasecmp($this->otp_type, $this->type_phone_tag) === 0)) {
            goto N7W;
        }
        $this->process_phone_verification($bV);
        N7W:
        goto YOd;
        NBb:
        wp_send_json(MoUtility::create_json("\124\x68\x65\x20\x70\141\x73\x73\x77\157\162\x64\x20\x79\x6f\x75\x20\x65\156\x74\145\162\145\x64\40\x66\157\x72\40\x74\x68\x65\x20\165\x73\145\162\156\x61\155\x65\x20\47{$user}\x27\x20\151\163\x20\x69\x6e\143\157\162\x72\x65\143\164", MoConstants::ERROR_JSON_TYPE));
        YOd:
        gCd:
    }
    private function process_phone_verification($bV)
    {
        if (!$bV) {
            goto e9s;
        }
        SessionUtils::add_phone_verified($this->form_session_var, $bV);
        $this->send_challenge(null, $bV, null, $bV, VerificationType::PHONE);
        goto SOT;
        e9s:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_NOT_FOUND), MoConstants::ERROR_JSON_TYPE));
        SOT:
    }
    private function process_email_verification($Pd)
    {
        $Wb = $Pd->user_email;
        SessionUtils::add_email_verified($this->form_session_var, $Wb);
        $this->send_challenge(null, $Wb, null, $Wb, VerificationType::EMAIL);
    }
    public function mo_handle_tutor_lms_login()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto MAG;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        exit;
        MAG:
        $GX = MoUtility::mo_sanitize_array($_POST);
        if (!SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto lQN;
        }
        $this->start_otp_verification_process($GX);
        goto Ojq;
        lQN:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE), MoConstants::ERROR_JSON_TYPE));
        Ojq:
    }
    private function start_otp_verification_process($GX)
    {
        $Bo = $this->get_verification_type();
        $this->checkIntegrity($GX);
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto zs4;
        }
        $this->validate_challenge($Bo, null, sanitize_text_field($GX["\x6f\x74\160"]));
        zs4:
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto VZw;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OTP), MoConstants::ERROR_JSON_TYPE));
        goto ycD;
        VZw:
        wp_send_json(MoUtility::create_json("\126\x61\x6c\151\x64\x61\x74\145\144\x2c\40\x4c\x6f\x67\x67\151\x6e\x67\x20\151\156\56\x2e\56\56", MoConstants::SUCCESS_JSON_TYPE));
        $this->unset_otp_session_variables();
        ycD:
    }
    private function getUser($JG, $L8)
    {
        $user = is_email($JG) ? get_user_by("\x65\x6d\x61\151\x6c", $JG) : get_user_by("\x6c\157\147\151\x6e", $JG);
        $user = wp_authenticate_username_password(null, $user->data->user_login, $L8);
        return $user ? $user : new WP_Error("\111\116\126\x41\x4c\111\x44\137\x55\x53\105\x52\116\x41\115\x45", mo_("\40\x3c\142\x3e\x45\x52\x52\x4f\x52\x3a\74\57\142\76\40\111\x6e\x76\141\x6c\151\144\x20\x55\x73\145\162\116\x61\x6d\x65\56\40"));
    }
    private function checkIntegrity($GX)
    {
        $Pd = $this->getUser($GX["\x65\155\141\151\x6c"], $GX["\165\163\x65\162\x5f\160\x61\163\163"]);
        $Wb = $Pd->user_email;
        $bV = get_user_meta($Pd->data->ID, "\x75\163\145\x72\137\x70\150\157\x6e\145", true);
        if (sanitize_text_field($GX["\x6f\x74\x70\x54\171\160\x65"]) === "\160\150\x6f\x6e\145") {
            goto c9q;
        }
        if (SessionUtils::is_email_verified_match($this->form_session_var, $Wb)) {
            goto PYo;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        PYo:
        goto n0r;
        c9q:
        if (SessionUtils::is_phone_verified_match($this->form_session_var, $bV)) {
            goto JcA;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        JcA:
        n0r:
    }
    private function isPhoneVerificationEnabled()
    {
        $I2 = $this->get_verification_type();
        return VerificationType::PHONE === $I2 || VerificationType::BOTH === $I2;
    }
    public function handle_failed_verification($kD, $ZG, $bV, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
    }
    public function handle_post_verification($Ug, $kD, $ZG, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!(self::is_form_enabled() && $this->isPhoneVerificationEnabled())) {
            goto VuV;
        }
        array_push($MI, $this->phone_form_id);
        VuV:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto G37;
        }
        return;
        G37:
        $this->is_ajax_form_in_play(true);
        $this->is_form_enabled = $this->sanitize_form_post("\x74\x75\164\x6f\x72\x5f\x6c\155\163\x5f\154\157\147\151\156\x5f\x65\x6e\141\142\154\x65");
        $this->otp_type = $this->sanitize_form_post("\x74\165\x74\x6f\162\x5f\x6c\155\163\x5f\154\x6f\x67\x69\156\x5f\145\156\141\142\x6c\x65\137\164\x79\160\x65");
        update_mo_option("\164\x75\x74\x6f\x72\x5f\x6c\155\163\x5f\x6c\157\x67\x69\156\137\x65\156\141\x62\x6c\145\x5f\164\x79\x70\145", $this->otp_type);
        update_mo_option("\x74\165\164\157\162\137\154\155\x73\x5f\x6c\157\147\x69\x6e\137\x65\156\x61\142\154\x65", $this->is_form_enabled);
    }
}
xfL:
