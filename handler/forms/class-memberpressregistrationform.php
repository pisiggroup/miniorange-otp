<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\x53\x50\x41\124\x48")) {
    goto lV;
}
exit;
lV:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\BaseMessages;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationLogic;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
use WP_Error;
if (class_exists("\115\145\155\142\x65\162\120\162\x65\x73\x73\122\x65\x67\x69\163\164\x72\141\x74\x69\157\x6e\106\157\162\155")) {
    goto rM;
}
class MemberPressRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::MEMBERPRESS_REG;
        $this->type_phone_tag = "\x6d\x6f\x5f\x6d\x72\x70\x5f\x70\150\x6f\x6e\x65\x5f\x65\156\141\x62\154\145";
        $this->type_email_tag = "\155\x6f\x5f\x6d\162\160\x5f\x65\155\141\151\x6c\137\x65\x6e\141\x62\154\145";
        $this->type_both_tag = "\x6d\157\137\x6d\162\160\x5f\142\x6f\x74\150\x5f\145\x6e\141\142\154\145";
        $this->form_name = mo_("\x4d\x65\x6d\x62\x65\162\x50\162\x65\x73\x73\40\x52\x65\x67\151\x73\164\x72\x61\164\x69\x6f\x6e\x20\106\x6f\x72\155");
        $this->form_key = "\115\x45\115\x42\105\122\x50\x52\x45\123\x53";
        $this->is_form_enabled = get_mo_option("\155\x72\160\137\x64\x65\146\141\165\154\x74\137\145\156\x61\x62\x6c\x65");
        $this->form_documents = MoFormDocs::MRP_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->by_pass_login = get_mo_option("\x6d\x72\160\137\x61\156\x6f\156\137\x6f\x6e\x6c\x79");
        $this->phone_key = get_mo_option("\x6d\x72\160\x5f\x70\150\157\x6e\x65\x5f\153\145\171");
        $this->otp_type = get_mo_option("\155\x72\160\x5f\x65\156\141\142\x6c\x65\137\164\x79\x70\145");
        $this->phone_form_id = "\151\156\160\x75\164\x5b\156\141\155\145\x3d" . $this->phone_key . "\x5d";
        add_filter("\155\145\x70\162\x2d\166\x61\x6c\x69\144\x61\164\x65\x2d\163\151\x67\x6e\x75\160", array($this, "\x6d\x69\156\x69\157\162\x61\x6e\147\145\137\x73\x69\164\145\137\x72\145\x67\x69\163\x74\145\162\137\x66\x6f\162\x6d"), 99, 1);
    }
    public function miniorange_site_register_form($errors)
    {
        if (!($this->by_pass_login && is_user_logged_in())) {
            goto Rg;
        }
        return $errors;
        Rg:
        $dU = MoUtility::mo_sanitize_array($_POST);
        $bV = '';
        if (!$this->isPhoneVerificationEnabled()) {
            goto ax;
        }
        $bV = isset($_POST[$this->phone_key]) ? sanitize_text_field(wp_unslash($_POST[$this->phone_key])) : '';
        $errors = $this->validate_phone_numberField($errors);
        ax:
        if (!(is_array($errors) && !empty($errors))) {
            goto p8;
        }
        return $errors;
        p8:
        if (!$this->checkIfVerificationIsComplete()) {
            goto YK;
        }
        return $errors;
        YK:
        MoUtility::initialize_transaction($this->form_session_var);
        $errors = new WP_Error();
        foreach ($_POST as $a6 => $bh) {
            if ("\165\163\x65\x72\137\x66\x69\x72\163\164\137\156\x61\155\x65" === $a6) {
                goto B8;
            }
            if ("\x75\163\145\162\137\x65\155\x61\x69\154" === $a6) {
                goto lc;
            }
            if ("\155\x65\x70\x72\137\165\x73\x65\162\137\x70\141\x73\163\x77\x6f\x72\x64" === $a6) {
                goto gO;
            }
            $ia[$a6] = $bh;
            goto j6;
            B8:
            $JG = $bh;
            goto j6;
            lc:
            $ZG = $bh;
            goto j6;
            gO:
            $L8 = $bh;
            j6:
            Kv:
        }
        cn:
        $ia["\165\x73\x65\x72\155\x65\x74\141"] = $dU;
        $this->startVerificationProcess($JG, $ZG, $errors, $bV, $L8, $ia);
        return $errors;
    }
    private function validate_phone_numberField($errors)
    {
        global $Hg;
        if (!MoUtility::sanitize_check($this->phone_key, $_POST)) {
            goto yl;
        }
        if (!MoUtility::validate_phone_number(isset($_POST[$this->phone_key]) ? sanitize_text_field(wp_unslash($_POST[$this->phone_key])) : '')) {
            goto vp;
        }
        goto GI;
        yl:
        $errors[] = mo_("\120\x68\x6f\x6e\145\40\156\x75\155\x62\145\x72\40\146\151\x65\154\x64\x20\x63\141\x6e\x20\156\x6f\164\x20\x62\145\x20\x62\154\x61\x6e\x6b");
        goto GI;
        vp:
        $errors[] = $Hg->get_otp_invalid_format_message();
        GI:
        return $errors;
    }
    private function startVerificationProcess($JG, $ZG, $errors, $bV, $L8, $ia)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto Ip;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto eZ;
        }
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::EMAIL, $L8, $ia);
        goto aU;
        Ip:
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::PHONE, $L8, $ia);
        goto aU;
        eZ:
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::BOTH, $L8, $ia);
        aU:
    }
    private function checkIfVerificationIsComplete()
    {
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto MD;
        }
        $this->unset_otp_session_variables();
        return true;
        MD:
        return false;
    }
    public function moMRPgetphoneFieldId()
    {
        global $wpdb;
        return $wpdb->get_var($wpdb->prepare("\123\105\x4c\105\103\x54\x20\x69\x64\x20\x46\122\117\x4d\40{$wpdb->prefix}\142\x70\137\170\160\x72\157\x66\151\154\145\x5f\x66\x69\145\x6c\144\163\40\127\110\x45\x52\x45\x20\156\x61\x6d\145\40\75\40\45\x73", array($this->phone_key)));
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto Gg;
        }
        return;
        Gg:
        $Vw = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Vw ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Vw, $Df);
    }
    public function get_phone_number_selector($MI)
    {
        if (!(self::is_form_enabled() && $this->isPhoneVerificationEnabled())) {
            goto KN;
        }
        array_push($MI, $this->phone_form_id);
        KN:
        return $MI;
    }
    private function isPhoneVerificationEnabled()
    {
        $I2 = $this->get_verification_type();
        return VerificationType::PHONE === $I2 || VerificationType::BOTH === $I2;
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto Nd;
        }
        return;
        Nd:
        $this->is_form_enabled = $this->sanitize_form_post("\155\162\x70\137\144\145\x66\x61\x75\x6c\164\137\x65\156\141\142\154\145");
        $this->otp_type = $this->sanitize_form_post("\x6d\162\160\x5f\145\x6e\141\x62\154\x65\137\x74\x79\x70\x65");
        $this->phone_key = $this->sanitize_form_post("\x6d\x72\160\x5f\x70\150\x6f\156\145\x5f\146\x69\x65\x6c\x64\137\153\x65\x79");
        $this->by_pass_login = $this->sanitize_form_post("\155\160\x72\137\141\x6e\x6f\156\137\x6f\x6e\x6c\x79");
        if (!$this->basic_validation_check(BaseMessages::MEMBERPRESS_CHOOSE)) {
            goto o8;
        }
        update_mo_option("\155\x72\160\137\144\145\x66\141\165\x6c\x74\137\145\156\141\x62\154\x65", $this->is_form_enabled);
        update_mo_option("\x6d\x72\x70\x5f\x65\156\x61\142\154\145\x5f\x74\x79\160\x65", $this->otp_type);
        update_mo_option("\x6d\162\160\137\x70\150\x6f\156\145\137\x6b\145\171", $this->phone_key);
        update_mo_option("\155\162\x70\x5f\141\156\157\156\137\157\x6e\x6c\171", $this->by_pass_login);
        o8:
    }
}
rM:
