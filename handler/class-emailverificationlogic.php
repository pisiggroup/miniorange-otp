<?php


namespace OTP\Handler;

if (defined("\x41\x42\123\120\101\x54\x48")) {
    goto I_;
}
exit;
I_:
use OTP\Helper\FormSessionVars;
use OTP\Helper\GatewayFunctions;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\VerificationLogic;
use OTP\Traits\Instance;
if (class_exists("\x45\x6d\x61\x69\154\126\145\x72\151\146\151\x63\x61\x74\151\x6f\156\x4c\157\x67\x69\143")) {
    goto hy;
}
final class EmailVerificationLogic extends VerificationLogic
{
    use Instance;
    public function handle_logic($kD, $Wb, $bV, $I2, $Df)
    {
        $this->checkIfUserRegistered($I2, $Df);
        if (is_email($Wb)) {
            goto Dz;
        }
        $this->handle_not_matched($Wb, $I2, $Df);
        goto k3;
        Dz:
        $this->handle_matched($kD, $Wb, $bV, $I2, $Df);
        k3:
    }
    private function checkIfUserRegistered($I2, $Df)
    {
        if (MoUtility::micr()) {
            goto V9;
        }
        $WZ = MoMessages::showMessage(MoMessages::NEED_TO_REGISTER);
        if ($this->is_ajax_form()) {
            goto cF;
        }
        miniorange_site_otp_validation_form(null, null, null, $WZ, $I2, $Df);
        goto a6;
        cF:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        a6:
        V9:
    }
    public function handle_matched($kD, $Wb, $bV, $I2, $Df)
    {
        $WZ = str_replace("\x23\43\145\x6d\x61\x69\x6c\x23\x23", $Wb, $this->get_is_blocked_message());
        if ($this->is_blocked($Wb, $bV)) {
            goto xb;
        }
        $this->start_otp_verification($kD, $Wb, $bV, $I2, $Df);
        goto Jj;
        xb:
        if ($this->is_ajax_form()) {
            goto Bt;
        }
        miniorange_site_otp_validation_form(null, null, null, $WZ, $I2, $Df);
        goto Uf;
        Bt:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        Uf:
        Jj:
    }
    public function handle_not_matched($Wb, $I2, $Df)
    {
        $WZ = str_replace("\43\43\145\155\141\151\154\43\43", $Wb, $this->get_otp_invalid_format_message());
        if ($this->is_ajax_form()) {
            goto Is;
        }
        miniorange_site_otp_validation_form(null, null, null, $WZ, $I2, $Df);
        goto bH;
        Is:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        bH:
    }
    public function start_otp_verification($kD, $Wb, $bV, $I2, $Df)
    {
        $k7 = GatewayFunctions::instance();
        $U0 = $k7->mo_send_otp_token("\x45\115\101\111\114", $Wb, '');
        switch ($U0["\163\x74\141\164\165\x73"]) {
            case "\123\x55\103\x43\x45\123\x53":
                $this->handle_otp_sent($kD, $Wb, $bV, $I2, $Df, $U0);
                goto yR;
            default:
                $this->handle_otp_sent_failed($kD, $Wb, $bV, $I2, $Df, $U0);
                goto yR;
        }
        rR:
        yR:
    }
    public function handle_otp_sent($kD, $Wb, $bV, $I2, $Df, $U0)
    {
        SessionUtils::set_email_transaction_id($U0["\x74\x78\x49\144"]);
        if (!(MoUtility::micr() && MoUtility::is_mg())) {
            goto SX;
        }
        $yU = get_mo_option("\145\x6d\141\151\x6c\137\x74\x72\x61\x6e\x73\x61\143\164\151\x6f\156\163\137\x72\x65\x6d\x61\151\156\x69\x6e\x67");
        if (!($yU > 0 && MO_TEST_MODE === false)) {
            goto h3;
        }
        update_mo_option("\x65\x6d\x61\151\154\137\x74\x72\x61\x6e\x73\141\x63\x74\x69\157\156\163\x5f\162\145\155\x61\151\x6e\x69\x6e\x67", $yU - 1);
        h3:
        SX:
        $WZ = str_replace("\x23\43\145\155\x61\151\x6c\x23\43", $Wb, $this->get_otp_sent_message());
        apply_filters("\x6d\x6f\x5f\163\x74\141\162\x74\x5f\162\x65\160\157\x72\164\x69\x6e\x67", $U0["\164\x78\111\144"], $Wb, $Wb, $I2, $WZ, "\117\124\120\137\x53\x45\116\124");
        if ($this->is_ajax_form()) {
            goto j1;
        }
        miniorange_site_otp_validation_form($kD, $Wb, $bV, $WZ, $I2, $Df);
        goto Zy;
        j1:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::SUCCESS_JSON_TYPE));
        Zy:
    }
    public function handle_otp_sent_failed($kD, $Wb, $bV, $I2, $Df, $U0)
    {
        $WZ = str_replace("\x23\x23\145\x6d\x61\151\x6c\x23\43", $Wb, $this->get_otp_sent_failed_message());
        if ($this->is_ajax_form()) {
            goto AV;
        }
        miniorange_site_otp_validation_form(null, null, null, $WZ, $I2, $Df);
        goto J9;
        AV:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        J9:
    }
    public function get_otp_sent_message()
    {
        $Rc = get_mo_option("\x73\x75\143\x63\145\163\x73\137\x65\155\141\x69\x6c\x5f\155\145\163\163\141\x67\145", "\155\x6f\137\x6f\x74\x70\137");
        return $Rc ? mo_($Rc) : MoMessages::showMessage(MoMessages::OTP_SENT_EMAIL);
    }
    public function get_otp_sent_failed_message()
    {
        $E6 = get_mo_option("\145\x72\162\x6f\x72\x5f\145\155\141\151\154\137\155\145\x73\163\141\x67\145", "\x6d\157\x5f\157\x74\x70\x5f");
        return $E6 ? mo_($E6) : MoMessages::showMessage(MoMessages::ERROR_OTP_EMAIL);
    }
    public function is_blocked($Wb, $bV)
    {
        $iF = explode("\73", get_mo_option("\142\x6c\157\x63\153\145\144\x5f\x64\157\x6d\141\x69\x6e\x73"));
        $iF = apply_filters("\x6d\157\x5f\x62\x6c\x6f\143\153\x65\144\137\145\x6d\141\x69\154\x5f\144\x6f\155\141\x69\156\x73", $iF);
        return in_array(MoUtility::get_domain($Wb), $iF, true);
    }
    public function get_is_blocked_message()
    {
        $Tg = get_mo_option("\x62\x6c\x6f\143\x6b\145\144\137\145\155\x61\x69\x6c\137\155\145\163\x73\141\147\145", "\155\x6f\x5f\157\164\160\x5f");
        return $Tg ? mo_($Tg) : MoMessages::showMessage(MoMessages::ERROR_EMAIL_BLOCKED);
    }
    public function get_otp_invalid_format_message()
    {
        $WZ = get_mo_option("\x69\x6e\x76\141\154\151\144\x5f\145\x6d\x61\151\x6c\137\x6d\x65\x73\163\x61\x67\145", "\155\x6f\x5f\157\x74\x70\137");
        return $WZ ? mo_($WZ) : MoMessages::showMessage(MoMessages::ERROR_EMAIL_FORMAT);
    }
}
hy:
