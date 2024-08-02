<?php


namespace OTP\Objects;

if (defined("\101\x42\x53\x50\101\x54\x48")) {
    goto agi;
}
exit;
agi:
interface IFormHandler
{
    public function unset_otp_session_variables();
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2);
    public function handle_failed_verification($kD, $Wb, $bV, $I2);
    public function handle_form();
    public function handle_form_options();
    public function get_phone_number_selector($MI);
    public function is_login_or_social_form($GM);
    public function is_ajax_form_in_play($j4);
    public function get_phone_html_tag();
    public function get_email_html_tag();
    public function get_both_html_tag();
    public function get_form_key();
    public function get_form_name();
    public function get_otp_type_enabled();
    public function disable_auto_activation();
    public function get_phone_key_details();
    public function is_form_enabled();
    public function get_email_key_details();
    public function get_button_text();
    public function get_form_details();
    public function get_verification_type();
    public function get_form_documents();
}
