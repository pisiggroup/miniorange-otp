<?php


namespace OTP\Addons\UmSMSNotification\Helper;

if (defined("\x41\102\123\x50\x41\124\110")) {
    goto YS;
}
exit;
YS:
use OTP\Helper\MoUtility;
if (class_exists("\x55\154\x74\x69\x6d\x61\164\145\115\145\155\x62\145\162\x53\115\123\116\157\164\x69\x66\151\x63\141\x74\151\x6f\156\125\164\151\154\x69\164\x79")) {
    goto JG;
}
class UltimateMemberSMSNotificationUtility
{
    public static function get_admin_phone_number()
    {
        $TI = get_umsn_option("\x6e\x6f\x74\151\146\x69\x63\x61\164\x69\x6f\156\137\163\x65\164\164\151\156\x67\x73");
        if (!$TI) {
            goto s5;
        }
        $pz = $TI->get_um_new_user_admin_notif();
        $Ez = maybe_unserialize($pz->recipient);
        s5:
        return !empty($Ez) ? $Ez : '';
    }
    public static function is_addon_activated()
    {
        MoUtility::is_addon_activated();
    }
}
JG:
