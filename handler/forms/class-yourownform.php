<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\123\x50\101\124\110")) {
    goto xO_;
}
exit;
xO_:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Objects\BaseMessages;
use OTP\Traits\Instance;
if (class_exists("\x59\157\165\162\117\x77\156\x46\157\x72\155")) {
    goto d8G;
}
class YourOwnForm extends FormHandler implements IFormHandler
{
    use Instance;
    private $check_validated_on_submit;
    private $form_field_id;
    private $form_submit_id;
    private $validated;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_key = "\x59\x4f\x55\122\137\x4f\127\116\x5f\106\117\122\115";
        $this->form_name = mo_("\x3c\163\x70\x61\x6e\x20\x73\164\171\x6c\x65\75\x27\x63\157\154\157\x72\72\147\x72\145\x65\x6e\x27\40\x3e\x3c\142\76\103\141\x6e\x27\x74\x20\106\x69\156\x64\40\x79\x6f\165\162\x20\106\157\162\x6d\77\x20\124\x72\171\x20\x6d\145\x21\x3c\x2f\142\x3e\x3c\57\163\160\x61\156\76");
        $this->form_session_var = FormSessionVars::CUSTOMFORM;
        $this->form_details = maybe_unserialize(get_mo_option("\143\x75\163\x74\157\x6d\137\146\x6f\x72\155\x5f\x6f\164\x70\137\x65\x6e\x61\142\x6c\145\x64"));
        $this->type_phone_tag = "\x6d\157\x5f\143\x75\163\x74\157\155\106\x6f\162\155\x5f\160\150\157\156\145\x5f\x65\156\141\x62\x6c\x65";
        $this->type_email_tag = "\x6d\x6f\x5f\143\165\x73\164\x6f\155\x46\157\x72\155\x5f\145\155\141\151\154\x5f\145\x6e\141\142\x6c\x65";
        $this->is_form_enabled = get_mo_option("\143\x75\163\x74\x6f\155\137\146\157\162\155\137\143\x6f\x6e\x74\141\143\164\137\145\x6e\141\x62\154\145");
        $this->generate_otp_action = "\x6d\x69\x6e\x69\157\x72\141\x6e\147\x65\x2d\143\x75\163\164\x6f\155\x46\x6f\x72\155\x2d\163\145\x6e\x64\x2d\157\164\160";
        $this->validate_otp_action = "\x6d\x69\x6e\151\x6f\162\x61\156\x67\145\55\x63\165\163\x74\157\155\x46\157\162\x6d\55\166\x65\x72\x69\x66\x79\x2d\x63\x6f\144\x65";
        $this->check_validated_on_submit = "\x6d\x69\156\151\x6f\x72\141\x6e\x67\x65\x2d\x63\x75\163\164\157\x6d\106\x6f\162\155\55\x76\x65\162\151\146\x79\x2d\x73\x75\x62\x6d\151\164";
        $this->otp_type = get_mo_option("\x63\165\x73\164\x6f\155\x5f\x66\157\x72\155\137\x65\156\141\x62\154\x65\137\x74\171\x70\x65");
        $this->button_text = get_mo_option("\x63\165\x73\x74\x6f\x6d\x5f\146\x6f\x72\x6d\137\x62\165\164\x74\x6f\156\137\x74\145\170\164");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\x43\x6c\151\x63\153\40\110\145\x72\x65\40\x74\x6f\x20\163\145\156\144\40\117\x54\120");
        $this->validated = false;
        parent::__construct();
        $this->handle_form();
    }
    public function handle_form()
    {
        MoPHPSessions::check_session();
        if ($this->is_form_enabled) {
            goto e5M;
        }
        return;
        e5M:
        $this->form_field_id = $this->getFieldKeyDetails();
        $this->form_submit_id = $this->getSubmitKeyDetails();
        add_action("\x77\x70\137\145\x6e\x71\x75\x65\165\145\x5f\163\x63\162\151\x70\164\x73", array($this, "\155\157\x5f\x65\x6e\x71\165\145\165\x65\x5f\146\x6f\x72\x6d\x5f\163\143\x72\x69\160\x74"));
        add_action("\x6c\x6f\147\x69\156\x5f\x65\156\x71\x75\145\x75\x65\x5f\x73\x63\162\x69\x70\164\163", array($this, "\x6d\157\137\145\156\161\165\x65\165\145\x5f\x66\157\162\155\137\163\x63\x72\x69\x70\164"));
        add_action("\x77\x70\x5f\x61\152\141\x78\x5f{$this->generate_otp_action}", array($this, "\163\x65\x6e\144\x5f\x6f\164\x70"));
        add_action("\167\160\x5f\x61\x6a\x61\x78\137\x6e\x6f\160\162\151\x76\x5f{$this->generate_otp_action}", array($this, "\x73\145\156\144\x5f\157\x74\160"));
        add_action("\167\160\137\141\x6a\x61\170\137{$this->validate_otp_action}", array($this, "\x70\162\157\143\x65\x73\x73\x46\157\162\x6d\101\x6e\144\x56\141\x6c\151\x64\x61\x74\145\x4f\x54\x50"));
        add_action("\167\160\x5f\141\152\x61\x78\137\x6e\157\160\162\x69\x76\137{$this->validate_otp_action}", array($this, "\x70\x72\x6f\x63\145\163\x73\106\157\162\155\101\156\144\126\x61\x6c\x69\144\x61\164\x65\x4f\124\120"));
        add_action("\x77\160\137\141\x6a\x61\170\137{$this->check_validated_on_submit}", array($this, "\x63\x68\x65\x63\x6b\x5f\166\141\x6c\151\x64\x61\x74\145\x64\137\157\156\137\163\165\x62\x6d\x69\164"));
        add_action("\x77\x70\x5f\141\152\141\x78\137\156\157\x70\x72\151\166\137{$this->check_validated_on_submit}", array($this, "\143\150\145\143\x6b\137\166\141\x6c\151\x64\x61\x74\x65\x64\x5f\x6f\156\x5f\163\165\142\x6d\x69\x74"));
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto ojW;
        }
        $this->validated = true;
        $this->unset_otp_session_variables();
        return;
        ojW:
    }
    public function mo_enqueue_form_script()
    {
        wp_register_script($this->form_session_var, MOV_URL . "\151\156\143\x6c\165\x64\x65\x73\x2f\152\163\57" . $this->form_session_var . "\x2e\155\151\156\x2e\152\x73", array("\x6a\161\165\145\162\x79"), MOV_VERSION, true);
        wp_localize_script($this->form_session_var, $this->form_session_var, array("\x73\x69\x74\x65\x55\122\114" => wp_ajax_url(), "\x6f\164\160\124\x79\160\145" => $this->get_verification_type(), "\146\x6f\162\x6d\104\x65\x74\x61\x69\x6c\x73" => $this->form_details, "\142\165\x74\x74\157\x6e\x74\145\x78\164" => $this->button_text, "\x69\155\147\x55\x52\x4c" => MOV_LOADER_URL, "\146\x69\145\x6c\x64\x54\145\x78\x74" => mo_("\105\x6e\x74\145\x72\x20\117\124\120\x20\150\x65\x72\x65"), "\147\156\157\156\x63\x65" => wp_create_nonce($this->nonce), "\x6e\x6f\156\x63\145\x4b\145\171" => wp_create_nonce($this->nonce_key), "\x76\156\157\x6e\x63\x65" => wp_create_nonce($this->nonce), "\x67\x61\x63\x74\x69\x6f\156" => $this->generate_otp_action, "\x76\x61\143\x74\x69\x6f\156" => $this->validate_otp_action, "\163\x61\143\x74\x69\157\x6e" => $this->check_validated_on_submit, "\x66\151\145\x6c\x64\123\145\154\145\x63\x74\157\162" => $this->form_field_id, "\x73\165\142\x6d\x69\x74\123\145\x6c\145\143\164\x6f\x72" => $this->form_submit_id));
        wp_enqueue_script($this->form_session_var);
        wp_enqueue_style("\155\x6f\x5f\x66\x6f\x72\155\x73\x5f\x63\163\x73", MOV_FORM_CSS, array(), MOV_VERSION);
    }
    public function send_otp()
    {
        if (check_ajax_referer($this->nonce, "\x6e\x6f\156\143\x65", false)) {
            goto mNJ;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        exit;
        mNJ:
        $GX = MoUtility::mo_sanitize_array($_POST);
        MoPHPSessions::check_session();
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto ShO;
        }
        MoUtility::initialize_transaction($this->form_session_var);
        ShO:
        if (!(MoUtility::sanitize_check("\x6f\x74\160\124\x79\160\145", $GX) === VerificationType::PHONE)) {
            goto CL_;
        }
        $this->process_phone_and_send_otp($GX);
        CL_:
        if (!(MoUtility::sanitize_check("\x6f\x74\x70\124\171\160\145", $GX) === VerificationType::EMAIL)) {
            goto fED;
        }
        $this->process_email_and_send_otp($GX);
        fED:
    }
    public function check_validated_on_submit()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var) || $this->validated) {
            goto jca;
        }
        if (!SessionUtils::is_otp_initialized($this->form_session_var) && !$this->validated) {
            goto TA5;
        }
        goto O6e;
        jca:
        wp_send_json(MoUtility::create_json(self::VALIDATED, MoConstants::SUCCESS_JSON_TYPE));
        goto O6e;
        TA5:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PLEASE_VALIDATE), MoConstants::ERROR_JSON_TYPE));
        O6e:
    }
    private function process_email_and_send_otp($GX)
    {
        MoPHPSessions::check_session();
        if (!MoUtility::sanitize_check("\165\x73\x65\x72\x5f\145\155\x61\x69\x6c", $GX)) {
            goto mIh;
        }
        $Wb = sanitize_email($GX["\x75\x73\x65\162\137\145\x6d\x61\151\x6c"]);
        SessionUtils::add_email_verified($this->form_session_var, $Wb);
        $this->send_challenge('', $Wb, null, null, VerificationType::EMAIL);
        goto iAj;
        mIh:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        iAj:
    }
    private function process_phone_and_send_otp($GX)
    {
        if (!MoUtility::sanitize_check("\165\x73\145\162\137\160\x68\157\x6e\x65", $GX)) {
            goto Rr3;
        }
        $GJ = sanitize_text_field($GX["\x75\x73\x65\162\137\x70\x68\157\156\x65"]);
        SessionUtils::add_phone_verified($this->form_session_var, $GJ);
        $this->send_challenge('', null, null, $GJ, VerificationType::PHONE);
        goto l25;
        Rr3:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        l25:
    }
    public function processFormAndValidateOTP()
    {
        if (check_ajax_referer($this->nonce, "\156\157\x6e\x63\145", false)) {
            goto w0W;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        exit;
        w0W:
        $GX = MoUtility::mo_sanitize_array($_POST);
        MoPHPSessions::check_session();
        $this->checkIfOTPSent();
        $this->checkIntegrityAndValidateOTP($GX);
    }
    private function checkIfOTPSent()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto pWL;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE), MoConstants::ERROR_JSON_TYPE));
        pWL:
    }
    private function checkIntegrityAndValidateOTP($GX)
    {
        MoPHPSessions::check_session();
        $this->checkIntegrity($GX);
        $this->validate_challenge(sanitize_text_field($GX["\157\164\x70\124\171\x70\145"]), null, sanitize_text_field($GX["\x6f\164\x70\137\x74\x6f\153\x65\156"]));
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $GX["\x6f\164\160\124\x79\x70\145"])) {
            goto mPU;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::CUSTOM_FORM_MESSAGE), MoConstants::ERROR_JSON_TYPE));
        goto omE;
        mPU:
        if (!(VerificationType::PHONE === $GX["\157\164\x70\x54\171\x70\145"])) {
            goto sun;
        }
        SessionUtils::add_phone_submitted($this->form_session_var, sanitize_text_field($GX["\x75\x73\x65\162\x5f\160\x68\157\x6e\145"]));
        sun:
        if (!(VerificationType::EMAIL === $GX["\x6f\164\x70\x54\171\x70\x65"])) {
            goto bqO;
        }
        SessionUtils::add_email_submitted($this->form_session_var, sanitize_email($GX["\165\163\x65\162\x5f\x65\155\x61\x69\154"]));
        bqO:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::CUSTOM_FORM_MESSAGE), MoConstants::ERROR_JSON_TYPE));
        omE:
    }
    private function checkIntegrity($GX)
    {
        if (!(VerificationType::PHONE === $GX["\x6f\x74\x70\124\x79\160\145"])) {
            goto d1d;
        }
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($GX["\x75\x73\145\x72\137\x70\150\157\x6e\145"]))) {
            goto PVJ;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        PVJ:
        d1d:
        if (!(VerificationType::EMAIL === $GX["\157\164\x70\x54\171\160\x65"])) {
            goto Zeg;
        }
        if (SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX["\165\x73\x65\x72\x5f\145\x6d\141\151\x6c"]))) {
            goto EBc;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        EBc:
        Zeg:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        MoPHPSessions::check_session();
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto XBF;
        }
        return;
        XBF:
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        MoPHPSessions::check_session();
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto eEv;
        }
        return;
        eEv:
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function unset_otp_session_variables()
    {
        MoPHPSessions::check_session();
        SessionUtils::unset_session(array($this->form_session_var, $this->tx_session_id));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->isPhoneEnabled())) {
            goto Nu8;
        }
        array_push($MI, $this->form_field_id);
        Nu8:
        return $MI;
    }
    private function isPhoneEnabled()
    {
        return VerificationType::PHONE === $this->get_verification_type() ? true : false;
    }
    private function parseFormDetails($GX)
    {
        $form = array();
        if (array_key_exists("\x63\165\x73\x74\x6f\x6d\137\x66\x6f\x72\155", $GX)) {
            goto qYk;
        }
        return array();
        qYk:
        $tH = isset($GX["\x6d\157\x5f\x63\x75\x73\x74\157\155\145\162\x5f\x76\x61\x6c\151\x64\x61\x74\151\157\x6e\x5f\x63\165\x73\164\x6f\155\137\146\x6f\162\155\137\x65\156\141\142\154\x65\137\164\x79\160\145"]) ? sanitize_text_field(wp_unslash($GX["\155\x6f\137\x63\x75\163\x74\x6f\x6d\x65\162\137\x76\x61\x6c\x69\144\141\x74\x69\157\156\137\143\x75\163\164\157\x6d\137\146\x6f\162\155\x5f\x65\x6e\141\x62\154\145\137\164\171\x70\x65"])) : '';
        $I2 = $tH === $this->type_phone_tag ? "\160\150\157\x6e\145" : "\145\155\x61\x69\154";
        foreach (array_filter($GX["\143\x75\x73\x74\x6f\155\137\146\x6f\162\155"]["\146\x6f\162\155"]) as $a6 => $bh) {
            $form[$bh] = array("\163\x75\x62\155\151\x74\x5f\151\144" => sanitize_text_field($GX["\x63\165\163\164\x6f\155\x5f\146\x6f\x72\155"][$I2]["\x73\x75\142\155\151\x74\x5f\151\144"]), "\x66\151\x65\x6c\144\137\151\144" => sanitize_text_field($GX["\x63\x75\x73\x74\157\x6d\137\146\x6f\x72\155"][$I2]["\x66\151\145\x6c\144\x5f\x69\144"]));
            lFT:
        }
        OfF:
        return $form;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\155\x61\156\141\x67\x65\x5f\157\160\164\x69\x6f\156\163") || !check_admin_referer($this->admin_nonce))) {
            goto bGw;
        }
        return;
        bGw:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $form = $this->parseFormDetails($GX);
        $this->form_details = !empty($form) ? $form : '';
        $this->is_form_enabled = $this->sanitize_form_post("\x63\x75\163\164\x6f\x6d\137\146\x6f\162\x6d\x5f\x63\x6f\156\164\141\x63\164\137\x65\156\x61\142\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\143\x75\163\x74\157\155\137\146\x6f\162\155\137\145\156\141\x62\154\x65\137\164\171\160\145");
        $this->button_text = $this->sanitize_form_post("\x63\x75\163\164\157\x6d\x5f\x66\157\162\x6d\137\x62\x75\x74\x74\x6f\x6e\137\x74\145\170\164");
        if (!$this->basic_validation_check(BaseMessages::CUSTOM_CHOOSE)) {
            goto B0G;
        }
        update_mo_option("\143\165\x73\x74\x6f\155\x5f\x66\x6f\162\x6d\137\x6f\164\160\x5f\x65\x6e\141\x62\154\x65\144", maybe_serialize($this->form_details));
        update_mo_option("\x63\x75\x73\164\x6f\x6d\x5f\146\157\162\155\137\x63\x6f\x6e\x74\141\x63\164\137\x65\x6e\141\142\x6c\x65", $this->is_form_enabled);
        update_mo_option("\143\165\x73\x74\x6f\x6d\137\x66\157\x72\155\137\145\156\x61\x62\154\145\x5f\164\171\x70\145", $this->otp_type);
        update_mo_option("\x63\x75\163\x74\157\155\137\x66\157\x72\155\x5f\142\x75\164\164\157\x6e\x5f\164\145\x78\164", $this->button_text);
        B0G:
    }
    public function getSubmitKeyDetails()
    {
        if (!empty($this->form_details)) {
            goto J5m;
        }
        return;
        J5m:
        return stripcslashes($this->form_details[1]["\163\165\x62\155\x69\164\137\151\144"]);
    }
    public function getFieldKeyDetails()
    {
        if (!empty($this->form_details)) {
            goto RTX;
        }
        return;
        RTX:
        return stripcslashes($this->form_details[1]["\x66\151\x65\x6c\x64\137\x69\144"]);
    }
}
d8G:
