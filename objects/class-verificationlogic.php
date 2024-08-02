<?php


namespace OTP\Objects;

if (defined("\x41\102\x53\120\x41\x54\110")) {
    goto DdC;
}
exit;
DdC:
if (class_exists("\x56\x65\x72\x69\x66\x69\143\141\x74\151\x6f\x6e\x4c\157\147\x69\x63")) {
    goto asf;
}
abstract class VerificationLogic
{
    public abstract function handle_logic($kD, $Wb, $bV, $I2, $Df);
    public abstract function handle_otp_sent($kD, $Wb, $bV, $I2, $Df, $U0);
    public abstract function handle_otp_sent_failed($kD, $Wb, $bV, $I2, $Df, $U0);
    public abstract function get_otp_sent_message();
    public abstract function get_otp_sent_failed_message();
    public abstract function get_otp_invalid_format_message();
    public abstract function get_is_blocked_message();
    public abstract function handle_matched($kD, $Wb, $bV, $I2, $Df);
    public abstract function handle_not_matched($bV, $I2, $Df);
    public abstract function start_otp_verification($kD, $Wb, $bV, $I2, $Df);
    public abstract function is_blocked($Wb, $bV);
    public static function is_ajax_form()
    {
        return (bool) apply_filters("\151\163\x5f\x61\x6a\141\x78\137\x66\x6f\x72\x6d", false);
    }
}
asf:
