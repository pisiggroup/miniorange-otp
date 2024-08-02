<?php


namespace OTP\Addons\WcSMSNotification\Helper\Notifications;

if (defined("\x41\102\123\x50\101\124\x48")) {
    goto va;
}
exit;
va:
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnUtility;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\127\x6f\157\103\x6f\155\155\145\x72\143\x65\x4f\162\144\x65\x72\x4f\156\x48\157\x6c\144\x4e\157\x74\x69\x66\151\x63\141\164\151\x6f\x6e")) {
    goto Us;
}
class WooCommerceOrderOnHoldNotification extends SMSNotification
{
    public static $instance;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\117\x72\x64\145\162\40\157\x6e\x2d\150\x6f\x6c\x64";
        $this->page = "\x77\x63\x5f\157\x72\x64\x65\162\x5f\157\156\137\150\x6f\154\x64\137\156\x6f\164\151\x66";
        $this->is_enabled = false;
        $this->tool_tip_header = "\117\x52\x44\105\122\137\117\116\x5f\x48\x4f\114\104\x5f\x4e\x4f\x54\111\106\x5f\x48\105\x41\104\x45\x52";
        $this->tool_tip_body = "\117\122\x44\105\x52\x5f\117\116\x5f\110\117\x4c\104\137\116\x4f\124\x49\106\x5f\x42\117\x44\131";
        $this->recipient = "\x63\165\163\x74\x6f\x6d\145\x72";
        $this->sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_ON_HOLD_SMS);
        $this->default_sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_ON_HOLD_SMS);
        $this->available_tags = "\173\163\151\x74\x65\x2d\x6e\x61\x6d\x65\x7d\x2c\x7b\x6f\x72\144\x65\162\55\x6e\165\x6d\x62\145\x72\x7d\x2c\x7b\x75\x73\145\162\156\x61\155\145\x7d\x7b\x6f\x72\x64\x65\x72\x2d\x64\x61\x74\x65\175";
        $this->page_header = mo_("\117\x52\x44\105\122\x20\117\116\x2d\x48\x4f\x4c\104\x20\x4e\117\x54\111\106\111\x43\x41\124\111\x4f\116\x20\x53\105\124\124\111\x4e\107\x53");
        $this->page_description = mo_("\x53\115\x53\x20\156\157\164\151\146\x69\143\141\164\151\157\x6e\163\x20\163\145\164\x74\151\156\147\163\x20\x66\x6f\x72\x20\x4f\162\x64\145\x72\x20\157\x6e\x2d\150\x6f\154\144\40\123\115\123\40\x73\x65\156\164\x20\164\157\x20\x74\150\145\x20\165\163\145\162\163");
        $this->notification_type = mo_("\103\165\163\x74\157\x6d\x65\162");
        self::$instance = $this;
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto ly;
        }
        return;
        ly:
        $Cp = $rp["\157\x72\144\x65\162\104\x65\164\x61\x69\154\x73"];
        if (!MoUtility::is_blank($Cp)) {
            goto TC;
        }
        return;
        TC:
        $this->set_notif_in_session($this->page);
        $YQ = get_userdata($Cp->get_customer_id());
        $AQ = get_bloginfo();
        $JG = MoUtility::is_blank($YQ) ? '' : $YQ->user_login;
        $bV = MoWcAddOnUtility::get_customer_number_from_order($Cp);
        $NT = $Cp->get_date_created()->date_i18n();
        $FH = $Cp->get_order_number();
        $Yp = array("\x73\151\x74\x65\x2d\156\141\x6d\x65" => $AQ, "\x75\x73\x65\162\x6e\141\155\145" => $JG, "\x6f\162\144\145\x72\x2d\144\141\164\x65" => $NT, "\x6f\x72\x64\145\x72\55\x6e\165\155\x62\x65\x72" => $FH);
        $Yp = apply_filters("\x6d\157\x5f\160\162\145\x6d\151\x75\155\137\164\141\x67\163", $Yp, $rp);
        $Yp = apply_filters("\155\x6f\x5f\x77\x63\137\143\165\x73\164\157\x6d\x65\162\x5f\157\x72\x64\145\162\137\x6f\156\x68\157\x6c\x64\x5f\x6e\x6f\x74\151\x66\137\163\x74\162\x69\156\x67\137\x72\145\160\154\141\143\145", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($bV)) {
            goto l_;
        }
        return;
        l_:
        MoUtility::send_phone_notif($bV, $SG);
    }
}
Us:
