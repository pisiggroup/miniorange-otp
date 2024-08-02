<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\x53\120\101\x54\110")) {
    goto u28;
}
exit;
u28:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Traits\Instance;
use ReflectionException;
use WC_Emails;
use WC_Social_Login_Provider_Profile;
if (class_exists("\x57\157\x6f\x43\x6f\x6d\155\x65\162\x63\x65\123\157\143\151\x61\x6c\x4c\x6f\147\151\156\x46\157\162\x6d")) {
    goto Dwp;
}
class WooCommerceSocialLoginForm extends FormHandler implements IFormHandler
{
    use Instance;
    private $oauth_providers = array("\146\x61\143\145\x62\157\157\x6b", "\x74\167\151\x74\x74\x65\x72", "\x67\157\157\x67\x6c\x65", "\141\x6d\x61\172\157\156", "\x6c\151\x6e\x6b\145\144\111\156", "\160\141\x79\x70\141\x6c", "\151\156\x73\164\x61\147\x72\141\x6d", "\x64\x69\163\161\x75\x73", "\x79\x61\150\x6f\x6f", "\x76\x6b");
    protected function __construct()
    {
        $this->is_login_or_social_form = true;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::WC_SOCIAL_LOGIN;
        $this->otp_type = "\x70\150\157\156\145";
        $this->phone_form_id = "\43\x6d\x6f\x5f\x70\x68\157\x6e\145\x5f\x6e\165\155\x62\145\162";
        $this->form_key = "\x57\103\137\x53\x4f\x43\x49\101\114\x5f\114\x4f\x47\111\116";
        $this->form_name = mo_("\127\x6f\157\x63\x6f\x6d\x6d\145\x72\143\145\x20\x53\x6f\x63\x69\141\154\40\x4c\x6f\147\151\156\40\x28\40\x53\115\x53\x20\126\145\x72\x69\146\x69\x63\141\x74\x69\157\x6e\x20\x4f\156\x6c\x79\x20\51");
        $this->is_form_enabled = get_mo_option("\x77\x63\x5f\163\x6f\143\151\141\x6c\x5f\154\x6f\147\151\156\137\145\156\x61\x62\154\145");
        $this->form_documents = MoFormDocs::WC_SOCIAL_LOGIN;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->includeRequiredFiles();
        foreach ($this->oauth_providers as $IL) {
            add_filter("\167\x63\x5f\163\157\x63\151\x61\x6c\137\154\157\147\x69\156\x5f" . $IL . "\x5f\160\x72\157\x66\x69\154\x65", array($this, "\x6d\157\x5f\x77\x63\137\163\x6f\x63\x69\141\154\137\x6c\157\x67\151\156\137\160\x72\x6f\146\151\154\x65"), 99, 2);
            add_filter("\x77\143\137\163\x6f\x63\x69\141\x6c\x5f\x6c\157\x67\151\x6e\x5f" . $IL . "\x5f\156\145\x77\x5f\165\163\x65\x72\x5f\x64\x61\164\x61", array($this, "\155\x6f\x5f\167\x63\137\163\x6f\143\x69\141\x6c\x5f\154\157\147\151\x6e"), 99, 2);
            ZvF:
        }
        pDn:
        $this->routeData();
    }
    public function routeData()
    {
        if (array_key_exists("\155\157\x5f\145\170\x74\145\x72\x6e\141\x6c\x5f\160\157\160\x75\x70\137\x6f\160\164\x69\157\156", $_REQUEST)) {
            goto Zf8;
        }
        return;
        Zf8:
        if (check_ajax_referer("\155\x6f\x5f\160\x6f\x70\165\x70\137\x6f\160\x74\x69\157\156\163", "\155\157\x70\157\160\x75\x70\x5f\167\160\156\157\x6e\x63\145", false)) {
            goto wAK;
        }
        wp_send_json(MoUtility::create_json("\116\x6f\164\40\141\x20\166\141\x6c\x69\144\40\x72\145\161\x75\145\x73\x74\x20\x21", MoConstants::ERROR_JSON_TYPE));
        wAK:
        $GX = MoUtility::mo_sanitize_array($_POST);
        switch (trim(sanitize_text_field(wp_unslash($_REQUEST["\155\x6f\137\145\170\164\x65\162\156\x61\x6c\x5f\x70\157\160\165\160\x5f\157\160\164\151\x6f\156"])))) {
            case "\x6d\151\x6e\x69\157\x72\x61\156\147\x65\55\x61\152\x61\170\x2d\x6f\x74\x70\55\x67\145\x6e\145\x72\141\x74\145":
                $this->mo_handle_wc_ajax_send_otp($GX);
                goto W56;
            case "\155\x69\x6e\151\157\162\141\156\x67\145\x2d\141\x6a\x61\x78\55\x6f\x74\x70\x2d\x76\141\x6c\x69\x64\x61\164\x65":
                $this->processOTPEntered(sanitize_text_field(wp_unslash($_REQUEST)));
                goto W56;
            case "\x6d\x6f\137\x61\152\x61\170\137\x66\x6f\x72\155\137\x76\141\x6c\151\144\141\x74\x65":
                $this->mo_handle_wc_create_user_action($GX);
                goto W56;
        }
        tKw:
        W56:
    }
    public function includeRequiredFiles()
    {
        if (!function_exists("\151\x73\137\160\154\165\x67\x69\x6e\x5f\x61\x63\x74\151\x76\145")) {
            include_once ABSPATH . "\x77\x70\55\x61\x64\155\x69\x6e\x2f\x69\156\143\154\165\x64\145\163\57\x70\x6c\x75\x67\151\156\56\160\150\160";
        }
        if (!is_plugin_active("\167\157\157\143\x6f\x6d\155\x65\x72\x63\145\55\x73\157\x63\x69\x61\154\x2d\154\x6f\147\x69\156\57\x77\157\x6f\143\x6f\x6d\x6d\145\x72\x63\x65\55\163\157\143\x69\141\x6c\x2d\x6c\x6f\147\x69\x6e\x2e\x70\150\160")) {
            goto E6_;
        }
        require_once plugin_dir_path(MOV_DIR) . "\167\x6f\157\143\157\x6d\x6d\x65\162\x63\145\x2d\163\157\143\x69\141\154\x2d\x6c\x6f\147\151\x6e\57\x73\x72\x63\x2f\143\x6c\x61\163\x73\55\x77\143\x2d\163\157\143\151\141\154\x2d\x6c\x6f\x67\151\156\55\160\162\x6f\166\x69\x64\x65\x72\x2d\x70\x72\x6f\146\x69\154\145\56\160\x68\160";
        E6_:
    }
    public function mo_wc_social_login_profile($SQ, $aY)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        MoPHPSessions::add_session_var("\x77\143\x5f\x70\x72\x6f\x76\x69\x64\x65\x72", $SQ);
        $_SESSION["\x77\143\137\x70\x72\157\x76\151\144\145\162\137\151\144"] = maybe_serialize($aY);
        return $SQ;
    }
    public function mo_wc_social_login($dU, $SQ)
    {
        $this->send_challenge(null, $dU["\x75\163\145\x72\137\x65\155\x61\151\154"], null, null, "\145\x78\x74\145\x72\156\141\x6c", null, array("\144\141\164\141" => $dU, "\155\x65\163\x73\141\147\x65" => MoMessages::showMessage(MoMessages::PHONE_VALIDATION_MSG), "\146\x6f\162\155" => "\x57\x43\x5f\123\117\x43\x49\101\114", "\x63\x75\162\x6c" => MoUtility::current_page_url()));
    }
    public function mo_handle_wc_create_user_action($w3)
    {
        if (!(!$this->checkIfVerificationNotStarted() && SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type()))) {
            goto K2a;
        }
        $this->create_new_wc_social_customer($w3);
        K2a:
    }
    public function create_new_wc_social_customer($DT)
    {
        require_once plugin_dir_path(MOV_DIR) . "\x77\x6f\x6f\143\x6f\155\x6d\x65\x72\143\145\x2f\x69\156\143\x6c\165\x64\145\x73\x2f\143\x6c\141\163\163\x2d\167\143\x2d\x65\x6d\x61\151\154\163\56\160\x68\160";
        WC_Emails::init_transactional_emails();
        $eh = MoPHPSessions::get_session_var("\167\x63\137\x70\162\157\166\x69\144\x65\162");
        $aY = maybe_unserialize(sanitize_text_field($_SESSION["\167\143\137\x70\x72\x6f\166\151\144\x65\162\x5f\x69\144"]));
        $this->unset_otp_session_variables();
        $SQ = new WC_Social_Login_Provider_Profile($aY, $eh);
        $M9 = $DT["\x6d\157\x5f\x70\150\x6f\156\x65\x5f\156\x75\x6d\x62\x65\x72"];
        $DT = array("\162\157\x6c\145" => "\x63\165\163\164\x6f\x6d\x65\x72", "\x75\x73\145\x72\137\154\x6f\x67\x69\156" => $SQ->has_email() ? sanitize_email($SQ->get_email()) : $SQ->get_nickname(), "\165\163\x65\x72\x5f\145\155\141\151\154" => $SQ->get_email(), "\165\x73\145\162\x5f\x70\141\x73\163" => wp_generate_password(), "\146\151\x72\163\164\137\156\141\x6d\145" => $SQ->get_first_name(), "\154\x61\163\x74\137\x6e\141\155\x65" => $SQ->get_last_name());
        if (!empty($DT["\165\x73\145\x72\137\154\x6f\x67\151\156"])) {
            goto YN0;
        }
        $DT["\x75\163\145\162\x5f\x6c\157\x67\x69\156"] = $DT["\x66\151\162\x73\x74\137\x6e\141\x6d\x65"] . $DT["\x6c\141\x73\x74\x5f\x6e\x61\x6d\145"];
        YN0:
        $Wx = 1;
        $Q8 = $DT["\x75\163\x65\162\137\154\157\x67\151\156"];
        TR0:
        if (!username_exists($DT["\x75\163\145\162\137\154\x6f\147\151\x6e"])) {
            goto yLT;
        }
        $DT["\165\163\x65\x72\x5f\154\x6f\x67\151\156"] = $Q8 . $Wx;
        $Wx++;
        goto TR0;
        yLT:
        $F_ = wp_insert_user($DT);
        update_user_meta($F_, "\142\x69\x6c\154\x69\156\x67\137\x70\150\157\156\x65", MoUtility::process_phone_number($M9));
        update_user_meta($F_, "\x74\x65\x6c\x65\x70\150\x6f\156\145", MoUtility::process_phone_number($M9));
        do_action("\167\157\x6f\143\x6f\x6d\155\x65\162\143\145\137\x63\x72\145\x61\x74\x65\144\137\x63\x75\163\x74\x6f\x6d\x65\162", $F_, $DT, false);
        $user = get_user_by("\x69\x64", $F_);
        $SQ->update_customer_profile($user->ID, $user);
        $WZ = apply_filters("\167\x63\x5f\x73\157\x63\x69\141\x6c\137\x6c\x6f\x67\x69\156\137\163\x65\164\x5f\x61\x75\164\150\x5f\x63\x6f\x6f\153\151\145", '', $user);
        if (!$WZ) {
            goto g1H;
        }
        wc_add_notice($WZ, "\x6e\x6f\164\x69\143\145");
        goto xgA;
        g1H:
        wc_set_customer_auth_cookie($user->ID);
        update_user_meta($user->ID, "\137\167\x63\137\x73\x6f\x63\x69\x61\154\x5f\154\157\147\x69\156\137" . $SQ->get_provider_id() . "\x5f\154\x6f\147\151\156\137\x74\x69\155\145\163\164\141\x6d\160", current_time("\131\57\x6d\x2f\x64\40\110\x3a\x69\72\x73"));
        update_user_meta($user->ID, "\137\167\x63\x5f\x73\x6f\143\151\x61\154\x5f\154\x6f\x67\x69\156\137" . $SQ->get_provider_id() . "\x5f\x6c\x6f\147\x69\156\x5f\x74\151\155\x65\x73\164\141\155\x70\x5f\147\x6d\x74", time());
        do_action("\x77\x63\x5f\163\x6f\x63\151\x61\x6c\137\154\157\x67\x69\156\137\165\x73\x65\x72\x5f\x61\x75\x74\150\x65\156\164\x69\x63\x61\x74\145\144", $user->ID, $SQ->get_provider_id());
        xgA:
        if (is_wp_error($F_)) {
            goto YSn;
        }
        $this->redirect(null, $F_);
        goto h2d;
        YSn:
        $this->redirect("\x65\162\162\157\x72", 0, $F_->get_error_code());
        h2d:
    }
    public function redirect($R7 = null, $Uv = 0, $Yl = "\x77\x63\x2d\163\157\143\151\x61\154\x2d\x6c\157\x67\x69\156\x2d\145\162\162\157\162")
    {
        $user = get_user_by("\151\x64", $Uv);
        if (MoUtility::is_blank($user->user_email)) {
            goto c8k;
        }
        $e4 = isset($_SERVER["\x48\x54\124\120\x5f\x55\x53\x45\122\137\x41\107\x45\116\124"]) ? sanitize_text_field(wp_unslash($_SERVER["\110\124\x54\x50\137\125\123\x45\122\137\x41\x47\105\x4e\124"])) : null;
        $rL = get_transient("\x77\x63\x73\x6c\x5f" . md5(isset($_SERVER["\x52\x45\x4d\117\x54\105\x5f\101\104\104\122"]) ? sanitize_text_field(wp_unslash($_SERVER["\x52\105\x4d\x4f\124\105\x5f\x41\x44\104\x52"])) : null . $e4));
        $rL = $rL ? esc_url(urldecode($rL)) : wc_get_page_permalink("\x6d\171\x61\143\143\x6f\165\156\x74");
        delete_transient("\x77\x63\163\x6c\137" . md5(isset($_SERVER["\122\x45\x4d\x4f\x54\105\137\101\104\x44\x52"]) ? sanitize_text_field(wp_unslash($_SERVER["\122\105\115\x4f\x54\x45\x5f\101\x44\x44\122"])) : null . sanitize_text_field(wp_unslash($_SERVER["\x48\x54\124\x50\x5f\x55\123\105\122\x5f\101\107\105\x4e\124"]))));
        goto hqr;
        c8k:
        $rL = add_query_arg("\167\143\55\163\157\x63\151\x61\154\55\x6c\157\147\151\156\x2d\155\x69\x73\x73\x69\156\147\x2d\145\155\x61\x69\154", "\164\162\165\145", wc_customer_edit_account_url());
        hqr:
        if (!("\145\162\x72\157\162" === $R7)) {
            goto snb;
        }
        $rL = add_query_arg($Yl, "\164\x72\x75\145", $rL);
        snb:
        wp_safe_redirect(esc_url_raw($rL));
        exit;
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        wp_send_json(MoUtility::create_json(MoUtility::get_invalid_otp_method(), MoConstants::ERROR_JSON_TYPE));
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
        wp_send_json(MoUtility::create_json(MoConstants::SUCCESS, MoConstants::SUCCESS_JSON_TYPE));
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function mo_handle_wc_ajax_send_otp($GX)
    {
        if ($this->checkIfVerificationNotStarted()) {
            goto oYt;
        }
        $this->send_challenge("\x61\x6a\141\x78\137\160\x68\157\x6e\x65", '', null, trim($GX["\x75\163\145\x72\x5f\160\150\x6f\x6e\x65"]), $this->otp_type, null, $GX);
        oYt:
    }
    public function processOTPEntered($GX)
    {
        if (!$this->checkIfVerificationNotStarted()) {
            goto JXt;
        }
        return;
        JXt:
        if ($this->process_phone_number($GX)) {
            goto VBf;
        }
        $this->validate_challenge($this->get_verification_type());
        goto bzJ;
        VBf:
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), MoConstants::ERROR_JSON_TYPE));
        bzJ:
    }
    private function process_phone_number($GX)
    {
        $M9 = MoPHPSessions::get_session_var("\160\150\x6f\x6e\145\x5f\156\x75\x6d\x62\x65\162\x5f\155\157");
        return strcmp($M9, MoUtility::process_phone_number($GX["\x75\163\x65\x72\137\x70\150\x6f\x6e\x65"])) !== 0;
    }
    private function checkIfVerificationNotStarted()
    {
        return !SessionUtils::is_otp_initialized($this->form_session_var);
    }
    public function get_phone_number_selector($MI)
    {
        if (!$this->is_form_enabled()) {
            goto AVK;
        }
        array_push($MI, $this->phone_form_id);
        AVK:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto xp8;
        }
        return;
        xp8:
        $this->is_form_enabled = $this->sanitize_form_post("\167\x63\x5f\163\x6f\x63\151\141\154\137\x6c\x6f\x67\x69\x6e\137\x65\156\x61\x62\x6c\145");
        update_mo_option("\x77\x63\137\163\x6f\143\151\141\x6c\x5f\x6c\x6f\147\x69\156\x5f\x65\156\141\x62\154\x65", $this->is_form_enabled);
    }
}
Dwp:
