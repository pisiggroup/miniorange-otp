<?php


namespace OTP\Handler\Forms;

if (defined("\x41\x42\123\x50\101\x54\x48")) {
    goto C5D;
}
exit;
C5D:
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
use WP_Comment;
if (class_exists("\127\x6f\162\144\x50\162\x65\163\163\103\x6f\155\155\145\x6e\x74\x73")) {
    goto lWB;
}
class WordPressComments extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::WPCOMMENT;
        $this->phone_form_id = "\151\156\160\x75\164\133\x6e\x61\x6d\145\x3d\x70\150\x6f\156\145\x5d";
        $this->form_key = "\127\120\x43\117\x4d\115\105\116\124";
        $this->type_phone_tag = "\155\157\x5f\167\x70\143\157\155\x6d\x65\x6e\164\137\x70\x68\x6f\x6e\x65\137\145\x6e\x61\142\154\145";
        $this->type_email_tag = "\155\157\137\x77\160\x63\x6f\155\x6d\x65\156\x74\x5f\145\x6d\141\151\x6c\x5f\x65\156\x61\142\x6c\x65";
        $this->form_name = mo_("\127\157\162\144\x50\x72\145\x73\163\x20\103\x6f\x6d\x6d\x65\156\164\x20\106\157\162\155");
        $this->is_form_enabled = get_mo_option("\167\160\x63\x6f\155\x6d\145\156\x74\137\x65\156\x61\142\154\145");
        $this->form_documents = MoFormDocs::WP_COMMENT_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        $this->otp_type = get_mo_option("\x77\160\x63\157\155\155\x65\156\x74\137\x65\x6e\x61\x62\154\x65\137\x74\171\x70\145");
        $this->by_pass_login = get_mo_option("\x77\160\143\x6f\x6d\x6d\145\x6e\164\137\145\156\141\x62\154\x65\137\x66\157\162\x5f\x6c\x6f\147\x67\x65\x64\151\156\x5f\165\163\x65\162\163");
        if (!$this->by_pass_login) {
            goto dNf;
        }
        add_filter("\x63\x6f\x6d\155\x65\x6e\x74\137\146\157\162\x6d\x5f\144\145\146\x61\165\x6c\164\x5f\146\x69\145\x6c\x64\163", array($this, "\141\x64\144\137\x63\165\x73\x74\157\155\x5f\x66\x69\x65\154\x64\x73"), 99, 1);
        goto l1Z;
        dNf:
        add_action("\x63\x6f\155\x6d\145\156\x74\x5f\x66\157\162\155\x5f\x6c\x6f\x67\x67\x65\x64\137\151\156\x5f\141\146\x74\145\x72", array($this, "\141\x64\x64\137\163\x63\162\151\160\x74\163\x5f\141\156\x64\x5f\x61\144\144\x69\x74\x69\157\156\141\x6c\137\146\x69\145\x6c\144\163"), 1);
        add_action("\x63\x6f\x6d\155\145\x6e\x74\x5f\x66\157\x72\x6d\x5f\141\x66\x74\145\162\137\x66\x69\145\154\x64\x73", array($this, "\141\x64\144\x5f\x73\143\162\x69\160\x74\163\x5f\x61\x6e\144\137\x61\144\x64\151\x74\x69\x6f\156\141\154\137\x66\151\x65\x6c\144\163"), 1);
        l1Z:
        add_filter("\x70\162\x65\160\x72\x6f\x63\x65\x73\163\x5f\143\x6f\155\155\x65\156\x74", array($this, "\166\x65\x72\151\x66\x79\137\143\157\x6d\x6d\x65\156\164\x5f\155\145\164\141\x5f\x64\x61\164\x61"), 1, 1);
        add_action("\x63\x6f\x6d\155\x65\x6e\164\137\160\157\163\x74", array($this, "\163\x61\166\145\137\143\157\155\x6d\145\x6e\x74\137\155\x65\164\x61\137\144\141\x74\141"), 1, 1);
        add_action("\x61\x64\144\x5f\155\145\164\x61\137\x62\157\170\x65\163\137\x63\x6f\x6d\x6d\x65\156\164", array($this, "\145\x78\x74\145\x6e\x64\137\143\x6f\x6d\x6d\x65\x6e\x74\x5f\x61\x64\x64\x5f\155\x65\164\x61\137\142\x6f\x78"), 1, 1);
        add_action("\x65\144\x69\164\x5f\143\157\x6d\155\145\156\164", array($this, "\x65\170\x74\145\156\144\x5f\x63\x6f\155\155\x65\156\x74\x5f\x65\x64\x69\164\137\x6d\x65\x74\x61\x66\x69\x65\x6c\x64\x73"), 1, 1);
        $nB = wp_create_nonce("\x77\160\137\143\157\155\x6d\x65\x6e\164\163\x5f\x6e\x6f\156\x63\145");
        if (!(!wp_verify_nonce($nB, "\167\160\137\x63\157\155\155\x65\156\164\x73\137\x6e\x6f\x6e\143\145") === 1)) {
            goto mI0;
        }
        return;
        mI0:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        $Jz = MoUtility::mo_sanitize_array($_GET);
        $this->routeData($w3, $Jz);
    }
    private function routeData($w3, $Jz)
    {
        if (array_key_exists("\157\160\x74\x69\x6f\156", $Jz)) {
            goto hwo;
        }
        return;
        hwo:
        switch (trim(sanitize_text_field($Jz["\x6f\x70\x74\151\157\156"]))) {
            case "\155\x6f\x2d\x63\x6f\155\155\145\156\x74\163\x2d\166\145\162\x69\146\x79":
                $this->startOTPVerificationProcess($w3);
                goto K4v;
        }
        MW4:
        K4v:
    }
    private function startOTPVerificationProcess($Jz)
    {
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_email_tag) === 0 && MoUtility::sanitize_check("\165\163\145\x72\137\145\155\x61\151\154", $Jz)) {
            goto iIG;
        }
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0 && MoUtility::sanitize_check("\x75\x73\145\x72\137\x70\150\157\156\x65", $Jz)) {
            goto B0L;
        }
        $WZ = strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? MoMessages::showMessage(MoMessages::ENTER_PHONE) : MoMessages::showMessage(MoMessages::ENTER_EMAIL);
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        goto EKj;
        iIG:
        SessionUtils::add_email_verified($this->form_session_var, sanitize_email($Jz["\165\163\145\162\x5f\x65\x6d\141\x69\154"]));
        $this->send_challenge('', sanitize_email($Jz["\x75\163\x65\162\x5f\145\155\x61\151\x6c"]), null, sanitize_email($Jz["\165\163\145\x72\137\145\x6d\x61\x69\154"]), VerificationType::EMAIL);
        goto EKj;
        B0L:
        SessionUtils::add_phone_verified($this->form_session_var, trim(sanitize_text_field($Jz["\x75\x73\145\162\137\160\150\x6f\x6e\x65"])));
        $this->send_challenge('', '', null, trim(sanitize_text_field($Jz["\x75\163\145\162\x5f\160\x68\x6f\156\145"])), VerificationType::PHONE);
        EKj:
    }
    public function extend_comment_edit_metafields($S3)
    {
        $nB = wp_create_nonce("\x77\160\137\143\x6f\155\x6d\x65\x6e\x74\x73\137\156\x6f\156\x63\145");
        if (wp_verify_nonce($nB, "\167\160\137\143\x6f\155\x6d\x65\x6e\164\x73\137\x6e\x6f\156\143\x65")) {
            goto FTh;
        }
        return;
        FTh:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        if (!(!isset($w3["\x65\170\x74\145\x6e\x64\137\x63\x6f\155\155\x65\156\164\137\x75\160\x64\141\164\x65"]) || !wp_verify_nonce(sanitize_text_field($w3["\145\170\x74\145\156\144\x5f\x63\x6f\155\x6d\145\156\164\137\x75\x70\144\141\x74\145"]), "\x65\170\x74\x65\156\x64\x5f\143\157\155\x6d\145\156\164\137\x75\x70\x64\x61\x74\145"))) {
            goto GJY;
        }
        return;
        GJY:
        if (isset($w3["\160\x68\157\156\x65"]) && sanitize_text_field($w3["\x70\150\x6f\x6e\145"]) !== '') {
            goto pw1;
        }
        delete_comment_meta($S3, "\x70\150\157\x6e\145");
        goto Cnz;
        pw1:
        $M9 = sanitize_text_field($w3["\160\150\157\x6e\145"]);
        $M9 = wp_filter_nohtml_kses($M9);
        update_comment_meta($S3, "\x70\x68\x6f\x6e\145", $M9);
        Cnz:
    }
    public function extend_comment_add_meta_box()
    {
        add_meta_box("\x74\151\x74\x6c\145", mo_("\105\170\164\x72\141\x20\x46\151\145\x6c\x64\163"), array($this, "\145\170\164\x65\156\144\137\143\157\155\155\x65\156\164\x5f\155\145\164\141\137\142\x6f\170"), "\143\157\155\x6d\x65\x6e\x74", "\156\x6f\x72\155\x61\x6c", "\150\151\147\x68");
    }
    private function extend_comment_meta_box($OJ)
    {
        $M9 = get_comment_meta($OJ->comment_ID, "\x70\150\x6f\156\145", true);
        wp_nonce_field("\x65\x78\x74\145\x6e\144\x5f\x63\x6f\x6d\x6d\145\156\x74\137\165\x70\x64\141\x74\x65", "\x65\170\164\x65\x6e\x64\137\143\x6f\155\155\145\156\164\x5f\165\x70\x64\x61\x74\x65", false);
        echo "\x3c\x74\141\x62\x6c\x65\x20\x63\x6c\x61\x73\163\x3d\42\146\157\x72\155\x2d\164\x61\142\x6c\x65\40\145\144\151\164\143\157\155\155\145\156\x74\42\76\xd\12\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\40\x20\40\x20\40\x3c\164\142\157\x64\171\x3e\15\xa\x20\40\x20\40\x20\40\x20\40\x20\40\x20\x20\40\x20\x20\40\74\x74\x72\76\xd\xa\x20\x20\x20\40\x20\40\40\x20\40\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\x3c\x74\x64\40\143\154\141\x73\x73\x3d\x22\146\151\x72\x73\x74\42\76\x3c\x6c\141\142\x65\x6c\40\x66\157\162\x3d\x22\160\150\x6f\x6e\145\x22\x3e" . esc_html(mo_("\x50\x68\157\156\x65")) . "\72\74\57\154\x61\142\145\154\76\x3c\x2f\x74\144\x3e\15\xa\40\x20\x20\40\40\40\40\40\x20\40\x20\40\x20\x20\40\40\x20\40\40\x20\74\164\x64\x3e\74\x69\x6e\160\165\164\x20\x74\x79\x70\145\x3d\x22\x74\x65\170\164\x22\x20\x6e\x61\x6d\145\x3d\x22\x70\x68\x6f\x6e\x65\x22\40\163\151\x7a\x65\x3d\x22\63\x30\x22\40\166\141\x6c\x75\x65\x3d\42" . esc_attr($M9) . "\x22\40\151\144\x3d\x22\x70\x68\x6f\156\145\42\x3e\x3c\x2f\x74\144\76\15\12\40\40\40\x20\x20\40\40\40\40\x20\40\x20\40\x20\40\40\74\x2f\164\x72\76\xd\12\40\40\x20\x20\40\x20\x20\x20\40\x20\40\x20\40\x20\x20\x20\x3c\57\164\x62\x6f\144\171\x3e\15\12\x20\x20\40\x20\x20\x20\40\40\40\x20\40\40\x3c\57\164\141\x62\154\x65\x3e";
    }
    public function verify_comment_meta_data($vF)
    {
        if (!(isset($_POST["\x5f\167\160\x5f\165\x6e\x66\151\x6c\164\x65\x72\x65\x64\x5f\150\164\x6d\x6c\x5f\143\157\x6d\155\145\156\164"]) && isset($_POST["\143\x6f\x6d\x6d\x65\x6e\164\x5f\x70\157\x73\164\x5f\111\x44"]))) {
            goto N_v;
        }
        if (wp_verify_nonce(sanitize_key($_POST["\x5f\x77\x70\x5f\165\x6e\x66\151\154\x74\145\x72\145\144\137\150\164\x6d\x6c\137\143\x6f\155\155\x65\x6e\x74"]), "\x75\156\x66\x69\x6c\x74\x65\162\x65\144\55\150\164\x6d\x6c\x2d\143\x6f\155\x6d\145\156\164\137" . sanitize_text_field(wp_unslash($_POST["\143\x6f\155\155\145\x6e\164\x5f\160\x6f\x73\x74\x5f\111\x44"])))) {
            goto NHY;
        }
        return;
        NHY:
        N_v:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        if (!($this->by_pass_login && is_user_logged_in())) {
            goto KZ8;
        }
        return $vF;
        KZ8:
        if (!(!isset($w3["\160\150\x6f\x6e\x65"]) && strcasecmp($this->otp_type, $this->type_phone_tag) === 0)) {
            goto Do7;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::WPCOMMNENT_PHONE_ENTER)));
        Do7:
        if (isset($w3["\x76\x65\162\151\146\x79\x6f\x74\160"])) {
            goto ReM;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::WPCOMMNENT_VERIFY_ENTER)));
        ReM:
        $Bo = $this->get_verification_type();
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto VeS;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::PLEASE_VALIDATE)));
        VeS:
        if (!(VerificationType::EMAIL === $Bo && !SessionUtils::is_email_verified_match($this->form_session_var, sanitize_email($w3["\145\155\x61\151\154"])))) {
            goto aoM;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH)));
        aoM:
        if (!(VerificationType::PHONE === $Bo && !SessionUtils::is_phone_verified_match($this->form_session_var, sanitize_text_field($w3["\x70\150\x6f\x6e\145"])))) {
            goto gt_;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::PHONE_MISMATCH)));
        gt_:
        $this->validate_challenge($Bo, null, sanitize_text_field($w3["\166\x65\x72\x69\146\171\157\164\x70"]));
        return $vF;
    }
    public function add_scripts_and_additional_fields()
    {
        if (!(strcasecmp($this->otp_type, $this->type_email_tag) === 0)) {
            goto Kug;
        }
        echo wp_kses($this->getFieldHTML("\145\x6d\x61\151\x6c"), MoUtility::mo_allow_html_array());
        Kug:
        if (!(strcasecmp($this->otp_type, $this->type_phone_tag) === 0)) {
            goto D3c;
        }
        echo wp_kses($this->getFieldHTML("\160\150\157\156\145"), MoUtility::mo_allow_html_array());
        D3c:
        echo wp_kses($this->getFieldHTML("\x76\x65\162\151\146\171\157\x74\160"), MoUtility::mo_allow_html_array());
    }
    public function add_custom_fields($Z3)
    {
        if (!(strcasecmp($this->otp_type, $this->type_email_tag) === 0)) {
            goto OJo;
        }
        $Z3["\145\x6d\141\x69\154"] = $this->getFieldHTML("\x65\155\141\151\x6c");
        OJo:
        if (!(strcasecmp($this->otp_type, $this->type_phone_tag) === 0)) {
            goto rdS;
        }
        $Z3["\160\x68\157\156\145"] = $this->getFieldHTML("\160\150\x6f\x6e\145");
        rdS:
        $Z3["\166\x65\162\x69\146\x79\x6f\x74\160"] = $this->getFieldHTML("\166\145\x72\151\x66\171\x6f\x74\160");
        return $Z3;
    }
    private function getFieldHTML($ER)
    {
        $ud = array("\145\155\141\x69\154" => (!is_user_logged_in() && !$this->by_pass_login ? '' : "\x3c\x70\40\x63\154\x61\163\163\x3d\x22\x63\x6f\155\155\x65\156\164\x2d\x66\x6f\162\155\x2d\x65\x6d\x61\151\x6c\42\x3e" . "\x3c\154\x61\142\x65\x6c\40\146\157\x72\x3d\42\x65\155\x61\x69\x6c\42\76" . mo_("\x45\155\141\151\x6c\x20\52") . "\x3c\x2f\154\141\142\x65\154\76" . "\74\151\x6e\160\x75\x74\x20\x69\144\75\42\x65\x6d\141\151\x6c\x22\x20\156\141\155\145\75\x22\x65\155\141\151\x6c\42\x20\164\x79\160\x65\x3d\x22\x74\x65\x78\x74\x22\x20\163\151\172\x65\75\x22\63\60\42\x20\x20\x74\x61\x62\x69\156\x64\x65\170\75\x22\x34\42\40\57\76" . "\74\x2f\x70\76") . $this->get_otp_html_content("\x65\x6d\141\151\154"), "\x70\x68\157\x6e\145" => "\74\x70\40\143\154\x61\x73\x73\75\42\x63\157\x6d\155\145\156\164\55\146\x6f\x72\x6d\x2d\x65\155\141\151\154\x22\x3e" . "\74\x6c\141\142\x65\x6c\40\x66\x6f\x72\x3d\x22\160\150\x6f\156\145\42\x3e" . mo_("\120\150\157\156\x65\x20\x2a") . "\x3c\57\154\x61\x62\145\154\76" . "\74\x69\156\160\x75\164\x20\x69\x64\75\x22\160\x68\157\x6e\145\x22\x20\x6e\141\x6d\145\75\42\x70\150\157\x6e\x65\x22\x20\164\x79\x70\145\75\42\164\x65\170\x74\x22\40\x73\151\x7a\x65\75\x22\x33\60\x22\x20\40\x74\141\142\151\156\144\145\170\x3d\42\64\42\40\57\x3e" . "\x3c\57\160\76" . $this->get_otp_html_content("\160\x68\157\x6e\x65"), "\x76\x65\x72\x69\146\x79\x6f\164\x70" => "\x3c\x70\x20\143\x6c\x61\x73\x73\x3d\x22\x63\157\x6d\155\x65\156\164\55\x66\x6f\x72\155\x2d\x65\155\x61\x69\154\42\76" . "\74\x6c\141\x62\145\154\x20\x66\157\x72\x3d\x22\x76\145\x72\151\146\171\157\x74\160\42\x3e" . mo_("\126\145\x72\151\x66\151\x63\141\164\x69\x6f\156\x20\103\157\x64\145") . "\x3c\57\x6c\x61\x62\145\154\76" . "\x3c\151\x6e\160\x75\164\40\151\144\75\42\166\145\162\x69\x66\171\x6f\x74\160\x22\x20\156\141\155\x65\75\42\166\145\x72\151\x66\171\x6f\164\x70\x22\40\x74\171\x70\x65\75\42\x74\145\x78\x74\x22\x20\x73\151\172\145\x3d\42\63\x30\x22\x20\x20\x74\141\142\151\x6e\144\x65\170\75\42\64\x22\x20\57\x3e" . "\x3c\x2f\x70\76\x3c\x62\x72\x3e");
        return $ud[$ER];
    }
    private function get_otp_html_content($FL)
    {
        $b3 = "\74\144\x69\166\40\x73\x74\x79\x6c\x65\x3d\x27\x64\x69\x73\x70\154\141\171\72\x74\x61\x62\x6c\x65\x3b\x74\145\x78\x74\55\141\154\151\147\156\72\x63\145\156\x74\x65\x72\73\x27\76\x3c\151\155\x67\40\163\x72\x63\x3d\x27" . MOV_URL . "\151\x6e\x63\154\x75\144\145\163\57\151\155\141\x67\145\x73\57\154\x6f\141\144\x65\x72\x2e\x67\151\x66\47\76\74\x2f\144\151\166\x3e";
        $qW = "\74\x64\x69\x76\40\163\x74\x79\154\x65\x3d\x22\155\x61\x72\x67\x69\156\x2d\x62\x6f\x74\164\157\x6d\x3a\x33\45\x22\x3e\74\x69\x6e\160\165\x74\40\x74\x79\x70\x65\x3d\x22\x62\165\x74\x74\157\x6e\42\x20\143\x6c\141\x73\x73\x3d\x22\x62\x75\x74\164\157\156\x20\x61\x6c\164\42\x20\x73\x74\171\154\x65\75\42\x77\151\x64\x74\150\x3a\61\x30\x30\45\x22\40\151\144\75\x22\155\151\x6e\x69\x6f\162\141\156\147\145\137\157\164\160\137\x74\x6f\153\145\156\137\163\x75\x62\155\151\x74\42\40";
        $qW .= strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? "\x74\x69\164\x6c\x65\x3d\42\x50\154\x65\141\163\145\x20\x45\156\x74\145\x72\x20\x61\40\x70\x68\157\x6e\x65\40\156\165\x6d\x62\x65\x72\40\x74\x6f\40\145\x6e\141\x62\154\145\40\164\150\x69\163\x2e\42\x20" : "\x74\x69\x74\154\145\x3d\x22\120\x6c\145\x61\x73\145\x20\105\x6e\x74\145\162\40\x61\40\145\155\x61\151\x6c\40\x6e\165\x6d\142\x65\162\x20\x74\157\40\x65\x6e\x61\x62\154\145\40\x74\150\x69\x73\56\x22\40";
        $qW .= strcasecmp($this->otp_type, $this->type_phone_tag) === 0 ? "\166\x61\x6c\165\145\x3d\42\x43\x6c\151\x63\x6b\x20\x68\x65\162\145\x20\164\157\40\166\x65\162\x69\146\x79\x20\x79\157\165\162\x20\x50\x68\157\156\x65\x22\76" : "\166\141\x6c\165\145\75\42\103\x6c\151\143\x6b\40\150\145\162\145\x20\x74\157\x20\x76\x65\162\x69\146\171\x20\x79\x6f\165\162\x20\x45\155\141\151\x6c\42\76";
        $qW .= "\74\x64\x69\x76\x20\x69\x64\x3d\x22\155\157\x5f\155\x65\x73\x73\141\147\x65\x22\40\150\x69\144\x64\x65\156\75\42\42\40\163\164\171\x6c\x65\75\x22\x62\x61\x63\x6b\147\x72\157\x75\156\144\x2d\x63\157\x6c\157\x72\x3a\40\43\x66\x37\x66\x36\146\67\x3b\x70\141\x64\144\x69\156\147\x3a\x20\61\145\155\x20\x32\145\x6d\40\x31\x65\x6d\x20\x33\56\65\x65\155\73\x22\x3e\x3c\57\x64\151\166\x3e\x3c\x2f\144\151\166\76";
        $qW .= "\74\x73\x63\162\x69\160\164\x3e\x6a\x51\165\145\x72\171\x28\144\157\x63\165\x6d\145\x6e\x74\x29\x2e\162\145\141\144\x79\x28\x66\x75\156\x63\164\151\157\x6e\50\x29\x7b\x24\x6d\x6f\x3d\x6a\121\165\x65\x72\x79\73\x24\x6d\157\x28\x22\43\x6d\x69\156\151\157\162\141\x6e\147\x65\137\x6f\x74\160\x5f\164\x6f\153\145\156\137\x73\x75\142\155\151\164\42\x29\x2e\x63\x6c\x69\143\x6b\x28\x66\165\156\143\164\x69\157\156\x28\157\51\173";
        $qW .= "\166\141\x72\x20\x65\x3d\44\155\x6f\x28\42\151\156\160\x75\x74\x5b\x6e\x61\x6d\x65\75" . $FL . "\x5d\x22\x29\56\x76\x61\x6c\x28\51\73\44\x6d\x6f\50\42\43\x6d\x6f\137\x6d\x65\163\x73\x61\147\x65\x22\51\56\x65\155\160\x74\x79\x28\x29\54\44\x6d\x6f\50\42\43\155\157\137\155\x65\x73\x73\141\x67\x65\42\x29\56\141\x70\x70\145\x6e\144\x28\42" . $b3 . "\42\51\x2c";
        $qW .= "\x24\155\157\x28\42\43\x6d\157\x5f\x6d\x65\x73\163\141\x67\x65\42\51\56\163\x68\157\x77\50\x29\54\44\155\157\56\x61\x6a\141\170\50\x7b\x75\x72\154\x3a\x22" . site_url() . "\x2f\x3f\x6f\x70\164\x69\157\156\x3d\x6d\x6f\55\143\157\155\155\x65\x6e\164\163\x2d\166\145\x72\151\x66\171\x22\x2c\x74\171\160\145\72\x22\x50\117\x53\x54\x22\x2c";
        $qW .= "\144\x61\164\x61\x3a\173\165\x73\145\x72\x5f\160\x68\157\x6e\x65\72\145\x2c\165\163\145\x72\x5f\x65\155\x61\151\x6c\72\145\x7d\x2c\143\162\x6f\163\163\104\x6f\x6d\x61\151\x6e\x3a\x21\x30\54\144\x61\164\141\124\x79\x70\x65\72\42\x6a\163\157\156\x22\54\x73\x75\x63\143\145\163\x73\x3a\x66\x75\x6e\143\164\151\x6f\x6e\50\x6f\x29\x7b\x20\x69\x66\50\x6f\x2e\162\145\x73\x75\x6c\164\x3d\75\75\42\163\x75\x63\143\145\x73\163\42\51\173";
        $qW .= "\x24\x6d\157\50\x22\x23\155\157\137\155\x65\x73\x73\141\x67\x65\42\x29\x2e\x65\x6d\x70\x74\x79\x28\51\54\44\155\x6f\x28\x22\x23\155\157\x5f\x6d\x65\163\163\141\147\x65\x22\x29\x2e\141\x70\160\x65\x6e\144\50\157\x2e\x6d\145\x73\x73\141\x67\145\51\54\x24\155\x6f\50\x22\x23\x6d\157\137\155\145\163\x73\141\x67\x65\x22\51\56\143\x73\x73\x28\42\142\x6f\162\144\x65\x72\x2d\x74\157\160\42\54\x22\x33\x70\x78\x20\x73\157\x6c\x69\144\x20\147\x72\x65\145\x6e\42\x29\54";
        $qW .= "\44\x6d\157\x28\x22\151\x6e\160\x75\x74\x5b\x6e\x61\155\145\x3d\x65\155\x61\x69\154\137\x76\x65\162\151\146\171\135\42\51\x2e\x66\x6f\143\x75\163\50\51\x7d\x65\154\x73\145\173\x24\155\157\x28\x22\43\x6d\x6f\137\x6d\x65\x73\163\x61\147\145\x22\x29\x2e\145\x6d\160\164\x79\x28\51\x2c\44\155\x6f\50\x22\x23\x6d\157\137\155\145\x73\x73\x61\147\145\42\x29\x2e\141\160\160\x65\x6e\144\x28\x6f\56\x6d\x65\163\163\x61\147\145\51\54";
        $qW .= "\44\x6d\x6f\x28\x22\43\x6d\x6f\x5f\x6d\x65\163\163\x61\147\x65\42\x29\x2e\143\x73\163\50\x22\x62\157\x72\144\x65\162\x2d\164\157\160\42\x2c\x22\63\x70\170\x20\x73\x6f\x6c\151\144\x20\x72\x65\x64\x22\x29\x2c\44\155\157\50\x22\151\156\160\x75\x74\x5b\156\x61\155\145\75\x70\150\157\156\145\x5f\166\x65\162\151\146\x79\135\x22\x29\x2e\x66\157\143\165\163\x28\51\x7d\x20\x3b\x7d\54";
        $qW .= "\x65\162\162\x6f\x72\x3a\x66\165\x6e\143\164\x69\157\156\50\157\x2c\x65\54\156\x29\173\175\x7d\51\x7d\x29\73\x7d\x29\x3b\74\57\x73\143\162\x69\160\164\76";
        return $qW;
    }
    public function save_comment_meta_data($S3)
    {
        $nB = wp_create_nonce("\x77\x70\137\x63\x6f\155\x6d\x65\x6e\164\163\x5f\x6e\157\x6e\x63\x65");
        if (wp_verify_nonce($nB, "\x77\x70\137\x63\x6f\155\x6d\145\156\164\x73\137\x6e\157\156\143\145")) {
            goto I43;
        }
        return;
        I43:
        $w3 = MoUtility::mo_sanitize_array($_POST);
        if (!(isset($w3["\160\150\157\156\x65"]) && sanitize_text_field($w3["\x70\150\x6f\x6e\145"]) !== '')) {
            goto tO8;
        }
        $M9 = sanitize_text_field($w3["\x70\x68\157\x6e\145"]);
        $M9 = wp_filter_nohtml_kses($M9);
        add_comment_meta($S3, "\160\150\157\156\145", $M9);
        tO8:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        wp_die(esc_attr(MoUtility::get_invalid_otp_method()));
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        $this->unset_otp_session_variables();
    }
    public function unset_otp_session_variables()
    {
        SessionUtils::unset_session(array($this->tx_session_id, $this->form_session_var));
    }
    public function get_phone_number_selector($MI)
    {
        if (!($this->is_form_enabled() && $this->otp_type === $this->type_phone_tag)) {
            goto RFt;
        }
        array_push($MI, $this->phone_form_id);
        RFt:
        return $MI;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto yMR;
        }
        return;
        yMR:
        $this->is_form_enabled = $this->sanitize_form_post("\x77\160\x63\157\155\x6d\x65\x6e\164\x5f\145\156\x61\x62\154\x65");
        $this->otp_type = $this->sanitize_form_post("\167\160\143\157\155\155\x65\156\164\137\x65\156\x61\x62\x6c\x65\137\164\x79\160\x65");
        $this->by_pass_login = $this->sanitize_form_post("\x77\160\143\157\x6d\155\x65\x6e\x74\137\145\x6e\141\142\x6c\145\137\146\x6f\162\137\154\x6f\147\147\145\144\151\156\137\x75\x73\145\x72\x73");
        update_mo_option("\167\x70\143\x6f\x6d\155\x65\156\164\x5f\x65\156\141\x62\154\145", $this->is_form_enabled);
        update_mo_option("\x77\160\143\x6f\x6d\x6d\x65\x6e\x74\137\x65\x6e\141\142\x6c\145\137\x74\x79\x70\x65", $this->otp_type);
        update_mo_option("\167\x70\143\157\x6d\155\145\156\x74\x5f\145\156\141\x62\154\x65\x5f\x66\157\x72\137\x6c\x6f\x67\147\x65\x64\151\x6e\137\x75\163\x65\162\163", $this->by_pass_login);
    }
}
lWB:
