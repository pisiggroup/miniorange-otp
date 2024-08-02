<?php


namespace OTP\Addons\UmSMSNotification;

use OTP\Addons\UmSMSNotification\Handler\UltimateMemberSMSNotificationsHandler;
use OTP\Addons\UmSMSNotification\Helper\UltimateMemberNotificationsList;
use OTP\Addons\UmSMSNotification\Helper\UltimateMemberSMSNotificationMessages;
use OTP\Helper\AddOnList;
use OTP\Objects\AddOnInterface;
use OTP\Objects\BaseAddOn;
use OTP\Traits\Instance;
if (defined("\x41\102\123\x50\x41\x54\110")) {
    goto aY;
}
exit;
aY:
require "\x61\165\x74\157\154\157\141\x64\56\160\x68\x70";
if (class_exists("\125\154\164\151\155\x61\164\145\x4d\145\x6d\142\x65\162\x53\x6d\x73\116\157\164\x69\x66\x69\x63\141\x74\x69\157\156")) {
    goto Jc;
}
final class UltimateMemberSmsNotification extends BaseAddon implements AddOnInterface
{
    use Instance;
    public function __construct()
    {
        parent::__construct();
        add_action("\141\x64\155\x69\x6e\x5f\x65\x6e\x71\165\145\165\145\137\x73\x63\162\x69\160\164\x73", array($this, "\x75\x6d\137\163\155\163\137\x6e\x6f\x74\151\x66\137\163\145\x74\x74\x69\156\x67\163\137\163\x74\x79\x6c\145"));
        add_action("\x6d\157\137\157\164\x70\137\166\145\x72\151\x66\x69\x63\x61\x74\x69\x6f\x6e\137\x64\145\x6c\x65\x74\x65\137\x61\x64\x64\157\x6e\x5f\157\160\164\151\157\x6e\x73", array($this, "\x75\x6d\x5f\x73\155\163\137\156\157\x74\x69\146\137\x64\x65\154\145\x74\x65\x5f\x6f\x70\164\151\x6f\156\x73"));
    }
    public function um_sms_notif_settings_style()
    {
        wp_enqueue_style("\165\x6d\x5f\x73\x6d\163\x5f\x6e\x6f\164\151\x66\137\x61\x64\x6d\151\156\137\163\145\164\x74\x69\156\147\163\137\x73\x74\171\154\x65", UMSN_CSS_URL, MOV_VERSION, true);
    }
    public function initialize_handlers()
    {
        $AM = AddOnList::instance();
        $gp = UltimateMemberSMSNotificationsHandler::instance();
        $AM->add($gp->getAddOnKey(), $gp);
    }
    public function initialize_helpers()
    {
        UltimateMemberSMSNotificationMessages::instance();
        UltimateMemberNotificationsList::instance();
    }
    public function show_addon_settings_page()
    {
        include UMSN_DIR . "\57\x63\157\x6e\x74\162\157\154\154\145\x72\x73\57\x6d\141\x69\x6e\x2d\x63\x6f\156\164\162\x6f\154\154\145\162\56\x70\x68\160";
    }
    public function um_sms_notif_delete_options()
    {
        delete_site_option("\x6d\x6f\137\x75\x6d\x5f\163\x6d\163\137\156\x6f\x74\x69\146\151\x63\141\x74\x69\x6f\x6e\137\163\145\164\164\151\x6e\x67\163");
    }
}
Jc:
