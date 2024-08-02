<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\123\120\101\124\110")) {
    goto G3;
}
exit;
G3:
use GF_Field;
use GFAPI;
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
if (class_exists("\107\x72\x61\x76\151\x74\x79\x46\157\x72\155")) {
    goto yL;
}
class GravityForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::GF_FORMS;
        $this->type_phone_tag = "\x6d\157\137\147\x66\x5f\143\x6f\156\x74\x61\143\x74\x5f\160\150\x6f\x6e\145\137\x65\x6e\x61\142\x6c\145";
        $this->type_email_tag = "\155\157\x5f\x67\146\x5f\x63\157\x6e\164\141\x63\x74\137\145\155\x61\x69\x6c\137\145\156\141\x62\154\x65";
        $this->form_key = "\x47\x52\101\x56\111\124\x59\137\106\117\x52\x4d";
        $this->form_name = mo_("\107\162\x61\x76\x69\x74\x79\40\x46\157\162\155");
        $this->is_form_enabled = get_mo_option("\147\x66\x5f\143\157\x6e\x74\x61\x63\164\x5f\x65\156\141\142\154\145");
        $this->phone_form_id = "\56\147\151\x6e\x70\165\164\137\143\157\156\x74\x61\x69\x6e\x65\x72\137\160\x68\157\x6e\145";
        $this->button_text = get_mo_option("\x67\146\137\142\x75\164\164\x6f\156\137\164\145\x78\x74");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\x43\x6c\x69\143\x6b\x20\110\145\x72\145\40\x74\157\x20\163\145\156\144\40\117\x54\x50");
        $this->form_documents = MoFormDocs::GF_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x67\146\137\143\x6f\x6e\x74\x61\143\x74\137\x74\x79\x70\145");
        $this->form_details = maybe_unserialize(get_mo_option("\x67\x66\137\x6f\x74\x70\137\x65\156\x61\142\154\x65\x64"));
        if (!empty($this->form_details)) {
            goto uf;
        }
        return;
        uf:
        add_filter("\x67\x66\157\162\155\x5f\146\151\x65\154\144\137\x63\x6f\x6e\164\145\x6e\164", array($this, "\141\144\x64\137\163\x63\x72\x69\x70\x74\x73"), 1, 5);
        add_filter("\x67\146\x6f\162\155\137\x66\x69\145\154\x64\x5f\166\141\154\151\x64\141\x74\x69\157\x6e", array($this, "\x76\x61\x6c\x69\144\141\x74\145\x5f\146\157\x72\155\137\163\x75\x62\155\151\x74"), 1, 5);
        $this->routeData();
    }
    private function routeData()
    {
        if (array_key_exists("\155\x6f\137\x67\162\x61\166\x69\x74\171\137\157\160\164\x69\157\156", $_GET)) {
            goto eP;
        }
        return;
        eP:
        if (check_ajax_referer($this->nonce, "\163\x65\143\x75\x72\151\164\x79", false)) {
            goto c9;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        c9:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $xq = isset($_GET["\x6d\x6f\x5f\147\162\141\x76\x69\164\x79\137\157\x70\164\151\157\x6e"]) ? sanitize_text_field(wp_unslash($_GET["\x6d\157\x5f\x67\162\141\x76\x69\164\x79\137\x6f\x70\164\x69\157\156"])) : '';
        switch (trim($xq)) {
            case "\155\x69\156\x69\157\162\x61\x6e\x67\145\x2d\147\x66\x2d\x63\x6f\x6e\x74\141\143\x74":
                $this->handleGfForm($GX);
                goto Oi;
        }
        Cg:
        Oi:
    }
    public function handleGfForm($Jz)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (!($this->otp_type === $this->type_email_tag)) {
            goto BZ;
        }
        $this->processEmailAndStartOTPVerificationProcess($Jz);
        BZ:
        if (!($this->otp_type === $this->type_phone_tag)) {
            goto Xo;
        }
        $this->processPhoneAndStartOTPVerificationProcess($Jz);
        Xo:
    }
    private function processEmailAndStartOTPVerificationProcess($Jz)
    {
        if (MoUtility::sanitize_check("\x75\x73\145\162\137\145\155\141\151\154", $Jz)) {
            goto Tp;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        goto Wi;
        Tp:
        SessionUtils::add_email_verified($this->form_session_var, $Jz["\x75\163\x65\x72\x5f\x65\x6d\141\151\x6c"]);
        $this->send_challenge('', $Jz["\x75\163\x65\162\137\145\155\x61\151\x6c"], null, $Jz["\165\163\x65\162\x5f\145\x6d\141\x69\154"], VerificationType::EMAIL);
        Wi:
    }
    private function processPhoneAndStartOTPVerificationProcess($Jz)
    {
        if (MoUtility::sanitize_check("\x75\x73\145\x72\137\x70\150\x6f\x6e\x65", $Jz)) {
            goto iX;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        goto kH;
        iX:
        SessionUtils::add_phone_verified($this->form_session_var, trim($Jz["\165\163\x65\162\137\160\x68\x6f\156\x65"]));
        $this->send_challenge('', '', null, trim($Jz["\165\x73\x65\x72\137\160\150\157\x6e\145"]), VerificationType::PHONE);
        kH:
    }
    public function add_scripts($Fm, $Jw, $bh, $Mt, $Nb)
    {
        $iG = $this->form_details[$Nb];
        if (MoUtility::is_blank($iG)) {
            goto ZC;
        }
        if (!(strcasecmp($this->otp_type, $this->type_email_tag) === 0 && get_class($Jw) === "\107\106\137\106\151\145\154\x64\x5f\x45\155\x61\151\x6c" && $Jw["\x69\x64"] === $iG["\x65\x6d\141\x69\x6c\153\x65\x79"])) {
            goto vo;
        }
        $Fm = $this->add_shortcode_to_form("\145\x6d\x61\x69\154", $Fm, $Jw, $Nb);
        vo:
        if (!(strcasecmp($this->otp_type, $this->type_phone_tag) === 0 && get_class($Jw) === "\107\x46\x5f\106\151\x65\x6c\144\137\120\150\x6f\x6e\x65" && $Jw["\x69\x64"] === $iG["\160\x68\x6f\x6e\x65\153\145\x79"])) {
            goto GV;
        }
        $Fm = $this->add_shortcode_to_form("\x70\150\157\156\x65", $Fm, $Jw, $Nb);
        GV:
        ZC:
        return $Fm;
    }
    private function add_shortcode_to_form($pY, $Fm, $Jw, $Nb)
    {
        $b3 = "\x3c\x64\x69\166\x20\x73\x74\171\x6c\x65\x3d\47\144\151\163\x70\x6c\141\x79\x3a\164\141\142\154\145\x3b\164\x65\170\x74\x2d\141\154\x69\147\x6e\72\x63\x65\156\164\145\162\x3b\x27\x3e\74\151\x6d\147\x20\144\145\143\x6f\144\x69\x6e\x67\75\x27\x61\163\x79\x6e\143\47\x20\163\x72\x63\x3d\47" . MOV_URL . "\x69\x6e\143\x6c\x75\144\x65\x73\x2f\151\155\x61\147\145\163\x2f\154\157\141\x64\x65\162\56\x67\x69\x66\47\x3e\74\x2f\144\151\x76\76";
        $Fm .= "\74\x64\x69\166\x20\x73\x74\x79\x6c\x65\75\x27\155\141\162\147\x69\156\55\164\157\x70\72\x20\x32\x25\x3b\47\x3e\x3c\151\x6e\160\165\x74\40\x74\171\x70\x65\75\x27\x62\x75\164\164\157\x6e\47\x20\x63\154\x61\163\x73\75\47\x67\146\157\x72\155\137\142\165\x74\164\157\x6e\x20\x62\165\164\164\x6f\x6e\40\155\x65\144\x69\165\x6d\x27\40";
        $Fm .= "\151\x64\x3d\47\155\151\x6e\x69\157\x72\x61\x6e\147\x65\137\x6f\164\x70\x5f\164\x6f\153\x65\156\x5f\x73\165\x62\x6d\151\x74\x27\x20\x74\151\x74\x6c\x65\x3d\47\x50\x6c\145\141\x73\x65\x20\105\156\x74\x65\x72\x20\x61\156\x20" . $pY . "\x20\x74\x6f\x20\145\x6e\141\x62\154\x65\40\x74\150\x69\x73\47\40";
        $Fm .= "\166\141\154\165\145\75\x20\47" . mo_($this->button_text) . "\47\76\74\x64\151\x76\40\x73\164\x79\154\x65\75\x27\x6d\141\162\x67\x69\156\55\x74\x6f\160\72\62\x25\x27\x3e";
        $Fm .= "\74\x64\x69\166\40\151\x64\75\x27\x6d\x6f\x5f\x6d\145\x73\x73\x61\x67\x65\x27\x20\163\x74\171\154\x65\x3d\47\x62\x61\x63\x6b\147\162\157\x75\x6e\x64\55\143\x6f\x6c\157\162\x3a\x20\x23\x66\67\146\66\x66\x37\x3b\x20\x64\151\x73\160\154\141\171\x3a\x6e\157\156\145\73\x20\160\141\144\x64\x69\156\x67\x3a\40\x31\x65\x6d\40\x32\145\155\40\61\145\x6d\40\63\x2e\65\145\x6d\x3b\47\x3e\x3c\x2f\144\x69\166\x3e\x3c\57\144\151\166\76\x3c\57\x64\151\x76\x3e";
        $Fm .= "\x3c\163\164\x79\154\x65\76\x40\155\x65\x64\151\x61\40\157\x6e\154\x79\40\163\143\x72\x65\145\156\40\141\156\x64\x20\x28\155\151\x6e\55\x77\x69\x64\164\x68\x3a\x20\66\x34\61\x70\x78\x29\40\x7b\x20\43\155\157\x5f\x6d\x65\x73\163\x61\147\x65\40\173\x20\x77\151\144\x74\x68\72\40\143\141\154\x63\50\65\x30\45\x20\x2d\x20\70\x70\x78\x29\x3b\x7d\175\x3c\57\163\164\x79\x6c\x65\76";
        $Fm .= "\74\x73\x63\162\x69\x70\x74\x3e\152\121\165\x65\x72\171\x28\144\x6f\x63\x75\155\x65\156\x74\51\x2e\162\145\141\144\171\50\146\x75\156\143\x74\151\x6f\156\50\51\x7b\x24\x6d\x6f\75\152\121\165\x65\x72\171\x3b\44\x6d\x6f\50\x22\43\x67\146\157\x72\155\x5f" . $Nb . "\x20\43\155\151\156\151\x6f\162\141\x6e\x67\x65\137\157\x74\x70\137\x74\157\153\145\156\137\x73\165\x62\x6d\151\164\42\51\x2e\143\x6c\x69\143\153\50\x66\165\156\143\164\x69\157\x6e\x28\157\x29\x7b";
        $Fm .= "\x76\141\162\x20\145\75\x24\x6d\157\x28\42\43\x69\x6e\160\165\164\137" . $Nb . "\x5f" . $Jw->id . "\x22\51\x2e\166\141\154\50\x29\73\40\x24\155\157\x28\x22\43\147\146\157\162\x6d\x5f" . $Nb . "\x20\x23\x6d\157\x5f\x6d\x65\x73\163\141\x67\145\x22\x29\x2e\x65\155\160\x74\x79\x28\51\54\x24\x6d\157\50\x22\x23\147\x66\157\x72\x6d\x5f" . $Nb . "\x20\43\155\157\137\x6d\145\163\163\141\147\145\x22\x29\x2e\141\x70\x70\x65\x6e\x64\50\42" . $b3 . "\42\51";
        $Fm .= "\54\x24\x6d\157\50\x22\43\x67\146\x6f\162\155\x5f" . $Nb . "\x20\x23\155\157\137\155\x65\163\x73\x61\x67\145\42\x29\56\x73\x68\x6f\x77\50\51\x2c\44\x6d\x6f\x2e\x61\152\141\x78\50\173\x75\162\x6c\x3a\x22" . site_url() . "\57\x3f\155\x6f\x5f\x67\162\x61\166\x69\164\171\x5f\157\160\x74\x69\157\156\x3d\x6d\151\156\151\157\x72\x61\x6e\147\x65\x2d\147\146\x2d\x63\157\156\x74\x61\143\x74\x22\54\x74\171\160\145\72\42\120\117\x53\124\x22\x2c\144\x61\x74\x61\x3a\173\163\x65\143\165\x72\x69\164\171\x3a\42" . wp_create_nonce($this->nonce) . "\x22\x2c\165\163\145\162\x5f";
        $Fm .= $pY . "\72\x65\175\54\143\x72\x6f\163\163\x44\157\x6d\x61\151\x6e\72\x21\60\54\144\141\164\x61\x54\171\x70\x65\72\x22\x6a\163\157\156\x22\54\x73\x75\143\143\145\163\x73\x3a\146\x75\156\x63\x74\x69\x6f\156\50\x6f\51\x7b\40\151\x66\50\x6f\x2e\162\x65\x73\x75\x6c\x74\75\x3d\x3d\x22\x73\165\x63\x63\145\163\x73\42\x29\x7b\44\x6d\x6f\50\42\x23\x67\146\x6f\162\155\137" . $Nb . "\x20\43\155\x6f\137\155\x65\163\x73\x61\147\x65\x22\51\x2e\145\155\160\x74\171\x28\x29";
        $Fm .= "\54\x24\x6d\157\50\42\43\147\x66\157\x72\x6d\137" . $Nb . "\x20\x23\x6d\157\137\x6d\x65\x73\x73\x61\147\145\x22\x29\x2e\141\x70\160\x65\156\144\50\157\x2e\x6d\x65\163\x73\x61\x67\145\x29\x2c\x24\155\157\50\42\x23\x67\146\157\x72\155\137" . $Nb . "\40\x23\155\157\137\155\x65\x73\163\x61\147\145\x22\x29\x2e\143\163\x73\x28\x22\142\x6f\x72\144\145\162\x2d\164\x6f\160\x22\54\x22\63\x70\170\x20\163\157\154\x69\144\40\x67\x72\145\145\156\42\x29\54\44\155\157\50\x22";
        $Fm .= "\43\x67\146\157\x72\x6d\x5f" . $Nb . "\40\151\x6e\x70\x75\x74\133\x6e\x61\x6d\145\75\x65\155\141\151\x6c\x5f\x76\145\x72\x69\x66\171\135\x22\51\x2e\x66\157\x63\165\x73\50\x29\175\x65\x6c\163\145\x7b\x24\155\x6f\x28\42\x23\147\x66\157\162\155\x5f" . $Nb . "\x20\43\155\x6f\x5f\155\145\163\163\141\147\x65\42\x29\x2e\145\x6d\x70\x74\x79\x28\x29\54\x24\155\157\50\42\x23\147\x66\x6f\162\155\137" . $Nb . "\x20\43\155\157\x5f\155\145\x73\x73\141\147\x65\42\51\x2e\x61\x70\160\145\x6e\x64\50\x6f\x2e\155\x65\163\163\x61\x67\x65\51\x2c";
        $Fm .= "\44\155\x6f\x28\42\x23\147\146\x6f\x72\155\x5f" . $Nb . "\40\43\x6d\x6f\x5f\155\x65\x73\x73\141\147\x65\42\51\x2e\x63\x73\163\x28\42\142\x6f\x72\x64\x65\162\x2d\x74\157\x70\42\54\42\x33\160\x78\x20\163\157\154\151\144\x20\x72\145\144\x22\x29\x2c\44\155\157\50\x22\43\x67\x66\157\162\155\x5f" . $Nb . "\x20\x69\156\x70\165\x74\x5b\x6e\x61\155\x65\x3d\x70\x68\157\156\x65\x5f\166\145\x72\151\146\171\135\x22\x29\56\146\x6f\143\165\163\x28\51\x7d\x20\x3b\175\x2c";
        $Fm .= "\145\162\x72\x6f\x72\72\146\x75\156\x63\164\x69\157\156\x28\x6f\x2c\x65\x2c\156\51\173\175\x7d\51\x7d\x29\73\x7d\51\73\x3c\57\163\143\x72\x69\x70\x74\x3e";
        return $Fm;
    }
    public function validate_form_submit($kS, $bh, $form, $Jw)
    {
        $Nb = "\146\157\x72\155\111\144";
        $fq = MoUtility::sanitize_check($Jw->{$Nb}, $this->form_details);
        if (!($fq && true === $kS["\x69\163\x5f\x76\141\x6c\x69\x64"])) {
            goto j4;
        }
        if (strpos($Jw->label, $fq["\166\145\162\151\146\x79\x4b\x65\171"]) !== false && SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto MX;
        }
        if ($this->isEmailOrPhoneField($Jw, $fq)) {
            goto gD;
        }
        goto OD;
        MX:
        $kS = $this->validate_otp($kS, $bh);
        goto OD;
        gD:
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto sI;
        }
        $kS = array("\151\163\x5f\166\x61\x6c\x69\144" => null, "\x6d\x65\163\163\x61\147\x65" => MoMessages::showMessage(MoMessages::PLEASE_VALIDATE));
        goto WZ;
        sI:
        $kS = $this->validate_submitted_email_or_phone($kS["\151\163\x5f\166\x61\154\x69\x64"], $bh, $kS);
        WZ:
        OD:
        j4:
        return $kS;
    }
    private function validate_otp($kS, $bh)
    {
        $I2 = $this->get_verification_type();
        if (MoUtility::is_blank($bh)) {
            goto My;
        }
        $this->validate_challenge($I2, null, $bh);
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $I2)) {
            goto wR;
        }
        $this->unset_otp_session_variables();
        goto Wk;
        wR:
        $kS = array("\151\x73\x5f\x76\141\x6c\x69\144" => null, "\155\x65\x73\x73\141\147\145" => MoUtility::get_invalid_otp_method());
        Wk:
        goto ya;
        My:
        $kS = array("\x69\163\137\x76\x61\154\x69\x64" => null, "\x6d\x65\x73\163\141\147\145" => MoUtility::get_invalid_otp_method());
        ya:
        return $kS;
    }
    private function validate_submitted_email_or_phone($r0, $bh, $kS)
    {
        $I2 = $this->get_verification_type();
        if (!$r0) {
            goto uX;
        }
        if (VerificationType::EMAIL === $I2 && !SessionUtils::is_email_verified_match($this->form_session_var, $bh)) {
            goto aA;
        }
        if (VerificationType::PHONE === $I2 && !SessionUtils::is_phone_verified_match($this->form_session_var, $bh)) {
            goto t7;
        }
        goto Y1;
        aA:
        return array("\151\163\137\166\x61\154\151\144" => null, "\x6d\x65\x73\x73\141\x67\x65" => MoMessages::showMessage(MoMessages::EMAIL_MISMATCH));
        goto Y1;
        t7:
        return array("\x69\x73\x5f\x76\141\x6c\151\x64" => null, "\x6d\x65\163\163\x61\147\x65" => MoMessages::showMessage(MoMessages::PHONE_MISMATCH));
        Y1:
        uX:
        return $kS;
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
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
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto LK;
        }
        foreach ($this->form_details as $a6 => $fM) {
            $pV = sprintf("\45\163\x5f\45\x64\137\45\144", "\x69\156\x70\x75\164", $a6, $fM["\160\x68\x6f\156\x65\x6b\x65\x79"]);
            array_push($MI, sprintf("\x25\163\40\x23\45\163", $this->phone_form_id, $pV));
            gs:
        }
        UY:
        LK:
        return $MI;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !MoUtility::get_active_plugin_version("\x47\162\x61\x76\x69\164\x79\x20\106\x6f\162\155\x73") || !current_user_can("\155\141\x6e\x61\x67\145\137\x6f\x70\164\151\x6f\x6e\163") || !check_admin_referer($this->admin_nonce))) {
            goto UW;
        }
        return;
        UW:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->is_form_enabled = $this->sanitize_form_post("\147\x66\x5f\143\x6f\x6e\164\141\x63\x74\137\x65\x6e\x61\142\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\x67\x66\x5f\143\157\x6e\164\141\143\x74\x5f\x74\x79\x70\x65");
        $this->button_text = $this->sanitize_form_post("\x67\x66\137\142\x75\164\x74\x6f\x6e\x5f\x74\x65\x78\x74");
        $SR = $this->parseform_datails($GX);
        $this->form_details = is_array($SR) ? $SR : '';
        update_mo_option("\x67\146\x5f\157\164\160\x5f\x65\156\x61\142\154\145\144", maybe_serialize($this->form_details));
        update_mo_option("\x67\x66\x5f\143\x6f\156\x74\x61\x63\x74\x5f\x65\x6e\x61\142\x6c\x65", $this->is_form_enabled);
        update_mo_option("\x67\146\137\x63\157\x6e\164\x61\x63\164\137\164\x79\160\145", $this->otp_type);
        update_mo_option("\147\146\x5f\142\x75\164\164\x6f\x6e\137\164\145\170\164", $this->button_text);
    }
    private function parseform_datails($GX)
    {
        $SR = array();
        $xT = function ($JX, $X2, $R7) {
            foreach ($JX as $Jw) {
                if (!(get_class($Jw) === $R7 && $Jw["\x6c\x61\142\x65\x6c"] === $X2)) {
                    goto VL;
                }
                return $Jw["\x69\144"];
                VL:
                ps:
            }
            pW:
            return null;
        };
        $form = null;
        if (!(!array_key_exists("\x67\162\141\166\x69\164\171\137\146\157\x72\x6d", $GX) || !$this->is_form_enabled)) {
            goto lZ;
        }
        return array();
        lZ:
        $GX = MoUtility::mo_sanitize_array($GX);
        foreach (array_filter($GX["\x67\162\141\x76\151\x74\x79\137\146\x6f\162\155"]["\146\x6f\x72\x6d"]) as $a6 => $bh) {
            $iG = GFAPI::get_form($bh);
            $y6 = isset($GX["\x67\162\x61\166\151\164\x79\x5f\x66\x6f\162\x6d"]["\x65\155\x61\x69\154\x6b\x65\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x67\162\141\x76\x69\164\x79\x5f\x66\x6f\162\155"]["\145\155\x61\151\154\153\x65\171"][$a6])) : '';
            $Ig = isset($GX["\147\x72\x61\x76\x69\x74\171\x5f\146\x6f\x72\155"]["\x70\x68\157\156\145\153\145\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\147\x72\141\x76\x69\164\171\x5f\x66\x6f\x72\x6d"]["\x70\150\x6f\156\145\x6b\x65\171"][$a6])) : '';
            $SR[sanitize_text_field($bh)] = array("\x65\155\141\151\154\153\145\171" => $xT($iG["\x66\x69\145\154\x64\163"], $y6, "\x47\x46\x5f\x46\x69\145\x6c\x64\137\105\155\x61\151\154"), "\160\x68\157\156\145\x6b\145\x79" => $xT($iG["\x66\x69\x65\x6c\144\163"], $Ig, "\x47\106\x5f\106\x69\x65\154\x64\x5f\x50\150\157\x6e\145"), "\166\145\x72\151\x66\171\x4b\145\171" => isset($GX["\147\x72\141\166\151\x74\x79\x5f\x66\x6f\162\x6d"]["\x76\x65\162\x69\x66\x79\113\145\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x67\162\141\166\x69\164\x79\x5f\x66\x6f\x72\x6d"]["\x76\145\x72\x69\146\171\113\x65\171"][$a6])) : '', "\x70\x68\157\x6e\145\x5f\x73\x68\x6f\x77" => isset($GX["\x67\x72\141\166\x69\164\x79\x5f\x66\157\162\x6d"]["\x70\x68\157\156\x65\153\145\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\147\162\x61\x76\x69\164\171\x5f\x66\x6f\x72\155"]["\160\x68\x6f\x6e\145\x6b\x65\x79"][$a6])) : '', "\x65\155\141\151\154\137\x73\x68\157\167" => isset($GX["\147\x72\141\x76\151\x74\171\x5f\x66\x6f\162\x6d"]["\145\x6d\x61\151\154\153\x65\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\147\162\x61\x76\x69\x74\x79\137\146\x6f\162\155"]["\x65\x6d\x61\151\x6c\153\145\171"][$a6])) : '', "\x76\145\x72\151\146\171\137\x73\150\x6f\x77" => isset($GX["\x67\x72\x61\166\151\164\171\137\x66\x6f\x72\155"]["\x76\145\x72\151\146\171\x4b\x65\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\147\x72\x61\x76\x69\164\x79\x5f\146\x6f\x72\x6d"]["\x76\145\162\151\x66\171\x4b\145\x79"][$a6])) : '');
            HY:
        }
        yc:
        return $SR;
    }
    private function isEmailOrPhoneField($Jw, $zJ)
    {
        return $this->otp_type === $this->type_phone_tag && $Jw->id === $zJ["\x70\150\x6f\156\x65\153\x65\x79"] || $this->otp_type === $this->type_email_tag && $Jw->id === $zJ["\145\155\141\x69\x6c\153\145\x79"];
    }
}
yL:
