<?php


namespace OTP\Helper;

if (defined("\x41\x42\x53\120\x41\x54\x48")) {
    goto nQA;
}
exit;
nQA:
use OTP\Objects\FormSessionData;
use OTP\Objects\TransactionSessionData;
use OTP\Objects\VerificationType;
if (class_exists("\123\x65\163\163\x69\x6f\156\125\164\x69\x6c\x73")) {
    goto Vbh;
}
final class SessionUtils
{
    public static function is_otp_initialized($a6)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto e1F;
        }
        return $iG->get_is_initialized();
        e1F:
        return false;
    }
    public static function add_email_or_phone_verified($a6, $qD, $I2)
    {
        switch ($I2) {
            case VerificationType::PHONE:
                self::add_phone_verified($a6, $qD);
                goto AaZ;
            case VerificationType::EMAIL:
                self::add_email_verified($a6, $qD);
                goto AaZ;
        }
        cQ1:
        AaZ:
    }
    public static function add_email_submitted($a6, $qD)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto ZHt;
        }
        $iG->set_email_submitted($qD);
        MoPHPSessions::add_session_var($a6, $iG);
        ZHt:
    }
    public static function add_phone_submitted($a6, $qD)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto Kj1;
        }
        $iG->set_phone_submitted($qD);
        MoPHPSessions::add_session_var($a6, $iG);
        Kj1:
    }
    public static function add_email_verified($a6, $qD)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto jrH;
        }
        $iG->set_email_verified($qD);
        MoPHPSessions::add_session_var($a6, $iG);
        jrH:
    }
    public static function add_phone_verified($a6, $qD)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto VxS;
        }
        $iG->set_phone_verified($qD);
        MoPHPSessions::add_session_var($a6, $iG);
        VxS:
    }
    public static function add_status($a6, $qD, $R7)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto AEx;
        }
        if ($iG->get_is_initialized()) {
            goto u25;
        }
        return;
        u25:
        if (!(VerificationType::EMAIL === $R7)) {
            goto nwx;
        }
        $iG->set_email_verification_status($qD);
        nwx:
        if (!(VerificationType::PHONE === $R7)) {
            goto LmN;
        }
        $iG->set_phone_verification_status($qD);
        LmN:
        MoPHPSessions::add_session_var($a6, $iG);
        AEx:
    }
    public static function is_status_match($a6, $eM, $R7)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto l5y;
        }
        switch ($R7) {
            case VerificationType::EMAIL:
                return $eM === $iG->get_email_verification_status();
            case VerificationType::PHONE:
                return $eM === $iG->get_phone_verification_status();
            case VerificationType::BOTH:
                return $eM === $iG->get_email_verification_status() || $eM === $iG->get_phone_verification_status();
        }
        dBE:
        HKD:
        l5y:
        return false;
    }
    public static function is_email_verified_match($a6, $f2)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto jz2;
        }
        return $f2 === $iG->get_email_verified();
        jz2:
        return false;
    }
    public static function is_phone_verified_match($a6, $f2)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto iBo;
        }
        return $f2 === $iG->get_phone_verified();
        iBo:
        return false;
    }
    public static function set_email_transaction_id($Mi)
    {
        $BB = MoPHPSessions::get_session_var(FormSessionVars::TX_SESSION_ID);
        if ($BB instanceof TransactionSessionData) {
            goto S_c;
        }
        $BB = new TransactionSessionData();
        S_c:
        $BB->set_email_transaction_id($Mi);
        MoPHPSessions::add_session_var(FormSessionVars::TX_SESSION_ID, $BB);
    }
    public static function set_phone_transaction_id($Mi)
    {
        $BB = MoPHPSessions::get_session_var(FormSessionVars::TX_SESSION_ID);
        if ($BB instanceof TransactionSessionData) {
            goto ufa;
        }
        $BB = new TransactionSessionData();
        ufa:
        $BB->set_phone_transaction_id($Mi);
        MoPHPSessions::add_session_var(FormSessionVars::TX_SESSION_ID, $BB);
    }
    public static function get_transaction_id($I2)
    {
        $BB = MoPHPSessions::get_session_var(FormSessionVars::TX_SESSION_ID);
        if (!$BB instanceof TransactionSessionData) {
            goto EJB;
        }
        switch ($I2) {
            case VerificationType::EMAIL:
                return $BB->get_email_transaction_id();
            case VerificationType::PHONE:
                return $BB->get_phone_transaction_id();
            case VerificationType::BOTH:
                return MoUtility::is_blank($BB->get_phone_transaction_id()) ? $BB->get_email_transaction_id() : $BB->get_phone_transaction_id();
        }
        adO:
        gP8:
        EJB:
        return '';
    }
    public static function unset_session($Xt)
    {
        foreach ($Xt as $a6) {
            MoPHPSessions::unset_session($a6);
            LpG:
        }
        ujf:
    }
    public static function is_phone_submitted_and_verified_match($a6)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto m_C;
        }
        return $iG->get_phone_verified() === $iG->get_phone_submitted();
        m_C:
        return false;
    }
    public static function is_email_submitted_and_verified_match($a6)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto kd2;
        }
        return $iG->get_email_verified() === $iG->get_email_submitted();
        kd2:
        return false;
    }
    public static function set_form_or_field_id($a6, $qD)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto W_1;
        }
        $iG->set_field_or_form_id($qD);
        MoPHPSessions::add_session_var($a6, $iG);
        W_1:
    }
    public static function get_form_or_field_id($a6)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto t8q;
        }
        return $iG->get_field_or_form_id();
        t8q:
        return '';
    }
    public static function initialize_form($form)
    {
        $iG = new FormSessionData();
        MoPHPSessions::add_session_var($form, $iG->init());
    }
    public static function add_user_in_session($a6, $qD)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto RAf;
        }
        $iG->set_user_submitted($qD);
        MoPHPSessions::add_session_var($a6, $iG);
        RAf:
    }
    public static function get_user_submitted($a6)
    {
        $iG = MoPHPSessions::get_session_var($a6);
        if (!$iG instanceof FormSessionData) {
            goto EAp;
        }
        return $iG->get_user_submitted();
        EAp:
        return '';
    }
}
Vbh:
