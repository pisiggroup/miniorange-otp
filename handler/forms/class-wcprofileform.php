<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\x53\x50\x41\124\110")) {
    goto OIv;
}
exit;
OIv:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
if (class_exists("\x57\x63\x50\162\157\x66\x69\154\145\x46\157\x72\155")) {
    goto UhF;
}
class WcProfileForm extends FormHandler implements IFormHandler
{
    use Instance;
    private $verify_field_key;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::WC_PROFILE_UPDATE;
        $this->type_phone_tag = "\x6d\157\137\x77\x63\137\x70\162\157\x66\x69\154\x65\x5f\160\x68\157\156\145\x5f\x65\x6e\x61\x62\x6c\x65";
        $this->type_email_tag = "\x6d\x6f\137\167\x63\x5f\160\x72\157\x66\151\x6c\x65\137\145\x6d\x61\151\154\x5f\x65\156\x61\142\x6c\x65";
        $this->form_key = "\127\103\x5f\101\103\x5f\x46\x4f\x52\115";
        $this->verify_field_key = "\x76\145\162\151\146\171\137\146\151\x65\x6c\144";
        $this->form_name = mo_("\x57\157\157\x43\x6f\x6d\155\145\x72\143\x65\x20\101\x63\x63\157\165\x6e\x74\40\104\145\164\x61\x69\x6c\x73\40\106\157\x72\x6d");
        $this->is_form_enabled = get_mo_option("\x77\143\x5f\160\162\x6f\x66\x69\154\x65\x5f\145\156\x61\142\154\145");
        $this->restrict_duplicates = get_mo_option("\167\x63\x5f\160\162\x6f\146\x69\x6c\x65\x5f\162\x65\163\x74\162\x69\143\164\x5f\x64\165\x70\x6c\x69\x63\x61\x74\145\x73");
        $this->button_text = get_mo_option("\167\x63\x5f\160\x72\x6f\146\151\154\145\137\x62\x75\x74\x74\x6f\156\x5f\x74\145\x78\x74");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\x43\154\x69\x63\x6b\40\x48\145\162\145\40\x74\157\40\x73\145\x6e\x64\40\117\x54\120");
        $this->phone_key = get_mo_option("\167\143\137\x70\x72\157\146\x69\x6c\x65\137\x70\x68\157\156\x65\x5f\x6b\145\x79");
        $this->phone_key = $this->phone_key ? $this->phone_key : "\x62\x69\154\154\151\x6e\x67\x5f\160\x68\157\156\x65";
        $this->phone_form_id = "\x23\x62\151\x6c\x6c\x69\156\147\x5f\160\x68\157\x6e\x65";
        $this->generate_otp_action = "\x6d\151\156\x69\x6f\162\141\156\x67\x65\x5f\167\x63\137\x61\x63\x5f\x6f\x74\x70";
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x77\143\137\160\162\x6f\x66\151\154\x65\x5f\145\x6e\141\142\154\x65\137\x74\x79\x70\145");
        add_action("\167\x6f\x6f\143\157\x6d\155\x65\x72\143\145\137\x65\144\151\164\137\141\x63\x63\157\x75\x6e\x74\137\146\x6f\162\x6d", array($this, "\155\157\x5f\141\x64\x64\x5f\160\150\157\x6e\x65\137\146\151\x65\154\x64\137\x61\143\x63\157\x75\156\164\x5f\146\x6f\x72\155"));
        add_action("\167\160\137\141\x6a\x61\170\x5f{$this->generate_otp_action}", array($this, "\163\164\x61\162\x74\117\164\160\x56\145\162\x69\x66\x69\143\141\x74\151\157\x6e\120\x72\157\143\145\163\x73"));
        add_action("\x77\160\x5f\141\152\x61\170\x5f\x6e\157\x70\162\x69\x76\137{$this->generate_otp_action}", array($this, "\x73\164\141\162\164\117\x74\x70\126\x65\x72\151\146\151\143\x61\x74\151\x6f\x6e\120\x72\x6f\143\x65\163\163"));
        add_action("\x77\x6f\x6f\x63\157\x6d\155\145\162\x63\x65\x5f\163\141\x76\x65\137\141\143\143\157\x75\156\x74\137\x64\145\x74\141\x69\154\x73\x5f\145\x72\162\157\162\163", array($this, "\x76\145\162\151\x66\171\x4f\x74\160\105\x6e\164\x65\162\145\x64"), 10, 1);
        add_action("\167\x70\x5f\x65\x6e\x71\x75\145\x75\145\137\x73\x63\x72\x69\x70\164\x73", array($this, "\155\x69\156\x69\x6f\x72\141\x6e\x67\145\x5f\167\143\137\x61\143\x5f\163\143\x72\151\x70\164"));
    }
    public function verifyOtpEntered($errors)
    {
        $Yc = strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? "\142\x69\154\154\151\156\147\137\160\x68\157\156\145" : "\141\x63\143\x6f\165\156\164\x5f\x65\155\141\x69\154";
        if ($this->getUserData($this->phone_key) !== (isset($_POST[$Yc]) ? sanitize_text_field(wp_unslash($_POST[$Yc])) : '')) {
            goto SGg;
        }
        return;
        goto Jpx;
        SGg:
        $this->checkIfOTPSent($errors);
        if (empty($errors->errors)) {
            goto va1;
        }
        return $errors;
        va1:
        $this->checkIntegrityAndValidateOTP($errors);
        Jpx:
    }
    private function checkIfOTPSent($errors)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto Iwq;
        }
        $errors->add("\142\x69\154\x6c\151\x6e\x67\137\165\x73\x65\x72\x5f\156\x65\145\144\137\164\x6f\137\x76\145\x72\x69\x66\x79\137\145\x72\x72\x6f\x72", MoMessages::showMessage(MoMessages::PLEASE_VALIDATE));
        return $errors;
        Iwq:
    }
    private function checkIntegrityAndValidateOTP($errors)
    {
        $this->checkIntegrity($errors);
        $this->validate_challenge($this->get_verification_type(), null, isset($_POST["\145\156\x74\x65\162\x5f\157\164\x70"]) ? sanitize_text_field(wp_unslash($_POST["\145\x6e\x74\145\x72\137\157\x74\160"])) : '');
        if (empty($errors->errors)) {
            goto JBL;
        }
        return $errors;
        JBL:
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto jft;
        }
        $errors->add("\142\x69\x6c\x6c\x69\x6e\x67\137\x69\156\x76\141\154\x69\144\x5f\157\164\x70\x5f\145\162\162\x6f\162", MoMessages::showMessage(MoMessages::INVALID_OTP));
        return $errors;
        goto fqz;
        jft:
        if (!($this->get_verification_type() === VerificationType::PHONE)) {
            goto DWx;
        }
        SessionUtils::add_phone_submitted($this->form_session_var, isset($_POST["\x62\x69\x6c\154\151\x6e\x67\x5f\160\x68\x6f\x6e\145"]) ? sanitize_text_field(wp_unslash($_POST["\142\151\154\x6c\151\156\147\x5f\160\150\157\x6e\x65"])) : '');
        $Uv = get_current_user_id();
        update_user_meta($Uv, "\142\x69\x6c\x6c\x69\x6e\x67\x5f\x70\x68\157\156\x65", isset($_POST["\x62\151\x6c\154\x69\x6e\147\137\x70\150\157\156\145"]) ? sanitize_text_field(wp_unslash($_POST["\142\151\154\154\x69\x6e\147\x5f\160\150\157\156\x65"])) : '');
        $this->unset_otp_session_variables();
        DWx:
        if (!($this->get_verification_type() === VerificationType::EMAIL)) {
            goto mbD;
        }
        SessionUtils::add_email_submitted($this->form_session_var, isset($_POST["\x61\143\x63\x6f\x75\x6e\164\137\145\x6d\141\151\x6c"]) ? sanitize_email(wp_unslash($_POST["\141\143\143\x6f\165\156\x74\x5f\x65\155\141\x69\154"])) : '');
        $Uv = get_current_user_id();
        $u5 = array("\111\104" => $Uv, "\x75\163\x65\x72\137\x65\155\x61\x69\x6c" => sanitize_email(wp_unslash($_POST["\x61\143\x63\157\165\156\x74\137\x65\155\x61\x69\x6c"])));
        wp_update_user($u5);
        $this->unset_otp_session_variables();
        mbD:
        fqz:
    }
    private function checkIntegrity($errors)
    {
        if (!($this->get_verification_type() === VerificationType::PHONE)) {
            goto bzA;
        }
        if (SessionUtils::is_phone_verified_match($this->form_session_var, isset($_POST["\142\151\154\154\x69\156\147\x5f\x70\150\x6f\156\x65"]) ? sanitize_text_field(wp_unslash($_POST["\142\151\154\154\151\156\147\137\x70\150\157\x6e\x65"])) : '')) {
            goto uMn;
        }
        $errors->add("\142\x69\154\154\151\x6e\x67\x5f\160\150\157\x6e\x65\x5f\155\x69\163\155\x61\x74\143\150\137\145\162\x72\157\x72", MoMessages::showMessage(MoMessages::PHONE_MISMATCH));
        return $errors;
        uMn:
        bzA:
        if (!($this->get_verification_type() === VerificationType::EMAIL)) {
            goto Oyo;
        }
        if (SessionUtils::is_email_verified_match($this->form_session_var, isset($_POST["\x61\143\143\157\165\x6e\164\137\145\x6d\x61\x69\x6c"]) ? sanitize_email(wp_unslash($_POST["\141\143\x63\157\165\156\x74\137\145\x6d\x61\x69\x6c"])) : '')) {
            goto ggl;
        }
        $errors->add("\142\151\x6c\x6c\151\156\x67\x5f\145\x6d\x61\x69\154\x5f\x6d\151\163\155\x61\164\x63\150\x5f\145\x72\x72\x6f\162", MoMessages::showMessage(MoMessages::EMAIL_MISMATCH));
        return $errors;
        ggl:
        Oyo:
    }
    public function miniorange_wc_ac_script()
    {
        wp_register_script("\x6d\157\167\x63\141\x63", MOV_URL . "\151\x6e\x63\x6c\x75\x64\x65\163\57\152\x73\x2f\x6d\x6f\167\x63\x61\143\56\155\x69\156\x2e\152\163", array("\x6a\161\165\x65\x72\171"), MOV_VERSION, true);
        wp_localize_script("\155\x6f\167\143\x61\x63", "\155\x6f\x77\x63\141\x63", array("\163\151\164\145\125\x52\114" => wp_ajax_url(), "\x6f\x74\x70\124\x79\160\x65" => $this->otp_type === $this->type_phone_tag ? "\x70\x68\x6f\156\145" : "\145\155\141\x69\154", "\156\x6f\156\x63\x65" => wp_create_nonce($this->nonce), "\x62\165\164\164\x6f\x6e\x74\145\170\x74" => mo_($this->button_text), "\151\x6d\x67\125\x52\114" => MOV_LOADER_URL, "\147\x65\x6e\145\x72\x61\164\145\x55\122\x4c" => $this->generate_otp_action, "\x66\151\x65\x6c\144\x56\x61\x6c\165\x65" => $this->getUserData($this->phone_key), "\160\150\157\x6e\x65\x4b\x65\171" => $this->phone_key));
        wp_enqueue_script("\x6d\157\167\x63\141\143");
    }
    private function getUserData($a6)
    {
        $current_user = wp_get_current_user();
        if ($this->otp_type === $this->type_phone_tag) {
            goto GuE;
        }
        return $current_user->user_email;
        goto qAd;
        GuE:
        global $wpdb;
        $lR = $wpdb->get_row($wpdb->prepare("\123\x45\x4c\x45\x43\x54\x20\155\x65\164\x61\137\x76\141\x6c\x75\145\x20\x46\122\117\115\x20\140{$wpdb->prefix}\x75\x73\x65\x72\x6d\145\x74\x61\140\x20\x57\x48\105\x52\x45\x20\140\155\145\x74\x61\x5f\153\145\x79\x60\x20\75\40\x25\x73\x20\x41\116\104\40\140\165\x73\145\162\137\151\x64\x60\x20\x3d\40\x25\144", array($a6, $current_user->ID)));
        return isset($lR) ? $lR->meta_value : '';
        qAd:
    }
    public function startOtpVerificationProcess()
    {
        if (check_ajax_referer($this->nonce, "\163\145\x63\x75\x72\x69\x74\171", false)) {
            goto mU8;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        mU8:
        $GX = MoUtility::mo_sanitize_array($_POST);
        MoUtility::initialize_transaction($this->form_session_var);
        if ($this->otp_type === $this->type_phone_tag) {
            goto iUi;
        }
        $this->processEmailAndSendOTP($GX);
        goto f4l;
        iUi:
        $this->processPhoneAndSendOTP($GX);
        f4l:
    }
    private function processPhoneAndSendOTP($GX)
    {
        if (!MoUtility::sanitize_check("\165\163\x65\162\137\151\156\160\165\164", $GX)) {
            goto Iem;
        }
        $this->checkDuplicates(sanitize_text_field($GX["\x75\x73\x65\x72\x5f\x69\156\160\x75\164"]), $this->phone_key);
        SessionUtils::add_phone_verified($this->form_session_var, sanitize_text_field($GX["\165\163\145\x72\x5f\x69\x6e\160\x75\164"]));
        $this->send_challenge('', null, null, sanitize_text_field($GX["\x75\163\145\162\137\151\156\160\165\164"]), VerificationType::PHONE);
        goto Igv;
        Iem:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        Igv:
    }
    private function processEmailAndSendOTP($GX)
    {
        if (!MoUtility::sanitize_check("\x75\163\145\x72\x5f\x69\156\x70\165\164", $GX)) {
            goto qM0;
        }
        SessionUtils::add_email_verified($this->form_session_var, sanitize_email($GX["\165\163\x65\162\137\x69\x6e\160\x75\164"]));
        $this->send_challenge('', sanitize_text_field($GX["\165\x73\145\162\137\151\x6e\160\165\164"]), null, null, VerificationType::EMAIL);
        goto sqD;
        qM0:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        sqD:
    }
    private function checkDuplicates($bh, $a6)
    {
        if (!($this->restrict_duplicates && $this->isPhoneNumberAlreadyInUse($bh, $a6))) {
            goto xpl;
        }
        $WZ = MoMessages::showMessage(MoMessages::PHONE_EXISTS);
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        xpl:
    }
    private function isPhoneNumberAlreadyInUse($M9, $a6)
    {
        global $wpdb;
        MoUtility::process_phone_number($M9);
        $lR = $wpdb->get_row($wpdb->prepare("\x53\105\114\x45\103\124\40\140\x75\163\x65\x72\x5f\x69\x64\140\40\x46\x52\x4f\x4d\x20\x60{$wpdb->prefix}\165\163\145\162\x6d\145\x74\141\x60\40\127\110\x45\122\x45\x20\x60\155\145\164\141\137\153\145\x79\140\x20\x3d\40\45\163\x20\101\116\104\x20\140\x6d\x65\164\x61\x5f\x76\x61\154\x75\x65\140\x20\75\x20\x20\45\x73", array($a6, $M9)));
        return !MoUtility::is_blank($lR);
    }
    public function mo_add_phone_field_account_form()
    {
        woocommerce_form_field("\x62\x69\154\x6c\x69\156\147\137\160\150\157\156\x65", array("\164\x79\160\x65" => "\x74\x65\170\164", "\162\x65\x71\165\x69\x72\x65\144" => true, "\154\x61\142\x65\154" => "\x50\150\x6f\x6e\145\x20\116\165\x6d\x62\x65\x72"), get_user_meta(get_current_user_id(), "\142\x69\x6c\154\x69\156\147\137\160\150\157\156\x65", true));
        woocommerce_form_field("\145\156\x74\x65\162\137\157\x74\160", array("\x74\x79\160\x65" => "\x74\145\170\164", "\x72\145\x71\x75\151\x72\145\144" => false, "\154\141\x62\145\x6c" => "\105\156\164\x65\162\40\117\124\120"), get_user_meta(get_current_user_id(), "\145\156\164\x65\162\137\157\164\x70", true));
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
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto lpT;
        }
        array_push($MI, $this->phone_form_id);
        lpT:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto NOg;
        }
        return;
        NOg:
        $this->is_form_enabled = $this->sanitize_form_post("\167\x63\x5f\160\x72\x6f\146\x69\154\145\137\145\x6e\x61\x62\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\x77\143\x5f\160\162\157\x66\x69\x6c\x65\x5f\145\x6e\x61\142\154\145\x5f\164\x79\160\145");
        $this->button_text = $this->sanitize_form_post("\x77\x63\137\160\162\157\146\x69\x6c\x65\x5f\x62\x75\164\x74\157\156\137\164\x65\x78\164");
        $this->restrict_duplicates = $this->sanitize_form_post("\167\143\137\160\162\x6f\x66\x69\x6c\x65\x5f\162\145\x73\164\162\x69\x63\164\x5f\144\165\x70\154\151\x63\x61\x74\145\x73");
        $this->phone_key = $this->sanitize_form_post("\x77\143\x5f\x70\162\x6f\x66\151\x6c\x65\x5f\160\x68\157\x6e\x65\137\x6b\145\171");
        update_mo_option("\x77\x63\137\x70\162\157\x66\x69\154\x65\137\x65\156\141\x62\154\x65", $this->is_form_enabled);
        update_mo_option("\167\143\x5f\160\x72\157\146\151\154\x65\x5f\145\x6e\x61\142\154\x65\x5f\164\171\x70\145", $this->otp_type);
        update_mo_option("\167\x63\137\x70\162\x6f\146\x69\154\x65\x5f\142\x75\164\164\x6f\156\137\164\x65\x78\x74", $this->button_text);
        update_mo_option("\167\x63\x5f\160\x72\x6f\146\151\x6c\x65\x5f\162\x65\163\164\x72\x69\143\x74\137\144\x75\x70\x6c\x69\143\x61\x74\x65\163", $this->restrict_duplicates);
        update_mo_option("\x77\143\x5f\160\162\x6f\x66\151\154\x65\137\160\x68\157\156\x65\x5f\153\145\x79", $this->phone_key);
    }
}
UhF:
