<?php


namespace OTP\Addons\WcSMSNotification\Helper;

if (defined("\101\102\x53\x50\101\124\110")) {
    goto yi;
}
exit;
yi:
use OTP\Helper\MoUtility;
use WC_Order;
if (class_exists("\x4d\x6f\127\x63\x41\144\144\x4f\156\125\x74\151\x6c\151\x74\171")) {
    goto Hu;
}
class MoWcAddOnUtility
{
    public static function get_admin_phone_number()
    {
        $TI = get_wc_option("\156\157\164\151\x66\151\143\141\164\x69\157\x6e\137\x73\145\x74\164\151\156\x67\163");
        if (!$TI) {
            goto R3;
        }
        $pz = $TI->get_wc_admin_order_status_notif();
        $Ez = maybe_unserialize($pz->recipient);
        R3:
        return !empty($Ez) ? $Ez : '';
    }
    public static function get_customer_number_from_order($DW)
    {
        $Uv = $DW->get_user_id();
        $M9 = $DW->get_billing_phone();
        return !empty($M9) ? $M9 : get_user_meta($Uv, "\142\x69\x6c\x6c\x69\156\x67\x5f\x70\150\157\156\145", true);
    }
    public static function is_addon_activated()
    {
        MoUtility::is_addon_activated();
    }
}
Hu:
