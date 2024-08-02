<?php


namespace OTP\Addons\WcSMSNotification\Helper\Notifications;

if (defined("\101\x42\x53\120\x41\124\110")) {
    goto NU;
}
exit;
NU:
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnUtility;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\x57\157\157\103\157\x6d\155\x65\162\x63\145\x4f\x72\x64\x65\162\x50\x72\157\x63\x65\163\163\151\156\x67\x4e\157\164\x69\x66\151\143\141\x74\151\x6f\156")) {
    goto kE;
}
class WooCommerceOrderProcessingNotification extends SMSNotification
{
    public static $instance;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\120\162\157\x63\x65\x73\163\x69\x6e\147\x20\x4f\162\x64\145\162";
        $this->page = "\x77\143\137\157\162\144\x65\162\x5f\160\x72\x6f\x63\145\163\x73\151\156\147\x5f\156\x6f\x74\x69\x66";
        $this->is_enabled = false;
        $this->tool_tip_header = "\117\122\104\x45\122\x5f\x50\x52\117\103\105\123\123\111\116\x47\137\116\117\x54\x49\x46\x5f\x48\x45\101\104\105\x52";
        $this->tool_tip_body = "\x4f\122\104\105\122\x5f\x50\122\x4f\x43\x45\123\x53\111\116\107\137\116\x4f\x54\111\106\x5f\x42\117\x44\131";
        $this->recipient = "\x63\165\163\164\x6f\x6d\145\x72";
        $this->sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::PROCESSING_ORDER_SMS);
        $this->default_sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::PROCESSING_ORDER_SMS);
        $this->available_tags = "\x7b\x73\151\164\145\55\x6e\x61\155\x65\x7d\54\x7b\157\162\144\145\162\55\x6e\x75\155\142\145\162\175\54\173\x75\x73\x65\x72\x6e\x61\155\145\175\173\x6f\162\144\145\162\55\x64\x61\x74\145\175";
        $this->page_header = mo_("\x4f\122\x44\x45\122\40\120\122\x4f\103\x45\123\123\111\x4e\107\x20\x4e\x4f\x54\x49\x46\111\x43\101\x54\x49\117\x4e\40\123\x45\124\124\x49\116\x47\123");
        $this->page_description = mo_("\x53\115\x53\x20\156\157\x74\x69\146\151\143\x61\164\x69\x6f\156\x73\x20\x73\x65\x74\164\x69\156\x67\163\40\x66\x6f\162\40\x4f\x72\x64\145\162\x20\120\x72\x6f\x63\x65\x73\x73\x69\x6e\147\40\x53\x4d\x53\x20\x73\x65\x6e\x74\40\x74\157\40\164\x68\x65\x20\165\x73\x65\162\x73");
        $this->notification_type = mo_("\103\x75\x73\x74\157\x6d\145\162");
        self::$instance = $this;
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto pf;
        }
        return;
        pf:
        $Cp = $rp["\x6f\162\144\x65\162\x44\x65\x74\141\x69\154\163"];
        if (!MoUtility::is_blank($Cp)) {
            goto MY;
        }
        return;
        MY:
        $this->set_notif_in_session($this->page);
        $YQ = get_userdata($Cp->get_customer_id());
        $AQ = get_bloginfo();
        $JG = MoUtility::is_blank($YQ) ? '' : $YQ->user_login;
        $bV = MoWcAddOnUtility::get_customer_number_from_order($Cp);
        $NT = $Cp->get_date_created()->date_i18n();
        $FH = $Cp->get_order_number();
        $Yp = array("\163\x69\x74\x65\x2d\x6e\x61\x6d\x65" => $AQ, "\165\163\145\x72\156\x61\x6d\x65" => $JG, "\157\x72\144\145\x72\55\144\x61\164\x65" => $NT, "\x6f\x72\x64\145\x72\55\156\165\155\x62\145\162" => $FH);
        $Yp = apply_filters("\x6d\x6f\x5f\x70\x72\x65\155\x69\x75\x6d\x5f\x74\x61\x67\x73", $Yp, $rp);
        $Yp = apply_filters("\x6d\x6f\x5f\x77\x63\137\143\165\163\x74\157\155\x65\x72\137\x6f\x72\144\145\x72\137\160\x72\x6f\143\x65\x73\x73\151\x6e\x67\137\x6e\x6f\x74\x69\146\x5f\163\x74\162\151\x6e\x67\x5f\162\x65\x70\x6c\141\143\145", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($bV)) {
            goto cy;
        }
        return;
        cy:
        MoUtility::send_phone_notif($bV, $SG);
    }
}
kE:
