<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\x53\120\101\124\110")) {
    goto RzZ;
}
exit;
RzZ:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Objects\BaseMessages;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
if (class_exists("\122\145\x61\x6c\105\163\x74\141\x74\145\x37")) {
    goto oMB;
}
class RealEstate7 extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_key = "\122\105\x41\114\x5f\105\x53\124\x41\124\105\137\x37";
        $this->form_session_var = FormSessionVars::REALESTATE_7;
        $this->is_form_enabled = get_mo_option("\162\x65\x61\x6c\145\163\164\141\x74\145\x5f\x65\156\x61\142\x6c\x65");
        $this->type_phone_tag = "\x6d\157\x5f\x72\145\x61\154\x65\163\x74\x61\x74\145\137\143\157\x6e\164\141\143\x74\137\x70\x68\x6f\x6e\145\x5f\x65\x6e\x61\x62\154\145";
        $this->type_email_tag = "\x6d\x6f\137\162\x65\x61\x6c\145\x73\164\141\164\x65\137\x63\157\x6e\x74\141\x63\164\137\x65\x6d\x61\151\154\137\145\156\x61\142\x6c\145";
        $this->form_name = mo_("\x52\145\x61\x6c\x20\x45\x73\x74\x61\164\x65\40\x37\x20\x50\x72\x6f\40\x54\150\145\x6d\x65");
        parent::__construct();
    }
    public function handle_form()
    {
        $this->phone_form_id = "\43\x6d\x6f\x5f\143\164\137\x75\163\x65\162\137\x70\x68\x6f\156\145";
        $this->generate_otp_action = "\x6d\x69\156\151\157\x72\x61\x6e\x67\145\x2d\162\x65\141\x6c\55\x65\163\x74\x61\164\145\55\x37\x2d\x73\145\x6e\144\x2d\x6f\x74\160";
        $this->validate_otp_action = "\155\151\156\151\157\x72\141\x6e\x67\145\55\162\145\141\x6c\x2d\145\x73\164\x61\x74\x65\x2d\x37\x2d\x76\x65\x72\x69\146\x79\x2d\143\157\144\145";
        $this->otp_type = get_mo_option("\162\145\x61\154\145\x73\x74\141\x74\145\x5f\x6f\x74\160\x5f\164\171\x70\x65");
        $this->form_documents = MoFormDocs::REALESTATE7_THEME_LINK;
        $this->button_text = $this->setButtonText();
        add_action("\x77\160\137\x65\156\x71\x75\145\165\145\x5f\x73\143\162\x69\x70\164\x73", array($this, "\x61\x64\x64\x50\150\157\x6e\x65\106\151\x65\154\x64\x53\143\x72\151\160\x74"));
        add_action("\167\x70\x5f\141\x6a\141\x78\x5f{$this->generate_otp_action}", array($this, "\163\x65\x6e\144\137\x6f\164\160"));
        add_action("\x77\x70\137\141\x6a\x61\x78\x5f\156\x6f\x70\x72\151\166\x5f{$this->generate_otp_action}", array($this, "\163\x65\156\144\x5f\x6f\164\160"));
        add_action("\167\x70\137\x61\152\x61\170\137{$this->validate_otp_action}", array($this, "\x70\162\157\143\145\163\x73\x46\157\x72\x6d\101\156\144\x56\x61\154\151\x64\141\x74\x65\117\124\x50"));
        add_action("\x77\x70\137\x61\x6a\141\x78\x5f\x6e\x6f\x70\162\151\166\x5f{$this->validate_otp_action}", array($this, "\160\162\157\143\145\x73\163\106\x6f\x72\x6d\x41\x6e\x64\x56\x61\154\x69\144\x61\x74\145\x4f\124\x50"));
        $this->form_details = array("\143\164\x5f\x72\x65\147\151\x73\164\x72\141\164\x69\x6f\x6e\137\x66\x6f\162\x6d" => array("\160\150\x6f\156\x65\153\145\171" => "\155\157\137\143\164\x5f\x75\163\x65\x72\x5f\x70\x68\157\x6e\145", "\145\155\x61\151\x6c\x6b\145\171" => "\x63\164\137\165\163\x65\162\137\145\155\x61\151\x6c"));
        if (isset($_POST["\x6f\160\164\151\x6f\x6e"])) {
            goto y8P;
        }
        return;
        y8P:
        switch (trim(sanitize_text_field(wp_unslash($_POST["\x6f\x70\164\x69\157\x6e"])))) {
            case "\162\x65\x61\154\145\x73\164\x61\164\x65\137\162\145\147\151\x73\x74\145\x72":
                if (isset($_POST["\143\x74\137\162\145\147\x69\x73\x74\x65\162\137\156\x6f\x6e\x63\x65"])) {
                    goto JkE;
                }
                ct_errors()->add("\120\154\x65\141\163\x65\x20\126\141\154\151\144\141\x74\x65", __(MoMessages::showMessage(BaseMessages::INVALID_OP), "\x63\x6f\x6e\164\145\x6d\x70\157"));
                JkE:
                if (wp_verify_nonce(sanitize_key(wp_unslash($_POST["\143\164\x5f\162\x65\147\x69\x73\x74\x65\x72\x5f\x6e\157\156\x63\145"])), "\x63\x74\55\162\145\x67\x69\163\164\145\x72\55\156\157\156\x63\145")) {
                    goto cOg;
                }
                ct_errors()->add("\x50\154\x65\141\163\x65\40\126\x61\x6c\151\x64\x61\x74\145", __(MoMessages::showMessage(BaseMessages::INVALID_OP), "\143\x6f\156\164\145\x6d\x70\157"));
                cOg:
                $GX = MoUtility::mo_sanitize_array($_POST);
                $this->sanitizeAndRouteData($GX);
                goto mVB;
        }
        ZVw:
        mVB:
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto GY2;
        }
        $this->unset_otp_session_variables();
        return;
        GY2:
    }
    private function setButtonText()
    {
        if (strcasecmp(get_mo_option("\162\x65\141\x6c\145\x73\164\x61\164\145\137\x6f\164\x70\137\x74\171\x70\x65"), $this->type_phone_tag) === 0) {
            goto OFm;
        }
        return mo_("\123\145\156\144\40\x4f\124\x50\40\x74\x6f\x20\x45\x6d\x61\x69\154");
        goto QW0;
        OFm:
        return mo_("\123\x65\x6e\x64\40\117\x54\x50\40\x74\157\x20\x50\x68\157\156\145");
        QW0:
    }
    private function sanitizeAndRouteData($GX)
    {
        $FL = key($this->form_details);
        if (array_key_exists($FL, $this->form_details)) {
            goto kds;
        }
        return;
        kds:
        if (!(0 === strcasecmp($this->otp_type, $this->type_phone_tag) || 0 === strcasecmp($this->otp_type, $this->type_both_tag))) {
            goto foK;
        }
        $this->processPhone(sanitize_text_field($GX["\x6d\157\x5f\143\164\x5f\x75\x73\x65\162\137\x70\150\x6f\156\145"]));
        foK:
        if (!(0 === strcasecmp($this->otp_type, $this->type_email_tag) || 0 === strcasecmp($this->otp_type, $this->type_both_tag))) {
            goto mvn;
        }
        $this->processEmail(sanitize_email($GX["\143\x74\x5f\x75\x73\145\x72\137\x65\155\141\x69\154"]));
        mvn:
    }
    public function send_otp()
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto L3V;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        exit;
        L3V:
        $GX = MoUtility::mo_sanitize_array($_POST);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto ezp;
        }
        $this->processEmailAndSendOTP($GX);
        goto i1S;
        ezp:
        $this->processPhoneAndSendOTP($GX);
        i1S:
    }
    private function processEmailAndSendOTP($GX)
    {
        if (!MoUtility::sanitize_check("\x75\163\x65\x72\137\x65\155\141\x69\x6c", $GX)) {
            goto PgN;
        }
        $Wb = sanitize_email($GX["\165\163\145\x72\137\145\155\x61\151\x6c"]);
        SessionUtils::add_email_verified($this->form_session_var, $Wb);
        $this->send_challenge('', $Wb, null, null, VerificationType::EMAIL);
        goto Zc0;
        PgN:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        Zc0:
    }
    private function processPhoneAndSendOTP($GX)
    {
        if (!MoUtility::sanitize_check("\165\163\145\162\x5f\x70\150\157\x6e\145", $GX)) {
            goto dAM;
        }
        $GJ = sanitize_text_field($GX["\165\163\145\x72\137\x70\x68\x6f\x6e\x65"]);
        SessionUtils::add_phone_verified($this->form_session_var, $GJ);
        $this->send_challenge('', null, null, $GJ, VerificationType::PHONE);
        goto v0l;
        dAM:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        v0l:
    }
    public function processFormAndValidateOTP()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto KrS;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        exit;
        KrS:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->checkIfOTPSent();
        $this->checkIntegrityAndValidateOTP($GX);
    }
    private function checkIfOTPSent()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto XDS;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE), MoConstants::ERROR_JSON_TYPE));
        XDS:
    }
    private function checkIntegrityAndValidateOTP($GX)
    {
        $this->checkIntegrity($GX);
        $this->validate_challenge(sanitize_text_field($GX["\157\x74\160\124\171\x70\x65"]), null, sanitize_text_field($GX["\x6f\x74\x70\137\x74\157\x6b\x65\156"]));
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, sanitize_text_field($GX["\x6f\x74\160\x54\171\160\x65"]))) {
            goto nbY;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::INVALID_OTP), MoConstants::ERROR_JSON_TYPE));
        goto V0z;
        nbY:
        wp_send_json(MoUtility::create_json(MoConstants::SUCCESS_JSON_TYPE, MoConstants::SUCCESS_JSON_TYPE));
        V0z:
    }
    private function checkIntegrity($GX)
    {
        if (sanitize_text_field($GX["\x6f\x74\160\x54\171\160\145"]) === "\160\150\x6f\156\145") {
            goto sw6;
        }
        if (!SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email(sanitize_email($GX["\x75\x73\145\162\137\145\x6d\141\x69\154"])))) {
            goto ymP;
        }
        goto TGb;
        sw6:
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field(sanitize_text_field($GX["\x75\x73\x65\162\137\x70\150\157\156\x65"])))) {
            goto XT7;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        XT7:
        goto TGb;
        ymP:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        TGb:
    }
    public function unset_otp_session_variables()
    {
        Sessionutils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
    }
    private function processPhone($M9)
    {
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, VerificationType::PHONE)) {
            goto XDv;
        }
        ct_errors()->add("\120\x6c\145\x61\x73\x65\40\126\x61\x6c\x69\144\x61\x74\145", __(MoMessages::showMessage(MoMessages::PLEASE_VALIDATE), "\x63\157\156\164\145\155\x70\157"));
        XDv:
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($M9))) {
            goto r0h;
        }
        ct_errors()->add("\120\x6c\x65\141\163\x65\40\126\141\x6c\x69\144\x61\164\145", __(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), "\143\x6f\156\x74\x65\155\160\x6f"));
        r0h:
    }
    private function processEmail($ZG)
    {
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, VerificationType::EMAIL)) {
            goto Tg0;
        }
        ct_errors()->add("\120\x6c\x65\x61\163\x65\40\x56\141\x6c\x69\x64\141\164\145", __(MoMessages::showMessage(MoMessages::PLEASE_VALIDATE), "\143\157\x6e\x74\145\155\x70\157"));
        Tg0:
        if (SessionUtils::is_email_verified_match($this->form_session_var, sanitize_text_field($ZG))) {
            goto IrH;
        }
        ct_errors()->add("\120\x6c\145\x61\163\x65\x20\x56\141\154\x69\x64\141\x74\145", __(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), "\x63\x6f\156\x74\145\x6d\160\157"));
        IrH:
    }
    public function addPhoneFieldScript()
    {
        wp_register_script("\162\x65\x61\154\x45\x73\164\x61\x74\145\67\x53\x63\162\151\x70\164", MOV_URL . "\151\x6e\x63\154\165\x64\x65\x73\x2f\x6a\163\x2f\x72\x65\141\154\105\163\164\141\x74\145\x37\123\x63\x72\151\x70\164\56\155\x69\x6e\x2e\x6a\x73\x3f\x76\x65\162\x73\151\157\156\75" . MOV_VERSION, array("\x6a\x71\x75\145\x72\x79"), MOV_VERSION, true);
        wp_localize_script("\162\145\141\154\x45\x73\164\x61\x74\x65\x37\123\143\x72\151\x70\164", "\162\x65\x61\x6c\105\x73\x74\x61\x74\x65\67\123\x63\162\x69\160\x74", array("\163\x69\x74\145\x55\122\114" => wp_ajax_url(), "\157\164\160\x54\x79\x70\145" => $this->ajax_processing_fields(), "\146\157\162\155\104\145\x74\x61\x69\x6c\x73" => $this->form_details, "\x62\165\164\x74\x6f\x6e\164\x65\170\x74" => $this->button_text, "\166\141\x6c\x69\144\x61\164\145\x64" => $this->getSessionDetails(), "\x69\155\147\125\x52\x4c" => MOV_LOADER_URL, "\x66\151\x65\x6c\144\x54\145\170\x74" => mo_("\x45\x6e\164\145\162\x20\117\x54\120\40\150\x65\x72\145"), "\x67\156\x6f\156\x63\145" => wp_create_nonce($this->nonce), "\156\x6f\x6e\143\x65\113\x65\x79" => wp_create_nonce($this->nonce_key), "\x76\156\x6f\x6e\x63\x65" => wp_create_nonce($this->nonce), "\x67\141\143\164\x69\157\x6e" => $this->generate_otp_action, "\166\x61\143\x74\x69\x6f\156" => $this->validate_otp_action));
        wp_enqueue_script("\x72\x65\x61\154\105\163\164\x61\x74\145\x37\123\x63\x72\x69\x70\164");
    }
    private function getSessionDetails()
    {
        return array(VerificationType::EMAIL => SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, VerificationType::EMAIL), VerificationType::PHONE => SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, VerificationType::PHONE));
    }
    public function get_phone_number_selector($MI)
    {
        if (!(self::is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto yn2;
        }
        array_push($MI, $this->phone_form_id);
        yn2:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto H4q;
        }
        return;
        H4q:
        $this->is_form_enabled = $this->sanitize_form_post("\x72\145\x61\x6c\145\163\164\x61\164\145\137\x65\x6e\x61\142\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\162\145\141\x6c\x65\x73\x74\141\164\145\x5f\143\x6f\156\x74\141\x63\x74\137\x74\x79\x70\145");
        update_mo_option("\x72\x65\x61\154\x65\x73\164\141\164\145\137\145\x6e\x61\x62\154\x65", $this->is_form_enabled);
        update_mo_option("\162\145\x61\154\x65\163\164\x61\x74\145\x5f\x6f\x74\x70\137\x74\x79\160\x65", $this->otp_type);
    }
}
oMB:
