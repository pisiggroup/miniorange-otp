<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\x53\120\x41\124\110")) {
    goto w6C;
}
exit;
w6C:
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
if (class_exists("\x57\x6f\157\103\x6f\155\155\x65\x72\143\x65\x42\151\x6c\x6c\x69\156\x67")) {
    goto Yzm;
}
class WooCommerceBilling extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::WC_BILLING;
        $this->type_phone_tag = "\x6d\157\137\x77\143\x62\x5f\x70\150\x6f\x6e\x65\137\x65\156\x61\x62\154\145";
        $this->type_email_tag = "\x6d\157\x5f\x77\143\x62\137\x65\x6d\x61\151\x6c\x5f\145\x6e\141\142\154\145";
        $this->phone_form_id = "\x23\142\151\x6c\154\x69\156\147\x5f\160\150\x6f\156\145";
        $this->form_key = "\127\103\137\102\111\114\114\x49\116\x47\137\x46\117\x52\115";
        $this->form_name = mo_("\127\157\x6f\x63\x6f\155\155\x65\162\x63\x65\40\102\x69\154\x6c\x69\156\147\x20\x41\144\144\x72\x65\163\163\40\106\157\162\x6d");
        $this->is_form_enabled = get_mo_option("\x77\143\137\x62\151\154\154\x69\156\147\137\145\x6e\x61\142\154\145");
        $this->button_text = get_mo_option("\167\x63\x5f\142\151\154\x6c\x69\156\147\137\x62\165\164\164\x6f\x6e\x5f\164\145\170\x74");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\103\154\151\x63\153\40\110\x65\x72\145\x20\164\x6f\40\163\x65\x6e\144\x20\117\x54\x50");
        $this->form_documents = MoFormDocs::WC_BILLING_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->restrict_duplicates = get_mo_option("\167\x63\137\x62\151\154\x6c\151\156\x67\137\x72\x65\x73\x74\162\x69\143\x74\137\144\165\160\x6c\151\143\x61\x74\145\163");
        $this->otp_type = get_mo_option("\x77\x63\x5f\x62\x69\154\x6c\x69\156\147\x5f\164\171\160\x65\137\145\x6e\141\x62\x6c\145\x64");
        if ($this->otp_type === $this->type_email_tag) {
            goto dOC;
        }
        add_filter("\167\x6f\157\143\157\x6d\x6d\145\x72\143\x65\137\160\x72\157\x63\145\x73\163\137\155\x79\141\x63\143\x6f\165\x6e\x74\137\146\x69\145\154\x64\137\142\151\x6c\154\x69\x6e\147\x5f\x70\x68\157\x6e\145", array($this, "\x6d\x6f\137\x77\143\137\165\x73\x65\162\137\141\143\143\157\165\x6e\164\137\x75\160\144\141\x74\x65"), 99, 1);
        goto GT6;
        dOC:
        add_filter("\167\x6f\x6f\143\157\x6d\x6d\145\x72\x63\x65\x5f\x70\x72\x6f\143\x65\x73\x73\x5f\x6d\171\141\143\x63\157\165\x6e\x74\137\x66\151\x65\154\144\137\x62\151\154\x6c\x69\156\147\x5f\x65\155\x61\151\154", array($this, "\155\157\x5f\167\143\x5f\165\163\x65\x72\x5f\x61\x63\x63\x6f\x75\156\164\137\165\160\x64\x61\x74\145"), 99, 1);
        GT6:
    }
    public function mo_wc_user_account_update($bh)
    {
        $bh = $this->otp_type === $this->type_phone_tag ? MoUtility::process_phone_number($bh) : $bh;
        $R7 = $this->get_verification_type();
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $R7)) {
            goto r3U;
        }
        $this->unset_otp_session_variables();
        return $bh;
        r3U:
        if (!$this->userHasNotChangeData($bh)) {
            goto uVH;
        }
        return $bh;
        uVH:
        if (!($this->restrict_duplicates && $this->isDuplicate($bh, $R7))) {
            goto yRl;
        }
        return $bh;
        yRl:
        MoUtility::initialize_transaction($this->form_session_var);
        $ed = isset($_POST["\142\x69\154\154\x69\156\x67\x5f\145\155\141\x69\x6c"]) ? sanitize_email(wp_unslash($_POST["\142\151\154\154\151\156\x67\137\145\x6d\141\151\154"])) : '';
        $gJ = isset($_POST["\142\151\154\154\x69\x6e\x67\x5f\x70\150\157\156\x65"]) ? sanitize_text_field(wp_unslash($_POST["\x62\151\x6c\x6c\x69\x6e\147\137\160\x68\157\x6e\x65"])) : '';
        $this->send_challenge(null, $ed, null, $gJ, $R7);
        return $bh;
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        $Bo = $this->get_verification_type();
        $ZL = VerificationType::BOTH === $Bo ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Bo, $ZL);
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    private function userHasNotChangeData($bh)
    {
        $GX = $this->getUserData();
        return strcasecmp($GX, $bh) === 0;
    }
    private function getUserData()
    {
        global $wpdb;
        $current_user = wp_get_current_user();
        $a6 = $this->otp_type === $this->type_phone_tag ? "\x62\151\x6c\154\151\x6e\147\x5f\160\x68\x6f\156\x65" : "\142\151\x6c\154\x69\156\147\137\145\x6d\141\x69\154";
        $lR = $wpdb->get_row($wpdb->prepare("\x53\x45\114\105\x43\124\40\155\145\x74\141\x5f\166\x61\154\x75\x65\40\x46\122\117\115\40\x60{$wpdb->prefix}\x75\x73\145\x72\x6d\x65\x74\141\x60\40\x57\110\105\x52\105\x20\140\x6d\x65\164\141\x5f\x6b\145\x79\x60\x20\x3d\40\45\x73\x20\101\116\x44\x20\140\x75\x73\145\162\x5f\x69\x64\140\40\x3d\40\45\x73", array($a6, $current_user->ID)));
        return isset($lR) ? $lR->meta_value : '';
    }
    private function isDuplicate($bh, $R7)
    {
        global $wpdb;
        $a6 = "\142\x69\154\x6c\x69\156\x67\x5f" . $R7;
        $lR = $wpdb->get_row($wpdb->prepare("\123\105\114\105\x43\x54\40\x60\x75\x73\x65\162\x5f\151\144\x60\40\x46\x52\x4f\115\40\140{$wpdb->prefix}\x75\x73\x65\x72\155\145\x74\141\140\x20\x57\110\105\x52\x45\x20\x60\155\145\x74\x61\x5f\153\145\x79\x60\x20\x3d\x20\45\163\x20\101\116\x44\40\x60\155\145\164\x61\x5f\x76\x61\x6c\165\x65\x60\40\x3d\40\40\45\144", array($a6, $bh)));
        if (!isset($lR)) {
            goto wZ1;
        }
        if (VerificationType::PHONE === $R7) {
            goto yc3;
        }
        if (VerificationType::EMAIL === $R7) {
            goto jmZ;
        }
        goto Ouq;
        yc3:
        wc_add_notice(MoMessages::showMessage(MoMessages::PHONE_EXISTS), MoConstants::ERROR_JSON_TYPE);
        goto Ouq;
        jmZ:
        wc_add_notice(MoMessages::showMessage(MoMessages::EMAIL_EXISTS), MoConstants::ERROR_JSON_TYPE);
        Ouq:
        return true;
        wZ1:
        return false;
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled && $this->otp_type === $this->type_phone_tag)) {
            goto H1K;
        }
        array_push($MI, $this->phone_form_id);
        H1K:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto Chc;
        }
        return;
        Chc:
        $this->is_form_enabled = $this->sanitize_form_post("\167\143\x5f\142\151\x6c\x6c\x69\x6e\x67\137\145\x6e\141\x62\x6c\145");
        $this->otp_type = $this->sanitize_form_post("\x77\x63\137\142\151\154\x6c\x69\156\x67\137\164\x79\160\x65\x5f\145\x6e\x61\142\x6c\x65\144");
        $this->restrict_duplicates = $this->sanitize_form_post("\167\x63\x5f\142\x69\154\154\151\x6e\147\x5f\162\x65\x73\x74\162\151\143\x74\137\x64\x75\160\154\x69\x63\141\x74\145\163");
        if (!$this->basic_validation_check(BaseMessages::WC_BILLING_CHOOSE)) {
            goto cnj;
        }
        update_mo_option("\x77\143\137\142\x69\x6c\x6c\151\x6e\147\x5f\145\156\x61\x62\154\x65", $this->is_form_enabled);
        update_mo_option("\x77\143\x5f\142\x69\x6c\154\151\156\x67\x5f\164\171\x70\145\137\x65\x6e\x61\142\154\145\x64", $this->otp_type);
        update_mo_option("\167\143\x5f\142\151\154\x6c\151\156\147\x5f\162\x65\x73\164\x72\x69\x63\x74\137\144\x75\160\154\151\x63\141\x74\x65\x73", $this->restrict_duplicates);
        cnj:
    }
}
Yzm:
