<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\x53\120\x41\124\110")) {
    goto plS;
}
exit;
plS:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationLogic;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
if (class_exists("\x55\x73\145\x72\x50\162\157\x66\x69\x6c\x65\115\x61\144\145\x45\141\x73\x79\122\x65\147\x69\x73\x74\162\x61\x74\151\157\x6e\x46\x6f\x72\x6d")) {
    goto uEw;
}
class UserProfileMadeEasyRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::UPME_REG;
        $this->type_phone_tag = "\x6d\157\137\165\160\x6d\145\x5f\x70\150\x6f\x6e\x65\x5f\145\x6e\x61\142\154\x65";
        $this->type_email_tag = "\x6d\x6f\x5f\x75\160\x6d\x65\137\x65\x6d\141\x69\154\137\x65\x6e\141\142\154\x65";
        $this->type_both_tag = "\155\157\137\x75\x70\155\145\137\142\x6f\x74\x68\137\x65\x6e\141\x62\x6c\x65";
        $this->form_key = "\x55\x50\x4d\x45\x5f\106\117\x52\115";
        $this->form_name = mo_("\x55\x73\145\x72\120\162\157\146\x69\154\x65\x20\115\141\144\145\x20\105\x61\x73\x79\40\x52\x65\147\151\163\164\x72\141\x74\151\x6f\156\40\106\x6f\162\155");
        $this->is_form_enabled = get_mo_option("\x75\160\155\145\137\144\x65\146\141\x75\x6c\164\x5f\145\x6e\141\x62\x6c\145");
        $this->form_documents = MoFormDocs::UPME_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x75\160\x6d\145\x5f\x65\156\141\142\x6c\x65\137\164\x79\160\145");
        $this->phone_key = get_mo_option("\165\x70\x6d\145\137\x70\150\157\156\x65\137\153\145\171");
        $this->phone_form_id = "\x69\x6e\x70\165\164\x5b\x6e\141\155\145\75" . $this->phone_key . "\135";
        add_filter("\x69\156\163\x65\162\x74\x5f\x75\163\x65\x72\x5f\155\x65\164\141", array($this, "\155\x69\156\x69\x6f\x72\141\x6e\147\x65\137\x75\160\155\145\x5f\x69\156\163\x65\162\164\x5f\x75\x73\145\x72"), 1, 3);
        add_filter("\x75\x70\x6d\x65\x5f\162\x65\x67\151\x73\x74\x72\141\x74\x69\x6f\x6e\137\143\x75\163\164\157\x6d\x5f\x66\x69\x65\x6c\144\x5f\164\x79\x70\x65\x5f\x72\145\163\164\162\x69\x63\164\151\157\x6e\x73", array($this, "\155\x69\156\151\157\x72\x61\x6e\147\x65\x5f\165\160\x6d\145\x5f\143\150\145\x63\x6b\137\x70\150\157\156\145"), 1, 2);
        $GX = MoUtility::mo_sanitize_array($_POST);
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto ZTT;
        }
        if (array_key_exists("\165\x70\155\x65\55\x72\x65\147\x69\x73\164\145\x72\x2d\x66\157\162\155", $GX) && !SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto G63;
        }
        goto OcV;
        ZTT:
        $this->unset_otp_session_variables();
        goto OcV;
        G63:
        $this->mo_handle_upme_form_submit($GX);
        OcV:
    }
    private function isPhoneVerificationEnabled()
    {
        $Bo = $this->get_verification_type();
        return VerificationType::PHONE === $Bo || VerificationType::BOTH === $Bo;
    }
    private function mo_handle_upme_form_submit($GX)
    {
        $WB = '';
        foreach ($GX as $a6 => $bh) {
            if (!($a6 === $this->phone_key)) {
                goto nNI;
            }
            $WB = $bh;
            goto i60;
            nNI:
            z3v:
        }
        i60:
        $this->miniorange_upme_user(sanitize_text_field($GX["\165\x73\145\162\137\x6c\157\147\151\156"]), sanitize_email($GX["\165\163\145\162\x5f\x65\x6d\141\151\x6c"]), $WB, $GX);
    }
    public function miniorange_upme_insert_user($Mb, $user, $Ua)
    {
        $GD = MoPHPSessions::get_session_var("\146\151\154\145\x5f\x75\160\x6c\157\141\x64");
        if (!(!SessionUtils::is_otp_initialized($this->form_session_var) || !$GD)) {
            goto V2u;
        }
        return $Mb;
        V2u:
        foreach ($GD as $a6 => $bh) {
            $SD = get_user_meta($user->ID, $a6, true);
            if (!('' !== $SD)) {
                goto lca;
            }
            upme_delete_uploads_folder_files($SD);
            lca:
            update_user_meta($user->ID, $a6, $bh);
            kaA:
        }
        D8e:
        return $Mb;
    }
    public function miniorange_upme_check_phone($errors, $Z3)
    {
        global $Hg;
        if (!empty($errors)) {
            goto VTx;
        }
        if (!($Z3["\x6d\x65\164\x61"] === $this->phone_key)) {
            goto P6x;
        }
        if (MoUtility::validate_phone_number($Z3["\x76\141\154\165\145"])) {
            goto IQC;
        }
        $errors[] = str_replace("\43\43\160\x68\157\156\x65\43\x23", $Z3["\166\x61\154\165\x65"], $Hg->get_otp_invalid_format_message());
        IQC:
        P6x:
        VTx:
        return $errors;
    }
    private function miniorange_upme_user($Ir, $Wb, $bV, $GX)
    {
        global $upme_register;
        $upme_register->prepare($GX);
        $upme_register->handle();
        $GD = array();
        if (MoUtility::is_blank($upme_register->errors)) {
            goto dyl;
        }
        return;
        dyl:
        MoUtility::initialize_transaction($this->form_session_var);
        $this->processFileUpload($GD);
        MoPHPSessions::add_session_var("\x66\151\x6c\x65\137\165\160\x6c\157\141\x64", $GD);
        $this->processAndStartOTPVerification($Ir, $Wb, $bV);
    }
    private function processFileUpload(&$GD)
    {
        if (!empty($_FILES)) {
            goto xrq;
        }
        return;
        xrq:
        $SO = wp_upload_dir();
        $NC = $SO["\x62\141\x73\145\x64\x69\x72"] . "\57\x75\x70\x6d\145\x2f";
        if (is_dir($NC)) {
            goto v3d;
        }
        mkdir($NC, 0777);
        v3d:
        foreach ($_FILES as $a6 => $oW) {
            $Zf = sanitize_file_name(basename($oW["\x6e\141\x6d\145"]));
            $NC = $NC . time() . "\137" . $Zf;
            $Ib = $SO["\x62\x61\163\x65\165\162\x6c"] . "\x2f\165\160\155\x65\x2f";
            $Ib = $Ib . time() . "\137" . $Zf;
            move_uploaded_file($oW["\x74\155\x70\x5f\x6e\x61\x6d\145"], $NC);
            $GD[$a6] = $Ib;
            N1O:
        }
        jHM:
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->isPhoneVerificationEnabled())) {
            goto O1B;
        }
        array_push($MI, $this->phone_form_id);
        O1B:
        return $MI;
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
    private function processAndStartOTPVerification($Ir, $Wb, $bV)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto AJx;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto Rb0;
        }
        $this->send_challenge($Ir, $Wb, null, $bV, VerificationType::EMAIL);
        goto Sjr;
        AJx:
        $this->send_challenge($Ir, $Wb, null, $bV, VerificationType::PHONE);
        goto Sjr;
        Rb0:
        $this->send_challenge($Ir, $Wb, null, $bV, VerificationType::BOTH);
        Sjr:
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto CCx;
        }
        return;
        CCx:
        $this->is_form_enabled = $this->sanitize_form_post("\165\x70\x6d\x65\137\144\x65\146\141\165\x6c\164\x5f\145\x6e\x61\x62\154\145");
        $this->otp_type = $this->sanitize_form_post("\x75\x70\x6d\145\137\x65\x6e\x61\142\x6c\145\137\x74\x79\160\x65");
        $this->phone_key = $this->sanitize_form_post("\165\160\x6d\145\x5f\x70\150\157\156\145\137\x66\151\x65\154\144\x5f\x6b\145\x79");
        update_mo_option("\165\160\x6d\x65\137\144\x65\x66\x61\165\x6c\x74\137\145\156\x61\x62\154\145", $this->is_form_enabled);
        update_mo_option("\165\160\155\145\137\145\156\141\142\x6c\x65\137\164\x79\160\145", $this->otp_type);
        update_mo_option("\x75\x70\155\145\137\160\x68\157\x6e\x65\137\x6b\x65\x79", $this->phone_key);
    }
}
uEw:
