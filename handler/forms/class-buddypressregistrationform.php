<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\x53\120\101\124\x48")) {
    goto Pi;
}
exit;
Pi:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\BaseMessages;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use WP_Error;
use BP_Signup;
use WP_User;
if (class_exists("\x42\x75\x64\144\x79\x50\x72\145\163\163\122\145\x67\x69\x73\x74\162\141\x74\151\157\x6e\x46\157\162\155")) {
    goto JN;
}
class BuddyPressRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::BUDDYPRESS_REG;
        $this->type_phone_tag = "\x6d\x6f\137\x62\142\x70\x5f\x70\150\x6f\156\145\137\x65\x6e\141\142\x6c\x65";
        $this->type_email_tag = "\x6d\x6f\x5f\142\x62\160\x5f\x65\155\141\x69\x6c\x5f\145\x6e\141\x62\x6c\x65";
        $this->type_both_tag = "\155\157\x5f\142\142\x70\x5f\142\x6f\x74\x68\x5f\145\x6e\x61\142\x6c\x65\144";
        $this->form_key = "\102\120\137\104\105\x46\x41\x55\x4c\124\x5f\x46\117\122\x4d";
        $this->form_name = mo_("\102\x75\144\144\171\x50\x72\x65\163\163\x20\x2f\40\102\165\144\144\x79\x42\157\163\163\40\x52\x65\x67\x69\x73\164\162\141\164\x69\157\156\40\106\x6f\x72\x6d");
        $this->is_form_enabled = get_mo_option("\x62\x62\160\x5f\144\x65\x66\x61\165\154\164\137\145\x6e\141\142\x6c\145");
        $this->form_documents = MoFormDocs::BBP_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->phone_key = get_mo_option("\142\142\160\x5f\160\x68\157\156\x65\137\x6b\145\x79");
        $this->otp_type = get_mo_option("\142\142\x70\x5f\x65\x6e\x61\x62\x6c\x65\137\x74\171\160\145");
        $this->disable_auto_activate = get_mo_option("\x62\x62\160\137\x64\151\x73\x61\x62\154\x65\x5f\141\x63\x74\x69\x76\141\164\x69\157\x6e");
        $this->phone_form_id = "\x69\x6e\x70\x75\164\133\156\141\x6d\145\75\146\x69\x65\x6c\144\137" . $this->moBBPgetphoneFieldId() . "\x5d";
        $this->restrict_duplicates = get_mo_option("\142\142\x70\137\x72\x65\x73\x74\162\151\143\164\137\144\165\160\x6c\151\143\141\x74\145\x73");
        add_filter("\x62\160\137\162\x65\x67\x69\163\164\x72\141\x74\x69\157\x6e\137\156\x65\145\144\x73\x5f\141\143\164\x69\166\141\x74\151\157\x6e", array($this, "\x66\151\170\x5f\x73\x69\147\x6e\165\x70\x5f\146\x6f\x72\x6d\x5f\x76\x61\x6c\151\144\x61\164\x69\157\x6e\x5f\164\x65\170\164"));
        add_filter("\142\x70\137\x63\157\162\x65\137\163\x69\x67\x6e\165\x70\137\163\x65\156\x64\x5f\x61\143\x74\151\166\141\164\x69\x6f\x6e\x5f\x6b\x65\x79", array($this, "\144\x69\x73\141\142\x6c\145\x5f\x61\143\164\151\x76\141\164\151\157\x6e\137\145\155\x61\x69\154"));
        add_filter("\142\160\137\x73\x69\147\156\165\160\137\165\163\x65\x72\x6d\145\x74\x61", array($this, "\155\151\x6e\151\157\162\141\156\x67\145\137\142\x70\137\165\x73\145\x72\x5f\x72\145\x67\151\163\164\x72\x61\164\151\157\156"), 1, 1);
        add_action("\x62\x70\137\163\151\x67\156\165\x70\x5f\x76\x61\x6c\151\x64\141\x74\145", array($this, "\166\141\x6c\x69\144\x61\x74\145\117\x54\120\122\145\161\165\145\163\x74"), 99, 0);
        if (!$this->disable_auto_activate) {
            goto Dj;
        }
        add_action("\x62\160\x5f\x63\x6f\x72\x65\137\x73\151\x67\156\165\x70\137\165\163\x65\162", array($this, "\155\157\137\x61\x63\164\151\166\x61\x74\145\x5f\x62\142\x70\137\165\x73\x65\x72"), 1, 5);
        Dj:
    }
    public function fix_signup_form_validation_text()
    {
        return $this->disable_auto_activate ? false : true;
    }
    public function disable_activation_email()
    {
        return $this->disable_auto_activate ? false : true;
    }
    private function isPhoneVerificationEnabled()
    {
        $I2 = $this->get_verification_type();
        return VerificationType::PHONE === $I2 || VerificationType::BOTH === $I2;
    }
    public function validateOTPRequest()
    {
        global $bp, $Hg;
        $HF = "\146\x69\x65\x6c\x64\x5f" . $this->moBBPgetphoneFieldId();
        if (isset($_POST[$HF]) && !MoUtility::validate_phone_number(sanitize_text_field(wp_unslash($_POST[$HF])))) {
            goto QW;
        }
        if ($this->isPhoneNumberAlreadyInUse(sanitize_text_field(wp_unslash($_POST[$HF])))) {
            goto G1;
        }
        goto BV;
        QW:
        $bp->signup->errors[$HF] = str_replace("\43\43\x70\150\157\x6e\x65\43\x23", sanitize_text_field(wp_unslash($_POST[$HF])), $Hg->get_otp_invalid_format_message());
        goto BV;
        G1:
        $bp->signup->errors[$HF] = mo_("\120\150\157\156\145\x20\156\165\155\x62\x65\162\40\x61\x6c\162\x65\x61\144\171\x20\x69\156\40\165\x73\x65\56\40\x50\154\145\141\x73\145\40\x45\x6e\164\145\162\40\141\40\144\151\x66\146\145\162\145\x6e\164\x20\x50\150\x6f\156\x65\40\x6e\165\x6d\x62\145\x72\56");
        BV:
    }
    private function isPhoneNumberAlreadyInUse($M9)
    {
        if (!$this->restrict_duplicates) {
            goto Op;
        }
        global $wpdb;
        $M9 = MoUtility::process_phone_number($M9);
        $HF = $this->moBBPgetphoneFieldId();
        $lR = $wpdb->get_row($wpdb->prepare("\x53\105\x4c\105\x43\x54\40\140\165\x73\145\162\137\151\144\x60\40\106\x52\117\115\40\140{$wpdb->prefix}\142\160\x5f\170\160\162\157\x66\151\x6c\145\137\144\141\x74\x61\x60\x20\x57\x48\x45\122\105\40\x60\x66\151\145\154\144\137\x69\144\x60\40\x3d\x20\x25\x73\x20\x41\116\104\40\140\166\x61\154\165\x65\x60\40\x3d\40\40\x25\x73", array($HF, $M9)));
        return !MoUtility::is_blank($lR);
        Op:
        return false;
    }
    private function checkIfVerificationIsComplete()
    {
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto f5;
        }
        $this->unset_otp_session_variables();
        return true;
        f5:
        return false;
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
    public function miniorange_bp_user_registration($dU)
    {
        if (!$this->checkIfVerificationIsComplete()) {
            goto Iy;
        }
        return $dU;
        Iy:
        MoUtility::initialize_transaction($this->form_session_var);
        $errors = new WP_Error();
        $bV = null;
        foreach ($_POST as $a6 => $bh) {
            if ("\x73\151\x67\x6e\x75\x70\137\x75\163\145\x72\x6e\x61\155\145" === $a6) {
                goto Qo;
            }
            if ("\x73\151\x67\156\165\x70\137\x65\x6d\x61\151\x6c" === $a6) {
                goto vG;
            }
            if ("\x73\151\147\x6e\165\x70\137\160\141\x73\x73\167\x6f\x72\x64" === $a6) {
                goto xy;
            }
            $ia[$a6] = $bh;
            goto E8;
            Qo:
            $JG = $bh;
            goto E8;
            vG:
            $ZG = $bh;
            goto E8;
            xy:
            $L8 = $bh;
            E8:
            r1:
        }
        kw:
        $f9 = $this->moBBPgetphoneFieldId();
        if (!isset($_POST["\x66\151\x65\x6c\x64\137" . $f9])) {
            goto XB;
        }
        $bV = sanitize_text_field(wp_unslash($_POST["\x66\151\145\x6c\x64\x5f" . $f9]));
        XB:
        $ia["\165\163\145\x72\x6d\145\x74\x61"] = $dU;
        $this->startVerificationProcess($JG, $ZG, $errors, $bV, $L8, $ia);
        return $dU;
    }
    private function startVerificationProcess($JG, $ZG, $errors, $bV, $L8, $ia)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto eE;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto eM;
        }
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::EMAIL, $L8, $ia);
        goto v3;
        eE:
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::PHONE, $L8, $ia);
        goto v3;
        eM:
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::BOTH, $L8, $ia);
        v3:
    }
    public function mo_activate_bbp_user($Uv, $kD)
    {
        $HE = $this->moBBPgetActivationKey($kD);
        bp_core_activate_signup($HE);
        BP_Signup::validate($HE);
        $hQ = new WP_User($Uv);
        $hQ->add_role("\163\165\142\163\x63\x72\151\142\145\162");
    }
    private function moBBPgetActivationKey($kD)
    {
        global $wpdb;
        return $wpdb->get_var($wpdb->prepare("\x53\x45\x4c\x45\103\x54\40\141\143\164\151\166\x61\164\151\157\156\x5f\x6b\145\x79\40\106\122\117\x4d\40{$wpdb->prefix}\x73\151\147\x6e\x75\160\163\40\127\110\x45\122\x45\x20\141\x63\164\151\166\145\x20\x3d\40\47\60\x27\40\101\x4e\x44\40\165\163\x65\x72\137\154\157\147\151\156\x20\x3d\40\45\163", array($kD)));
    }
    private function moBBPgetphoneFieldId()
    {
        global $wpdb;
        return $wpdb->get_var($wpdb->prepare("\x53\x45\x4c\x45\103\x54\40\151\144\40\x46\x52\x4f\x4d\x20{$wpdb->prefix}\142\160\137\170\x70\162\x6f\x66\x69\x6c\145\137\146\151\145\154\x64\163\x20\167\x68\145\162\x65\x20\x6e\141\x6d\145\x20\x3d\x20\x25\x73", array($this->phone_key)));
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->form_session_var, $this->tx_session_id));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->isPhoneVerificationEnabled())) {
            goto ja;
        }
        array_push($MI, $this->phone_form_id);
        ja:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto b2;
        }
        return;
        b2:
        $this->is_form_enabled = $this->sanitize_form_post("\x62\x62\x70\137\144\x65\146\x61\165\x6c\164\x5f\145\156\141\x62\154\145");
        $this->disable_auto_activate = $this->sanitize_form_post("\x62\142\x70\137\144\151\x73\141\142\x6c\x65\x5f\x61\x63\x74\x69\x76\141\164\151\157\x6e");
        $this->otp_type = $this->sanitize_form_post("\x62\x62\160\x5f\x65\x6e\141\142\154\x65\x5f\164\x79\160\x65");
        $this->phone_key = $this->sanitize_form_post("\x62\x62\x70\137\160\150\x6f\156\x65\x5f\153\145\x79");
        $this->restrict_duplicates = $this->sanitize_form_post("\142\x62\160\x5f\162\145\163\164\x72\151\143\164\x5f\144\165\160\154\x69\x63\x61\x74\145\x73");
        if (!$this->basic_validation_check(BaseMessages::BP_CHOOSE)) {
            goto T_;
        }
        update_mo_option("\x62\142\x70\137\144\145\x66\141\165\154\164\x5f\x65\156\141\142\154\145", $this->is_form_enabled);
        update_mo_option("\x62\142\x70\137\x64\151\x73\141\x62\x6c\x65\137\141\143\164\151\x76\x61\164\x69\157\156", $this->disable_auto_activate);
        update_mo_option("\142\142\160\137\x65\x6e\x61\x62\154\145\x5f\164\171\160\x65", $this->otp_type);
        update_mo_option("\x62\142\x70\x5f\162\x65\x73\x74\162\x69\143\x74\137\144\165\160\x6c\151\143\141\x74\145\163", $this->restrict_duplicates);
        update_mo_option("\x62\x62\160\x5f\x70\x68\157\156\x65\137\153\x65\171", $this->phone_key);
        T_:
    }
}
JN:
