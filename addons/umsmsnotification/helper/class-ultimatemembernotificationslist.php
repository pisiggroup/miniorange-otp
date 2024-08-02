<?php


namespace OTP\Addons\UmSMSNotification\Helper;

if (defined("\x41\102\123\120\x41\124\110")) {
    goto tY;
}
exit;
tY:
use OTP\Addons\UmSMSNotification\Helper\Notifications\UltimateMemberNewCustomerNotification;
use OTP\Addons\UmSMSNotification\Helper\Notifications\UltimateMemberNewUserAdminNotification;
use OTP\Traits\Instance;
if (class_exists("\x55\x6c\x74\151\155\x61\x74\x65\115\x65\155\x62\145\x72\x4e\157\x74\x69\x66\151\143\141\164\x69\x6f\x6e\163\x4c\151\163\x74")) {
    goto oo;
}
class UltimateMemberNotificationsList
{
    public $um_new_customer_notif;
    public $um_new_user_admin_notif;
    use Instance;
    protected function __construct()
    {
        $this->um_new_customer_notif = UltimateMemberNewCustomerNotification::getInstance();
        $this->um_new_user_admin_notif = UltimateMemberNewUserAdminNotification::getInstance();
    }
    public function get_um_new_customer_notif()
    {
        return $this->um_new_customer_notif;
    }
    public function get_um_new_user_admin_notif()
    {
        return $this->um_new_user_admin_notif;
    }
}
oo:
