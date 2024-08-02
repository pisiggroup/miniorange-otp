<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\x53\120\x41\124\x48")) {
    goto Pd;
}
exit;
Pd:
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
use OTP\Objects\BaseMessages;
if (class_exists("\104\x6f\x63\104\x69\162\x65\x63\164\124\150\145\155\x65\122\145\x67\x69\x73\x74\x72\141\164\151\157\x6e")) {
    goto uN;
}
class DocDirectThemeRegistration extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::DOCDIRECT_REG;
        $this->type_phone_tag = "\x6d\x6f\x5f\144\x6f\x63\144\x69\x72\x65\143\164\x5f\x70\150\x6f\156\x65\137\x65\156\x61\x62\154\145";
        $this->type_email_tag = "\x6d\157\137\x64\x6f\143\x64\151\162\145\x63\164\x5f\145\155\x61\x69\x6c\137\145\x6e\141\142\x6c\145";
        $this->form_key = "\104\x4f\103\x44\x49\x52\105\103\x54\x5f\x54\110\105\115\105";
        $this->form_name = mo_("\x44\157\x63\40\104\x69\x72\145\x63\164\40\x54\x68\145\155\x65\40\142\171\x20\x54\150\x65\155\157\x47\x72\x61\160\150\x69\x63\x73");
        $this->is_form_enabled = get_mo_option("\x64\157\x63\x64\151\162\145\x63\164\137\145\x6e\141\x62\154\x65");
        $this->phone_form_id = "\x69\156\x70\x75\164\x5b\156\141\x6d\x65\75\160\x68\x6f\x6e\145\137\156\165\x6d\142\145\x72\135";
        $this->form_documents = MoFormDocs::DOCDIRECT_THEME;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\144\x6f\143\144\151\x72\145\x63\x74\x5f\x65\156\x61\142\154\x65\x5f\x74\x79\160\145");
        add_action("\167\x70\137\145\156\161\x75\x65\x75\x65\x5f\163\143\162\x69\x70\x74\x73", array($this, "\141\144\144\x53\x63\162\x69\x70\x74\x54\x6f\x52\145\x67\x69\x73\x74\162\141\164\x69\x6f\x6e\x50\141\x67\145"));
        add_action("\x77\160\x5f\141\152\x61\x78\x5f\x64\157\143\144\x69\x72\x65\143\164\137\165\x73\x65\162\x5f\162\145\x67\x69\x73\164\162\141\x74\151\x6f\156", array($this, "\x6d\x6f\137\166\x61\154\x69\144\x61\164\145\137\144\x6f\x63\144\x69\x72\145\x63\164\x5f\x75\163\145\162\137\162\x65\x67\151\x73\164\162\x61\x74\x69\x6f\x6e"), 1);
        add_action("\x77\x70\x5f\x61\x6a\141\x78\137\156\157\x70\x72\151\x76\137\x64\x6f\143\144\151\x72\x65\143\164\137\x75\163\x65\162\x5f\x72\x65\147\151\163\x74\162\x61\164\151\157\156", array($this, "\155\157\137\166\x61\154\x69\144\141\164\145\137\x64\x6f\143\x64\x69\x72\145\x63\x74\x5f\x75\x73\x65\x72\137\162\145\147\151\163\164\x72\x61\164\151\157\x6e"), 1);
        $this->routeData();
    }
    public function routeData()
    {
        if (array_key_exists("\x6f\x70\x74\x69\x6f\x6e", $_GET)) {
            goto LO;
        }
        return;
        LO:
        switch (trim(sanitize_text_field(wp_unslash($_GET["\x6f\160\164\x69\157\x6e"])))) {
            case "\155\x69\x6e\x69\157\x72\x61\156\147\145\55\x64\157\x63\x64\x69\x72\x65\143\164\55\x76\145\162\151\x66\x79":
                if (check_ajax_referer($this->nonce, $this->nonce_key)) {
                    goto CC;
                }
                wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
                exit;
                CC:
                $GX = MoUtility::mo_sanitize_array($_POST);
                $this->startOTPVerificationProcess($GX);
                goto Ee;
        }
        Xq:
        Ee:
    }
    public function addScriptToRegistrationPage()
    {
        wp_register_script("\144\x6f\x63\144\151\x72\145\143\164", MOV_URL . "\151\156\x63\x6c\x75\144\x65\163\x2f\x6a\163\57\144\x6f\x63\x64\x69\162\x65\143\164\x2e\x6d\x69\x6e\x2e\x6a\x73\x3f\x76\145\x72\163\x69\x6f\x6e\75" . MOV_VERSION, array("\x6a\161\165\x65\x72\171"), MOV_VERSION, true);
        wp_localize_script("\x64\x6f\x63\144\151\162\145\143\164", "\155\157\x64\157\143\144\x69\162\145\x63\164", array("\x69\155\147\125\x52\x4c" => MOV_URL . "\151\156\x63\x6c\165\x64\145\163\57\x69\x6d\141\x67\x65\163\57\154\157\141\144\x65\162\x2e\147\x69\146", "\142\x75\164\164\157\156\x54\145\170\x74" => mo_("\103\154\x69\143\153\40\x48\145\x72\x65\40\164\157\x20\x56\145\x72\x69\x66\x79\40\131\157\x75\x72\x73\x65\x6c\x66"), "\x69\156\163\145\x72\164\101\146\x74\145\162" => strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? "\x69\156\x70\165\164\133\156\141\x6d\x65\x3d\160\150\x6f\156\145\137\156\165\155\x62\x65\162\x5d" : "\151\156\x70\x75\164\x5b\x6e\x61\155\x65\x3d\145\x6d\141\x69\x6c\x5d", "\x70\x6c\141\143\145\110\x6f\154\144\145\x72" => mo_("\117\124\120\40\x43\x6f\x64\x65"), "\x73\151\x74\x65\x55\x52\x4c" => site_url()));
        wp_enqueue_script("\x64\x6f\143\144\x69\x72\x65\143\x74");
    }
    public function startOtpVerificationProcess($GX)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto RE;
        }
        $this->send_otp_to_email($GX);
        goto LX;
        RE:
        $this->send_otp_to_phone($GX);
        LX:
    }
    public function send_otp_to_phone($GX)
    {
        if (array_key_exists("\165\163\145\162\137\160\x68\x6f\x6e\145", $GX) && !MoUtility::is_blank($GX["\x75\x73\x65\x72\x5f\160\150\x6f\156\145"])) {
            goto J2;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        goto e5;
        J2:
        SessionUtils::add_phone_verified($this->form_session_var, trim($GX["\x75\x73\145\162\137\x70\x68\157\156\145"]));
        $this->send_challenge("\x74\145\163\164", '', null, trim($GX["\x75\163\x65\x72\137\160\150\157\x6e\x65"]), VerificationType::PHONE);
        e5:
    }
    public function send_otp_to_email($GX)
    {
        if (array_key_exists("\x75\163\x65\162\137\x65\x6d\x61\151\x6c", $GX) && !MoUtility::is_blank($GX["\x75\163\145\162\137\145\155\x61\151\154"])) {
            goto X9;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        goto dg;
        X9:
        SessionUtils::add_email_verified($this->form_session_var, $GX["\165\x73\x65\162\x5f\145\x6d\x61\151\x6c"]);
        $this->send_challenge("\164\145\163\x74", $GX["\165\163\145\162\137\x65\155\x61\x69\x6c"], null, $GX["\x75\163\145\162\x5f\145\155\141\x69\x6c"], VerificationType::EMAIL);
        dg:
    }
    public function mo_validate_docdirect_user_registration()
    {
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->checkIfVerificationNotStarted($GX);
        $this->checkIfVerificationCodeNotEntered($GX);
        $this->handle_otp_token_submitted($GX);
    }
    public function checkIfVerificationNotStarted()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto E3;
        }
        echo wp_json_encode(array("\x74\171\x70\145" => "\x65\x72\x72\157\x72", "\155\x65\163\x73\141\x67\x65" => MoMessages::showMessage(MoMessages::DOC_DIRECT_VERIFY)));
        die;
        E3:
    }
    public function checkIfVerificationCodeNotEntered($GX)
    {
        if (!(!array_key_exists("\155\157\137\166\x65\162\151\x66\171", $GX) || MoUtility::is_blank(sanitize_text_field($GX["\155\x6f\x5f\x76\145\162\x69\x66\x79"])))) {
            goto IX;
        }
        echo wp_json_encode(array("\164\x79\160\x65" => "\x65\162\x72\x6f\162", "\x6d\145\163\x73\141\147\145" => MoMessages::showMessage(MoMessages::DCD_ENTER_VERIFY_CODE)));
        die;
        IX:
    }
    public function handle_otp_token_submitted($GX)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto To;
        }
        $this->processEmail($GX);
        goto q4;
        To:
        $this->process_phone_number($GX);
        q4:
        $this->validate_challenge($this->get_verification_type(), "\155\157\x5f\x76\145\162\151\146\171", null);
    }
    public function process_phone_number($GX)
    {
        if (SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($GX["\x70\x68\157\156\x65\137\x6e\165\155\x62\145\x72"]))) {
            goto pI;
        }
        echo wp_json_encode(array("\164\x79\160\145" => "\x65\x72\x72\x6f\x72", "\155\145\x73\x73\141\147\x65" => MoMessages::showMessage(MoMessages::PHONE_MISMATCH)));
        die;
        pI:
    }
    public function processEmail($GX)
    {
        if (SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX["\x65\155\141\151\x6c"]))) {
            goto fI;
        }
        echo wp_json_encode(array("\x74\x79\160\145" => "\145\x72\x72\157\162", "\155\x65\163\x73\x61\147\x65" => MoMessages::showMessage(MoMessages::EMAIL_MISMATCH)));
        die;
        fI:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto zI;
        }
        return;
        zI:
        echo wp_json_encode(array("\x74\171\x70\x65" => "\x65\162\162\157\x72", "\155\145\163\x73\141\x67\x65" => MoUtility::get_invalid_otp_method()));
        die;
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        $this->unset_otp_session_variables();
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto cK;
        }
        array_push($MI, $this->phone_form_id);
        cK:
        return $MI;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\x6d\x61\156\141\x67\145\137\157\160\x74\151\x6f\x6e\163") || !check_admin_referer($this->admin_nonce))) {
            goto xH;
        }
        return;
        xH:
        $this->otp_type = $this->sanitize_form_post("\x64\157\x63\x64\151\162\x65\143\x74\x5f\145\156\x61\142\154\145\137\x74\x79\160\x65");
        $this->is_form_enabled = $this->sanitize_form_post("\x64\157\143\x64\x69\162\x65\143\164\137\145\156\141\142\x6c\x65");
        update_mo_option("\144\x6f\x63\x64\x69\x72\x65\143\164\x5f\x65\x6e\x61\142\x6c\145", $this->is_form_enabled);
        update_mo_option("\144\157\143\x64\151\162\145\x63\x74\x5f\145\x6e\x61\142\154\145\x5f\x74\171\160\145", $this->otp_type);
    }
}
uN:
