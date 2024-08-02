<?php


namespace OTP\Handler;

if (defined("\101\x42\123\x50\101\124\x48")) {
    goto rz;
}
exit;
rz:
use OTP\Helper\FormSessionVars;
use OTP\Helper\GatewayFunctions;
use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoUtility;
use OTP\Helper\SessionUtils;
use OTP\Objects\FormSessionData;
use OTP\Objects\VerificationLogic;
use OTP\Traits\Instance;
if (class_exists("\x50\x68\157\156\x65\x56\x65\x72\x69\x66\x69\x63\x61\x74\151\x6f\x6e\x4c\157\x67\x69\143")) {
    goto Vx;
}
final class PhoneVerificationLogic extends VerificationLogic
{
    use Instance;
    public function handle_logic($kD, $Wb, $bV, $I2, $Df)
    {
        $this->checkIfUserRegistered($I2, $Df);
        $Dy = MoUtility::validate_phone_number($bV);
        $qf = MoUtility::check_for_selected_country_addon($bV);
        $WZ = MoMessages::showMessage(MoMessages::BLOCKED_COUNTRY);
        if (!$qf) {
            goto cB;
        }
        if ($this->is_ajax_form()) {
            goto ny;
        }
        miniorange_site_otp_validation_form(null, null, null, $WZ, $I2, $Df);
        goto fi;
        ny:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::COUNTRY_BLOCKED_ERROR));
        fi:
        cB:
        switch ($Dy) {
            case 0:
                $this->handle_not_matched($bV, $I2, $Df);
                goto za;
            case 1:
                $this->handle_matched($kD, $Wb, $bV, $I2, $Df);
                goto za;
        }
        Lc:
        za:
    }
    private function checkIfUserRegistered($I2, $Df)
    {
        if (MoUtility::micr()) {
            goto Yd;
        }
        $WZ = MoMessages::showMessage(MoMessages::NEED_TO_REGISTER);
        if ($this->is_ajax_form()) {
            goto f4;
        }
        miniorange_site_otp_validation_form(null, null, null, $WZ, $I2, $Df);
        goto Zl;
        f4:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        Zl:
        Yd:
    }
    public function handle_matched($kD, $Wb, $bV, $I2, $Df)
    {
        $WZ = str_replace("\x23\x23\x70\x68\157\156\145\43\43", $bV, $this->get_is_blocked_message());
        if ($this->is_blocked($Wb, $bV)) {
            goto tI;
        }
        do_action("\x6d\x6f\x5f\x67\x6c\x6f\142\x61\154\x6c\171\137\142\141\x6e\156\145\144\137\x70\150\157\x6e\145\x5f\x63\x68\x65\x63\x6b", $bV, $this->is_ajax_form(), $I2, $Df);
        $this->start_otp_verification($kD, $Wb, $bV, $I2, $Df);
        goto wD;
        tI:
        if ($this->is_ajax_form()) {
            goto G9;
        }
        miniorange_site_otp_validation_form(null, null, null, $WZ, $I2, $Df);
        goto MA;
        G9:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        MA:
        wD:
    }
    public function start_otp_verification($kD, $Wb, $bV, $I2, $Df)
    {
        $k7 = GatewayFunctions::instance();
        $OB = "\x53\x4d\123";
        $U0 = $k7->mo_send_otp_token($OB, '', $bV);
        switch ($U0["\x73\164\x61\x74\x75\x73"]) {
            case "\123\125\x43\x43\x45\x53\x53":
                $this->handle_otp_sent($kD, $Wb, $bV, $I2, $Df, $U0);
                goto GG;
            default:
                $this->handle_otp_sent_failed($kD, $Wb, $bV, $I2, $Df, $U0);
                goto GG;
        }
        Dn:
        GG:
    }
    public function handle_not_matched($bV, $I2, $Df)
    {
        $WZ = str_replace("\43\43\160\x68\157\156\145\x23\43", $bV, $this->get_otp_invalid_format_message());
        if ($this->is_ajax_form()) {
            goto Vr;
        }
        miniorange_site_otp_validation_form(null, null, null, $WZ, $I2, $Df);
        goto d6;
        Vr:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        d6:
    }
    public function handle_otp_sent_failed($kD, $Wb, $bV, $I2, $Df, $U0)
    {
        $WZ = str_replace("\43\x23\x70\150\x6f\156\x65\x23\43", $bV, $this->get_otp_sent_failed_message());
        if ($this->is_ajax_form()) {
            goto MG;
        }
        miniorange_site_otp_validation_form(null, null, null, $WZ, $I2, $Df);
        goto Hz;
        MG:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::ERROR_JSON_TYPE));
        Hz:
    }
    public function handle_otp_sent($kD, $Wb, $bV, $I2, $Df, $U0)
    {
        SessionUtils::set_phone_transaction_id($U0["\164\170\x49\144"]);
        if (!(MoUtility::micr() && MoUtility::is_mg())) {
            goto HA;
        }
        $m_ = get_mo_option("\x70\x68\157\156\x65\137\164\x72\x61\x6e\163\141\143\164\151\x6f\156\x73\x5f\x72\x65\x6d\x61\151\x6e\151\x6e\x67");
        if (!($m_ > 0 && MO_TEST_MODE === false)) {
            goto At;
        }
        update_mo_option("\x70\x68\157\156\x65\137\x74\x72\141\x6e\163\x61\143\x74\151\157\x6e\163\x5f\x72\145\x6d\x61\151\156\151\x6e\x67", $m_ - 1);
        At:
        HA:
        $WZ = str_replace("\x23\x23\x70\x68\x6f\156\145\x23\x23", $bV, $this->get_otp_sent_message());
        apply_filters("\155\x6f\x5f\163\164\x61\x72\x74\x5f\162\145\x70\157\x72\164\x69\x6e\147", $U0["\x74\170\111\x64"], $bV, $bV, $I2, $WZ, "\x4f\x54\x50\137\123\x45\x4e\x54");
        if ($this->is_ajax_form()) {
            goto AR;
        }
        miniorange_site_otp_validation_form($kD, $Wb, $bV, $WZ, $I2, $Df);
        goto kd;
        AR:
        wp_send_json(MoUtility::create_json($WZ, MoConstants::SUCCESS_JSON_TYPE));
        kd:
    }
    public function get_otp_sent_message()
    {
        $jo = get_mo_option("\163\x75\143\143\x65\163\163\x5f\x70\150\157\x6e\x65\137\x6d\145\163\163\141\x67\145", "\x6d\157\137\157\x74\x70\x5f");
        return $jo ? mo_($jo) : MoMessages::showMessage(MoMessages::OTP_SENT_PHONE);
    }
    public function get_otp_sent_failed_message()
    {
        $E6 = get_mo_option("\x65\162\x72\x6f\x72\x5f\x70\150\157\x6e\145\x5f\155\x65\163\163\141\147\145", "\x6d\x6f\x5f\x6f\164\x70\x5f");
        $E6 = $E6 ? mo_($E6) : MoMessages::showMessage(MoMessages::ERROR_OTP_PHONE);
        $E6 = apply_filters("\155\x6f\x5f\x67\x65\x74\x5f\157\x74\160\137\163\x65\x6e\x74\137\146\x61\151\154\x65\x64\x5f\x6d\145\x73\x73\141\x67\145", $E6);
        return $E6;
    }
    public function get_otp_invalid_format_message()
    {
        $He = get_mo_option("\x69\x6e\x76\x61\x6c\151\x64\137\160\150\x6f\156\145\137\155\x65\163\163\x61\x67\145", "\155\157\137\157\164\x70\x5f");
        return $He ? mo_($He) : MoMessages::showMessage(MoMessages::ERROR_PHONE_FORMAT);
    }
    public function is_blocked($Wb, $bV)
    {
        $fn = explode("\73", get_mo_option("\x62\x6c\x6f\143\153\x65\144\x5f\x70\150\157\x6e\x65\x5f\x6e\165\x6d\142\x65\x72\x73"));
        $fn = apply_filters("\x6d\x6f\137\142\x6c\x6f\143\153\145\144\x5f\160\150\x6f\x6e\145\x73", $fn, $bV);
        return in_array($bV, $fn, true);
    }
    public function get_is_blocked_message()
    {
        $Q4 = get_mo_option("\142\154\x6f\143\153\145\x64\137\160\x68\157\156\145\x5f\x6d\x65\x73\163\x61\147\x65", "\x6d\157\137\157\164\160\x5f");
        return $Q4 ? mo_($Q4) : MoMessages::showMessage(MoMessages::ERROR_PHONE_BLOCKED);
    }
}
Vx:
