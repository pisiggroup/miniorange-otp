<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\123\120\101\x54\110")) {
    goto K4F;
}
exit;
K4F:
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
if (class_exists("\x57\120\x46\157\162\x6d\x73\x50\154\165\147\151\x6e")) {
    goto wAe;
}
class WPFormsPlugin extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::WPFORM;
        $this->phone_form_id = array();
        $this->form_key = "\127\x50\106\x4f\122\115\x53";
        $this->type_phone_tag = "\x6d\157\x5f\x77\160\x66\157\x72\155\137\160\x68\157\156\x65\x5f\145\156\x61\x62\x6c\x65";
        $this->type_email_tag = "\155\x6f\x5f\x77\160\x66\x6f\x72\155\137\x65\155\141\x69\154\x5f\x65\x6e\x61\x62\x6c\145";
        $this->type_both_tag = "\x6d\157\137\x77\x70\x66\157\162\x6d\x5f\142\157\164\150\x5f\x65\156\x61\142\154\145";
        $this->form_name = mo_("\x57\x50\106\x6f\162\155\x73");
        $this->is_form_enabled = get_mo_option("\167\x70\146\x6f\x72\x6d\x5f\x65\x6e\141\142\x6c\145");
        $this->button_text = get_mo_option("\x77\x70\x66\157\x72\155\163\x5f\x62\x75\x74\x74\157\156\x5f\164\x65\x78\x74");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\123\145\x6e\x64\x20\x4f\124\x50");
        $this->generate_otp_action = "\x6d\x69\x6e\151\x6f\x72\x61\x6e\147\145\x2d\x77\x70\146\x6f\162\155\55\163\145\156\x64\55\x6f\164\160";
        $this->validate_otp_action = "\155\x69\x6e\x69\x6f\162\141\156\x67\x65\55\167\160\146\x6f\162\x6d\x2d\166\145\x72\151\146\171\55\x63\157\144\145";
        $this->form_documents = MoFormDocs::WP_FORMS_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\167\x70\x66\157\x72\155\x5f\x65\156\x61\142\x6c\x65\137\164\171\160\x65");
        $this->form_details = maybe_unserialize(get_mo_option("\167\160\146\157\162\x6d\137\x66\x6f\x72\155\163"));
        if (!empty($this->form_details)) {
            goto wtS;
        }
        return;
        wtS:
        if (!($this->otp_type === $this->type_phone_tag || $this->otp_type === $this->type_both_tag)) {
            goto Po4;
        }
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\43\167\160\146\x6f\x72\x6d\x73\x2d" . $a6 . "\55\x66\x69\145\x6c\x64\x5f" . $bh["\x70\150\157\156\145\153\145\x79"]);
            tcB:
        }
        tdq:
        Po4:
        add_filter("\x77\x70\x66\x6f\162\x6d\163\137\x70\162\x6f\143\x65\x73\x73\x5f\151\156\151\164\151\141\154\x5f\145\162\162\x6f\162\x73", array($this, "\x76\141\154\x69\144\141\164\145\x46\157\x72\x6d"), 1, 2);
        add_action("\167\160\137\145\156\x71\165\145\x75\145\137\x73\143\162\151\x70\164\x73", array($this, "\x6d\x6f\x5f\x65\x6e\161\x75\x65\165\145\137\167\x70\146\157\162\x6d\x73"));
        add_action("\x77\160\137\141\x6a\x61\170\x5f{$this->generate_otp_action}", array($this, "\x73\x65\156\x64\137\x6f\x74\160"));
        add_action("\167\x70\x5f\x61\x6a\x61\x78\137\156\x6f\160\x72\x69\x76\x5f{$this->generate_otp_action}", array($this, "\163\145\x6e\x64\x5f\157\x74\160"));
        add_action("\x77\x70\137\141\x6a\141\170\x5f{$this->validate_otp_action}", array($this, "\x70\162\157\143\x65\163\163\106\157\162\x6d\x41\156\x64\126\x61\x6c\151\x64\x61\x74\x65\x4f\124\x50"));
        add_action("\167\x70\137\x61\152\x61\170\137\x6e\157\160\162\x69\x76\137{$this->validate_otp_action}", array($this, "\160\x72\157\143\x65\163\x73\106\157\162\155\101\x6e\144\x56\141\x6c\x69\x64\x61\x74\x65\x4f\124\120"));
    }
    public function mo_enqueue_wpforms()
    {
        wp_register_script("\x6d\157\167\x70\x66\x6f\x72\x6d\163", MOV_URL . "\151\156\x63\154\165\x64\x65\163\x2f\x6a\x73\57\155\157\167\160\x66\157\x72\x6d\x73\56\x6d\151\156\x2e\152\163", array("\x6a\161\165\x65\162\x79"), MOV_VERSION, true);
        wp_localize_script("\x6d\x6f\x77\160\146\157\x72\x6d\163", "\155\x6f\x77\160\x66\157\162\x6d\x73", array("\x73\x69\164\145\x55\122\x4c" => wp_ajax_url(), "\x6f\164\160\x54\x79\160\x65" => $this->ajax_processing_fields(), "\146\x6f\x72\155\x44\145\x74\x61\x69\x6c\163" => $this->form_details, "\142\x75\164\x74\x6f\x6e\164\x65\170\164" => $this->button_text, "\x76\x61\x6c\x69\x64\141\x74\x65\144" => $this->getSessionDetails(), "\x69\155\x67\x55\x52\x4c" => MOV_LOADER_URL, "\146\151\145\154\x64\124\145\170\x74" => mo_("\105\x6e\x74\x65\162\40\117\x54\120\40\x68\x65\x72\145"), "\x67\156\x6f\156\143\x65" => wp_create_nonce($this->nonce), "\x6e\x6f\x6e\x63\x65\x4b\x65\x79" => wp_create_nonce($this->nonce_key), "\166\156\157\156\143\145" => wp_create_nonce($this->nonce), "\x67\141\x63\x74\151\x6f\x6e" => $this->generate_otp_action, "\166\x61\x63\x74\151\157\x6e" => $this->validate_otp_action));
        wp_enqueue_script("\155\x6f\x77\160\x66\157\162\155\x73");
    }
    private function getSessionDetails()
    {
        return array(VerificationType::EMAIL => SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, VerificationType::EMAIL), VerificationType::PHONE => SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, VerificationType::PHONE));
    }
    public function send_otp()
    {
        if (!isset($_POST[$this->nonce_key])) {
            goto PdA;
        }
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto Irj;
        }
        return;
        Irj:
        PdA:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        MoUtility::initialize_transaction($this->form_session_var);
        if ("\x6d\x6f\x5f\167\x70\x66\x6f\x72\x6d\x5f" . sanitize_text_field($w3["\157\x74\160\x54\171\160\x65"]) . "\x5f\145\156\x61\142\154\x65" === $this->type_phone_tag) {
            goto YLx;
        }
        $this->processEmailAndSendOTP($w3);
        goto AZw;
        YLx:
        $this->processPhoneAndSendOTP($w3);
        AZw:
    }
    private function processEmailAndSendOTP($GX)
    {
        if (!MoUtility::sanitize_check("\165\x73\x65\x72\137\145\155\141\x69\154", $GX)) {
            goto R5k;
        }
        $Wb = sanitize_email($GX["\165\x73\145\162\137\x65\155\x61\x69\154"]);
        SessionUtils::add_email_verified($this->form_session_var, $Wb);
        $this->send_challenge('', $Wb, null, null, VerificationType::EMAIL);
        goto N3D;
        R5k:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        N3D:
    }
    private function processPhoneAndSendOTP($GX)
    {
        if (!MoUtility::sanitize_check("\x75\x73\x65\x72\x5f\x70\150\157\x6e\x65", $GX)) {
            goto JQS;
        }
        $GJ = sanitize_text_field($GX["\x75\163\145\x72\x5f\x70\150\157\x6e\145"]);
        SessionUtils::add_phone_verified($this->form_session_var, $GJ);
        $this->send_challenge('', null, null, $GJ, VerificationType::PHONE);
        goto XPK;
        JQS:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        XPK:
    }
    public function processFormAndValidateOTP()
    {
        if (!isset($_POST[$this->nonce_key])) {
            goto eHi;
        }
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto DW3;
        }
        return;
        DW3:
        eHi:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        $this->validate_ajax_request();
        $this->checkIfOTPSent();
        $this->checkIntegrityAndValidateOTP($w3);
    }
    private function checkIfOTPSent()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto mQ8;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE), MoConstants::ERROR_JSON_TYPE));
        mQ8:
    }
    private function checkIntegrityAndValidateOTP($GX)
    {
        $this->checkIntegrity($GX);
        $this->validate_challenge(sanitize_text_field($GX["\157\164\160\x54\171\x70\x65"]), null, sanitize_text_field($GX["\x6f\164\x70\x5f\164\157\153\x65\x6e"]));
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, sanitize_text_field($GX["\x6f\164\x70\x54\171\160\145"]))) {
            goto lvd;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OTP), MoConstants::ERROR_JSON_TYPE));
        goto bqz;
        lvd:
        wp_send_json(MoUtility::create_json(MoConstants::SUCCESS_JSON_TYPE, MoConstants::SUCCESS_JSON_TYPE));
        bqz:
    }
    private function checkIntegrity($GX)
    {
        if ("\160\150\x6f\x6e\x65" === $GX["\x6f\164\160\x54\x79\160\145"]) {
            goto S6w;
        }
        if (!SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX["\x75\x73\145\162\137\145\x6d\141\x69\154"]))) {
            goto Oni;
        }
        goto ItX;
        S6w:
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($GX["\x75\163\145\x72\137\x70\150\157\x6e\145"]))) {
            goto Bkb;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        Bkb:
        goto ItX;
        Oni:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        ItX:
    }
    public function validateForm($errors, $iG)
    {
        if (!isset($_POST[$this->nonce_key])) {
            goto FT8;
        }
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto F8g;
        }
        return;
        F8g:
        FT8:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        $FL = $iG["\151\144"];
        if (array_key_exists($FL, $this->form_details)) {
            goto ik0;
        }
        return $errors;
        ik0:
        $iG = $this->form_details[$FL];
        if (empty($errors)) {
            goto HCS;
        }
        return $errors;
        HCS:
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto LBe;
        }
        $Y7 = $this->otp_type === $this->type_email_tag ? $iG["\x65\x6d\141\151\154\x6b\145\x79"] : $iG["\160\150\157\x6e\145\153\145\x79"];
        $errors[$FL][$Y7] = MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE);
        return $errors;
        LBe:
        if (!($this->otp_type === $this->type_email_tag || $this->otp_type === $this->type_both_tag)) {
            goto oOH;
        }
        $errors = $this->processEmail($iG, $errors, $FL, $w3);
        oOH:
        if (!($this->otp_type === $this->type_phone_tag || $this->otp_type === $this->type_both_tag)) {
            goto UFx;
        }
        $errors = $this->processPhone($iG, $errors, $FL, $w3);
        UFx:
        if (!empty($errors)) {
            goto xlW;
        }
        $this->unset_otp_session_variables();
        xlW:
        return $errors;
    }
    private function processEmail($iG, $errors, $FL, $w3)
    {
        $Y7 = $iG["\145\x6d\141\151\154\153\x65\171"];
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, VerificationType::EMAIL)) {
            goto IJi;
        }
        $errors[$FL][$Y7] = MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE);
        IJi:
        if (SessionUtils::is_email_verified_match($this->form_session_var, sanitize_text_field($w3["\167\160\x66\x6f\162\x6d\x73"]["\x66\x69\x65\x6c\x64\163"][$Y7]))) {
            goto QmM;
        }
        $errors[$FL][$Y7] = MoMessages::showMessage(MoMessages::EMAIL_MISMATCH);
        QmM:
        return $errors;
    }
    private function processPhone($iG, $errors, $FL, $w3)
    {
        $Y7 = $iG["\160\x68\x6f\x6e\x65\153\145\171"];
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, VerificationType::PHONE)) {
            goto wjx;
        }
        $errors[$FL][$Y7] = MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE);
        wjx:
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($w3["\167\x70\146\157\x72\x6d\163"]["\146\x69\x65\x6c\x64\163"][$Y7]))) {
            goto W3e;
        }
        $errors[$FL][$Y7] = MoMessages::showMessage(MoMessages::PHONE_MISMATCH);
        W3e:
        return $errors;
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
            goto cfF;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        cfF:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto EQ1;
        }
        return;
        EQ1:
        if (!(!current_user_can("\155\141\x6e\141\x67\145\137\x6f\x70\164\x69\157\x6e\163") || !check_admin_referer($this->admin_nonce))) {
            goto doY;
        }
        return;
        doY:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $form = $this->parseFormDetails($GX);
        $this->is_form_enabled = $this->sanitize_form_post("\x77\x70\146\x6f\162\155\x5f\x65\156\x61\x62\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\167\x70\146\x6f\x72\x6d\x5f\145\156\x61\142\x6c\145\x5f\x74\171\x70\x65");
        $this->button_text = $this->sanitize_form_post("\167\x70\146\157\162\x6d\x73\x5f\x62\x75\164\x74\x6f\x6e\x5f\164\145\x78\164");
        $this->form_details = !empty($form) ? $form : '';
        update_mo_option("\x77\160\146\157\162\x6d\137\145\156\x61\142\154\145", $this->is_form_enabled);
        update_mo_option("\x77\x70\x66\157\162\155\x5f\x65\x6e\141\142\x6c\x65\137\x74\171\160\145", $this->otp_type);
        update_mo_option("\x77\x70\x66\x6f\162\x6d\163\x5f\x62\165\164\164\157\x6e\x5f\x74\145\170\164", $this->button_text);
        update_mo_option("\x77\160\146\157\x72\x6d\137\146\157\162\155\x73", maybe_serialize($this->form_details));
    }
    private function parseFormDetails($GX)
    {
        $form = array();
        if (array_key_exists("\x77\x70\146\157\162\x6d\137\x66\x6f\x72\x6d", $GX)) {
            goto ty4;
        }
        return $form;
        ty4:
        foreach (array_filter($GX["\x77\x70\146\157\x72\155\x5f\x66\x6f\162\x6d"]["\x66\157\x72\x6d"]) as $a6 => $bh) {
            $iG = $this->getFormDataFromID($bh);
            if (!MoUtility::is_blank($iG)) {
                goto XZS;
            }
            goto db0;
            XZS:
            $PB = $this->getFieldIDs($GX, $a6, $iG);
            $form[sanitize_text_field($bh)] = array("\145\155\141\151\x6c\153\x65\171" => $PB["\x65\155\141\x69\x6c\x4b\x65\x79"], "\160\x68\157\156\x65\x6b\145\171" => $PB["\x70\x68\157\156\145\x4b\145\171"], "\x70\x68\157\156\x65\x5f\x73\150\157\x77" => sanitize_text_field($GX["\167\160\x66\x6f\x72\x6d\137\146\157\x72\155"]["\160\x68\157\x6e\x65\153\145\x79"][$a6]), "\x65\155\x61\151\x6c\x5f\x73\150\157\167" => sanitize_text_field($GX["\x77\160\146\157\x72\155\137\x66\157\x72\155"]["\x65\x6d\x61\x69\154\153\145\x79"][$a6]));
            db0:
        }
        ESD:
        return $form;
    }
    private function getFormDataFromID($FL)
    {
        if (!MoUtility::is_blank($FL)) {
            goto ZQV;
        }
        return '';
        ZQV:
        $form = get_post(absint($FL));
        if (!MoUtility::is_blank($FL)) {
            goto Bwp;
        }
        return '';
        Bwp:
        return wp_unslash(json_decode($form->post_content));
    }
    private function getFieldIDs($GX, $a6, $iG)
    {
        $PB = array("\x65\x6d\141\x69\x6c\x4b\x65\x79" => '', "\x70\150\157\x6e\x65\113\x65\171" => '');
        if (!empty($GX)) {
            goto Wyj;
        }
        return $PB;
        Wyj:
        foreach ($iG->fields as $Jw) {
            if (property_exists($Jw, "\x6c\x61\142\x65\x6c")) {
                goto lzO;
            }
            goto kzK;
            lzO:
            if (!(strcasecmp($Jw->label, $GX["\x77\x70\146\x6f\162\155\x5f\146\x6f\x72\x6d"]["\x65\155\141\x69\154\153\x65\171"][$a6]) === 0)) {
                goto Drd;
            }
            $PB["\145\155\x61\151\x6c\113\x65\171"] = $Jw->id;
            Drd:
            if (!(strcasecmp($Jw->label, $GX["\x77\x70\x66\x6f\x72\x6d\137\146\157\x72\155"]["\160\150\x6f\156\x65\x6b\145\171"][$a6]) === 0)) {
                goto m_4;
            }
            $PB["\160\x68\157\x6e\x65\113\145\171"] = $Jw->id;
            m_4:
            kzK:
        }
        sf6:
        return $PB;
    }
}
wAe:
