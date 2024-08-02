<?php


namespace OTP\Addons\UmSMSNotification\Helper\Notifications;

if (defined("\x41\x42\x53\120\x41\124\x48")) {
    goto cg;
}
exit;
cg:
use OTP\Addons\UmSMSNotification\Helper\UltimateMemberSMSNotificationMessages;
use OTP\Addons\UmSMSNotification\Helper\UltimateMemberSMSNotificationUtility;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\x55\x6c\x74\x69\x6d\x61\x74\x65\115\145\155\142\x65\162\116\145\167\125\x73\x65\162\101\144\x6d\151\156\116\x6f\x74\151\x66\x69\143\x61\164\151\157\156")) {
    goto PE;
}
class UltimateMemberNewUserAdminNotification extends SMSNotification
{
    public static $instance;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\x4e\145\167\x20\x41\143\143\157\165\156\164";
        $this->page = "\x75\x6d\137\156\x65\x77\x5f\x63\165\x73\x74\157\x6d\145\x72\137\141\144\x6d\151\156\x5f\156\157\x74\151\x66";
        $this->is_enabled = false;
        $this->tool_tip_header = "\x4e\x45\127\137\125\115\137\103\x55\x53\124\117\x4d\105\122\137\x4e\117\x54\x49\106\x5f\110\x45\101\104\105\x52";
        $this->tool_tip_body = "\116\x45\127\137\x55\115\x5f\x43\x55\x53\x54\117\x4d\x45\x52\x5f\101\104\115\111\116\137\x4e\x4f\124\x49\x46\137\102\x4f\x44\131";
        $this->recipient = UltimateMemberSMSNotificationUtility::get_admin_phone_number();
        $this->sms_body = UltimateMemberSMSNotificationMessages::showMessage(UltimateMemberSMSNotificationMessages::NEW_UM_CUSTOMER_ADMIN_SMS);
        $this->default_sms_body = UltimateMemberSMSNotificationMessages::showMessage(UltimateMemberSMSNotificationMessages::NEW_UM_CUSTOMER_ADMIN_SMS);
        $this->available_tags = "\173\163\x69\164\145\55\x6e\141\x6d\145\x7d\54\x7b\165\163\145\x72\156\x61\155\145\x7d\54\173\141\x63\143\157\x75\156\x74\160\x61\147\x65\55\165\162\154\x7d\x2c\173\145\155\x61\x69\154\x7d\54\x7b\x66\151\x72\164\156\141\x6d\145\x7d\54\173\x6c\x61\163\x74\x6e\x61\x6d\145\175";
        $this->page_header = mo_("\x4e\x45\x57\x20\x41\x43\x43\117\125\116\124\40\101\104\115\x49\x4e\40\116\x4f\x54\111\106\x49\x43\x41\124\x49\117\x4e\40\x53\105\124\124\x49\x4e\107\x53");
        $this->page_description = mo_("\123\x4d\123\x20\156\x6f\164\x69\146\151\x63\141\164\151\x6f\156\163\x20\x73\x65\x74\x74\x69\156\147\x73\40\146\157\162\40\x4e\145\x77\x20\101\x63\x63\x6f\165\156\x74\40\x63\162\x65\x61\164\x69\157\x6e\x20\x53\115\x53\x20\163\x65\x6e\x74\40\x74\x6f\x20\x74\150\x65\x20\141\x64\x6d\x69\x6e\163");
        $this->notification_type = mo_("\101\144\155\151\x6e\x69\x73\164\x72\141\164\x6f\162");
        self::$instance = $this;
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto xu;
        }
        return;
        xu:
        $this->set_notif_in_session($this->page);
        $Eo = maybe_unserialize($this->recipient);
        $JG = um_user("\x75\x73\145\x72\x5f\x6c\157\147\151\x6e");
        $Q9 = um_user_profile_url();
        $qk = um_user("\146\x69\162\x73\164\x5f\x6e\x61\x6d\145");
        $cT = um_user("\x6c\141\x73\x74\137\156\141\x6d\145");
        $ZG = um_user("\165\x73\145\162\x5f\x65\x6d\141\x69\x6c");
        $Yp = array("\163\x69\x74\145\x2d\156\x61\x6d\x65" => get_bloginfo(), "\165\163\x65\162\156\x61\155\145" => $JG, "\x61\143\143\x6f\165\156\164\x70\141\x67\x65\x2d\x75\162\154" => $Q9, "\x66\151\x72\x73\x74\x6e\141\x6d\145" => $qk, "\x6c\x61\163\x74\x6e\141\155\x65" => $cT, "\x65\x6d\x61\x69\154" => $ZG);
        $Yp = apply_filters("\155\157\x5f\x75\x6d\137\156\x65\167\x5f\143\x75\x73\164\x6f\x6d\x65\162\x5f\x61\144\155\x69\x6e\x5f\x6e\157\x74\x69\x66\137\x73\x74\162\151\x6e\x67\x5f\162\145\x70\x6c\x61\x63\x65", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($Eo)) {
            goto lh;
        }
        return;
        lh:
        foreach ($Eo as $bV) {
            MoUtility::send_phone_notif($bV, $SG);
            rg:
        }
        ys:
    }
}
PE:
