<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\x53\x50\x41\124\x48")) {
    goto eD;
}
exit;
eD:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
if (class_exists("\115\165\x6c\x74\151\x53\x69\164\x65\106\x6f\x72\155\122\145\147\x69\163\164\162\x61\x74\x69\x6f\x6e")) {
    goto g4;
}
class MultiSiteFormRegistration extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::MULTISITE;
        $this->phone_form_id = "\151\156\160\x75\x74\x5b\x6e\x61\x6d\x65\75\155\x75\154\x74\x69\163\x69\164\x65\137\165\x73\x65\162\137\160\x68\x6f\x6e\x65\137\x6d\x69\x6e\151\x6f\x72\141\x6e\x67\145\135";
        $this->type_phone_tag = "\155\x6f\x5f\155\165\x6c\164\151\163\x69\x74\145\x5f\x63\x6f\156\164\x61\143\164\x5f\x70\x68\x6f\x6e\145\x5f\x65\x6e\x61\x62\154\x65";
        $this->type_email_tag = "\155\x6f\x5f\155\x75\154\x74\151\x73\x69\x74\145\x5f\x63\157\156\164\141\x63\164\x5f\x65\x6d\141\151\154\137\145\x6e\141\x62\154\x65";
        $this->form_key = "\127\x50\x5f\x53\111\x47\116\x55\x50\x5f\x46\117\122\x4d";
        $this->form_name = mo_("\x57\x6f\x72\x64\120\x72\145\x73\163\40\115\165\x6c\164\x69\x73\x69\164\145\x20\123\151\x67\156\125\160\x20\106\157\162\155");
        $this->is_form_enabled = get_mo_option("\x6d\x75\x6c\164\x69\x73\151\164\145\137\x65\x6e\x61\x62\154\145");
        $this->phone_key = "\164\145\154\145\160\x68\157\156\x65";
        $this->form_documents = MoFormDocs::MULTISITE_REG_FORM;
        parent::__construct();
    }
    public function handle_form()
    {
        add_action("\167\160\x5f\x65\156\x71\x75\x65\165\x65\137\x73\x63\x72\x69\x70\x74\163", array($this, "\x61\144\x64\x50\150\157\156\145\x46\x69\145\x6c\x64\x53\143\162\x69\x70\164"));
        add_action("\165\163\x65\162\x5f\162\145\147\151\x73\x74\x65\162", array($this, "\x73\141\x76\145\120\x68\x6f\x6e\x65\x4e\x75\x6d\x62\x65\x72"), 10, 1);
        $this->otp_type = get_mo_option("\155\x75\x6c\x74\151\163\151\164\145\x5f\157\164\x70\137\164\171\x70\x65");
        $AP = wp_create_nonce("\x6d\x75\154\164\151\163\x69\164\145\137\x6e\157\156\143\x65");
        if (!(!wp_verify_nonce($AP, "\x6d\x75\154\164\151\x73\x69\164\145\x5f\x6e\157\156\143\x65") === 1)) {
            goto ok;
        }
        return;
        ok:
        $GX = MoUtility::mo_sanitize_array($_POST);
        if (array_key_exists("\x6f\x70\164\x69\157\156", $_POST)) {
            goto C_;
        }
        return;
        C_:
        switch (trim(isset($GX["\x70\x61\x73\x73\x77\157\x72\144\x5f\155\157"]) ? sanitize_text_field(wp_unslash($GX["\160\x61\163\x73\x77\157\162\144\x5f\x6d\x6f"])) : '')) {
            case "\x6d\165\x6c\x74\x69\163\x69\x74\145\137\162\145\x67\151\x73\x74\x65\x72":
                $this->sanitizeAndRouteData($GX);
                goto FS;
            case "\x6d\151\156\151\157\162\x61\x6e\x67\x65\55\166\141\x6c\151\144\x61\164\x65\x2d\x6f\x74\x70\x2d\x66\157\x72\x6d":
                $this->startValidation();
                goto FS;
        }
        qa:
        FS:
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
        $this->unset_otp_session_variables();
    }
    public function savePhoneNumber($Uv)
    {
        $bV = MoPHPSessions::get_session_var("\160\x68\x6f\156\x65\x5f\x6e\165\x6d\142\x65\162\137\x6d\x6f");
        if (!$bV) {
            goto uq;
        }
        update_user_meta($Uv, $this->phone_key, $bV);
        uq:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto ZZ;
        }
        return;
        ZZ:
        $Bo = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Bo ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Bo, $Df);
    }
    private function sanitizeAndRouteData($Jz)
    {
        $xD = wpmu_validate_user_signup(isset($Jz["\165\x73\145\162\x5f\x6e\141\x6d\145"]) ? sanitize_text_field(wp_unslash($Jz["\165\x73\145\162\x5f\x6e\141\155\x65"])) : '', isset($Jz["\165\163\x65\162\137\x65\x6d\x61\151\x6c"]) ? sanitize_text_field(wp_unslash($Jz["\165\x73\145\162\x5f\x65\155\141\151\154"])) : '');
        $errors = $xD["\x65\x72\x72\157\162\x73"];
        if (!$errors->get_error_code()) {
            goto YN;
        }
        return false;
        YN:
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto jA;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto w9;
        }
        goto UQ;
        jA:
        $this->processPhone($Jz);
        goto UQ;
        w9:
        $this->processEmail($Jz);
        UQ:
        return false;
    }
    private function startValidation()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto Bl;
        }
        return;
        Bl:
        $Bo = $this->get_verification_type();
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto SU;
        }
        return;
        SU:
        $this->validate_challenge($Bo);
    }
    public function addPhoneFieldScript()
    {
        wp_enqueue_script("\155\165\154\164\x69\163\151\164\x65\x73\143\x72\151\x70\x74", MOV_URL . "\x69\x6e\143\154\x75\144\x65\x73\57\x6a\163\x2f\155\165\154\164\x69\163\x69\164\145\x2e\x6d\151\156\56\x6a\163\77\166\145\x72\163\x69\x6f\x6e\x3d" . MOV_VERSION, array("\152\x71\165\145\162\x79"), MOV_VERSION, true);
    }
    private function processPhone($Jz)
    {
        if (isset($Jz["\155\x75\154\164\151\x73\151\x74\145\x5f\x75\163\x65\162\x5f\160\x68\157\x6e\145\137\x6d\x69\x6e\x69\157\x72\x61\x6e\x67\145"])) {
            goto V7;
        }
        return;
        V7:
        $this->send_challenge('', '', null, trim($Jz["\155\x75\x6c\x74\151\163\151\x74\x65\137\x75\163\145\162\x5f\160\x68\157\x6e\145\137\155\x69\x6e\x69\x6f\162\x61\x6e\x67\x65"]), VerificationType::PHONE);
    }
    private function processEmail($Jz)
    {
        if (isset($Jz["\165\x73\145\x72\137\145\155\x61\x69\x6c"])) {
            goto o0;
        }
        return;
        o0:
        $this->send_challenge('', $Jz["\x75\163\x65\162\x5f\145\155\x61\151\154"], null, null, VerificationType::EMAIL, '');
    }
    public function get_phone_number_selector($MI)
    {
        if (!self::is_form_enabled()) {
            goto H_;
        }
        array_push($MI, $this->phone_form_id);
        H_:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto OG;
        }
        return;
        OG:
        $this->is_form_enabled = $this->sanitize_form_post("\155\x75\154\164\x69\163\151\x74\145\x5f\x65\x6e\141\142\154\145");
        $this->otp_type = $this->sanitize_form_post("\155\x75\x6c\164\x69\163\151\164\145\x5f\143\157\x6e\x74\141\x63\164\137\x74\171\x70\145");
        update_mo_option("\155\165\x6c\164\151\x73\x69\x74\145\x5f\145\156\141\x62\x6c\x65", $this->is_form_enabled);
        update_mo_option("\x6d\x75\154\164\151\163\151\x74\x65\137\x6f\164\160\x5f\164\x79\x70\x65", $this->otp_type);
    }
}
g4:
