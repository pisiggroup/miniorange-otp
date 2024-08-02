<?php


namespace OTP\Handler;

if (defined("\x41\x42\123\x50\101\124\x48")) {
    goto zj;
}
exit;
zj:
use OTP\Helper\FormSessionVars;
use OTP\Helper\GatewayFunctions;
use OTP\Helper\MoMessages;
use OTP\Helper\MoPHPSessions;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\BaseActionHandler;
use OTP\Objects\VerificationType;
use OTP\Traits\Instance;
if (class_exists("\106\x6f\x72\x6d\101\x63\164\x69\157\x6e\110\x61\x6e\x64\154\145\162")) {
    goto U1;
}
class FormActionHandler extends BaseActionHandler
{
    use Instance;
    protected function __construct()
    {
        parent::__construct();
        add_action("\151\x6e\151\x74", array($this, "\150\141\x6e\x64\x6c\x65\x5f\146\157\x72\155\x41\143\164\151\x6f\x6e\x73"), 1);
        add_action("\155\x6f\137\x76\x61\154\x69\144\141\x74\x65\137\x6f\164\160", array($this, "\x76\x61\154\151\144\x61\x74\x65\x4f\124\120"), 1, 3);
        add_action("\x6d\x6f\x5f\x67\145\x6e\145\x72\x61\x74\145\x5f\157\x74\x70", array($this, "\x63\150\x61\x6c\154\145\156\147\x65"), 2, 8);
        add_filter("\155\x6f\137\x66\x69\x6c\164\145\x72\x5f\160\150\x6f\156\x65\137\x62\145\x66\x6f\x72\145\x5f\x61\160\151\x5f\143\141\154\x6c", array($this, "\x66\x69\154\x74\x65\162\x50\150\157\x6e\145"), 1, 1);
    }
    public function challenge($kD, $Wb, $errors, $bV = null, $I2 = "\x65\x6d\x61\x69\154", $L8 = '', $ia = null, $Df = false)
    {
        $bV = MoUtility::process_phone_number($bV);
        MoPHPSessions::add_session_var("\143\165\x72\162\145\156\x74\137\165\x72\154", MoUtility::current_page_url());
        MoPHPSessions::add_session_var("\165\x73\145\x72\137\x65\x6d\141\151\154", $Wb);
        MoPHPSessions::add_session_var("\x75\163\x65\162\x5f\x6c\x6f\x67\x69\156", $kD);
        MoPHPSessions::add_session_var("\165\163\x65\x72\x5f\x70\141\x73\x73\x77\x6f\162\x64", $L8);
        MoPHPSessions::add_session_var("\160\x68\157\x6e\145\x5f\x6e\x75\x6d\142\x65\162\137\x6d\x6f", $bV);
        MoPHPSessions::add_session_var("\x65\170\x74\162\141\137\x64\x61\x74\141", $ia);
        $this->handleOTPAction($kD, $Wb, $bV, $I2, $Df, $ia);
    }
    private function handleResendOTP($I2, $Df)
    {
        $Wb = MoPHPSessions::get_session_var("\x75\163\x65\162\137\145\x6d\141\151\154");
        $kD = MoPHPSessions::get_session_var("\x75\x73\145\162\137\x6c\157\147\x69\156");
        $bV = MoPHPSessions::get_session_var("\160\x68\x6f\156\x65\x5f\x6e\x75\x6d\142\x65\x72\137\155\x6f");
        $ia = MoPHPSessions::get_session_var("\x65\170\164\x72\141\137\144\141\x74\x61");
        $this->handleOTPAction($kD, $Wb, $bV, $I2, $Df, $ia);
    }
    private function handleOTPAction($kD, $Wb, $bV, $I2, $Df, $ia)
    {
        global $Hg, $pt;
        switch ($I2) {
            case VerificationType::PHONE:
                $Hg->handle_logic($kD, $Wb, $bV, $I2, $Df);
                goto zb;
            case VerificationType::EMAIL:
                $pt->handle_logic($kD, $Wb, $bV, $I2, $Df);
                goto zb;
            case VerificationType::BOTH:
                miniorange_verification_user_choice($kD, $Wb, $bV, MoMessages::showMessage(MoMessages::CHOOSE_METHOD), $I2);
                goto zb;
            case VerificationType::EXTERNAL:
                mo_external_phone_validation_form($ia["\143\165\162\154"], $Wb, $ia["\155\x65\163\163\x61\147\x65"], $ia["\146\x6f\162\155"], $ia["\144\141\164\141"]);
                goto zb;
        }
        Q5:
        zb:
    }
    private function handleGoBackAction()
    {
        $XF = MoPHPSessions::get_session_var("\143\x75\162\162\x65\156\164\x5f\x75\162\x6c");
        do_action("\165\156\163\145\164\x5f\x73\145\x73\x73\151\x6f\x6e\x5f\166\141\x72\x69\x61\x62\154\x65");
        header("\x6c\x6f\x63\x61\x74\151\x6f\156\x3a" . $XF);
    }
    public function validateOTP($I2, $Fo, $sc)
    {
        $kD = MoPHPSessions::get_session_var("\x75\x73\x65\x72\137\154\157\147\151\x6e");
        $Wb = MoPHPSessions::get_session_var("\165\x73\145\162\x5f\x65\155\x61\151\154");
        $bV = MoPHPSessions::get_session_var("\160\x68\x6f\x6e\x65\137\156\x75\x6d\x62\145\162\137\x6d\157");
        $L8 = MoPHPSessions::get_session_var("\x75\163\145\162\137\160\141\x73\x73\x77\x6f\x72\144");
        $ia = MoPHPSessions::get_session_var("\145\x78\x74\x72\141\x5f\x64\141\x74\141");
        $Mi = Sessionutils::get_transaction_id($I2);
        $iv = MoUtility::sanitize_check($Fo, MoUtility::mo_sanitize_array($_REQUEST));
        $iv = !$iv ? $sc : $iv;
        if (is_null($Mi)) {
            goto R_;
        }
        $k7 = GatewayFunctions::instance();
        $U0 = $k7->mo_validate_otp_token($Mi, $iv);
        $at = "\x53\125\103\x43\105\123\123" === $U0["\163\x74\x61\x74\x75\x73"] ? "\117\x54\x50\x5f\x56\105\x52\x49\x46\111\105\104" : "\x56\x45\x52\x49\x46\111\x43\101\124\111\117\x4e\137\106\x41\111\x4c\x45\x44";
        apply_filters("\x6d\x6f\x5f\165\160\144\x61\x74\x65\x5f\162\x65\160\157\x72\164\x69\x6e\147", $Mi, $at);
        switch ($U0["\x73\164\141\164\165\x73"]) {
            case "\123\125\103\103\x45\123\x53":
                $this->onValidationSuccess($kD, $Wb, $L8, $bV, $ia, $I2);
                goto OU;
            default:
                $this->onValidationFailed($kD, $Wb, $bV, $I2);
                goto OU;
        }
        rn:
        OU:
        R_:
    }
    private function onValidationSuccess($kD, $Wb, $L8, $bV, $ia, $I2)
    {
        $Ug = array_key_exists("\x72\145\x64\151\x72\145\x63\164\x5f\164\157", $_POST) ? esc_url_raw(wp_unslash($_POST["\162\145\x64\x69\162\145\143\x74\x5f\164\x6f"])) : '';
        do_action("\157\164\x70\x5f\x76\x65\162\x69\146\x69\x63\141\164\x69\157\x6e\137\163\x75\x63\143\145\x73\163\146\165\x6c", $Ug, $kD, $Wb, $L8, $bV, $ia, $I2);
    }
    private function onValidationFailed($kD, $Wb, $bV, $I2)
    {
        do_action("\x6f\x74\x70\137\x76\145\162\151\x66\x69\143\x61\x74\151\157\156\x5f\146\x61\x69\x6c\145\x64", $kD, $Wb, $bV, $I2);
    }
    private function handleOTPChoice($w3)
    {
        $kD = MoPHPSessions::get_session_var("\165\x73\x65\162\x5f\154\x6f\x67\x69\x6e");
        $Wb = MoPHPSessions::get_session_var("\165\x73\145\162\137\x65\155\141\x69\x6c");
        $GJ = MoPHPSessions::get_session_var("\160\x68\157\156\x65\137\156\x75\x6d\142\145\x72\137\x6d\157");
        $Rq = MoPHPSessions::get_session_var("\165\x73\145\x72\x5f\160\141\163\163\167\157\162\144");
        $ia = MoPHPSessions::get_session_var("\x65\x78\164\162\141\137\x64\x61\x74\x61");
        $Bo = strcasecmp($w3["\x6d\x6f\137\143\165\x73\164\x6f\x6d\x65\x72\137\x76\x61\154\151\x64\141\164\151\157\156\137\x6f\164\160\137\x63\x68\157\x69\143\145"], "\165\163\145\x72\x5f\145\155\141\x69\x6c\x5f\x76\145\162\151\x66\151\143\141\164\x69\x6f\156") === 0 ? VerificationType::EMAIL : VerificationType::PHONE;
        $this->challenge($kD, $Wb, null, $GJ, $Bo, $Rq, $ia, true);
    }
    public function filterPhone($M9)
    {
        return str_replace("\53", '', $M9);
    }
    public function handle_formActions()
    {
        if (!(!isset($_POST["\155\x6f\x70\x6f\x70\x75\160\x5f\167\x70\156\x6f\156\143\145"]) || !wp_verify_nonce(sanitize_key(wp_unslash($_POST["\x6d\157\160\157\160\x75\x70\137\167\x70\x6e\x6f\x6e\x63\x65"])), "\x6d\x6f\x5f\160\157\x70\165\160\x5f\157\160\x74\x69\x6f\156\x73"))) {
            goto ur;
        }
        return;
        ur:
        if (!array_key_exists("\x6f\x70\164\x69\157\156", $_REQUEST)) {
            goto SL;
        }
        $Df = MoUtility::sanitize_check("\x66\162\x6f\155\x5f\x62\x6f\164\150", $_POST);
        $I2 = MoUtility::sanitize_check("\x6f\164\x70\x5f\164\171\160\145", $_POST);
        $GX = MoUtility::mo_sanitize_array($_POST);
        $t5 = MoUtility::mo_sanitize_array($_REQUEST);
        switch (trim(sanitize_text_field(wp_unslash($_REQUEST["\x6f\160\x74\x69\157\156"])))) {
            case "\x76\x61\154\151\144\141\164\151\157\156\x5f\147\x6f\102\x61\143\153":
                $this->handleGoBackAction();
                goto XU;
            case "\155\x69\x6e\151\x6f\x72\141\156\x67\145\x2d\166\x61\154\x69\x64\x61\x74\x65\x2d\157\x74\x70\55\146\157\x72\x6d":
                $this->validateOTP($I2, "\155\x6f\x5f\157\x74\x70\137\164\157\x6b\145\x6e", null);
                goto XU;
            case "\x76\145\x72\151\146\151\x63\x61\164\x69\157\156\137\162\x65\163\145\x6e\x64\137\x6f\164\x70":
                $this->handleResendOTP($I2, $Df);
                goto XU;
            case "\x6d\151\156\151\157\162\x61\x6e\x67\x65\55\x76\141\154\x69\144\141\164\145\x2d\157\x74\x70\x2d\143\x68\x6f\151\143\145\x2d\x66\x6f\x72\x6d":
                $this->handleOTPChoice($GX);
                goto XU;
        }
        h7:
        XU:
        SL:
    }
}
U1:
