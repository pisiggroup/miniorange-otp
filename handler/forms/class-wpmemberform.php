<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\123\120\x41\124\110")) {
    goto d0D;
}
exit;
d0D:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\BaseMessages;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
if (class_exists("\127\x70\115\x65\155\x62\x65\x72\106\x6f\162\155")) {
    goto GAn;
}
class WpMemberForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::WPMEMBER_REG;
        $this->email_key = "\x75\163\x65\x72\x5f\145\x6d\141\151\154";
        $this->phone_key = get_mo_option("\x77\160\x5f\x6d\x65\155\142\x65\x72\x5f\162\145\x67\x5f\160\x68\x6f\156\x65\137\x66\x69\145\x6c\144\x5f\x6b\x65\x79");
        $this->phone_form_id = "\151\x6e\160\165\x74\x5b\x6e\x61\155\145\x3d{$this->phone_key}\135";
        $this->form_key = "\x57\120\137\x4d\105\x4d\x42\x45\x52\137\x46\117\x52\x4d";
        $this->type_phone_tag = "\155\x6f\x5f\167\160\155\x65\155\x62\x65\162\x5f\162\145\147\137\x70\150\x6f\x6e\x65\137\145\x6e\x61\x62\154\145";
        $this->type_email_tag = "\155\x6f\x5f\x77\x70\x6d\145\155\x62\x65\x72\137\162\145\147\x5f\145\x6d\141\151\154\137\x65\x6e\141\x62\154\145";
        $this->form_name = mo_("\127\120\x2d\115\145\x6d\142\x65\162\x73");
        $this->is_form_enabled = get_mo_option("\x77\x70\x5f\x6d\x65\155\142\145\x72\x5f\x72\145\x67\x5f\145\x6e\x61\x62\x6c\145");
        $this->form_documents = MoFormDocs::WP_MEMBER_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x77\x70\x5f\155\x65\155\x62\x65\x72\x5f\162\145\x67\x5f\145\156\141\142\x6c\145\137\x74\171\x70\x65");
        add_filter("\x77\x70\155\145\155\137\162\145\x67\151\163\164\x65\162\137\x66\x6f\x72\155\137\x72\x6f\167\x73", array($this, "\x77\x70\155\145\x6d\142\145\x72\137\x61\x64\144\x5f\142\165\164\x74\x6f\156"), 99, 2);
        add_action("\167\160\155\145\x6d\x5f\160\162\x65\x5f\x72\x65\x67\151\x73\164\x65\162\137\x64\x61\x74\141", array($this, "\166\141\154\x69\x64\x61\x74\145\137\x77\160\x6d\145\x6d\x62\x65\162\137\x73\165\142\x6d\151\x74"), 99, 1);
        if (!(!isset($_POST["\167\160\x6d\x65\x6d\x5f\163\145\143\165\162\151\x74\171\x5f\x6e\x6f\x6e\143\145"]) || !array_key_exists("\x6f\x70\164\x69\157\156", $_REQUEST))) {
            goto S1H;
        }
        return;
        S1H:
        if (wp_verify_nonce(sanitize_key($_POST["\167\160\155\145\x6d\x5f\163\x65\x63\165\x72\x69\164\x79\137\156\x6f\x6e\143\145"]), "\x77\160\155\x65\x6d\137\x6c\157\156\x67\x66\157\x72\x6d\x5f\x6e\x6f\156\x63\145")) {
            goto lV6;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        lV6:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        $Eh = MoUtility::mo_sanitize_array($_REQUEST);
        $this->routeData($w3, $Eh);
    }
    private function routeData($w3, $Eh)
    {
        switch (trim(sanitize_text_field($Eh["\x6f\160\164\151\157\156"]))) {
            case "\155\151\156\x69\x6f\x72\141\156\147\x65\55\167\x70\x6d\145\x6d\x62\x65\162\x2d\146\x6f\162\x6d":
                $this->handle_wp_member_form($w3);
                goto v18;
        }
        Xin:
        v18:
    }
    private function handle_wp_member_form($GX)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (!($this->otp_type === $this->type_email_tag)) {
            goto L3Y;
        }
        $this->processEmailAndStartOTPVerificationProcess($GX);
        L3Y:
        if (!($this->otp_type === $this->type_phone_tag)) {
            goto HMi;
        }
        $this->processPhoneAndStartOTPVerificationProcess($GX);
        HMi:
    }
    private function processEmailAndStartOTPVerificationProcess($GX)
    {
        if (MoUtility::sanitize_check("\165\x73\x65\x72\x5f\145\x6d\x61\151\x6c", $GX)) {
            goto biF;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        goto vZD;
        biF:
        $Wb = sanitize_email($GX["\165\x73\145\x72\137\x65\155\x61\x69\154"]);
        SessionUtils::add_email_verified($this->form_session_var, $Wb);
        $this->send_challenge(null, $Wb, null, '', VerificationType::EMAIL, null, null, false);
        vZD:
    }
    private function processPhoneAndStartOTPVerificationProcess($GX)
    {
        if (MoUtility::sanitize_check("\165\x73\x65\x72\137\x70\150\157\x6e\145", $GX)) {
            goto h0k;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        goto z8O;
        h0k:
        $GJ = sanitize_text_field($GX["\165\x73\145\162\137\x70\150\157\x6e\145"]);
        SessionUtils::add_phone_verified($this->form_session_var, $GJ);
        $this->send_challenge(null, '', null, $GJ, VerificationType::PHONE, null, null, false);
        z8O:
    }
    public function wpmember_add_button($fF, $S4)
    {
        foreach ($fF as $a6 => $Jw) {
            if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0 && $a6 === $this->phone_key) {
                goto XFl;
            }
            if (strcasecmp($this->otp_type, $this->type_email_tag) === 0 && $a6 === $this->email_key) {
                goto dBG;
            }
            goto r44;
            XFl:
            $fF[$a6]["\146\x69\x65\x6c\144"] .= $this->add_shortcode_to_wpmember("\160\150\x6f\x6e\145", $Jw["\x6d\145\x74\x61"]);
            goto N9M;
            goto r44;
            dBG:
            $fF[$a6]["\x66\151\145\x6c\x64"] .= $this->add_shortcode_to_wpmember("\x65\155\141\151\x6c", $Jw["\x6d\x65\x74\x61"]);
            goto N9M;
            r44:
            b0_:
        }
        N9M:
        return $fF;
    }
    public function validate_wpmember_submit($Z3)
    {
        global $wpmem_themsg;
        $I2 = $this->get_verification_type();
        if (!SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto MXl;
        }
        if (!$this->validate_submitted($Z3, $I2)) {
            goto OSx;
        }
        goto N1V;
        MXl:
        $wpmem_themsg = MoMessages::showMessage(MoMessages::PLEASE_VALIDATE);
        goto N1V;
        OSx:
        return;
        N1V:
        $this->validate_challenge($I2, null, $Z3["\166\141\154\151\144\x61\164\145\137\x6f\164\x70"]);
    }
    private function validate_submitted($Z3, $I2)
    {
        global $wpmem_themsg;
        if (VerificationType::EMAIL === $I2 && !SessionUtils::is_email_verified_match($this->form_session_var, $Z3[$this->email_key])) {
            goto NgY;
        }
        if (VerificationType::PHONE === $I2 && !SessionUtils::is_phone_verified_match($this->form_session_var, $Z3[$this->phone_key])) {
            goto lY5;
        }
        return true;
        goto kwW;
        NgY:
        $wpmem_themsg = MoMessages::showMessage(MoMessages::EMAIL_MISMATCH);
        return false;
        goto kwW;
        lY5:
        $wpmem_themsg = MoMessages::showMessage(MoMessages::PHONE_MISMATCH);
        return false;
        kwW:
    }
    private function add_shortcode_to_wpmember($pY, $Jw)
    {
        $b3 = "\74\144\x69\166\x20\163\164\x79\x6c\145\75\x27\144\x69\x73\x70\154\x61\x79\x3a\164\141\142\x6c\145\73\x74\x65\170\x74\x2d\141\154\x69\x67\156\72\x63\145\x6e\164\145\162\73\47\76\x3c\x69\155\x67\x20\163\x72\x63\75\47" . MOV_URL . "\151\156\x63\x6c\x75\x64\x65\163\57\x69\x6d\141\x67\145\x73\57\154\x6f\141\x64\145\x72\56\x67\x69\146\x27\76\74\57\144\151\166\x3e";
        $Fm = "\x3c\x64\151\x76\x20\x73\164\x79\x6c\145\x3d\x27\x6d\x61\x72\147\x69\x6e\x2d\x74\157\x70\72\x20\62\45\73\x27\76\74\x62\x75\164\164\157\156\40\164\171\x70\145\x3d\47\142\x75\164\164\157\x6e\47\x20\143\154\x61\163\163\x3d\x27\142\x75\x74\x74\x6f\x6e\x20\x61\x6c\x74\47\40\163\164\171\154\145\75\47\x77\151\x64\x74\150\x3a\61\x30\60\x25\73\x68\145\151\x67\150\164\x3a\x33\x30\160\x78\x3b";
        $Fm .= "\146\157\156\x74\x2d\x66\x61\155\x69\154\x79\72\x20\122\x6f\x62\157\x74\x6f\73\146\157\156\164\x2d\163\x69\x7a\145\72\40\x31\x32\160\170\40\41\151\x6d\x70\157\x72\164\141\x6e\x74\73\47\x20\x69\x64\75\47\155\151\x6e\x69\x6f\x72\141\156\147\145\137\x6f\x74\160\137\x74\157\x6b\x65\x6e\137\x73\165\x62\155\151\x74\47\40";
        $Fm .= "\164\x69\164\x6c\145\75\47\x50\x6c\x65\x61\163\x65\40\105\x6e\164\145\162\40\x61\x6e\x20\x27" . $pY . "\x27\164\x6f\40\145\x6e\141\x62\x6c\145\40\x74\150\x69\x73\56\x27\76\x43\154\151\143\x6b\x20\x48\x65\162\145\x20\164\157\x20\x56\145\162\x69\146\x79\x20" . $pY . "\74\x2f\x62\165\x74\x74\157\156\76\x3c\57\x64\151\x76\x3e";
        $Fm .= "\x3c\144\x69\166\40\163\164\x79\x6c\x65\x3d\47\x6d\141\x72\x67\x69\156\55\x74\x6f\160\72\x32\x25\47\x3e\74\144\151\x76\40\151\x64\x3d\47\155\x6f\x5f\x6d\145\x73\163\141\x67\145\47\x20\x68\151\x64\x64\145\156\75\x27\47\x20\163\164\171\x6c\145\x3d\x27\x62\x61\143\153\147\x72\157\x75\156\x64\x2d\143\x6f\154\x6f\x72\x3a\40\x23\146\x37\x66\66\x66\x37\73\x70\141\x64\144\x69\x6e\147\72\x20";
        $Fm .= "\61\x65\x6d\x20\62\x65\155\40\x31\145\x6d\x20\x33\56\x35\x65\x6d\x3b\47\76\74\57\x64\151\x76\76\74\x2f\x64\151\166\x3e";
        $Fm .= "\74\163\x63\x72\x69\160\164\76\152\x51\x75\x65\162\x79\x28\x64\157\143\x75\x6d\x65\x6e\164\x29\x2e\x72\x65\x61\144\171\50\x66\x75\x6e\x63\164\x69\x6f\x6e\x28\51\x7b\x24\x6d\157\75\x6a\121\165\x65\x72\x79\x3b\x24\x6d\x6f\50\x22\x23\155\151\x6e\151\x6f\162\x61\x6e\x67\145\137\x6f\x74\160\137\x74\x6f\x6b\x65\x6e\x5f\163\165\x62\x6d\x69\164\x22\x29\56\x63\x6c\x69\x63\x6b\x28\146\165\156\143\164\x69\157\x6e\x28\x6f\51\173\40";
        $Fm .= "\166\x61\x72\40\x65\75\44\x6d\157\x28\42\151\156\x70\165\x74\x5b\156\141\155\145\x3d" . $Jw . "\135\x22\x29\56\166\141\154\x28\x29\73\40\166\x61\162\x20\x6e\x3d\44\x6d\157\x28\x22\x23\x5f\167\160\x6d\145\155\x5f\x72\145\147\151\163\x74\145\x72\137\156\157\156\143\x65\x22\51\x2e\x76\x61\154\50\x29\73\x24\x6d\157\50\x22\x23\155\157\137\155\145\163\x73\141\x67\x65\x22\x29\56\145\155\x70\x74\171\50\51\x2c\44\x6d\157\50\x22\43\155\x6f\137\155\145\163\163\x61\x67\x65\42\x29\x2e\x61\160\x70\x65\156\144\50\42" . $b3 . "\42\x29\54";
        $Fm .= "\44\155\157\x28\42\43\x6d\157\137\155\x65\163\163\x61\147\x65\42\x29\x2e\163\x68\x6f\x77\x28\51\54\x24\155\157\x2e\x61\x6a\x61\170\50\173\165\x72\154\72\x22" . site_url() . "\x2f\x3f\157\160\x74\x69\x6f\x6e\x3d\155\151\x6e\151\157\x72\x61\156\147\145\55\167\x70\x6d\145\x6d\x62\145\x72\55\x66\x6f\x72\x6d\42\x2c\164\171\160\145\72\x22\x50\x4f\123\x54\x22\54";
        $Fm .= "\x64\141\x74\141\72\173\165\x73\x65\x72\137" . $pY . "\x3a\x65\54\x20\x77\160\x6d\x65\155\137\x73\145\x63\x75\162\151\164\171\x5f\x6e\157\156\x63\x65\x3a\40\156\175\x2c\143\x72\x6f\163\x73\104\x6f\155\x61\x69\x6e\x3a\41\60\x2c\144\x61\164\141\124\171\x70\145\x3a\x22\152\x73\157\156\x22\54\x73\165\x63\x63\145\163\x73\72\x66\x75\x6e\x63\x74\151\x6f\x6e\x28\157\51\x7b\x20";
        $Fm .= "\151\146\50\157\56\x72\x65\x73\x75\x6c\164\x3d\x3d\x3d\x22\163\x75\143\x63\145\163\x73\42\51\x7b\44\x6d\x6f\x28\42\x23\x6d\x6f\x5f\155\x65\163\163\x61\147\x65\42\51\x2e\145\x6d\160\x74\171\50\x29\x2c\44\x6d\157\x28\42\x23\x6d\157\137\x6d\x65\163\x73\141\x67\x65\42\51\x2e\x61\160\x70\145\x6e\144\x28\x6f\x2e\155\x65\163\163\141\147\145\51\54";
        $Fm .= "\44\x6d\x6f\x28\x22\43\155\x6f\137\155\x65\163\163\141\x67\145\42\x29\56\143\163\163\x28\x22\x62\x6f\162\144\145\x72\55\164\x6f\160\42\54\x22\63\160\170\40\x73\157\x6c\151\x64\40\x67\x72\145\x65\x6e\x22\x29\x2c\x24\x6d\157\x28\x22\151\x6e\x70\165\164\133\156\x61\x6d\x65\75\145\x6d\x61\151\154\x5f\x76\x65\162\151\x66\171\135\42\x29\56\x66\157\143\165\163\50\51\175\x65\x6c\163\145\173";
        $Fm .= "\44\x6d\157\50\42\x23\155\x6f\x5f\x6d\145\x73\163\x61\x67\x65\x22\x29\x2e\x65\x6d\160\164\171\50\51\54\44\155\x6f\50\x22\43\155\157\x5f\x6d\145\163\163\x61\x67\x65\42\x29\x2e\x61\x70\x70\145\x6e\144\50\x6f\x2e\155\145\x73\x73\x61\x67\145\51\x2c\x24\155\157\50\42\43\x6d\157\137\x6d\145\x73\x73\141\x67\145\42\51\x2e\x63\x73\x73\50\42\x62\157\162\x64\x65\x72\x2d\164\x6f\x70\x22\54\x22\63\160\170\x20\x73\157\154\151\x64\x20\x72\x65\x64\x22\51";
        $Fm .= "\54\44\x6d\x6f\x28\42\151\x6e\160\x75\x74\x5b\x6e\x61\x6d\x65\x3d\160\x68\157\156\x65\137\x76\x65\162\x69\x66\171\135\42\51\x2e\x66\157\x63\165\163\50\x29\175\x20\x3b\x7d\54\x65\162\162\x6f\x72\72\146\x75\x6e\143\x74\151\x6f\x6e\x28\157\54\x65\54\156\x29\x7b\175\x7d\x29\x7d\51\x3b\x7d\x29\73\x3c\x2f\x73\x63\x72\x69\160\x74\76";
        return $Fm;
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        global $wpmem_themsg;
        $wpmem_themsg = MoUtility::get_invalid_otp_method();
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
            goto h_W;
        }
        array_push($MI, $this->phone_form_id);
        h_W:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto sVC;
        }
        return;
        sVC:
        $this->is_form_enabled = $this->sanitize_form_post("\167\x70\x5f\155\145\x6d\x62\x65\x72\137\x72\x65\147\137\x65\156\141\142\154\145");
        $this->otp_type = $this->sanitize_form_post("\x77\160\137\155\x65\155\142\x65\162\x5f\x72\145\x67\137\x65\x6e\141\x62\154\x65\137\164\x79\x70\x65");
        $this->phone_key = $this->sanitize_form_post("\x77\160\137\155\145\x6d\142\145\162\137\x72\x65\x67\x5f\160\x68\x6f\x6e\x65\137\x66\x69\x65\x6c\144\x5f\153\x65\x79");
        if (!$this->basic_validation_check(BaseMessages::WP_MEMBER_CHOOSE)) {
            goto cgO;
        }
        update_mo_option("\167\160\137\155\x65\155\x62\145\162\x5f\162\x65\x67\137\160\150\x6f\x6e\145\x5f\146\151\145\154\x64\x5f\153\x65\171", $this->phone_key);
        update_mo_option("\x77\160\137\155\145\155\142\145\162\137\x72\x65\147\x5f\145\156\x61\142\x6c\145", $this->is_form_enabled);
        update_mo_option("\167\x70\137\155\145\155\x62\x65\x72\137\x72\x65\x67\x5f\x65\x6e\x61\x62\x6c\x65\137\x74\171\160\x65", $this->otp_type);
        cgO:
    }
}
GAn:
