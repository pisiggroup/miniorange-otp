<?php


namespace OTP\Addons\WcSMSNotification\Helper\Notifications;

if (defined("\101\x42\x53\120\101\124\110")) {
    goto yX;
}
exit;
yX:
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnUtility;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\127\x6f\157\103\x6f\x6d\x6d\x65\162\143\x65\117\162\x64\145\x72\120\145\x6e\144\x69\156\147\116\157\164\151\x66\151\x63\x61\x74\x69\x6f\x6e")) {
    goto FO;
}
class WooCommerceOrderPendingNotification extends SMSNotification
{
    public static $instance;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\x4f\162\x64\x65\162\40\x50\145\156\144\151\x6e\147\40\x50\x61\171\x6d\145\156\x74";
        $this->page = "\167\x63\x5f\157\x72\x64\145\x72\137\160\145\156\x64\151\156\x67\137\156\x6f\164\x69\146";
        $this->is_enabled = false;
        $this->tool_tip_header = "\117\x52\x44\x45\x52\x5f\x50\x45\x4e\104\x49\x4e\x47\x5f\116\x4f\124\111\x46\137\x48\x45\101\104\x45\122";
        $this->tool_tip_body = "\x4f\x52\x44\x45\x52\137\x50\x45\x4e\x44\x49\116\x47\x5f\116\x4f\x54\x49\x46\x5f\x42\x4f\104\131";
        $this->recipient = "\143\x75\x73\x74\157\155\145\162";
        $this->sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_PENDING_SMS);
        $this->default_sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_PENDING_SMS);
        $this->available_tags = "\x7b\163\x69\164\145\55\156\141\x6d\145\x7d\x2c\173\157\162\144\x65\162\55\x6e\165\x6d\x62\x65\x72\x7d\54\x7b\x75\163\x65\162\156\141\155\145\x7d\173\157\x72\144\145\162\55\144\x61\x74\145\x7d";
        $this->page_header = mo_("\117\x52\x44\105\122\40\120\x45\x4e\x44\111\116\x47\x20\120\x41\x59\115\x45\x4e\x54\x20\116\117\124\x49\x46\x49\x43\x41\124\111\x4f\116\x20\123\x45\x54\x54\111\116\107\x53");
        $this->page_description = mo_("\123\x4d\x53\x20\x6e\157\164\151\x66\x69\143\x61\x74\151\157\x6e\x73\x20\x73\x65\164\x74\151\x6e\x67\163\40\146\157\x72\x20\117\x72\144\x65\x72\x20\120\145\156\144\151\x6e\147\40\120\x61\x79\155\x65\156\164\x20\123\115\x53\40\163\145\156\x74\40\164\x6f\x20\x74\x68\x65\x20\165\163\145\x72\x73");
        $this->notification_type = mo_("\x43\x75\x73\x74\x6f\155\145\x72");
        self::$instance = $this;
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto cm;
        }
        return;
        cm:
        $Cp = $rp["\x6f\162\x64\145\x72\x44\145\164\x61\x69\154\x73"];
        if (!MoUtility::is_blank($Cp)) {
            goto E5;
        }
        return;
        E5:
        $this->set_notif_in_session($this->page);
        $YQ = get_userdata($Cp->get_customer_id());
        $AQ = get_bloginfo();
        $JG = MoUtility::is_blank($YQ) ? '' : $YQ->user_login;
        $bV = MoWcAddOnUtility::get_customer_number_from_order($Cp);
        $NT = $Cp->get_date_created()->date_i18n();
        $FH = $Cp->get_order_number();
        $Yp = array("\163\x69\164\145\x2d\156\x61\x6d\x65" => $AQ, "\165\x73\x65\162\x6e\141\155\x65" => $JG, "\x6f\162\144\145\x72\55\144\x61\x74\145" => $NT, "\x6f\x72\144\x65\162\x2d\156\x75\x6d\142\x65\x72" => $FH);
        $Yp = apply_filters("\x6d\157\137\160\162\x65\155\x69\165\155\x5f\164\141\x67\163", $Yp, $rp);
        $Yp = apply_filters("\x6d\x6f\x5f\167\143\x5f\143\x75\163\x74\157\155\x65\162\x5f\x6f\162\144\145\x72\x5f\x70\145\156\144\x69\x6e\147\137\x6e\157\164\x69\x66\x5f\163\x74\162\151\x6e\147\x5f\162\145\160\154\x61\143\145", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($bV)) {
            goto Z1;
        }
        return;
        Z1:
        MoUtility::send_phone_notif($bV, $SG);
    }
}
FO:
