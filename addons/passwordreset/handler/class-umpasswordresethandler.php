<?php


namespace OTP\Addons\PasswordReset\Handler;

if (defined("\101\102\123\x50\101\x54\x48")) {
    goto uY;
}
exit;
uY:
use OTP\Addons\PasswordReset\Helper\UMPasswordResetMessages;
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
use OTP\Helper\MoMessages;
use OTP\Helper\MoConstants;
use UM;
use um\core\Form;
use um\core\Options;
use um\core\Password;
use um\core\User;
use WP_User;
if (class_exists("\125\x4d\120\x61\163\163\x77\157\162\x64\122\145\x73\145\x74\x48\x61\x6e\144\x6c\145\162")) {
    goto qW;
}
class UMPasswordResetHandler extends FormHandler implements IFormHandler
{
    use Instance;
    private $field_key;
    private $is_only_phone_reset;
    protected function __construct()
    {
        $this->is_ajax_form = true;
        $this->is_add_on_form = true;
        $this->form_option = "\x75\155\137\x70\x61\x73\x73\167\x6f\162\x64\137\x72\145\x73\145\x74\x5f\150\x61\x6e\144\154\x65\x72";
        $this->form_session_var = FormSessionVars::UM_DEFAULT_PASS;
        $this->type_phone_tag = "\x6d\x6f\x5f\x75\155\137\x70\x68\157\x6e\145\x5f\145\156\x61\142\x6c\x65";
        $this->type_email_tag = "\x6d\157\137\165\155\137\x65\x6d\x61\151\154\x5f\145\156\141\x62\x6c\x65";
        $this->phone_form_id = "\x75\x73\x65\162\x6e\141\155\x65\x5f\142";
        $this->field_key = "\165\163\145\162\x6e\x61\x6d\145\x5f\x62";
        $this->form_key = "\x55\x4c\124\111\115\101\x54\105\137\120\x41\123\x53\137\122\x45\x53\x45\x54";
        $this->form_name = mo_("\x55\x6c\x74\x69\155\x61\x74\x65\x20\115\x65\155\x62\x65\x72\40\120\x61\x73\x73\167\157\x72\144\40\122\145\x73\x65\164\40\x75\163\x69\156\147\x20\x4f\x54\120");
        $this->is_form_enabled = get_umpr_option("\160\x61\x73\163\x5f\145\156\x61\x62\154\x65") ? true : false;
        $this->generate_otp_action = "\155\x6f\137\165\155\x70\162\137\163\145\x6e\144\x5f\157\164\x70";
        $this->button_text = get_umpr_option("\x70\141\x73\163\x5f\142\165\x74\164\157\156\x5f\x74\145\x78\x74");
        $this->button_text = !MoUtility::is_blank($this->button_text) ? $this->button_text : mo_("\x52\145\163\145\x74\x20\120\141\163\163\167\x6f\162\x64");
        $this->phone_key = get_umpr_option("\160\x61\163\163\x70\x68\x6f\x6e\145\137\x6b\145\x79");
        $this->phone_key = $this->phone_key ? $this->phone_key : "\155\157\x62\x69\x6c\x65\x5f\x6e\165\x6d\142\x65\162";
        $this->is_only_phone_reset = get_umpr_option("\157\x6e\x6c\x79\x5f\x70\150\x6f\x6e\x65\x5f\x72\145\x73\x65\x74");
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_umpr_option("\x65\x6e\x61\142\x6c\145\144\x5f\164\171\x70\145");
        if (!$this->is_only_phone_reset) {
            goto kl;
        }
        $this->phone_form_id = "\151\x6e\160\165\x74\43\x75\163\x65\162\x6e\141\x6d\145\137\142";
        kl:
        add_action("\x77\x70\137\x61\x6a\141\170\137\x6e\157\x70\x72\x69\x76\137" . $this->generate_otp_action, array($this, "\x73\x65\x6e\x64\101\x6a\x61\x78\117\124\x50\x52\145\161\165\145\163\164"));
        add_action("\x77\160\x5f\x61\152\141\170\137" . $this->generate_otp_action, array($this, "\163\145\x6e\144\101\152\141\170\117\124\x50\122\145\x71\x75\x65\163\164"));
        add_action("\x77\x70\137\145\x6e\161\x75\145\165\145\x5f\x73\143\162\151\160\x74\163", array($this, "\155\151\x6e\x69\x6f\162\x61\156\x67\145\x5f\x72\x65\x67\x69\x73\164\145\x72\x5f\165\155\137\163\143\x72\151\160\x74"));
        add_action("\x75\x6d\x5f\162\145\x73\145\x74\x5f\x70\x61\x73\163\x77\157\x72\x64\x5f\x65\162\x72\157\162\x73\137\x68\157\x6f\153", array($this, "\165\x6d\x5f\x72\x65\x73\x65\x74\x5f\160\141\x73\163\x77\157\162\144\137\x65\x72\162\157\162\163\x5f\x68\157\157\x6b"), 99);
        add_action("\x75\155\x5f\x72\145\x73\x65\x74\137\x70\141\x73\163\167\157\x72\144\137\x70\162\x6f\143\x65\163\163\137\x68\157\157\153", array($this, "\x75\x6d\137\x72\x65\x73\x65\164\x5f\x70\141\163\163\167\x6f\162\144\137\x70\x72\157\x63\x65\163\163\137\x68\x6f\157\153"), 1);
    }
    public function sendAjaxOTPRequest()
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (check_ajax_referer($this->nonce, $this->nonce_key)) {
            goto PT;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), MoConstants::ERROR_JSON_TYPE));
        exit;
        PT:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $JG = MoUtility::sanitize_check("\165\163\x65\162\156\141\x6d\x65", $GX);
        SessionUtils::add_user_in_session($this->form_session_var, $JG);
        $user = $this->getUser($JG);
        if (!$user) {
            goto a5;
        }
        $M9 = get_user_meta($user->ID, $this->phone_key, true);
        $this->startOtpTransaction(null, $user->user_email, null, $M9, null, null);
        goto fV;
        a5:
        if ($this->is_only_phone_reset) {
            goto oY;
        }
        wp_send_json(MoUtility::create_json(UMPasswordResetMessages::showMessage(UMPasswordResetMessages::USERNAME_NOT_EXIST), "\145\162\x72\x6f\162"));
        goto dr;
        oY:
        wp_send_json(MoUtility::create_json(UMPasswordResetMessages::showMessage(UMPasswordResetMessages::RESET_LABEL_OP), "\145\x72\x72\157\x72"));
        dr:
        fV:
    }
    public function um_reset_password_process_hook()
    {
        $user = MoUtility::sanitize_check("\x75\x73\x65\162\x6e\141\155\x65\x5f\142", $_POST);
        $user = $this->getUser(trim($user));
        $Cz = $this->getUmpwd_obj();
        um_fetch_user($user->ID);
        $this->getUmUserObj()->password_reset();
        wp_safe_redirect($Cz->reset_url());
        exit;
    }
    public function um_reset_password_errors_hook()
    {
        $form = $this->getum_formObj();
        $GX = MoUtility::mo_sanitize_array($_POST);
        $JG = MoUtility::sanitize_check($this->field_key, $GX);
        if (!isset($form->errors)) {
            goto yO;
        }
        if (!(strcasecmp($this->otp_type, $this->type_phone_tag) === 0 && MoUtility::validate_phone_number($JG))) {
            goto lO;
        }
        $user = $this->getUserFromPhoneNumber($JG);
        if (!$user) {
            goto zu;
        }
        $form->errors = null;
        if (isset($form->errors)) {
            goto YZ;
        }
        $this->check_reset_password_limit($form, $user->ID);
        YZ:
        goto J1;
        zu:
        $form->add_error($this->field_key, UMPasswordResetMessages::showMessage(UMPasswordResetMessages::USERNAME_NOT_EXIST));
        J1:
        lO:
        yO:
        if (isset($form->errors)) {
            goto Bj;
        }
        $this->checkIntegrityAndValidateOTP($form, MoUtility::sanitize_check("\166\x65\x72\x69\146\x79\x5f\146\x69\145\154\144", $GX), $GX);
        Bj:
    }
    private function checkIntegrityAndValidateOTP(&$form, $bh, array $rp)
    {
        $Bo = $this->get_verification_type();
        $this->checkIntegrity($form, $rp);
        $this->validate_challenge($Bo, null, $bh);
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $Bo)) {
            goto Um;
        }
        $form->add_error($this->field_key, UMPasswordResetMessages::showMessage(UMPasswordResetMessages::INVALID_OTP));
        Um:
    }
    private function checkIntegrity($FA, array $rp)
    {
        $NE = SessionUtils::get_user_submitted($this->form_session_var);
        if (!($NE !== $rp[$this->field_key])) {
            goto Jp;
        }
        $FA->add_error($this->field_key, UMPasswordResetMessages::showMessage(UMPasswordResetMessages::USERNAME_MISMATCH));
        Jp:
    }
    public function getUserId($user)
    {
        $user = $this->getUser($user);
        return $user ? $user->ID : false;
    }
    public function getUser($JG)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0 && MoUtility::validate_phone_number($JG)) {
            goto Uk;
        }
        if (is_email($JG)) {
            goto Fa;
        }
        $user = get_user_by("\x6c\x6f\x67\151\156", $JG);
        goto S4;
        Uk:
        $JG = MoUtility::process_phone_number($JG);
        $user = $this->getUserFromPhoneNumber($JG);
        goto S4;
        Fa:
        $user = get_user_by("\145\155\141\151\x6c", $JG);
        S4:
        return $user;
    }
    private function getUserFromPhoneNumber($JG)
    {
        global $wpdb;
        $lR = $wpdb->get_row($wpdb->prepare("\123\105\x4c\105\103\x54\x20\140\165\163\145\x72\x5f\151\x64\x60\x20\106\122\117\x4d\40\x60{$wpdb->prefix}\x75\x73\x65\x72\x6d\145\164\141\x60\x20\x57\x48\105\x52\x45\40\x60\x6d\x65\x74\141\x5f\x6b\145\x79\140\40\x3d\40\45\163\x20\101\x4e\104\x20\x60\x6d\x65\x74\x61\137\166\141\154\165\x65\140\40\x3d\40\x25\163", array($this->phone_key, $JG)));
        return !MoUtility::is_blank($lR) ? get_userdata($lR->user_id) : false;
    }
    public function check_reset_password_limit($form, $Uv)
    {
        $SC = (int) get_user_meta($Uv, "\160\141\163\x73\x77\157\162\x64\137\x72\163\164\137\141\x74\x74\145\155\x70\164\x73", true);
        $yi = user_can(intval($Uv), "\155\x61\156\x61\147\x65\137\x6f\160\164\x69\157\156\163");
        if (!$this->getUmOptions()->get("\x65\156\x61\x62\154\x65\x5f\162\x65\163\x65\x74\x5f\x70\141\x73\163\x77\x6f\x72\x64\x5f\x6c\151\155\151\164")) {
            goto oC;
        }
        if ($this->getUmOptions()->get("\x64\151\163\141\x62\x6c\x65\137\x61\x64\155\x69\156\137\162\145\x73\x65\x74\137\x70\x61\x73\x73\167\157\162\x64\x5f\x6c\x69\x6d\x69\x74") && $yi) {
            goto az;
        }
        $mt = $this->getUmOptions()->get("\162\145\x73\x65\x74\137\x70\x61\163\x73\x77\x6f\162\x64\x5f\x6c\x69\x6d\151\x74\x5f\x6e\165\155\142\145\162");
        if ($SC >= $mt) {
            goto vW;
        }
        update_user_meta($Uv, "\160\x61\x73\163\167\x6f\x72\144\x5f\162\x73\164\x5f\x61\164\x74\x65\155\160\x74\x73", $SC + 1);
        goto wa;
        vW:
        $form->add_error($this->field_key, __("\131\x6f\165\x20\x68\x61\166\145\x20\x72\145\141\x63\150\145\144\x20\164\150\x65\40\x6c\x69\x6d\151\164\x20\146\x6f\x72\40\162\145\x71\x75\145\x73\164\151\x6e\x67\40\160\141\163\163\167\157\162\144\40\x22\56\xd\12\40\x20\x20\x20\40\x20\40\40\40\40\x20\40\x20\x20\x20\40\x20\40\x20\40\42\143\x68\141\156\147\145\x20\146\157\162\40\x74\150\151\163\40\x75\163\x65\x72\x20\141\x6c\x72\145\x61\x64\171\x2e\x20\x43\x6f\156\164\x61\143\x74\40\x73\x75\x70\160\x6f\x72\164\x20\151\x66\x20\171\157\x75\40\x63\x61\156\156\x6f\x74\x20\x6f\x70\145\156\40\x74\150\145\40\145\x6d\141\x69\154", "\165\x6c\164\x69\x6d\x61\164\x65\x2d\x6d\145\155\x62\145\x72"));
        wa:
        goto gL;
        az:
        return;
        gL:
        oC:
    }
    private function getum_formObj()
    {
        if ($this->isUltimateMemberV2Installed()) {
            goto yh;
        }
        global $ultimatemember;
        return $ultimatemember->form;
        goto px;
        yh:
        return UM()->form();
        px:
    }
    private function getUmUserObj()
    {
        if ($this->isUltimateMemberV2Installed()) {
            goto Ki;
        }
        global $ultimatemember;
        return $ultimatemember->user;
        goto jU;
        Ki:
        return UM()->user();
        jU:
    }
    private function getUmpwd_obj()
    {
        if ($this->isUltimateMemberV2Installed()) {
            goto W3;
        }
        global $ultimatemember;
        return $ultimatemember->password;
        goto eO;
        W3:
        return UM()->password();
        eO:
    }
    private function getUmOptions()
    {
        if ($this->isUltimateMemberV2Installed()) {
            goto bL;
        }
        global $ultimatemember;
        return $ultimatemember->options;
        goto t2;
        bL:
        return UM()->options();
        t2:
    }
    private function isUltimateMemberV2Installed()
    {
        if (!function_exists("\x69\x73\137\160\x6c\x75\x67\151\156\x5f\x61\x63\164\151\166\145")) {
            include_once ABSPATH . "\167\160\55\141\x64\x6d\x69\x6e\57\151\x6e\143\154\165\144\x65\x73\x2f\160\154\165\x67\151\156\56\x70\x68\160";
        }
        return is_plugin_active("\165\x6c\x74\x69\x6d\141\164\145\55\x6d\145\155\142\x65\162\57\x75\154\x74\x69\x6d\x61\x74\145\55\155\145\155\142\145\162\56\x70\x68\x70");
    }
    private function startOtpTransaction($JG, $ZG, $errors, $bV, $L8, $ia)
    {
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto rQ;
        }
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::EMAIL, $L8, $ia);
        goto UG;
        rQ:
        $this->send_challenge($JG, $ZG, $errors, $bV, VerificationType::PHONE, $L8, $ia);
        UG:
    }
    public function miniorange_register_um_script()
    {
        wp_register_script("\x6d\157\165\155\x70\162", UMPR_URL . "\x69\156\143\x6c\x75\x64\x65\x73\x2f\x6a\x73\57\x6d\157\x75\x6d\x70\162\56\x6d\151\x6e\x2e\x6a\163", array("\x6a\161\165\x65\162\171"), MOV_VERSION, true);
        wp_localize_script("\x6d\157\165\155\x70\162", "\x6d\157\x75\x6d\x70\x72\x76\x61\x72", array("\163\151\164\x65\x55\122\114" => wp_ajax_url(), "\156\x6f\156\x63\145" => wp_create_nonce($this->nonce), "\x62\165\x74\164\x6f\156\164\145\x78\164" => mo_($this->button_text), "\151\155\x67\125\122\114" => MOV_LOADER_URL, "\x61\143\164\151\x6f\156" => array("\163\x65\x6e\144" => $this->generate_otp_action), "\146\151\145\x6c\144\x4b\x65\x79" => $this->field_key, "\162\x65\163\x65\164\x4c\x61\x62\145\x6c\124\145\x78\x74" => UMPasswordResetMessages::showMessage($this->is_only_phone_reset ? UMPasswordResetMessages::RESET_LABEL_OP : UMPasswordResetMessages::RESET_LABEL), "\160\150\124\145\170\164" => $this->is_only_phone_reset ? mo_("\105\x6e\x74\145\162\40\131\x6f\x75\162\x20\x50\150\157\x6e\145\40\x4e\165\x6d\x62\x65\x72") : mo_("\x45\156\x74\x65\x72\x20\x59\157\165\162\40\105\x6d\x61\151\x6c\x2c\x20\x55\163\145\x72\x6e\141\155\x65\40\157\162\40\120\150\157\156\x65\40\x4e\165\155\x62\x65\162")));
        wp_enqueue_script("\155\157\165\155\160\162");
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VERIFICATION_FAILED, $I2);
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto ln;
        }
        return;
        ln:
        $this->is_form_enabled = $this->sanitize_form_post("\165\x6d\137\160\162\x5f\x65\156\x61\142\154\145");
        $this->button_text = $this->sanitize_form_post("\x75\x6d\x5f\160\162\137\x62\165\x74\x74\x6f\x6e\137\164\145\x78\x74");
        $this->button_text = $this->button_text ? $this->button_text : "\x52\x65\x73\145\164\40\x50\141\163\163\x77\x6f\x72\144";
        $this->otp_type = $this->sanitize_form_post("\165\x6d\x5f\160\x72\x5f\145\156\141\142\x6c\x65\x5f\x74\171\160\145");
        $this->phone_key = $this->sanitize_form_post("\165\155\x5f\160\162\x5f\x70\x68\x6f\156\x65\137\x66\151\145\154\x64\137\x6b\145\x79");
        $this->is_only_phone_reset = $this->sanitize_form_post("\x75\x6d\x5f\160\x72\137\157\156\x6c\x79\137\160\150\x6f\x6e\x65");
        update_umpr_option("\x6f\x6e\154\171\137\x70\150\x6f\156\145\137\x72\x65\163\145\x74", $this->is_only_phone_reset);
        update_umpr_option("\160\141\x73\163\137\x65\156\x61\142\154\x65", $this->is_form_enabled);
        update_umpr_option("\160\141\x73\163\137\142\165\164\164\157\156\137\x74\x65\170\x74", $this->button_text);
        update_umpr_option("\145\156\141\x62\154\x65\x64\137\x74\171\x70\145", $this->otp_type);
        update_umpr_option("\x70\141\163\163\x70\150\157\156\145\x5f\x6b\x65\171", $this->phone_key);
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && strcasecmp($this->otp_type, $this->type_phone_tag) === 0)) {
            goto VR;
        }
        array_push($MI, $this->phone_form_id);
        VR:
        return $MI;
    }
    public function getIsOnlyPhoneReset()
    {
        return $this->is_only_phone_reset;
    }
}
qW:
