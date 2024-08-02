<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\x53\x50\x41\x54\110")) {
    goto Uqd;
}
exit;
Uqd:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use WP_Error;
if (class_exists("\x50\162\x6f\x66\x69\x6c\145\x42\165\151\x6c\144\145\162\x52\145\147\151\163\x74\162\x61\164\x69\157\156\x46\157\162\x6d")) {
    goto UIc;
}
class ProfileBuilderRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::PB_DEFAULT_REG;
        $this->type_phone_tag = "\155\x6f\137\x70\142\x5f\160\x68\x6f\156\145\x5f\x65\156\x61\142\154\145";
        $this->type_email_tag = "\155\x6f\137\x70\142\137\145\x6d\141\x69\154\137\x65\156\x61\142\154\145";
        $this->type_both_tag = "\x6d\x6f\137\160\x62\137\x62\x6f\164\x68\137\x65\156\141\x62\x6c\145";
        $this->form_key = "\x50\102\x5f\104\105\x46\x41\x55\114\x54\x5f\x46\x4f\x52\x4d";
        $this->form_name = mo_("\120\x72\157\146\x69\x6c\x65\x20\102\165\x69\x6c\x64\145\x72\40\x52\145\147\151\163\x74\162\x61\164\151\x6f\156\x20\106\157\x72\155");
        $this->is_form_enabled = get_mo_option("\160\x62\x5f\x64\x65\146\x61\x75\x6c\x74\x5f\x65\x6e\x61\x62\x6c\145");
        $this->form_documents = MoFormDocs::PB_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\160\142\137\x65\156\x61\x62\x6c\x65\x5f\164\x79\160\x65");
        $this->phone_key = get_mo_option("\160\x62\x5f\x70\x68\157\x6e\x65\x5f\x6d\145\164\x61\x5f\x6b\145\x79");
        $this->phone_form_id = "\x69\156\160\x75\164\x5b\x6e\x61\155\145\x3d" . $this->phone_key . "\135";
        add_filter("\x77\160\x70\142\x5f\x6f\165\x74\x70\x75\164\137\146\151\x65\x6c\144\x5f\145\x72\162\x6f\162\163\137\146\151\x6c\164\145\x72", array($this, "\146\x6f\x72\155\x62\165\151\x6c\x64\x65\162\137\x73\151\x74\145\x5f\x72\x65\147\x69\163\164\x72\141\164\151\x6f\156\x5f\x65\162\x72\x6f\162\163"), 99, 4);
    }
    private function isPhoneVerificationEnabled()
    {
        $Bo = $this->get_verification_type();
        return VerificationType::PHONE === $Bo || VerificationType::BOTH === $Bo;
    }
    public function formbuilder_site_registration_errors($Kv, $Oz, $sE, $qy)
    {
        if (empty($Kv)) {
            goto yD8;
        }
        return $Kv;
        yD8:
        if (!("\162\x65\147\x69\163\164\x65\162" === $sE["\141\143\x74\151\157\x6e"])) {
            goto p8_;
        }
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto wof;
        }
        $this->unset_otp_session_variables();
        return $Kv;
        wof:
        $this->startOTPVerificationProcess($Kv, $sE);
        p8_:
        return $Kv;
    }
    private function startOTPVerificationProcess($Kv, $GX)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        $rp = $this->extractArgs($GX, $this->phone_key);
        $this->send_challenge($rp["\x75\x73\x65\162\156\141\155\x65"], $rp["\x65\155\141\x69\154"], new WP_Error(), $rp["\x70\150\157\x6e\x65"], $this->get_verification_type(), $rp["\x70\141\x73\163\x77\61"], array());
    }
    private function extractArgs($rp, $Ig)
    {
        return array("\165\x73\145\162\x6e\x61\155\145" => $rp["\165\x73\145\x72\x6e\x61\155\x65"], "\145\155\141\x69\154" => $rp["\145\x6d\141\151\154"], "\x70\141\163\x73\x77\61" => $rp["\160\x61\163\x73\x77\x31"], "\160\x68\x6f\x6e\145" => MoUtility::sanitize_check($Ig, $rp));
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $this->get_verification_type(), false);
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
            goto IJa;
        }
        array_push($MI, $this->phone_form_id);
        IJa:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto WRV;
        }
        return;
        WRV:
        $this->is_form_enabled = $this->sanitize_form_post("\x70\142\137\x64\145\146\141\165\154\x74\x5f\145\156\141\142\154\145");
        $this->otp_type = $this->sanitize_form_post("\x70\x62\137\145\x6e\141\142\154\x65\x5f\164\171\160\x65");
        $this->phone_key = $this->sanitize_form_post("\160\x62\137\x70\150\x6f\156\145\137\146\x69\x65\x6c\144\x5f\153\145\x79");
        update_mo_option("\x70\142\137\x64\x65\x66\141\165\154\164\x5f\145\x6e\x61\142\x6c\x65", $this->is_form_enabled);
        update_mo_option("\160\x62\137\x65\156\x61\x62\x6c\145\137\164\171\x70\x65", $this->otp_type);
        update_mo_option("\160\x62\137\x70\150\157\x6e\x65\x5f\x6d\145\x74\x61\137\x6b\x65\171", $this->phone_key);
    }
}
UIc:
