<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\x53\120\x41\x54\110")) {
    goto WsC;
}
exit;
WsC:
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
if (class_exists("\126\151\163\x75\141\x6c\106\x6f\162\155\x42\x75\x69\154\144\x65\x72")) {
    goto UYT;
}
class VisualFormBuilder extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::VISUAL_FORM;
        $this->type_phone_tag = "\155\x6f\x5f\166\151\163\165\x61\x6c\x5f\146\157\162\155\x5f\x70\150\x6f\x6e\x65\x5f\x65\156\141\142\x6c\145";
        $this->type_email_tag = "\155\x6f\x5f\x76\x69\163\x75\141\x6c\137\146\x6f\x72\x6d\x5f\145\155\x61\151\x6c\137\145\x6e\x61\x62\154\145";
        $this->type_both_tag = "\155\x6f\137\166\151\163\165\x61\154\x5f\x66\157\x72\x6d\x5f\142\157\x74\150\x5f\145\x6e\141\x62\x6c\x65";
        $this->form_key = "\x56\x49\123\125\101\114\x5f\106\117\122\x4d";
        $this->form_name = mo_("\126\x69\163\x75\x61\x6c\40\x46\157\x72\155\x20\x42\165\x69\x6c\144\145\162");
        $this->phone_form_id = array();
        $this->is_form_enabled = get_mo_option("\x76\x69\x73\165\141\154\x5f\x66\x6f\x72\155\x5f\x65\x6e\141\142\x6c\145");
        $this->button_text = get_mo_option("\x76\151\163\165\x61\x6c\x5f\146\x6f\x72\x6d\x5f\x62\165\x74\x74\x6f\156\137\164\145\170\164");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\103\154\x69\x63\x6b\40\x48\145\162\145\40\x74\x6f\40\163\145\x6e\144\x20\117\124\120");
        $this->generate_otp_action = "\155\151\x6e\151\x6f\x72\x61\x6e\x67\145\55\166\x66\55\163\x65\x6e\x64\55\157\164\160";
        $this->validate_otp_action = "\x6d\151\x6e\x69\x6f\x72\x61\x6e\x67\145\x2d\166\146\x2d\166\145\162\x69\x66\171\x2d\x63\x6f\144\145";
        $this->form_documents = MoFormDocs::VISUAL_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x76\151\x73\x75\x61\154\x5f\146\157\x72\x6d\x5f\x65\156\141\142\154\145\x5f\x74\x79\160\x65");
        $this->form_details = maybe_unserialize(get_mo_option("\x76\151\163\165\x61\x6c\137\146\157\162\x6d\137\x6f\x74\160\x5f\145\156\141\142\154\x65\144"));
        if (!(empty($this->form_details) || !$this->is_form_enabled)) {
            goto TiE;
        }
        return;
        TiE:
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\43" . $bh["\160\x68\157\156\x65\x6b\x65\x79"]);
            ahR:
        }
        KR3:
        add_action("\x77\x70\x5f\x65\156\161\x75\x65\165\x65\x5f\x73\x63\162\x69\x70\164\x73", array($this, "\155\157\x5f\x65\x6e\161\165\x65\x75\x65\137\166\x66"));
        add_action("\x77\160\x5f\x61\152\141\x78\x5f{$this->generate_otp_action}", array($this, "\x6d\x6f\137\163\x65\x6e\x64\x5f\157\164\x70\x5f\x76\x66\137\x61\152\141\170\x28\51"));
        add_action("\x77\160\x5f\x61\x6a\141\x78\137\x6e\157\160\x72\151\x76\x5f{$this->generate_otp_action}", array($this, "\155\x6f\137\x73\145\x6e\144\137\x6f\x74\160\x5f\166\146\x5f\x61\x6a\x61\170"));
        add_action("\x77\x70\x5f\x61\152\141\170\x5f{$this->validate_otp_action}", array($this, "\160\x72\x6f\x63\x65\163\163\106\157\162\x6d\x41\156\144\x56\x61\154\x69\144\141\164\145\117\x54\x50"));
        add_action("\167\x70\137\x61\x6a\x61\x78\137\x6e\157\x70\x72\151\166\137{$this->validate_otp_action}", array($this, "\x70\162\157\143\145\x73\163\x46\x6f\x72\x6d\101\x6e\144\x56\x61\154\151\144\x61\164\145\117\124\x50"));
    }
    public function mo_enqueue_vf()
    {
        wp_register_script("\x76\146\163\143\x72\x69\160\x74", MOV_URL . "\151\156\143\154\165\x64\x65\x73\x2f\152\163\57\166\146\163\x63\x72\x69\160\x74\56\x6d\151\x6e\56\x6a\163", array("\152\161\x75\x65\162\171"), MOV_VERSION, true);
        wp_localize_script("\x76\x66\163\143\x72\151\x70\164", "\155\x6f\166\146\166\141\x72", array("\163\151\x74\145\x55\122\x4c" => wp_ajax_url(), "\x6f\x74\x70\124\171\x70\145" => strcasecmp($this->otp_type, $this->type_phone_tag), "\x66\157\162\155\x44\x65\x74\141\151\x6c\x73" => $this->form_details, "\142\165\164\164\157\156\164\145\x78\x74" => $this->button_text, "\151\x6d\147\125\x52\x4c" => MOV_LOADER_URL, "\x66\151\145\154\x64\124\145\x78\164" => mo_("\105\156\164\145\162\x20\x4f\124\x50\40\150\145\162\145"), "\x67\x6e\x6f\156\x63\x65" => wp_create_nonce($this->nonce), "\156\157\x6e\x63\145\x4b\x65\x79" => wp_create_nonce($this->nonce_key), "\166\x6e\x6f\x6e\x63\x65" => wp_create_nonce($this->nonce), "\x67\x61\143\x74\x69\x6f\156" => $this->generate_otp_action, "\x76\141\143\x74\151\x6f\x6e" => $this->validate_otp_action));
        wp_enqueue_script("\x76\146\x73\x63\x72\151\160\164");
    }
    public function mo_send_otp_vf_ajax()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto YZ4;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        exit;
        YZ4:
        $GX = MoUtility::mo_sanitize_array($_POST);
        if ($this->otp_type === $this->type_phone_tag) {
            goto tVk;
        }
        $this->mo_send_vf_otp_to_email($GX);
        goto Trv;
        tVk:
        $this->mo_send_vf_otp_to_phone($GX);
        Trv:
    }
    public function mo_send_vf_otp_to_phone($GX)
    {
        if (!MoUtility::sanitize_check("\x75\163\x65\x72\137\x70\150\x6f\156\145", $GX)) {
            goto TFZ;
        }
        $this->startOTPVerification(sanitize_text_field(trim($GX["\165\163\x65\x72\x5f\160\150\x6f\156\x65"])), null, sanitize_text_field(trim($GX["\x75\x73\x65\x72\x5f\160\150\x6f\x6e\x65"])), VerificationType::PHONE);
        goto o5W;
        TFZ:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        o5W:
    }
    public function mo_send_vf_otp_to_email($GX)
    {
        if (!MoUtility::sanitize_check("\x75\163\145\x72\137\145\x6d\141\x69\x6c", $GX)) {
            goto Yhs;
        }
        $this->startOTPVerification(sanitize_email($GX["\x75\x73\x65\162\137\x65\x6d\141\x69\154"]), sanitize_email($GX["\x75\x73\x65\x72\x5f\145\155\141\x69\x6c"]), null, VerificationType::EMAIL);
        goto Upf;
        Yhs:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        Upf:
    }
    private function startOTPVerification($Pl, $Wb, $bV, $I2)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (VerificationType::PHONE === $I2) {
            goto gef;
        }
        SessionUtils::add_email_verified($this->form_session_var, $Pl);
        goto Hjw;
        gef:
        SessionUtils::add_phone_verified($this->form_session_var, $Pl);
        Hjw:
        $this->send_challenge('', $Wb, null, $bV, $I2);
    }
    public function processFormAndValidateOTP()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto AkK;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        exit;
        AkK:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->checkIfVerificationNotStarted();
        $this->checkIntegrityAndValidateOTP($GX);
    }
    public function checkIfVerificationNotStarted()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto flK;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE), MoConstants::ERROR_JSON_TYPE));
        flK:
    }
    private function checkIntegrityAndValidateOTP($post)
    {
        $this->checkIntegrity($post);
        $this->validate_challenge($this->get_verification_type(), null, sanitize_text_field($post["\157\164\160\x5f\x74\x6f\x6b\x65\156"]));
    }
    private function checkIntegrity($post)
    {
        if ($this->isPhoneVerificationEnabled()) {
            goto sfj;
        }
        if (!SessionUtils::is_email_verified_match($this->form_session_var, sanitize_text_field($post["\163\165\x62\x5f\x66\151\x65\154\x64"]))) {
            goto ibm;
        }
        goto QiN;
        sfj:
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($post["\163\x75\x62\137\x66\151\145\x6c\x64"]))) {
            goto hY_;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        hY_:
        goto QiN;
        ibm:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        QiN:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        wp_send_json(MoUtility::create_json(MoUtility::get_invalid_otp_method(), MoConstants::ERROR_JSON_TYPE));
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        $this->unset_otp_session_variables();
        wp_send_json(MoUtility::create_json(MoConstants::SUCCESS, MoConstants::SUCCESS_JSON_TYPE));
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled && $this->isPhoneVerificationEnabled())) {
            goto BUL;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        BUL:
        return $MI;
    }
    private function isPhoneVerificationEnabled()
    {
        $Bo = $this->get_verification_type();
        return VerificationType::PHONE === $Bo || VerificationType::BOTH === $Bo;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\x6d\141\156\x61\x67\x65\x5f\157\160\x74\x69\157\156\x73") || !check_admin_referer($this->admin_nonce))) {
            goto MRf;
        }
        return;
        MRf:
        if (!function_exists("\151\163\x5f\x70\x6c\165\147\x69\x6e\x5f\141\x63\x74\x69\x76\x65")) {
            include_once ABSPATH . "\x77\x70\55\x61\144\155\151\156\57\151\x6e\143\154\x75\144\x65\163\x2f\160\154\165\x67\x69\156\56\x70\150\160";
        }
        if (is_plugin_active("\x76\151\x73\165\x61\154\55\x66\157\162\155\55\x62\165\151\154\x64\145\x72\57\x76\151\163\x75\141\154\x2d\x66\157\162\155\55\x62\165\151\x6c\144\x65\x72\56\160\x68\160")) {
            goto Ww0;
        }
        return;
        Ww0:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $form = $this->parseFormDetails($GX);
        $this->is_form_enabled = $this->sanitize_form_post("\166\x69\x73\x75\141\x6c\x5f\146\157\162\155\137\x65\x6e\x61\142\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\x76\x69\x73\165\x61\154\137\x66\x6f\162\x6d\137\145\156\141\x62\154\x65\137\x74\171\x70\145");
        $this->form_details = !empty($form) ? $form : '';
        $this->button_text = $this->sanitize_form_post("\x76\x69\x73\x75\x61\154\137\146\x6f\x72\155\137\x62\x75\164\164\x6f\x6e\137\164\x65\x78\x74");
        if (!$this->basic_validation_check(BaseMessages::VISUAL_FORM_CHOOSE)) {
            goto Sn_;
        }
        update_mo_option("\166\151\163\x75\x61\154\x5f\146\x6f\x72\155\137\142\x75\x74\x74\157\156\137\x74\x65\x78\x74", $this->button_text);
        update_mo_option("\166\151\163\x75\141\154\x5f\x66\157\162\x6d\x5f\145\x6e\141\x62\154\x65", $this->is_form_enabled);
        update_mo_option("\166\x69\163\x75\x61\x6c\137\x66\x6f\162\x6d\x5f\x65\x6e\141\x62\154\x65\137\164\171\160\145", $this->otp_type);
        update_mo_option("\166\x69\163\165\x61\154\137\x66\x6f\162\155\x5f\x6f\x74\x70\x5f\x65\x6e\141\x62\154\145\144", maybe_serialize($this->form_details));
        Sn_:
    }
    public function parseFormDetails($GX)
    {
        $form = array();
        if (array_key_exists("\x76\151\163\x75\141\154\x5f\146\157\x72\x6d", $GX)) {
            goto Uud;
        }
        return array();
        Uud:
        $GX = MoUtility::mo_sanitize_array($GX);
        foreach (array_filter($GX["\166\x69\163\x75\141\154\137\146\157\162\155"]["\146\157\x72\x6d"]) as $a6 => $bh) {
            $form[$bh] = array("\145\155\x61\151\x6c\153\x65\x79" => $this->getFieldID(sanitize_text_field($GX["\166\151\x73\165\x61\154\x5f\146\x6f\162\x6d"]["\145\155\x61\x69\154\153\x65\x79"][$a6]), $bh), "\160\x68\x6f\156\x65\x6b\x65\x79" => $this->getFieldID(sanitize_text_field($GX["\x76\x69\x73\165\x61\x6c\137\x66\157\x72\155"]["\160\150\157\x6e\x65\x6b\x65\171"][$a6]), $bh), "\160\x68\x6f\156\x65\x5f\163\150\157\x77" => sanitize_text_field($GX["\x76\151\x73\x75\x61\154\x5f\x66\x6f\162\155"]["\160\x68\157\x6e\145\153\x65\171"][$a6]), "\145\155\141\151\154\137\x73\150\x6f\167" => sanitize_text_field($GX["\166\x69\163\165\x61\154\x5f\146\x6f\162\x6d"]["\145\x6d\x61\151\154\153\145\171"][$a6]));
            Ovc:
        }
        hfo:
        return $form;
    }
    private function getFieldID($a6, $Nb)
    {
        global $wpdb;
        $xD = $wpdb->get_row($wpdb->prepare("\123\x45\114\105\103\x54\40\52\40\x46\x52\x4f\x4d\x20\45\163\x20\x77\x68\x65\162\x65\40\x66\x69\145\x6c\x64\137\156\x61\155\145\40\x3d\x20\x25\163\x20\x61\156\144\x20\x66\x6f\162\155\137\151\144\x20\x3d\x20\x25\163", array(VFB_WP_FIELDS_TABLE_NAME, $a6, $Nb)));
        return !MoUtility::is_blank($xD) ? "\166\146\142\55" . $xD->field_id : '';
    }
}
UYT:
