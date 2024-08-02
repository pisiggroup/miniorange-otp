<?php


namespace OTP\Addons\CustomMessage\Handler;

if (defined("\x41\x42\x53\120\x41\x54\x48")) {
    goto jb;
}
exit;
jb:
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoUtility;
use OTP\Objects\BaseAddOnHandler;
use OTP\Objects\BaseMessages;
use OTP\Traits\Instance;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoFormDocs;
if (class_exists("\x43\165\x73\x74\x6f\x6d\x4d\145\163\163\141\x67\x65\x73")) {
    goto Vd;
}
class CustomMessages extends BaseAddOnHandler
{
    use Instance;
    protected $addon_session_var;
    public $admin_actions = array("\155\x6f\137\143\165\x73\164\x6f\x6d\x65\162\x5f\166\141\x6c\x69\x64\x61\x74\x69\157\156\x5f\141\x64\155\151\156\137\x63\x75\163\164\x6f\x6d\x5f\x70\x68\157\156\145\x5f\x6e\157\x74\x69\x66" => "\155\x6f\x5f\166\x61\x6c\x69\144\x61\x74\151\157\x6e\137\x73\145\156\144\137\x73\155\163\x5f\x6e\x6f\164\151\x66\x5f\155\x73\x67", "\155\x6f\137\143\x75\163\x74\x6f\155\x65\162\x5f\x76\x61\154\151\x64\141\164\x69\157\156\x5f\141\x64\x6d\151\x6e\x5f\x63\165\x73\164\157\155\x5f\x65\x6d\x61\x69\154\x5f\156\157\x74\x69\x66" => "\x6d\x6f\x5f\166\x61\154\151\144\141\x74\x69\x6f\156\x5f\x73\145\156\144\x5f\x65\155\141\x69\154\137\x6e\157\164\x69\146\x5f\155\x73\x67");
    public function __construct()
    {
        parent::__construct();
        $this->nonce = "\x6d\x6f\137\141\144\x6d\x69\x6e\x5f\141\143\x74\151\157\156\x73";
        if ($this->moAddOnV()) {
            goto G0;
        }
        return;
        G0:
        $this->addon_session_var = "\x63\165\163\x74\157\x6d\137\x6d\x65\x73\x73\x61\x67\145\x5f\x61\144\144\x6f\x6e";
        $this->send_admin_notification();
        foreach ($this->admin_actions as $jc => $ge) {
            add_action("\x77\x70\x5f\141\x6a\141\170\137{$jc}", array($this, $ge));
            add_action("\x61\x64\155\151\156\137\160\x6f\163\164\137{$jc}", array($this, $ge));
            VU:
        }
        Q8:
    }
    public function send_admin_notification()
    {
        if (!MoPHPSessions::get_session_var($this->addon_session_var)) {
            goto rt;
        }
        MoConstants::SUCCESS_JSON_TYPE === MoPHPSessions::get_session_var($this->addon_session_var)["\x72\145\x73\x75\x6c\164"] ? do_action("\155\157\x5f\162\145\147\151\163\x74\x72\141\164\151\x6f\156\x5f\163\x68\157\x77\x5f\x6d\x65\x73\163\x61\x67\145", MoPHPSessions::get_session_var($this->addon_session_var)["\x6d\x65\163\x73\x61\147\x65"], MoConstants::CUSTOM_MESSAGE_ADDON_SUCCESS) : do_action("\155\x6f\x5f\x72\145\x67\151\163\164\x72\141\164\x69\157\x6e\137\x73\x68\x6f\x77\x5f\x6d\x65\163\x73\141\x67\x65", MoPHPSessions::get_session_var($this->addon_session_var)["\x6d\145\163\163\x61\147\x65"], MoConstants::CUSTOM_MESSAGE_ADDON_ERROR);
        $this->unset_sessionVariables();
        rt:
    }
    public function unset_sessionVariables()
    {
        MoPHPSessions::unset_session($this->addon_session_var);
    }
    public function mo_validation_send_sms_notif_msg()
    {
        if (!(!isset($_POST["\163\x65\x63\165\162\151\164\x79"]) || !wp_verify_nonce(sanitize_key(wp_unslash($_POST["\x73\145\143\165\x72\x69\164\171"])), $this->nonce))) {
            goto Pq;
        }
        if (MoUtility::sanitize_check("\141\152\141\170\137\155\x6f\144\145", $_POST)) {
            goto qY;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
        goto p1;
        qY:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        p1:
        Pq:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $Eo = explode("\x3b", MoUtility::sanitize_check("\x6d\x6f\x5f\x70\150\x6f\x6e\145\x5f\156\165\155\142\145\162\163", $GX));
        $WZ = MoUtility::sanitize_check("\155\x6f\137\143\x75\163\x74\157\x6d\145\x72\137\x76\141\x6c\151\144\141\164\x69\x6f\x6e\x5f\x63\165\x73\164\157\155\137\x73\155\163\137\x6d\x73\x67", $GX);
        $U0 = null;
        foreach ($Eo as $M9) {
            $U0 = MoUtility::send_phone_notif($M9, $WZ);
            Ec:
        }
        Nb:
        MoUtility::sanitize_check("\x61\x6a\x61\170\137\x6d\157\144\145", $_POST) ? $this->checkStatusAndSendJSON($U0) : $this->checkStatusAndShowMessage($U0);
    }
    public function mo_validation_send_email_notif_msg()
    {
        if (MoUtility::sanitize_check("\x61\152\x61\x78\x5f\155\157\144\x65", $_POST)) {
            goto J6;
        }
        if (!(!current_user_can("\155\141\x6e\x61\147\x65\137\x6f\x70\x74\x69\157\156\x73") || !check_admin_referer($this->nonce))) {
            goto wu;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
        wu:
        goto d2;
        J6:
        if (check_ajax_referer($this->nonce, "\x73\x65\143\165\162\151\x74\x79")) {
            goto lj;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        lj:
        d2:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $RN = explode("\73", MoUtility::sanitize_check("\x74\x6f\x45\x6d\x61\x69\x6c", $GX));
        $U0 = null;
        foreach ($RN as $ZG) {
            $U0 = MoUtility::send_email_notif(isset($GX["\146\162\157\x6d\105\155\x61\x69\154"]) ? sanitize_email(wp_unslash($GX["\x66\x72\157\155\x45\155\141\151\x6c"])) : '', isset($GX["\x66\x72\x6f\x6d\116\x61\x6d\x65"]) ? sanitize_text_field(wp_unslash($GX["\146\x72\157\155\116\x61\x6d\145"])) : '', sanitize_email($ZG), isset($GX["\x73\165\142\152\145\x63\x74"]) ? sanitize_text_field(wp_unslash($GX["\x73\x75\x62\x6a\145\143\164"])) : '', isset($GX["\143\157\x6e\164\x65\156\x74"]) ? stripslashes(sanitize_text_field(wp_unslash($GX["\143\157\156\x74\145\156\164"]))) : '');
            bk:
        }
        UT:
        MoUtility::sanitize_check("\141\x6a\141\x78\x5f\155\157\x64\x65", $_POST) ? $this->checkStatusAndSendJSON($U0) : $this->checkStatusAndShowMessage($U0);
    }
    private function checkStatusAndShowMessage($U0)
    {
        if (!is_null($U0)) {
            goto mr;
        }
        return;
        mr:
        $j6 = $U0 ? MoConstants::SUCCESS : MoConstants::ERROR;
        if (MoConstants::SUCCESS === $j6) {
            goto QD;
        }
        MoPHPSessions::add_session_var($this->addon_session_var, MoUtility::create_json(MoMessages::showMessage(BaseMessages::CUSTOM_MSG_SENT_FAIL), MoConstants::ERROR_JSON_TYPE));
        goto cL;
        QD:
        MoPHPSessions::add_session_var($this->addon_session_var, MoUtility::create_json(MoMessages::showMessage(BaseMessages::CUSTOM_MSG_SENT), MoConstants::SUCCESS_JSON_TYPE));
        cL:
        wp_safe_redirect(wp_get_referer());
        exit;
    }
    private function checkStatusAndSendJSON($U0)
    {
        if (!is_null($U0)) {
            goto D5;
        }
        return;
        D5:
        if ($U0) {
            goto QO;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::CUSTOM_MSG_SENT_FAIL), MoConstants::ERROR_JSON_TYPE));
        goto fe;
        QO:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::CUSTOM_MSG_SENT), MoConstants::SUCCESS_JSON_TYPE));
        fe:
    }
    public function set_addon_key()
    {
        $this->add_on_key = "\x63\165\x73\164\157\x6d\x5f\x6d\x65\x73\x73\141\147\145\x73\137\141\144\x64\x6f\156";
    }
    public function set_add_on_desc()
    {
        $this->add_on_desc = mo_("\123\x65\156\x64\x20\x43\165\163\164\x6f\155\151\x7a\x65\144\x20\155\x65\163\x73\x61\x67\x65\x20\x74\157\x20\x61\156\x79\x20\x70\x68\157\x6e\145\x20\x6f\162\40\x65\155\x61\151\154\x20\144\x69\x72\x65\143\164\154\x79\x20\x66\162\157\155\x20\164\150\x65\40\x64\141\163\150\x62\157\x61\162\x64\56");
    }
    public function set_add_on_name()
    {
        $this->addon_name = mo_("\x43\x75\163\x74\x6f\x6d\x20\115\x65\x73\163\x61\x67\x65\x73");
    }
    public function set_add_on_docs()
    {
        $this->add_on_docs = MoFormDocs::CUSTOM_MESSAGES_ADDON_LINK["\x67\x75\x69\144\145\114\x69\x6e\153"];
    }
    public function set_add_on_video()
    {
        $this->add_on_video = MoFormDocs::CUSTOM_MESSAGES_ADDON_LINK["\166\x69\x64\x65\157\114\x69\156\x6b"];
    }
    public function set_settings_url()
    {
        $L1 = isset($_SERVER["\x52\105\x51\x55\105\123\124\137\x55\x52\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\x52\x45\121\x55\x45\123\x54\137\125\122\111"])) : '';
        $this->settings_url = add_query_arg(array("\x61\x64\x64\x6f\156" => "\143\165\x73\164\x6f\x6d"), $L1);
    }
}
Vd:
