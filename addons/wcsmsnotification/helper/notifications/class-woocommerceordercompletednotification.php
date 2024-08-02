<?php


namespace OTP\Addons\WcSMSNotification\Helper\Notifications;

if (defined("\x41\102\123\120\101\x54\x48")) {
    goto yp;
}
exit;
yp:
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnUtility;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\127\x6f\x6f\x43\x6f\155\x6d\x65\162\x63\x65\117\162\144\145\x72\103\x6f\155\160\154\x65\164\145\x64\116\x6f\164\151\x66\x69\143\x61\164\151\157\156")) {
    goto ig;
}
class WooCommerceOrderCompletedNotification extends SMSNotification
{
    public static $instance;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\x4f\x72\144\145\162\x20\x43\157\155\x70\154\145\x74\x65\x64";
        $this->page = "\x77\143\137\x6f\162\x64\145\162\x5f\143\x6f\x6d\x70\x6c\x65\164\x65\144\x5f\156\157\164\151\146";
        $this->is_enabled = false;
        $this->tool_tip_header = "\x4f\122\x44\x45\122\x5f\x43\x41\116\103\x45\114\x4c\x45\104\x5f\116\x4f\x54\x49\106\x5f\x48\x45\101\104\105\x52";
        $this->tool_tip_body = "\x4f\122\104\x45\122\x5f\103\101\x4e\103\105\114\114\x45\104\x5f\x4e\117\124\x49\106\x5f\102\x4f\x44\131";
        $this->recipient = "\143\165\163\x74\x6f\155\145\162";
        $this->sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_COMPLETED_SMS);
        $this->default_sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_COMPLETED_SMS);
        $this->available_tags = "\x7b\x73\151\x74\145\55\156\x61\155\145\175\54\173\157\x72\144\145\x72\x2d\156\165\155\142\x65\x72\x7d\54\173\x75\163\x65\162\x6e\x61\x6d\x65\x7d\173\157\x72\x64\145\x72\55\144\141\164\145\175";
        $this->page_header = mo_("\117\122\104\x45\122\40\x43\x4f\115\120\x4c\x45\124\105\x44\x20\116\117\x54\x49\106\111\103\x41\x54\111\x4f\x4e\x20\x53\x45\x54\124\x49\116\107\x53");
        $this->page_description = mo_("\x53\x4d\x53\x20\x6e\x6f\164\x69\146\x69\x63\x61\164\x69\157\x6e\x73\40\x73\x65\x74\164\151\x6e\x67\163\x20\146\157\162\40\117\x72\144\145\162\40\103\157\x6d\x70\154\x65\x74\151\x6f\156\40\123\x4d\123\x20\163\x65\156\164\40\x74\157\40\x74\150\145\x20\x75\x73\x65\x72\x73");
        $this->notification_type = mo_("\x43\x75\x73\164\x6f\x6d\x65\162");
        self::$instance = $this;
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto Rm;
        }
        return;
        Rm:
        $Cp = $rp["\x6f\x72\144\145\162\104\145\164\141\x69\x6c\163"];
        if (!MoUtility::is_blank($Cp)) {
            goto lu;
        }
        return;
        lu:
        $this->set_notif_in_session($this->page);
        $YQ = get_userdata($Cp->get_customer_id());
        $AQ = get_bloginfo();
        $JG = MoUtility::is_blank($YQ) ? '' : $YQ->user_login;
        $bV = MoWcAddOnUtility::get_customer_number_from_order($Cp);
        $NT = $Cp->get_date_created()->date_i18n();
        $FH = $Cp->get_order_number();
        $Yp = array("\x73\151\x74\145\x2d\x6e\141\x6d\x65" => $AQ, "\165\x73\145\x72\x6e\141\155\145" => $JG, "\157\162\x64\145\x72\x2d\144\141\164\x65" => $NT, "\x6f\162\x64\x65\162\x2d\156\x75\x6d\x62\x65\x72" => $FH);
        $Yp = apply_filters("\x6d\x6f\x5f\160\162\x65\x6d\151\165\155\x5f\164\141\x67\x73", $Yp, $rp);
        $Yp = apply_filters("\155\157\x5f\x77\x63\137\143\165\163\x74\x6f\x6d\145\162\x5f\x6f\162\x64\x65\162\x5f\143\x6f\155\160\x6c\x65\x74\145\144\x5f\x6e\157\x74\x69\x66\137\163\x74\162\x69\156\x67\137\x72\x65\160\154\x61\x63\145", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($bV)) {
            goto Ak;
        }
        return;
        Ak:
        MoUtility::send_phone_notif($bV, $SG);
    }
}
ig:
