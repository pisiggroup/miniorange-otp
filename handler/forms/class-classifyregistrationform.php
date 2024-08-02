<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\x53\120\101\124\x48")) {
    goto Y8;
}
exit;
Y8:
use OTP\Helper\FormSessionVars;
use OTP\Helper\MoFormDocs;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Traits\Instance;
use OTP\Objects\BaseMessages;
use ReflectionException;
if (class_exists("\103\154\141\163\x73\x69\146\x79\122\145\x67\x69\163\x74\x72\141\x74\x69\x6f\x6e\x46\x6f\162\x6d")) {
    goto wE;
}
class ClassifyRegistrationForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = false;
        $this->form_session_var = FormSessionVars::CLASSIFY_REGISTER;
        $this->type_phone_tag = "\143\154\x61\x73\163\151\x66\x79\137\160\150\157\156\145\x5f\145\156\141\142\x6c\x65";
        $this->type_email_tag = "\143\x6c\x61\x73\163\151\x66\171\x5f\x65\155\141\151\154\x5f\145\156\x61\142\154\145";
        $this->form_key = "\103\114\101\123\x53\111\x46\x59\137\122\105\x47\x49\x53\x54\105\x52";
        $this->form_name = mo_("\103\x6c\141\x73\163\x69\146\171\x20\124\150\145\x6d\x65\x20\122\x65\147\x69\163\x74\x72\x61\164\x69\x6f\x6e\40\x46\x6f\162\x6d");
        $this->is_form_enabled = get_mo_option("\143\154\141\163\x73\151\146\x79\137\x65\156\141\142\x6c\145");
        $this->phone_form_id = "\151\156\x70\165\164\x5b\x6e\141\155\x65\75\160\x68\x6f\156\145\135";
        $this->form_documents = MoFormDocs::CLASSIFY_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\143\154\141\x73\x73\151\x66\x79\x5f\x74\171\x70\145");
        add_action("\167\160\x5f\145\156\x71\x75\x65\x75\145\x5f\x73\x63\162\151\x70\164\163", array($this, "\163\x68\x6f\167\x5f\160\150\157\x6e\x65\x5f\x66\151\145\154\x64\x5f\x6f\156\137\160\x61\x67\145"));
        add_action("\x75\x73\x65\162\137\x72\x65\x67\151\x73\164\x65\162", array($this, "\x73\x61\166\x65\137\160\x68\157\x6e\145\x5f\x6e\165\x6d\x62\x65\162"), 10, 1);
        $this->routeData();
    }
    public function routeData()
    {
        if (wp_verify_nonce(MoUtility::sanitize_check("\x6d\157\x5f\x63\154\141\x73\163\x69\x66\171\137\164\x68\x65\155\145\137\156\157\156\143\x65", $_POST), $this->nonce)) {
            goto DC;
        }
        return;
        DC:
        $GX = MoUtility::mo_sanitize_array($_POST);
        if (SessionUtils::is_status_match($this->form_session_var, self::VALIDATED, $this->get_verification_type())) {
            goto nx;
        }
        if (MoUtility::sanitize_check("\157\160\x74\151\x6f\156", $GX) === "\166\x65\x72\x69\146\171\x5f\x75\x73\145\x72\x5f\143\154\141\163\x73\151\146\171") {
            goto Od;
        }
        goto JP;
        nx:
        $this->unset_otp_session_variables();
        goto JP;
        Od:
        $this->handle_classify_theme_form_post($GX);
        JP:
    }
    public function show_phone_field_on_page()
    {
        wp_register_script("\x63\154\x61\x73\x73\151\146\x79\163\143\162\x69\160\164", MOV_URL . "\x69\x6e\143\x6c\165\x64\145\x73\57\x6a\163\x2f\143\x6c\141\163\x73\x69\146\171\x2e\x6d\x69\x6e\56\152\163\x3f\166\145\162\163\x69\x6f\x6e\x3d" . MOV_VERSION, array("\x6a\x71\165\x65\x72\171"), MOV_VERSION, false);
        wp_localize_script("\143\154\141\163\x73\151\146\171\x73\143\x72\151\x70\164", "\x63\x6c\x61\x73\x73\x69\146\171\x73\x63\x72\151\x70\164", array("\156\x6f\x6e\x63\145" => wp_create_nonce($this->nonce)));
        wp_enqueue_script("\x63\x6c\x61\163\163\151\146\x79\x73\143\x72\x69\160\x74");
    }
    public function handle_classify_theme_form_post($GX)
    {
        $JG = sanitize_text_field($GX["\x75\163\145\x72\x6e\x61\155\x65"]);
        $tw = sanitize_email($GX["\x65\x6d\141\x69\x6c"]);
        $M9 = sanitize_text_field($GX["\160\x68\x6f\156\x65"]);
        if (!(username_exists($JG) !== false)) {
            goto sm;
        }
        return;
        sm:
        if (!(email_exists($tw) !== false)) {
            goto EO;
        }
        return;
        EO:
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto ir;
        }
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0) {
            goto CH;
        }
        $this->send_challenge(sanitize_text_field($GX["\x75\163\145\x72\x6e\141\155\145"]), $tw, null, $M9, "\x62\157\164\150", null, null);
        goto A3;
        ir:
        $this->send_challenge(sanitize_text_field($GX["\165\163\145\x72\156\x61\155\145"]), $tw, null, $M9, "\160\x68\157\x6e\x65", null, null);
        goto A3;
        CH:
        $this->send_challenge(sanitize_text_field($GX["\x75\x73\145\162\x6e\141\155\x65"]), $tw, null, null, "\x65\x6d\141\151\154", null, null);
        A3:
    }
    public function save_phone_number($Uv)
    {
        $bV = MoPHPSessions::get_session_var("\x70\x68\157\x6e\145\x5f\x6e\165\155\142\x65\162\137\155\157");
        if (!$bV) {
            goto e3;
        }
        update_user_meta($Uv, "\160\150\x6f\156\145", $bV);
        e3:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto Mc;
        }
        return;
        Mc:
        $Bo = strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? "\160\x68\x6f\x6e\x65" : (strcasecmp($this->otp_type, $this->type_email_tag) === 0 ? "\145\155\x61\x69\154" : "\x62\157\x74\x68");
        $Df = strcasecmp($Bo, "\x62\157\164\150") === 0 ? true : false;
        miniorange_site_otp_validation_form($kD, $Wb, $bV, MoUtility::get_invalid_otp_method(), $Bo, $Df);
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        SessionUtils::add_status($this->form_session_var, self::VALIDATED, $I2);
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->form_session_var, $this->tx_session_id));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto O1;
        }
        array_push($MI, $this->phone_form_id);
        O1:
        return $MI;
    }
    public function handle_form_options()
    {
        if (!(!MoUtility::are_form_options_being_saved($this->get_form_option()) || !current_user_can("\155\x61\x6e\141\147\145\137\157\160\x74\x69\x6f\156\163") || !check_admin_referer($this->admin_nonce))) {
            goto Ot;
        }
        return;
        Ot:
        $this->otp_type = $this->sanitize_form_post("\143\x6c\x61\x73\163\151\146\x79\x5f\x74\x79\160\x65");
        $this->is_form_enabled = $this->sanitize_form_post("\x63\154\141\163\163\151\x66\x79\x5f\x65\x6e\141\x62\154\145");
        update_mo_option("\x63\154\141\163\x73\x69\146\171\x5f\x65\156\141\142\154\145", $this->is_form_enabled);
        update_mo_option("\143\154\141\163\163\151\x66\x79\137\164\x79\160\x65", $this->otp_type);
    }
}
wE:
