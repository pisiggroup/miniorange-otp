<?php


namespace OTP\Objects;

if (defined("\101\102\123\x50\x41\124\110")) {
    goto fRP;
}
exit;
fRP:
interface IGatewayFunctions
{
    public function register_addons();
    public function show_addon_list();
    public function flush_cache();
    public function vlk($post);
    public function hourly_sync();
    public function mclv();
    public function is_gateway_config();
    public function is_mg();
    public function get_application_name();
    public function custom_wp_mail_from_name($f0);
    public function mo_configure_sms_template($bD);
    public function mo_configure_email_template($bD);
    public function show_configuration_page($U5);
    public function mo_send_otp_token($Ya, $ZG, $M9, $GX);
    public function mo_send_notif(NotificationSettings $Hz);
    public function mo_validate_otp_token($Mi, $Ns);
    public function get_config_page_pointers();
}
