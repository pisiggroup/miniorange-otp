<?php


namespace OTP\Addons\WcSMSNotification\Helper\Notifications;

if (defined("\101\x42\x53\120\101\124\110")) {
    goto MT;
}
exit;
MT:
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnUtility;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\x57\157\x6f\103\x6f\x6d\155\145\x72\x63\x65\x4f\x72\x64\145\x72\x52\145\x66\165\156\x64\x65\x64\116\157\164\151\x66\x69\x63\141\x74\x69\x6f\156")) {
    goto VN;
}
class WooCommerceOrderRefundedNotification extends SMSNotification
{
    public static $instance;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\x4f\162\x64\145\162\40\122\x65\146\165\156\x64\x65\x64";
        $this->page = "\167\143\x5f\x6f\162\144\145\x72\137\x72\x65\146\x75\156\144\145\144\137\x6e\x6f\164\x69\146";
        $this->is_enabled = false;
        $this->tool_tip_header = "\117\122\104\105\122\x5f\x52\x45\106\x55\116\x44\105\104\137\116\x4f\x54\111\x46\x5f\x48\105\x41\x44\105\122";
        $this->tool_tip_body = "\117\x52\x44\105\122\137\x52\105\x55\116\x44\105\104\137\x4e\117\124\x49\106\137\x42\x4f\x44\131";
        $this->recipient = "\x63\165\163\164\157\x6d\145\x72";
        $this->sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_REFUNDED_SMS);
        $this->default_sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_REFUNDED_SMS);
        $this->available_tags = "\173\x73\x69\164\145\55\x6e\x61\155\145\175\54\173\x6f\162\144\x65\x72\55\x6e\x75\x6d\142\x65\162\175\54\173\x75\163\145\162\x6e\x61\155\145\175\173\x6f\162\144\145\x72\55\x64\141\x74\145\x7d";
        $this->page_header = mo_("\x4f\122\x44\105\x52\40\x52\x45\x46\125\116\104\x45\104\x20\x4e\x4f\124\x49\x46\x49\103\x41\124\111\117\x4e\x20\123\x45\124\124\x49\x4e\x47\123");
        $this->page_description = mo_("\123\115\123\40\x6e\x6f\x74\151\146\151\143\141\x74\x69\157\156\x73\x20\x73\145\164\164\151\156\147\163\40\146\157\x72\40\x4f\162\144\145\162\x20\122\145\x66\x75\x6e\144\145\144\40\x53\115\x53\x20\163\145\x6e\x74\40\164\x6f\x20\164\150\145\x20\x75\x73\145\162\163");
        $this->notification_type = mo_("\x43\165\x73\164\157\155\145\162");
        self::$instance = $this;
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto yC;
        }
        return;
        yC:
        $Cp = $rp["\157\162\x64\x65\162\x44\x65\164\141\151\154\163"];
        if (!MoUtility::is_blank($Cp)) {
            goto sA;
        }
        return;
        sA:
        $this->set_notif_in_session($this->page);
        $YQ = get_userdata($Cp->get_customer_id());
        $AQ = get_bloginfo();
        $JG = MoUtility::is_blank($YQ) ? '' : $YQ->user_login;
        $bV = MoWcAddOnUtility::get_customer_number_from_order($Cp);
        $NT = $Cp->get_date_created()->date_i18n();
        $FH = $Cp->get_order_number();
        $Yp = array("\x73\151\164\145\x2d\x6e\x61\155\145" => $AQ, "\x75\x73\145\x72\156\141\x6d\x65" => $JG, "\157\x72\x64\145\x72\55\144\141\164\145" => $NT, "\x6f\x72\x64\145\162\55\156\165\x6d\x62\x65\162" => $FH);
        $Yp = apply_filters("\x6d\x6f\137\x70\162\x65\155\x69\165\x6d\x5f\x74\x61\147\x73", $Yp, $rp);
        $Yp = apply_filters("\x6d\x6f\x5f\167\x63\x5f\x63\165\163\x74\157\155\145\x72\x5f\x6f\162\144\145\162\137\x72\x65\146\165\156\x64\145\144\x5f\156\x6f\164\151\146\137\163\x74\x72\x69\156\x67\137\162\x65\x70\154\x61\143\145", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($bV)) {
            goto ZV;
        }
        return;
        ZV:
        MoUtility::send_phone_notif($bV, $SG);
    }
}
VN:
