<?php


namespace OTP\Objects;

if (defined("\101\102\x53\120\x41\x54\110")) {
    goto Oaf;
}
exit;
Oaf:
use OTP\Helper\FormList;
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
if (class_exists("\x46\x6f\x72\x6d\110\x61\156\x64\x6c\145\162")) {
    goto ccA;
}
class FormHandler
{
    protected $type_phone_tag;
    protected $type_email_tag;
    protected $type_both_tag;
    protected $form_key;
    protected $verify_field_meta_key;
    protected $form_name;
    protected $otp_type;
    protected $phone_form_id;
    protected $is_form_enabled;
    protected $restrict_duplicates;
    protected $by_pass_login;
    protected $is_login_or_social_form;
    protected $is_ajax_form;
    protected $phone_key;
    protected $email_key;
    protected $button_text;
    protected $form_details;
    protected $disable_auto_activate;
    protected $form_session_var;
    protected $form_session_var2;
    protected $nonce = "\x66\x6f\x72\x6d\x5f\x6e\x6f\x6e\x63\145";
    protected $admin_nonce = "\155\157\x5f\141\144\155\x69\x6e\137\141\x63\x74\151\x6f\x6e\x73";
    protected $tx_session_id = FormSessionVars::TX_SESSION_ID;
    protected $form_option = "\155\157\x5f\143\165\x73\164\x6f\x6d\x65\162\x5f\x76\141\154\151\x64\141\164\x69\x6f\156\137\163\x65\x74\164\151\156\147\163";
    protected $generate_otp_action;
    protected $validate_otp_action;
    protected $nonce_key = "\163\x65\143\x75\162\151\x74\x79";
    protected $is_add_on_form = false;
    protected $form_documents = array();
    const VALIDATED = "\x56\x41\114\111\x44\x41\x54\105\x44";
    const VERIFICATION_FAILED = "\166\x65\x72\x69\x66\x69\143\141\164\151\157\156\137\x66\x61\x69\x6c\x65\x64";
    const VALIDATION_CHECKED = "\x76\x61\154\151\x64\x61\164\151\x6f\156\103\150\x65\143\x6b\145\x64";
    protected function __construct()
    {
        add_action("\141\x64\155\151\156\x5f\x69\x6e\151\164", array($this, "\150\141\156\x64\x6c\x65\137\x66\157\x72\155\x5f\x6f\160\x74\151\157\156\x73"), 2);
        if ($this->is_form_enabled()) {
            goto ZB6;
        }
        return;
        ZB6:
        add_action("\x69\x6e\151\x74", array($this, "\150\141\x6e\144\x6c\145\137\146\x6f\x72\155"), 1);
        add_filter("\155\x6f\x5f\160\150\157\x6e\x65\137\x64\162\x6f\x70\x64\x6f\x77\156\x5f\x73\x65\154\x65\x63\x74\x6f\x72", array($this, "\x67\145\164\137\160\150\157\156\x65\137\x6e\165\155\142\x65\x72\137\x73\x65\154\x65\x63\x74\157\x72"), 1, 1);
        if (!(SessionUtils::is_otp_initialized($this->form_session_var) || SessionUtils::is_otp_initialized($this->form_session_var2))) {
            goto i83;
        }
        add_action("\157\164\160\137\166\145\162\151\146\x69\143\x61\164\151\157\x6e\x5f\x73\x75\x63\143\x65\x73\163\x66\x75\154", array($this, "\150\141\x6e\x64\154\x65\137\x70\157\163\164\x5f\166\x65\x72\151\x66\151\x63\141\164\151\157\156"), 1, 7);
        add_action("\x6f\x74\160\137\166\x65\162\x69\146\x69\x63\141\x74\x69\x6f\x6e\x5f\x66\141\x69\x6c\x65\x64", array($this, "\x68\x61\156\144\x6c\145\137\x66\141\x69\x6c\x65\144\137\x76\145\162\x69\146\x69\x63\x61\x74\x69\157\156"), 1, 4);
        add_action("\x75\156\163\145\164\x5f\x73\145\x73\163\x69\x6f\156\x5f\x76\141\162\151\141\142\154\145", array($this, "\165\156\x73\x65\164\x5f\x6f\x74\160\x5f\163\x65\163\163\x69\157\156\137\x76\141\162\x69\141\x62\154\145\163"), 1, 0);
        i83:
        add_filter("\151\x73\137\x61\x6a\141\x78\x5f\146\x6f\162\155", array($this, "\151\x73\x5f\x61\152\141\x78\x5f\146\x6f\x72\155\137\x69\156\x5f\160\x6c\141\x79"), 1, 1);
        add_filter("\x69\x73\137\154\x6f\x67\x69\x6e\137\x6f\x72\137\163\x6f\143\x69\x61\x6c\x5f\x66\157\x72\155", array($this, "\x69\x73\137\x6c\157\x67\151\x6e\137\157\162\x5f\163\157\x63\151\141\x6c\x5f\x66\x6f\162\155"), 1, 1);
        $xy = FormList::instance();
        $xy->add($this->get_form_key(), $this);
    }
    public function is_login_or_social_form($GM)
    {
        return SessionUtils::is_otp_initialized($this->form_session_var) ? $this->get_is_login_or_social_form() : $GM;
    }
    public function is_ajax_form_in_play($j4)
    {
        return SessionUtils::is_otp_initialized($this->form_session_var) ? $this->is_ajax_form : $j4;
    }
    public function sanitize_form_post($aF, $tG = null)
    {
        $aF = (null === $tG ? "\x6d\157\137\143\x75\163\x74\157\x6d\145\162\137\166\141\154\x69\x64\141\x74\151\157\156\x5f" : '') . $aF;
        if (!(!current_user_can("\155\x61\156\141\x67\x65\137\x6f\x70\x74\x69\157\x6e\x73") || !check_admin_referer($this->admin_nonce))) {
            goto ByA;
        }
        return;
        ByA:
        return MoUtility::sanitize_check($aF, $_POST);
    }
    public function send_challenge($kD, $Wb, $errors, $bV = null, $I2 = "\x65\x6d\x61\x69\154", $L8 = '', $ia = null, $Df = false)
    {
        do_action("\155\157\137\147\x65\x6e\145\162\x61\164\x65\137\157\164\x70", $kD, $Wb, $errors, $bV, $I2, $L8, $ia, $Df);
    }
    public function validate_challenge($I2, $Wg = "\x6d\157\137\157\x74\160\137\x74\x6f\153\145\x6e", $Ns = null)
    {
        do_action("\155\x6f\137\x76\141\x6c\151\x64\141\x74\x65\137\x6f\164\160", $I2, $Wg, $Ns);
    }
    public function basic_validation_check($WZ)
    {
        if (!($this->is_form_enabled() && MoUtility::is_blank($this->otp_type))) {
            goto mTV;
        }
        do_action("\155\x6f\x5f\162\145\x67\x69\x73\164\x72\141\x74\x69\x6f\x6e\137\163\x68\157\167\x5f\x6d\145\163\x73\x61\147\x65", MoMessages::showMessage($WZ), MoConstants::ERROR);
        return false;
        mTV:
        return true;
    }
    public function get_verification_type()
    {
        $OC = array($this->type_phone_tag => VerificationType::PHONE, $this->type_email_tag => VerificationType::EMAIL, $this->type_both_tag => VerificationType::BOTH);
        return MoUtility::is_blank($this->otp_type) ? false : $OC[$this->otp_type];
    }
    protected function validate_ajax_request()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto DRh;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        exit;
        DRh:
    }
    protected function ajax_processing_fields()
    {
        $OC = array($this->type_phone_tag => array(VerificationType::PHONE), $this->type_email_tag => array(VerificationType::EMAIL), $this->type_both_tag => array(VerificationType::PHONE, VerificationType::EMAIL));
        return $OC[$this->otp_type];
    }
    public function get_phone_html_tag()
    {
        return $this->type_phone_tag;
    }
    public function get_email_html_tag()
    {
        return $this->type_email_tag;
    }
    public function get_both_html_tag()
    {
        return $this->type_both_tag;
    }
    public function get_form_key()
    {
        return $this->form_key;
    }
    public function get_verify_field_key()
    {
        return $this->verify_field_meta_key;
    }
    public function get_form_name()
    {
        return $this->form_name;
    }
    public function get_otp_type_enabled()
    {
        return $this->otp_type;
    }
    public function disable_auto_activation()
    {
        return $this->disable_auto_activate;
    }
    public function get_phone_key_details()
    {
        return $this->phone_key;
    }
    public function get_email_key_details()
    {
        return $this->email_key;
    }
    public function is_form_enabled()
    {
        return $this->is_form_enabled;
    }
    public function get_button_text()
    {
        return mo_($this->button_text);
    }
    public function get_form_details()
    {
        return $this->form_details;
    }
    public function restrict_duplicates()
    {
        return $this->restrict_duplicates;
    }
    public function bypass_for_logged_in_users()
    {
        return $this->by_pass_login;
    }
    public function get_is_login_or_social_form()
    {
        return (bool) $this->is_login_or_social_form;
    }
    public function get_form_option()
    {
        return $this->form_option;
    }
    public function is_ajax_form()
    {
        return $this->is_ajax_form;
    }
    public function is_add_on_form()
    {
        return $this->is_add_on_form;
    }
    public function get_form_documents()
    {
        return $this->form_documents;
    }
}
ccA:
