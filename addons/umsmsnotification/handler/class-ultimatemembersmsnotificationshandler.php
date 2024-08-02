<?php


namespace OTP\Addons\UmSMSNotification\Handler;

if (defined("\101\x42\123\120\101\124\x48")) {
    goto gR;
}
exit;
gR:
use OTP\Addons\UmSMSNotification\Helper\UltimateMemberNotificationsList;
use OTP\Objects\BaseAddOnHandler;
use OTP\Traits\Instance;
use OTP\Helper\MoFormDocs;
if (class_exists("\x55\x6c\164\151\155\141\x74\145\x4d\145\x6d\x62\145\x72\x53\x4d\123\x4e\157\164\x69\146\x69\x63\141\x74\x69\157\156\163\x48\141\156\x64\x6c\145\162")) {
    goto h2;
}
class UltimateMemberSMSNotificationsHandler extends BaseAddOnHandler
{
    use Instance;
    private $notification_settings;
    protected function __construct()
    {
        parent::__construct();
        if ($this->moAddOnV()) {
            goto HI;
        }
        return;
        HI:
        $this->notification_settings = get_umsn_option("\x6e\x6f\164\x69\146\151\x63\x61\164\151\157\x6e\x5f\163\145\164\164\151\x6e\x67\x73") ? get_umsn_option("\x6e\x6f\164\151\146\x69\143\x61\164\x69\157\156\137\x73\x65\x74\164\x69\156\147\x73") : UltimateMemberNotificationsList::instance();
        add_action("\165\x6d\137\162\x65\x67\151\163\164\x72\x61\164\151\157\x6e\x5f\x63\157\155\x70\x6c\x65\164\145", array($this, "\155\157\137\163\145\156\144\137\x6e\145\167\137\143\165\163\x74\x6f\155\x65\x72\137\163\155\163\137\x6e\x6f\164\x69\x66"), 1, 2);
    }
    public function mo_send_new_customer_sms_notif($Uv, array $rp)
    {
        $this->notification_settings->get_um_new_customer_notif()->send_sms(array_merge(array("\143\x75\163\164\157\155\145\162\137\x69\144" => $Uv), $rp));
        $this->notification_settings->get_um_new_user_admin_notif()->send_sms(array_merge(array("\x63\x75\x73\x74\157\155\145\162\x5f\x69\x64" => $Uv), $rp));
    }
    private function unhook()
    {
        remove_action("\165\x6d\x5f\x72\145\147\151\x73\164\162\x61\x74\151\x6f\x6e\x5f\143\x6f\x6d\x70\154\x65\x74\x65", "\x75\155\x5f\x73\x65\156\x64\137\x72\145\147\x69\x73\164\x72\x61\164\x69\157\x6e\x5f\x6e\x6f\x74\x69\146\x69\x63\x61\164\151\x6f\x6e");
    }
    public function set_addon_key()
    {
        $this->add_on_key = "\x75\x6d\x5f\163\155\163\x5f\x6e\157\x74\151\x66\x69\143\141\x74\151\x6f\156\137\141\144\144\157\x6e";
    }
    public function set_add_on_desc()
    {
        $this->add_on_desc = mo_("\101\154\x6c\x6f\167\163\40\x79\157\x75\x72\x20\x73\151\x74\145\40\164\157\x20\x73\145\x6e\144\40\143\x75\x73\164\x6f\155\40\x53\x4d\123\x20\x6e\x6f\164\151\146\x69\143\x61\x74\151\x6f\x6e\x73\x20\164\x6f\40\171\x6f\165\162\x20\143\x75\x73\x74\x6f\x6d\145\162\x73\56" . "\x43\x6c\151\x63\153\x20\x6f\156\40\164\x68\x65\x20\x73\145\x74\164\x69\156\x67\163\40\x62\165\x74\164\x6f\x6e\x20\164\157\x20\164\x68\145\40\x72\x69\x67\150\164\40\164\x6f\x20\x73\x65\145\40\x74\150\145\x20\x6c\151\x73\164\40\157\x66\40\x6e\157\164\x69\146\x69\x63\141\x74\151\x6f\156\163\40\x74\150\x61\164\40\147\157\40\157\x75\x74\x2e");
    }
    public function set_add_on_name()
    {
        $this->addon_name = mo_("\x55\154\x74\151\x6d\141\164\145\40\115\x65\x6d\142\x65\x72\x20\123\115\123\40\116\157\164\x69\x66\151\143\141\x74\x69\157\x6e");
    }
    public function set_add_on_docs()
    {
        $this->add_on_docs = MoFormDocs::ULTIMATEMEMBER_SMS_NOTIFICATION_LINK["\147\x75\x69\144\145\114\x69\x6e\153"];
    }
    public function set_add_on_video()
    {
        $this->add_on_video = MoFormDocs::ULTIMATEMEMBER_SMS_NOTIFICATION_LINK["\166\x69\x64\145\x6f\x4c\151\x6e\x6b"];
    }
    public function set_settings_url()
    {
        $this->settings_url = add_query_arg(array("\141\144\x64\157\156" => "\165\x6d\137\156\x6f\164\x69\x66"), isset($_SERVER["\x52\105\x51\x55\105\x53\124\x5f\x55\x52\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\122\105\x51\x55\x45\x53\x54\137\125\122\111"])) : null);
    }
}
h2:
