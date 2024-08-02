<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\x53\120\x41\124\x48")) {
    goto Uyq;
}
exit;
Uyq:
use mysql_xdevapi\Session;
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationLogic;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
use stdClass;
if (class_exists("\123\151\x6d\x70\154\x72\122\x65\x67\x69\x73\164\162\141\x74\151\x6f\x6e\x46\157\x72\155")) {
    goto gVE;
}
class SimplrRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::SIMPLR_REG;
        $this->type_phone_tag = "\155\x6f\137\x70\150\157\x6e\145\x5f\x65\x6e\x61\x62\154\x65";
        $this->type_email_tag = "\155\x6f\x5f\145\x6d\141\151\x6c\137\x65\156\141\142\x6c\145";
        $this->type_both_tag = "\155\x6f\137\142\x6f\x74\150\137\145\x6e\x61\x62\154\145";
        $this->form_key = "\x53\111\x4d\x50\x4c\122\137\106\x4f\122\115";
        $this->form_name = mo_("\123\x69\x6d\x70\154\x72\x20\125\163\x65\x72\40\x52\145\x67\x69\x73\164\162\x61\164\151\157\x6e\40\106\157\162\155\x20\120\154\165\x73");
        $this->is_form_enabled = get_mo_option("\163\151\x6d\160\x6c\162\137\x64\145\x66\x61\165\x6c\x74\137\145\156\x61\142\154\145");
        $this->form_documents = MoFormDocs::SIMPLR_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->form_key = get_mo_option("\163\151\x6d\160\154\x72\137\146\x69\x65\154\144\x5f\x6b\145\171");
        $this->otp_type = get_mo_option("\163\x69\x6d\x70\x6c\x72\137\145\x6e\x61\142\x6c\145\x5f\164\171\160\x65");
        $this->phone_form_id = "\151\156\x70\x75\x74\133\x6e\141\x6d\145\x3d" . $this->form_key . "\x5d";
        add_filter("\163\x69\155\160\154\162\x5f\x76\141\154\x69\x64\x61\x74\x65\137\x66\x6f\x72\x6d", array($this, "\x73\x69\155\x70\x6c\162\137\163\x69\164\x65\x5f\x72\145\147\151\x73\164\162\141\x74\151\157\156\137\x65\x72\x72\157\162\163"), 10, 1);
    }
    private function isPhoneVerificationEnabled()
    {
        $Bo = $this->get_verification_type();
        return VerificationType::PHONE === $Bo || VerificationType::BOTH === $Bo;
    }
    private function simplr_site_registration_errors($errors)
    {
        $L8 = '';
        $bV = '';
        $NY = isset($_POST["\146\x62\165\x73\x65\162\137\151\x64"]) ? sanitize_text_field(wp_unslash($_POST["\146\x62\x75\x73\x65\162\x5f\151\x64"])) : '';
        if (!(!empty($errors) || $NY)) {
            goto sq5;
        }
        return $errors;
        sq5:
        $GX = MoUtility::mo_sanitize_array($_POST);
        foreach ($GX as $a6 => $bh) {
            if ("\165\x73\145\x72\x6e\141\155\145" === $a6) {
                goto FQs;
            }
            if ("\145\x6d\x61\151\154" === $a6) {
                goto ePB;
            }
            if ("\160\x61\x73\x73\x77\157\162\144" === $a6) {
                goto iJx;
            }
            if ($a6 === $this->form_key) {
                goto S3D;
            }
            $ia[$a6] = $bh;
            goto rHh;
            FQs:
            $JG = $bh;
            goto rHh;
            ePB:
            $ZG = $bh;
            goto rHh;
            iJx:
            $L8 = $bh;
            goto rHh;
            S3D:
            $bV = $bh;
            rHh:
            aI7:
        }
        cAq:
        if (!(strcasecmp($this->otp_type, $this->type_phone_tag) === 0 && !$this->processPhone($bV, $errors))) {
            goto T3k;
        }
        return $errors;
        T3k:
        $this->processAndStartOTPVerificationProcess($JG, $ZG, $errors, $bV, $L8, $ia);
        return $errors;
    }
    private function processPhone($bV, &$errors)
    {
        if (MoUtility::validate_phone_number($bV)) {
            goto TpP;
        }
        global $Hg;
        $errors[] .= str_replace("\x23\x23\x70\150\x6f\x6e\145\43\x23", $bV, $Hg->get_otp_invalid_format_message());
        add_filter($this->form_key . "\x5f\x65\x72\162\157\x72\x5f\x63\x6c\x61\163\163", "\x5f\x73\x72\145\x67\137\162\145\x74\x75\x72\x6e\x5f\145\162\x72\x6f\162");
        return false;
        TpP:
        return true;
    }
    private function processAndStartOTPVerificationProcess($JG, $ZG, $errors, $bV, $L8, $ia)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto WoL;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto EeK;
        }
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::EMAIL, $L8, $ia);
        goto rI3;
        WoL:
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::PHONE, $L8, $ia);
        goto rI3;
        EeK:
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::BOTH, $L8, $ia);
        rI3:
    }
    private function register_simplr_user($kD, $Wb, $L8, $bV, $ia)
    {
        $GX = array();
        global $sreg;
        if ($sreg) {
            goto Q_I;
        }
        $sreg = new stdClass();
        Q_I:
        $GX["\165\x73\x65\x72\x6e\141\155\x65"] = $kD;
        $GX["\145\x6d\141\x69\154"] = $Wb;
        $GX["\160\x61\x73\163\x77\157\162\x64"] = $L8;
        if (!$this->form_key) {
            goto waw;
        }
        $GX[$this->form_key] = $bV;
        waw:
        $GX = array_merge($GX, $ia);
        $kn = $ia["\141\x74\x74\163"];
        $sreg->output = simplr_setup_user($kn, $GX);
        if (!MoUtility::is_blank($sreg->errors)) {
            goto vE0;
        }
        $this->checkMessageAndRedirect($kn);
        vE0:
    }
    private function checkMessageAndRedirect($kn)
    {
        global $sreg, $simplr_options;
        $pH = isset($kn["\164\150\x61\x6e\153\x73"]) ? get_permalink($kn["\x74\150\141\x6e\153\163"]) : (!MoUtility::is_blank($simplr_options->thank_you) ? get_permalink($simplr_options->thank_you) : '');
        if (MoUtility::is_blank($pH)) {
            goto GAo;
        }
        wp_safe_redirect($pH);
        exit;
        goto DjB;
        GAo:
        $sreg->success = $sreg->output;
        DjB:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto Y7i;
        }
        return;
        Y7i:
        $Bo = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Bo ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Bo, $Df);
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        $this->unset_otp_session_variables();
        $this->register_simplr_user($kD, $Wb, $L8, $bV, $ia);
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->isPhoneVerificationEnabled())) {
            goto Umx;
        }
        array_push($MI, $this->phone_form_id);
        Umx:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto dRC;
        }
        return;
        dRC:
        $this->is_form_enabled = $this->sanitize_form_post("\163\151\155\x70\154\162\137\x64\145\146\x61\165\154\x74\137\145\156\x61\142\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\x73\x69\155\x70\x6c\162\x5f\145\156\141\142\154\145\x5f\x74\171\x70\145");
        $this->phone_key = $this->sanitize_form_post("\x73\x69\155\x70\x6c\x72\x5f\x70\150\x6f\156\145\137\x66\151\x65\154\144\137\x6b\145\171");
        update_mo_option("\x73\x69\155\160\154\x72\137\x64\145\146\x61\165\x6c\x74\x5f\145\156\141\142\x6c\145", $this->is_form_enabled);
        update_mo_option("\x73\151\155\160\154\x72\137\145\156\x61\x62\x6c\x65\137\164\171\x70\x65", $this->otp_type);
        update_mo_option("\x73\151\155\x70\x6c\162\137\x66\151\x65\x6c\x64\137\x6b\145\171", $this->phone_key);
    }
}
gVE:
