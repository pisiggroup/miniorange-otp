<?php


namespace OTP\Addons\WcSMSNotification\Helper\Notifications;

if (defined("\101\x42\123\x50\x41\x54\x48")) {
    goto bq;
}
exit;
bq:
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\x57\157\x6f\x43\x6f\x6d\x6d\x65\x72\x63\145\116\x65\167\x43\165\x73\164\157\x6d\x65\162\116\x6f\164\x69\x66\x69\143\141\164\151\157\x6e")) {
    goto es;
}
class WooCommerceNewCustomerNotification extends SMSNotification
{
    public static $instance;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\x4e\145\x77\40\101\143\143\157\165\156\x74";
        $this->page = "\x77\143\x5f\156\x65\x77\x5f\x63\x75\x73\x74\157\155\145\x72\x5f\x6e\157\164\x69\146";
        $this->is_enabled = false;
        $this->tool_tip_header = "\x4e\105\x57\x5f\103\125\x53\x54\117\115\105\122\137\116\x4f\124\x49\x46\x5f\x48\x45\x41\x44\x45\x52";
        $this->tool_tip_body = "\116\105\127\x5f\103\x55\123\124\117\115\105\x52\x5f\x4e\117\124\x49\x46\137\x42\x4f\104\x59";
        $this->recipient = "\143\x75\x73\164\157\155\145\x72";
        $this->sms_body = get_wc_option("\x77\157\x6f\x63\x6f\155\155\x65\x72\143\x65\137\x72\x65\x67\x69\163\x74\x72\x61\x74\x69\x6f\x6e\137\147\x65\156\145\162\141\x74\x65\x5f\160\x61\x73\163\167\x6f\162\144", '') === "\x79\145\x73" ? MoWcAddOnMessages::showMessage(MoWcAddOnMessages::NEW_CUSTOMER_SMS_WITH_PASS) : MoWcAddOnMessages::showMessage(MoWcAddOnMessages::NEW_CUSTOMER_SMS);
        $this->default_sms_body = get_wc_option("\x77\157\x6f\143\x6f\x6d\x6d\145\162\x63\145\137\162\145\x67\x69\x73\x74\x72\x61\164\151\157\x6e\x5f\x67\145\156\x65\x72\x61\x74\x65\137\x70\x61\x73\x73\x77\157\162\144", '') === "\171\x65\x73" ? MoWcAddOnMessages::showMessage(MoWcAddOnMessages::NEW_CUSTOMER_SMS_WITH_PASS) : MoWcAddOnMessages::showMessage(MoWcAddOnMessages::NEW_CUSTOMER_SMS);
        $this->available_tags = "\173\x73\x69\x74\145\x2d\156\x61\155\x65\175\54\x7b\165\x73\145\162\156\141\x6d\145\175\x2c\x7b\141\143\143\157\165\x6e\164\x70\x61\x67\145\55\165\x72\154\175";
        $this->page_header = mo_("\x4e\x45\x57\40\x41\x43\x43\x4f\x55\116\124\x20\116\117\124\x49\106\x49\x43\x41\x54\x49\x4f\116\40\x53\105\124\124\111\x4e\x47\x53");
        $this->page_description = mo_("\x53\x4d\123\x20\156\x6f\164\151\146\151\143\141\x74\151\x6f\x6e\163\x20\x73\145\x74\164\151\156\147\x73\40\146\x6f\x72\40\x4e\x65\167\x20\x41\143\x63\x6f\165\x6e\x74\40\x63\162\145\141\164\x69\157\156\40\x53\x4d\123\x20\163\x65\x6e\164\40\x74\157\40\164\x68\x65\x20\165\163\x65\162\163");
        $this->notification_type = mo_("\x43\165\163\164\x6f\155\x65\x72");
        self::$instance = $this;
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto k1;
        }
        return;
        k1:
        $this->set_notif_in_session($this->page);
        $F_ = $rp["\x63\x75\163\x74\x6f\155\x65\x72\x5f\x69\x64"];
        $cP = $rp["\156\x65\167\x5f\x63\x75\x73\x74\x6f\x6d\145\x72\137\x64\141\164\x61"];
        $AQ = get_bloginfo();
        $JG = get_userdata($F_)->user_login;
        $bV = get_user_meta($F_, "\x62\151\154\x6c\151\x6e\x67\137\160\150\x6f\x6e\145", true);
        $IG = MoUtility::sanitize_check("\x62\x69\x6c\x6c\151\x6e\x67\x5f\160\x68\157\156\145", $_POST);
        $bV = MoUtility::is_blank($bV) && $IG ? $IG : $bV;
        $qt = wc_get_page_permalink("\155\171\x61\143\143\157\165\156\x74");
        $Yp = array("\x73\x69\x74\145\55\x6e\141\155\x65" => get_bloginfo(), "\x75\x73\145\x72\x6e\141\155\145" => $JG, "\x61\x63\143\157\165\156\164\160\141\147\145\x2d\x75\162\154" => $qt);
        $Yp = apply_filters("\x6e\x65\x77\x5f\143\x75\x73\164\x6f\155\x65\162", $Yp, $rp);
        $Yp = apply_filters("\x6d\157\137\x77\143\x5f\x6e\145\167\x5f\x63\165\163\x74\157\x6d\145\162\x5f\x6e\157\x74\x69\146\x5f\163\x74\162\x69\x6e\147\137\x72\145\x70\x6c\x61\x63\x65", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($bV)) {
            goto Pr;
        }
        return;
        Pr:
        MoUtility::send_phone_notif($bV, $SG);
    }
}
es:
