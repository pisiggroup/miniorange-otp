<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\123\x50\101\124\x48")) {
    goto YtV;
}
exit;
YtV:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use ReflectionException;
use WP_Error;
use WP_User;
if (class_exists("\x57\120\x4c\157\x67\x69\x6e\106\157\x72\155")) {
    goto yNF;
}
class WPLoginForm extends FormHandler implements IFormHandler
{
    use Instance;
    private $save_phone_numbers;
    private $by_pass_admin;
    private $allow_login_through_phone;
    private $skip_password_check;
    private $user_label;
    private $delay_otp;
    private $delay_otp_interval;
    private $skip_pass_fallback;
    private $create_user_action;
    private $time_stamp_meta_key = "\155\157\166\x5f\x6c\x61\163\164\x5f\x76\x65\162\x69\146\x69\x65\144\x5f\144\164\x74\155";
    private $redirect_to_page;
    protected function __construct()
    {
        $this->is_login_or_social_form = true;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::WP_LOGIN_REG_PHONE;
        $this->form_session_var2 = FormSessionVars::WP_DEFAULT_LOGIN;
        $this->phone_form_id = "\43\x6d\157\x5f\160\150\157\156\145\x5f\x6e\x75\x6d\x62\x65\x72";
        $this->type_phone_tag = "\155\157\x5f\x77\160\137\154\157\x67\x69\x6e\137\160\x68\x6f\x6e\145\137\145\x6e\x61\x62\x6c\145";
        $this->type_email_tag = "\155\x6f\x5f\x77\160\x5f\154\x6f\147\151\156\x5f\145\155\x61\x69\154\137\x65\x6e\x61\x62\x6c\x65";
        $this->form_key = "\x57\120\x5f\104\x45\x46\x41\125\114\124\137\114\117\x47\x49\x4e";
        $this->form_name = mo_("\x57\157\162\x64\x50\162\x65\x73\x73\x20\57\40\127\x6f\157\103\x6f\x6d\155\x65\x72\x63\145\x20\x2f\40\x55\x6c\164\x69\x6d\x61\x74\x65\40\115\145\x6d\x62\x65\162\x20\x4c\157\147\x69\x6e\x20\106\157\x72\155");
        $this->is_form_enabled = get_mo_option("\x77\160\137\x6c\x6f\x67\151\156\137\x65\x6e\x61\x62\x6c\145");
        $this->user_label = get_mo_option("\x77\160\x5f\x75\x73\145\162\x6e\141\x6d\x65\x5f\x6c\x61\x62\145\154\137\164\145\x78\164");
        $this->user_label = $this->user_label ? mo_($this->user_label) : mo_("\125\x73\x65\x72\x6e\141\x6d\145\x2c\40\105\55\155\x61\151\154\x20\x6f\162\x20\x50\x68\x6f\x6e\x65\x20\116\x6f\56");
        $this->skip_password_check = get_mo_option("\x77\160\137\x6c\157\x67\x69\x6e\x5f\163\x6b\x69\x70\137\x70\141\x73\x73\167\157\x72\144");
        $this->allow_login_through_phone = get_mo_option("\167\x70\x5f\x6c\157\x67\151\156\x5f\x61\x6c\154\x6f\x77\137\x70\x68\x6f\x6e\x65\137\x6c\157\147\151\156");
        $this->skip_pass_fallback = get_mo_option("\x77\160\x5f\154\x6f\x67\x69\156\137\163\153\151\x70\137\160\141\x73\163\x77\157\x72\144\137\146\x61\154\x6c\x62\141\143\153");
        $this->delay_otp = get_mo_option("\167\x70\x5f\x6c\x6f\x67\x69\156\137\144\145\x6c\x61\171\x5f\x6f\164\x70");
        $this->delay_otp_interval = get_mo_option("\167\160\x5f\x6c\157\147\x69\156\x5f\144\x65\154\141\171\137\157\164\x70\137\x69\x6e\164\145\162\166\x61\154");
        $this->delay_otp_interval = $this->delay_otp_interval ? $this->delay_otp_interval : 43800;
        $this->form_documents = MoFormDocs::LOGIN_FORM;
        if (!($this->skip_password_check || $this->allow_login_through_phone)) {
            goto K6b;
        }
        add_action("\x6c\157\x67\151\156\x5f\145\156\161\x75\145\165\x65\x5f\x73\143\x72\x69\160\x74\163", array($this, "\x6d\151\156\151\157\x72\141\156\x67\x65\137\162\x65\x67\151\163\164\x65\x72\x5f\154\157\147\x69\156\137\x73\143\x72\151\x70\164"));
        add_action("\167\160\x5f\145\156\x71\x75\x65\165\145\137\163\x63\162\x69\x70\164\x73", array($this, "\x6d\x69\156\x69\x6f\x72\141\156\x67\x65\137\x72\x65\147\151\163\164\x65\x72\x5f\x6c\x6f\147\151\x6e\137\x73\x63\x72\x69\x70\164"));
        K6b:
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\167\x70\x5f\154\x6f\x67\151\156\x5f\145\x6e\141\142\154\145\x5f\164\171\160\145");
        $this->phone_key = get_mo_option("\x77\x70\137\x6c\157\147\x69\x6e\137\153\145\171");
        $this->save_phone_numbers = get_mo_option("\167\x70\137\x6c\157\x67\x69\x6e\x5f\162\x65\147\151\163\x74\x65\x72\x5f\160\x68\157\x6e\x65");
        $this->by_pass_admin = get_mo_option("\167\160\137\154\x6f\147\151\156\137\142\x79\160\141\163\x73\137\141\144\155\x69\x6e");
        $this->restrict_duplicates = get_mo_option("\x77\x70\x5f\154\x6f\x67\151\156\x5f\162\145\x73\x74\x72\x69\143\x74\x5f\x64\165\x70\154\x69\x63\x61\x74\145\x73");
        $this->redirect_to_page = get_mo_option("\154\157\147\x69\156\x5f\x63\165\x73\164\157\155\137\162\x65\x64\151\x72\145\x63\164");
        add_filter("\141\x75\x74\150\x65\x6e\x74\151\x63\141\164\145", array($this, "\x6d\157\x5f\150\x61\156\144\x6c\145\x5f\155\157\137\x77\160\137\x6c\x6f\x67\x69\x6e"), 99, 3);
        add_action("\x77\x70\137\x61\152\141\170\137\x6d\157\x2d\141\x64\155\x69\156\x2d\143\x68\145\x63\153", array($this, "\151\163\x41\x64\155\x69\x6e"));
        add_action("\167\160\x5f\x61\152\x61\x78\137\156\157\x70\162\151\166\137\155\x6f\55\x61\144\x6d\x69\x6e\x2d\143\150\x65\x63\x6b", array($this, "\x69\x73\101\144\x6d\151\156"));
        if (!class_exists("\125\x4d")) {
            goto CWf;
        }
        add_filter("\167\x70\x5f\x61\165\164\x68\x65\156\164\x69\143\x61\164\x65\137\x75\x73\x65\162", array($this, "\155\x6f\137\147\x65\164\x5f\141\x6e\144\x5f\x72\145\x74\165\162\x6e\137\x75\x73\x65\162"), 99, 2);
        CWf:
        $this->routeData();
    }
    public function isAdmin()
    {
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto Soj;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        exit;
        Soj:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        $JG = MoUtility::sanitize_check("\165\163\x65\162\156\141\x6d\145", $w3);
        $user = is_email($JG) ? get_user_by("\145\155\x61\151\154", $JG) : get_user_by("\154\x6f\147\x69\x6e", $JG);
        $vC = MoConstants::SUCCESS_JSON_TYPE;
        $vC = $user ? in_array("\141\x64\x6d\x69\x6e\151\x73\164\x72\x61\164\x6f\x72", $user->roles, true) ? $vC : "\x65\x72\x72\x6f\x72" : "\145\162\x72\157\162";
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_EXISTS), $vC));
    }
    private function routeData()
    {
        if (array_key_exists("\155\157\137\145\170\x74\x65\162\156\x61\x6c\x5f\160\157\x70\165\x70\137\x6f\x70\x74\x69\157\x6e", $_REQUEST)) {
            goto Btr;
        }
        return;
        Btr:
        if (check_ajax_referer("\155\157\x5f\x70\x6f\160\x75\x70\137\157\x70\164\151\x6f\156\x73", "\155\x6f\160\157\160\x75\x70\137\167\x70\156\157\x6e\143\145", false)) {
            goto Ycq;
        }
        wp_send_json(MoUtility::create_json("\116\x6f\164\x20\x61\40\166\141\x6c\151\144\40\162\x65\x71\165\x65\163\x74\40\41", MoConstants::ERROR_JSON_TYPE));
        Ycq:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        switch (trim(sanitize_text_field(wp_unslash($_REQUEST["\155\x6f\137\x65\x78\164\x65\x72\156\x61\x6c\137\160\x6f\x70\165\160\137\x6f\x70\164\x69\x6f\156"])))) {
            case "\x6d\x69\156\x69\157\162\141\x6e\147\145\x2d\x61\x6a\141\x78\55\157\x74\160\x2d\x67\x65\156\x65\162\x61\164\145":
                $this->mo_handle_wp_login_ajax_send_otp($w3);
                goto Xd9;
            case "\155\x69\156\x69\x6f\162\x61\156\147\x65\x2d\141\x6a\141\x78\55\x6f\x74\x70\55\x76\141\x6c\151\x64\141\x74\145":
                $this->mo_handle_wp_login_ajax_form_validate_action($w3);
                goto Xd9;
            case "\x6d\157\x5f\141\152\x61\170\137\x66\x6f\x72\155\x5f\166\141\x6c\151\144\x61\x74\145":
                $this->mo_handle_wp_login_create_user_action($w3);
                goto Xd9;
        }
        Hhe:
        Xd9:
    }
    public function miniorange_register_login_script()
    {
        wp_register_script("\155\157\154\x6f\x67\x69\x6e", MOV_URL . "\x69\156\143\154\165\x64\x65\x73\57\x6a\x73\57\154\157\147\x69\156\x66\157\x72\155\x2e\x6d\151\156\x2e\152\x73", array("\152\161\165\145\x72\x79"), MOV_VERSION, true);
        wp_localize_script("\155\157\154\x6f\147\x69\x6e", "\x6d\x6f\166\141\162\154\157\x67\151\156", array("\165\x73\145\162\x4c\x61\142\x65\x6c" => $this->allow_login_through_phone ? $this->user_label : null, "\163\x6b\x69\x70\120\x77\x64\x43\150\x65\143\153" => $this->skip_password_check, "\x73\153\151\x70\120\x77\144\x46\x61\x6c\154\x62\x61\143\x6b" => $this->skip_pass_fallback, "\142\165\164\x74\157\156\x74\x65\170\x74" => mo_("\x4c\157\x67\x69\x6e\40\x77\151\x74\150\x20\x4f\x54\x50"), "\151\x73\x41\x64\155\151\156\x41\143\164\x69\x6f\156" => "\x6d\x6f\55\141\144\x6d\x69\156\x2d\x63\150\x65\x63\x6b", "\156\157\156\143\145" => wp_create_nonce($this->nonce), "\x62\x79\x50\141\x73\x73\101\x64\x6d\151\156" => $this->by_pass_admin, "\163\x69\164\145\125\x52\x4c" => wp_ajax_url()));
        wp_enqueue_script("\x6d\157\154\x6f\x67\151\156");
    }
    public function mo_get_and_return_user($JG, $L8)
    {
        $w3 = MoUtility::mo_sanitize_array($_POST);
        if (!is_object($JG)) {
            goto Ocr;
        }
        return $JG;
        Ocr:
        $user = $this->getUser($JG, $w3, $L8);
        if (!is_wp_error($user)) {
            goto Q_m;
        }
        return $user;
        Q_m:
        UM()->login()->auth_id = $user->data->ID;
        UM()->form()->errors = null;
        return $user;
    }
    private function byPassLogin($user, $hv)
    {
        $PS = get_userdata($user->data->ID);
        $q1 = $PS->roles;
        return in_array("\141\x64\x6d\x69\156\x69\163\x74\x72\x61\x74\157\x72", $q1, true) && $this->by_pass_admin || $hv || $this->delayOTPProcess($user->data->ID);
    }
    private function mo_handle_wp_login_create_user_action($w3)
    {
        $zt = function ($w3) {
            $JG = MoUtility::sanitize_check("\154\x6f\x67", $w3);
            if ($JG) {
                goto Yba;
            }
            $oW = array_filter($w3, function ($a6) {
                return strpos($a6, "\165\x73\x65\162\x6e\141\x6d\x65") === 0;
            }, ARRAY_FILTER_USE_KEY);
            $JG = !empty($oW) ? array_shift($oW) : $JG;
            Yba:
            return is_email($JG) ? get_user_by("\145\x6d\x61\151\x6c", $JG) : get_user_by("\154\x6f\x67\x69\156", $JG);
        };
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto Kuw;
        }
        return;
        Kuw:
        $user = $zt($w3);
        update_user_meta($user->data->ID, $this->phone_key, $this->check_phone_length($w3["\x6d\x6f\137\x70\x68\x6f\x6e\145\137\156\165\x6d\142\145\x72"]));
        $this->login_wp_user($user->data->user_login);
    }
    private function login_wp_user($Zs)
    {
        $user = is_email($Zs) ? get_user_by("\145\155\141\x69\x6c", $Zs) : ($this->allowLoginThroughPhone() && MoUtility::validate_phone_number($Zs) ? $this->getUserFromPhoneNumber(MoUtility::process_phone_number($Zs)) : get_user_by("\154\x6f\147\151\x6e", $Zs));
        wp_set_auth_cookie($user->data->ID);
        if (!($this->delay_otp && $this->delay_otp_interval > 0)) {
            goto SPf;
        }
        update_user_meta($user->data->ID, $this->time_stamp_meta_key, time());
        SPf:
        $this->unset_otp_session_variables();
        do_action("\x77\x70\x5f\154\157\x67\151\x6e", $user->user_login, $user);
        wp_safe_redirect(get_permalink(get_posts(array("\x74\x69\164\x6c\x65" => $this->redirect_to_page, "\160\x6f\163\x74\x5f\164\171\160\x65" => "\160\141\x67\x65"))[0]->ID));
        exit;
    }
    public function mo_handle_mo_wp_login($user, $JG, $L8)
    {
        $w3 = MoUtility::mo_sanitize_array($_POST);
        $Eh = MoUtility::mo_sanitize_array($_REQUEST);
        if (MoUtility::is_blank($JG)) {
            goto FHd;
        }
        $user = $this->getUser($JG, $w3, $L8);
        if (!is_wp_error($user)) {
            goto vP1;
        }
        return $user;
        vP1:
        $hv = $this->skip_otp_process($L8, $w3, $user);
        if (!$this->byPassLogin($user, $hv)) {
            goto OEt;
        }
        return $user;
        OEt:
        apply_filters("\155\157\137\x6d\x61\163\164\x65\x72\x5f\157\164\x70\x5f\163\x65\x6e\x64\137\165\x73\x65\162", $user);
        $this->startOTPVerificationProcess($user, $JG, $L8, $Eh);
        FHd:
        return $user;
    }
    private function startOTPVerificationProcess($user, $JG, $L8, $Eh)
    {
        $I2 = $this->get_verification_type();
        if (!(SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $I2) || SessionUtils::is_status_match($this->form_session_var2, self::VALIDATED, $I2))) {
            goto T61;
        }
        return;
        T61:
        if (VerificationType::PHONE === $I2) {
            goto Q_x;
        }
        if (VerificationType::EMAIL === $I2) {
            goto yum;
        }
        goto WaT;
        Q_x:
        $bV = get_user_meta($user->data->ID, $this->phone_key, true);
        $bV = $this->check_phone_length($bV);
        $this->askPhoneAndStartVerification($user, $this->phone_key, $JG, $bV);
        $this->fetchPhoneAndStartVerification($JG, $L8, $bV, $Eh);
        goto WaT;
        yum:
        $ZG = $user->data->user_email;
        $this->startEmailVerification($JG, $ZG);
        WaT:
    }
    private function getUser($JG, $w3, $L8 = null)
    {
        $user = is_email($JG) ? get_user_by("\145\155\141\x69\x6c", $JG) : get_user_by("\x6c\x6f\x67\151\x6e", $JG);
        if (!($this->allow_login_through_phone && MoUtility::validate_phone_number($JG))) {
            goto VxM;
        }
        $JG = MoUtility::process_phone_number($JG);
        $user = $this->getUserFromPhoneNumber($JG);
        VxM:
        if (!($user && !$this->isLoginWithOTP($w3, $user->roles))) {
            goto jvV;
        }
        $user = wp_authenticate_username_password(null, $user->data->user_login, $L8);
        jvV:
        return $user ? $user : new WP_Error("\x49\x4e\126\x41\x4c\111\104\137\125\123\105\x52\x4e\x41\115\105", mo_("\x20\74\142\76\105\x52\122\x4f\122\x3a\74\57\142\x3e\40\111\x6e\166\141\x6c\x69\x64\40\125\x73\x65\162\116\141\155\x65\56\40"));
    }
    private function getUserFromPhoneNumber($JG)
    {
        global $wpdb;
        $lR = $wpdb->get_row($wpdb->prepare("\x53\105\114\x45\x43\124\x20\x60\165\x73\145\x72\137\x69\144\x60\x20\x46\x52\x4f\x4d\x20\140{$wpdb->prefix}\x75\163\x65\x72\155\145\x74\141\x60" . "\127\x48\105\122\105\x20\x60\x6d\145\x74\141\x5f\x6b\145\171\140\x20\x3d\x20\x25\163\40\101\116\104\x20\140\x6d\145\164\141\x5f\166\x61\x6c\165\x65\x60\x20\x3d\40\45\x73", array($this->phone_key, $JG)));
        return !MoUtility::is_blank($lR) ? get_userdata($lR->user_id) : false;
    }
    private function askPhoneAndStartVerification($user, $a6, $JG, $bV)
    {
        if (MoUtility::is_blank($bV)) {
            goto K8O;
        }
        return;
        K8O:
        if (!$this->savePhoneNumbers()) {
            goto XSQ;
        }
        MoUtility::initialize_transaction($this->form_session_var);
        $this->send_challenge(null, $user->data->user_login, null, null, "\145\x78\164\x65\x72\156\x61\x6c", null, array("\144\141\x74\141" => array("\165\x73\145\x72\x5f\154\x6f\x67\151\156" => $JG), "\x6d\x65\163\x73\141\x67\x65" => MoMessages::showMessage(MoMessages::REGISTER_PHONE_LOGIN), "\146\157\x72\155" => $a6, "\x63\x75\x72\x6c" => MoUtility::current_page_url()));
        goto z40;
        XSQ:
        miniorange_site_otp_validation_form(null, null, null, MoMessages::showMessage(MoMessages::PHONE_NOT_FOUND), null, null);
        z40:
    }
    private function fetchPhoneAndStartVerification($JG, $L8, $bV, $Eh)
    {
        MoUtility::initialize_transaction($this->form_session_var2);
        $Ug = isset($Eh["\x72\x65\x64\x69\162\145\x63\x74\x5f\164\x6f"]) ? sanitize_text_field($Eh["\162\x65\144\x69\x72\x65\x63\164\x5f\x74\x6f"]) : MoUtility::current_page_url();
        $this->send_challenge($JG, null, null, $bV, VerificationType::PHONE, $L8, $Ug, false);
    }
    private function startEmailVerification($JG, $ZG)
    {
        MoUtility::initialize_transaction($this->form_session_var2);
        $this->send_challenge($JG, $ZG, null, null, VerificationType::EMAIL);
    }
    private function mo_handle_wp_login_ajax_send_otp($w3)
    {
        if ($this->restrict_duplicates() && !MoUtility::is_blank($this->getUserFromPhoneNumber(sanitize_text_field($w3["\x75\x73\145\x72\x5f\160\x68\157\156\x65"])))) {
            goto WyL;
        }
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto TLX;
        }
        goto I1e;
        WyL:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_EXISTS), MoConstants::ERROR_JSON_TYPE));
        goto I1e;
        TLX:
        $this->send_challenge("\141\x6a\141\x78\137\x70\x68\x6f\156\145", '', null, trim(sanitize_text_field($w3["\165\163\x65\x72\137\x70\150\x6f\156\145"])), VerificationType::PHONE, null, $w3);
        I1e:
    }
    private function mo_handle_wp_login_ajax_form_validate_action($w3)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto l0A;
        }
        return;
        l0A:
        $M9 = MoPHPSessions::get_session_var("\x70\x68\157\156\145\137\156\165\x6d\142\145\x72\x5f\x6d\x6f");
        if (strcmp($M9, $this->check_phone_length($w3["\165\x73\x65\162\x5f\160\x68\x6f\x6e\x65"]))) {
            goto DGx;
        }
        $this->validate_challenge($this->get_verification_type());
        goto oo0;
        DGx:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        oo0:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (!SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto uXl;
        }
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
        wp_send_json(MoUtility::create_json(MoUtility::get_invalid_otp_method(), MoConstants::ERROR_JSON_TYPE));
        uXl:
        if (!SessionUtils::is_otp_initialized($this->form_session_var2)) {
            goto o9Z;
        }
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), "\x70\x68\157\x6e\x65", false);
        o9Z:
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        if (!(!isset($_POST["\155\x6f\x70\x6f\160\x75\160\x5f\x77\x70\156\157\x6e\x63\145"]) || !wp_verify_nonce(sanitize_key(wp_unslash($_POST["\155\157\x70\x6f\160\165\160\137\167\160\156\x6f\156\x63\x65"])), "\x6d\157\x5f\160\157\x70\165\160\x5f\x6f\160\x74\151\x6f\156\163"))) {
            goto cMN;
        }
        return;
        cMN:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        if (!SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto M5P;
        }
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
        wp_send_json(MoUtility::create_json('', MoConstants::SUCCESS_JSON_TYPE));
        M5P:
        if (!SessionUtils::is_otp_initialized($this->form_session_var2)) {
            goto vMO;
        }
        $JG = MoUtility::is_blank($kD) ? MoUtility::sanitize_check("\x6c\x6f\147", $w3) : $kD;
        $JG = MoUtility::is_blank($JG) ? MoUtility::sanitize_check("\165\163\x65\162\156\x61\155\x65", $w3) : $JG;
        $this->login_wp_user($JG);
        vMO:
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var, $this->form_session_var2));
    }
    public function get_phone_number_selector($MI)
    {
        if (!$this->is_form_enabled()) {
            goto O97;
        }
        array_push($MI, $this->phone_form_id);
        O97:
        return $MI;
    }
    private function isLoginWithOTP($w3, $R1 = array())
    {
        $mU = mo_("\114\157\147\151\x6e\40\167\x69\x74\x68\x20\117\x54\120");
        if (!(in_array("\141\x64\x6d\x69\x6e\151\x73\x74\x72\x61\164\x6f\162", $R1, true) && $this->by_pass_admin)) {
            goto kWH;
        }
        return false;
        kWH:
        return MoUtility::sanitize_check("\167\160\55\163\165\x62\x6d\151\x74", $w3) === $mU || MoUtility::sanitize_check("\x6c\x6f\x67\151\156", $w3) === $mU || MoUtility::sanitize_check("\x6c\x6f\x67\x69\156\x74\171\x70\145", $w3) === $mU;
    }
    private function skip_otp_process($L8, $w3, $user)
    {
        $PS = get_userdata($user->data->ID);
        return $this->skip_password_check && $this->skip_pass_fallback && isset($L8) && !$this->isLoginWithOTP($w3, $PS->roles);
    }
    private function check_phone_length($M9)
    {
        $Tc = MoUtility::process_phone_number($M9);
        return strlen($Tc) >= 5 ? $Tc : '';
    }
    private function delayOTPProcess($Uv)
    {
        if (!($this->delay_otp && $this->delay_otp_interval < 0)) {
            goto Bum;
        }
        return true;
        Bum:
        $t7 = get_user_meta($Uv, $this->time_stamp_meta_key, true);
        if (!MoUtility::is_blank($t7)) {
            goto iMm;
        }
        return false;
        iMm:
        $Iu = time() - $t7;
        return $this->delay_otp && $Iu < $this->delay_otp_interval * 60;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto Wb4;
        }
        return;
        Wb4:
        if (!(!current_user_can("\x6d\x61\156\x61\147\145\137\x6f\x70\x74\151\157\x6e\x73") || !check_admin_referer($this->admin_nonce))) {
            goto YlV;
        }
        return;
        YlV:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $this->is_form_enabled = $this->sanitize_form_post("\167\x70\x5f\154\157\147\151\156\137\x65\156\141\142\x6c\x65");
        $this->save_phone_numbers = $this->sanitize_form_post("\167\x70\x5f\x6c\x6f\147\x69\156\137\162\x65\x67\151\x73\164\x65\162\x5f\160\150\x6f\x6e\x65");
        $this->by_pass_admin = $this->sanitize_form_post("\167\160\137\154\x6f\147\151\x6e\137\x62\171\x70\x61\x73\x73\x5f\141\144\155\x69\x6e");
        $this->phone_key = $this->sanitize_form_post("\x77\x70\x5f\154\157\147\x69\x6e\137\160\150\x6f\156\x65\137\x66\x69\x65\x6c\x64\137\x6b\x65\171");
        $this->allow_login_through_phone = $this->sanitize_form_post("\x77\x70\x5f\154\157\147\x69\156\137\141\x6c\x6c\157\167\137\x70\x68\x6f\x6e\x65\x5f\154\x6f\x67\x69\156");
        $this->restrict_duplicates = $this->sanitize_form_post("\x77\160\137\154\157\147\x69\156\137\x72\x65\x73\x74\162\x69\143\164\137\144\x75\160\x6c\x69\143\x61\x74\145\x73");
        $this->otp_type = $this->sanitize_form_post("\x77\160\x5f\x6c\157\147\151\x6e\137\x65\x6e\x61\142\154\145\137\x74\171\160\145");
        $this->skip_password_check = $this->sanitize_form_post("\167\x70\137\154\157\147\151\x6e\x5f\163\153\x69\x70\137\160\x61\163\x73\x77\157\162\x64");
        $this->user_label = $this->sanitize_form_post("\x77\x70\137\x75\163\145\162\x6e\x61\155\145\x5f\x6c\x61\142\145\x6c\x5f\164\x65\x78\164");
        $this->skip_pass_fallback = $this->sanitize_form_post("\x77\x70\x5f\154\x6f\147\151\156\x5f\163\x6b\x69\160\x5f\x70\141\163\163\x77\x6f\162\x64\x5f\146\x61\154\154\x62\141\143\153");
        $this->delay_otp = $this->sanitize_form_post("\x77\x70\137\154\157\147\x69\x6e\x5f\x64\145\154\x61\171\137\x6f\164\160");
        $this->delay_otp_interval = $this->sanitize_form_post("\167\x70\137\x6c\x6f\147\x69\x6e\137\144\x65\x6c\141\x79\137\x6f\x74\160\x5f\151\156\164\145\162\166\x61\x6c");
        $this->redirect_to_page = isset($GX["\160\141\x67\x65\x5f\151\144"]) ? get_the_title($GX["\160\x61\x67\145\137\151\x64"]) : "\115\x79\40\x41\x63\143\157\x75\156\x74";
        update_mo_option("\x77\160\x5f\x6c\157\x67\151\156\x5f\x65\156\141\x62\x6c\x65\137\164\x79\x70\145", $this->otp_type);
        update_mo_option("\167\160\x5f\154\157\147\x69\156\137\x65\156\141\142\x6c\x65", $this->is_form_enabled);
        update_mo_option("\167\160\137\154\157\147\x69\156\137\162\145\x67\x69\163\164\x65\x72\137\x70\x68\157\x6e\x65", $this->save_phone_numbers);
        update_mo_option("\x77\x70\x5f\x6c\157\147\151\156\x5f\x62\171\160\141\x73\x73\x5f\x61\144\155\x69\156", $this->by_pass_admin);
        update_mo_option("\167\160\x5f\154\x6f\147\151\x6e\137\153\x65\x79", $this->phone_key);
        update_mo_option("\167\160\137\x6c\157\x67\151\x6e\137\x61\x6c\154\157\167\137\160\x68\x6f\x6e\x65\x5f\154\x6f\x67\x69\x6e", $this->allow_login_through_phone);
        update_mo_option("\167\160\x5f\x6c\x6f\x67\151\156\x5f\x72\145\x73\164\162\151\x63\164\137\144\165\x70\154\151\143\x61\x74\x65\x73", $this->restrict_duplicates);
        update_mo_option("\167\x70\137\154\x6f\x67\151\156\137\163\153\x69\x70\137\x70\x61\163\163\x77\x6f\x72\x64", $this->skip_password_check && $this->is_form_enabled);
        update_mo_option("\x77\x70\137\x6c\157\147\151\156\x5f\x73\153\151\160\137\160\x61\163\163\167\157\162\x64\x5f\x66\x61\154\x6c\x62\141\x63\x6b", $this->skip_pass_fallback);
        update_mo_option("\x77\160\x5f\x75\163\145\x72\x6e\x61\155\145\x5f\154\141\x62\145\154\137\164\x65\170\x74", $this->user_label);
        update_mo_option("\167\x70\x5f\x6c\157\147\x69\156\x5f\x64\145\x6c\141\171\x5f\x6f\164\x70", $this->delay_otp && $this->is_form_enabled);
        update_mo_option("\x77\160\x5f\154\157\147\x69\156\x5f\144\145\x6c\141\171\x5f\157\164\160\137\x69\156\164\145\x72\166\x61\154", $this->delay_otp_interval);
        update_mo_option("\x6c\157\147\x69\156\x5f\x63\165\x73\164\x6f\x6d\x5f\162\x65\x64\151\162\x65\x63\164", $this->redirect_to_page);
    }
    public function savePhoneNumbers()
    {
        return $this->save_phone_numbers;
    }
    public function byPassCheckForAdmins()
    {
        return $this->by_pass_admin;
    }
    public function allowLoginThroughPhone()
    {
        return $this->allow_login_through_phone;
    }
    public function getSkipPasswordCheck()
    {
        return $this->skip_password_check;
    }
    public function getUserLabel()
    {
        return mo_($this->user_label);
    }
    public function getSkipPasswordCheckFallback()
    {
        return $this->skip_pass_fallback;
    }
    public function isDelayOtp()
    {
        return $this->delay_otp;
    }
    public function getDelayOtpInterval()
    {
        return $this->delay_otp_interval;
    }
    public function redirectToPage()
    {
        return $this->redirect_to_page;
    }
}
yNF:
