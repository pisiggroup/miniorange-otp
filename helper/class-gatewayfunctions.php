<?php


namespace OTP\Helper;

if (defined("\x41\x42\123\120\101\x54\110")) {
    goto j2k;
}
exit;
j2k:
use OTP\Objects\IGatewayFunctions;
use OTP\Objects\NotificationSettings;
use OTP\Traits\Instance;
if (class_exists("\x47\x61\164\145\x77\141\x79\x46\x75\156\x63\x74\x69\157\x6e\163")) {
    goto PyC;
}
class GatewayFunctions implements IGatewayFunctions
{
    use Instance;
    private $gateway;
    private $plugin_type_to_class = array("\x4d\x69\156\x69\x4f\x72\x61\x6e\x67\145\x47\141\164\145\x77\141\x79" => "\x4f\x54\x50\x5c\110\145\154\160\145\x72\x5c\x4d\151\x6e\151\x4f\x72\x61\156\147\145\x47\x61\164\145\167\141\x79", "\x43\165\x73\164\157\x6d\107\x61\164\x65\167\x61\x79\127\x69\164\x68\x41\144\x64\157\x6e\163" => "\117\x54\x50\134\x48\x65\x6c\160\x65\162\134\103\x75\x73\x74\157\x6d\x47\x61\x74\145\x77\141\x79\x57\x69\x74\150\101\144\x64\x6f\x6e\x73", "\x43\165\163\x74\x6f\x6d\107\x61\164\x65\x77\x61\x79\x57\151\164\x68\157\165\164\101\144\144\x6f\156\x73" => "\x4f\124\x50\x5c\110\x65\x6c\x70\145\162\x5c\x43\165\x73\x74\157\155\x47\x61\x74\x65\x77\x61\x79\x57\x69\164\x68\157\x75\x74\x41\144\144\x6f\156\x73", "\x54\167\151\x6c\x69\x6f\x47\141\164\145\x77\141\171\x57\x69\164\150\101\x64\144\157\156\163" => "\x4f\x54\120\x5c\110\145\154\x70\x65\162\x5c\x54\x77\x69\x6c\x69\157\x47\141\164\x65\167\x61\x79\x57\151\164\150\101\x64\144\x6f\156\163", "\105\x6e\164\145\x72\x70\162\x69\x73\x65\x47\141\164\x65\167\x61\x79\x57\x69\164\x68\x41\144\144\157\156\x73" => "\x4f\x54\120\x5c\110\145\x6c\160\145\x72\134\105\x6e\x74\x65\162\x70\x72\x69\163\145\x47\x61\x74\x65\167\141\x79\x57\x69\x74\150\x41\x64\x64\157\156\x73");
    public function __construct()
    {
        $rQ = $this->plugin_type_to_class[MOV_TYPE];
        $this->gateway = $rQ::instance();
    }
    public function is_mg()
    {
        return $this->gateway->is_mg();
    }
    public function loadAddons($h9)
    {
        $this->gateway->loadAddons($h9);
    }
    public function register_addons()
    {
        $this->gateway->register_addons();
    }
    public function show_addon_list()
    {
        $this->gateway->show_addon_list();
    }
    public function hourly_sync()
    {
        $this->gateway->hourly_sync();
    }
    public function custom_wp_mail_from_name($f0)
    {
        return $this->gateway->custom_wp_mail_from_name($f0);
    }
    public function flush_cache()
    {
        $this->gateway->flush_cache();
    }
    public function vlk($post)
    {
        $this->gateway->vlk($post);
    }
    public function mo_configure_sms_template($bD)
    {
        $this->gateway->mo_configure_sms_template($bD);
    }
    public function mo_configure_email_template($bD)
    {
        $this->gateway->mo_configure_email_template($bD);
    }
    public function mo_send_otp_token($Ya, $ZG, $M9, $GX = array())
    {
        return $this->gateway->mo_send_otp_token($Ya, $ZG, $M9, $GX);
    }
    public function mclv()
    {
        return $this->gateway->mclv();
    }
    public function is_gateway_config()
    {
        return $this->gateway->is_gateway_config();
    }
    public function show_configuration_page($U5)
    {
        $this->gateway->show_configuration_page($U5);
    }
    public function mo_validate_otp_token($Mi, $Ns)
    {
        return $this->gateway->mo_validate_otp_token($Mi, $Ns);
    }
    public function mo_send_notif(NotificationSettings $Hz)
    {
        return $this->gateway->mo_send_notif($Hz);
    }
    public function get_application_name()
    {
        return $this->gateway->get_application_name();
    }
    public function get_config_page_pointers()
    {
        return $this->gateway->get_config_page_pointers();
    }
}
PyC:
