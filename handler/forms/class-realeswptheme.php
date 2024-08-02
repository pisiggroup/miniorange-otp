<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\x53\120\101\124\110")) {
    goto w_g;
}
exit;
w_g:
use OTP\Helper\FormSessionVars;
use OTP\Objects\BaseMessages;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
if (class_exists("\x52\x65\x61\x6c\x65\x73\x57\120\x54\150\x65\x6d\145")) {
    goto o8B;
}
class RealesWPTheme extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::REALESWP_REGISTER;
        $this->type_phone_tag = "\x6d\157\x5f\x72\145\x61\x6c\145\x73\137\x70\150\157\156\145\137\145\x6e\141\142\x6c\145";
        $this->type_email_tag = "\x6d\x6f\137\162\145\x61\x6c\145\163\137\145\155\x61\151\x6c\137\145\x6e\x61\142\154\x65";
        $this->phone_form_id = "\x23\x70\x68\x6f\x6e\x65\x53\151\x67\x6e\165\x70";
        $this->form_key = "\122\x45\101\114\105\x53\x5f\122\105\x47\111\x53\x54\x45\x52";
        $this->form_name = mo_("\122\145\x61\154\x65\x73\x20\127\x50\x20\124\150\x65\155\x65\40\122\145\x67\x69\x73\164\x72\x61\164\x69\157\156\40\106\x6f\x72\x6d");
        $this->is_form_enabled = get_mo_option("\x72\x65\x61\154\145\163\137\x65\x6e\x61\x62\154\x65");
        $this->form_documents = MoFormDocs::REALES_THEME;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\162\x65\x61\x6c\x65\x73\137\x65\156\x61\x62\x6c\x65\x5f\164\x79\160\x65");
        add_action("\x77\x70\x5f\x65\156\x71\165\145\x75\x65\137\163\143\162\151\x70\164\x73", array($this, "\145\x6e\161\165\x65\165\145\137\x73\x63\162\x69\x70\x74\137\x6f\x6e\x5f\160\x61\x67\145"));
        $this->routeData();
    }
    private function routeData()
    {
        if (array_key_exists("\157\x70\x74\x69\x6f\156", $_GET)) {
            goto txR;
        }
        return;
        txR:
        switch (trim(sanitize_text_field(wp_unslash($_GET["\x6f\160\x74\x69\157\156"])))) {
            case "\155\x69\x6e\x69\x6f\x72\141\x6e\x67\145\x2d\x72\x65\141\154\145\163\167\x70\55\166\145\162\151\146\171":
                if (check_ajax_referer($this->nonce, $this->nonce_key)) {
                    goto cnH;
                }
                wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
                exit;
                cnH:
                $this->send_otp_realeswp_verify(MOUtility::mo_sanitize_array($_POST));
                goto UAV;
            case "\x6d\x69\x6e\x69\x6f\x72\141\x6e\x67\x65\x2d\166\x61\x6c\151\144\141\x74\145\x2d\x72\145\x61\x6c\x65\163\x77\160\x2d\157\x74\160":
                if (check_ajax_referer($this->nonce, $this->nonce_key)) {
                    goto y07;
                }
                wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
                exit;
                y07:
                $this->reales_validate_otp(MOUtility::mo_sanitize_array($_POST));
                goto UAV;
        }
        u8B:
        UAV:
    }
    public function enqueue_script_on_page()
    {
        wp_register_script("\x72\x65\x61\x6c\x65\163\167\x70\x53\x63\162\x69\160\x74", MOV_URL . "\151\156\x63\154\x75\144\145\x73\57\152\163\x2f\x72\145\141\x6c\x65\163\167\160\56\x6d\x69\156\x2e\152\163\77\x76\145\162\163\x69\157\156\x3d" . MOV_VERSION, array("\152\x71\165\145\162\x79"), MOV_VERSION, true);
        wp_localize_script("\x72\x65\141\154\x65\163\x77\160\x53\x63\162\x69\x70\x74", "\x6d\157\x76\x61\162\x73", array("\151\155\x67\125\122\114" => MOV_URL . "\x69\156\143\x6c\x75\144\145\x73\57\x69\155\141\147\x65\x73\x2f\154\157\141\144\145\x72\56\x67\151\146", "\146\x69\145\x6c\x64\x6e\141\x6d\145" => $this->otp_type === $this->type_phone_tag ? "\160\x68\157\156\x65\x20\x6e\x75\155\x62\x65\162" : "\x65\155\141\x69\x6c", "\146\x69\x65\154\x64" => $this->otp_type === $this->type_phone_tag ? "\160\150\x6f\x6e\x65\123\x69\147\x6e\165\x70" : "\x65\x6d\x61\x69\x6c\123\151\x67\x6e\x75\x70", "\x73\x69\x74\x65\x55\122\114" => site_url(), "\151\156\163\x65\x72\164\x41\x66\x74\145\x72" => $this->otp_type === $this->type_phone_tag ? "\x23\160\x68\x6f\x6e\x65\123\x69\x67\156\x75\160" : "\43\x65\x6d\x61\151\154\123\x69\147\x6e\x75\160", "\160\154\x61\x63\x65\x48\157\154\144\x65\x72" => mo_("\x4f\x54\120\40\103\157\144\x65"), "\142\165\164\x74\157\156\x54\x65\x78\x74" => mo_("\126\x61\x6c\x69\x64\141\164\x65\40\141\x6e\144\x20\123\151\147\x6e\40\x55\x70"), "\x61\152\141\x78\x75\162\154" => wp_ajax_url()));
        wp_enqueue_script("\162\x65\141\x6c\x65\x73\167\160\123\143\162\151\160\164");
    }
    private function send_otp_realeswp_verify($GX)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto H0P;
        }
        $this->send_otp_to_email($GX);
        goto H49;
        H0P:
        $this->send_otp_to_phone($GX);
        H49:
    }
    private function send_otp_to_phone($GX)
    {
        if (array_key_exists("\165\163\x65\162\137\160\x68\x6f\156\145", $GX) && !MoUtility::is_blank(sanitize_text_field($GX["\x75\163\145\162\137\160\150\157\x6e\x65"]))) {
            goto zM5;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        goto frW;
        zM5:
        SessionUtils::add_phone_verified($this->form_session_var, trim($GX["\165\x73\x65\162\137\x70\150\157\x6e\145"]));
        $this->send_challenge("\164\145\x73\x74", '', null, trim($GX["\x75\x73\145\x72\137\x70\150\157\156\x65"]), VerificationType::PHONE);
        frW:
    }
    private function send_otp_to_email($GX)
    {
        if (array_key_exists("\165\163\145\162\x5f\145\x6d\x61\151\x6c", $GX) && !MoUtility::is_blank(sanitize_email($GX["\165\x73\145\162\x5f\x65\155\141\x69\x6c"]))) {
            goto CtX;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        goto dJO;
        CtX:
        SessionUtils::add_email_verified($this->form_session_var, $GX["\165\x73\x65\162\137\145\155\141\x69\x6c"]);
        $this->send_challenge("\x74\145\163\164", $GX["\x75\x73\145\162\x5f\145\x6d\x61\151\154"], null, $GX["\165\163\x65\162\137\x65\x6d\141\151\x6c"], VerificationType::EMAIL);
        dJO:
    }
    private function reales_validate_otp($GX)
    {
        $Nv = !isset($GX["\157\x74\160"]) ? sanitize_text_field($GX["\157\x74\x70"]) : '';
        $this->checkIfOTPVerificationHasStarted();
        $this->validateSubmittedFields($GX);
        $this->validate_challenge(null, $Nv);
    }
    private function validateSubmittedFields($GX)
    {
        $Bo = $this->get_verification_type();
        if (VerificationType::EMAIL === $Bo && !SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($GX["\165\163\145\x72\137\145\x6d\141\151\154"]))) {
            goto dt6;
        }
        if (VerificationType::PHONE === $Bo && !SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($GX["\x75\163\145\162\137\x70\x68\157\156\x65"]))) {
            goto jtA;
        }
        goto PM7;
        dt6:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        die;
        goto PM7;
        jtA:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        die;
        PM7:
    }
    private function checkIfOTPVerificationHasStarted()
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto a0J;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PLEASE_VALIDATE), MoConstants::ERROR_JSON_TYPE));
        die;
        a0J:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        wp_send_json(MoUtility::create_json(MoUtility::get_invalid_otp_method(), MoConstants::ERROR_JSON_TYPE));
        die;
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        $this->unset_otp_session_variables();
        wp_send_json(MoUtility::create_json(MoMessages::REG_SUCCESS, MoConstants::SUCCESS_JSON_TYPE));
        die;
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto nGF;
        }
        array_push($MI, $this->phone_form_id);
        nGF:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto kP_;
        }
        return;
        kP_:
        $this->is_form_enabled = $this->sanitize_form_post("\x72\145\x61\x6c\145\x73\137\x65\156\x61\x62\x6c\x65");
        $this->otp_type = $this->sanitize_form_post("\162\145\x61\154\x65\x73\x5f\145\156\x61\142\154\x65\x5f\x74\171\x70\x65");
        update_mo_option("\162\145\141\x6c\x65\x73\137\145\156\141\x62\154\145", $this->is_form_enabled);
        update_mo_option("\x72\145\x61\154\145\163\137\x65\x6e\141\x62\154\145\137\x74\171\x70\145", $this->otp_type);
    }
}
o8B:
