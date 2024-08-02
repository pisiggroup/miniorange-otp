<?php


namespace OTP\Addons\WcSMSNotification\Helper\Notifications;

if (defined("\101\x42\123\120\x41\x54\110")) {
    goto PL;
}
exit;
PL:
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnUtility;
use OTP\Addons\WcSMSNotification\Helper\WcOrderStatus;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\x57\x6f\157\x43\157\x6d\x6d\145\x72\x63\x65\x41\144\x6d\x69\x6e\x4f\x72\x64\145\x72\163\x74\141\x74\x75\163\116\157\164\x69\x66\151\143\x61\x74\151\157\x6e")) {
    goto Bz;
}
class WooCommerceAdminOrderstatusNotification extends SMSNotification
{
    public static $instance;
    public static $statuses;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\117\162\x64\x65\162\40\x53\x74\x61\164\x75\x73";
        $this->page = "\x77\x63\x5f\x61\144\x6d\151\x6e\x5f\x6f\162\144\145\162\x5f\x73\x74\141\164\165\163\137\156\x6f\x74\151\x66";
        $this->is_enabled = false;
        $this->tool_tip_header = "\116\x45\127\x5f\117\x52\104\105\122\x5f\116\x4f\x54\x49\106\x5f\x48\x45\x41\104\x45\122";
        $this->tool_tip_body = "\116\105\x57\137\x4f\x52\x44\105\x52\x5f\116\x4f\x54\x49\x46\x5f\x42\117\x44\x59";
        $this->recipient = MoWcAddOnUtility::get_admin_phone_number();
        $this->sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ADMIN_STATUS_SMS);
        $this->default_sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ADMIN_STATUS_SMS);
        $this->available_tags = "\x7b\x73\x69\164\x65\x2d\x6e\x61\155\x65\175\x2c\173\x6f\x72\144\145\162\x2d\156\165\155\142\x65\x72\175\x2c\173\157\162\144\x65\162\55\x73\x74\x61\x74\165\163\x7d\54\x7b\165\163\x65\x72\x6e\141\x6d\x65\x7d\173\x6f\162\x64\145\x72\55\144\141\164\145\x7d";
        $this->page_header = mo_("\x4f\122\x44\105\122\x20\x41\104\115\111\116\x20\123\124\x41\124\125\123\x20\116\x4f\124\111\x46\x49\103\x41\x54\x49\x4f\116\40\123\105\x54\124\111\116\x47\x53");
        $this->page_description = mo_("\123\115\123\40\x6e\x6f\x74\x69\x66\151\143\x61\x74\151\157\156\x73\40\163\145\164\x74\x69\x6e\x67\x73\x20\146\157\x72\40\117\162\144\145\162\40\x53\x74\141\164\165\163\40\x53\115\x53\40\x73\145\x6e\164\40\164\157\40\x74\150\145\x20\x61\x64\x6d\151\156\163");
        $this->notification_type = mo_("\101\144\155\x69\156\x69\x73\164\162\x61\164\157\x72");
        self::$instance = $this;
        self::$statuses = WcOrderStatus::get_all_status();
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto A5;
        }
        return;
        A5:
        $Cp = $rp["\157\x72\x64\x65\162\104\x65\164\141\151\154\163"];
        $um = $rp["\x6e\x65\167\x5f\x73\x74\x61\x74\x75\x73"];
        if (!MoUtility::is_blank($Cp)) {
            goto Tg;
        }
        return;
        Tg:
        if (in_array($um, self::$statuses, true)) {
            goto f0;
        }
        return;
        f0:
        $this->set_notif_in_session($this->page);
        $YQ = get_userdata($Cp->get_customer_id());
        $AQ = get_bloginfo();
        $JG = MoUtility::is_blank($YQ) ? '' : $YQ->user_login;
        $Eo = maybe_unserialize($this->recipient);
        $NT = $Cp->get_date_created()->date_i18n();
        $FH = $Cp->get_order_number();
        $Yp = array("\163\x69\164\145\x2d\x6e\141\155\145" => $AQ, "\165\x73\145\162\156\x61\x6d\145" => $JG, "\157\x72\x64\145\x72\55\144\x61\x74\x65" => $NT, "\157\x72\144\x65\162\55\x6e\x75\155\x62\x65\162" => $FH, "\157\x72\x64\x65\x72\55\x73\x74\141\164\165\x73" => $um);
        $Yp = apply_filters("\x6f\162\144\145\162\137\163\164\x61\x74\x75\x73", $Yp, $rp);
        $Yp = apply_filters("\x6d\157\x5f\167\143\x5f\141\144\x6d\151\156\137\x6f\162\144\145\x72\137\156\157\164\151\146\x5f\x73\x74\x72\x69\x6e\147\x5f\162\145\x70\154\141\143\x65", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($Eo)) {
            goto Gb;
        }
        return;
        Gb:
        foreach ($Eo as $bV) {
            MoUtility::send_phone_notif($bV, $SG);
            Ms:
        }
        CR:
    }
}
Bz:
