<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\123\120\x41\x54\x48")) {
    goto Ar;
}
exit;
Ar:
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
if (class_exists("\x46\157\162\155\x43\162\141\x66\164\x42\141\x73\151\143\x46\x6f\x72\x6d")) {
    goto Yt;
}
class FormCraftBasicForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::FORMCRAFT;
        $this->type_phone_tag = "\x6d\x6f\137\x66\157\162\155\x63\x72\x61\x66\x74\x5f\160\150\x6f\x6e\x65\137\145\156\x61\142\154\x65";
        $this->type_email_tag = "\x6d\x6f\x5f\x66\x6f\162\x6d\143\x72\x61\146\164\137\145\155\141\x69\154\137\145\x6e\141\x62\x6c\x65";
        $this->form_key = "\106\117\122\x4d\103\x52\101\x46\124\102\x41\123\111\x43";
        $this->form_name = mo_("\106\x6f\162\155\103\162\x61\146\x74\x20\102\x61\x73\x69\143\x20\50\106\x72\x65\x65\40\126\145\162\163\x69\x6f\156\x29");
        $this->is_form_enabled = get_mo_option("\146\x6f\x72\155\x63\162\141\146\164\x5f\x65\156\x61\142\x6c\145");
        $this->phone_form_id = array();
        $this->form_documents = MoFormDocs::FORMCRAFT_BASIC_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        if ($this->isFormCraftPluginInstalled()) {
            goto fS;
        }
        return;
        fS:
        $this->otp_type = get_mo_option("\x66\x6f\162\x6d\143\162\141\146\164\x5f\x65\156\141\x62\x6c\145\x5f\164\171\160\145");
        $this->form_details = maybe_unserialize(get_mo_option("\146\x6f\162\x6d\143\x72\141\146\164\x5f\x6f\x74\160\137\x65\x6e\x61\x62\x6c\145\x64"));
        if (!empty($this->form_details)) {
            goto sx;
        }
        return;
        sx:
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\x5b\144\x61\164\x61\55\151\144\75" . $a6 . "\135\x20\x69\156\x70\165\164\133\156\x61\155\145\x3d" . $bh["\160\150\x6f\x6e\145\153\145\x79"] . "\x5d");
            DG:
        }
        XI:
        add_action("\167\160\x5f\141\x6a\x61\x78\x5f\x66\157\162\x6d\143\x72\x61\x66\164\x5f\142\x61\x73\x69\x63\x5f\146\157\162\155\137\163\x75\x62\x6d\151\x74", array($this, "\x76\141\x6c\151\144\141\164\145\137\146\157\162\155\143\162\141\x66\164\x5f\146\x6f\x72\155\x5f\x73\x75\x62\x6d\151\164"), 1);
        add_action("\167\x70\x5f\141\x6a\141\170\137\156\x6f\160\x72\x69\x76\x5f\146\157\162\155\x63\162\x61\146\x74\137\x62\141\x73\x69\143\x5f\146\157\162\155\137\x73\x75\x62\155\151\x74", array($this, "\x76\141\154\x69\x64\141\164\x65\137\146\x6f\x72\x6d\x63\162\141\x66\x74\137\146\157\162\x6d\137\x73\165\x62\155\151\164"), 1);
        add_action("\x77\x70\137\x61\152\141\170\137\165\156\x73\145\x74\x5f\146\x6f\162\155\x63\162\141\146\x74\x5f\142\x61\163\151\143\x5f\163\x65\163\x73\151\x6f\156", array($this, "\x75\x6e\163\x65\164\x5f\157\164\160\x5f\x73\x65\x73\x73\151\x6f\156\x5f\x76\141\x72\x69\141\x62\x6c\145\x73"));
        add_action("\x77\160\137\141\x6a\x61\170\137\156\x6f\x70\162\151\166\x5f\x75\x6e\x73\145\x74\x5f\146\x6f\x72\x6d\143\162\141\x66\x74\137\x62\x61\163\x69\x63\x5f\x73\x65\x73\163\x69\157\156", array($this, "\165\x6e\163\x65\164\137\x6f\164\x70\137\x73\145\x73\163\151\157\156\137\166\141\162\x69\141\x62\154\x65\163"));
        add_action("\167\x70\x5f\x65\156\x71\x75\x65\x75\x65\x5f\x73\143\162\x69\160\x74\163", array($this, "\145\x6e\161\165\145\165\x65\x5f\x73\x63\x72\x69\x70\164\137\157\156\137\x70\x61\x67\145"));
        $this->routeData();
    }
    private function routeData()
    {
        if (array_key_exists("\x66\157\162\155\143\162\141\x66\164\x5f\142\141\163\151\x63\x5f\157\x70\164\x69\x6f\x6e", $_GET)) {
            goto Wc;
        }
        return;
        Wc:
        if (check_ajax_referer($this->nonce, "\163\x65\143\165\x72\x69\x74\171", false)) {
            goto Ul;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        Ul:
        $GX = MoUtility::mo_sanitize_array($_POST);
        switch (trim(isset($_GET["\x66\x6f\x72\x6d\x63\x72\x61\146\x74\137\x62\141\163\x69\143\x5f\x6f\160\164\x69\157\156"]) ? sanitize_text_field(wp_unslash($_GET["\x66\157\162\x6d\143\162\x61\146\x74\x5f\142\x61\163\x69\143\137\157\160\164\x69\157\x6e"])) : '')) {
            case "\155\151\156\x69\157\162\x61\x6e\x67\x65\55\x66\157\x72\x6d\143\162\x61\146\x74\55\166\145\x72\151\x66\171":
                $this->handle_formcraft_form($GX);
                goto yv;
            case "\x6d\x69\156\x69\x6f\162\x61\x6e\x67\145\x2d\146\x6f\x72\x6d\143\x72\141\x66\x74\55\x66\x6f\x72\155\55\157\x74\160\55\x65\x6e\141\x62\154\145\x64":
                wp_send_json($this->isVerificationEnabledForThisForm(isset($GX["\x66\x6f\162\155\x5f\x69\x64"]) ? sanitize_text_field(wp_unslash($GX["\146\x6f\x72\x6d\x5f\151\x64"])) : ''));
                goto yv;
        }
        kD:
        yv:
    }
    private function handle_formcraft_form($GX)
    {
        if ($this->isVerificationEnabledForThisForm(isset($GX["\146\x6f\162\x6d\137\151\144"]) ? sanitize_text_field(wp_unslash($GX["\x66\157\162\155\x5f\151\144"])) : '')) {
            goto re;
        }
        return;
        re:
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto pG;
        }
        $this->send_otp_to_email($GX);
        goto wO;
        pG:
        $this->send_otp_to_phone($GX);
        wO:
    }
    private function send_otp_to_phone($GX)
    {
        if (array_key_exists("\165\163\145\162\x5f\x70\x68\157\x6e\x65", $GX) && !MoUtility::is_blank($GX["\x75\163\x65\x72\x5f\x70\x68\x6f\x6e\145"])) {
            goto gu;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        goto TR;
        gu:
        SessionUtils::add_phone_verified($this->form_session_var, $GX["\165\163\145\x72\137\x70\x68\x6f\156\145"]);
        $this->send_challenge("\164\145\163\164", '', null, trim($GX["\165\x73\x65\162\x5f\160\150\x6f\156\x65"]), VerificationType::PHONE);
        TR:
    }
    private function send_otp_to_email($GX)
    {
        if (array_key_exists("\x75\163\145\x72\137\145\x6d\x61\x69\154", $GX) && !MoUtility::is_blank($GX["\165\163\145\162\137\145\155\x61\x69\x6c"])) {
            goto bK;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        goto Gl;
        bK:
        SessionUtils::add_email_verified($this->form_session_var, $GX["\165\x73\145\x72\137\x65\x6d\x61\151\154"]);
        $this->send_challenge("\164\145\x73\x74", $GX["\x75\x73\145\162\x5f\x65\x6d\x61\x69\x6c"], null, $GX["\x75\163\x65\x72\137\x65\x6d\141\x69\154"], VerificationType::EMAIL);
        Gl:
    }
    public function validate_formcraft_form_submit()
    {
        $if = wp_create_nonce("\146\x6f\162\155\x63\x72\x61\146\164\137\156\x6f\x6e\x63\x65");
        if (!(!wp_verify_nonce($if, "\146\x6f\162\x6d\143\x72\x61\146\x74\x5f\x6e\x6f\x6e\143\x65") === 1)) {
            goto HU;
        }
        return;
        HU:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $FL = sanitize_text_field($GX["\x69\x64"]);
        if ($this->isVerificationEnabledForThisForm($FL)) {
            goto CL;
        }
        return;
        CL:
        $this->checkIfVerificationNotStarted($FL);
        $iG = $this->form_details[$FL];
        $I2 = $this->get_verification_type();
        if (VerificationType::PHONE === $I2 && !SessionUtils::is_phone_verified_match($this->form_session_var, isset($GX[$iG["\x70\150\x6f\x6e\x65\153\145\x79"]]) ? sanitize_text_field(wp_unslash($GX[$iG["\160\150\157\156\145\x6b\145\x79"]])) : '')) {
            goto ua;
        }
        if (VerificationType::EMAIL === $I2 && !SessionUtils::is_email_verified_match($this->form_session_var, isset($GX[$iG["\145\x6d\x61\151\x6c\x6b\145\x79"]]) ? sanitize_text_field(wp_unslash($GX[$iG["\x65\x6d\141\x69\154\x6b\145\x79"]])) : '')) {
            goto rh;
        }
        goto hM;
        ua:
        $this->sendJSONErrorMessage(array("\145\x72\x72\x6f\162\163" => array($this->form_details[$FL]["\160\x68\157\156\145\x6b\x65\171"] => MoMessages::showMessage(MoMessages::PHONE_MISMATCH))));
        goto hM;
        rh:
        $this->sendJSONErrorMessage(array("\x65\162\162\157\x72\163" => array($this->form_details[$FL]["\145\x6d\x61\x69\x6c\153\x65\x79"] => MoMessages::showMessage(MoMessages::EMAIL_MISMATCH))));
        hM:
        if (MoUtility::sanitize_check($GX, $iG["\x76\145\162\151\146\171\x4b\x65\x79"])) {
            goto Gz;
        }
        $this->sendJSONErrorMessage(array("\145\x72\x72\x6f\x72\163" => array($this->form_details[$FL]["\166\x65\x72\151\x66\171\x4b\x65\171"] => MoUtility::get_invalid_otp_method())));
        Gz:
        SessionUtils::set_form_or_field_id($this->form_session_var, $FL);
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $I2)) {
            goto Xh;
        }
        $this->validate_challenge($I2, null, isset($GX[$iG["\166\x65\x72\151\x66\171\x4b\145\x79"]]) ? sanitize_text_field(wp_unslash($GX[$iG["\x76\145\162\x69\146\x79\x4b\145\171"]])) : '');
        Xh:
    }
    public function enqueue_script_on_page()
    {
        wp_register_script("\146\x6f\x72\x6d\143\x72\x61\146\164\x73\x63\162\151\160\x74", MOV_URL . "\151\156\143\154\x75\144\x65\x73\57\152\x73\x2f\x66\157\162\x6d\143\x72\141\x66\x74\x62\141\163\151\143\56\155\151\156\56\x6a\163\77\x76\x65\162\x73\x69\x6f\x6e\75" . MOV_VERSION, array("\x6a\x71\165\145\162\171"), MOV_VERSION, false);
        wp_localize_script("\x66\x6f\162\155\143\162\141\x66\164\x73\x63\x72\x69\x70\x74", "\155\157\146\x63\166\x61\162\163", array("\151\155\x67\125\122\x4c" => MOV_LOADER_URL, "\x66\157\162\x6d\x43\162\x61\x66\x74\106\157\x72\x6d\x73" => $this->form_details, "\163\151\x74\x65\x55\122\114" => site_url(), "\x61\x6a\141\x78\125\122\x4c" => wp_ajax_url(), "\156\x6f\156\143\145" => wp_create_nonce($this->nonce), "\157\x74\x70\124\171\x70\145" => $this->otp_type, "\142\x75\x74\164\157\x6e\124\145\x78\x74" => mo_("\x43\x6c\151\x63\153\x20\150\x65\x72\x65\x20\x74\157\40\x73\145\x6e\x64\40\117\124\120"), "\x62\x75\164\x74\157\156\124\x69\x74\154\145" => $this->otp_type === $this->type_phone_tag ? mo_("\120\154\145\141\x73\x65\x20\x65\x6e\164\x65\x72\x20\x61\40\120\150\x6f\156\145\40\116\165\x6d\142\145\162\40\x74\157\x20\145\156\x61\x62\x6c\145\x20\x74\150\x69\163\x20\x66\151\x65\154\x64\56") : mo_("\120\154\x65\141\163\145\x20\x65\x6e\x74\145\x72\40\141\x6e\40\145\155\141\151\154\40\x61\144\x64\x72\x65\163\x73\x20\x74\x6f\40\x65\156\141\142\x6c\x65\40\x74\150\151\163\40\146\x69\145\154\x64\x2e"), "\x61\x6a\x61\170\x75\x72\x6c" => wp_ajax_url(), "\x74\171\160\x65\120\x68\x6f\156\x65" => $this->type_phone_tag, "\x63\157\x75\156\164\162\x79\x44\x72\x6f\160" => get_mo_option("\163\150\x6f\167\137\x64\162\157\160\x64\x6f\167\156\137\x6f\x6e\x5f\x66\157\x72\155")));
        wp_enqueue_script("\146\157\x72\155\x63\162\x61\x66\x74\163\x63\x72\151\x70\164");
    }
    public function isVerificationEnabledForThisForm($FL)
    {
        return array_key_exists($FL, $this->form_details);
    }
    private function sendJSONErrorMessage($errors)
    {
        $zk["\x66\x61\x69\154\x65\x64"] = mo_("\120\x6c\x65\x61\x73\x65\40\x63\x6f\x72\x72\x65\x63\x74\40\164\150\145\40\x65\x72\162\x6f\x72\x73");
        $zk["\x65\162\162\x6f\162\163"] = $errors;
        echo wp_json_encode($zk);
        die;
    }
    private function checkIfVerificationNotStarted($FL)
    {
        if (!SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto kR;
        }
        return;
        kR:
        $jt = MoMessages::showMessage(MoMessages::PLEASE_VALIDATE);
        if ($this->otp_type === $this->type_phone_tag) {
            goto pe;
        }
        $this->sendJSONErrorMessage(array("\x65\162\x72\x6f\x72\163" => array($this->form_details[$FL]["\x65\155\x61\151\x6c\x6b\145\171"] => $jt)));
        goto FZ;
        pe:
        $this->sendJSONErrorMessage(array("\x65\x72\x72\x6f\x72\x73" => array($this->form_details[$FL]["\x70\x68\x6f\156\145\x6b\145\x79"] => $jt)));
        FZ:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto ox;
        }
        return;
        ox:
        $Nb = SessionUtils::get_form_or_field_id($this->form_session_var);
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
        $this->sendJSONErrorMessage(array("\x65\x72\x72\x6f\x72\x73" => array($this->form_details[$Nb]["\166\x65\162\x69\146\x79\x4b\145\171"] => MoUtility::get_invalid_otp_method())));
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
        wp_send_json(MoUtility::create_json("\165\156\163\145\x74\x20\x76\x61\162\x69\141\x62\154\x65\40\x73\x75\143\x63\145\163\163", MoConstants::SUCCESS_JSON_TYPE));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto Rb;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        Rb:
        return $MI;
    }
    private function isFormCraftPluginInstalled()
    {
        return MoUtility::get_active_plugin_version("\106\x6f\162\155\x43\x72\141\x66\x74") < 3 ? true : false;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto NM;
        }
        return;
        NM:
        if ($this->isFormCraftPluginInstalled()) {
            goto O8;
        }
        return;
        O8:
        if (!(!array_key_exists("\146\157\x72\x6d\143\162\141\146\x74\x5f\146\x6f\x72\155", $_POST) || !current_user_can("\155\141\x6e\x61\x67\145\137\157\160\164\151\157\156\163") || !check_admin_referer($this->admin_nonce))) {
            goto Bv;
        }
        return;
        Bv:
        $GX = MoUtility::mo_sanitize_array($_POST);
        foreach (array_filter($GX["\x66\157\x72\155\143\162\x61\146\x74\x5f\146\x6f\162\155"]["\146\157\x72\155"]) as $a6 => $bh) {
            $bh = sanitize_text_field($bh);
            $iG = $this->getFormCraftFormDataFromID($bh);
            if (!MoUtility::is_blank($iG)) {
                goto mT;
            }
            goto eL;
            mT:
            $PB = $this->getFieldIDs($GX, $a6, $iG);
            $form[$bh] = array("\x65\155\x61\x69\154\x6b\145\x79" => $PB["\x65\155\x61\x69\x6c\113\145\x79"], "\x70\150\x6f\156\x65\153\145\171" => $PB["\x70\150\x6f\x6e\x65\x4b\x65\x79"], "\x76\x65\x72\151\x66\x79\113\145\171" => $PB["\166\x65\x72\151\x66\x79\113\x65\x79"], "\x70\150\x6f\156\x65\137\x73\150\157\x77" => isset($GX["\146\x6f\162\x6d\143\162\x61\x66\x74\x5f\146\157\x72\155"]["\x70\x68\x6f\x6e\145\x6b\x65\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x66\157\162\155\143\x72\x61\146\x74\137\146\x6f\162\155"]["\x70\150\157\156\145\x6b\x65\171"][$a6])) : '', "\145\x6d\141\151\x6c\x5f\x73\x68\x6f\167" => isset($GX["\x66\x6f\162\155\x63\162\x61\x66\164\137\146\x6f\x72\x6d"]["\145\x6d\141\151\x6c\153\145\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\146\x6f\162\x6d\143\x72\141\146\164\137\146\157\162\155"]["\x65\155\141\x69\x6c\153\x65\x79"][$a6])) : '', "\166\145\x72\151\x66\x79\137\163\x68\157\167" => isset($GX["\x66\x6f\x72\x6d\x63\162\141\x66\164\x5f\x66\157\162\x6d"]["\x76\145\x72\151\146\171\113\145\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x66\x6f\x72\x6d\143\x72\141\146\164\x5f\146\157\x72\x6d"]["\x76\x65\x72\x69\146\x79\x4b\x65\171"][$a6])) : '');
            eL:
        }
        GU:
        $this->is_form_enabled = $this->sanitize_form_post("\146\157\x72\x6d\x63\x72\x61\x66\164\x5f\x65\x6e\x61\x62\x6c\x65");
        $this->otp_type = $this->sanitize_form_post("\x66\157\162\x6d\143\162\141\146\164\x5f\x65\x6e\x61\x62\x6c\x65\137\164\171\x70\145");
        $this->form_details = !empty($form) ? $form : '';
        update_mo_option("\x66\x6f\x72\155\143\x72\141\146\164\137\145\156\x61\142\x6c\145", $this->is_form_enabled);
        update_mo_option("\146\157\162\155\143\x72\x61\x66\164\x5f\x65\x6e\141\x62\154\x65\137\x74\x79\160\145", $this->otp_type);
        update_mo_option("\146\157\x72\155\x63\162\141\146\x74\137\x6f\164\160\x5f\145\156\141\142\x6c\145\x64", maybe_serialize($this->form_details));
    }
    private function getFieldIDs($GX, $a6, $iG)
    {
        $PB = array("\145\x6d\x61\151\154\x4b\145\x79" => '', "\160\x68\x6f\x6e\145\113\145\171" => '', "\x76\145\x72\151\146\171\x4b\145\171" => '');
        if (!empty($GX)) {
            goto Tj;
        }
        return $PB;
        Tj:
        foreach ($iG as $form) {
            if (!(strcasecmp($form["\x65\154\x65\x6d\145\x6e\x74\x44\145\146\x61\165\154\164\x73"]["\155\141\151\x6e\137\154\141\x62\145\154"], sanitize_text_field($GX["\146\x6f\x72\x6d\143\162\141\146\164\137\x66\x6f\x72\x6d"]["\x65\155\x61\x69\x6c\153\x65\171"][$a6])) === 0)) {
                goto kg;
            }
            $PB["\x65\x6d\x61\x69\154\x4b\145\x79"] = $form["\151\144\x65\x6e\x74\151\146\x69\145\162"];
            kg:
            if (!(strcasecmp($form["\145\154\145\x6d\145\156\164\104\145\146\141\x75\154\x74\x73"]["\x6d\x61\x69\x6e\x5f\154\141\x62\145\x6c"], sanitize_text_field($GX["\x66\x6f\162\x6d\143\162\141\146\164\137\146\157\x72\155"]["\x70\x68\157\x6e\x65\x6b\x65\171"][$a6])) === 0)) {
                goto Iu;
            }
            $PB["\160\x68\157\156\x65\x4b\145\x79"] = $form["\x69\x64\145\x6e\x74\x69\146\x69\x65\162"];
            Iu:
            if (!(strcasecmp($form["\145\154\x65\x6d\145\x6e\164\104\145\x66\141\x75\x6c\x74\x73"]["\155\x61\x69\156\x5f\x6c\141\142\x65\x6c"], sanitize_text_field($GX["\146\157\x72\155\x63\x72\x61\x66\x74\x5f\x66\x6f\162\x6d"]["\166\145\162\x69\x66\x79\113\145\171"][$a6])) === 0)) {
                goto vD;
            }
            $PB["\166\145\x72\151\146\x79\x4b\x65\x79"] = $form["\151\144\x65\x6e\x74\x69\146\x69\x65\x72"];
            vD:
            pH:
        }
        yY:
        return $PB;
    }
    private function getFormCraftFormDataFromID($FL)
    {
        global $wpdb, $forms_table;
        $Mb = $wpdb->get_var($wpdb->prepare("\123\105\114\x45\103\x54\x20\155\145\x74\x61\137\x62\x75\151\x6c\144\x65\x72\40\x46\x52\x4f\115\40{$wpdb->prefix}\x66\x6f\x72\155\x63\x72\x61\x66\x74\x5f\x62\137\146\157\x72\x6d\x73\x20\127\110\105\x52\105\40\x69\x64\x3d\x20\x25\x73", array($FL)));
        $Mb = json_decode(stripcslashes($Mb), 1);
        return $Mb["\146\x69\145\154\144\163"];
    }
}
Yt:
