<?php


namespace OTP\Addons\WcSMSNotification;

use OTP\Addons\WcSMSNotification\Handler\WooCommerceNotifications;
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\WooCommerceNotificationsList;
use OTP\Addons\WcSMSNotification\Helper\WooCommercePremiumTags;
use OTP\Helper\AddOnList;
use OTP\Objects\AddOnInterface;
use OTP\Objects\BaseAddOn;
use OTP\Traits\Instance;
if (defined("\x41\102\x53\x50\101\124\x48")) {
    goto yW;
}
exit;
yW:
require "\141\x75\x74\x6f\154\x6f\141\144\56\160\x68\x70";
if (class_exists("\x57\x6f\157\103\x6f\155\155\x65\162\x63\145\x53\x6d\163\x4e\157\x74\151\146\151\143\x61\164\151\157\156")) {
    goto No;
}
final class WooCommerceSmsNotification extends BaseAddon implements AddOnInterface
{
    use Instance;
    public function __construct()
    {
        parent::__construct();
        add_action("\141\x64\x6d\x69\156\x5f\145\156\x71\x75\145\165\x65\x5f\x73\x63\162\x69\x70\x74\163", array($this, "\x6d\x6f\137\x73\x6d\163\137\x6e\157\164\151\146\137\163\x65\164\164\x69\156\x67\163\137\x73\164\171\x6c\145"));
        add_action("\141\x64\x6d\x69\x6e\x5f\145\x6e\x71\165\145\x75\145\137\163\143\x72\x69\x70\x74\163", array($this, "\155\157\x5f\x73\x6d\x73\x5f\156\x6f\164\x69\146\x5f\x73\145\x74\x74\151\156\147\163\x5f\163\143\x72\x69\160\x74"));
        add_action("\155\x6f\x5f\x6f\164\x70\137\166\x65\162\x69\146\151\143\141\x74\x69\157\156\137\x64\145\154\145\164\145\x5f\x61\x64\x64\x6f\156\137\157\160\164\x69\157\x6e\163", array($this, "\x6d\157\137\163\155\x73\137\x6e\157\164\151\146\137\x64\145\154\x65\164\145\137\157\x70\x74\x69\x6f\x6e\163"));
    }
    public function mo_sms_notif_settings_style()
    {
        wp_enqueue_style("\155\157\x5f\163\155\x73\137\x6e\x6f\164\151\146\x5f\x61\144\x6d\x69\156\137\x73\x65\x74\x74\151\156\147\x73\x5f\163\164\x79\154\145", MSN_CSS_URL, array(), MSN_VERSION);
    }
    public function mo_sms_notif_settings_script()
    {
        wp_register_script("\x6d\157\137\x73\x6d\163\x5f\156\157\164\151\146\x5f\x61\144\155\x69\x6e\137\163\145\x74\164\x69\x6e\x67\163\137\163\x63\162\151\x70\164", MSN_JS_URL, array("\x6a\161\165\145\x72\x79"), MSN_VERSION, false);
        wp_localize_script("\x6d\x6f\137\x73\155\x73\x5f\156\x6f\x74\151\x66\137\141\144\155\x69\x6e\x5f\x73\145\x74\x74\151\156\x67\163\x5f\x73\x63\162\x69\x70\164", "\155\x6f\143\165\163\x74\x6f\155\x6d\163\x67", array("\x73\151\x74\145\125\x52\x4c" => admin_url()));
        wp_enqueue_script("\155\x6f\x5f\163\155\x73\x5f\x6e\157\x74\151\146\137\x61\144\155\x69\156\x5f\x73\145\x74\164\151\x6e\147\x73\137\x73\143\x72\151\160\164");
    }
    public function initialize_handlers()
    {
        $AM = AddOnList::instance();
        $gp = WooCommerceNotifications::instance();
        $AM->add($gp->getAddOnKey(), $gp);
    }
    public function initialize_helpers()
    {
        MoWcAddOnMessages::instance();
        WooCommerceNotificationsList::instance();
        $ma = MOV_DIR . "\141\144\144\x6f\x6e\x73\x2f\167\x63\x73\x6d\x73\156\157\x74\x69\146\151\x63\x61\x74\x69\x6f\x6e\57\x68\145\x6c\160\x65\162\x2f\x63\x6c\141\x73\163\55\x77\157\157\143\157\155\x6d\x65\x72\x63\x65\x70\162\145\155\151\x75\155\164\x61\x67\x73\x2e\x70\150\160";
        if (!file_exists($ma)) {
            goto x0;
        }
        WooCommercePremiumTags::instance();
        x0:
    }
    public function show_addon_settings_page()
    {
        include MSN_DIR . "\x2f\x63\157\156\x74\162\157\154\154\145\x72\163\57\155\x61\x69\x6e\x2d\x63\x6f\x6e\x74\162\157\154\154\x65\x72\56\x70\150\160";
    }
    public function mo_sms_notif_delete_options()
    {
        delete_site_option("\155\x6f\x5f\167\143\137\163\x6d\x73\x5f\156\x6f\164\151\x66\x69\143\141\x74\151\x6f\x6e\137\x73\x65\x74\x74\x69\156\147\163");
    }
}
No:
