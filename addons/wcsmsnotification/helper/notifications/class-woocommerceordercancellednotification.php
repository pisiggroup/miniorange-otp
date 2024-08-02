<?php


namespace OTP\Addons\WcSMSNotification\Helper\Notifications;

if (defined("\x41\102\123\x50\101\124\110")) {
    goto RQ;
}
exit;
RQ:
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnUtility;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\x57\x6f\x6f\103\x6f\x6d\x6d\x65\162\143\145\x4f\162\144\145\162\x43\141\156\143\x65\x6c\x6c\145\x64\116\157\x74\x69\x66\151\x63\141\164\x69\x6f\156")) {
    goto Au;
}
class WooCommerceOrderCancelledNotification extends SMSNotification
{
    public static $instance;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\117\162\x64\145\162\40\x43\141\156\x63\145\154\x6c\145\144";
        $this->page = "\x77\x63\x5f\x6f\x72\144\x65\x72\x5f\x63\141\156\x63\145\154\154\145\x64\x5f\156\x6f\x74\x69\x66";
        $this->is_enabled = false;
        $this->tool_tip_header = "\117\x52\104\105\x52\137\103\x41\116\x43\105\x4c\114\x45\x44\137\x4e\x4f\124\x49\x46\x5f\x48\105\101\104\x45\122";
        $this->tool_tip_body = "\x4f\x52\x44\x45\122\x5f\103\101\116\103\x45\114\x4c\x45\x44\x5f\116\117\124\x49\x46\x5f\x42\x4f\104\x59";
        $this->recipient = "\x63\165\163\x74\x6f\x6d\x65\162";
        $this->sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_CANCELLED_SMS);
        $this->default_sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_CANCELLED_SMS);
        $this->available_tags = "\173\163\151\x74\145\x2d\156\141\155\145\175\x2c\173\x6f\x72\144\x65\x72\x2d\156\165\155\142\x65\x72\x7d\54\x7b\165\163\145\162\156\x61\x6d\145\175\173\x6f\x72\144\x65\x72\x2d\x64\x61\164\x65\175";
        $this->page_header = mo_("\x4f\x52\x44\x45\122\x20\x43\x41\x4e\103\x45\114\x4c\105\x44\40\x4e\117\x54\111\x46\111\103\101\124\111\117\116\40\123\x45\124\x54\111\x4e\107\123");
        $this->page_description = mo_("\x53\x4d\123\x20\156\157\164\x69\x66\x69\x63\x61\x74\x69\x6f\156\x73\x20\x73\145\x74\164\151\156\x67\163\x20\146\x6f\162\x20\117\162\x64\x65\x72\40\x43\x61\156\x63\145\x6c\154\x61\164\x69\x6f\x6e\x20\x53\x4d\x53\40\x73\145\x6e\x74\40\x74\157\x20\164\150\145\40\x75\x73\145\x72\x73");
        $this->notification_type = mo_("\x43\x75\x73\x74\x6f\155\145\162");
        self::$instance = $this;
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto eN;
        }
        return;
        eN:
        $Cp = $rp["\x6f\162\x64\145\x72\104\x65\164\141\151\x6c\163"];
        if (!MoUtility::is_blank($Cp)) {
            goto n_;
        }
        return;
        n_:
        $this->set_notif_in_session($this->page);
        $YQ = get_userdata($Cp->get_customer_id());
        $AQ = get_bloginfo();
        $JG = MoUtility::is_blank($YQ) ? '' : $YQ->user_login;
        $bV = MoWcAddOnUtility::get_customer_number_from_order($Cp);
        $NT = $Cp->get_date_created()->date_i18n();
        $FH = $Cp->get_order_number();
        $Yp = array("\163\151\164\x65\55\156\x61\x6d\145" => $AQ, "\x75\x73\145\162\x6e\141\155\145" => $JG, "\x6f\x72\144\x65\162\x2d\144\141\x74\145" => $NT, "\x6f\162\x64\145\162\x2d\x6e\165\155\142\145\x72" => $FH);
        $Yp = apply_filters("\x6d\157\x5f\160\162\x65\x6d\151\165\155\137\164\141\147\163", $Yp, $rp);
        $Yp = apply_filters("\x6d\157\137\167\143\x5f\143\x75\x73\x74\x6f\x6d\145\162\137\157\162\x64\145\x72\137\143\141\156\x63\145\x6c\154\x65\x64\x5f\156\x6f\164\151\x66\x5f\163\x74\x72\x69\x6e\147\137\162\x65\x70\x6c\141\143\145", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($bV)) {
            goto ck;
        }
        return;
        ck:
        MoUtility::send_phone_notif($bV, $SG);
    }
}
Au:
