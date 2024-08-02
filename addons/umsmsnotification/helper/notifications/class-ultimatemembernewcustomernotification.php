<?php


namespace OTP\Addons\UmSMSNotification\Helper\Notifications;

if (defined("\101\102\123\120\101\x54\x48")) {
    goto cr;
}
exit;
cr:
use OTP\Addons\UmSMSNotification\Helper\UltimateMemberSMSNotificationMessages;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\125\x6c\x74\x69\x6d\x61\x74\x65\115\x65\x6d\142\x65\x72\x4e\145\167\x43\165\163\x74\157\155\145\162\116\157\164\x69\146\151\x63\x61\x74\151\157\156")) {
    goto U8;
}
class UltimateMemberNewCustomerNotification extends SMSNotification
{
    public static $instance;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\116\145\167\40\101\x63\x63\x6f\165\156\x74";
        $this->page = "\x75\155\137\156\145\x77\137\143\165\163\x74\157\x6d\145\x72\137\156\157\x74\x69\146";
        $this->is_enabled = false;
        $this->tool_tip_header = "\116\105\127\137\x55\x4d\137\x43\x55\123\124\117\115\x45\x52\x5f\x4e\117\124\111\x46\137\110\x45\101\x44\x45\122";
        $this->tool_tip_body = "\116\x45\x57\137\x55\x4d\x5f\103\x55\x53\124\117\x4d\105\x52\x5f\116\117\124\111\x46\137\102\x4f\104\x59";
        $this->recipient = "\155\157\142\x69\154\x65\x5f\156\165\x6d\142\145\162";
        $this->sms_body = UltimateMemberSMSNotificationMessages::showMessage(UltimateMemberSMSNotificationMessages::NEW_UM_CUSTOMER_SMS);
        $this->default_sms_body = UltimateMemberSMSNotificationMessages::showMessage(UltimateMemberSMSNotificationMessages::NEW_UM_CUSTOMER_SMS);
        $this->available_tags = "\173\163\x69\164\x65\55\x6e\x61\155\x65\x7d\54\x7b\x75\163\145\162\x6e\141\x6d\145\175\54\173\x61\143\143\157\165\x6e\x74\x70\x61\147\x65\x2d\x75\x72\154\x7d\54\x7b\154\157\147\151\156\55\165\162\154\175\x2c\x7b\145\155\141\x69\x6c\175\54\x7b\146\151\x72\x74\x6e\141\x6d\145\175\54\173\x6c\141\163\164\x6e\141\155\145\175";
        $this->page_header = mo_("\x4e\x45\127\40\x41\x43\x43\117\125\116\x54\40\116\117\x54\111\106\x49\103\x41\124\111\x4f\x4e\40\123\105\x54\124\111\116\107\x53");
        $this->page_description = mo_("\x53\x4d\123\x20\156\157\164\x69\146\151\x63\x61\164\x69\157\156\x73\40\x73\145\x74\x74\151\x6e\147\163\40\146\157\162\40\116\x65\167\40\x41\143\x63\157\x75\x6e\164\40\143\x72\x65\x61\x74\x69\x6f\156\x20\x53\115\x53\x20\163\145\156\164\x20\164\x6f\40\x74\x68\x65\40\165\x73\x65\162\x73");
        $this->notification_type = mo_("\x43\165\163\x74\x6f\x6d\x65\162");
        self::$instance = $this;
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto a8;
        }
        return;
        a8:
        $this->set_notif_in_session($this->page);
        $JG = um_user("\165\x73\145\x72\137\154\x6f\x67\151\156");
        $bV = $rp[$this->recipient];
        $Q9 = um_user_profile_url();
        $aB = um_get_core_page("\154\x6f\147\x69\x6e");
        $qk = um_user("\x66\x69\162\x73\164\137\156\141\155\145");
        $cT = um_user("\154\x61\163\164\137\x6e\141\155\x65");
        $ZG = um_user("\x75\x73\x65\162\137\145\x6d\141\151\x6c");
        $Yp = array("\x73\151\164\145\x2d\x6e\141\x6d\x65" => get_bloginfo(), "\165\x73\145\x72\156\x61\155\145" => $JG, "\x61\x63\143\x6f\x75\x6e\x74\x70\141\x67\x65\55\165\162\x6c" => $Q9, "\x6c\x6f\147\151\x6e\55\165\162\x6c" => $aB, "\x66\x69\x72\163\x74\x6e\x61\155\145" => $qk, "\x6c\141\x73\x74\x6e\141\x6d\145" => $cT, "\x65\155\x61\151\x6c" => $ZG);
        $Yp = apply_filters("\x6d\x6f\137\x75\155\x5f\x6e\145\167\137\x63\x75\x73\164\157\x6d\145\x72\137\156\157\x74\151\146\x5f\x73\164\162\151\x6e\x67\x5f\x72\145\x70\154\x61\x63\x65", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($bV)) {
            goto qj;
        }
        return;
        qj:
        MoUtility::send_phone_notif($bV, $SG);
    }
}
U8:
