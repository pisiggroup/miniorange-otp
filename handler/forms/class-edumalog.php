<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\123\x50\x41\x54\110")) {
    goto Mt;
}
exit;
Mt:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use WP_Error;
use WP_User;
if (class_exists("\105\x64\165\155\x61\x6c\x6f\147")) {
    goto Gt;
}
class Edumalog extends FormHandler implements IFormHandler
{
    use Instance;
    private $by_pass_admin;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->form_session_var = FormSessionVars::EDUMALOG;
        $this->type_phone_tag = "\x6d\157\x5f\x65\144\165\155\141\x6c\x6f\147\x5f\x70\150\157\x6e\145\x5f\145\156\x61\142\x6c\145";
        $this->type_email_tag = "\x6d\157\x5f\145\x64\165\155\x61\x6c\157\x67\x5f\x65\x6d\141\x69\154\137\x65\156\141\142\154\145";
        $this->form_key = "\x45\x44\x55\115\x41\137\x4c\x4f\x47\111\116";
        $this->form_name = mo_("\x45\x64\x75\155\x61\x20\124\150\145\155\145\40\x4c\x6f\x67\151\156\x20\106\157\x72\x6d");
        $this->is_form_enabled = get_mo_option("\x65\144\x75\x6d\141\x6c\157\x67\x5f\145\x6e\x61\x62\x6c\145");
        $this->phone_form_id = "\x69\x6e\x70\x75\164\x5b\156\x61\x6d\x65\x3d\160\150\x6f\x6e\x65\137\x6e\165\x6d\x62\145\x72\135";
        $this->form_documents = MoFormDocs::EDUMA_LOG;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x65\144\x75\x6d\x61\154\x6f\x67\x5f\x65\x6e\141\142\154\x65\x5f\164\171\x70\x65");
        $this->phone_key = get_mo_option("\145\x64\x75\x6d\x61\154\x6f\x67\x5f\x70\x68\x6f\x6e\145\x5f\x66\151\145\x6c\x64\x5f\x6b\x65\x79");
        $this->by_pass_admin = get_mo_option("\145\x64\165\155\x61\154\x6f\x67\x5f\x62\x79\x70\x61\163\163\137\x61\x64\155\x69\156");
        add_action("\x6c\x6f\147\151\156\x5f\145\x6e\161\x75\145\165\145\137\x73\143\162\151\160\164\163", array($this, "\155\151\156\x69\x6f\x72\141\156\x67\145\137\x72\145\x67\x69\x73\x74\145\162\137\x6c\157\147\151\x6e\x5f\x73\143\x72\151\160\164"));
        add_action("\167\160\137\145\x6e\x71\165\145\x75\145\x5f\x73\143\162\151\x70\x74\x73", array($this, "\x6d\151\x6e\151\x6f\x72\x61\156\x67\x65\137\x72\x65\x67\x69\163\164\145\162\137\x6c\157\147\x69\156\x5f\163\143\162\151\x70\164"));
        add_filter("\x61\165\164\150\x65\156\x74\x69\x63\x61\164\145", array($this, "\150\141\x6e\144\154\x65\137\155\x6f\x5f\x77\x70\x5f\x6c\157\147\151\x6e"), 10, 3);
    }
    public function handle_mo_wp_login($user, $JG, $L8)
    {
        if (MoUtility::is_blank($JG)) {
            goto T2;
        }
        $user = $this->getUser($JG, $L8);
        $PS = get_userdata($user->data->ID);
        $q1 = $PS->roles;
        if (!($this->by_pass_admin && in_array("\x61\x64\x6d\x69\156\151\x73\x74\162\141\164\x6f\x72", $q1, true))) {
            goto FW;
        }
        return;
        FW:
        if (!is_wp_error($user)) {
            goto km;
        }
        return $user;
        km:
        $this->startOTPVerificationProcess($user, $JG, $L8);
        T2:
        return $user;
    }
    public function startOTPVerificationProcess($user, $JG, $L8)
    {
        if (!SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, VerificationType::PHONE)) {
            goto Dt;
        }
        $this->unset_otp_session_variables();
        return;
        Dt:
        if ($this->otp_type === $this->type_phone_tag) {
            goto dL;
        }
        if ($this->otp_type === $this->type_email_tag) {
            goto gV;
        }
        goto jm;
        dL:
        $bV = get_user_meta($user->data->ID, $this->phone_key, true);
        $bV = $this->check_phone_length($bV);
        $this->fetchPhoneAndStartVerification($JG, $L8, $bV);
        goto jm;
        gV:
        $ZG = $user->data->user_email;
        $this->startEmailVerification($JG, $ZG);
        jm:
    }
    public function startEmailVerification($JG, $ZG)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        $this->send_challenge($JG, $ZG, null, null, VerificationType::EMAIL);
    }
    public function fetchPhoneAndStartVerification($JG, $L8, $bV)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        $J3 = isset($_SERVER["\x48\x54\124\120\x5f\x48\x4f\x53\124"]) ? esc_url_raw(wp_unslash($_SERVER["\x48\x54\124\x50\137\110\117\123\124"])) : site_url();
        $Cn = isset($_SERVER["\162\145\x64\151\x72\x65\143\x74\x5f\164\157"]) ? esc_url_raw(wp_unslash($_SERVER["\x72\x65\x64\x69\x72\x65\x63\164\137\164\x6f"])) : null;
        $Ug = null !== $Cn ? $Cn : $J3;
        $this->send_challenge($JG, null, null, $bV, VerificationType::PHONE, $L8, $Ug, false);
    }
    private function check_phone_length($M9)
    {
        $Tc = MoUtility::process_phone_number($M9);
        return strlen($Tc) >= 5 ? $Tc : '';
    }
    public function getUser($JG, $L8 = null)
    {
        $user = is_email($JG) ? get_user_by("\145\155\141\x69\x6c", $JG) : get_user_by("\x6c\x6f\x67\x69\x6e", $JG);
        if (!($this->type_phone_tag && MoUtility::validate_phone_number($JG))) {
            goto bT;
        }
        $JG = MoUtility::process_phone_number($JG);
        $user = $this->getUserFromPhoneNumber($JG);
        bT:
        $user = wp_authenticate_username_password(null, $user->data->user_login, $L8);
        return $user ? $user : new WP_Error("\111\x4e\x56\x41\x4c\111\104\137\125\x53\105\122\x4e\101\x4d\x45", mo_("\40\x3c\x62\76\x45\122\x52\x4f\x52\x3a\x3c\x2f\142\76\x20\x49\156\166\141\154\151\x64\x20\x55\x73\x65\162\116\141\155\145\x2e\40"));
    }
    public function getUserFromPhoneNumber($JG)
    {
        global $wpdb;
        $lR = $wpdb->get_row($wpdb->prepare("\x53\105\114\x45\x43\x54\40\140\165\163\145\162\137\x69\144\x60\40\106\x52\117\115\40\140{$wpdb->prefix}\165\x73\x65\162\x6d\145\x74\141\x60" . "\127\x48\x45\122\x45\40\x60\x6d\145\164\x61\x5f\153\x65\171\x60\x20\x3d\40\45\163\x20\x41\x4e\x44\x20\140\x6d\145\164\141\x5f\166\x61\154\x75\145\x60\x20\x3d\x20\x25\x73", array($this->phone_key, $JG)));
        return !MoUtility::is_blank($lR) ? get_userdata($lR->user_id) : false;
    }
    public function miniorange_register_login_script()
    {
        wp_register_script("\x65\144\165\x75\x6d\141\x6c\x6f\147", MOV_URL . "\151\156\x63\154\165\x64\x65\x73\x2f\x6a\x73\x2f\145\144\165\x6d\141\x6c\157\147\x2e\x6d\x69\156\56\x6a\163", array("\x6a\161\165\145\x72\x79"), MOV_VERSION, true);
        wp_localize_script("\x65\x64\165\x75\155\141\x6c\x6f\147", "\x65\x64\165\165\x6d\141\154\x6f\147", array("\157\164\x70\x5f\x74\x79\160\x65" => $this->get_verification_type(), "\163\x69\164\x65\125\x52\x4c" => wp_ajax_url()));
        wp_enqueue_script("\x65\144\x75\165\155\x61\154\x6f\x67");
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (!SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto il;
        }
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), "\160\x68\157\x6e\x65", false);
        il:
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        if (!(!isset($_POST["\155\157\160\x6f\160\x75\160\x5f\x77\160\156\x6f\x6e\143\x65"]) || !wp_verify_nonce(sanitize_key(wp_unslash($_POST["\155\157\x70\157\x70\x75\x70\137\167\x70\156\157\156\143\145"])), "\x6d\157\137\160\157\x70\165\160\x5f\157\x70\164\x69\x6f\156\163"))) {
            goto ss;
        }
        return;
        ss:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $JG = MoUtility::is_blank($kD) ? MoUtility::sanitize_check("\154\x6f\147", $GX) : $kD;
        $JG = MoUtility::is_blank($JG) ? MoUtility::sanitize_check("\165\163\145\x72\156\x61\155\x65", $GX) : $JG;
        $this->login_wp_user($JG, $ia);
    }
    public function login_wp_user($Zs, $ia = null)
    {
        $user = is_email($Zs) ? get_user_by("\x65\x6d\141\x69\154", $Zs) : (MoUtility::validate_phone_number($Zs) ? $this->getUserFromPhoneNumber(MoUtility::process_phone_number($Zs)) : get_user_by("\154\x6f\x67\x69\x6e", $Zs));
        wp_set_auth_cookie($user->data->ID);
        $this->unset_otp_session_variables();
        do_action("\x77\x70\137\154\x6f\147\x69\156", $user->user_login, $user);
        $mA = MoUtility::is_blank($ia) ? site_url() : $ia;
        wp_safe_redirect($mA);
        exit;
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->form_session_var, $this->tx_session_id));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto YE;
        }
        array_push($MI, $this->phone_form_id);
        YE:
        return $MI;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\x6d\x61\156\x61\x67\145\x5f\157\160\164\x69\157\x6e\163") || !check_admin_referer($this->admin_nonce))) {
            goto Zc;
        }
        return;
        Zc:
        $this->otp_type = $this->sanitize_form_post("\145\x64\x75\155\x61\154\157\147\137\145\x6e\x61\142\154\145\137\164\x79\x70\x65");
        $this->is_form_enabled = $this->sanitize_form_post("\x65\x64\x75\155\141\x6c\x6f\147\x5f\x65\x6e\141\142\x6c\145");
        $this->phone_key = $this->sanitize_form_post("\145\144\165\x6d\x61\x6c\x6f\x67\137\x70\x68\x6f\156\x65\137\x66\x69\x65\154\144\x5f\153\x65\171");
        $this->by_pass_admin = $this->sanitize_form_post("\x65\144\x75\155\x61\154\157\x67\137\142\171\x70\x61\163\163\x5f\x61\144\x6d\x69\156");
        update_mo_option("\x65\x64\165\155\x61\154\x6f\x67\x5f\145\x6e\141\x62\154\x65", $this->is_form_enabled);
        update_mo_option("\145\x64\165\155\x61\154\157\x67\137\x65\x6e\141\x62\x6c\145\x5f\x74\171\x70\145", $this->otp_type);
        update_mo_option("\x65\144\165\x6d\x61\154\x6f\147\x5f\160\x68\x6f\x6e\145\137\x66\x69\x65\x6c\144\137\x6b\145\171", $this->phone_key);
        update_mo_option("\145\144\x75\x6d\141\154\x6f\x67\x5f\x62\171\x70\x61\163\x73\137\x61\x64\x6d\x69\x6e", $this->by_pass_admin);
    }
    public function byPassCheckForAdmins()
    {
        return $this->by_pass_admin;
    }
}
Gt:
