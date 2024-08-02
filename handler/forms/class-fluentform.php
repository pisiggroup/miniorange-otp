<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\x53\120\101\x54\x48")) {
    goto lE;
}
exit;
lE:
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
if (class_exists("\106\x6c\x75\x65\x6e\164\106\x6f\x72\x6d")) {
    goto W1;
}
class FluentForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::FLUENTFORM;
        $this->phone_form_id = array();
        $this->form_key = "\106\114\x55\105\x4e\124\x46\x4f\122\115";
        $this->type_phone_tag = "\155\157\x5f\x66\154\165\145\x6e\164\146\157\x72\155\x5f\x70\x68\157\156\145\x5f\x65\156\141\142\x6c\x65";
        $this->type_email_tag = "\x6d\x6f\137\146\x6c\x75\145\x6e\164\x66\x6f\162\155\x5f\145\x6d\x61\151\x6c\x5f\x65\156\141\x62\x6c\x65";
        $this->type_both_tag = "\155\x6f\137\146\154\165\145\x6e\164\146\x6f\x72\x6d\137\142\157\164\150\x5f\145\156\x61\142\154\x65";
        $this->form_name = mo_("\106\154\x75\145\156\164\x20\x46\157\x72\155");
        $this->is_form_enabled = get_mo_option("\146\154\x75\145\156\164\146\x6f\162\155\x5f\x65\156\x61\x62\154\145");
        $this->generate_otp_action = "\x6d\151\156\151\157\162\141\x6e\x67\145\55\x66\x6c\165\x65\156\x74\146\157\x72\x6d\55\163\145\x6e\x64\x2d\x6f\164\x70";
        $this->validate_otp_action = "\x6d\x69\156\x69\x6f\162\x61\156\147\x65\55\146\154\x75\x65\156\164\x66\157\x72\x6d\55\166\145\x72\151\146\x79\55\x63\157\x64\145";
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x66\x6c\x75\x65\156\164\x66\x6f\162\155\137\x65\156\x61\142\154\x65\137\164\x79\160\x65");
        $this->form_details = maybe_unserialize(get_mo_option("\x66\x6c\x75\145\156\x74\146\x6f\162\x6d\x5f\x66\x6f\162\x6d\163"));
        if (!($this->otp_type === $this->type_phone_tag)) {
            goto iu;
        }
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\43\146\x66\x5f" . $a6 . "\137" . $bh["\x70\150\x6f\x6e\145\153\145\171"]);
            Zv:
        }
        sl:
        iu:
        add_action("\x66\154\x75\145\x6e\164\x66\157\162\155\x5f\x62\x65\x66\157\162\145\x5f\x69\x6e\x73\x65\162\x74\137\163\165\142\155\151\x73\163\x69\157\156", array($this, "\143\150\145\x63\153\137\146\x6f\x72\x6d\x5f\x73\165\142\x6d\x69\x74"), 10, 3);
        add_action("\x77\160\137\x65\x6e\x71\x75\145\165\x65\x5f\x73\143\162\151\x70\x74\x73", array($this, "\x6d\157\137\x66\154\165\x65\156\x74\137\146\157\162\155\x5f\x73\x63\162\151\x70\164"));
        add_action("\x77\160\x5f\x61\x6a\141\170\137{$this->generate_otp_action}", array($this, "\163\x65\x6e\x64\x5f\157\x74\x70"));
        add_action("\167\x70\137\x61\x6a\141\x78\x5f\x6e\157\160\162\x69\166\x5f{$this->generate_otp_action}", array($this, "\163\145\156\144\x5f\157\x74\160"));
    }
    public function mo_fluent_form_script()
    {
        wp_register_script("\155\x6f\x66\154\x75\x65\x6e\x74", MOV_URL . "\x69\x6e\x63\154\165\144\x65\163\57\x6a\163\x2f\155\x6f\x66\154\x75\x65\x6e\164\146\x6f\x72\x6d\x2e\155\151\x6e\x2e\152\163", array("\x6a\161\165\145\x72\171"), MOV_VERSION, true);
        wp_localize_script("\155\x6f\146\154\x75\145\x6e\164", "\x6d\x6f\x66\x6c\165\x65\156\x74", array("\x73\151\x74\145\125\122\114" => wp_ajax_url(), "\146\x6f\x72\155\x64\x65\164\x61\x69\x6c\163" => $this->form_details, "\x6f\164\x70\124\171\160\145" => $this->otp_type, "\146\157\162\x6d\153\145\171" => strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? "\x70\150\157\156\x65\153\x65\171" : "\145\x6d\141\151\x6c\153\145\171", "\x67\x6e\x6f\156\x63\x65" => wp_create_nonce($this->nonce), "\156\x6f\x6e\x63\x65\113\145\171" => wp_create_nonce($this->nonce_key), "\147\x61\x63\164\151\x6f\156" => $this->generate_otp_action, "\x69\x6d\x67\125\x52\x4c" => MOV_LOADER_URL));
        wp_enqueue_script("\155\x6f\146\x6c\x75\x65\x6e\164");
    }
    public function check_form_submit($Oj, $GX, $form)
    {
        $this->checkIfOTPSent();
        $this->checkIntegrity($Oj, $GX, $form);
        $this->validateOTP($Oj, $GX, $form);
    }
    public function validateOTP($Oj, $GX, $form)
    {
        $Bo = $this->get_verification_type();
        $this->validate_challenge($Bo, null, sanitize_text_field($GX["\x65\x6e\164\x65\x72\x5f\157\x74\x70"]));
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto A0;
        }
        wp_send_json_error(array("\x6d\x65\163\163\x61\147\145" => MoMessages::showMessage(MoMessages::INVALID_OTP)), 201);
        exit;
        goto Fd;
        A0:
        $this->unset_otp_session_variables();
        Fd:
    }
    private function checkIfOTPSent()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto P1;
        }
        wp_send_json_error(array("\x6d\145\163\x73\x61\x67\145" => MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE)), 201);
        exit;
        P1:
    }
    private function checkIntegrity($Oj, $GX, $form)
    {
        $y6 = $this->form_details[$Oj["\x66\x6f\x72\155\x5f\151\144"]]["\145\155\x61\x69\x6c\x6b\x65\x79"];
        $Ig = $this->form_details[$Oj["\146\157\162\x6d\137\x69\144"]]["\160\x68\157\x6e\145\x6b\145\x79"];
        if ($this->otp_type === $this->type_phone_tag) {
            goto TK;
        }
        if (!SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX[$y6]))) {
            goto L2;
        }
        goto bY;
        TK:
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($GX[$Ig]))) {
            goto hT;
        }
        wp_send_json_error(array("\155\145\163\x73\141\147\x65" => MoMessages::showMessage(MoMessages::PHONE_MISMATCH)), 201);
        exit;
        hT:
        goto bY;
        L2:
        wp_send_json_error(array("\x6d\x65\163\163\x61\147\145" => MoMessages::showMessage(MoMessages::EMAIL_MISMATCH)), 201);
        exit;
        bY:
    }
    public function send_otp()
    {
        if (!isset($_POST[$this->nonce_key])) {
            goto IZ;
        }
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto x1;
        }
        return;
        x1:
        IZ:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        MoUtility::initialize_transaction($this->form_session_var);
        if ($w3["\157\x74\160\124\171\x70\x65"] === $this->type_phone_tag) {
            goto FI;
        }
        $this->processEmailAndSendOTP($w3);
        goto Kj;
        FI:
        $this->processPhoneAndSendOTP($w3);
        Kj:
    }
    private function processPhoneAndSendOTP($GX)
    {
        if (!MoUtility::sanitize_check("\165\x73\145\x72\137\166\141\154\165\x65", $GX)) {
            goto au;
        }
        $tT = sanitize_text_field($GX["\x75\x73\x65\x72\x5f\166\141\x6c\x75\145"]);
        SessionUtils::add_phone_verified($this->form_session_var, $tT);
        $this->send_challenge('', null, null, $tT, VerificationType::PHONE);
        goto ae;
        au:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        ae:
    }
    private function processEmailAndSendOTP($GX)
    {
        if (!MoUtility::sanitize_check("\x75\x73\145\x72\x5f\166\x61\x6c\165\x65", $GX)) {
            goto Nr;
        }
        $tT = sanitize_email($GX["\165\163\145\162\x5f\166\x61\x6c\x75\145"]);
        SessionUtils::add_email_verified($this->form_session_var, $tT);
        $this->send_challenge('', $tT, null, null, VerificationType::EMAIL);
        goto JM;
        Nr:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        JM:
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
        if (!($this->is_form_enabled && ($this->otp_type === $this->type_phone_tag || $this->otp_type === $this->type_both_tag))) {
            goto JC;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        JC:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto pr;
        }
        return;
        pr:
        if (!(!current_user_can("\x6d\141\x6e\x61\x67\145\137\157\x70\164\x69\x6f\x6e\x73") || !check_admin_referer($this->admin_nonce))) {
            goto h4;
        }
        return;
        h4:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $form = $this->parseFormDetails($GX);
        $this->is_form_enabled = $this->sanitize_form_post("\146\x6c\x75\145\156\164\146\x6f\x72\x6d\x5f\145\x6e\x61\x62\154\x65");
        $this->otp_type = $this->sanitize_form_post("\146\154\165\145\156\x74\x66\157\x72\155\137\x65\156\x61\x62\x6c\145\x5f\x74\x79\160\145");
        $this->button_text = $this->sanitize_form_post("\x66\154\x75\145\x6e\164\x66\157\162\x6d\163\137\x62\x75\164\x74\157\156\137\164\145\170\164");
        $this->form_details = !empty($form) ? $form : '';
        update_mo_option("\x66\154\x75\145\156\164\146\157\162\x6d\137\145\x6e\141\142\154\x65", $this->is_form_enabled);
        update_mo_option("\x66\x6c\165\145\x6e\164\146\157\x72\155\137\x65\156\x61\x62\154\x65\137\x74\171\x70\145", $this->otp_type);
        update_mo_option("\x66\154\165\x65\156\x74\146\x6f\x72\x6d\x73\x5f\142\165\164\164\x6f\156\137\x74\145\170\164", $this->button_text);
        update_mo_option("\146\154\x75\x65\156\x74\x66\x6f\162\x6d\x5f\x66\157\x72\x6d\x73", maybe_serialize($this->form_details));
    }
    private function parseFormDetails($GX)
    {
        $form = array();
        if (array_key_exists("\x66\x6c\x75\145\156\164\x66\x6f\x72\155\x5f\146\157\x72\x6d", $GX)) {
            goto YA;
        }
        return $form;
        YA:
        foreach (array_filter($GX["\146\154\165\145\156\164\146\x6f\162\x6d\137\146\x6f\162\x6d"]["\146\157\162\155"]) as $a6 => $bh) {
            $a6 = sanitize_text_field($a6);
            $form[sanitize_text_field($bh)] = array("\145\155\141\x69\x6c\x6b\x65\x79" => sanitize_text_field($GX["\146\154\x75\145\x6e\164\146\x6f\162\155\x5f\146\157\162\155"]["\145\155\x61\151\x6c\x6b\145\x79"][$a6]), "\160\150\157\156\x65\x6b\x65\x79" => sanitize_text_field($GX["\x66\154\165\x65\x6e\x74\x66\x6f\162\x6d\x5f\x66\x6f\162\x6d"]["\x70\150\157\x6e\145\x6b\x65\171"][$a6]), "\160\x68\x6f\156\x65\137\x73\150\157\167" => sanitize_text_field($GX["\x66\154\165\145\x6e\164\x66\157\x72\x6d\137\x66\x6f\162\155"]["\x70\x68\157\156\145\x6b\145\x79"][$a6]), "\145\x6d\x61\x69\x6c\x5f\163\x68\x6f\x77" => sanitize_text_field($GX["\x66\x6c\x75\145\x6e\x74\x66\x6f\x72\x6d\137\x66\157\x72\x6d"]["\145\x6d\x61\x69\x6c\153\x65\x79"][$a6]));
            V2:
        }
        xR:
        return $form;
    }
}
W1:
