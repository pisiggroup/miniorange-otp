<?php


namespace OTP\Addons\WcSMSNotification\Helper\Notifications;

if (defined("\101\102\123\120\x41\x54\x48")) {
    goto I2;
}
exit;
I2:
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnUtility;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\x57\x6f\157\x43\x6f\155\x6d\145\162\x63\145\117\162\144\x65\x72\x46\x61\x69\154\145\144\x4e\x6f\x74\x69\x66\x69\x63\x61\x74\151\x6f\156")) {
    goto pT;
}
class WooCommerceOrderFailedNotification extends SMSNotification
{
    public static $instance;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\x4f\x72\x64\145\x72\40\x46\141\151\154\x65\144";
        $this->page = "\167\143\x5f\157\x72\144\x65\162\x5f\x66\x61\x69\154\145\144\137\156\x6f\x74\151\x66";
        $this->is_enabled = false;
        $this->tool_tip_header = "\x4f\122\x44\x45\x52\x5f\106\x41\111\x4c\x45\104\x5f\116\x4f\x54\x49\x46\137\110\x45\x41\x44\x45\122";
        $this->tool_tip_body = "\117\122\104\x45\x52\137\x46\101\x49\114\x45\x44\x5f\116\x4f\x54\111\106\x5f\102\117\104\x59";
        $this->recipient = "\x63\165\x73\x74\x6f\155\145\162";
        $this->sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_FAILED_SMS);
        $this->default_sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ORDER_FAILED_SMS);
        $this->available_tags = "\173\163\151\x74\145\x2d\x6e\x61\x6d\x65\x7d\x2c\x7b\157\162\144\x65\x72\55\x6e\165\x6d\x62\x65\162\x7d\x2c\173\165\163\x65\162\x6e\141\155\x65\175\173\157\x72\x64\x65\162\55\144\x61\x74\x65\175";
        $this->page_header = mo_("\x4f\x52\x44\x45\x52\40\106\x41\x49\114\x45\x44\40\116\117\x54\111\x46\111\x43\x41\x54\111\117\x4e\40\x53\105\124\x54\111\x4e\x47\123");
        $this->page_description = mo_("\123\x4d\123\x20\x6e\157\x74\151\146\151\143\141\x74\x69\157\156\x73\40\x73\145\164\x74\x69\x6e\x67\163\x20\146\x6f\x72\40\x4f\162\144\145\x72\x20\146\141\x69\x6c\165\162\x65\40\123\x4d\x53\x20\163\145\156\x74\x20\164\x6f\40\164\x68\145\x20\165\x73\145\x72\x73");
        $this->notification_type = mo_("\103\165\x73\x74\x6f\x6d\x65\x72");
        self::$instance = $this;
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto rE;
        }
        return;
        rE:
        $Cp = $rp["\x6f\162\144\x65\x72\x44\x65\164\141\151\154\163"];
        if (!MoUtility::is_blank($Cp)) {
            goto xN;
        }
        return;
        xN:
        $this->set_notif_in_session($this->page);
        $YQ = get_userdata($Cp->get_customer_id());
        $AQ = get_bloginfo();
        $JG = MoUtility::is_blank($YQ) ? '' : $YQ->user_login;
        $bV = MoWcAddOnUtility::get_customer_number_from_order($Cp);
        $NT = $Cp->get_date_created()->date_i18n();
        $FH = $Cp->get_order_number();
        $Yp = array("\163\151\x74\145\x2d\x6e\x61\x6d\x65" => $AQ, "\x75\x73\x65\162\x6e\141\x6d\x65" => $JG, "\x6f\x72\x64\145\x72\x2d\x64\x61\164\145" => $NT, "\x6f\x72\x64\x65\x72\x2d\156\165\155\x62\x65\162" => $FH);
        $Yp = apply_filters("\x6d\157\137\160\162\x65\155\151\x75\155\137\164\141\x67\163", $Yp, $rp);
        $Yp = apply_filters("\x6d\x6f\x5f\167\x63\x5f\143\165\163\164\157\x6d\145\162\x5f\157\x72\144\145\162\x5f\146\x61\151\x6c\145\144\137\156\x6f\164\x69\146\x5f\x73\x74\162\x69\x6e\147\137\x72\145\x70\154\x61\x63\145", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($bV)) {
            goto CG;
        }
        return;
        CG:
        MoUtility::send_phone_notif($bV, $SG);
    }
}
pT:
