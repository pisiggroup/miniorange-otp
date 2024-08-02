<?php


namespace OTP\Handler\Forms;

if (defined("\101\x42\x53\120\x41\124\x48")) {
    goto Gj;
}
exit;
Gj:
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
if (class_exists("\106\157\x72\x6d\115\x61\153\145\162")) {
    goto RA;
}
class FormMaker extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::FORM_MAKER;
        $this->type_phone_tag = "\155\157\x5f\146\157\162\x6d\x5f\155\141\153\x65\162\x5f\160\x68\x6f\156\145\137\145\156\141\x62\x6c\x65";
        $this->type_email_tag = "\x6d\x6f\137\x66\157\x72\155\137\x6d\x61\153\145\162\x5f\x65\x6d\141\x69\154\137\145\x6e\x61\142\x6c\145";
        $this->form_name = mo_("\106\157\162\155\x20\115\x61\153\x65\x72\40\106\x6f\x72\x6d");
        $this->form_key = "\x46\117\122\x4d\137\115\101\x4b\x45\122";
        $this->is_form_enabled = get_mo_option("\146\x6f\162\155\x6d\141\x6b\145\162\137\145\156\x61\142\154\x65");
        $this->otp_type = get_mo_option("\x66\157\x72\155\x6d\141\x6b\145\x72\137\145\x6e\141\142\x6c\x65\x5f\x74\171\x70\x65");
        $this->form_details = maybe_unserialize(get_mo_option("\x66\x6f\x72\155\x6d\141\153\x65\x72\137\157\164\160\137\x65\156\x61\142\154\x65\x64"));
        $this->button_text = get_mo_option("\146\157\x72\155\x6d\141\153\145\x72\x5f\142\165\x74\x74\x6f\156\x5f\164\x65\170\164");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\103\x6c\x69\143\x6b\x20\110\x65\x72\x65\x20\164\x6f\x20\163\x65\x6e\x64\40\117\x54\120");
        $this->form_documents = MoFormDocs::FORMMAKER;
        parent::__construct();
        if (!$this->is_form_enabled) {
            goto j2;
        }
        add_action("\167\x70\137\145\x6e\x71\x75\x65\x75\x65\x5f\163\x63\x72\x69\160\x74\163", array($this, "\162\145\x67\x69\163\164\145\x72\137\146\x6d\137\x62\x75\x74\164\157\x6e\137\163\x63\x72\151\160\x74"));
        j2:
    }
    public function handle_form()
    {
        $this->routeData();
    }
    private function routeData()
    {
        if (array_key_exists("\x6d\x6f\137\x66\162\x6d\137\x6f\160\x74\x69\157\x6e", $_GET)) {
            goto Rn;
        }
        return;
        Rn:
        if (check_ajax_referer($this->nonce, "\x73\x65\x63\x75\x72\x69\164\171", false)) {
            goto gj;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        gj:
        $CB = isset($_GET["\x6d\157\137\146\162\x6d\x5f\x6f\160\164\151\x6f\x6e"]) ? sanitize_text_field(wp_unslash($_GET["\x6d\x6f\x5f\x66\162\x6d\137\157\160\x74\151\157\x6e"])) : '';
        $GX = MoUtility::mo_sanitize_array($_POST);
        switch (trim($CB)) {
            case "\155\x69\x6e\x69\x6f\162\141\x6e\147\145\x2d\146\155\x2d\141\x6a\141\x78\55\166\145\162\151\x66\x79":
                $this->mo_send_otp_fm_ajax_verify($GX);
                goto iM;
            case "\155\151\156\151\157\x72\x61\156\x67\x65\x2d\146\155\x2d\166\x65\162\x69\x66\171\x2d\x63\157\144\145":
                $this->mo_validate_otp($GX);
                goto iM;
        }
        uT:
        iM:
    }
    private function mo_validate_otp($post)
    {
        $this->validate_challenge($this->get_verification_type(), null, sanitize_text_field($post["\x6f\164\160\137\x74\x6f\153\x65\x6e"]));
    }
    private function mo_send_otp_fm_ajax_verify($GX)
    {
        if ($this->otp_type === $this->type_phone_tag) {
            goto ud;
        }
        $this->mo_send_fm_ajax_otp_to_email($GX);
        goto Ev;
        ud:
        $this->mo_send_fm_ajax_otp_to_phone($GX);
        Ev:
    }
    private function mo_send_fm_ajax_otp_to_phone($GX)
    {
        if (!MoUtility::sanitize_check("\165\x73\145\x72\x5f\x70\x68\157\156\x65", $GX)) {
            goto vP;
        }
        $this->sendOTP(trim($GX["\165\163\x65\162\x5f\x70\150\157\156\x65"]), null, trim($GX["\x75\x73\145\162\x5f\x70\150\x6f\156\145"]), VerificationType::PHONE);
        goto EI;
        vP:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        EI:
    }
    private function mo_send_fm_ajax_otp_to_email($GX)
    {
        if (!MoUtility::sanitize_check("\x75\x73\145\x72\x5f\145\x6d\141\x69\154", $GX)) {
            goto tK;
        }
        $this->sendOTP($GX["\x75\163\x65\x72\x5f\x65\x6d\x61\x69\x6c"], $GX["\165\163\145\x72\137\x65\155\x61\151\x6c"], null, VerificationType::EMAIL);
        goto Mj;
        tK:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        Mj:
    }
    private function checkPhoneOrEmailIntegrity($c6)
    {
        if ($this->get_verification_type() === VerificationType::PHONE) {
            goto xY;
        }
        return SessionUtils::is_email_verified_match($this->form_session_var, $c6);
        goto Ig;
        xY:
        return SessionUtils::is_phone_verified_match($this->form_session_var, $c6);
        Ig:
    }
    private function sendOTP($Pl, $Wb, $lC, $I2)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (VerificationType::PHONE === $I2) {
            goto hk;
        }
        SessionUtils::add_email_verified($this->form_session_var, $Pl);
        goto LH;
        hk:
        SessionUtils::add_phone_verified($this->form_session_var, $Pl);
        LH:
        $this->send_challenge('', $Wb, null, $lC, $I2);
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto pX;
        }
        return;
        pX:
        wp_send_json(MoUtility::create_json(MoUtility::get_invalid_otp_method(), MoConstants::ERROR_JSON_TYPE));
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        $FS = !empty(sanitize_text_field(wp_unslash($_POST["\x73\x75\x62\137\146\151\x65\x6c\x64"]))) ? sanitize_text_field(wp_unslash($_POST["\163\165\142\x5f\x66\x69\145\154\144"])) : '';
        if ($this->checkPhoneOrEmailIntegrity(sanitize_text_field($FS))) {
            goto N2;
        }
        if ($this->otp_type === $this->type_phone_tag) {
            goto Im;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        goto LL;
        N2:
        $this->unset_otp_session_variables();
        wp_send_json(MoUtility::create_json(self::VALIDATED, MoConstants::SUCCESS_JSON_TYPE));
        goto LL;
        Im:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        LL:
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->get_verification_type() === VerificationType::PHONE)) {
            goto MI;
        }
        array_push($MI, $this->phone_form_id);
        MI:
        return $MI;
    }
    public function register_fm_button_script()
    {
        wp_register_script("\x66\x6d\157\x74\x70\x62\165\x74\164\x6f\x6e\x73\x63\162\151\160\164", MOV_URL . "\151\x6e\x63\x6c\165\x64\x65\163\57\x6a\163\x2f\146\157\162\x6d\x6d\x61\153\x65\x72\x2e\155\x69\156\56\x6a\163", array("\x6a\x71\165\145\162\171"), MOV_VERSION, true);
        wp_localize_script("\x66\155\x6f\x74\x70\142\165\x74\x74\x6f\x6e\x73\143\x72\x69\160\164", "\x6d\x6f\146\x6d\166\141\162", array("\163\151\164\x65\x55\122\x4c" => site_url(), "\x6f\164\x70\x54\171\160\145" => $this->otp_type, "\x66\x6f\x72\x6d\104\x65\164\x61\151\x6c\163" => $this->form_details, "\x6e\157\x6e\143\145" => wp_create_nonce($this->nonce), "\x62\165\x74\164\x6f\156\x74\x65\x78\164" => mo_($this->button_text), "\x69\155\147\125\x52\x4c" => MOV_URL . "\151\156\143\154\165\x64\x65\163\x2f\151\x6d\141\147\145\x73\x2f\154\x6f\141\x64\x65\162\x2e\x67\151\x66"));
        wp_enqueue_script("\146\x6d\x6f\x74\x70\x62\x75\164\x74\157\156\163\x63\162\x69\160\x74");
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\155\141\x6e\x61\147\x65\137\157\x70\x74\x69\x6f\x6e\x73") || !check_admin_referer($this->admin_nonce))) {
            goto DF;
        }
        return;
        DF:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $form = $this->parseFormDetails($GX);
        $this->form_details = !empty($form) ? $form : '';
        $this->otp_type = $this->sanitize_form_post("\146\x6d\137\x65\x6e\141\x62\154\x65\x5f\164\171\x70\145");
        $this->is_form_enabled = $this->sanitize_form_post("\146\155\x5f\x65\156\141\142\154\x65");
        $this->button_text = $this->sanitize_form_post("\146\155\x5f\142\165\x74\x74\x6f\156\137\164\145\170\x74");
        if (!$this->basic_validation_check(BaseMessages::FORMMAKER_CHOOSE)) {
            goto bm;
        }
        update_mo_option("\x66\x6f\162\155\155\x61\x6b\x65\162\137\145\x6e\x61\x62\154\x65", $this->is_form_enabled);
        update_mo_option("\146\157\162\x6d\155\x61\x6b\x65\x72\x5f\145\156\141\x62\154\145\x5f\164\x79\160\x65", $this->otp_type);
        update_mo_option("\146\157\162\x6d\x6d\141\153\x65\162\137\157\164\x70\137\x65\x6e\141\142\154\x65\x64", maybe_serialize($this->form_details));
        update_mo_option("\146\x6f\x72\155\155\141\x6b\x65\162\137\142\165\164\x74\157\x6e\137\164\x65\x78\x74", $this->button_text);
        bm:
    }
    private function parseFormDetails($GX)
    {
        $form = array();
        if (array_key_exists("\x66\x6f\x72\155\155\x61\x6b\x65\x72\x5f\x66\157\162\155", $GX)) {
            goto Ax;
        }
        return array();
        Ax:
        $mN = isset($GX["\146\157\x72\155\x6d\x61\153\x65\162\x5f\146\157\x72\155"]["\x66\157\162\x6d"]) ? MoUtility::mo_sanitize_array(wp_unslash($GX["\x66\157\x72\155\x6d\x61\x6b\x65\162\x5f\146\157\162\x6d"]["\x66\157\x72\x6d"])) : '';
        foreach (array_filter($mN) as $a6 => $bh) {
            $bh = sanitize_text_field($bh);
            $form[$bh] = array("\x65\x6d\x61\151\154\x6b\x65\171" => isset($GX["\146\157\x72\x6d\155\x61\x6b\x65\x72\137\146\157\x72\x6d"]["\145\x6d\x61\x69\154\153\x65\171"][$a6]) ? $this->mo_get_efield_id(sanitize_text_field(wp_unslash($GX["\146\157\x72\x6d\155\x61\x6b\145\162\137\x66\x6f\162\155"]["\145\x6d\x61\151\x6c\153\x65\x79"][$a6])), $bh) : '', "\x70\x68\x6f\156\145\153\145\171" => isset($GX["\x66\157\162\x6d\x6d\x61\x6b\145\162\x5f\x66\157\x72\x6d"]["\x70\150\157\x6e\x65\153\145\171"][$a6]) ? $this->mo_get_efield_id(sanitize_text_field(wp_unslash($GX["\x66\x6f\162\155\x6d\x61\153\x65\162\x5f\146\157\x72\155"]["\160\x68\157\x6e\x65\x6b\x65\171"][$a6])), $bh) : '', "\166\x65\x72\151\x66\x79\113\145\171" => isset($GX["\146\157\x72\155\x6d\x61\x6b\145\162\x5f\x66\x6f\162\155"]["\x76\145\x72\x69\x66\171\113\x65\x79"][$a6]) ? $this->mo_get_efield_id(sanitize_text_field(wp_unslash($GX["\x66\x6f\162\155\x6d\x61\x6b\x65\162\137\146\x6f\162\155"]["\166\x65\x72\151\x66\x79\x4b\145\x79"][$a6])), $bh) : '', "\160\x68\x6f\156\145\137\163\x68\x6f\x77" => isset($GX["\x66\157\x72\x6d\155\x61\153\145\162\x5f\x66\x6f\162\x6d"]["\160\x68\157\156\x65\x6b\145\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x66\x6f\162\x6d\x6d\x61\x6b\x65\x72\137\x66\x6f\x72\x6d"]["\160\x68\x6f\x6e\145\x6b\145\x79"][$a6])) : '', "\x65\x6d\x61\x69\154\x5f\163\x68\157\167" => isset($GX["\146\157\x72\155\x6d\x61\153\145\162\137\x66\157\x72\155"]["\145\x6d\x61\x69\154\x6b\145\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\146\x6f\162\155\x6d\x61\x6b\145\162\137\146\x6f\x72\155"]["\145\x6d\141\x69\x6c\153\x65\x79"][$a6])) : '', "\x76\145\162\x69\146\171\137\x73\150\x6f\167" => isset($GX["\x66\x6f\x72\155\x6d\141\153\145\162\x5f\146\157\162\x6d"]["\x76\145\x72\x69\x66\x79\113\x65\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x66\157\x72\155\x6d\x61\153\x65\162\x5f\x66\x6f\162\155"]["\x76\x65\162\x69\x66\x79\x4b\145\x79"][$a6])) : '');
            ao:
        }
        RT:
        return $form;
    }
    private function mo_get_efield_id($Ys, $form)
    {
        global $wpdb;
        $xI = $wpdb->get_row($wpdb->prepare("\123\x45\114\105\x43\x54\40\52\40\x46\122\117\x4d\x20{$wpdb->prefix}\146\157\x72\x6d\155\141\153\x65\x72\x20\x77\x68\x65\162\145\x20\140\151\x64\x60\x20\75\40\45\x73", array($form)));
        if (!MoUtility::is_blank($xI)) {
            goto Sx;
        }
        return '';
        Sx:
        $Z3 = explode("\x2a\72\x2a\x6e\x65\x77\x5f\x66\x69\145\154\x64\x2a\72\x2a", $xI->form_fields);
        $LM = array();
        $iu = array();
        $tU = array();
        foreach ($Z3 as $Jw) {
            $Eb = explode("\52\x3a\52\151\144\52\72\52", $Jw);
            if (MoUtility::is_blank($Eb)) {
                goto DB;
            }
            array_push($LM, $Eb[0]);
            if (!array_key_exists(1, $Eb)) {
                goto Mu;
            }
            $Eb = explode("\52\x3a\x2a\164\171\x70\x65\52\72\x2a", $Eb[1]);
            array_push($iu, $Eb[0]);
            $Eb = explode("\x2a\72\x2a\x77\137\x66\x69\x65\154\144\x5f\154\141\142\145\x6c\x2a\72\52", $Eb[1]);
            Mu:
            array_push($tU, $Eb[0]);
            DB:
            hW:
        }
        ZE:
        $a6 = array_search($Ys, $tU, true);
        return "\43\x77\x64\146\157\x72\155\x5f" . $LM[$a6] . "\137\x65\x6c\x65\x6d\145\x6e\x74" . $form;
    }
}
RA:
