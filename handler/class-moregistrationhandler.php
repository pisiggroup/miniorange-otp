<?php


namespace OTP\Handler;

if (defined("\x41\102\x53\120\101\x54\110")) {
    goto vZ;
}
exit;
vZ:
use OTP\Helper\GatewayFunctions;
use OTP\Helper\MoConstants;
use OTP\Helper\MocURLCall;
use OTP\Helper\MoMessages;
use OTP\Helper\MoUtility;
use OTP\Objects\BaseActionHandler;
use OTP\Traits\Instance;
if (class_exists("\x4d\157\122\x65\x67\x69\x73\164\x72\141\x74\151\x6f\x6e\x48\141\156\144\154\x65\x72")) {
    goto gE;
}
class MoRegistrationHandler extends BaseActionHandler
{
    use Instance;
    protected function __construct()
    {
        parent::__construct();
        $this->nonce = "\x6d\x6f\x5f\162\x65\x67\x5f\141\143\164\x69\157\156\163";
        add_action("\141\x64\155\151\156\137\151\x6e\x69\164", array($this, "\150\x61\x6e\x64\x6c\x65\137\143\x75\x73\164\x6f\155\145\162\137\162\x65\x67\x69\x73\164\162\x61\x74\x69\x6f\156"));
    }
    public function handle_customer_registration()
    {
        if (current_user_can("\x6d\141\156\141\x67\145\137\157\160\x74\151\x6f\x6e\163")) {
            goto Gy;
        }
        return;
        Gy:
        if (!(!isset($_POST["\x5f\167\x70\156\157\156\x63\x65"]) || !wp_verify_nonce(sanitize_key(wp_unslash($_POST["\x5f\x77\160\156\x6f\x6e\x63\x65"])), "\x6d\x6f\137\162\145\147\x5f\141\143\x74\151\157\x6e\x73"))) {
            goto o2;
        }
        return;
        o2:
        if (isset($_POST["\157\160\164\151\x6f\156"])) {
            goto lC;
        }
        return;
        lC:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $CB = $GX["\x6f\160\x74\x69\x6f\156"];
        switch ($CB) {
            case "\x6d\x6f\x5f\162\145\x67\x69\x73\x74\x72\141\164\151\x6f\x6e\137\x72\145\147\x69\163\x74\145\x72\137\x63\165\163\164\x6f\x6d\145\162":
                $this->mo_register_customer($GX);
                goto RZ;
            case "\155\157\137\162\x65\147\151\x73\x74\162\141\164\x69\x6f\156\137\143\x6f\x6e\x6e\x65\143\164\137\166\145\162\151\146\x79\x5f\x63\165\x73\x74\157\155\145\162":
                $this->mo_verify_customer($GX);
                goto RZ;
            case "\x6d\x6f\137\162\x65\x67\x69\x73\x74\162\141\x74\151\x6f\x6e\x5f\x76\x61\154\151\144\x61\x74\145\x5f\157\164\160":
                $this->mo_validate_otp($GX);
                goto RZ;
            case "\155\x6f\x5f\x72\145\147\x69\x73\x74\162\x61\164\x69\157\x6e\137\x72\145\163\x65\156\144\137\157\164\160":
                $this->mo_send_otp_token(get_mo_option("\141\x64\x6d\x69\156\137\145\155\141\x69\x6c"), '', "\x45\115\x41\x49\x4c");
                goto RZ;
            case "\x6d\x6f\x5f\162\x65\x67\151\x73\x74\x72\x61\x74\151\x6f\x6e\x5f\x70\x68\x6f\156\x65\137\x76\145\x72\x69\146\x69\x63\x61\x74\x69\x6f\x6e":
                $this->mo_send_phone_otp_token($GX);
                goto RZ;
            case "\x6d\157\x5f\162\145\147\151\x73\164\162\x61\x74\x69\x6f\156\x5f\147\x6f\137\x62\x61\143\x6b":
                $this->mo_revert_back_registration();
                goto RZ;
            case "\155\x6f\x5f\x72\145\x67\151\x73\164\162\141\x74\x69\157\156\x5f\x66\157\162\x67\157\164\137\x70\141\x73\x73\x77\157\x72\144":
                $this->mo_reset_password();
                goto RZ;
            case "\x6d\x6f\x5f\147\x6f\x5f\164\157\x5f\x6c\x6f\x67\x69\x6e\x5f\160\x61\x67\x65":
            case "\x72\145\155\157\166\x65\x5f\x61\143\x63\157\165\156\164":
                $this->removeAccount();
                goto RZ;
            case "\155\x6f\137\162\145\147\x69\x73\x74\x72\141\x74\x69\157\x6e\x5f\166\x65\x72\x69\146\x79\137\x6c\151\x63\145\x6e\x73\x65":
                $this->vlk($GX);
                goto RZ;
        }
        x9:
        RZ:
    }
    private function mo_register_customer($post)
    {
        $this->is_valid_request();
        $ZG = sanitize_email($post["\145\x6d\141\151\154"]);
        $eT = sanitize_text_field($post["\143\x6f\155\x70\x61\156\171"]);
        $qk = sanitize_text_field($post["\x66\x6e\x61\x6d\145"]);
        $cT = sanitize_text_field($post["\x6c\156\141\x6d\x65"]);
        $L8 = sanitize_text_field($post["\x70\141\x73\x73\167\157\x72\x64"]);
        $Px = sanitize_text_field($post["\143\x6f\x6e\x66\151\162\155\120\x61\x73\x73\x77\157\x72\144"]);
        if (!(strlen($L8) < 6 || strlen($Px) < 6)) {
            goto J8;
        }
        do_action("\155\x6f\x5f\x72\145\147\x69\163\x74\x72\141\164\x69\x6f\x6e\x5f\x73\150\x6f\167\137\x6d\x65\x73\163\x61\147\x65", MoMessages::showMessage(MoMessages::PASS_LENGTH), "\105\122\x52\x4f\122");
        return;
        J8:
        if (!($L8 !== $Px)) {
            goto le;
        }
        delete_mo_option("\x76\x65\162\151\x66\171\x5f\143\x75\163\164\157\155\145\162");
        do_action("\x6d\x6f\x5f\x72\145\x67\x69\163\164\x72\x61\x74\151\x6f\x6e\137\163\x68\157\x77\x5f\x6d\145\163\x73\141\x67\x65", MoMessages::showMessage(MoMessages::PASS_MISMATCH), "\x45\x52\x52\117\122");
        return;
        le:
        if (!(MoUtility::is_blank($ZG) || MoUtility::is_blank($L8) || MoUtility::is_blank($Px))) {
            goto ms;
        }
        do_action("\x6d\x6f\x5f\162\145\x67\151\x73\164\162\x61\x74\151\157\156\x5f\163\x68\x6f\167\x5f\155\x65\x73\163\141\x67\x65", MoMessages::showMessage(MoMessages::REQUIRED_FIELDS), "\105\x52\x52\x4f\122");
        return;
        ms:
        update_mo_option("\143\x6f\x6d\160\x61\156\171\x5f\x6e\x61\155\145", $eT);
        update_mo_option("\146\151\162\163\x74\137\156\x61\x6d\x65", $qk);
        update_mo_option("\154\141\x73\164\137\156\x61\155\x65", $cT);
        update_mo_option("\x61\144\x6d\x69\156\x5f\x65\155\141\151\x6c", $ZG);
        update_mo_option("\x61\144\155\151\x6e\137\x70\x61\x73\x73\167\x6f\162\x64", $L8);
        $U0 = json_decode(MocURLCall::check_customer($ZG), true);
        switch ($U0["\x73\164\141\x74\x75\163"]) {
            case "\103\x55\123\124\117\115\105\122\x5f\x4e\x4f\x54\x5f\x46\x4f\125\x4e\104":
                $this->mo_send_otp_token($ZG, '', "\105\115\x41\111\114");
                goto EC;
            default:
                $this->mo_get_current_customer($ZG, $L8);
                goto EC;
        }
        pV:
        EC:
    }
    private function mo_send_otp_token($ZG, $M9, $Ya)
    {
        $this->is_valid_request();
        $U0 = json_decode(MocURLCall::mo_send_otp_token($Ya, $ZG, $M9), true);
        if (strcasecmp($U0["\163\x74\x61\x74\x75\163"], "\x53\125\x43\x43\105\x53\123") === 0) {
            goto AD;
        }
        update_mo_option("\162\x65\147\151\163\x74\162\141\x74\151\157\x6e\137\x73\164\141\x74\165\163", "\115\x4f\137\117\x54\120\137\x44\105\x4c\x49\x56\x45\x52\105\x44\137\106\101\111\x4c\125\122\x45");
        do_action("\155\157\137\x72\x65\x67\151\x73\164\162\141\164\151\x6f\x6e\x5f\163\x68\157\167\x5f\x6d\145\x73\163\141\147\145", MoMessages::showMessage(MoMessages::ERR_OTP), "\105\122\122\117\x52");
        goto uD;
        AD:
        update_mo_option("\x74\162\x61\x6e\x73\x61\x63\x74\x69\x6f\156\x49\x64", $U0["\x74\170\x49\x64"]);
        update_mo_option("\162\x65\x67\x69\163\164\162\141\x74\x69\x6f\156\137\163\164\x61\x74\x75\x73", "\115\117\137\117\x54\x50\x5f\x44\x45\x4c\x49\x56\x45\122\x45\x44\x5f\123\x55\103\x43\x45\123\x53");
        if ("\105\115\x41\x49\x4c" === $Ya) {
            goto WO;
        }
        do_action("\155\x6f\x5f\162\145\x67\x69\163\x74\162\x61\x74\x69\x6f\x6e\137\163\150\x6f\x77\x5f\155\145\163\163\x61\147\145", MoMessages::showMessage(MoMessages::OTP_SENT, array("\x6d\x65\x74\x68\x6f\x64" => $M9)), "\123\125\x43\103\105\x53\x53");
        goto aL;
        WO:
        do_action("\155\157\137\x72\x65\147\x69\x73\x74\x72\141\164\x69\x6f\x6e\137\163\150\x6f\167\x5f\155\145\163\x73\141\147\145", MoMessages::showMessage(MoMessages::OTP_SENT, array("\155\145\x74\x68\157\144" => $ZG)), "\123\125\x43\x43\x45\x53\x53");
        aL:
        uD:
    }
    private function mo_get_current_customer($ZG, $L8)
    {
        $U0 = MocURLCall::get_customer_key($ZG, $L8);
        $ik = json_decode($U0, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            goto ql;
        }
        update_mo_option("\141\x64\x6d\x69\156\137\145\x6d\141\x69\154", $ZG);
        update_mo_option("\166\x65\162\x69\x66\171\x5f\x63\165\163\164\157\155\145\162", "\x74\162\x75\x65");
        delete_mo_option("\156\x65\x77\x5f\x72\145\147\151\163\164\x72\141\x74\x69\157\156");
        do_action("\x6d\157\x5f\x72\x65\147\151\163\x74\162\x61\164\151\x6f\x6e\137\163\x68\157\x77\137\x6d\145\163\x73\x61\147\x65", MoMessages::showMessage(MoMessages::ACCOUNT_EXISTS), "\x45\x52\122\117\122");
        goto iI;
        ql:
        update_mo_option("\141\x64\155\x69\156\x5f\145\x6d\141\151\154", $ZG);
        update_mo_option("\141\x64\155\x69\156\x5f\160\x68\x6f\x6e\145", isset($ik["\x70\150\157\x6e\x65"]) ? $ik["\160\x68\157\x6e\145"] : null);
        $this->save_success_customer_config($ik["\151\x64"], $ik["\141\160\151\x4b\x65\x79"], $ik["\x74\157\x6b\145\x6e"], $ik["\x61\160\x70\123\145\143\x72\145\164"]);
        MoUtility::handle_mo_check_ln(false, $ik["\151\x64"], $ik["\x61\160\x69\113\145\x79"]);
        do_action("\155\157\137\x72\145\147\x69\163\164\x72\141\164\151\x6f\x6e\x5f\163\150\157\167\x5f\x6d\x65\163\163\141\147\x65", MoMessages::showMessage(MoMessages::REG_SUCCESS), "\123\125\x43\103\105\123\x53");
        iI:
    }
    private function save_success_customer_config($FL, $o1, $iv, $uF)
    {
        update_mo_option("\141\x64\155\x69\x6e\x5f\143\165\x73\x74\x6f\x6d\145\x72\x5f\x6b\145\x79", $FL);
        update_mo_option("\141\144\x6d\151\156\x5f\x61\x70\151\x5f\153\x65\171", $o1);
        update_mo_option("\143\x75\x73\164\157\x6d\145\x72\x5f\x74\x6f\x6b\145\156", $iv);
        update_mo_option("\x70\x6c\x75\x67\x69\x6e\x5f\141\143\164\151\x76\x61\x74\151\x6f\156\137\144\x61\x74\x65", gmdate("\131\55\155\x2d\144\x20\x68\x3a\151\x3a\163\x61"));
        delete_mo_option("\x76\145\162\151\146\171\137\143\165\x73\x74\x6f\x6d\145\x72");
        delete_mo_option("\x6e\x65\x77\137\x72\x65\147\151\x73\164\x72\x61\x74\x69\157\x6e");
        delete_mo_option("\x61\144\155\151\156\137\x70\x61\x73\163\x77\157\x72\x64");
    }
    private function mo_validate_otp($post)
    {
        $this->is_valid_request();
        $Ns = sanitize_text_field($post["\x6f\164\x70\137\164\x6f\x6b\x65\x6e"]);
        $ZG = get_mo_option("\141\x64\155\x69\x6e\137\x65\155\x61\151\154");
        $eT = get_mo_option("\143\x6f\x6d\160\x61\x6e\x79\x5f\156\x61\155\145");
        $L8 = get_mo_option("\x61\144\x6d\151\156\x5f\x70\x61\163\x73\167\157\x72\x64");
        if (!MoUtility::is_blank($Ns)) {
            goto N7;
        }
        update_mo_option("\162\x65\147\151\163\164\x72\141\x74\x69\157\156\x5f\163\x74\x61\x74\165\163", "\x4d\x4f\x5f\117\124\120\x5f\126\x41\x4c\111\x44\101\x54\x49\x4f\116\137\x46\x41\111\x4c\x55\122\105");
        do_action("\x6d\157\x5f\x72\145\x67\151\163\164\x72\x61\x74\x69\157\x6e\137\x73\150\157\167\137\x6d\145\163\x73\x61\147\145", MoMessages::showMessage(MoMessages::REQUIRED_OTP), "\x45\122\122\x4f\x52");
        return;
        N7:
        $U0 = json_decode(MocURLCall::validate_otp_token(get_mo_option("\164\x72\x61\x6e\x73\x61\x63\x74\151\157\x6e\111\x64"), $Ns), true);
        if (strcasecmp($U0["\x73\x74\x61\164\165\163"], "\123\x55\103\103\105\x53\x53") === 0) {
            goto dV;
        }
        update_mo_option("\162\x65\147\151\163\x74\162\x61\164\151\157\156\137\163\x74\x61\164\165\x73", "\x4d\x4f\x5f\x4f\x54\x50\x5f\x56\101\114\x49\x44\101\x54\x49\x4f\116\x5f\106\x41\111\114\125\x52\x45");
        do_action("\x6d\x6f\137\162\x65\x67\151\163\x74\x72\141\x74\151\157\156\137\x73\150\157\167\x5f\155\145\163\x73\141\147\145", MoUtility::get_invalid_otp_method(), "\105\x52\122\117\x52");
        goto jQ;
        dV:
        $ik = json_decode(MocURLCall::create_customer($ZG, $eT, $L8, $M9 = '', $qk = '', $cT = ''), true);
        if (!(strcasecmp($ik["\163\164\x61\164\x75\x73"], "\x49\x4e\126\x41\114\111\104\x5f\105\115\101\111\114\x5f\121\x55\111\x43\113\137\105\x4d\x41\111\114") === 0)) {
            goto nC;
        }
        do_action("\155\157\x5f\162\x65\147\x69\163\164\162\141\x74\151\157\x6e\137\163\x68\157\167\137\155\145\x73\x73\141\147\145", MoMessages::showMessage(MoMessages::ENTERPRIZE_EMAIL), "\105\x52\122\x4f\x52");
        nC:
        if (strcasecmp($ik["\x73\x74\141\164\x75\163"], "\103\x55\x53\x54\117\x4d\105\x52\137\125\x53\x45\x52\116\101\x4d\105\x5f\101\x4c\122\x45\101\x44\x59\137\105\130\x49\123\x54\x53") === 0) {
            goto DX;
        }
        if (strcasecmp($ik["\163\164\141\x74\x75\163"], "\x45\x4d\x41\x49\114\x5f\102\x4c\117\x43\113\x45\104") === 0 && "\x65\x72\162\157\x72\x2e\x65\156\x74\x65\162\160\x72\x69\163\x65\x2e\x65\155\141\x69\x6c" === $ik["\x6d\145\163\163\141\147\145"]) {
            goto Dw;
        }
        if (strcasecmp($ik["\163\164\x61\x74\x75\163"], "\106\101\111\x4c\x45\104") === 0) {
            goto ve;
        }
        if (strcasecmp($ik["\163\164\141\164\165\163"], "\123\x55\103\103\x45\123\123") === 0) {
            goto hK;
        }
        goto Ji;
        DX:
        $this->mo_get_current_customer($ZG, $L8);
        goto Ji;
        Dw:
        do_action("\x6d\x6f\137\162\145\x67\151\163\x74\x72\141\164\x69\157\156\x5f\163\150\157\x77\137\155\x65\x73\163\x61\147\145", MoMessages::showMessage(MoMessages::ENTERPRIZE_EMAIL), "\x45\122\122\x4f\x52");
        goto Ji;
        ve:
        do_action("\155\157\x5f\x72\145\147\x69\163\164\x72\141\164\151\x6f\156\137\x73\150\157\x77\x5f\x6d\145\163\x73\141\x67\x65", MoMessages::showMessage(MoMessages::REGISTRATION_ERROR), "\x45\x52\122\117\x52");
        goto Ji;
        hK:
        $this->save_success_customer_config($ik["\151\144"], $ik["\x61\160\151\113\145\x79"], $ik["\164\157\x6b\x65\156"], $ik["\x61\x70\x70\x53\x65\x63\162\x65\164"]);
        update_mo_option("\x72\145\147\x69\x73\164\x72\x61\x74\151\x6f\x6e\137\x73\164\141\x74\165\x73", "\x4d\x4f\137\x43\125\123\x54\117\115\x45\122\x5f\x56\x41\x4c\x49\104\x41\x54\x49\117\x4e\137\x52\105\x47\x49\123\124\x52\101\124\111\117\x4e\x5f\x43\117\x4d\120\114\105\124\105");
        update_mo_option("\145\155\141\151\x6c\137\x74\x72\141\x6e\x73\141\x63\164\x69\157\x6e\163\137\x72\x65\155\x61\x69\156\151\x6e\x67", MoConstants::EMAIL_TRANS_REMAINING);
        update_mo_option("\160\x68\x6f\x6e\145\x5f\164\x72\x61\x6e\x73\141\143\x74\x69\x6f\156\163\x5f\162\x65\155\141\151\x6e\x69\156\147", MoConstants::PHONE_TRANS_REMAINING);
        do_action("\x6d\157\x5f\162\x65\147\151\163\164\162\141\164\151\157\156\137\163\150\157\167\x5f\x6d\x65\x73\163\x61\x67\x65", MoMessages::showMessage(MoMessages::REG_COMPLETE), "\123\x55\x43\x43\x45\123\123");
        header("\x4c\x6f\x63\141\164\x69\x6f\156\72\x20\x61\x64\155\x69\x6e\56\160\x68\160\77\x70\141\147\145\x3d\x6d\x6f\x73\145\164\x74\x69\x6e\x67\163");
        Ji:
        jQ:
    }
    private function mo_send_phone_otp_token($post)
    {
        $this->is_valid_request();
        $M9 = isset($post["\160\150\x6f\156\145\x5f\x6e\x75\155\142\145\x72"]) ? sanitize_text_field(wp_unslash($post["\160\x68\157\x6e\145\x5f\156\165\155\142\145\x72"])) : '';
        $M9 = str_replace("\40", '', $M9);
        $Gt = "\57\x5b\134\53\135\x5b\x30\x2d\71\x5d\x7b\x31\54\63\x7d\x5b\x30\x2d\x39\x5d\173\x31\x30\x7d\x2f";
        if (preg_match($Gt, $M9, $aW, PREG_OFFSET_CAPTURE)) {
            goto cR;
        }
        update_mo_option("\x72\x65\x67\151\163\x74\162\141\x74\151\x6f\156\137\163\x74\x61\x74\x75\163", "\115\x4f\x5f\x4f\124\120\x5f\x44\x45\114\111\x56\105\122\105\104\137\106\101\x49\x4c\x55\x52\105");
        do_action("\x6d\x6f\x5f\x72\x65\x67\x69\x73\x74\162\x61\164\151\157\x6e\x5f\x73\x68\x6f\x77\137\155\x65\x73\x73\141\x67\145", MoMessages::showMessage(MoMessages::INVALID_SMS_OTP), "\x45\x52\122\x4f\x52");
        goto is;
        cR:
        update_mo_option("\141\144\x6d\151\156\137\160\x68\157\156\145", $M9);
        $this->mo_send_otp_token('', $M9, "\123\115\x53");
        is:
    }
    private function mo_verify_customer($post)
    {
        $this->is_valid_request();
        $ZG = sanitize_email($post["\145\155\x61\151\154"]);
        $L8 = stripslashes($post["\x70\x61\x73\x73\x77\x6f\162\144"]);
        if (!(MoUtility::is_blank($ZG) || MoUtility::is_blank($L8))) {
            goto rm;
        }
        do_action("\x6d\x6f\137\162\145\x67\x69\x73\164\x72\x61\164\x69\x6f\x6e\137\x73\x68\x6f\167\137\155\145\163\163\141\147\145", MoMessages::showMessage(MoMessages::REQUIRED_FIELDS), "\105\x52\122\x4f\x52");
        return;
        rm:
        $this->mo_get_current_customer($ZG, $L8);
    }
    private function mo_reset_password()
    {
        $this->is_valid_request();
        $ZG = get_mo_option("\x61\144\155\151\156\137\x65\155\x61\151\x6c");
        if (!$ZG) {
            goto q5;
        }
        $au = json_decode(MocURLCall::forgot_password($ZG));
        if ("\123\x55\103\x43\x45\x53\123" === $au->status) {
            goto XO;
        }
        do_action("\155\157\137\162\x65\x67\151\x73\x74\x72\141\x74\151\157\x6e\x5f\x73\x68\157\x77\137\155\145\163\x73\x61\147\145", MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), "\x45\x52\122\117\x52");
        goto sn;
        XO:
        do_action("\155\157\137\x72\x65\x67\151\163\x74\162\141\x74\x69\x6f\156\137\163\150\x6f\x77\137\155\145\x73\x73\x61\147\x65", MoMessages::showMessage(MoMessages::RESET_PASS), "\x53\125\x43\x43\105\x53\x53");
        sn:
        goto nq;
        q5:
        do_action("\155\x6f\137\x72\x65\x67\151\163\164\162\141\164\151\x6f\156\137\x73\150\x6f\167\137\155\x65\x73\163\141\147\x65", MoMessages::showMessage(MoMessages::FORGOT_PASSWORD_MESSAGE), "\x53\x55\103\x43\105\x53\x53");
        nq:
    }
    private function mo_revert_back_registration()
    {
        $this->is_valid_request();
        update_mo_option("\x72\x65\147\151\163\164\x72\141\164\x69\157\156\x5f\x73\x74\x61\164\x75\163", '');
        delete_mo_option("\156\145\167\x5f\162\x65\x67\x69\x73\x74\162\141\164\151\157\x6e");
        delete_mo_option("\166\x65\x72\151\x66\171\137\143\165\x73\164\x6f\x6d\x65\162");
        delete_mo_option("\141\x64\x6d\x69\156\x5f\145\x6d\141\x69\154");
        delete_mo_option("\x73\x6d\x73\x5f\157\x74\160\x5f\143\x6f\165\x6e\164");
        delete_mo_option("\145\155\x61\151\154\x5f\157\164\x70\137\x63\157\x75\x6e\164");
        delete_mo_option("\160\154\x75\147\151\x6e\x5f\x61\x63\164\x69\x76\x61\164\x69\157\x6e\x5f\x64\141\164\x65");
    }
    private function removeAccount()
    {
        $this->is_valid_request();
        $this->flush_cache();
        wp_clear_scheduled_hook("\x68\157\165\x72\x6c\171\x5f\163\171\x6e\x63");
        delete_mo_option("\164\162\141\x6e\163\x61\143\x74\151\157\x6e\x49\x64");
        delete_mo_option("\x61\x64\x6d\151\156\137\x70\141\x73\x73\x77\157\x72\144");
        delete_mo_option("\162\145\x67\x69\x73\164\162\x61\x74\151\157\x6e\137\x73\x74\x61\x74\165\x73");
        delete_mo_option("\141\x64\155\151\x6e\137\160\x68\x6f\x6e\145");
        delete_mo_option("\x6e\145\x77\137\162\x65\147\x69\x73\164\162\141\x74\x69\157\156");
        delete_mo_option("\x61\x64\155\151\156\137\x63\x75\x73\164\157\x6d\145\162\137\x6b\145\171");
        delete_mo_option("\x61\x64\x6d\151\156\137\x61\160\x69\137\153\x65\x79");
        delete_mo_option("\143\165\x73\x74\157\x6d\145\x72\137\164\157\x6b\x65\156");
        delete_mo_option("\166\145\162\x69\146\x79\x5f\143\165\163\x74\157\155\x65\x72");
        delete_mo_option("\155\145\163\x73\x61\147\145");
        delete_mo_option("\143\x68\145\x63\x6b\x5f\x6c\156");
        delete_mo_option("\x73\151\164\x65\137\x65\155\141\x69\x6c\137\x63\153\154");
        delete_mo_option("\145\x6d\141\x69\154\x5f\x76\x65\162\x69\146\x69\x63\141\x74\x69\157\x6e\137\x6c\153");
        update_mo_option("\166\x65\x72\x69\x66\171\x5f\143\x75\163\x74\157\x6d\x65\x72", true);
        delete_mo_option("\160\x6c\165\147\x69\x6e\137\x61\x63\x74\x69\x76\x61\164\151\157\156\x5f\144\141\164\x65");
    }
    private function flush_cache()
    {
        $k7 = GatewayFunctions::instance();
        $k7->flush_cache();
    }
    private function vlk($post)
    {
        $k7 = GatewayFunctions::instance();
        $k7->vlk($post);
    }
}
gE:
