<?php


namespace OTP\Handler\Forms;

if (defined("\101\x42\123\x50\101\124\110")) {
    goto Iec;
}
exit;
Iec:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
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
use UM\Core\Form;
if (class_exists("\125\154\x74\151\155\x61\164\145\115\x65\x6d\142\x65\162\x50\162\157\x66\151\x6c\145\x46\157\x72\x6d")) {
    goto lLq;
}
class UltimateMemberProfileForm extends FormHandler implements IFormHandler
{
    use Instance;
    private $verify_field_key;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::UM_PROFILE_UPDATE;
        $this->type_phone_tag = "\155\157\137\x75\x6d\137\160\162\157\146\151\x6c\x65\137\x70\x68\157\x6e\145\x5f\145\156\141\x62\x6c\145";
        $this->type_email_tag = "\155\157\x5f\165\x6d\x5f\x70\162\x6f\146\x69\154\145\x5f\x65\155\141\151\x6c\x5f\x65\x6e\x61\142\154\x65";
        $this->type_both_tag = "\x6d\x6f\137\x75\155\x5f\x70\162\157\x66\151\154\145\x5f\x62\157\164\150\137\145\x6e\141\x62\x6c\145";
        $this->form_key = "\x55\x4c\124\x49\x4d\x41\x54\105\x5f\120\x52\x4f\106\111\114\105\137\106\117\122\x4d";
        $this->verify_field_key = "\166\145\x72\151\146\171\x5f\x66\151\145\154\x64";
        $this->form_name = mo_("\x55\154\164\151\x6d\x61\x74\145\40\115\x65\x6d\x62\145\162\40\x50\162\157\x66\x69\x6c\145\x2f\x41\143\x63\x6f\x75\156\x74\40\x46\x6f\x72\155");
        $this->is_form_enabled = get_mo_option("\165\x6d\137\x70\x72\157\x66\151\x6c\x65\137\x65\x6e\141\x62\x6c\145");
        $this->restrict_duplicates = get_mo_option("\x75\x6d\137\x70\x72\x6f\x66\x69\x6c\145\x5f\x72\x65\163\x74\x72\151\x63\x74\137\x64\165\160\154\x69\143\141\x74\x65\163");
        $this->button_text = get_mo_option("\x75\x6d\x5f\x70\x72\x6f\x66\x69\154\x65\137\142\x75\164\x74\157\x6e\137\164\145\170\x74");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\103\154\151\143\x6b\x20\x48\145\x72\145\x20\164\157\40\163\145\156\x64\40\117\x54\x50");
        $this->email_key = "\x75\163\145\x72\137\145\x6d\x61\151\154";
        $this->phone_key = get_mo_option("\x75\x6d\x5f\160\x72\x6f\146\x69\x6c\x65\x5f\x70\150\x6f\156\x65\x5f\153\145\x79");
        $this->phone_key = $this->phone_key ? $this->phone_key : "\155\157\142\x69\154\145\x5f\156\x75\155\x62\x65\x72";
        $this->phone_form_id = "\151\x6e\160\x75\164\133\156\x61\x6d\x65\136\75\x27{$this->phone_key}\47\x5d";
        $this->form_documents = MoFormDocs::UM_PROFILE;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x75\x6d\137\160\x72\157\146\151\154\145\x5f\x65\x6e\141\x62\154\145\137\164\171\x70\x65");
        add_action("\x77\160\x5f\145\156\x71\165\145\x75\x65\x5f\163\x63\x72\151\x70\164\x73", array($this, "\x6d\151\x6e\151\x6f\x72\x61\156\147\x65\x5f\162\x65\147\151\x73\164\145\162\137\165\x6d\137\x73\143\162\151\160\164"));
        add_action("\165\x6d\x5f\163\x75\142\155\x69\164\x5f\x61\x63\x63\157\165\156\x74\137\x65\162\x72\x6f\162\163\137\150\x6f\x6f\153", array($this, "\155\x69\x6e\151\x6f\162\x61\x6e\147\x65\137\165\155\137\166\x61\x6c\x69\x64\141\x74\x69\x6f\x6e"), 99, 1);
        add_action("\165\155\137\141\144\x64\137\145\x72\162\157\162\x5f\157\x6e\x5f\146\x6f\162\x6d\x5f\163\165\x62\155\151\164\137\x76\141\x6c\151\x64\x61\164\151\x6f\156", array($this, "\x6d\151\156\151\x6f\x72\x61\156\x67\x65\137\165\155\x5f\x70\162\157\146\151\x6c\145\137\x76\x61\x6c\151\x64\141\164\x69\157\x6e"), 1, 3);
        $this->routeData();
    }
    private function isAccountVerificationEnabled()
    {
        return strcasecmp($this->otp_type, $this->type_email_tag) === 0 || strcasecmp($this->otp_type, $this->type_both_tag) === 0;
    }
    private function isProfileVerificationEnabled()
    {
        return strcasecmp($this->otp_type, $this->type_phone_tag) === 0 || strcasecmp($this->otp_type, $this->type_both_tag) === 0;
    }
    private function routeData()
    {
        if (array_key_exists("\x6f\160\164\151\157\156", $_GET)) {
            goto qCp;
        }
        return;
        qCp:
        if (check_ajax_referer($this->nonce, "\x73\145\143\x75\x72\x69\164\171", false)) {
            goto Ydm;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        Ydm:
        $GX = MoUtility::mo_sanitize_array($_POST);
        switch (trim(sanitize_text_field(wp_unslash($_GET["\x6f\160\164\x69\157\156"])))) {
            case "\x6d\151\x6e\151\x6f\162\x61\x6e\147\145\x2d\165\155\x2d\141\143\143\55\x61\152\x61\170\x2d\166\x65\162\x69\x66\x79":
                $this->sendAjaxOTPRequest($GX);
                goto YpX;
        }
        Aht:
        YpX:
    }
    private function sendAjaxOTPRequest($GX)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        $WB = MoUtility::sanitize_check("\165\163\145\162\x5f\x70\150\x6f\x6e\145", $GX);
        $Wb = MoUtility::sanitize_check("\165\x73\x65\162\137\x65\x6d\141\151\154", $GX);
        $nj = MoUtility::sanitize_check("\157\164\160\x5f\162\145\x71\165\x65\163\164\137\164\171\160\x65", $GX);
        $this->startOtpTransaction($Wb, $WB, $nj);
    }
    private function startOtpTransaction($ZG, $bV, $nj)
    {
        if (strcasecmp($nj, $this->type_phone_tag) === 0) {
            goto MvQ;
        }
        SessionUtils::add_email_verified($this->form_session_var, $ZG);
        $this->send_challenge(null, $ZG, null, $bV, VerificationType::EMAIL, null, null);
        goto rSJ;
        MvQ:
        $this->checkDuplicates($bV, $this->phone_key);
        SessionUtils::add_phone_verified($this->form_session_var, $bV);
        $this->send_challenge(null, $ZG, null, $bV, VerificationType::PHONE, null, null);
        rSJ:
    }
    private function checkDuplicates($bh, $a6)
    {
        if (!($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse($bh, $a6))) {
            goto boe;
        }
        $WZ = MoMessages::showMessage(MoMessages::PHONE_EXISTS);
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        boe:
    }
    private function getUserData($a6)
    {
        $current_user = wp_get_current_user();
        if ($a6 === $this->phone_key) {
            goto rdR;
        }
        return $current_user->user_email;
        goto tKA;
        rdR:
        global $wpdb;
        $lR = $wpdb->get_row($wpdb->prepare("\x53\x45\114\x45\x43\x54\x20\155\145\164\141\137\166\141\154\165\x65\x20\x46\x52\x4f\x4d\x20\140{$wpdb->prefix}\x75\163\x65\x72\155\x65\x74\x61\x60\40\x57\110\x45\x52\105\40\x60\x6d\x65\x74\141\137\x6b\x65\x79\x60\40\x3d\x20\45\x73\40\101\x4e\x44\x20\140\165\x73\145\x72\137\151\x64\140\x20\75\x20\x25\144", array($a6, $current_user->ID)));
        return isset($lR) ? $lR->meta_value : '';
        tKA:
    }
    private function checkFormSession($form)
    {
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto geB;
        }
        $form->add_error($this->email_key, MoUtility::get_invalid_otp_method());
        $form->add_error($this->phone_key, MoUtility::get_invalid_otp_method());
        goto PsP;
        geB:
        $this->unset_otp_session_variables();
        PsP:
    }
    private function getUmFormObj()
    {
        if ($this->isUltimateMemberV2Installed()) {
            goto lC2;
        }
        global $ultimatemember;
        return $ultimatemember->form;
        goto m9F;
        lC2:
        return UM()->form();
        m9F:
    }
    private function isUltimateMemberV2Installed()
    {
        if (!function_exists("\151\163\137\x70\154\165\147\151\156\x5f\x61\x63\164\x69\166\145")) {
            include_once ABSPATH . "\x77\x70\55\141\144\155\x69\156\x2f\151\x6e\x63\x6c\x75\x64\145\163\57\x70\154\x75\147\x69\x6e\x2e\160\x68\x70";
        }
        return is_plugin_active("\x75\154\x74\151\x6d\141\x74\145\x2d\155\145\155\142\145\x72\57\165\154\x74\x69\x6d\x61\x74\145\x2d\155\x65\x6d\142\x65\x72\x2e\x70\150\x70");
    }
    private function isPhoneNumberAlreadyInUse($M9, $a6)
    {
        global $wpdb;
        MoUtility::process_phone_number($M9);
        $lR = $wpdb->get_row($wpdb->prepare("\123\x45\x4c\x45\x43\x54\40\140\x75\163\145\x72\x5f\x69\x64\140\x20\x46\122\x4f\x4d\x20\140{$wpdb->prefix}\165\x73\145\x72\x6d\x65\164\141\140\x20\127\110\105\x52\x45\x20\140\155\145\164\141\x5f\153\x65\x79\140\40\x3d\40\45\x73\40\101\116\104\x20\140\155\x65\164\141\137\x76\x61\154\x75\145\140\x20\75\x20\40\45\x73", array($a6, $M9)));
        return !MoUtility::is_blank($lR);
    }
    public function miniorange_register_um_script()
    {
        wp_register_script("\155\x6f\x76\165\155\x70\x72\x6f\x66\x69\x6c\x65", MOV_URL . "\x69\x6e\x63\x6c\x75\144\x65\x73\57\x6a\163\x2f\155\x6f\165\x6d\160\162\x6f\146\151\154\145\56\x6d\x69\x6e\56\152\163", array("\x6a\161\165\145\x72\171"), MOV_VERSION, true);
        wp_localize_script("\155\157\x76\165\155\160\x72\x6f\x66\x69\x6c\145", "\x6d\157\165\155\141\x63\x76\x61\x72", array("\163\x69\164\145\125\x52\114" => site_url(), "\x6f\164\160\124\x79\x70\x65" => $this->otp_type, "\x65\x6d\141\x69\x6c\117\x74\x70\124\x79\x70\145" => $this->type_email_tag, "\x70\150\x6f\156\x65\117\x74\x70\x54\171\160\145" => $this->type_phone_tag, "\x62\x6f\164\150\117\x54\120\124\171\x70\145" => $this->type_both_tag, "\x6e\157\x6e\143\145" => wp_create_nonce($this->nonce), "\x62\x75\164\164\157\156\x54\x65\170\164" => mo_($this->button_text), "\151\155\147\125\122\x4c" => MOV_LOADER_URL, "\146\x6f\162\155\113\x65\171" => $this->verify_field_key, "\145\x6d\141\151\154\x56\141\154\165\145" => $this->getUserData($this->email_key), "\160\150\157\156\145\126\141\x6c\x75\145" => $this->getUserData($this->phone_key), "\x70\x68\x6f\x6e\145\x4b\145\171" => $this->phone_key));
        wp_enqueue_script("\x6d\157\x76\165\155\160\162\x6f\x66\x69\x6c\x65");
    }
    private function userHasChangeData($R7, $rp)
    {
        $GX = $this->getUserData($R7);
        return strcasecmp($GX, $rp[$R7]) !== 0;
    }
    public function miniorange_um_validation($rp, $R7 = "\x75\163\x65\162\137\x65\155\x61\x69\154")
    {
        if (!(!(isset($_POST["\x5f\165\155\137\x61\143\x63\x6f\x75\156\164\137\x74\141\142"]) && sanitize_text_field(wp_unslash($_POST["\137\x75\x6d\x5f\x61\x63\143\x6f\165\156\x74\137\164\141\142"])) === "\x67\x65\x6e\145\162\141\154" && isset($_POST["\x75\163\x65\162\x5f\145\x6d\141\151\x6c"])) && !isset($_POST["\160\x72\157\x66\x69\154\x65\x5f\x6e\x6f\x6e\143\x65"]))) {
            goto k79;
        }
        return;
        k79:
        $Dj = MoUtility::sanitize_check("\x6d\157\x64\145", $rp);
        if (!($this->userHasChangeData($R7, $rp) && "\x72\145\x67\x69\163\164\x65\x72" !== $Dj)) {
            goto nxc;
        }
        $form = $this->getUmFormObj();
        if ($this->isValidationRequired($R7) && !SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto AJA;
        }
        foreach ($rp as $a6 => $bh) {
            if ($a6 === $this->verify_field_key) {
                goto NtU;
            }
            if ($a6 === $this->phone_key) {
                goto o5A;
            }
            goto no0;
            NtU:
            $this->checkIntegrityAndValidateOTP($form, $bh, $rp, $Dj);
            goto no0;
            o5A:
            $this->process_phone_numbers($bh, $form);
            no0:
            yWo:
        }
        njT:
        goto EsN;
        AJA:
        $a6 = $this->isProfileVerificationEnabled() && "\160\162\157\146\x69\154\145" === $Dj ? $this->phone_key : $this->email_key;
        $form->add_error($a6, MoMessages::showMessage(MoMessages::PLEASE_VALIDATE));
        EsN:
        nxc:
    }
    private function isValidationRequired($R7)
    {
        return $this->isAccountVerificationEnabled() && "\165\163\145\162\x5f\145\155\141\151\x6c" === $R7 || $this->isProfileVerificationEnabled() && $R7 === $this->phone_key;
    }
    public function miniorange_um_profile_validation($form, $a6, $rp)
    {
        if (!($a6 === $this->phone_key)) {
            goto Vih;
        }
        $this->miniorange_um_validation($rp, $this->phone_key);
        Vih:
    }
    private function process_phone_numbers($bh, $form)
    {
        global $Hg;
        if (MoUtility::validate_phone_number($bh)) {
            goto zOr;
        }
        $WZ = str_replace("\x23\x23\x70\150\x6f\x6e\x65\x23\x23", $bh, $Hg->get_otp_invalid_format_message());
        $form->add_error($this->phone_key, $WZ);
        zOr:
        $this->checkDuplicates($bh, $this->phone_key);
    }
    private function checkIntegrityAndValidateOTP($form, $bh, array $rp, $Dj)
    {
        $this->checkIntegrity($form, $rp);
        if (!($form->count_errors() > 0)) {
            goto onE;
        }
        return;
        onE:
        if ($this->isProfileVerificationEnabled() && "\x70\x72\x6f\x66\151\x6c\x65" === $Dj) {
            goto yUf;
        }
        $this->validate_challenge("\145\155\x61\151\x6c", null, $bh);
        goto vd0;
        yUf:
        $this->validate_challenge("\160\150\x6f\x6e\x65", null, $bh);
        vd0:
        $this->checkFormSession($form);
    }
    private function checkIntegrity($FA, array $rp)
    {
        if (!$this->isProfileVerificationEnabled()) {
            goto z9e;
        }
        if (SessionUtils::is_phone_verified_match($this->form_session_var, $rp[$this->phone_key])) {
            goto xhX;
        }
        $FA->add_error($this->phone_key, MoMessages::showMessage(MoMessages::PHONE_MISMATCH));
        xhX:
        z9e:
        if (!$this->isAccountVerificationEnabled()) {
            goto TYK;
        }
        if (SessionUtils::is_email_verified_match($this->form_session_var, $rp[$this->email_key])) {
            goto S9Q;
        }
        $FA->add_error($this->email_key, MoMessages::showMessage(MoMessages::EMAIL_MISMATCH));
        S9Q:
        TYK:
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->isProfileVerificationEnabled())) {
            goto Kd0;
        }
        array_push($MI, $this->phone_form_id);
        Kd0:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto la0;
        }
        return;
        la0:
        $this->is_form_enabled = $this->sanitize_form_post("\165\155\x5f\160\162\x6f\x66\151\154\x65\137\145\x6e\x61\142\154\145");
        $this->otp_type = $this->sanitize_form_post("\165\x6d\137\x70\x72\157\146\x69\154\145\137\145\x6e\x61\x62\x6c\x65\137\x74\171\x70\145");
        $this->button_text = $this->sanitize_form_post("\165\x6d\x5f\160\x72\157\x66\x69\154\x65\x5f\142\165\x74\x74\157\x6e\137\164\x65\x78\164");
        $this->restrict_duplicates = $this->sanitize_form_post("\165\155\x5f\x70\162\157\146\x69\154\145\137\162\x65\x73\164\162\151\x63\164\x5f\x64\165\160\154\x69\x63\141\x74\x65\x73");
        $this->phone_key = $this->sanitize_form_post("\165\155\137\x70\x72\x6f\146\x69\x6c\145\137\160\150\x6f\156\145\137\x6b\x65\x79");
        if (!$this->basic_validation_check(BaseMessages::UM_PROFILE_CHOOSE)) {
            goto wF1;
        }
        update_mo_option("\x75\155\x5f\160\x72\x6f\146\151\x6c\145\137\145\156\141\142\x6c\x65", $this->is_form_enabled);
        update_mo_option("\x75\155\137\160\162\x6f\x66\151\x6c\145\x5f\145\156\141\x62\154\145\137\x74\x79\160\x65", $this->otp_type);
        update_mo_option("\x75\x6d\x5f\x70\162\x6f\146\x69\154\145\137\142\x75\x74\164\x6f\156\x5f\x74\x65\170\x74", $this->button_text);
        update_mo_option("\165\155\137\x70\162\x6f\146\x69\154\x65\137\x72\145\x73\164\162\151\x63\164\137\144\165\x70\x6c\x69\143\141\x74\145\163", $this->restrict_duplicates);
        update_mo_option("\x75\155\x5f\160\162\157\x66\x69\x6c\145\x5f\x70\x68\157\x6e\x65\x5f\x6b\x65\x79", $this->phone_key);
        wF1:
    }
}
lLq:
