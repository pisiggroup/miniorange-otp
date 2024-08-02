<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\x53\x50\x41\x54\110")) {
    goto kM;
}
exit;
kM:
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
use ReflectionException;
if (class_exists("\116\x69\x6e\152\141\106\157\162\x6d\x41\152\x61\x78\106\157\162\155")) {
    goto ImV;
}
class NinjaFormAjaxForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::NINJA_FORM_AJAX;
        $this->type_phone_tag = "\x6d\x6f\137\x6e\151\156\152\x61\x5f\146\x6f\x72\x6d\137\x70\150\x6f\x6e\145\137\x65\x6e\141\142\154\145";
        $this->type_email_tag = "\x6d\157\x5f\156\x69\156\x6a\x61\137\x66\157\162\x6d\137\x65\x6d\x61\x69\x6c\137\145\156\x61\x62\x6c\x65";
        $this->type_both_tag = "\x6d\x6f\137\x6e\x69\x6e\152\x61\137\146\x6f\x72\155\x5f\x62\x6f\x74\x68\x5f\x65\x6e\x61\142\154\x65";
        $this->form_key = "\116\x49\x4e\112\x41\137\x46\117\122\x4d\x5f\101\x4a\101\x58";
        $this->form_name = mo_("\116\151\156\152\141\40\x46\157\162\x6d\163\40\50\x20\101\142\x6f\x76\145\x20\166\145\162\163\151\x6f\156\x20\x33\x2e\60\40\x29");
        $this->is_form_enabled = get_mo_option("\x6e\152\x61\137\x65\156\141\x62\x6c\145");
        $this->button_text = get_mo_option("\x6e\152\x61\137\142\x75\x74\x74\157\x6e\137\164\x65\170\x74");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\x43\154\x69\143\x6b\x20\110\145\x72\x65\40\164\x6f\40\x73\x65\x6e\144\40\117\x54\120");
        $this->phone_form_id = array();
        $this->form_documents = MoFormDocs::NINJA_FORMS_AJAX_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\156\x69\x6e\x6a\141\x5f\x66\157\x72\155\x5f\145\x6e\141\x62\x6c\145\x5f\164\171\x70\x65");
        $this->form_details = maybe_unserialize(get_mo_option("\156\151\x6e\x6a\x61\137\146\x6f\x72\155\137\157\x74\x70\137\145\156\x61\142\154\145\x64"));
        if (!empty($this->form_details)) {
            goto i9;
        }
        return;
        i9:
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\x69\x6e\160\165\164\133\x69\x64\x3d\x6e\146\x2d\x66\x69\x65\154\x64\55" . $bh["\160\150\157\x6e\145\x6b\145\x79"] . "\135");
            mL:
        }
        tc:
        add_action("\156\151\156\x6a\x61\137\x66\157\162\x6d\x73\x5f\x61\x66\164\x65\x72\137\146\157\x72\x6d\137\x64\x69\163\160\154\x61\171", array($this, "\x65\156\161\x75\145\x75\145\137\x6e\152\x5f\146\x6f\162\x6d\x5f\x73\143\x72\151\160\164"), 99, 1);
        add_filter("\156\151\x6e\x6a\141\x5f\x66\157\162\x6d\x73\137\163\x75\142\155\x69\x74\137\144\141\164\x61", array($this, "\155\x6f\137\150\141\x6e\144\154\x65\137\x6e\x6a\x5f\x61\152\141\x78\137\146\x6f\x72\x6d\x5f\x73\x75\x62\155\151\164"), 99, 1);
        $I2 = $this->get_verification_type();
        $this->routeData();
    }
    private function routeData()
    {
        if (array_key_exists("\156\x69\156\152\141\137\x66\157\x72\155\137\157\160\164\151\157\156", $_GET)) {
            goto EX;
        }
        return;
        EX:
        if (check_ajax_referer($this->nonce, "\163\x65\x63\x75\x72\x69\164\x79", false)) {
            goto ej;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        ej:
        $GX = MoUtility::mo_sanitize_array($_POST);
        switch (trim(sanitize_text_field(wp_unslash($_GET["\156\x69\x6e\x6a\x61\x5f\146\x6f\162\155\x5f\157\160\164\x69\157\x6e"])))) {
            case "\x6d\151\156\x69\157\162\141\156\147\x65\x2d\x6e\x6a\55\141\152\141\x78\55\166\x65\162\151\x66\x79":
                $this->mo_send_otp_nj_ajax_verify($GX);
                goto xZc;
        }
        cLX:
        xZc:
    }
    public function enqueue_nj_form_script($Nb)
    {
        if (!array_key_exists($Nb, $this->form_details)) {
            goto l4g;
        }
        $iG = $this->form_details[$Nb];
        $VW = array_keys($this->form_details);
        wp_register_script("\x6e\x6a\x73\x63\162\151\160\164", MOV_URL . "\151\156\x63\154\x75\144\145\163\x2f\x6a\163\57\x6e\151\x6e\x6a\x61\x66\157\x72\155\141\152\x61\170\56\x6d\151\x6e\x2e\152\163", array("\152\161\x75\x65\162\171"), MOV_VERSION, true);
        wp_localize_script("\156\152\163\x63\x72\x69\x70\164", "\x6d\157\156\x69\156\152\141\166\141\x72\163", array("\151\x6d\147\125\x52\114" => MOV_URL . "\x69\x6e\x63\154\x75\x64\x65\x73\57\151\155\x61\147\145\163\57\x6c\x6f\141\144\x65\162\56\x67\x69\146", "\x73\151\164\145\x55\122\x4c" => site_url(), "\157\x74\x70\x54\x79\x70\145" => $this->otp_type === $this->type_phone_tag ? VerificationType::PHONE : VerificationType::EMAIL, "\x66\157\x72\155\x73" => $this->form_details, "\156\157\x6e\x63\145" => wp_create_nonce($this->nonce), "\x66\157\162\155\113\x65\171\126\141\x6c\x73" => $VW, "\x62\x75\x74\164\x6f\x6e\164\x65\170\x74" => mo_($this->button_text), "\x66\157\162\155\x49\x64" => $Nb));
        wp_enqueue_script("\x6e\x6a\x73\x63\162\x69\160\x74");
        l4g:
        return $Nb;
    }
    public function mo_handle_nj_ajax_form_submit($GX)
    {
        if (array_key_exists($GX["\x69\144"], $this->form_details)) {
            goto KeL;
        }
        return $GX;
        KeL:
        $iG = $this->form_details[$GX["\151\x64"]];
        $GX = $this->checkIfOtpVerificationStarted($iG, $GX);
        if (!isset($GX["\x65\162\x72\157\162\x73"]["\146\151\145\154\x64\x73"])) {
            goto HMH;
        }
        return $GX;
        HMH:
        if (!(strcasecmp($this->otp_type, $this->type_email_tag) === 0)) {
            goto ykX;
        }
        $GX = $this->processEmail($iG, $GX);
        ykX:
        if (!(strcasecmp($this->otp_type, $this->type_phone_tag) === 0)) {
            goto GI3;
        }
        $GX = $this->processPhone($iG, $GX);
        GI3:
        if (isset($GX["\145\x72\x72\x6f\162\x73"]["\x66\x69\145\x6c\144\163"])) {
            goto JXe;
        }
        $GX = $this->processOTPEntered($GX, $iG);
        JXe:
        return $GX;
    }
    private function processOTPEntered($GX, $iG)
    {
        $zl = $iG["\166\145\162\151\146\x79\113\145\171"];
        $I2 = $this->get_verification_type();
        $this->validate_challenge($I2, null, $GX["\146\151\x65\154\144\x73"][$zl]["\166\x61\154\x75\x65"]);
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $I2)) {
            goto iI0;
        }
        $this->unset_otp_session_variables();
        goto DRn;
        iI0:
        $GX["\145\x72\162\x6f\162\163"]["\146\151\x65\154\x64\x73"][$zl] = MoUtility::get_invalid_otp_method();
        DRn:
        return $GX;
    }
    private function checkIfOtpVerificationStarted($iG, $GX)
    {
        if (!SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto vLf;
        }
        return $GX;
        vLf:
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto Y3G;
        }
        $GX["\145\162\162\x6f\x72\x73"]["\x66\151\145\x6c\x64\x73"][$iG["\160\x68\157\156\x65\x6b\145\x79"]] = MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE);
        goto QDg;
        Y3G:
        $GX["\145\162\162\x6f\x72\x73"]["\146\x69\x65\154\144\x73"][$iG["\x65\155\x61\151\154\x6b\145\171"]] = MoMessages::showMessage(MoMessages::ENTER_VERIFY_CODE);
        QDg:
        return $GX;
    }
    private function processEmail($iG, $GX)
    {
        $Y7 = $iG["\145\x6d\x61\151\x6c\x6b\145\x79"];
        if (SessionUtils::is_email_verified_match($this->form_session_var, $GX["\x66\x69\x65\154\144\x73"][$Y7]["\166\141\x6c\x75\145"])) {
            goto DoS;
        }
        $GX["\145\162\162\157\162\x73"]["\146\151\x65\154\144\163"][$Y7] = MoMessages::showMessage(MoMessages::EMAIL_MISMATCH);
        DoS:
        return $GX;
    }
    private function processPhone($iG, $GX)
    {
        $Y7 = $iG["\160\150\x6f\x6e\145\x6b\145\x79"];
        if (SessionUtils::is_phone_verified_match($this->form_session_var, $GX["\146\x69\145\154\144\163"][$Y7]["\166\x61\x6c\165\x65"])) {
            goto ub0;
        }
        $GX["\x65\162\x72\x6f\x72\x73"]["\x66\x69\145\154\144\163"][$Y7] = MoMessages::showMessage(MoMessages::PHONE_MISMATCH);
        ub0:
        return $GX;
    }
    private function mo_send_otp_nj_ajax_verify($GX)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if ($this->otp_type === $this->type_phone_tag) {
            goto YFO;
        }
        $this->mo_send_nj_ajax_otp_to_email($GX);
        goto lgd;
        YFO:
        $this->mo_send_nj_ajax_otp_to_phone($GX);
        lgd:
    }
    private function mo_send_nj_ajax_otp_to_phone($GX)
    {
        if (!array_key_exists("\165\x73\x65\162\137\x70\x68\x6f\156\x65", $GX) || !isset($GX["\165\x73\x65\x72\x5f\160\x68\157\156\145"])) {
            goto Ofy;
        }
        $this->setSessionAndStartOTPVerification(trim($GX["\165\163\x65\162\x5f\160\150\157\x6e\x65"]), null, trim($GX["\165\x73\x65\x72\x5f\x70\150\x6f\156\x65"]), VerificationType::PHONE);
        goto DZg;
        Ofy:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        DZg:
    }
    private function mo_send_nj_ajax_otp_to_email($GX)
    {
        if (!array_key_exists("\x75\163\145\x72\137\x65\x6d\141\x69\x6c", $GX) || !isset($GX["\165\163\x65\162\137\145\155\141\x69\154"])) {
            goto KpY;
        }
        $this->setSessionAndStartOTPVerification($GX["\x75\x73\145\162\137\x65\155\x61\151\x6c"], $GX["\x75\x73\145\162\x5f\x65\155\141\151\x6c"], null, VerificationType::EMAIL);
        goto At5;
        KpY:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        At5:
    }
    private function setSessionAndStartOTPVerification($Pl, $Wb, $bV, $I2)
    {
        if (VerificationType::PHONE === $I2) {
            goto qU5;
        }
        SessionUtils::add_email_verified($this->form_session_var, $Pl);
        goto YoX;
        qU5:
        SessionUtils::add_phone_verified($this->form_session_var, $Pl);
        YoX:
        $this->send_challenge('', $Wb, null, $bV, $I2);
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
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto JNU;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        JNU:
        return $MI;
    }
    private function getFieldId($FL, $GX)
    {
        global $wpdb;
        if (!("\145\155\x61\151\x6c" === $GX)) {
            goto eSr;
        }
        return $wpdb->get_var($wpdb->prepare("\x53\105\x4c\105\x43\124\x20\151\144\40\106\x52\x4f\115\x20{$wpdb->prefix}\156\146\x33\x5f\x66\x69\145\154\x64\163\x20\167\150\x65\x72\x65\x20\140\x70\x61\162\x65\x6e\164\137\x69\x64\140\x3d\x20\x25\x64\40\141\156\144\40\40\x60\153\x65\x79\140\x20\75\x20\x25\163", array($FL, $GX)));
        eSr:
        return $wpdb->get_var($wpdb->prepare("\123\x45\114\x45\x43\124\40\x69\144\x20\106\122\x4f\115\40{$wpdb->prefix}\156\x66\x33\x5f\x66\151\145\x6c\144\x73\40\167\150\145\x72\x65\x20\x60\x6b\x65\x79\x60\x20\75\x20\45\163", array($GX)));
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto tx2;
        }
        return;
        tx2:
        if (!(isset($_POST["\x6d\157\137\x63\x75\163\164\x6f\155\x65\x72\137\x76\141\x6c\x69\144\141\x74\x69\157\x6e\x5f\x6e\151\156\152\141\137\x66\157\162\155\x5f\145\156\141\142\x6c\145"]) || !current_user_can("\x6d\x61\156\x61\147\x65\x5f\157\x70\x74\151\157\156\x73") || !check_admin_referer($this->admin_nonce))) {
            goto z7H;
        }
        return;
        z7H:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $form = $this->parseFormDetails($GX);
        $this->form_details = !empty($form) ? $form : '';
        $this->otp_type = $this->sanitize_form_post("\156\x6a\x61\137\x65\x6e\141\142\154\x65\x5f\164\x79\x70\145");
        $this->is_form_enabled = $this->sanitize_form_post("\156\152\141\x5f\145\156\141\142\x6c\145");
        $this->button_text = $this->sanitize_form_post("\x6e\x6a\x61\137\x62\165\164\x74\157\156\137\164\145\x78\x74");
        update_mo_option("\156\151\156\x6a\x61\x5f\x66\x6f\162\x6d\x5f\x65\x6e\x61\x62\154\x65", 0);
        update_mo_option("\156\152\x61\137\145\156\x61\x62\154\145", $this->is_form_enabled);
        update_mo_option("\156\x69\x6e\152\141\137\x66\157\x72\155\137\145\156\x61\142\x6c\x65\137\x74\x79\x70\x65", $this->otp_type);
        update_mo_option("\x6e\151\x6e\152\x61\x5f\x66\x6f\x72\x6d\x5f\x6f\x74\x70\137\145\156\141\142\x6c\x65\144", maybe_serialize($this->form_details));
        update_mo_option("\x6e\152\x61\137\142\165\x74\x74\x6f\156\137\164\145\170\x74", $this->button_text);
    }
    private function parseFormDetails($GX)
    {
        $form = array();
        if (array_key_exists("\156\151\156\x6a\141\x5f\141\x6a\x61\170\137\x66\x6f\x72\x6d", $GX)) {
            goto Nxw;
        }
        return array();
        Nxw:
        foreach (array_filter($GX["\156\151\156\x6a\141\137\x61\x6a\141\170\137\146\x6f\162\155"]["\146\x6f\162\155"]) as $a6 => $bh) {
            $form[sanitize_text_field($bh)] = array("\x65\155\x61\151\x6c\x6b\x65\x79" => $this->getFieldId(sanitize_text_field($bh), sanitize_text_field($GX["\156\151\x6e\152\x61\137\141\x6a\x61\x78\x5f\x66\157\x72\155"]["\x65\155\x61\x69\x6c\x6b\145\x79"][$a6])), "\160\x68\157\x6e\145\x6b\x65\x79" => $this->getFieldId($bh, $GX["\x6e\151\x6e\152\141\137\x61\152\141\170\137\146\157\162\155"]["\160\x68\x6f\156\145\x6b\x65\171"][$a6]), "\166\x65\162\151\146\x79\x4b\x65\x79" => $this->getFieldId(sanitize_text_field($bh), sanitize_text_field($GX["\156\x69\156\152\141\x5f\141\x6a\141\170\x5f\x66\x6f\x72\155"]["\x76\145\x72\151\146\171\x4b\x65\171"][$a6])), "\160\x68\x6f\x6e\x65\x5f\x73\x68\157\167" => sanitize_text_field($GX["\156\151\156\x6a\141\137\141\152\141\170\x5f\146\x6f\x72\155"]["\x70\x68\157\x6e\145\x6b\x65\x79"][$a6]), "\x65\155\141\x69\154\137\163\150\157\167" => sanitize_text_field($GX["\156\151\x6e\x6a\141\x5f\x61\x6a\141\x78\x5f\x66\x6f\x72\x6d"]["\x65\x6d\x61\x69\x6c\x6b\x65\x79"][$a6]), "\x76\145\x72\x69\146\171\x5f\x73\150\x6f\x77" => sanitize_text_field($GX["\156\151\156\152\141\137\x61\152\x61\x78\x5f\146\x6f\x72\x6d"]["\166\x65\162\151\146\x79\x4b\145\171"][$a6]));
            Hyu:
        }
        j8f:
        return $form;
    }
}
ImV:
