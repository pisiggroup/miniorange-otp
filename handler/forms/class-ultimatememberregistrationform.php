<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\123\x50\101\124\110")) {
    goto TPz;
}
exit;
TPz:
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
use um\core\Form;
use WP_Error;
if (class_exists("\x55\154\x74\x69\x6d\x61\x74\x65\x4d\x65\155\x62\x65\162\122\145\147\151\163\164\x72\141\x74\151\x6f\x6e\106\x6f\x72\x6d")) {
    goto YdN;
}
class UltimateMemberRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = get_mo_option("\165\x6d\x5f\151\x73\137\x61\x6a\x61\170\137\146\x6f\x72\x6d");
        $this->form_session_var = FormSessionVars::UM_DEFAULT_REG;
        $this->type_phone_tag = "\x6d\157\137\165\x6d\137\160\150\x6f\156\145\x5f\145\156\141\x62\x6c\x65";
        $this->type_email_tag = "\x6d\157\137\x75\x6d\137\145\155\x61\x69\x6c\x5f\x65\x6e\141\142\154\x65";
        $this->type_both_tag = "\x6d\x6f\x5f\x75\155\137\x62\x6f\164\x68\137\145\x6e\141\142\154\x65";
        $this->phone_key = get_mo_option("\x75\x6d\x5f\x70\150\x6f\x6e\145\137\x6b\x65\x79");
        $this->phone_key = $this->phone_key ? $this->phone_key : "\x6d\x6f\x62\151\154\145\x5f\x6e\165\x6d\x62\x65\162";
        $this->phone_form_id = "\151\x6e\160\x75\x74\x5b\x6e\141\155\x65\x5e\75\47" . $this->phone_key . "\47\135";
        $this->form_key = "\125\114\124\x49\x4d\101\x54\105\137\x46\117\x52\x4d";
        $this->form_name = mo_("\125\x6c\164\x69\x6d\141\164\x65\40\115\145\155\x62\145\162\x20\122\x65\x67\151\163\x74\162\141\164\x69\157\156\x20\106\x6f\x72\155");
        $this->is_form_enabled = get_mo_option("\165\x6d\137\x64\145\x66\x61\165\154\164\x5f\x65\156\141\142\154\145");
        $this->restrict_duplicates = get_mo_option("\165\x6d\137\x72\x65\x73\x74\162\151\143\164\137\144\165\x70\x6c\151\x63\141\164\145\163");
        $this->button_text = get_mo_option("\x75\155\137\x62\x75\164\164\157\x6e\x5f\164\x65\170\x74");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\103\x6c\151\x63\153\x20\110\145\x72\145\x20\164\x6f\x20\x73\145\156\144\40\x4f\x54\x50");
        $this->verify_field_meta_key = get_mo_option("\x75\155\137\x76\145\162\x69\146\x79\137\x6d\x65\164\141\x5f\x6b\x65\171");
        $this->form_documents = MoFormDocs::UM_ENABLED;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\165\x6d\137\x65\x6e\141\x62\x6c\145\x5f\x74\171\160\145");
        if ($this->isUltimateMemberV2Installed()) {
            goto a3h;
        }
        add_action("\x75\155\137\163\165\x62\x6d\x69\164\137\146\x6f\162\x6d\137\145\x72\x72\157\162\163\137\150\x6f\157\x6b\137", array($this, "\155\151\156\151\157\x72\x61\x6e\x67\x65\x5f\165\x6d\x5f\160\x68\157\x6e\145\137\166\x61\x6c\151\144\141\x74\151\x6f\156"), 99, 1);
        add_action("\x75\x6d\x5f\x62\x65\x66\157\162\145\x5f\x6e\x65\x77\137\165\163\x65\x72\x5f\162\x65\147\151\163\x74\x65\x72", array($this, "\x6d\x69\x6e\151\157\x72\141\156\x67\x65\x5f\x75\155\137\x75\163\x65\x72\137\162\x65\147\x69\163\164\162\x61\x74\x69\157\x6e"), 99, 1);
        goto ZDo;
        a3h:
        add_action("\165\x6d\x5f\x73\x75\x62\x6d\151\x74\x5f\146\x6f\162\155\137\145\162\162\x6f\x72\x73\x5f\x68\x6f\157\x6b\137\x5f\x72\x65\147\x69\163\164\x72\141\164\151\157\x6e", array($this, "\x6d\151\156\x69\x6f\162\141\156\x67\145\x5f\x75\x6d\x32\x5f\160\x68\x6f\156\145\137\166\x61\x6c\151\144\x61\x74\x69\157\x6e"), 99, 1);
        add_filter("\x75\x6d\x5f\162\145\x67\x69\x73\x74\162\141\164\151\x6f\x6e\137\165\163\x65\162\137\162\157\154\145", array($this, "\x6d\151\156\x69\x6f\x72\x61\x6e\147\145\137\165\x6d\x32\x5f\x75\163\x65\x72\x5f\162\x65\x67\151\163\164\x72\141\x74\151\x6f\x6e"), 99, 2);
        ZDo:
        if (!($this->is_ajax_form && $this->otp_type !== $this->type_both_tag)) {
            goto xNC;
        }
        add_action("\x77\160\137\x65\x6e\161\x75\x65\165\145\137\x73\x63\x72\151\x70\164\163", array($this, "\155\151\156\x69\x6f\x72\x61\x6e\x67\145\137\x72\145\147\151\x73\164\x65\162\137\x75\155\x5f\163\x63\162\x69\160\x74"));
        $this->routeData();
        xNC:
    }
    private function isUltimateMemberV2Installed()
    {
        if (!function_exists("\x69\163\137\160\154\165\x67\151\x6e\137\141\143\x74\x69\166\145")) {
            include_once ABSPATH . "\167\x70\x2d\x61\144\155\x69\x6e\x2f\151\156\143\154\x75\144\145\x73\57\x70\x6c\x75\147\x69\x6e\x2e\x70\x68\160";
        }
        return is_plugin_active("\x75\x6c\x74\151\155\x61\x74\145\55\x6d\x65\155\x62\x65\162\57\165\x6c\x74\x69\x6d\141\164\x65\55\155\x65\x6d\x62\x65\162\56\x70\150\x70");
    }
    private function routeData()
    {
        if (array_key_exists("\x6d\x6f\x5f\165\155\162\145\x67\x5f\157\x70\164\x69\157\156", $_GET)) {
            goto S6c;
        }
        return;
        S6c:
        if (check_ajax_referer($this->nonce, "\x73\145\143\165\162\x69\164\x79", false)) {
            goto FOJ;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        FOJ:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $xq = isset($_GET["\155\x6f\x5f\165\x6d\162\x65\x67\137\157\x70\x74\x69\157\156"]) ? sanitize_text_field(wp_unslash($_GET["\x6d\x6f\x5f\x75\x6d\x72\145\x67\137\x6f\x70\x74\151\157\x6e"])) : '';
        switch (trim($xq)) {
            case "\155\151\156\151\157\162\141\x6e\x67\145\x2d\x75\x6d\x2d\x61\152\141\170\55\x76\145\x72\151\x66\x79":
                $this->sendAjaxOTPRequest($GX);
                goto mau;
        }
        U9X:
        mau:
    }
    private function sendAjaxOTPRequest($GX)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        $WB = MoUtility::sanitize_check("\165\x73\x65\162\137\160\150\157\x6e\145", $GX);
        $Wb = MoUtility::sanitize_check("\x75\x73\145\162\x5f\x65\x6d\141\151\x6c", $GX);
        if ($this->otp_type === $this->type_phone_tag) {
            goto vRz;
        }
        SessionUtils::add_email_verified($this->form_session_var, $Wb);
        goto FWQ;
        vRz:
        $this->checkDuplicates($WB, $this->phone_key, null);
        SessionUtils::add_phone_verified($this->form_session_var, $WB);
        FWQ:
        $this->startOtpTransaction(null, $Wb, null, $WB, null, null);
    }
    public function miniorange_register_um_script()
    {
        wp_register_script("\155\x6f\x76\165\155", MOV_URL . "\151\156\x63\154\x75\144\145\x73\57\x6a\163\x2f\165\x6d\162\145\x67\56\x6d\151\156\x2e\152\x73", array("\x6a\161\165\x65\x72\171"), MOV_VERSION, true);
        wp_localize_script("\x6d\x6f\x76\x75\155", "\x6d\x6f\x75\x6d\166\x61\162", array("\163\151\x74\x65\125\122\x4c" => site_url(), "\157\164\x70\124\171\x70\x65" => $this->otp_type, "\156\157\x6e\143\x65" => wp_create_nonce($this->nonce), "\142\165\164\164\x6f\156\164\145\170\164" => mo_($this->button_text), "\146\151\x65\x6c\x64" => $this->otp_type === $this->type_phone_tag ? $this->phone_key : "\165\163\145\162\137\145\x6d\141\x69\154", "\x69\x6d\x67\125\x52\114" => MOV_LOADER_URL));
        wp_enqueue_script("\x6d\157\166\165\155");
    }
    private function isPhoneVerificationEnabled()
    {
        $Vw = $this->get_verification_type();
        return VerificationType::PHONE === $Vw || VerificationType::BOTH === $Vw;
    }
    public function miniorange_um2_user_registration($q1, $rp)
    {
        $Vw = $this->get_verification_type();
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Vw)) {
            goto VRW;
        }
        if (!SessionUtils::is_otp_initialized($this->form_session_var) && $this->is_ajax_form) {
            goto IBs;
        }
        MoUtility::initialize_transaction($this->form_session_var);
        $rp = $this->extractArgs($rp);
        $this->startOtpTransaction($rp["\x75\x73\145\x72\137\x6c\x6f\147\151\156"], $rp["\165\x73\145\162\137\145\155\x61\151\x6c"], new WP_Error(), $rp[$this->phone_key], $rp["\165\x73\x65\x72\x5f\160\x61\163\163\x77\157\162\x64"], null);
        goto pUs;
        VRW:
        $this->unset_otp_session_variables();
        return $q1;
        goto pUs;
        IBs:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PLEASE_VALIDATE), MoConstants::ERROR_JSON_TYPE));
        pUs:
        return $q1;
    }
    private function extractArgs($rp)
    {
        return array("\x75\x73\145\x72\x5f\x6c\157\x67\151\156" => $rp["\x75\x73\x65\162\x5f\x6c\x6f\147\x69\156"], "\x75\163\145\162\x5f\145\155\141\151\x6c" => $rp["\x75\x73\145\162\137\x65\x6d\141\x69\x6c"], $this->phone_key => $rp[$this->phone_key], "\165\x73\x65\162\x5f\160\141\163\163\x77\157\162\144" => $rp["\165\163\145\x72\137\160\x61\x73\163\167\157\x72\144"]);
    }
    public function miniorange_um_user_registration($rp)
    {
        $errors = new WP_Error();
        MoUtility::initialize_transaction($this->form_session_var);
        foreach ($rp as $a6 => $bh) {
            if ("\x75\x73\145\162\137\x6c\x6f\x67\x69\x6e" === $a6) {
                goto Wjg;
            }
            if ("\x75\x73\145\x72\x5f\145\x6d\x61\x69\x6c" === $a6) {
                goto gH_;
            }
            if ("\x75\163\x65\x72\x5f\160\141\x73\x73\167\157\x72\144" === $a6) {
                goto rk3;
            }
            if ($a6 === $this->phone_key) {
                goto yeM;
            }
            $ia[$a6] = $bh;
            goto l6v;
            Wjg:
            $JG = $bh;
            goto l6v;
            gH_:
            $ZG = $bh;
            goto l6v;
            rk3:
            $L8 = $bh;
            goto l6v;
            yeM:
            $bV = $bh;
            l6v:
            YFP:
        }
        o18:
        $this->startOtpTransaction($JG, $ZG, $errors, $bV, $L8, $ia);
    }
    private function startOtpTransaction($JG, $ZG, $errors, $bV, $L8, $ia)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto Lsk;
        }
        if (strcasecmp($this->otp_type, $this->type_both_tag) === 0) {
            goto TD0;
        }
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::EMAIL, $L8, $ia);
        goto cwm;
        Lsk:
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::PHONE, $L8, $ia);
        goto cwm;
        TD0:
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::BOTH, $L8, $ia);
        cwm:
    }
    public function miniorange_um2_phone_validation($rp)
    {
        $form = UM()->form();
        foreach ($rp as $a6 => $bh) {
            if ($this->is_ajax_form && $a6 === $this->verify_field_meta_key) {
                goto Abe;
            }
            if ($a6 === $this->phone_key) {
                goto Nw3;
            }
            goto aVC;
            Abe:
            $this->checkIntegrityAndValidateOTP($form, $bh, $rp);
            goto aVC;
            Nw3:
            $this->process_phone_numbers($bh, $a6, $form);
            aVC:
            R6D:
        }
        fSd:
    }
    private function process_phone_numbers($bh, $a6, $form = null)
    {
        global $Hg;
        if (MoUtility::validate_phone_number($bh)) {
            goto Ixu;
        }
        $WZ = str_replace("\x23\x23\x70\150\x6f\156\145\43\x23", $bh, $Hg->get_otp_invalid_format_message());
        $form->add_error($a6, $WZ);
        Ixu:
        $this->checkDuplicates($bh, $a6, $form);
    }
    private function checkDuplicates($bh, $a6, $form = null)
    {
        if (!($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse($bh, $a6))) {
            goto Nxn;
        }
        $WZ = MoMessages::showMessage(MoMessages::PHONE_EXISTS);
        if ($this->is_ajax_form && SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto ElY;
        }
        $form->add_error($a6, $WZ);
        goto y2A;
        ElY:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        y2A:
        Nxn:
    }
    private function checkIntegrityAndValidateOTP($form, $bh, array $rp)
    {
        $Vw = $this->get_verification_type();
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto QGT;
        }
        $form->add_error($this->verify_field_meta_key, MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE));
        return;
        QGT:
        $this->checkIntegrity($form, $rp, $Vw);
        $this->validate_challenge($Vw, null, $bh);
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Vw)) {
            goto Oww;
        }
        $form->add_error($this->verify_field_meta_key, MoUtility::get_invalid_otp_method());
        Oww:
    }
    private function checkIntegrity($FA, array $rp, $Vw)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto DI2;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto se6;
        }
        goto sV0;
        DI2:
        if (SessionUtils::is_phone_verified_match($this->form_session_var, $rp[$this->phone_key])) {
            goto Tr3;
        }
        $FA->add_error($this->verify_field_meta_key, MoMessages::showMessage(MoMessages::PHONE_MISMATCH));
        Tr3:
        goto sV0;
        se6:
        if (SessionUtils::is_email_verified_match($this->form_session_var, $rp["\165\x73\x65\162\137\145\x6d\141\x69\x6c"])) {
            goto S5J;
        }
        $FA->add_error($this->verify_field_meta_key, MoMessages::showMessage(MoMessages::EMAIL_MISMATCH));
        S5J:
        sV0:
    }
    public function miniorange_um_phone_validation($rp)
    {
        global $ultimatemember;
        foreach ($rp as $a6 => $bh) {
            if ($this->is_ajax_form && $a6 === $this->verify_field_meta_key) {
                goto wKh;
            }
            if ($a6 === $this->phone_key) {
                goto E76;
            }
            goto mEY;
            wKh:
            $this->checkIntegrityAndValidateOTP($ultimatemember->form, $bh, $rp);
            goto mEY;
            E76:
            $this->process_phone_numbers($bh, $a6, $ultimatemember->form);
            mEY:
            LQF:
        }
        dBe:
    }
    private function isPhoneNumberAlreadyInUse($M9, $a6)
    {
        global $wpdb;
        MoUtility::process_phone_number($M9);
        $lR = $wpdb->get_row($wpdb->prepare("\x53\x45\114\x45\x43\x54\x20\140\x75\x73\145\x72\137\151\x64\x60\40\x46\x52\x4f\x4d\40\x60{$wpdb->prefix}\165\163\x65\x72\155\145\164\141\140\x20\127\110\x45\x52\105\x20\140\x6d\x65\164\141\137\153\145\171\x60\x20\x3d\x20\x25\163\x20\x41\116\104\40\140\x6d\x65\x74\141\137\x76\x61\x6c\x75\145\x60\40\x3d\40\x20\45\x73", array($a6, $M9)));
        return !MoUtility::is_blank($lR);
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto GKp;
        }
        return;
        GKp:
        $Vw = $this->get_verification_type();
        $Df = VerificationType::BOTH === $Vw ? true : false;
        if ($this->is_ajax_form) {
            goto VjP;
        }
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Vw, $Df);
        VjP:
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        if (!function_exists("\x69\163\x5f\x70\x6c\165\x67\151\156\x5f\x61\x63\x74\x69\x76\x65")) {
            include_once ABSPATH . "\x77\160\55\x61\144\x6d\x69\x6e\57\151\x6e\x63\154\165\144\145\x73\57\x70\x6c\x75\147\151\156\x2e\160\150\x70";
        }
        if ($this->isUltimateMemberV2Installed()) {
            goto T7V;
        }
        $this->register_ultimateMember_user($kD, $Wb, $L8, $bV, $ia);
        goto B5q;
        T7V:
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
        B5q:
    }
    public function register_ultimateMember_user($kD, $Wb, $L8, $bV, $ia)
    {
        $rp = array();
        $rp["\x75\163\x65\162\x5f\x6c\x6f\147\x69\156"] = $kD;
        $rp["\165\163\x65\x72\137\x65\155\141\x69\154"] = $Wb;
        $rp["\x75\163\145\x72\137\x70\141\x73\x73\167\157\162\144"] = $L8;
        $rp = array_merge($rp, $ia);
        $Uv = wp_create_user($kD, $L8, $Wb);
        $this->unset_otp_session_variables();
        do_action("\165\155\x5f\141\146\x74\x65\x72\x5f\156\145\x77\137\165\163\x65\162\x5f\x72\145\147\151\x73\164\x65\162", $Uv, $rp);
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->isPhoneVerificationEnabled())) {
            goto kqn;
        }
        array_push($MI, $this->phone_form_id);
        kqn:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto Cs7;
        }
        return;
        Cs7:
        $this->is_form_enabled = $this->sanitize_form_post("\x75\x6d\137\x64\x65\146\x61\165\x6c\x74\137\x65\156\141\142\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\165\x6d\x5f\145\x6e\141\x62\154\x65\137\164\171\x70\x65");
        $this->restrict_duplicates = $this->sanitize_form_post("\x75\155\x5f\x72\x65\x73\164\162\x69\x63\x74\x5f\x64\x75\160\x6c\x69\143\141\x74\x65\163");
        $this->is_ajax_form = $this->sanitize_form_post("\x75\x6d\x5f\151\x73\x5f\x61\152\141\x78\x5f\x66\157\x72\155");
        $this->button_text = $this->sanitize_form_post("\x75\x6d\x5f\142\x75\164\x74\x6f\x6e\137\164\x65\x78\164");
        $this->verify_field_meta_key = $this->sanitize_form_post("\x75\155\137\x76\x65\x72\151\x66\171\137\155\145\x74\141\137\153\145\171");
        $this->phone_key = $this->sanitize_form_post("\x75\x6d\137\x70\x68\x6f\x6e\x65\x5f\x6b\145\x79");
        if (!$this->basic_validation_check(BaseMessages::UM_CHOOSE)) {
            goto cYI;
        }
        update_mo_option("\165\155\x5f\160\x68\x6f\x6e\145\x5f\153\145\x79", $this->phone_key);
        update_mo_option("\x75\155\137\x64\x65\x66\x61\165\x6c\164\x5f\145\156\x61\x62\x6c\145", $this->is_form_enabled);
        update_mo_option("\x75\155\137\145\x6e\x61\x62\154\145\137\164\x79\x70\145", $this->otp_type);
        update_mo_option("\x75\155\x5f\162\x65\x73\164\162\151\143\x74\x5f\144\x75\x70\x6c\x69\x63\141\x74\x65\x73", $this->restrict_duplicates);
        update_mo_option("\x75\x6d\x5f\x69\x73\x5f\x61\152\x61\x78\137\146\x6f\162\155", $this->is_ajax_form);
        update_mo_option("\x75\x6d\x5f\x62\x75\x74\164\x6f\x6e\137\164\x65\170\164", $this->button_text);
        update_mo_option("\165\155\137\x76\145\x72\151\146\171\137\155\x65\164\141\x5f\153\x65\x79", $this->verify_field_meta_key);
        cYI:
    }
}
YdN:
