<?php


namespace OTP\Handler\Forms;

if (defined("\x41\102\123\x50\x41\x54\110")) {
    goto uG;
}
exit;
uG:
use mysql_xdevapi\Session;
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
if (class_exists("\106\157\x72\x6d\x43\162\x61\x66\x74\120\162\145\155\x69\165\155\x46\x6f\162\x6d")) {
    goto tS;
}
class FormCraftPremiumForm extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->is_login_or_social_form = false;
        $this->is_ajax_form = true;
        $this->form_session_var = FormSessionVars::FORMCRAFT;
        $this->type_phone_tag = "\155\x6f\x5f\146\157\x72\x6d\143\x72\x61\146\x74\137\x70\x68\157\156\145\x5f\x65\x6e\x61\142\x6c\x65";
        $this->type_email_tag = "\x6d\157\137\x66\157\x72\x6d\143\162\141\x66\164\137\145\x6d\141\151\154\x5f\x65\156\x61\x62\154\x65";
        $this->form_key = "\106\x4f\x52\115\103\122\101\106\x54\x50\122\x45\115\x49\x55\x4d";
        $this->form_name = mo_("\106\157\x72\x6d\x43\162\141\x66\x74\x20\x28\x50\162\x65\x6d\x69\x75\x6d\x20\126\x65\x72\163\x69\157\x6e\x29");
        $this->is_form_enabled = get_mo_option("\146\x63\160\162\x65\x6d\x69\165\155\137\x65\156\141\142\154\x65");
        $this->phone_form_id = array();
        $this->form_documents = MoFormDocs::FORMCRAFT_PREMIUM;
        parent::__construct();
    }
    public function handle_form()
    {
        if (MoUtility::get_active_plugin_version("\x46\x6f\162\155\x43\x72\x61\146\164")) {
            goto Yc;
        }
        return;
        Yc:
        $this->otp_type = get_mo_option("\146\143\160\x72\x65\x6d\151\165\155\137\145\156\x61\x62\154\145\137\164\x79\160\x65");
        $this->form_details = maybe_unserialize(get_mo_option("\x66\143\x70\x72\x65\x6d\x69\165\155\137\157\164\160\137\145\x6e\141\x62\x6c\x65\144"));
        if (!empty($this->form_details)) {
            goto ZY;
        }
        return;
        ZY:
        if ($this->isFormCraftVersion3Installed()) {
            goto ED;
        }
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\56\x6e\146\157\x72\155\x5f\x6c\x69\40\x69\x6e\x70\165\164\x5b\x6e\x61\155\145\136\75" . $bh["\160\150\157\x6e\x65\x6b\x65\x79"] . "\x5d");
            BU:
        }
        Bq:
        goto Hk;
        ED:
        foreach ($this->form_details as $a6 => $bh) {
            array_push($this->phone_form_id, "\151\156\160\x75\x74\x5b\x6e\141\155\x65\x5e\x3d" . $bh["\160\x68\x6f\156\145\153\x65\171"] . "\135");
            ZB:
        }
        ib:
        Hk:
        add_action("\167\x70\x5f\141\152\x61\170\137\x66\x6f\162\x6d\x63\162\141\x66\x74\x5f\163\x75\x62\155\x69\164", array($this, "\166\141\x6c\x69\x64\141\x74\145\137\x66\x6f\162\x6d\x63\162\141\x66\164\137\146\157\162\155\137\x73\x75\x62\155\151\x74"), 1);
        add_action("\167\x70\137\x61\x6a\141\170\137\x6e\x6f\160\x72\x69\x76\137\x66\157\162\155\143\x72\141\146\164\x5f\x73\x75\x62\155\x69\x74", array($this, "\166\141\154\x69\144\141\164\x65\x5f\146\x6f\162\155\143\162\141\146\164\137\x66\157\162\155\137\x73\165\x62\x6d\151\x74"), 1);
        add_action("\x77\x70\x5f\141\152\x61\170\x5f\146\157\162\x6d\x63\x72\x61\146\164\63\x5f\x66\x6f\162\155\x5f\163\165\142\x6d\151\164", array($this, "\166\x61\154\x69\144\141\164\145\137\146\x6f\x72\x6d\x63\162\x61\146\164\x5f\146\157\x72\155\137\x73\x75\x62\155\151\164"), 1);
        add_action("\x77\160\x5f\141\x6a\141\x78\x5f\x6e\x6f\160\x72\151\x76\137\146\x6f\x72\x6d\143\162\x61\x66\x74\x33\x5f\146\x6f\x72\x6d\x5f\163\x75\142\155\x69\164", array($this, "\x76\141\154\151\x64\141\x74\145\137\x66\x6f\x72\x6d\x63\x72\141\x66\164\x5f\x66\x6f\162\155\137\x73\165\x62\155\151\x74"), 1);
        add_action("\167\160\x5f\x65\x6e\x71\165\x65\165\145\x5f\163\x63\x72\151\x70\x74\x73", array($this, "\145\x6e\161\x75\145\165\x65\x5f\x73\143\x72\151\x70\164\137\157\x6e\x5f\160\141\x67\145"));
        $this->routeData();
    }
    private function routeData()
    {
        if (array_key_exists("\x66\x6f\162\155\x63\162\141\x66\164\x5f\160\162\x65\155\137\x6f\160\x74\x69\157\x6e", $_GET)) {
            goto p5;
        }
        return;
        p5:
        if (check_ajax_referer($this->nonce, "\x73\145\x63\165\162\151\x74\x79", false)) {
            goto cO;
        }
        wp_send_json(MoUtility::create_json("\116\x6f\x74\x20\141\x20\166\x61\x6c\x69\x64\x20\162\145\x71\165\x65\163\164\40\41", MoConstants::ERROR_JSON_TYPE));
        cO:
        $GX = MoUtility::mo_sanitize_array($_POST);
        switch (trim(isset($_GET["\x66\x6f\x72\x6d\x63\162\141\x66\164\x5f\160\162\145\x6d\x5f\x6f\160\x74\151\x6f\x6e"]) ? sanitize_text_field(wp_unslash($_GET["\x66\x6f\162\x6d\x63\162\141\146\x74\x5f\x70\162\145\155\x5f\x6f\160\164\x69\157\x6e"])) : '')) {
            case "\x6d\151\x6e\x69\x6f\162\x61\156\x67\145\x2d\x66\x6f\162\155\x63\x72\141\146\x74\x70\162\x65\x6d\x69\x75\x6d\x2d\x76\x65\x72\x69\146\171":
                $this->handle_formcraft_form($GX);
                goto sv;
            case "\155\151\156\151\x6f\162\x61\156\147\145\x2d\x66\157\162\155\143\162\x61\x66\x74\160\162\x65\x6d\x69\x75\155\55\146\157\x72\x6d\x2d\157\x74\x70\55\x65\156\x61\x62\154\145\144":
                wp_send_json($this->isVerificationEnabledForThisForm(isset($GX["\146\x6f\162\155\137\x69\144"]) ? sanitize_text_field(wp_unslash($GX["\x66\157\162\155\137\x69\144"])) : ''));
                goto sv;
        }
        J0:
        sv:
    }
    private function handle_formcraft_form($GX)
    {
        if ($this->isVerificationEnabledForThisForm(isset($GX["\146\x6f\162\x6d\x5f\x69\144"]) ? sanitize_text_field(wp_unslash($GX["\x66\157\x72\155\137\x69\x64"])) : '')) {
            goto v5;
        }
        return;
        v5:
        MoUtility::initialize_transaction($this->form_session_var);
        if (strcasecmp($this->otp_type, $this->type_phone_tag) === 0) {
            goto BB;
        }
        $this->send_otp_to_email($GX);
        goto U9;
        BB:
        $this->send_otp_to_phone($GX);
        U9:
    }
    private function send_otp_to_phone($GX)
    {
        if (array_key_exists("\x75\x73\x65\x72\137\160\x68\157\x6e\x65", $GX) && !MoUtility::is_blank(sanitize_text_field($GX["\165\163\145\162\137\160\150\157\x6e\x65"]))) {
            goto jB;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_PHONE), MoConstants::ERROR_JSON_TYPE));
        goto Cn;
        jB:
        SessionUtils::add_phone_verified($this->form_session_var, sanitize_text_field($GX["\165\x73\x65\x72\x5f\x70\150\157\156\x65"]));
        $this->send_challenge("\x74\145\163\164", '', null, trim($GX["\165\163\145\x72\137\x70\x68\x6f\x6e\x65"]), VerificationType::PHONE);
        Cn:
    }
    private function send_otp_to_email($GX)
    {
        if (array_key_exists("\x75\163\x65\162\x5f\145\155\x61\151\154", $GX) && !MoUtility::is_blank(sanitize_email($GX["\165\163\145\162\137\145\x6d\x61\151\154"]))) {
            goto iR;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(MoMessages::ENTER_EMAIL), MoConstants::ERROR_JSON_TYPE));
        goto vE;
        iR:
        SessionUtils::add_email_verified($this->form_session_var, sanitize_email($GX["\x75\x73\x65\x72\137\x65\155\x61\x69\154"]));
        $this->send_challenge("\x74\145\x73\x74", $GX["\165\163\145\162\x5f\x65\x6d\x61\151\x6c"], null, $GX["\165\x73\x65\x72\x5f\x65\155\x61\151\x6c"], VerificationType::EMAIL);
        vE:
    }
    public function validate_formcraft_form_submit()
    {
        $GX = Moutility::mo_sanitize_array($_POST);
        $FL = sanitize_text_field(isset($GX["\x69\x64"]) ? sanitize_text_field(wp_unslash($GX["\151\x64"])) : '');
        if ($this->isVerificationEnabledForThisForm($FL)) {
            goto lR;
        }
        return;
        lR:
        $iG = $this->parseSubmittedData($GX, $FL);
        $I2 = $this->get_verification_type();
        foreach ($iG as $a6 => $bh) {
            if (!(null !== $iG[$a6]["\x70\150\157\x6e\145"] && VerificationType::PHONE === $I2)) {
                goto LN;
            }
            $M9 = $iG[$a6]["\x70\150\x6f\156\x65"]["\166\x61\x6c\165\x65"][0];
            $this->checkIfVerificationNotStarted($iG[$a6]["\160\x68\x6f\156\x65"]["\146\x69\x65\x6c\x64"]);
            LN:
            if (!(null !== $iG[$a6]["\145\155\141\x69\x6c"] && VerificationType::EMAIL === $I2)) {
                goto nW;
            }
            $ZG = $iG[$a6]["\145\x6d\141\x69\154"]["\x76\x61\x6c\165\145"];
            $this->checkIfVerificationNotStarted($iG[$a6]["\145\155\141\151\x6c"]["\x66\x69\145\154\144"]);
            nW:
            if (!(null !== $iG[$a6]["\157\x74\x70"])) {
                goto yf;
            }
            $sc = $iG[$a6]["\157\164\160"]["\166\x61\154\165\145"];
            $ZD = $iG[$a6]["\157\164\x70"]["\x66\151\145\x6c\144"];
            yf:
            Px:
        }
        tk:
        if (VerificationType::PHONE === $I2 && !SessionUtils::is_phone_verified_match($this->form_session_var, $M9)) {
            goto tF;
        }
        if (VerificationType::EMAIL === $I2 && !SessionUtils::is_email_verified_match($this->form_session_var, $ZG)) {
            goto Un;
        }
        goto b_;
        tF:
        $this->sendJSONErrorMessage(MoMessages::showMessage(MoMessages::PHONE_MISMATCH), $iG["\x70\150\157\156\x65"]["\x66\x69\145\154\x64"]);
        goto b_;
        Un:
        $this->sendJSONErrorMessage(MoMessages::showMessage(MoMessages::EMAIL_MISMATCH), $iG["\x65\x6d\x61\x69\x6c"]["\146\x69\x65\154\144"]);
        b_:
        if (!MoUtility::is_blank($sc)) {
            goto Kh;
        }
        $this->sendJSONErrorMessage(MoUtility::get_invalid_otp_method(), $ZD);
        Kh:
        SessionUtils::set_form_or_field_id($this->form_session_var, $ZD);
        $this->validate_challenge($I2, null, $sc);
    }
    public function enqueue_script_on_page()
    {
        wp_register_script("\146\143\x70\162\x65\x6d\151\x75\155\x73\x63\162\151\x70\x74", MOV_URL . "\x69\x6e\x63\154\x75\x64\x65\163\x2f\152\x73\57\x66\x6f\162\155\x63\162\x61\146\x74\x70\162\x65\x6d\x69\165\x6d\x2e\155\151\156\56\152\163\x3f\x76\x65\162\x73\x69\157\x6e\75" . MOV_VERSION, array("\152\x71\165\145\162\x79"), MOV_VERSION, true);
        wp_localize_script("\x66\143\160\x72\145\x6d\x69\165\155\x73\x63\162\151\160\164", "\155\157\x66\x63\160\166\x61\x72\x73", array("\x69\155\147\125\122\114" => MOV_LOADER_URL, "\x66\157\x72\x6d\103\x72\x61\146\164\x46\x6f\162\x6d\163" => $this->form_details, "\163\x69\x74\x65\125\122\114" => site_url(), "\x6f\x74\160\124\x79\x70\x65" => $this->otp_type, "\156\x6f\156\x63\145" => wp_create_nonce($this->nonce), "\142\165\x74\x74\157\156\124\x65\x78\x74" => mo_("\103\154\151\143\x6b\40\150\145\x72\x65\x20\x74\x6f\x20\x73\145\x6e\x64\x20\x4f\x54\120"), "\142\x75\164\164\157\156\124\x69\164\154\x65" => $this->otp_type === $this->type_phone_tag ? mo_("\120\x6c\145\x61\163\145\40\145\x6e\x74\145\162\x20\141\40\x50\150\x6f\x6e\x65\40\x4e\x75\155\x62\145\x72\40\x74\x6f\x20\145\x6e\141\142\154\145\40\164\x68\151\x73\x20\146\151\x65\154\x64\x2e") : mo_("\x50\154\145\141\163\145\x20\x65\x6e\x74\x65\x72\40\141\x6e\40\145\155\x61\151\x6c\40\141\144\144\x72\145\x73\x73\40\x74\x6f\x20\145\156\141\x62\154\145\40\x74\x68\x69\163\40\x66\151\145\154\x64\56"), "\x61\152\x61\x78\165\x72\x6c" => wp_ajax_url(), "\x74\171\160\x65\x50\150\157\x6e\145" => $this->type_phone_tag, "\x63\157\x75\x6e\x74\x72\171\x44\162\x6f\160" => get_mo_option("\x73\x68\x6f\167\137\x64\162\157\160\144\x6f\x77\156\137\x6f\x6e\137\x66\157\162\155"), "\x76\145\162\x73\x69\x6f\x6e\x33" => $this->isFormCraftVersion3Installed()));
        wp_enqueue_script("\146\x63\x70\x72\145\155\151\165\x6d\163\143\162\x69\x70\164");
    }
    private function parseSubmittedData($post, $FL)
    {
        $GX = array();
        $form = $this->form_details[$FL];
        foreach ($post as $a6 => $bh) {
            if (!(strpos($a6, "\x66\x69\145\x6c\x64") === false)) {
                goto tu;
            }
            goto bO;
            tu:
            $yR = $this->getValueAndFieldFromPost($GX, "\x65\x6d\x61\x69\154", $a6, str_replace("\x20", "\137", $form["\145\155\141\x69\154\x6b\145\171"]), $bh);
            if (!(null !== $yR)) {
                goto Gm;
            }
            array_push($GX, $yR);
            Gm:
            $ro = $this->getValueAndFieldFromPost($GX, "\160\x68\x6f\156\145", $a6, str_replace("\x20", "\x5f", $form["\x70\x68\x6f\156\x65\153\145\171"]), $bh);
            if (!(null !== $ro)) {
                goto Qq;
            }
            array_push($GX, $ro);
            Qq:
            $Ab = $this->getValueAndFieldFromPost($GX, "\157\164\x70", $a6, str_replace("\40", "\x5f", $form["\166\145\x72\x69\x66\171\x4b\145\171"]), $bh);
            if (!(null !== $Ab)) {
                goto Tw;
            }
            array_push($GX, $Ab);
            Tw:
            bO:
        }
        dl:
        return $GX;
    }
    private function getValueAndFieldFromPost($GX, $bk, $zY, $eO, $bh)
    {
        if (is_null($GX[$eO]) && strpos($zY, $eO, 0) !== false) {
            goto jr;
        }
        return;
        goto YU;
        jr:
        $GX[$bk]["\x76\141\154\165\x65"] = $this->isFormCraftVersion3Installed() && "\x6f\164\x70" === $bk ? $bh[0] : $bh;
        $M0 = strpos($zY, "\x66\x69\145\x6c\x64", 0);
        $GX[$bk]["\x66\x69\145\154\x64"] = $this->isFormCraftVersion3Installed() ? $eO : substr($zY, $M0, strpos($zY, "\x5f", $M0) - $M0);
        return $GX;
        YU:
    }
    private function isVerificationEnabledForThisForm($FL)
    {
        return array_key_exists($FL, $this->form_details);
    }
    private function sendJSONErrorMessage($errors, $Jw)
    {
        if ($this->isFormCraftVersion3Installed()) {
            goto kP;
        }
        $zk["\145\162\162\157\162\x73"] = mo_("\x50\154\x65\141\163\x65\40\143\x6f\162\x72\x65\x63\164\40\164\150\x65\x20\145\x72\162\157\162\x73\40\x61\156\144\40\164\162\x79\40\x61\147\x61\x69\x6e");
        $zk[$Jw][0] = $errors;
        goto iD;
        kP:
        $zk["\146\x61\x69\x6c\x65\144"] = mo_("\x50\x6c\145\x61\x73\x65\x20\x63\x6f\x72\162\145\143\x74\x20\x74\x68\x65\x20\145\x72\162\157\x72\x73\x20\141\156\144\40\x74\x72\x79\40\141\147\x61\x69\x6e");
        $zk["\x65\x72\x72\157\162\163"][$Jw] = $errors;
        iD:
        echo wp_json_encode($zk);
        die;
    }
    private function checkIfVerificationNotStarted($LA)
    {
        if (!SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto B2;
        }
        return;
        B2:
        if ($this->otp_type === $this->type_phone_tag) {
            goto lN;
        }
        $this->sendJSONErrorMessage(MoMessages::showMessage(MoMessages::PLEASE_VALIDATE), $LA);
        goto SS;
        lN:
        $this->sendJSONErrorMessage(MoMessages::showMessage(MoMessages::PLEASE_VALIDATE), $LA);
        SS:
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        if (SessionUtils::is_otp_initialized($this->form_session_var)) {
            goto MO;
        }
        return;
        MO:
        $Nb = SessionUtils::get_form_or_field_id($this->form_session_var);
        $this->sendJSONErrorMessage(MoUtility::get_invalid_otp_method(), $Nb);
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
            goto OT;
        }
        $MI = array_merge($MI, $this->phone_form_id);
        OT:
        return $MI;
    }
    private function getFieldId($GX, $iG)
    {
        foreach ($iG as $form) {
            if (!($form["\x65\154\x65\155\145\156\x74\x44\145\x66\x61\165\x6c\164\163"]["\x6d\141\x69\x6e\137\154\141\x62\x65\154"] === $GX)) {
                goto wb;
            }
            return $form["\x69\144\145\156\164\151\146\151\145\x72"];
            wb:
            y2:
        }
        Yv:
        return null;
    }
    private function getFormCraftFormDataFromID($FL)
    {
        global $wpdb;
        $Mb = $wpdb->get_var($wpdb->prepare("\x53\x45\x4c\105\x43\x54\x20\x6d\145\x74\141\x5f\x62\x75\x69\x6c\x64\145\x72\x20\106\122\x4f\115\40{$wpdb->prefix}\146\x6f\x72\155\x63\162\141\x66\x74\137\63\x5f\146\157\162\x6d\x73\x20\x57\110\x45\x52\105\40\151\144\x3d\x20\x25\163", array($FL)));
        $Mb = json_decode(stripcslashes($Mb), 1);
        return $Mb["\x66\151\x65\154\144\x73"];
    }
    private function isFormCraftVersion3Installed()
    {
        return MoUtility::get_active_plugin_version("\x46\157\162\x6d\x43\x72\x61\x66\164") === 3 ? true : false;
    }
    public function handle_form_options()
    {
        if (MoUtility::are_form_options_being_saved($this->get_form_option())) {
            goto cx;
        }
        return;
        cx:
        if (!(!MoUtility::get_active_plugin_version("\106\x6f\x72\x6d\103\x72\141\146\164") || !current_user_can("\155\x61\156\141\x67\145\x5f\157\160\164\151\157\x6e\163") || !check_admin_referer($this->admin_nonce))) {
            goto ST;
        }
        return;
        ST:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $form = array();
        foreach (array_filter($GX["\x66\x63\160\x72\x65\155\151\x75\x6d\137\146\x6f\162\x6d"]["\x66\157\162\x6d"]) as $a6 => $bh) {
            $bh = sanitize_text_field($bh);
            !$this->isFormCraftVersion3Installed() ? $this->processAndGetFormData($GX, $a6, $bh, $form) : $this->processAndGetForm3Data($GX, $a6, $bh, $form);
            fu:
        }
        FU:
        $this->is_form_enabled = $this->sanitize_form_post("\x66\x63\160\x72\x65\x6d\x69\165\x6d\137\145\x6e\141\x62\154\x65");
        $this->otp_type = $this->sanitize_form_post("\x66\x63\160\x72\145\155\151\x75\x6d\x5f\145\156\x61\142\x6c\145\x5f\x74\x79\x70\145");
        $this->form_details = !empty($form) ? $form : '';
        update_mo_option("\x66\x63\x70\162\x65\x6d\151\165\155\137\145\x6e\x61\x62\x6c\x65", $this->is_form_enabled);
        update_mo_option("\146\143\160\x72\145\155\151\x75\x6d\x5f\145\156\141\x62\154\x65\x5f\164\x79\x70\145", $this->otp_type);
        update_mo_option("\x66\143\160\x72\x65\x6d\151\x75\x6d\137\157\x74\x70\137\x65\x6e\x61\142\154\145\144", maybe_serialize($this->form_details));
    }
    private function processAndGetFormData($post, $a6, $bh, &$form)
    {
        $form[$bh] = array("\145\155\141\151\x6c\x6b\x65\x79" => str_replace("\40", "\x20", sanitize_text_field($post["\x66\143\160\162\x65\x6d\151\x75\155\137\x66\157\162\x6d"]["\x65\x6d\141\151\154\x6b\x65\x79"][$a6])) . "\x5f\x65\155\x61\151\154\x5f\x65\155\141\x69\154\137", "\160\150\x6f\x6e\x65\153\x65\171" => str_replace("\40", "\40", sanitize_text_field($post["\146\x63\160\x72\x65\x6d\151\165\155\137\146\x6f\x72\x6d"]["\x70\150\157\156\145\x6b\x65\171"][$a6])) . "\x5f\x74\145\x78\x74\x5f", "\166\x65\162\x69\x66\171\x4b\145\171" => str_replace("\40", "\x20", sanitize_text_field($post["\146\143\160\x72\145\155\151\x75\155\x5f\146\157\x72\155"]["\x76\145\162\x69\x66\x79\113\x65\171"][$a6])) . "\137\164\x65\170\x74\137", "\160\x68\157\x6e\x65\x5f\x73\150\157\x77" => sanitize_text_field($post["\146\x63\160\162\145\155\x69\165\155\137\146\157\162\155"]["\x70\150\x6f\156\145\153\145\171"][$a6]), "\x65\x6d\x61\x69\x6c\x5f\x73\x68\157\x77" => sanitize_text_field($post["\146\x63\x70\162\145\155\x69\x75\x6d\137\146\157\x72\x6d"]["\145\155\141\151\154\153\x65\x79"][$a6]), "\x76\145\162\151\146\x79\x5f\x73\x68\157\167" => sanitize_text_field($post["\146\143\x70\162\x65\155\x69\165\155\x5f\146\157\162\155"]["\166\145\162\x69\146\171\x4b\145\171"][$a6]));
    }
    private function processAndGetForm3Data($GX, $a6, $bh, &$form)
    {
        $iG = $this->getFormCraftFormDataFromID($bh);
        if (!MoUtility::is_blank($iG)) {
            goto vh;
        }
        return;
        vh:
        $form[$bh] = array("\x65\155\141\151\x6c\153\145\171" => $this->getFieldId(isset($GX["\x66\x63\160\x72\x65\155\x69\x75\155\x5f\x66\157\x72\155"]["\145\x6d\141\x69\154\153\x65\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\146\143\160\x72\145\x6d\x69\x75\155\x5f\x66\157\162\x6d"]["\145\x6d\x61\x69\x6c\153\145\x79"][$a6])) : '', $iG), "\x70\150\157\x6e\145\x6b\145\171" => $this->getFieldId(isset($GX["\x66\x63\160\x72\x65\x6d\151\165\x6d\x5f\146\x6f\162\155"]["\160\150\x6f\x6e\145\x6b\x65\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\146\143\160\x72\x65\x6d\x69\x75\155\137\x66\x6f\x72\155"]["\160\x68\157\156\145\153\145\171"][$a6])) : '', $iG), "\166\145\162\151\146\171\113\x65\171" => $this->getFieldId(isset($GX["\146\x63\160\162\x65\x6d\x69\x75\155\137\146\x6f\162\155"]["\x76\x65\162\151\146\171\x4b\x65\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\146\143\x70\162\145\155\x69\165\155\x5f\x66\157\x72\155"]["\166\x65\162\151\146\x79\113\145\x79"][$a6])) : '', $iG), "\160\150\x6f\156\145\137\163\150\157\x77" => isset($GX["\146\143\x70\162\145\x6d\x69\x75\x6d\137\146\157\x72\155"]["\160\150\157\x6e\145\153\x65\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x66\143\x70\162\145\x6d\151\x75\x6d\137\146\x6f\x72\155"]["\x70\150\x6f\x6e\145\x6b\x65\171"][$a6])) : '', "\145\155\x61\151\x6c\137\163\150\x6f\x77" => isset($GX["\146\x63\x70\x72\145\155\x69\165\155\137\x66\157\x72\x6d"]["\145\x6d\x61\x69\154\x6b\145\x79"][$a6]) ? sanitize_text_field(wp_unslash($GX["\x66\143\160\x72\145\x6d\x69\165\155\137\x66\157\162\x6d"]["\145\x6d\x61\151\x6c\x6b\145\x79"][$a6])) : '', "\166\x65\162\x69\x66\x79\137\163\x68\x6f\167" => isset($GX["\146\143\160\162\x65\155\151\x75\x6d\x5f\146\157\x72\x6d"]["\x76\145\x72\x69\x66\171\x4b\x65\171"][$a6]) ? sanitize_text_field(wp_unslash($GX["\146\143\160\162\x65\155\x69\165\155\x5f\146\157\x72\x6d"]["\x76\x65\162\151\146\x79\x4b\145\171"][$a6])) : '');
    }
}
tS:
