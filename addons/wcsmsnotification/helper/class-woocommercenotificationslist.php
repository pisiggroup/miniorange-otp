<?php


namespace OTP\Addons\WcSMSNotification\Helper;

if (defined("\x41\102\x53\120\x41\124\110")) {
    goto DD;
}
exit;
DD:
use OTP\Addons\WcSMSNotification\Helper\Notifications\WooCommerceAdminOrderstatusNotification;
use OTP\Addons\WcSMSNotification\Helper\Notifications\WooCommerceCutomerNoteNotification;
use OTP\Addons\WcSMSNotification\Helper\Notifications\WooCommerceNewCustomerNotification;
use OTP\Addons\WcSMSNotification\Helper\Notifications\WooCommerceOrderCancelledNotification;
use OTP\Addons\WcSMSNotification\Helper\Notifications\WooCommerceOrderCompletedNotification;
use OTP\Addons\WcSMSNotification\Helper\Notifications\WooCommerceOrderFailedNotification;
use OTP\Addons\WcSMSNotification\Helper\Notifications\WooCommerceOrderOnHoldNotification;
use OTP\Addons\WcSMSNotification\Helper\Notifications\WooCommerceOrderPendingNotification;
use OTP\Addons\WcSMSNotification\Helper\Notifications\WooCommerceOrderProcessingNotification;
use OTP\Addons\WcSMSNotification\Helper\Notifications\WooCommerceOrderRefundedNotification;
use OTP\Traits\Instance;
if (class_exists("\x57\x6f\157\103\157\155\x6d\x65\x72\143\x65\116\x6f\x74\x69\x66\x69\143\x61\164\x69\x6f\156\163\x4c\x69\163\164")) {
    goto qI;
}
class WooCommerceNotificationsList
{
    use Instance;
    public $wc_new_customer_notif;
    public $wc_customer_note_notif;
    public $wc_admin_order_status_notif;
    public $wc_order_on_hold_notif;
    public $wc_order_processing_notif;
    public $wc_order_completed_notif;
    public $wc_order_refunded_notif;
    public $wc_order_cancelled_notif;
    public $wc_order_failed_notif;
    public $wc_order_pending_notif;
    protected function __construct()
    {
        $this->wc_new_customer_notif = WooCommerceNewCustomerNotification::getInstance();
        $this->wc_customer_note_notif = WooCommerceCutomerNoteNotification::getInstance();
        $this->wc_admin_order_status_notif = WooCommerceAdminOrderstatusNotification::getInstance();
        $this->wc_order_on_hold_notif = WooCommerceOrderOnHoldNotification::getInstance();
        $this->wc_order_processing_notif = WooCommerceOrderProcessingNotification::getInstance();
        $this->wc_order_completed_notif = WooCommerceOrderCompletedNotification::getInstance();
        $this->wc_order_refunded_notif = WooCommerceOrderRefundedNotification::getInstance();
        $this->wc_order_cancelled_notif = WooCommerceOrderCancelledNotification::getInstance();
        $this->wc_order_failed_notif = WooCommerceOrderFailedNotification::getInstance();
        $this->wc_order_pending_notif = WooCommerceOrderPendingNotification::getInstance();
    }
    public function get_wc_new_customer_notif()
    {
        return $this->wc_new_customer_notif;
    }
    public function get_wc_customer_note_notif()
    {
        return $this->wc_customer_note_notif;
    }
    public function get_wc_admin_order_status_notif()
    {
        return $this->wc_admin_order_status_notif;
    }
    public function get_wc_order_on_hold_notif()
    {
        return $this->wc_order_on_hold_notif;
    }
    public function get_wc_order_processing_notif()
    {
        return $this->wc_order_processing_notif;
    }
    public function get_wc_order_completed_notif()
    {
        return $this->wc_order_completed_notif;
    }
    public function get_wc_order_refunded_notif()
    {
        return $this->wc_order_refunded_notif;
    }
    public function get_wc_order_cancelled_notif()
    {
        return $this->wc_order_cancelled_notif;
    }
    public function get_wc_order_failed_notif()
    {
        return $this->wc_order_failed_notif;
    }
    public function get_wc_order_pending_notif()
    {
        return $this->wc_order_pending_notif;
    }
}
qI:
