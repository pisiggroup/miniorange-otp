<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\123\x50\101\124\x48")) {
    goto cHB;
}
exit;
cHB:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
if (class_exists("\120\141\x69\x64\115\x65\x6d\142\x65\162\x73\150\151\x70\106\157\x72\x6d")) {
    goto xZw;
}
class PaidMembershipForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::PMPRO_REGISTRATION;
        $this->form_key = "\x50\x4d\137\x50\122\x4f\x5f\x46\x4f\x52\x4d";
        $this->form_name = mo_("\x50\x61\x69\144\x20\x4d\145\x6d\142\145\162\123\150\x69\x70\40\x50\162\x6f\x20\x52\x65\x67\x69\163\164\162\141\164\x69\157\156\40\x46\x6f\x72\x6d");
        $this->phone_form_id = "\x69\x6e\160\x75\164\x5b\156\141\155\x65\75\160\x68\x6f\x6e\x65\137\x70\x61\151\144\155\145\x6d\142\145\x72\x73\150\x69\x70\135";
        $this->type_phone_tag = "\x70\155\x70\x72\x6f\x5f\160\150\157\x6e\145\137\145\156\x61\x62\154\145";
        $this->type_email_tag = "\x70\x6d\160\x72\157\x5f\x65\155\141\x69\154\137\145\156\141\142\154\x65";
        $this->is_form_enabled = get_mo_option("\160\x6d\x70\x72\157\x5f\x65\x6e\x61\x62\154\x65");
        $this->form_documents = MoFormDocs::PAID_MEMBERSHIP_PRO;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\160\x6d\160\x72\157\137\x6f\x74\x70\137\x74\171\160\x65");
        add_action("\167\160\x5f\x65\x6e\x71\165\x65\x75\x65\x5f\x73\143\162\151\x70\x74\163", array($this, "\163\x68\157\167\137\160\x68\x6f\x6e\x65\137\146\151\x65\x6c\x64\137\x6f\156\x5f\160\141\x67\x65"));
        add_filter("\x70\155\160\x72\157\x5f\143\x68\145\x63\153\157\x75\x74\x5f\142\145\146\157\x72\145\137\x70\x72\x6f\143\x65\163\163\x69\x6e\x67", array($this, "\x70\141\x69\144\115\145\155\x62\x65\162\163\150\151\x70\120\x72\x6f\x52\x65\147\x69\163\164\x72\141\164\151\157\x6e\103\150\145\x63\153"), 1, 1);
        add_filter("\160\x6d\x70\x72\x6f\x5f\143\150\x65\x63\153\157\x75\164\x5f\x63\x6f\156\146\x69\162\155\145\x64", array($this, "\151\163\126\x61\154\x69\x64\x61\164\x65\x64"), 99, 2);
        add_action("\x75\163\145\162\137\x72\x65\x67\x69\x73\x74\145\x72", array($this, "\x6d\151\156\x69\157\x72\x61\156\147\145\137\162\145\x67\x69\163\x74\162\x61\x74\151\x6f\156\137\x73\141\x76\145"), 10, 1);
    }
    public function miniorange_registration_save($Uv)
    {
        update_user_meta($Uv, "\155\x6f\137\x70\x68\x6f\x6e\x65\x5f\x6e\x75\155\142\145\x72", sanitize_text_field(isset($_POST["\x70\x68\x6f\x6e\x65\137\x70\x61\x69\x64\155\x65\155\142\x65\x72\x73\150\151\x70"])));
    }
    public function isValidated($Bi, $r4)
    {
        global $Rn;
        return "\x70\155\x70\x72\x6f\x5f\x65\x72\x72\x6f\x72" === $Rn ? false : $Bi;
    }
    public function paidMembershipProRegistrationCheck()
    {
        global $Rn;
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto pFF;
        }
        $this->unset_otp_session_variables();
        return;
        pFF:
        $this->validatePhone($_POST);
        if (!("\x70\155\160\x72\157\137\x65\162\162\x6f\x72" !== $Rn)) {
            goto A34;
        }
        MoUtility::initialize_transaction($this->form_session_var);
        $this->startOTPVerificationProcess($_POST);
        A34:
    }
    private function startOTPVerificationProcess($GX)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto gQE;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto A8l;
        }
        goto pp6;
        gQE:
        $this->send_challenge('', '', null, trim(sanitize_text_field($GX["\160\150\157\x6e\x65\x5f\160\x61\151\144\155\x65\x6d\x62\145\162\163\x68\151\160"])), "\160\x68\x6f\156\x65");
        goto pp6;
        A8l:
        $this->send_challenge('', sanitize_email($GX["\142\x65\x6d\141\151\x6c"]), null, sanitize_email($GX["\x62\x65\x6d\141\151\x6c"]), "\145\x6d\141\151\154");
        pp6:
    }
    public function validatePhone($GX)
    {
        if (!($this->get_verification_type() !== VerificationType::PHONE)) {
            goto rFn;
        }
        return;
        rFn:
        global $O5, $Rn, $Hg, $Dd;
        if (!("\x70\x6d\x70\x72\x6f\x5f\145\162\162\157\x72" === $Rn)) {
            goto avG;
        }
        return;
        avG:
        $aL = sanitize_text_field($GX["\x70\x68\157\156\145\137\x70\x61\151\x64\155\x65\155\142\x65\x72\x73\x68\x69\160"]);
        if (MoUtility::validate_phone_number($aL)) {
            goto jOg;
        }
        $WZ = str_replace("\43\x23\x70\x68\157\156\x65\x23\43", $aL, $Hg->get_otp_invalid_format_message());
        $Rn = "\160\155\x70\x72\157\137\x65\162\162\x6f\162";
        $Dd = false;
        $O5 = apply_filters("\x70\155\x70\162\157\137\x73\145\164\x5f\x6d\x65\x73\163\141\x67\x65", $WZ, $Rn);
        jOg:
    }
    public function show_phone_field_on_page()
    {
        if (!(strcasecmp($this->otp_type, $this->type_phone_tag) === 0)) {
            goto p1z;
        }
        wp_enqueue_script("\x70\x61\151\144\x6d\145\155\x62\x65\x72\163\x68\x69\160\163\143\x72\151\x70\164", MOV_URL . "\151\156\143\x6c\165\x64\145\163\57\x6a\163\x2f\160\x61\151\x64\x6d\x65\x6d\142\145\162\163\150\151\x70\160\x72\x6f\x2e\155\151\156\x2e\x6a\x73\77\x76\145\x72\163\x69\x6f\156\75" . MOV_VERSION, array("\x6a\161\x75\x65\162\171"), MOV_VERSION, false);
        p1z:
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
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!(self::is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto gpm;
        }
        array_push($MI, $this->phone_form_id);
        gpm:
        return $MI;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\x6d\x61\x6e\x61\x67\145\x5f\x6f\x70\x74\151\x6f\x6e\163") || !check_admin_referer($this->admin_nonce))) {
            goto str;
        }
        return;
        str:
        $this->is_form_enabled = $this->sanitize_form_post("\x70\x6d\x70\162\157\137\145\156\141\x62\154\145");
        $this->otp_type = $this->sanitize_form_post("\160\x6d\160\x72\157\x5f\x63\x6f\156\x74\141\143\x74\x5f\164\x79\x70\145");
        update_mo_option("\160\155\x70\x72\157\x5f\x65\x6e\x61\x62\154\145", $this->is_form_enabled);
        update_mo_option("\x70\155\x70\x72\157\x5f\157\x74\x70\x5f\164\171\x70\x65", $this->otp_type);
    }
}
xZw:
